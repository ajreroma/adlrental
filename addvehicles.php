<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="style.css" />
    <title>Add Vehicles</title>
</head>
<body>
    <div class="d-flex" id="wrapper">
<?php include 'sidebar.php';?>
   <!-- Page Content -->
<div id="page-content-wrapper">
<?php include 'navbar.php';?>
<div class="container-fluid px-8">
<div class="row my-6">

                    <h3 class="fs-4 mb-1">Add Vehicles</h3>
                    <div class="form-container">
                        <form method="POST">
                
                <div class="input-name">
                <i class="fas fa-car"></i>
                    <input type="text" placeholder="Brand" name="brand" required class="text-name">
                </div>
                <div class="input-name">
                <i class="fas fa-car"></i>
                    <input type="text" placeholder="Model" name="model" required class="text-name">
                </div>
                <div class="input-name">
                <i class="fas fa-calendar-alt"></i>
                    <input type="text" placeholder="Year" name="year" required class="text-name">
                </div>
                <div class="input-name">
                <i class="fas fa-car-battery"></i>
                    <input type="text" placeholder="Displacement" name="displacement" required class="text-name">
                </div>
                <div class="input-name">
                <i class="fas fa-cogs"></i> 
                    <input type="text" placeholder="Transmission" name="transmission" required class="text-name">
                </div>
                <div class="input-name">
                <i class="fas fa-gas-pump"></i>
                    <input type="text" placeholder="Fuel Type" name="fuel" class="text-name">
                </div>
                <div class="input-name">
                <i class="far fa-sun"></i>
                    <input type="text" placeholder="Rate per day" name="rate" class="text-name">
                </div>
                <div class="input-name">
                <i class="fas fa-image"></i>
                    <input type="file" placeholder="Image 1" name="img1" class="text-name">
                </div>
                <div class="input-name">
                <i class="fas fa-image"></i>
                    <input type="file" placeholder="Image 2" name="img2" class="text-name">
                </div>
                <div class="input-name">
                <i class="fas fa-image"></i>
                    <input type="file" placeholder="Image 3" name="img3" class="text-name">
                </div>
                <div class="input-name">
                <i class="fas fa-image"></i>
                    <input type="file" placeholder="Image 4" name="img4" class="text-name">
                </div>
                <div class="input-name">
                    <input class="button" type="submit" name="add" value="Add Vehicle">
                </div>
            </form>
        </div>

                </div>
 
        </div>
    </div>
</div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>