<?php
session_start();
include ('head.php');
include('lib_db.php');
?>
<body>
<table style="width:766px; margin:auto; background:#F5F0E9;" cellspacing="0" cellpadding="0" border="0" align="center">
 <tr>
  <td style="width:100%;">
   <table cellspacing="0" cellpadding="0" border="0">
<?php 
include ('animatie.php');
?>
    <tr>
     <td style="height:100%;">
      <table cellspacing="0" cellpadding="0" border="0">
       <tr>
        <td style="width:193px; height:24px; background:url(images/h_back3.gif) no-repeat left top"> <img src="images/spacer.gif" alt="" width="1" height="1"><br>
        </td>
        <td>
         <table cellspacing="0" cellpadding="0" border="0" style="background:#F5F0E9;">
          <tr>
           <td style="width:348px; background:url(images/h_back5.gif) no-repeat left top;"> <img src="images/spacer.gif" alt="" width="1" height="24"><br>
           </td>
           <td class="txt4"> 
           </td>
          </tr>
         </table>
        </td>
       </tr>
      </table>
     </td>
    </tr>
   </table>
  </td>
 </tr>
 <tr>
  <td style="width:100%; height:496px;">
  
  
  
  
   <table cellspacing="0" cellpadding="0" border="0" style="height:100%;">
    <tr>
     <td style="height:100%;">
      <table cellspacing="0" cellpadding="0" border="0" style="width:193px; height:100%;">
       <tr>
        <td style="background:url(images/b_back2.jpg) no-repeat left top #DCD5D2; height:100%;"> <img src="images/spacer.gif" alt="" width="1" height="3"><br>
         <table cellspacing="0" cellpadding="0" border="0" style="margin-bottom:16px;">

            
<?php
include ('meniu.php');	
?>		
			
			

         </table>
         <table cellspacing="0" cellpadding="0" border="0" style="margin-bottom:16px;">

<?php
include ('ultima.php');	
?>	
       
         </table>
<table cellspacing="0" cellpadding="0" border="0" style="margin-bottom:16px;">

<?php
include ('cos1.php');	
?>	
       
         </table>
 
        </td>
       </tr>
      </table>
     </td>
     <td style="width:100%;">
      <table cellspacing="0" cellpadding="0" border="0">
       <tr>
        <td> <img src="images/spacer.gif" alt="" width="9" height="1"><br>
        </td>
        <td style="width:100%;">
         <table cellspacing="0" cellpadding="0" border="0">
          <tr>
           <td>
            <table cellspacing="0" cellpadding="0" border="0">
             <tr>
              <td> <img src="images/tt_left_back.gif" alt=""><br>
              </td>
              <td style="width:100%; background:#E7DFD8;"> <img src="images/spacer.gif" alt="" width="1" height="5"><br>
               <span class="title_txt">Top 10 vanzari</span><br>
              </td>
              <td> <img src="images/tt_right_back.gif" alt=""><br>
              </td>
             </tr>
            </table>
            <table cellspacing="0" cellpadding="0" border="0">
             <tr>
              <td style="background:#E7DFD8;"> <img src="images/spacer.gif" alt="" width="14" height="1"><br>
              </td>
              <td style="width:100%; height:550px; background:#FFFFFF;">
               <table cellspacing="0" cellpadding="0" border="0">

<?php
////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////           Inceput detalii carte       ////////////////////////
////////////////////////////////////////////////////////////////////////////////////////
?>
<?php
$sql = "SELECT * FROM carte ORDER BY pret DESC LIMIT 10";	
$resursa = mysql_query ($sql);
$numar=1;
while ($row = mysql_fetch_array ($resursa))
     { 	
?>
<tr>
<td>

<table border="1" style="width:400px; margin-top:5px; margin-bottom:5px;" bordercolor="#666666" align="center">
 <tr>
   <td style="width:50px; vertical-align:middle; font-size:36px; line-height:40px;" align="center"><? print $numar;
             $numar++?>
   </td>
   <td align="center" style="vertical-align:middle; font-size:14px; line-height:20px;">
 <?php
	  print '<a href="carte.php?id='.$row['id'].'">'.$row['nume'].'</a><br>';
	  print 'de <b>'.$row['autor'].'</b>';
	?> 
   </td>
   <td width="100" align="center">
   <?php
	 print '<a href="carte.php?id='.$row['id'].'"><img src="carti/'.$row['id'].'.jpg" width="55" height="88"></a>';
	?>	
   </td>
 </tr>
</table>


</td>
</tr>
<?php
}
////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////           Sfarsit detalii carte       ////////////////////////
////////////////////////////////////////////////////////////////////////////////////////
?>


               </table>
              </td>
              <td style="background:#E7DFD8;"> <img src="images/spacer.gif" alt="" width="14" height="1"><br>
              </td>
             </tr>
             <tr>
              <td> <img src="images/lbc_obv.gif" alt=""><br>
              </td>
              <td style="width:100%; background:#E7DFD8;"> <img src="images/spacer.gif" alt="" width="1" height="1"><br>
              </td>
              <td> <img src="images/rbc_obv.gif" alt=""><br>
              </td>
             </tr>
            </table>
           </td>
          </tr>
         </table>
        </td>
        <td> <img src="images/spacer.gif" alt="" width="6" height="1"><br>
        </td>
       </tr>
      </table>
      <img src="images/spacer.gif" alt="" width="1" height="9"><br>
     </td>
    </tr>
   </table>
	
  </td>
 </tr>
<?php
   include('footer.php');
 ?>
</table>
</body>
</html>
