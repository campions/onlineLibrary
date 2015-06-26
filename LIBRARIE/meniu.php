<?php
$sql="SELECT * FROM categorii ORDER BY id_cat ASC";
$resursa=mysql_query($sql);
?>  
          <tr>
           <td>
            <table cellspacing="0" cellpadding="0" border="0">
             <tr>
              <td>
               <div style="margin-left:31px;" class="title1_txt">Categorii<br>
               </div>
              </td>
             </tr>
            </table>

<table cellspacing="0" cellpadding="0" border="0">
             <tr>
              <td>
               <div style="margin-left:35px; margin-top:15px; margin-bottom:18px;">
                <ul>
			<?php while ($row = mysql_fetch_array ($resursa))
{  print '<li><a href="categorie.php?id_cat='.$row['id_cat'].'">'.$row['categorie'].'</a></li>';
	} ?> 
                </ul>
               </div>
               <table cellspacing="0" cellpadding="0" border="0">
                <tr>
                 <td>
                  <div style="margin:0 22px 0 20px;">
                   <div class="line1"> <img src="images/spacer.gif" alt="" width="1" height="1"><br>
                   </div>
                  </div>
                 </td>
                </tr>
               </table>
              </td>
             </tr>
            </table>
			
           </td>
          </tr>