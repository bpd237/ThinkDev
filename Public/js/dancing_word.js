(function() {
	
	var paragraphs = document.querySelectorAll('p'); // on selectionne tous les paragraphs
	var words = new Array();
	var span = document.createElement('span')

	// Cette petite boucle vas nous permettre de récupérer tous les mots qui sont dans les balises 'p' et les entourer d'une balise span dans la variable 'words'
	for(var i = 0; i < paragraphs.length; i++) {
		w = paragraphs[i].innerHTML.split(' ');
		tmp = w;
		for(var j = 0; j < w.length; j++) {
			w[j] = '<span class="dance">'+tmp[j]+'</span>';
			words.push(w[j]);
		}
		var all = words.join(' ');
		paragraphs[i].innerHTML = all;
		words = new Array();
	}
})();