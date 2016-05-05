<?php
	require_once('connt.php');
	
	$sql = "select * from troll where id = '1'";
	$query = mysql_query($sql);
	$row = mysql_fetch_array($query);
	
	$froll = $row['roll'];
	$fsemester = $row['semester'];
	
	if($fsemester == '1st')
		{
			$stable = "1st_cmt";
		}
	elseif($fsemester == '2nd')
		{
			$stable = "2nd_cmt";
		}
	elseif($fsemester == '3rd')
		{
			$stable = "3rd_cmt";
		}
	elseif($fsemester == '4th')
		{
			$stable = "4th_cmt";
		}
	elseif($fsemester == '5th')
		{
			$stable = "5th_cmt";
		}
				
	if($froll == TRUE)
		{
			$sql = "select * from sinfo where roll = '$froll'";
			$query = mysql_query($sql);
			$sdata = mysql_fetch_array($query);
		}	
		
	if($froll == TRUE)
		{
			$sql = "select * from $stable where roll = '$froll'";
			$query = mysql_query($sql);
			$smarks = mysql_fetch_array($query);
		}	
		
	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {color: #FF0000}
.style3 {font-size: large}
.style4 {font-size: 17px}
.style5 {font-size: 16px}
.style7 {font-size: x-large}
.style28 {color: #000000; font-size: 18px;}
-->
</style>
</head>

<body>

<table width="800" border="1" align="center" cellpadding="0" cellspacing="0" style="border:5px solid #999999;">
  <tr>
    <td>
	                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td> <div align="center" class="style7" style="font-family:Georgia, "Times New Roman", Times, serif"><img src="../../academictranscript-9/dashboard/images/banner.png" width="800" height="100" border="0" /> </div></td>
                      </tr>
                      <tr>
                        <td> <div align="center" class="style3">ACADEMIC TRANSCRIPT 
                                                </div></td>
                      </tr>
                      <tr>
                        <td> <div align="center" class="style3">DIPLOMA IN ENGINEERING(Duration:4-Years) 
                                                 </div></td>
                      </tr>
                      <tr>
                        <td> <div align="center" class="style4">FIRST SEMESTER EXAMINATION,2011 
                         </div></td>
                      </tr>
                      <tr>
                        <td><div align="center" class="style5">(Held in the Month of August - September, 2011) </div></td>
                      </tr>
                    </table>
	                <p align="center" style="font-family:'Times New Roman', Times, serif">&nbsp;</p>
                <table width="100%" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="120" height="40"> <div align="left">Technology</div></td>
                    <td width="31" height="40"><div align="center"><strong>:</strong></div></td>
                    <td width="318" height="40"> Computer </td>
                    <td width="329" height="40" rowspan="6"><table width="100%" border="1" cellspacing="0" cellpadding="0">
                      <tr>
                        <td><div align="center">Range of marks (Percentage)</div></td>
                        <td><div align="center">Grade</div></td>
                        <td><div align="center">Point</div></td>
                      </tr>
                      <tr>
                        <td><div align="center">80 or above </div></td>
                        <td><div align="center">A+</div></td>
                        <td><div align="center">4.00</div></td>
                      </tr>
                      <tr>
                        <td><div align="center">75 - below 80 </div></td>
                        <td><div align="center">A</div></td>
                        <td><div align="center">3.75</div></td>
                      </tr>
                      <tr>
                        <td><div align="center">70 - below 75 </div></td>
                        <td><div align="center">A-</div></td>
                        <td><div align="center">3.50</div></td>
                      </tr>
                      <tr>
                        <td><div align="center">65 - below 70 </div></td>
                        <td><div align="center">B+</div></td>
                        <td><div align="center">3.25</div></td>
                      </tr>
                      <tr>
                        <td><div align="center">60- below 65 </div></td>
                        <td><div align="center">B</div></td>
                        <td><div align="center">3.00</div></td>
                      </tr>
                      <tr>
                        <td><div align="center">55 - below 60</div></td>
                        <td><div align="center">B-</div></td>
                        <td><div align="center">2.75</div></td>
                      </tr>
                      <tr>
                        <td><div align="center">50 - below 55</div></td>
                        <td><div align="center">C+</div></td>
                        <td><div align="center">2.50</div></td>
                      </tr>
                      <tr>
                        <td><div align="center">45 - below 50</div></td>
                        <td><div align="center">C</div></td>
                        <td><div align="center">2.25</div></td>
                      </tr>
                      <tr>
                        <td><div align="center">40 - below 45</div></td>
                        <td><div align="center">D</div></td>
                        <td><div align="center">2.00</div></td>
                      </tr>
                      <tr>
                        <td> <div align="center">below 40 </div></td>
                        <td><div align="center">F</div></td>
                        <td><div align="center">0.00</div></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td height="40"><div align="left">Name</div></td>
                    <td height="40"><div align="center"><strong>:</strong></div></td>
                    <td height="40"><?php echo $sdata[name]; ?></td>
                  </tr>
                  <tr>
                    <td height="40"><div align="left">Roll No </div></td>
                    <td height="40"><div align="center"><strong>:</strong></div></td>
                    <td height="40"><?php echo $sdata[roll]; ?></td>
                  </tr>
                  <tr>
                    <td height="40"><div align="left">Registration No </div></td>
                    <td height="40"><div align="center"><strong>:</strong></div></td>
                    <td height="40"><?php echo $sdata[reg]; ?></td>
                  </tr>
                  <tr>
                    <td height="40"><div align="left">Session</div></td>
                    <td height="40"><div align="center"><strong>:</strong></div></td>
                    <td height="40"><?php echo $sdata[sesson]; ?></td>
                  </tr>
                  <tr>
                    <td height="40"><div align="left">Institute Name </div></td>
                    <td height="40"><div align="center"><strong>:</strong></div></td>
                    <td height="40">City Polytechnic Institute,Khulna</td>
                  </tr>
                </table>
                <br/>
                <table width="100%" border="1" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="8%"><div align="center"><span class="style28">Subject Code</span></div></td>
                    <td width="40%" height="42"><div align="center"><span class="style28">Name of the Subject</span></div></td>
                    <td width="11%" align="center">Full Marks </td>
                    <td width="15%" align="center">Marks Obtaine </td>
                    <td width="13%" align="center">GradeLetter </td>
                    <td width="13%" align="center">Grade Point </td>
                  </tr>
                  <tr>
                    <td><div align="center">2611</div></td>
                    <td height="41"><span style="border:solid 1px #000000; border:none;">Computer Fundamenals </span></td>
                    <td align="center">150</td>
                    <td align="center"><?php
							echo $cfundamental = $smarks[cfttotal] + $smarks[cfptotal];
							
							if($cfundamental >= 120 and $cfundamental <= 150)
								{
									$gl = "A+";
									$gp1 = "4.00";
								}
							elseif($cfundamental >= 112.5 and $cfundamental < 120)
								{
									$gl = "A";
									$gp1 = "3.75";
								}
							elseif($cfundamental >= 105 and $cfundamental < 112.5)
								{
									$gl = "A-";
									$gp1 = "3.50";
								}
							elseif($cfundamental >= 97.5  and $cfundamental < 105)
								{
									$gl = "B+";
									$gp1 = "3.25";
								}
							elseif($cfundamental >= 90 and $cfundamental < 95.5)
								{
									$gl = "B";
									$gp1 = "3.00";
								}
							elseif($cfundamental >=  82.5 and $cfundamental < 90)
								{
									$gl = "B-";
									$gp1 = "2.75";
								}
								
							elseif($cfundamental >= 75 and $cfundamental < 82.5)
								{
									$gl = "C+";
									$gp1 = "2.50";
								}
							elseif($cfundamental >= 67.5 and $cfundamental < 75)
								{
									$gl = "C";
									$gp1 = "2.25";
								}
							elseif($cfundamental >= 60 and $cfundamental < 67.5)
								{
									$gl = "D";
									$gp1 = "2.00";
								}
							else 
								{
									$gl = "F";
									$gp1 = "0.00";
								}
								
								$t_gp1 = $gp1 * 3;
			                   
							
							
						
						?></td>
                    <td align="center"><?php echo $gl; ?></td>
                    <td align="center"><?php echo $gp1; ?></td>
                  </tr>
                  <tr>
                    <td><div align="center">2612 </div></td>
                    <td height="38"><span style="border:solid 1px #000000; border:none;">Computer Operation &amp; Word Processing </span></td>
                    <td align="center">50</td>
                    <td align="center"><?php
							echo $cfundamental = $smarks[coptotal];
							
							if($cfundamental >= 40 and $cfundamental <= 50)
								{
									$gl = "A+";
									$gp2 = "4.00";
								}
							elseif($cfundamental >= 37.5 and $cfundamental < 40)
								{
									$gl = "A";
									$gp2= "3.75";
								}
							elseif($cfundamental >= 35 and $cfundamental < 37.5)
								{
									$gl = "A-";
									$gp2 = "3.50";
								}
							elseif($cfundamental >= 32.5 and $cfundamental < 35)
								{
									$gl = "B+";
									$gp2 = "3.25";
								}
							elseif($cfundamental >= 30 and $cfundamental < 32.5)
								{
									$gl = "B";
									$gp2 = "3.00";
								}
							elseif($cfundamental >= 27.5 and $cfundamental < 30)
								{
									$gl = "B-";
									$gp2 = "2.75";
								}
								
							elseif($cfundamental >= 25 and $cfundamental < 27.5)
								{
									$gl = "C+";
									$gp2 = "2.50";
								}
							elseif($cfundamental >= 22.5 and $cfundamental < 25)
								{
									$gl = "C";
									$gp2 = "2.25";
								}
							elseif($cfundamental >= 20 and $cfundamental < 22.5)
								{
									$gl = "D";
									$gp2 = "2.00";
								}
							else 
								{
									$gl = "F";
									$gp2 = "0.00";
								}
								
									$t_gp2= $gp2 * 1;
							
							
						
						?></td>
                    <td align="center"><?php echo $gl; ?></td>
                    <td align="center"><?php echo $gp2; ?></td>
                  </tr>
                  <tr>
                    <td><div align="center">1611</div></td>
                    <td height="41"><span style="border:solid 1px #000000; border:none;">Engineering Drawing </span></td>
                    <td align="center">100</td>
                    <td align="center"><?php
							echo $cfundamental = $smarks[cfttotal] + $smarks[cfptotal];
							
							if($cfundamental >= 80 and $cfundamental <= 100)
								{
									$gl = "A+";
									$gp3 = "4.00";
								}
							elseif($cfundamental >= 75 and $cfundamental < 80)
								{
									$gl = "A";
									$gp3 = "3.75";
								}
							elseif($cfundamental >= 70 and $cfundamental < 75)
								{
									$gl = "A-";
									$gp3 = "3.50";
								}
							elseif($cfundamental >= 65 and $cfundamental < 70)
								{
									$gl = "B+";
									$gp3 = "3.25";
								}
							elseif($cfundamental >= 60 and $cfundamental < 65)
								{
									$gl = "B";
									$gp3 = "3.00";
								}
							elseif($cfundamental >= 55 and $cfundamental < 60)
								{
									$gl = "B-";
									$gp3 = "2.75";
								}
								
							elseif($cfundamental >= 50 and $cfundamental < 55)
								{
									$gl = "C+";
									$gp3 = "2.50";
								}
							elseif($cfundamental >= 45 and $cfundamental < 50)
								{
									$gl = "C";
									$gp3 = "2.25";
								}
							elseif($cfundamental >= 40 and $cfundamental < 45)
								{
									$gl = "D";
									$gp3 = "2.00";
								}
							else 
								{
									$gl = "F";
									$gp3 = "0.00";
								}
								
									$t_gp3 = $gp3 * 2;
							
							
						
						?></td>
                    <td align="center"><?php echo $gl; ?></td>
                    <td align="center"><?php echo $gp3; ?></td>
                  </tr>
                  <tr>
                    <td><div align="center">2711</div></td>
                    <td height="39"><span style="border:solid 1px #000000; border:none;">Basic Electricity-I </span></td>
                    <td align="center">200</td>
                    <td align="center"><?php
							echo $cfundamental = $smarks[cfttotal] + $smarks[cfptotal];
							
							if($cfundamental >= 160 and $cfundamental <= 200)
								{
									$gl = "A+";
									$gp4 = "4.00";
								}
							elseif($cfundamental >=  150and $cfundamental < 160)
								{
									$gl = "A";
									$gp4 = "3.75";
								}
							elseif($cfundamental >= 140and $cfundamental < 150)
								{
									$gl = "A-";
									$gp4 = "3.50";
								}
							elseif($cfundamental >= 130 and $cfundamental < 140)
								{
									$gl = "B+";
									$gp4 = "3.25";
								}
							elseif($cfundamental >= 120 and $cfundamental < 130)
								{
									$gl = "B";
									$gp4 = "3.00";
								}
							elseif($cfundamental >= 110 and $cfundamental < 120)
								{
									$gl = "B-";
									$gp4 = "2.75";
								}
								
							elseif($cfundamental >= 100 and $cfundamental < 110)
								{
									$gl = "C+";
									$gp4 = "2.50";
								}
							elseif($cfundamental >= 90 and $cfundamental < 100)
								{
									$gl = "C";
									$gp4 = "2.25";
								}
							elseif($cfundamental >= 80 and $cfundamental < 90)
								{
									$gl = "D";
									$gp4 = "2.00";
								}
							else 
								{
									$gl = "F";
									$gp4 = "0.00";
								}
								
									$t_gp4 = $gp4 * 4;
							
							
						
						?></td>
                    <td align="center"><?php echo $gl; ?></td>
                    <td align="center"><?php echo $gp4; ?></td>
                  </tr>
                  <tr>
                    <td><div align="center">1411</div></td>
                    <td height="41"><span style="border:solid 1px #000000; border:none;">Mathematics-I</span></td>
                    <td align="center">200</td>
                    <td align="center"><?php
							echo $cfundamental = $smarks[cfttotal] + $smarks[cfptotal];
							
							if($cfundamental >= 160 and $cfundamental <= 200)
								{
									$gl = "A+";
									$gp5 = "4.00";
								}
							elseif($cfundamental >=  150and $cfundamental < 160)
								{
									$gl = "A";
									$gp5 = "3.75";
								}
							elseif($cfundamental >= 140and $cfundamental < 150)
								{
									$gl = "A-";
									$gp5 = "3.50";
								}
							elseif($cfundamental >= 130 and $cfundamental < 140)
								{
									$gl = "B+";
									$gp5 = "3.25";
								}
							elseif($cfundamental >= 120 and $cfundamental < 130)
								{
									$gl = "B";
									$gp5 = "3.00";
								}
							elseif($cfundamental >= 110 and $cfundamental < 120)
								{
									$gl = "B-";
									$gp5 = "2.75";
								}
								
							elseif($cfundamental >= 100 and $cfundamental < 110)
								{
									$gl = "C+";
									$gp5 = "2.50";
								}
							elseif($cfundamental >= 90 and $cfundamental < 100)
								{
									$gl = "C";
									$gp5 = "2.25";
								}
							elseif($cfundamental >= 80 and $cfundamental < 90)
								{
									$gl = "D";
									$gp5 = "2.00";
								}
							else 
								{
									$gl = "F";
									$gp5 = "0.00";
								}
								
									$t_gp5 = $gp5 * 4;
							
							
						
						?></td>
                    <td align="center"><?php echo $gl; ?></td>
                    <td align="center"><?php echo $gp5; ?></td>
                  </tr>
                  <tr>
                    <td><div align="center">1412 </div></td>
                    <td height="39"><span style="border:solid 1px #000000; border:none;">Physics-I</span></td>
                    <td align="center">200</td>
                    <td align="center"><?php
							echo $cfundamental = $smarks[cfttotal] + $smarks[cfptotal];
							
							if($cfundamental >= 160 and $cfundamental <= 200)
								{
									$gl = "A+";
									$gp6 = "4.00";
								}
							elseif($cfundamental >=  150and $cfundamental < 160)
								{
									$gl = "A";
									$gp6 = "3.75";
								}
							elseif($cfundamental >= 140and $cfundamental < 150)
								{
									$gl = "A-";
									$gp6 = "3.50";
								}
							elseif($cfundamental >= 130 and $cfundamental < 140)
								{
									$gl = "B+";
									$gp6 = "3.25";
								}
							elseif($cfundamental >= 120 and $cfundamental < 130)
								{
									$gl = "B";
									$gp6 = "3.00";
								}
							elseif($cfundamental >= 110 and $cfundamental < 120)
								{
									$gl = "B-";
									$gp6 = "2.75";
								}
								
							elseif($cfundamental >= 100 and $cfundamental < 110)
								{
									$gl = "C+";
									$gp6 = "2.50";
								}
							elseif($cfundamental >= 90 and $cfundamental < 100)
								{
									$gl = "C";
									$gp6 = "2.25";
								}
							elseif($cfundamental >= 80 and $cfundamental < 90)
								{
									$gl = "D";
									$gp6 = "2.00";
								}
							else 
								{
									$gl = "F";
									$gp6 = "0.00";
								}
								
								$t_gp6 = $gp6 * 4;
							
							
						
						?></td>
                    <td align="center"><?php echo $gl; ?></td>
                    <td align="center"><?php echo $gp6; ?></td>
                  </tr>
                  <tr>
                    <td><div align="center">1111</div></td>
                    <td height="38"><span style="border:solid 1px #000000; border:none;">Bangla-I</span></td>
                    <td align="center">100</td>
                    <td align="center"><?php
							echo $cfundamental = $smarks[cfttotal] + $smarks[cfptotal];
							
							if($cfundamental >= 80 and $cfundamental <= 100)
								{
									$gl = "A+";
									$gp7= "4.00";
								}
							elseif($cfundamental >= 75 and $cfundamental < 80)
								{
									$gl = "A";
									$gp7 = "3.75";
								}
							elseif($cfundamental >= 70 and $cfundamental < 75)
								{
									$gl = "A-";
									$gp7 = "3.50";
								}
							elseif($cfundamental >= 65 and $cfundamental < 70)
								{
									$gl = "B+";
									$gp7 = "3.25";
								}
							elseif($cfundamental >= 60 and $cfundamental < 65)
								{
									$gl = "B";
									$gp7 = "3.00";
								}
							elseif($cfundamental >= 55 and $cfundamental < 60)
								{
									$gl = "B-";
									$gp7 = "2.75";
								}
								
							elseif($cfundamental >= 50 and $cfundamental < 55)
								{
									$gl = "C+";
									$gp7 = "2.50";
								}
							elseif($cfundamental >= 45 and $cfundamental < 50)
								{
									$gl = "C";
									$gp7 = "2.25";
								}
							elseif($cfundamental >= 40 and $cfundamental < 45)
								{
									$gl = "D";
									$gp7 = "2.00";
								}
							else 
								{
									$gl = "F";
									$gp7 = "0.00";
								}
								
								$t_gp7 = $gp7 * 2;
							
							
						
						?></td>
                    <td align="center"><?php echo $gl; ?></td>
                    <td align="center"><?php echo $gp7; ?></td>
                  </tr>
                  <tr>
                    <td><div align="center">1112</div></td>
                    <td height="32"><span style="border:solid 1px #000000; border:none;">English-I</span></td>
                    <td align="center">100</td>
                    <td align="center"><?php
							echo $cfundamental = $smarks[cfttotal] + $smarks[cfptotal];
							
							if($cfundamental >= 80 and $cfundamental <= 100)
								{
									$gl = "A+";
									$gp8 = "4.00";
								}
							elseif($cfundamental >= 75 and $cfundamental < 80)
								{
									$gl = "A";
									$gp8 = "3.75";
								}
							elseif($cfundamental >= 70 and $cfundamental < 75)
								{
									$gl = "A-";
									$gp8 = "3.50";
								}
							elseif($cfundamental >= 65 and $cfundamental < 70)
								{
									$gl = "B+";
									$gp8 = "3.25";
								}
							elseif($cfundamental >= 60 and $cfundamental < 65)
								{
									$gl = "B";
									$gp8 = "3.00";
								}
							elseif($cfundamental >= 55 and $cfundamental < 60)
								{
									$gl = "B-";
									$gp8 = "2.75";
								}
								
							elseif($cfundamental >= 50 and $cfundamental < 55)
								{
									$gl = "C+";
									$gp8 = "2.50";
								}
							elseif($cfundamental >= 45 and $cfundamental < 50)
								{
									$gl = "C";
									$gp8 = "2.25";
								}
							elseif($cfundamental >= 40 and $cfundamental < 45)
								{
									$gl = "D";
									$gp8 = "2.00";
								}
							else 
								{
									$gl = "F";
									$gp8 = "0.00";
								}
								
								$t_gp8 = $gp8* 2;
							
							
						
						?></td>
                    <td align="center"><?php echo $gl; ?></td>
                    <td align="center"><?php echo $gp8; ?></td>
                  </tr>
                  <tr>
                    <td><div align="center">1113</div></td>
                    <td height="42"><span style="border:solid 1px #000000; border:none;">Social Science-I (Civics) </span></td>
                    <td align="center">100</td>
                    <td align="center"><?php
							echo $cfundamental = $smarks[cfttotal] + $smarks[cfptotal];
							
							if($cfundamental >= 80 and $cfundamental <= 100)
								{
									$gl = "A+";
									$gp9 = "4.00";
								}
							elseif($cfundamental >= 75 and $cfundamental < 80)
								{
									$gl = "A";
									$gp9 = "3.75";
								}
							elseif($cfundamental >= 70 and $cfundamental < 75)
								{
									$gl = "A-";
									$gp9 = "3.50";
								}
							elseif($cfundamental >= 65 and $cfundamental < 70)
								{
									$gl = "B+";
									$gp9 = "3.25";
								}
							elseif($cfundamental >= 60 and $cfundamental < 65)
								{
									$gl = "B";
									$gp9 = "3.00";
								}
							elseif($cfundamental >= 55 and $cfundamental < 60)
								{
									$gl = "B-";
									$gp9 = "2.75";
								}
								
							elseif($cfundamental >= 50 and $cfundamental < 55)
								{
									$gl = "C+";
									$gp9 = "2.50";
								}
							elseif($cfundamental >= 45 and $cfundamental < 50)
								{
									$gl = "C";
									$gp9 = "2.25";
								}
							elseif($cfundamental >= 40 and $cfundamental < 45)
								{
									$gl = "D";
									$gp9 = "2.00";
								}
							else 
								{
									$gl = "F";
									$gp9 = "0.00";
								}
								
								$t_gp9 = $gp9 * 2;
							
							
						
						?></td>
                    <td align="center"><?php echo $gl; ?></td>
                    <td align="center"><?php echo $gp9; ?></td>
                  </tr>
                  <tr>
                    <td><div align="center">1211</div></td>
                    <td height="46"><span style="border:solid 1px #000000; border:none;">Physical Education </span></td>
                    <td align="center">50</td>
                    <td align="center"><?php
							echo $cfundamental = $smarks[peptotal];
							
							if($cfundamental >= 40 and $cfundamental <= 50)
								{
									$gl = "A+";
									$gp10 = "4.00";
								}
							elseif($cfundamental >= 37.5 and $cfundamental < 40)
								{
									$gl = "A";
									$gp10 = "3.75";
								}
							elseif($cfundamental >= 35 and $cfundamental < 37.5)
								{
									$gl = "A-";
									$gp10 = "3.50";
								}
							elseif($cfundamental >= 32.5 and $cfundamental < 35)
								{
									$gl = "B+";
									$gp10 = "3.25";
								}
							elseif($cfundamental >= 30 and $cfundamental < 32.5)
								{
									$gl = "B";
									$gp10 = "3.00";
								}
							elseif($cfundamental >= 27.5 and $cfundamental < 30)
								{
									$gl = "B-";
									$gp10 = "2.75";
								}
								
							elseif($cfundamental >= 25 and $cfundamental < 27.5)
								{
									$gl = "C+";
									$gp10 = "2.50";
								}
							elseif($cfundamental >= 22.5 and $cfundamental < 25)
								{
									$gl = "C";
									$gp10 = "2.25";
								}
							elseif($cfundamental >= 20 and $cfundamental < 22.5)
								{
									$gl = "D";
									$gp10 = "2.00";
								}
							else 
								{
									$gl = "F";
									$gp10 = "0.00";
								}
								
								$t_gp10 = $gp10 * 1;
							
							
						
						?></td>
                    <td align="center"><?php echo $gl; ?></td>
                    <td align="center"><?php echo $gp10; ?></td>
                  </tr>
                  <tr>
                    <td height="46" colspan="5"><div align="right">Total GPA </div></td>
                    <td><div align="center">
                      <?php
			
		           
				$total_gpa = ($t_gp1 + $t_gp2 + $t_gp3 + $t_gp4 + $t_gp5 + $t_gp6 + $t_gp7 + $t_gp8 + $t_gp9 + $t_gp10)/25.00 ;
					
					
				if($t_gp1  == 0.00)
					{
					echo $total_gpa=0.00;
					}
					elseif($t_gp2   == 0.00)
					{
					echo $total_gpa=0.00;
					}
					elseif($t_gp3   == 0.00)
					{
					echo $total_gpa=0.00;
					}
					elseif($t_gp4  == 0.00)
					{
					echo $total_gpa=0.00;
					}
					elseif($t_gp5   == 0.00)
					{
					echo $total_gpa=0.00;
					}
					elseif($t_gp6   == 0.00)
					{
					echo $total_gpa=0.00;
					}
					elseif($t_gp7 == 0.00)
					{
					echo $total_gpa=0.00;
					}
					elseif($t_gp8   == 0.00)
					{
					echo $total_gpa=0.00;
					}
					elseif($t_gp9   == 0.00)
					{
					echo $total_gpa=0.00;
					}
					elseif($t_gp10   == 0.00)
					{
					echo $total_gpa=0.00;
					} 
					else
					{
					echo $total_gpa ;
					}
				
				 
						
				 
			?>
                    </div></td>
                  </tr>
                </table>
                <table width="100%" height="118" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="35%"><p>&nbsp;</p>
                    <p>&nbsp;</p></td>
                    <td width="18%"><div align="center">
                      <p>&nbsp;</p>
                      <p>------------------</p>
                    </div></td>
                    <td width="47%"><div align="right">
                      <p>&nbsp;</p>
                      <p>--------------------------------------</p>
                    </div></td>
                  </tr>
                  <tr><br/>
                    <td height="36">Khulna, Date 12/12/2012 </td>
                    <td><div align="center">Regester</div></td>
                    <td><div align="right">Chairman of City Polytechnic Institute </div></td>
                  </tr>
      </table>      <p>&nbsp;</p>
    </td>
  </tr>
</table>
<div align="center" class="style1">This academic transcript is issued without any alternation erasure</div>
</body>

</html>
