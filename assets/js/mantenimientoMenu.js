$(document).ready(function(){
    loadContent();
});


function loadContent(){
    loadEvents();
}


function loadEvents(){
    $("#btnLogin").on("click", function(){
        login();
    });    
}