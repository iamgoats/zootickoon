$(document).ready(function () {
    $('#login-button').click(function() {
        var email = $("#login-email").val();
        var password = $("#login-password").val();
        $.ajax("verification.php", {
            type: "POST",
            data: "email="+encodeURIComponent(email)+"&password="+encodeURIComponent(password),
            success: function(data, textStatus, jqXHR) {
                console.log(jqXHR.status);
                $("#login-warning").hide();
                $("#login-success").show();
                sessionStorage.setItem("login", email);
                window.location.href = ".";
            },
            error: function(xhr,status,error) {
                console.error(xhr.status);
                $("#login-warning").show();
                $("#login-success").hide();
            }
        });
    });
    $('#register-button').click(function() {
        var email = $("#register-email").val();
        var password = $("#register-password").val();
        $.ajax("inscription.php", {
            type: "POST",
            data: "email="+encodeURIComponent(email)+"&password="+encodeURIComponent(password),
            success: function(data, textStatus, jqXHR) {
                console.log(jqXHR.status);
                $("#register-warning").hide();
                $("#register-success").show();
                sessionStorage.setItem("login", email);
                window.location.href = ".";
            },
            error: function(xhr,status,error) {
                console.error(xhr.status);
                $("#register-warning").show();
                $("#register-success").hide();
            }
        });
    });
});