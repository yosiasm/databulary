<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">   <html>  <head>  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">  <title>Mobile in a sentence (esp. good sentence like quote, proverb...)</title>  <meta name="description" content="290+15 sentence examples: 1. Babies start to get mobile around the age of eight months. 2. The new profuct of youdao mobile is raising its veil. 3. The mobile phone business was actually his bread and butter. 4. Just then, his mobile phone rang. 5. T"/>  <link href="/common/dedecms.css" rel="stylesheet" media="screen" type="text/css">  <style>  #content div{  	line-height:23px;font-size:14px;margin-bottom:15px;  }  #ad_marginbottom_0 div{  	margin-bottom:0px;  }  .hidden1{display:none;}  </style>  <script>  function q1(word){  	formQ.word.value=word;  	formQ.submit();  }  function upWord(word,action,word){  	var votedNumber=getCookie("votedNumber"+word);  	if(votedNumber!=null){  		alert("Have done up or down!");  		return;  	}  	var xmlhttp;  	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari  		 xmlhttp=new XMLHttpRequest();  	}else{// code for IE6, IE5  		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");  	}  	xmlhttp.onreadystatechange=function(){  	if (xmlhttp.readyState==4 && xmlhttp.status==200){  		////返回后做事情  		var responseText=xmlhttp.responseText;    		//有异常.  		if(responseText!="" && responseText!=null){  		   alert(responseText);  		}else{  			var id_temp="wordUpTimes";  			if(action=="down"){  				id_temp="wordDownTimes";  			}  			var temp=document.getElementById(id_temp).innerText;  			var displayTimes=parseInt(temp);  			displayTimes=displayTimes+1;  			document.getElementById(id_temp).innerText=displayTimes;  			//cookie别设置太长,防止用户电脑中cookie太多哦  			setCookie("votedNumber"+word,"1",12);  		}  	  }  	};  	xmlhttp.open("POST","upDownWordDo.php",true);  	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");  	xmlhttp.send("action="+action+"&word="+encodeURIComponent(word)+"&rnd="+ Math.random());  }  </script>  </head>  <body>  <form method="post" style="display:none;" target="_blank" name="formQ" action="/wordQueryDo.php">  <input type="hidden" name="word"/>  <input type="hidden" name="directGo" value="1"/>  </form>  <div class="pageDiv" style="border: 0px solid blue;">  <script>  function trim(str){  　return str.replace(/(^\s*)|(\s*$)/g,"");  }  var strDefault="Please input any word...";  function queryCheck(){  	if(formQuery.vagueSearch.checked){  		///formQuery.q.value=encodeURI(formQuery.word.value+" site:sentencedict.com");  		formQuery.q.value=formQuery.word.value+" site:sentencedict.com";  		var temp=formQuery.action;  		formQuery.action="http://www.google.com/search";  		formQuery.method="get";  		formQuery.target="_blank";  		//为了wo参数不提交  		formQuery.word.disabled=true;  		formQuery.submit();  		formQuery.action=temp;  		formQuery.method="post";  		formQuery.target="_self";  		formQuery.word.disabled=false;  	}else{  		formQuery.word.value=trim(formQuery.word.value);  		var word=formQuery.word.value;  		if(word==""||word==strDefault){  			alert("Please input any word!");return;  		}  		formQuery.submit();  	}  	var temp="1";  	if(!formQuery.directGo.checked){  		temp="0";  	}  	setCookie("directGo",temp,12);  	var temp="1";  	if(!formQuery.vagueSearch.checked){  		temp="0";  	}  	setCookie("vagueSearch",temp,12);  }  function getCookie(name)  {  	var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");  	if(arr=document.cookie.match(reg))  		return (arr[2]);  	else  		return null;  }  function setCookie(cookiename,cookievalue,hours){  	var date=new Date();  	date.setTime(date.getTime()+Number(hours)*3600*1000);  	document.cookie=cookiename+"="+cookievalue+";path=/;expires="+date.toGMTString();  }  </script>  <div class="header">  <table width="100%" style="margin-bottom:4px;font-size:14px;" height=65 cellspacing=0 border=0 >  <tr>      <td width=100 valign="bottom" style="padding:0px;">        <a href="/">        <img src="/images/logo.jpg" style="vertical-align:bottom;margin-bottom:1px;border:0px solid #dddddd" alt="Sentencedict.com" height=50 width=150>        </a>      </td>      <td valign="bottom">  <form method="post" style="margin:2px;margin-left:10px;" name="formQuery" action="/wordQueryDo.php">  <input type='text' style='display:none;'/>  <input type="hidden" name="q" value="">  <input type="text" name="word" maxlength=100 style="float:left;margin-bottom:3px;width:360px;height:28px;line-height:26px;padding-left:6px;font-size:16px;border:1px solid #3D7A01;border-top:1px solid #67CD01;border-left:1px solid #67CD01;color:gray;"   size=20 value="Please input any word..." onfocus="if(this.value==strDefault){this.value='';this.style.color='black';}" onblur="if(this.value==''){this.value=strDefault;this.style.color='gray';}" onkeydown="if(event.keyCode==13){queryCheck();}"/>  <input type="button" style="float:left;width:70px;height:30px;margin-left:4px;cursor:pointer;font-size:14px;" onclick="queryCheck()" value="Search"/><div style="margin-top:10px;float:left;">&nbsp;<input type="checkbox" name="directGo" style="margin-right:2px;margin-bottom:2px;margin-left:2px;" value="1" checked>Directly to word page&nbsp;<span title="use vague search provided by google" style=""><input type="checkbox" name="vagueSearch" style="margin-right:2px;margin-bottom:2px;" value="1" onclick="if(this.checked){formQuery.directGo.disabled=true;}else{formQuery.directGo.disabled=false;}"/>Vauge search(google)</span>  </div>  </form>  </td>  </tr>  </table>  <script>  var temp=getCookie("directGo");  //此情况修改directGo的checked状态  if(temp=="0"){    formQuery.directGo.checked=false;  }  var temp=getCookie("vagueSearch");  //此情况修改vagueSearch的checked状态  if(temp=="1"){    formQuery.vagueSearch.checked=true;  }  </script>  <div class="module blue mT10 wrapper w963">  <div id="navMenu" style="background-color:#199507;border:0px solid red;background-image:url('/images/green_skin.png');background-position:0 -72px;background-repeat:repeat-x;">  <ul>  	<li><a href="/"><span>Home</span></a></li>  	<li><a href="/top1000/"><span>Top1000 word</span></a></li>  	<li><a href="/top5000/"><span>Top5000 word</span></a></li>  	<li><a href="/phrase/"><span>Phrases</span></a></li>  	<!--<li><a href="/conjunction/"><span>Conjunction</span></a></li>-->  	<li><a href="/game/"><span>Game</span></a></li>  	<li><a href="/getSImage.php"><span>Sentence into pic</span></a></li>  	<li><a href="/feedback.php"><span>Feedback</span></a></li>  </ul>  </div><!-- //navMenu -->    </div><!-- //module blue... -->  <div>  </div>  </div><div class="place" style="margin-top:8px;margin-bottom:0px;height:26px;line-height:26px;"><a href="/">Home</a> &gt; <a href="mobile.html">Mobile in a sentence</a>  </div>  <div id="div_main_left" style="width:81%;float:left;margin-top:8px;border:0px solid blue;">    <div class="viewbox" style="width:auto;padding-bottom:0px">  <div class="title" style="padding-top:0px;line-height:56px;height:auto;overflow:visible;">  <h2 style="display:inline;">Mobile in a sentence</h2><!--(esp. good sentence)--><span>&nbsp;&nbsp;<a href="javascript:;" onclick="upWord('mobile','up','mobile')">up(<span id="wordUpTimes">0</span>)</a>&nbsp;&nbsp;<a href="javascript:;" onclick="upWord('mobile','down','mobile')">down(<span id="wordDownTimes">0</span>)</a></span>  </div>  <div class="info">Sentence count:290+15 <input type="checkbox" id="onlyStudent" value="1" style="width:17px;height:17px;" onclick="onlyStudent(this);" />Only show simple sentences<small>Posted:</small>2016-07-22<small>Updated:</small>2016-12-13</div>    <script>  function onlyStudent(this1){  	///alert(this1.checked);  	if(this1.checked){  		document.getElementById('all').style.display='none';  		document.getElementById('student').style.display='block';  		setCookie("onlyStudent","1",12);  	}else{  		document.getElementById('student').style.display='none';  		document.getElementById('all').style.display='block';  		setCookie("onlyStudent","0",12);  	}  }  var temp=getCookie("onlyStudent");  //此情况修改vagueSearch的checked状态  if(temp=="1"){    document.getElementById('onlyStudent').checked=true;  }  </script>    <div  id="content" style="border-bottom:1px solid #aaaaaa;">    <!--最大高度为105px,能显示5行多的样子-->  <div style="line-height:20px;float:none;margin-top:5px;margin-bottom:5px;margin-right:5px;padding:4px;background-color:#cccccc;border:1px solid #DCDDDD;max-height:105px;font-size:14px;overflow:auto;">  	<span style='float:left;display:block;'>Synonym:&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("changeable");'>changeable</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("fluid");'>fluid</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("movable");'>movable</a>.&nbsp;</span><span style='float:left;display:block;'>Antonym:&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("immobile");'>immobile</a>.&nbsp;</span><span style='float:left;display:block;'>Similar words:&nbsp;</span><span style='float:left;display:block;'><a href='automobile.html' target='_blank'>automobile</a>,&nbsp;</span><span style='float:left;display:block;'><a href='upwardly mobile.html' target='_blank'>upwardly mobile</a>,&nbsp;</span><span style='float:left;display:block;'><a href='file.html' target='_blank'>file</a>,&nbsp;</span><span style='float:left;display:block;'><a href='tile.html' target='_blank'>tile</a>,&nbsp;</span><span style='float:left;display:block;'><a href='pile.html' target='_blank'>pile</a>,&nbsp;</span><span style='float:left;display:block;'><a href='ability.html' target='_blank'>ability</a>,&nbsp;</span><span style='float:left;display:block;'><a href='billion.html' target='_blank'>billion</a>,&nbsp;</span><span style='float:left;display:block;'><a href='while.html' target='_blank'>while</a>.&nbsp;</span><span style='float:left;display:block;'>Meaning:&nbsp;['məʊbaɪl]&nbsp;n. 1. a river in southwestern Alabama; flows into Mobile Bay 2. a port in southwestern Alabama on Mobile Bay 3. sculpture suspended in midair whose delicately balanced parts can be set in motion by air currents. adj. 1. moving or capable of moving readily (especially from place to place) 2. (of groups of people) tending to travel and change settlements frequently 3. having transportation available 4. capable of changing quickly from one state or condition to another 5. affording change (especially in social status).&nbsp;</span></div>  <div id="img1" style="margin:5px;margin-top:8px;float:right;">  	<img src="http://sentencedict.com/wordimage/196.jpg" style="width:300px;height:210px;" />  	<div style="text-align:center;margin-top:4px;font-size:12px;line-height:normal;margin-bottom:0px;width:280px;">Sentencedict.com random good picture</div>  </div>    <!--如果仅显示学生,并且该页有学生句子-->  <div id="all" >  <div>(1) Babies start to get <em>mobile</em> around the age of eight months.</div><div>(2) The new profuct of youdao <em>mobile</em> is raising its veil.</div><div>(3) The <em>mobile</em> phone business was actually his bread and butter.</div><div>(4) Just then, his <em>mobile</em> phone rang.</div><div>(5) They invested heavily in 3G <em>mobile</em> phone networks.</div><div>(6) A company car and a <em>mobile</em> phone are some of the perks that come with the job.</div><div>(7) A number of councils operate <em>mobile</em> libraries.</div><div id="ad_marginbottom_0" style="margin-top:-10px;margin-bottom:5px;"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><!-- 728_90_20170421 --><ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-7200850114163593" data-ad-slot="2392632666"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script></div><div>(8) The old lady sits on a <em>mobile</em> chair every morning.</div><div>(9) People these days are much more socially <em>mobile</em> .</div><div>(10) The Party has been unable to attract upwardly <em>mobile</em> voters.</div><div>(11) The first <em>mobile</em> phones were heavy and clumsy to use[Sentence dictionary], but nowadays they are much easier to handle.</div><div>(12) Don't bother trying to call me on my <em>mobile</em> . It's out of whack again.</div><div>(13) He forgot the charger for his <em>mobile</em> phone.</div><div>(14) We managed to raise him on his <em>mobile</em> phone.</div><div>(15) <em>Mobile</em> phones have become an indispensable part of our lives.</div><div>(16) I can probably reach him on his <em>mobile</em>.</div><div>(17) She remained fairly <em>mobile</em> despite her disabilities.</div><div>(18) She's much more <em>mobile</em> now that she's bought a car.</div><div>(19) The robber grabbed the <em>mobile</em> phone away from the woman.</div><div>(20) I bought myself a <em>mobile</em> phone and joined the other suits on the train to the City.</div><div>(21) A <em>mobile</em> phone was clamped to her ear.</div><div>(22) I borrowed my wife's <em>mobile</em> phone last week and a text arrived from another man.</div><div>(23) Two <em>mobile</em> units provide healthcare in rural villages.</div><div>(24) Can you give me a lift if you're <em>mobile</em>?</div><div>(25) I always keep my <em>mobile</em> phone within arm's reach.</div><div>(26) Have you got my <em>mobile</em> number?</div><div>(27) You really need to be <em>mobile</em> if you live in the country.</div><div>(28) I have a real problem with people who use their <em>mobile</em> phones on the train.</div><div>(29) The train was full of people jabbering into their <em>mobile</em> phones.</div><div style="margin-bottom:3px;">(30) In the budget before last a tax penalty on the <em>mobile</em> phone was introduced.</div></div><!--all结束-->  <!--如果不是仅显示学生,或该页没有学生句子-->  <div id="student" style='display:none;'>  <div>(1) Babies start to get <em>mobile</em> around the age of eight months.</div><div>(2) The <em>mobile</em> phone business was actually his bread and butter.</div><div>(3) Just then, his <em>mobile</em> phone rang.</div><div>(4) They invested heavily in 3G <em>mobile</em> phone networks.</div><div>(5) I have a real problem with people who use their <em>mobile</em> phones on the train.</div><div>(6) A company car and a <em>mobile</em> phone are some of the perks that come with the job.</div><div>(7) The train was full of people jabbering into their <em>mobile</em> phones.</div><div>(8) A number of councils operate <em>mobile</em> libraries.</div><div>(9) The old lady sits on a <em>mobile</em> chair every morning.</div><div>(10) People these days are much more socially <em>mobile</em> .</div><div>(11) The Party has been unable to attract upwardly <em>mobile</em> voters.</div><div>(12) The first <em>mobile</em> phones were heavy and clumsy to use, but nowadays they are much easier to handle.</div><div>(13) She's much more <em>mobile</em> now that she's bought a car.</div><div>(14) He converted his truck into a <em>mobile</em> snack bar.</div><div style="margin-bottom:3px;">(15) He has not been so <em>mobile</em> since his accident.</div></div><!--student结束-->    <div id="ad_marginbottom_0" style="padding-top:0px;margin-bottom:6px;line-height:normal;margin-top:-8px;">  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>  <!-- 728_90_20170421 -->  <ins class="adsbygoogle"       style="display:inline-block;width:728px;height:90px"       data-ad-client="ca-pub-7200850114163593"       data-ad-slot="2392632666"></ins>  <script>  (adsbygoogle = window.adsbygoogle || []).push({});  </script>  </div>  <div style="margin-bottom:3px;font-size:13px;line-height:21px;"><span style="font-weight:bold;float:left;display:block">More similar words:&nbsp;</span><span style='float:left;display:block;'><a href='automobile.html' target='_blank'>automobile</a>,&nbsp;</span><span style='float:left;display:block;'><a href='upwardly mobile.html' target='_blank'>upwardly mobile</a>,&nbsp;</span><span style='float:left;display:block;'><a href='file.html' target='_blank'>file</a>,&nbsp;</span><span style='float:left;display:block;'><a href='tile.html' target='_blank'>tile</a>,&nbsp;</span><span style='float:left;display:block;'><a href='pile.html' target='_blank'>pile</a>,&nbsp;</span><span style='float:left;display:block;'><a href='ability.html' target='_blank'>ability</a>,&nbsp;</span><span style='float:left;display:block;'><a href='billion.html' target='_blank'>billion</a>,&nbsp;</span><span style='float:left;display:block;'><a href='while.html' target='_blank'>while</a>,&nbsp;</span><span style='float:left;display:block;'><a href='toilet.html' target='_blank'>toilet</a>,&nbsp;</span><span style='float:left;display:block;'><a href='jubilant.html' target='_blank'>jubilant</a>,&nbsp;</span><span style='float:left;display:block;'><a href='pile up.html' target='_blank'>pile up</a>,&nbsp;</span><span style='float:left;display:block;'><a href='stability.html' target='_blank'>stability</a>,&nbsp;</span><span style='float:left;display:block;'><a href='liability.html' target='_blank'>liability</a>,&nbsp;</span><span style='float:left;display:block;'><a href='capability.html' target='_blank'>capability</a>,&nbsp;</span><span style='float:left;display:block;'><a href='disability.html' target='_blank'>disability</a>,&nbsp;</span><span style='float:left;display:block;'><a href='missile.html' target='_blank'>missile</a>,&nbsp;</span><span style='float:left;display:block;'><a href='profile.html' target='_blank'>profile</a>,&nbsp;</span><span style='float:left;display:block;'><a href='smile on.html' target='_blank'>smile on</a>,&nbsp;</span><span style='float:left;display:block;'><a href='hostile.html' target='_blank'>hostile</a>,&nbsp;</span><span style='float:left;display:block;'><a href='dilemma.html' target='_blank'>dilemma</a>,&nbsp;</span><span style='float:left;display:block;'><a href='trailer.html' target='_blank'>trailer</a>,&nbsp;</span><span style='float:left;display:block;'><a href='fragile.html' target='_blank'>fragile</a>,&nbsp;</span><span style='float:left;display:block;'><a href='credibility.html' target='_blank'>credibility</a>,&nbsp;</span><span style='float:left;display:block;'><a href='reliability.html' target='_blank'>reliability</a>,&nbsp;</span><span style='float:left;display:block;'><a href='flexibility.html' target='_blank'>flexibility</a>,&nbsp;</span><span style='float:left;display:block;'><a href='retailer.html' target='_blank'>retailer</a>,&nbsp;</span><span style='float:left;display:block;'><a href='detailed.html' target='_blank'>detailed</a>,&nbsp;</span><span style='float:left;display:block;'><a href='availability.html' target='_blank'>availability</a>,&nbsp;</span><span style='float:left;display:block;'><a href='meanwhile.html' target='_blank'>meanwhile</a>,&nbsp;</span><span style='float:left;display:block;'><a href='accountability.html' target='_blank'>accountability</a>.&nbsp;</span><div style='clear:both;height:1px;margin-top:-1px;overflow:hidden;margin-bottom:0px;'></div></div>  </div><!-- content -->  </div><!-- viewbox -->  <script>  	function goPage(pagePre){  		var goPageNo=parseInt(document.getElementById("goPageNo").value,10);  		var pageCountNo=parseInt(document.getElementById("pageCountNo").value,10);  		///alert(goPageNo);  		///alert(pageCountNo);  		//这样确实ok啊,把输入为空等情况都剔除了.白名单制度.  		if((goPageNo<=pageCountNo) && (goPageNo>=1)){  		}else{  			alert("Please input the correct page number!");  			return;  		}  		var href1;  		if(goPageNo==1){  			href1=pagePre+".html";  		}else{  			href1=pagePre+"_"+goPageNo+".html";  		}  		window.location.href=href1;  	}  </script>  <div style="text-align:center;margin-top:10px;">  	  Total&nbsp;290, 30&nbsp;Per page&nbsp;      1/10&nbsp;             <a href="/mobile.html"><span style="margin-right:2px;">«</span>first</a>&nbsp;             <a href="/mobile_2.html">next<span style="margin-left:2px;">›</span></a>&nbsp;             <a href="/mobile_10.html">last<span style="margin-left:2px;">»</span></a>&nbsp;            <input type="hidden" id="pageCountNo" value="10" />        goto<input style="margin:auto 2px;" type="text" size=3 id="goPageNo" value="1"  onkeydown="if(event.keyCode==13){goPage('/mobile');}" /><input type="button" style="margin-left:3px;cursor:hand;" value="ok" onclick="goPage('/mobile');" />      </div>  <script>  function beforeComment(word){     var commentWord=getCookie("commentWord"+word);    if(commentWord!=null){  	alert("fail! The minimum comment interval of one word is 60 seconds");  	return;    }    var username=trim(formComment.username.value);    var comment=trim(formComment.comment.value);    ////如果句子不含word就通不过    if(comment==""){    	 alert("The comment cann't be empty!");    	 return;    }    if(comment.length>1000){    	 alert("The comment cann't be longer then 1000 length!");    	 return;    }  	////ajax    var xmlhttp;  	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari   		 xmlhttp=new XMLHttpRequest();    }else{// code for IE6, IE5    		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");    }    xmlhttp.onreadystatechange=function(){      if (xmlhttp.readyState==4 && xmlhttp.status==200){        ////返回后做事情    		var responseText=xmlhttp.responseText;        		////需改的地方1    		//有异常.    		if(responseText!="" && responseText!=null){    		   alert(responseText);    		   ///window.close();    		}else{    			var showMsg="comment success! thank you! ";  			//cookie别设置太长,防止用户电脑中cookie太多哦  			setCookie("commentWord"+word,"1",1/60);    			alert(showMsg);  			///var createtime=new Date().toDateString();  			var date1 = new Date();  			var createtime = date1.getFullYear()+'-'+(date1.getMonth()+1)+'-'+date1.getDate()+' '+date1.getHours()+':'+date1.getMinutes()+':'+date1.getSeconds();  			var commentDiv='<div><ul style="padding-bottom:10px;margin-top:8px;border-bottom: 1px dashed #ccc;margin-left:8px;"><li><div><span>';  			commentDiv+=username;  			commentDiv+='</span>&nbsp;<span style="color:#aeaeae">';  			///commentDiv+=createtime.substr(0,10);  			commentDiv+=createtime;  			commentDiv+='</span></div><div style="clear:both;margin:5px auto;">';  			commentDiv+=comment;  			commentDiv+='</div></li></ul></div>\r\n';  			///alert(commentDiv);  			document.getElementById("commetcontent").innerHTML=commentDiv+document.getElementById("commetcontent").innerHTML;  			formComment.comment.value="";     		}  	  }    };    xmlhttp.open("POST","commentAjax.php",true);    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");    var ajaxStr="action=submitAjax&word="+encodeURI(word)+"&comment="+encodeURI(comment)+"&username="+encodeURI(username)+"&rnd="+ Math.random();    xmlhttp.send(ajaxStr);  }  function queryComment(word){     var xmlhttp;  	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari   		 xmlhttp=new XMLHttpRequest();    }else{// code for IE6, IE5    		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");    }   	xmlhttp.onreadystatechange=function(){      if (xmlhttp.readyState==4 && xmlhttp.status==200){        ////返回后做事情    		var responseText=xmlhttp.responseText;      		///alert(responseText);    		////需改的地方1    		//有异常.    		if(responseText!=""){  			var comment_arr=responseText.split("||");  			var comment_html="";  			///alert(comment_arr.length);  			for(var i=0;i<parseInt(comment_arr.length/4);i++){  				var word=comment_arr[i*4];  				var comment=comment_arr[i*4+1];  				var createtime=comment_arr[i*4+2];  				var username=comment_arr[i*4+3];  				var commentDiv='<div><ul style="padding-bottom:10px;margin-top:8px;border-bottom: 1px dashed #ccc;margin-left:8px;"><li><div><span>';  				commentDiv+=username;  				commentDiv+='</span>&nbsp;<span style="color:#aeaeae">';  				///commentDiv+=createtime.substr(0,10);  				commentDiv+=createtime;  				commentDiv+='</span></div><div style="clear:both;margin:5px auto;">';  				commentDiv+=comment;  				commentDiv+='</div></li></ul></div>\r\n';  				///alert(commentDiv);  				comment_html+=commentDiv;  			}  			document.getElementById("commetcontent").innerHTML=comment_html;  			    		}  	  }    };      var ajaxStr="commentAjax.php?action=queryAjax&word="+encodeURI(word)+"&rnd="+ Math.random();    ///alert(ajaxStr);    xmlhttp.open("GET",ajaxStr,true);    xmlhttp.send();  }  </script>  <div class="mt1" style="margin-left:0px;">  <dl class="tbox">      <dt> <strong>Leave a comment</strong></dt>      <dd>        <div class="dede_comment_post">          <form action="#" method="post" name="formComment">            <div class="dcmp-title"> <small>Welcome to leave a comment about this page!</small> </div>  		  <div style="margin:5px auto;">  		  <textarea style="width:98%" name="comment" rows="5" ></textarea>  		  </div>            <div>                Your name:                <input type="text" name="username" value="me" size="8" style="font-size:13px;">                <button type="button" onclick='beforeComment("mobile")'>Submit</button>            </div>          </form>        </div>      </dd>  </dl>  </div>    <div style="margin-top:8px;">    <dl class="tbox">      <dt> <strong>Latest comments</strong><span style="float:right;line-height:25px;padding-right:8px;"><a href="comment.php?word=mobile" target="_blank">Into the comment page&gt;&gt;</a></span></dt>  	<dd id="commetcontent">  	<!--  	<div>  	  <ul style="padding-bottom:10px;margin-top:8px;border-bottom: 1px dashed #ccc;margin-left:8px;">  		<li>   		  <div><span>某某</span>&nbsp;<span style="color:#aeaeae">2016-01-13</span></div>  		  <div style="clear:both;margin:5px auto;">联网相关的政策</div>  		</li>  	  </ul>  	</div>  	-->  	</dd>    </dl>  </div>        </div><!-- div_main_left -->     <div id="div_main_right" style="width:18%;margin-top:8px;float:right;border:0px solid blue;" >  <div>  <dl class="tbox light" style="margin-bottom:4px;">  	<dt class="light"><strong>More words</strong></dt>  	<dd class="light">  	<ul class="c1 ico2">  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="auricle.html">auricle</a>&nbsp;(45)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="velocity.html">velocity</a>&nbsp;(155+5)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="well-bred.html">well-bred</a>&nbsp;(25)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="fresco.html">fresco</a>&nbsp;(57)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="educated.html">educated</a>&nbsp;(185+16)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="hurry.html">hurry</a>&nbsp;(257+57)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="eminent domain.html">eminent domain</a>&nbsp;(23)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="indelible.html">indelible</a>&nbsp;(77+3)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="emanate.html">emanate</a>&nbsp;(38)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="prosecute.html">prosecute</a>&nbsp;(96+6)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="sketchy.html">sketchy</a>&nbsp;(45+1)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="impartiality.html">impartiality</a>&nbsp;(57+2)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="prima facie.html">prima facie</a>&nbsp;(15+2)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="abomination.html">abomination</a>&nbsp;(43+1)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="abbreviation.html">abbreviation</a>&nbsp;(115+3)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="acquired.html">acquired</a>&nbsp;(274+22)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="clement.html">clement</a>&nbsp;(69+1)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="preoccupy.html">preoccupy</a>&nbsp;(24)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="intoxicate.html">intoxicate</a>&nbsp;(29)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="intoxication.html">intoxication</a>&nbsp;(77+1)</span>  		</li>  			</ul>  	</dd>  </dl>  </div>  <div id="ads4">  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>  <!-- 160_600_20170509 -->  <ins class="adsbygoogle"       style="display:inline-block;width:160px;height:600px"       data-ad-client="ca-pub-7200850114163593"       data-ad-slot="1770400263"></ins>  <script>  (adsbygoogle = window.adsbygoogle || []).push({});  </script>  </div>  </div><!-- div_main_right结束 -->    <!--外部文件,先显示图片,再广告,再其它-->  <!--图+-->  <script>queryComment("mobile");</script>    <div style="padding-top:2px;clear:both;"></">  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>  <!-- 970_90_20170421 -->  <ins class="adsbygoogle"       style="display:inline-block;width:970px;height:90px"       data-ad-client="ca-pub-7200850114163593"       data-ad-slot="5287223468"></ins>  <script>  (adsbygoogle = window.adsbygoogle || []).push({});  </script>  </div>  <div class="footer w960 center mt1 clear">  <div class="footer_body">    <div class="copyright">Copyright © 2016 sentencedict.com All Rights Reserved Contact:492108537@qq.com  </div>    </div><!-- footer_body -->  </div><!--footer w960 -->  <script>    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');    ga('create', 'UA-97689481-1', 'auto');    ga('send', 'pageview');  </script>  <!-- Go to www.addthis.com/dashboard to customize your tools -->  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-578e31c97244699a"></script></div><!-- pageDiv -->  </body>  </html>