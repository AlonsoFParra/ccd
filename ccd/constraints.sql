use ccd;

ALTER TABLE equipos
ADD CONSTRAINT grupo_equipo
FOREIGN KEY (grupo_id) 
REFERENCES grupos(id);

select * from alumnos;

ALTER TABLE equipos
DROP CONSTRAINT users_tipo;

ALTER TABLE equipos
ADD PRIMARY KEY (id);

select * from personas p, alumnos a where p.id=a.persona_id;

update grupos set maestro_id=0;

select * from grupo_materia;
