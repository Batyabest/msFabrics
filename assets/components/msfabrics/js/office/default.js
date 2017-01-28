Ext.onReady(function () {
    msFabrics.config.connector_url = OfficeConfig.actionUrl;

    var grid = new msFabrics.panel.Home();
    grid.render('office-msfabrics-wrapper');

    var preloader = document.getElementById('office-preloader');
    if (preloader) {
        preloader.parentNode.removeChild(preloader);
    }
});