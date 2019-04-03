$(document).ready(function () {
   var admin = localStorage.getItem("admin");

   /*if (admin === null) {
       window.location.href = "login.php";
   }*/

   $("#name-display").append("Hello" + admin.username);
});

function logout() {
    localStorage.removeItem("admin");
    window.location.href = "login.php";
}