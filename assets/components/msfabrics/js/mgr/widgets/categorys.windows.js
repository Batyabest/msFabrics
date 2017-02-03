msFabrics.window.CreateCategory = function (config) {
    config = config || {};
    if (!config.id) {
        config.id = 'msfabrics-category-window-create';
    }
    Ext.applyIf(config, {
        title: _('msfabrics_category_create'),
        width: 550,
        autoHeight: true,
        url: msFabrics.config.connector_url,
        action: 'mgr/category/create',
        fields: this.getFields(config),
        keys: [{
            key: Ext.EventObject.ENTER, shift: true, fn: function () {
                this.submit()
            }, scope: this
        }]
    });
    msFabrics.window.CreateCategory.superclass.constructor.call(this, config);
};
Ext.extend(msFabrics.window.CreateCategory, MODx.Window, {

    getFields: function (config) {
        return [{
            xtype: 'numberfield',
            fieldLabel: _('msfabrics_category_category_fabrics'),
            name: 'category_fabrics',
            id: config.id + '-category_fabrics',
            anchor: '99%',
            allowBlank: false,
        }];
    },

    loadDropZones: function () {
    }

});
Ext.reg('msfabrics-category-window-create', msFabrics.window.CreateCategory);


msFabrics.window.UpdateCategory = function (config) {
    config = config || {};
    if (!config.id) {
        config.id = 'msfabrics-category-window-update';
    }
    Ext.applyIf(config, {
        title: _('msfabrics_category_update'),
        width: 550,
        autoHeight: true,
        url: msFabrics.config.connector_url,
        action: 'mgr/category/update',
        fields: this.getFields(config),
        keys: [{
            key: Ext.EventObject.ENTER, shift: true, fn: function () {
                this.submit()
            }, scope: this
        }]
    });
    msFabrics.window.UpdateCategory.superclass.constructor.call(this, config);
};
Ext.extend(msFabrics.window.UpdateCategory, MODx.Window, {

    getFields: function (config) {
        return [{
            xtype: 'hidden',
            name: 'id',
            id: config.id + '-id',
        }, {
            xtype: 'textfield',
            fieldLabel: _('msfabrics_category_name'),
            name: 'name',
            id: config.id + '-name',
            anchor: '99%',
            allowBlank: false,
        }, {
            xtype: 'textarea',
            fieldLabel: _('msfabrics_category_description'),
            name: 'description',
            id: config.id + '-description',
            anchor: '99%',
            height: 150,
        }, {
            xtype: 'xcheckbox',
            boxLabel: _('msfabrics_category_active'),
            name: 'active',
            id: config.id + '-active',
        }];
    },

    loadDropZones: function () {
    }

});
Ext.reg('msfabrics-category-window-update', msFabrics.window.UpdateCategory);