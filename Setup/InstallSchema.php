<?php

namespace KentoSystems\FitTech\Setup;

use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $conn = $setup->getConnection();
        $tableName = $setup->getTable('fittech_measurments_data');
        if ($conn->isTableExists($tableName) != true) {
            $table = $conn->newTable($tableName)
                ->addColumn(
                    'order_id',
                    Table::TYPE_INTEGER,
                    null,
                    ['identity' => false,'unsigned' => true, 'nullable' => false, 'primary' => true]
                )
                ->addColumn(
                    'neck',
                    Table::TYPE_FLOAT,
                    null,
                    ['nullable' => true, 'default' => null, 'unsigned' => true,]
                )
                ->addColumn(
                    'chest',
                    Table::TYPE_FLOAT,
                    null,
                    ['nullable' => true, 'default' => null, 'unsigned' => true,]
                )
                ->addColumn(
                    'stomach',
                    Table::TYPE_FLOAT,
                    null,
                    ['nullable' => true, 'default' => null, 'unsigned' => true,]
                )
                ->addColumn(
                    'seat',
                    Table::TYPE_FLOAT,
                    null,
                    ['nullable' => true, 'default' => null, 'unsigned' => true,]
                )
                ->addColumn(
                    'shoulder',
                    Table::TYPE_FLOAT,
                    null,
                    ['nullable' => true, 'default' => null, 'unsigned' => true,]
                )
                ->addColumn(
                    'bicep',
                    Table::TYPE_FLOAT,
                    null,
                    ['nullable' => true, 'default' => null, 'unsigned' => true,]
                )
                ->addColumn(
                    'sleeve_l',
                    Table::TYPE_FLOAT,
                    null,
                    ['nullable' => true, 'default' => null, 'unsigned' => true,]
                )
                ->addColumn(
                    'sleeve_r',
                    Table::TYPE_FLOAT,
                    null,
                    ['nullable' => true, 'default' => null, 'unsigned' => true,]
                )
                ->addColumn(
                    'front_shoulder',
                    Table::TYPE_FLOAT,
                    null,
                    ['nullable' => true, 'default' => null, 'unsigned' => true,]
                )
                ->addColumn(
                    'nape_to_waist',
                    Table::TYPE_FLOAT,
                    null,
                    ['nullable' => true, 'default' => null, 'unsigned' => true,]
                )
                ->addColumn(
                    'back_length',
                    Table::TYPE_FLOAT,
                    null,
                    ['nullable' => true, 'default' => null, 'unsigned' => true,]
                )
                ->addColumn(
                    'front_waist_length',
                    Table::TYPE_FLOAT,
                    null,
                    ['nullable' => true, 'default' => null, 'unsigned' => true,]
                )
                ->addColumn(
                    'waist',
                    Table::TYPE_FLOAT,
                    null,
                    ['nullable' => true, 'default' => null, 'unsigned' => true,]
                )
                ->addColumn(
                    'thigh',
                    Table::TYPE_FLOAT,
                    null,
                    ['nullable' => true, 'default' => null, 'unsigned' => true,]
                )
                ->addColumn(
                    'u_rise',
                    Table::TYPE_FLOAT,
                    null,
                    ['nullable' => true, 'default' => null, 'unsigned' => true,]
                )
                ->addColumn(
                    'back_waist',
                    Table::TYPE_FLOAT,
                    null,
                    ['nullable' => true, 'default' => null, 'unsigned' => true,]
                )
                ->addColumn(
                    'front_waist',
                    Table::TYPE_FLOAT,
                    null,
                    ['nullable' => true, 'default' => null, 'unsigned' => true,]
                )
                ->addColumn(
                    'outseam_l',
                    Table::TYPE_FLOAT,
                    null,
                    ['nullable' => true, 'default' => null, 'unsigned' => true,]
                )
                ->addColumn(
                    'outseam_r',
                    Table::TYPE_FLOAT,
                    null,
                    ['nullable' => true, 'default' => null, 'unsigned' => true,]
                )
                ->addColumn(
                    'knee',
                    Table::TYPE_FLOAT,
                    null,
                    ['nullable' => true, 'default' => null, 'unsigned' => true,]
                )
                ->addColumn(
                    'pant_bottom',
                    Table::TYPE_FLOAT,
                    null,
                    ['nullable' => true, 'default' => null, 'unsigned' => true,]
                )
                ->addColumn(
                    'calf_girth',
                    Table::TYPE_FLOAT,
                    null,
                    ['nullable' => true, 'default' => null, 'unsigned' => true,]
                )
                ->setOption('charset', 'utf8');
            $conn->createTable($table);
        }
        $setup->endSetup();
    }
}
