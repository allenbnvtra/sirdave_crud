<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <div class="container">
        <?php include './components/header.php'?>
        <main class="main-container">
            <div class="form-container">
                <div class="add-form">
                    <h1>Add Farmer</h1>
                    <form action="./function/function.php" method="POST">
                        <label for="farmerName">Name</label><br>
                        <input type="text" id="farmerName" name="farmerName" required> <br><br>

                        <label for="farmerLocation">Location</label><br>
                        <input type="text" id="farmerLocation" name="farmerLocation" required> <br><br>

                        <label for="farmerContactInfo">Contact Information</label><br>
                        <input type="text" id="farmerContactInfo" name="farmerContactInfo" required> <br><br>

                        <label for="farmerFBPage">Facebook Page</label><br>
                        <input type="text" id="farmerFBPage" name="farmerFBPage" required> <br><br>

                        <button class="submit" name="addFarmer" id="addFarmer">Submit</button>
                    </form>
                </div>
            </div>
        </main>
     </div>
</body>
</html>