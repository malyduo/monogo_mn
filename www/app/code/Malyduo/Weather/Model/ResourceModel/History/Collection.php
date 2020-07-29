<?php
namespace Malyduo\Weather\Model\ResourceModel\History;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'id';
	protected $_eventPrefix = 'malyduo_weather_collection';
	protected $_eventObject = 'weather_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Malyduo\Weather\Model\History', 'Malyduo\Weather\Model\ResourceModel\History');
	}

}
