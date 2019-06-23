CREATE TABLE IF NOT EXISTS Usuarios(
    UsuarioId INT NOT NULL AUTO_INCREMENT,
    Username VARCHAR(20) NOT NULL UNIQUE,
    Password VARCHAR (20) NOT NULL,
    Email VARCHAR(20) NOT NULL UNIQUE,
    PRIMARY KEY (UsuarioId)
);

CREATE TABLE IF NOT EXISTS Publicaciones(
    PublicacionesId INT NOT NULL AUTO_INCREMENT,
    Titulo VARCHAR NOT NULL,
    Mensaje TEXT NOT NULL,
    Fecha DATETIME NOT NULL,
    Username VARCHAR(20) NOT NULL,
    FOREIGN KEY (Username) REFERENCES Usuarios (UsuarioId)
    PRIMARY KEY (PublicacionesId)
);

CREATE TABLE IF NOT EXISTS Comunidades(
    ComunidadesId INT NOT NULL AUTO_INCREMENT,
    Nombre VARCHAR NOT NULL,
    Descripcion TEXT NOT NULL,
    PRIMARY KEY (ComunidadesId)
);

CREATE TABLE IF NOT EXISTS Comentarios(
    ComentarioId INT AUTO_INCREMENT,
    Texto TEXT NOT NULL,
    Fecha DATETIME NOT NULL,
    UsuarioId INT NOT NULL,
    PublicacionId INT NOT NULL,
    PRIMARY KEY(ComentarioId),
    FOREIGN KEY (UsuarioId) REFERENCES Usuarios(UsuarioId),
    FOREIGN KEY (PublicacionId) REFERENCES Publicaciones(PublicacionId) 
);

CREATE TABLE IF NOT EXISTS Mensajes(
    MensajeId INT AUTO_INCREMENT,
    Texto TEXT NOT NULL,
    Fecha DATETIME NOT NULL,
    RemitenteId INT NOT NULL,
    DestinatarioId INT NOT NULL,
    PRIMARY KEY(MensajeId),
    FOREIGN KEY (RemitenteId) REFERENCES Usuarios(UsuarioId),
    FOREIGN KEY (DestinatarioId) REFERENCES Usuarios(UsuarioId)
);

CREATE TABLE IF NOT EXISTS Favoritos(
    FavoritosId INT NOT NULL AUTO_INCREMENT,
    ComunidadesId INT NOT NULL, 
    PRIMARY KEY (FavoritosId),
    FOREIGN KEY (ComunidadesId) REFERENCES Comunidades(ComunidadesId)
);

CREATE TABLE IF NOT EXISTS Administradores(
    AdministradoresId INT NOT NULL AUTO_INCREMENT,
    ComunidadesId INT NOT NULL,
    PRIMARY KEY (AdministradoresId),
    FOREIGN KEY (ComunidadesId) REFERENCES Comunidades(ComunidadesId) 
);

CREATE TABLE IF NOT EXISTS Votos(
    VotosId INT NOT NULL AUTO_INCREMENT,
    PublicacionesId INT NOT NULL,
    PRIMARY KEY (VotosId),
    FOREIGN KEY (PublicacionId) REFERENCES Publicaciones(PublicacionId)
);
