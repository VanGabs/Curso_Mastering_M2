<?php
namespace Magedin\CourseExample\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;
use Magedin\CourseExample\Api\Data\ExampleInterface;


class UpgradeData implements UpgradeDataInterface
{
    /**
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        if (version_compare($context->getVersion(), '2.0.3', '<')) {
            $table = $setup->getTable(ExampleInterface::TABLE);
            $setup->getConnection()
                ->insertForce(
                    $table,
                    [
                        'id' => '15',
                        'name' => 'Gabs',
                        'lastname' => 'Santos'
                        
                    ]
                );
        }
        $setup->endSetup();
    }
}