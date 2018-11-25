/* 
Crear una vista llamada vendedoresA que incluirá todos los vendedores del grupo que se llama "Vendedores A".
*/

CREATE VIEW VendedoresA AS
SELECT * FROM vendedores WHERE grupo_id IN
(SELECT id FROM grupos WHERE nombre='Vendedores A');