<?php

class InformeHoras {

	public function print($empleado)
	{
		echo "printing the timesheet report of " . $empleado->getNombre();
	}
}