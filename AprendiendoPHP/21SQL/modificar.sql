-- Renombrar una tabla 

ALTER TABLE usuarios RENAME TO usuarios_renom;

--CAMBIAR NOMBRE DE UNA COLUMNA 

ALTER TABLE usuarios_renom CHANGE apellidos apellido varchar (100) null;

--Modificar columna sin cambiar nombre

ALTER TABLE usuarios_renom MODIFY apellido char (40) not null;

--Añadir columna

ALTER TABLE usuarios_renom ADD website varchar (100) null;

--AÑADIR RESTRICCION A UNA COLUMNA

ALTER TABLE usuarios_renom ADD CONSTRAINT uq_emaul UNIQUE(email);

--Borrar una columna 

ALTER TABLE usuarios_renom DROP website;

