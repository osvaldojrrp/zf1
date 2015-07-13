<?php


class CustomerController extends Zend_Controller_Action
{

    public function indexAction()
    {
        // TODO Auto-generated CustomerController::indexAction() default action
    }

    public function createAction()
    {
        $config = new Zend_Config_Ini(APPLICATION_PATH . '/configs/forms/customer.ini', 'create');
        $this->view->form = new Application_Form_Customer($config);
    }

    public function editAction()
    {
        $config = new Zend_Config_Ini(APPLICATION_PATH . '/configs/forms/customer.ini', 'edit');
        $this->view->form = new Application_Form_Customer($config);
    }
}