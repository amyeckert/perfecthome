!function(i){"use strict";"function"==typeof define&&define.amd?define(["jquery","videojs","imagesloaded","jquery-ui"],i):i(jQuery,videojs)}(function($,i){$.BigVideo=function(o){function e(){var i=I.container.outerWidth()<$(window).width()?I.container.outerWidth():$(window).width(),o=I.container.outerHeight()<$(window).height()?I.container.outerHeight():$(window).height(),e=i/o;I.container.is($("body"))&&$("html,body").css("height",$(window).height()>$("body").css("height","auto").height()?"100%":"auto"),u>e?"video"==L?(g.width(o*u).height(o),I.shrinkable?$(v).css("top",-(i/u-o)/2).css("left",0).css("height",i/u):$(v).css("top",0).css("left",-(o*u-i)/2).css("height",o),$(v+"_html5_api").css("width",o*u).css("height",o),$(v+"_flash_api").css("width",o*u).css("height",o)):$("#big-video-image").css({width:"auto",height:o,top:0,left:-(o*u-i)/2}):"video"==L?(g.width(i).height(i/u),$(v).css("top",-(i/u-o)/2).css("left",0).css("height",i/u),$(v+"_html5_api").css("width",$(v+"_html5_api").parent().width()+"px").css("height","auto"),$(v+"_flash_api").css("width",i).css("height",i/u)):$("#big-video-image").css({width:i,height:"auto",top:-(i/u-o)/2,left:0})}function t(){var i='<div id="big-video-control-container"><div id="big-video-control"><a href="#" id="big-video-control-play"></a><div id="big-video-control-middle"><div id="big-video-control-bar"><div id="big-video-control-bound-left"></div><div id="big-video-control-progress"></div><div id="big-video-control-track"></div><div id="big-video-control-bound-right"></div></div></div>	<div id="big-video-control-timer"></div></div></div>';I.container.append(i),$("#big-video-control-container").css("display","none"),$("#big-video-control-timer").css("display","none"),$("#big-video-control-track").slider({animate:!0,step:.01,slide:function(i,o){y=!0,$("#big-video-control-progress").css("width",o.value-.16+"%"),g.currentTime(o.value/100*g.duration())},stop:function(i,o){y=!1,g.currentTime(o.value/100*g.duration())}}),$("#big-video-control-bar").click(function(i){g.currentTime(i.offsetX/$(this).width()*g.duration())}),$("#big-video-control-play").click(function(i){i.preventDefault(),d("toggle")}),g.on("timeupdate",function(){if(!y&&g.currentTime()/g.duration()){var i=g.currentTime(),o=Math.floor(i/60),e=Math.floor(i)-60*o;10>e&&(e="0"+e);var t=g.currentTime()/g.duration()*100;$("#big-video-control-track").slider("value",t),$("#big-video-control-progress").css("width",t-.16+"%"),$("#big-video-control-timer").text(o+":"+e+"/"+f)}})}function d(i){var o=i||"toggle";"toggle"==o&&(o=w?"pause":"play"),"pause"==o?(g.pause(),$("#big-video-control-play").css("background-position","-16px"),w=!1):"play"==o?(g.play(),$("#big-video-control-play").css("background-position","0"),w=!0):"skip"==o&&s()}function n(){g.play(),I.container.off("click",n)}function s(){j++,j===x.length&&(j=0),a(x[j])}function a(i){$(v).css("display","block"),L="video",g.src(i),w=!0,k?($("#big-video-control-container").css("display","none"),g.ready(function(){g.volume(0)}),doLoop=!0):($("#big-video-control-container").css("display","block"),g.ready(function(){g.volume(b)}),doLoop=!1),$("#big-video-image").css("display","none"),$(v).css("display","block")}function r(i){$("#big-video-image").remove(),g.pause(),$(v).css("display","none"),$("#big-video-control-container").css("display","none"),L="image";var o=$('<img id="big-video-image" src='+i+" />");h.append(o),$("#big-video-image").imagesLoaded(function(){u=$("#big-video-image").width()/$("#big-video-image").height(),e()})}var c={useFlashForFirefox:!0,forceAutoplay:!1,controls:!1,doLoop:!1,container:$("body"),shrinkable:!1},l=this,g,v="#big-video-vid",h=$('<div id="big-video-wrap"></div>'),p=$(""),u=16/9,f=0,b=.8,m=!1,y=!1,w=!1,_=!1,k=!1,x=[],j,L,I=$.extend({},c,o);l.init=function(){if(!m){I.container.prepend(h);var o=I.forceAutoplay?"autoplay":"";g=$('<video id="'+v.substr(1)+'" class="video-js vjs-default-skin" preload="auto" data-setup="{}" '+o+" webkit-playsinline></video>"),g.css("position","absolute"),h.append(g);var d=["html5","flash"],a=navigator.userAgent.toLowerCase(),r=-1!=a.indexOf("firefox");I.useFlashForFirefox&&r&&(d=["flash","html5"]),g=i(v.substr(1),{controls:!1,autoplay:!0,preload:"auto",techOrder:d}),I.controls&&t(),e(),m=!0,w=!1,I.forceAutoplay&&$("body").on("click",n),$("#big-video-vid_flash_api").attr("scale","noborder").attr("width","100%").attr("height","100%"),$(window).on("resize.bigvideo",function(){e()}),g.on("loadedmetadata",function(i){u=document.getElementById("big-video-vid_flash_api")?document.getElementById("big-video-vid_flash_api").vjs_getProperty("videoWidth")/document.getElementById("big-video-vid_flash_api").vjs_getProperty("videoHeight"):$("#big-video-vid_html5_api").prop("videoWidth")/$("#big-video-vid_html5_api").prop("videoHeight"),e();var o=Math.round(g.duration()),t=Math.floor(o/60),d=o-60*t;10>d&&(d="0"+d),f=t+":"+d}),g.on("ended",function(){I.doLoop&&(g.currentTime(0),g.play()),_&&s()})}},l.show=function(i,o){if(void 0===o&&(o={}),k=o.ambient===!0,(k||o.doLoop)&&(I.doLoop=!0),"string"==typeof i){var e=i.lastIndexOf("?")>0?i.substring(i.lastIndexOf(".")+1,i.lastIndexOf("?")):i.substring(i.lastIndexOf(".")+1);"jpg"==e||"gif"==e||"png"==e?r(i):("mp4"==e||"ogg"==e||"ogv"==e||"webm"==e)&&(a(i),o.onShown&&o.onShown(),_=!1)}else if($.isArray(i))a(i);else{if("object"!=typeof i||!i.src||!i.type)throw"BigVideo.show received invalid input for parameter source";a([i])}},l.showPlaylist=function(i,o){if(!$.isArray(i))throw"BigVideo.showPlaylist parameter files accepts only arrays";void 0===o&&(o={}),k=o.ambient===!0,(k||o.doLoop)&&(I.doLoop=!0),x=i,j=0,this.show(x[j]),o.onShown&&o.onShown(),_=!0},l.getPlayer=function(){return g},l.remove=l.dispose=function(){m=!1,h.remove(),$(window).off("resize.bigvideo"),g&&(g.off("loadedmetadata"),g.off("ended"),g.dispose())},l.triggerPlayer=function(i){d(i)}}});