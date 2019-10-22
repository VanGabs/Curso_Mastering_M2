<?php
namespace Magedin\CourseExample\Controller\Examples;
use Magento\Framework\App\ResponseInterface;

class index extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        echo "This test is ok.";
        die();
    }
}


?>