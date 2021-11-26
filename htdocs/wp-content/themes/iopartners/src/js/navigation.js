/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */

 (function($) {

	$(function() {
		window.addEventListener('scroll', function (e) {

			var nav = document.getElementById('header-nav');

			if (document.documentElement.scrollTop || document.body.scrollTop > window.innerHeight) {

				/* Add background */
				nav.classList.remove('bg-transparent');
				nav.classList.add('bg-light');
				
				/* Switch nav color */
				nav.classList.remove('navbar-dark');
				nav.classList.add('navbar-light');

				nav.classList.add('stuck');

			}
			else {

				/* Remove background */
				nav.classList.remove('bg-light');
				nav.classList.add('bg-transparent');
				
				/* Switch nav color */
				nav.classList.remove('navbar-light');
				nav.classList.add('navbar-dark');

				nav.classList.remove('stuck');
			}

		});
	});

})( jQuery );