<?php
class Rowset_OrderItem extends Zend_Db_Table_Rowset_Abstract
{
    /**
     * getAsArray
     *
     * @return <array> $itens
     */
    public function getAsArray()
    {
        $itens = array();
        foreach($this as $item)
        {
            $itens[] = array('name'=>$item->name, 'amount'=>$item->amount);
        }
        return $itens;
    }
}