<?php

class msFabricsOfficeItemCreateProcessor extends modObjectCreateProcessor
{
    public $objectType = 'msFabricsItem';
    public $classKey = 'msFabricsItem';
    public $languageTopics = array('msfabrics');
    //public $permission = 'create';


    /**
     * @return bool
     */
    public function beforeSet()
    {
        $name = trim($this->getProperty('name'));
        if (empty($name)) {
            $this->modx->error->addField('name', $this->modx->lexicon('msfabrics_item_err_name'));
        } elseif ($this->modx->getCount($this->classKey, array('name' => $name))) {
            $this->modx->error->addField('name', $this->modx->lexicon('msfabrics_item_err_ae'));
        }

        return parent::beforeSet();
    }

}

return 'msFabricsOfficeItemCreateProcessor';