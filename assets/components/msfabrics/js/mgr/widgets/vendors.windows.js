msFabrics.window.CreateVendor = function (config) {
    config = config || {};
    if (!config.id) {
        config.id = 'msfabrics-vendor-window-create';
    }
    Ext.applyIf(config, {
        title: _('msfabrics_vendor_create'),
        width: 550,
        autoHeight: true,
        url: msFabrics.config.connector_url,
        action: 'mgr/vendor/create',
        fields: this.getFields(config),
        keys: [{
            key: Ext.EventObject.ENTER, shift: true, fn: function () {
                this.submit()
            }, scope: this
        }]
    });
    msFabrics.window.CreateVendor.superclass.constructor.call(this, config);
};
Ext.extend(msFabrics.window.CreateVendor, MODx.Window, {

    getFields: function (config) {
        return [{
            xtype: 'textfield',
            fieldLabel: _('msfabrics_vendor_vendors_fabrics'),
            name: 'vendors_fabrics',
            id: config.id + '-vendors_fabrics',
            anchor: '99%',
            allowBlank: false,
        }];
    },

    loadDropZones: function () {
    }

});
Ext.reg('msfabrics-vendor-window-create', msFabrics.window.CreateVendor);


msFabrics.window.UpdateVendor = function (config) {
    config = config || {};
    if (!config.id) {
        config.id = 'msfabrics-vendor-window-update';
    }
    Ext.applyIf(config, {
        title: _('msfabrics_vendor_update'),
        width: 550,
        autoHeight: true,
        url: msFabrics.config.connector_url,
        action: 'mgr/vendor/update',
        fields: this.getFields(config),
        keys: [{
            key: Ext.EventObject.ENTER, shift: true, fn: function () {
                this.submit()
            }, scope: this
        }]
    });
    msFabrics.window.UpdateVendor.superclass.constructor.call(this, config);
};
Ext.extend(msFabrics.window.UpdateVendor, MODx.Window, {

    getFields: function (config) {
        return [{
            xtype: 'hidden',
            name: 'id',
            id: config.id + '-id',
        }, {
            xtype: 'textfield',
            fieldLabel: _('msfabrics_vendor_vendors_fabrics'),
            name: 'vendors_fabrics',
            id: config.id + '-vendors_fabrics',
            anchor: '99%',
            allowBlank: false,
        }];
    },

    loadDropZones: function () {
    }

});
Ext.reg('msfabrics-vendor-window-update', msFabrics.window.UpdateVendor);