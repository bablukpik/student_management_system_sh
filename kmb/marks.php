<?php
	session_start();
	require_once('connt.php');
	
	if($_SESSION['uname'] != NULL && $_SESSION['upass'] != NULL)
		{
		$logname = $_SESSION['uname'];

	
				
		if(isset($_POST['Submit']) == TRUE)
			{ 
				$semester = $_POST['Semester'];
				$tech = $_POST['tech'];
				$fname = "$semester$tech";
				
				if($fname =='1stComputer')
					{
						header('location:1st_sem_cmt.php');
					} 
					elseif($fname =='2ndComputer')
					{
						header('location:2nd_sem_cmt.php');
					}
					elseif($fname =='3rdComputer')
					{
						header('location:3rd_sem_cmt.php');
					}
					elseif($fname =='4thComputer')
					{
						header('location:4th_sem_cmt.php');
					}
				
					elseif($fname =='5thComputer')
					{
						header('location:5th_sem_cmt.php');
					}
				
					elseif($fname =='6thComputer')
					{
						header('location:6th_sem_cmt.php');
					}
				
					elseif($fname =='7thComputer')
					{
						header('location:7dcmt.php');
					}
					elseif($fname =='8thComputer')
					{
						header('location:8th_sem_cmt.php');
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
.style3 {color: #000000}
.style6 {
	color: #FF0000;
	font-weight: bold;
	font-size: 14px;
}
.style9 {color: #000000; font-size: 14px; }
.style10 {font-size: 14px}
.style15 {font-size: 14px; font-weight: bold; }
.style16 {color: #FF00FF}
.style19 {font-size: 18px}
.style20 {color: #000000; font-size: 18px; }
-->
</style>

<script language="javascript">
	function validateForm(form) 
		{ 
			if (form.sname.value == "") {  alert("Please Enter Name...");  form.sname.focus( );  return false;  }
			else if (form.roll.value == "") {  alert("Please Enter Roll No...");  form.roll.focus( );  return false;  }
			else if (form.tech.value == "0") {  alert("Please Select Technology...");  form.tech.focus( );  return false;  }
			
			 
		}
</script>

</script>

<script language="javascript" type="text/javascript" src="../clock/js/prototype.js"></script>

<script language="javascript" type="text/javascript">
	new Ajax.PeriodicalUpdater('clock', '../clock/clock.php', {   method: 'get',   frequency: 1 });
</script>

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
								   <div id="con-right-min-top">Marks Distribution </div>
							       <div class="das-icon-bord">
							        <form  method="post" action="marks.php"  onsubmit="return validateForm(this)">
							         
							          <table width="100%"  align="center" border="0" cellpadding="0" cellspacing="5">
                                       <tr>
                                          <td colspan="3" class="style9"><div align="center"><span class="style10"><?php //echo $msg; ?></span></div></td>
                                        </tr>

                                        <tr>
                                          <td width="206"><div align="right" class="style9 style19"> Semester</div></td>
                                          <td width="27"><div align="center" class="style15"><span class="style3">:</span></div></td>
                                          <td width="343">
										  <select name="Semester" style="border:solid 1px #666666;width:200px;">
										  <option selected="selected" value="0">--Select Technology--</option>
										  <option>1st</option>
										  <option>2nd</option>
										  <option>3rd</option>
										  <option>4th</option>
										  <option>5th</option>
										  <option>6th</option>
										  <option>7th</option>
										  <option>8th</option>
										   </select><span class="style16"> *</span>										 </td>
                                        </tr>
                                        <tr>
                                          <td><div align="right" class="style20">Technology	</div></td>
                                          <td><div align="center" class="style15"><span class="style3">:</span></div></td>
                                          <td>
										  <select name="tech" style="border:solid 1px #666666;width:200px;">
										    <option value="0" selected="selected">---Select technology---</option>
										  <option>Computer</option>
										  <option>Civil</option>
										  <option>Electronics</option>
										  <option>Electrical</option>
										  <option>Dental</option>
										  <option>Text Tail</option>
										  <option>Macanical</option>
                                          </select><span class="style16"> *</span>										  </td>
                                        </tr>
                                        <tr>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td><input name="Submit" type="submit" class="style9" style="border:solid 1px #00CC66;width:80px;background:#999966;" value="Next"/></td>
                                        </tr>
                                                                                <tr>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td><span class="style6">( * ) Marks are Require.</span></td>
                                        </tr>
                                        <tr>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
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

