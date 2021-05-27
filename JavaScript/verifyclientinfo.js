function chkname(){

	var mydata = document.getElementById("name");
	var position = mydata.value.search(/[A-Z][a-z]+/);
	
	if(position != 0)
	{
		alert("The name is incorrect.\n" + 
				"The format is: Miguel \n");
		mydata.select();
		mydata.focus();
		return false;
	}
	else
		return true;
		
}

function chkmiddlename(){

	var mydata = document.getElementById("middle_name");
	var position = mydata.value.search(/[A-Z]?\.?/);
	
	if(position != 0)
	{
		alert("The middle name is incorrect\n" + 
				"The format is: A. or A\n");
		mydata.select();
		mydata.focus();
		return false;
	}
	else
		return true;
		
}

function chknlastname(){

	var mydata = document.getElementById("last_name");
	var position = mydata.value.search(/[A-Z][a-z]+\s[A-Z][a-z]+/);
	
	if(position != 0)
	{
		alert("The last name is incorrect.\n" + 
				"The format is: Diaz\n");
		mydata.select();
		mydata.focus();
		return false;
	}
	else
		return true;
		
}

function chkphone(){

	var mydata = document.getElementById("phone_number");
	var position = mydata.value.search(/\d{10}/);
	
	if(position != 0)
	{
		alert("The format is Incorrect.\n" + 
				"The format is: 787#######.\n");
		mydata.select();
		mydata.focus();
		return false;
	}
	else
		return true;
		
}

function chkemail(){
    var mydata = document.getElementById("email");
    var position = mydata.value.search(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/);

 if (position != 0){
    alert("You have entered an invalid email address!")
    mydata.select();
    mydata.focus();
    return false;
  }
    else
    return (true)
}

function chkaddress(){
    var mydata = document.getElementById("address").value;
if(mydata == 0)
{
alert("Please Enter Your Details Here");
document.form.address.focus();
return false;
}
}

function chkemployeeid()
{
	var mydata = document.getElementById("employee_id");
	var position = mydata.value.search(/\d{3}-\d{2}-\d{4}/);
	
	if(position != 0)
	{
		alert("Thenumber in this format is incorrect.\n" + 
				"The format is: 999-99-9999 whitout spaces or the -.\n");
		mydata.select();
		mydata.focus();
		return false;
	}
	else
		return true;
		
}

function chkpin()
{
	var mydata = document.getElementById("pin");
	var position = mydata.value.search(/\d{4}/);
	
	if(position != 0)
	{
		alert("The pin is in the incorrect format.\n" + 
				"The format is: 1234.\n");
		mydata.select();
		mydata.focus();
		return false;
	}
	else
		return true;
		
}

function chkpinconfirmation()
{
	var mydata = document.getElementById("pin_confirmation");
	var position = mydata.value.search(/\d{4}/);
	
	if(position != 0)
	{
		alert("The pin is in the incorrect format.\n" + 
				"The format is: 1234.\n");
		mydata.select();
		mydata.focus();
		return false;
	}
	else
		return true;
		
}

function chkall()
{
	var mydata1, mydata2;

	mydata1 = document.getElementById("pin");
	mydata2 = document.getElementById("pin_confirmation");
	
	if(mydata1.value != mydata2.value)
	{
		alert("The pins are not the same.\n Please try again.");
		mydata1.value = "";
		mydata2.value = "";
		
		mydata1.select();
		mydata1.focus();
		return false;
	}
		
}

function chkjob(){

	var mydata = document.getElementById("job").value;
	
	if(mydata == 0)
	{
		alert("You have not put a Job .\n" + 
				"You have to put your position on work\n");
		mydata.select();
		mydata.focus();
		return false;
	}
	else
		return true;
		
}
