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