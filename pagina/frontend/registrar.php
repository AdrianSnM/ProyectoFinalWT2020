<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="author" content="Amador Flores, Perez San Martin" />
        <link rel="icon" type="image/jpg" href="../../icono/solo.png" />
        <link rel="stylesheet" type="text/css" href="../style/registrar.css" />
        <title>YILDIZI / Registrar</title>
    </head>
    <body>
        <div class="barra">
            <div id="logo">
                <img src="../../icono/logo.png" alt="logotipo YILDIZI" width="100" />
            </div>
        </div>
        <div class="contenedor">        
            <form action="aqui va el php creo xdxd" method="post" class="formulario">
                    <h1>Registro</h1>
                    <h3>Por favor, llene los campos</h3>
                    <div class="entrada">
                        <label>Nombre</label>
                        <input type="text" placeholder=" " name="nombre" required="required">
                    </div>
                    <div class="entrada">
                        <label>Correo</label>
                        <input type="mail" placeholder=" " name="correo" required="required">
                    </div>
                    <div class="entrada">
                        <label>Contraseña</label>
                        <input type="password" placeholder=" " name="clave" required="required">
                    </div>
                    <div class="entrada">
                        <label>Idioma</label>
                        <select name="select1" required="required">
                            <option selected="true" disabled="disabled">seleccione el idioma</option>
                            <option value="1">Español</option> 
                            <option value="2">Ingles</option>
                            <option value="3">Portuguese</option>
                        </select>
                    </div>
                    <div class="entrada">
                        <label>Clasificacion</label>
                        <select name="select2" required="required">
                            <option selected="true" disabled="disabled">seleccione la clasificacion</option>
                            <option value="1">A</option> 
                            <option value="2">B</option>
                            <option value="3">B15</option>
                            <option value="3">C</option>
                        </select>
                    </div>
                    <div class="entrada">
                        <label>Foto</label>
                    </div>
                    <div class="mensaje">
                        
                    </div>
                    <button type="submit">Registrar</button>
            </form>
        </div>
    </body>
</html>
