<?php
	session_start();
	require_once('connt.php');
	
	if($_SESSION['uname'] != NULL && $_SESSION['upass'] != NULL)
		{
		$logname = $_SESSION['uname'];

		if(isset($_POST['Submit']) != NULL)
			{
				$sname=$_POST['sname'];
				$fname=$_POST['fname'];
				$mname=$_POST['mname'];
				$roll=$_POST['roll'];
				$reg=$_POST['reg'];
				$sesson=$_POST['sesson'];
				$tech=$_POST['tech'];
				$gender=$_POST['gender'];
				$address=$_POST['address'];
				$sphone=$_POST['sphone'];
				$gphone=$_POST['gphone'];
				
				$sql="select * from sinfo where roll='$roll'";
				$query=mysql_query($sql);
				$row=mysql_fetch_array($query);
				
				$sroll=$row[roll];
				
				if($sroll==NULL)
					{
						$sql="insert into sinfo values('','$sname','$fname','$mname','$roll','$reg','$sesson','$tech','$gender','$address','$sphone','$gphone')";
					$query=mysql_query($sql);
					if($query)
						{
							$msg="**Sucsesful.....";
						}
					else
						{
							$msg="***Try Again.....";
						}
					}
				  else
						{
							$msg="**** Rong Roll Number....";
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
.style5 {color: #000000; font-weight: bold; }
.style6 {
	color: #FF0000;
	font-weight: bold;
	font-size: 14px;
}
.style9 {color: #000000; font-size: 14px; }
.style10 {font-size: 14px}
.style12 {color: #000000; font-weight: bold; font-size: 14px; }
.style13 {
	color: #000000;
	font-size:14px;
	font-weight: bold;
}
.style15 {font-size: 14px; font-weight: bold; }
.style16 {color: #FF00FF}
.style18 {
	font-size: 36px;
	color: #0000FF;
	font-weight: bold;
	font-style: italic;
}
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
								   <div id="con-right-min-top">Add New Student </div>
							      <div class="das-icon-bord">
							        <p>&nbsp;</p>
							        <p>&nbsp;</p>
							        <form id="form1" name="form1" method="post" action="add_student.php"  onsubmit="return validateForm(this)">
							         
							          <table width="100%" border="0" cellpadding="0" cellspacing="5">
                                        <tr>
                                          <td colspan="3" bgcolor="#CC9966"><div align="center"><span class="style18">Registation Form </span></div></td>
                                        </tr>
                                        <tr>
                                          <td width="162">&nbsp;</td>
                                          <td width="24">&nbsp;</td>
                                          <td width="300"><?php //echo $msg; ?></td>
                                        </tr>
                                        <tr>
                                          <td><div align="right" class="style9">Name</div></td>
                                          <td><div align="center" class="style13">:</div></td>
                                          <td><input type="text" name="sname" style="border:solid 1px #666666;width:200px;" />
                                            <span class="style16"> *</span></td>
                                        </tr>
                                        <tr>
                                          <td><div align="right" class="style9">Father's Name </div></td>
                                          <td><div align="center" class="style15"><span class="style3">:</span></div></td>
                                          <td><input type="text" name="fname" style="border:solid 1px #666666;width:200px;"/></td>
                                        </tr>
                                        <tr>
                                          <td><div align="right" class="style9">Mother's Name 	</div></td>
                                          <td><div align="center" class="style15"><span class="style3">:</span></div></td>
                                          <td><input type="text" name="mname" style="border:solid 1px #666666;width:200px;"/></td>
                                        </tr>
                                        <tr>
                                          <td><div align="right" class="style9">Roll No 	</div></td>
                                          <td><div align="center" class="style15"><span class="style3">:</span></div></td>
                                          <td><input type="text" name="roll" style="border:solid 1px #666666;width:200px;"/>
                                            <span class="style16"> *</span></td>
                                        </tr>
                                        <tr>
                                          <td><div align="right" class="style9">Registation No 	</div></td>
                                          <td><div align="center" class="style15"><span class="style3">:</span></div></td>
                                          <td><input type="text" name="reg" style="border:solid 1px #666666;width:200px;"/></td>
                                        </tr>
                                        <tr>
                                          <td><div align="right" class="style9">Sesson</div></td>
                                          <td><div align="center" class="style15"><span class="style3">:</span></div></td>
                                          <td><select name="sesson" style="border:solid 1px #666666;width:200px;">
										  <option>2003-2004</option>
										  <option>2004-2005</option>
										  <option>2005-2006</option>
										  <option>2006-2007</option>
										  <option>2007-2008</option>
										  <option>2008-2009</option>
										  <option>2009-2010</option>
										  <option>2010-2011</option>
										  <option>2011-2012</option>
										
										 </select></td>
                                        </tr>
                                        <tr>
                                          <td><div align="right" class="style9">Technology	</div></td>
                                          <td><div align="center" class="style15"><span class="style3">:</span></div></td>
                                          <td><select name="tech" style="border:solid 1px #666666;width:200px;">
										  <option selected="selected" value="0">--Select Technology--</option>
										  <option>Computer</option>
										  <option>Civil</option>
										  <option>Electronics</option>
										  <option>Electrical</option>
										  <option>Dental</option>
										  <option>Text Tail</option>
										  <option>Macanical</option>
										  
										  
                                          </select><span class="style16"> *</span>                                          </td>
                                        </tr>
                                        <tr>
                                          <td><div align="right" class="style9">Gender	</div></td>
                                          <td><div align="center" class="style15"><span class="style3">:</span></div></td>
                                          <td><span class="style5">
                                          <input name="gender" type="radio" value="Male" />
                                          <span class="style10">                                          Male</span>                                          </span>
                                          <input name="gender" type="radio" value="Female" />
                                          <span class="style12">                                          Female</span></td>
                                        </tr>
                                        <tr>
                                          <td><div align="right" class="style9">Address	</div></td>
                                          <td><div align="center" class="style15"><span class="style3">:</span></div></td>
                                          <td><textarea name="address" style="border:solid 1px #666666;width:200px;"></textarea></td>
                                        </tr>
                                        <tr>
                                          <td><div align="right" class="style9">Student Phone No </div></td>
                                          <td><div align="center" class="style15"><span class="style3">:</span></div></td>
                                          <td><input type="text" name="sphone"style="border:solid 1px #666666;width:200px;" /></td>
                                        </tr>
                                        <tr>
                                          <td><div align="right" class="style9">Gardian Phone No 	</div></td>
                                          <td><div align="center" class="style15"><span class="style3">:</span></div></td>
                                          <td><input type="text" name="gphone" style="border:solid 1px #666666;width:200px;"/></td>
                                        </tr>
                                        <tr>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td><input name="Submit" type="submit" class="style9" style="border:solid 1px #00CC66;width:80px;background:#999966;" value="Save"/></td>
                                        </tr>
                                        <tr>
                                          <td class="style9">&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td><span class="style10"></span></td>
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

