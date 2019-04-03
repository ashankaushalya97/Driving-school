$(document).ready(function () {
    $("#login-btn").on('click', function () {
        var username = $("#username-field").text();

        if (username === '' || username === null) {
            return;
        }

        var password = $("#password-field").text();

        if (password === '' || password === null) {
            return;
        }

        $.ajax({
            url: "api/v1/admin.php",
            method: "POST",
            data: {
                username: username,
                password: password
            },
            async: true
        }).done(function (response) {
            if (response) {
                localStorage.setItem("admin", {username: username});

                window.location.href = "index.php";
            } else {
                return;
            }
        })
    })
});