/*PLAY PAUSE*/
var myVideo = document.getElementById("video");
function playPause() {
    if (myVideo.paused)
        myVideo.play();
    else
        myVideo.pause();
}
/*Replay*/
function Reset(){
  myVideo.pause();
  myVideo.currentTime=0;
  myVideo.play();
}
/*Abfrage Fenster schließen*/
window.onload = function(){
    document.getElementById('close').onclick = function(){
        this.parentNode.parentNode.parentNode
        .removeChild(this.parentNode.parentNode);
        return false;
    };
};
