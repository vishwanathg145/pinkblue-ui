<?php
/**
 * Created by PhpStorm.
 * User: vish
 * Date: 2/2/18
 * Time: 2:10 PM
 */

include "menu.php";

echo '<body>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="main">
    <div class="page">
<div class="content">
<div class="panel panel-primary" style="margin-left:150px;margin-top:20px;width:50%;">
	<div class="panel-heading">
        	<h3 class="panel-title">Add New Product</h3>
	</div>
<div class="panel-body" >
    <form>
<div class="col-md-12 col-sm-12">
	<div class="form-group col-md-12 col-sm-12">
            <label for="name">Product Name	</label>
            <input type="text" class="form-control input-sm" id="name" placeholder="">
     </div>
</div>
<div class="col-md-12 col-sm-12">
        <div class="form-group col-md-12 col-sm-12">
            <label for="vendor">Vendor</label>
            <input type="text" class="form-control input-sm" id="vendor" placeholder="">
        </div>        
</div>

<div class="col-md-12 col-sm-12">
        <div class="form-group col-md-12 col-sm-12">
            <label for="price">Price</label>
            <input type="text" class="form-control input-sm" id="price" placeholder="">
        </div>        
</div>

<div class="col-md-12 col-sm-12">
        <div class="form-group col-md-12 col-sm-12">
            <label for="batchno">Batch No</label>
            <input type="text" class="form-control input-sm" id="batchno" placeholder="">
        </div>        
</div>

<div class="col-md-12 col-sm-12">
        <div class="form-group col-md-12 col-sm-12">
            <label for="batchdate">Batch Date</label>
            <input type="date" class="form-control input-sm" id="batchdate" placeholder="">
        </div>        
</div>
<div class="col-md-12 col-sm-12">
        <div class="form-group col-md-12 col-sm-12">
            <label for="quantity">Quantity</label>
            <input type="text" class="form-control input-sm" id="quantity" placeholder="">
        </div>        
</div>


<div class="col-md-12 col-sm-12" id="addblock">
	<div class="form-group col-md-3 col-sm-3">
		<input type=\'button\' class="btn btn-primary" value="Add" id="add"/>
	</div>
	
</div>

</form>
</div>
</div></div></div></body>';