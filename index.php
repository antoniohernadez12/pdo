<?php 
    $host='localhost';
    $dbname='clasepdo';
    $user = 'root';
    $pass ='';

    try{
      // mysql con PDO
      $pdo =new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$user,$pass);
      $pdo -> setAttribute (PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

    }catch(PDOException $e){
    	echo $e->getMessage();
    }
   
    //execute 

    //$stmt = $pdo->prepare("INSERT INTO users(username,password,status)VALUES('antonio','ryze','1')");
    //$stmt ->execute();

    //query 
    //$insertados =$pdo->query("INSERT INTO users(username,password,status)VALUES('antonio','ryze','1')");
     


     //$pdo->exec("DELETE FROM USER WHERE username='antonio'");


    //prepare
    //marcadores anonimos 

   // $stmt = $pdo->prepare('INSERT INTO users (username,password,status) VALUES (?,?,?)');

    //marcadores conocidos

    $stmt = $pdo->prepare('INSERT INTO users (username,password,status) VALUES (:usern, :pssw, :sts)');
    

    //execute 

    $usern='antonio';
    $pssw='ryze';
    $sts='1';
    $stmt -> execute();


    $usern='antonio';
    $pssw='ryze2';
    $sts='1';
    $stmt -> execute();




 ?>