// Initialize and add the map
let map;
var corpMarkerData = {
  name: "日本アイ・ビー・エム（株）北九州事業所",
  lat: 33.88980419911974,
  lng: 130.88700378843336
};
var propMarkerData = [
  {

  }
];

async function initMap() {
  const position = { lat: 33.85369749173868, lng: 130.83775184034334 };
  // Request needed libraries.
  //@ts-ignore
  const { Map } = await google.maps.importLibrary("maps");

  map = new Map(document.getElementById("map"), {
    zoom: 9,
    center: position,
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
