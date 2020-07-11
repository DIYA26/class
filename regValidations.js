function check()
{

 if(document.regform.fname.value=="")
  {
    alert("Plese Enter First Name");
	document.regform.fname.focus();
	return false;

  }
  if(document.regform.lname.value=="")
  {
    alert("Plese Enter Last Name");
	document.regform.lname.focus();
	return false;

  }
  if(document.regform.email.value=="")
  {
    alert("Plese Enter Email");
	document.regform.email.focus();
	return false;

  }
 if(document.regform.pw.value=="")
  {
    alert("Plese Enter Your Password");
	document.regform.pw.focus();
	return false;
  } 
  if(document.regform.cpw.value=="")
  {
    alert("Plese Enter Confirm Password");
	document.regform.cpw.focus();
	return false;
  }
  if(document.regform.pw.value!=document.regform.cpw.value)
  {
    alert("Confirm Password does not matched");
	document.regform.cpw.focus();
	return false;
  }
  
  

  e=document.regform.email.value;
  if(e)
  {
    f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}
  }

		
  return true;
  }