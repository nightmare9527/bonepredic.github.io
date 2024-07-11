<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="mobile_button" id="mobile_button" >
        <img src="image/burger-bar.png">
</div>
<header class="header" id="header">
    <a href="#" class="logo">SpinePREdiction</a>
        <nav class="navbar">
            <ul class="choice">
            <li><a href="#">首頁</a></li>
            <li><a href="aboutCH.php">關於</a></li>
            <li><a href="contactCH.php">聯絡我們</a></li>
            <li><a href="#">登入</a>
                <ul class="dropdown">
                    <li><a href="index2.php">創建帳號</a></li>
                    <li><a href="LoginCH.php">登入</a></li>
                </ul>
            </li>
            <li><a href="#">語言</a>
                <ul class="dropdown">
                    <li><a href="homeEN.php">English</a></li>
                    <li><a href="#">繁體中文</a></li>
                </ul>
            </li>
            </ul>
        </nav>
</header>
    <div class="container">
        <h1 class="big-title">歡迎來到骨骼疾病預測網頁</h1>
    </div>
    <script>
        var buttonnav = document.getElementById("mobile_button");
        var is_open = false;
        buttonnav.addEventListener("click", function() {
            var header = document.getElementById("header");
            if (is_open) {
                header.style.display = "none";
                is_open = false;
            } else {
                header.style.display = "flex";
                is_open = true;
            }
        });
    </script>
</body>
</html>