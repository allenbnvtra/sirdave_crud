<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer Datas</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <?php include '../components/header.php'?>
        
        <main class="main-container">
            <table>
                <thead>
                    <th class="max-w">Name</th>
                    <th class="max-w">Location</th>
                    <th class="max-w">Contact Information</th>
                    <th class="max-w">Facebook Page</th>
                    <th>Action</th>
                </thead>

                <tbody>

                <?php
                    include_once "./../config/dbcon.php";

                    $query = "SELECT * from farmer";
                    $result = mysqli_query($conn, $query);

                    if($result) {
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<tr>";
                            echo "<td>".$row['farmerName']."</td>";
                            echo "<td>".$row['farmerLocation']."</td>";
                            echo "<td>".$row['farmerContactInfo']."</td>";
                            echo "<td>".$row['farmerFBPage']."</td>";
                            echo "<td class='action-button'>";
                            echo "<button class='submit'><a href='/avb_bsit2d_it303_olclass/pages/editData.php?farmerId=".$row['farmerID']."'>Update</a></button>";
                            echo "<button class='delete'>Delete</button>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    }
                ?>
                </tbody>
            </table>
        </main>
    </div>
</body>
</html>