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
    $consulta=null;
    $recordar_usuario=null;
  

          $conexion=mysqli_connect("localhost","root","") or die("Fallo con conexion a la BD");
          mysqli_select_db($conexion,"tp5") or die("Fallo al seleccion la BD");

    if(isset($_POST["enviar"])){
          
      $consulta_usuario=mysqli_query($conexion,"SELECT * FROM usuarios") or die("Fallo en la consulta");
    

      if ($_POST["usuario"] !== "" && isset($_POST["usuario"]) && $_POST["pass"] !== "" && isset($_POST["pass"])) {
          if (validarUsuario($_POST["usuario"])) {
                
                while($resultado=mysqli_fetch_assoc($consulta_usuario)){
                
                $pass=$_POST["pass"];
                $pass_enc=md5($pass);

                     if ($_POST["usuario"] == $resultado["nombre"] && $pass_enc == $resultado["clave"]){

                          session_start();
                          $_SESSION["log"]=true;
             
                           if($_POST["recordar_usuario"] == 1){

                              setcookie("usuario",$_POST["usuario"],time()+86400*20);

                            }else{

                              setcookie("usuario",$_POST["usuario"],time()-86400*20);

                           }
                        
                         
                         setcookie("mostrar_usuario",$_POST["usuario"],time()+86400*20);

                         mysqli_close($conexion);
                         header("location:user_carlos.php");
                         

                   }else{
                     $incorrecto="Usuario y/o password incorrectos";
                   }

              }
          }else{
            $caract_validos="Use caracteres validos";
 
           }
        }else{
           $vacio="Ingrese usuario y/o password";
        }  
  }

     if(isset($_POST["enviar_new"])){


        if ($_POST["usuario_new"] !== "" && isset($_POST["usuario_new"]) && $_POST["pass_new"] !== "" && isset($_POST["pass_new"])) {
          if (validarUsuario($_POST["usuario_new"])) {

              $usuario_new=$_POST['usuario_new'];
              $pass_new=$_POST['pass_new'];

              $pass_enc=md5($pass_new);
             
              $consulta_usuario=mysqli_query($conexion,"SELECT * FROM usuarios WHERE nombre='$usuario_new'") or die("Fallo en la consulta");

               
      
                    if (mysqli_num_rows($consulta_usuario) > 0){
                      
                      
                        setcookie("user_usado","Usuario ya registrado",time()+1);
                        mysqli_close($conexion);
                        header("location:index.php");
                         
                         


                    }else{


                        $registrar_usuario="INSERT INTO `usuarios` (`idUsuario`, `nombre`, `clave`) VALUES (NULL, '$usuario_new', '$pass_enc');" or die("Fallo en la consulta");
                        $response = mysqli_query($conexion,$registrar_usuario);
                        mysqli_close($conexion);
                        setcookie("new_user","Usuario creado con exito!",time()+1);
                        header("location:index.php");
                        

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
  <div class="form" >
   
   <form class="register-form" action="index.php" method="post">
      <input type="text" placeholder="usuario" name="usuario_new" class="text"/>
      <input type="password" placeholder="password" name="pass_new" class="text"/>
      <input type="submit" name="enviar_new" value="registrar" class="enviar"/>      
      <p class="message">Ya estas registrado? <a href="#">Sign In</a></p>
    </form>


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

      <?php 
        
        if(isset($_COOKIE["new_user"] )){
          
          echo $_COOKIE["new_user"]."<br>";
          echo "<br>";
        }

        if(isset($_COOKIE["user_usado"] )){
          
          echo $_COOKIE["user_usado"]."<br>";
          echo "<br>";
        }
      
          ?>
      
      <input type="text" placeholder="usuario" name="usuario" class="text" value="<?php if(isset($_COOKIE["usuario"]))echo $_COOKIE["usuario"]?>"/>
      <input type="password" placeholder="password" name="pass" class="text"/>
      <input type="submit" name="enviar" value="login" class="enviar"/>
      <p class="message">No estas registrado? <a href="#">Crear una cuenta</a></p>
      <p class="message">Recordar usuario? </p><input type="checkbox" name="recordar_usuario" value="1" class="checkbox"></input>
     


    </form>
  </div>
</div>

        

        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="index.js"></script>
    
    
    
  </body>
</html>
