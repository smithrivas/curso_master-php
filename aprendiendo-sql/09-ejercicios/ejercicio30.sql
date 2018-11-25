/* 
Mostrar los datos del vendedor con más antigüedad en el concesionario.
*/

SELECT * FROM vendedores ORDER BY fecha ASC LIMIT 1;

# Obtener el coches con más unidades vendidas.

SELECT * FROM coches WHERE id IN
(SELECT coche_id FROM encargos WHERE cantidad IN
(SELECT MAX(cantidad) FROM encargos));