<?php 
    $SearchCourse = $_POST['search-course'];

    $url = "http://140.118.9.206:5000/courses";

    $options = array(
            'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'GET',
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    //var_dump($result); 
    $title = json_decode($result);
    //var_dump($title);  

    $courses_array = array();
    foreach($title->Courses as $obj) {
        if(false !== ($rst = strpos($obj->title, $SearchCourse))){
            array_push($courses_array,"$obj->title");
            //echo $obj->title."\n";                    
        }
      }
      //session_start();			
      //$_SESSION['courses'] = $courses_array; 
    if(empty($courses_array)){
        echo 'No the course';        
    }else{
        var_dump($courses_array);  
    }


?>