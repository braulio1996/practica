
<?php
$con=mysqli_connect("localhost", "root", "", "crud")or die("Error");
?>

 <?php
    if(isset($_POST['insert'])){
        $usuario = $_POST['nombre'];
        $pass = $_POST['passw'];
        $email = $_POST['email'];
        
        $insertar = "INSERT INTO usuario (usuario, password, email) VALUES ('$usuario', '$pass', '$email')";
        $ejecutar = mysqli_query($con, $insertar);
        if($ejecutar){
            echo "<script>alert('El Usuario ah sido Agregado')</script>";
            echo "<script>window.open('index.html','_self')</script>";
        }  
    } 
    ?>