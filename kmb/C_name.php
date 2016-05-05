<?php
	session_start();
	require_once('connt.php');
	
	if($_SESSION['uname'] != NULL && $_SESSION['upass'] != NULL)
		{
		$logname = $_SESSION['uname'];

		if(isset($_POST['Submit'])!= NULL)
			{
				$cname = $_POST['cname'];
				
				if($cname == NULL)
					{
						$msg = "*** Empty Field...";
					}
				else
					{
						$sql = "update c_name set C_name = '$cname' where id = '1'";
						$query = mysql_query($sql);
					}
			
			}
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>::My Project::</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
	color: #009966;
	font-style: italic;
}
.style2 {
	font-size: 18px;
	color: #009999;
}
-->
</style>
</head>

<script language="javascript" type="text/javascript" src="../clock/js/prototype.js"></script>

<script language="javascript" type="text/javascript">
	new Ajax.PeriodicalUpdater('clock', '../clock/clock.php', {   method: 'get',   frequency: 1 });
</script>



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
						
						echo $cname['C_name'];
						?>
						</h1>
					  <span  >ACADEMIC TRANSCRIPT</span>
					  <span style="font-size:15px; color:#0000FF; font-weight:bold;  padding-top:10px; float:right;" id="clock">
				  </div>
				  	<div class="bg-mai-top-right">
				    	<h2>Wellcome To [<?php echo $logname; ?>]</h2>
							<br />
						<h3>Log out [<a href="off.php"><?php echo $logname; ?></a>]</h3>
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
								   <div id="con-right-min-top">Update Colege Name</div>
								     <div class="das-icon-bord">
								    <form id="form1" name="form1" method="post" action="c_name.php">
								      <table width="431"border="0" align="center" >
                                        <tr>
                                          <td width="143" height="18">&nbsp;</td>
                                          <td width="3">&nbsp;</td>
                                          <td width="184"><?php //echo $msg; ?></td>
                                          <td width="16">&nbsp;</td>
                                          <td width="129">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td height="45"><div align="right" class="style1">College Name </div></td>
                                          <td><div align="center" class="style2">:</div></td>
                                          <td width="184"><input name="cname" type="text" style="border:solid 1px #000000" /></td>
                                          <td>&nbsp;</td>
                                          <td><input name="Submit" type="submit" value="Save" style=" background:#99CC66; border:solid 1px #000000 "  /></td>
                                        </tr>
                                        <tr>
                                          <td height="0" colspan="5">&nbsp;</td>
                                        </tr>
                                      </table>
                                    </form>
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
</body>
</html>
<?php
		}
	else
		{
			header('location:../index.php');
		}
?>

