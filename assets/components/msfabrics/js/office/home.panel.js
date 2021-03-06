msFabrics.panel.Home = function (config) {
    config = config || {};
    Ext.apply(config, {
        baseCls: 'modx-formpanel',
        layout: 'anchor',
        /*
         stateful: true,
         stateId: 'msfabrics-panel-home',
         stateEvents: ['tabchange'],
         getState:function() {return {activeTab:this.items.indexOf(this.getActiveTab())};},
         */
        hideMode: 'offsets',
        items: [{
            xtype: 'modx-tabs',
            defaults: {border: false, autoHeight: true},
            border: false,
            hideMode: 'offsets',
            items: [{
                title: _('msfabrics_items'),
                layout: 'anchor',
                items: [{
                    html: _('msfabrics_intro_msg'),
                    cls: 'panel-desc',
                }, {
                    xtype: 'msfabrics-grid-items',
                    cls: 'main-wrapper',
                }]
            }]
        }]
    });
    msFabrics.panel.Home.superclass.constructor.call(this, config);
};
Ext.extend(msFabrics.panel.Home, MODx.Panel);
Ext.reg('msfabrics-panel-home', msFabrics.panel.Home);
