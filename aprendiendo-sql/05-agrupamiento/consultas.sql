# CONSULTAS DE AGRUPAMIENTO
SELECT titulo FROM entradas;
SELECT titulo FROM entradas GROUP BY categoria_id;

# CUANTAS ENTRADAS HAY POR CATEGORÍA
SELECT COUNT(titulo) AS 'Numero de entradas', categoria_id FROM entradas GROUP BY categoria_id;

# CONSULTAS AGRUPAMIENTO CON CONDICIONES || HAVING funciona como el where en consultas de agrupamiento 
SELECT COUNT(titulo) AS 'Número de entradas', categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(titulo) >= 4;

/*
|| FUNCIONES DE AGRUPAMIENTO ||
AVG : sacar la media
COUNT : Contar el número de elementos
MAX : Valor máximo del grupo
MIN : Valor mínimo del grupo
SUM : Sumar todo el contenido del grupo 
*/

SELECT AVG(id) AS 'Media de entradas' FROM entradas;
SELECT MAX(id) AS 'Máximo id', titulo FROM entradas;
SELECT MIN(id) AS 'Mínimo id', titulo FROM entradas;
SELECT SUM(id) AS 'Suma de id', titulo FROM entradas;