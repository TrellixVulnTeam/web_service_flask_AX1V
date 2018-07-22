<?php 
    $url = "http://140.118.9.206:5000/users";
 
    $options = array(
            'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'GET',
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    //var_dump($result); 

    $users = json_decode($result);

    foreach($users->Users as $obj) {
            //echo $obj->account."\n";
            $account = $obj->account;
            $url_Courses = "http://140.118.9.206:5000/user_courses/$account";          
            
            $options_Courses = array(
                    'http' => array(
                    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method'  => 'GET',
                )
            );
            $context_Courses  = stream_context_create($options_Courses);
            $result_Courses = file_get_contents($url_Courses, false, $context_Courses);
            //var_dump($result_Courses);

            $title = json_decode($result_Courses);
            var_dump($title);
        }


?>