<?php
    session_start();
    if (!$_SESSION['isLogin']) {
        header("location: ../page/loginPage.php");
    }else {
        include('../../db.php');
    }
    echo'
        <!Doctype html>
        <html lang="en">

        <head>
            <!-- Required meta tags -->
            <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
        EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
            <link rel="stylesheet" href="./style.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/css/font-awesome.min.css">
            <script src="https://kit.fontawesome.com/b74e10e4ef.js" crossorigin="anonymous"></script>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
            <title>Dashboard!</title>
            <style>
                * {
                    font-family: "Poppins";
                }

                .side-bar {
                    width: 260px;
                    background-color: SaddleBrown;
                    min-height: 100vh;
                }

                a {
                    padding-left: 10px;
                    font-size: 13px;
                    text-decoration: none;
                    color: white;
                }

                .menu i {
                    padding-left: 20px;
                }

                .menu .content-menu {
                    padding: 9px 7px;
                }

                .isActive {
                    background-color: #071853 !important;
                    border-right: 8px solid #010E2F;
                }

                i {
                    color: white;
                }

                th, td {
                    vertical-align: middle;
                    text-align: center;
                }
            </style>
        </head>

        <body>
            <aside>
                <div class="d-flex">
                    <div class="side-bar">
                        <h2 class="text-light text-center pt-2">Library</h2>
                        <hr>
                        <div class="menu">
                            <div class="content-menu">
                                <i class="fa fa-book"></i>
                                <a href="./listBukuPage.php" style="font-weight:600">List Buku</a>
                            </div>
                            <div class="content-menu">
                                <i class="bi bi-newspaper"></i>
                                <a href="./listLokerPage.php" style="font-weight:600">List LoKer</a>
                            </div>
                            <div class="content-menu">
                                <i class="bi bi-person-rolodex"></i>
                                <a href="./listPeminjamPage.php" style="font-weight:600">List Peminjam</a>
                            </div>
                            <div class="content-menu ">
                                <i class="fa fa-key"></i>
                                <a href="./editPasswordPage.php" style="font-weight:600">Ganti Password</a>
                            </div>
                            <div class="content-menu ">
                                <i class="fa fa-comments"></i>
                                <a href="./confirmFeedbackPage.php" style="font-weight:600">Confirm Feedback</a>
                             </div>
                            <div class="content-menu ">
                                <i class="fa fa-sign-out"></i>
                                <a href="../../process/logoutProcess.php" style="font-weight:600">Logout</a>
                            </div>
                            <hr>
                        </div>
                    </div> '
?>