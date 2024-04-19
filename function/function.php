<?php 
    require "./../config/dbcon.php";

    if(isset($_POST['addFarmer'])){
        $farmerName = mysqli_real_escape_string($conn, $_POST['farmerName']);
        $farmerLocation = mysqli_real_escape_string($conn, $_POST['farmerLocation']);
        $farmerContactInfo = mysqli_real_escape_string($conn, $_POST['farmerContactInfo']);
        $farmerFBPage = mysqli_real_escape_string($conn, $_POST['farmerFBPage']);
        
        if($farmerName != '' || $farmerLocation != '' || $farmerContactInfo != '' || $farmerFBPage != ''){
            $query = "INSERT INTO farmer (farmerName, farmerLocation, farmerContactInfo, farmerFBPage) VALUES ('$farmerName', '$farmerLocation', '$farmerContactInfo', '$farmerFBPage')";
            $result = mysqli_query($conn, $query);

            if($result){
                header("Location: /avb_bsit2d_it303_olclass");
                exit(0);
            }
        }
    } elseif(isset($_POST['updateFarmer'])) {
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
