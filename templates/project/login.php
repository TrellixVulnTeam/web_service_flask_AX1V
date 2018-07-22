<?php 
    $inAccount = $_POST['form-inAccount'];
    $password = $_POST['form-password'];

    $url = "http://140.118.9.206:5000/users/$inAccount";

    $options = array(
            'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'GET',
        )
    );

    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    //echo($result); 
    
    
    $error = 'error';
    $find = explode($error,$result);   
    if(count($find)>1)
    {
        echo "<script>alert('Error !! Please register!'); location.href = 'index.html';</script>";
    }
    else
    {    
        $pass = "$password";
        $find2 = explode($pass,$result); 
        if(count($find2)>1)
        {
            //(紀錄account)
            $account = json_decode($result)->Users->account;  
            session_start();			
            $_SESSION['account'] = $account;         
            //echo($_SESSION['account']);
            
            echo "<script>alert('Successfully!!'); location.href = 'Timetable.php';</script>";
            //header('Location: '.'index2.html');
        }
        else
        {
            echo "<script>alert('Error !! Password Incorrect!'); location.href = 'index.html';</script>";
        }
    }

?>

