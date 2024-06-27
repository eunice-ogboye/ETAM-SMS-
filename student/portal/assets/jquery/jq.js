
onload = retrieverec();
function retrieverec(){
	//alert('this should show upon page load');
	$.get("assets/jquery/php-links/userdata.php").done(function(data){
		var data = $.parseJSON(data);
	//alert(data['Username']);
		if (data!=0){
			//$("#loginUser").text(data['Username']);
			$("#loginUser").text(data['matno']);
			$("#loginfname").text(data['fname']);
			$("#logindept").text(data['dept']);
			$("#userid").val(data['Id']);
			$("#loginUserId").val(data['Id']);	
			
			//profile

			$("#loginfnamez").text(data['fname']);
			$("#logindeptz").text(data['dept']);
			$("#loginfacultyz").text(data['faculty']);
			$("#loginlevelx").text(data['levelx']);

			//Course Registration
			$("#logindeptx").val(data['dept']);
			$("#loginfacultyx").val(data['faculty']);
			$("#loginlevel").val(data['levelx']);
			$("#loginmatno").val(data['matno']);

			//print
			$("#loginmatnop").text(data['matno']);
			$("#printmatno").text(data['matno']);
			$("#printfname").text(data['fname']);
			$("#printfaculty").text(data['faculty']);
			$("#printdept").text(data['dept']);
			$("#printlevel").text(data['levelx']);

			//title print
			$("#titlep").text(data['fname']);


		}else{
			//emptyinput();
			$("#loginUser").text('');
		}
	});	

}


onload = fetch_setting();
function fetch_setting(){
	$.post("assets/jquery/php-links/fetch_academic.php").done(function(data){
		if(data!=0){
			var row =$.parseJSON(data);
			//$("#Id").val(row.Id);
			
			$("#sessionz").text(row.sessionx);
			$("#semesterz").text(row.semester);


		}
	});
}


	//#================================================Manage course reg===================================================

function register_course(){
	semester    =	$("#semester_course").val().trim();
	level       =	$("#level").val().trim();
	session       =	$("#session").val().trim();
	
	if (semester=='' || level == '' || session ==''){
		
		 alert('One or more selection is empty');
	}
	else{

			if (confirm("Are you sure you want to Register Now?")==true){
				var formdata = $("#course_frm").serialize();
				$.post("assets/jquery/php-links/course_reg.php",formdata).done(function(data){
					if (data==1){
						alert('Course Registered');
						
						
					}
					else if(data==2){
						alert('Course has been registered already');
						
					}
					else{
						alert('Course not Registered');
					}
				});
			}
		
		}
	}
	//onload = fetchrecords();
	function show_coursez(){
		semester_course  =  $("#semester_course").val().trim();

		if(semester_course == ''){
			alert('One selection empty');
		}
		else{
			
		$("#fetch_course").empty();
		$coursesdata = $("#course_frm").serialize();
	//	alert($coursesdata);
		$.get("assets/jquery/php-links/fetch_courses.php",$coursesdata).done(function(cour){

				$("#fetch_course").append(cour);
		});

	}
	}



	//print course form
    onload = print_course_form();
	function print_course_form(){
		$("#print_form").empty();
		$.get("assets/jquery/php-links/print_course.php").done(function(kjkh){
				$("#print_form").append(kjkh);
	         		//course print

		});

	}

    
		function view_faculty(getvalue){
		$passdata = "Id="+getvalue;
		$.post("assets/jquery/php-links/view_faculty.php",$passdata).done(function(data){
			if(data!=0){
				var row =$.parseJSON(data);
				$("#Id").val(row.Id);
				$("#faculty").val(row.faculty);
			}
		});
	}


	//#================================================End of Manage reg===================================================


	onload = fetch_deptz()
	function fetch_deptz(){
		$("#dept_student").empty();
		$.get("assets/jquery/php-links/fetch_dept_select.php",function(hjhjhj){
			$("#dept_student").append(hjhjhj);
		});
	}


	onload = fetch_faculty()
	function fetch_faculty(){
		$("#facultys").empty();
		$.get("assets/jquery/php-links/fetch_faculty_select.php",function(jhjh){
			$("#facultys").append(jhjh);
		});
	}


//#=====================================Counter======================================
	// function for retrieving record
    onload = counter();
	//$("#Username").text('Welcome Staff User');
    
    function counter(){
    	//Total Excos
		$.get("assets/jquery/php-links/count-faculty.php").done(function(data){
		   var data = $.parseJSON(data);
			//alert(data['count']);
			if (data!=0){
				$("#Cfaculty").text(data['count']);
				
			}else{
				//emptyinput();
				$("#Cfaculty").text('0');
			}
        });	



		$.get("assets/jquery/php-links/count-dept.php").done(function(data){
			var data = $.parseJSON(data);
			 //alert(data['count']);
			 if (data!=0){
				 $("#Cdept").text(data['count']);
				 
			 }else{
				 //emptyinput();
				 $("#Cdept").text('0');
			 }
		 });	 
		 
		 
		 $.get("assets/jquery/php-links/count-student.php").done(function(data){
			var data = $.parseJSON(data);
			 //alert(data['count']);
			 if (data!=0){
				 $("#Cstudent").text(data['count']);
				 
			 }else{
				 //emptyinput();
				 $("#Cstudent").text('0');
			 }
		 });	 

      	
}



	
	
	
