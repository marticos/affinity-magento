<?php

namespace Marco\Demotheme\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Cms\Model\BlockFactory;

class InstallData implements InstallDataInterface
{
    protected $blockFactory;

    public function __construct(BlockFactory $blockFactory)
    {
        $this->blockFactory = $blockFactory;
    }

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $blockData = [
            'title' => 'Custom footer block',
            'identifier' => 'custom_footer_block',
            'stores' => [0], // 0 means 'All Store Views'
            'is_active' => 1,
            'content' => 'Cutom footer block content here!'
        ];

        $this->blockFactory->create()->setData($blockData)->save();
    }
}
