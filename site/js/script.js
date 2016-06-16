function ChangeText(dummy){
	dummy1=prompt("Enter Text String:");
	alert(dummy1);
	alert(dummy);
	document.getElementById(dummy).innerHTML = dummy1;
}