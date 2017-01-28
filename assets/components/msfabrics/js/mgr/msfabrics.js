var msFabrics = function (config) {
    config = config || {};
    msFabrics.superclass.constructor.call(this, config);
};
Ext.extend(msFabrics, Ext.Component, {
    page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('msfabrics', msFabrics);

msFabrics = new msFabrics();