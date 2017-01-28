<?php

if ($object->xpdo) {
    /* @var modX $modx */
    $modx =& $object->xpdo;

    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
            $modelPath = $modx->getOption('msfabrics_core_path' ,null,$modx->getOption('core_path').'conponents/msfabrics/').'model/';
            $modx->addPackage('msfabrics',$modelPath);

            $manager = $modx->getManager();
            $objects = array (
                'msfabricsCategory',
                'msfabricsType',
                'msfabricsVendors',
            );
            foreach ($objects as $object) {
                $manager->createObjectContainer($object);
            }
            break;

        case xPDOTransport::ACTION_UPGRADE:
            break;

        case xPDOTransport::ACTION_UNINSTALL:
            break;
    }
}
return true;