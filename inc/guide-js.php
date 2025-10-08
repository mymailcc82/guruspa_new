<?php
$lc_spots = array(
    array(
        'id' => 1,
        "title" => "伊勢神宮",
        "latitude" => 34.471073,
        "longitude" => 136.714229,
        "address" => "〒516-0042 三重県伊勢市豊川町２７９",
        "tel" => "0596-24-1111",
        "time" => "国道23号経由：約50分<br>伊勢道経由(伊勢IC〜松阪IC)：約40分",
        "url" => "https://maps.app.goo.gl/uHvKBPxLkwGKbBHG6",
        "image" => get_template_directory_uri() .
            "/assets/img/guide/sec04-img-01.webp"
    ),
    array(
        'id' => 2,
        "title" => "鳥羽水族館",
        "latitude" => 34.481583,
        "longitude" => 136.845693,
        "address" => "〒517-8617 三重県鳥羽市鳥羽3-3-6",
        "tel" => "0599-25-2555",
        "time" => "国道23号経由：約50分<br>伊勢道経由(伊勢IC〜松阪IC)：約40分",
        "url" => "https://maps.app.goo.gl/LtgqibMJVSvfMHuPA",
        "image" => get_template_directory_uri() .
            "/assets/img/guide/sec04-img-02.webp"
    ),
    array(
        'id' => 3,
        "title" => "志摩スペイン村",
        "latitude" => 34.362058,
        "longitude" => 136.84444,
        "address" => "〒517-0212 三重県志摩市磯部町坂崎字下山952-4",
        "tel" => "0599-57-3333",
        "time" => "国道167号 無料道路経由：約1時間10分<br>伊勢道＋第二伊勢道経由：約1時間",
        "url" => "https://maps.app.goo.gl/y7oGNx57sBkwHJBYA",
        "image" => get_template_directory_uri() .
            "/assets/img/guide/sec04-img-03.webp"
    ),
    array(
        'id' => 4,
        "title" => "おやつタウン",
        "latitude" => 34.686924,
        "longitude" => 136.42458,
        "address" => "〒514-1254 三重県津市森町１９４５−１１",
        "tel" => "059-255-1082",
        "time" => "国道23号経由：約50分<br>伊勢道経由（久居IC〜松阪IC）：約40分",
        "url" => "https://maps.app.goo.gl/kXastoYsBpZfEKnS6",
        "image" => get_template_directory_uri() .
            "/assets/img/guide/sec04-img-04.webp"
    ),

);
?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVP6ObAZT15tByV9zur_slqIk-_ZyNKS0&language=jp"></script>
<script src="https://cdn.jsdelivr.net/npm/@google/markerwithlabel@1.2.12/src/markerwithlabel.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplebar@5.3.6/dist/simplebar.min.css" />
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/simplebar@5.3.6/dist/simplebar.min.js"></script>
<script>
    const maplist = new Array()
    const maplistUl = document.getElementById("mapList")
    let maplistLi = document.querySelectorAll("#mapList li.spotMapList_item")
    const mapCanvas = document.getElementById("map_canvas")
    let currentWindow = null
    let cnt = 0
    const defaultIconUrl = "/src/img/spot_ico02_orange.png"
    const defaultScaledSize = new google.maps.Size(36, 52)
    const currentScaledSize = new google.maps.Size(36, 52)
    const LatLng = new google.maps.LatLng(34.593808, 136.52612)
    const shopTitle = "グルスパ"

    //　LocationのJSONデータの取得
    class GetData {
        async getLocation() {
            try {
                const result = {
                    "items": [
                        <?php $total = count($lc_spots); ?>
                        <?php foreach ($lc_spots as $spot): ?>
                            <?php $rowCount = $spot["id"]; ?>
                            <?php $i = 1; ?> {
                                "fields": {
                                    "id": "<?php echo $spot['id']; ?>",
                                    "title": "<?php echo $spot['title']; ?>",
                                    "latitude": <?php echo $spot['latitude']; ?>,
                                    "longitude": <?php echo $spot['longitude']; ?>,
                                    "address": "<?php echo $spot['address']; ?>",
                                    "tel": "<?php echo $spot['tel']; ?>",
                                    "image": "<?php echo $spot['image']; ?>",
                                    "time": "<?php echo $spot['time']; ?>",
                                    "url": "<?php echo $spot['url']; ?>",
                                }
                            }
                            <?php if ($rowCount < $total): ?>,
                            <?php endif; ?>
                        <?php endforeach; ?>
                    ]
                }

                const data = result
                let markers = data.items

                markers = markers.map((item) => {
                    const {
                        title,
                        latitude,
                        longitude,
                        address,
                        tel,
                        id,
                        image,
                        time,
                        url,
                    } = item.fields

                    return {
                        title,
                        latitude,
                        longitude,
                        address,
                        tel,
                        id,
                        time,
                        image,
                        url
                    }
                })
                return markers
            } catch (error) {
                console.log(error)
            }
        }
    }

    //　Mapの初期化
    function initMap() {

        // Window サイズに応じて、mapオプションの表示、非表示切り替え
        const myOptionsFunc = () => {

            if (window.innerWidth < 500) {
                console.log(window.innerWidth)
                return {
                    zoom: 9,
                    disableDefaultUI: true,
                    center: LatLng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    gestureHandling: "greedy",
                    mapTypeControlOptions: {
                        mapTypeIds: ["roadmap", "satellite", "hybrid", "terrain"],
                    },
                }
            } else {
                return {
                    zoom: 10,
                    center: LatLng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    gestureHandling: "greedy",
                    mapTypeControlOptions: {
                        mapTypeIds: ["roadmap", "satellite", "hybrid", "terrain"],
                    },
                }
            }
        }
        const myOptions = myOptionsFunc()

        const map = new google.maps.Map(
            document.getElementById("map_canvas"),
            myOptions
        )

        //拠点マーカーの変更
        var options = {
            scaledSize: new google.maps.Size(151, 56),
            url: "<?php echo get_template_directory_uri(); ?>/assets/img/guide/spot_icon_0.png",
            title: "",
        };
        var marker = new google.maps.Marker({
            map: map,
            position: LatLng,
            icon: options,
        });

        //拠点吹き出し（情報ウィンドウ）の作成
        const infoWindow = new google.maps.InfoWindow({
            position: LatLng,
            content: `<div class="infoWindowBox s_current">${shopTitle}</div>`,
            pixelOffset: new google.maps.Size(0, -50)
        })
        infoWindow.open(map)
        marker.addListener('click', () => {
            infoWindow.open(map);
            map.setZoom(14);
            map.panTo(LatLng);
        });


        const markers = new GetData()
        // marker配列データからマーカーの作成およびli要素の作成
        const createMarkers = () => {
            markers
                .getLocation()
                .then((items) => {
                    items.forEach((item) => {
                        const id = item.id
                        const name = item.title
                        const latlng = new google.maps.LatLng(item.latitude, item.longitude)

                        const category = item.category
                        const address = item.address
                        const tel = item.tel
                        const time = item.time
                        const image = item.image

                        const icons = {
                            url: "<?php echo get_template_directory_uri(); ?>/assets/img/guide/spot_icon_" + id + ".png",
                            scaledSize: defaultScaledSize,
                        }

                        createMarker(name, latlng, icons, map, id)

                        let timeHtml = "";
                        //maplistUl.innerHTML += `<li>${category}<br><img src=${image} /><div> <h4>${name}</h4> 住所 : ${address} <br>電話 : ${tel} </div></li>`
                        maplistUl.innerHTML += `<li class="spotMapList_item" id="spot${id}">
          <div class="spotMapList_itemInner">
            <div class="spotMapList_itemInner_img">
              <div class="spotMapList_itemInner_imgWrap">
                <img src=${image} />
              </div>
				${timeHtml}
              
            </div>
            <div class="spotMapList_itemInner_info">
              <h3 class="spotMapList_itemInner_infoTtl">
                <span class="spotMapList_itemInner_infoTtl_num">
                <img src="/wp-content/themes/guruspa_new/assets/img/guide/spot_icon_${id}.png" alt="" />
                </span>
                <span class="spotMapList_itemInner_infoTtl_txt">${name}</span>
              </h3>
              <ul class="spotMapList_itemInner_infoList">
                <li class="spotMapList_itemInner_infoListLi">
                  <p class="spotMapList_itemInner_infoListLi_ttl">アクセス</p>
                  <p class="spotMapList_itemInner_infoListLi_txt">${address}</p>
                </li>
                <li class="spotMapList_itemInner_infoListLi">
                  <p class="spotMapList_itemInner_infoListLi_ttl">TEL</p>
                  <p class="spotMapList_itemInner_infoListLi_txt">${tel}</p>
                </li>
                <li class="spotMapList_itemInner_infoListLi">
                  <p class="spotMapList_itemInner_infoListLi_ttl">所要時間</p>
                  <p class="spotMapList_itemInner_infoListLi_txt">${time}</p>
                </li>
              </ul>
              <div class="com-btn-border-black com-btn-border-black--small-v2 hidden-mobile">
                <a href="${item.url}" target="_blank" rel="noopener noreferrer">Google Mapで開く<i></i></a>
                </div>
                <div class="com-btn-mobile hidden-sm">
                  <a href="${item.url}" target="_blank" rel="noopener noreferrer">Google Mapで開く<i></i></a>
                  </div>
            </div>
          </div>
        </li>`
                    })
                })
                // 生成されたli要素へのイベントリスナーの付与。
                .then(() => {
                    maplistLi = document.querySelectorAll("#mapList li.spotMapList_item")
                    /*
                    maplistLi.forEach((listItem, index) => {
                        listItem.addEventListener("click", () => {
                            google.maps.event.trigger(maplist[index], "click")
                        })
                    })
                        */
                })
        }

        const styledMapType = new google.maps.StyledMapType(
            [{
                    "featureType": "administrative.land_parcel",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "administrative.neighborhood",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.text",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "road",
                    "elementType": "labels",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "water",
                    "elementType": "labels.text",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }
            ]
        );

        map.mapTypes.set("styled_map", styledMapType);
        map.setMapTypeId("styled_map");


        createMarkers()
    }

    //　各マーカーのセット
    function createMarker(name, latlng, icons, map, id, category) {
        const contentString =
            '<div style="display:none;" class="infoWindowBox ' +
            category +
            '">' +
            name +
            '</div>';
        const infoWindow = new google.maps.InfoWindow({
            content: contentString,
        })
        const marker = new google.maps.Marker({
            position: latlng,
            label: {
                text: id,
                color: '#fff',
                fontWeight: 'bold',
                fontSize: '1.4rem',
                className: 'spotMapBoxCanvas_pin_num',
            },
            icon: {
                url: icons.url,
                scaledSize: icons.scaledSize,
            },

            map: map,
        })


        // liリストをclickしたときに、他のアイコンを初期状態にする。
        google.maps.event.addDomListener(maplistUl, "click", function() {
            marker.setIcon({
                url: icons.url,
                scaledSize: icons.scaledSize,
            })
        })

        // 新しくマーカーをclickしたときに、他のアイコンを初期状態にする。（※１）
        let flag = false;

        google.maps.event.addDomListener(mapCanvas, "touchstart", function() {
            flag = true;
            marker.setIcon({
                url: icons.url,
                scaledSize: icons.scaledSize,
            })
        })

        google.maps.event.addDomListener(mapCanvas, "click", function() {
            if (flag) {
                flag = false;
            } else {
                marker.setIcon({
                    url: icons.url,
                    scaledSize: icons.scaledSize,
                })
            }
        })


        //　markerをクリックしたときの処理
        google.maps.event.addListener(marker, "click", function(e) {

            // クリック済みのMakerに対応するliリストのCSS背景を初期化
            maplistLi.forEach((item) => {
                if (item.classList.contains("clicked")) {
                    item.classList.remove("clicked")
                }
            })
            //　clickしたマーカーのアイコンを変更する処理（※1の処理の後）
            setTimeout(function() {
                marker.setIcon({
                    url: icons.url,
                    scaledSize: currentScaledSize,
                })
            }, 10)

            // infowindow の処理
            if (currentWindow) {
                currentWindow.close()
            }
            infoWindow.setContent(contentString)
            infoWindow.open(map, marker)
            currentWindow = infoWindow

            //markerをクリックした時に地図の中心に
            map.setZoom(13);
            map.panTo(latlng)

            //　クリックされたMarkerに対応するli要素のcss背景を操作する。
            maplistLi[id - 1].classList.add("clicked")

            const targetElement = document.getElementById("spot" + id);
            const scrollBox = document.getElementById("mapList");
            if (window.innerWidth < 500) {
                targetElement.scrollIntoView({
                    behavior: 'smooth' /*or smooth*/ ,
                    block: 'center'
                });
            } else {
                targetElement.scrollIntoView({
                    behavior: 'auto' /*or smooth*/ ,
                    block: 'center'
                });
            }


        })
        maplist[cnt++] = marker

        marker.setIcon({
            url: icons.url,
            scaledSize: icons.scaledSize,
        })
    }

    google.maps.event.addDomListener(window, "load", initMap)
</script>