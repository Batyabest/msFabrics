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
            html: '<h2>' + _('msfabrics') + '</h2>',
            cls: '',
            style: {margin: '15px 0'}
        }, {
            xtype: 'modx-tabs',
            defaults: {border: false, autoHeight: true},
            border: true,
            hideMode: 'offsets',
            items: [{
                title: _('msfabrics_categorys'),
                layout: 'anchor',
                items: [{
                    html: _('msfabrics_category_intro'),
                    cls: 'panel-desc',
                }, {
                    xtype: 'msfabrics-grid-categorys',
                    cls: 'main-wrapper',
                }]
            }]
        }]
    });
    msFabrics.panel.Home.superclass.constructor.call(this, config);
};
Ext.extend(msFabrics.panel.Home, MODx.Panel);
Ext.reg('msfabrics-panel-home', msFabrics.panel.Home);
