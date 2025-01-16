<?php

namespace Services;

use Repositories\DocumentRepository;
use Models\Document;

class DocumentService
{
    private $documentRepository;
    private const DOCUMENT_UPLOAD_PATH = "../documenten/";
    function __construct()
    {
        $this->documentRepository = new DocumentRepository();
    }

    function addDocument(array $data)
    {
        $data['document'] = $this->uploadDocument($data);
        $document = $this->createDocument($data);

        $this->documentRepository->addDocument($document);
    }

    function deleteDocument(array $data)
    {
        $this->documentRepository->deleteDocument($data['id']);
    }

    function updateDocument(array $data)
    {
        $data['document'] = $this->uploadDocument($data);
        $document = $this->createDocument($data);

        $this->documentRepository->updateDocument($document);
    }

    private function uploadDocument(array $data) : string
    {
        try { 
            $target_dir = DOCUMENT_UPLOAD_PATH;
            $target_file = $target_dir . basename($_FILES["document"]["name"]);
            $uploadOk = 1;
            $documentFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            
            // Check if image file is a actual image or fake image
            $check = getimagesize($_FILES["document"]["tmp_name"]);
            if($check == false) {
                $uploadOk = 0;
                throw new Exception("Het bestand is geen PDF.");
            }
        
            // Check if file already exists
            if (file_exists($target_file)) {
                $uploadOk = 0;
                throw new Exception("Het bestand bestaat al.");
            }
            
            // Check file size
            if ($_FILES["document"]["size"] > 500000) {
                $uploadOk = 0;
                throw new Exception("Het bestand is te groot.");
            }
            
            // Allow certain file formats
            if($documentFileType != "pdf") {
                $uploadOk = 0;
                throw new Exception("Alleen PDF bestanden zijn toegestaan.");
            }
            
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                throw new Exception("Het bestand is niet geupload.");
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["document"]["tmp_name"], $target_file)) {
                    return $target_file;
                } else {
                    throw new Exception("Er is iets fout gegaan met het uploaden van het document.");
                }
            }
        } catch (Exception $e) {
            throw new Exception(
                "Er is iets fout gegaan met het uploaden van het document: " . $e->getMessage()
            );
        }

    }

    private function createDocument(array $data) : Document
    {
        $id = htmlspecialchars($data['id']);
        $type = htmlspecialchars($data['type']);
        $titel = htmlspecialchars($data['titel']);
        $document = htmlspecialchars($data['document']);
        $editie = htmlspecialchars($data['editie']);
        $speltak = htmlspecialchars($data['speltak']);

        return new Document($id, $type, $titel, $document, $editie, $speltak);
    }
}