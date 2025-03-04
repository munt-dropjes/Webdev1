<?php

namespace Controllers;

use Services\ExceptionService;
use Services\UserService;

class ApiController extends Controller 
{
    private $userService;
    private $exceptionService;

    public function __construct() {
        $this->userService = new UserService();
        $this->exceptionService = new ExceptionService();
    }

    public function getAll(){
        try{
            $users = $this->userService->fetchAll();
            $this->respond($users);
        } catch (\Exception $e){
            $this->exceptionService->logException($e);
            $this->respondWithError(500, $e->getMessage());
        }
    }

    public function getOne($id){
        try{
            $user = $this->userService->fetchOneById($id);

            if ($user == null) {
                $this->respondWithError(404, 'User not found');
                return;
            }

            $this->respond($user);
        } catch (\Exception $e){
            $this->exceptionService->logException($e);
            $this->respondWithError(404, $e->getMessage());
        }
    }

    public function create(){
        try{
            $user = $this->createObjectFromPostedJson('Models\User');
            $user->password = password_hash($user->password, PASSWORD_DEFAULT);
            $createdUser = $this->userService->create($user);
            $this->respond($createdUser);
        } catch (\Exception $e){
            $this->exceptionService->logException($e);
            $this->respondWithError(500, $e->getMessage());
        }
    }

    public function update($id){
        try{
            $user = $this->createObjectFromPostedJson('Models\User');
            $updatedUser = $this->userService->update($user, $id);
            $this->respond($updatedUser);
        } catch (\Exception $e){
            $this->exceptionService->logException($e);
            $this->respondWithError(500, $e->getMessage());
        }
    }

    public function delete($id){
        try{
            if ($this->userService->fetchOneById($id) == null) {
                $this->respondWithError(404, 'User not found');
                return;
            }

            $this->userService->delete($id);
            $this->respond("Succesfully deleted");
        } catch (\Exception $e){
            $this->exceptionService->logException($e);
            $this->respondWithError(500, $e->getMessage());
        }
    }

    // Helper functions
    private function respond($data){
        $this->respondWithCode(200, $data);
    }
    private function respondWithError($httpCode, $message){
        $data = array('errorMessage' => $message);
        $this->respondWithCode($httpCode, $data);
    }
    private function respondWithCode($httpCode, $data){
        header('Content-Type: application/json; charset=UTF-8');
        http_response_code($httpCode);
        echo json_encode($data);
    }
    private function createObjectFromPostedJson($className) {
        $json = file_get_contents('php://input');
        $data = json_decode($json);

        $object = new $className();
        foreach ($data as $key => $value) $object->{$key} = $value;
        return $object;
    }
}