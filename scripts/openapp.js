function launchApp(){
    var appstorefail = "http://www.blakejustice.co/download";

    var loadedAt = +new Date;
    setTimeout(
        function(){
            if (+new Date - loadedAt < 2000){
                window.location = appstorefail;
            }
        },100);
    window.open("blakejustice://","_self");
}
launchApp()
