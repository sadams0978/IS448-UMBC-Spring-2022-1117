window.onload = pageLoad; 
function pageload(){
	document.getElementById("biggerTextB").onclick=increaseTextSize;
	document.getElementById("smallerTextB").onclick=decreaseTextSize;

}

//modifys the text size within the text box to increase 
function increaseTextSize () { 
	var tarea = document.getElementById("description");
	tarea.style.fontSize = "24pt";
}

//modifys the text size within the text box to decrease 
function decreaseTextSize () { 
	var tarea = document.getElementById("description");
	tarea.style.fontSize = "5pt";
}