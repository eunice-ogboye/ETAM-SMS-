function studentlogin(){
        matricnumber	=	$("#matricnumber").val().trim();
        psw	            =	$("#psw").val().trim();
        //alert('this is where I am ');
        if (matricnumber=='' && psw==''){
           $("#remarks").text('Matric number and Password are empty');
          // alert('matricnumber and Password are empty');
        }else if (matricnumber == ''){	
            $("#remarks").text('matric number is empty');
           //alert('matricnumber is empty');
         }
        else if (psw == '') {
            $("#remarks").text('Password is empty');
          // alert("Password is empty");
        }
        else{
            
            var formdata = "matricnumber="+matricnumber+"&psw="+psw;
            //alert(formdata);
            $.post("assets/jquery/phpauth.php", formdata).done(function(data){
                // alert(data);
                if (data==0){
                    $("#remarks").text('Invalid matricnumber');
                   //   alert("Invalid matricnumber");
                }else if(data==1){
                   $("#remarks").text('Invalid Password');
                    //alert("Invalid Password");
                }else if(data==2){
                    window.location.href="./portal/";
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
    
        