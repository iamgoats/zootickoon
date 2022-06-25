$(document).ready(function () {
    //click sur l'id btn
    $('#btn').click(function () {
        $.ajax("bonjour.php",//appel de bonjour.php sur le serveur web
        {
            type: "GET",
            success: function (resultat) {
                $("#result").html(resultat);
            }
        });
    });
});