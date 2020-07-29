<?php
namespace Malyduo\Weather\Model;
 
class History extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
        protected function _construct()
        {
                $this->_init('Malyduo\Weather\Model\ResourceModel\History');
        }
 
        public function getIdentities()
        {
                return [self::CACHE_TAG . '_' . $this->getId()];
        }
 
        public function getDefaultValues()
        {
                $values = [];
 
                return $values;
        }
}