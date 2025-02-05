<?php ob_start(); // Starts output buffering ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php session_start(); // Starts the session ?>
    <div class="container-main">
        <?php include "component/side-bar.php"; // Includes the sidebar component ?>
        <div id="right-side">
            <?php
            include "component/header.php"; // Includes the header component
            include "component/title.php";  // Includes the title component
            ?>
            <div class="display-info">
                <div class="data">
                    <?php
                    // Check if the user is logged in as admin
                    if (isset($_SESSION["username_admin"])) {
                        // Check if a page ID is provided via GET request
                        if (isset($_GET['pid'])) {
                            $id = $_GET['pid'];

                            // Include appropriate component based on page ID and action (add-new or update)
                            if ($id == '1' && isset($_GET['add-new'])) {
                                include("component/form/category.php");
                            } else if ($id == '2' && isset($_GET['add-new'])) {
                                include("component/form/product.php");
                            } else if ($id == '3' && isset($_GET['add-new'])) {
                                include("component/form/brand.php");
                            } else if ($id == '4' && isset($_GET['add-new'])) {
                                include("component/form/member.php");
                            } else if ($id == '1' && isset($_GET['update'])) {
                                include("component/modal-update/category.php");
                            } else if ($id == '2' && isset($_GET['update'])) {
                                include("component/modal-update/product.php");
                            } else if ($id == '3' && isset($_GET['update'])) {
                                include("component/modal-update/brand.php");
                            } else if ($id == '5' && isset($_GET['update'])) {
                                include("component/modal-update/customer.php");
                            } else {
                                // Default component inclusion based on the page ID
                                switch ($id) {
                                    case '1':
                                        include("component/category.php");
                                        break;
                                    case '2':
                                        include("component/product.php");
                                        break;
                                    case '3':
                                        include("component/brand.php");
                                        break;
                                    case '4':
                                        include("component/member.php");
                                        break;
                                    case '5':
                                        include("component/customer.php");
                                        break;
                                    case '6':
                                        include("component/order.php");
                                        break;
                                    case '7':
                                        include("component/revenue.php");
                                        break;
                                    case '8':
                                        include("component/profile.php");
                                        break;
                                    default:
                                        include("component/nova.php"); // Default case if no valid ID is provided
                                        break;
                                }
                            }
                        }
                    } else {
                        // Redirect to login page if not logged in
                        header("location: login.php");
                        exit();
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

<style>
    body {
        margin: 0;
        font-family: "Inter", sans-serif;
    }

    .container-main {
        display: flex;
        width: 100%;
        height: 100vh;
    }

    #right-side {
        width: 85%;
        position: absolute;
        top: 0;
        right: 0;
    }

    .display-info {
        height: 87vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .data {
        width: 97%;
        height: 95%;
    }
</style>

</html>
<?php ob_end_flush(); // Ends output buffering and flushes output ?>
