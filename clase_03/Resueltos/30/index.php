<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="crossorigin="anonymous"></script>
      <script src="scripts/script.js"></script>
    <title>Ejercicio 30</title>
</head>
<body>
<form action=index.php method="POST">

    <input type="checkbox" name="chk1" id="chk1" >Año<br>
    <input type="checkbox" name="chk2" id="chk2" >Mes<br>
    <input type="checkbox" name="chk3" id="chk3" >Dia<br>
    <input type="submit" id="btn" value="Enviar resultado"><br>
    
</form>
</body>
</html>
<?php
$fecha = "";
if(isset($_POST['chk3'])){
    $fecha.=date('d/');
}
if(isset($_POST['chk2'])){
    $fecha.=date('/m');
}
if(isset($_POST['chk1'])){
    $fecha.=date('/Y');
}
echo $fecha;
?>
