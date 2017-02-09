msFabrics.window.CreateName = function (config) {
    config = config || {};
    if (!config.id) {
        config.id = 'msfabrics-name-window-create';
    }
    Ext.applyIf(config, {
        title: _('msfabrics_name_create'),
        width: 550,
        autoHeight: true,
        url: msFabrics.config.connector_url,
        action: 'mgr/name/create',
        fields: this.getFields(config),
        keys: [{
            key: Ext.EventObject.ENTER, shift: true, fn: function () {
                this.submit()
            }, scope: this
        }]
    });
    msFabrics.window.CreateName.superclass.constructor.call(this, config);
};
Ext.extend(msFabrics.window.CreateName, MODx.Window, {

    getFields: function (config) {
        return [{
            xtype: 'textfield',
            fieldLabel: _('msfabrics_name_fabrics_vendor_id'),
            name: 'fabrics_vendor_id',
            id: config.id + '-fabrics_vendor_id',
            anchor: '99%',
            allowBlank: false,
        },{
            xtype: 'textfield',
            fieldLabel: _('msfabrics_name_fabrics_names'),
            name: 'fabrics_names',
            id: config.id + '-fabrics_names',
            anchor: '99%',
            allowBlank: false,
        }];
    },

    loadDropZones: function () {
    }

});
Ext.reg('msfabrics-name-window-create', msFabrics.window.CreateName);


msFabrics.window.UpdateName = function (config) {
    config = config || {};
    if (!config.id) {
        config.id = 'msfabrics-name-window-update';
    }
    Ext.applyIf(config, {
        title: _('msfabrics_name_update'),
        width: 550,
        autoHeight: true,
        url: msFabrics.config.connector_url,
        action: 'mgr/name/update',
        fields: this.getFields(config),
        keys: [{
            key: Ext.EventObject.ENTER, shift: true, fn: function () {
                this.submit()
            }, scope: this
        }]
    });
    msFabrics.window.UpdateName.superclass.constructor.call(this, config);
};
Ext.extend(msFabrics.window.UpdateName, MODx.Window, {

    getFields: function (config) {
        return [{
            xtype: 'hidden',
            name: 'id',
            id: config.id + '-id',
        },{
            xtype: 'textfield',
            fieldLabel: _('msfabrics_name_fabrics_vendor_id'),
            name: 'fabrics_vendor_id',
            id: config.id + '-fabrics_vendor_id',
            anchor: '99%',
            allowBlank: false,
        },{
            xtype: 'textfield',
            fieldLabel: _('msfabrics_name_fabrics_names'),
            name: 'fabrics_names',
            id: config.id + '-fabrics_names',
            anchor: '99%',
            allowBlank: false,
        }];
    },

    loadDropZones: function () {
    }

});
Ext.reg('msfabrics-name-window-update', msFabrics.window.UpdateName);