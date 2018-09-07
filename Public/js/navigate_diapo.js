/////////////////////////////// DIAPORAMA
(function() {
	
	// JE SELECTIONNE LES ELEMENTS UTILES POUR LA DIAPO
	var fleches = document.querySelectorAll('.diapo_control_direction span'); // Les flèches
	var points = document.querySelectorAll('.diapo_control_point span'); // Les points
	var containers = document.querySelectorAll('.diapo_container'); // les containers des diapos
	var imgs = document.querySelectorAll('.diapo_img'); // les images des diapos
	var contenus = document.querySelectorAll('.diapo_contenu'); // et les descriptions des diapos

	// LES FONCTIONS UTILES POUR LA DIAPO

	function init() {
		for (var i = 0; i < containers.length; i++) {
			points[i].classList.remove('diapo_control_point_active');
			containers[i].classList.remove('diapo_container_active');
			contenus[i].classList.remove('diapo_contenu_active');
			imgs[i].classList.remove('diapo_active');
		}
	}

	function apparait (curr, to_apear) { //Fonction qui fait apparaitre la diapo voulue

		containers[curr].classList.remove('diapo_container_active');
		containers[to_apear].classList.add('diapo_container_active');
		
		containers[curr].classList.remove('apparait');
		containers[to_apear].classList.add('apparait');
		
		contenus[curr].classList.remove('diapo_contenu_active');
		contenus[to_apear].classList.add('diapo_contenu_active');
		
		contenus[curr].classList.remove('vers_la_gauche');
		contenus[to_apear].classList.add('vers_la_gauche');
		
		imgs[curr].classList.remove('diapo_active');
		imgs[to_apear].classList.add('diapo_active');
	}

	function precedent (curr, prec) { //Fonction qui sélectionne la diapo précédente puis la fait apparaitre
		points[curr].classList.remove('diapo_control_point_active');
		points[prec].classList.add('diapo_control_point_active');
		
		apparait (curr, prec);
	}

	function suivant (curr, next) { // Fonction qui sélectionne la diapo suivante puis la fait apparaitre
		points[curr].classList.remove('diapo_control_point_active');
		points[next].classList.add('diapo_control_point_active');
		
		apparait (curr, next);
	}

	// LA NAVIGATION DES DIAPOS AVEC LES FLECHES
	fleches[0].addEventListener('click', function(e) { // Flèche arrière

		e.preventDefault();
		e.stopPropagation();

		window.clearInterval();

		for(var i = 0; i < containers.length; i++) {
			if(containers[i].classList.contains('diapo_container_active')) {
				var actual_number = i;
			}
		}

		if(actual_number == 0) {
			var precedent_number = containers.length - 1;
		}else {
			var precedent_number = actual_number - 1;
		}
		init();
		precedent(actual_number, precedent_number);
	})
	fleches[1].addEventListener('click', function(e) { // Flèche avant

		e.preventDefault();
		e.stopPropagation();
		
		window.clearInterval();

		for(var i = 0; i < containers.length; i++) {
			if(containers[i].classList.contains('diapo_container_active')) {
				var actual_number = i;
			}
		}

		if(actual_number == containers.length-1) {
			var next_number = 0;
		}else {
			var next_number = actual_number + 1;
		}
		init();
		suivant(actual_number, next_number);
	})

	function auto() {
		for(var i = 0; i < containers.length; i++) {
			if(containers[i].classList.contains('diapo_container_active')) {
				var actual_number = i;
			}
		}

		if(actual_number == containers.length-1) {
			var next_number = 0;
		}else {
			var next_number = actual_number + 1;
		}
		init();
		suivant(actual_number, next_number);
	}

	// LA NAVIGATION DES DIAPOS AVEC LES POINTS
	for(var i = 0; i < points.length; i++) {
		points[i].addEventListener('click', function(e) {

			e.preventDefault();
			e.stopPropagation();

			for(var j = 0; j < containers.length; j++) {
				if(containers[j].classList.contains('diapo_container_active')) {
					var actual_number_point = j;
				}
			}

			init();

			var to_apear_point = parseInt(this.attributes.item_level.value, 10);

			points[actual_number_point].classList.remove('diapo_control_point_active');
			this.classList.add('diapo_control_point_active');

			apparait(actual_number_point, to_apear_point);
		})
	}

	// LA NAVIGATION DES DIAPOS AUTOMATIQUE
	window.setInterval(auto, 60000);

})();

/////////////////////////////// BOUTON FERMER
(function(){

	var elt = document.querySelector('#close');
	var position = document.querySelector('#position');

	var close = function(){
		var hasHideClass = position.classList.contains('hide');
		if(!hasHideClass){
			position.classList.add('hide');
		}
	}

	elt.addEventListener('click', close);

})();

//////////////////////////////// COUNTER
(function(){

	var counter = document.querySelectorAll('.counter');
	var n = [];

	for(var i = 0; i < counter.length; i++) {

		n[i] = parseInt(counter[i].textContent);
	}

	// for(var i = 0; i < n.length; i ++){
		
		for(var j = 0; j <= n[0]; j++) {

			// window.setInterval(counter[0].innerText = j, 500);
			// window.setInterval(console.log(j), 5000);
		}
	// }

	// console.log(n);

})();

//////////////////////////////// ANIMATIONS
(function() {
	
	var animates = document.querySelectorAll('.animate');
	var page = document.querySelector('html');
	var anim = ['_vers_la_droite', '_vers_la_gauche', '_vers_le_haut', '_vers_le_bas','vers_la_droite', '_vers_la_gauche', '_vers_le_haut', '_vers_le_bas'];
	
	window.addEventListener('scroll', function (e) {

		e.preventDefault();
		e.stopPropagation();

		var tmp = - (window.screen.height / 2);
		for(var i = 0; i < animates.length; i++) {

			if(page.scrollTop >= animates[i].getBoundingClientRect().height + tmp) {

				animates[i].style.opacity = 1;
				animates[i].classList.add(anim[i]);
			}else {

				animates[i].style.opacity = 0;
				animates[i].classList.remove(anim[i]);
			}
			tmp += animates[i].getBoundingClientRect().height;
		}
	});
})();