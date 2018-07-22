<?php
session_start();
$acc = $_SESSION['account'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>School Timetable</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li>
                    <a href='Timetable.php'>My School Timetable</a>
                </li>
                <li>
                    <a href="MemberCenter.php">Member Center</a>
                </li>
                <li>
                    <a href='Friends.html'>Friends</a>
                </li>
                <li>
                    <a href='Logout.php'>Logout</a>
                </li>
            </ul>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div style="float:right;">
                    <a href="#menu-toggle" class="btn btn-info" id="menu-toggle" align="left">Toggle Menu</a>
                </div>
                <h1>My School Timetable</h1>
                <p>You can Simulate your Timetable</p>  

                <div class="timetable">
                    <table class="table">                        
                        <tr class="th th11">
                            <th></th>
                            <th>Mon</th>
                            <th>Tue</th>
                            <th>Wed</th>
                            <th>Thu</th>
                            <th>Fri</th>
                            <th>Sat</th>
                            <th>Sun</th>
                        </tr>
                        <tr>
                            <th class="th th1">08:10-09:00</th>
                            <td id='M1'></td>
                            <td id='T1'></td>
                            <td id='W1'></td>
                            <td id='R1'></td>
                            <td id='F1'></td>
                            <td id='S1'></td>
                            <td id='U1'></td>
                        </tr>
                        <tr>
                            <th class="th th2">09:10-10:00</th>
                            <td id='M2'></td>
                            <td id='T2'></td>
                            <td id='W2'></td>
                            <td id='R2'></td>
                            <td id='F2'></td>
                            <td id='S2'></td>
                            <td id='U2'></td>
                        </tr>
                        <tr>
                            <th class="th th3">10:20-11:10</th>
                            <td id='M3'></td>
                            <td id='T3'></td>
                            <td id='W3'></td>
                            <td id='R3'></td>
                            <td id='F3'></td>
                            <td id='S3'></td>
                            <td id='U3'></td>
                        </tr>
                        <tr>
                            <th class="th th4">11:20-12:10</th>
                            <td id='M4'></td>
                            <td id='T4'></td>
                            <td id='W4'></td>
                            <td id='R4'></td>
                            <td id='F4'></td>
                            <td id='S4'></td>
                            <td id='U4'></td>
                        </tr>
                        <tr>
                            <th class="th th5">12:20-13:10</th>
                            <td id='M5'></td>
                            <td id='T5'></td>
                            <td id='W5'></td>
                            <td id='R5'></td>
                            <td id='F5'></td>
                            <td id='S5'></td>
                            <td id='U5'></td>
                        </tr>
                        <tr>
                            <th class="th th6">13:20-14:10</th>
                            <td id='M6'></td>
                            <td id='T6'></td>
                            <td id='W6'></td>
                            <td id='R6'></td>
                            <td id='F6'></td>
                            <td id='S6'></td>
                            <td id='U6'></td>
                        </tr>
                        <tr>
                            <th class="th th7">14:20-15:10</th>
                            <td id='M7'></td>
                            <td id='T7'></td>
                            <td id='W7'></td>
                            <td id='R7'></td>
                            <td id='F7'></td>
                            <td id='S7'></td>
                            <td id='U7'></td>
                        </tr>
                        <tr>
                            <th class="th th8">15:30-16:20</th>
                            <td id='M8'></td>
                            <td id='T8'></td>
                            <td id='W8'></td>
                            <td id='R8'></td>
                            <td id='F8'></td>
                            <td id='S8'></td>
                            <td id='U8'></td>
                        </tr>
                        <tr>
                            <th class="th th9">16:30-17:20</th>
                            <td id='M9'></td>
                            <td id='T9'></td>
                            <td id='W9'></td>
                            <td id='R9'></td>
                            <td id='F9'></td>
                            <td id='S9'></td>
                            <td id='U9'></td>
                        </tr>
                        <tr>
                            <th class="th th10">17:30-18:20</th>
                            <td id='M10'></td>
                            <td id='T10'></td>
                            <td id='W10'></td>
                            <td id='R10'></td>
                            <td id='F10'></td>
                            <td id='S10'></td>
                            <td id='U10'></td>
                        </tr>	
                        <tr>
                            <th class="th thA">18:25-19:15</th>
                            <td id='MA'></td>
                            <td id='TA'></td>
                            <td id='WA'></td>
                            <td id='RA'></td>
                            <td id='FA'></td>
                            <td id='SA'></td>
                            <td id='UA'></td>
                        </tr>	
                        <tr>
                            <th class="th thB">19:20-20:10</th>
                            <td id='MB'></td>
                            <td id='TB'></td>
                            <td id='WB'></td>
                            <td id='RB'></td>
                            <td id='FB'></td>
                            <td id='SB'></td>
                            <td id='UB'></td>
                        </tr>
                        <tr>
                            <th class="th thC">20:15-21:05</th>
                            <td id='MC'></td>
                            <td id='TC'></td>
                            <td id='WC'></td>
                            <td id='RC'></td>
                            <td id='FC'></td>
                            <td id='SC'></td>
                            <td id='UC'></td>
                        </tr>
                        <tr>
                            <th class="th thD">21:00-22:00</th>
                            <td id='MD'></td>
                            <td id='TD'></td>
                            <td id='WD'></td>
                            <td id='RD'></td>
                            <td id='FD'></td>
                            <td id='SD'></td>
                            <td id='UD'></td>
                        </tr>
                    </table>	
                </div>                     
                    <div style="width:500px" class="input-group">
                        <input type="text" id="search-course" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-info" id="search">Go!</button>
                        </span>
                    </div>
                    <br/>
            <table class="tableForm"> 
                <tr>
                    <th>Searching Results  [Press button to add]</th>
                    <th>Your courses  [Press button to delete]</th>
                </tr>
                <tr>
                    <td>           
                        <div style="height:400px;width:700px;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;">
                            <div class="btn-group-vertical" id="Cbuttons">
                                
                            </div>
                        </div>
                    </td>
                    <td>
                        <div style="height:400px;width:700px;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;">
                            <div class="btn-group-vertical" id="OwnCbuttons">
                                
                            </div>
                        </div> 
                    </td>
                </tr>
            </table>

            </div>
        </div>

    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript">
        //  get $_SESSION['account']
        var userAccount = '<?php echo $acc; ?>';
    </script>

    <script>
    //Menu Toggle Script
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    upload();
    //upload user all courses
    function upload(){
        $.ajax({ 
            url: "http://140.118.9.206:5000/user_courses/"+userAccount, 
            type:"GET",
            success: function(data){
                //console.log(data.courses) ;
                for(var i in data.courses){
                    var row = data.courses[i];
                    var title = row.title;
                    var time = row.time;
                    var t = get_date(time);
                    var course_id = row.course_id;
                    var teacher = row.teacher;
                    var credit = row.credit;
                    //console.log(time+"/"+t+"/"+course_id) ;
                    for(var k=0;k<t.length;k++){  
                        $('#'+t[k]+'').addClass("courses");       
                        $('#'+t[k]+'').append(title); 
                    }
                    var own ="<button type='submit' class='btn btn-outline-primary' id=D-"+course_id+" onclick=coursesDelete('"+course_id+"')>"+title+" ["+teacher+"] ["+credit+"] ["+time+"]</button>";        
                    $('#OwnCbuttons').append(own);
                } 
            }
        });
    }

    //add course buttons
    $('#search').click(function () {
        var searchWord = $("#search-course").val();
        //alert(searchWord);
        $.ajax({ 
            url: "http://140.118.9.206:5000/courses", 
            type:"GET",
            success: function(data){
                //console.log(data) ;
                //$("button").remove("#courseID");
                $(".btn.btn-outline-info").remove(); 
                            
                for(var i in data.Courses){
                    var row = data.Courses[i];
                    var title = row.title; 
                    var course_id = row.course_id;
                    var teacher = row.teacher;
                    var credit = row.credit;
                    var time = row.time;
                    if(title.indexOf(searchWord)!=-1){
                        //console.log(title) ;   
                         
                        var html = "<button type='submit' class='btn btn-outline-info' id="+course_id+" onclick=coursesAdd('"+course_id+"')>"+title+" ["+teacher+"] ["+credit+"] ["+time+"]</button>";        
                        $('#Cbuttons').append(html); 
                    }
                }           
                //判斷是否有class btn
                if(!$("button").hasClass("btn btn-outline-info")){
                    alert('No this course !');                  
                }
                //clean text 
                $("#search-course").val("");
            }
        });
    });
    
    //add to table
    function coursesAdd(id){
        $.ajax({ 
            url: "http://140.118.9.206:5000/courses/"+id, 
            type:"GET",
            success: function(data){
                //console.log(data.Courses.time);
                var t = get_date(data.Courses.time);
                var title = data.Courses.title;
                var time = data.Courses.time;
                var course_id = data.Courses.course_id;
                var teacher = data.Courses.teacher;
                var credit = data.Courses.credit;
                //console.log(a);

                //判斷overlap times
                var count = 0;
                for(var k=0;k<t.length;k++){
                    //console.log(t[k]);                
                    if($('#'+t[k]+'').hasClass("courses")){
                        alert('The two courses times overlap each other!!');  
                        break;              
                    }else{
                        count ++;
                    }
                }
                //no overlap
                if(count==t.length){
                    for(var k=0;k<t.length;k++){
                        //var html = "<div class ='courses' id="+title+">"+title+"</div>";  
                        $('#'+t[k]+'').addClass("courses");       
                        $('#'+t[k]+'').append(title); 
                    }
                    var own ="<button type='submit' class='btn btn-outline-primary' id=D-"+course_id+" onclick=coursesDelete('"+course_id+"')>"+title+" ["+teacher+"] ["+credit+"] ["+time+"]</button>";        
                    $('#OwnCbuttons').append(own); 
                    userAdd(course_id);
                }
            }
        });
    }

    //delete the courses on table
    function coursesDelete(id){
        $.ajax({ 
            url: "http://140.118.9.206:5000/courses/"+id, 
            type:"GET",
            success: function(data){
                var t = get_date(data.Courses.time);
                for(var k=0;k<t.length;k++){
                    //console.log(t[k]);
                    //remove table
                    $('#'+t[k]+'').removeClass("courses");
                    $('#'+t[k]+'').empty();                 
                }
                //remove button
                $('#D-'+id+'').remove();  
                userDelete(id);
            } 
        });
    }

    //analyze date
    function get_date(data){
        var date_arr = data.split(/、| / );
        return date_arr;
    }
    //user add course
    function userAdd(course_id){
        $.ajax({ 
            url: "http://140.118.9.206:5000/user_courses/"+userAccount, 
            type:"POST",
            data: {"course_id": course_id},
            success: function(data){
                console.log("Add");
                console.log(data);
                } 
        });
    }
    //user delete course
    function userDelete(course_id){
        $.ajax({ 
            url: "http://140.118.9.206:5000/user_courses/"+userAccount+"/"+course_id, 
            type:"POST",
            success: function(){
                console.log("Delete");
                } 
        });
    }
    </script>


</body>

</html>