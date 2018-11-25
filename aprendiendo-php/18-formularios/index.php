<html>
    <head>
        <title>Formularios PHP y HTML</title>
    </head>
    <body>
        <h1>Formuario</h1>
        <form method="POST" enctype="multipart/form-data">
            <label for="nombre">Nombre: </label>
            <p><input type="text" name="nombre"/></p>
            
            <label for="apellido">Apellido: </label>
            <p><input type="text" name="apellido"/></p>
            
            <label for="boton">Boton: </label>
            <p><input type="button" name="boton" value="Clickeame!"/></p>
            
            <label for="sexo">Sexo: </label>
            <p>
                Hombre <input type="checkbox" name="sexo" value="Hombre" checked="checked"/>
                Mujer <input type="checkbox" name="sexo" value="Mujer"/>
            </p>
            
            <label for="color">Color: </label>
            <p><input type="color" name="color"/></p>
            
            <label for="fecha">Fecha: </label>
            <p><input type="date" name="fecha"/></p>
            
            <label for="correo">Correo: </label>
            <p><input type="email" name="correo"/></p>
            
            <label for="archivo">Archivo: </label>
            <p><input type="file" name="archivo" multiple="multiple"/></p>
            
            <label for="numero">Número: </label>
            <p><input type="number" name="numero"/></p>
            
            <label for="Pass">Pass: </label>
            <p><input type="password" name="pass"/></p>
            
            <label for="continente">Continente: </label>
            <p>
                América del sur<input type="radio" name="américa del sur"/>
                Europa<input type="radio" name="europa"/>
                Asia<input type="radio" name="asia"/>
            </p>
            
            <label for="pagina">Página: </label>
            <p><input type="url" name="pagina"/></p>
            
            <label for="peliculas">Peliculas: </label>            
                <select name="peliculas">
                    <option value="spiderman">Spiderman</option>
                    <option value="batman">Batman</option>
                    <option value="superman">Superman</option>
                    <option value="Slenderman">Slenderman</option>
                </select><br/>
            
            
            <input type="submit" value="Enviar"/>
        </form>
    </body>
</html>
