function funcValidation()
{
	var fn=document.form1.fname.value;
	var ln=document.form1.lname.value;
	var pass1=document.form1.Password.value;
	var pass2=document.form1.confirmpassword.value;
	var patt=/[a-z]/i;
	var fname=patt.test(fn);
	var lname=patt.test(ln);
	
	if(fn == "")
	{
		alert('Please enter Firstname');
		 return false;
	}
	if(fn == null || fname == true)
	{
		alert("Please Enter only Alphphabet for firstname");
		return false;
	}	
	if(ln=="")
	{
		alert ("Please input Lastname");
		return false;
	}
	if(ln==null || lname == true)
	{
		alert("Please input Lastname");
		return false;
	}

var m = document.getElementById('male');
var f = document.getElementById('female');

if ((m.checked == false) && (f.checked == false))
{
alert ("Please choose gender");
document.getElementById("gen").style.border = "2px solid red";
return false;	
}	
else
{
	document.getElementById("gen").style.border = "";
}

var add=document.form1.address.value;
var patt2=/[^a-z, ]/i;
var address = patt2.test(add);
if(add=="")
{
	alert("please enter your address");
    return false;	
}
if (add=null || address == true)
{
	alert("Enter only Alphabets for address with ,");
	return false;
}	

var c = documet.getElementById("country")
if(c.value == null || c.value == "")
{
	alert("please select a country");
	return false;
}

var p=document.form1.phone.value;
if(isNaN(p))
{
	alert("Enter only Numbers");
	return false;
}
if(p=="")
{
	alert("Enter 10 digits");
	return false;
}
if(p.length<10)
{
	alert("Enter 10 digits");
	return false;
}	
if(p.lenth>10)
{
	alert("Please enter 10 digits");
	return false;
}

var em=document.form1.email.value;
var atpos=indexOf("@");
var dotpos=lastIndexOf(".");
if (atpos<1 || dotpos< atpos+2 || dotpos+2>em.length)
{
	alert("Invalid email");
	return false;
}

if(pass1 == "")
{
	alert("Please enter password");
    return false;	
}

if(pass1.length<6)
{
	alert("Password strength should be greater than 6 characters");
	return false;
}
if(pass2=="")
{
	alert("please confirm the password");
	return false;
}
if(pass1 != pass2)
{
	alert("Confirm password mismatch");
	return false;
}
alert("Registered successfully");
document.form1.submit();













}