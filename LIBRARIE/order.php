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
               <span class="title1_txt">Confirmare comanda</span><br>
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
/////////////////////////           Aici incepe cosul           ////////////////////////
////////////////////////////////////////////////////////////////////////////////////////
?>
<tr>
<td>
<br><br><br>

<table border="1" cellspacing="0" cellpadding="4" style="width:450px;" align="center">
<tr bgcolor="#DDDDDD">
  <td><b>Nr.</b></td>
  <td><b>Produs</b></td>
  <td><b>Pret produs</b></td>  
  <td><b>Total</b></td>
</tr>
<?php
$totalGeneral = 0;
for ($i=0; $i < count($_SESSION['id']); $i++)
	{ if ($_SESSION['nr_loc_rez'][$i] != 0)
	  { print'<tr><td>'.$_SESSION['nr_loc_rez'][$i].'</td>
	   <td><b>'.$_SESSION['nume'][$i].'</b>	  
	   <td align="right">
	   '.$_SESSION['pret'][$i].' RON</td>
	   <td align="right">'
	   .($_SESSION['pret'][$i]*$_SESSION['nr_loc_rez'][$i]).
	   ' RON</td></tr>';	  
	  $totalGeneral = $totalGeneral + ($_SESSION['pret'][$i]*$_SESSION['nr_loc_rez'][$i]);
	 }
	}
print '<tr>
	<td align="right" colspan="3">
	<b>Total de plata</b></td>
	<td align="right"><b>'.$totalGeneral.
	'</b> lei</td>
	</tr>';
?>
</table>
 <br /><br />
 
		
     <tr>   <td><br><br><Input type="image" src="images/button_confirm_order.gif" style="width:99px; height:16px;"></td>
     </tr>
    </table>
</form>

</td>
</tr>
<?php
////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////           Aici se termina cosul       ////////////////////////
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
