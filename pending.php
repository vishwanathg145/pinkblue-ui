<?php
/**
 * Created by PhpStorm.
 * User: vish
 * Date: 2/2/18
 * Time: 2:10 PM
 */

include "menu.php";

echo '<body>

<div class="main">
    <div class="page">
<div class="content">
<div align="right" style="margin: 20px"><a href="approved.php">Click here for approved Products</a></div>
<table border="1px solid" style="margin: 30px;width: 90%">
  <tr align="center">
    <th > Product Id </th>
    <th> Product Name </th>
    <th> Vendor </th>
    <th> Price </th>
    <th>Batch No</th>
    <th>Batch Date</th>
    <th> Quantity </th>
    <th> Action </th>
  </tr>
  <tr align="center">
    <td> 1 </td>
    <td> Dell Insprion 3100 </td>
    <td> Dell </td>
        <td> 100.00 </td>
    <td> 100 </td>
    <td> 1AZC </td>
    <td> 2017-02-20 </td>
    <td> Pending for update </td>
    <td><input type="button" value="Approve"></td>
  </tr>
</table>
</div></div></body>';