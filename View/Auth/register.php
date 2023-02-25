
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="<?php echo asset('assets/web/assets/css/login.css') ?>" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    </style>
</head>


<body>

    <div class="parent clearfix">
        <div class="bg-illustration">
            <img src="https://i.ibb.co/Pcg0Pk1/logo.png" alt="logo">

            <div class="burger-btn">
                <span></span>
                <span></span>
                <span></span>
            </div>

        </div>

        <div class="login">
            <div class="container">
                <h1>Sign up to access to<br />your account</h1>

                <div class="login-form">
                    <form action="<?php echo url('auth/handleRegister') ?>" method="POST">
                        <input type="email" name="email" placeholder="E-mail Address">
                        <p class="invalid"><?php if (!empty($_SESSION['error'])) {
                                                echo '*' . $_SESSION['error']['email'];
                                            } ?>
                        </p>
                        <input type="text" name="password" placeholder="Password">
                        <p class="invalid"> <?php if (!empty($_SESSION['error'])) { 
                                echo '*'.$_SESSION['error']['password'] ;
                             } ?>
                        </p>
                        <input type="text" name="password_confirmation" placeholder="Enter the Password">
                        <p class="invalid"><?php if (!empty($_SESSION['error'])) {
                                                echo '*' . $_SESSION['error']['password_confirmation'];
                                            } ?>
                        </p>
                        <select class="form-select" aria-label="Default select example" name="select">
                            <option value="1">User</option>
                            <option value="2">Employer</option>
                        </select>

                        <br>
                        <button type="submit" style="margin:auto">SIGN-UP</button>

                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>