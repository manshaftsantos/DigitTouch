var on = true;
var off = true;

document.getElementById("con").style.visibility = "hidden";
document.getElementById("nco").style.visibility = "hidden";
document.getElementById("co").onclick = function(){
    if(on == true && off == true){
        document.getElementById("con").style.visibility = "visible";
        on = false;
    }else{
        document.getElementById("con").style.visibility = "hidden";
        on = true;
    }
    if(on == true && off == false){
        document.getElementById("nco").style.visibility = "hidden";
        off = true;
    }
    
};

document.getElementById("nc").onclick = function(){
    if(on == true && off == true){
        document.getElementById("nco").style.visibility = "visible";
        off = false;
    }else{
        document.getElementById("nco").style.visibility = "hidden";
        off = true;
    }
    if(on == false && off == true){
        document.getElementById("con").style.visibility = "hidden";
        on = true;
    }
    
};
document.getElementById("btn_close").onclick = function(){
    if( off == false){
        document.getElementById("nco").style.visibility = "hidden";
        off = true;
    }
    
};
document.getElementById("btn_close1").onclick = function(){
    if( on == false){
        document.getElementById("con").style.visibility = "hidden";
        on = true;
    }
    
};



