<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleIndex.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <section id="content">
            <form action="processa.php" method="POST">
                <h1>Login Form</h1>
                <div>
                    <input type="text" placeholder="Username" required="" id="username" name="cxemail" />
                </div>
                <div>
                    <input type="password" placeholder="Password" required="" id="password" name="cxsenha" />
                </div>
                <div>
                    <input type="submit" value="Log in" />
                </div>
            </form><!-- form -->
        </section><!-- content -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>