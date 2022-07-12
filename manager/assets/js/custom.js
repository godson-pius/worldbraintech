$(document).ready(function() {

    function clientTotalNum() {
        $.get("config/ajaxCallFunctions/clients.php", function(data) {
            $("#totalClients").text(data);
        });

    }

    clientTotalNum();


    function RequestTotalNum() {
        $.get("config/ajaxCallFunctions/project-request.php", function(data) {
            $("#totalProjectRequest").text(data);
        });
    }


    RequestTotalNum();

    function ContactTotalNum() {
        $.get("config/ajaxCallFunctions/contact.php", function(data) {
            $("#totalContacts").text(data);
        });
        
    }
    
    ContactTotalNum();
});