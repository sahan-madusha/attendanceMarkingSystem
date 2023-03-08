<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>IIT Student LMS - Login Page</title>
</head>
<body class="overflow-hidden">

    <!--loging page-->
    <div class="d-flex flex-row" >

        <!--side image bar-->
        <div class="col-lg-7 d-none d-lg-block">
            <img class="loginImg w-100" src="./src/img/loginStdImg.jpg" alt="student image">

            <div class="position-absolute loginUserText mx-3">
                <p class="my-0">You are not logged in.</p>
                <a class="my-0" href="#">Home</a>
            </div>
        </div>

        <!--login-->
        <div class="col-lg-5 col-12 d-flex justify-content-center mx-auto my-5">
           <div>
                <h1 class="LoginPageHead"><i class="bi bi-mortarboard-fill"></i> IIT LMS</h1>
                <hr>

                <div>
                    <h3 class="LoginPageHead">Sign In</h3>
                    
                    <div>
                        <input class="fs-5 py-1 px-4 my-3 loginInput" type="text" placeholder="Username / email">
                        <br>
                        <input class="fs-5 py-1 px-4 my-3 loginInput" type="text" placeholder="Password">

                        <div class="d-flex flex-row align-items-baseline">
                            <input type="checkbox" name="" id="">
                            <p class="ms-1">Remember username</p>
                            <p class="ms-3"><a href="#">Forgot Password?</a></p>
                        </div>

                        <button class="loginBtn w-100 px-2 py-1 my-3">log in </button>
                    </div>

                    <div class="my-4">
                        <p>Log in using your account on:</p>
                        <a href="#" title="Google" class="btn btn-transparent border border-primary btn-block w-100">
                            <img class="mx-3" src="https://accounts.google.com/favicon.ico" alt="" width="24" height="24">Google
                        </a>
                    </div>
                </div>
           </div>
        </div>
    </div>    

</body>
</html>