<?php
// Include the database connection settings
include('config.php');

// Create the SQL query to fetch student data
$sql = "SELECT * FROM Student";
$result = $conn->query($sql);

// Check if the query returned any rows
if ($result->num_rows > 0) {
    // Loop through the results and output the data in table rows
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['studentID'] . "</td>
                <td>" . $row['studentName'] . "</td>
                <td>" . $row['studentGender'] . "</td>
                <td>" . $row['studentEmail'] . "</td>
                <td>" . $row['registrationDate'] . "</td>
                <td>" . $row['studentAddress'] . "</td>
                <td>" . $row['studentTelephone'] . "</td>
                <td>************</td>
                <td><button class='btn btn-primary btn-sm' data-toggle='modal' data-target='#editModal'>Edit</button> 
                    <button class='btn btn-danger btn-sm'>Delete</button></td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='9'>No data found</td></tr>";
}

// Close the database connection
$conn->close();
?>
