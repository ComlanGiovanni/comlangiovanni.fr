var fontfamily = true;
$(".fontnompren").click(function(){
    if(fontfamily){
        $(".nomprenom").css("font-family", "Greatvibes");
        fontfamily = false;
    }else{
        $(".nomprenom").css("font-family", "GoodDog");
        fontfamily = true;
    }
});