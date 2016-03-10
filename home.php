<html>
<head>
<title>HOME</title>
<h1 id="heading"></h1>

<style>
h1 {
    color:black;
    font-family:verdana;
    font-size:75%;
    opacity: 0.4;
}
h2   {color:blue}

.boldtable
{
font-family:fantasy;
font-size:18pt;
color: black;
opacity: 0.4;
background-color:white;
}
</style>

<script>
console.log("start");
<?php
?>

function changeIt()
{
  console.log("changeIt()");
  var i = "../../home/img/cs.jpg";
  bg = "url(" + i + ") no-repeat";
  //document.getElementById("heading").innerHTML=bg;
  document.body.style.background = bg;
  document.body.style.backgroundSize = 'cover';
}

<?php
  function logPhp($index, $desc)  {
	date_default_timezone_set('America/Chicago');
	error_log(date('Y-m-d H:i:s') . " " . " home.php, doSelect(), index = " . $index . ", " . $desc . "\n", 3, "E:/xampp/php/logs/execution.log");		
  }
  
  function doSelect()
  {
	$index = $_GET["index"];
	if ($index == "9") {
		$desc = "edit_hparse.bat";
		logPhp($_GET["index"], $desc);
    	exec("E:/xampp/htdocs/home/edit_hparse.bat");
    	header("Location: home.php?selection=false");
	} elseif ($_GET["index"] == "4") {
		$desc = "openLog.bat";
		//logPhp($_GET["index"], $desc);
        exec("E:/xampp/htdocs/home/openLog.bat");
		header("Location: home.php?selection=false");
  	} elseif ($_GET["index"] == "5") {
		$desc = "deleteLog.bat";
		logPhp($_GET["index"], $desc);
        exec("E:/xampp/htdocs/home/deleteLog.bat");
		header("Location: home.php?selection=false");
	} elseif ($_GET["index"] == "6") {
		$desc = "openCmdAjax.bat";
		logPhp($_GET["index"], $desc);
        exec("E:/xampp/htdocs/home/openCmdAjax.bat");
		header("Location: home.php?selection=false");
	} elseif ($_GET["index"] == "7") {
		$desc = "openCmdHome.bat";
		logPhp($_GET["index"], $desc);
        exec("E:/xampp/htdocs/home/openCmdHome.bat");
		header("Location: home.php?selection=false");
	} elseif ($_GET["index"] == "8") {
		$desc = "editHome.bat";
		logPhp($_GET["index"], $desc);
        exec("E:/xampp/htdocs/home/editHome.bat");
		header("Location: home.php?selection=false");
    } elseif ($_GET["index"] == "1") {
		$desc = "openCmdRule1.bat";
		logPhp($_GET["index"], $desc);
		exec("E:/xampp/htdocs/home/openCmdRule1.bat");
    	header("Location: home.php?selection=false");
	} elseif ($_GET["index"] == "2") {
		$desc = "openCmdRule1.bat";
		logPhp($_GET["index"], $desc);
		exec("E:/xampp/htdocs/home/openCmdRule1_hparse.bat");
    	header("Location: home.php?selection=false");
    }
  }

  if (isset($_GET['select'])) {
	doSelect();
   }
?>

</script>
</head>

<body link="blue" onload="changeIt();">
	
<h2> Current Links</h2>
<p><a href='https://github.com/'>github</a></p>

<h2> Run code and view logs</h2>
<p><a href='home.php?select=true&index=2'>open cmd window - rule1 - hparse</a></p>
<p><a href='home.php?select=true&index=4'>open the log</a></p>
<p><a href='home.php?select=true&index=5'>delete the log</a></p>

<h2> Edit code</h2>
<p><a href='home.php?select=true&index=8'>edit this page</a></p>
<p><a href='home.php?select=true&index=9'>edit ruby - hparse</a></p>

<h2> Command Windows</h2>
<p><a href='home.php?select=true&index=7'>open cmd window - home</a></p>
<p><a href='home.php?select=true&index=1'>open cmd window - rule1</a></p>
<p><a href='home.php?select=true&index=6'>open cmd window - Ajax</a></p>

<h2> References</h2>
<p><a href='https://developers.google.com/web/tools/chrome-devtools/'>Chrome development tools</a></p>
<p><a href='http://ruby.bastardsbook.com/chapters/html-parsing/'>Parsing HTML with Nokogiri</a></p>



<h2> Other</h2>

<input id='password' type='text'  />
<a href='http://localhost/Ajax/home.php' onclick="javascript:return validatePass()">CLICK</a>

<script>
function validatePass(){
    if(document.getElementById('password').value == 'Pass12345'){
        return true;
	    document.getElementById('password').value == '*****'
    }else{
        alert('access denied');
        return false;
    }
}
</script>

</body>
</html>