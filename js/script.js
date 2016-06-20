var htmlbutton="<button id='b1' onclick='myFunction()'>Give me your email address</button>"

function myFunction(){

	var name=prompt("What is your name?");

	if ((name!=null)&&(name!="")){
		var dataemail=prompt("Enter your email address:");
		} else {
		alert("That's ok.");
		}

	if ((name!=null) && (dataemail!=null)){
	
		writeTextFile();
		$('#title').html('Thank You');
		} 

function writeTextFile() {
	console.log(name+ "  "+dataemail);
		$("#title").html("Ron Boyd's Page");
			}


}
function getEmail(){
	$("#title").html(htmlbutton);
	$("#title").click(function(){
		$("#title").html("Ron Boyd's Page");
		$("#title").off("click");
	});
}