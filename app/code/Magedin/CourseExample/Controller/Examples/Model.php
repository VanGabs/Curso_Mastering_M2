<?php

namespace Magedin\CourseExample\Controller\Examples;
use Magento\Framework\App\ResponseInterface;

class Model extends \Magento\Framework\App\Action\Action
{
    protected $model;

    // public function __constructor(
    //     \Magento\Framework\App\Action\Context $context,
    //     \Magento\CourseExample\Api\Data\ExampleInterface  $model
    // ){
    //     parent::__constructor($context);
    //     $this->model = $model;
    // }    
    
    public function execute()
    {
    //    $this->model->load(1;
        echo "Deu certoo";
    }
}
?>