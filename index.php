<html>
<head>
<!-- For ease i'm just using a JQuery version hosted by JQuery- you can download any version and link to it locally -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
$(document).ready(function() {
    $("#responsecontainer").load("response.php");
    var refreshId = setInterval(function() {
        $("#responsecontainer").load('response.php?randval='+ Math.random());
    }, 1000);
});
</script>
</head>
<body>

<div id="responsecontainer">
</div>
</body>