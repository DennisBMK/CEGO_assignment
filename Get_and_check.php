<?php

include('db_connect.php');

//Function that deletes all data from database
function deleteDB() {
    include('db_connect.php');
    $deletesql = "DELETE FROM users";
            
    if (mysqli_query($conn, $deletesql)) {
        echo "<p style='text-align:center'>Record deleted successfully</p>";
    } else {
        echo "<p style='text-align:center'>Error deleting record: </p>" . mysqli_error($conn);
    }
}

//Get data from Mysqli database
$sql = "SELECT * FROM users";
$result = mysqli_query($conn,$sql);

//Site used for inspiration: https://www.geeksforgeeks.org/how-to-convert-an-array-to-csv-file-in-php/
$fp = fopen('cego_users.csv', 'w');

//while loop to insert data to .csv file
while($row = mysqli_fetch_array($result)) {
    
    fputcsv($fp, $row);

}

fclose($fp);

//Count the number of inputs to validate the count later
$num_rows = mysqli_num_rows($result);

//Open .csv file to read and validate before data gets deleted
$fr = fopen('cego_users.csv', 'r');

while (($record = fgetcsv($fr)) !== FALSE) {

    $rowvalidate = mysqli_fetch_array($result);

    $i = 1;

    //Validating data to make sure it is copied correct to .csv file
    if ($rowvalidate["id"] = $record[$i]){
        //Displaying the data if it's valid to make it visible to the user
        echo "".$record[$i]."<br>";
        //$i is getting incremented by 2 because there is double the data in the .csv file on each row.
        $i += 2;
        if($rowvalidate["firstName"] = $record[$i]){
            echo "".$record[$i]."<br>";
            $i += 2;
            if($rowvalidate["lastName"] = $record[$i]){
                echo "".$record[$i]."<br>";
                $i += 2;
                if($rowvalidate["email"] = $record[$i]){
                    echo "".$record[$i]."<br>";
                    $row++;
                    echo "".$row."<br>";

                    //validating that the amount of rows that has been validated is the same as the number in the database
                    if ($row == $num_rows){
                        //Button that gives the user control on whether to delete the data or not
                        echo'
                        <p style="text-align:center">The data was verified and is now possible to delete.</p>
                        <p style="color: red;text-align:center">If you press this button the data will be deleted from the database!</p>
                        <form style="text-align:center" method="post"> 
                            <input type="submit" name="button1" class="button" value="Delete data" />
                        </form>';
                        if(array_key_exists('button1', $_POST)) { 
                            deleteDB(); 
                        }
                    }
                }
                else{
                    echo"Email wasn't verified";
                }
            }
            else{
                echo"Lastname wasn't verified";
            }
        }
        else{
            echo"Firstname wasn't verified";
        }
    }
    else{
        echo"Id wasn't verified";
    }
}

?>
