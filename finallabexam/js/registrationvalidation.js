function validate() {
let isValid = true;
document.getElementById("enamemsg").innerText = "";
document.getElementById("contractmsg").innerText = "";
document.getElementById("usernamemsg").innerText = "";
document.getElementById("passwordmsg").innerText = "";

const ename = document.getElementById("ename").value;
const contract = document.getElementById("contract").value;
const username = document.getElementById("username").value;
const password = document.getElementById("password").value;


if (ename === "") 
{
document.getElementById("enamemsg").innerText = "Employee Name is required.";
document.getElementById('enamemsg').style.color='red';
isValid = false;
}
if (contract === "")

{
document.getElementById("contractmsg").innerText = "Contract is required.";
document.getElementById('contractmsg').style.color='red';
isValid = false;
}
if (username === "")
{
document.getElementById("usernamemsg").innerText = "Username is required.";
document.getElementById('usernamemsg').style.color='red';
isValid = false;
}
if (password === "")
{
document.getElementById("passwordmsg").innerText = "Password is required.";
document.getElementById('passwordmsg').style.color='red';
isValid = false;
}


return isValid;
}