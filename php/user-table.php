<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet"/>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


<?php


$usercon = mysqli_connect("localhost","root","","");
mysqli_select_db($usercon,"login");     

$use = "SELECT * FROM user";
$userow = mysqli_query($usercon,$use) or die(mysqli_error($con)); 
while($urow = mysqli_fetch_array($userow)){

 $usern = $urow['username'];
 $usname = $urow['names'];
 $useremail = $urow['email'];
 $userpass = $urow['pass'];
 $uid = $urow['id'];


 ?>



 <tr>
 <td>
 <p><?php echo "(#$uid)";?></p>
 </td>
 <td>
<p><?php echo "$usern";?></p>
 </td>
 </td>
 
 <td>
 <p class= 'h'><?php echo "$usname";?></p>
</td>
<td>
 <p class= 'h'><?php echo "$useremail";?></p>
</td>
 
 <td>
   <input type="hidden" class="delete_acc" value="<?php echo"$uid";?>"></input>
 <span class='status completed'><a class='removeacc' href='javascript:void()'>Remove Acc</a></span></td>
</tr>
 

<?php

}

?>






<script>

$(document).ready(function () {

 $('.removeacc').click(function (e) { 
  e.preventDefault();
  //alert2()
   var deleteacc = $(this).closest("tr").find('.delete_acc').val();
   console.log(deleteacc);
   swal({
    title: "Delete Upload? (#"+deleteacc+")",
  text: "Once deleted, you will not be able to recover this file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
  
})
.then((isConfirm) => {
  if (isConfirm) {
    $.ajax({
      type: "POST",
      url: "../php/acc_delete.php",
      data: {
        "delete_btn":1,
        "delete_id": deleteacc,
      },
      success: function (response) {
        swal("Deleted!", "Your upload has been deleted.", "success")
        .then((result) => {
         location.reload();
         });
      }
    });
  } else {
    swal("Cancelled", "Cancelled delete operation :)", "error");
  }
});
 



});
});

</script>
