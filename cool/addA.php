<?php

if(isset($_POST['submit'])){



    try {
        $conn = new PDO("mysql:host=localhost;dbname=canvasjs_db", 'root', '');
    }
    catch(PDOException $e) {
        echo $e->getMessage();
        die();
    }

    $sql = 'INSERT INTO class ( no, name) VALUES ';
    $sql_append = array(); //Here we have the placeholder to be inserted
    $binds = array(); //Here he have the values for the placeholders

    for($i = 0; $i < 2; $i++) {
        echo $_POST['name'];
 echo $_POST['no'];
        if (!( isset($_POST['name'][$i]) && isset($_POST['no'][$i])) ) {
            //We need all the values to be valid
            continue;
        }
        //Add the placeholders and bind values
        $sql_append[] = '(no = :no'.$i.', name = :name'.$i.')';
        $binds[':no'.$i] = $_POST['no'][$i];
        $binds[':name'.$i] = $_POST['name'][$i];
    }
    //Implode and add to the query and then execute
    $sql = $sql.implode(', ', $sql_append).';';
    echo $sql;
    $stmt = $conn->prepare($sql);
    $stmt->execute($binds);
}

?>
<html>
<form action="addA.php" method="post">
<input name="no" type="text" placeholder="no">
<input name="name" type="text" placeholder="name">
<input name="no" type="text" placeholder="no">
<input name="name" type="text" placeholder="name">
<br>
<input name="submit" type="submit">
</form>
</html>