<!DOCTYPE html>
<html>
<head>
    <title>Inventory Management System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" href="style.css">
    <style>
        table {
            color: white;
            border-radius: 20px;
            margin-top: 15%;
            margin-left: 40%;
        }
        #button {
            background-color: green;
            color: white;
            height: 32px;
            width: 125px;
            border-radius: 25px;
            font-size: 16px;
        }
        body {
            background: linear-gradient(red, blue);
        }
    </style>
</head>
<body>
    <div class="menu-bar">
        <h1 class="header-section">INVENTORY MANAGEMENT SYSTEM</h1>
        <ul>
            <li><a href="p1.php">Home</a></li>
            <li>
                <a href="#">ITEM</a>
                <div class="dropdown-menu">
                    <ul>
                        <li><a href="list.php">ITEM MASTER</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="#">SUPPLY</a>
                <div class="dropdown-menu">
                    <ul>
                        <li><a href="slist.php">SUPPLY MASTER</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="#">PURCHASE</a>
                <div class="dropdown-menu">
                    <ul>
                        <li><a href="pmlist.php">PURCHASE MASTER</a></li>
                        <li><a href="pdlist.php">PURCHASE DETAIL</a></li>
                        <li><a href="temp.php">TEMP</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="#">SALE</a>
                <div class="dropdown-menu">
                    <ul>
                        <li><a href="salemlist.php">SALE MASTER</a></li>
                        <li><a href="saledlist.php">SALE DETAIL</a></li>
                        <li><a href="saletemp.php">TEMP SALE</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>

    <?php
    include("dbconnect.php");
    if (isset($_POST['update'])) {
        $sm_id = $_POST['sm_id'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $mobile = $_POST['mobile']; 
    
        $query = "UPDATE supply_master SET name='$name', address='$address', mobile='$mobile' WHERE sm_id='$sm_id'";
        $query_run = mysqli_query($conn, $query);
        if ($query_run) {
            $status = "Record updated successfully";
            header('location: slist.php'); // Redirect to the slist.php page after updating
        } else {
            $status = "Record could not be updated";
        }
        echo $status;
        $conn->close();
    }
    ?>    
     
    <form method="post" action="smedit.php" enctype="multipart/form-data">
        <table border="0" bgcolor="black" align="center" cellspacing="20">
            <tr>
                <td style="color: red; font-size: 25;">ID:</td>
                <td><input type="text"   name="sm_id" required></td>
            </tr>
            <tr>
                <td style="color: red; font-size: 25;">NAME:</td>
                <td><input type="text"   name="name" required></td>
            </tr>
            <tr>
                <td style="color: red; font-size: 25;">ADDRESS:</td>
                <td><input type="text"   name="address" required></td>
            </tr>
            <tr>
                <td style="color: red; font-size: 25;">MOBILE:</td>
                <td><input type="text"   name="mobile" required></td>
            </tr>
            <tr>
                <td><input type="submit" name="update" value="Update" id="button"></td>
            </tr>
        </table>
    </form>
</body>
</html>
