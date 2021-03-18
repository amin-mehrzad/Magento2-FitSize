<?php
namespace KentoSystems\FitTech\Block;

class Success extends \Magento\Framework\View\Element\Template
{
    public function getTxt()
    {
        $params = (array) $this->getRequest()->getParams();
        return json_encode($params);
    }
}