<?php
class OrderItem extends Zend_Db_Table_Abstract
{
    /**
    * The default table name
    */
    protected $_name = 'order_item';
    
    /**
     * The default Rowset Class
     */
    protected $_rowsetClass = 'Rowset_OrderItem';

    /**
    * Reference map
    */
    protected $_referenceMap = array
    (
        array(
            'refTableClass' => 'Order',
            'refColumns' => 'order_id',
            'columns' => 'order_id',
        ),
        array(
            'refTableClass' => 'Product',
            'refColumns' => 'product_id',
            'columns' => 'product_id',
        )
    );

    /**
     * findByOrder
     *
     * @param <int> $order
     */
    public function findByOrder($order)
    {
        $select = $this->select()
                       ->setIntegrityCheck(false)
                       ->from(array('o'=>'order'), array())
                       ->joinInner(array('i'=>'order_item'), 'o.order_id = i.order_id',
                               array('amount'))
                       ->joinInner(array('p'=>'product'), 'i.product_id = p.product_id')
                       ->where('o.order_id = ?', $order);

        return $this->fetchAll($select);
    }
}