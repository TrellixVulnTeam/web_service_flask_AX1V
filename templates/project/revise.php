<?php 
    session_start();
    $account = $_SESSION['account'];

    //revise data 
    $url = "http://140.118.9.206:5000/users/$account";    
    $data = array(
        'password' => $_POST['Revise-Password'],
        'name' => $_POST['Revise-Name'],
        'department' => $_POST['Revise-Department']);

    $options = array(
            'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'PUT',
            'content' => http_build_query($data),
        )
    );

    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    //echo $result;

    //get user all data 
    /*$url_user = "http://140.118.9.206:5000/users/$account";    
     
    $options_user = array(
            'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'GET',
        )
    );
    
    $context_user  = stream_context_create($options_user);
    $result_user = file_get_contents($url_user, false, $context_user);
    $pass =  json_decode($result_user)->Users->password; 
    $name = json_decode($result_user)->Users->name;
    $department = json_decode($result_user)->Users->department; 
    session_start();			
    $_SESSION['pass'] = $pass;
    $_SESSION['name'] = $name;
    $_SESSION['department'] = $department; */

    if(!empty($_POST['Revise-Password']) && !empty($_POST['Revise-Name']) && !empty($_POST['Revise-Department']))
    {
        echo "<script>alert('Successfully Revise Your Member Information!!'); location.href = 'MemberCenter.php';</script>";
    }
    else
    {
        echo "<script>alert('Choose The revised Information!!'); location.href = 'MemberCenter.php';</script>";
    }
    
 

?>
