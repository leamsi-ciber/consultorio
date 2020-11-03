function loadLocation () {
    //inicializamos la funcion y definimos  el tiempo maximo ,las funciones de error y exito.
    navigator.geolocation.getCurrentPosition(viewMap,ViewError,{timeout:1000});
}

//Funcion de exito
function viewMap (position) {
    
    var lon = position.coords.longitude;	//guardamos la longitud
    var lat = position.coords.latitude;		//guardamos la latitud

    var link = "http://maps.google.com/?ll="+lat+","+lon+"&z=14";
    document.getElementById("long").innerHTML = "Longitud: "+lon;
    document.getElementById("latitud").innerHTML = "Latitud: "+lat;

    document.getElementById("link").href = link;

}



function ViewError (error) {
    alert(error.code);
}	
