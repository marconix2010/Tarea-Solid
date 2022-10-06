<?php

/**
* Guardar no tiene sentido para un documento de solo lectura.
  * Esta clase intenta resolver este problema restableciendo el comportamiento base.
  * en un método anulado.
  *
  * El método base no tiene esta restricción. Esto significa que el cliente
  * el código se romperá si no verificamos el tipo de documento antes de guardarlo.
 */
class ReadOnlyDocument extends Document {

    public function save()
    {
        throw new Exception("Unable to save read-only file");
    }
}