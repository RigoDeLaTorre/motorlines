new WOW().init()
var scroll = new SmoothScroll('a[href*="#"]')

function menu() {
	let mobile = document.getElementById('mobile').classList

	if (mobile.contains('active')) {
		mobile.remove('active')
	} else {
		mobile.add('active')
	}
}

function hideNav() {
	let mobile = document.getElementById('mobile').classList

	if (mobile.contains('active')) {
		mobile.remove('active')
	}
}
