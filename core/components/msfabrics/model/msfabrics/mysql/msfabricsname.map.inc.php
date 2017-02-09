<?php
$xpdo_meta_map['msFabricsName']= array (
  'package' => 'msfabrics',
  'version' => '1.1',
  'table' => 'msfabrics_names',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'fabrics_vendor_id' => NULL,
    'fabrics_names' => NULL,
  ),
  'fieldMeta' => 
  array (
    'fabrics_vendor_id' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => false,
    ),
    'fabrics_names' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => false,
    ),
  ),
);
