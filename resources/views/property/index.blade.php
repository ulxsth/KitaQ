<!DOCTYPE html>
<html lang="ja">

<head>
  <style>
    #map {
      height: 600px;
      width: 90%;
      margin: 2rem auto;
      background-color: aliceblue;
    }
  </style>
  @vite(["/js/map.js",
  'resources/css/user/reset.css',
  'resources/css/user/style_header.css',
  'resources/css/user/register.blade.css'])
  <script type="module" src="map.js"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
</head>

<body>
  @include('templates.header')
  <div id="map"></div>

  <script>
    (g => {
      var h, a, k, p = "The Google Maps JavaScript API",
        c = "google",
        l = "importLibrary",
        q = "__ib__",
        m = document,
        b = window;
      b = b[c] || (b[c] = {});
      var d = b.maps || (b.maps = {}),
        r = new Set,
        e = new URLSearchParams,
        u = () => h || (h = new Promise(async (f, n) => {
          await (a = m.createElement("script"));
          e.set("libraries", [...r] + "");
          for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]);
          e.set("callback", c + ".maps." + q);
          a.src = `https://maps.${c}apis.com/maps/api/js?` + e;
          d[q] = f;
          a.onerror = () => h = n(Error(p + " could not load."));
          a.nonce = m.querySelector("script[nonce]")?.nonce || "";
          m.head.append(a)
        }));
      d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() => d[l](f, ...n))
    })
    ({
      key: "AIzaSyDv68MCOTFxgRQUfKPH4P-nluk6le8kEo0",
      v: "beta"
    });

    // Initialize and add the map
    let map;
    var corpMarkerData = {
      name: "日本アイ・ビー・エム（株）北九州事業所",
      lat: 33.88980419911974,
      lng: 130.88700378843336
    };
    var propMarkerData = [{
        name: "URアーベインルネス足立公園 4階",
        lat: 33.86784269112995,
        lng: 130.9009041191994
      },
      {
        name: "内山神岳ビル",
        lat: 33.871714715267885,
        lng: 130.89039750438926
      },
      {
        name: "プランドール風の橋東",
        lat: 33.87820646274718,
        lng: 130.87611620623466
      }
    ];

    async function initMap() {
      const position = {
        lat: 33.85369749173868,
        lng: 130.83775184034334
      };
      // Request needed libraries.
      //@ts-ignore
      const {
        Map
      } = await google.maps.importLibrary("maps");

      map = new Map(document.getElementById("map"), {
        zoom: 13,
        center: new google.maps.LatLng(corpMarkerData.lat, corpMarkerData.lng),
        mapId: "DEMO_MAP_ID",
      });

      // 企業マーカー
      let marker = new google.maps.Marker({
        position: new google.maps.LatLng(corpMarkerData.lat, corpMarkerData.lng),
        map: map,
        title: corpMarkerData.name,
      });

      for (let i = 0; i < propMarkerData.length; i++) {
        let marker = new google.maps.Marker({
          position: new google.maps.LatLng(propMarkerData[i].lat, propMarkerData[i].lng),
          map: map,
        });
      }


    }

    initMap();
  </script>
</body>

</html>
