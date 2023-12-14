<div class=" w-9/12" style="height: 100vh">


    <div id="map" class="w-full h-full relative z-10">
        <div class="absolute top-2 right-5 px-4 py-2 " style="z-index: 10000; background-color: #d8d8d8;">
            <h1 class="mb-4">Legend Color </h1>
            <div class="flex flex-col ">
                <div class="flex items-center space-x-2">
                    <div class="h-2 w-2 bg-hpk"></div>
                    <a class="text-black">Hutan Produksi yang Dapat Dikonversi</a>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="h-2 w-2 bg-kk"></div>
                    <a class="text-black">Kawasan Konservasi</a>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="h-2 w-2 bg-hl"></div>
                    <a class="text-black">Hutan Lindung</a>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="h-2 w-2 bg-hpt"></div>
                    <a class="text-black">Hutan Produksi Terbatas</a>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="h-2 w-2 bg-hp"></div>
                    <a class="text-black">Hutan Produksi Tetap</a>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="h-2 w-2 bg-apl"></div>
                    <a class="text-black">Areal Penggunaan Lain</a>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="h-2 w-2 bg-tubuhair"></div>
                    <a class="text-black">Tubuh Air</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
    $(document).ready(function () {
        var provinsi;
        var map = new L.Map('map');
		var osmUrl='http://services.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Light_Gray_Base/MapServer/tile/{z}/{y}/{x}';
		var osmAttrib='Simontinus';
		var osm = new L.TileLayer(osmUrl, {minZoom: 5, maxZoom: 18, attribution: osmAttrib});

		map.addLayer(osm);
		map.setView(new L.LatLng(0.7893, 120.9213),5);
        L.control.resetView({
            position: "topleft",
            title: "Reset view",
            latlng: L.latLng([0.7893, 120.9213]),
            zoom: 5,
        }).addTo(map);


        // var batas = L.tileLayer.wms('https://aws.simontini.id/geoserver/wms', {
        //     layers: 'simontini:Administrasi Prov Pilot',
        //     transparent: true,
        //     format: 'image/png'
        // });
        // var defaultLayer = L.layerGroup([TutupanSawit, batas]);
        // defaultLayer.addTo(map)

        // var trayektatabatas = L.tileLayer.wms('https://aws.simontini.id/geoserver/wms', {
        //     layers: 'administrative_boundaries',
        //     transparent: true,
        //     format: 'image/png'
        // });

        // var terbangun = L.tileLayer.wms('https://aws.simontini.id/geoserver/wms', {
        //     layers: 'simontini:SK_531_2021_dan SK_359_2021_Usaha Terbangun_Provinsi_Pilot',
        //     transparent: true,
        //     format: 'image/png'
        // });

        // var penetapan = L.tileLayer.wms('https://aws.simontini.id/geoserver/wms', {
        //     layers: 'kpa:HGU_BPN_2019',
        //     transparent: true,
        //     format: 'image/png'
        // });
;

        // // layergroup hgb hm dkk
        // var hgb = L.tileLayer.wms('https://aws.simontini.id/geoserver/wms', {
        //     layers: 'simontini:BIDANG TANAH_HGB',
        //     transparent: true,
        //     format: 'image/png'
        // });
        // var hgu = L.tileLayer.wms('https://aws.simontini.id/geoserver/wms', {
        //     layers: 'simontini:BIDANG TANAH_HGU',
        //     transparent: true,
        //     format: 'image/png'
        // });
        // var hm = L.tileLayer.wms('https://aws.simontini.id/geoserver/wms', {
        //     layers: 'simontini:BIDANG TANAH_HM_HP_HPL_HW',
        //     transparent: true,
        //     format: 'image/png'
        // });
        // var shat = L.layerGroup([hgb, hgu, hm]);
        // var allLayer = L.layerGroup([TutupanSawit,batas,trayektatabatas,terbangun,penetapan])

        var kawasanhutan = L.tileLayer.wms('https://aws.simontini.id/geoserver/wms', {
            layers: 'simontini:Forest_estate_adm',
            transparent: true,
            format: 'image/png'
        });
        var hutanalam = L.tileLayer.wms('https://aws.simontini.id/geoserver/wms', {
            layers: 'simontini:Hutan_Alam_adm',
            transparent: true,
            format: 'image/png'
        });
        var kantonghabitat = L.tileLayer.wms('https://aws.simontini.id/geoserver/wms', {
            layers: 'simontini:KantongGajah2018RTM',
            transparent: true,
            format: 'image/png'
        });
        var burnarea = L.tileLayer.wms('https://aws.simontini.id/geoserver/wms', {
            layers: 'simontini:Burn_Area_2015',
            transparent: true,
            format: 'image/png'
        });
        var hgu = L.tileLayer.wms('https://aws.simontini.id/geoserver/wms', {
            layers: 'kpa:HGU_BPN_2019',
            transparent: true,
            format: 'image/png'
        });
        var adminkabkota = L.tileLayer.wms('https://aws.simontini.id/geoserver/wms', {
            layers: 'administrative_boundaries',
            transparent: true,
            format: 'image/png'
        });

        var potensiminerba = L.tileLayer.wms('https://aws.simontini.id/geoserver/wms', {
            layers: 'tiger:Geologi 100K Selected',
            transparent: true,
            format: 'image/png'
        });






        // checkbox section
        $('#adminkabkota:checkbox').on('change', function() {
            var checkbox = $(this);
            // toggle the layer
            if ($(checkbox).is(':checked')) {
                map.addLayer(adminkabkota);
            } else {
                map.removeLayer(adminkabkota);
            }
        });
        $('#hutanalam:checkbox').on('change', function() {
            var checkbox = $(this);
            // toggle the layer
            if ($(checkbox).is(':checked')) {
                map.addLayer(hutanalam);
            } else {
                map.removeLayer(hutanalam);
            }
        });
        $('#hgu:checkbox').on('change', function() {
            var checkbox = $(this);
            // toggle the layer
            if ($(checkbox).is(':checked')) {
                map.addLayer(hgu);
            } else {
                map.removeLayer(hgu);
            }
        });
        $('#kawasanhutan:checkbox').on('change', function() {
            var checkbox = $(this);
            // toggle the layer
            if ($(checkbox).is(':checked')) {
                map.addLayer(kawasanhutan);
            } else {
                map.removeLayer(kawasanhutan);
            }
        });
        $('#burnarea:checkbox').on('change', function() {
            var checkbox = $(this);
            // toggle the layer
            if ($(checkbox).is(':checked')) {
                map.addLayer(burnarea);
            } else {
                map.removeLayer(burnarea);
            }
        });
        $('#kantonghabitat:checkbox').on('change', function() {
            var checkbox = $(this);
            // toggle the layer
            if ($(checkbox).is(':checked')) {
                map.addLayer(kantonghabitat);
            } else {
                map.removeLayer(kantonghabitat);
            }
        });
        $('#potensiminerba:checkbox').on('change', function() {
            var checkbox = $(this);
            // toggle the layer
            if ($(checkbox).is(':checked')) {
                map.addLayer(potensiminerba);
            } else {
                map.removeLayer(potensiminerba);
            }
        });
        // $('#admprovinsi:checkbox').on('change', function() {
        //     var checkbox = $(this);
        //     // toggle the layer
        //     if ($(checkbox).is(':checked')) {
        //         map.addLayer(admprovinsi);
        //     } else {
        //         map.removeLayer(admprovinsi);
        //     }
        // });
        // $('#tatabatas:checkbox').on('change', function() {
        //     var checkbox = $(this);
        //     // toggle the layer
        //     if ($(checkbox).is(':checked')) {
        //         map.addLayer(trayektatabatas);
        //     } else {
        //         map.removeLayer(trayektatabatas);
        //     }
        // });
        // $('#penetapan:checkbox').on('change', function() {
        //     var checkbox = $(this);
        //     // toggle the layer
        //     if ($(checkbox).is(':checked')) {
        //         map.addLayer(penetapan);
        //     } else {
        //         map.removeLayer(penetapan);
        //     }
        // });
        // $('#shat:checkbox').on('change', function() {
        //     var checkbox = $(this);
        //     // toggle the layer
        //     if ($(checkbox).is(':checked')) {
        //         shat.addTo(map)
        //     } else {
        //         shat.removeFrom(map)
        //     }
        // });
        // $('#terbangun:checkbox').on('change', function() {
        //     var checkbox = $(this);
        //     // toggle the layer
        //     if ($(checkbox).is(':checked')) {
        //         map.addLayer(terbangun);
        //     } else {
        //         map.removeLayer(terbangun);
        //     }
        // });

        // template wfs
        // var myStyle = {
        //     "color": "#000",
        //     "weight": 3,
        //     "opacity": 0.5
        // };
        // var myLayer = L.geoJSON(provinsi, {
        //     style:myStyle
        //     // onEachFeature: onEachFeature,
        // })
        // function onEachFeature(feature, layer) {
        //     // does this feature have a property named popupContent?
        //     if (feature.properties && feature.properties.prov_ina) {
        //         layer.bindPopup(feature.properties.prov_ina);
        //     }
        // }

        // $('#provinsi').on('change', function (e) {
        //         var data = $('#provinsi').val();
        //         // console.log(data)
        //             axios.get('https://aws.simontini.id/geoserver/wfs', {
        //                 params: {
        //                     service: 'WFS',
        //                     version: '1.1.0',
        //                     request: 'GetFeature',
        //                     typename: 'simontini:Administrasi Prov Pilot',
        //                     CQL_FILTER: "prov_ina='"+data+"'",
        //                     srsname: 'EPSG:4326',
        //                     outputFormat: 'application/json',
        //                 }
        //             })
        //             .then(function (response) {
        //                 provinsi = response.data;

        //                 // clear and fitbound to layer
        //                 myLayer.clearLayers();
        //                 myLayer.addData(provinsi)
        //                 myLayer.addTo(map);
        //                 map.fitBounds(myLayer.getBounds());

        //             })
        //             .catch(function (error) {
        //                 console.log(error);
        //             })

        //             axios.get('https://aws.simontini.id/geoserver/wfs', {
        //                 params: {
        //                     service: 'WFS',
        //                     version: '1.1.0',
        //                     request: 'GetFeature',
        //                     typename: 'simontini:Pemutakhiran_Kawasan_Hutan_5_Provinsi',
        //                     CQL_FILTER: "prov_ina='"+data+"'",
        //                     srsname: 'EPSG:4326',
        //                     outputFormat: 'application/json',
        //                 }
        //             })
        //             .then(function (response) {
        //                 khutan = response.data;

        //                 // clear and fitbound to layer
        //                 myLayer.clearLayers();
        //                 myLayer.addData(provinsi)
        //                 myLayer.addTo(map);
        //                 map.fitBounds(myLayer.getBounds());

        //             })
        //             .catch(function (error) {
        //                 console.log(error);
        //             })
        // });
        // $('#kabkot').on('change', function (e) {
        //         var data = $('#kabkot').val();
        //         // console.log(data)
        //         axios.get('https://aws.simontini.id/geoserver/wfs', {
        //                 params: {
        //                     service: 'WFS',
        //                     version: '1.1.0',
        //                     request: 'GetFeature',
        //                     typename: 'simontini:Administrasi Prov Pilot',
        //                     CQL_FILTER: "dist_ina='"+data+"'",
        //                     srsname: 'EPSG:4326',
        //                     outputFormat: 'application/json',
        //                 }
        //             })
        //             .then(function (response) {
        //                 provinsi = response.data;

        //                 // clear and fitbound to layer
        //                 myLayer.clearLayers();
        //                 myLayer.addData(provinsi)
        //                 myLayer.bringToFront();
        //                 myLayer.addTo(map);
        //                 map.fitBounds(myLayer.getBounds());

        //             })
        //             .catch(function (error) {
        //                 console.log(error);
        //             })
        // });
        //
    });
    </script>
</div>


