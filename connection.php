<?php
$servername="localhost";
$username="root";
$password="";
$database_name="form";
$conn=mysqli_connection($servername,$username,$password,$database_name);
if(!$conn)
{
    die("connection failed:".mysqli_connection_error());

}
if(iset($_POST['save']))
{
    $name=$_POST['name'];
    $address=$_POST['address'];
    $contact_number=$_POST['contact_number'];
    $select_item=$_POST['select item'];
    $select_quantity=$_POST['select quantity'];
    $sql_query="INSERT INTO entry_details(name,address,contact_number,,"
}