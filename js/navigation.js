/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu
 */
( function() {
	const navBtn = document.querySelector('.js-navtoggle');
    const nav = document.querySelector('.js-nav');

    navBtn.addEventListener('click', () => {
        nav.classList.toggle('is-visible');
        navBtn.classList.toggle('is-open');
        document.body.classList.toggle('no-scroll');
    });
	
}() );
