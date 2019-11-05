<?php

namespace Project\Test\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Project\Test\Helper\Data;

class Index extends Action
{
    protected $_helper;

    public function __construct(
        Context $context,
        Data $helper
    ) {
        parent::__construct($context);
        $this->_helper = $helper;
    }

    /**
     * Execute action based on request and return result
     *
     * Note: Request will be added as operation argument in future
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        var_dump($this->_helper->getIsModuleEnable());
    }
}
