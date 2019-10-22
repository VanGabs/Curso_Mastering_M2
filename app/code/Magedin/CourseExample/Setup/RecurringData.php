<?php

namespace Magedin\CourseExample\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magedin\CourseExample\Api\Data\ExampleInterface;


class RecurringData implements InstallDataInterface
{
    
    public function install(ModuleDataSetupInterface $setup , ModuleContextInterface  $context)
    {
        $setup->startSetup();
        
        $bind = ['lastname' => 'adssadsa']; 
        
        $setup->getConnection()->update(ExampleInterface::TABLE, $bind ,
        'lastname = "Silva"'    
        );
        
        $setup->endSetup();
    }
}

?>
