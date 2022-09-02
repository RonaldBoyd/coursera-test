var htmlbutton="<button id='b1' onclick='myFunction()'>Please leave your contact info</button>"

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
	var Subject='Contact from Website';
	var Body=name+" "+dataemail;
	window.open("mailto:ronboyd@hotmail.com?subject="+Subject+" &body="+Body);
	console.log(name+ "  "+dataemail);
		$("#title").html("Ron Boyd's Page");
	

		//window.location.replace("./lesson.php?name="+Body);
			}
			


}
function getEmail(){
	$("#title").html(htmlbutton);
	$("#title").click(function(){
		$("#title").html("Ron Boyd's Page");
		$("#title").off("click");
	});
}
