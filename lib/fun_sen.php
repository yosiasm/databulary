<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">   <html>  <head>  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">  <title>Fun in a sentence (esp. good sentence like quote, proverb...)</title>  <meta name="description" content="165+45 sentence examples: 1. Humor has been well defined as thinking in fun while feeling in earnest. 2. When you feel tension building, find something fun to do. 3. There's plenty of fun for all the family. 4. We had lots of fun at the fair today. 5"/>  <link href="/common/dedecms.css" rel="stylesheet" media="screen" type="text/css">  <style>  #content div{  	line-height:23px;font-size:14px;margin-bottom:15px;  }  #ad_marginbottom_0 div{  	margin-bottom:0px;  }  .hidden1{display:none;}  </style>  <script>  function q1(word){  	formQ.word.value=word;  	formQ.submit();  }  function upWord(word,action,word){  	var votedNumber=getCookie("votedNumber"+word);  	if(votedNumber!=null){  		alert("Have done up or down!");  		return;  	}  	var xmlhttp;  	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari  		 xmlhttp=new XMLHttpRequest();  	}else{// code for IE6, IE5  		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");  	}  	xmlhttp.onreadystatechange=function(){  	if (xmlhttp.readyState==4 && xmlhttp.status==200){  		////返回后做事情  		var responseText=xmlhttp.responseText;    		//有异常.  		if(responseText!="" && responseText!=null){  		   alert(responseText);  		}else{  			var id_temp="wordUpTimes";  			if(action=="down"){  				id_temp="wordDownTimes";  			}  			var temp=document.getElementById(id_temp).innerText;  			var displayTimes=parseInt(temp);  			displayTimes=displayTimes+1;  			document.getElementById(id_temp).innerText=displayTimes;  			//cookie别设置太长,防止用户电脑中cookie太多哦  			setCookie("votedNumber"+word,"1",12);  		}  	  }  	};  	xmlhttp.open("POST","upDownWordDo.php",true);  	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");  	xmlhttp.send("action="+action+"&word="+encodeURIComponent(word)+"&rnd="+ Math.random());  }  </script>  </head>  <body>  <form method="post" style="display:none;" target="_blank" name="formQ" action="/wordQueryDo.php">  <input type="hidden" name="word"/>  <input type="hidden" name="directGo" value="1"/>  </form>  <div class="pageDiv" style="border: 0px solid blue;">  <script>  function trim(str){  　return str.replace(/(^\s*)|(\s*$)/g,"");  }  var strDefault="Please input any word...";  function queryCheck(){  	if(formQuery.vagueSearch.checked){  		///formQuery.q.value=encodeURI(formQuery.word.value+" site:sentencedict.com");  		formQuery.q.value=formQuery.word.value+" site:sentencedict.com";  		var temp=formQuery.action;  		formQuery.action="http://www.google.com/search";  		formQuery.method="get";  		formQuery.target="_blank";  		//为了wo参数不提交  		formQuery.word.disabled=true;  		formQuery.submit();  		formQuery.action=temp;  		formQuery.method="post";  		formQuery.target="_self";  		formQuery.word.disabled=false;  	}else{  		formQuery.word.value=trim(formQuery.word.value);  		var word=formQuery.word.value;  		if(word==""||word==strDefault){  			alert("Please input any word!");return;  		}  		formQuery.submit();  	}  	var temp="1";  	if(!formQuery.directGo.checked){  		temp="0";  	}  	setCookie("directGo",temp,12);  	var temp="1";  	if(!formQuery.vagueSearch.checked){  		temp="0";  	}  	setCookie("vagueSearch",temp,12);  }  function getCookie(name)  {  	var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");  	if(arr=document.cookie.match(reg))  		return (arr[2]);  	else  		return null;  }  function setCookie(cookiename,cookievalue,hours){  	var date=new Date();  	date.setTime(date.getTime()+Number(hours)*3600*1000);  	document.cookie=cookiename+"="+cookievalue+";path=/;expires="+date.toGMTString();  }  </script>  <div class="header">  <table width="100%" style="margin-bottom:4px;font-size:14px;" height=65 cellspacing=0 border=0 >  <tr>      <td width=100 valign="bottom" style="padding:0px;">        <a href="/">        <img src="/images/logo.jpg" style="vertical-align:bottom;margin-bottom:1px;border:0px solid #dddddd" alt="Sentencedict.com" height=50 width=150>        </a>      </td>      <td valign="bottom">  <form method="post" style="margin:2px;margin-left:10px;" name="formQuery" action="/wordQueryDo.php">  <input type='text' style='display:none;'/>  <input type="hidden" name="q" value="">  <input type="text" name="word" maxlength=100 style="float:left;margin-bottom:3px;width:360px;height:28px;line-height:26px;padding-left:6px;font-size:16px;border:1px solid #3D7A01;border-top:1px solid #67CD01;border-left:1px solid #67CD01;color:gray;"   size=20 value="Please input any word..." onfocus="if(this.value==strDefault){this.value='';this.style.color='black';}" onblur="if(this.value==''){this.value=strDefault;this.style.color='gray';}" onkeydown="if(event.keyCode==13){queryCheck();}"/>  <input type="button" style="float:left;width:70px;height:30px;margin-left:4px;cursor:pointer;font-size:14px;" onclick="queryCheck()" value="Search"/><div style="margin-top:10px;float:left;">&nbsp;<input type="checkbox" name="directGo" style="margin-right:2px;margin-bottom:2px;margin-left:2px;" value="1" checked>Directly to word page&nbsp;<span title="use vague search provided by google" style=""><input type="checkbox" name="vagueSearch" style="margin-right:2px;margin-bottom:2px;" value="1" onclick="if(this.checked){formQuery.directGo.disabled=true;}else{formQuery.directGo.disabled=false;}"/>Vauge search(google)</span>  </div>  </form>  </td>  </tr>  </table>  <script>  var temp=getCookie("directGo");  //此情况修改directGo的checked状态  if(temp=="0"){    formQuery.directGo.checked=false;  }  var temp=getCookie("vagueSearch");  //此情况修改vagueSearch的checked状态  if(temp=="1"){    formQuery.vagueSearch.checked=true;  }  </script>  <div class="module blue mT10 wrapper w963">  <div id="navMenu" style="background-color:#199507;border:0px solid red;background-image:url('/images/green_skin.png');background-position:0 -72px;background-repeat:repeat-x;">  <ul>  	<li><a href="/"><span>Home</span></a></li>  	<li><a href="/top1000/"><span>Top1000 word</span></a></li>  	<li><a href="/top5000/"><span>Top5000 word</span></a></li>  	<li><a href="/phrase/"><span>Phrases</span></a></li>  	<!--<li><a href="/conjunction/"><span>Conjunction</span></a></li>-->  	<li><a href="/game/"><span>Game</span></a></li>  	<li><a href="/getSImage.php"><span>Sentence into pic</span></a></li>  	<li><a href="/feedback.php"><span>Feedback</span></a></li>  </ul>  </div><!-- //navMenu -->    </div><!-- //module blue... -->  <div>  </div>  </div><div class="place" style="margin-top:8px;margin-bottom:0px;height:26px;line-height:26px;"><a href="/">Home</a> &gt; <a href="fun.html">Fun in a sentence</a>  </div>  <div id="div_main_left" style="width:81%;float:left;margin-top:8px;border:0px solid blue;">    <div class="viewbox" style="width:auto;padding-bottom:0px">  <div class="title" style="padding-top:0px;line-height:56px;height:auto;overflow:visible;">  <h2 style="display:inline;">Fun in a sentence</h2><!--(esp. good sentence)--><span>&nbsp;&nbsp;<a href="javascript:;" onclick="upWord('fun','up','fun')">up(<span id="wordUpTimes">0</span>)</a>&nbsp;&nbsp;<a href="javascript:;" onclick="upWord('fun','down','fun')">down(<span id="wordDownTimes">0</span>)</a></span>  </div>  <div class="info">Sentence count:165+45 <input type="checkbox" id="onlyStudent" value="1" style="width:17px;height:17px;" onclick="onlyStudent(this);" />Only show simple sentences<small>Posted:</small>2016-10-01<small>Updated:</small>2016-12-13</div>    <script>  function onlyStudent(this1){  	///alert(this1.checked);  	if(this1.checked){  		document.getElementById('all').style.display='none';  		document.getElementById('student').style.display='block';  		setCookie("onlyStudent","1",12);  	}else{  		document.getElementById('student').style.display='none';  		document.getElementById('all').style.display='block';  		setCookie("onlyStudent","0",12);  	}  }  var temp=getCookie("onlyStudent");  //此情况修改vagueSearch的checked状态  if(temp=="1"){    document.getElementById('onlyStudent').checked=true;  }  </script>    <div  id="content" style="border-bottom:1px solid #aaaaaa;">    <!--最大高度为105px,能显示5行多的样子-->  <div style="line-height:20px;float:none;margin-top:5px;margin-bottom:5px;margin-right:5px;padding:4px;background-color:#cccccc;border:1px solid #DCDDDD;max-height:105px;font-size:14px;overflow:auto;">  	<span style='float:left;display:block;'>Synonym:&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("amusement");'>amusement</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("enjoyment");'>enjoyment</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("entertainment");'>entertainment</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("joking");'>joking</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("pleasure");'>pleasure</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("sport");'>sport</a>.&nbsp;</span><span style='float:left;display:block;'>Similar words:&nbsp;</span><span style='float:left;display:block;'><a href='fund.html' target='_blank'>fund</a>,&nbsp;</span><span style='float:left;display:block;'><a href='refund.html' target='_blank'>refund</a>,&nbsp;</span><span style='float:left;display:block;'><a href='defunct.html' target='_blank'>defunct</a>,&nbsp;</span><span style='float:left;display:block;'><a href='funeral.html' target='_blank'>funeral</a>,&nbsp;</span><span style='float:left;display:block;'><a href='funding.html' target='_blank'>funding</a>,&nbsp;</span><span style='float:left;display:block;'><a href='fungible.html' target='_blank'>fungible</a>,&nbsp;</span><span style='float:left;display:block;'><a href='function.html' target='_blank'>function</a>,&nbsp;</span><span style='float:left;display:block;'><a href='make fun of.html' target='_blank'>make fun of</a>.&nbsp;</span><span style='float:left;display:block;'>Meaning:&nbsp;[fʌn]&nbsp;n. 1. activities that are enjoyable or amusing 2. verbal wit or mockery (often at another's expense but not to be taken seriously) 3. violent and excited activity 4. a disposition to find (or make) causes for amusement. adj. providing enjoyment; pleasantly entertaining.&nbsp;</span></div>  <div id="img1" style="margin:5px;margin-top:8px;float:right;">  	<img src="http://sentencedict.com/wordimage/201.jpg" style="width:300px;height:210px;" />  	<div style="text-align:center;margin-top:4px;font-size:12px;line-height:normal;margin-bottom:0px;width:280px;">Sentencedict.com random good picture</div>  </div>    <!--如果仅显示学生,并且该页有学生句子-->  <div id="all" >  <div>1. Humor has been well defined as thinking in <em>fun</em> while feeling in earnest.&nbsp;<a href='/s/46909.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>2. When you feel tension building, find something <em>fun</em> to do. You'll find that the stress you feel will dissipate and your thoughts will become clearer.</div><div>3. There's plenty of <em>fun</em> for all the family.</div><div>4. We had lots of <em>fun</em> at the fair today.</div><div>5. It's <em>fun</em> to send these wishes for an especially happy to an uncle who is nice in every way.</div><div>6. It will be <em>fun</em> to see the chicks come out.</div><div>7. The exercises can be <em>fun</em> and a good warm-up for the latter part of the programme.</div><div id="ad_marginbottom_0" style="margin-top:-10px;margin-bottom:5px;"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><!-- 728_90_20170421 --><ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-7200850114163593" data-ad-slot="2392632666"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script></div><div>8. The boys' games started as harmless <em>fun</em> but ended in tragedy.</div><div>9. It's not much <em>fun</em> going to a party on your own.</div><div>10. Never make <em>fun</em> of people who speak broken English.It means that they know another language.</div><div>11. He never lost his innate sense of <em>fun</em>.</div><div>12. Although he had only entered the contest for <em>fun</em>, he won first prize.</div><div>13. Larsson sometimes joined in the <em>fun</em>, but with more discretion.</div><div>14. The local council has organized a two-mile <em>fun</em> run for charity.</div><div>15. It's no <em>fun</em> being with you, you old misery!</div><div>16. She poked <em>fun</em> at people's shortcomings with sarcastic remarks.</div><div>17. He used to make <em>fun</em> of what he called her 'plebeian origins'.</div><div>18. I wasn't serious; I only did it for <em>fun</em>.</div><div>19. Let's forget about work and have some <em>fun</em>.</div><div>20. We had a lot of <em>fun</em> at Sarah's party.</div><div>21. 'Your job sounds <em>fun</em>.' 'It depends what you mean by 'fun'.'</div><div>22. The children were having <em>fun</em>,[sentence dictionary] chasing each other's shadows.</div><div>23. I've promised myself some <em>fun</em> when the exams are over.</div><div>24. I decided to learn Spanish, just for <em>fun</em>.</div><div>25. This is a fabulous album. It's fresh, varied, <em>fun</em>.</div><div>26. She would have cracked up if she hadn't allowed herself some <em>fun</em>.</div><div>27. I really enjoyed your party - it was such good <em>fun</em>.</div><div>28. He is, by nature, a joker, a witty man with a sense of <em>fun</em>.</div><div>29. I hope that everyone will be able to join in the <em>fun</em>.</div><div style="margin-bottom:3px;">30. Everything about the film was good. Good acting, good story, good <em>fun</em>.</div></div><!--all结束-->  <!--如果不是仅显示学生,或该页没有学生句子-->  <div id="student" style='display:none;'>  <div>1. She would have cracked up if she hadn't allowed herself some <em>fun</em>.</div><div>2. There's plenty of <em>fun</em> for all the family.</div><div>3. The exercises can be <em>fun</em> and a good warm-up for the latter part of the programme.</div><div>4. It's not much <em>fun</em> going to a party on your own.</div><div>5. I really enjoyed your party - it was such good <em>fun</em>.</div><div>6. He never lost his innate sense of <em>fun</em>.</div><div>7. Larsson sometimes joined in the <em>fun</em>, but with more discretion.</div><div>8. The local council has organized a two-mile <em>fun</em> run for charity.</div><div>9. She poked <em>fun</em> at people's shortcomings with sarcastic remarks.</div><div>10. He used to make <em>fun</em> of what he called her 'plebeian origins'.</div><div>11. I wasn't serious; I only did it for <em>fun</em>.</div><div>12. Let's forget about work and have some <em>fun</em>.</div><div>13. We had a lot of <em>fun</em> at Sarah's party.</div><div>14. 'Your job sounds <em>fun</em>.' 'It depends what you mean by 'fun'.'</div><div>15. The children were having <em>fun</em>, chasing each other's shadows.</div><div>16. I've promised myself some <em>fun</em> when the exams are over.</div><div>17. He is, by nature, a joker, a witty man with a sense of <em>fun</em>.</div><div>18. I hope that everyone will be able to join in the <em>fun</em>.</div><div>19. I decided to learn Spanish, just for <em>fun</em>.</div><div>20. This is a fabulous album. It's fresh, varied, <em>fun</em>.</div><div>21. Everything about the film was good. Good acting, good story, good <em>fun</em>.</div><div>22. That sounds like a lot of <em>fun</em>.</div><div>23. We don't have any <em>fun</em> anymore.</div><div>24. The whole family can join in the <em>fun</em> at Water World.</div><div>25. I just want to have <em>fun</em>.</div><div>26. Acting with an amateur theatrical group can be <em>fun</em>.</div><div>27. I didn't do all that work just for the <em>fun</em> of it.</div><div>28. 'What <em>fun</em>!' she said with a laugh.</div><div>29. Talking one-on-one with people is not his idea of <em>fun</em>.</div><div style="margin-bottom:3px;">30. It was such a success and we had so much <em>fun</em> doing it.</div></div><!--student结束-->    <div id="ad_marginbottom_0" style="padding-top:0px;margin-bottom:6px;line-height:normal;margin-top:-8px;">  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>  <!-- 728_90_20170421 -->  <ins class="adsbygoogle"       style="display:inline-block;width:728px;height:90px"       data-ad-client="ca-pub-7200850114163593"       data-ad-slot="2392632666"></ins>  <script>  (adsbygoogle = window.adsbygoogle || []).push({});  </script>  </div>  <div style="margin-bottom:3px;font-size:13px;line-height:21px;"><span style="font-weight:bold;float:left;display:block">More similar words:&nbsp;</span><span style='float:left;display:block;'><a href='fund.html' target='_blank'>fund</a>,&nbsp;</span><span style='float:left;display:block;'><a href='refund.html' target='_blank'>refund</a>,&nbsp;</span><span style='float:left;display:block;'><a href='defunct.html' target='_blank'>defunct</a>,&nbsp;</span><span style='float:left;display:block;'><a href='funeral.html' target='_blank'>funeral</a>,&nbsp;</span><span style='float:left;display:block;'><a href='funding.html' target='_blank'>funding</a>,&nbsp;</span><span style='float:left;display:block;'><a href='fungible.html' target='_blank'>fungible</a>,&nbsp;</span><span style='float:left;display:block;'><a href='function.html' target='_blank'>function</a>,&nbsp;</span><span style='float:left;display:block;'><a href='make fun of.html' target='_blank'>make fun of</a>,&nbsp;</span><span style='float:left;display:block;'><a href='functional.html' target='_blank'>functional</a>,&nbsp;</span><span style='float:left;display:block;'><a href='and function.html' target='_blank'>and function</a>,&nbsp;</span><span style='float:left;display:block;'><a href='fundamental.html' target='_blank'>fundamental</a>,&nbsp;</span><span style='float:left;display:block;'><a href='malfunction.html' target='_blank'>malfunction</a>.&nbsp;</span><div style='clear:both;height:1px;margin-top:-1px;overflow:hidden;margin-bottom:0px;'></div></div>  </div><!-- content -->  </div><!-- viewbox -->  <script>  	function goPage(pagePre){  		var goPageNo=parseInt(document.getElementById("goPageNo").value,10);  		var pageCountNo=parseInt(document.getElementById("pageCountNo").value,10);  		///alert(goPageNo);  		///alert(pageCountNo);  		//这样确实ok啊,把输入为空等情况都剔除了.白名单制度.  		if((goPageNo<=pageCountNo) && (goPageNo>=1)){  		}else{  			alert("Please input the correct page number!");  			return;  		}  		var href1;  		if(goPageNo==1){  			href1=pagePre+".html";  		}else{  			href1=pagePre+"_"+goPageNo+".html";  		}  		window.location.href=href1;  	}  </script>  <div style="text-align:center;margin-top:10px;">  	  Total&nbsp;165, 30&nbsp;Per page&nbsp;      1/6&nbsp;             <a href="/fun.html"><span style="margin-right:2px;">«</span>first</a>&nbsp;             <a href="/fun_2.html">next<span style="margin-left:2px;">›</span></a>&nbsp;             <a href="/fun_6.html">last<span style="margin-left:2px;">»</span></a>&nbsp;            <input type="hidden" id="pageCountNo" value="6" />        goto<input style="margin:auto 2px;" type="text" size=3 id="goPageNo" value="1"  onkeydown="if(event.keyCode==13){goPage('/fun');}" /><input type="button" style="margin-left:3px;cursor:hand;" value="ok" onclick="goPage('/fun');" />      </div>  <script>  function beforeComment(word){     var commentWord=getCookie("commentWord"+word);    if(commentWord!=null){  	alert("fail! The minimum comment interval of one word is 60 seconds");  	return;    }    var username=trim(formComment.username.value);    var comment=trim(formComment.comment.value);    ////如果句子不含word就通不过    if(comment==""){    	 alert("The comment cann't be empty!");    	 return;    }    if(comment.length>1000){    	 alert("The comment cann't be longer then 1000 length!");    	 return;    }  	////ajax    var xmlhttp;  	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari   		 xmlhttp=new XMLHttpRequest();    }else{// code for IE6, IE5    		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");    }    xmlhttp.onreadystatechange=function(){      if (xmlhttp.readyState==4 && xmlhttp.status==200){        ////返回后做事情    		var responseText=xmlhttp.responseText;        		////需改的地方1    		//有异常.    		if(responseText!="" && responseText!=null){    		   alert(responseText);    		   ///window.close();    		}else{    			var showMsg="comment success! thank you! ";  			//cookie别设置太长,防止用户电脑中cookie太多哦  			setCookie("commentWord"+word,"1",1/60);    			alert(showMsg);  			///var createtime=new Date().toDateString();  			var date1 = new Date();  			var createtime = date1.getFullYear()+'-'+(date1.getMonth()+1)+'-'+date1.getDate()+' '+date1.getHours()+':'+date1.getMinutes()+':'+date1.getSeconds();  			var commentDiv='<div><ul style="padding-bottom:10px;margin-top:8px;border-bottom: 1px dashed #ccc;margin-left:8px;"><li><div><span>';  			commentDiv+=username;  			commentDiv+='</span>&nbsp;<span style="color:#aeaeae">';  			///commentDiv+=createtime.substr(0,10);  			commentDiv+=createtime;  			commentDiv+='</span></div><div style="clear:both;margin:5px auto;">';  			commentDiv+=comment;  			commentDiv+='</div></li></ul></div>\r\n';  			///alert(commentDiv);  			document.getElementById("commetcontent").innerHTML=commentDiv+document.getElementById("commetcontent").innerHTML;  			formComment.comment.value="";     		}  	  }    };    xmlhttp.open("POST","commentAjax.php",true);    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");    var ajaxStr="action=submitAjax&word="+encodeURI(word)+"&comment="+encodeURI(comment)+"&username="+encodeURI(username)+"&rnd="+ Math.random();    xmlhttp.send(ajaxStr);  }  function queryComment(word){     var xmlhttp;  	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari   		 xmlhttp=new XMLHttpRequest();    }else{// code for IE6, IE5    		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");    }   	xmlhttp.onreadystatechange=function(){      if (xmlhttp.readyState==4 && xmlhttp.status==200){        ////返回后做事情    		var responseText=xmlhttp.responseText;      		///alert(responseText);    		////需改的地方1    		//有异常.    		if(responseText!=""){  			var comment_arr=responseText.split("||");  			var comment_html="";  			///alert(comment_arr.length);  			for(var i=0;i<parseInt(comment_arr.length/4);i++){  				var word=comment_arr[i*4];  				var comment=comment_arr[i*4+1];  				var createtime=comment_arr[i*4+2];  				var username=comment_arr[i*4+3];  				var commentDiv='<div><ul style="padding-bottom:10px;margin-top:8px;border-bottom: 1px dashed #ccc;margin-left:8px;"><li><div><span>';  				commentDiv+=username;  				commentDiv+='</span>&nbsp;<span style="color:#aeaeae">';  				///commentDiv+=createtime.substr(0,10);  				commentDiv+=createtime;  				commentDiv+='</span></div><div style="clear:both;margin:5px auto;">';  				commentDiv+=comment;  				commentDiv+='</div></li></ul></div>\r\n';  				///alert(commentDiv);  				comment_html+=commentDiv;  			}  			document.getElementById("commetcontent").innerHTML=comment_html;  			    		}  	  }    };      var ajaxStr="commentAjax.php?action=queryAjax&word="+encodeURI(word)+"&rnd="+ Math.random();    ///alert(ajaxStr);    xmlhttp.open("GET",ajaxStr,true);    xmlhttp.send();  }  </script>  <div class="mt1" style="margin-left:0px;">  <dl class="tbox">      <dt> <strong>Leave a comment</strong></dt>      <dd>        <div class="dede_comment_post">          <form action="#" method="post" name="formComment">            <div class="dcmp-title"> <small>Welcome to leave a comment about this page!</small> </div>  		  <div style="margin:5px auto;">  		  <textarea style="width:98%" name="comment" rows="5" ></textarea>  		  </div>            <div>                Your name:                <input type="text" name="username" value="me" size="8" style="font-size:13px;">                <button type="button" onclick='beforeComment("fun")'>Submit</button>            </div>          </form>        </div>      </dd>  </dl>  </div>    <div style="margin-top:8px;">    <dl class="tbox">      <dt> <strong>Latest comments</strong><span style="float:right;line-height:25px;padding-right:8px;"><a href="comment.php?word=fun" target="_blank">Into the comment page&gt;&gt;</a></span></dt>  	<dd id="commetcontent">  	<!--  	<div>  	  <ul style="padding-bottom:10px;margin-top:8px;border-bottom: 1px dashed #ccc;margin-left:8px;">  		<li>   		  <div><span>某某</span>&nbsp;<span style="color:#aeaeae">2016-01-13</span></div>  		  <div style="clear:both;margin:5px auto;">联网相关的政策</div>  		</li>  	  </ul>  	</div>  	-->  	</dd>    </dl>  </div>        </div><!-- div_main_left -->     <div id="div_main_right" style="width:18%;margin-top:8px;float:right;border:0px solid blue;" >  <div>  <dl class="tbox light" style="margin-bottom:4px;">  	<dt class="light"><strong>More words</strong></dt>  	<dd class="light">  	<ul class="c1 ico2">  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="candidate.html">candidate</a>&nbsp;(232+27)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="perform.html">perform</a>&nbsp;(234+11)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="structure.html">structure</a>&nbsp;(231+20)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="camera.html">camera</a>&nbsp;(170+30)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="particular.html">particular</a>&nbsp;(150+41)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="chair.html">chair</a>&nbsp;(162+83)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="manage.html">manage</a>&nbsp;(203+25)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="interview.html">interview</a>&nbsp;(206+50)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="shake.html">shake</a>&nbsp;(290+21)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="wide.html">wide</a>&nbsp;(295+72)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="apply.html">apply</a>&nbsp;(290+38)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="contain.html">contain</a>&nbsp;(199+14)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="cultural.html">cultural</a>&nbsp;(198+32)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="employee.html">employee</a>&nbsp;(180+9)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="onto.html">onto</a>&nbsp;(261+53)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="traditional.html">traditional</a>&nbsp;(219+42)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="maintain.html">maintain</a>&nbsp;(269+18)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="statement.html">statement</a>&nbsp;(169+65)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="respond.html">respond</a>&nbsp;(244+7)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="impact.html">impact</a>&nbsp;(188+22)</span>  		</li>  			</ul>  	</dd>  </dl>  </div>  <div id="ads4">  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>  <!-- 160_600_20170509 -->  <ins class="adsbygoogle"       style="display:inline-block;width:160px;height:600px"       data-ad-client="ca-pub-7200850114163593"       data-ad-slot="1770400263"></ins>  <script>  (adsbygoogle = window.adsbygoogle || []).push({});  </script>  </div>  </div><!-- div_main_right结束 -->    <!--外部文件,先显示图片,再广告,再其它-->  <!--图+-->  <script>queryComment("fun");</script>    <div style="padding-top:2px;clear:both;"></">  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>  <!-- 970_90_20170421 -->  <ins class="adsbygoogle"       style="display:inline-block;width:970px;height:90px"       data-ad-client="ca-pub-7200850114163593"       data-ad-slot="5287223468"></ins>  <script>  (adsbygoogle = window.adsbygoogle || []).push({});  </script>  </div>  <div class="footer w960 center mt1 clear">  <div class="footer_body">    <div class="copyright">Copyright © 2016 sentencedict.com All Rights Reserved Contact:492108537@qq.com  </div>    </div><!-- footer_body -->  </div><!--footer w960 -->  <script>    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');    ga('create', 'UA-97689481-1', 'auto');    ga('send', 'pageview');  </script>  <!-- Go to www.addthis.com/dashboard to customize your tools -->  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-578e31c97244699a"></script></div><!-- pageDiv -->  </body>  </html>