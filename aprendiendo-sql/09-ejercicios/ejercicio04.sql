/* 
Sacar todos los vendedores cuya fecha de alta sea posterior al 1 de julio del 2018.
*/

SELECT * FROM vendedores WHERE fecha>='2018-07-01';

UPDATE vendedores SET fecha='2017-04-03' WHERE id=8;