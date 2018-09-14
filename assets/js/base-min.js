!function(t){"function"==typeof define&&define.amd?define(["jquery"],t):"object"==typeof exports?module.exports=t(require("jquery")):t(jQuery)}(function(t){function e(){var e,n,r={height:l.innerHeight,width:l.innerWidth};return r.height||((e=u.compatMode)||!t.support.boxModel)&&(n="CSS1Compat"===e?c:u.body,r={height:n.clientHeight,width:n.clientWidth}),r}function n(){return{top:l.pageYOffset||c.scrollTop||u.body.scrollTop,left:l.pageXOffset||c.scrollLeft||u.body.scrollLeft}}function r(){if(a.length){var r=0,s=t.map(a,function(t){var e=t.data.selector,n=t.$element;return e?n.find(e):n});for(o=o||e(),i=i||n();r<a.length;r++)if(t.contains(c,s[r][0])){var u=t(s[r]),l={height:u[0].offsetHeight,width:u[0].offsetWidth},p=u.offset(),h=u.data("inview");if(!i||!o)return;p.top+l.height>i.top&&p.top<i.top+o.height&&p.left+l.width>i.left&&p.left<i.left+o.width?h||u.data("inview",!0).trigger("inview",[!0]):h&&u.data("inview",!1).trigger("inview",[!1])}}}var o,i,s,a=[],u=document,l=window,c=u.documentElement;t.event.special.inview={add:function(e){a.push({data:e,$element:t(this),element:this}),!s&&a.length&&(s=setInterval(r,250))},remove:function(t){for(var e=0;e<a.length;e++){var n=a[e];if(n.element===this&&n.data.guid===t.guid){a.splice(e,1);break}}a.length||(clearInterval(s),s=null)}},t(l).on("scroll resize scrollstop",function(){o=i=null}),!c.addEventListener&&c.attachEvent&&c.attachEvent("onfocusin",function(){i=null})}),function(){var t,e,n,r,o,i,s,a,u,l,c,p,h,f,d,g,m,v,y,w,b,k,L,x,S,T,q,j,C,P,R,M,E,O,A,N,_,W,F,Q,U,I,D,H,X,z,B,G,J,Y=[].slice,Z={}.hasOwnProperty,K=function(t,e){function n(){this.constructor=t}for(var r in e)Z.call(e,r)&&(t[r]=e[r]);return n.prototype=e.prototype,t.prototype=new n,t.__super__=e.prototype,t},$=[].indexOf||function(t){for(var e=0,n=this.length;n>e;e++)if(e in this&&this[e]===t)return e;return-1};for(b={catchupTime:100,initialRate:.03,minTime:250,ghostTime:100,maxProgressPerFrame:20,easeFactor:1.25,startOnPageLoad:!0,restartOnPushState:!0,restartOnRequestAfter:500,target:"body",elements:{checkInterval:100,selectors:["body"]},eventLag:{minSamples:10,sampleCount:3,lagThreshold:3},ajax:{trackMethods:["GET"],trackWebSockets:!0,ignoreURLs:[]}},C=function(){var t;return null!=(t="undefined"!=typeof performance&&null!==performance&&"function"==typeof performance.now?performance.now():void 0)?t:+new Date},R=window.requestAnimationFrame||window.mozRequestAnimationFrame||window.webkitRequestAnimationFrame||window.msRequestAnimationFrame,w=window.cancelAnimationFrame||window.mozCancelAnimationFrame,null==R&&(R=function(t){return setTimeout(t,50)},w=function(t){return clearTimeout(t)}),E=function(t){var e,n;return e=C(),(n=function(){var r;return r=C()-e,r>=33?(e=C(),t(r,function(){return R(n)})):setTimeout(n,33-r)})()},M=function(){var t,e,n;return n=arguments[0],e=arguments[1],t=3<=arguments.length?Y.call(arguments,2):[],"function"==typeof n[e]?n[e].apply(n,t):n[e]},k=function(){var t,e,n,r,o,i,s;for(e=arguments[0],r=2<=arguments.length?Y.call(arguments,1):[],i=0,s=r.length;s>i;i++)if(n=r[i])for(t in n)Z.call(n,t)&&(o=n[t],null!=e[t]&&"object"==typeof e[t]&&null!=o&&"object"==typeof o?k(e[t],o):e[t]=o);return e},m=function(t){var e,n,r,o,i;for(n=e=0,o=0,i=t.length;i>o;o++)r=t[o],n+=Math.abs(r),e++;return n/e},x=function(t,e){var n,r,o;if(null==t&&(t="options"),null==e&&(e=!0),o=document.querySelector("[data-pace-"+t+"]")){if(n=o.getAttribute("data-pace-"+t),!e)return n;try{return JSON.parse(n)}catch(t){return r=t,"undefined"!=typeof console&&null!==console?console.error("Error parsing inline pace options",r):void 0}}},s=function(){function t(){}return t.prototype.on=function(t,e,n,r){var o;return null==r&&(r=!1),null==this.bindings&&(this.bindings={}),null==(o=this.bindings)[t]&&(o[t]=[]),this.bindings[t].push({handler:e,ctx:n,once:r})},t.prototype.once=function(t,e,n){return this.on(t,e,n,!0)},t.prototype.off=function(t,e){var n,r,o;if(null!=(null!=(r=this.bindings)?r[t]:void 0)){if(null==e)return delete this.bindings[t];for(n=0,o=[];n<this.bindings[t].length;)o.push(this.bindings[t][n].handler===e?this.bindings[t].splice(n,1):n++);return o}},t.prototype.trigger=function(){var t,e,n,r,o,i,s,a,u;if(n=arguments[0],t=2<=arguments.length?Y.call(arguments,1):[],null!=(s=this.bindings)?s[n]:void 0){for(o=0,u=[];o<this.bindings[n].length;)a=this.bindings[n][o],r=a.handler,e=a.ctx,i=a.once,r.apply(null!=e?e:this,t),u.push(i?this.bindings[n].splice(o,1):o++);return u}},t}(),l=window.Pace||{},window.Pace=l,k(l,s.prototype),P=l.options=k({},b,window.paceOptions,x()),B=["ajax","document","eventLag","elements"],D=0,X=B.length;X>D;D++)_=B[D],!0===P[_]&&(P[_]=b[_]);u=function(t){function e(){return G=e.__super__.constructor.apply(this,arguments)}return K(e,t),e}(Error),e=function(){function t(){this.progress=0}return t.prototype.getElement=function(){var t;if(null==this.el){if(!(t=document.querySelector(P.target)))throw new u;this.el=document.createElement("div"),this.el.className="pace pace-active",document.body.className=document.body.className.replace(/pace-done/g,""),document.body.className+=" pace-running",this.el.innerHTML='<div class="pace-progress">\n  <div class="pace-progress-inner"></div>\n</div>\n<div class="pace-activity"></div>',null!=t.firstChild?t.insertBefore(this.el,t.firstChild):t.appendChild(this.el)}return this.el},t.prototype.finish=function(){var t;return t=this.getElement(),t.className=t.className.replace("pace-active",""),t.className+=" pace-inactive",document.body.className=document.body.className.replace("pace-running",""),document.body.className+=" pace-done"},t.prototype.update=function(t){return this.progress=t,this.render()},t.prototype.destroy=function(){try{this.getElement().parentNode.removeChild(this.getElement())}catch(t){u=t}return this.el=void 0},t.prototype.render=function(){var t,e,n,r,o,i,s;if(null==document.querySelector(P.target))return!1;for(t=this.getElement(),r="translate3d("+this.progress+"%, 0, 0)",s=["webkitTransform","msTransform","transform"],o=0,i=s.length;i>o;o++)e=s[o],t.children[0].style[e]=r;return(!this.lastRenderedProgress||this.lastRenderedProgress|0!==this.progress|0)&&(t.children[0].setAttribute("data-progress-text",(0|this.progress)+"%"),this.progress>=100?n="99":(n=this.progress<10?"0":"",n+=0|this.progress),t.children[0].setAttribute("data-progress",""+n)),this.lastRenderedProgress=this.progress},t.prototype.done=function(){return this.progress>=100},t}(),a=function(){function t(){this.bindings={}}return t.prototype.trigger=function(t,e){var n,r,o,i,s;if(null!=this.bindings[t]){for(i=this.bindings[t],s=[],r=0,o=i.length;o>r;r++)n=i[r],s.push(n.call(this,e));return s}},t.prototype.on=function(t,e){var n;return null==(n=this.bindings)[t]&&(n[t]=[]),this.bindings[t].push(e)},t}(),I=window.XMLHttpRequest,U=window.XDomainRequest,Q=window.WebSocket,L=function(t,e){var n,r,o;o=[];for(r in e.prototype)try{o.push(null==t[r]&&"function"!=typeof e[r]?"function"==typeof Object.defineProperty?Object.defineProperty(t,r,{get:function(){return e.prototype[r]},configurable:!0,enumerable:!0}):t[r]=e.prototype[r]:void 0)}catch(t){n=t}return o},q=[],l.ignore=function(){var t,e,n;return e=arguments[0],t=2<=arguments.length?Y.call(arguments,1):[],q.unshift("ignore"),n=e.apply(null,t),q.shift(),n},l.track=function(){var t,e,n;return e=arguments[0],t=2<=arguments.length?Y.call(arguments,1):[],q.unshift("track"),n=e.apply(null,t),q.shift(),n},N=function(t){var e;if(null==t&&(t="GET"),"track"===q[0])return"force";if(!q.length&&P.ajax){if("socket"===t&&P.ajax.trackWebSockets)return!0;if(e=t.toUpperCase(),$.call(P.ajax.trackMethods,e)>=0)return!0}return!1},c=function(t){function e(){var t,n=this;e.__super__.constructor.apply(this,arguments),t=function(t){var e;return e=t.open,t.open=function(r,o){return N(r)&&n.trigger("request",{type:r,url:o,request:t}),e.apply(t,arguments)}},window.XMLHttpRequest=function(e){var n;return n=new I(e),t(n),n};try{L(window.XMLHttpRequest,I)}catch(t){}if(null!=U){window.XDomainRequest=function(){var e;return e=new U,t(e),e};try{L(window.XDomainRequest,U)}catch(t){}}if(null!=Q&&P.ajax.trackWebSockets){window.WebSocket=function(t,e){var r;return r=null!=e?new Q(t,e):new Q(t),N("socket")&&n.trigger("request",{type:"socket",url:t,protocols:e,request:r}),r};try{L(window.WebSocket,Q)}catch(t){}}}return K(e,t),e}(a),H=null,S=function(){return null==H&&(H=new c),H},A=function(t){var e,n,r,o;for(o=P.ajax.ignoreURLs,n=0,r=o.length;r>n;n++)if("string"==typeof(e=o[n])){if(-1!==t.indexOf(e))return!0}else if(e.test(t))return!0;return!1},S().on("request",function(e){var n,r,o,i,s;return i=e.type,o=e.request,s=e.url,A(s)?void 0:l.running||!1===P.restartOnRequestAfter&&"force"!==N(i)?void 0:(r=arguments,n=P.restartOnRequestAfter||0,"boolean"==typeof n&&(n=0),setTimeout(function(){var e,n,s,a,u,c;if(e="socket"===i?o.readyState<2:0<(a=o.readyState)&&4>a){for(l.restart(),u=l.sources,c=[],n=0,s=u.length;s>n;n++){if((_=u[n])instanceof t){_.watch.apply(_,r);break}c.push(void 0)}return c}},n))}),t=function(){function t(){var t=this;this.elements=[],S().on("request",function(){return t.watch.apply(t,arguments)})}return t.prototype.watch=function(t){var e,n,r,o;return r=t.type,e=t.request,o=t.url,A(o)?void 0:(n="socket"===r?new f(e):new d(e),this.elements.push(n))},t}(),d=function(){function t(t){var e,n,r,o,i,s,a=this;if(this.progress=0,null!=window.ProgressEvent)for(n=null,t.addEventListener("progress",function(t){return a.progress=t.lengthComputable?100*t.loaded/t.total:a.progress+(100-a.progress)/2},!1),s=["load","abort","timeout","error"],r=0,o=s.length;o>r;r++)e=s[r],t.addEventListener(e,function(){return a.progress=100},!1);else i=t.onreadystatechange,t.onreadystatechange=function(){var e;return 0===(e=t.readyState)||4===e?a.progress=100:3===t.readyState&&(a.progress=50),"function"==typeof i?i.apply(null,arguments):void 0}}return t}(),f=function(){function t(t){var e,n,r,o,i=this;for(this.progress=0,o=["error","open"],n=0,r=o.length;r>n;n++)e=o[n],t.addEventListener(e,function(){return i.progress=100},!1)}return t}(),r=function(){function t(t){var e,n,r,i;for(null==t&&(t={}),this.elements=[],null==t.selectors&&(t.selectors=[]),i=t.selectors,n=0,r=i.length;r>n;n++)e=i[n],this.elements.push(new o(e))}return t}(),o=function(){function t(t){this.selector=t,this.progress=0,this.check()}return t.prototype.check=function(){var t=this;return document.querySelector(this.selector)?this.done():setTimeout(function(){return t.check()},P.elements.checkInterval)},t.prototype.done=function(){return this.progress=100},t}(),n=function(){function t(){var t,e,n=this;this.progress=null!=(e=this.states[document.readyState])?e:100,t=document.onreadystatechange,document.onreadystatechange=function(){return null!=n.states[document.readyState]&&(n.progress=n.states[document.readyState]),"function"==typeof t?t.apply(null,arguments):void 0}}return t.prototype.states={loading:0,interactive:50,complete:100},t}(),i=function(){function t(){var t,e,n,r,o,i=this;this.progress=0,t=0,o=[],r=0,n=C(),e=setInterval(function(){var s;return s=C()-n-50,n=C(),o.push(s),o.length>P.eventLag.sampleCount&&o.shift(),t=m(o),++r>=P.eventLag.minSamples&&t<P.eventLag.lagThreshold?(i.progress=100,clearInterval(e)):i.progress=3/(t+3)*100},50)}return t}(),h=function(){function t(t){this.source=t,this.last=this.sinceLastUpdate=0,this.rate=P.initialRate,this.catchup=0,this.progress=this.lastProgress=0,null!=this.source&&(this.progress=M(this.source,"progress"))}return t.prototype.tick=function(t,e){var n;return null==e&&(e=M(this.source,"progress")),e>=100&&(this.done=!0),e===this.last?this.sinceLastUpdate+=t:(this.sinceLastUpdate&&(this.rate=(e-this.last)/this.sinceLastUpdate),this.catchup=(e-this.progress)/P.catchupTime,this.sinceLastUpdate=0,this.last=e),e>this.progress&&(this.progress+=this.catchup*t),n=1-Math.pow(this.progress/100,P.easeFactor),this.progress+=n*this.rate*t,this.progress=Math.min(this.lastProgress+P.maxProgressPerFrame,this.progress),this.progress=Math.max(0,this.progress),this.progress=Math.min(100,this.progress),this.lastProgress=this.progress,this.progress},t}(),W=null,O=null,v=null,F=null,g=null,y=null,l.running=!1,T=function(){return P.restartOnPushState?l.restart():void 0},null!=window.history.pushState&&(z=window.history.pushState,window.history.pushState=function(){return T(),z.apply(window.history,arguments)}),null!=window.history.replaceState&&(J=window.history.replaceState,window.history.replaceState=function(){return T(),J.apply(window.history,arguments)}),p={ajax:t,elements:r,document:n,eventLag:i},(j=function(){var t,n,r,o,i,s,a,u;for(l.sources=W=[],s=["ajax","elements","document","eventLag"],n=0,o=s.length;o>n;n++)t=s[n],!1!==P[t]&&W.push(new p[t](P[t]));for(u=null!=(a=P.extraSources)?a:[],r=0,i=u.length;i>r;r++)_=u[r],W.push(new _(P));return l.bar=v=new e,O=[],F=new h})(),l.stop=function(){return l.trigger("stop"),l.running=!1,v.destroy(),y=!0,null!=g&&("function"==typeof w&&w(g),g=null),j()},l.restart=function(){return l.trigger("restart"),l.stop(),l.start()},l.go=function(){var t;return l.running=!0,v.render(),t=C(),y=!1,g=E(function(e,n){var r,o,i,s,a,u,c,p,f,d,g,m,w,b,k,L;for(p=100-v.progress,o=g=0,i=!0,u=m=0,b=W.length;b>m;u=++m)for(_=W[u],d=null!=O[u]?O[u]:O[u]=[],a=null!=(L=_.elements)?L:[_],c=w=0,k=a.length;k>w;c=++w)s=a[c],f=null!=d[c]?d[c]:d[c]=new h(s),i&=f.done,f.done||(o++,g+=f.tick(e));return r=g/o,v.update(F.tick(e,r)),v.done()||i||y?(v.update(100),l.trigger("done"),setTimeout(function(){return v.finish(),l.running=!1,l.trigger("hide")},Math.max(P.ghostTime,Math.max(P.minTime-(C()-t),0)))):n()})},l.start=function(t){k(P,t),l.running=!0;try{v.render()}catch(t){u=t}return document.querySelector(".pace")?(l.trigger("start"),l.go()):setTimeout(l.start,50)},"function"==typeof define&&define.amd?define(["pace"],function(){return l}):"object"==typeof exports?module.exports=l:P.startOnPageLoad&&l.start()}.call(this),function($){$(".toggle").on("click",function(t){t.preventDefault();var e=$(this);e.next().hasClass("show")?(e.next().removeClass("show"),e.removeClass("toggled"),e.next().slideUp(350)):(e.parent().parent().find("li .inner").removeClass("show"),e.parent().parent().find("li .toggle").removeClass("toggled"),e.parent().parent().find("li .inner").slideUp(350),e.next().toggleClass("show"),e.toggleClass("toggled"),e.next().slideToggle(350))})}(jQuery),window.location.hash&&scroll(0,0),setTimeout(function(){scroll(0,0)},1),function($){$(".scroll").on("click",function(t){t.preventDefault(),$("html, body").animate({scrollTop:$($(this).attr("href")).offset().top},2e3,"swing")}),window.location.hash&&$("html, body").animate({scrollTop:$(window.location.hash).offset().top},2e3,"swing")}(jQuery),function($){$(".hamburger").on("click",function(t){t.preventDefault(),$(this).toggleClass("is-active"),$("body").toggleClass("no-sroll"),$("#masthead").toggleClass("toggled")})}(jQuery),function($){$('img[src$=".svg"]').each(function(){var t=jQuery(this),e=t.attr("src"),n=t.prop("attributes");$.get(e,function(e){var r=jQuery(e).find("svg");r=r.removeAttr("xmlns:a"),$.each(n,function(){r.attr(this.name,this.value)}),t.replaceWith(r)},"xml")})}(jQuery),jQuery,function($){var t=$(document),e=$("#masthead"),n=$("#masthead");t.scroll(function(){e.toggleClass("hidden",t.scrollTop()>=99)}),t.scroll(function(){e.toggleClass("fixed",t.scrollTop()>=99)})}(jQuery),function($){function t(t){var r=t.find(".marker"),o={zoom:16,center:new google.maps.LatLng(0,0),mapTypeId:google.maps.MapTypeId.ROADMAP},i=new google.maps.Map(t[0],o);return i.markers=[],r.each(function(){e($(this),i)}),n(i),i}function e(t,e){var n=new google.maps.LatLng(t.attr("data-lat"),t.attr("data-lng")),r=new google.maps.Marker({position:n,map:e});if(e.markers.push(r),t.html()){var o=new google.maps.InfoWindow({content:t.html()});google.maps.event.addListener(r,"click",function(){o.open(e,r)})}}function n(t){var e=new google.maps.LatLngBounds;$.each(t.markers,function(t,n){var r=new google.maps.LatLng(n.position.lat(),n.position.lng());e.extend(r)}),1==t.markers.length?(t.setCenter(e.getCenter()),t.setZoom(16)):t.fitBounds(e)}var r=null;$(document).ready(function(){$(".map").each(function(){r=t($(this))})})}(jQuery);