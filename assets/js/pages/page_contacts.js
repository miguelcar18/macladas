var ContactPage = function () {

    return {
        
    	//Basic Map
        initMap: function () {
			var map;
			$(document).ready(function(){
			  map = new GMaps({
				div: '#map',
				scrollwheel: false,				
				lat: 9.799989,
				lng: -63.2889178,
				zoom: 10
			  });
			  
			  var marker = map.addMarker({
				lat: 9.799989,
				lng: -63.2889178,
	            title: 'Company, Inc.',
	            zoom: 10
		       });
			});
        },

        //Panorama Map
        initPanorama: function () {
		    var panorama;
		    $(document).ready(function(){
		      panorama = GMaps.createPanorama({
		        el: '#panorama',
		        lat : 9.799989,
		        lng : -63.2889178,
		        zoom: 10
		      });
		    });
		}        

    };
}();