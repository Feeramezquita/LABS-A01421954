BEGIN;
  INSERT INTO tipoMovimiento(clavem, descripcion) VALUES 
('m1', 'Deposito'),
('m2', 'Retiro'),
('m3', 'Consulta de Saldo');
COMMIT;

BEGIN;
  INSERT INTO tipoMovimiento (nocuenta, clavem, Monto) VALUES('00001z', 'Santi', 500);
  UPDATE clientesBanca SET Saldo = Saldo - 500 WHERE nocuenta = '00001';
COMMIT;
