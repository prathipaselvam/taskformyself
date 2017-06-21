            
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Product</title>
    <link rel="icon" type="text/css" href="images.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/vendor/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="css/vendor/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="css/jquery.bdt.css" type="text/css" rel="stylesheet">
    <link href="css/style.css" type="text/css" rel="stylesheet">
</head>
<body>
        <div class ="table table-bordered" style= "background:white;">
             <h1 style="text-align: center; margin-bottom: 20px;color: white;background-color: #1f5d92;" >Product Table </h1>
              <a href="form.php" class="btn btn-primary btn-lg active" style="float:right; margin-bottom: 20px;     margin-right: 80px;" role="button" aria-pressed="true">Add Products</a>

            
<div class="container">
    <div class="row">
            <!--div class="box clearfix">
          
         

            <!--table class="table table-hover" id="bootstrap-table">
                <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Date</th>
                </tr>
                </thead-->
                <tbody>
                 <?php
$link =mysqli_connect("localhost","root","password","Shop");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//if (!isset($_GET['startrow']) or !is_numeric($_GET['startrow'])) {
  //we give the value of the starting row to 0 because nothing was found in URL
  //$startrow = 0;
//otherwise we take the value from the URL
//} else {
  //$startrow = (int)$_GET['startrow'];
//}
//$fetch = mysql_query("SELECT * FROM sample LIMIT $startrow, 10")
$result = mysqli_query($link,"SELECT * FROM product"); //limit $startrow,10")or
//die(mysql_error());


echo "<table class='table table-bordered'  id='bootstrap-table'>
<thead>
<tr style='background: aliceblue;'>
<th>Product name</th>
<th>Quantity in kg</th>
<th>Price</th>
<th>Date</th>

 </tr>
 </thead>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['product_name'] . "</td>";
echo "<td>" . $row['quantity'] . "</td>";
echo "<td>" . $row['price'] . "</td>";
echo "<td>" . $row['date'] . "</td>";
//echo "<td>" . $row['age'] . "</td>";

 

echo "</tr>";
}
echo "</table>";

//echo ' &nbsp<a href="'.$_SERVER['PHP_SELF'].'?startrow='.($startrow+10).'">Next</a> ';

//$prev = $startrow - 10;

//only print a "Previous" link if a "Next" was clicked
//if ($prev >= 0)
  //  echo '&nbsp <a href="'.$_SERVER['PHP_SELF'].'?startrow='.$prev.'">Previous</a>';


mysqli_close($link);
?>

                
                
                </tbody>

            </table>
        </div>
        </div>
    </div>
</div>
</div>

<script src="http://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="js/vendor/bootstrap.min.js" type="text/javascript"></script>
<script src="js/vendor/jquery.sortelements.js" type="text/javascript"></script>
<script src="js/jquery.bdt.min.js" type="text/javascript"></script>
<script>
    $(document).ready( function () {
        $('#bootstrap-table').bdt({
            showSearchForm: 0,
            showEntriesPerPageField: 0
        });
    });
</script>
</body>
</html>
