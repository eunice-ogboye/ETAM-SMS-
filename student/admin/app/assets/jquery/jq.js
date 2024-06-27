//logout
function logout(){
	window.location.replace("assets/jquery/php-links/logout.php");
}





onload = retrieverec();
function retrieverec(){
	//alert('this should show upon page load');
	$.get("assets/jquery/php-links/userdata.php").done(function(data){
		var data = $.parseJSON(data);
	//alert(data['Username']);
		if (data!=0){
			//$("#loginUser").text(data['Username']);
			$("#loginUser").text(data['Username']);
			$("#loginemail").text(data['email']);
			$("#userid").val(data['Id']);
			$("#loginUserId").val(data['id']);			
		}else{
			//emptyinput();
			$("#loginUser").text('');
		}
	});	
}




function update_aca(){
	//alert("Hello");
	semesterz    =	$("#semesterz").val().trim();
	sessionz     =	$("#sessionz").val().trim();
	
	if (semesterz=='' || sessionz ==''){
		
		 alert('One or more selection is empty');
	}
	else{

			if (confirm("Are you sure you want to Update Now?")==true){
				var formdata = $("#frm").serialize();
				$.post("assets/jquery/php-links/update_academic.php",formdata).done(function(data){
				
						alert('Academic Settings Updated');
						fetch_setting();
				});
			}
		
		}
	}

    onload = fetch_setting();
	function fetch_setting(){
		$.post("assets/jquery/php-links/fetch_setting.php").done(function(data){
			if(data!=0){
				var row =$.parseJSON(data);
				//$("#Id").val(row.Id);
				$("#semesterz").val(row.semester);
				$("#sessionz").val(row.sessionx);

			}
		});
	}



	//#================================================Manage Faculty===================================================
function empyfaculty(){

	$("#faculty").val("");
	$("#Id").val("");

}
function add_update_faculty(){
	faculty    =	$("#faculty").val().trim();
	Id         =	$("#Id").val().trim();

	
	if (faculty==''){
		
		 alert('Input empty');
	}
	else{

			if (confirm("Are you sure you want to Add/Update Now?")==true){
				var formdata = $("#frm").serialize();
				$.post("assets/jquery/php-links/add_update_faculty.php",formdata).done(function(data){
					if (data==1){
						alert('Faculty added');
						fetchrecords();
						empyfaculty()
					}
					else if (data==2){
						alert('Faculty Updated');
						fetchrecords();
						empyfaculty()
					}
					else{
						alert('Faculty not updated');
					}
				});
			}
		
		}
	}
	onload = fetchrecords();
	function fetchrecords(){
		$("#faculty_rec").empty();
		$.get("assets/jquery/php-links/fetch_faculty.php",function(d){
			$("#faculty_rec").append(d);
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


	function delete_faculty(getvalue){
		var msg = "Are you sure you want delete this faculty";
		if (confirm(msg)==true){
			$passdata = "Id="+getvalue;
			$.post("assets/jquery/php-links/delete_faculty.php",$passdata).done(function(data){
				if(data==1){
					alert('Faculty deleted');
					fetchrecords();
				}   
			});			
		}
	}

	//#================================================End of Manage Faculty===================================================



	//#================================================Manage Dept===================================================

function empty_dept(){
	$("#facultys").val("");
	$("#dept").val("");
	$("#Id").val("");


}
	

function add_update_dept(){
	faculty    =	$("#facultys").val().trim();
	deptz       =	$("#dept").val().trim();
	Id       =	$("#Id").val().trim();


	
	if (faculty=='' || deptz==''){
		
		 alert('One or two input empty');
	}
	else{

			if (confirm("Are you sure you want to Add/Update Now?")==true){
				var formdata = $("#frm").serialize();
				$.post("assets/jquery/php-links/add_update_dept.php",formdata).done(function(data){
					if (data==1){
						alert('Department added');
						fetch_dept();
						empty_dept();
					}
					else if (data==2){
						alert('Department Updated');
						fetch_dept();
						empty_dept();
					}
					else{
						alert('Department not updated');
					}
				});
			}
		
		}
	}

	onload = fetch_dept();
	function fetch_dept(){
		$("#facultys").empty();
		$.get("assets/jquery/php-links/fetch_faculty_select.php",function(dcv){
			$("#facultys").append(dcv);
		});

		$("#depts").empty();
		$.get("assets/jquery/php-links/fetch_dept_select.php",function(deptsd){
			$("#depts").append(deptsd);
		});

	
		$("#dept_rec").empty();
		$.get("assets/jquery/php-links/fetch_dept.php",function(d){
			$("#dept_rec").append(d);
		});
	}


	function view_dept(getvalue){
		$passdata = "Id="+getvalue;
		$.post("assets/jquery/php-links/view_dept.php",$passdata).done(function(data){
			if(data!=0){
				var row =$.parseJSON(data);
				$("#Id").val(row.Id);
				$("#facultys").val(row.faculty);
				$("#dept").val(row.dept);

			}
		});
	}

	function delete_dept(getvalue){
		var msg = "Are you sure you want delete this department";
		if (confirm(msg)==true){
			$passdata = "Id="+getvalue;
			$.post("assets/jquery/php-links/delete_dept.php",$passdata).done(function(data){
				if(data==1){
					alert('Department deleted');
					fetch_dept();
				}   
			});			
		}
	}

	
	//#================================================End of Manage Dept===================================================

//#=========================================================Manage courses info====================================================

function empty_course(){
	$("#title").val("");
	$("#code").val("");
	$("#Id").val("");
	$("#session").val("");
	$("#depts").val("");
	$("#facultys").val("");
	$("#unit").val("");
	$("#level").val("");
	$("#semester").val("");

}



function add_update_courses(){
	facultys    =	$("#facultys").val().trim();
	depts       =	$("#depts").val().trim();
	title       =	$("#title").val().trim();
	code        =	$("#depts").val().trim();
	unit        =	$("#unit").val().trim();
	semester    =	$("#semester").val().trim();
	level       =	$("#level").val().trim();
	session       =	$("#session").val().trim();
	Id          =	$("#Id").val().trim();



	
	if (facultys=='' || depts=='' || unit == '' || semester == '' || level =='' ||
	    session == ''|| code =='' || title == ''){
		
		 alert('One or two input empty');
	}
	else{

			if (confirm("Are you sure you want to Add/Update Now?")==true){
				var formdata = $("#frm").serialize();
				$.post("assets/jquery/php-links/add_update_courses.php",formdata).done(function(data){
					if (data==1){
						alert('Course added');
					   fetch_courses();
					   empty_course();
					   
					}
					else if (data==2){
						alert('Courses Updated');
					   fetch_courses();
					   empty_course();

					}
					else{
						alert('Course not updated');
					}
				});
			}
		
		}
	}


	onload = fetch_courses();
	function fetch_courses(){

		$("#courses_rec").empty();
		$.get("assets/jquery/php-links/fetch_courses.php",function(dwert){
			$("#courses_rec").append(dwert);
			//$("#Id").val("");

		});
	}



	function view_courses(getvalue){
		$passdata = "Id="+getvalue;
		$.post("assets/jquery/php-links/view_courses.php",$passdata).done(function(data){
			if(data!=0){
				var row =$.parseJSON(data);
				$("#Id").val(row.Id);
				$("#facultys").val(row.facultys);
				$("#depts").val(row.depts);
				$("#unit").val(row.unit);
				$("#level").val(row.levelx);
				$("#title").val(row.title);
				$("#code").val(row.code);
				$("#semester").val(row.semester);
				$("#session").val(row.sessionx);


			}
		});
	}

	function delete_courses(getvalue){
		var msg = "Are you sure you want delete this course";
		if (confirm(msg)==true){
			$passdata = "Id="+getvalue;
			$.post("assets/jquery/php-links/delete_courses.php",$passdata).done(function(data){
				if(data==1){
					alert('Courses deleted');
					fetch_dept();
				}   
			});			
		}
	}
//#=========================================================End of Manage courses info====================================================

//#=========================================================Manage student ================================================================






function add_update_student(){
	facultys      =	$("#facultys").val().trim();
	dept_student  =	$("#dept_student").val().trim();
	matno         =	$("#matno").val().trim();
	fname         =	$("#fname").val().trim();
	level         =	$("#level").val().trim();
	
	if (facultys=='' || dept_student=='' || level == '' ||  fname ==''){
		
		 alert('One or two input empty');
	}
	else{

			if (confirm("Are you sure you want to Add/Update Now?")==true){
				var formdata = $("#frm").serialize();
				$.post("assets/jquery/php-links/add_update_students.php",formdata).done(function(data){
					if (data==1){
						alert('Student added');
					    fetch_student();
						fetch_dept();
						fetch_deptz();
						$("#matno").val("");
						$("#psw").val("");
						$("#fname").val("");
						

					}
					else if (data==2){
						alert('Student Updated');
					    fetch_student();
						fetch_dept();
						fetch_deptz();
						$("#matno").val("");
						$("#psw").val("");
						$("#fname").val("");
						
					}
					else{
						alert('Student not updated');
					}
				});
			}
		
		}
	}


	onload = fetch_student();
	function fetch_student(){

		$("#student_rec").empty();
		$.get("assets/jquery/php-links/fetch_students.php",function(erg){
			$("#student_rec").append(erg);
		});
	}


	function view_students(getvalue){
		$passdata = "Id="+getvalue;
		$.post("assets/jquery/php-links/view_students.php",$passdata).done(function(data){
			if(data!=0){
				var row =$.parseJSON(data);
				$("#Id").val(row.Id);
				$("#facultys").val(row.faculty);
				$("#depts").val(row.dept);
				$("#level").val(row.levelx);

				//$("#psw").val(row.psw);
				$("#fname").val(row.fname);
				$("#matno").val(row.matno);
				//alert(row.faculty);


			}
		});
	}

	function delete_student(getvalue){
		var msg = "Are you sure you want delete this student";
		if (confirm(msg)==true){
			$passdata = "Id="+getvalue;
			$.post("assets/jquery/php-links/delete_student.php",$passdata).done(function(data){
				if(data==1){
				//	alert('Student deleted');
					
					fetch_student();

				}   
			});			
		}
	}

	onload = fetch_deptz()
	function fetch_deptz(){
		$("#dept_student").empty();
		$.get("assets/jquery/php-links/fetch_dept_select.php",function(hjhjhj){
			$("#dept_student").append(hjhjhj);
		});
	}

//=================================================End of Manage Student====================================================


//Home setting - contact
onload = home_contact();
function home_contact(){
	//alert('this should show upon page load');
	$.get("assets/jquery/php-links/home-contact.php").done(function(data){
		var data = $.parseJSON(data);
	//alert(data['phone']);
		if (data!=0){
			$("#contact_phone").val(data['phone']);
			$("#contact_mail").val(data['email']);
			$("#contact_address").val(data['address']);	
			$("#insta").val(data['insta']);	
			$("#fb").val(data['fb']);	

		}
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



	
	
	
