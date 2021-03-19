<?php

namespace KentoSystems\FitTech\Model;

use Magento\Framework\Model\AbstractModel;


class Measurement extends AbstractModel
{

    protected function _construct()
    {
        $this->_init(\KentoSystems\FitTech\Model\ResourceModel\Measurement::class);
    }
    
}
