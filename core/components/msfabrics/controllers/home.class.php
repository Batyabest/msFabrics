<?php

/**
 * The home manager controller for msFabrics.
 *
 */
class msFabricsHomeManagerController extends modExtraManagerController
{
    /** @var msFabrics $msFabrics */
    public $msFabrics;


    /**
     *
     */
    public function initialize()
    {
        $path = $this->modx->getOption('msfabrics_core_path', null,
                $this->modx->getOption('core_path') . 'components/msfabrics/') . 'model/msfabrics/';
        $this->msFabrics = $this->modx->getService('msfabrics', 'msFabrics', $path);
        parent::initialize();
    }


    /**
     * @return array
     */
    public function getLanguageTopics()
    {
        return array('msfabrics:default');
    }


    /**
     * @return bool
     */
    public function checkPermissions()
    {
        return true;
    }


    /**
     * @return null|string
     */
    public function getPageTitle()
    {
        return $this->modx->lexicon('msfabrics');
    }


    /**
     * @return void
     */
    public function loadCustomCssJs()
    {
        $this->addCss($this->msFabrics->config['cssUrl'] . 'mgr/main.css');
        $this->addCss($this->msFabrics->config['cssUrl'] . 'mgr/bootstrap.buttons.css');
        $this->addJavascript($this->msFabrics->config['jsUrl'] . 'mgr/msfabrics.js');
        $this->addJavascript($this->msFabrics->config['jsUrl'] . 'mgr/misc/utils.js');
        $this->addJavascript($this->msFabrics->config['jsUrl'] . 'mgr/misc/combo.js');
        $this->addJavascript($this->msFabrics->config['jsUrl'] . 'mgr/widgets/categorys.grid.js');
        $this->addJavascript($this->msFabrics->config['jsUrl'] . 'mgr/widgets/items.windows.js');
        $this->addJavascript($this->msFabrics->config['jsUrl'] . 'mgr/widgets/home.panel.js');
        $this->addJavascript($this->msFabrics->config['jsUrl'] . 'mgr/sections/home.js');

        $this->addHtml('<script type="text/javascript">
        msFabrics.config = ' . json_encode($this->msFabrics->config) . ';
        msFabrics.config.connector_url = "' . $this->msFabrics->config['connectorUrl'] . '";
        Ext.onReady(function() {
            MODx.load({ xtype: "msfabrics-page-home"});
        });
        </script>
        ');
    }


    /**
     * @return string
     */
    public function getTemplateFile()
    {
        return $this->msFabrics->config['templatesPath'] . 'home.tpl';
    }
}