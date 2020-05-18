
<?php @session_start();
require_once "database.php";


//login for admin and students 
if(isset($_POST['login'])){
	$user = filters('username');
	$pass = filters('password');  
	// $adviser = filters ('adviser');


	$adviser = false;
if(isset($_POST['adviser'])){
	$adviser = true;
}
if($adviser){
$login = counts("$s adviser $w username='$user' and password ='$pass' and role='2' and status='1'") ;

// $login1 = counts("$s user $w username='$user' and password ='$pass' and role='1' and status='1'") ;

// //Admin Login Logic
// 	if($login1 > 0){ 
// 		$id = get("user_id","$s user $w username ='$user' and password ='$pass'");  
// 		$role = get("role","$s user $w username ='$user' and password ='$pass'");  
// 		$_SESSION['id'] = $id;
// 		$_SESSION['role'] = $role;
// 		to('admin/index.php');
// 	}

	// Adviser login logic

	if($login > 0){
		$id = get("adviser_id","$s adviser $w username ='$user' and password ='$pass'");  
		$role = get("role","$s adviser $w username ='$user' and password ='$pass'");  
		$_SESSION['id'] = $id;
		$_SESSION['role'] = $role;
		to('adviser/index.php');
		
	} 

	else { 
	 
		$error1 = "Wrong Login Details as Adviser !";
                        
		
	}
	
}
else{
		//students login logic
$login = counts("$s students_data $w reg_no='$user' and password ='$pass' and role='3' and status='1'"); 
	if($login <= 0){
		$error1 = "Wrong Student Login Details!";
	} else { 
		$id = get("std_id","$s students_data $w reg_no ='$user' and password ='$pass'");  
		$role = get("role","$s students_data $w username ='$user' and password ='$pass'");  
		$_SESSION['id'] = $id;
		$_SESSION['role'] = $role;
		to('std/dash.php');
	}
}
	
} 



//Students registration part1 bio data
if(isset($_POST['register_student'])){ 
	$reg_no = filters('reg_no');
	$surname = filters('surname');
	$othernames = filters('othernames');
	$admission_year = filters('admission_year');
	$email = filters('email');
	$admissionMode = filters('admissionMode');
	$phone = filters('phone');
    $password1 = filters('password1');
    $password2 = filters('password2');
	//$city = filters('city');
	//$state = filters('state');
    //$degree = filters('degree');
    //$institution = filters('institution');
    //$studied = filters('studied');
     //$prev_mem = filters('prev_mem');
    //$mem_type = filters('mem_type');
   // $prev_mem_id = filters('prev_mem_id');
   // $mem_year = filters('mem_year');
   // $username = filters('username');
	//$img = $_FILES['img']['name'];
	//$target_dir = "../portal/img/";
	//$target_file = $target_dir.basename($_FILES["img"]["name"]); 
   // move_uploaded_file($_FILES["img"]["tmp_name"], $target_file); 

 if ($password1==$password2) {
 
$search1 = counts("SELECT * FROM students_data WHERE status='1' AND (reg_no='$reg_no' OR email='$email')");
     if($search1 > 0){
            		$error1 = "User account Exist!!!";
     }
   elseif(udi("$i students_data values('','$surname','$othernames','','$reg_no','','$phone','','','','','$email','','','','$admission_year','$admissionMode','$password1','','3','1')"))
   {
   	$success="Account created Sucessfully!!!";
   }
   else{
	 $error1 = "Sorry, Something went wrong!!!";
	//echo("Error description: " . $conn -> error);
	}

 }else{
 	$error1 ="Password do not March!!!";
 }
}


//Students bio data update
if(isset($_POST['update_bio_data'])){ 
	$dept = filters('dept');
	$std_id = filters('std_id');
	$state = filters('state');
	$lga = filters('lga');
	$per_address = filters('per_address');
	$dob = filters('dob');
	$gender = filters('gender');
	$pname = filters('pname');
    $pcontact = filters('pcontact');
	$img = $_FILES['img']['name'];
	$target_dir = "img/";
	$target_file = $target_dir.basename($_FILES["img"]["name"]); 
   move_uploaded_file($_FILES["img"]["tmp_name"], $target_file); 

if(udi("$u students_data set img='$img' gender='$gender' dob='$dob' per_address ='$per_address' lga='$lga' state='$state' parents_name='$pname' parents_contact='pcontact' dept='$dept' WHERE role='3' and status='1' and std_id='$std_id' ")){
   	$success="Details Saved Sucessfully!!!";
   }
   else{$error = "Sorry, Something went wrong!!!";}
}









//send_message 
if(isset($_POST['send_message'])){
	$sender = filters('sender');
	$dept = filters('dept'); 
	$message = filters('message');
	//$date = filters('date');
	//$status = filters('status');
		if(udi("$i messagebox values('','$sender','$dept','$message',CURRENT_TIMESTAMP,'1')")){
	    	$notifications = "Message sent Sucessfully !";
	    	$task = "<script>$('#notifications').click();</script>"; 
	    } else { 
	    	$notifications = "Something went wrong Message not sent aaa!"; 
	    	$task = "<script>$('#notifications').click();</script>"; 
	    }  

}
 


//Assign a course score to student
if(isset($_POST['course_assign'])){
	$reg_no = filters('reg_no');
    $course_id = filters('course_id');
    $score = filters('score');
	$date = filters('date'); 
    $bd_id = get("bd_id","SELECT bd_id FROM bio_data WHERE reg_no ='$reg_no' ");
    $course_name = get("course_title","SELECT course_title FROM course WHERE course_id ='$course_id' ");
    $abc = counts("SELECT * FROM user_course WHERE estatus='1' AND status='1' AND course_id='$course_id' AND bd_id='$bd_id'");
    $def = counts("SELECT * FROM bio_data WHERE status='1' AND reg_no='$reg_no'");
    $check_user_course = counts("SELECT * FROM user_course WHERE course_id='$course_id' AND reg_no='$reg_no' AND status='1'");
    
    if($def<=0){
        $notifications = "Sorry the Registration Number does not exist!";
    $task = "<script>$('#notifications').click();</script>"; 
    }
    elseif($check_user_course <=0){
         $notifications = "This user did not register for $course_name, they can do so from thier dashboard";
    $task = "<script>$('#notifications').click();</script>"; 
    }
   // elseif($abc >= 1){
   // $notifications = "Sorry You cannot assign score again!";
   // $task = "<script>$('#notifications').click();</script>"; 
    //}
    
elseif(udi("$u user_course set score='$score', issuance='$date', estatus='1' WHERE course_id='$course_id' AND reg_no='$reg_no'")){
    
    
	    	$notifications = "Score Assigned Sucessfully!";
	    	$task = "<script>$('#notifications').click();</script>"; 
	    } else { 
	    	$notifications = "Sorry, Something went wrong Score not Assigned !"; 
	    	$task = "<script>$('#notifications').click();</script>"; 
	    }  

}


 



	




//achive dept
if(isset($_POST['archive_dept'])){ 
	$dept_id = filters('dept_id'); 
    $dept_name = filters('dept_name');
	if(udi("$u department set status='0' where dept_id='$dept_id'")){
		$notifications = "$dept_name has been trashed !";
		$task = "<script>$('#notifications').click();</script>"; 
	} else { 
		$notifications = "Something went wrong, $dept_name was not removed !"; 
 		$task = "<script>$('#notifications').click();</script>"; 
	}  
}



// add staff 
if(isset($_POST['add_staff'])){ 
	$name = filters('name'); 
	$phone = filters('phone');
	$dept = filters('dept');
	$username = filters('username');
	$password = filters('password');
	$address = filters('address');
	$img = $_FILES['img']['name'];
	$target_dir = "img/";
	$target_file = $target_dir.basename($_FILES["img"]["name"]); 
    move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);   
	    if(udi("$i staff (staff_id,name,phone,img,status,dept_id,address,username,password,role) values('','$name','$phone','$img','1','$dept','$address','$username','$password','2')")){
	    	$notifications = "New Staff has been added to records !";
	    	$task = "<script>$('#notifications').click();</script>"; 
	    } else { 
	    	$notifications = "Something went wrong Staff not saved !"; 
	    	$task = "<script>$('#notifications').click();</script>"; 
	    }  
}


// add new courses
if(isset($_POST['add_course'])){ 
	$title = filters('title');   
	$name = filters('name');
    $desc = filters('desc');
   
	    if(udi("$i course values('','$name','$title','$desc','1')")){
	    	$notifications = "New Course has been added!";
	    	$task = "<script>$('#notifications').click();</script>"; 
	    } else { 
	    	$notifications = "Something went wrong Course not saved !"; 
	    	$task = "<script>$('#notifications').click();</script>"; 
	    }  
}


// Grant assess to write exam
if(isset($_POST['grant_assess'])){ 
	if(!empty($_POST['course'])){
$date = filters('date');   
$reg_no = filters('reg_no');
$course = $_POST['course'];
$courses = implode(' , ', $course);	
if(udi("$i clear values('','$courses','$reg_no','$date','1')")){
	    	$notifications = "Assess Granted Sucessfully! on $date ";
	    	$task = "<script>$('#notifications').click();</script>"; 
	    } else { 
	    	$notifications = "Something went wrong, Assess not granted !"; 
	    	$task = "<script>$('#notifications').click();</script>"; 
	    }  
}
}
//archive_courses 
if(isset($_POST['archive_course'])){ 
	$course_id = filters('course_id'); 
	if(udi("$u course set status='0' where course_id='$course_id'")){
		$notifications = "Course has been trashed !";
		$task = "<script>$('#notifications').click();</script>"; 
	} else { 
		$notifications = "Something went wrong Course records not removed !"; 
 		$task = "<script>$('#notifications').click();</script>"; 
	}  
}


//update_account
if(isset($_POST['update_account'])){ 
	$id = $_SESSION['id']; 
	$name = foilters('name'); 
	$user = foilters('user');
	$pass = foilters('pass');
    $pass1 = filters('pass1');
    $pass11 = filters('pass11');
	@$img = $_FILES['img']['name'];

    $check1 = counts("SELECT * FROM users WHERE user_id = '$id' AND password = '$pass' "); 
    if($check1 <= 0){
      $notifications = "<span style='color:red;'>SORRY, Old Password is not correct!!!</span>";
	    	$task = "<script>$('#notifications').click();</script>";   
    }
    
    elseif ($pass1 != $pass11){
        $notifications = "<span style='color:red;'>SORRY, The New password Must Match</span>";
	    	$task = "<script>$('#notifications').click();</script>";         
    }
	elseif(!empty($img)){          
		$target_dir = "img/";
		$target_file = $target_dir.basename($_FILES["img"]["name"]); 
	    move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);   
	    if(udi("$u users set name='$name',username='$user',password='$pass1',img='$img' where user_id='$id'")){
	    	$notifications = "Account Profile has been updated !";
	    	$task = "<script>$('#notifications').click();</script>"; 
	    } else { 
	    	$notifications = "Something went wrong account not updated step1!"; 
	    	$task = "<script>$('#notifications').click();</script>"; 
	    }  
	}

	 else {  
	    if(udi("$u users set name='$name',username='$user',password='$pass1' where user_id='$id'")){
	    	$notifications = "Account Profile has been updated without Passport!";
	    	$task = "<script>$('#notifications').click();</script>"; 
	    } else { 
	    	$notifications = "Something went wrong account not updated step2!"; 
	    	$task = "<script>$('#notifications').click();</script>"; 
	    }  
	}

}





?>