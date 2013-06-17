function launchApp(){
    var level = getUrlVars()["level"];
    var uri = ("blakejustice://level=" + level);

    var appstorefail = "http://www.blakejustice.co/download";

    var loadedAt = +new Date;
    setTimeout(
        function(){
            if (+new Date - loadedAt < 2000){
                window.location = appstorefail;
            }
        },100);
    window.open(uri,"_self");
}

function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}


launchApp()
