function adminlogin(){
        userName	=	$("#userName").val().trim();
        userPassword	=	$("#userPassword").val().trim();
        //alert('this is where I am ');
        if (userName=='' && userPassword==''){
           $("#remarks").text('Username and Password are empty');
          // alert('Username and Password are empty');
        }else if (userName == ''){	
            $("#remarks").text('Username is empty');
           //alert('Username is empty');
         }
        else if (userPassword == '') {
            $("#remarks").text('Password is empty');
          // alert("Password is empty");
        }
        else{
            
            var formdata = "userName="+userName+"&userPassword="+userPassword;
            //alert(formdata);
            $.post("assets/jquery/phpauth.php", formdata).done(function(data){
                // alert(data);
                if (data==0){
                    $("#remarks").text('Invalid Username');
                   //   alert("Invalid Username");
                }else if(data==1){
                   $("#remarks").text('Invalid Password');
                    //alert("Invalid Password");
                }else if(data==2){
                    window.location.href="../app/";
                }
                else if(data==-1){
                    $("#remarks").text('SQL INJECTION DETECTED');
                }else{
                    alert(data);
                  // window.location.href="../examofficers/";
                }					
            });	
        }
    }
    
        