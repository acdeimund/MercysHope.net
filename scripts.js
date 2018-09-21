jQuery(document).ready(function ($) {


// Handles the pictures in the header of the home page

// For mouse

    $(".child_pic_event").mouseenter(
            function (event) {
                $(this).children(".name").fadeIn(400);
                $(this).fadeTo(400, 1);
            }
    );

    $(".child_pic_event").mouseleave(
            function (event) {
                $(".name").fadeOut(400);
                $(this).fadeTo(400, .65);
            }
    );

// For touchscreens

    $(".child_pic_event").on("touchstart",
            function (event) {
                if ($(this).hasClass("selected")) {
                    //If the image has been tapped, follow the link
                    return true;
                } else {
                    //If the image hasn't been tapped, unselect all others and select this one
                    event.preventDefault();
                    $(".name").fadeOut(400);
                    $(".selected").fadeTo(400, .65);
                    $(".selected").removeClass("selected");
                    $(this).addClass("selected");
                    $(this).children(".name").fadeIn(400);
                    $(this).fadeTo(400, 1);
                }
            }
    );

// Add functionality for minimized menu

    $(".minimized_menu").on("click",
            function (event) {
                // Remove the transalte class if it's been triggered
                $("#header_nav").removeClass("translate");
                // Test if the scrolled menu is showing
                if ($("#scrolled_nav").css("display") == "block") {
                    $("#header_nav").addClass("translate");
                }

                if ($("#header_nav").hasClass("show")) {
                    $("#header_nav").slideUp(400);
                } else {
                    $("#header_nav").slideDown(400);
                }
                $("#header_nav").toggleClass("show");
            }
    );

// Add the menu after the screen scrolls down

    $(window).scroll(
            function () {
                if ($(this).scrollTop() > 95) {
                    $("#scrolled_nav").slideDown(400);
                } else {
                    $("#scrolled_nav").slideUp(400);
                }
            }
    );

// Shows the menu if it has been hidden and the screen gets wide again
$( window ).resize(function() {
    if($( window ).width()> 930){
        $("#header_nav").show();
    }else{
        $("#header_nav").hide();
    }
});

// Add support for selecting child on sponsorship page

// For mouse
    $(".child_pic_small").mouseenter(
            function (event) {
                if ($(this).hasClass("selected")) {
                    return;
                }else{
                    $(".child_pic_small").fadeTo(0, .65);
                    $(this).fadeTo(400, 1);
                    $(".selected").removeClass("selected");
                    $(this).addClass("selected");
                    $(".bio").hide();
                    $("#" + $(this).attr("id") + "_bio").fadeTo(400, 1);
                }
            }
    );


// For touch screens
    $(".child_pic_small").on("touchstart",
            function (event) {
                if ($(this).hasClass("selected")) {
                    //If the image has been tapped, follow the link
                    return true;
                } else {
                    //If the image hasn't been tapped, unselect all others and select this one
                    event.preventDefault();
                    $(".selected").fadeTo(400, .65);
                    $(".selected").removeClass("selected");
                    $(this).addClass("selected");
                    $(this).fadeTo(400, 1);
                    $(".bio").hide();
                    $("#" + $(this).attr("id") + "_bio").fadeTo(400, 1);
                }
            }
    );
});