<!DOCTYPE html>
<head>    
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    
        <script>
            L_NO_TOUCH = false;
            L_DISABLE_3D = false;
        </script>
    
    <script src="https://cdn.jsdelivr.net/npm/leaflet@1.5.1/dist/leaflet.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.5.1/dist/leaflet.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.css"/>
    <link rel="stylesheet" href="https://rawcdn.githack.com/python-visualization/folium/master/folium/templates/leaflet.awesome.rotate.css"/>
    <style>html, body {width: 100%;height: 100%;margin: 0;padding: 0;}</style>
    <style>#map {position:absolute;top:0;bottom:0;right:0;left:0;}</style>
    
            <meta name="viewport" content="width=device-width,
                initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
            <style>
                #map1 {
                    position: relative;
                    width: 100.0%;
                    height: 100.0%;
                    left: 0.0%;
                    top: 0.0%;
                }
            </style>
        
</head>
<body>    
    
            <div class="folium-map" id="map1"  ></div>
        
</body>
<script>    
    
            var map1 = L.map(
                "map1",
                {
                    center: [14.5995, 120.9842],
                    crs: L.CRS.EPSG3857,
                    zoom: 12,
                    zoomControl: true,
                    preferCanvas: false,
                }
            );

            

        
    
            var tile_layer_94c63f1b6ecc477a84430b40ff25451e = L.tileLayer(
                "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
                {"attribution": "Data by \u0026copy; \u003ca href=\"http://openstreetmap.org\"\u003eOpenStreetMap\u003c/a\u003e, under \u003ca href=\"http://www.openstreetmap.org/copyright\"\u003eODbL\u003c/a\u003e.", "detectRetina": false, "maxNativeZoom": 18, "maxZoom": 18, "minZoom": 0, "noWrap": false, "opacity": 1, "subdomains": "abc", "tms": false}
            ).addTo(map1);
        
    
            var pritil_map = L.marker(
                [14.6177, 120.9698],
                {}
            ).addTo(map1);
        
    
            var pritil_icon = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "purple", "prefix": "glyphicon"}
            );
            pritil_map.setIcon(pritil_icon);
        
    
        var pritil_popup = L.popup({"maxWidth": "100%"});

        
            var pritil_content = $(`<div id="pritil_content" style="width: 100.0%; height: 100.0%;"><strong>Pritil Market</strong></div>`)[0];
            pritil_popup.setContent(pritil_content);
        

        pritil_map.bindPopup(pritil_popup)
        ;

        
    
    
            pritil_map.bindTooltip(
                `<div>
                     Available Market in Metro Manila
                 </div>`,
                {"sticky": true}
            );
        
    
            var balintawak_map = L.marker(
                [14.6563, 121.000504],
                {}
            ).addTo(map1);
        
    
            var balintawak_icon = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
            );
            balintawak_map.setIcon(balintawak_icon);
        
    
        var balintawak_popup = L.popup({"maxWidth": "100%"});

        
            var balintawak_content = $(`<div id="balintawak_content" style="width: 100.0%; height: 100.0%;"><strong>Balintawak Market</strong></div>`)[0];
            balintawak_popup.setContent(balintawak_content);
        

        balintawak_map.bindPopup(balintawak_popup)
        ;

        
    
    
            balintawak_map.bindTooltip(
                `<div>
                     Available Market in Metro Manila
                 </div>`,
                {"sticky": true}
            );
        
    
            var quiapo_map = L.marker(
                [14.5984, 120.983],
                {}
            ).addTo(map1);
        
    
            var quiapo_icon = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            quiapo_map.setIcon(quiapo_icon);
        
    
        var quiapo_popup = L.popup({"maxWidth": "100%"});

        
            var quiapo_content = $(`<div id="quiapo_content" style="width: 100.0%; height: 100.0%;"><strong>Quiapo Market</strong></div>`)[0];
            quiapo_popup.setContent(quiapo_content);
        

        quiapo_map.bindPopup(quiapo_popup)
        ;

        
    
    
            quiapo_map.bindTooltip(
                `<div>
                     Available Market in Metro Manila
                 </div>`,
                {"sticky": true}
            );
        
    
            var sta_mesa_map = L.marker(
                [14.6563, 120.0005],
                {}
            ).addTo(map1);
        
    
            var sta_mesa_icon = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "darkred", "prefix": "glyphicon"}
            );
            sta_mesa_map.setIcon(sta_mesa_icon);
        
    
        var sta_mesa_popup = L.popup({"maxWidth": "100%"});

        
            var sta_mesa_content = $(`<div id="sta_mesa_content" style="width: 100.0%; height: 100.0%;"><strong>Sta.Mesa Market</strong></div>`)[0];
            sta_mesa_popup.setContent(sta_mesa_content);
        

        sta_mesa_map.bindPopup(sta_mesa_popup)
        ;

        
    
    
            sta_mesa_map.bindTooltip(
                `<div>
                     Available Market in Metro Manila
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_aa19297202eb48eb817843681f1c7299 = L.marker(
                [14.6882, 121.0013],
                {}
            ).addTo(map1);
        
    
            var icon_12596fc4675548ea8bb7c580b0d7cf98 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_aa19297202eb48eb817843681f1c7299.setIcon(icon_12596fc4675548ea8bb7c580b0d7cf98);
        
    
        var popup_38e3cc262ccc426a973dc9b4e76441e8 = L.popup({"maxWidth": "100%"});

        
            var html_13a2ee91229a4b3dacbd1710a17b656d = $(`<div id="html_13a2ee91229a4b3dacbd1710a17b656d" style="width: 100.0%; height: 100.0%;"><strong>Quiapo Market</strong></div>`)[0];
            popup_38e3cc262ccc426a973dc9b4e76441e8.setContent(html_13a2ee91229a4b3dacbd1710a17b656d);
        

        marker_aa19297202eb48eb817843681f1c7299.bindPopup(popup_38e3cc262ccc426a973dc9b4e76441e8)
        ;

        
    
    
            marker_aa19297202eb48eb817843681f1c7299.bindTooltip(
                `<div>
                     Available Market in Metro Manila
                 </div>`,
                {"sticky": true}
            );
        
</script>