<?php 
$name ='anyName';
$value= 10000;
$expiration = time() + 60 * 60;

//Setting cookie
    // setcookie("$name", $value, $expiration  );
?>
<?php
//Sessions also store user info.
// the user info is use across multiple pages (or requests) during a user's visit.
//session store data on server but keep a ref to that data in our cookie
//the ref is use to pull the store data from server
session_start()
//session start create a ref data store in our cookie
 
?>
<?php
$_SESSION["name"] = 'This information here can be use in multiple page ';
$_SESSION["name"] .='as long as the session ref in broswer is present and valid ';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie and session</title>
</head>
<body>
    <?php 
    //acessing the cookie
    if(isset($_COOKIE["anyName"])){
        $userInfo = $_COOKIE['anyName'];
echo 'user cookie(stored info) is'.$userInfo;
    }else {
        echo 'no cookie set';
    }
    //using set cookie to revise the expiring time helps delete cookie.
    //setting an expired time
     setcookie("$name", $value, time()- 60*60  );
    ?>
</body>
</html>