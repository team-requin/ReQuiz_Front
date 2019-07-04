let a = 0;
function show_login(){
    if(a == 0){
    document.getElementById("login_frame").style.display = "block";
    document.getElementById("login_shadow").style.display = "block";
    a = 1;
    }
    else{
        document.getElementById("login_frame").style.display = "none";
        document.getElementById("login_shadow").style.display = "none";
        a = 0; 
    }
}