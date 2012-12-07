function flipTime(minute) {
    var minutes = new Array();
    for(i = 0; i < 60; i++) {
        minutes[i] = i;
    }
    if(minute < 0 || minute > 60) {
        document.write("Error in displaying, check the minute!");
        exit(-1);
    }
    var minutePic = minutes[minute];
}

function flipTransition() {
    document.write("-webkit-transition: \n");
    document.write("transition-property: \n");
    document.write("-moz-transition: \n");
    document.write("-o-transition: \n");
}
