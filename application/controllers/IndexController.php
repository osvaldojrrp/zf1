<?php

    class IndexController extends Zend_Controller_Action
    {

        private $logger;

        /* Metodo de Inicializacao da Action */
        public function init()
        {
                $this->logger = Zend_Registry::get('logger');
        }

        /* Conteudo da Action */
        public function indexAction()
        {
            $this->logger->log('Mensagem de Debug', Zend_Log::DEBUG);
        }

    }