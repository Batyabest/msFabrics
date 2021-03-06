<?php

class msFabricsCategoryRemoveProcessor extends modObjectProcessor
{
    public $objectType = 'msFabricsCategory';
    public $classKey = 'msFabricsCategory';
    public $languageTopics = array('msfabrics');
    //public $permission = 'remove';


    /**
     * @return array|string
     */
    public function process()
    {
        if (!$this->checkPermissions()) {
            return $this->failure($this->modx->lexicon('access_denied'));
        }

        $ids = $this->modx->fromJSON($this->getProperty('ids'));
        if (empty($ids)) {
            return $this->failure($this->modx->lexicon('msfabrics_category_err_ns'));
        }

        foreach ($ids as $id) {
            /** @var msFabricsCategory $object */
            if (!$object = $this->modx->getObject($this->classKey, $id)) {
                return $this->failure($this->modx->lexicon('msfabrics_category_err_nf'));
            }

            $object->remove();
        }

        return $this->success();
    }

}

return 'msFabricsCategoryRemoveProcessor';