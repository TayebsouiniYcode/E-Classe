<?php
include '../src/controllers/config.php';
if(isset($_COOKIE['cUsername']) && isset($_COOKIE['cPassword']) && !empty($_COOKIE['cUsername']) && !empty($_COOKIE['cPassword'])) {
    $result = login($_COOKIE['cUsername'], $_COOKIE['cPassword']);
    if ($result != null) {
        header('location: ../view/dashboard.php');
    }
}

include '../view/components/header.php';
$msg = false;
if(isset($_GET['msg'])) {
    $msg = $_GET['msg'];
}
?>
<main class="d-flex justify-content-start align-items-center bg-primary vh-100">
    <div class="container-fluid">
        <div class="">
            <div class="d-flex justify-content-center">
                <div class="shadow rounded-3 bg-light p-4 w-sm-50 w-md-25">
                    <div class="text-start ms-5">
                        <h1 class="v-line h3">
                            E-Classe
                        </h1>
                    </div>
                    <div class="text-center">
                        <h2 class="text-uppercase h4 mt-4">Sign In</h2>
                        <?php
                            if(!$msg) : ?>
                                <p class="text-muted small">Enter your credentials to access your account </p>
                            <?php endif; if ($msg == 1)  : ?>
                                <div class="alert alert-warning small" role="alert">
                                    Votre compte est désactivé :)
                                </div>
                        <?php endif; ?>
                        <?php if ($msg == 2 ) : ?>
                            <div class="alert alert-danger small" role="alert">
                                Le nom d'utilisateur ou le mot de passe est incorrect !!
                            </div>
                        <?php endif; ?>
                    </div>
                    <form method="POST" action="../src/controllers/utilisateur/loginCheck.php">
                        <div class="p-4">
                            <div class="mb-3">
                                <label for="Username" class="form-label">Username <span class="text-danger">*</span></label>
                                <input type="text" required class="form-control" placeholder="Username" id="Username" name="Username" value="<?php if(isset($_COOKIE['cUsername'])) { echo $_COOKIE['cUsername']; } ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Password" class="form-label">Password <span class="text-danger">*</span></label>
                                <input type="Password" required class="form-control" placeholder="Enter your password" id="Password" name="Password" value="<?php if(isset($_COOKIE['cPassword'])) { echo $_COOKIE['cPassword']; } ?>">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="rememberMe" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Remember Me
                                </label>
                            </div>
                            <button class="btn btn-primary text-center mt-2 w-100" type="submit" style="background-color: #00C1FE">
                                Login
                            </button>
                            <p class="text-center mt-2 text-muted">
                                Forgot your password?
                                <a href="#">Reset password</a>
                            </p>
                            <p class="text-center mt-2 text-muted">
                                Create an account?
                                <a href="./signup.php">click here</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include '../view/components/footer.php' ?>