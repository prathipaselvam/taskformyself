<?php 

   include ("db.php");
if ($product_name == '' || $quantity == '' || $price == '' || date == '' )

{

// generate error message

$error = 'ERROR: Please fill in all required fields!';



// if either field is blank, display the form again



}


if(isset($_POST) & !empty($_POST)){
    $product_name =($_POST['product_name']);
     $quantity = ($_POST['quantity']);
    $price = ($_POST['price']);
	//$gender =  $_POST['gender'];
	$date =  $_POST['date'];
}

$CreateSql = "Insert into product (product_name, quantity, price, date) VALUES ('$product_name', '$quantity', '$price', '$date    ')";

$res = mysqli_query($link,$CreateSql) or die(mysqli_error($link));

if ($res){
    $msg = "Successfully inserted data, Insert new data";
    
}else{
    $fmsg = "Data not inserted, please try again later.";
}

    
?>
<?php include "index.php";?>

<?php if(isset($smsg)){ ?>
<div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div>
<?php } ?>
<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
