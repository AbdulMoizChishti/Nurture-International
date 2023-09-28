<!DOCTYPE html>
<html>

<head>
  <title>Table with database</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
      color: #588c7e;
      font-family: monospace;
      font-size: 15px;
      text-align: justify;
    }

    th {
      background-color: #588c7e;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2
    }
  </style>
</head>

<body>
  <table>
    <tr>
      <th>ID</th>
      <th>From Country</th>
      <th>To Country</th>
      <th>Size</th>
      <th>Freight Type</th>
      <th>Email</th>
      <th>status</th>
    </tr>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "nilcl");
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT fromcountry, tocountry, Size, freighttype,ID FROM inquiry";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      // output data of each row
      while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["ID"] . "</td><td>" . $row["fromcountry"] . "</td><td>" . $row["tocountry"] . "</td><td>"
          . $row["Size"] . "</td></tr>" . $row["freighttype"] ;
      }
      echo "</table>";
    } else {
      echo "0 results";
    }
    $conn->close();
    ?>
  </table>
</body>

</html>