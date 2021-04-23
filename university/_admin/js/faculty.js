function faculty_check(faculty)
{
	//name
	if(faculty.faculty_name.value==0)
	{
		alert("Plz Enter Your Name");
		faculty.faculty_name.focus();
		return false;
	}
	
	if(faculty.faculty_email.value==0)
	{
		alert("Plz Enter Your E-mail Address");
		faculty.faculty_email.focus();
		return false;
	}
	
	///////Faculty Gender
	
	if(faculty.faculty_gender[0].checked==false && faculty.faculty_gender[1].checked==false)
	{
		alert("Plz Select Gender");
		faculty.faculty_gender[0].checked=true;
		return false;
	}
	//faculty Qualification
	var chk=false;
	var faculty_len=faculty.elements.length;
	for(var i=0;i<faculty_len; i++)
	{
		if(faculty.elements[i].type=="checkbox" && faculty.elements[i].id=="faculty_qual[]")
		{
		if(faculty.elements[i].checked==true)
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
	
	////////// Faculty Contact //////////////
	if(faculty.faculty_contact.value=="")
	{
		alert("Plz Enter Mobile Number");
		faculty.faculty_contact.focus();
		return false;
	}
	if(faculty.faculty_contact.value.length<10)
	{
		alert("Enter 10 Digit Mobile Number");
		faculty.faculty_contact.focus();
		return false;
	}
	
	////////Ariea Of Inetest ////////
	if(faculty.faculty_interest.value==0)
	{
		alert("Plz Enter Your interest");
		faculty.faculty_interest.focus();
		return false;
	}
	
	
	
	/////////Password Validation ///////////
	if(faculty.faculty_pass.value=="")
	{
		alert("Plz Enter your Password");
		faculty.faculty_pass.focus();
		return false;
	}
	if(faculty.faculty_cpass.value=="")
	{
		alert("Plz Enter your confirm Password");
		faculty.faculty_cpass.focus();
		return false;
	}
	
	var pass=faculty.faculty_pass.value;
	var cpass=faculty.faculty_cpass.value;
	if(pass!=cpass)
	{
		alert("yuor password mismatch");
		faculty.faculty_pass.focus();
		return false;
		
	}
	
	///////////////Faculty Post/////////////
	if(faculty.faculty_post.value==0)
	{
		alert("Plz Select Your Post");
		faculty.faculty_post.focus();
		return false;
	}
	///////////////Faculty Question/////////////
	if(faculty.faculty_ques.value==0)
	{
		alert("Plz Select Your Secret Question");
		faculty.faculty_ques.focus();
		return false;
	}
	
	
	//////Experience///////////////
	if(faculty.faculty_experince.value==0)
	{
		alert("Plz enter your experience year");
		faculty.faculty_experince.focus();
		return false;
	}
	//////////////Answer /////////
	if(faculty.faculty_ans.value==0)
	{
		alert("Plz Give Your Answer For sequerty Question");
		faculty.faculty_ans.focus();
		return false;
	}
	
	
	
	return true;
}

//////////////Faculty Delete /////////////////

	function faculty_delete(f_id)
	{
	if(confirm(" Are You sure to delete...?"))
	{
	document.faculty_view_all.act.value="delete_faculty";
	document.faculty_view_all.f_id.value=f_id;
	document.faculty_view_all.submit();
	}
	}




