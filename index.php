<DOCTYPE Html>
<html>
<head>
     <title>PHP clasas</title>
</head>
     
<body>
        <ul>
           <?php
            for($user_count = 10; $user_count <= 50; $user_count++){

            ?>
            <li>User <?php echo "$user_count" ?> </li>

            <?php

        }
           
        ?>
        </ul>
</body>
</html>