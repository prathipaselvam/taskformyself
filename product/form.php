    <!DOCTYPE html>
<html>
<head>
	<title>Products Table</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
 
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
 

<link rel="stylesheet" href="styles.css" >

 
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<link rel = "stylesheet" type = "text/css" href = "custom.css" />

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>

    $(document).ready(function(){
        var date_input=$('input[name="date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'yyyy/mm/dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
    

</script>
</head>
<body background="background.jpg">
<div class="container">
	<div class="row">
		<form action = "connect.php" method="post" class="form-horizontal col-md-6 col-md-offset-3">
		<h2 style="margin-left: 66px;
    font-size: 35px;
    text-align: center;
    color: #fffefb;
    margin-top: 100px;
    margin-bottom: 30px;"> Products</h2>
			<div class="form-group">
			    <label for="input1" class="col-sm-3 control-label">Product Name</label>
			    <div class="col-sm-9">
			      <input  style="text-transform: capitalize;" type="text" name="product_name"  class="form-control" id="input1" placeholder=""  required/>
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-3 control-label">Quantity </label>
			    <div class="col-sm-9">
			      <input  name="quantity"  class="form-control" id="input1" placeholder="in Kg" required />
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-3 control-label">Price</label>
			    <div class="col-sm-9">
			      <input type="text" name="price"  class="form-control" id="input1" placeholder="in Rs" pattern="\d+(\.\d{2})?" required />
			    </div>
			</div>
			<div class="form-group">
			    <label for="input1" class="col-sm-3 control-label">Date</label>
			    <div class="col-sm-9">
			      <input type="text" name="date"  class="form-control" id="input1" placeholder="" required />
			    </div>
			</div>

			<!--div class="form-group" class="radio">
                            <label for="input1" class="col-sm-2 control-label">Gender</label>
			<div class="col-sm-10">
			  <label>
			    <input type="radio" name="gender" id="optionsRadios1" value="male" checked> Male
			  </label>
			  	  <label>
			    <input type="radio" name="gender" id="optionsRadios1" value="female"> Female
			  </label>
			</div>
			</div-->

			<!--div class="form-group">
			<label for="input1" class="col-sm-2 control-label">Age</label>
			<div class="col-sm-10">
				<select name="age" class="form-control">
					<option>Select Your Age</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
				</select>
			</div>
			</div-->
			<!--button onclick="window.location.href='/show.php'">Continue</button>
			<button type="button" class="btn btn-secondary btn-lg">Large button</button-->
                            <input type="submit" class="btn btn-secondary btn-lg col-md-5 col-md-offset-5" value="submit" />
                    </form>
            </div>
    </div>
    
    </body>
    </html>
