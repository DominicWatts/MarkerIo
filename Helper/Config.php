<?php

/**
 * Copyright © 2020 All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Xigen\MarkerIo\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class Config extends AbstractHelper
{

    const XML_ENABLED = 'xigen/markerio/enabled';
    const XML_DESTINATION = 'xigen/markerio/destination';

    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * @param \Magento\Framework\App\Helper\Context $context
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        Context $context,
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context);
    }

    /**
     * Is to show snippet enabled
     * @param null|int|string $storeId
     * @return bool
     */
    public function isShowSnippet($storeId = null): bool
    {
        return $this->scopeConfig->isSetFlag(
            self::XML_ENABLED,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }

    /**
     * Get destination string
     * @param null|int|string $scopeCode
     * @return mixed
     */
    public function getDestination($storeId = null)
    {
        return $this->scopeConfig->getValue(
            self::XML_DESTINATION,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }
}
