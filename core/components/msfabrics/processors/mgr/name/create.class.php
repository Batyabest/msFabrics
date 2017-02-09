<?php

class msFabricsNameCreateProcessor extends modObjectCreateProcessor
{
    public $objectType = 'msFabricsName';
    public $classKey = 'msFabricsName';
    public $languageTopics = array('msfabrics');
    //public $permission = 'create';


    /**
     * @return bool
     */
    public function beforeSet()
    {
        $fabrics_names = trim($this->getProperty('fabrics_names'));
        if (empty($fabrics_names)) {
            $this->modx->error->addField('fabrics_names', $this->modx->lexicon('msfabrics_name_err_fabrics_names'));
        } elseif ($this->modx->getCount($this->classKey, array('fabrics_names' => $fabrics_names))) {
            $this->modx->error->addField('fabrics_names', $this->modx->lexicon('msfabrics_name_err_ae'));
        }

        return parent::beforeSet();
    }

}

return 'msFabricsNameCreateProcessor';