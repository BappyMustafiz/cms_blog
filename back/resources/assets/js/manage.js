const accordions = document.getElementsByClassName('has-submenu')

for (var i = 0; i < accordions.length; i++){
	accordions[i].onclick = function(){
		this.classList.toggle('is-active');

		const submenu = this.nextElementSibling;
		if(submenu.style.maxHeight){
			// menu is open, we need to close it now
			submenu.style.maxHeight = null
			submenu.style.margin = null
		} else{
			// menu is close, we need to open it now
			submenu.style.maxHeight = submenu.scrollHeight + 'px'
			submenu.style.margin = "0.75em"
		}
	}
}