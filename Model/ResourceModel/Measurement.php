<?php

namespace KentoSystems\FitTech\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;


class Measurement extends AbstractDb
{
    /**
     * Initialize resource
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('fittech_measurments_data', 'order_id');
    }
}
