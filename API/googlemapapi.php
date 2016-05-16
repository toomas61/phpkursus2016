<html>
  <head>
    <title>Google Maps</title>
<!-- tmk.edu.ee key ABQIAAAATL9di-v6l4X9XtMiDEKW2hROKbum6Rc2eF9b_5oJlUsIDKGwbxTutnabLO7Y3SzloxvHu4hznkl0VQ -->
    <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=ABQIAAAATL9di-v6l4X9XtMiDEKW2hROKbum6Rc2eF9b_5oJlUsIDKGwbxTutnabLO7Y3SzloxvHu4hznkl0VQ" type="text/javascript"></script>
  </head>
  <body onunload="GUnload()">

    <!-- you can use tables or divs for the overall layout -->

    
    <!-- override css -->
    <style>
    img {
      background: transparent;
      #border: 1px solid #DCDCDC;
      padding: 3px;
    }
    img.float-right {
      margin: 5px 0px 5px 15px;  
    }
    img.float-left {
      margin: 5px 15px 5px 0px;
    }
    </style>


    <table border=1>
      <tr>
        <td>
           <div id="map" style="width: 1000px; height: 700px"></div>
        </td>
        <td width = 100 valign="top" style="text-decoration: underline; color: #4444ff;">
           <div id="side_bar"></div>
           
           <br>
           <a href="javascript:mydesiredmap(G_NORMAL_MAP,14)">T�navad</a><br />
           <a href="javascript:mydesiredmap(G_SATELLITE_MAP,17)">L�hivaade</a><br />           
           <a href="javascript:myzoom(1)">Zoom +1</a><br />
           <a href="javascript:myzoom(-1)">Zoom -1</a><br />
           <a href="javascript:mymapmode(G_SATELLITE_MAP)">Satellite</a><br />
           <a href="javascript:mymapmode(G_NORMAL_MAP)">Normal</a><br />
           <a href="javascript:mymapmode(G_HYBRID_MAP)">Hybrid</a><br />
           
        </td>
      </tr>
    </table>


    <noscript><b>JavaScript must be enabled in order for you to use Google Maps.</b> 
      However, it seems JavaScript is either disabled or not supported by your browser. 
      To view Google Maps, enable JavaScript by changing your browser options, and then 
      try again.
    </noscript>

    <script type="text/javascript">
    //<![CDATA[

    if (GBrowserIsCompatible()) {
      
      // this variable will collect the html which will eventually be placed in the side_bar
      var side_bar_html = "";
    
      // arrays to hold copies of the markers and html used by the side_bar
      // because the function closure trick doesnt work there
      var gmarkers = [];


     // This function zooms in or out
      // its not necessary to check for out of range zoom numbers, because the API checks
      function myzoom(a) {
        map.setZoom(map.getZoom() + a);
      }

      function mymapmode(a) {
        map.setMapType(a);
      }
      
      function mydesiredmap(maptype,mapzoom) {
        map.setMapType(maptype);
        map.setCenter(new GLatLng(59.414775, 24.724131), mapzoom);
      }      

      // A function to create the marker and set up the event window
      function createMarker(point,name,html) {
        var marker = new GMarker(point);
        GEvent.addListener(marker, "click", function() {
          marker.openInfoWindowHtml(html);
        });
        // save the info we need to use later for the side_bar
        gmarkers.push(marker);
        // add a line to the side_bar html
        side_bar_html += '<a href="javascript:myclick(' + (gmarkers.length-1) + ')">' + name + '<\/a><br>';
         return marker;
      }


      // This function picks up the click and opens the corresponding info window
      function myclick(i) {
        GEvent.trigger(gmarkers[i], "click");
      }
      
      <!-- google map coordinates -->
      <!-- http://www.gorissen.info/Pierre/maps/googleMapLocation.php -->
      <!-- http://www.dishpointer.com -->       
     

      // create the map
      var map = new GMap2(document.getElementById("map"));
      map.setMapType(G_SATELLITE_MAP);
      map.addControl(new GLargeMapControl());
      map.addControl(new GMapTypeControl());
      map.setCenter(new GLatLng(59.414775, 24.724131), 17);

      // add the points    
      var point = new GLatLng(59.415292,24.724120);
      var marker = createMarker(point,"Siidisaba 11a","<b>Siidisaba 11a</b><br>Korterid 1-15<br><img src='http://siidisaba.maagia.net/gallery/thumb/126945779046.jpg'>")
      map.addOverlay(marker);

      var point = new GLatLng(59.409686,24.670916);
      var marker = createMarker(point,"Tallinna Majanduskool","<b>Tallinna Majanduskool</b><br>TMK")
      map.addOverlay(marker);                                                  
                       
      var point = new GLatLng(59.441288,24.841300);
      var marker = createMarker(point,"Loitsu 2","<b>Loitsu 2</b>")
      map.addOverlay(marker);                         
                       
      var point = new GLatLng(57.669413,27.371407);
      var marker = createMarker(point,"Viitka","<b>Viitka</b>")
      map.addOverlay(marker);                         
                       
      // put the assembled side_bar_html contents into the side_bar div
      document.getElementById("side_bar").innerHTML = side_bar_html;
      
    }

    else {
      alert("Sorry, the Google Maps API is not compatible with this browser");
    }

    // This Javascript is based on code provided by the
    // Community Church Javascript Team
    // http://www.bisphamchurch.org.uk/   
    // http://econym.org.uk/gmap/

    //]]>
    </script>
    
  </body>

</html>