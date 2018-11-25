# Todos los coches en cuya marca exista la letra 'A' y cuyo modelo empiece por 'F'.

SELECT * FROM coches WHERE marca LIKE '%a%' AND modelo LIKE 'f%';