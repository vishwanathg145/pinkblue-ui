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
        	<h3 class="panel-title">Registration Form</h3>
	</div>
<div class="panel-body" >
    <form>
<div class="col-md-12 col-sm-12">
	<div class="form-group col-md-12 col-sm-12">
            <label for="name">Username	</label>
            <input type="text" class="form-control input-sm" id="name" placeholder="">
     </div>
</div>
<div class="col-md-12 col-sm-12">
        <div class="form-group col-md-12 col-sm-12">
            <label for="email">Email</label>
            <input type="email" class="form-control input-sm" id="email" placeholder="">
        </div>        
</div>
<div class="col-md-12 col-sm-12">
	<div class="form-group col-md-12 col-sm-12">
            <label for="password">Password	</label>
            <input type="password" class="form-control input-sm" id="name" placeholder="">
     </div>
</div>

<div class="col-md-12 col-sm-12" id="addblock">
	<div class="form-group col-md-3 col-sm-3">
		<input type=\'button\' class="btn btn-primary" value="Register" id="add"/>
	</div>
	<a href="login.php">Click here to login</a>
</div>

</form>
</div>
</div></div></div></body>';