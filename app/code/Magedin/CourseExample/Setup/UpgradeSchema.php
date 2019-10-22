<?php

namespace Magedin\CourseExample\Setup;


use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magedin\CourseExample\Api\Data\ExampleInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{
    /**
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        if (version_compare($context->getVersion(), '2.0.1', '<')) {
            $this->createLastnameColumn($setup);
        }
        $setup->endSetup();
    }
    /**
     * @param SchemaSetupInterface $setup
     * @return $this
     */
    private function createLastnameColumn(SchemaSetupInterface $setup)
    {
        $setup->getConnection()
            ->addColumn(
                $setup->getTable(ExampleInterface::TABLE),
                'lastname',
                [
                    'nullable' => false,
                    'type' => Table::TYPE_TEXT,
                    'size' => 256,
                    'comment'=> 'Last Name.'
                ]
                
            );
        return $this;
    }
  
}








?>