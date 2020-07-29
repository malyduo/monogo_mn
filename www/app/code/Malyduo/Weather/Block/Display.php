<?php
namespace Malyduo\Weather\Block;

class Display extends \Magento\Framework\View\Element\Template
{
	private $_history;

	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\Malyduo\Weather\Model\History $history
		)
	{
		$this->_history = $history;

		parent::__construct($context);
	}

	public function displayCurrentWeather()
	{
		$collection = $this->_history->getCollection();
		return $collection->getLastItem()->getData();
	}
}