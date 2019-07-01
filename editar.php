<!DOCTYPE html>
<html>
<?php
$con=mysqli_connect("localhost", "root", "", "crud")or die("Error");
?>
<head>
	<title>INDEX</title>
</head>
    <link rel="stylesheet" href="reset.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
	<link rel="stylesheet" href="main.css">
    
<body>
	<div class="container">
		<div class="form__top">
			<h2>Formulario <span>Editar</span></h2>
		</div>	
<?php
if(isset($_GET['editar'])){
    $editar_id = $_GET['editar'];
    
    $consulta = "SELECT * FROM usuario WHERE id='$editar_id'";
    $ejecutar = mysqli_query($con, $consulta);
    
    $fila = mysqli_fetch_array($ejecutar);
    
    $usuario = $fila['usuario'];
    $pass = $fila['password'];
    $email = $fila['email'];
    
}

?>

<form method="post" action=""  class="form__reg">
<input type="text" name="nombre" value="<?php echo $usuario; ?>" placeholder="&#128100;  Nombre" required autofocus>
<input type="password" name="passw" value="<?php echo $pass; ?>" placeholder="&#9993;  Password" required>
<input type="text" name="email" value="<?php echo $email; ?>" placeholder="&#9993;  Email" required>
<div class="btn__form">
            	<input class="btn__submit" type="submit" name="actualizar" value="Actualizar Datos">
            	

            </div>
</form>

<?php
if(isset($_POST['actualizar'])){
$actualizar_nombre = $_POST['nombre'];
$actualizar_password = $_POST['passw'];
$actualizar_email = $_POST['email'];

$actualizar = "UPDATE usuario SET usuario='$actualizar_nombre', password='$actualizar_password', email='$actualizar_email' WHERE id='$editar_id'";
$ejecutar = mysqli_query($con, $actualizar);
if($ejecutar){
    echo "<script>alert('Datos Actualizados')</script>";
    echo "<script>window.open('formulario.php','_self')</script>";
}
}
?>

       <?php
    if(isset($_GET['borrar'])){
        $borrar_id = $_GET['borrar'];
        
        $borrar = "DELETE FROM usuario WHERE id='$borrar_id'";
        $ejecutar =mysqli_query($con, $borrar);
        
        if($ejecutar){
            echo "<script>alert('El Usuario ah sido Borrado')</script>";
            echo "<script>window.open('formulario.php','_self')</script>";
        }
    }
    ?>
    </div>
    </body>
</html>