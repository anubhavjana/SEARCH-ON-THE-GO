<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Cab Routes</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
    </style>
  </head>
  <body>
   
    <div id="floating-panel">
    <b>Source: </b>
    <select id="start">
      <option value="Thiruvalluvar Nagar Beach, Valmiki Nagar, Chennai, Tamil Nadu 600041">Thiruvalluvar</option>
      <option value="Phoenix Mall, Plot No. 142, Velachery Rd, Indira Gandhi Nagar, Velachery, Chennai, Tamil Nadu 600042">Phoenix Mall</option>
      <option value="VIT-chennai Campus Bus Stop">Vit University Chennai</option>
      <option value="ADYAR, LB Rd 1st St, Indira Nagar, Chennai, Tamil Nadu 600020 ">Adyar Indira Nagar</option>
      <option value="Kelambakkam Bus Terminal, Kelambakkam, Tamil Nadu 603103">Kelambakkam Bus Terminal</option>
      <option value="Chromepet கிரோம்பேட்டை, Radha Nagar, Chromepet, Chennai, Tamil Nadu 600044">Chromepet</option>
      <option value="Chepauk, Triplicane, Chennai, Tamil Nadu">Chepauk</option>
      <option value="T Nagar Bus Terminus, S Usman Road, Asoka Nagar, T Nagar, Chennai, Tamil Nadu 600017">TNagar</option>
      <option value="Perungalathur, Tamil Nadu">Perungalathur</option>
      <option value="Vandalur Zoo Bus Stand, Chennai Theni Hwy, Peerakankaranai, Tamil Nadu 600048">Vandaloor Zoo</option>
      <option value="Thoraipakkam Bus Depot, Netaji Nagar New Colony, Secretariat Colony, Thoraipakkam, Kotivakkam, Tamil Nadu 600097">Thoraipakkam</option>
      <option value="Elliot's Beach Fish Market, Odaimanagar, Besant Nagar, Chennai, Tamil Nadu 600090">Elliots Beach Market</option>
      <option value="Saidapet Bus Stop, Anna Salai, West Saidapet, Chennai, Tamil Nadu">Saidapet Bus Depot</option>
      <option value="Marina Beach Spot, Marina Beach, Triplicane, Chennai, Tamil Nadu 600005">Marina Beach</option>
      
  
    </select>
    <b>Destination: </b>
    <select id="end">
    <option value="Thiruvalluvar Nagar Beach, Valmiki Nagar, Chennai, Tamil Nadu 600041">Thiruvalluvar</option>
      <option value="Phoenix Mall, Plot No. 142, Velachery Rd, Indira Gandhi Nagar, Velachery, Chennai, Tamil Nadu 600042">Phoenix Mall</option>
      <option value="Tambaram">Tambaram</option>
      <option value="VIT-chennai Campus Bus Stop">Vit University Chennai</option>
      <option value="Chepauk, Triplicane, Chennai, Tamil Nadu">Chepauk</option>
      <option value="ADYAR, LB Rd 1st St, Indira Nagar, Chennai, Tamil Nadu 600020 ">Adyar Indira Nagar</option>
      <option value="Kelambakkam Bus Terminal, Kelambakkam, Tamil Nadu 603103">Kelambakkam Bus Terminal</option>
      <option value="T Nagar Bus Terminus, S Usman Road, Asoka Nagar, T Nagar, Chennai, Tamil Nadu 600017">TNagar</option>
       <option value="Perungalathur, Tamil Nadu">Perungalathur</option>
       <option value="Vandalur Zoo Bus Stand, Chennai Theni Hwy, Peerakankaranai, Tamil Nadu 600048">Vandaloor Zoo</option>
       <option value="Thoraipakkam Bus Depot, Netaji Nagar New Colony, Secretariat Colony, Thoraipakkam, Kotivakkam, Tamil Nadu 600097">Thoraipakkam</option>
        <option value="Marina Beach Spot, Marina Beach, Triplicane, Chennai, Tamil Nadu 600005">Marina Beach</option>
       <option value="Elliot's Beach Fish Market, Odaimanagar, Besant Nagar, Chennai, Tamil Nadu 600090">Elliots Beach Market</option>
       <option value="Saidapet Bus Stop, Anna Salai, West Saidapet, Chennai, Tamil Nadu">Saidapet Bus Depot</option>

    </select>
    </div>
    <div id="map"></div>
    <script>
      function initMap() 
      {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: {lat: 13.082263, lng: 80.276434}
        });
        directionsDisplay.setMap(map);
        

        var onChangeHandler = function() 
        {
          calculateAndDisplayRoute(directionsService, directionsDisplay);
        };
        document.getElementById('start').addEventListener('change', onChangeHandler);
        document.getElementById('end').addEventListener('change', onChangeHandler);
      }

      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        directionsService.route({
          origin: document.getElementById('start').value,
          destination: document.getElementById('end').value,
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBEEyhocF-EiDiu8Ax1TXa10nsRbEwWL-Q&callback=initMap">
    </script>
  </body>
</html>