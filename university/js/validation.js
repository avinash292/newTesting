function valid_student(frm)
{
	
	//Student Name
	if(frm.st_name.value=="")
	{
		alert("Enter Name :");
		frm.st_name.focus();
		return false;
	}

	//Father Name
	
	if(frm.st_father.value=="")
	{
		alert("Enter Father Name");
		frm.st_father.focus();
		return false;
	}
	
	//Student Gender
	
	if(frm.st_gen[0].checked==false && frm.st_gen[1].checked==false)
	{
		alert("Plz Select Gender");
		frm.st_gen[0].checked=true;
		return false;
	}
	
	//Student Phone
	
	if(frm.st_phone.value=="")
	{
		alert("Plz Enter Mobile Number");
		frm.st_phone.focus();
		return false;
	}
	if(frm.st_phone.value.length<10)
	{
		alert("Enter 10 Digit Mobile Number");
		frm.st_phone.focus();
		return false;
	}
	
	
	//Student Local Address
	if(frm.st_address1.value=="")
	{
		alert("Enter Your Local Address");
		frm.st_address1.focus();
		return false;
	}
	 
	 //Student Permanent Address
	 if(frm.st_address2.value=="")
	{
		alert("Enter Your Permanent Address");
		frm.st_address2.focus();
		return false;
	}
	
	//Date Of Birth
	if(frm.st_dob.value=="")
	{
		alert("Enter Date Of Birth");
		frm.st_dob.focus();
		return false;
	}
	
	//Date of Addmission
	if(frm.st_doa.value=="")
	{
		alert("Enter your Date of Addimission");
		frm.st_doa.focus();
		return false;
	}
	
	
	//E-Mail Validation
	if(frm.st_email.value=="")
	{
		alert("Enter Your Emai Address");
		frm.st_email.focus();
		return false;
	}
	
	var email=frm.st_email.value;
	if(email.indexOf('@')==-1 || email.indexOf('@')==0 || email.indexOf('@')== email.length-1)
	{
	alert("Plz Enter a Valid Email including @ symbole");
	frm.st_email.focus();
	return false;
	}
	
	
	//Student Course
	if(frm.st_course.value==0)
	{
		alert("Plz Select Course");
		frm.st_course.focus();
		return false;
	}
	//City
	if(frm.st_city.value==0)
	{
		alert("Plz Select City");
		frm.st_city.focus();
		return false;
	}
	
	//State
	if(frm.st_state.value==0)
	{
		alert("plz Select Your state");
		frm.st_state.focus();
		return false;
	}
	
	//Country
	if(frm.st_country.value==0)
	{
		alert("Plz Select Country");
		frm.st_country.focus();
		return false;
	}
	
	//Qualification
	var chk=false;
	var frm_len=frm.elements.length;
	for(var i=0;i<frm_len; i++)
	{
		if(frm.elements[i].type=="checkbox" && frm.elements[i].id=="st_qual[]")
		{
		if(frm.elements[i].checked==true)
		{
			chk=true;
			break;
		}
		}
	}
	if(chk==false)
	{
		alert("Plz Select Qualification");
		return false;
	}
	
	
	//Image
	if(frm.st_image.value=="")
	{
		alert("Plz Select Your Image");
		frm.st_image.focus();
		return false;
	}
	
	//Pincode
	if(frm.st_pincode.value=="")
	{
		alert("Plz Enter  pin code");
		frm.st_pincode.focus();
		return false;
	}
	if(frm.st_pincode.value.length<6)
	{
		alert("Enter 6 Digit  pin code");
		frm.st_pincode.focus();
		return false;
	}
	
return true;
}

////////////Generate Alert Box For Delete Student////////////
function student_delete(st_id)
{
if(confirm(" Are You sure to delete...?"))
{
	document.student_view.act.value="delete_student";
	document.student_view.st_id.value=st_id;
	document.student_view.submit();
}
}

//////////////////Fees delete//////////////

function delete_fees(fees_id)
{
if(confirm(" Are You sure to delete...?"))
{
	document.fees_view.act.value="fees_delete";
	document.fees_view.fees_id.value=fees_id;
	document.fees_view.submit();
}
}






//////Function For Print Data ///////////
function printout()
{
	window.print();
}


/////////Checked All Checkbox//////////

	function mark_All(obj)
	{
		//alert("hiii");
		
		var frm=this.document.student_view;
		var frm_len=frm.elements.length;
		for(var i=0; i<frm_len; i++)
		{
			if(frm.elements[i].type=="checkbox" && frm.elements[i].name=="st_multi_id[]")
			{
				frm.elements[i].checked=obj.checked;
			}
		}
		
	}

////////Delete All stident//////////
	function delete_all()
	{
		if(confirm("Are You Sure To Delete All Selected Student"))
		{
			document.student_view.act.value="delete_multi_student";
			document.student_view.submit();
		}
	}

//////////////function for no or alphabets validation/////////////
 function check_char(e)
{
	var key, keychar;
	if (window.event)
		key=window.event.keyCode;
	else if (e)
		key=e.which;
	else
		return true;
	keychar = String.fromCharCode(key);
	keychar = keychar.toLowerCase();
	goods = goods.toLowerCase();
	if (goods.indexOf(keychar) != -1)
	{
		goods="0123456789.";
		return true;
	}
	if ( key==null || key==0 || key==8 || key==9 || key==13 || key==27 )
	{
		goods="0123456789.";
		return true;
	}
	return false;
}



///***********************Fee Checking Validation *********************//

function validate_fee(form1)
{
	
	//Student Name
	if(form1.st_pfees.value=="")
	{
		alert("Enter Paying Amount:");
		form1.st_pfees.focus();
		return false;
	}
	if(form1.pay_date.value=="")
	{
		alert("Enter Date:");
		form1.pay_date.focus();
		return false;
	}
	
return true;
}









