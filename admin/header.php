
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <title>Admin || Dashboard</title>
    </head>
<body> 
    <header>
        <div class="accse bg-first">
            <!--Top Navbar-->
                <div class="navbar">
                    <div class="brand-name">
                        <div class="m-2" >
                            <a href="../index.php?class=Laptop"><img src="../photos/design/logo.png" alt="Logo"></a>
                        </div>
                    </div>
                    <div class="burger mx-3">
                        <button class="btn burger1">
                            <div class="line1"></div>
                            <div class="line2"></div>
                            <div class="line3"></div>
                        </button>
                    </div>
                    <div class="admin-detail d-flex mx-3">
                        <div class="text-center">
                            <h5><?php echo $_SESSION['fullname']; ?></h5>
                            <div class="location">
                                    <span><i class="fas fa-map-marker-alt"></i></span>
                                    <span><?php echo $_SESSION['address']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            <!--Top Navbar-->  
        </div>
    </header>