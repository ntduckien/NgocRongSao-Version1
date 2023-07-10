<?php
require_once 'set.php';
include 'connect.php';
?>

<head>
    <script src="https://kit.fontawesome.com/c79383dd6c.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="">
    <title>DragonKing - Máy Chủ Ngọc Rồng Online</title>
    <meta name="description"
        content="Website chính thức của DragonKing - Máy Chủ Ngọc Rồng Online Online – Game Bay Vien Ngoc Rong Mobile nhập vai trực tuyến trên máy tính và điện thoại về Game 7 Viên Ngọc Rồng hấp dẫn nhất hiện nay!">
    <meta name="keywords"
        content="DragonKing - Máy Chủ Ngọc Rồng Online Online,ngoc rong mobile, game ngoc rong, game 7 vien ngoc rong, game bay vien ngoc rong">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title"
        content="Website chính thức của DragonKing - Máy Chủ Ngọc Rồng Online Online – Game Bay Vien Ngoc Rong Mobile nhập vai trực tuyến trên máy tính và điện thoại về Game 7 Viên Ngọc Rồng hấp dẫn nhất hiện nay!">
    <meta name="twitter:description"
        content="Website chính thức của DragonKing - Máy Chủ Ngọc Rồng Online Online – Game Bay Vien Ngoc Rong Mobile nhập vai trực tuyến trên máy tính và điện thoại về Game 7 Viên Ngọc Rồng hấp dẫn nhất hiện nay!">
    <meta name="twitter:image" content="../image/logo.png">
    <meta name="twitter:image:width" content="200">
    <meta name="twitter:image:height" content="200">
    <link rel="shortcut icon" href="../image/logo.png" type="image/x-icon">
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <script src="../assets/jquery/jquery.min.js"></script>
    <script src="../assets/notify/notify.js"></script>
    <link href="../assets/main.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../image/logo.png">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdn.rawgit.com/daneden/animate.css/v3.1.0/animate.min.css">
    <script src='https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js'></script>
    <link rel="stylesheet" href="https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://kit.fontawesome.com/c79383dd6c.js" crossorigin="anonymous"></script>
    <script src="http://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">
    <script>
        var login = false
    </script>
</head>

<body>
    <div class="container" style="border-radius: 15px; background: #ffaf4c; padding: 0px">
        <div class="container" style="background-color: #e67e22; border-radius: 15px 15px 0px 0px">
            <div class="row bg pb-3 pt-2">
                <div class="col">
                    <div class="text-center mb-2">
                        <a href="../dien-dan"><img class="rounded" src="../image/logo.png" id="logo"></a>
                    </div>
                    <div class="text-center pt-2">
                        <div style="display: inline-block;">
                            <a href="../download/NroLight.apk"> <img class="icon-download" src="../image/android.png">
                            </a><br>
                            <small class="text-dark">
                                <?php echo $_android; ?>
                            </small>
                        </div>
                        <div style="display: inline-block;">
                            <a href="../download/NroLight.rar"><img class="icon-download" src="../image/pc.png">
                            </a><br>
                            <small class="text-dark">
                                <?php echo $_windows; ?>
                            </small>
                        </div>
                        <div style="display: inline-block;">
                            <a href="../download/NroLight.ipa"><img class="icon-download" src="../image/ip.png"></a><br>
                            <small class="text-dark">
                                <?php echo $_iphone; ?>
                            </small>
                        </div>
                        <div style="display: inline-block;">
                            <a href="../download/NroLight.ipa"><img class="icon-download"
                                    src="../image/jar.png"></a><br>
                            <small class="text-dark">
                                <?php echo $_java; ?>
                            </small>
                        </div>
                        <div>
                            <img height="12" src="image/12.png" style="vertical-align: middle;">
                            <small style="font-size: 10px" id="hour3">Dành cho người chơi trên 12 tuổi. Chơi quá 180
                                phút mỗi ngày sẽ hại sức khỏe.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if ($_login === null) { ?>
            <div class="container color-main2 pb-2">
                <div class="text-center">
                    <div class="row">
                        <div class="col pr-0"> <a href="../dang-nhap" class="btn p-1 btn-header">Đăng
                                nhập</a> </div>
                        <div class="col"> <a href="../dang-ky" class="btn p-1 btn-header-active">Đăng
                                ký</a> </div>
                    </div>
                </div>
            </div>
        <?php } else {
            if ($_admin == 1) { // Kiểm tra quyền truy cập
                ?>
                <div class="container color-main2 pb-2">
                    <div class="text-center">
                        <div class="row">
                            <div class="col pr-0"> <a href="../dien-dan" class="btn p-1 btn-header">Thảo luận</a> </div>
                            <div class="col pr-0"> <a href="../dien-dan" class="btn p-1 btn-header">Báo lỗi</a> </div>
                            <div class="col"> <a href="../dien-dan" class="btn p-1 btn-header">Góp ý</a> </div>
                        </div>
                    </div>
                </div>
                <div class="container color-main pt-3 pb-4">
                    <div class="text-center">
                        <?php
                        $query = "SELECT player.name, player.gender, account.admin FROM player LEFT JOIN account ON player.account_id = account.id";
                        $result = mysqli_query($conn, $query);
                        $prev_name = "";

                        while ($row = mysqli_fetch_assoc($result)) {
                            // Check if the username is submitted via POST method
                            if (isset($_POST['username'])) {
                                $_username = $_POST['username'];
                            }
                            $sql = "SELECT player.name, player.gender, account.admin, account.tichdiem FROM player INNER JOIN account ON account.id = player.account_id WHERE account.username='$_username'";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($result);

                            // Hiển thị ảnh đại diện và tên người dùng
                            if (isset($row['gender'])) {
                                $gender = $row['gender'];
                                $tichdiem = $row['tichdiem'];
                                $admin = $row['admin'];
                                $avatar_url = "";

                                if ($admin == 1) {
                                    if ($gender == 1) {
                                        if (date('m') == 12 && date('d') == 25) {
                                            $avatar_url = "../image/avatar18.png";
                                        } else {
                                            $avatar_url = "../image/avatar10.png";
                                        }
                                    } elseif ($gender == 2) {
                                        if (date('m') == 12 && date('d') == 25) {
                                            $avatar_url = "../image/avatar19.png";
                                        } else {
                                            $avatar_url = "../image/avatar11.png";
                                        }
                                    } else {
                                        if (date('m') == 12 && date('d') == 25) {
                                            $avatar_url = "../image/avatar20.png";
                                        } else {
                                            $avatar_url = "../image/avatar12.png";
                                        }
                                    }
                                } else {
                                    if ($gender == 1) {
                                        if (date('m') == 12 && date('d') == 25) {
                                            $avatar_url = "../image/avatar15.png";
                                        } else {
                                            $avatar_url = "../image/avatar1.png";
                                        }
                                    } elseif ($gender == 2) {
                                        if (date('m') == 12 && date('d') == 25) {
                                            $avatar_url = "../image/avatar16.png";
                                        } else {
                                            $avatar_url = "../image/avatar2.png";
                                        }
                                    } else {
                                        if (date('m') == 12 && date('d') == 25) {
                                            $avatar_url = "../image/avatar17.png";
                                        } else {
                                            $avatar_url = "../image/avatar0.png";
                                        }
                                    }
                                }

                                $color = "";
                                if ($tichdiem >= 500) {
                                    $danh_hieu = "(Chuyên Gia)";
                                    $color = "#800000"; // sets color to red
                                } elseif ($tichdiem >= 300) {
                                    $danh_hieu = "(Hỏi Đáp)";
                                    $color = "#A0522D"; // sets color to yellow
                                } elseif ($tichdiem >= 200) {
                                    $danh_hieu = "(Người Bắt Chuyện)";
                                    $color = "#6A5ACD";
                                } else {
                                    $danh_hieu = "";
                                    $color = "";
                                }

                                if (isset($row['admin']) && $row['admin'] == 1) {
                                    $name_str = '<span class="text-danger font-weight-bold">' . $row['name'] . '</span><br>';
                                    $name_str .= '<span class="text-danger pt-1 mb-0">(Admin)</span>';
                                } else {
                                    $name_str = '<p class="text-main font-weight-bold pt-1 mb-0">' . $row['name'] . '</p>';
                                    if ($danh_hieu !== "") {
                                        $name_str .= '<div style="font-size: 9px; padding-top: 5px"><span style="color:' . $color . ' !important">' . $danh_hieu . '</span></div>';
                                    }
                                }

                                echo '<div><img src="' . $avatar_url . '" alt="Avatar" style="width: 50px"></div>';
                                echo $name_str;
                            }
                        }
                        ?>
                        <p class="text-main font-weight-bold pt-1 mb-0">
                        </p>
                        <p class="pt-0">Số dư:
                            <?php echo number_format($_coin, 0, ',') ?> VNĐ
                        </p>
                    </div>
                    <div class="text-center mb-2">

                        <a class="btn btn-main btn-sm" href="../nap-so-du">Nạp số dư</a>
                        <a class="btn btn-main btn-sm" href="../pass2">Mật khẩu cấp 2</a>
                        <a class="btn btn-main btn-sm" href="../doi-thoi-vang">Đổi thỏi vàng</a>
                    </div>
                    <div class="text-center">
                        <a class="btn btn-main btn-sm" href="../doi-mat-khau">Đổi mật khẩu</a>

                        <a class="btn btn-main btn-sm" href="../logout">Thoát</a>
                    </div>
                </div>
            <?php } else { ?>
                <div class="container color-main2 pb-2">
                    <div class="text-center">
                        <div class="row">
                            <div class="col pr-0"> <a href="../dien-dan" class="btn p-1 btn-header">Thảo luận</a> </div>
                            <div class="col pr-0"> <a href="../dien-dan" class="btn p-1 btn-header">Báo lỗi</a> </div>
                            <div class="col"> <a href="../dien-dan" class="btn p-1 btn-header">Góp ý</a> </div>
                        </div>
                    </div>
                </div>
                <div class="container color-main pt-3 pb-4">
                    <div class="text-center">
                        <?php
                        $query = "SELECT player.name, player.gender, account.admin FROM player LEFT JOIN account ON player.account_id = account.id";
                        $result = mysqli_query($conn, $query);
                        $prev_name = "";

                        while ($row = mysqli_fetch_assoc($result)) {
                            // Check if the username is submitted via POST method
                            if (isset($_POST['username'])) {
                                $_username = $_POST['username'];
                            }
                            $sql = "SELECT player.name, player.gender, account.admin, account.tichdiem FROM player INNER JOIN account ON account.id = player.account_id WHERE account.username='$_username'";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($result);

                            // Hiển thị ảnh đại diện và tên người dùng
                            if (isset($row['gender'])) {
                                $gender = $row['gender'];
                                $tichdiem = $row['tichdiem'];
                                $admin = $row['admin'];
                                $avatar_url = "";

                                if ($admin == 1) {
                                    if ($gender == 1) {
                                        if (date('m') == 12 && date('d') == 25) {
                                            $avatar_url = "../image/avatar18.png";
                                        } else {
                                            $avatar_url = "../image/avatar10.png";
                                        }
                                    } elseif ($gender == 2) {
                                        if (date('m') == 12 && date('d') == 25) {
                                            $avatar_url = "../image/avatar19.png";
                                        } else {
                                            $avatar_url = "../image/avatar11.png";
                                        }
                                    } else {
                                        if (date('m') == 12 && date('d') == 25) {
                                            $avatar_url = "../image/avatar20.png";
                                        } else {
                                            $avatar_url = "../image/avatar12.png";
                                        }
                                    }
                                } else {
                                    if ($gender == 1) {
                                        if (date('m') == 12 && date('d') == 25) {
                                            $avatar_url = "../image/avatar15.png";
                                        } else {
                                            $avatar_url = "../image/avatar1.png";
                                        }
                                    } elseif ($gender == 2) {
                                        if (date('m') == 12 && date('d') == 25) {
                                            $avatar_url = "../image/avatar16.png";
                                        } else {
                                            $avatar_url = "../image/avatar2.png";
                                        }
                                    } else {
                                        if (date('m') == 12 && date('d') == 25) {
                                            $avatar_url = "../image/avatar17.png";
                                        } else {
                                            $avatar_url = "../image/avatar0.png";
                                        }
                                    }
                                }
                                $color = "";
                                if ($tichdiem >= 500) {
                                    $danh_hieu = "(Chuyên Gia)";
                                    $color = "#800000"; // sets color to red
                                } elseif ($tichdiem >= 300) {
                                    $danh_hieu = "(Hỏi Đáp)";
                                    $color = "#A0522D"; // sets color to yellow
                                } elseif ($tichdiem >= 200) {
                                    $danh_hieu = "(Người Bắt Chuyện)";
                                    $color = "#6A5ACD";
                                } else {
                                    $danh_hieu = "";
                                    $color = "";
                                }

                                if (isset($row['admin']) && $row['admin'] == 1) {
                                    $name_str = '<span class="text-danger font-weight-bold">' . $row['name'] . '</span><br>';
                                    $name_str .= '<span class="text-danger pt-1 mb-0">(Admin)</span>';
                                } else {
                                    $name_str = '<p class="text-main font-weight-bold pt-1 mb-0">' . $row['name'] . '</p>';
                                    if ($danh_hieu !== "") {
                                        $name_str .= '<div style="font-size: 9px; padding-top: 5px"><span style="color:' . $color . ' !important">' . $danh_hieu . '</span></div>';
                                    }
                                }

                                echo '<div><img src="' . $avatar_url . '" alt="Avatar" style="width: 50px"></div>';
                                echo $name_str;
                            }
                        }
                        ?>
                        <p class="text-main font-weight-bold pt-1 mb-0">
                        </p>
                        <p class="pt-0">Số dư:
                            <?php echo number_format($_coin, 0, ',') ?> VNĐ
                        </p>
                    </div>
                    <div class="text-center mb-2">
                        <a class="btn btn-main btn-sm" href="../nap-so-du">Nạp số dư</a>
                        <a class="btn btn-main btn-sm" href="../pass2">Mật khẩu cấp 2</a>
                        <a class="btn btn-main btn-sm" href="../doi-thoi-vang">Đổi thỏi vàng</a>
                    </div>
                    <div class="text-center">
                        <a class="btn btn-main btn-sm" href="../doi-mat-khau">Đổi mật khẩu</a>

                        <a class="btn btn-main btn-sm" href="../logout">Thoát</a>
                    </div>
                </div>
                <?php
            }
        }
        ?>