<?php
	session_start();
	require_once('connt.php');
	
	if($_SESSION['uname'] != NULL && $_SESSION['upass'] != NULL)
		{
		$logname = $_SESSION['uname'];

		if($_POST['Submit'] != NULL)
			{
				$roll = $_POST['roll'];
				
					if($roll != NULL)
			{
				$sql = "select * from 2nd_cmt where roll = '$roll'";
				$query = mysql_query($sql);
				$row = mysql_fetch_array($query);
				$droll = $row[roll];
			}
				
				$m1 = $_POST[m1];
				$m2 = $_POST[m2];
				$m12t = $m1+$m2;
				$m3 = $_POST[m3];
				$m4 = $_POST[m4];
				$m34t = $m3+$m4;
				$m5 = $_POST[m5];
				$m6 = $_POST[m6];
				$m56t = $m5+$m6;
				$m7 = $_POST[m7];
				$m8 = $_POST[m8];
				$m78t = $m7+$m8;
				$m9 = $_POST[m9];
				$m10 = $_POST[m10];
				$m910t = $m9+$m10;
				$m11 = $_POST[m11];
				$m12 = $_POST[m12];
				$m1112t = $m11+$m12;
				$m13 = $_POST[m13];
				$m14 = $_POST[m14];
				$m1314t = $m13+$m14;
				$m15 = $_POST[m15];
				$m16= $_POST[m16];
				$m1516t=$m15+$m16;
				$m17 = $_POST[m17];
				$m18 = $_POST[m18];
				$m1718t = $m17+$m18;
				$m19= $_POST[m19];
			    $m20 = $_POST[m20];
				$m21 = $_POST[m21];
				$m2021 = $m20+$m21;
				$m22 = $_POST[m22];
				$m23 = $_POST[m23];
				$m2223t = $m22+$m23;
				$m24 = $_POST[m24];
				$m25 = $_POST[m25];
				$m2425t = $m24+$m25;
				$m26 = $_POST[m26];
				$m27 = $_POST[m27];
				$m2627t = $m26+$m27;
				$m28 = $_POST[m28];
				$m29 = $_POST[m29];
				$m2829t = $m28+$m29;
				
				
				$total = $m12t+$m34t+$m56t+$m78t+$m910t+$m1112t+$m1314t+$m1516t+$m1718t+$m19+$m2021+$m2223t+$m2425t+$m2627t+$m2829t;
					
					if($droll == NULL)
					{	
						
		$sql = "insert into 2nd_cmt values ('', '$roll','2nd','$m1','$m2','$m12t','$m3','$m4','$m34t','$m5','$m6','$m56t','$m7','$m8','$m78t','$m9','$m10','$m910t','$m11','$m12','$m1112t','$m13','$m14','$m1314t','$m15','$m16','$m1516t','$m17','$m18','$m1718t','$m19','$m19t','$m20','$m21','$m2021t','$m22','$m23','$m2223t','$m24','$m25','$m2425t','$m26','$m27','$m2627t','$m28','$m29','$m2829t','$total')";
				
				$query =mysql_query($sql);
				
				if($query==TRUE)
				{
					header('location:2nd_sem_cmt.php');
				}
				else
				{
					$msg=" Tray Again";
				}
				}
				else
					{
						$msg="***Duplicate Roll Number***";
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
.style2 {
	font-size: 24px;
	color: #0000CC;
	font-weight: bold;
	font-style: italic;
}
.style4 {font-size: 18px}
.style12 {
	color: #000000;
	font-weight: bold;
	font-style: italic;
	font-size: 18px;
}
.style20 {font-weight: bold}
.style21 {
	font-size: 18px;
	font-weight: bold;
	color: #000000;
}
.style24 {
	font-size: 24px;
	color: #000000;
}
.style28 {color: #000000; font-size: 18px;}
.style29 {color: #000000}
.style30 {font-size: 16px; color: #000000; }
.style31 {color: #000000; font-weight: bold; }
.style32 {color: #000000}
.style34 {color: #000000; font-weight: bold; font-style: italic; font-size: 16px; }
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
						
						echo $cname[C_name];
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
								   <div id="con-right-min-top">COMPUTER TECHNOLOGY (2nd) </div>
							       <div class="das-icon-bord">
							        <form id="form1" name="form1" method="post" action="">
							                <table width="596" border="2" align="center" bordercolor="#0066CC" bgcolor="#FFFFFF">
							                  <tr>
							                    <td height="50" colspan="7"><div align="center">
							                      <p><span class="style2 style20">COMPUTER TECHNOLOGY </span><em><br />
						                          </em><br />
							                        <span class="style34">NUMBER DISTRIBUTION</span><br /><br />
						                            <span class="style12"><span class="style12">SECOND SEMESTER </span></p>
							                      <p>&nbsp;</p>
							                      <p>&nbsp;</p>
							                      <p><span class="style21">Roll No</span><span class="style32">:</span>
							                        <input type="text" name="roll" style=" border:1px solid #666666;"/>
							                    <span style="color:red; font-size:15px;"><?php echo $msg; ?></span>  </p>
							                      <p>&nbsp;</p>
							                    </div></td>
          </tr>




							                  <tr>
            <td width="38" rowspan="3"><div align="center" class="style28">SL NO </div></td>
            <td width="70" rowspan="3"><div align="center" class="style28">Subject Code</div></td>
            <td width="270" rowspan="3"><div align="center" class="style24">Name of the Subject </div></td>
            <td height="30" colspan="4"><div align="center" class="style28">Marks</div></td>
          </tr>
							                  <tr>
							                    <td colspan="2"><div align="center" class="style28">Theory </div></td>
            <td colspan="2"><div align="center" class="style28">Practical </div></td>
          </tr>
							                  <tr>
							                    <td width="60"><div align="center" class="style30">Cont. <br />
						                            <span class="style29">assess</span><span class="style32">.</span> </div></td>
            <td width="60"><div align="center" class="style30">Final <br />
              exam. </div></td>
            <td width="60"><div align="center" class="style30">Cont. <br />
              assess.</div></td>
            <td width="60"><div align="center" class="style30">Final <br />
              exam. </div></td>
          </tr>
							                  <tr>
							                    <td><div align="center" class="style28">1</div></td>
            <td><div align="center" class="style28">2621  </div></td>
            <td><div align="center" class="style4">
              <div align="center" class="style29">Spreadsheet Analysis </div>
            </div></td>
            <td><div align="center" class="style32">****</div></td>
            <td><div align="center"><span class="style31">****</span></div></td>
            <td><div align="center">
              <input name="m1" type="text" id="m1"  style="width:40px; border:1px solid #666666;"/>
              </div></td>
            <td><div align="center">
              <input name="m2" type="text" id="m2"  style="width:40px; border:1px solid #666666;"/>
              </div></td>
          </tr>
							                  <tr>
							                    <td><div align="center" class="style28">2</div></td>
            <td><div align="center" class="style28">2622</div></td>
            <td><div align="center" class="style28">Programming in C </div></td>
            <td><div align="center" class="style31"><span class="style32">
              <input name="m3" type="text" id="m3"  style="width:40px; border:1px solid #666666;"/>
            </span></div></td>
            <td><div align="center" class="style29"><span class="style32">
              <input name="m4" type="text" id="m4"  style="width:40px; border:1px solid #666666;"/>
            </span></div></td>
            <td><div align="center">
              <input name="m5" type="text" id="m5"  style="width:40px; border:1px solid #666666;"/>
            </div></td>
            <td><div align="center">
              <input name="m6" type="text" id="m6"  style="width:40px; border:1px solid #666666;"/>
              </div></td>
          </tr>
							                  <tr>
							                    <td><div align="center" class="style28">3</div></td>
            <td><div align="center" class="style28">2811</div></td>
            <td><div align="center" class="style28">
              <p>Electronic Device & </p>
              <p>Circuits - l</p>
            </div></td>
            <td><div align="center"><span class="style32">
              <input name="m7" type="text" id="m7"  style="width:40px; border:1px solid #666666;"/>
            </span></div></td>
            <td><div align="center"><span class="style32">
              <input name="m8" type="text" id="m8"  style="width:40px; border:1px solid #666666;"/>
            </span></div></td>
            <td><div align="center">
              <input name="m9" type="text" id="m9"  style="width:40px; border:1px solid #666666;"/>
              </div></td>
            <td><div align="center">
              <input name="m10" type="text" id="m10"  style="width:40px; border:1px solid #666666;"/>
              </div></td>
          </tr>
							                  <tr>
							                    <td><div align="center" class="style28">4</div></td>
            <td><div align="center" class="style28"><span class="style4">2812</span></div></td>
            <td><div align="center" class="style28">Electronic Workshop  </div></td>
            <td><div align="center"><span class="style32">****</span></div></td>
            <td><div align="center"><span class="style32">****</span></div></td>
            <td><div align="center">
              <input name="m11" type="text" id="m11"  style="width:40px; border:1px solid #666666;"/>
              </div></td>
            <td><div align="center">
              <input name="m12" type="text" id="m12"  style="width:40px; border:1px solid #666666;"/>
              </div></td>
          </tr>
							                  <tr>
							                    <td><div align="center" class="style28">5</div></td>
            <td><div align="center" class="style28">2725</div></td>
            <td><div align="center" class="style28">Electric Circuits </div></td>
            <td><div align="center">
              <input name="m13" type="text" id="m13"  style="width:40px; border:1px solid #666666;"/>
              </div></td>
            <td><div align="center">
              <input name="m14" type="text" id="m14"  style="width:40px; border:1px solid #666666;"/>
              </div></td>
            <td><div align="center">
              <input name="m15" type="text" id="m15"  style="width:40px; border:1px solid #666666;"/>
              </div></td>
            <td><div align="center">
              <input name="m16" type="text" id="m16"  style="width:40px; border:1px solid #666666;"/>
            </div></td>
          </tr>
							                  <tr>
							                    <td><div align="center" class="style28">6</div></td>
            <td><div align="center" class="style28">1421</div></td>
            <td><div align="center" class="style28">Mathematics – II  </div></td>
            <td><div align="center">
              <input name="m17" type="text" id="m17"  style="width:40px; border:1px solid #666666;"/>
            </div></td>
            <td><div align="center">
              <input name="m18" type="text" id="m18"  style="width:40px; border:1px solid #666666;"/>
            </div></td>
            <td><div align="center">
              <input name="m19" type="text" id="m19"  style="width:40px; border:1px solid #666666;"/>
              </div></td>
            <td><div align="center"><span class="style32">****</span></div></td>
          </tr>
							                  <tr>
							                    <td><div align="center" class="style28">7</div></td>
            <td><div align="center" class="style28">1422</div></td>
            <td><div align="center" class="style28">Chemistry </div></td>
            <td><div align="center">
              <input name="m20" type="text" id="m20"  style="width:40px; border:1px solid #666666;"/>
              </div></td>
            <td><div align="center">
              <input name="m21" type="text" id="m21"  style="width:40px; border:1px solid #666666;"/>
              </div></td>
            <td><div align="center">
              <input name="m22" type="text" id="m22"  style="width:40px; border:1px solid #666666;"/>
            </div></td>
            <td><div align="center">
              <input name="m23" type="text" id="m23"  style="width:40px; border:1px solid #666666;"/>
            </div></td>
          </tr>
							                  <tr>
							                    <td><div align="center" class="style28">8</div></td>
            <td><div align="center" class="style28">1121</div></td>
            <td><div align="center" class="style28">Bangla – II </div></td>
            <td><div align="center">
              <input name="m24" type="text" id="m24"  style="width:40px; border:1px solid #666666;"/>
            </div></td>
            <td><div align="center">
              <input name="m25" type="text" id="m25"  style="width:40px; border:1px solid #666666;"/>
              </div></td>
            <td><div align="center"><span class="style29">****</span></div></td>
            <td><div align="center"><span class="style29">****</span></div></td>
          </tr>
							                  <tr>
							                    <td><div align="center" class="style28">9</div></td>
            <td><div align="center" class="style28">1122</div></td>
            <td><div align="center" class="style4"><span class="style29">English – II  </span><br />
              </div></td>
            <td><div align="center">
              <input name="m26" type="text" id="m26"  style="width:40px; border:1px solid #666666;"/>
            </div></td>
            <td><div align="center">
              <input name="m27" type="text" id="m27"  style="width:40px; border:1px solid #666666;"/>
              </div></td>
            <td><div align="center">****</div></td>
            <td><div align="center"><span class="style29">****</span></div></td>
          </tr>
							                  <tr>
							                    <td><div align="center" class="style28">10</div></td>
            <td><div align="center" class="style28">1123</div></td>
            <td><div align="center" class="style28">Social Science – II (Economics) </div></td>
            <td><div align="center">
              <input name="m28" type="text" id="m28"  style="width:40px; border:1px solid #666666;"/>
            </div></td>
            <td><div align="center">
              <input name="m29" type="text" id="m29"  style="width:40px; border:1px solid #666666;"/>
            </div></td>
            <td><div align="center"><span class="style31">****</span></div></td>
            <td><div align="center"><span class="style29">****</span></div></td>
          </tr>
							                  <tr>
							                    <td colspan="7" bgcolor="#FFFFFF"><div align="center">
						                          <input name="Submit" type="submit" class="style2" value="Save" style="border:solid 1px #666666;width:80px;background:#999966;" />
						                        </div></td>
            </tr>
				                      </table>
                                    </form>
						             <div class="ds-blank-1"></div>
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

