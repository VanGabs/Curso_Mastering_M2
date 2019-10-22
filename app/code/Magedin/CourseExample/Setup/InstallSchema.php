<?php

namespace Magedin\CourseExample\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magedin\CourseExample\Api\Data\ExampleInterface;
use Magento\Framework\DB\Db\Table as DBTABLE;

class InstallSchema implements InstallSchemaInterface
{
    const TABLE = 'tabelaTeste';

    public function install(SchemaSetupInterface $setup , ModuleContextInterface $context)
    {  
        
        $setup->startSetup();
        
        $setup->getConnection()->dropTable($setup->getTable(ExampleInterface::TABLE));
        
        
        $table = $setup->getConnection()
        ->newTable($setup->getTable(ExampleInterface::TABLE))
        ->addColumn(
            'id', 
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            [
                'identity' => true,
                'nullable' => false,
                'primary' => true
            ],
            'Table ID.'
            )
            ->addColumn(
                'name',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                256,
                ['nullable' => true],
                'Random name.'
            );
            
            $setup->getConnection()->createTable($table);   
            $setup->endSetup();
        }
    }
    
?>