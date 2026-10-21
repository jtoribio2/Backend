<?php 

if (isset($_COOKIE['font-size'])) {
        $mida = $_COOKIE['font-size'];
} else {
        $mida = '8px';
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>Text</title>
        <style> 
                p {
                        font-size: <?php echo $mida; ?>;  
                }
        </style>
</head>
<body>
        <p>Oh yeah!!!</p>
</body>
</html>
