var x1 = 13.067439, y1 = 80.237617;
var markers = [];
var map = L.map('map').setView([x1, y1], 6);
var googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
    maxZoom: 20,
    subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
});
googleStreets.addTo(map);
var redIcon = L.divIcon({
    className: 'custom-marker-icon',
    html: '<i class="fas fa-map-marker-alt fa-3x" style="color: red;"></i>',
    iconSize: [20, 20]
});
var greenIcon = L.divIcon({
    className: 'custom-marker-icon',
    html: '<i class="fas fa-map-marker-alt fa-3x" style="color: green;"></i>',
    iconSize: [20, 20]
});
var violetIcon = L.divIcon({
    className: 'custom-marker-icon',
    html: '<i class="fas fa-map-marker-alt fa-3x" style="color: violet;"></i>',
    iconSize: [30, 30]
});
var orangeIcon = L.divIcon({
    className: 'custom-marker-icon',
    html: '<i class="fas fa-map-marker-alt fa-3x" style="color: black;"></i>',
    iconSize: [30, 30]
});
if ("geolocation" in navigator) {
    navigator.geolocation.getCurrentPosition(function (position) {
        var x = position.coords.latitude;
        var y = position.coords.longitude;
        map.setView([x, y], 10);
        var userMarker = L.marker([x, y]).addTo(map).bindPopup("Your Location");
        const points = [
            { latitude: x1, longitude: y1, type: "public" },
            { latitude: 9.181199500150413, longitude: 77.86388658712417, type: "private" },
            { latitude: 9.175967317137577, longitude: 77.85968088338927, type: "publicContracted" },
            { latitude: 9.175247091569148, longitude: 77.87180446813665, type: "privateCommercial" },
        ];
        points.forEach(point=>{
            const marker=L.marker([point.latitude,point.longitude],{icon:orangeIcon}).addTo(map);
            markers.push(marker);
        });
    }, function (error) {
        console.error("Error getting user's location:", error.message);
    });
} else {
    console.error("Geolocation is not supported in this browser.");
}