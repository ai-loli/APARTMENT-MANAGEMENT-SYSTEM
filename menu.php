<?php
 require('connect_to_sql.php');
session_start();
?>
<div class="top_header"> <h1>Apartment Management</h1> </div>
<div class="menu_bar">
    <ul id="menu1" class="menu">
        <li><a href="view_apartments.php">View Apartments</a></li>
        <li><a href="add_apartments.php">Add Apartments</a></li>
        <li><a href="view_apartment_bookings.php">View Apartment Bookings</a></li>
        <li><a href="add_apartment_bookings.php">Book an Apartment</a></li>
        <li><a href="view_guests.php">View Guest Directory</a></li>
        <li><a href="add_guests.php">Add Guest</a></li>
        <li><a href="index.php">Logout</a></li>
    </ul>
</div>
<?php
echo " WELCOME!You are logged in <b> </b><br>";
?>
 