<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <form action="processa.php" method="POST">
            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" id="form1Example1" class="form-control" name="email"/>
                <label class="form-label" for="form1Example1">Email address</label>
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" id="form1Example2" class="form-control" name="senha"/>
                <label class="form-label" for="form1Example2">Password</label>
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                        <label class="form-check-label" for="form1Example3"> Remember me </label>
                    </div>
                </div>

                <div class="col">
                    <!-- Simple link -->
                    <a href="#!">Forgot password?</a>
                </div>
            </div>

            <!-- Submit button -->
            <!--<button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block">Sign in</button>-->
            <input type="submit" class="bnt bnt-primary bnt-block mb-4" value="Sign in">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>