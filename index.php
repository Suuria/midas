<?php
/**
 * Created by PhpStorm.
 * User: alexander.naumann
 * Date: 19.02.2016
 * Time: 09:24
 */

<<<<<<< HEAD
include "head.php";
include "config/mysql.php";

$sql = "Select * from buchung";
$data = mysqli_query($conn, $sql);


echo '<body><table border="1">';
if (mysqli_num_rows($data) > 0) {

    while($row = mysqli_fetch_assoc($data)) {
        echo '<tr>';
        echo '<td>'.$row["name"].'</td>';
        echo  '<td>'.$row["ammount"].'</td>';
        echo '</tr>';
    }
    $data = mysqli_query($conn, "Select sum(ammount) from buchung");
    while($row = mysqli_fetch_assoc($data)) {
        echo '<tr><td>' . $row["sum(ammount)"] . '</td></tr>';
    }
} else {
    echo "0 results";
}

echo "</table></body>";
include "footer.php";
=======
echo "hello world";
echo "test";
>>>>>>> origin/master
