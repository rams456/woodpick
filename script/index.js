// affix section
function stickyHead()
{
	// var stickyHead=document.getElementsByTagName('header')[0];
	var stickyHead=document.getElementById('head');

	if(window.pageYOffset>0)
	{
		stickyHead.classList.add('stickyNav');
	}
	else
	{
		stickyHead.classList.remove('stickyNav');
	}
}
window.onscroll=function()
{
	stickyHead();
}


// Get the modal box
let modal=document.getElementById('modal_section');
	
// get the btn that open the modal
let modal_btn=document.getElementById('login_btn');

modal_btn.onclick=function()
{
	modal.style.display = "block";
}
window.onclick=function(event)
{
	if(event.target==modal)
	{
		modal.style.display="none";
	}
}


// Login & register section 
let register=document.getElementById('reg');
let login_box=document.querySelector('.login_box');

let login=document.getElementById('lgn');
let register_box=document.querySelector('.register_box');
register.onclick=function()
{
	register_box.style.display="block";
	login_box.style.display="none";
}
login.onclick=function()
{
	register_box.style.display="none";
	login_box.style.display="block";

}

// check login details
function logindetail()
{
	let user=document.getElementsByName('user')[0].value;
	// let user=document.loginform.user.value;
	// let userpass=document.loginform.pass.value;
	let userpass=document.getElementsByName('pass')[0].value;

	if((user=="")||(userpass==""))
	{
		alert("Please Enter somethi");
		return false;
	}

}

// check register details
function userdetail()
{
	let user_first_name=document.getElementsByName('user_first_name')[0].value;
	let user_last_name=document.getElementsByName('user_last_name')[0].value;
	let user_email=document.getElementsByName('user_email')[0].value;
	let user_password=document.getElementsByName('user_password')[0].value;
	// let user=document.loginform.user.value;
	// let userpass=document.loginform.pass.value;

	if((user_first_name=="")||(user_last_name=="")||(user_email=="")||(user_password==""))
	{
		alert("Please Enter Your Details");
		return false;
	}

}

