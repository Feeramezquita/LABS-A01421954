CREATE TABLE clienteBanca (
  nocuenta varchar(5) NOT NULL PRIMARY KEY,
  nombre varchar(30) NOT NULL,
  saldo numeric(10, 2) NOT NULL
);
CREATE TABLE tipoMovimiento(
  clavem varchar(2) NOT NULL PRIMARY KEY,
  descripcion varchar(30)
);
CREATE TABLE movimientoBancario (
  nocuenta VARCHAR(5),
  clavem VARCHAR(2),
  fecha TIMESTAMP DEFAULT NOW(),
  monto NUMERIC(10, 2) NOT NULL,
  FOREIGN KEY (noCuenta) REFERENCES clienteBanca(noCuenta),
  FOREIGN KEY (claveM) REFERENCES tipoMovimiento(claveM),
  PRIMARY KEY (noCuenta, claveM, fecha)
);