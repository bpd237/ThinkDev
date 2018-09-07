(function() {
	
	function $_GET(param) {
		var vars = {};
		window.location.href.replace( location.hash, '' ).replace( 
			/[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
			function( m, key, value ) { // callback
				vars[key] = value !== undefined ? value : '';
			}
		);

		if ( param ) {
			return vars[param] ? vars[param] : null;	
		}
		return vars;
	}

	var page = null;
	if(typeof page === 'object') {
		page = 'fr.Page.Home.Index';
	}else {
		page = $_GET('p');
	}
	console.log($_GET('p'));
	var elts = page.split('.');
	var links = document.querySelectorAll('.menu_level_one > li');

	if(elts[3] == 'Divers') {
		for(var i = 0; i < links.length; i++) {
			links[i].classList.remove('link_hover_first');
		}
		links[4].classList.add('link_hover_first');
	}else if(elts[3] == 'Premium') {
		for(var i = 0; i < links.length; i++) {
			links[i].classList.remove('link_hover_first');
		}
		links[2].classList.add('link_hover_first');
	}else if(elts[3] == 'Forum') {
		for(var i = 0; i < links.length; i++) {
			links[i].classList.remove('link_hover_first');
		}
		links[3].classList.add('link_hover_first');
	}else if(elts[3] == 'Formations') {
		console.log(links[4]);
		for(var i = 0; i < links.length; i++) {
			links[i].classList.remove('link_hover_first');
		}
		links[4].classList.add('link_hover_first');
	}else {
		for(var i = 0; i < links.length; i++) {
			links[i].classList.remove('link_hover_first');
		}
		links[0].classList.add('link_hover_first');
	}
	
})();