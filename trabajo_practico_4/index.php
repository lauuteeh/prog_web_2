<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    
    
    
    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

  <?php
    $caract_validos=null;
    $vacio=null;
    $incorrecto=null;


    if(isset($_POST["enviar"])){

      if ($_POST["usuario"] !== "" && isset($_POST["usuario"]) && $_POST["pass"] !== "" && isset($_POST["pass"])) {
          if (validarUsuario($_POST["usuario"])) {
            if ($_POST["usuario"] == "carlos" && $_POST["pass"] == "123"){

              session_start();
              $_SESSION["log"]=true;
              if($_POST["recordar_usuario"] == 1){

                setcookie("usuario","carlos",time()+86400*20);

              }else{

                 setcookie("usuario","carlos",time()-86400*20);

              }
              header("location:user_carlos.php");

            }else{
              $incorrecto="Usuario y/o password incorrectos";
             }
          }else{
            $caract_validos="Use caracteres validos";
 
           }
        }else{
           $vacio="Ingrese usuario y/o password";
        }  


    }



    //Funcion validar usuario
    function validarUsuario($nombre = NULL) {
      $validos="abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ0123456789";
        $validez=1;
        for ($i=0;$i<=strlen($nombre)-1;$i++) {
            if (strpos($validos,substr($nombre,$i,1))===false) {
              $validez=0;
            }
        }
        return $validez;
    } 


  ?>



    <div class="login-page">
  <div class="form">
    <form class="login-form" action="index.php" method="post">
      <?php 
        if(isset($_POST["enviar"]) && $caract_validos !== null) {
          echo $caract_validos."<br>";
          echo "<br>";
        }
        
          ?>
      
      <?php 
        if(isset($_POST["enviar"]) && $vacio !== null) {
          
          echo $vacio."<br>";
          echo "<br>";
        }
      
          ?>

      <?php 
        if(isset($_POST["enviar"]) && $incorrecto !== null) {
          
          echo $incorrecto."<br>";
          echo "<br>";
        }
      
          ?>
      
      <input type="text" placeholder="usuario" name="usuario" class="text" value="<?php if(isset($_COOKIE["usuario"]))echo $_COOKIE["usuario"]?>"/>
      <input type="password" placeholder="password" name="pass" class="text"/>
      <input type="submit" name="enviar" value="login" class="enviar"/>
      <p>Recordar usuario?</p> <input type="checkbox" name="recordar_usuario" value="1" class="checkbox"></input>


    </form>
  </div>
</div>

        

    
    
    
  </body>
</html>
