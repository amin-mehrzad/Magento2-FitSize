<?php

namespace KentoSystems\FitTech\Controller\Page;

use Magento\Framework\Controller\ResultFactory;

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
			$firstname   = $post['firstname'];
			$lastname    = $post['lastname'];
			$phone       = $post['phone'];
			$bookingTime = $post['bookingTime'];

			// Doing-something with...

			// Display the succes form validation message
			$this->messageManager->addSuccessMessage('Booking done !');

			// Redirect to your form page (or anywhere you want...)
			$resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
			$resultRedirect->setUrl('/companymodule/index/booking');

			return $resultRedirect;
		}
		return $this->_pageFactory->create();
	}
}
