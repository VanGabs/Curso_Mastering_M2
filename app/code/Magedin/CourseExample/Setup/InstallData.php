<?php
namespace Magedin\CourseExample\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magedin\CourseExample\Api\Data\ExampleInterface;


class InstallData implements InstallSchemaInterface
{
    /**
    * @param ModuleDataSetupInterface $setup
    * @param ModuleContextInterface $context
    */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $data =  [
            'id' => '13',
            'name' => 'Gabriele',
            'lastname' => 'Silva',
            
        ];
        
        $setup->getConnection()
        ->insert(
            ExampleInterface::TABLE ,
            $data
        );
        $setup->endSetup();
    }
}