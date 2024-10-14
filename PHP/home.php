<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loop </title>
</head>

<body>
    <?php include('./components/header.php') ?>

    <?php
    require('./config.php');

    // Example query
    $sql = "SELECT * FROM Customers WHERE (Country = 'USA' OR City = 'New York') AND Address IS NOT NULL ORDER BY CustomerID DESC  LIMIT 3";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        $table = " 
        <h3> WHILE Loop </h3>           
        <table border='1'>
            <thead>
                <tr>
                <th>CustomerID</th>
                <th>CustomerName</th>
                <th>ContactName</th>
                <th>Address</th>
                <th>City</th>
                <th>PostalCode</th>
                <th>Country</th>
                </tr>
            </thead>
            </tbody>
        ";
        while ($row = $result->fetch_assoc()) {
            $table .= "
            <tr>
                <td>{$row['CustomerID']}</td>
                <td>{$row['CustomerName']}</td>
                <td>{$row['ContactName']}</td>
                <td>{$row['Address']}</td>
                <td>{$row['City']}</td>
                <td>{$row['PostalCode']}</td>
                <td>{$row['Country']}</td>
            </tr>
        ";
        }
        $table .= "
        </tbody>
    </table>";

        echo $table;
    } else {
        echo "0 results";
    }

    $result1 = $conn->query($sql);

    // Fetch all data for foreach
    $data = $result1->fetch_all(MYSQLI_ASSOC);
    $table1 = "
        <h3> FOREACH Loop </h3>
        <table border='1'>
            <thead>
                <tr>
                <th>CustomerID</th>
                <th>CustomerName</th>
                <th>ContactName</th>
                <th>Address</th>
                <th>City</th>
                <th>PostalCode</th>
                <th>Country</th>
                </tr>
            </thead>
            </tbody>
        ";
    foreach ($data as $key =>  $row) {
        $table1 .= "
            <tr>
                <td>{$row['CustomerID']}</td>
                <td>{$row['CustomerName']}</td>
                <td>{$row['ContactName']}</td>
                <td>{$row['Address']}</td>
                <td>{$row['City']}</td>
                <td>{$row['PostalCode']}</td>
                <td>{$row['Country']}</td>
            </tr>
        ";
    }

    $table1 .= "
        </tbody>
    </table>";

    echo $table1;


    $result2 = $conn->query($sql);

    // Fetch all data for foreach
    $data = $result2->fetch_all(MYSQLI_ASSOC);
    if (count($data) > 0) {
        $table3 = "
        <h3> DO WHILE Loop </h3>
        <table border='1'>
            <thead>
                <tr>
                    <th>CustomerID</th>
                    <th>CustomerName</th>
                    <th>ContactName</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>PostalCode</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
    ";
        $i = 0;
        do {
            $row = $data[$i];
            $table3 .= "
            <tr>
                <td>{$row['CustomerID']}</td>
                <td>{$row['CustomerName']}</td>
                <td>{$row['ContactName']}</td>
                <td>{$row['Address']}</td>
                <td>{$row['City']}</td>
                <td>{$row['PostalCode']}</td>
                <td>{$row['Country']}</td>
            </tr>
        ";
            $i++;
        } while ($i < count($data));

        $table3 .= "
        </tbody>
    </table>";

        // Output the table
        echo $table3;
    } else {
        echo "No data available";
    }

    $result3 = $conn->query($sql);

    // Fetch all data for foreach
    $data = $result3->fetch_all(MYSQLI_ASSOC);

    // Ensure there is at least one row of data before starting the loop
    if (count($data) > 0) {
        $table3 = "
        <h3> FOR Loop </h3>
        <table border='1'>
            <thead>
                <tr>
                    <th>CustomerID</th>
                    <th>CustomerName</th>
                    <th>ContactName</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>PostalCode</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
    ";

        // Iterate through each row using a for loop
        for ($i = 0; $i < count($data); $i++) {
            $row = $data[$i];
            $table3 .= "
            <tr>
                <td>{$row['CustomerID']}</td>
                <td>{$row['CustomerName']}</td>
                <td>{$row['ContactName']}</td>
                <td>{$row['Address']}</td>
                <td>{$row['City']}</td>
                <td>{$row['PostalCode']}</td>
                <td>{$row['Country']}</td>
            </tr>
        ";
        }

        $table3 .= "
        </tbody>
    </table>";

        // Output the table
        echo $table3;
    } else {
        echo "No data available";
    }

    // Perform queries and print out affected rows
    $conn->query("SELECT * FROM Customers");
    echo "Affected rows: " . $conn->affected_rows;

    $conn->query("DELETE FROM Customers WHERE Country = '1USA'");
    echo "Affected rows: " . $conn->affected_rows;


    // Close the connection
    $conn->close();
?>

    <?php include('./components/footer.php') ?>
</body>

</html>
