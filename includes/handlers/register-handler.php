<?php 

function sanatizeUserName($inputname){
	$inputname= strip_tags($inputname);
	$inputname= str_replace(" ", "", $inputname);
	return $inputname;

}

function sanatizepass($inputname){
	$inputname= strip_tags($inputname);
	return $inputname;
}


function sanatizeString($inputname){
	$inputname= strip_tags($inputname);
	$inputname= str_replace(" ", "", $inputname);
	$inputname= ucfirst((strtolower($inputname)));
	return $inputname;
}




if(isset($_POST['regbutton'])){
    //echo "register button was pressed";
	
	$loginuserName= sanatizeUserName($_POST['loginuserName']);

	$firstname= sanatizeString($_POST['firstname']);

	$lastname= sanatizeString($_POST['lastname']);

	$login1password= sanatizepass($_POST['login1password']);

	$login2password= sanatizepass($_POST['login2password']);

	$email= sanatizeString($_POST['email']);

	$email2= sanatizeString($_POST['email2']);


} 

?>