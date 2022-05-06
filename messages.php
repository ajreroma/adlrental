<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="style.css" />
    <title>Messages</title>
</head>
<body>
    <div class="d-flex" id="wrapper">
<?php include 'sidebar.php';?>
   <!-- Page Content -->
<div id="page-content-wrapper">
<?php include 'navbar.php';?>
<div class="container-fluid px-4">
<h3 class="fs-4 mb-3">Messages</h3>
<div class="row my-5">
                    
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Email Address</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="Full Name: " scope="col">AJ Reroma</th>
                                    <td data-label="Email Address: ">ajreroma@gmail.com</td>
                                    <td data-label="Message: ">how much to rent?</td>
                                    <td data-label="Action: ">View</td>
                                </tr>
                                
                            </tbody>
                        </table>
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