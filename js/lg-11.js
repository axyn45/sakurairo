/*! For license information please see lg-11.js.LICENSE.txt */
(globalThis.webpackChunksakurairo_scripts=globalThis.webpackChunksakurairo_scripts||[]).push([[453],{200:function(t){t.exports=function(){var t=function(){return(t=Object.assign||function(t){for(var n,e=1,r=arguments.length;e<r;e++)for(var i in n=arguments[e])Object.prototype.hasOwnProperty.call(n,i)&&(t[i]=n[i]);return t}).apply(this,arguments)};function n(t,n,e,r){return new(e||(e=Promise))((function(i,o){function a(t){try{u(r.next(t))}catch(t){o(t)}}function s(t){try{u(r.throw(t))}catch(t){o(t)}}function u(t){var n;t.done?i(t.value):(n=t.value,n instanceof e?n:new e((function(t){t(n)}))).then(a,s)}u((r=r.apply(t,n||[])).next())}))}function e(t,n){var e,r,i,o,a={label:0,sent:function(){if(1&i[0])throw i[1];return i[1]},trys:[],ops:[]};return o={next:s(0),throw:s(1),return:s(2)},"function"==typeof Symbol&&(o[Symbol.iterator]=function(){return this}),o;function s(o){return function(s){return function(o){if(e)throw new TypeError("Generator is already executing.");for(;a;)try{if(e=1,r&&(i=2&o[0]?r.return:o[0]?r.throw||((i=r.return)&&i.call(r),0):r.next)&&!(i=i.call(r,o[1])).done)return i;switch(r=0,i&&(o=[2&o[0],i.value]),o[0]){case 0:case 1:i=o;break;case 4:return a.label++,{value:o[1],done:!1};case 5:a.label++,r=o[1],o=[0];continue;case 7:o=a.ops.pop(),a.trys.pop();continue;default:if(!((i=(i=a.trys).length>0&&i[i.length-1])||6!==o[0]&&2!==o[0])){a=0;continue}if(3===o[0]&&(!i||o[1]>i[0]&&o[1]<i[3])){a.label=o[1];break}if(6===o[0]&&a.label<i[1]){a.label=i[1],i=o;break}if(i&&a.label<i[2]){a.label=i[2],a.ops.push(o);break}i[2]&&a.ops.pop(),a.trys.pop();continue}o=n.call(t,a)}catch(t){o=[6,t],r=0}finally{e=i=0}if(5&o[0])throw o[1];return{value:o[0]?o[1]:void 0,done:!0}}([o,s])}}}var r="lgInit",i={showVimeoThumbnails:!0,showThumbnailWithPlayButton:!1};return function(){function o(n){return this.core=n,this.settings=t(t({},i),this.core.settings),this}return o.prototype.init=function(){var t=this;this.settings.showVimeoThumbnails&&this.core.LGel.on(r+".vimeothumbnails",(function(n){var e=n.detail.instance;e.$container.find(".lg-thumb-outer").get()&&t.setVimeoThumbnails(e)}))},o.prototype.setVimeoThumbnails=function(t){return n(this,void 0,void 0,(function(){var n,r,i;return e(this,(function(e){switch(e.label){case 0:n=0,e.label=1;case 1:return n<t.galleryItems.length?((r=t.galleryItems[n]).__slideVideoInfo||{}).vimeo?[4,fetch("https://vimeo.com/api/oembed.json?url="+encodeURIComponent(r.src))]:[3,4]:[3,5];case 2:return[4,e.sent().json()];case 3:i=e.sent(),t.$container.find(".lg-thumb-item").eq(n).find("img").attr("src",this.settings.showThumbnailWithPlayButton?i.thumbnail_url_with_play_button:i.thumbnail_url),e.label=4;case 4:return n++,[3,1];case 5:return[2]}}))}))},o.prototype.destroy=function(){this.core.LGel.off(".lg.vimeothumbnails"),this.core.LGel.off(".vimeothumbnails")},o}()}()}}]);
//# sourceMappingURL=lg-11.js.map