<?php
class User extends Zend_Db_Table_Abstract
{
    /**
    * The default table name
    */
    protected $_name = 'user';

    /**
    * Dependent tables
    */
    protected $_dependentTables = array('Product', 'Order');
}