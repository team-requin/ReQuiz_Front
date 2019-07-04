let a = 0;
function show_login(){
    if(a == 0){
    document.getElementById("login").style.display = "block";
    a = 1;
    }
    else{
        document.getElementById("login").style.display = "none";
        a = 0; 
    }
}