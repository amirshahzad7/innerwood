
<?php

$loginlevel=$_SESSION['login_level'];
if ($loginlevel==1){
  $permissionstat="
  <ul>
     <li><a href='index.php'><span>Home</span></a></li>
     <li class='active has-sub'><a href='#'><span>Add & Update Task</span></a>
        <ul>
           <li class='has-sub'><a href='#'><span>Add</span></a>
            <ul>
              <li><a href='add/newbranch.php'> <span>Add new Showroom </span></a></li>
              <li><a href='add/additem.php'> <span>Add New Item </span></a></li>
              <li><a href='add/addcustomer.php'><span> Add New Customer </span></a></li>
              <li class='last'><a href='add/addorder.php'><span> Add New Order</span> </a></li>
            </ul>
           </li>
           <li class='has-sub'><a href='#'><span>Update</span></a>
              <ul>
                <li><a href='update/updatebranch.php'> <span>Update Showroom info</span> </a></li>
                <li><a href='update/items.php'> <span>Update Item Details</span> </a></li>
                <li><a href='update/customer.php'> <span>Update Customer Deatils</span> </a></li>
                <li class='last'><a href='deliver.php'><span> Update Deliver Status</span> </a></li>

              </ul>
           </li>
        </ul>
      </li>
        <li class='active has-sub'><a href='#'><span>Delete Task</span></a>
          <ul>
            <li><a href='delete/customer.php'> <span>Delete a Customer</span> </a></li>
            <li><a href='delete/order.php'> <span>Delete an Order</span> </a></li>
            <li><a href='delete/item.php'> <span>Delete an Item </span></a></li>
            <li class='last'><a href='delete/showroom.php'><span> Delete a Showroom</span> </a></li>
          </ul>
        </li>
        <li class='active has-sub'><a href='#'><span>View</span></a>
          <ul>
            <li><a href='items.php'> <span>View Current Item Stock </span></a></li>
            <li><a href='deliver.php'> <span>View Deliver Status </span></a></li>
            <li><a href='process/allcustomer.php'> <span>View All cutomers</span> </a></li>
            <li><a href='/interwood/view/factory.php'><span>Factory Status</span></a></li>
            <li class='last'><a href='/interwood/view/opercus.php'><span>View Customers AS Operator</span></a></li>
          </ul>
            <li class='last'><a href='https://www.interwoodmobel.com'><span>About US</span></a></li>
        </li>
  </ul>"
;

}else if ($loginlevel==2){
  $permissionstat="
  <ul>
     <li><a href='index.php'><span>Home</span></a></li>
     <li class='active has-sub'><a href='#'><span>Add</span></a>
        <ul>
              <li><a href='add/addcustomer.php'><span> Add New Customer </span></a></li>
              <li class='last'><a href='add/addorder.php'><span> Add New Order</span> </a></li>
           
        </ul>
      </li>
        
        <li class='active has-sub'><a href='#'><span>View</span></a>
          <ul>
            <li><a href='items.php'> <span>View Current Item Stock </span></a></li>
            <li><a href='deliver.php'> <span>View Deliver Status </span></a></li>
          </ul>
            <li class='last'><a href='https://www.interwoodmobel.com'><span>About US</span></a></li>
        </li>
  </ul>";

}else{
  $permissionstat="
  <ul>
     <li><a href='index.php'><span>Home</span></a></li>
     <li class='active has-sub'><a href='#'><span>Add</span></a>
            <ul>
              <li><a href='add/additem.php'> <span>Add New Item </span></a></li>
            </ul>
      </li>
        <li class='active has-sub'><a href='#'><span>Update</span></a>
        <ul>
          <li><a href='update/items.php'> <span>Update Item Details</span> </a></li>
          <li><a href='update/updateqty.php'> <span> Update Stock Quantity</span>  </a></li>
          <li class='last'><a href='deliver.php'><span> Update Deliver Status</span> </a></li>

        </ul>
      </li>  
        <li class='active has-sub'><a href='#'><span>Delete Task</span></a>
          <ul>
            <li><a href='delete/item.php'> <span>Delete an Item </span></a></li>
          </ul>
        </li>
        <li class='active has-sub'><a href='#'><span>View</span></a>
          <ul>
            <li><a href='items.php'> <span>View Current Item Stock </span></a></li>
            <li><a href='deliver.php'> <span>View Deliver Status </span></a></li>
            <li><a href='process/allcustomer.php'> <span>View All cutomers</span> </a></li>
          </ul>
            <li class='last'><a href='https://www.interwoodmobel.com'><span>About US</span></a></li>
        </li>
  </ul>";
}

 ?>