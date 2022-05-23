// JavaScript Document
"use strict";
window.onload = pageLoad; 

function pageLoad(){
	
document.getElementById("amount").onSubmit = validate;
	
}


function validate(){
	
	
	var quantity = document.getElementById("amount").value;
	
	
	if(quantity == 0 ){
		alert("The card you have selected is out of stock cannot be added to cart");
		return false;
	}else{
		alert("you added ", quantity , " to your cart");
		return true;
	}
	
	
}

function zoom(e){
  var zoomer = e.currentTarget;
  e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX
  e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX
  x = offsetX/zoomer.offsetWidth*100
  y = offsetY/zoomer.offsetHeight*100
  zoomer.style.backgroundPosition = x + '% ' + y + '%';
}



