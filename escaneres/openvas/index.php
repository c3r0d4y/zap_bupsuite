<!DOCTYPE html>
<html lang="es">
    <title>Openvas</title>
<head> 
    <script src="jquery-3.4.1.min.js" type="text/javascript"></script>
    
    <script src='script.js' type='text/javascript'></script>
       
    <link rel="stylesheet" href= "styles.css">
    
    <div class="login-banner">
        <h1>Open VAS</h1>
        <form class="login-form" action="validacion.php" method="POST">
            
            <input type="text" value="" id="usuario" name="usuario" placeholder="Usuario" autocomplete="username">
            <div class="separator"></div>

            <input type="password" name="password" value="" id="password" placeholder="Contraseña" autocomplete="current-password">
            <button type="submit" class="btn-login">Login</button>
        </form>
    </div>
    <div id="contenido"></div>