<script>
function loadXMLDoc()
{
var xmlhttp;
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
    document.getElementById("contentSection").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","includes/freehost.txt",true);
xmlhttp.send();
}
</script>
<?php
  echo '<h1>freehost.php loaded</h1>';
?>