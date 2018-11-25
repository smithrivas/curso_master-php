# RENOMBRAR UNA TABLA#
ALTER TABLE usuarios RENAME TO usuarios_rename;

# CAMBIAR EL NOMBRE DE UNA COLUMNA #
ALTER TABLE usuarios_rename CHANGE apellidos apellido varchar(100) null;

# MODIFICAR COLUMNA SIN CAMBIAR NOMBRE #
ALTER TABLE usuarios_rename MODIFY apellido char(40) not null;

# MODIFICAR COLUMNA #
ALTER TABLE usuarios_rename ADD website varchar(100) null;

# AÑADIR RESTRICCIÓN SOLO A UNA COLUMNA #
ALTER TABLE usuarios_rename ADD CONSTRAINT uq_email UNIQUE(email);
# *dato que va en ese campo no se repita #

# BORRAR UNA COLUMNA #
ALTER TABLE usuario_rename DROP website;