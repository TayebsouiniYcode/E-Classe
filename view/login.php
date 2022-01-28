<?php include './components/header.php' ?>

<main class="d-flex justify-content-start align-items-center bg-primary vh-100">
    <div class="container-fluid">
        <div class="">
            <div class="d-flex justify-content-center">
                <div class="col-sm-12 col-md-8 shadow rounded-3 col-lg-4 p-4 bg-light">
                    <div class="text-start ms-5">
                        <h1 class="v-line h3">
                            E-Classe
                        </h1>
                    </div>
                    <div class="text-center">
                        <h2 class="text-uppercase h4 mt-4">Sign In</h2>
                        <p class="text-muted small">
                            Enter your credentials to access your account 
                        </p>
                    </div>
                    <form action="./dashboard.php">
                        <div class="p-4">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" placeholder="Enter your email" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="Enter your password" id="password">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
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
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include './components/footer.php' ?>