<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="./files/cartoon.css">
    <link rel="stylesheet" type="text/css" href="./files/title.css">
    <link rel="stylesheet" type="text/css" href="./files/buttom.css">
    <link rel="stylesheet" type="text/css" href="./files/timetable.css">
    <link rel="stylesheet" type="text/css" href="./files/menu_table.css">
    <link rel="stylesheet" type="text/css" href="./dash.css">
    <link rel="shortcut icon" href="./LOGO.svg" type="image/x-icon">
    <style>
        .homepagetop {
            background-image: url("./homepagetop.png");
            padding: 50px;
            text-align: center;
            color: rgb(252, 255, 97);
            border-radius: 20px;
        }
    </style>
    <script>
    var system ={};

    var p = navigator.platform;
    
    system.win = p.indexOf("Win") == 0;
    
    system.mac = p.indexOf("Mac") == 0;
    
    system.x11 = (p == "X11") || (p.indexOf("Linux") == 0);
    
    if(system.win||system.mac||system.xll) {
    
    //pass
    
    }
    
    else {
    
    window.location.href="https://phonews.xingjisoft.top/";
    
    }
    </script>

<meta charset="utf-8"> 
<title>星际工作室 | XINGJI Studios</title>

</head>

<body>
    <div class="menu_table"></div>
    <a href="https://www.xingjisoft.top/">
        <img src="logo_blueback.png" alt="PNG Image" style="position: absolute; top: 0; left: 20;">
    </a>

    <a href="https://www.xingjisoft.top/products/products.html">
        <p class="mtb1">产品</p>
    </a>
    <a href="https://www.xingjisoft.top/xj380/xj380.html">
        <p class="mtb2">XJ380系统</p>
    </a>
    <a href="https://afdian.net/a/xj380os">
        <p class="mtb3">赞助</p>
    </a>

    <?php
        $fname = fopen("name.txt", "r") or exit("Error:Can not open the files");
        // 读取文件每一行，直到文件结尾
        while(!feof($fname))
        {
            $temp = fgets($fname). "<br>"; 
            if ($temp == $_POST['name'])
            {
                $fps = fopen("password.txt", "r") or exit("Error:Can not open the files");
                // 读取文件每一行，直到文件结尾
                while(!feof($fps))
                {
                    $temp2 = fgets($fps). "<br>"; 
                    if ($temp2 == $_POST['password'])
                    {
                        //pass
                    }
                    else
                    {
                        echo "密码错误！3秒后重新跳转至登陆页面。";
                        sleep(3000);
                        header("Location: ./login.php"); 
                        exit;
                    }
                }
            }
            else
            {
                echo "用户名错误！3秒后重新跳转至登陆页面。";
                sleep(3000);
                header("Location: ./login.php"); 
                exit;
            }
        }
        fclose($fname);
    ?>

    <p class="name">
        欢迎，<?php echo $_POST["name"]; ?><br>
    </p>

    <img src="114514.jpg" alt="114514">
    
</body>
</html>