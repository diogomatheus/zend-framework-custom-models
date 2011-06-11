<?php
class IndexController extends Zend_Controller_Action
{
    public function indexAction()
    {
        // modelo
        $order = new Order();

        // resgata um pedido
        $pedido = $order->find(1)->current();
        $this->view->assign('pedido', $pedido);
    }
}