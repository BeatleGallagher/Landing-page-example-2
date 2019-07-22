var menu = document.getElementById('menu');
var navbar = document.getElementById('navbar');

menu.addEventListener("click",function(){
	overlay.style.display = "block";
	menu.style.visibility = "hidden";
});

overlay.addEventListener("dblclick",function(){
	overlay.style.display = "none";
	menu.style.visibility = "visible";
});