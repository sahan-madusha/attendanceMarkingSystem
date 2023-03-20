<nav class="d-flex flex-lg-row flex-column align-items-baseline justify-content-between homeNavBar p-2">

<div class="d-flex flex-row align-items-baseline">
    <h2 class="LoginPageHead mx-2"><i class="bi bi-mortarboard-fill"></i> IIT LMS</h2>
    <h2 class="mx-3 menuBar d-block d-lg-none" onclick="navBar()"><i class="bi bi-list"></i></h2>
</div>

<!---->
<div id="menubar1" class="d-lg-flex d-none flex-lg-row flex-column align-items-baseline justify-content-between">
    <!-- left side -->
    
    <button class="AttendenceBtn rounded-pill boader px-3 py-1 fw-bold my-2">Attendence</button>

    <div class="d-flex flex-row justify-content-evenly mt-1 ms-3 resNavCompo">
        <div class="dropdown mx-3">
            <button class="dropbtn p-0 my-2">Recent</button>
            <div class="dropdown-content">
                <a href="#">Recent 1</a>
                <a href="#">Recent 2</a>
                <a href="#">Recent 3</a>
            </div>
        </div>
        <div class="dropdown mx-3">
            <button class="dropbtn p-0 my-2">Courses</button>
            <div class="dropdown-content">
                <a href="#">Courses 1</a>
                <a href="#">Courses 2</a>
                <a href="#">Courses 3</a>
            </div>
        </div>
    </div>

    <!-- left side -->
    <div class="d-flex flex-column flex-lg-row align-items-baseline me-3">
        <div class="mx-3 mt-1 resNavCompo ">
            <i class="bi bi-search"></i>
            <input type="text" class="rounded-pill border border-0 homeSearchBtn">
        </div>
        <div class="d-flex flex-row align-items-baseline resNavCompo">
            <i class="bi bi-bell-fill"></i>
            <h6 class="mx-2">P.D.G.S.M samarasinghe</h6>
            <img class="rounded-circle my-auto mx-auto" width="30px" height="30px" src="./src/img/userimg.png" alt="user image">
        </div>
    </div>
</div>

</nav>


<script>
    /* nav bar */
function navBar() {
    var d1 ="d-lg-flex d-none flex-lg-row flex-column align-items-baseline justify-content-between";
    var d2 ="d-flex flex-column align-items-baseline justify-content-between";

    var x = document.getElementById("menubar1");
    if (x.classList == d1) {
        x.classList = d2;
    } else {
        x.classList = d1;
    }
}
</script>