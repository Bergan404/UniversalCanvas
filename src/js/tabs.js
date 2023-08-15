const buttons = document.querySelectorAll( '[id^="tab-button-"]' );
const targetDivs = document.querySelectorAll( '[id^="tab-description-"]' );


buttons.forEach( ( btn, index ) => {
	btn.onclick = function() {
		const isTargetVisible = 'block' === targetDivs[index].style.display;

		// Toggle the display of the clicked targetDiv if it's not currently visible
		if ( ! isTargetVisible ) {
			targetDivs.forEach( ( div, idx ) => {
				div.style.display = idx === index ? 'block' : 'none';
			});

			buttons.forEach( ( button, btnIndex ) => {

				// Add 'active-element' class to the clicked button and remove from others
				if ( btnIndex === index ) {
					button.classList.add( 'active-element' );
				} else {
					button.classList.remove( 'active-element' );
				}
			});
		}
	};
});
