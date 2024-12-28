<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inventory Management System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" href="style.css"> <!-- Assuming you have a separate CSS file for styling -->
</head>
<body>
    <div class="menu-bar">
        <h1 class="header-section">INVENTORY MANAGEMENT SYSTEM</h1>
        <ul>
            <li><a href="#">Home</a></li>        
            <li>
                <a href="#">ITEM</a>
                <div class="dropdown-menu">
                    <ul>
                        <li><a href="#">ITEM MASTER</a></li>               
                    </ul>
                </div>
            </li>		  
            <li>
                <a href="#">SUPPLY</a>
                <div class="dropdown-menu">
                    <ul>
                        <li><a href="#">SUPPLY MASTER</a></li>                       
                    </ul>
                </div>
            </li> 		  
            <li>
                <a href="#">PURCHASE</a>
                <div class="dropdown-menu">
                    <ul>
                        <li><a href="#">PURCHASE MASTER</a></li>
                        <li><a href="#">PURCHASE DETAIL</a></li>
                        <li><a href="#">TEMP</a></li>            
                    </ul>
                </div>
            </li>		  
            <li>
                <a href="#">SALE</a>
                <div class="dropdown-menu">
                    <ul>
                        <li><a href="#">SALE MASTER</a></li>
                        <li><a href="#">SALE DETAIL</a></li>
                        <li><a href="#">TEMP SALE</a></li>            
                    </ul>
                </div>
            </li>	
        </ul>
    </div>

    <div class="body-content">&nbsp;</div>

    <?php
    include("dbconnect.php");
    if (isset($_POST['update'])) {
        $id = $_POST['Id'];
        $in = $_POST['Item_name'];
        $rt = $_POST['Rate'];

        $query = "UPDATE item_master SET Item_name='$in', Rate='$rt' WHERE Id='$id'";
        $query_run = mysqli_query($conn, $query);
        if ($query_run) {
            $status = "Record updated successfully";
            header('location: list.php'); // Redirect to the list.php page after updating
        } else {
            $status = "Record could not be updated";
        }
        echo $status;
        $conn->close();
    }
    ?>

    <form method="post" action="update.php" enctype="multipart/form-data">
        <table style="color: white; background-color: #003300; margin-left: 40%; margin-top: 10%; height: 400px; width: 350px; border-radius: 10px; border-style: groove; border-color: goldenrod; border-bottom-width: 2px; border-top-width: 10px; border: 0;">
            <tr>
                <td style="color: red; font-size: 25px;">ID</td>
                <td><input type="text" name="Id" required style="height: 28px; width: 180px;"></td>
            </tr>
            <tr>
                <td style="color: red; font-size: 25px;">ITEM NAME:</td>
                <td><input type="text" name="Item_name" required style="height: 28px; width: 180px;"></td>
            </tr>
            <tr>
                <td style="color: red; font-size: 25px;">RATE:</td>
                <td><input type="text" name="Rate" required style="height: 28px; width: 180px;"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="update" value="Update" style="color: sky; background-color: pink; height: 35px; width: 100px;"></td>
            </tr>
        </table>
    </form>
</body>
</html>
