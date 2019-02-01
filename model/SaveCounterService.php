<?php
namespace bhargavi\bhargaviext\model; 

use oat\oatbox\service\ConfigurableService;
use oat\taoItems\model\event\ItemUpdatedEvent;

class SaveCounterService extends ConfigurableService
{
	const SERVICE_ID = 'bhargaviext/saveCounter';

	public function onItemUpdate(ItemUpdatedEvent $event)
	{
		$this->logDebug('Item has been updated');
	}
}

