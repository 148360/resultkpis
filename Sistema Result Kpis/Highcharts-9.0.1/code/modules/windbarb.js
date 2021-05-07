/*
 Highcharts JS v9.0.1 (2021-02-15)

 Wind barb series module

 (c) 2010-2021 Torstein Honsi

 License: www.highcharts.com/license
*/
(function(b){"object"===typeof module&&module.exports?(b["default"]=b,module.exports=b):"function"===typeof define&&define.amd?define("highcharts/modules/windbarb",["highcharts"],function(f){b(f);b.Highcharts=f;return b}):b("undefined"!==typeof Highcharts?Highcharts:void 0)})(function(b){function f(b,e,l,p){b.hasOwnProperty(e)||(b[e]=p.apply(null,l))}b=b?b._modules:{};f(b,"Mixins/OnSeries.js",[b["Series/Column/ColumnSeries.js"],b["Core/Series/Series.js"],b["Core/Utilities.js"]],function(b,e,l){var p=
b.prototype,a=e.prototype,u=l.defined,x=l.stableSort;return{getPlotBox:function(){return a.getPlotBox.call(this.options.onSeries&&this.chart.get(this.options.onSeries)||this)},translate:function(){p.translate.apply(this);var b=this,a=b.options,g=b.chart,e=b.points,l=e.length-1,f,m=a.onSeries;m=m&&g.get(m);a=a.onKey||"y";var C=m&&m.options.step,c=m&&m.points,k=c&&c.length,r=g.inverted,d=b.xAxis,h=b.yAxis,v=0,q;if(m&&m.visible&&k){v=(m.pointXOffset||0)+(m.barW||0)/2;g=m.currentDataGrouping;var t=c[k-
1].x+(g?g.totalRange:0);x(e,function(c,r){return c.x-r.x});for(a="plot"+a[0].toUpperCase()+a.substr(1);k--&&e[l];){var n=c[k];g=e[l];g.y=n.y;if(n.x<=g.x&&"undefined"!==typeof n[a]){if(g.x<=t&&(g.plotY=n[a],n.x<g.x&&!C&&(q=c[k+1])&&"undefined"!==typeof q[a])){var w=(g.x-n.x)/(q.x-n.x);g.plotY+=w*(q[a]-n[a]);g.y+=w*(q.y-n.y)}l--;k++;if(0>l)break}}}e.forEach(function(c,k){c.plotX+=v;if("undefined"===typeof c.plotY||r)0<=c.plotX&&c.plotX<=d.len?r?(c.plotY=d.translate(c.x,0,1,0,1),c.plotX=u(c.y)?h.translate(c.y,
0,0,0,1):0):c.plotY=(d.opposite?0:b.yAxis.len)+d.offset:c.shapeArgs={};if((f=e[k-1])&&f.plotX===c.plotX){"undefined"===typeof f.stackIndex&&(f.stackIndex=0);var a=f.stackIndex+1}c.stackIndex=a});this.onSeries=m}}});f(b,"Series/Windbarb/WindbarbPoint.js",[b["Core/Utilities.js"],b["Series/Column/ColumnSeries.js"]],function(b,e){var l=this&&this.__extends||function(){var b=function(a,e){b=Object.setPrototypeOf||{__proto__:[]}instanceof Array&&function(b,a){b.__proto__=a}||function(b,a){for(var e in a)a.hasOwnProperty(e)&&
(b[e]=a[e])};return b(a,e)};return function(a,e){function f(){this.constructor=a}b(a,e);a.prototype=null===e?Object.create(e):(f.prototype=e.prototype,new f)}}(),f=b.isNumber;return function(b){function a(){var a=null!==b&&b.apply(this,arguments)||this;a.beaufort=void 0;a.beaufortLevel=void 0;a.direction=void 0;a.options=void 0;a.series=void 0;return a}l(a,b);a.prototype.isValid=function(){return f(this.value)&&0<=this.value};return a}(e.prototype.pointClass)});f(b,"Series/Windbarb/WindbarbSeries.js",
[b["Core/Animation/AnimationUtilities.js"],b["Core/Globals.js"],b["Mixins/OnSeries.js"],b["Core/Series/SeriesRegistry.js"],b["Core/Utilities.js"],b["Series/Windbarb/WindbarbPoint.js"]],function(b,e,f,p,a,u){var l=this&&this.__extends||function(){var b=function(a,c){b=Object.setPrototypeOf||{__proto__:[]}instanceof Array&&function(c,b){c.__proto__=b}||function(c,b){for(var a in b)b.hasOwnProperty(a)&&(c[a]=b[a])};return b(a,c)};return function(a,c){function k(){this.constructor=a}b(a,c);a.prototype=
null===c?Object.create(c):(k.prototype=c.prototype,new k)}}(),t=b.animObject;b=e.noop;var y=p.series,g=p.seriesTypes.column,z=a.extend,A=a.merge,B=a.pick;a=function(b){function a(){var a=null!==b&&b.apply(this,arguments)||this;a.data=void 0;a.options=void 0;a.points=void 0;return a}l(a,b);a.registerApproximation=function(){e.approximations&&!e.approximations.windbarb&&(e.approximations.windbarb=function(a,b){var c=0,d=0,h,k=a.length;for(h=0;h<k;h++)c+=a[h]*Math.cos(b[h]*e.deg2rad),d+=a[h]*Math.sin(b[h]*
e.deg2rad);return[a.reduce(function(a,b){return a+b},0)/a.length,Math.atan2(d,c)/e.deg2rad]})};a.prototype.init=function(b,k){a.registerApproximation();y.prototype.init.call(this,b,k)};a.prototype.pointAttribs=function(a,b){var c=this.options;a=a.color||this.color;var d=this.options.lineWidth;b&&(a=c.states[b].color||a,d=(c.states[b].lineWidth||d)+(c.states[b].lineWidthPlus||0));return{stroke:a,"stroke-width":d}};a.prototype.windArrow=function(a){var b=1.943844*a.value,c=this.options.vectorLength/
20,d=-10;if(a.isNull)return[];if(0===a.beaufortLevel)return this.chart.renderer.symbols.circle(-10*c,-10*c,20*c,20*c);a=[["M",0,7*c],["L",-1.5*c,7*c],["L",0,10*c],["L",1.5*c,7*c],["L",0,7*c],["L",0,-10*c]];var h=(b-b%50)/50;if(0<h)for(;h--;)a.push(-10===d?["L",0,d*c]:["M",0,d*c],["L",5*c,d*c+2],["L",0,d*c+4]),b-=50,d+=7;h=(b-b%10)/10;if(0<h)for(;h--;)a.push(-10===d?["L",0,d*c]:["M",0,d*c],["L",7*c,d*c]),b-=10,d+=3;h=(b-b%5)/5;if(0<h)for(;h--;)a.push(-10===d?["L",0,d*c]:["M",0,d*c],["L",4*c,d*c]),
b-=5,d+=3;return a};a.prototype.translate=function(){var a=this.beaufortFloor,b=this.beaufortName;f.translate.call(this);this.points.forEach(function(c){for(var d=0;d<a.length&&!(a[d]>c.value);d++);c.beaufortLevel=d-1;c.beaufort=b[d-1]})};a.prototype.drawPoints=function(){var a=this.chart,b=this.yAxis,e=a.inverted,d=this.options.vectorLength/2;this.points.forEach(function(c){var f=c.plotX,g=c.plotY;!1===this.options.clip||a.isInsidePlot(f,0,!1)?(c.graphic||(c.graphic=this.chart.renderer.path().add(this.markerGroup).addClass("highcharts-point highcharts-color-"+
B(c.colorIndex,c.series.colorIndex))),c.graphic.attr({d:this.windArrow(c),translateX:f+this.options.xOffset,translateY:g+this.options.yOffset,rotation:c.direction}),this.chart.styledMode||c.graphic.attr(this.pointAttribs(c))):c.graphic&&(c.graphic=c.graphic.destroy());c.tooltipPos=[f+this.options.xOffset+(e&&!this.onSeries?d:0),g+this.options.yOffset-(e?0:d+b.pos-a.plotTop)]},this)};a.prototype.animate=function(a){a?this.markerGroup.attr({opacity:.01}):this.markerGroup.animate({opacity:1},t(this.options.animation))};
a.prototype.markerAttribs=function(a,b){return{}};a.prototype.getExtremes=function(){return{}};a.defaultOptions=A(g.defaultOptions,{dataGrouping:{enabled:!0,approximation:"windbarb",groupPixelWidth:30},lineWidth:2,onSeries:null,states:{hover:{lineWidthPlus:0}},tooltip:{pointFormat:'<span style="color:{point.color}">\u25cf</span> {series.name}: <b>{point.value}</b> ({point.beaufort})<br/>'},vectorLength:20,colorKey:"value",yOffset:-20,xOffset:0});return a}(g);z(a.prototype,{pointArrayMap:["value",
"direction"],parallelArrays:["x","value","direction"],beaufortName:"Calm;Light air;Light breeze;Gentle breeze;Moderate breeze;Fresh breeze;Strong breeze;Near gale;Gale;Strong gale;Storm;Violent storm;Hurricane".split(";"),beaufortFloor:[0,.3,1.6,3.4,5.5,8,10.8,13.9,17.2,20.8,24.5,28.5,32.7],trackerGroups:["markerGroup"],getPlotBox:f.getPlotBox,invertGroups:b});a.prototype.pointClass=u;a.registerApproximation();p.registerSeriesType("windbarb",a);"";return a});f(b,"masters/modules/windbarb.src.js",
[],function(){})});
//# sourceMappingURL=windbarb.js.map