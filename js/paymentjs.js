function funcPayment()
{
	var fn=document.paymentform.fullname.value;
	var cit=document.paymentform.city.value;
	var pd=document.paymentform.pdate.value;
	var rd=document.paymentform.rdate.value;
	var pass1=document.paymentform.cardnumber.value;
	var pass2=document.paymentform.empmonth.value;
	var pass3=document.paymentform.expyear.value;
	var pass4=document.paymentform.ccv.value;
	var patt=/[a-z]/i;
	var fullname=patt.test(fn);
	var city=patt.test(cit);
	var pdate=patt.test(pd);
	var rdate=patt.test(rd);
	
	if(fn == "")
	{
		alert('Please enter Fullname');
		 return false;
	}
	if(fn == null || fullname == true)
	{
		alert("Please Enter only Alphphabet for fullname");
		return false;
	}
var em=document.paymentform.email.value;
var atpos=indexOf("@");
var dotpos=lastIndexOf(".");
if atpos<1 || dotpos< atpos+2 || dotpos+2>em.length)
{
	alert("Invalid email");
	return false;
}
var add=document.paymentform.address.value;
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

	if(cit=="")
	{
		alert ("Please input city");
		return false;
	}
	if(cit==null || city == true)
	{
		alert("Please input City");
		return false;
	}

if(pd == "")
	{
		alert('Please select pickupdate');
		 return false;
	}
	

if(rd == "")
	{
		alert('Please select returndate');
		 return false;
	}
var c = documet.getElementById("vehicle")
if(c.value == null || c.value == "")
{
	alert("please select a ");
	return false;
}

if(pass1 == "")
{
	alert("Please enter Cardnumber");
    return false;	
}

if(pass1.length<16)
{
	alert("Cardnumber strength should be eqaul to 16 characters");
	return false;
}
if(pass2 == "")
	{
		alert('Please Enter Expiration month');
		 return false;
	}
if(pass3 == "")
	{
		alert('Please Enter Expiration year');
		 return false;
	}
if(pass1 == "")
{
	alert("Please enter Cardnumber");
    return false;	
}

if(pass1.length<16)
{
	alert("Cardnumber strength should be greater than 16 characters");
	return false;
alert("Registered successfully");
document.paymentform.submit();
	
}