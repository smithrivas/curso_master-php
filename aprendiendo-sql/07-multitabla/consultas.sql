/* 
CONSULTAS MUTITABLA
Son consultas que sirven para consultar varias tablas en una sola sentencia.
 */

SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria' 
FROM entradas e, usuarios u, categorias c 
WHERE e.usuario_id = u.id AND e.categoria_id = c.id;

SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria'
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.categoria_id = c.id;

# Mostrar el nombre de las categorias y al lado cuantas entradas tiene #
SELECT c.nombre, COUNT(e.id) FROM categorias c, entradas e
WHERE e.categoria_id = c.id GROUP BY e.categoria_id;

SELECT c.nombre, COUNT(e.id) AS 'Entradas' FROM categorias c
LEFT JOIN entradas e ON e.categoria_id = c.id
GROUP BY e.categoria_id;

# Mostrar el email de usuario y cuantas entradas tiene
SELECT u.email, COUNT(e.titulo) FROM usuarios u, entradas e
WHERE e.usuario_id = u.id GROUP BY e.usuario_id;