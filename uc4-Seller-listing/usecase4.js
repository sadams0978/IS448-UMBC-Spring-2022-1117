"use strict";

window.onload = pageLoad; 
function pageLoad(){
	document.getElementById("biggerTextB").onclick=increaseTextSize;
	document.getElementById("smallerTextB").onclick=decreaseTextSize;

}

//modifys the text size within the text box to increase 
function increaseTextSize () { 
	var tarea = document.getElementById("description");
	tarea.style.fontSize = "24pt";
	alert("You have pressed the increase button"); 
}

//modifys the text size within the text box to decrease 
function decreaseTextSize () { 
	var tarea = document.getElementById("description");
	tarea.style.fontSize = "5pt";
	alert("You have pressed the increase button"); 
}