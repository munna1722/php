<DOCTYPE html>
<html>
<head>
    <title>php loop</title>
</head>
<body>
   
 <?php  

// count jokhon baraita hobe tokhon  $count+= (joto baraita chai  ta dita hobe)  jodi 5 baraita chai tahole $count +=5
for($count = 1; $count <= 100; $count+=5){
    echo "hello $count <br>";
}

?> 

<ul>
    <?php
       for($user_count =40; $user_count >=0; $user_count +=2){
   ?>

      <li>User <?php echo "$user_count" ;?></li>

    <?php
  }
  ?>
</ul>



</body>
</html>