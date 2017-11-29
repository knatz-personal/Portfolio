(function () {

    $wrapper = $('#wrapper');
    $drawerRight = $('#drawer-right');

    ///////////////////////////////
    // SlideNav
    ///////////////////////////////

    function setSlideNav() {
        jQuery(".toggleDrawer").click(function (e) {
            //alert($wrapper.css('marginRight'));
            e.preventDefault();

            if ($wrapper.css('marginLeft') == '0px') {
                $drawerRight.animate({
                    marginRight: 0
                }, 500);
                $wrapper.animate({
                    marginLeft: -300
                }, 500);
            } else {
                $drawerRight.animate({
                    marginRight: -300
                }, 500);
                $wrapper.animate({
                    marginLeft: 0
                }, 500);
            }

        })
    }

    ///////////////////////////////
    // Initialize
    ///////////////////////////////


    setSlideNav();
    //    $("#project-showcase").hide();

})();
