<?php  
    $url = 'http://140.118.9.206:5000/users';
    $data = array(
        'account' => $_POST['form-upAccount'],
        'password' => $_POST['form-password'],
        'name' => $_POST['form-name'],
        'department' => $_POST['form-department']);

    $options = array(
            'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data),
        )
    );

    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    //echo $result;

    $error = 'error';
    $find = explode($error,$result);  
    if(count($find)>1)
    {  
        echo "<script>alert('Account already exsits! Please register again !'); location.href = 'index.html';</script>"; 
    } else
    {  
        echo "<script>alert('Successfully registered !!'); location.href = 'index.html';</script>"; 
    }
      
?>