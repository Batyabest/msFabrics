<?php

class msFabricsCategoryCreateProcessor extends modObjectCreateProcessor
{
    public $objectType = 'msFabricsCategory';
    public $classKey = 'msFabricsCategory';
    public $languageTopics = array('msfabrics');
    //public $permission = 'create';


    /**
     * @return bool
     */
    public function beforeSet()
    {
        $name = trim($this->getProperty('name'));
        if (empty($name)) {
            $this->modx->error->addField('name', $this->modx->lexicon('msfabrics_category_err_name'));
        } elseif ($this->modx->getCount($this->classKey, array('name' => $name))) {
            $this->modx->error->addField('name', $this->modx->lexicon('msfabrics_category_err_ae'));
        }

        return parent::beforeSet();
    }

}

return 'msFabricsCategoryCreateProcessor';