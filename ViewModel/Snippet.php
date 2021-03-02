<?php
/**
 * Copyright © 2020 All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Xigen\MarkerIo\ViewModel;

use Xigen\MarkerIo\Helper\Config;
use Magento\Framework\DataObject;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class Snippet extends DataObject implements ArgumentInterface
{
    /**
     * @var \Xigen\MarkerIo\Helper\Config
     */
    protected $config;

    /**
     * @param \Xigen\MarkerIo\Helper\Config $config
     */
    public function __construct(
        Config $config
    ) {
        $this->config = $config;
        parent::__construct();
    }

    /**
     * @return string
     */
    public function getDestination()
    {
        return $this->config->getDestination();
    }
}
