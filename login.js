function check(form)/*function to check userid & password*/
{
 /*the following code checkes whether the entered userid and password are matching*/
 if(form.userid.value == "admin" && form.pswrd.value == "admin@123")
  {
	 
    window.open('payroll2.php')
  }
 else
 {
   alert("Invalid Password or Username")
  }
}