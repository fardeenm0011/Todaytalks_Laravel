function disablePageZoom() {
    var viewportMeta = document.querySelector('meta[name="viewport"]');
    viewportMeta.content =
        "width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0";
}
if (window.innerWidth < 575) {
    disablePageZoom();
}
