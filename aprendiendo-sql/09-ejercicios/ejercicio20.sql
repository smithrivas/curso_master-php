/* 
Seleccionar el grupo en el que trabaja el vendedor con mayor salario y mostrar el nombre del grupo.
*/

SELECT id,nombre AS 'Grupo con el empleado mejor pagado' FROM grupos WHERE id =
(SELECT grupo_id FROM vendedores ORDER BY sueldo DESC LIMIT 1);

SELECT id,nombre AS 'Grupo con el empleado mejor pagado' FROM grupos WHERE id IN
(SELECT grupo_id FROM vendedores WHERE sueldo=(
SELECT MAX(sueldo) FROM vendedores));