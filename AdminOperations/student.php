<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/StudentOperations/CSS/sb-admin-2.css" rel="stylesheet">

    <!--box icons cdn-->
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <li class="nav-item active">
                <a class="nav-link" href="adminDashboard.html">
                    <i class='bx bxs-dashboard' style="color: white" ></i>
                    <span>Dashboard</span></a>
            </li>

            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            
            <li class="nav-item">
                <a class="nav-link" href="student.html">
                    <i class='bx bxs-user'></i>
                    <span>Students</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/AdminOperations/lecturer.html">
                    <i class='bx bxs-chalkboard'></i>
                    <span>Lecturer</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/AdminOperations/adminShedule.html">
                    <i class='bx bxs-calendar' ></i>
                    <span>Shedule</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Users
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="users.html" >
                    <i class='bx bxs-user-rectangle' ></i>
                    <span>User</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class='bx bx-menu'></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                

                    <!-- DataTales Example -->
                    <?php
                // Include the database connection settings
                include('config.php');

                // Create the SQL query to fetch student data
                $sql = "SELECT * FROM Student";
                $result = $conn->query($sql);
                ?>

                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Student Details</title>
                    <!-- Bootstrap CSS for styling -->
                    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
                </head>
                <body>

                <div class="container mt-4">
                    <h2 class="text-center">Student Details</h2>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Student ID</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Email</th>
                                <th>Registration Date</th>
                                <th>Address</th>
                                <th>Telephone</th>
                                <th>Password</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Check if the query returned any rows
                            if ($result->num_rows > 0) {
                                // Loop through the results and output the data in table rows
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr>
                                            <td>" . $row['studentID'] . "</td>
                                            <td>" . $row['studentName'] . "</td>
                                            <td>" . $row['studentGender'] . "</td>
                                            <td>" . $row['studentEmail'] . "</td>
                                            <td>" . $row['registrationDate'] . "</td>
                                            <td>" . $row['studentAddress'] . "</td>
                                            <td>" . $row['studentTelephone'] . "</td>
                                            <td>************</td>
                                            <td>
                                                <button class='btn btn-primary btn-sm' data-toggle='modal' data-target='#editModal'>Edit</button> 
                                                <button class='btn btn-danger btn-sm'>Delete</button>
                                            </td>
                                        </tr>";
                                }
                            } else {
                                echo "<tr><td colspan='9' class='text-center'>No data found</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

                <!-- Include Bootstrap JS and dependencies -->
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

                </body>
                </html>

                <?php
                // Close the database connection
                $conn->close();
                ?>  
                <!-- End of Topbar -->

            <!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Student Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editForm">
                    <div class="form-group">
                        <label for="editName">Registration Id</label>
                        <input type="text" class="form-control" id="editName"required>
                    </div>
                    <div class="form-group">
                        <label for="editPosition">Full Name</label>
                        <input type="text" class="form-control" id="editPosition"required>
                    </div>
                    <div class="form-group">
                        <label for="editGender">Gender</label>
                        <select class="form-control" id="editGender" required>
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="editAge">Email</label>
                        <input type="email" class="form-control" id="editAge"required>
                    </div>
                    <div class="form-group">
                        <label for="editStart">Registration Date</label>
                        <input type="date" class="form-control" id="editStart"required>
                    </div>
                    <div class="form-group">
                        <label for="editSalary">Address</label>
                        <input type="text" class="form-control" id="editSalary"required>
                    </div>
                    <div class="form-group">
                        <label for="editAge">Tel</label>
                        <input type="tel" class="form-control" id="editAge"required>
                    </div>
                    <div class="form-group">
                        <label for="editPassword">Password</label>
                        <input type="password" class="form-control" id="editAge"required>
                    </div>
                    <button type="submit" class="btn btn-primary" id="saveChanges">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Add New Student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="addForm">
                    <div class="form-group">
                        <label for="editName">Registration Id</label>
                        <input type="text" class="form-control" id="editName"required>
                    </div>
                    <div class="form-group">
                        <label for="editPosition">Full Name</label>
                        <input type="text" class="form-control" id="editPosition"required>
                    </div>
                    <div class="form-group">
                        <label for="editGender">Gender</label>
                        <select class="form-control" id="editGender" required>
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="editAge">Email</label>
                        <input type="email" class="form-control" id="editAge"required>
                    </div>
                    <div class="form-group">
                        <label for="editStart">Registration Date</label>
                        <input type="date" class="form-control" id="editStart"required>
                    </div>
                    <div class="form-group">
                        <label for="editSalary">Address</label>
                        <input type="text" class="form-control" id="editSalary"required>
                    </div>
                    <div class="form-group">
                        <label for="editAge">Tel</label>
                        <input type="tel" class="form-control" id="editAge"required>
                    </div>
                    <div class="form-group">
                        <label for="editPassword">Password</label>
                        <input type="password" class="form-control" id="editAge"required>
                    </div>
                    <button type="submit" class="btn btn-primary" id="saveChanges">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>

   
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/AdminOperations/adminlogin.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/StudentOperations/JS/jquery.min.js"></script>
    <script src="/StudentOperations/JS/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/StudentOperations/JS/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/StudentOperations/JS/sb-admin-2.min.js"></script>


</body>

</html>