<?php

    Class ProcesosEmpleados
    {
        public function EsEmpleadoRegistrado($cedula_empleado)
        {
                $resultado=Personal::model()->find('cedula=?',array($cedula_empleado));
                if ($resultado!=NULL)
                {
                    return true;
                }
                return false;
        }
        
        public function EsEmpleadoEnGrupoFamiliar($cedula_empleado)
        {
                $resultado=GrupoFamiliar::model()->find('cedula_familiar=?',array($cedula_empleado));
                if ($resultado!=NULL)
                {
                    return true;
                }
                return false;
        }
    }
?>
