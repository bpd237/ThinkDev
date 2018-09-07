(function() {
	
	var sous_menu_one = document.querySelectorAll('ul.menu_level_one > li');
	var sous_menu_two = document.querySelectorAll('ul.menu_level_two > li');
	var sous_menu_three = document.querySelectorAll('ul.menu_level_three > li');

	for(var i = 0; i < sous_menu_three.length; i++) {

		sous_menu_three[i].addEventListener('mouseover', function(e) {
			e.preventDefault();
			e.stopPropagation();

			var curr_parent = parseInt(this.parentNode.parentNode.attributes.data_id.value, 10);
			var first_curr_parent = parseInt(this.parentNode.parentNode.parentNode.parentNode.attributes.data_id.value, 10);
			
			sous_menu_one[first_curr_parent].classList.add('link_hover_first');
			sous_menu_two[curr_parent].classList.add('link_hover');

		})
		sous_menu_three[i].addEventListener('mouseout', function(e) {
			e.preventDefault();
			e.stopPropagation();

			var curr_parent = parseInt(this.parentNode.parentNode.attributes.data_id.value, 10);
			var first_curr_parent = parseInt(this.parentNode.parentNode.parentNode.parentNode.attributes.data_id.value, 10);
			
			sous_menu_one[first_curr_parent].classList.remove('link_hover_first');
			sous_menu_two[curr_parent].classList.remove('link_hover');
		})
	}
	for(var i = 0; i < sous_menu_two.length; i++) {

		sous_menu_two[i].addEventListener('mouseover', function(e) {
			e.preventDefault();
			e.stopPropagation();

			var curr_parent = parseInt(this.parentNode.parentNode.attributes.data_id.value, 10);
			sous_menu_one[curr_parent].classList.add('link_hover_first');
		})
		sous_menu_two[i].addEventListener('mouseout', function(e) {
			e.preventDefault();
			e.stopPropagation();

			var curr_parent = parseInt(this.parentNode.parentNode.attributes.data_id.value, 10);
			sous_menu_one[curr_parent].classList.remove('link_hover_first');
		})
	}

})();