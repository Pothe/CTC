<?php 

function addStudent(){

				$f_name =$_POST['f_name'];
                 $f_name = mysqli_real_escape_string($conn,$f_name);
                 $l_name = $_POST['l_name'];

                 $l_name = mysqli_real_escape_string($conn,$l_name);
                 $e_name =$_POST['e_name'];
                 $e_name  =mysqli_real_escape_string($conn,$e_name);
                 
                 $gender = $_POST['gender'];
                 $gender = mysqli_real_escape_string($conn,$gender);
                 $dob    = $_POST['dob'];
                 $dob    = mysqli_real_escape_string($conn,$dob);
                 $pob = $_POST['pob'];
                 $pob   = mysqli_real_escape_string($conn,$pob);

                 // upload image to server
                 $p_profile = $_FILE['p_profile']['name'];
                 $p_profile_template = $_FILE['p_profile']['tmp_name'];
                  move_upload_file($p_profile_template,"./img/$p_profile");

                 $c_address = $_POST['c_address'];
                 $c_address = mysqli_real_escape_string($conn,$c_address);
                 $courses = $_POST['courses'];
                 $couses = mysqli_real_escape_string($conn,$courses);
                 $s_times = $_POST['times'];
                 $s_times = mysqli_real_escape_string($conn,$s_times);
                 $s_day  = $_POST['days'];
                 $s_day = mysqli_real_escape_string($conn,$s_day);
                 $father = $_POST['father'];
                 $father = mysqli_real_escape_string($conn,$father);
                 $f_nation = $_POST['f_nation'];
                 $f_nation  = mysqli_real_escape_string($conn,$f_nation);
                 $f_job  =$_POST['f_job'];
                 $f_job = mysqli_real_escape_string($conn,$f_job);
                 $f_phone = $_POST['f_phone'];
                 $f_phone = mysqli_real_escape_string($conn,$f_phone);


                 $mother = $_POST['mother'];
                 $mother = mysqli_real_escape_string($conn,$mother);
                 $m_nation = $_POST['m_nation'];
                 $m_nation  = mysqli_real_escape_string($conn,$m_nation);
                 $m_job  =$_POST['m_job'];
                 $m_job = mysqli_real_escape_string($conn,$m_job);
                 $m_phone = $_POST['m_phone'];
                 $m_phone = mysqli_real_escape_string($conn,$m_phone);

                 $pc_address =$_POST['pc_address'];
                 $pc_address = mysqli_real_escape_string($conn,$pc_address);



                


                $query = "INSERT INTO students_tb(f_name,l_name,e_name,gender,dob,pob,p_profile,c_address,courses,s_times,days,father,f_nation,f_job,f_phone,mother,m_nation,m_job,m_phone,pc_address)VALUES('{$f_name}','{$l_name}','{$e_name}','{$gender}','{$dob}','{$pob}','{ $p_profile}','{$c_address}','{$courses}','{$s_times}','{$s_day}','{$father}','{$f_nation}','{$f_job}','{$f_phone}','{$mother}','{$m_nation}','{$m_job}','{$m_phone}','{$pc_address}')";
                $result = mysqli_query($conn,$query);
               if(!$result){
                die("QUERY FAIL!".mysqli_error($conn));
                }





}






 ?>