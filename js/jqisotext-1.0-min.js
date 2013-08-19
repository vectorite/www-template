/**
 * jqIsoText - jQuery plugin
 * @version: 1.0 (2010/01/06)
 * @requires jQuery v1.2.2 or later 
 * @author Ivan Lazarevic
 * Examples and documentation at: http://www.workshop.rs/
 * 
 * Dual licensed under the MIT and GPL licenses:
 *   http://www.opensource.org/licenses/mit-license.php
 *   http://www.gnu.org/licenses/gpl.html
**/

(function($){var opts=new Array;var level=new Array;$.fn.jqIsoText=$.fn.jqisotext=function(options){init=function(el){opts[el.id]=$.extend({},$.fn.jqIsoText.defaults,options);text=el.firstChild.nodeValue;$(el).html('');if(opts[el.id].split!='yes'){$.le(text,el);}else{t=text.split(' ');for(var tt in t){$.le(t[tt]+' ',el);}}};$.le=function(text,ths){inc=1;len=text.length;for(i=0;i<len;i++){letter=text.slice(i,i+1);if(i<len/2)
j=i;else
j=len-i-1;meml=(opts[ths.id].fromSize-opts[ths.id].toSize)/(len/2);if(letter==' ')letter=" ";$("<span style='font-size:"+parseInt(opts[ths.id].fromSize-j*meml)+"px'>"+letter+"</span>").appendTo(ths);}}
this.each(function()
{init(this);})};$.fn.jqIsoText.defaults={fromSize:15,toSize:40,split:'no'};})(jQuery);