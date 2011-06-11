<?php
class Row_Order extends Zend_Db_Table_Row_Abstract
{
    private $user = null;
    private $itens = null;

    /**
     * getUser
     *
     * @return <User Row> $user
     */
    public function getUser()
    {
        if(!$this->user)
        {
            $this->user = $this->findParentRow('User');
        }

        return $this->user;
    }

    /**
     * getItens
     *
     * @return <Itens Rowset> $itens
     */
    public function getItens()
    {
        if(!$this->itens)
        {
            // modelo OrderItem
            $orderItem = new OrderItem();

            // resgata itens com quantidade
            $this->itens = $orderItem->findByOrder($this->order_id);
        }

        return $this->itens;
    }
}