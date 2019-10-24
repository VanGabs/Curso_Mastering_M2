<?php

namespace Project\Test\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if (version_compare($context->getVersion(), '1.0.1', '<')) {
            $setup->getConnection()->addColumn(
                $setup->getTable('Estagiarios'),
                'sobrenome',
                [
                    'type'=>Table::TYPE_TEXT,
                    'nullable'=> true,
                    'comment'=> 'sobrenome'
                ]
            );
        }
        $setup->endSetup();
    }
}
