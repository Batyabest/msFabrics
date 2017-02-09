<?php

class msFabricsNameGetListProcessor extends modObjectGetListProcessor
{
    public $objectType = 'msFabricsName';
    public $classKey = 'msFabricsName';
    public $defaultSortField = 'id';
    public $defaultSortDirection = 'ASC';
    //public $permission = 'list';


    /**
     * @param xPDOQuery $c
     *
     * @return xPDOQuery
     */
    public function prepareQueryBeforeCount(xPDOQuery $c)
    {
        $c->innerJoin('msFabricsVendor', 'msFabricsVendor', 'msFabricsVendor.id = msFabricsName.fabrics_vendor_id');
        $c->select($this->modx->getSelectColumns('msFabricsName', 'msFabricsName'));
        $c->select('msFabricsVendor.vendors_fabrics as vendor');

        if ($vendor = $this->getProperty('vendor')) {
            if (!empty($vendor)) {
                $c->where(array('msFabricsName.fabrics_vendor_id' => $vendor));
            }
        }

        /*$query = trim($this->getProperty('query'));
        if ($query) {
            $c->where(array(
                'category_fabrics:LIKE' => "%{$query}%",
            ));
        }*/

        return $c;
    }


    /**
     * @param xPDOObject $object
     *
     * @return array
     */

    public function prepareRow(xPDOObject $object) {
        $array = $object->toArray();
        return $array;
    }

}

return 'msFabricsNameGetListProcessor';