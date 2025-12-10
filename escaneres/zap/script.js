$(document).ready(function() {
    console.log("mmmm");
    //get_logs();
    setInterval(actualizarDiv, 1000);

});

var get_logs = () => {
    console.log("get_logs");
    $.ajax({
        type: "POST",
        url: "get_logs.php",
        success: function(response){$('#contenido').html(response).fadeIn();}
     });
}

function actualizarDiv() {
    fetch('get_logs.php')
        .then(response => response.text())
        .then(data => {
            document.getElementById('contenido').innerHTML = data;
    })
    .catch(error => console.error('Error:', error));
}