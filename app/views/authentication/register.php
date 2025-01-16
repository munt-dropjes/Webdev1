<div class="content">
    <div class="row">
        <div class="col">
            <h2>Registeren</h2>
            <?php 
                if(isset($error)) {?>
                    <div class="error-label">
                        <?= $error ?>
                    </div>
                <?}
            ?>
            <form action="register" method="POST">
                <div class="mb-1">
                    <label for="name" class="form-label">Naam</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Emailadres</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Wachtwoord</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Wachtwoord tweede keer</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                </div>
                <div class="mb-3">
                    <p class="text-danger"><?php echo $error ?? ''; ?></p>
                </div>
                <button type="submit" class="btn btn-primary">Sign up</button>
                Already have an account? <a href="/login">Log in</a>
            </form>
        </div>
    </div>
</div>