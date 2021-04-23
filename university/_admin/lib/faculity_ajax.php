<script>

var xmlhttp;
function check_user(obj)
{
var q=obj.value;
  if(window.XMLHttpRequest)
  {
   xmlhttp=new XMLHttpRequest();
  }
 else
 {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
 } 
 
 xmlhttp.onreadystatechange=function()
  {
   if(xmlhttp.readyState==4 && xmlhttp.status==200)
   document.getElementById("sub").innerHTML=xmlhttp.responseText;
 };
 xmlhttp.open("get","faculity_database.php?q="+q,true);
 xmlhttp.send();
}
</script>
</head>
