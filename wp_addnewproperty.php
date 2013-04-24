<?php
@session_start();
if(!isset($_SESSION['userName'])) 
{
header('location:login.php');
}
require_once('functions.php');
require_once('connection.php');
$user=new User(); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>fitow</title>
<link href="css/login.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
<script type="text/javascript">
window.history.pushState(data, "Title", "/proprty");
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>

<body>


<div  id="new">
 NEW PROPERTY
</div>

<!-- Form Code Start -->
<div  class="form">
<form id='register'  method='post'  name='form' action="wp_insert.php">



    <p class="contact"><label for="name">Name:</label></p>
    <input type='text' name='name' id='name' required=" " maxlength="50"  />
	
    <p class="contact"><label for="name">Description:</label></p>
   <textarea style="width:400px; height:100px;" name="desc" required=" "  onBlur="checkDs(this.value)"></textarea>
	<p class="contact"><label for="name">Phone:</label></p>
    <input type='text' name='phone' id='username' required=" " maxlength="50" />
	
     <p class="contact"><label for='fax' >FAX:</label></p>
     <input type='text' name='fax' id='username' required=" " maxlength="50" />
	 
       <p class="contact"><label for='web' >Web Address:</label></p>
    <input type='text' name='webad' id='username'  maxlength="50"onBlur="checkWb(this.value)" />

<p class="contact"><label for='addr' >Address1:</label></p>
    <input type='text' name='addr1' id='username'  maxlength="50" required=" "onBlur="checkAd1(this.value)"/>
   <td><span id="addrr1"></span></td></tr>

<p class="contact"><label for='addr' >Address2:</label></p>
    <input type='text' name='addr2' id='username' required=" " maxlength="50" onBlur="checkAd2(this.value)"/>
   
    <p class="contact"><label for='sub' >Subrub:</label></p>
    <input type='text' name='subr' id='username'  maxlength="50" onBlur="checkSb(this.value)"/>
	

  <p class="contact"><label for='regi'>Region:</label></p>
    <input type='text' name='region' id='username' required=" " maxlength="50" onBlur="checkRg(this.value)"/>
   <span id="rg"></span>
    
    <p class="contact"><label for='stat' >State:</label></p>
    <input type='text' name='state' id='username' required=" " maxlength="50" onBlur="checkSt(this.value)"/>
	<span id="st"></span>
   
     <p class="contact"><label for='pst' >Post Code:</label></p>
    <input type='text' name='postcode' id='username' required=" " maxlength="50"onBlur="checkPs(this.value)" />
	<span id="ps"></span>
    
   <p class="contact"><label for='country' >Country:</label></p>
     <select name="country" id="username" style="width:400px; height:27px;">

    <option value="1">Australia</option>

    <option value="2">Bangladesh</option>

    <option value="3">Aruba</option>

    <option value="4">Newzeland</option>

    <option value="0">All</option>

</select>
 
     <p class="contact"><label for='ggg'>Geographic coordinates:</label></p>
 <input type='text' name='coordinates' id='username' required=" " maxlength="50" onBlur="checkCo(this.value)"/>
	<span id="cc"></span>
    
      <p class="contact"><label for='map'>Map Zoom Level:</label></p>
    <input type='text' name='map' id='username' required=" " maxlength="30" onBlur="checkMp(this.value)" />
	<span id="mp"></span>
    
   <p class="contact"><label for='acc' >Accodimation Type:</label></p>
    <select name="accodimation" id="username" style="width:400px; height:27px;">

    <option value="1">unspecified</option>

    <option value="2">Hotel</option>

    <option value="3">Resort</option>

    <option value="4">Apartments</option>

</select>
 
   <p class="contact"><label for='rating' >Rating Type:</label></p>
<select name="ratingtype" id="username" style="width:400px; height:27px;">

    <option value="1">none</option>

    <option value="2">Self Rated</option>

    <option value="3">AAA</option>

</select>
 
   <p class="contact"><label for='rating' >Rating:</label></p>
<select name="rating" id="username" maxlength="50" style="width:400px; height:27px;">

    <option value="1">0</option>

    <option value="2">0.5</option>

    <option value="3">1</option>

</select>
 
  <p class="contact"><label for='map'>Lead Time in Days:</label></p>
    <input type='text' required=" " name='ltime' id='username'  maxlength="50" onBlur="checkTm(this.value)" />
	<span id="tt"></span>
    
   <p class="contact"><label for='map'>Availability Value:</label></p>
 <input type='text' required="" name='value' id='username' />
	<span id="vv"></span>
  
        <p class="contact"><label for="name"><input class="button" type="submit"  name="SUBMIT" value="SUBMIT"  />
   <input type="reset" class="button" name="Reset" value="RESET"  />
   
   <a href="properties.php"><input class="button" type="button" value="Back To Properties" /></a>
</label></p>

</form>
</div>

</body>
</html>


