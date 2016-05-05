

 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script language="javascript" type="text/javascript" src="js/prototype.js"></script>

<script language="javascript" type="text/javascript">
	new Ajax.PeriodicalUpdater('clock', 'clock.php', {   method: 'get',   frequency: 1 });
</script>
</head>

<body>
<span style="font-size:15px; font-weight:bold;  padding-top:10px;" id="clock"></span>
</body>
</html>
