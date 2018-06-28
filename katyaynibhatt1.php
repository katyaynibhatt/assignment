<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
.header{
	width:100%;
	height:200px;

	background-color:grey;
	float:left;
	text-align:center;
	color:#09F;
		}
.footer{
	width:100%;
	height:200px;

	background-color:grey;
	float:left;
	text-align:center;
	color:#09F;
		}		
.menu{
	width:100%;
	height:50px;
	
	background-color:pink;
	float:left;
	text-align:center;
	color: #FFF;
		}
.image{
    width:100%;
	height:300px;
	background-image:url(1.jpg);
	float:left;
	text-align:center;
	color: #FFF;
}
.leftcontent{
	width:50%;
	height:250px;
	background-color:red;
	float:left;
	text-align:center;
	color: #F00;
	}
.rightcontent{
	width:50%;
	height:250px;
	background-color:yellow;
	float:left;
	text-align:center;
	color: #FFF;
		}		

</style>
<script language="javascript1.5">
function f1()
{
var course=parseInt(document.getElementById('course').value);
var duration=parseInt(document.getElementById('duration').value);
var total=course*duration;
document.getElementById('ta').value=total;
}

</script>
</head>

<body>
<div class="header">
Site's Header 
</div>
<div class="menu">
Site's Menu
</div>
<div class="image">
</div>
<div class="leftcontent">
<form method="post" >
<div class="frontform"><select name="course" id="course"><option value="20000">btech</option>
<option value="30000">fashion</option>
<option value="10000">bca</option></select></div>
<div class="frontform"><input type="number" name="duration" id="duration" placeholder="Duration" onblur="f1()"  /></div>
<div class="frontform"><input type="number" name="ta" id="ta" readonly="readonly" placeholder="Total Amount" /></div>

<div class="frontform"><input type="submit" /></div>

</form>
</div>
<div class="rightcontent">
<form method="POST">
<div class="frontform"><input type="text" name="uname" placeholder="Your Name" required="required"  /></div>
<div class="frontform"><input type="email" name="uemail" placeholder="Your Email" required="required"  /></div>
<div class="frontform"><input type="text" name="contact" placeholder="Your Contact" maxlength="10" required="required"  /></div>
<div class="frontform">Male: <input type="radio" name="gender" value="male" /> |
Fe-Male: <input type="radio" name="gender" value="female" /></div>
<input type="submit" name="submit"  />
</div>
</div>
</form>
</div>
<div class="footer">
</div>
</body>
</html>
