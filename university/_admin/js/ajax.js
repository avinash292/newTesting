    	  var xmlhttp;
	  function check_user(obj)
	  {
	   if(window.XMLHttpRequest)
	   {
	   xmlhttp=new XMLHttpRequest();
	   }
	   else
	   {
	   xmlhttp=new ActiveXObject("MICROSOFT.XMLHTTP");
	   }
	   
	   xmlhttp.onreadystatechange=function()
	   {
	     if(xmlhttp.readyState==4 && xmlhttp.status==200)
		 {
		   var btn=document.getElementById("submit1");
		   var spa=document.getElementById("sub");
		   var msg=xmlhttp.responseText;
		   if(msg==1)
		   {
		     btn.disabled=true;
			 spa.innerHTML="This User Name Exist";
		   }
		   else
		   {
		   btn.disabled=false;
		   }
		 }
	   };
	   
	   xmlhttp.open("GET","faculity_database.php?f_id="+obj,true);
	   xmlhttp.send();
	  }
	
