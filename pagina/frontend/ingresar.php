<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="author" content="Amador Flores, Perez San Martin" />
        <link rel="icon" type="image/jpg" href="../../icono/solo.png" />
        <link rel="stylesheet" type="text/css" href="../style/ingresar.css" />
        <title>YILDIZI / Ingresa</title>
    </head>
    <body>        
        <div class="contenedor">
            <div class="header">
                <div class="logo">
                    <img src="../../icono/logo.png" alt="logotipo YILDIZI" />
                    <h2>YILDIZI</h2>
                </div>
                <div class="menu">
                    <a href="registrar.php">Crear Cuenta</a>
                </div>
            </div>
            
            <form action="aqui va el php creo xdxd" method="post" class="formulario">
                <h1>Bienvenido</h1>
                <h3>Ingrese los datos requeridos</h3>
                <div class="entrada">
                    <input id="mail" type="email" placeholder="Correo" name="correo" required="required">
                </div>
                <div class="entrada">
                    <input type="password" placeholder="Contraseña" name="clave" required="required">
                </div>
                
                <div class="mensaje">
                    
                </div>
                
                <button type="submit">Entrar</button>
            </form>
        </div>
    </body>
</html>
