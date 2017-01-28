<?php
if (file_exists(dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php')) {
    /** @noinspection PhpIncludeInspection */
    require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
}
else {
    require_once dirname(dirname(dirname(dirname(dirname(__FILE__))))) . '/config.core.php';
}
/** @noinspection PhpIncludeInspection */
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CONNECTORS_PATH . 'index.php';
/** @var msFabrics $msFabrics */
$msFabrics = $modx->getService('msfabrics', 'msFabrics', $modx->getOption('msfabrics_core_path', null,
        $modx->getOption('core_path') . 'components/msfabrics/') . 'model/msfabrics/'
);
$modx->lexicon->load('msfabrics:default');

// handle request
$corePath = $modx->getOption('msfabrics_core_path', null, $modx->getOption('core_path') . 'components/msfabrics/');
$path = $modx->getOption('processorsPath', $msFabrics->config, $corePath . 'processors/');
$modx->getRequest();

/** @var modConnectorRequest $request */
$request = $modx->request;
$request->handleRequest(array(
    'processors_path' => $path,
    'location' => '',
));