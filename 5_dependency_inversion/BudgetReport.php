<?php

/**
* La clase BudgetReport depende de una abstracción. Ahora es más fácil cambiar el sistema de base de datos.
  * Cuando creamos una instancia de la clase BudgetReport, necesitamos pasar un objeto de PostgreSQL
  * a esta clase, en lugar de MySQL.
  *
  * Como resultado, la dirección de la dependencia original se ha invertido: Clases de bajo nivel
  * ahora dependen de abstracciones de alto nivel.
 */
class BudgetReport {
    
    private $db;

    public function __construct(DBInterface $db)
    {
        $this->db = $db;
    }

    public function open()
    {
        echo "open report";
    }

    public function save()
    {
        echo "save report";
    }
}