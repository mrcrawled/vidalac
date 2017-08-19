<?php
/**
 * @package     Aplicacion
 * @subpackage  Afip
 * @class       Afip_Model_DbTable_AfipProvincias * @extends     Rad_Db_Table
 * @copyright   SmartSoftware Argentina
 */
class Afip_Model_DbTable_AfipProvincias extends Rad_Db_Table
{
    protected $_name = 'AfipProvincias';

    protected $_sort = array('Descripcion asc');    

    protected $_referenceMap = array(
            );

    protected $_dependentTables = array('Base_Model_DbTable_Provincias');
}