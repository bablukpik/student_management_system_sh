<?php
	session_start();
	require_once('connt.php');
	
	if($_SESSION['uname'] != NULL && $_SESSION['upass'] != NULL)
		{
		$logname = $_SESSION['uname'];
		
			if(isset($_GET['did'])){
				$did = $_GET['did'];
			}else
				$did=null;
			
			if($did != NULL)
				{
					$sql = "delete from sinfo where id = '$did'";
					$query = mysql_query($sql);
					
					
					if($query)
						{
							$msg = "Sucessfully Deleted";
						}
					else
						{
							$msg = "Try Again";
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
-->
</style>

<script language="javascript">

function confirmdelete()
{
	var r=confirm("Are you sure want to Delete? ");
	if (r==true)
	{
	  return true;
	}
	else
	{
	  return false;
	}
}
function confirmedit()
{
	var r=confirm("Are you sure want to Edit? ");
	if (r==true)
	{
	  return true;
	}
	else
	{
	  return false;
	}
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
						
						echo $cname["C_name"];
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
								   <div id="con-right-min-top">Edit/Delete Student</div>
								     <div class="das-icon-bord">
									 <div style="margin:auto; width:550px;">
									  <?php //echo $msg ;?>
						              	    
						              <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
									  <tr>
										<td width="8%"  style="border:solid 1px #000000;padding-left:5px; "><div align="center"><strong>Sl</strong></div></td>
										<td width="25%"  style="border:solid 1px #000000;padding-left:5px; border-left:none ;"><div align="center"><strong>Name</strong></div></td>
										<td width="22%"  style="border:solid 1px #000000;padding-left:5px; border-left:none ;"><div align="center"><strong>Roll</strong></div></td>
										<td width="26%"  style="border:solid 1px #000000;padding-left:5px; border-left:none ;"><div align="center"><strong>Technology</strong></div></td>
										<td colspan="2"  style="border:solid 1px #000000;padding-left:5px; border-left:none ;"><div align="center"><strong>Action</strong></div></td>
									  </tr>
									   
											 <?php
											 	$sql = "select * from sinfo";
												$query = mysql_query($sql);
												
												$sl = 0;
												while($row = mysql_fetch_array($query))
													{
														$sl = $sl + 1;
												?>
									  
									  
									  
									  <tr>
										<td style="border:solid 1px #000000;padding-left:5px; border-top:none; "><?php echo $sl; ?></td>
										<td style="border:solid 1px #000000;padding-left:5px; border-left:none; border-top:none;"><?php echo $row['name']?></td>
										<td style="border:solid 1px #000000;padding-left:5px;border-left:none;border-top:none; "><?php echo $row['roll']?></td>
										<td style="border:solid 1px #000000;padding-left:5px; border-left:none; border-top:none;"><?php echo $row['tech']?></td>
										<td width="9%" style="border:solid 1px #000000;padding-left:5px; border-left:none; border-top:none;"><div align="center"><a href="upd_student_edit.php?eid=<?php echo $row['id']; ?>"><img src="img/b_edit.png" onclick="return confirmedit()"/></a></div></td>
										<td width="10%" style="border:solid 1px #000000;padding-left:5px; border-left:none; border-top:none;"><div align="center"><a href="upd_student.php?did=<?php echo $row['id']; ?> "><img src="img/b_del.png" onclick="return confirmdelete ()" /></a></div></td>
									  </tr>
									  
									  	
												<?php	
													
													
													}
											 
											 ?>
								</table>
									  <table width="549" border="0">
                                        <tr>
                                          <td>&nbsp;</td>
                                        </tr>
                                      </table>
									 </div>
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
			header('location:../login.php');
		}
?>

