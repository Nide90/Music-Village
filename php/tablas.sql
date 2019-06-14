CREATE TABLE IF NOT EXISTS Usuarios(
    UsuarioId INT NOT NULL AUTO_INCREMENT,
    Username VARCHAR(20) NOT NULL UNIQUE,
    Password VARCHAR (20) NOT NULL,
    Email VARCHAR(20) NOT NULL,
    Fecha DATETIME NOT NULL,
    PRIMARY KEY (UsuarioId)
);

CREATE TABLE IF NOT EXISTS Publicaciones(
    PublicacionesId INT NOT NULL AUTO_INCREMENT,
    Titulo VARCHAR NOT NULL,
    Mensaje TEXT NOT NULL,
    Fecha DATETIME NOT NULL,
    PRIMARY KEY (PublicacionesId)
);

CREATE TABLE IF NOT EXISTS Comunidades(
    ComunidadesId INT NOT NULL AUTO_INCREMENT,
    Nombre VARCHAR NOT NULL,
    Descripcion TEXT NOT NULL,
    PRIMARY KEY (ComunidadesId)
);

CREATE TABLE IF NOT EXISTS Comentarios(
    ComentarioId INT NOT NULL AUTO_INCREMENT,
    Comentario TEXT NOT NULL,
    Fecha DATETIME NOT NULL,
    PRIMARY KEY (ComentarioId)
);


CREATE TABLE IF NOT EXISTS Mensajes(
    MensajesId INT NOT NULL AUTO_INCREMENT,
    Mensajes TEXT NOT NULL,
    Fecha DATETIME NOT NULL,
    PRIMARY KEY (MensajesId)
);

CREATE TABLE IF NOT EXISTS Favoritos(
    FavoritosId INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (FavoritosId)
);

CREATE TABLE IF NOT EXISTS Administradores(
    AdministradoresId INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (AdministradoresId)
);
CREATE TABLE IF NOT EXISTS Votos(
    VotosId INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (VotosId)
);
