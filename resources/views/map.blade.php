@extends("layouts.master")

<!-- import de la lib leaflet -->
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css"/>
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

@section('navbar-class', 'navbar-carte')
@section('content')

   <div class="flex-center gap2">
   

      <div id="map"></div>
      <div class="flex-center-row gap1">
         <a class="blue-btn" href="/IUT">Visiter l'IUT</a> 
         <a class="blue-btn" href="https://www.google.com/maps?q=IUT+de+Chambéry+Le+Bourget+du+Lac" target="_blank">S'y rendre</a>
      </div>
       
   </div>

   
   
   <script>
      var map = L.map('map').setView([45.64246, 5.87122], 13); // Coordonnées de l'IUT
      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      }).addTo(map);

      L.marker([45.64246, 5.87122]).addTo(map)
         .bindPopup('IUT de Chambéry')
         .closePopup();
   </script>

   

@endsection