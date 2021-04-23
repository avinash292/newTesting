<?php include("db_connect.php");
########function for dynamic combobox###########
function get_option_list($table,$col_id,$col_name,$sel)
{
$sql="select * from $table";
$option_list="<option value='0'>Plz Select</option>";
$rs=mysql_query($sql)or die(mysql_error());
while($data=mysql_fetch_assoc($rs))
{
if($data[$col_id]==$sel)
$option_list.="<option value='$data[$col_id]' selected>$data[$col_name]</option>";
else
$option_list.="<option value='$data[$col_id]'>$data[$col_name]</option>";
}
return $option_list;
}

###########function for checkbox########
function get_check_list($table,$col_id,$col_name,$name,$sel)
{
$sql="select * from $table";
$check_list="";
$sel=explode(",",$sel);//string to array
$rs=mysql_query($sql)or die(mysql_error());
while($data=mysql_fetch_assoc($rs))
{
if(in_array($data[$col_id],$sel))
$check_list.="<input type='checkbox' value='$data[$col_id]' name='$name' id='$name' checked>$data[$col_name]";
else
$check_list.="<input type='checkbox' value='$data[$col_id]' name='$name' id='$name'>$data[$col_name]";
}
return $check_list;
}




/////####Student details of single value///////////////

function get_value($table,$col_id,$col_name,$sel)
{
  $sql="select $col_name from $table where $col_id='$sel'";
  $rs=mysql_query($sql) or die(mysql_error());
  if(mysql_num_rows($rs))
  {
  $data=mysql_fetch_assoc($rs) or die(mysql_error());
  return $data[$col_name];
  }
}

///////###################for multi values///////
function get_multi_value($table,$col_id,$col_name,$sel)
{
  $sql="select $col_name from $table where $col_id in($sel)";
  $rs=mysql_query($sql) or die(mysql_error());
  
  $multi_value=" ";
  while($data=mysql_fetch_assoc($rs))
  {
    $multi_value.=$data[$col_name].",";
  }
  return $multi_value;
}



?>