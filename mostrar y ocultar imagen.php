


<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#hide").click(function(){
        $("p").hide();
    });
    $("#show").click(function(){
        $("p").show();
    });
});
</script>
</head>
<body>

<center><p><img src="imagen/sd.png" alt="sd" /></p></center>

<button id="hide">Oculatar</button>
<button id="show">Mostrar</button>

</body>
</html>
