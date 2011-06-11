<?php
class Product extends Zend_Db_Table_Abstract
{
    /**
    * The default table name
    */
    protected $_name = 'product';

    /**
    * Dependent tables
    */
    protected $_dependentTables = array('OrderItem');

    /**
    * Reference map
    */
    protected $_referenceMap = array
    (
        array(
            'refTableClass' => 'User',
            'refColumns' => 'user_id',
            'columns' => 'user_id',
        )
    );
}