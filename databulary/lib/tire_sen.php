<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">   <html>  <head>  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">  <title>Tire in a sentence (esp. good sentence like quote, proverb...)</title>  <meta name="description" content="236+14 sentence examples: 1. Unfortunately, the tire blew out on my way to office. 2. Her legs were beginning to tire. 3. He soon began to tire of her. 4. A nail pierced the tire of his car. 5. Don't tire yourself out Geri, it's really not worth it. "/>  <link href="/common/dedecms.css" rel="stylesheet" media="screen" type="text/css">  <style>  #content div{  	line-height:23px;font-size:14px;margin-bottom:15px;  }  #ad_marginbottom_0 div{  	margin-bottom:0px;  }  .hidden1{display:none;}  </style>  <script>  function q1(word){  	formQ.word.value=word;  	formQ.submit();  }  function upWord(word,action,word){  	var votedNumber=getCookie("votedNumber"+word);  	if(votedNumber!=null){  		alert("Have done up or down!");  		return;  	}  	var xmlhttp;  	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari  		 xmlhttp=new XMLHttpRequest();  	}else{// code for IE6, IE5  		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");  	}  	xmlhttp.onreadystatechange=function(){  	if (xmlhttp.readyState==4 && xmlhttp.status==200){  		////返回后做事情  		var responseText=xmlhttp.responseText;    		//有异常.  		if(responseText!="" && responseText!=null){  		   alert(responseText);  		}else{  			var id_temp="wordUpTimes";  			if(action=="down"){  				id_temp="wordDownTimes";  			}  			var temp=document.getElementById(id_temp).innerText;  			var displayTimes=parseInt(temp);  			displayTimes=displayTimes+1;  			document.getElementById(id_temp).innerText=displayTimes;  			//cookie别设置太长,防止用户电脑中cookie太多哦  			setCookie("votedNumber"+word,"1",12);  		}  	  }  	};  	xmlhttp.open("POST","upDownWordDo.php",true);  	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");  	xmlhttp.send("action="+action+"&word="+encodeURIComponent(word)+"&rnd="+ Math.random());  }  </script>  </head>  <body>  <form method="post" style="display:none;" target="_blank" name="formQ" action="/wordQueryDo.php">  <input type="hidden" name="word"/>  <input type="hidden" name="directGo" value="1"/>  </form>  <div class="pageDiv" style="border: 0px solid blue;">  <script>  function trim(str){  　return str.replace(/(^\s*)|(\s*$)/g,"");  }  var strDefault="Please input any word...";  function queryCheck(){  	if(formQuery.vagueSearch.checked){  		///formQuery.q.value=encodeURI(formQuery.word.value+" site:sentencedict.com");  		formQuery.q.value=formQuery.word.value+" site:sentencedict.com";  		var temp=formQuery.action;  		formQuery.action="http://www.google.com/search";  		formQuery.method="get";  		formQuery.target="_blank";  		//为了wo参数不提交  		formQuery.word.disabled=true;  		formQuery.submit();  		formQuery.action=temp;  		formQuery.method="post";  		formQuery.target="_self";  		formQuery.word.disabled=false;  	}else{  		formQuery.word.value=trim(formQuery.word.value);  		var word=formQuery.word.value;  		if(word==""||word==strDefault){  			alert("Please input any word!");return;  		}  		formQuery.submit();  	}  	var temp="1";  	if(!formQuery.directGo.checked){  		temp="0";  	}  	setCookie("directGo",temp,12);  	var temp="1";  	if(!formQuery.vagueSearch.checked){  		temp="0";  	}  	setCookie("vagueSearch",temp,12);  }  function getCookie(name)  {  	var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");  	if(arr=document.cookie.match(reg))  		return (arr[2]);  	else  		return null;  }  function setCookie(cookiename,cookievalue,hours){  	var date=new Date();  	date.setTime(date.getTime()+Number(hours)*3600*1000);  	document.cookie=cookiename+"="+cookievalue+";path=/;expires="+date.toGMTString();  }  </script>  <div class="header">  <table width="100%" style="margin-bottom:4px;font-size:14px;" height=65 cellspacing=0 border=0 >  <tr>      <td width=100 valign="bottom" style="padding:0px;">        <a href="/">        <img src="/images/logo.jpg" style="vertical-align:bottom;margin-bottom:1px;border:0px solid #dddddd" alt="Sentencedict.com" height=50 width=150>        </a>      </td>      <td valign="bottom">  <form method="post" style="margin:2px;margin-left:10px;" name="formQuery" action="/wordQueryDo.php">  <input type='text' style='display:none;'/>  <input type="hidden" name="q" value="">  <input type="text" name="word" maxlength=100 style="float:left;margin-bottom:3px;width:360px;height:28px;line-height:26px;padding-left:6px;font-size:16px;border:1px solid #3D7A01;border-top:1px solid #67CD01;border-left:1px solid #67CD01;color:gray;"   size=20 value="Please input any word..." onfocus="if(this.value==strDefault){this.value='';this.style.color='black';}" onblur="if(this.value==''){this.value=strDefault;this.style.color='gray';}" onkeydown="if(event.keyCode==13){queryCheck();}"/>  <input type="button" style="float:left;width:70px;height:30px;margin-left:4px;cursor:pointer;font-size:14px;" onclick="queryCheck()" value="Search"/><div style="margin-top:10px;float:left;">&nbsp;<input type="checkbox" name="directGo" style="margin-right:2px;margin-bottom:2px;margin-left:2px;" value="1" checked>Directly to word page&nbsp;<span title="use vague search provided by google" style=""><input type="checkbox" name="vagueSearch" style="margin-right:2px;margin-bottom:2px;" value="1" onclick="if(this.checked){formQuery.directGo.disabled=true;}else{formQuery.directGo.disabled=false;}"/>Vauge search(google)</span>  </div>  </form>  </td>  </tr>  </table>  <script>  var temp=getCookie("directGo");  //此情况修改directGo的checked状态  if(temp=="0"){    formQuery.directGo.checked=false;  }  var temp=getCookie("vagueSearch");  //此情况修改vagueSearch的checked状态  if(temp=="1"){    formQuery.vagueSearch.checked=true;  }  </script>  <div class="module blue mT10 wrapper w963">  <div id="navMenu" style="background-color:#199507;border:0px solid red;background-image:url('/images/green_skin.png');background-position:0 -72px;background-repeat:repeat-x;">  <ul>  	<li><a href="/"><span>Home</span></a></li>  	<li><a href="/top1000/"><span>Top1000 word</span></a></li>  	<li><a href="/top5000/"><span>Top5000 word</span></a></li>  	<li><a href="/phrase/"><span>Phrases</span></a></li>  	<!--<li><a href="/conjunction/"><span>Conjunction</span></a></li>-->  	<li><a href="/game/"><span>Game</span></a></li>  	<li><a href="/getSImage.php"><span>Sentence into pic</span></a></li>  	<li><a href="/feedback.php"><span>Feedback</span></a></li>  </ul>  </div><!-- //navMenu -->    </div><!-- //module blue... -->  <div>  </div>  </div><div class="place" style="margin-top:8px;margin-bottom:0px;height:26px;line-height:26px;"><a href="/">Home</a> &gt; <a href="tire.html">Tire in a sentence</a>  </div>  <div id="div_main_left" style="width:81%;float:left;margin-top:8px;border:0px solid blue;">    <div class="viewbox" style="width:auto;padding-bottom:0px">  <div class="title" style="padding-top:0px;line-height:56px;height:auto;overflow:visible;">  <h2 style="display:inline;">Tire in a sentence</h2><!--(esp. good sentence)--><span>&nbsp;&nbsp;<a href="javascript:;" onclick="upWord('tire','up','tire')">up(<span id="wordUpTimes">0</span>)</a>&nbsp;&nbsp;<a href="javascript:;" onclick="upWord('tire','down','tire')">down(<span id="wordDownTimes">0</span>)</a></span>  </div>  <div class="info">Sentence count:236+14 <input type="checkbox" id="onlyStudent" value="1" style="width:17px;height:17px;" onclick="onlyStudent(this);" />Only show simple sentences<small>Posted:</small>2016-07-16<small>Updated:</small>2016-12-13</div>    <script>  function onlyStudent(this1){  	///alert(this1.checked);  	if(this1.checked){  		document.getElementById('all').style.display='none';  		document.getElementById('student').style.display='block';  		setCookie("onlyStudent","1",12);  	}else{  		document.getElementById('student').style.display='none';  		document.getElementById('all').style.display='block';  		setCookie("onlyStudent","0",12);  	}  }  var temp=getCookie("onlyStudent");  //此情况修改vagueSearch的checked状态  if(temp=="1"){    document.getElementById('onlyStudent').checked=true;  }  </script>    <div  id="content" style="border-bottom:1px solid #aaaaaa;">    <!--最大高度为105px,能显示5行多的样子-->  <div style="line-height:20px;float:none;margin-top:5px;margin-bottom:5px;margin-right:5px;padding:4px;background-color:#cccccc;border:1px solid #DCDDDD;max-height:105px;font-size:14px;overflow:auto;">  	<span style='float:left;display:block;'>Antonym:&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("refresh");'>refresh</a>.&nbsp;</span><span style='float:left;display:block;'>Similar words:&nbsp;</span><span style='float:left;display:block;'><a href='retire.html' target='_blank'>retire</a>,&nbsp;</span><span style='float:left;display:block;'><a href='retired.html' target='_blank'>retired</a>,&nbsp;</span><span style='float:left;display:block;'><a href='entirely.html' target='_blank'>entirely</a>,&nbsp;</span><span style='float:left;display:block;'><a href='retirement.html' target='_blank'>retirement</a>,&nbsp;</span><span style='float:left;display:block;'><a href='stir.html' target='_blank'>stir</a>,&nbsp;</span><span style='float:left;display:block;'><a href='wire.html' target='_blank'>wire</a>,&nbsp;</span><span style='float:left;display:block;'><a href='hire.html' target='_blank'>hire</a>,&nbsp;</span><span style='float:left;display:block;'><a href='empire.html' target='_blank'>empire</a>.&nbsp;</span><span style='float:left;display:block;'>Meaning:&nbsp;['taɪə(r)]&nbsp;n. hoop that covers a wheel. v. 1. get tired of something or somebody 2. exhaust or get tired through overuse or great strain or stress 3. deplete 4. cause to be bored.&nbsp;</span></div>  <div id="img1" style="margin:5px;margin-top:8px;float:right;">  	<img src="http://sentencedict.com/wordimage/126.jpg" style="width:300px;height:210px;" />  	<div style="text-align:center;margin-top:4px;font-size:12px;line-height:normal;margin-bottom:0px;width:280px;">Sentencedict.com random good picture</div>  </div>    <!--如果仅显示学生,并且该页有学生句子-->  <div id="all" >  <div>1. Unfortunately, the <em>tire</em> blew out on my way to office.</div><div>2. Her legs were beginning to <em>tire</em>.</div><div>3. He soon began to <em>tire</em> of her.</div><div>4. A nail pierced the <em>tire</em> of his car.</div><div>5. Don't <em>tire</em> yourself out Geri, it's really not worth it.</div><div>6. He felt he would never <em>tire</em> of international cricket.</div><div>7. I exchanged the defective <em>tire</em> for a good one.</div><div id="ad_marginbottom_0" style="margin-top:-10px;margin-bottom:5px;"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><!-- 728_90_20170421 --><ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-7200850114163593" data-ad-slot="2392632666"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script></div><div>8. I unluckily had a flat <em>tire</em> on the way here.</div><div>9. Of course long walks <em>tire</em> you out you're not getting any younger, you know.</div><div>10. The <em>tire</em> punctured a mile from home.</div><div>11. Pace yourself or you'll <em>tire</em> yourself out in the first half of the race.</div><div>12. After an hour Rick began to <em>tire</em>.</div><div>13. She stayed in the hope that he'd <em>tire</em> of his bit on the side.</div><div>14. I never <em>tire</em> of reading classics.</div><div>15. Young children <em>tire</em> quickly.</div><div>16. The driver demounted the <em>tire</em> from the wheel.</div><div>17. The <em>tire</em> was whipped off and changed in jig time.</div><div>18. Pump the <em>tire</em> up hard before going out on the road.</div><div>19. Sooner or later he'll <em>tire</em> of politics.</div><div>20. Take a spare <em>tire</em> along in case of need.</div><div>21. The first step in changing a car <em>tire</em> is to loosen the wheel.</div><div>22. People were beginning to <em>tire</em> in the midday heat.</div><div>23. A flat <em>tire</em> put my bicycle out of commision.</div><div>24. She's got so much energy she never seems to <em>tire</em>.</div><div>25. The driver jacked up his car to change the flat <em>tire</em>.</div><div>26. Let the kids run around in the garden and that'll soon <em>tire</em> them out.</div><div>27. This is the kind of toy that children will soon <em>tire</em> of.</div><div>28. You will have to block up the wheel of the car to change the <em>tire</em>.</div><div>29. Jack the car up higher - I can't get the <em>tire</em> off.</div><div style="margin-bottom:3px;">30. In the latter stages of the fight he began to <em>tire</em>.</div></div><!--all结束-->  <!--如果不是仅显示学生,或该页没有学生句子-->  <div id="student" style='display:none;'>  <div>1. Unfortunately, the <em>tire</em> blew out on my way to office.</div><div>2. Her legs were beginning to <em>tire</em>.</div><div>3. Let the kids run around in the garden and that'll soon <em>tire</em> them out.</div><div>4. This is the kind of toy that children will soon <em>tire</em> of.</div><div>5. He soon began to <em>tire</em> of her.</div><div>6. A nail pierced the <em>tire</em> of his car.</div><div>7. I unluckily had a flat <em>tire</em> on the way here.</div><div>8. Young children <em>tire</em> quickly.</div><div>9. The <em>tire</em> was whipped off and changed in jig time.</div><div>10. Pump the <em>tire</em> up hard before going out on the road.</div><div>11. Take a spare <em>tire</em> along in case of need.</div><div>12. You will have to block up the wheel of the car to change the <em>tire</em>.</div><div>13. A flat <em>tire</em> put my bicycle out of commision.</div><div style="margin-bottom:3px;">14. The <em>tire</em> blew out on my way to work.</div></div><!--student结束-->    <div id="ad_marginbottom_0" style="padding-top:0px;margin-bottom:6px;line-height:normal;margin-top:-8px;">  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>  <!-- 728_90_20170421 -->  <ins class="adsbygoogle"       style="display:inline-block;width:728px;height:90px"       data-ad-client="ca-pub-7200850114163593"       data-ad-slot="2392632666"></ins>  <script>  (adsbygoogle = window.adsbygoogle || []).push({});  </script>  </div>  <div style="margin-bottom:3px;font-size:13px;line-height:21px;"><span style="font-weight:bold;float:left;display:block">More similar words:&nbsp;</span><span style='float:left;display:block;'><a href='retire.html' target='_blank'>retire</a>,&nbsp;</span><span style='float:left;display:block;'><a href='retired.html' target='_blank'>retired</a>,&nbsp;</span><span style='float:left;display:block;'><a href='entirely.html' target='_blank'>entirely</a>,&nbsp;</span><span style='float:left;display:block;'><a href='retirement.html' target='_blank'>retirement</a>,&nbsp;</span><span style='float:left;display:block;'><a href='stir.html' target='_blank'>stir</a>,&nbsp;</span><span style='float:left;display:block;'><a href='wire.html' target='_blank'>wire</a>,&nbsp;</span><span style='float:left;display:block;'><a href='hire.html' target='_blank'>hire</a>,&nbsp;</span><span style='float:left;display:block;'><a href='empire.html' target='_blank'>empire</a>,&nbsp;</span><span style='float:left;display:block;'><a href='direct.html' target='_blank'>direct</a>,&nbsp;</span><span style='float:left;display:block;'><a href='fire up.html' target='_blank'>fire up</a>,&nbsp;</span><span style='float:left;display:block;'><a href='on fire.html' target='_blank'>on fire</a>,&nbsp;</span><span style='float:left;display:block;'><a href='admire.html' target='_blank'>admire</a>,&nbsp;</span><span style='float:left;display:block;'><a href='require.html' target='_blank'>require</a>,&nbsp;</span><span style='float:left;display:block;'><a href='inspire.html' target='_blank'>inspire</a>,&nbsp;</span><span style='float:left;display:block;'><a href='director.html' target='_blank'>director</a>,&nbsp;</span><span style='float:left;display:block;'><a href='directly.html' target='_blank'>directly</a>,&nbsp;</span><span style='float:left;display:block;'><a href='required.html' target='_blank'>required</a>,&nbsp;</span><span style='float:left;display:block;'><a href='catch fire.html' target='_blank'>catch fire</a>,&nbsp;</span><span style='float:left;display:block;'><a href='set fire to.html' target='_blank'>set fire to</a>,&nbsp;</span><span style='float:left;display:block;'><a href='requirement.html' target='_blank'>requirement</a>,&nbsp;</span><span style='float:left;display:block;'><a href='inquire about.html' target='_blank'>inquire about</a>,&nbsp;</span><span style='float:left;display:block;'><a href='questionnaire.html' target='_blank'>questionnaire</a>,&nbsp;</span><span style='float:left;display:block;'><a href='in all directions.html' target='_blank'>in all directions</a>,&nbsp;</span><span style='float:left;display:block;'><a href='direct investment.html' target='_blank'>direct investment</a>.&nbsp;</span><div style='clear:both;height:1px;margin-top:-1px;overflow:hidden;margin-bottom:0px;'></div></div>  </div><!-- content -->  </div><!-- viewbox -->  <script>  	function goPage(pagePre){  		var goPageNo=parseInt(document.getElementById("goPageNo").value,10);  		var pageCountNo=parseInt(document.getElementById("pageCountNo").value,10);  		///alert(goPageNo);  		///alert(pageCountNo);  		//这样确实ok啊,把输入为空等情况都剔除了.白名单制度.  		if((goPageNo<=pageCountNo) && (goPageNo>=1)){  		}else{  			alert("Please input the correct page number!");  			return;  		}  		var href1;  		if(goPageNo==1){  			href1=pagePre+".html";  		}else{  			href1=pagePre+"_"+goPageNo+".html";  		}  		window.location.href=href1;  	}  </script>  <div style="text-align:center;margin-top:10px;">  	  Total&nbsp;236, 30&nbsp;Per page&nbsp;      1/8&nbsp;             <a href="/tire.html"><span style="margin-right:2px;">«</span>first</a>&nbsp;             <a href="/tire_2.html">next<span style="margin-left:2px;">›</span></a>&nbsp;             <a href="/tire_8.html">last<span style="margin-left:2px;">»</span></a>&nbsp;            <input type="hidden" id="pageCountNo" value="8" />        goto<input style="margin:auto 2px;" type="text" size=3 id="goPageNo" value="1"  onkeydown="if(event.keyCode==13){goPage('/tire');}" /><input type="button" style="margin-left:3px;cursor:hand;" value="ok" onclick="goPage('/tire');" />      </div>  <script>  function beforeComment(word){     var commentWord=getCookie("commentWord"+word);    if(commentWord!=null){  	alert("fail! The minimum comment interval of one word is 60 seconds");  	return;    }    var username=trim(formComment.username.value);    var comment=trim(formComment.comment.value);    ////如果句子不含word就通不过    if(comment==""){    	 alert("The comment cann't be empty!");    	 return;    }    if(comment.length>1000){    	 alert("The comment cann't be longer then 1000 length!");    	 return;    }  	////ajax    var xmlhttp;  	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari   		 xmlhttp=new XMLHttpRequest();    }else{// code for IE6, IE5    		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");    }    xmlhttp.onreadystatechange=function(){      if (xmlhttp.readyState==4 && xmlhttp.status==200){        ////返回后做事情    		var responseText=xmlhttp.responseText;        		////需改的地方1    		//有异常.    		if(responseText!="" && responseText!=null){    		   alert(responseText);    		   ///window.close();    		}else{    			var showMsg="comment success! thank you! ";  			//cookie别设置太长,防止用户电脑中cookie太多哦  			setCookie("commentWord"+word,"1",1/60);    			alert(showMsg);  			///var createtime=new Date().toDateString();  			var date1 = new Date();  			var createtime = date1.getFullYear()+'-'+(date1.getMonth()+1)+'-'+date1.getDate()+' '+date1.getHours()+':'+date1.getMinutes()+':'+date1.getSeconds();  			var commentDiv='<div><ul style="padding-bottom:10px;margin-top:8px;border-bottom: 1px dashed #ccc;margin-left:8px;"><li><div><span>';  			commentDiv+=username;  			commentDiv+='</span>&nbsp;<span style="color:#aeaeae">';  			///commentDiv+=createtime.substr(0,10);  			commentDiv+=createtime;  			commentDiv+='</span></div><div style="clear:both;margin:5px auto;">';  			commentDiv+=comment;  			commentDiv+='</div></li></ul></div>\r\n';  			///alert(commentDiv);  			document.getElementById("commetcontent").innerHTML=commentDiv+document.getElementById("commetcontent").innerHTML;  			formComment.comment.value="";     		}  	  }    };    xmlhttp.open("POST","commentAjax.php",true);    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");    var ajaxStr="action=submitAjax&word="+encodeURI(word)+"&comment="+encodeURI(comment)+"&username="+encodeURI(username)+"&rnd="+ Math.random();    xmlhttp.send(ajaxStr);  }  function queryComment(word){     var xmlhttp;  	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari   		 xmlhttp=new XMLHttpRequest();    }else{// code for IE6, IE5    		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");    }   	xmlhttp.onreadystatechange=function(){      if (xmlhttp.readyState==4 && xmlhttp.status==200){        ////返回后做事情    		var responseText=xmlhttp.responseText;      		///alert(responseText);    		////需改的地方1    		//有异常.    		if(responseText!=""){  			var comment_arr=responseText.split("||");  			var comment_html="";  			///alert(comment_arr.length);  			for(var i=0;i<parseInt(comment_arr.length/4);i++){  				var word=comment_arr[i*4];  				var comment=comment_arr[i*4+1];  				var createtime=comment_arr[i*4+2];  				var username=comment_arr[i*4+3];  				var commentDiv='<div><ul style="padding-bottom:10px;margin-top:8px;border-bottom: 1px dashed #ccc;margin-left:8px;"><li><div><span>';  				commentDiv+=username;  				commentDiv+='</span>&nbsp;<span style="color:#aeaeae">';  				///commentDiv+=createtime.substr(0,10);  				commentDiv+=createtime;  				commentDiv+='</span></div><div style="clear:both;margin:5px auto;">';  				commentDiv+=comment;  				commentDiv+='</div></li></ul></div>\r\n';  				///alert(commentDiv);  				comment_html+=commentDiv;  			}  			document.getElementById("commetcontent").innerHTML=comment_html;  			    		}  	  }    };      var ajaxStr="commentAjax.php?action=queryAjax&word="+encodeURI(word)+"&rnd="+ Math.random();    ///alert(ajaxStr);    xmlhttp.open("GET",ajaxStr,true);    xmlhttp.send();  }  </script>  <div class="mt1" style="margin-left:0px;">  <dl class="tbox">      <dt> <strong>Leave a comment</strong></dt>      <dd>        <div class="dede_comment_post">          <form action="#" method="post" name="formComment">            <div class="dcmp-title"> <small>Welcome to leave a comment about this page!</small> </div>  		  <div style="margin:5px auto;">  		  <textarea style="width:98%" name="comment" rows="5" ></textarea>  		  </div>            <div>                Your name:                <input type="text" name="username" value="me" size="8" style="font-size:13px;">                <button type="button" onclick='beforeComment("tire")'>Submit</button>            </div>          </form>        </div>      </dd>  </dl>  </div>    <div style="margin-top:8px;">    <dl class="tbox">      <dt> <strong>Latest comments</strong><span style="float:right;line-height:25px;padding-right:8px;"><a href="comment.php?word=tire" target="_blank">Into the comment page&gt;&gt;</a></span></dt>  	<dd id="commetcontent">  	<!--  	<div>  	  <ul style="padding-bottom:10px;margin-top:8px;border-bottom: 1px dashed #ccc;margin-left:8px;">  		<li>   		  <div><span>某某</span>&nbsp;<span style="color:#aeaeae">2016-01-13</span></div>  		  <div style="clear:both;margin:5px auto;">联网相关的政策</div>  		</li>  	  </ul>  	</div>  	-->  	</dd>    </dl>  </div>        </div><!-- div_main_left -->     <div id="div_main_right" style="width:18%;margin-top:8px;float:right;border:0px solid blue;" >  <div>  <dl class="tbox light" style="margin-bottom:4px;">  	<dt class="light"><strong>More words</strong></dt>  	<dd class="light">  	<ul class="c1 ico2">  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="up to.html">up to</a>&nbsp;(258+78)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="under way.html">under way</a>&nbsp;(202+2)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="under control.html">under control</a>&nbsp;(162+8)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="turn up.html">turn up</a>&nbsp;(163+5)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="turn to.html">turn to</a>&nbsp;(248+15)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="turn over.html">turn over</a>&nbsp;(132+2)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="turn out.html">turn out</a>&nbsp;(187+7)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="turn on.html">turn on</a>&nbsp;(205+12)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="turn off.html">turn off</a>&nbsp;(204+7)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="turn in.html">turn in</a>&nbsp;(145+2)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="turn down.html">turn down</a>&nbsp;(66+3)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="turn away.html">turn away</a>&nbsp;(67+1)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="tune in.html">tune in</a>&nbsp;(55+2)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="try out.html">try out</a>&nbsp;(104)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="try on.html">try on</a>&nbsp;(38+1)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="try for.html">try for</a>&nbsp;(54+2)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="track down.html">track down</a>&nbsp;(69+2)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="touch up.html">touch up</a>&nbsp;(34)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="touch on.html">touch on</a>&nbsp;(61)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="to the point.html">to the point</a>&nbsp;(228+15)</span>  		</li>  			</ul>  	</dd>  </dl>  </div>  <div id="ads4">  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>  <!-- 160_600_20170509 -->  <ins class="adsbygoogle"       style="display:inline-block;width:160px;height:600px"       data-ad-client="ca-pub-7200850114163593"       data-ad-slot="1770400263"></ins>  <script>  (adsbygoogle = window.adsbygoogle || []).push({});  </script>  </div>  </div><!-- div_main_right结束 -->    <!--外部文件,先显示图片,再广告,再其它-->  <!--图+-->  <script>queryComment("tire");</script>    <div style="padding-top:2px;clear:both;"></">  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>  <!-- 970_90_20170421 -->  <ins class="adsbygoogle"       style="display:inline-block;width:970px;height:90px"       data-ad-client="ca-pub-7200850114163593"       data-ad-slot="5287223468"></ins>  <script>  (adsbygoogle = window.adsbygoogle || []).push({});  </script>  </div>  <div class="footer w960 center mt1 clear">  <div class="footer_body">    <div class="copyright">Copyright © 2016 sentencedict.com All Rights Reserved Contact:492108537@qq.com  </div>    </div><!-- footer_body -->  </div><!--footer w960 -->  <script>    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');    ga('create', 'UA-97689481-1', 'auto');    ga('send', 'pageview');  </script>  <!-- Go to www.addthis.com/dashboard to customize your tools -->  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-578e31c97244699a"></script></div><!-- pageDiv -->  <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582HVlH3eBnL31NGVlWtQ%2b6Hch4B0VmbXu9jT6Sy5yNL8EPkjQIUlXIAcWLn3Ztbqq%2f79BabEIlPcbmD33WQyUfFNVlx4hZ58TsGu%2fDFxJPeVspapFHkpCvwM7Q%2bny%2fAZWhJ3%2brHzUFoTo4q8xZTV%2bxL6Aum2pRfTEVoBeiPfeYLzylRcWhDTnVeHiEqJZfDrSotEkNyr4P87LMUxonP1cr55GBbP%2fBM5y%2fG79sdTgSvoApMTya272cojVGVCxqyN4LqZUS3hhdnc8ygNTXow7HW%2bneP%2fwvMZd6N6jgiRGPA6PucNYcsQM8iY%2bykYkeXhyTmTveDp%2fD%2bEaTsLoCgTt%2fAvedukxZmNEeiAOcI%2fDOUiraVkYMxQRG4Y%2bcsXP08Kqh6bVaTcwIQaJsmLC5xaFC64kPZS5kl%2fBoQ%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>  </html>