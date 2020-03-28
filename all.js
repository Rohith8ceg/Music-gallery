document.addEventListener('play', function(e){
    var audios = document.getElementsByTagName('audio');
    for(var i = 0, len = audios.length; i < len;i++){
        if(audios[i] != e.target){
            audios[i].pause();
        }
    }
}, true);
t=[];
function at(x){
t.push(x);
window.alert(x + " " + "is added to the playlist");
}
var r="";
var i;
function pl(){
for(i=0; i<t.length; i++){
r += (i+1) + "." + t[i] + "<br>";
}
document.getElementById("pl").innerHTML = "Your Playlist :" + "<br>" + r;
}