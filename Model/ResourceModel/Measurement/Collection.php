<?php

namespace KentoSystems\FitTech\Model\ResourceModel\Measurement;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Initialize resource collection
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('KentoSystems\FitTech\Model\Measurement', 'KentoSystems\FitTech\Model\ResourceModel\Measurement');
    }
}
