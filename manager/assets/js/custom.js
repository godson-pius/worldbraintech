$(document).ready(function() {

    function audioTotalNum() {
        $.get("config/ajaxCallFunctions/audio.php", function(data){
            $("#totalAudio").text(data);
        });

    }
    
    audioTotalNum();


    function RequestTotalNum() {
        $.get("config/ajaxCallFunctions/project-request.php", function(data){
            $("#totalProjectRequest").text(data);
        });
    }


    RequestTotalNum();

    function ContactTotalNum() {
        $.get("config/ajaxCallFunctions/contact.php", function(data){
            $("#totalContacts").text(data);
        });
        
    }
    
    ContactTotalNum();
});