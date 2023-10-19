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
        $fname = fopen("name.txt", "a") or exit("Error:Can not open the files");
        fwrite($fname, $_POST["nname"]);
        fclose($fname);

        $fps = fopen("password.txt", "a") or exit("Error:Can not open the files");
        fwrite($fps, $_POST["npassword"]);
        fclose($fps);

        echo "注册成功！正在登陆。";

        $_POST["name"] = $_POST["nname"];
        $_POST["password"] = $_POST["npassword"];

        header("Location: ./dash.php"); 
    ?>
    
</body>
</html>