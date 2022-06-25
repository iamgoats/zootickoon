$(document).ready(function () {
    updateTicket();
    $('#ticket-id-chooser').change(updateTicket);
    $("#ticket-resoudre").click(resolveTicket);
});

function updateTicket() {
    var id = $("#ticket-id-chooser").val();
    $.ajax("getTicket.php", {
        type: "GET",
        data: "id="+encodeURIComponent(id),
        success: function(data, textStatus, jqXHR) {
            var ticket = JSON.parse(data);
            if (ticket.error) {
                console.log(ticket.error);
            } else {
                displayTicket(ticket);
            }
        },
        error: function(xhr,status,error) {
            console.error(xhr.status);
        }
    });
}

function displayTicket(ticket) {
    $("#ticket-warning").hide();
    $("#ticket-id").text(ticket.id);
    $("#ticket-sujet").text(ticket.sujet);
    $("#ticket-description").text(ticket.description);
    $("#ticket-prio").text(ticket.prio);
    $("#ticket-secteur").text(ticket.secteur);
    $("#ticket-login").text(ticket.login);
    $("#ticket-modifier").attr("href", "modifierTicket.php?id="+ticket.id);
    $("#ticket-statut").text(ticket.statut);
}

function resolveTicket() {
    var id = $("#ticket-id-chooser").val();
    $.ajax("resolveTicket.php", {
        type: "POST",
        data: "id="+encodeURIComponent(id),
        success: function(data, textStatus, jqXHR) {
            updateTicket();
        },
        error: function(xhr,status,error) {
            console.error(xhr.status);
        }
    });
}