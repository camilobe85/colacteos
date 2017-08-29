$(function() {
    //next

    changeText($('section.navSelected'));

    $('.next').click(function() {
        var $el = $('section.navSelected').removeClass('navSelected');
        var $next = $el.next();

        console.log($next.find('.NavigationItem'));

        if ($next.length === 0)
            $next = $('section:first');
        changeText($next);
        $next.addClass('navSelected');
    });
    //prev
    $('.previous').click(function() {
        var $el = $('section.navSelected').removeClass('navSelected');
        var $next = $el.prev();

        console.log($next.length);

        if ($next.length === 0)
            $next = $('section:last');
        changeText($next);
        $next.addClass('navSelected');
    });

    function changeText(sectSel) {

        var title = $(sectSel).attr("title");

        $('.fillSpace').empty();
        $('.fillSpace').append(title);

    }
});