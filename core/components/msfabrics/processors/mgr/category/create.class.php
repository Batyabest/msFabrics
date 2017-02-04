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
        $category_fabrics = trim($this->getProperty('category_fabrics'));
        if (empty($category_fabrics)) {
            $this->modx->error->addField('category_fabrics', $this->modx->lexicon('msfabrics_category_err_category_fabrics'));
        } elseif ($this->modx->getCount($this->classKey, array('category_fabrics' => $category_fabrics))) {
            $this->modx->error->addField('category_fabrics', $this->modx->lexicon('msfabrics_category_err_ae'));
        }

        return parent::beforeSet();
    }

}

return 'msFabricsCategoryCreateProcessor';