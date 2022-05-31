<script src="js/jquery.js"></script>
<?php
$usuario =$_POST['user'];
$password=$_POST['pasword'];
$db_txt = 'Contraseña.txt';
$respuesta="";
if(is_file($db_txt))
{
   $lineas = file($db_txt);
   foreach($lineas as $linea)
   {
      list($user,$pass) = explode(":",trim($linea),2);
      if(is_string($user)  &&  is_string($pass))
      {
         if($user == $usuario && $pass == $password){
            header("location:calcu.php");
         }else if($user == $usuario && $pass!= $password){
            $respuesta= "Contraseña Incorrecta";
            header("location:index.php"); 
         }else if($user != $usuario && $pass== $password){
            $respuesta= "Usuario Incorrecto";
            header("location:index.php"); 
         }else if ($user != $usuario && $pass != $password){
            $respuesta= "Ingrese de nuevo";
            header("location:index.php"); 
         }
            
                
         
         
      }
   }
}
echo ($respuesta);