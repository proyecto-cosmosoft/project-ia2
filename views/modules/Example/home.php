

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>.::EJEMPLO DE REGISTRO::.</title>
</head>
<body>
<h3>EJEMPLO DE CONSULTA</h3>
<?php
if(empty($exampleArray)){
    echo "LA TABLA USUARIO ESTA VACIA";
}else {
    foreach ($exampleArray as $example) {
        echo "NOMBRE:".$example->nombre_rol . "<br>";
        echo "DESCRIPCION:".$example->descripcion_rol . "<br>";
        echo "-----------------------------<br>";
    }
}
?>
<h3>EJEMPLO DE REGISTROS CON VALIDACION</h3>
<h4>Para probar la validación, envie campos vacios.</h4>
<form action='<?php echo Helpers::url('Example','registrar');//se le envia a que controlador y cual accion ?>' method="post">
    <label for="nombre">Nombre rol</label>
    <input type="text" name="nombre">
    <?php if(Helpers::isError('nombre')):?>
    <span style="color:red">
        <?php echo Helpers::messageError('nombre') ?>
    </span>
    <?php endif;?>

    <label for="nombre">descripcion</label>
    <input type="text" name="descripcion">
    <?php if(Helpers::isError('descripcion')):?>
        <span style="color:red">
            <?php echo Helpers::messageError('descripcion') ?>

        </span>
    <?php endif;?>
    <button type="submit">Enviar</button>
</form>
</body>
</html>
