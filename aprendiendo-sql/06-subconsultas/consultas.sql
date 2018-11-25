/*
SUBCONSULTAS: 
-Consultas que se ejecutan dentro de otras.
-Consiste en utilizar los resultados de la subconsulta para operar en la consulta principal.
-Jugando con las claves foraneas.
*/

# Consulta de usuarios que tengan entradas, con el IN se realiza la subconsulta para validar que tenga entradas registradas, que exista el id de usuario en la tabla de entradas
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas);
# Consulta con usuario que no tenga entradas
SELECT * FROM usuarios WHERE id NOT IN (SELECT usuario_id FROM entradas);

# Sacar usuarios que tengan 'GTA 5' en el titulo
SELECT nombre, apellidos FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas WHERE titulo LIKE '%GTA%');

# EJEMPLOS CONSULTAS AVANZADAS
# Sacar todas las entradas de la categoria acción utilizando su nombre
SELECT titulo FROM entradas WHERE categoria_id IN (SELECT id FROM categorias  WHERE nombre = 'accion');

# Mostra las categorias con más de 3 entradas
SELECT nombre FROM categorias WHERE id IN (SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(categoria_id)>=3);

# Mostrar los usuarios que crearon una entrada un martes
SELECT * FROM usuarios WHERE id IN(SELECT usuario_id FROM entradas WHERE DAYOFWEEK(fecha)=3);

# Mostrar el nombre de el usuario que tenga más entradas
SELECT CONCAT(nombre,' ',apellidos) AS 'Usuario con más entradas' FROM usuarios WHERE id = (SELECT usuario_id FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1);

# Mostrar las categorias sin entradas
SELECT * FROM categorias WHERE id NOT IN(SELECT categoria_id FROM entradas);