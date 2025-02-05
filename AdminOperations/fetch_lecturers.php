<?php
// Include the database connection settings
include('config.php');

// Create the SQL query to fetch lecturer data
$sql = "SELECT * FROM Lecturer";
$result = $conn->query($sql);

// Check if the query returned any rows
if ($result->num_rows > 0) {
    // Loop through the results and output the data in table rows
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['lecturerID'] . "</td>
                <td>" . $row['lecturerName'] . "</td>
                <td>" . $row['lecturerGender'] . "</td>
                <td>" . $row['lecturerEmail'] . "</td>
                <td>" . $row['lecturerContact'] . "</td>
                <td>" . $row['lecturerCourse'] . "</td>
                <td><button class='btn btn-primary btn-sm' data-toggle='modal' data-target='#editModal'>Edit</button>
                    <button class='btn btn-danger btn-sm'>Delete</button></td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='7'>No data found</td></tr>";
}

// Close the database connection
$conn->close();
?>
