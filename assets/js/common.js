jQuery(document).ready(function($) {

    /**
     * AJAX reload
     */

    //var $ajaxLinks = $('.header-links a')
    //    .add('.header-logo a')
    //    .add('.side-menu-block a')
    //    .add('.news-list-item a')
    //    .add('.pagination a')
    //    .add('.articles-cats a')
    //    .add('.B_crumbBox a'); // сюда вешаем событие при загрузке страницы
    


    var $ajaxLinks = $("a:not([href^='http']), a[href^='http://mysite.com']"),
        $ajaxContainer = $('#ajax-container'),
        $loading = $('<div class="loading"><img src="/assets/images/loading.gif" alt="loadind"></div>');

    $ajaxLinks.on('click', ajaxAction);
    $('.side-menu-block h4').on('click', collapseSideMenu);
    $('.side-menu-block .inner-wrap .fa').on('click', collapseSideMenu);
    $('.side-menu-block h4').slice(4,6).trigger('click');
    contSideFix();
    contTablesFix();

    $(window).bind('popstate', function(e){
        ajaxAction(e, 'back');
    }); 

    /**
     * AJAX reload of main frame func
     */
    function ajaxAction (e, button) {

        if (e != '') e.preventDefault();

        var $this = $(this);
        if (button == 'back') {
            var url = window.location.pathname;
        } else {
            var url = $this.attr('href');
        }
        var minDelay = 600; //время минимальной задержки
        var startTime = new Date();        

        $.ajax({
            url: url,
            type: 'POST',
            beforeSend: function() {
                $ajaxContainer.empty();
                $ajaxContainer.append($loading); // бегунок загрузки
            }
        })
        .done(function(response) {
            //console.log("success");            

            if (url != window.location){
                if (button != 'back') {
                    window.history.pushState({path:url},'',url);
                }
            }

            if ($this.parents('.header-links').length > 0) {
                $('.header-links a').removeClass('active');
                $this.addClass('active');
            } else {
                $('.side-menu-block li').removeClass('active');
                $this.parent().addClass('active');
            }
              
            var endTime = new Date();
            var time = endTime - startTime;

            if (time < minDelay) {
                setTimeout(function(){
                    ajaxRender(response);
                    contSideFix();
                    contTablesFix();
                }, minDelay - time);
            } else {
                ajaxRender(response);
                contSideFix();
                contTablesFix();
            };

        })
        .fail(function() {
            //console.log("error");
        })
        .always(function() {
            //console.log("complete");
        });

        //return false;

    }

    /**
     * After AJAX complete
     */
    function ajaxRender (response) {

        var scrollTop = $(window).scrollTop();
        //var winHeight = $(window).height();

        $ajaxContainer.empty();
        $ajaxContainer.append(response).fadeIn();

        //console.log(scrollTop); //check
        if (scrollTop > 108) {
            //disableScroll();
            $('html, body').animate({scrollTop: 108}, 400);
        }

        //$('.B_crumbBox a')
        //.add('.news-list-item a')
        //.add('.pagination a')
        //.add('.articles-cats a')
        //.on('click', ajaxAction); //сюда вешаем событие после AJAX

        $("a:not([href^='http']), a[href^='http://mcmp']").unbind('click').on('click', ajaxAction);

    }

    /**
     * Side menu collapse
     */
    function collapseSideMenu () {
        $this= $(this);
        $this.next().slideToggle();
        $outerIcon = $this.children('.fa');

        if ($outerIcon.length > 0) $this.children('.fa').toggleClass('turn');
        if ($this.hasClass('fa')) $this.toggleClass('unturn');

        if ($this.parent('.inner-wrap').length > 0) 
            var $titleA = $this.parent('.inner-wrap')
                .prev()
                .find('a')
                .toggleClass('opened');
    }


    /**
     * Content side menu fix
     */    
    function contSideFix () {
        var $sideBlock = $('.content .side-menu-block');
        var $rightBox = $('.content .right-box');
        var bcHeight = $('.bc-wrap').height() + 27;
        var sbHeight = $sideBlock.height() + 60;
        //console.log(bcHeight);
        $sideBlock.css('top', bcHeight + 'px');
        $rightBox.css('top', sbHeight + 'px');       
    }

    /**
     * Content tables
     */
    function contTablesFix () {
        var $tables = $('.content table');
        $tables.each(function() {
            $(this).addClass('table table-bordered table-striped');
        });
    }

    ///**
    // * preventDefault
    // */
    //function preventDefault(e) {
    //    e = e || window.event;
    //    if (e.preventDefault)
    //        e.preventDefault();
    //    e.returnValue = false;  
    //}
//
    ///**
    // * disableScroll
    // */
    //function disableScroll () {
    //    if (window.addEventListener) // older FF
    //        window.addEventListener('DOMMouseScroll', preventDefault, false);
    //    window.onwheel = preventDefault; // modern standard
    //    window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
    //    window.ontouchmove  = preventDefault; // mobile
    //}
//
    ///**
    // * enableScroll
    // */
    //function enableScroll () {
    //    if (window.removeEventListener)
    //        window.removeEventListener('DOMMouseScroll', preventDefault, false);
    //    window.onmousewheel = document.onmousewheel = null; 
    //    window.onwheel = null; 
    //    window.ontouchmove = null;  
    //    document.onkeydown = null;  
    //}

    /* Top menu */

    /*var login_content = new HoverWatcher('#top_nav > li > ul');
	var header_login = new HoverWatcher('#top_nav > li a');
	var is_touch_enabled = false;

	if ('ontouchstart' in document.documentElement)
	is_touch_enabled = true;

	$("#top_nav > li a").hover(
		function(){
				$("#top_nav > li > ul").stop(true, true).slideDown(450);
		},
		function(){
			setTimeout(function(){
				if (!header_login.isHoveringOver() && !login_content.isHoveringOver())
					$("#top_nav > li > ul").stop(true, true).slideUp(450);
			}, 200);
		}
	);

	$("#top_nav > li > ul").hover(
		function(){
		},
		function(){
			setTimeout(function(){
				if (!login_content.isHoveringOver())
					$("#header .cart_block").stop(true, true).slideUp(450);
			}, 200);
		}
	);
	function HoverWatcher(selector)
	{
		this.hovering = false;
		var self = this;

		this.isHoveringOver = function(){
			return self.hovering;
		}

		$(selector).hover(function(){
			self.hovering = true;
		}, function(){
			self.hovering = false;
		})
	}*/

});

/*// Revert to a previously saved state
window.addEventListener('popstate', detectBackOrForward(
  function() { console.log("back") },
  function() { console.log("forward") }
));

function detectBackOrForward (onBack, onForward) {
  hashHistory = [window.location.hash];
  historyLength = window.history.length;

  return function() {
    var hash = window.location.hash, length = window.history.length;
    if (hashHistory.length && historyLength == length) {
      if (hashHistory[hashHistory.length - 2] == hash) {
        hashHistory = hashHistory.slice(0, -1);
        onBack();
      } else {
        hashHistory.push(hash);
        onForward();
      }
    } else {
      hashHistory.push(hash);
      historyLength = length;
    }
  }
};*/