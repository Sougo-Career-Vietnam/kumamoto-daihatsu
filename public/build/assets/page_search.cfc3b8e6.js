import"./favorite.620e5f80.js";import"./searchBox.2ef7b2ac.js";$(function(){function f(){var e=[],n="",i=$('input[name="bcCheckbox"]:checked').map(function(){return this.value});if(i.length!=0){var a="bc="+encodeURIComponent($.makeArray(i).join("[]"));e.push(a)}if($('input[name="areaCheckbox"]:checked').length){var h=$('input[name="areaCheckbox"]:checked').map(function(){return this.value}),a="area="+encodeURIComponent($.makeArray(h).join("[]"));e.push(a)}var c=$('input[name="cityCheckbox"]:checked').map(function(){return this.value});if(c.length!=0){var a="city="+encodeURIComponent($.makeArray(c).join("[]"));e.push(a)}var r=$('input[name="jobbcCheckbox"]:checked').map(function(){return this.value});if(r.length!=0){var a="jobbc="+encodeURIComponent($.makeArray(r).join("[]"));e.push(a)}var t=$('input[name="jobCheckbox"]:checked').map(function(){return this.value});if(t.length!=0){var a="job="+encodeURIComponent($.makeArray(t).join("[]"));e.push(a)}var o=$('input[name="koyoCheckbox"]:checked').map(function(){return this.value});if(o.length!=0)for(var s=0;s<o.length;s++){var a=o[s]+"=1";e.push(a)}var v=$('input[name="tokuchoCheckbox"]:checked').map(function(){return this.value});if(v.length>0){var a="tokucho="+encodeURIComponent($.makeArray(v).join("[]"));e.push(a)}var k=$("#mod-kyuyo-1").val();if(parseInt(k)>0){var a="kyuyo="+encodeURIComponent(k);e.push(a)}var d=$("#mod-kyuyo-2").val();if(parseInt(d)>0){var a="kyuyomin="+encodeURIComponent(d);e.push(a)}var l=$('input[name="kwCheckbox"]:checked').map(function(){return this.value});if(l.length!=0||$("#sb-kw").val()){let u="kw=";l.length!=0&&(u+=encodeURIComponent($.makeArray(l).join(" "))),$("#sb-kw").val()&&(l.length!=0&&(u+=" "),u+=encodeURI($("#sb-kw").val())),e.push(u)}e&&(n=e.join("&"));var m=$("#search_url").val();return location.href=m+"?"+n,!1}$(".jobSearchBtn").click(function(){return f(),!1}),$("#sb-kw").on("keypress",function(e){return e.key==="Enter"&&$("#sb-kw").val()?(f(),!1):!0}),$(".jobSearchFormTgl").click(function(){$(this).hasClass("open")?($(this).removeClass("open"),$(this).addClass("close"),$(this).parent().find("#jobSearchForm").each(function(e,n){return $(n).slideUp(300),!1})):($(this).removeClass("close"),$(this).addClass("open"),$(this).parent().find("#jobSearchForm").each(function(e,n){return $(n).slideDown(300),!1}))}),$(".searchCondList .searchListLabel").click(function(){$(this).hasClass("open")?($(this).removeClass("open"),$(this).addClass("close"),$(this).parent().find(".searchListBody").each(function(e,n){return $(n).slideUp(300),!1})):($(this).removeClass("close"),$(this).addClass("open"),$(this).parent().find(".searchListBody").each(function(e,n){return $(n).slideDown(300),!1}))});function p(e){var n=e.split("-"),i="",a="",h=!1,c=!1;if(n.length>1){for(var r=0;r<n.length-1;r++)i+=n[r]+"-",a&&(a+="-"),a+=n[r];$("[id^="+i+"]").each(function(){var s=$(this).prop("checked");s?h=!0:c=!0});var t=!1;h&&!c?t=!0:t=!1;var o="";o=a,$("#"+o).prop("checked",t),p(o)}}$("#jobSearchForm input:checkbox").click(function(){var e=$(this).attr("id"),n=$(this).prop("checked");e.match(/-/)&&($("[id^="+e+"-]").each(function(){$(this).prop("checked",n)}),p(e))})});
