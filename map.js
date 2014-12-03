 function initialize() {
        var mapOptions = {
          center: { lat: 33.3151, lng: -34.6875},
          zoom: 3
        };
	
        var myMarker = new google.maps.MarkerImage(
		'marker.png',
		null,
		null,
		null,
		new google.maps.Size(25, 25)
	)
	
	var map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);
        
	
        var marker = new google.maps.Marker({
            position: { lat: -2.6303, lng: 24.0436},
            map: map,
            title:'DR Congo',
	    icon:myMarker
	    
	    
      });
	
        var marker2 = new google.maps.Marker({
            position: { lat: 12.6500, lng: -8.0000},
            map: map,
            title:'Mali',
	    icon:myMarker
	    
        });
        
        var marker3 = new google.maps.Marker({
            position: { lat: 14.6667, lng: -17.4167},
            map: map,
            title:'Senegal',
	    icon:myMarker
	   
      });
	var marker4 = new google.maps.Marker({
            position: { lat: 40.4148, lng: -3.7079},
            map: map,
            title:'Spain',
	    icon:myMarker
      });
	var marker5 = new google.maps.Marker({
            position: { lat: 40.7127, lng: -74.0059},
            map: map,
            title:'NYC',
	    icon:myMarker
      });
	 var marker6 = new google.maps.Marker({
            position: { lat: 33.0915, lng: -96.8994},
            map: map,
            title:'Dallas, TX',
	    icon:myMarker
      });
	var marker7 = new google.maps.Marker({
            position: { lat: 10.8117, lng: -11.0962},
            map: map,
            title:'Guinea',
	    icon:myMarker
      });
	var marker8 = new google.maps.Marker({
            position: { lat: 8.8634, lng: -11.8433},
            map: map,
            title:'Sierra Leone',
	    icon:myMarker
      });
	var marker9 = new google.maps.Marker({
            position: { lat: 6.8610, lng: -9.3823},
            map: map,
            title:'Liberia',
	    icon:myMarker
      });
	var marker10 = new google.maps.Marker({
            position: { lat: 10.1852, lng: 7.9541},
            map: map,
            title:'Nigeria ',
	    icon:myMarker
      });
         
         var infowindow = new google.maps.InfoWindow({
            content: ' The Democratic Republic of Congo reported an outbreak in 2014, but the virus is of a different strain and is unrelated to the current outbreak occurring in the rest of the world. Pictured are Congolese on a river nearby the hot zone.</br></br><IMG BORDER="0" ALIGN="center" SRC="imgs/congo.jpg" height="200px">',
      });
	
	  var infowindow2 = new google.maps.InfoWindow({
            content: 'Mali has currently seen six deaths as a result of Ebola after a two-year-old girl contracted the disease traveling in Guinea. In the photo a woman is being screened for Ebola at the Mali-Guinea border. </br></br><IMG BORDER="0" ALIGN="center" SRC="imgs/mali.jpg" height="200px">',
      });
         
         var infowindow3 = new google.maps.InfoWindow({
            content: 'Senegal currently has a contained spread after the outbreak started with a university student in Dakar. This photo shows the Senegal border with Guinea.</br></br><IMG BORDER="0" ALIGN="center" SRC="imgs/senegal.jpg" height="200px">',
      });
	 var infowindow4 = new google.maps.InfoWindow({
            content: 'Brother Miguel Pajares (pictured), who was volunteering in Liberia, contracted the disease and was flown home to Spain to be treated. Two others contracted Ebola from him, one of which survived. On December 2, 2014, Spain was declared Ebola free. </br></br><IMG BORDER="0" ALIGN="center" SRC="imgs/spain.jpg" height="200px">',
      });
	 var infowindow5 = new google.maps.InfoWindow({
            content:'An MSF doctor, Craig Spencer (pictured), contracted Ebola after working in West Africa to fight the disease. He recovered and the virus did not spread further in New York City. </br></br><IMG BORDER="0" ALIGN="center" SRC="imgs/newyork.jpg" height="200px">',
      });
         
	 var infowindow6 = new google.maps.InfoWindow({
            content: 'Thomas Eric Duncan traveled to Liberia and returned to Dallas, Texas where he tested positive for Ebola and subsequently died. Two nurses working in the same hospital contracted Ebola but recovered. Pictured is one of the nurses being transported.</br></br><IMG BORDER="0" ALIGN="center" SRC="imgs/dallas.jpg" height="200px">',
      });
         
         var infowindow7 = new google.maps.InfoWindow({
            content: 'The 2013 outbreak began here in Guinea. For months, the virus was not recognized as Ebola, helping it to spread with ease throughout West Africa. The WHO currently believes the number of cases is no longer increasing nationally. Healthcare workers helping to make this a reality are pictured here. </br></br><IMG BORDER="0" ALIGN="center" SRC="imgs/guinea.jpg" height="200px">',
      });
	 var infowindow8 = new google.maps.InfoWindow({
            content: 'Sierra Leone is not far behind Liberia in its number of cases, citing just less than 7,000. The WHO recently reported that it believes Sierra Leone will surpass the number of cases in Liberia as the virus continues to steadily spread. Here, healthcare volunteers work to educate Sierra Leone residents about the virus.</br></br><IMG BORDER="0" ALIGN="center" SRC="imgs/sierraleone.jpg" height="200px">',
      }); 
         var infowindow9 = new google.maps.InfoWindow({
            content: 'Liberia has had the most reported cases of this recent outbreak. With over 7,000 of its residents affected and only 50 doctors in the country, Liberia is in dire need of medical and emergency aid. The WHO predicts that Ebola will continue to spread in Liberia in towns and villages. Pictured is a Liberian Muslim funeral for victims.</br></br><IMG BORDER="0" ALIGN="center" SRC="imgs/liberia.jpg" height="200px">',
      });
	 var infowindow10 = new google.maps.InfoWindow({
            content: 'Nigeria is currently Ebola free after losing just 7 Nigerians.</br> The result could have been much worse as the country knew </br>of 529 people to come in contact with the diesease. Pictured are two men celebrating the news.</br></br><IMG BORDER="0" ALIGN="center" SRC="imgs/nigeria.jpg" height="200px">',
      });

         google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map,marker);
      });
         google.maps.event.addListener(marker2, 'click', function() {
            infowindow2.open(map,marker2);
      });
	 google.maps.event.addListener(marker3, 'click', function() {
            infowindow3.open(map,marker3);
      });
	 google.maps.event.addListener(marker4, 'click', function() {
            infowindow4.open(map,marker4);
      });
         google.maps.event.addListener(marker5, 'click', function() {
            infowindow5.open(map,marker5);
      });
	 google.maps.event.addListener(marker6, 'click', function() {
            infowindow6.open(map,marker6);
      });
	 google.maps.event.addListener(marker7, 'click', function() {
            infowindow7.open(map,marker7);
      });
         google.maps.event.addListener(marker8, 'click', function() {
            infowindow8.open(map,marker8);
      });
	 google.maps.event.addListener(marker9, 'click', function() {
            infowindow9.open(map,marker9);
      });
	 google.maps.event.addListener(marker10, 'click', function() {
            infowindow10.open(map,marker10);
      });
      
	 
  }
       google.maps.event.addDomListener(window, 'load', initialize);
       
   