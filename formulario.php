<!DOCTYPE html>
<html lang="en">
<?php
$con=mysqli_connect("localhost", "root", "", "crud")or die("Error");
?>
<head>
  
    <title>CRUD</title>
    
    </head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="tabla.css">
<body>
    <div class="container">   
    <div class="form__top">
            <h2>Formulario <span>Listado</span></h2>
       
     </div>  
    

     <?php
        $consulta="SELECT * FROM usuario";
        $ejecutar = mysqli_query($con, $consulta);
        $total = mysqli_num_rows($ejecutar);
       ?>
<form class="form__reg">
           <h2> <span>Total </span></h2>
<input class="input" type="text" name="cont"  value="<?php echo $total; ?>">
</form> 
 <br />
 </div>
<div class="container2">       
        
   
    <table width="500" border="2" style="background color:#F9F9F9;">
        <thead>
    <tr>
        <th>ID</th>
        <th>Usuario</th>
        <th>Password</th>
        <th>Email</th>
        <th>Editar</th>
        <th>Borrar</th>
        </tr>
            </thead>
        <?php
       
            $consulta = "SELECT * FROM usuario";
            $ejecutar = mysqli_query($con, $consulta);
            $i = 0;
            while($fila = mysqli_fetch_array($ejecutar)){
                    $id = $fila['id'];
                    $usuario = $fila['usuario'];
                    $password = $fila['password'];
                    $email = $fila['email'];
                     $i++;
                 
        ?>
        <tr align="center">
        <td><?php echo $id; ?></td>
        <td><?php echo $usuario; ?></td>
        <td><?php echo $password; ?></td>
        <td><?php echo $email; ?></td>
            <td><a href="editar.php?editar=<?php echo $id; ?>">Editar</a></td>
            <td><a href="editar.php?borrar=<?php echo $id; ?>">Borrar</a></td>
            
        </tr>
        
        <?php } ?>

        
    </table>
       </div>
    
    
    </body>

</html>