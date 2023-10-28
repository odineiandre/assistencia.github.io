<html>
  <head>
    <title>Meu mapa exemplo</title>
    <style>
      #mapa {
        height:400px;
        width:400px;
      }
    </style>
  </head>
  <body>
    <div id="mapa"></div>
    <script>

      function inicializar() {
        var coordenadas = {lat: -26.722377, lng: -53.045943};

        var mapa = new google.maps.Map(document.getElementById('mapa'), {
          zoom: 15,
          center: coordenadas 
        });

        var marker = new google.maps.Marker({
          position: coordenadas,
          map: mapa,
          title: 'Meu marcador'
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMfl3ZxkYfxRVr-P5vCTDJip7xCQwqpOw&callback=inicializar">
    </script>
  </body>
</html>