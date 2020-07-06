<?php
include_once('config/database.php');

$sql = "SELECT user_id,user_name,user_email,user_password FROM user_tbl ORDER BY user_id DESC";
$result = $conn->query($sql);
$num = $result->num_rows;

if($num>0){

// start table
echo "<table class='table table-bordered table-hover'>";

// creating our table heading
echo "<tr>";

echo "<th class='width-30-pct'>User Name</th>";
echo "<th class='width-30-pct'>User Email</th>";
echo "<th>Password</th>";
echo "<th style='text-align:center;'>Action</th>";
echo "</tr>";

// retrieve our table contents
// fetch() is faster than fetchAll()
// http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
while ($row = $result->fetch_assoc()){

extract($row);

// creating new table row per record
echo "<tr>";
//echo "<input type='hidden' class='user-id' name='user-id' value='{$user_id}'>";
echo "{$user_id}";
echo "<td>{$user_name}</td>";
echo "<td>{$user_email}</td>";
echo "<td>{$user_password}</td>";
echo "<td style='text-align:center;' class='btn btn-primary edit-btn'>";
// add the record id here, it is used for editing and deleting products
echo "

";

// edit button
echo "
";
echo "Edit</td>";
// delete button

echo "<td style='text-align:center;' class='btn btn-primary delete-btn'>";
// add the record id here, it is used for editing and deleting products
echo "

";

echo "
";
echo "Delete</td>";

echo "</tr>";
}

//end table
echo "</table>";

}

// tell the user if no records found
else{
echo "
No records found.

";
}

?>