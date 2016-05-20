/*   
Template Name: Source Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.5
Version: 1.2.0
Author: Sean Ngu
Website: http://www.seantheme.com/source-admin-v1.2/admin/
*/var purple="#9b59b6",purpleLight="#BE93D0",purpleDark="#7c4792",success="#17B6A4",successDark="#129283",primary="#2184DA",primaryDark="#1e77c5",info="#38AFD3",inverse="#3C454D",warning="#fcaf41",danger="#F04B46",dangerLight="#F58A87",dangerDark="#c03c38",lime="#65C56F",grey="#aab3ba",white="#fff",fontFamily='"Nunito", sans-serif',fontWeight="300",fontStyle="normal",handleVisitorAnalyticsChart=function(){"use strict";for(var e="#flot-visitor-chart",t=[],i=[],a=[],o=0;10>=o;o+=1)t.push([o,parseInt(30*Math.random())]);for(var o=0;10>=o;o+=1)i.push([o,parseInt(30*Math.random())]);for(var o=0;10>=o;o+=1)a.push([o,parseInt(30*Math.random())]);if(0!==$(e).length){var r=$(e).attr("data-height");$(e).height(r);var l={series:{curvedLines:{apply:!0,active:!0,monotonicFit:!0}},grid:{borderWidth:0},legend:{show:!1},xaxis:{font:{size:11,lineHeight:16,style:fontStyle,weight:fontWeight,family:fontFamily,color:inverse}},yaxis:{font:{size:11,lineHeight:16,style:fontStyle,weight:fontWeight,family:fontFamily,color:inverse}}};$.plot($(e),[{data:t,lines:{show:!0,fill:!0,fillColor:primary,shadow:!1},stack:!0,color:primary},{data:i,lines:{show:!0,fill:!0,fillColor:info,shadow:!1},stack:!0,color:info},{data:a,lines:{show:!0,fill:!0,fillColor:inverse,shadow:!1},stack:!0,color:inverse}],l)}},handleVisitorsVectorMap=function(){"use strict";var e="#vector-map";if(0!==$(e).length){var t=$(e).attr("data-height");$(e).height(t);{new jvm.WorldMap({map:"world_merc_en",container:$(e),normalizeFunction:"linear",hoverOpacity:.5,hoverColor:!1,markerStyle:{initial:{stroke:"#fff",r:3}},regions:[{attribute:"fill"}],regionStyle:{initial:{fill:"rgba(0,0,0,0.35)","fill-opacity":1,stroke:"none","stroke-width":2,"stroke-opacity":1},hover:{"fill-opacity":.8},selected:{fill:"fff"},selectedHover:{}},series:{regions:[{values:{IN:"rgba(0,0,0,0.75)",US:"rgba(0,0,0,0.75)",KR:"rgba(0,0,0,0.75)",FR:"rgba(0,0,0,0.75)"}}]},focusOn:{x:.6,y:.5,scale:3},backgroundColor:warning,zoomOnScroll:!1})}}},handleWidgetChat=function(){"use strict";$('[data-toggle="chat-detail"]').live("click",function(e){e.preventDefault(),$(this).closest(".widget-chat").addClass("widget-chat-detail-toggled")}),$('[data-dismiss="chat-detail"]').live("click",function(e){e.preventDefault(),$(this).closest(".widget-chat").removeClass("widget-chat-detail-toggled")})},handleWidgetReload=function(){"use strict";$('[data-click="widget-reload"]').live("click",function(e){e.preventDefault();var t=$(this).closest(".widget");$(t).append('<div class="widget-loader"><span class="spinner-small">Loading...</span></div>'),setTimeout(function(){$(t).find(".widget-loader").remove()},1500)})},handleWidgetTodolist=function(){"use strict";$('[data-click="todolist-checkbox"]').live("click",function(e){e.preventDefault();var t=$(this).closest(".checkbox").find('input[type="checkbox"]'),i=$(this).closest("li");$(t).is(":checked")?($(i).removeClass("completed"),$(t).prop("checked",!1)):($(i).addClass("completed"),$(t).prop("checked",!0))})},handleServerChart=function(){"use strict";function e(){c.setData([t()]);var o=c.getData();o[0].color=i>75?danger:i>50?warning:lime,c.draw(),setTimeout(e,a)}function t(){for(l.length>0&&(l=l.slice(1));l.length<n;){var e=l.length>0?l[l.length-1]:50,t=e+10*Math.random()-5;0>t&&(t=0),t>100&&(t=100),i=parseInt(t),$('[data-id="server-load-number"]').html(t.toFixed(2)+"%"),l.push(t)}for(var a=[],o=0;o<l.length;++o)a.push([o,l[o]]);return a}var i=0,a=1e3,o="#flot-server-chart";if(0!==$(o).length){var r=$(o).attr("data-height");$(o).height(r);var l=[],n=150,s={series:{shadowSize:0,color:lime,lines:{show:!0,fill:!0}},yaxis:{min:0,max:100,tickColor:"#ddd",font:{size:11,lineHeight:16,style:fontStyle,weight:fontWeight,family:fontFamily,color:inverse}},xaxis:{show:!0,tickColor:"#ddd",font:{size:11,lineHeight:16,style:fontStyle,weight:fontWeight,family:fontFamily,color:inverse}},grid:{borderWidth:1,borderColor:"#ddd"}},c=$.plot($(o),[t()],s);e()}},handleDashboardGritterNotification=function(){$(window).load(function(){setTimeout(function(){$.gritter.add({title:"Welcome back, Admin!",text:"You have 4 new notifications. Please check your inbox.",image:"assets/img/user_1.jpg",sticky:!0,time:"",class_name:"my-sticky-class"})},1e3)})},PageDemo=function(){"use strict";return{init:function(){handleVisitorAnalyticsChart(),handleVisitorsVectorMap(),handleServerChart(),handleWidgetChat(),handleWidgetReload(),handleWidgetTodolist(),handleDashboardGritterNotification()}}}();