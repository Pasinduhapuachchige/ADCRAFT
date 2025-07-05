<?php
include 'Hello/connect.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud op</title>
   <link rel="stylesheet" href="Hello/tableANC.css">
  
   
</head>
<body>
<table class="table">
    <thead>
      <tr>
        
        <th>Title</th>
        <th>Content</th>
        <th>Date</th>
        
      </tr>
    </thead>
    <tbody>

    <?php

$sql = "SELECT * FROM announcement";
$result = mysqli_query($con, $sql);

if ($result) {
    

    while ($row = mysqli_fetch_assoc($result)) {
        $title = $row['Title'];
        $content = $row['Content'];
        $date = $row['Date'];

        echo '<tr>
                <td>'.$title.'</td>
                <td>'.$content.'</td>
                <td>'.$date.'</td>
            </tr>';
    }

    
}

?>

    </tbody>

</table>

</body>
</html>



