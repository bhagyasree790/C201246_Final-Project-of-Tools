<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Doner List</title>
    <link rel="stylesheet" href="List_style.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
  </head>
  <body>
    <div class="navbar">
        <div class="icon">
            <h2 class="logo">PraDaxa</h2>
        </div>

        <div class="menu">
            <ul>
                <li><a href="Demo.php">HOME</a></li>
                <li><a href="Demo.php#aboutt">ABOUT</a></li>
                <li><a href="Demo.php#sectionn">SERVICE</a></li>
                <li><a href="Doner_list.php">DONER LIST</a></li>
                <li><a href="reg_form.php">BE A DONER</a></li>
            </ul>
        </div>
    </div>
    <h3>All Doners Are Here</h3>
    <table>
   <tr>
    <th>Name</th>
    <th>Group</th>
    <th>Contact</th>
    <th>District</th>
  </tr>
<?php
    include("connection.php");
    error_reporting(0);
    $query = "select * from tb_users";
    $data = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);

    if($total!=0)
    {
        while($result=mysqli_fetch_assoc($data))
        {
            echo "
            <tr>
            <td>".$result['name']."</td>
            <td>".$result['donergroup']."</td>
            <td>".$result['contact']."</td>
            <td>".$result['district']."</td>
            </tr>
            ";
        }
    }
    else
    {
        echo "
        <tr>
        <th colspan='6'>no record found</th>
        </tr>
        ";
    }

?>

    </table>
  </body>
</html>