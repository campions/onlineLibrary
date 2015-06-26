<?php
session_start();
include ('head.php');
include('lib_db.php');
$id_cat = $_GET['id_cat'];
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
<?php
// cate randuri sa afisezi
$per_row = 2;

$count = 0;
$numarate=0;

$sql = "SELECT * FROM carte,categorii WHERE carte.id_cat=categorii.id_cat AND carte.id_cat=".$id_cat;		
$resursa = mysql_query ($sql);

$query = "SELECT * FROM categorii WHERE categorii.id_cat=".$id_cat;		
$res = mysql_query ($query);
$rand = mysql_fetch_array ($res);

$total = mysql_num_rows($resursa); 

?>
               <span class="title_txt"><?php echo $rand['categorie'];?></span><br>
              </td>
              <td> <img src="images/tt_right_back.gif" alt=""><br>
              </td>
             </tr>
            </table>
            <table cellspacing="0" cellpadding="0" border="0">
             <tr>
              <td style="background:#E7DFD8;"> <img src="images/spacer.gif" alt="" width="14" height="1"><br>
              </td>
              <td style="width:100%;">
<?php
////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////           Inceput produse             ////////////////////////
////////////////////////////////////////////////////////////////////////////////////////
?>


               <table cellspacing="0" cellpadding="0" border="0">
			   
<?php while ($row = mysql_fetch_array ($resursa))
     { 	
 $numarate+=1;
     // if we start a line
         if($count == 0)
               {echo '<tr>';}
     // display the entry - change this to i.e. display image etc

?>
 <!--####################################################################################-->
 <!--##########################    Aici incepe afisarea cartii    #######################--> 
 <!--####################################################################################-->
 
 
 
 
<td style="width:262px; background-image:url(images/tt_left_back.gif);">
 <table cellspacing="0" cellpadding="0" border="0" style="background:url(images/ltc.gif) no-repeat left top #ffffff;margin-bottom:5px;">
                   <tr>
                    <td style="background:url(images/lbc.gif) no-repeat left bottom;">
                     <table cellspacing="0" cellpadding="0" border="0" style="background:url(images/rtc.gif) no-repeat right top;">
                      <tr>
                       <td style="background:url(images/rbc.gif) no-repeat right bottom;">
                        <table cellspacing="0" cellpadding="0" border="0">
                         <tr>
                          <td style="width:5px;"> <img src="images/spacer.gif" alt="" width="5" height="1"><br>
                          </td>
                          <td style="width:100%;">
                           <table cellspacing="0" cellpadding="0" border="0">
                            <tr>
                             <td> <img src="images/spacer.gif" alt="" width="1" height="6"><br>
                              <table cellspacing="0" cellpadding="0" border="0">
                               <tr>
                                <td style="background:#F2F2F2;">
                                 <table cellspacing="0" cellpadding="0" border="0" style="background:url(images/ltc1.gif) no-repeat left top;">
                                  <tr>
                                   <td style="background:url(images/lbc1.gif) no-repeat left bottom;">
                                    <table cellspacing="0" cellpadding="0" border="0" style="background:url(images/rtc1.gif) no-repeat right top; height:35px;">
                                     <tr>
                                      <td style="background:url(images/rbc1.gif) no-repeat right bottom; padding:0 0 0 0px; vertical-align:middle;" class="title2_txt" align="center"> <?php echo $row['nume'];?><br>
                                      </td>
                                     </tr>
                                    </table>
                                   </td>
                                  </tr>
                                 </table>
                                </td>
                               </tr>
                              </table>
                              <table cellspacing="0" cellpadding="0" border="0" style="margin-top:14px; height:154px;">
                               <tr>
                                <td style="width:100%; height:88px; text-align:center;"> 
	<?php  
	 print '<a href="carte.php?id='.$row['id'].'"><img src="carti/'.$row['id'].'.jpg" width="55" height="88"></a>';
	?>							
								
								<br>
                                </td>
                               </tr>
                               <tr>
  <td style="width:100%; height:58px;" class="txt5 link2" align="center"> 
	<?php
	  print '<a href="carte.php?id='.$row['id'].'">'.$row['nume'].'</a><br>';
	  print 'de <b>'.$row['autor'].'</b>';
	?>
								
								<br>
                                </td>
                               </tr>
                               <tr>
                                <td style="width:100%; height:100%;" class="txt5 link2">
                                 <table cellspacing="0" cellpadding="0" border="0">
                                  <tr>
                                   <td width="4"> <img src="images/spacer.gif" alt="" width="4" height="1"><br>
                                   </td>
                                   <td style="width:100%; background:url(images/side.gif) repeat-x top;">
                                    <table cellspacing="0" cellpadding="0" border="0" style="background:url(images/side.gif) repeat-x bottom;">
                                     <tr>
                                      <td style="background:url(images/side.gif) repeat-y left;">
                                       <table cellspacing="0" cellpadding="0" border="0" style="background:url(images/side.gif) repeat-y right;">
                                        <tr>
                                         <td style="background:url(images/ltc2.gif) no-repeat left top;">
                                          <table cellspacing="0" cellpadding="0" border="0" style="background:url(images/lbc2.gif) no-repeat left bottom;">
                                           <tr>
                                            <td style="background:url(images/rtc2.gif) no-repeat right top;">
                                             <table cellspacing="0" cellpadding="0" border="0" style="background:url(images/rbc2.gif) no-repeat right bottom;height:59px;">
                                              <tr>
                                               <td width="110" class="price_txt" style=" text-align:center; vertical-align:middle;"> 
		<?php 
		print $row['pret'].' RON';
		?>									   
									<br>
                                               </td>
                                               <td style="width:auto;"> <a href="#"><img src="images/spacer.gif" alt="" width="1" height="14"></a><br>
                           
                                                <img src="images/spacer.gif" alt="" width="1" height="4"><br>
<form action="cos.php?actiune=adauga" method="POST">
    <INPUT type="hidden" name="id" value="<?php echo $id?>">
    <INPUT type="hidden" name="nume" value="<?php echo $row['nume']?>">
    <input type="hidden" name="nr_loc_rez" value="<?php echo $row['nr_loc_rez']?>"> 
    <input type="hidden" name="pret" value="<?php echo $row['pret']?>">
	<input type="image" name="actiune" src="images/adauga_in_cos.gif" border="0" align="top">
</form>	<br>
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
                                    </table>
                                   </td>
                                   <td> <img src="images/spacer.gif" alt="" width="5" height="1"><br>
                                   </td>
                                  </tr>
                                 </table>
                                 <img src="images/spacer.gif" alt="" width="1" height="10"><br>
                                </td>
                               </tr>
                              </table>
                             </td>
                            </tr>
                            <tr>
                             <td> </td>
                            </tr>
                           </table>
                          </td>
                          <td style="width:6px;"> <img src="images/spacer.gif" alt="" width="6" height="1"><br>
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




 <!--####################################################################################-->
 <!--##########################  Aici se termina afisarea cartii  #######################--> 
 <!--####################################################################################-->
 
 
 <?php
     // increase the count
                 $count++;
     // if the max number per row is reached or it's the last entry
                if(($count == $per_row) || ($numarate == ($total)))
                 { echo '</tr>';
     // reset the count
                $count = 0;
				}
}
?>

<?php
////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////           Sfarsit produse             ////////////////////////
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
