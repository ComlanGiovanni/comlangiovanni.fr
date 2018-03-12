jQuery(function(){
    var kKeys = [];
    function Kpress(e){
        kKeys.push(e.keyCode);
        if (kKeys.toString().indexOf("38,38,40,40,37,39,37,39,66,65") >= 0) {
            jQuery(this).unbind('keydown', Kpress);
            kExec();
        }
    }
    jQuery(document).keydown(Kpress);
});
function kExec(){
    window.open('http://interneeeeet.com/');
}

/*Idee original de konami code a trouver*/
/*afficher mes resaux pour jeunes fb twit insta  etc*/
/* un pedo bear qui apparait */
