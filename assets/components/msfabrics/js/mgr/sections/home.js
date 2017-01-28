msFabrics.page.Home = function (config) {
    config = config || {};
    Ext.applyIf(config, {
        components: [{
            xtype: 'msfabrics-panel-home',
            renderTo: 'msfabrics-panel-home-div'
        }]
    });
    msFabrics.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(msFabrics.page.Home, MODx.Component);
Ext.reg('msfabrics-page-home', msFabrics.page.Home);