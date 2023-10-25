<?php include "dbConnection.php";

 $query = 'SELECT * FROM  myGuest';
 $result = mysqli_query($connection,$query);

 //mysqli_fetch_row() only fetch first row from where its called
//  $row = mysqli_fetch_row($result);
 //will get only first row
// print_r ($row);
echo '<br/>';
//while theres other row
 //mysqli_fetch_row()..normal array
 // mysqli_fetch_assoc()... associate array
while ( $row = mysqli_fetch_assoc($result)) {
//print row array
    print_r($row);
    //loop through the row array
    foreach ($row as $value) {
    print_r($value." ");
};
echo '<br/>';
//you can filter by specificing condition as you read through data in database
//SELECT column_name(s) FROM table_name WHERE column_name operator value 
};
?>