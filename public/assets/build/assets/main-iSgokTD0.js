(function(t){if(t(window).on("load",function(){t(".preloader").fadeOut()}),t(window).on("resize",function(){t(".slick-slider").slick("refresh")}),t(".preloader").length>0&&t(".preloaderCls").each(function(){t(this).on("click",function(s){s.preventDefault(),t(".preloader").css("display","none")})}),t.fn.thmobilemenu=function(s){var e=t.extend({menuToggleBtn:".th-menu-toggle",bodyToggleClass:"th-body-visible",subMenuClass:"th-submenu",subMenuParent:"th-item-has-children",subMenuParentToggle:"th-active",meanExpandClass:"th-mean-expand",appendElement:'<span class="th-mean-expand"></span>',subMenuToggleClass:"th-open",toggleSpeed:400},s);return this.each(function(){var a=t(this);function o(){a.toggleClass(e.bodyToggleClass),a.find("."+e.subMenuClass).each(function(){t(this).hasClass(e.subMenuToggleClass)&&(t(this).removeClass(e.subMenuToggleClass),t(this).css("display","none"),t(this).parent().removeClass(e.subMenuParentToggle))})}a.find("li").each(function(){var n=t(this).find("ul, div.mega-menu");n.addClass(e.subMenuClass),n.css("display","none"),n.parent().addClass(e.subMenuParent),n.prev("a").append(e.appendElement),n.next("a").append(e.appendElement)});var i="."+e.meanExpandClass;t(i).each(function(){t(this).on("click",function(n){var r,d;n.preventDefault(),r=t(this).parent(),(d=r.next("ul, div.mega-menu")).length>0&&(r.parent().toggleClass(e.subMenuParentToggle),d.slideToggle(e.toggleSpeed),d.toggleClass(e.subMenuToggleClass))})}),t(e.menuToggleBtn).each(function(){t(this).on("click",function(){o()})}),a.on("click",function(n){n.stopPropagation(),o()}),a.find("div").on("click",function(n){n.stopPropagation()})})},t(".th-menu-wrapper").thmobilemenu(),t(window).scroll(function(){t(this).scrollTop()>500?t(".sticky-wrapper").addClass("sticky"):t(".sticky-wrapper").removeClass("sticky")}),t(".scroll-top").length>0){var w=document.querySelector(".scroll-top"),c=document.querySelector(".scroll-top path"),m=c.getTotalLength();c.style.transition=c.style.WebkitTransition="none",c.style.strokeDasharray=m+" "+m,c.style.strokeDashoffset=m,c.getBoundingClientRect(),c.style.transition=c.style.WebkitTransition="stroke-dashoffset 10ms linear";var k=function(){var s=t(window).scrollTop(),e=t(document).height()-t(window).height(),a=m-s*m/e;c.style.strokeDashoffset=a};k(),t(window).scroll(k),jQuery(window).on("scroll",function(){jQuery(this).scrollTop()>50?jQuery(w).addClass("show"):jQuery(w).removeClass("show")}),jQuery(w).on("click",function(s){return s.preventDefault(),jQuery("html, body").animate({scrollTop:0},750),!1})}t("[data-bg-src]").length>0&&t("[data-bg-src]").each(function(){var s=t(this).attr("data-bg-src");t(this).css("background-image","url("+s+")"),t(this).removeAttr("data-bg-src").addClass("background-image")}),t("[data-bg-color]").length>0&&t("[data-bg-color]").each(function(){var s=t(this).attr("data-bg-color");t(this).css("background-color",s),t(this).removeAttr("data-bg-color")}),t("[data-theme-color]").length>0&&t("[data-theme-color]").each(function(){var s=t(this).attr("data-theme-color");t(this).get(0).style.setProperty("--theme-color",s),t(this).removeAttr("data-theme-color")}),t("[data-mask-src]").length>0&&t("[data-mask-src]").each(function(){var s=t(this).attr("data-mask-src");t(this).css({"mask-image":"url("+s+")","-webkit-mask-image":"url("+s+")"}),t(this).addClass("bg-mask"),t(this).removeAttr("data-mask-src")}),t(".center-first").on("init reInit afterChange",function(s,e,a,o){}),t(".th-carousel").each(function(){var s=t(this);function e(i){return s.data(i)}var a='<button type="button" class="slick-prev"><i class="'+e("prev-arrow")+'"></i></button>',o='<button type="button" class="slick-next"><i class="'+e("next-arrow")+'"></i></button>';t("[data-slick-next]").each(function(){t(this).on("click",function(i){i.preventDefault(),t(t(this).data("slick-next")).slick("slickNext")})}),t("[data-slick-prev]").each(function(){t(this).on("click",function(i){i.preventDefault(),t(t(this).data("slick-prev")).slick("slickPrev")})}),e("arrows")==1&&(s.closest(".arrow-wrap").length||s.closest(".container").parent().addClass("arrow-wrap")),s.slick({dots:!!e("dots"),fade:!!e("fade"),arrows:!!e("arrows"),speed:e("speed")?e("speed"):1e3,asNavFor:!!e("asnavfor")&&e("asnavfor"),autoplay:e("autoplay")!=0,infinite:e("infinite")!=0,slidesToShow:e("slide-show")?e("slide-show"):1,adaptiveHeight:!!e("adaptive-height"),centerMode:!!e("center-mode"),autoplaySpeed:e("autoplay-speed")?e("autoplay-speed"):8e3,centerPadding:e("center-padding")?e("center-padding"):"0",focusOnSelect:e("focuson-select")!=0,pauseOnFocus:!!e("pauseon-focus"),pauseOnHover:!!e("pauseon-hover"),variableWidth:!!e("variable-width"),vertical:!!e("vertical"),verticalSwiping:!!e("vertical"),swipeToSlide:!!e("swipetoslide"),prevArrow:e("prev-arrow")?a:'<button type="button" class="slick-prev"><i class="fas fa-arrow-left"></i></button>',nextArrow:e("next-arrow")?o:'<button type="button" class="slick-next"><i class="fas fa-arrow-right"></i></button>',rtl:t("html").attr("dir")=="rtl",responsive:[{breakpoint:1600,settings:{arrows:!!e("xl-arrows"),dots:!!e("xl-dots"),slidesToShow:e("xl-slide-show")?e("xl-slide-show"):e("slide-show"),centerMode:!!e("xl-center-mode"),centerPadding:"0"}},{breakpoint:1400,settings:{arrows:!!e("ml-arrows"),dots:!!e("ml-dots"),slidesToShow:e("ml-slide-show")?e("ml-slide-show"):e("slide-show"),centerMode:!!e("ml-center-mode"),centerPadding:0}},{breakpoint:1200,settings:{arrows:!!e("lg-arrows"),dots:!!e("lg-dots"),slidesToShow:e("lg-slide-show")?e("lg-slide-show"):e("slide-show"),centerMode:!!e("lg-center-mode")&&e("lg-center-mode"),centerPadding:0}},{breakpoint:992,settings:{arrows:!!e("md-arrows"),dots:!!e("md-dots"),slidesToShow:e("md-slide-show")?e("md-slide-show"):1,centerMode:!!e("md-center-mode")&&e("md-center-mode"),centerPadding:0}},{breakpoint:768,settings:{arrows:!!e("sm-arrows"),dots:!!e("sm-dots"),slidesToShow:e("sm-slide-show")?e("sm-slide-show"):1,centerMode:!!e("sm-center-mode")&&e("sm-center-mode"),centerPadding:0,variableWidth:!!e("sm-variable-width")}},{breakpoint:576,settings:{arrows:!!e("xs-arrows"),dots:!!e("xs-dots"),slidesToShow:e("xs-slide-show")?e("xs-slide-show"):1,centerMode:!!e("xs-center-mode")&&e("xs-center-mode"),centerPadding:0,variableWidth:!!e("xs-variable-width")}}]})}),t(".slick-marquee").slick({speed:5e3,autoplay:!0,autoplaySpeed:0,cssEase:"linear",slidesToShow:1,slidesToScroll:1,variableWidth:!0,infinite:!0,arrows:!1,buttons:!1,pauseOnHover:!0,pauseOnFocus:!0,swipeToSlide:!0}),t("[data-ani-duration]").each(function(){var s=t(this).data("ani-duration");t(this).css("animation-duration",s)}),t("[data-ani-delay]").each(function(){var s=t(this).data("ani-delay");t(this).css("animation-delay",s)}),t("[data-ani]").each(function(){var s=t(this).data("ani");t(this).addClass(s),t(".slick-current [data-ani]").addClass("th-animated")}),t(".th-carousel").on("afterChange",function(s,e,a,o){t(e.$slides).find("[data-ani]").removeClass("th-animated"),t(e.$slides[a]).find("[data-ani]").addClass("th-animated")});var p,C,g,x,f=".ajax-contact",b='[name="email"]',h=t(".form-messages");function S(){var s=t(f).serialize();(function(){var e,a=!0;function o(i){i=i.split(",");for(var n=0;n<i.length;n++)e=f+" "+i[n],t(e).val()?(t(e).removeClass("is-invalid"),a=!0):(t(e).addClass("is-invalid"),a=!1)}return o('[name="name"],[name="email"],[name="subject"],[name="number"],[name="message"]'),t(b).val()&&t(b).val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)?(t(b).removeClass("is-invalid"),a=!0):(t(b).addClass("is-invalid"),a=!1),a})()&&jQuery.ajax({url:t(f).attr("action"),data:s,type:"POST"}).done(function(e){h.removeClass("error"),h.addClass("success"),h.text(e),t(f+' input:not([type="submit"]),'+f+" textarea").val("")}).fail(function(e){h.removeClass("success"),h.addClass("error"),e.responseText!==""?h.html(e.responseText):h.html("Oops! An error occured and your message could not be sent.")})}t(f).on("submit",function(s){s.preventDefault(),S()}),p=".popup-search-box",C=".searchClose",g="show",t(".searchBoxToggler").on("click",function(s){s.preventDefault(),t(p).addClass(g)}),t(p).on("click",function(s){s.stopPropagation(),t(p).removeClass(g)}),t(p).find("form").on("click",function(s){s.stopPropagation(),t(p).addClass(g)}),t(C).on("click",function(s){s.preventDefault(),s.stopPropagation(),t(p).removeClass(g)}),x=".popup-subscribe-area",t(".popupClose").on("click",function(s){t(x).addClass("hide")}),t("#destroyPopup").on("click",function(){t(".popup-subscribe-area").addClass("hide"),localStorage.setItem("popupDestroyed","true")});function T(s,e,a,o){t(e).on("click",function(i){i.preventDefault(),t(s).addClass(o)}),t(s).on("click",function(i){i.stopPropagation(),t(s).removeClass(o)}),t(s+" > div").on("click",function(i){i.stopPropagation(),t(s).addClass(o)}),t(a).on("click",function(i){i.preventDefault(),i.stopPropagation(),t(s).removeClass(o)})}localStorage.getItem("popupDestroyed")==="true"&&t(".popup-subscribe-area").hide(),T(".sidemenu-1",".sideMenuToggler",".sideMenuCls","show"),T(".cart-side-menu",".cartToggler",".sideMenuCls","show"),t(".popup-image").magnificPopup({type:"image",mainClass:"mfp-zoom-in",removalDelay:260,gallery:{enabled:!0}}),t(".popup-video").magnificPopup({type:"iframe"}),t(".popup-content").magnificPopup({type:"inline",midClick:!0}),t(".popup-content").on("click",function(){t(".slick-slider").slick("refresh")});const P=localStorage.getItem("themePreference");P&&(P==="dark"?(t("html").addClass("dark-theme").attr("data-theme","dark"),t(".theme-switcher").addClass("active")):(t("html").addClass("light-theme").attr("data-theme","light"),t(".theme-switcher").removeClass("active"))),t(".theme-toggler, .theme-switcher").on("click",function(s){s.preventDefault(),function(){t("html").toggleClass("dark-theme").removeClass("light-theme");const e=t("html").hasClass("dark-theme")?"dark":"light";t("html").attr("data-theme",e),t(".theme-switcher").toggleClass("active"),localStorage.setItem("themePreference",e)}()}),t(".print_btn").on("click",function(s){window.print()}),t.fn.indicator=function(){t(this).each(function(){var s=t(this),e=s.find("a"),a=s.find("button");s.append('<span class="indicator"></span>');var o,i=s.find(".indicator");function n(){var r=s.find(".active"),d=r.css("height"),l=r.css("width"),u=r.position().top+"px",v=r.position().left+"px";t(window).on("resize",function(){u=r.position().top+"px",v=r.position().left+"px"}),i.get(0).style.setProperty("--height-set",d),i.get(0).style.setProperty("--width-set",l),i.get(0).style.setProperty("--pos-y",u),i.get(0).style.setProperty("--pos-x",v)}e.length?o=e:a.length&&(o=a),o.on("click",function(r){r.preventDefault(),t(this).addClass("active"),t(this).siblings(".active").removeClass("active"),n()}),n(),t(window).on("resize",function(){n()})})},t(".indicator-active").length&&t(".indicator-active").indicator(),t.fn.thTab=function(s){var e=t.extend({sliderTab:!1,tabButton:"button"},s);t(this).each(function(){var a=t(this),o=a.find(e.tabButton);a.append('<span class="indicator"></span>');var i=a.find(".indicator");if(o.on("click",function(l){l.preventDefault();var u=t(this);u.addClass("active").siblings().removeClass("active"),e.sliderTab?t(n).slick("slickGoTo",u.data("slide-go-to")):d()}),e.sliderTab){var n=a.data("asnavfor"),r=0;o.each(function(){var l=t(this);l.attr("data-slide-go-to",r),r++,l.hasClass("active")&&t(n).slick("slickGoTo",l.data("slide-go-to")),t(n).on("beforeChange",function(u,v,D,y){a.find(e.tabButton+'[data-slide-go-to="'+y+'"]').addClass("active").siblings().removeClass("active"),d()})})}function d(){var l=a.find(e.tabButton+".active"),u=l.css("height"),v=l.css("width"),D=l.position().top+"px",y=l.position().left+"px";i.get(0).style.setProperty("--height-set",u),i.get(0).style.setProperty("--width-set",v),i.get(0).style.setProperty("--pos-y",D),i.get(0).style.setProperty("--pos-x",y),t(o).first().position().left==l.position().left?i.addClass("start").removeClass("center").removeClass("end"):t(o).last().position().left==l.position().left?i.addClass("end").removeClass("center").removeClass("start"):i.addClass("center").removeClass("start").removeClass("end")}d()})},t(".hero-tab").length&&t(".hero-tab").thTab({sliderTab:!0,tabButton:".tab-btn"}),t(".blog-tab").length&&t(".blog-tab").thTab({sliderTab:!0,tabButton:".tab-btn"}),t(".filter-active").imagesLoaded(function(){if(t(".filter-active").length>0){var s=t(".filter-active").isotope({itemSelector:".filter-item",filter:"*",masonry:{}});t(".filter-menu-active").on("click","button",function(){var e=t(this).attr("data-filter");s.isotope({filter:e})}),t(".filter-menu-active").on("click","button",function(e){e.preventDefault(),t(this).addClass("active"),t(this).siblings(".active").removeClass("active")})}}),t(".filter-active-cat1").imagesLoaded(function(){if(t(".filter-active-cat1").length>0){var s=t(".filter-active-cat1").isotope({itemSelector:".filter-item",filter:".active-filter",masonry:{columnWidth:1}});t(".filter-menu-active1").on("click","button",function(){var e=t(this).attr("data-filter");s.isotope({filter:e})}),t(".filter-menu-active1").on("click","button",function(e){e.preventDefault(),t(this).addClass("active"),t(this).siblings(".active").removeClass("active")})}}),t(".counter-number").counterUp({delay:5,time:600}),t(".price_slider").slider({range:!0,min:10,max:100,values:[10,75],slide:function(s,e){t(".from").text("$"+e.values[0]),t(".to").text("$"+e.values[1])}}),t(".from").text("$"+t(".price_slider").slider("values",0)),t(".to").text("$"+t(".price_slider").slider("values",1)),t("#ship-to-different-address-checkbox").on("change",function(){t(this).is(":checked")?t("#ship-to-different-address").next(".shipping_address").slideDown():t("#ship-to-different-address").next(".shipping_address").slideUp()}),t(".woocommerce-form-login-toggle a").on("click",function(s){s.preventDefault(),t(".woocommerce-form-login").slideToggle()}),t(".woocommerce-form-coupon-toggle a").on("click",function(s){s.preventDefault(),t(".woocommerce-form-coupon").slideToggle()}),t(".shipping-calculator-button").on("click",function(s){s.preventDefault(),t(this).next(".shipping-calculator-form").slideToggle()}),t('.wc_payment_methods input[type="radio"]:checked').siblings(".payment_box").show(),t('.wc_payment_methods input[type="radio"]').each(function(){t(this).on("change",function(){t(".payment_box").slideUp(),t(this).siblings(".payment_box").slideDown()})}),t(".rating-select .stars a").each(function(){t(this).on("click",function(s){s.preventDefault(),t(this).siblings().removeClass("active"),t(this).parent().parent().addClass("selected"),t(this).addClass("active")})}),t(".quantity-plus").each(function(){t(this).on("click",function(s){s.preventDefault();var e=t(this).siblings(".qty-input"),a=parseInt(e.val(),10);isNaN(a)||e.val(a+1)})}),t(".quantity-minus").each(function(){t(this).on("click",function(s){s.preventDefault();var e=t(this).siblings(".qty-input"),a=parseInt(e.val(),10);!isNaN(a)&&a>1&&e.val(a-1)})}),window.addEventListener("contextmenu",function(s){s.preventDefault()},!1),document.onkeydown=function(s){return event.keyCode!=123&&(!s.ctrlKey||!s.shiftKey||s.keyCode!=73)&&(!s.ctrlKey||!s.shiftKey||s.keyCode!=67)&&(!s.ctrlKey||!s.shiftKey||s.keyCode!=74)&&(!s.ctrlKey||s.keyCode!=85)&&void 0}})(jQuery);
