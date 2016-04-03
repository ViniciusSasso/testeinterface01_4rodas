// Documento JavaScript

function menu(n,a) {
if(n.length < 1) {
	return; }
if(document.getElementById(n).style.display == "none") {
	document.getElementById(n).style.display = "inline-block";
	} else {
		document.getElementById(n).style.display = "none";
	}
}

function esconde(n) {
document.getElementById(n).style.display == "none";	
}

function fundoMenu (id) {

var menuMobileExpandiu = document.getElementsByClassName('in');
if (menuMobileExpandiu.length > 0) {
	document.getElementById(id).style.display = "none";
	} else {
		document.getElementById(id).style.display = "block";
	}	

}

/*	
if(id.length < 1) {
	return; }
if(document.getElementById(id).style.display == "block") {
	document.getElementById(id).style.display = "none";
	} else {
		document.getElementById(id).style.display = "block";
	}	
}
*/