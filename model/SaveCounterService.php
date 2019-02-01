<?php
namespace bhargavi\bhargaviext\model; 

use oat\oatbox\service\ConfigurableService;
use oat\taoItems\model\event\ItemUpdatedEvent;
use oat\generis\model\OntologyAwareTrait; 

class SaveCounterService extends ConfigurableService
{
	use OntologyAwareTrait;
	
	const SERVICE_ID = 'bhargaviext/saveCounter';
	const PROPERTY_COUNT = 'http://www.tao.lu/Ontologies/TAOItem.rdf#Count'; 

	public function onItemUpdate(ItemUpdatedEvent $event)
	{
		$item = $this->getResource($event->getItemUri());
		$property = $this->getProperty(self::PROPERTY_COUNT);
		$value = (integer) $item->getOnePropertyValue($property);

		$this->logDebug('Item has been updated with hte following value: ' . $value);

		$value++;

		$item->editPropertyValues($property,$value);
	}
}

