<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IIT Student LMS - Attendence mark Page</title>

    <link rel="stylesheet" href="./style.css">

    <link rel="stylesheet" href="./src/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
</head>
<body>
        <!-- navigation bar -->
        <?php require "./nav.php" ?>

        <section class="mx-auto d-flex flex-column flex-lg-row justify-content-between">
            <!-- student data -->
            <div class="stdData border col-12 col-lg-6 mt-5 p-4 border-0 mx-auto">
                
                <div class="d-flex flex-row align-baseline justify-content-center my-4">
                    <h6 class="mx-2">P.D.G.S.M samarasinghe</h6>
                    <img class="rounded-circle my-auto mx-auto" width="30px" height="30px" src="./src/img/userimg.png" alt="user image">
                </div>

                <div class="d-flex flex-column align-baseline justify-content-center my-4 mx-auto">
                    <label for="stdTd">Student ID</label>
                    <input class="w-75 text-center border border-dark rounded py-1" type="text" name="stdTd" disabled value="20223286">

                    <label for="degree">Degree</label>
                    <input class="w-75 text-center border border-dark rounded py-1" type="text" name="degree" disabled value="Computer Science">

                    <label for="location">location</label>
                    <input class="w-75 text-center border border-dark rounded py-1" type="text" name="location" disabled value="IIT Bambalapitiya">

                    <label for="lecType">lecture type</label>
                    <input class="w-75 text-center border border-dark rounded py-1" type="text" name="lecType" disabled value="On Campus">

                    <p class="mt-3">Date - <span>2023/03/25</span></p>

                    <p>your Attendence - 20%</p>
                </div>

                <div>
                    
                </div>
            </div>

            <!--lecture data-->
            <div class="lecData border col-12 col-lg-6 mt-5 p-4 border-0 mx-auto">
                <div class="submitBtn text-center">
                    <button class="AttendenceBtnMain rounded-pill boader mb-5 px-5 py-3 fw-bold my-2">Submit</button>
                </div>
                <br>

                <div class="d-flex flex-column align-baseline justify-content-center my-4 mx-auto lecData">
                    <label for="stdTd">Lecture Name</label>
                    <input class="w-75 text-center border border-dark rounded py-1" type="text" name="stdTd" disabled value="Mrs.yashika">

                    <label for="location">Module</label>
                    <input class="w-75 text-center border border-dark rounded py-1" type="text" name="location" disabled value="mathamatic for computing">

                    <label for="lecData">Description</label>
                    <textarea name="lecData" class="border border-dark rounded" cols="20" rows="5" disabled >Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, blanditiis! Animi eveniet voluptatibus reprehenderit necessitatibus tempora harum. Incidunt, quod deserunt.</textarea>

                    <p class="mt-3">Date - <span>2023/03/25</span></p>

                    <p>Student Attendece - 20%</p>

                </div>

            </div>

        </section>

        <!-- footer -->
        <?php require "./footer.php" ?>


        <script src="./script.js"></script>
</body>
</html>