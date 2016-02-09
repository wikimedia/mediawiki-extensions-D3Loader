<?php

$wgExtensionCredits['validextensionclass'][] = array(
    'path' => __FILE__,
    'name' => 'D3Loader',
    'author' => 'Leonid Verhovskij', 
    'url' => 'https://www.mediawiki.org/wiki/Extension:D3Loader', 
    'description' => 'This Extension simply load D3.js to make it available for other extensions',
    'version'  => 1.0
);

$myResourceTemplate = array(
	'localBasePath' => __DIR__ . '/resources',
	'remoteExtPath' => 'D3Loader/resources',
	'group' => 'ext.d3loader'
);

$wgResourceModules['ext.d3loader.js'] = $myResourceTemplate + array(
	'scripts' => array(
		'd3.min.js'
	)
);

$wgHooks["BeforePageDisplay"][] = function( OutputPage $out ){
	$out->addModuleScripts('ext.d3loader.js');
	return true;
};

