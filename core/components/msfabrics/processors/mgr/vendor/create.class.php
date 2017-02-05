<?php

class msFabricsVendorCreateProcessor extends modObjectCreateProcessor
{
    public $objectType = 'msFabricsVendor';
    public $classKey = 'msFabricsVendor';
    public $languageTopics = array('msfabrics');
    //public $permission = 'create';


    /**
     * @return bool
     */
    public function beforeSet()
    {
        $vendors_fabrics = trim($this->getProperty('vendors_fabrics'));
        if (empty($vendors_fabrics)) {
            $this->modx->error->addField('vendors_fabrics', $this->modx->lexicon('msfabrics_vendor_err_vendors_fabrics'));
        } elseif ($this->modx->getCount($this->classKey, array('vendors_fabrics' => $vendors_fabrics))) {
            $this->modx->error->addField('vendors_fabrics', $this->modx->lexicon('msfabrics_vendor_err_ae'));
        }

        return parent::beforeSet();
    }

}

return 'msFabricsVendorCreateProcessor';