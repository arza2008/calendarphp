<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Ajax Calendar</title>
<script src="scripts/ajax_jquery.js" language="javascript" type="text/javascript"></script>
<style>
 #ajax_calendar {
  width:750px;
  text-align:center; 
 }
</style>
<script>
function loadCalendar(){
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("ajax_calendar").innerHTML=xmlhttp.responseText;
    }
  }
  var url = "calendar.php?t=" + Math.random();
xmlhttp.open("GET",url,true);
xmlhttp.send();
}
//previous month
function goLastMonth(month, year){
if(month == 1) {
--year;
month = 13;
}
--month
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("ajax_calendar").innerHTML=xmlhttp.responseText;
    }
  }
  var url = "calendar.php?month="+month+"&year="+year+"&t=" + Math.random();
xmlhttp.open("GET",url,true);
xmlhttp.send();
}
//next month
function goNextMonth(month, year){
if(month == 12) {
++year;
month = 0;
}
++month
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("ajax_calendar").innerHTML=xmlhttp.responseText;
    }
  }
  var url = "calendar.php?month="+month+"&year="+year+"&t=" + Math.random();
xmlhttp.open("GET",url,true);
xmlhttp.send();
}
</script>
</head>

<body onload="loadCalendar()">
<p>Ajax Calendar : </p>
<div id="ajax_calendar"></div>
</body>
</html>