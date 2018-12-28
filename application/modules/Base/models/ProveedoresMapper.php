<?php

class Base_Model_ProveedoresMapper extends Rad_Mapper
{
    protected $_class = 'Base_Model_DbTable_Proveedores';

    public function getIBProximosVencimientosCM05($persona)
    {
        $db = Zend_Registry::get('db');
        return $db->fetchOne("SELECT COUNT(Id) FROM personasingresosbrutos WHERE Persona = $persona AND FechaVencimientoCM05 IS NOT NULL AND FechaVencimientoCM05 < CURDATE()");
    }
<<<<<<< HEAD

    
=======
}

        return $db->fetchOne("SELECT COUNT(Id) FROM personasingresosbrutos WHERE Persona = $persona AND FechaVencimientoCM05 IS NOT NULL AND FechaVencimientoCM05 < CURDATE() AND FechaBaja IS NULL");
    }

>>>>>>> master
    public function getIBItems($persona)
    {
        $db = Zend_Registry::get('db');
        return $db->fetchOne("SELECT COUNT(Id) FROM personasingresosbrutos WHERE Persona = $persona AND FechaBaja IS NULL");
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> master
