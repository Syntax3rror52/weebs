function check(form)
   {
      var uservalue = document.getElementById('username').value;
      var pass = document.getElementById("password").value;
      
      if(uservalue == "" && pass == "" || uservalue == "" || pass == ""){
        alert("Fill up the blank")
    }
		else if(form.userid.value == "luffy05" && form.password.value == "pirateking"){
			window.location.href = 'index.html';
			alert("Login Successfully");
    }else{
			alert("This username and password you entered is don't match");
		}
  }

 function nospaces(t)
 {

if(t.value.match(/\s/g)){

alert('No spaces allowed');

t.value=t.value.replace(/\s/g,'');

  }

} 
function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;

        return true;
    } 

function checkPass(){
  var txt = document.getElementById('txt2');
  var pas = document.getElementById("password1").value.length;

  if(pas ==0){
    txt2.innerHTML="";
  }else if(pas<5)
  {
    txt2.innerHTML="Weak Password";
    txt2.style.color = "red";
    document.getElementById("input").style.border="1px solid red";
  }else if(pas<10)
  {
    txt2.innerHTML="Normal Password";
    txt2.style.color = "orange";
    document.getElementById("input").style.border="1px solid orange";
  }else{
    txt2.innerHTML="Strong Password";
    txt2.style.color = "lime";
    document.getElementById("input").style.border="1px solid lime";
  }
}
function show(){
  var x = document.getElementById("password");
  if(x.type == "password"){
    x.type = "text";
    document.getElementById('hide').style.display = "inline-block"
    document.getElementById('show').style.display = "none"
  }
  else{
    x.type = "password";
    document.getElementById('hide').style.display = "none"
    document.getElementById('show').style.display = "inline-block"
  }
  
}