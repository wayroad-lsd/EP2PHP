<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page_4_1</title>
    <style>
        /* Add any desired styling for the footer */
        footer {
            background-color: #ffb4b4;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
   <h1>4.1 แสดงชื่อ-นามสกุล ชื่อเล่น ด้วยตัวแปร </h1> 
   <h2><?php echo "Hello PHP"; ?></h2>
   <?php 
   echo "Mr.Wayroad Pongbupasirikul";
   echo "<br>";
   $nickname="Ball";
   $age = 35;
   echo "Nickname : ".$nickname;
   echo "<br>Age : ".$age." ปี";
   ?>
   <h3><a href="index.html">Home</a></h3>
   <!-- <a href="index.html"><input type="button" value="Home"></a>
   <a href="index.html"><button>Home</button></a> -->
</body>
<footer>
    <p>Copyright &copy; by Thonburi University </p>
</footer>
</html>