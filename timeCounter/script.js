var fixed = new Date("Feb 11, 2023 11:00:00").getTime();
var Symposium = setInterval(function(){
    var currentTime = new Date().getTime();
    var time = fixed - currentTime;
    const sec = 1000, 
    min = sec * 60, 
    hr = min * 60, 
    days = hr * 24;
    var day = Math.floor(time / days);
    var hour = Math.floor((time % (days))/(hr));
    var minute = Math.floor((time % (hr))/(min))
    var second = Math.floor((time % (min))/sec);
    document.getElementById("days").innerHTML = day+'d';
    document.getElementById("hour").innerHTML = hour+'h';
    document.getElementById("min").innerHTML = minute+'m';
    document.getElementById("sec").innerHTML = second+'s';
    if(time < 0){
        clearInterval(Symposium);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
},1000);


