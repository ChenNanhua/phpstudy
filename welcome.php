<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <title>$_POST获取表单post信息</title>
</head>
<body>
<?php
echo "欢迎".$_POST["your_name"].",你好啊";
echo "你的年龄是".$_POST["age"]."岁。";
?>
</body>
</html>
