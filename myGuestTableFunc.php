<?php include"dbConnection.php"; ?>
<?php 

//select and show id 
function showSelectID (){
global $connection;
    $query = 'SELECT * FROM myGuest';
$result = mysqli_query($connection, $query);

   while($row = mysqli_fetch_assoc($result)){
        //fetching all customerID value
 $id = $row['customerID'];
//printing dynamic select value base on customerID in DB
echo "<option value='$id'>$id</option>";

    }  
}

//update function
function UpdateCustomerInfo() {
    global $connection;
$username = $_POST['username'];
$password = $_POST['password'];

//AAlways protect input fields from sql injection 
$username = mysqli_real_escape_string($connection,$username);
$password = mysqli_real_escape_string($connection,$password);

$id = $_POST['id'];

$query = "UPDATE myGuest ";
$query .= "SET username = '$username', password = '$password' " ;
$query .= "WHERE customerID = $id";

$result = mysqli_query($connection,$query);
if (!$result) {
    die('Cannot update: '. mysqli_error($connection));
};
echo '<h3>Customer info updated successfully</h3>';
}


// Delete function
function DeleteTableRow()
{
    global $connection;
     if (isset($_POST['id']) && !empty($_POST['id'])) {
    $id = $_POST['id'];

    $query1 = "SELECT * FROM myGuest WHERE customerID = $id";
    $checkResult = mysqli_query($connection, $query1);

    if ($checkResult !== false) {
        $rowCount = mysqli_num_rows($checkResult);

        if ($rowCount > 0) {
            $query = "DELETE FROM myGuest WHERE customerID = $id";
            $result = mysqli_query($connection, $query);

            if (!$result) {
                die('Cannot delete: ' . mysqli_error($connection));
            };

            echo '<h3>Customer info deleted successfully</h3>';
          }else{
            echo '<h3>Customer with ID ' . $id . ' does not exist.</h3>';
  };
}else {
        die('Cannot check for existence: ' . mysqli_error($connection));
    };
}else {
    echo '<h3>Invalid ID. Please provide a valid customer ID.</h3>';
}

}

?>