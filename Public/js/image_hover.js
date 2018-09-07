(function() {
	
	var img = document.querySelectorAll('nav ul li img');

	for(var i = 0; i < img.length; i++) {
		var j = i;
		img[i].addEventListener('mouseover', function(e) {
			e.preventDefault();
			e.stopPropagation();
			img_ = this.attributes.src.value
			this.setAttribute('src', '');
		})
		img[i].addEventListener('mouseout', function(e) {
			e.preventDefault();
			e.stopPropagation();
			this.setAttribute('src', img_);
		})
	}

})();