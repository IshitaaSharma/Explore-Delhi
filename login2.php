<html>
<body>

<?php
    $p= new Person;
    class Person{
       public  $name="default_name";
       function getName(){
        return $this->name;
       }
       function setName($newname){
            $this->name=$newname;
       }
    }
    echo $p->getName();
    $p->setname("Ifrah");
    echo $p->getName();
?>


</body>
</html>