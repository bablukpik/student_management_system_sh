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
.style29 {font-size: 18px}
.style30 {color: #000000}
.style32 {color: #000000; font-style: italic;}
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
                        <td> <div align="center" class="style4">SECOND<span class="style4"><span class="style32"></span></span> SEMESTER EXAMINATION,2011 
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
                    <td><div align="center"><span class="style28">2621 </span></div></td>
                    <td height="41"><span class="style30">Spreadsheet Analysis </span></td>
                    <td align="center">50</td>
                    <td align="center"><?php
							echo $cfundamental = $smarks[cfttotal] + $smarks[cfptotal];
							
							if($cfundamental >= 40 and $cfundamental <= 50)
								{
									$gl = "A+";
									$gp = "4.00";
								}
							elseif($cfundamental >= 37.5 and $cfundamental < 40)
								{
									$gl = "A";
									$gp = "3.75";
								}
							elseif($cfundamental >= 35 and $cfundamental < 37.5)
								{
									$gl = "A-";
									$gp = "3.50";
								}
							elseif($cfundamental >= 32.5 and $cfundamental < 35)
								{
									$gl = "B+";
									$gp = "3.25";
								}
							elseif($cfundamental >= 30 and $cfundamental < 32.5)
								{
									$gl = "B";
									$gp = "3.00";
								}
							elseif($cfundamental >= 27.5 and $cfundamental < 30)
								{
									$gl = "B-";
									$gp = "2.75";
								}
								
							elseif($cfundamental >= 25 and $cfundamental < 27.5)
								{
									$gl = "C+";
									$gp = "2.50";
								}
							elseif($cfundamental >= 22.5 and $cfundamental < 25)
								{
									$gl = "C";
									$gp = "2.25";
								}
							elseif($cfundamental >= 20 and $cfundamental < 22.5)
								{
									$gl = "D";
									$gp = "2.00";
								}
							else 
								{
									$gl = "F";
									$gp = "0.00";
								}
								
								
							
							
						
						?></td>
                    <td align="center"><?php echo $gl; ?></td>
                    <td align="center"><?php echo $gp; ?></td>
                  </tr>
                  <tr>
                    <td><div align="center"><span class="style28">2622</span></div></td>
                    <td height="38"><span class="style28">Programming in C </span></td>
                    <td align="center">150</td>
                    <td align="center"><?php
							echo $cfundamental = $smarks[cfttotal] + $smarks[cfptotal];
							
							if($cfundamental >= 120 and $cfundamental <= 150)
								{
									$gl = "A+";
									$gp = "4.00";
								}
							elseif($cfundamental >= 112.5 and $cfundamental < 120)
								{
									$gl = "A";
									$gp = "3.75";
								}
							elseif($cfundamental >= 105 and $cfundamental < 112.5)
								{
									$gl = "A-";
									$gp = "3.50";
								}
							elseif($cfundamental >= 97.5  and $cfundamental < 105)
								{
									$gl = "B+";
									$gp = "3.25";
								}
							elseif($cfundamental >= 90 and $cfundamental < 95.5)
								{
									$gl = "B";
									$gp = "3.00";
								}
							elseif($cfundamental >=  82.5 and $cfundamental < 90)
								{
									$gl = "B-";
									$gp = "2.75";
								}
								
							elseif($cfundamental >= 75 and $cfundamental < 82.5)
								{
									$gl = "C+";
									$gp = "2.50";
								}
							elseif($cfundamental >= 67.5 and $cfundamental < 75)
								{
									$gl = "C";
									$gp = "2.25";
								}
							elseif($cfundamental >= 60 and $cfundamental < 67.5)
								{
									$gl = "D";
									$gp = "2.00";
								}
							else 
								{
									$gl = "F";
									$gp = "0.00";
								}
								
								
							
							
						
						?></td>
                    <td align="center"><?php echo $gl; ?></td>
                    <td align="center"><?php echo $gp; ?></td>
                  </tr>
                  <tr>
                    <td><div align="center"><span class="style28">2811</span></div></td>
                    <td height="41"><p>Electronic Device &amp; Circuits - l</p>                    </td>
                    <td align="center">150</td>
                    <td align="center"><?php
							echo $cfundamental = $smarks[cfttotal] + $smarks[cfptotal];
							
							if($cfundamental >= 120 and $cfundamental <= 150)
								{
									$gl = "A+";
									$gp = "4.00";
								}
							elseif($cfundamental >= 112.5 and $cfundamental < 120)
								{
									$gl = "A";
									$gp = "3.75";
								}
							elseif($cfundamental >= 105 and $cfundamental < 112.5)
								{
									$gl = "A-";
									$gp = "3.50";
								}
							elseif($cfundamental >= 97.5  and $cfundamental < 105)
								{
									$gl = "B+";
									$gp = "3.25";
								}
							elseif($cfundamental >= 90 and $cfundamental < 95.5)
								{
									$gl = "B";
									$gp = "3.00";
								}
							elseif($cfundamental >=  82.5 and $cfundamental < 90)
								{
									$gl = "B-";
									$gp = "2.75";
								}
								
							elseif($cfundamental >= 75 and $cfundamental < 82.5)
								{
									$gl = "C+";
									$gp = "2.50";
								}
							elseif($cfundamental >= 67.5 and $cfundamental < 75)
								{
									$gl = "C";
									$gp = "2.25";
								}
							elseif($cfundamental >= 60 and $cfundamental < 67.5)
								{
									$gl = "D";
									$gp = "2.00";
								}
							else 
								{
									$gl = "F";
									$gp = "0.00";
								}
								
								
							
							
						
						?></td>
                    <td align="center"><?php echo $gl; ?></td>
                    <td align="center"><?php echo $gp; ?></td>
                  </tr>
                  <tr>
                    <td><div align="center"><span class="style29">2812</span></div></td>
                    <td height="39"><span class="style28">Electronic Workshop </span></td>
                    <td align="center">50</td>
                    <td align="center"><?php
							echo $cfundamental = $smarks[cfttotal] + $smarks[cfptotal];
							
							if($cfundamental >= 40 and $cfundamental <= 50)
								{
									$gl = "A+";
									$gp = "4.00";
								}
							elseif($cfundamental >= 37.5 and $cfundamental < 40)
								{
									$gl = "A";
									$gp = "3.75";
								}
							elseif($cfundamental >= 35 and $cfundamental < 37.5)
								{
									$gl = "A-";
									$gp = "3.50";
								}
							elseif($cfundamental >= 32.5 and $cfundamental < 35)
								{
									$gl = "B+";
									$gp = "3.25";
								}
							elseif($cfundamental >= 30 and $cfundamental < 32.5)
								{
									$gl = "B";
									$gp = "3.00";
								}
							elseif($cfundamental >= 27.5 and $cfundamental < 30)
								{
									$gl = "B-";
									$gp = "2.75";
								}
								
							elseif($cfundamental >= 25 and $cfundamental < 27.5)
								{
									$gl = "C+";
									$gp = "2.50";
								}
							elseif($cfundamental >= 22.5 and $cfundamental < 25)
								{
									$gl = "C";
									$gp = "2.25";
								}
							elseif($cfundamental >= 20 and $cfundamental < 22.5)
								{
									$gl = "D";
									$gp = "2.00";
								}
							else 
								{
									$gl = "F";
									$gp = "0.00";
								}
								
								
							
							
						
						?></td>
                    <td align="center"><?php echo $gl; ?></td>
                    <td align="center"><?php echo $gp; ?></td>
                  </tr>
                  <tr>
                    <td><div align="center"><span class="style28">2725</span></div></td>
                    <td height="41"><span class="style28">Electric Circuits </span></td>
                    <td align="center">150</td>
                    <td align="center"><?php
							echo $cfundamental = $smarks[cfttotal] + $smarks[cfptotal];
							
							if($cfundamental >= 120 and $cfundamental <= 150)
								{
									$gl = "A+";
									$gp = "4.00";
								}
							elseif($cfundamental >= 112.5 and $cfundamental < 120)
								{
									$gl = "A";
									$gp = "3.75";
								}
							elseif($cfundamental >= 105 and $cfundamental < 112.5)
								{
									$gl = "A-";
									$gp = "3.50";
								}
							elseif($cfundamental >= 97.5  and $cfundamental < 105)
								{
									$gl = "B+";
									$gp = "3.25";
								}
							elseif($cfundamental >= 90 and $cfundamental < 95.5)
								{
									$gl = "B";
									$gp = "3.00";
								}
							elseif($cfundamental >=  82.5 and $cfundamental < 90)
								{
									$gl = "B-";
									$gp = "2.75";
								}
								
							elseif($cfundamental >= 75 and $cfundamental < 82.5)
								{
									$gl = "C+";
									$gp = "2.50";
								}
							elseif($cfundamental >= 67.5 and $cfundamental < 75)
								{
									$gl = "C";
									$gp = "2.25";
								}
							elseif($cfundamental >= 60 and $cfundamental < 67.5)
								{
									$gl = "D";
									$gp = "2.00";
								}
							else 
								{
									$gl = "F";
									$gp = "0.00";
								}
								
								
							
							
						
						?></td>
                    <td align="center"><?php echo $gl; ?></td>
                    <td align="center"><?php echo $gp; ?></td>
                  </tr>
                  <tr>
                    <td><div align="center"><span class="style28">1421</span></div></td>
                    <td height="39"><span class="style28">Mathematics &ndash; II </span></td>
                    <td align="center">200</td>
                    <td align="center"><?php
							echo $cfundamental = $smarks[cfttotal] + $smarks[cfptotal];
							
							if($cfundamental >= 160 and $cfundamental <= 200)
								{
									$gl = "A+";
									$gp = "4.00";
								}
							elseif($cfundamental >=  150and $cfundamental < 160)
								{
									$gl = "A";
									$gp = "3.75";
								}
							elseif($cfundamental >= 140and $cfundamental < 150)
								{
									$gl = "A-";
									$gp = "3.50";
								}
							elseif($cfundamental >= 130 and $cfundamental < 140)
								{
									$gl = "B+";
									$gp = "3.25";
								}
							elseif($cfundamental >= 120 and $cfundamental < 130)
								{
									$gl = "B";
									$gp = "3.00";
								}
							elseif($cfundamental >= 110 and $cfundamental < 120)
								{
									$gl = "B-";
									$gp = "2.75";
								}
								
							elseif($cfundamental >= 100 and $cfundamental < 110)
								{
									$gl = "C+";
									$gp = "2.50";
								}
							elseif($cfundamental >= 90 and $cfundamental < 100)
								{
									$gl = "C";
									$gp = "2.25";
								}
							elseif($cfundamental >= 80 and $cfundamental < 90)
								{
									$gl = "D";
									$gp = "2.00";
								}
							else 
								{
									$gl = "F";
									$gp = "0.00";
								}
								
								
							
							
						
						?></td>
                    <td align="center"><?php echo $gl; ?></td>
                    <td align="center"><?php echo $gp; ?></td>
                  </tr>
                  <tr>
                    <td><div align="center"><span class="style28">1422</span></div></td>
                    <td height="38"><span class="style28">Chemistry </span></td>
                    <td align="center">200</td>
                    <td align="center"><?php
							echo $cfundamental = $smarks[cfttotal] + $smarks[cfptotal];
							
							if($cfundamental >= 160 and $cfundamental <= 200)
								{
									$gl = "A+";
									$gp = "4.00";
								}
							elseif($cfundamental >=  150and $cfundamental < 160)
								{
									$gl = "A";
									$gp = "3.75";
								}
							elseif($cfundamental >= 140and $cfundamental < 150)
								{
									$gl = "A-";
									$gp = "3.50";
								}
							elseif($cfundamental >= 130 and $cfundamental < 140)
								{
									$gl = "B+";
									$gp = "3.25";
								}
							elseif($cfundamental >= 120 and $cfundamental < 130)
								{
									$gl = "B";
									$gp = "3.00";
								}
							elseif($cfundamental >= 110 and $cfundamental < 120)
								{
									$gl = "B-";
									$gp = "2.75";
								}
								
							elseif($cfundamental >= 100 and $cfundamental < 110)
								{
									$gl = "C+";
									$gp = "2.50";
								}
							elseif($cfundamental >= 90 and $cfundamental < 100)
								{
									$gl = "C";
									$gp = "2.25";
								}
							elseif($cfundamental >= 80 and $cfundamental < 90)
								{
									$gl = "D";
									$gp = "2.00";
								}
							else 
								{
									$gl = "F";
									$gp = "0.00";
								}
								
								
							
							
						
						?></td>
                    <td align="center"><?php echo $gl; ?></td>
                    <td align="center"><?php echo $gp; ?></td>
                  </tr>
                  <tr>
                    <td><div align="center"><span class="style28">1121</span></div></td>
                    <td height="32"><span class="style28">Bangla &ndash; II </span></td>
                    <td align="center">100</td>
                    <td align="center"><?php
							echo $cfundamental = $smarks[cfttotal] + $smarks[cfptotal];
							
							if($cfundamental >= 80 and $cfundamental <= 100)
								{
									$gl = "A+";
									$gp = "4.00";
								}
							elseif($cfundamental >= 75 and $cfundamental < 80)
								{
									$gl = "A";
									$gp = "3.75";
								}
							elseif($cfundamental >= 70 and $cfundamental < 75)
								{
									$gl = "A-";
									$gp = "3.50";
								}
							elseif($cfundamental >= 65 and $cfundamental < 70)
								{
									$gl = "B+";
									$gp = "3.25";
								}
							elseif($cfundamental >= 60 and $cfundamental < 65)
								{
									$gl = "B";
									$gp = "3.00";
								}
							elseif($cfundamental >= 55 and $cfundamental < 60)
								{
									$gl = "B-";
									$gp = "2.75";
								}
								
							elseif($cfundamental >= 50 and $cfundamental < 55)
								{
									$gl = "C+";
									$gp = "2.50";
								}
							elseif($cfundamental >= 45 and $cfundamental < 50)
								{
									$gl = "C";
									$gp = "2.25";
								}
							elseif($cfundamental >= 40 and $cfundamental < 45)
								{
									$gl = "D";
									$gp = "2.00";
								}
							else 
								{
									$gl = "F";
									$gp = "0.00";
								}
								
								
							
							
						
						?></td>
                    <td align="center"><?php echo $gl; ?></td>
                    <td align="center"><?php echo $gp; ?></td>
                  </tr>
                  <tr>
                    <td><div align="center"><span class="style28">1122</span></div></td>
                    <td height="42"><span class="style30">English &ndash; II </span></td>
                    <td align="center">100</td>
                    <td align="center"><?php
							echo $cfundamental = $smarks[cfttotal] + $smarks[cfptotal];
							
							if($cfundamental >= 80 and $cfundamental <= 100)
								{
									$gl = "A+";
									$gp = "4.00";
								}
							elseif($cfundamental >= 75 and $cfundamental < 80)
								{
									$gl = "A";
									$gp = "3.75";
								}
							elseif($cfundamental >= 70 and $cfundamental < 75)
								{
									$gl = "A-";
									$gp = "3.50";
								}
							elseif($cfundamental >= 65 and $cfundamental < 70)
								{
									$gl = "B+";
									$gp = "3.25";
								}
							elseif($cfundamental >= 60 and $cfundamental < 65)
								{
									$gl = "B";
									$gp = "3.00";
								}
							elseif($cfundamental >= 55 and $cfundamental < 60)
								{
									$gl = "B-";
									$gp = "2.75";
								}
								
							elseif($cfundamental >= 50 and $cfundamental < 55)
								{
									$gl = "C+";
									$gp = "2.50";
								}
							elseif($cfundamental >= 45 and $cfundamental < 50)
								{
									$gl = "C";
									$gp = "2.25";
								}
							elseif($cfundamental >= 40 and $cfundamental < 45)
								{
									$gl = "D";
									$gp = "2.00";
								}
							else 
								{
									$gl = "F";
									$gp = "0.00";
								}
								
								
							
							
						
						?></td>
                    <td align="center"><?php echo $gl; ?></td>
                    <td align="center"><?php echo $gp; ?></td>
                  </tr>
                  <tr>
                    <td><div align="center"><span class="style28">1123</span></div></td>
                    <td height="46"><span class="style28">Social Science &ndash; II (Economics)</span></td>
                    <td align="center">100</td>
                    <td align="center"><?php
							echo $cfundamental = $smarks[cfttotal] + $smarks[cfptotal];
							
							if($cfundamental >= 80 and $cfundamental <= 100)
								{
									$gl = "A+";
									$gp = "4.00";
								}
							elseif($cfundamental >= 75 and $cfundamental < 80)
								{
									$gl = "A";
									$gp = "3.75";
								}
							elseif($cfundamental >= 70 and $cfundamental < 75)
								{
									$gl = "A-";
									$gp = "3.50";
								}
							elseif($cfundamental >= 65 and $cfundamental < 70)
								{
									$gl = "B+";
									$gp = "3.25";
								}
							elseif($cfundamental >= 60 and $cfundamental < 65)
								{
									$gl = "B";
									$gp = "3.00";
								}
							elseif($cfundamental >= 55 and $cfundamental < 60)
								{
									$gl = "B-";
									$gp = "2.75";
								}
								
							elseif($cfundamental >= 50 and $cfundamental < 55)
								{
									$gl = "C+";
									$gp = "2.50";
								}
							elseif($cfundamental >= 45 and $cfundamental < 50)
								{
									$gl = "C";
									$gp = "2.25";
								}
							elseif($cfundamental >= 40 and $cfundamental < 45)
								{
									$gl = "D";
									$gp = "2.00";
								}
							else 
								{
									$gl = "F";
									$gp = "0.00";
								}
								
								
							
							
						
						?></td>
                    <td align="center"><?php echo $gl; ?></td>
                    <td align="center"><?php echo $gp; ?></td>
                  </tr>
                  <tr>
                    <td height="46" colspan="5">&nbsp;</td>
                    <td>&nbsp;</td>
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
