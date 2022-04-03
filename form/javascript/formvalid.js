/*alert("hello world");
prompt();
confirm();
document.write("hello");
console.log("hello");

let i="hello";
if(i=="hello")
{
	alert("yes");
}
else if()
{

}*/

//function fun()
//{
  //alert("Form has ben submitted");
 // var input=prompt();
	//document.getElementById('name').value=input;
//}
function add(a,b)
{
  //alert(a+b);
  
}
function fun()
{
	var firstname = document.getElementById("fname");
	var secondname = document.getElementById("sname");
	var num = document.getElementById("num");
	var mail = document.getElementById("mail");//city
	var add = document.getElementById("add");
	var city = document.getElementById("city");
      var male = document.getElementById("m");
   var female = document.getElementById("f");
      var cri = document.getElementById("cri");

   var che = document.getElementById("che");

   var foot = document.getElementById("foot");
      var upload = document.getElementById("upload");
      //alert(upload);



  //alert(cri.checked);





	firstname.focus();
	//alert(secondname);

	if(firstname.value=="")
	{
		alert("please enter your  first name");
	//	firstname.focus();

	}else if(!isNaN(firstname.value))
	{
		alert("do not enter the number plzz");
		//firstname.focus();
	}

	else if(secondname.value=="")
	{
		alert("please enter your  last name");
		secondname.focus();
	    console.log(secondname);

	}else if(!isNaN(secondname.value))
	{
		alert("do not enter the number plzz");
		secondname.value="";
		secondname.focus();
	    console.log(secondname);

	}
	else if(mail.value=="") 
    {
    	alert("please enter your emailid");
    }
   else if(!validemail(mail.value))
    {
        alert("please enter valid email");
    }

	else if(num.value=="")
    {
    	alert("please Enter mobile number")
    }

    else if(num.value.length!=10)
    {
    	alert("number should be 10 digits")
    }
    else if(isNaN(num.value)) 
    {
    	alert("please enter number");
    }
    else if(m.checked==false && f.checked==false) 
    {
      //alert(m.checked);
      alert("enter your gender");
    }
    else if(cri.checked==false && che.checked==false && foot.checked==false) 
    {
      alert("please enter your hobbies");
    }
    else if(add.value=="")
    {
       alert("please enter address properly");
    }
    else if(add.value.length>40)
    {
    	alert("address should not be exced more than 40 letters")
    }
    else if(city.value=="")
    {
       alert("please enter address properly");
       city.focus();
    }
    else if(pass1.value=="")
    {
    	alert("password fill kero");
    }
    else if(pass2.value=="")
    {
    	alert("password fill kero");
    }
    else if(!pass(pass1.value , pass2.value))
    {
       alert("pass word dimatched");
       pass1.focus();
    }
     else if(upload.value=="")
    {
         alert("please upload your image also");
    }
    else if(!(upload.value.includes(".jpg") || upload.value.includes(".pnj")))
    {
      alert("please upload only image file ");
    }
    else
    {
      if(confirm("Are you sure you want to submit"))
      {
         document.form.submit();
      }
      else
      {
         alert("somethong is wrong");
      }
    }

}
function validemail(mail)
  {
     if(mail.includes("@")&& mail.includes("."))
     {
     	            var attherate=mail.indexOf("@");
     	            var dot=mail.indexOf(".");
                  if(attherate<dot)
                  {
                  	return true;
                  }
                  else
                  {
                  	return false;
                  }

     }else
     {
     	 return false;
     }

  }

  function pass(pass1,pass2)
  {
  	             if(pass1==pass2)
  	             {
  	             	return true;
  	             }
  	              else
  	             {
  	             	 return false;
  	             }
  }


  
