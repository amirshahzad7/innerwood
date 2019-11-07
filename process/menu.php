<?php

$loginlevel=$_SESSION['login_level'];
if ($loginlevel==1){
  $menu="
 
  <div class='container'>
  	<a class='active' href='/interwood/index.php'>Home</a>
  	<div class='dropdown'>
      <button class='dropbtn'>Add Record</button>
      <div class='dropdown-content'>
        <a href='/interwood/add/addcustomer.php'>Add a Customer</a>
        <a href='/interwood/add/additem.php'>Add an Item</a>
        <a href='/interwood/add/addorder.php'>Add a Order</a>
        <a href='/interwood/add/newbranch.php'>Add New Showroom</a>
      </div>
    </div>
    <div class='dropdown'>
      <button class='dropbtn'>Update Record</button>
      <div class='dropdown-content'>
        <a href='/interwood/update/items.php'>Update an Item</a>
        <a href='/interwood/update/customer.php'>Update Customer</a>
      </div>
    </div>
    <div class='dropdown'>
      <button class='dropbtn'>Delete Record</button>
      <div class='dropdown-content'>
        <a href='/interwood/delete/item.php'>delete an Item</a>
        <a href='/interwood/delete/customer.php'>delete Customer</a>
        <a href='/interwood/delete/order.php'>delete Order</a>
        <a href='/interwood/delete/showroom.php'>delete Showroom</a>
      </div>
    </div>
    <div class='dropdown'>
      <button class='dropbtn'>Manage Stock</button>
      <div class='dropdown-content'>
        <a href='/interwood/items.php'>View Stock</a>
        <a href='/interwood/update/updateqty.php'>Update Quantity</a>
      </div>
    </div>
    <a href='/interwood/view/factory.php'>Factory Status</a>
  	<a href='/interwood/deliver.php'>Deliver Status</a>
  	<a href='/interwood/process/allcustomer.php' target=blank>All Customers</a>
  	<a href='/interwood/branch.php'>Show room Info</a>
  </div>";

}else if ($loginlevel==2){
  $menu="
  <div class='container'>
  	<a class='active' href='/interwood/index.php'>Home</a>
  	<div class='dropdown'>
      <button class='dropbtn'>Add Record</button>
      <div class='dropdown-content'>
        <a href='/interwood/add/addcustomer.php'>Add a Customer</a>
        <a href='/interwood/add/addorder.php'>Add a Order</a>
      </div>
    </div>
    <div class='dropdown'>
      <button class='dropbtn'>Update Record</button>
      <div class='dropdown-content'>
        <a href='/interwood/update/items.php'>Update an Item</a>
        <a href='/interwood/update/customer.php'>Update Customer</a>
      </div>
    </div>
  	<a href='/interwood/deliver.php'>Deliver Status</a>
  </div>";
}else{
  $menu="
  <div class='container'>
  	<a class='active' href='/interwood/index.php'>Home</a>
  	<div class='dropdown'>
      <button class='dropbtn'>Add Record</button>
      <div class='dropdown-content'>
        <a href='/interwood/add/additem.php'>Add an Item</a>
      </div>
    </div>
    <div class='dropdown'>
      <button class='dropbtn'>Update Record</button>
      <div class='dropdown-content'>
        <a href='/interwood/update/items.php'>Update an Item</a>
        <a href='/interwood/error.html'>Update Order</a>
      </div>
    </div>
    <div class='dropdown'>
      <button class='dropbtn'>Manage Stock</button>
      <div class='dropdown-content'>
        <a href='/interwood/items.php'>View Stock</a>
        <a href='/interwood/update/updateqty.php'>Update Quantity</a>
      </div>
    </div>
    <a href='/interwood/error.html'>Factory Status</a>
  	<a href='/interwood/deliver.php'>Deliver Status</a>
  </div>";
}

 ?>