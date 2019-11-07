CREATE OR REPLACE FUNCTION REGISTRAR_RETIRO_CAJERO(_nocuenta varchar(5) , _monto numeric(10,2)) RETURNS VOID AS $$
BEGIN
  INSERT INTO movimientoBancario (nocuenta, clavem, monto) VALUES (_nocuenta,'A', _monto);
  UPDATE clientesBanca SET saldo = saldo - _monto WHERE nocuenta = _nocuenta;
END
$$ LANGUAGE plpgsql;

CREATE OR REPLACE FUNCTION REGISTRAR_DEPOSITO_VENTANILLA(_nocuenta varchar(5) , _monto numeric(10,2)) RETURNS VOID AS $$
BEGIN
  INSERT INTO movimientoBancario (nocuenta, claveM, monto) VALUES (_nocuenta,'B', _monto);
  UPDATE clientesBanca SET saldo = saldo + _monto WHERE nocuenta = _nocuenta;
END
$$ LANGUAGE plpgsql;
