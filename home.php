<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IIT Student LMS - Home Page</title>

    <link rel="stylesheet" href="./style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <!-- navigation bar -->
    <?php require "./nav.php" ?>

    <!--home-->
    <div class="text-center mt-5 mb-3 mx-5">
        <div class="homeText my-5">
            <h1 class="mb-4 fw-bold">My Courses</h1>
            <p><i>Use the given links below to access your programs. You can also use the "Show All My Courses" button to view all of your enrolled courses.</i></p>
            <button class="HomeBtn py-2 my-4 px-3 rounded-pill text-capitalize">show all my course</button>
        </div>

        <div class="d-flex flex-column flex-md-row mx-auto my-5 homContent">

            <div class="me-2 col-12 col-md-3 my-3">
                <div class="mx-1 cardItem1 border border-primary rounded pt-3 pb-5 px-0">
                    <img src="./src/img/notepad.png" alt="image" class="w-25 my-3">
                    <h5>L3 Foundation 2022 SEP</h5>
                    <p>Use this quick link to access the program</p>
                    <a href="#">Click to Open this Course</a>
                </div>
            </div>

            <div class="me-2 col-12 col-md-3 my-3">
                <div class="mx-1 cardItem2 border border-danger rounded pt-3 pb-5 px-0"">
                    <img src="./src/img/penImg.png" alt="image" class="w-25 my-3">
                    <h5>L3 Foundation 2022 MAY</h5>
                    <p>Use this quick link to access the program</p>
                    <a href="#">Click to Open this Course</a>
                </div>
            </div>

            <div class="me-2 col-12 col-md-3 my-3">
                <div class="mx-1 cardItem3 border border-warning rounded pt-3 pb-4 px-0">
                    <img src="./src/img/mortarboard.png" alt="image" class="w-25 my-3">
                    <h5>L5 2022/2023 SEP Professional Development</h5>
                    <p>Use this quick link to access the program</p>
                    <a href="#">Click to Open this Course</a>
                </div>
            </div>

            <div class=" col-12 col-md-3 my-3">
                <div class="mx-1 cardItem4 border border-info rounded pt-3 pb-5 px-0"">
                    <img src="./src/img/graduated.png" alt="image" class="w-25 my-3">
                    <h5>IIT Aptitude Test</h5>
                    <p>Use this quick link to access the program</p>
                    <a href="#">Click to Open this Course</a>
                </div>
            </div>
            
        </div>
    </div>

    <!--contact details-->
    <div class="text-center my-5 mb-3 mx-5 contactDetails">
        <h1 class="fw-bold mb-4">Contact us</h1>
        <i class="bi bi-envelope-at-fill fs-5 me-2"></i>
        <a href="mailto:sru@iit.ac.lk" class="fw-bold fs-4">sru@iit.ac.lk</a>
        <br><br>
        <i class="bi bi-telephone-fill fs-5 me-2"></i>
        <a href="tel:+94768800888" class="fw-bold fs-5">+94 768800888</a>
        <br><br>
        <p><i>Do you have any questions about LMS? Please contact us as we are happy to help you anytime.</i></p>
        <br>
        <a href="#"><img class="instagramIcon" src="./src/img/instagram.png" alt="inst"></a>
    </div>

    <!-- footer -->
    <?php require "./footer.php" ?>


    <script src="./script.js"></script>
</body>

</html>