<?php

namespace KentoSystems\FitTech\Controller\Page;

use phpDocumentor\Reflection\Types\Integer;

class View extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;
	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory
	) {
		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		// 1. POST request : Get booking data
		$post = (array) $this->getRequest()->getPost();

		if (!empty($post)) {
			// Retrieve your form data
			$neck = $post['neck'];
			$chest = $post['chest'];
			$stomach  = $post['stomach'];
			$seat = $post['seat'];
			$bicep = $post['bicep'];
			$shoulder = $post['shoulder'];
			$sleeveL = $post['sleeveL'];
			$sleeveR = $post['sleeveR'];
			$frontShoulder = $post['frontShoulder'];
			$napeToWaist = $post['napeToWaist'];
			$backLength = $post['backLength'];
			$waist = $post['waist'];
			$thigh = $post['thigh'];
			$URise = $post['URise'];
			$backWaist = $post['backWaist'];
			$frontWaist = $post['frontWaist'];
			$outseamL = $post['outseamL'];
			$outseamR = $post['outseamR'];
			$knee = $post['knee'];
			$pantBottom = $post['pantBottom'];
			$calfGirth = $post['calfGirth'];

			// Doing-something with...
			$measurement = $this->_objectManager->create('KentoSystems\FitTech\Model\Measurement');

			$measurement->setOrderId((Integer)$neck);
			$measurement->setNeck($neck);
			$measurement->setChest($chest);
			$measurement->setStomach($stomach);
			$measurement->setSeat($seat);
		//	$measurement->setSeat($seat);  //TODO sholder
			$measurement->setBicep($bicep);
			$measurement->setSleeveL($sleeveL);
			$measurement->save();

			// Display the succes form validation message
			$this->messageManager->addSuccessMessage('Measurement saved successfully !');

			// Redirect to your form page (or anywhere you want...)
			$resultRedirect = $this->resultRedirectFactory->create(['data'=> $post]);
			$resultRedirect->setPath('measurment/page/success',$post);
			return $resultRedirect;
		}
		return $this->_pageFactory->create();
	}
}
