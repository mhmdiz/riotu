var x = document.getElementsByClassName("editable");
for (var i = 0; i < x.length; i++) {
    x[i].addEventListener('input', function() {
    	var id = this.getAttribute('id');
    	var content = this.textContent;

    	var xhttp = new XMLHttpRequest();
	    xhttp.onreadystatechange = function() {
	        if (this.readyState == 4 && this.status == 200) {
	        	var xmlResponse = xhttp.responseXML;
				var  xfield = xmlResponse.getElementsByTagName("field")[0].childNodes[0].nodeValue
				var  xcontent = xmlResponse.getElementsByTagName("content")[0].childNodes[0].nodeValue
				var x = document.getElementById(xfield);
				x.innerHTML = xcontent;
	       }
	    };
    	xhttp.open("POST", "modifyabout.php", true);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhttp.send("field=" + id + "&content=" + content);
	});
}
