<?php

namespace Magedin\CourseExample\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magedin\CourseExample\Api\Data\ExampleInterface;



class Example extends AbstractDb
{
    
    public function _construct()
    {   
        $this->_init(ExampleInterface::TABLE , 'id');
    }
}








?>