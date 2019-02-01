<?php
/**  
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; under version 2
 * of the License (non-upgradable).
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 * 
 * Copyright (c) 2019 (original work) bhargavi krishnamachari;
 *               
 * 
 */

/**
 * Generated using taoDevTools 4.1.1
 */


 new bhargavi\bhargaviext\model\SaveCounterService();

return array(
    'name' => 'bhargaviext',
    'label' => 'bhargaviext',
    'description' => '',
    'license' => 'GPL-2.0',
    'version' => '0.1.0',
    'author' => 'bhargavi krishnamachari',
    'requires' => array(
        'tao' => '>=24.3.0'
    ),
    'managementRole' => 'http://www.tao.lu/Ontologies/generis.rdf#bhargaviextManager',
    'acl' => array(
        array('grant', 'http://www.tao.lu/Ontologies/generis.rdf#bhargaviextManager', array('ext'=>'bhargaviext')),
    ),
    'install' => array(
	'php' => array(
		/bhargavi/bhargaviext/scripts/install/RegisterItemUpdateEvent::class,
	),
	'rdf' => array(
		__DIR__ . '/scripts/install/count.rdf',
	),
    ),
    'uninstall' => array(
    ),
    'routes' => array(
        '/bhargaviext' => 'bhargavi\\bhargaviext\\controller'
    ),    
    'constants' => array(
        # views directory
        "DIR_VIEWS" => dirname(__FILE__).DIRECTORY_SEPARATOR."views".DIRECTORY_SEPARATOR,
        
        #BASE URL (usually the domain root)
        'BASE_URL' => ROOT_URL.'bhargaviext/',
    ),
    'extra' => array(
        'structures' => dirname(__FILE__).DIRECTORY_SEPARATOR.'controller'.DIRECTORY_SEPARATOR.'structures.xml',
    )
);
