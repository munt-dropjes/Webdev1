<div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="col">
            <h2>Log in</h2>
            <form action="login" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                    <a href="/forgot-password">Forgot password?</a>
                </div>
                <div class="mb-3">
                    <p class="text-danger"><?php echo $error ?? ''; ?></p>
                </div>
                <button type="submit" class="btn btn-primary">Log in</button>
                Don't have an account? <a href="/register">Sign up</a>
            </form>
        </div>
    </div>
</div>