<html>
<head>
<style>
td.one{
	font-weight: bold;
	text-align: center;
}
</style>
</head>
<body>
<?php
$aname=$_POST['aname'];
$bname=$_POST['bname'];
$cname=$_POST['cname'];
$dname=$_POST['dname'];
$sname=$_POST['sname'];
$ename=$_POST['ename'];
$fname=$_POST['fname'];
$gname=$_POST['gname'];
$hname=$_POST['hname'];
$iname=$_POST['iname'];
$jname=$_POST['jname'];
$kname=$_POST['kname'];
$lname=$_POST['lname'];
$mname=$_POST['mname'];
$nname=$_POST['nname'];
$oname=$_POST['oname'];
?>
<table align="center"  width='300px'>
<tr>
 <td class="one" >Name of the appllicant:</td>
 <td><?php echo $aname; ?> </td>
</tr>  
 
<tr>
 <td class="one" >Age:</td>
 <td><?php echo $bname; ?> </td>
</tr> 
   
<tr>
 <td class="one" >Date of birth:</td>
 <td><?php echo $cname; ?> </td>
</tr>  
 
<tr>
 <td class="one" >Gender:</td>
 <td><?php echo $dname; ?> </td>
</tr>
    
<tr>
 <td class="one" >Mobile number:</td>
 <td><?php echo $sname; ?> </td>
</tr>  
 
<tr>
 <td class="one" >Type of driving license?:</td>
 <td><?php echo $ename; ?> </td>
</tr>
    
<tr>
 <td class="one" >Health and fitness</td>
 <td><?php echo $fname; ?> </td>
</tr>  
 
<tr>
 <td class="one" >Contact address:</td>
 <td><?php echo $gname; ?> </td>
</tr>    

<tr>
  <td class="two">First time appllicant:</td>
  <td><?php echo $iname; ?></td>
</tr>


<tr>
   <td class="two">1. Do you have glasses or lenses when driving?</td>
  <td><?php echo $jname; ?></td>
</tr>


<tr>
    <td class="two" colspan="1">
      2.  Do you have have any physical disabilites that may require special adaptations to be made on the vehicle you might use?</td>
    <td><?php echo $kname; ?></td>
</tr>

tr>
   <td class="two">3. Do you suffer from any serious disease?</td>
    <td><?php echo $lname; ?></td>
</tr>
    
   <tr>
     <td class="two">4.  Are you on any prescription drugs?</td>
     <td><?php echo $mname; ?></td>
   </tr>

   <tr>
    <td class="two" >5.Do you use hearing aids?</td>
    <td><?php echo $nname; ?></td>
   </tr>

  <tr>
    <td class="two" >6. Have you ever been dependent on alcohol?</td>
    <td><?php echo $oname; ?>
    </td>
 </tr>
</table>


	
