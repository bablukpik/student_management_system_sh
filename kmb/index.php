<?php
	session_start();
	require_once('connt.php');
	
	if($_SESSION['uname'] != NULL && $_SESSION['upass'] != NULL)
		{
		$logname = $_SESSION['uname'];
?>




<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>::My Project::</title>
<link href="style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="../vmenu/jquery.min.js"></script>
<script type="text/javascript" src="../vmenu/ddaccordion.js"></script>
<script language="javascript" src="../vmenu/last.js"></script>



<script language="javascript" type="text/javascript" src="../clock/js/prototype.js"></script>

<script language="javascript" type="text/javascript">
	new Ajax.PeriodicalUpdater('clock', '../clock/clock.php', {   method: 'get',   frequency: 1 });
</script>


<style type="text/css">
<!--
.style4 {font-size: 16px}
-->
</style>
</head>

<body>
<div id="wraper">
		<div class="bg-mid">
			<div class="bg-top">
				<div class="bg-bot">
					<div id="BG-CON">
				 	   <div class="bg-mai-top">
				   <h1 >
					 <?php
						$sql = "select * from c_name where id = '1'";
						$query = mysql_query($sql);
						$cname = mysql_fetch_array($query);
						
						echo $cname[C_name];
						?>
					</h1>
					  <span  >ACADEMIC TRANSCRIPT</span>
				  <span style="font-size:15px; color:#0000FF; font-weight:bold;  padding-top:10px; float:right;" id="clock"></span></div>
				  		<div class="bg-mai-top-right">
							<p>Wellcome <b><?php echo $logname; ?></b></p>
							<br />
							<h3><a href="off.php"><?php echo $logname; ?>Log out</a></h3>
						</div>
				</div>	
				<div class="contenar">
				  	<div class="con-left">
					  	<div class="bg-lef-men-mid">
							<div class="bg-lef-men-top">
								<div class="bg-lef-men-bot">
									<div id="con-left-min-top">Admin menu</div>
										<div id="con-left-nav">
											<?php require_once('lmenu.php'); ?>  
										</div>
								</div>
							</div>
					  </div>
				  </div>
				  	 <div class="con-right">	
						<div class="das-mid">
						 	<div class="das-top">
								<div class="das-bot">
									<div id="con-right-min-top"> Dash Board</div>
								       <div class="das-icon-bord">
								         <p>&nbsp;</p>
								         <p>&nbsp;</p>
								         <p>&nbsp;</p>
								         <p>&nbsp;</p>
								         <p>&nbsp;</p>
								         <p>&nbsp;</p>
								         <p>&nbsp;</p>
								         <p>&nbsp;</p>
								         <p>&nbsp;</p>
								         <p>&nbsp;</p>
								         <p>&nbsp;</p>
								         <p>&nbsp;</p>
								         <p>&nbsp;</p>
								         <p>&nbsp;</p>
								         <p>&nbsp;</p>
								         <p>&nbsp;</p>
								         <p>&nbsp;</p>
								         <p>&nbsp;</p>
								         <p>&nbsp;</p>
								         <p>&nbsp;</p>
								         <p>&nbsp;</p>
								         <p>&nbsp;</p>
								         <p>&nbsp;</p>
								         <p>&nbsp;</p>
								         <p>&nbsp;</p>
								         <p>&nbsp;</p>
								         <p>&nbsp;</p>
								         <p>&nbsp;</p>
								         <p>&nbsp;</p>
								         <p>&nbsp;</p>
								         <p>&nbsp;</p>
								         <p>&nbsp;</p>
								         <p>&nbsp;</p>
								         <p>&nbsp;</p>
								       </div>
						  </div>
					   </div>
					</div>	
				</div>
				        </div>
					<div class="ds-blank"></div>
				</div>
			</div>
		</div>
	</div>
 </div>
</body>
</html>
<?php
		}
	else
		{
			header('location:../login.php');
		}
?>

