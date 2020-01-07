<?php

Class PaginationCreation{

    private $_numberPage;
    private $_current;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }
    public function hydrate(array $data)
    {
        if (isset($data['numberPage'])) {
            $this->setNumberPage($data['numberPage']);
        }
        if (isset($data['current'])) {
            $this->setCurrent($data['current']);
        }
    }
    // GETTERS
    
    
    public function numberPage()
    {
        return $this->_numberPage;
    }
    public function current()
    {
        return $this->_current;
    }

    // SETTERS
    
    public function setNumberPage($numberPage)
    {
        $this->_numberPage = $numberPage;
    }
    public function setCurrent($current)
    {
        $this->_current = $current;
    }

}     




?>