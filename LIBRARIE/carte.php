<?php
session_start();
include ('head.php');
include('lib_db.php');
$id = $_GET['id'];
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
<?php
$sql = "SELECT * FROM carte WHERE id=".$id;		
$resursa = mysql_query ($sql);
while ($row = mysql_fetch_array ($resursa))
     { 	
?>
            <table cellspacing="0" cellpadding="0" border="0">
             <tr>
              <td> <img src="images/tt_left_back.gif" alt=""><br>
              </td>
              <td style="width:100%; background:#E7DFD8;"> <img src="images/spacer.gif" alt="" width="1" height="5"><br>
               <span class="title_txt"><?php echo $row['nume']?></span><br>
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
<tr>
<td>

<table border="0" style="margin-left:35px; margin-top:35px;">
  <tr>
    <td>
	  <table border="0">
	    <tr>
		  <td>
 <?php $adresaImagine = "carti/".$row['id'].".jpg";        
	if (file_exists($adresaImagine)){
	print '<a href="carti/'.$row['id'].'.jpg">
	<img src="carti/'.$row['id'].'.jpg" style="border: 1px solid #666666;" width="100"></a>';}
							?>			  
		  
		  </td>
		  <td>
<div style=" margin-left:50px; margin-right:50px; font-size:14px; line-height:20px;">
<?php
 print 'Numele cartii: <b>'.$row['nume'].'</b><br>';
 print 'Autor: <b>'.$row['autor'].'</b><br>';
 print 'Pretul: <b>'.$row['pret'].'</b><br>';
 print 'Anul aparitiei: <b>'.$row['an'].'</b><br>';
 print 'Pagini: <b>'.$row['pagini'].'</b><br>';
 print 'Disponibilitate: <b>'.$row['disponibilitate'].'</b><br>';
?>		  
</div>	  
		  </td>
		</tr>
	  </table>
	</td>
  </tr>
  <tr>
    <td>
<div style="margin:35px 50px 35px 35px; font-size:14px; line-height:16px;">
<?php
 print $row['descriere'].'<br>';
?>
</div>
	</td>
  </tr>
</table>
<div align="center">
 
<form action="cos.php?actiune=adauga" method="POST">
    <INPUT type="hidden" name="id" value="<?php echo $row['id']?>">
    <INPUT type="hidden" name="nume" value="<?php echo $row['nume']?>">
    <input type="hidden" name="nr_loc_rez" value="<?php echo $row['nr_loc_rez']?>"> 
    <input type="hidden" name="pret" value="<?php echo $row['pret']?>">
	<input type="image" name="actiune" src="images/adauga_in_cos.gif" border="0" align="top">
</form>		

</div><br><br><br>
</td>
</tr>
<?php
////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////           Sfarsit detalii carte       ////////////////////////
////////////////////////////////////////////////////////////////////////////////////////
}
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
