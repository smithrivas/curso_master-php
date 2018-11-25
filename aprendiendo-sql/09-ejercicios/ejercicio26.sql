/*  
Sacar vendedores que tiene jefe y sacar el nombre del jefe.
*/

SELECT id, CONCAT(nombre,' ',apellidos) AS 'Nombre vendedor', jefe
FROM vendedores
WHERE jefe != 'NULL';

SELECT ve.id, CONCAT(ve.nombre,' ',ve.apellidos) AS 'Nombre vendedor', CONCAT(ve2.nombre,' ',ve2.apellidos) AS 'Jefe' FROM vendedores ve
INNER JOIN vendedores ve2 ON ve.jefe=ve2.id;