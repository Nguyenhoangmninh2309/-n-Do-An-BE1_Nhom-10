<?php
include "config.php";
include "models/db.php";
include "models/products.php";
include "models/protypes.php";
include "models/manufacture.php";
$manufacture = new Manufacture;
if(isset($_POST['name']) && $_POST['name'] != ""){
    $name = $_POST['name']; 
    //Them manufacture
    $manufacture->add($name);
    header('location: manufacture.php');
}else{?>
    <script>
    window.location.href = "manu_add.php";
    alert("Thông tin không đuọc để trống!!");
    </script>
<?php } ?>}