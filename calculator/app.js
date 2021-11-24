function insert(num)   
{ 
    document.form1.result.value = document.form1.result.value + num;  
}  

function equal()  
{  
var exp = document.form1.result.value;  
if(exp)  
{  
document.form1.result.value = eval(exp)  
}  
}  

