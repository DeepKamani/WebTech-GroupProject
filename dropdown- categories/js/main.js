
function openCate(evt, cityName) {
    navOpened = true;
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace("active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
    tabcontent = document.getElementsByClassName("tabcontent");
    
}

function closeCate(evt, cityName) {
    if(evt.target == document.getElementById("mainContent")){
         var i, tabcontent, tablinks;
    
    // tabcontent = document.getElementsByClassName("tabcontent");
    // for (i = 0; i < tabcontent.length; i++) {
    //     tabcontent[i].style.display = "none";
    // }
    // tablinks = document.getElementsByClassName("tablinks");
    // for (i = 0; i < tablinks.length; i++) {
    //     tablinks[i].className = tablinks[i].className.replace("active", "");
    // }
    document.getElementById(cityName).style.display = "none";
    // evt.currentTarget.className += "active";
    // tabcontent = document.getElementsByClassName("tabcontent");
    }
       
    
}     