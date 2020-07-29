<?php
namespace Malyduo\Weather\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory)
	{
		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		// echo "Hello World";
		// exit;

		$pageFactory = $this->_pageFactory->create();
        $pageFactory->getConfig()->getTitle()->prepend(__('Weather'));

        return $pageFactory;
	}
}