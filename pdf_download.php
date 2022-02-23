<?php include 'db.php';

$product_id = $_GET['id'];
 

$qury = "SELECT * FROM `jag_product` WHERE `id`='$product_id'";
$ressult1 = mysqli_query($connection, $qury);
$row = mysqli_fetch_array($ressult1);

$BROCHURE=$row['brochure'];
?>

<style>

</style>

<object class="cover text-centre" onclick="print()" data="data:application/pdf;base64,<?php echo base64_encode($BROCHURE) ?>" type="application/pdf" style="align-items: center; width: 100%; height:100%" ></object>