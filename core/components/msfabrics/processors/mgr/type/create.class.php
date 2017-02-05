<?php

class msFabricsTypeCreateProcessor extends modObjectCreateProcessor
{
    public $objectType = 'msFabricsType';
    public $classKey = 'msFabricsType';
    public $languageTopics = array('msfabrics');
    //public $permission = 'create';


    /**
     * @return bool
     */
    public function beforeSet()
    {
        $type_fabrics = trim($this->getProperty('type_fabrics'));
        if (empty($type_fabrics)) {
            $this->modx->error->addField('type_fabrics', $this->modx->lexicon('msfabrics_type_err_type_fabrics'));
        } elseif ($this->modx->getCount($this->classKey, array('type_fabrics' => $type_fabrics))) {
            $this->modx->error->addField('type_fabrics', $this->modx->lexicon('msfabrics_type_err_ae'));
        }

        return parent::beforeSet();
    }

}

return 'msFabricsTypeCreateProcessor';