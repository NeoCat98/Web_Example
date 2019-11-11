CREATE TABLE sed.usuarios(
	id_usuarios INT PRIMARY KEY AUTO_INCREMENT,
	user_name VARCHAR(20),
	user_password VARCHAR(200),
	user_email VARCHAR(50)
);

CREATE TABLE sed.curriculums(
	id_curriculums INT PRIMARY KEY AUTO_INCREMENT,
	curriculums_DUI VARCHAR(30),
	curriculums_nombre VARCHAR(30),
	curriculums_apellido VARCHAR(30),
	curriculums_genero VARCHAR(30),
	curriculums_numero VARCHAR(30),
	curriculums_birthdate VARCHAR(30),
	curriculums_estado VARCHAR(30),
	curriculums_experiencia VARCHAR(100),
	curriculums_formacion VARCHAR(100)
	curriculums_username VARCHAR(20)
);