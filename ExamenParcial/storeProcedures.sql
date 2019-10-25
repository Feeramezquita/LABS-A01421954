DELIMITER $$
CREATE PROCEDURE AgregarEstado(
    IN nm VARCHAR(50)
)
BEGIN
    INSERT INTO Estado(Nombre) VALUES (nm);
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE AgregarZombie(
    IN nm VARCHAR(50),
    IN estado INT
)
BEGIN
    INSERT INTO Zombie(Nombre, ID_Estado) VALUES (nm, Estado);
END $$
DELIMITER ;


DELIMITER $$
CREATE PROCEDURE AgregarRegistro(
    IN Zombie int,
    IN Estado int
)
BEGIN
    INSERT INTO Registros(ID_Zombie, ID_Estado) VALUES (Zombie, Estado);
    UPDATE Zombie SET ID_Estado = Estado WHERE ID = Zombie;
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE ObtenerZombie()
BEGIN
    SELECT * FROM Zombie;
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE ObtenerEstados()
BEGIN
    SELECT * FROM Estado;
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE ObtenerRegistro()
BEGIN
    SELECT * FROM Registros;
END $$
DELIMITER ;

call ObtenerRegistro();

DELIMITER $$
CREATE PROCEDURE ObtenerCantidadZombie()
BEGIN
    SELECT COUNT(ID) FROM Zombie;
END $$
DELIMITER ;


DELIMITER $$
CREATE PROCEDURE obtenerCantidadZombiesPorEstado()
BEGIN
    SELECT E.Nombre, COUNT(Z.Id) 
    FROM Zombie Z, Estado E
    Where Z.Id_Estado = E.id
    GROUP BY Z.Id_Estado, E.Id;
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE vigencia()
BEGIN
    SELECT * FROM Registros
    ORDER BY fecha DESC;
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE obtenerCantidadZombiesPorBusqueda(
    IN Estado int
)
BEGIN
    SELECT COUNT(ID)
    FROM Zombie
    WHERE ID_Estado = Estado;
END $$
DELIMITER ;


DELIMITER $$
CREATE PROCEDURE obtenerRegistrosPorBusqueda(
    IN estado int
)
BEGIN
    SELECT Z.Nombre, R.fecha, E.Nombre
    FROM Registro R, Zombie Z, Estado E
    WHERE R.ID_Estado = estado AND R.ID_Estado = E.ID AND R.ID_Zombie = Z.ID;
END $$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE obtenerRegistrosPorUsuario(
    IN zombie int
)
BEGIN
    SELECT Z.Nombre, R.fecha, E.Nombre AS Estado
    FROM Registros R, Zombie Z, Estado E
    WHERE R.ID_Zombie = zombie AND R.ID_Estado = E.ID AND R.ID_Zombie = Z.ID;
END $$
DELIMITER ;