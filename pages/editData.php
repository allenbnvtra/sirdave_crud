<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <?php include '../components/header.php'?>
        
        <main class="main-container">
            <div class="form-container">
                <div class="add-form">
                    <?php
                        require_once "./../config/dbcon.php";

                        if(isset($_GET['farmerId'])) {
                            $farmerId = $_GET['farmerId'];
                            $query = "SELECT * FROM farmer WHERE farmerID = $farmerId";
                            $result = mysqli_query($conn, $query);

                            if(mysqli_num_rows($result) > 0) {
                                $farmerData = mysqli_fetch_assoc($result);
                    ?>

                    <h1>Edit Farmer</h1>
                    <form action="" method="POST">
                        <input type="hidden" name="farmerId" value="<?php echo $farmerId; ?>">
                        <label for="farmerName">Name</label><br>
                        <input type="text" value="<?php echo $farmerData['farmerName']; ?>" id="farmerName" name="farmerName"> <br><br>

                        <label for="farmerLocation">Location</label><br>
                        <input type="text" value="<?php echo $farmerData['farmerLocation']; ?>" id="farmerLocation" name="farmerLocation"> <br><br>

                        <label for="farmerContactInfo">Contact Information</label><br>
                        <input type="text" value="<?php echo $farmerData['farmerContactInfo']; ?>" id="farmerContactInfo" name="farmerContactInfo"> <br><br>

                        <label for="farmerFBPage">Facebook Page</label><br>
                        <input type="text" value="<?php echo $farmerData['farmerFBPage']; ?>" id="farmerFBPage" name="farmerFBPage"> <br><br>

                        <button type="submit" class="submit" name="updateFarmer">Update</button>
                    </form>
                    <?php
                            } else {
                                echo "No farmer found with the given ID";
                            }
                        } else {
                            echo "farmerId is not set in the URL";
                        }

                        if(isset($_POST['updateFarmer'])) {
                            $farmerName = mysqli_real_escape_string($conn, $_POST['farmerName']);
                            $farmerLocation = mysqli_real_escape_string($conn, $_POST['farmerLocation']);
                            $farmerContactInfo = mysqli_real_escape_string($conn, $_POST['farmerContactInfo']);
                            $farmerFBPage = mysqli_real_escape_string($conn, $_POST['farmerFBPage']);
                            $farmerId = $_POST['farmerId'];

                            $updateQuery = "UPDATE farmer SET farmerName='$farmerName', farmerLocation='$farmerLocation', farmerContactInfo='$farmerContactInfo', farmerFBPage='$farmerFBPage' WHERE farmerID='$farmerId'";
                            $updateResult = mysqli_query($conn, $updateQuery);

                            if($updateResult) {
                                echo "<p>Farmer updated successfully!</p>";
                            } else {
                                echo "<p>Error updating farmer: " . mysqli_error($conn) . "</p>";
                            }
                        }
                    ?>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
