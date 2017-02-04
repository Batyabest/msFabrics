<?php

class msFabricsTypeGetListProcessor extends modObjectGetListProcessor
{
    public $objectType = 'msFabricsType';
    public $classKey = 'msFabricsType';
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

return 'msFabricsTypeGetListProcessor';