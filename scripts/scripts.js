// Documento JavaScript

function menu(n) {
if(n.length < 1) { return; }
if(document.getElementById(n).style.display == "none") { document.getElementById(n).style.display = "block"; }
else { document.getElementById(n).style.display = "none"; }
}

function esconde(d) {
document.getElementById(d).style.display == "none";	
}