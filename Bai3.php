<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="author" content="NHÓM 1" />
    <link href="/site.css" rel="stylesheet" />
    <title>Xếp loại kết quả tuyển sinh</title>
    <style>
        html {
            font-family: sans-serif;
        }

        body {
            margin: 0;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 25px 0 15px 0;
        }

        h2 {
            font-size: 17px;
            font-weight: bold;
        }

        #wrapper {
            width: 80%;
            margin: 0 auto;
        }

        .row {
            width: 100%;
            display: inline-block;
            margin-bottom: 5px;
        }

        .lblinput,
        .lbloutput {
            width: 100%;
            float: left;
        }

        .submit {
            padding: 10px 0;
            text-align: center;
            width: 50%;
        }

        .lbltitle {
            width: 20%;
            float: left;
        }
    </style>
</head>

<body>
    <header style="background-color:black; color:white;padding:15px;">
        <h2 style="text-align: center;">Nhóm 1</h2>
    </header>
    <div id="wrapper">
        <h2>Xếp loại kết quả tuyển sinh</h2>
        <form action="#" method="post">
            <div class="row">
                <div class="lbltitle">
                    <label>Điểm môn Toán </label>
                </div>
                <div class="lblinput">
                    <input type="number" name="Toan" value="<?php echo isset($_POST["Toan"]) ? $_POST["Toan"] : ""; ?>">
                </div>
            </div>
            <div class="row">
                <div class="lbltitle">
                    <label>Điểm môn Lý </label>
                </div>
                <div class="lblinput">
                    <input type="number" step="0.1" name="Ly" value="<?php echo isset($_POST["Ly"]) ? $_POST["Ly"] : ""; ?>">
                </div>
            </div>
            <div class="row">
                <div class="lbltitle">
                    <label>Điểm môn Hóa </label>
                </div>
                <div class="lblinput">
                    <input type="number" name="Hoa" value="<?php echo isset($_POST["Hoa"]) ? $_POST["Hoa"] : ""; ?>">
                </div>
            </div>
            <div class="row">
                <div class="lbltitle">
                    <label>Chọn khu vực</label>
                </div>
                <div class="lblinput">
                    <select name="KhuVuc">
                        <option value="" selected>--Chọn khu vực--</option>
                        <option value="1">Khu vực 1</option>
                        <option value="2">Khu vực 2</option>
                        <option value="3">Khu vực 3</option>
                        <option value="2NT">Khu vực 4</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="submit">
                    <input type="submit" name="btnsubmit" value="Xếp loại" />
                </div>
            </div>


        </form>
    </div>
    <div id="result">
        <h2>Kết quả xếp loại</h2>
        <div class="row">
            <div class="lbltitle">
                <label>Tổng điểm</label>
            </div>
            <div class="lbloutput">
                <?php
                if (isset($_POST["btnsubmit"])) {
                    $TongDiem = $_POST["KhuVuc"];
                    if ($TongDiem == 1) {
                        echo isset($_POST["btnsubmit"]) ? $_POST["Toan"] + $_POST["Ly"] + $_POST["Hoa"] + 5 : "";
                    } else if ($TongDiem == 2) {

                        echo isset($_POST["btnsubmit"]) ? $_POST["Toan"] + $_POST["Ly"] + $_POST["Hoa"] + 5 : "";
                    } else if ($TongDiem == "3") {

                        echo isset($_POST["btnsubmit"]) ? $_POST["Toan"] + $_POST["Ly"] + $_POST["Hoa"] + 3 : "";
                    } else {
                        echo 0;
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="lbltitle">
            <label>Xếp loại</label>
        </div>
        <div class="lbloutput">
            <?php
            if (isset($_POST["btnsubmit"])) {
                $TongDiem = $_POST["Toan"] + $_POST["Ly"] + $_POST["Hoa"] + $_POST["KhuVuc"];
                if ($TongDiem >= 24)
                    echo "Giỏi";
                else if ($TongDiem >= 21)
                    echo "Khá";
                else if ($TongDiem >= 15)
                    echo "Trung bình";
                else {
                    echo "Yếu";
                }
            }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="lbltitle">
            <label>Điểm ưu tiên</label>
        </div>
        <div class="lbloutput">
            <?php
            if (isset($_POST["btnsubmit"])) {
                $TongDiem = $_POST["KhuVuc"];
                if ($TongDiem == 1) {
                    echo 5;
                } else if ($TongDiem == 2) {
                    echo 5;
                } else if ($TongDiem == 3) {
                    echo 3;
                } else {
                    echo 0;
                }
            }
            ?>
        </div>
    </div>
    <?php

    ?>
    <footer style="background-color:black; color:white;padding:15px;">
        <p>Nguyễn Tân Tự - Phan Thanh Toàn - Lê Tấn Huy</p>
    </footer>
</body>

</html>