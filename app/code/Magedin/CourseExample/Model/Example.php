<?php

namespace Magedin\CourseExample\Model;

use \Magedin\CourseExample\Api\Data\ExampleInterface;
use Magento\Framework\Model\AbstractModel;

class Example extends AbstractModel implements ExampleInterface
{
    protected $_eventObject = 'example';
    protected $_eventPrefix = 'tabelaTeste';

    protected function _construct(){
       
        $this->_init(\Magedin\CourseExample\Model\ResourceModel\Example::class);

    }

    public function getId(){
        return $this->getData(ExampleInterface::ID);
    }
    
    public function setId($id){
        return $this->setData(ExampleInterface::ID , $id);
    }

    public function getName(){
        return $this->getData(ExampleInterface::NAME);
    }

    public function setName($name){
        return $this->setData(ExampleInterface::NAME , $name);
    }
    
    public function getLastname(){
        return $this->getData(ExampleInterface::LASTNAME);
    }

    public function setLastname($lastname){
        return $this->setData(ExampleInterface::LASTNAME , $lastname);
    }

}

