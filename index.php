<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php
	session_start();
	include("php/datafunctions.php");
?>

<html>
<head>
	<meta charset = "utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<meta http-equiv="Content Type" content="text/html; charset=utf-8">
	<meta http-equiv="Content Language" content="en">	
	<meta name="Keywords" content="sti, sti college, sti college southwoods, sti southwoods, southwoods, school, colleges, grades, grade system">
	<meta name="Description" content="sti, sti college, sti college southwoods, sti southwoods, southwoods, school, colleges, grades, grade system">	
		
	<title>STI College Southwoods Online Grades - Online Grade System</title>
	<link type="text/css" href="css/newmenu.css" rel="stylesheet" />	
	<link rel="stylesheet" href="css/slideshow.css">
	<link rel = "shortcut icon" href = "icons/stilogo.png">	
	
	<style>
		.slideshow { float: left; margin: 10px;margin-top:20px; }
	</style>
	
	<script src = "js/jquery.js"></script>   	
	<script src="js/mootools-1.3.2-core.js"></script>
	<script src="js/mootools-1.3.2.1-more.js"></script>
	<script src="js/slideshow.js"></script>
	<script src="js/slideshow.flash.js"></script>	
	<script src="js/slideshow.kenburns.js"></script>	
	<script src = "js/banner.js"></script>   
    
</head>
<body>
	<!--BANNER-->
	<div id = "mainbannerholder">
		<div id = "titlebanner">
			<div id = "animateholder">
				<span class = "imglogo"><img src = "images/stilogo.png" id = "logo"></span>
				<span class = "title">STI COLLEGE SOUTHWOODS</span>
				<span class = "og">ONLINE GRADES</span>
				<hr class = "sep"></hr>
				<span class = "course1" id = "course">BSHRM</span>
				<span class = "course2" id = "course">BSCS</span>
				<span class = "course3" id = "course">HRS</span>
				<span class = "course4" id = "course">BSIT</span>
				<span class = "course5" id = "course">BSBA</span>
				<span class = "course6" id = "course">DCET</span>
				<span class = "course7" id = "course">DIT</span>
				<span class = "course8" id = "course">DMA</span>
				<span class = "course9" id = "cors">BSTM</span>
				<span class = "course10" id = "cors">BSTRM</span>
				<span class = "course3" id = "cors">HCS</span>
				<span class = "course4" id = "cors">MIT</span>
				<span class = "course5" id = "cors">BSBOM</span>
				<span class = "course6" id = "cors">88HCS</span>
				<span class = "course7" id = "cors">PHPCBANS</span>
				<span class = "course8" id = "cors">SGR</span>
			</div>			
		</div>		
	</div>
	<!--END BANNER-->
	<!--CONTENTS-->
	<div id = "maincontent">
		<div id = "logpanel">					
			<div id = "formtitle1">
				<p id ="logtitle1">Welcome to Student Access</p>					
				<p id = "login">
				The Student Access is intended only for STI College Southwoods students. 
				To be able to log in, just type your student number and password. Go to the administrator
				to get your own password. Once you have login successfully it will automatically display a timely and accurate
				record of your grades for the current term.				
				</p>
			</div>
			<div id = "faculty">
				<div id = "formtitle3">
					<p id = "logtitle3">Students</p>									
					<p id = "login">
					STI pride itself for presenting avenues for holistic development that help STI students 
					succeed in their future endeavors. Beyond providing quality education, STI also delivers a wide array 
					of pertinent student services that focuses on every need of STI students across the country.
					</p>
				</div>
			</div>
			<div id = "formtitle3">
				<p id = "logtitle3">Student Login</p></br>								
				<form id = "frmlog2" method="post" action="index.php">
				<p id = "login2">Student No. <input type = "text" id = "txtuname3" name="txtuname3" maxlength="4"><input type = "text" id = "txtuname2" name="txtuname2" maxlength="4"><input type = "text" id = "txtuname1" name="txtuname1" maxlength="3"></p></br>
				<p id = "login2">Password <input type = "password" id = "txtpass" name="txtpass"></p></br>
				<p id = "login2"><input type="submit" id = "btnlogin" name="btnlogin" value="Login"></p>					
				<div id = "prompt">
				<?php
					
					include("php/phplogin.php");					
				?>
				</div>				
				</form>				
			</div>			
		</div>					
		<li id = "toggle"><a id = "open" class = "open" href ="#" >Login</a><a id = "close" class = "close" style ="display: none;" href = "#" >Close Panel</a></li>				
		<div id="holder">
			<div id="test" style="width:540px;height:390px;background:rgba(255,255,255,1);border:1px solid darkgray;float:left">
				<div id="kenburns" class="slideshow" style="float:left">
					<img src="images/3.jpg" alt="3">
				</div>
			</div>
			<div ="note" style="margin-right:100px;margin-top:0px;width:300px;float:right;border-radius:5px;color:rgb(0,28,78)">
				<div id="macoy">
					<p id="login5">Student Access</p>
				</div>
				<div id="shadow">
					<div id ="welcome">Welcome to STI College Southwoods Online Grades System</div>
					</br>
					<p id="login5">
					STI provide its students with quality education and services.
					The STI College Southwoods Online Grades System was developed as a service that will only be implemented
					to STI College Southwoods. This access is only a part of the system which enables students to view their 
					grades via online.
					</p>
				</div>				
			</div>		
		</div>	
	</div>
	<!--END OF CONTENTS-->
	<!--FOOTER-->
	<div id = "footer">
		<div id = "footercontent">
			<span id = "cright">
				<div id = "footbanner"><img src = "images/stifooterlogo.png" id = "footerlogo">					
					<strong style = "margin: 25px 0px 0px 25px">STI COLLEGE SOUTHWOODS</strong>
					</br><hr style = "width: 150px; float: right"></hr>
					<strong style = "margin: 25px 0px 0px 25px">Online Grades</strong>					
				</div>
				</br>Online Grading System for STI College Southwoods
				</br>© 2012 STI Colleges and Education Centers. All Rights Reserved.
			</span>
			<span id = "footerlinks1">
				<ul style="list-style:none;color:yellow">CONTACT US
					<li style = "color:white">STI College Southwoods</li>
					<li style = "color:white">Maduya, Carmona, Cavite</li>
					<li style = "color:white">Tel. No. 046 430 1661 - 65</li>
				</ul> 
			</span>
			<span id = "footerlinks2">
				<ul id = "ulfoot" style="list-style:none;color:yellow"><img src = "images/facebook.png" style = "position: absolute; margin: -5px 0px 0px -4px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SOCIAL
					<li id = "lifoot"><a href = "http://www.facebook.com/groups/167755109992028/" target = "_blank" id = "afoot" style = "color:white">Developer's Page</a></li>
					<li id = "lifoot"><a href = "http://www.facebook.com/groups/302208759798140/" target = "_blank" id = "afoot" style = "color:white">RND CORE Page</a></li>
					<li id = "lifoot"><a href = "http://www.facebook.com/groups/sti.southwoods.student/" target = "_blank" id = "afoot" style = "color:white">STI Southwoods Page</a></li>
					<li id = "lifoot"><a href = "http://www.facebook.com/sti.edu" target = "_blank" id = "afoot" style = "color:white">STI Official Fan Page</a></li>
				</ul>
			</span>
			<span id = "footerlinks3">
				<ul id = "ulfoot" style="list-style:none;color:yellow">MORE INFO
					<li id = "lifoot"><a href = "http://www.facebook.com/groups/167755109992028/" id = "afoot" style = "color:white">Developers</a></li>
					<li id = "lifoot"><a href = "#" id = "afoot" style = "color:white">Documentation</a></li>
					<li id = "lifoot"><a href = "sitemap.php" id = "afoot" style = "color:white" target="_blank">Site Map</a></li>
					<li id = "lifoot"><a href = "http://www.sti.edu/" target = "_blank" id = "afoot" style = "color:white">STI Website</a></li>
				</ul>
			</span>
		</div>
	</div>
	<!--END FOOTERS-->
</body>
<script>
	window.addEvent('domready', function(){
	var myLength,myLength2,myLength3;
	
	var data = { '1.jpg': { caption: 'Student' },'2.jpg': { caption: 'Faculty' },'3.jpg': { caption: 'STI College Southwoods' },'7.jpg': { caption: 'Student Activities' },'5.jpg': { caption: 'RND CORE' }, '6.jpg': { caption: 'Voice of the Youth' },'8.jpg': { caption: 'Trooooopaaaa' }};
	var html5_audiotypes={ 
	"mp3": "audio/mpeg",
	"mp4": "audio/mp4",
	"ogg": "audio/ogg",
	"wav": "audio/wav"}
	function createsoundbite(sound)
	{
		var html5audio=document.createElement('audio')
		if (html5audio.canPlayType)
		{ 
			for (var i=0; i<arguments.length; i++)
			{
				var sourceel=document.createElement('source')
				sourceel.setAttribute('src', arguments[i])
				if (arguments[i].match(/\.(\w+)$/i))
					sourceel.setAttribute('type', html5_audiotypes[RegExp.$1])
					html5audio.appendChild(sourceel)
			}
			html5audio.load()
			html5audio.playclip=function(){
				html5audio.pause()
				html5audio.currentTime=0
				html5audio.play()}
			return html5audio
	}
	else
	{
		return {playclip:function(){throw new Error("Your browser doesn't support HTML5 audio unfortunately");}}
	}	
}
var user = document.getElementById('txtuname1');
var password = document.getElementById('txtpass');
var mouseoversound=createsoundbite("soundfx/whistle.ogg", "soundfx/whistle.mp3");
var clicksound=createsoundbite("soundfx/click.ogg", "soundfx/click.mp3");

$(document).ready(function()
{		
	$("#txtuname3").ForceNumericOnly();
	$("#txtuname2").ForceNumericOnly();
	$("#txtuname1").ForceNumericOnly();
	
	$("#txtuname1").keyup(function(){	
		myLength = $("#txtuname1").val().length;	
		if(myLength == 3)
		{
			$('#txtuname2').focus();
		}	
	});
	
	$("#txtuname2").keyup(function(){	
		myLength2 = $("#txtuname2").val().length;
		if(myLength2 == 4)
		{
			$('#txtuname3').focus();
		}		
	});
	
	$("#txtuname3").keyup(function(){	
		myLength3 = $("#txtuname3").val().length;
		if(myLength3 == 4)
		{
			$('#txtpass').focus();
		}		
	});

	$("#open").click(function(){		
	$("div#holder").slideUp("slow");	
	$("div#logpanel").slideDown("slow");	
	mouseoversound.playclip();
	$('#txtuname1').focus();
	});	
	
	$("#close").click(function(){
	$("div#holder").slideDown("slow");	
	$("div#logpanel").slideUp("slow");
	$('#txtuname1').val("");
	$('#txtuname2').val("");
	$('#txtuname3').val("");
	$('#txtpass').val("");
	$('#prompt').html("");
	mouseoversound.playclip();
	});		
 
	$("#toggle a").click(function () {
	$("#toggle a").toggle();
	});

	$("#toggle2 a").click(function () {
	$("#toggle2 a").toggle();
	});	
	
	$("#btnlogin").click(function(){					
		if(user.value.length == 0 && password.value.length == 0)
		{
			document.getElementById('prompt').innerHTML = "Student no. and password required.";
			$('#txtuname1').focus();
			return false;
		}
		if(user.value.length != 0 && password.value.length == 0)
		{
			document.getElementById('prompt').innerHTML = "Password required.";
			$('#txtpass').focus();
			return false;
		}
		if(user.value.length == 0 && password.value.length != 0)
		{
			document.getElementById('prompt').innerHTML = "Student number required.";
			$('#txtuname1').focus();
			return false;
		}
	});	
});	
	new Slideshow.KenBurns('kenburns', data, { duration: 1200, height: 350, hu: 'images/', width: 500 });
});

jQuery.fn.ForceNumericOnly =
function()
{
    return this.each(function()
    {
        $(this).keydown(function(e)
        {
            var key = e.charCode || e.keyCode || 0;
            // allow backspace, tab, delete, arrows, numbers and keypad numbers ONLY
            return (
                key == 8 || 
                key == 9 ||
                key == 46 ||
                (key >= 37 && key <= 40) ||
                (key >= 48 && key <= 57) ||
                (key >= 96 && key <= 105));
        });
    });
};

</script>	
</html>
