(function() {
	
	var page = document.querySelector('html');
	var menu = document.querySelector('header .section_menu');

	window.addEventListener('scroll', function(e) {
		e.preventDefault();
		e.stopPropagation();

		if(page.scrollTop >= 600) {
			menu.classList.add('menu_fixed');
			menu.classList.add('menu_apparait');
			menu.classList.add('transparent');
		}else {
			menu.classList.remove('menu_fixed');
			menu.classList.remove('menu_apparait');
			menu.classList.remove('transparent');
		}
	})
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