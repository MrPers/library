$( document ).ready(function() {
    $( ".cross" ).hide();
    $( ".menu" ).hide();
    $( ".hamburger" ).click(function() {
        $( ".menu" ).slideToggle( "slow", function() {
            $( ".hamburger" ).hide();
            $( ".cross" ).show();
        });
    });
    $( ".cross" ).click(function() {
        $( ".menu" ).slideToggle( "slow", function() {
            $( ".cross" ).hide();
            $( ".hamburger" ).show();
        });
    });
    
    $(".star").on("mouseover", function(){
        $(".star").slice(0, $(".star").index(this)+1).addClass("star2");
    });
    $(".star").on("mouseout", function(){
        $(".star").slice(0, $(".star").index(this)+1).removeClass("star2");
    });
    $(".star").on("click", function(){
        jQuery.post("/book/insert/", {
            obj_id: $(this).parent().attr("id"),
            stars: $(".star").index(this)+1
        });
        location.reload();
    });
});