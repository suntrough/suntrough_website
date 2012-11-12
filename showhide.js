function showcontent(ic) {
	for (i=1; i<100; i++) {
		if (i==ic)
			state = 'block';
		else
			state = 'none';
			
		if (document.all) { //IS IE 4 or 5 (or 6 beta) 
			eval("document.all.ic" + i + ".style.display = state"); 
		}
		if (document.layers) { //IS NETSCAPE 4 or below 
			document.layers["ic" + i].display = state; 
		} 
		if (document.getElementById &&!document.all) { 
			hza = document.getElementById('ic' + i); 
			hza.style.display = state; 
		} 
	}
}