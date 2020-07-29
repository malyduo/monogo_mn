<?php
namespace Malyduo\Weather\Controller\Index;

use Malyduo\Weather\Helper\Api;
use Malyduo\Weather\Model\History;

class Cron extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;
	protected $_history;

	const convertC = 273.15;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory,
		\Malyduo\Weather\Model\HistoryFactory $history)
	{
		$this->_pageFactory = $pageFactory;
		$this->_history = $history;
		return parent::__construct($context);
	}

	public function execute()
	{
		$currentWeather = Api::getCurrentWeather();
		if($currentWeather) {
			try {
				$history = $this->_history->create();
				$history->setData([
					'city' => $currentWeather->name,
					'temp' => $currentWeather->main->temp - self::convertC,
					'humidity' => $currentWeather->main->humidity,
					'pressure' => $currentWeather->main->pressure,
					'status' => 1,
				])
				->save();
				echo 'success';
			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}
	}
}