id: 12
source: 1
name: MinifyX
description: 'MinifyX is a snippet the allows you to combine and minify JS and CSS files'
category: MinifyX
properties: 'a:10:{s:9:"jsSources";a:7:{s:4:"name";s:9:"jsSources";s:4:"desc";s:22:"minifyx_prop_jsSources";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"minifyx:properties";s:4:"area";s:0:"";}s:10:"cssSources";a:7:{s:4:"name";s:10:"cssSources";s:4:"desc";s:23:"minifyx_prop_cssSources";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"minifyx:properties";s:4:"area";s:0:"";}s:8:"minifyJs";a:7:{s:4:"name";s:8:"minifyJs";s:4:"desc";s:21:"minifyx_prop_minifyJs";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"minifyx:properties";s:4:"area";s:0:"";}s:9:"minifyCss";a:7:{s:4:"name";s:9:"minifyCss";s:4:"desc";s:22:"minifyx_prop_minifyCss";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"minifyx:properties";s:4:"area";s:0:"";}s:10:"jsFilename";a:7:{s:4:"name";s:10:"jsFilename";s:4:"desc";s:23:"minifyx_prop_jsFilename";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:7:"scripts";s:7:"lexicon";s:18:"minifyx:properties";s:4:"area";s:0:"";}s:11:"cssFilename";a:7:{s:4:"name";s:11:"cssFilename";s:4:"desc";s:24:"minifyx_prop_cssFilename";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:6:"styles";s:7:"lexicon";s:18:"minifyx:properties";s:4:"area";s:0:"";}s:10:"registerJs";a:7:{s:4:"name";s:10:"registerJs";s:4:"desc";s:23:"minifyx_prop_registerJs";s:4:"type";s:4:"list";s:7:"options";a:3:{i:0;a:2:{s:5:"value";s:11:"placeholder";s:4:"text";s:11:"Placeholder";}i:1;a:2:{s:5:"value";s:7:"startup";s:4:"text";s:14:"Startup script";}i:2;a:2:{s:5:"value";s:7:"default";s:4:"text";s:7:"Default";}}s:5:"value";s:11:"placeholder";s:7:"lexicon";s:18:"minifyx:properties";s:4:"area";s:0:"";}s:13:"jsPlaceholder";a:7:{s:4:"name";s:13:"jsPlaceholder";s:4:"desc";s:26:"minifyx_prop_jsPlaceholder";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:18:"MinifyX.javascript";s:7:"lexicon";s:18:"minifyx:properties";s:4:"area";s:0:"";}s:11:"registerCss";a:7:{s:4:"name";s:11:"registerCss";s:4:"desc";s:24:"minifyx_prop_registerCss";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:5:"value";s:11:"placeholder";s:4:"text";s:11:"Placeholder";}i:1;a:2:{s:5:"value";s:7:"default";s:4:"text";s:7:"Default";}}s:5:"value";s:11:"placeholder";s:7:"lexicon";s:18:"minifyx:properties";s:4:"area";s:0:"";}s:14:"cssPlaceholder";a:7:{s:4:"name";s:14:"cssPlaceholder";s:4:"desc";s:27:"minifyx_prop_cssPlaceholder";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:11:"MinifyX.css";s:7:"lexicon";s:18:"minifyx:properties";s:4:"area";s:0:"";}}'
static_file: core/components/minifyx/elements/snippets/snippet.minifyx.php

-----

/** @var array $scriptProperties */
if (!$modx->getService('minifyx','MinifyX', MODX_CORE_PATH.'components/minifyx/model/minifyx/')) {return;}
/** @var MinifyX $MinifyX */
$MinifyX = new MinifyX($modx, $scriptProperties);
if (!$MinifyX->prepareCacheFolder()) {
	$modx->log(modX::LOG_LEVEL_ERROR, '[MinifyX] Could not create cache dir "'.$MinifyX->config['cacheFolder'].'"');
	return;
}
$cacheFolderUrl = MODX_BASE_URL . str_replace(MODX_BASE_PATH, '', $MinifyX->config['cacheFolder']);

$array = array(
	'js' => trim($modx->getOption('jsSources', $scriptProperties, '', true)),
	'css' => trim($modx->getOption('cssSources', $scriptProperties, '', true)),
);

foreach ($array as $type => $value) {
	if (empty($value)) {continue;}
	$filename = $MinifyX->config[$type.'Filename'] . '_';
	$extension = $MinifyX->config[$type.'Ext'];
	$register = $MinifyX->config['register'.ucfirst($type)];
	$placeholder = !empty($MinifyX->config[$type.'Placeholder'])
		? $MinifyX->config[$type.'Placeholder']
		: '';

	$files = $MinifyX->prepareFiles($value);
	$properties = array(
		'minify' => $MinifyX->config['minify'.ucfirst($type)]
				? 'true'
				: 'false',
	);

	$result = $MinifyX->Munee($files, $properties);
	$file = $MinifyX->saveFile($result, $filename, $extension);

	// Register file on frontend
	if (!empty($file) && file_exists($MinifyX->config['cacheFolder'] . $file)) {
		if ($register == 'placeholder' && $placeholder) {
			$tag = $type == 'css'
				? '<link rel="stylesheet" href="' . $cacheFolderUrl .  $file . '" type="text/css" />'
				: '<script type="text/javascript" src="' . $cacheFolderUrl . $file . '"></script>';
			$modx->setPlaceholder($placeholder, $tag);
		}
		else {
			if ($type == 'css') {
				$modx->regClientCSS($cacheFolderUrl . $file);
			}
			else {
				if ($register == 'startup') {
					$modx->regClientStartupScript($cacheFolderUrl . $file);
				}
				else {
					$modx->regClientScript($cacheFolderUrl . $file);
				}
			}
		}
	}
}
return;