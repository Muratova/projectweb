var res; 
function func1(){ 
var e = document.getElementById('email').value; 
var wrch = /[0-9a-z_]+@[0-9a-z_][0-9a-z_]+\.[a-z]{2,5}/i; 
if(e.length == 0){alert("write your e-mail");return false;} 
else if (!wrch.test(e)) {alert("Your email is wrong.");return false;} 
return func2();} 
function func2(){ 
var wrch = /[\W_]/; 
var p = document.getElementById('password').value; 
if(p.length == 0){alert("write your password");return false;} 
else if (wrch.test(p)) {alert("The password has wrong characters.");return false;} 
else if ((p.length < 6) || (p.length > 20)) {alert("password has wrong length");return false;} 
else if ( (p.search(/[a-zA-Z]+/)==-1) || (p.search(/[0-9]+/)==-1) ) {alert("The password must contain at least one numeral");return false;} 
return func3();} 
function func3(){ 
var wrch = /[a-zA-Z]/; 
var name = document.getElementById('name').value; 
if(name == ''){alert("write your name");return false;} 
if(!wrch.test(name)){alert("your name has wrong characters");return false;} 
return func4(); 
} 
function func4(){ 
var wrch = /[a-zA-Z]/; 
var surname = document.getElementById('surname-area').value; 
if(surname == ''){alert("write your surname");return false;} 
if(!wrch.test(surname)){alert("your surname has wrong characters");return false;} 
return function5(); 
} 

function func(){ 
var d = func1(); 
if(d){ 
res = true; 
}else{res=false} 
}