<!-- Cos de cumparaturi -->					

             <tr>
              <td>
               <div style="margin-left:31px;" class="title1_txt">Cosul de cumparaturi<br>
               </div>
              </td>
             </tr>
<tr>
<td align="center">								

	<br>(<a href="cos.php" style="font-size:14px; font-weight:bold;">
<?php
 $nrRez=0;
 for($i=0; $i<count($_SESSION['nume']); $i++)
   { $nrRez=$nrRez + $_SESSION['nr_loc_rez'][$i];
   }
 ?>
  <?php
  if  ($nrRez==0) {print 'cosul este gol';}
      else if ($nrRez==1) {print 'o carte';}
	    else {print $nrRez.' carti';}
   
   ?></b>	
   </a>)
</td>
<td style="width:61px; height:31px; vertical-align:bottom" align="left">
<a href="cos.php">
<img src="images/cos5.gif" width="20" height="20"></a>
</td>
</tr>
   
   	
<!-- Cos de cumparaturi -->	