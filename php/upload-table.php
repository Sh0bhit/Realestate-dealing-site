<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet"/>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>



 <?php


$con = mysqli_connect("localhost","root","","");
mysqli_select_db($con,"list");   

$sel = "SELECT * FROM main";
$result = mysqli_query($con,$sel) or die(mysqli_error($con)); 
while($row = mysqli_fetch_array($result)){

 $image = $row['image'];
 $name = $row['name'];
 $city = $row['city'];
 $state = $row['state'];
 $id = $row['id'];


 ?>



 <tr>
 <td>
 <p><?php echo "(#$id)";?></p>
 </td>
 <td>
<img src=<?php echo "$image";?> >
<p><?php echo "$name";?></p>
 </td>
 </td>
 
 <td>
 <p class= 'h'><?php echo "$city<br>$state";?></p>
 
 <td>
   <input type="hidden" class="delete_id" value="<?php echo"$id";?>"></input>
 <span class='status completed'><a class='remove' href='javascript:void()'>Remove</a></span></td>
</tr>
 

<?php

}

?>

<script>

$(document).ready(function () {

 $('.remove').click(function (e) { 
  e.preventDefault();
  //alert2()
   var deleteid = $(this).closest("tr").find('.delete_id').val();
   console.log(deleteid);
   swal({
    title: "Delete Upload? (#"+deleteid+")",
  text: "Once deleted, you will not be able to recover this file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
  
})
.then((isConfirm) => {
  if (isConfirm) {
    $.ajax({
      type: "POST",
      url: "../php/deletecode.php",
      data: {
        "delete_btn":1,
        "delete_id": deleteid,
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
