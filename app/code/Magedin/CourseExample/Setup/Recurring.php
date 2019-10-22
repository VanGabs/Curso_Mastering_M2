<?php
namespace Magedin\CourseExample\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magedin\CourseExample\Api\Data\ExampleInterface;


class Recurring implements  InstallSchemaInterface
{
    
    public function install(SchemaSetupInterface $setup , ModuleContextInterface $context)
    {
        $setup->startSetup();
        
        $bind = ['name' => 'nome']; 
        
        $setup->getConnection()->update(ExampleInterface::TABLE, $bind);
        
        $setup->endSetup();
    }
}


?>    