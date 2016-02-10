<?php

/**
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 * 
 * @file
 */

/**
 * D3js is an awesom library for data-driven documents
 * https://d3js.org/
 * 
 */

if (!defined('MEDIAWIKI')) {
	die("This is an extension to the MediaWiki package and cannot be run standalone.");
}

$wgExtensionCredits['validextensionclass'][] = array(
	'path' => __FILE__,
	'name' => 'D3Loader',
	'author' => 'Leonid Verhovskij',
	'url' => 'https://www.mediawiki.org/wiki/Extension:D3Loader',
	'description' => 'This Extension simply load D3.js to make it available for other extensions',
	'version' => 1.0
);

$myResourceTemplate = array(
	'localBasePath' => __DIR__ . '/resources',
	'remoteExtPath' => 'D3Loader/resources',
	'group' => 'ext.d3'
);

$wgResourceModules['ext.d3'] = $myResourceTemplate + array(
	'scripts' => array(
		'd3.min.js'
	)
);

$wgHooks["BeforePageDisplay"][] = function( OutputPage $out ) {
	$out->addModuleScripts('ext.d3');
	return true;
};

