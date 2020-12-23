<?php

class Layout
{
    public static function header(string $header)
    {
        ob_start();
?>

        <html lang="en">

        <head>
            <title>M&M's Karczma - <?= $header ?></title>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="./../dev_dependency/css/bootstrap.min.css" />
            <link rel="stylesheet" href="./../styles/style.min.css" />
            <link rel="stylesheet" href="./../styles/styles.css" />
            <link href="./../fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
            <script src="./../scripts/jquery-3.5.1.min.js"></script>
            <script src="./../dev_dependency/js/popper.min.js"></script>
            <script src="./../dev_dependency/js/bootstrap.min.js"></script>
            <link href="./../styles/sb-admin-2.min.css" rel="stylesheet">
        </head>

        <body id="page-top">
            <div id="wrapper">
                <?= self::navbar() ?>
                <!-- Content Wrapper -->
                <div id="content-wrapper" class="d-flex flex-column">

                    <!-- Main Content -->
                    <div id="content">
                        <!-- Begin Page Content -->
                        <div class="container-fluid">

                            <!-- Page Heading -->
                            <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
                                <h1 class="h3 mb-0 text-gray-800"><?= $header ?></h1>
                            </div>


                        <?php
                        $html = ob_get_clean();
                        return $html;
                    }

                    public static function navbar()
                    {
                        ob_start();
                        ?>
                            <!-- Sidebar -->
                            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                                <!-- Sidebar - Brand -->
                                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
                                    <div class="sidebar-brand-text mx-3">M&M's<sup>Karczma</sup></div>
                                </a>

                                <!-- Divider -->
                                <hr class="sidebar-divider my-0">

                                <!-- Nav Item - Dashboard -->
                                <li class="nav-item active">
                                    <a class="nav-link" href="home.php">
                                        <i class="fas fa-fw fa-tachometer-alt"></i>
                                        <span>HOME</span></a>
                                </li>

                                <!-- Divider -->
                                <hr class="sidebar-divider">

                                <!-- Heading -->
                                <div class="sidebar-heading">
                                    Interface
                                </div>

                                <!-- Nav Item - Pages Collapse Menu -->
                                <li class="nav-item">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        <i class="fas fa-fw fa-cog"></i>
                                        <span>Invoice</span>
                                    </a>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                        <div class="bg-white py-2 collapse-inner rounded">
                                            <h6 class="collapse-header">Options:</h6>
                                            <a class="collapse-item" href="AddInvoice.php">Add Invoice</a>
                                            <a class="collapse-item" href="ShowInvoices.php">Show Invoices</a>
                                            <a class="collapse-item" href="ShowInvoicesList.php">Show Invoices As List</a>
                                            <a class="collapse-item" href="SearchInvoices.php">Search For Invoices</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                        <i class="fas fa-fw fa-cog"></i>
                                        <span>Hardware</span>
                                    </a>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                        <div class="bg-white py-2 collapse-inner rounded">
                                            <h6 class="collapse-header">Options:</h6>
                                            <a class="collapse-item" href="ShowHardware.php">Show Hardware</a>
                                            <a class="collapse-item" href="AddHardware.php">Add Hardware</a>
                                            <a class="collapse-item" href="SearchHardware.php">Search For Hardware</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                        <i class="fas fa-fw fa-cog"></i>
                                        <span>Licences</span>
                                    </a>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                        <div class="bg-white py-2 collapse-inner rounded">
                                            <h6 class="collapse-header">Options:</h6>
                                            <a class="collapse-item" href="ShowLicenses.php">Show Licences</a>
                                            <a class="collapse-item" href="AddLicenses.php">Add Licence</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                        <i class="fas fa-fw fa-cog"></i>
                                        <span>Documents</span>
                                    </a>
                                    <div id="collapseSix" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                        <div class="bg-white py-2 collapse-inner rounded">
                                            <h6 class="collapse-header">Options:</h6>
                                            <a class="collapse-item" href="ShowDoc.php">Show Documents</a>
                                            <a class="collapse-item" href="AddDoc.php">Add Documents</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                        <i class="fas fa-fw fa-cog"></i>
                                        <span>Notification</span>
                                    </a>
                                    <div id="collapseSeven" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                        <div class="bg-white py-2 collapse-inner rounded">
                                            <h6 class="collapse-header">Options:</h6>
                                            <a class="collapse-item" href="Notification.php">Examples</a>
                                        </div>
                                    </div>
                                </li>


                                <!-- Sidebar Toggler (Sidebar) -->
                                <div class="text-center d-none d-md-inline">
                                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                                </div>

                            </ul>
                        <?php
                        $html = ob_get_clean();
                        return $html;
                    }


                    public static function footer()
                    {
                        ob_start();
                        ?>
                            <footer class="sticky-footer bg-white">
                                <div class="container my-auto">
                                    <div class="copyright text-center my-auto">
                                        <span>Copyright &copy; M&M's Karczma</span></br></br>
                                        <span>Authors: Kudzia, Czarnota, Olejarczyk, Marcinkowski</span>
                                    </div>
                                </div>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </body>

        </html>
<?php
                        $html = ob_get_clean();
                        return $html;
                    }
                }