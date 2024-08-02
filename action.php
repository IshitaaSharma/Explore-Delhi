<html><body>
<?php
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $user=$_POST["name"];
            $pass=$_POST["submit"];
        }
        if(strlen($user)<8){
            echo "Username should have 8 characters";
        }

?>
</html></body>
