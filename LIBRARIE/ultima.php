<?php
$sql="SELECT * FROM carte ORDER BY id DESC LIMIT 1";
$resursa=mysql_query($sql);
?>  

<tr>
           <td>
            <table cellspacing="0" cellpadding="0" border="0">
             <tr>
              <td>
               <div style="margin-left:31px;" class="title1_txt">Ultima carte<br>
               </div>
              </td>
             </tr>
            </table>
            <table cellspacing="0" cellpadding="0" border="0">
             <tr>
              <td style="padding:12px 0 18px 0; text-align:center" class="link6"> 
	
	<?php while ($row = mysql_fetch_array ($resursa))
{  print '<a href="carte.php?id='.$row['id'].'"><img src="carti/'.$row['id'].'.jpg" width="130"></a>';
	 ?> 			  		  
			  <br>
               <img src="images/spacer.gif" alt="" width="1" height="10"><br>
 <?php print '<a href="carte.php?id='.$row['id'].'">'.$row['nume'].'</a>'; ?><br>
               <img src="images/spacer.gif" alt="" width="1" height="6"><br>
  <?php print 'de <b>'.$row['autor'].'</b>'; ?><br>
               <img src="images/spacer.gif" alt="" width="1" height="6"><br>
  <?php print '<span class="price_txt2">'.$row['pret'].' RON</span>'; ?><br>
               <img src="images/spacer.gif" alt="" width="1" height="10">
<?php } ?>
              </td>
             </tr>
            </table>
           </td>
          </tr>
	           <tr>
                 <td>
                  <div style="margin:0 22px 0 20px;">
                   <div class="line1"> <img src="images/spacer.gif" alt="" width="1" height="1"><br>
                   </div>
                  </div>
                 </td>
                </tr>