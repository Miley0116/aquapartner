
/*--------------------------------------------------------------
	
	Script Name    : Contents Maker 2
	Author         : FIRSTSTEP - Motohiro Tani
	Author URL     : https://www.1-firststep.com
	Create Date    : 2021/07/01
	Version        : 3.0
	Last Update    : 2024/03/19
	
--------------------------------------------------------------*/


function contents_maker_2() {
	
	let js     = document.getElementById( 'contents-maker-2-js' );
	let href   = js.getAttribute( 'src' ).replace( /js\/contents-maker-2-js\.php/gi, 'php/index.php' );
	let areas  = document.querySelectorAll( '.contents-maker-2-area' );
	
	
	areas.forEach(function( area, i ) {
		
		let xhr = new XMLHttpRequest();
		xhr.open( 'GET', href, true );
		
		xhr.onreadystatechange = function() {
			if ( xhr.readyState === 4 && xhr.status === 200 ) {
				area.insertAdjacentHTML( 'beforeend', xhr.responseText );
			}
		}
		
		xhr.send( null );
		
	});
	
}




if ( document.readyState == 'loading' ) {
	document.addEventListener( 'DOMContentLoaded', function() {
		contents_maker_2();
	}, false );
} else {
	contents_maker_2();
}