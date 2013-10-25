<html>
  <head>
  
  
  </head>
  <body>
    
     <a href="w3.php"><h4>Regresar al Principio</h4></a>
<?php
   
    $Codigo = $_POST['txtCodigo'];
    $Password = $_POST['txtPassword'];
   
   

if($Codigo == 100 and $Password == "udg"){

echo "<h1>Bienvenido...</ h1>";
}else{

        echo "<h1>Erroro en Usuario o Password</h1></br>";
        echo "<h3>!!!Intente Nuevamente!!!</h3></br>";


}
?>
      
</body>

</html
