<?php
session_start();
include ('head.php');
include('lib_db.php');
$con=mysqli_connect("localhost", "root", "" , "lib_db");
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
               <span class="title_txt">CONFirmare comanda</span><br>
              </td>
              <td> <img src="images/tt_right_back.gif" alt=""><br>
              </td>
             </tr>
            </table>	 
<?php
// escape variables for security
$result=mysql_query("SELECT * FROM clienti", $db);
$id = mysql_num_rows($result);
$nume = mysqli_real_escape_string($con, $_POST['nume']);
$prenume = mysqli_real_escape_string($con, $_POST['prenume']);
$serie = mysqli_real_escape_string($con, $_POST['serie']);
$tnrci = mysqli_real_escape_string($con, $_POST['tnrci']);
$cnp = mysqli_real_escape_string($con, $_POST['cnp']);
$adresa = mysqli_real_escape_string($con, $_POST['adresa']);
$oras = mysqli_real_escape_string($con, $_POST['oras']);
$cod = mysqli_real_escape_string($con, $_POST['cod']);
$email = mysqli_real_escape_string($con, $_POST['email']);


$sql="INSERT INTO clienti (id, nume, prenume, serie, nrci, cnp, adresa, oras, cod, email)
VALUES ('$id', '$nume', '$prenume', '$serie', '$tnrci', '$cnp', '$adresa', '$oras', '$cod', '$email')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "Comanda dumneavoastra a fost adaugata";

mysqli_close($con);
?> 

