<?php

class msFabricsCategoryUpdateProcessor extends modObjectUpdateProcessor
{
    public $objectType = 'msFabricsCategory';
    public $classKey = 'msFabricsCategory';
    public $languageTopics = array('msfabrics');
    //public $permission = 'save';


    /**
     * We doing special check of permission
     * because of our objects is not an instances of modAccessibleObject
     *
     * @return bool|string
     */
    public function beforeSave()
    {
        if (!$this->checkPermissions()) {
            return $this->modx->lexicon('access_denied');
        }

        return true;
    }


    /**
     * @return bool
     */
    public function beforeSet()
    {
        $id = (int)$this->getProperty('id');
        $category_fabrics = trim($this->getProperty('category_fabrics'));
        if (empty($id)) {
            return $this->modx->lexicon('msfabrics_category_err_ns');
        }

        if (empty($category_fabrics)) {
            $this->modx->error->addField('category_fabrics', $this->modx->lexicon('msfabrics_category_err_category_fabrics'));
        } elseif ($this->modx->getCount($this->classKey, array('category_fabrics' => $category_fabrics, 'id:!=' => $id))) {
            $this->modx->error->addField('category_fabrics', $this->modx->lexicon('msfabrics_category_err_ae'));
        }

        return parent::beforeSet();
    }
}

return 'msFabricsCategoryUpdateProcessor';
