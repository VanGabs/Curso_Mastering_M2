<?php
namespace Project\Test\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup , ModuleContextInterface $context)
    {
        $setup->startSetup();

        $table= $setup->getConnection()->newTable(
            $setup->getTable('Estagiarios')
        )->addColumn(
            'id',
            Table::TYPE_INTEGER,
            null,
            ['identity'=> true, 'nullable'=>false,'primary'=>true],
            'Estagiario id'
        )->addColumn(
            'name',
            Table::TYPE_TEXT,
            255,
            ['nullable'=>false],
            'Item name'
    )->addIndex(
        $setup->getIdxName('Estagiarios',['name']),
        ['name']
    )->setComment(
        'Tabela de nomes'
    );

    $setup->getConnection()->createTable($table);

        $setup->endSetup();
    }
}
