--
-- Database: 'escuela'
--

CREATE DATABASE escuela;
USE escuela;

-- --------------------------------------------------------


CREATE TABLE alumnos (
  no_control int(10) NOT NULL,
  nombre varchar(20) NOT NULL,
  paterno varchar(15) NOT NULL,
  materno varchar(15) NOT NULL,
  correo varchar(50) NOT NULL,
  contrasena varchar(40) NOT NULL,
  registro varchar (3) DEFAULT 0,
  UNIQUE (no_control),
  PRIMARY KEY (no_control)
);

-- --------------------------------------------------------


CREATE TABLE grupos (
  id_grupo int (5) NOT NULL,
  no_control int(10) NOT NULL,
  PRIMARY KEY (id_grupo),
  FOREIGN KEY (no_control) REFERENCES alumnos(no_control)
);

-- --------------------------------------------------------

CREATE TABLE info_grupo (
  id_grupo int (5) NOT NULL,
  nombre varchar (15) NOT NULL,
  id_materia int(5) NOT NULL,
  PRIMARY KEY (id_grupo)
);

-- --------------------------------------------------------


CREATE TABLE materias (
  id_materia int(5) NOT NULL,
  id_examen int(5) NOT NULL,
  PRIMARY KEY (id_materia)
);

-- --------------------------------------------------------


CREATE TABLE info_materia (
  id_materia int(5) NOT NULL,
  nombre varchar(15) NOT NULL,
  PRIMARY KEY (id_materia)
);

-- --------------------------------------------------------


CREATE TABLE examenes (
  id_examen int(5) NOT NULL,
  id_pregunta int(5) NOT NULL,
  PRIMARY KEY (id_examen)
);

-- --------------------------------------------------------


CREATE TABLE info_examen (
  id_examen int(5) NOT NULL,
  nombre varchar(10) NOT NULL,
  fecha date NOT NULL,
  PRIMARY KEY (id_examen)
);

-- --------------------------------------------------------


CREATE TABLE preguntas (
  id_pregunta int(5) NOT NULL,
  pregunta varchar(200) NOT NULL,
  respuesta int(5) NOT NULL,
  PRIMARY KEY (id_pregunta)
);

-- --------------------------------------------------------


CREATE TABLE opciones (
  id_opcion int(5) NOT NULL,
  id_pregunta int(5) NOT NULL,
  opcion int(150) NOT NULL,
  PRIMARY KEY (id_opcion)
);

-- --------------------------------------------------------


CREATE TABLE respuestas (
  id_respuesta int (5) NOT NULL,
  no_control int(10) NOT NULL,
  id_pregunta int(5) NOT NULL,
  id_opcion int(5) NOT NULL,
  PRIMARY KEY (id_respuesta)
);

-- --------------------------------------------------------


ALTER TABLE info_grupo ADD FOREIGN KEY (id_materia) REFERENCES materias(id_materia);
ALTER TABLE materias ADD FOREIGN KEY (id_examen) REFERENCES examenes(id_examen);
ALTER TABLE examenes ADD FOREIGN KEY (id_pregunta) REFERENCES preguntas(id_pregunta);
ALTER TABLE opciones ADD FOREIGN KEY (id_pregunta) REFERENCES preguntas(id_pregunta);
ALTER TABLE respuestas ADD FOREIGN KEY (id_pregunta) REFERENCES preguntas(id_pregunta);
ALTER TABLE respuestas ADD FOREIGN KEY (id_opcion) REFERENCES opciones(id_opcion);

-- --------------------------------------------------------

INSERT INTO alumnos (no_control, nombre, paterno, materno, correo, contrasena) VALUES
(91645, 'Martin Emanuel', 'Cervantes', 'Palomo', 'm_cervantes1@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b');
