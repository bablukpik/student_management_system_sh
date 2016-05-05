<?php
	session_start();
	require_once('connt.php');
	
	if($_SESSION['uname'] != NULL && $_SESSION['upass'] != NULL)
		{
		$logname = $_SESSION['uname'];

		if(isset($_POST['Submit']) != NULL)
			{
				$sroll = $_POST['sroll'];
				
					$semester = $_POST['semester'];
					
					if($sroll == NULL)
						{
							$msg = "*** Empty Field...";
						}
					else
						{
							$sql = "update troll set roll = '$sroll', semester = '$semester' where id = '1'";
							$query = mysql_query($sql);
							if($query == TRUE)
						{
							header('location:1st_cmt_report.php');
						}
				
					
					else
						{
							$msg = "*** Try Again...";
						}
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
								   <div id="con-right-min-top">Transcript Report</div>
								     <div class="das-icon-bord">
								    <form id="form1" name="form1" method="post" action="treport.php">
								      <table width="431"border="0" align="center" >
                                        <tr>
                                          <td width="143" height="18">&nbsp;</td>
                                          <td width="3">&nbsp;</td>
                                          <td width="184"><?php //echo $msg; ?></td>
                                          <td width="16">&nbsp;</td>
                                          <td width="129">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td height="45"><div align="right" class="style1">Roll No </div></td>
                                          <td><div align="center" class="style2">:</div></td>
                                          <td colspan="3"><input name="sroll" type="text"  style="border:solid 1px #000000" /></td>
                                        </tr>
										  <tr>
                                          <td height="45"><div align="right" class="style1">Semester</div></td>
										   <td><div align="center" class="style2">:</div></td>
                                          <td colspan="4">
										  <select name="semester" style=" border:solid 1px #898888; width:150px;">
                                            <option>--- Select Semester ---</option>
                                            <option>1st</option>
                                            <option>2nd</option>
                                            <option>3rd</option>
                                            <option>4th</option>
                                            <option>5th</option>
                                            <option>6th</option>
                                            <option>7th</option>
                                            <option>8th</option>
                                          </select></td>
                                        </tr>
                                        <tr>
                                          <td height="0" colspan="5"><div align="center">
                                            <input type="submit" name="Submit" value="Search" s style="width:80px; color:#009966; border:solid 1px #009966; background:#CCCC66;"/>
                                          </div></td>
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

