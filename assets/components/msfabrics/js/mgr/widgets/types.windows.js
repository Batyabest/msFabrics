msFabrics.window.CreateType = function (config) {
    config = config || {};
    if (!config.id) {
        config.id = 'msfabrics-type-window-create';
    }
    Ext.applyIf(config, {
        title: _('msfabrics_type_create'),
        width: 550,
        autoHeight: true,
        url: msFabrics.config.connector_url,
        action: 'mgr/type/create',
        fields: this.getFields(config),
        keys: [{
            key: Ext.EventObject.ENTER, shift: true, fn: function () {
                this.submit()
            }, scope: this
        }]
    });
    msFabrics.window.CreateType.superclass.constructor.call(this, config);
};
Ext.extend(msFabrics.window.CreateType, MODx.Window, {

    getFields: function (config) {
        return [{
            xtype: 'textfield',
            fieldLabel: _('msfabrics_type_type_fabrics'),
            name: 'type_fabrics',
            id: config.id + '-type_fabrics',
            anchor: '99%',
            allowBlank: false,
        }];
    },

    loadDropZones: function () {
    }

});
Ext.reg('msfabrics-type-window-create', msFabrics.window.CreateType);


msFabrics.window.UpdateType = function (config) {
    config = config || {};
    if (!config.id) {
        config.id = 'msfabrics-type-window-update';
    }
    Ext.applyIf(config, {
        title: _('msfabrics_type_update'),
        width: 550,
        autoHeight: true,
        url: msFabrics.config.connector_url,
        action: 'mgr/type/update',
        fields: this.getFields(config),
        keys: [{
            key: Ext.EventObject.ENTER, shift: true, fn: function () {
                this.submit()
            }, scope: this
        }]
    });
    msFabrics.window.UpdateType.superclass.constructor.call(this, config);
};
Ext.extend(msFabrics.window.UpdateType, MODx.Window, {

    getFields: function (config) {
        return [{
            xtype: 'hidden',
            name: 'id',
            id: config.id + '-id',
        }, {
            xtype: 'textfield',
            fieldLabel: _('msfabrics_type_type_fabrics'),
            name: 'type_fabrics',
            id: config.id + '-type_fabrics',
            anchor: '99%',
            allowBlank: false,
        }];
    },

    loadDropZones: function () {
    }

});
Ext.reg('msfabrics-type-window-update', msFabrics.window.UpdateType);