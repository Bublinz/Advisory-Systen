
<?php @session_start();
require_once "database.php";


//send_message 
if(isset($_POST['send_message'])){
	$sender = filters('sender');
	$dept = filters('dept'); 
	$message = filters('message');
	//$date = filters('date');
	//$status = filters('status');
		if(udi("$i messagebox values('','$sender','$dept','$message',CURRENT_TIMESTAMP,'1')")){
	    	$notifications = "Message sent Sucessful !";
	    	$task = "<script>$('#notifications').click();</script>"; 
	    } else { 
	    	$notifications = "Something went wrong Message not sent aaa!"; 
	    	$task = "<script>$('#notifications').click();</script>"; 
	    }  

}
 
//Adviser selection
if(isset($_POST['confirm'])){
	$std_id = filters('std_id');
	$adviser_id = filters('adviser_id'); 
	//$message = filters('message');
	//$date = filters('date');
	//$status = filters('status');

	$checks = counts("SELECT * FROM adviser_std WHERE as_std_id ='$std_id' AND as_status='1'");

	if ($checks > 0){
		$error1="Please contact your class Adviser";

	}else{

		if(udi("$i adviser_std values('','$std_id','$adviser_id','1')")){
	    	$success="Successful !!!";
	    } else { 
	    	$error1="You are the admin";
		}  
		
			
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
    
    
	    	$notifications = "Score Assigned Sucessful!";
	    	$task = "<script>$('#notifications').click();</script>"; 
	    } else { 
	    	$notifications = "Sorry, Something went wrong Score not Assigned !"; 
	    	$task = "<script>$('#notifications').click();</script>"; 
	    }  

}


 

//login for admin and students 
if(isset($_POST['login'])){
	$user = filters('username');
	$pass = filters('password');  
	$mentor = $_POST['mentor'];
if($mentor =='1'){
	// Admin login logic
	$error1="You are the admin";
}
else{
		// students login logic
$login = counts("$s students_data $w reg_no='$user' and password ='$pass' and role='3' and status='1'") or die('Error111');
	if($login <= 0){
		$error1 = "Wrong Login Credentials !";
	} else { 
		$id = get("std_id","$s students_data $w reg_no ='$user' and password ='$pass'");  
		$role = get("role","$s students_data $w username ='$user' and password ='$pass'");  
		$_SESSION['id'] = $id;
		$_SESSION['role'] = $role;
		to('dash.php');
	}
}
	// $login = counts("$s users $w username='$user' and password ='$pass' and role='1'");
	// if($login <= 0){
	// 	$error = "Wrong Login Credentials !";
	// } else { 
	// 	$id = get("user_id","$s users $w username ='$user' and password ='$pass'");  
	// 	$role = get("role","$s users $w username ='$user' and password ='$pass'");  
	// 	$_SESSION['id'] = $id;
	// 	$_SESSION['role'] = $role;
	// 	to('index1.php?100');
	// }
} 




//Students registration part1 bio data
if(isset($_POST['register_student'])){ 
	$reg_no = filters('reg_no');
	$surname = filters('surname');
	$othernames = filters('othernames');
	$section = filters('section');
	$email = filters('email');
	$phone = filters('phone');
    $password1 = filters('password1');
    $password2 = filters('password2');
 
 if ($password1==$password2) {
 
$search1 = counts("SELECT * FROM students_data WHERE status='1' AND (reg_no='$reg_no' OR email='$email')");
     if($search1 >= 1){
            		$error1 = "User account Exist!!!";
     }
   elseif(udi("$i students_data values('','$surname','$othernames','$reg_no','','$phone','','','','','$email','','','','$section','$password1','3','1')")){
   	$success="Account created Sucessful!!!";
   }
   else{$error = "Sorry, Something went wrong!!!";}

 }else{
 	$error1 ="Password do not March!!!";
 }
}



//Students Update login details
if(isset($_POST['update_login_details'])){ 
	$surname = filters('surname');
	$other_names = filters('other_names');
	$reg_no = filters('reg_no');
	$section = filters('section');
	$phone = filters('phone');
	$email = filters('email');
    
  if(udi("$u students_data set surname='$surname', other_names='$other_names', reg_no='$reg_no', admission_year='$section', phone='$phone', email='$email'")){
   	$success="Update was Sucessful!!!";
   }
   else{$error1 = "Sorry, Something went wrong!!!";}
}





//Students registration part2  update bio data
if(isset($_POST['update_bio_data'])){ 
	$dept = filters('dept');
	$state = filters('state');
	$lga = filters('lga');
	$per_address = filters('per_address');
	$dob = filters('dob');
	$gender = filters('gender');
    $pname = filters('pname');
	$pcontact = filters('pcontact'); 
	$img = $_FILES['img']['name'];
	$target_dir = "./std/img/";
	$target_file = $target_dir.basename($_FILES["img"]["name"]); 
   move_uploaded_file($_FILES["img"]["tmp_name"], $target_file); 

 
  if(udi("$u students_data set dept='$dept', state='$state', lga='$lga', per_address='$per_address', dob='$dob', gender='$gender', parents_name='$pname', parents_contact='$pcontact', img='$img'")){
   	$success="Update was Sucessful!!!";
   }
   else{$error = "Sorry, Something went wrong!!!";}
}



//achive student 
if(isset($_POST['green_file_update'])){ 
	$std_id = filters('std_id');
	$file = filters('file');
	$yes="yes";
   $check20 = counts("SELECT * FROM students_data WHERE status='1' AND std_id='$std_id' and green_file='$yes'");

if($check20>0){
	$success="You have already submitted your green file!";
}
elseif(udi("$u students_data set green_file='Yes' where std_id='$std_id'")){
	$success="Thank you for submitting your green file!";
	} else { 
		$error1="Sorry, something went wrong!";
	}  
}




//send_message_to_adviser
if(isset($_POST['send_message_to_adviser'])){ 
	$std_id = filters('std_id'); 
	$adviser_id = filters('adviser_id');
	 $chat_message = filters('chat_message');
	if(udi("$i student_reply values('','$std_id','$chat_message','TIMESTAMP','$adviser_id','1') ")){
		$success="Message sent!";
	} else { 
		$error1="Message not sent!";
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
	    	$notifications = "Assess Granted Sucessful! on $date ";
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