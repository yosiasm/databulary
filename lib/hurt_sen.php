<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">   <html>  <head>  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">  <title>Hurt in a sentence (esp. good sentence like quote, proverb...)</title>  <meta name="description" content="200+65 sentence examples: 1. Sometimes words hurt more than swords. 2. Words cut (or hurt) more than swords. 3. Don't cry out before you are hurt. 4. Words cut [hurt] more than swords. 5. One enemy can do more hurt than ten friends can do good. 6. Ma"/>  <link href="/common/dedecms.css" rel="stylesheet" media="screen" type="text/css">  <style>  #content div{  	line-height:23px;font-size:14px;margin-bottom:15px;  }  #ad_marginbottom_0 div{  	margin-bottom:0px;  }  .hidden1{display:none;}  </style>  <script>  function q1(word){  	formQ.word.value=word;  	formQ.submit();  }  function upWord(word,action,word){  	var votedNumber=getCookie("votedNumber"+word);  	if(votedNumber!=null){  		alert("Have done up or down!");  		return;  	}  	var xmlhttp;  	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari  		 xmlhttp=new XMLHttpRequest();  	}else{// code for IE6, IE5  		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");  	}  	xmlhttp.onreadystatechange=function(){  	if (xmlhttp.readyState==4 && xmlhttp.status==200){  		////返回后做事情  		var responseText=xmlhttp.responseText;    		//有异常.  		if(responseText!="" && responseText!=null){  		   alert(responseText);  		}else{  			var id_temp="wordUpTimes";  			if(action=="down"){  				id_temp="wordDownTimes";  			}  			var temp=document.getElementById(id_temp).innerText;  			var displayTimes=parseInt(temp);  			displayTimes=displayTimes+1;  			document.getElementById(id_temp).innerText=displayTimes;  			//cookie别设置太长,防止用户电脑中cookie太多哦  			setCookie("votedNumber"+word,"1",12);  		}  	  }  	};  	xmlhttp.open("POST","upDownWordDo.php",true);  	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");  	xmlhttp.send("action="+action+"&word="+encodeURIComponent(word)+"&rnd="+ Math.random());  }  </script>  </head>  <body>  <form method="post" style="display:none;" target="_blank" name="formQ" action="/wordQueryDo.php">  <input type="hidden" name="word"/>  <input type="hidden" name="directGo" value="1"/>  </form>  <div class="pageDiv" style="border: 0px solid blue;">  <script>  function trim(str){  　return str.replace(/(^\s*)|(\s*$)/g,"");  }  var strDefault="Please input any word...";  function queryCheck(){  	if(formQuery.vagueSearch.checked){  		///formQuery.q.value=encodeURI(formQuery.word.value+" site:sentencedict.com");  		formQuery.q.value=formQuery.word.value+" site:sentencedict.com";  		var temp=formQuery.action;  		formQuery.action="http://www.google.com/search";  		formQuery.method="get";  		formQuery.target="_blank";  		//为了wo参数不提交  		formQuery.word.disabled=true;  		formQuery.submit();  		formQuery.action=temp;  		formQuery.method="post";  		formQuery.target="_self";  		formQuery.word.disabled=false;  	}else{  		formQuery.word.value=trim(formQuery.word.value);  		var word=formQuery.word.value;  		if(word==""||word==strDefault){  			alert("Please input any word!");return;  		}  		formQuery.submit();  	}  	var temp="1";  	if(!formQuery.directGo.checked){  		temp="0";  	}  	setCookie("directGo",temp,12);  	var temp="1";  	if(!formQuery.vagueSearch.checked){  		temp="0";  	}  	setCookie("vagueSearch",temp,12);  }  function getCookie(name)  {  	var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");  	if(arr=document.cookie.match(reg))  		return (arr[2]);  	else  		return null;  }  function setCookie(cookiename,cookievalue,hours){  	var date=new Date();  	date.setTime(date.getTime()+Number(hours)*3600*1000);  	document.cookie=cookiename+"="+cookievalue+";path=/;expires="+date.toGMTString();  }  </script>  <div class="header">  <table width="100%" style="margin-bottom:4px;font-size:14px;" height=65 cellspacing=0 border=0 >  <tr>      <td width=100 valign="bottom" style="padding:0px;">        <a href="/">        <img src="/images/logo.jpg" style="vertical-align:bottom;margin-bottom:1px;border:0px solid #dddddd" alt="Sentencedict.com" height=50 width=150>        </a>      </td>      <td valign="bottom">  <form method="post" style="margin:2px;margin-left:10px;" name="formQuery" action="/wordQueryDo.php">  <input type='text' style='display:none;'/>  <input type="hidden" name="q" value="">  <input type="text" name="word" maxlength=100 style="float:left;margin-bottom:3px;width:360px;height:28px;line-height:26px;padding-left:6px;font-size:16px;border:1px solid #3D7A01;border-top:1px solid #67CD01;border-left:1px solid #67CD01;color:gray;"   size=20 value="Please input any word..." onfocus="if(this.value==strDefault){this.value='';this.style.color='black';}" onblur="if(this.value==''){this.value=strDefault;this.style.color='gray';}" onkeydown="if(event.keyCode==13){queryCheck();}"/>  <input type="button" style="float:left;width:70px;height:30px;margin-left:4px;cursor:pointer;font-size:14px;" onclick="queryCheck()" value="Search"/><div style="margin-top:10px;float:left;">&nbsp;<input type="checkbox" name="directGo" style="margin-right:2px;margin-bottom:2px;margin-left:2px;" value="1" checked>Directly to word page&nbsp;<span title="use vague search provided by google" style=""><input type="checkbox" name="vagueSearch" style="margin-right:2px;margin-bottom:2px;" value="1" onclick="if(this.checked){formQuery.directGo.disabled=true;}else{formQuery.directGo.disabled=false;}"/>Vauge search(google)</span>  </div>  </form>  </td>  </tr>  </table>  <script>  var temp=getCookie("directGo");  //此情况修改directGo的checked状态  if(temp=="0"){    formQuery.directGo.checked=false;  }  var temp=getCookie("vagueSearch");  //此情况修改vagueSearch的checked状态  if(temp=="1"){    formQuery.vagueSearch.checked=true;  }  </script>  <div class="module blue mT10 wrapper w963">  <div id="navMenu" style="background-color:#199507;border:0px solid red;background-image:url('/images/green_skin.png');background-position:0 -72px;background-repeat:repeat-x;">  <ul>  	<li><a href="/"><span>Home</span></a></li>  	<li><a href="/top1000/"><span>Top1000 word</span></a></li>  	<li><a href="/top5000/"><span>Top5000 word</span></a></li>  	<li><a href="/phrase/"><span>Phrases</span></a></li>  	<!--<li><a href="/conjunction/"><span>Conjunction</span></a></li>-->  	<li><a href="/game/"><span>Game</span></a></li>  	<li><a href="/getSImage.php"><span>Sentence into pic</span></a></li>  	<li><a href="/feedback.php"><span>Feedback</span></a></li>  </ul>  </div><!-- //navMenu -->    </div><!-- //module blue... -->  <div>  </div>  </div><div class="place" style="margin-top:8px;margin-bottom:0px;height:26px;line-height:26px;"><a href="/">Home</a> &gt; <a href="hurt.html">Hurt in a sentence</a>  </div>  <div id="div_main_left" style="width:81%;float:left;margin-top:8px;border:0px solid blue;">    <div class="viewbox" style="width:auto;padding-bottom:0px">  <div class="title" style="padding-top:0px;line-height:56px;height:auto;overflow:visible;">  <h2 style="display:inline;">Hurt in a sentence</h2><!--(esp. good sentence)--><span>&nbsp;&nbsp;<a href="javascript:;" onclick="upWord('hurt','up','hurt')">up(<span id="wordUpTimes">0</span>)</a>&nbsp;&nbsp;<a href="javascript:;" onclick="upWord('hurt','down','hurt')">down(<span id="wordDownTimes">0</span>)</a></span>  </div>  <div class="info">Sentence count:200+65 <input type="checkbox" id="onlyStudent" value="1" style="width:17px;height:17px;" onclick="onlyStudent(this);" />Only show simple sentences<small>Posted:</small>2016-08-10<small>Updated:</small>2016-12-13</div>    <script>  function onlyStudent(this1){  	///alert(this1.checked);  	if(this1.checked){  		document.getElementById('all').style.display='none';  		document.getElementById('student').style.display='block';  		setCookie("onlyStudent","1",12);  	}else{  		document.getElementById('student').style.display='none';  		document.getElementById('all').style.display='block';  		setCookie("onlyStudent","0",12);  	}  }  var temp=getCookie("onlyStudent");  //此情况修改vagueSearch的checked状态  if(temp=="1"){    document.getElementById('onlyStudent').checked=true;  }  </script>    <div  id="content" style="border-bottom:1px solid #aaaaaa;">    <!--最大高度为105px,能显示5行多的样子-->  <div style="line-height:20px;float:none;margin-top:5px;margin-bottom:5px;margin-right:5px;padding:4px;background-color:#cccccc;border:1px solid #DCDDDD;max-height:105px;font-size:14px;overflow:auto;">  	<span style='float:left;display:block;'>Synonym:&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("bruise");'>bruise</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("damage");'>damage</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("distress");'>distress</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("grieve");'>grieve</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("harm");'>harm</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("impair");'>impair</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("injure");'>injure</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("offend");'>offend</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("pain");'>pain</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("wound");'>wound</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("wrong");'>wrong</a>.&nbsp;</span><span style='float:left;display:block;'>Antonym:&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("cure");'>cure</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("heal");'>heal</a>.&nbsp;</span><span style='float:left;display:block;'>Similar words:&nbsp;</span><span style='float:left;display:block;'><a href='court.html' target='_blank'>court</a>,&nbsp;</span><span style='float:left;display:block;'><a href='church.html' target='_blank'>church</a>,&nbsp;</span><span style='float:left;display:block;'><a href='fourth.html' target='_blank'>fourth</a>,&nbsp;</span><span style='float:left;display:block;'><a href='hurry up.html' target='_blank'>hurry up</a>,&nbsp;</span><span style='float:left;display:block;'><a href='hurricane.html' target='_blank'>hurricane</a>,&nbsp;</span><span style='float:left;display:block;'><a href='in a hurry.html' target='_blank'>in a hurry</a>,&nbsp;</span><span style='float:left;display:block;'><a href='curtain.html' target='_blank'>curtain</a>,&nbsp;</span><span style='float:left;display:block;'><a href='courtroom.html' target='_blank'>courtroom</a>.&nbsp;</span><span style='float:left;display:block;'>Meaning:&nbsp;[hɜrt /hɜːt]&nbsp;n. 1. any physical damage to the body caused by violence or accident or fracture etc. 2. psychological suffering 3. feelings of mental or physical pain 4. a damage or loss 5. the act of damaging something or someone. v. 1. be the source of pain 2. give trouble or pain to 3. cause emotional anguish or make miserable 4. cause damage or affect negatively 5. hurt the feelings of 6. feel physical pain 7. feel pain or be in pain. adj. 1. suffering from physical injury especially that suffered in battle 2. damaged inanimate objects or their value.&nbsp;</span></div>  <div id="img1" style="margin:5px;margin-top:8px;float:right;">  	<img src="http://mpic.spriteapp.cn/ugc/2015/07/09/559e0b3f9dbcb.gif" style="width:300px;height:210px;" />  	<div style="text-align:center;margin-top:4px;font-size:12px;line-height:normal;margin-bottom:0px;width:280px;">Sentencedict.com random good picture</div>  </div>    <!--如果仅显示学生,并且该页有学生句子-->  <div id="all" >  <div>1. Sometimes words <em>hurt</em> more than swords.&nbsp;<a href='/s/41855.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>2. Words cut (or <em>hurt</em>) more than swords.&nbsp;<a href='/s/44219.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>3. Don't cry out before you are <em>hurt</em>.&nbsp;<a href='/s/42736.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>4. Words cut [<em>hurt</em>] more than swords.&nbsp;<a href='/s/42347.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>5. One enemy can do more <em>hurt</em> than ten friends can do good.&nbsp;<a title='show the description of wikipedia' href='https://en.wikipedia.org/wiki/Jonathan Swift' target='_blank'>Jonathan Swift</a>&nbsp;<a href='/s/36605.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>6. Many words cut [<em>hurt</em>] more than swords.&nbsp;<a href='/s/41475.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>7. Many words cut (or <em>hurt</em>) more than swords.&nbsp;<a href='/s/43364.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div id="ad_marginbottom_0" style="margin-top:-10px;margin-bottom:5px;"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><!-- 728_90_20170421 --><ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-7200850114163593" data-ad-slot="2392632666"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script></div><div>8. When you feel <em>hurt</em> and your tears are gonna to drop. Please look up and have a look at the sky once belongs to us. If the sky is still vast,clouds are still clear, you shall not cry because my leave doesn't take away the world that belongs to you.</div><div>9. She was very <em>hurt</em> by his unkind words.</div><div>10. He <em>hurt</em> his head by running against a wall.</div><div>11. Stop that or you'll get <em>hurt</em>!</div><div>12. Did I <em>hurt</em> you? - I thought I saw you wince.</div><div>13. The court awarded damages of $1,000 to those <em>hurt</em> by the explosion.</div><div>13. Sentencedict.com is a online sentence dictionary, on which you can find good sentences for a large number of words.</div><div>14. He is <em>hurt</em> but still conscious.</div><div>15. A heart will not be <em>hurt</em> for pursuing a dream, when you truly want something, all the universe conspires to help you complete the.</div><div>16. Memories, beautiful very <em>hurt</em>,memories,memories of the past but can not go back.</div><div>17. When there's no expectation, losing won't bring <em>hurt</em>, gaining makes you surprised.</div><div>18. Movement can be painful when you've <em>hurt</em> your back.</div><div>19. I really love the people that I really <em>hurt</em>.</div><div>20. The past can <em>hurt</em>. But from the way I see it, you can either run from it, or learn from it.</div><div>21. I did everything to <em>hurt</em> her, including sleeping around.</div><div>22. Sticks and stones may break my bones, but words will never <em>hurt</em> me.&nbsp;<a href='/s/48069.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>23. The ozone layer surrounding the earth protects our skin from being <em>hurt</em> by the ultraviolet rays.</div><div>24. Warmness is luxury — which is reflected by deep cold and <em>hurt</em>.</div><div>25. The wait will not be very long, but your white-haired hair collapse <em>hurt</em>.</div><div>26. It is not fair for him to be permanently unfriendly to someone who has <em>hurt</em> him.</div><div>27. Stop fooling about with that knife of someone will get <em>hurt</em>.</div><div>28. She knew that she had caused her husband a lot of <em>hurt</em>.</div><div>29. Some people just don't realize how much their words can <em>hurt</em> someone.</div><div style="margin-bottom:3px;">30. The ones that we love the most have the greatest potential to <em>hurt</em> us.</div></div><!--all结束-->  <!--如果不是仅显示学生,或该页没有学生句子-->  <div id="student" style='display:none;'>  <div>1. She was very <em>hurt</em> by his unkind words.</div><div>2. Stop that or you'll get <em>hurt</em>!</div><div>3. The ozone layer surrounding the earth protects our skin from being <em>hurt</em> by the ultraviolet rays.</div><div>4. Did I <em>hurt</em> you? - I thought I saw you wince.</div><div>5. It is not fair for him to be permanently unfriendly to someone who has <em>hurt</em> him.</div><div>6. He is <em>hurt</em> but still conscious.</div><div>7. Movement can be painful when you've <em>hurt</em> your back.</div><div>8. She was rather <em>hurt</em> by his unkind words.</div><div>9. Neither the driver nor the passengers were <em>hurt</em>.</div><div>10. Her lies <em>hurt</em> my father deeply.</div><div>11. I'm terribly sorry-did I <em>hurt</em> you?</div><div>12. It's not funny! Someone could have been <em>hurt</em>.</div><div>13. Knowing that I <em>hurt</em> her makes me feel really bad.</div><div>13. Sentencedict.com is a online sentence dictionary, on which you can find good sentences for a large number of words.</div><div>14. Don't squeeze the kitten, you will <em>hurt</em> it.</div><div>15. I'd found Philippe was cheating on me and I was angry and <em>hurt</em>.</div><div>16. I had a sore throat and it <em>hurt</em> to swallow.</div><div>17. A young girl and her little brother were seriously <em>hurt</em> when a car ploughed into them on a crossing.</div><div>18. He seemed oblivious to the fact that he had <em>hurt</em> her.</div><div>19. I'm really sorry. I didn't mean to <em>hurt</em> your feelings.</div><div>20. She hopped across the room because she had <em>hurt</em> her foot.</div><div>21. Even if one person is <em>hurt</em> that is one too many.</div><div>22. He <em>hurt</em> his back playing squash.</div><div>23. He's too macho to admit he was <em>hurt</em> when his girlfriend left him.</div><div>24. During the disturbance which followed, three Englishmen were <em>hurt</em>.</div><div>25. There was a fire in the building, but thankfully no one was <em>hurt</em>.</div><div>26. She had been badly <em>hurt</em> in what police described as 'a savage attack'.</div><div>27. I wasn't badly <em>hurt</em>, but I injured my thigh and had to limp.</div><div>28. Did he <em>hurt</em> himself when he fell?</div><div>29. By sheer luck nobody was <em>hurt</em> in the explosion.</div><div style="margin-bottom:3px;">30. Don't be frightened. We're not going to <em>hurt</em> you.</div></div><!--student结束-->    <div id="ad_marginbottom_0" style="padding-top:0px;margin-bottom:6px;line-height:normal;margin-top:-8px;">  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>  <!-- 728_90_20170421 -->  <ins class="adsbygoogle"       style="display:inline-block;width:728px;height:90px"       data-ad-client="ca-pub-7200850114163593"       data-ad-slot="2392632666"></ins>  <script>  (adsbygoogle = window.adsbygoogle || []).push({});  </script>  </div>  <div style="margin-bottom:3px;font-size:13px;line-height:21px;"><span style="font-weight:bold;float:left;display:block">More similar words:&nbsp;</span><span style='float:left;display:block;'><a href='court.html' target='_blank'>court</a>,&nbsp;</span><span style='float:left;display:block;'><a href='church.html' target='_blank'>church</a>,&nbsp;</span><span style='float:left;display:block;'><a href='fourth.html' target='_blank'>fourth</a>,&nbsp;</span><span style='float:left;display:block;'><a href='hurry up.html' target='_blank'>hurry up</a>,&nbsp;</span><span style='float:left;display:block;'><a href='hurricane.html' target='_blank'>hurricane</a>,&nbsp;</span><span style='float:left;display:block;'><a href='in a hurry.html' target='_blank'>in a hurry</a>,&nbsp;</span><span style='float:left;display:block;'><a href='curtain.html' target='_blank'>curtain</a>,&nbsp;</span><span style='float:left;display:block;'><a href='courtroom.html' target='_blank'>courtroom</a>,&nbsp;</span><span style='float:left;display:block;'><a href='furthermore.html' target='_blank'>furthermore</a>.&nbsp;</span><div style='clear:both;height:1px;margin-top:-1px;overflow:hidden;margin-bottom:0px;'></div></div>  </div><!-- content -->  </div><!-- viewbox -->  <script>  	function goPage(pagePre){  		var goPageNo=parseInt(document.getElementById("goPageNo").value,10);  		var pageCountNo=parseInt(document.getElementById("pageCountNo").value,10);  		///alert(goPageNo);  		///alert(pageCountNo);  		//这样确实ok啊,把输入为空等情况都剔除了.白名单制度.  		if((goPageNo<=pageCountNo) && (goPageNo>=1)){  		}else{  			alert("Please input the correct page number!");  			return;  		}  		var href1;  		if(goPageNo==1){  			href1=pagePre+".html";  		}else{  			href1=pagePre+"_"+goPageNo+".html";  		}  		window.location.href=href1;  	}  </script>  <div style="text-align:center;margin-top:10px;">  	  Total&nbsp;200, 30&nbsp;Per page&nbsp;      1/7&nbsp;             <a href="/hurt.html"><span style="margin-right:2px;">«</span>first</a>&nbsp;             <a href="/hurt_2.html">next<span style="margin-left:2px;">›</span></a>&nbsp;             <a href="/hurt_7.html">last<span style="margin-left:2px;">»</span></a>&nbsp;            <input type="hidden" id="pageCountNo" value="7" />        goto<input style="margin:auto 2px;" type="text" size=3 id="goPageNo" value="1"  onkeydown="if(event.keyCode==13){goPage('/hurt');}" /><input type="button" style="margin-left:3px;cursor:hand;" value="ok" onclick="goPage('/hurt');" />      </div>  <script>  function beforeComment(word){     var commentWord=getCookie("commentWord"+word);    if(commentWord!=null){  	alert("fail! The minimum comment interval of one word is 60 seconds");  	return;    }    var username=trim(formComment.username.value);    var comment=trim(formComment.comment.value);    ////如果句子不含word就通不过    if(comment==""){    	 alert("The comment cann't be empty!");    	 return;    }    if(comment.length>1000){    	 alert("The comment cann't be longer then 1000 length!");    	 return;    }  	////ajax    var xmlhttp;  	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari   		 xmlhttp=new XMLHttpRequest();    }else{// code for IE6, IE5    		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");    }    xmlhttp.onreadystatechange=function(){      if (xmlhttp.readyState==4 && xmlhttp.status==200){        ////返回后做事情    		var responseText=xmlhttp.responseText;        		////需改的地方1    		//有异常.    		if(responseText!="" && responseText!=null){    		   alert(responseText);    		   ///window.close();    		}else{    			var showMsg="comment success! thank you! ";  			//cookie别设置太长,防止用户电脑中cookie太多哦  			setCookie("commentWord"+word,"1",1/60);    			alert(showMsg);  			///var createtime=new Date().toDateString();  			var date1 = new Date();  			var createtime = date1.getFullYear()+'-'+(date1.getMonth()+1)+'-'+date1.getDate()+' '+date1.getHours()+':'+date1.getMinutes()+':'+date1.getSeconds();  			var commentDiv='<div><ul style="padding-bottom:10px;margin-top:8px;border-bottom: 1px dashed #ccc;margin-left:8px;"><li><div><span>';  			commentDiv+=username;  			commentDiv+='</span>&nbsp;<span style="color:#aeaeae">';  			///commentDiv+=createtime.substr(0,10);  			commentDiv+=createtime;  			commentDiv+='</span></div><div style="clear:both;margin:5px auto;">';  			commentDiv+=comment;  			commentDiv+='</div></li></ul></div>\r\n';  			///alert(commentDiv);  			document.getElementById("commetcontent").innerHTML=commentDiv+document.getElementById("commetcontent").innerHTML;  			formComment.comment.value="";     		}  	  }    };    xmlhttp.open("POST","commentAjax.php",true);    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");    var ajaxStr="action=submitAjax&word="+encodeURI(word)+"&comment="+encodeURI(comment)+"&username="+encodeURI(username)+"&rnd="+ Math.random();    xmlhttp.send(ajaxStr);  }  function queryComment(word){     var xmlhttp;  	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari   		 xmlhttp=new XMLHttpRequest();    }else{// code for IE6, IE5    		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");    }   	xmlhttp.onreadystatechange=function(){      if (xmlhttp.readyState==4 && xmlhttp.status==200){        ////返回后做事情    		var responseText=xmlhttp.responseText;      		///alert(responseText);    		////需改的地方1    		//有异常.    		if(responseText!=""){  			var comment_arr=responseText.split("||");  			var comment_html="";  			///alert(comment_arr.length);  			for(var i=0;i<parseInt(comment_arr.length/4);i++){  				var word=comment_arr[i*4];  				var comment=comment_arr[i*4+1];  				var createtime=comment_arr[i*4+2];  				var username=comment_arr[i*4+3];  				var commentDiv='<div><ul style="padding-bottom:10px;margin-top:8px;border-bottom: 1px dashed #ccc;margin-left:8px;"><li><div><span>';  				commentDiv+=username;  				commentDiv+='</span>&nbsp;<span style="color:#aeaeae">';  				///commentDiv+=createtime.substr(0,10);  				commentDiv+=createtime;  				commentDiv+='</span></div><div style="clear:both;margin:5px auto;">';  				commentDiv+=comment;  				commentDiv+='</div></li></ul></div>\r\n';  				///alert(commentDiv);  				comment_html+=commentDiv;  			}  			document.getElementById("commetcontent").innerHTML=comment_html;  			    		}  	  }    };      var ajaxStr="commentAjax.php?action=queryAjax&word="+encodeURI(word)+"&rnd="+ Math.random();    ///alert(ajaxStr);    xmlhttp.open("GET",ajaxStr,true);    xmlhttp.send();  }  </script>  <div class="mt1" style="margin-left:0px;">  <dl class="tbox">      <dt> <strong>Leave a comment</strong></dt>      <dd>        <div class="dede_comment_post">          <form action="#" method="post" name="formComment">            <div class="dcmp-title"> <small>Welcome to leave a comment about this page!</small> </div>  		  <div style="margin:5px auto;">  		  <textarea style="width:98%" name="comment" rows="5" ></textarea>  		  </div>            <div>                Your name:                <input type="text" name="username" value="me" size="8" style="font-size:13px;">                <button type="button" onclick='beforeComment("hurt")'>Submit</button>            </div>          </form>        </div>      </dd>  </dl>  </div>    <div style="margin-top:8px;">    <dl class="tbox">      <dt> <strong>Latest comments</strong><span style="float:right;line-height:25px;padding-right:8px;"><a href="comment.php?word=hurt" target="_blank">Into the comment page&gt;&gt;</a></span></dt>  	<dd id="commetcontent">  	<!--  	<div>  	  <ul style="padding-bottom:10px;margin-top:8px;border-bottom: 1px dashed #ccc;margin-left:8px;">  		<li>   		  <div><span>某某</span>&nbsp;<span style="color:#aeaeae">2016-01-13</span></div>  		  <div style="clear:both;margin:5px auto;">联网相关的政策</div>  		</li>  	  </ul>  	</div>  	-->  	</dd>    </dl>  </div>        </div><!-- div_main_left -->     <div id="div_main_right" style="width:18%;margin-top:8px;float:right;border:0px solid blue;" >  <div>  <dl class="tbox light" style="margin-bottom:4px;">  	<dt class="light"><strong>More words</strong></dt>  	<dd class="light">  	<ul class="c1 ico2">  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="soda.html">soda</a>&nbsp;(157+6)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="cramming.html">cramming</a>&nbsp;(29+1)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="umbrage.html">umbrage</a>&nbsp;(20)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="hoof.html">hoof</a>&nbsp;(94+2)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="wreathe.html">wreathe</a>&nbsp;(26)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="absenteeism.html">absenteeism</a>&nbsp;(62+1)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="dowry.html">dowry</a>&nbsp;(38+1)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="injustice.html">injustice</a>&nbsp;(231+9)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="slouching.html">slouching</a>&nbsp;(26)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="seasoning.html">seasoning</a>&nbsp;(156+1)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="lithe.html">lithe</a>&nbsp;(54)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="arsenal.html">arsenal</a>&nbsp;(273+5)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="blossom.html">blossom</a>&nbsp;(169+12)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="fruition.html">fruition</a>&nbsp;(58+2)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="trodden.html">trodden</a>&nbsp;(58)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="twig.html">twig</a>&nbsp;(84+8)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="maza.html">maza</a>&nbsp;(6)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="seawater.html">seawater</a>&nbsp;(171)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="stirring.html">stirring</a>&nbsp;(208+6)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="shortening.html">shortening</a>&nbsp;(126+1)</span>  		</li>  			</ul>  	</dd>  </dl>  </div>  <div id="ads4">  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>  <!-- 160_600_20170509 -->  <ins class="adsbygoogle"       style="display:inline-block;width:160px;height:600px"       data-ad-client="ca-pub-7200850114163593"       data-ad-slot="1770400263"></ins>  <script>  (adsbygoogle = window.adsbygoogle || []).push({});  </script>  </div>  </div><!-- div_main_right结束 -->    <!--外部文件,先显示图片,再广告,再其它-->  <!--图+-->  <script>queryComment("hurt");</script>    <div style="padding-top:2px;clear:both;"></">  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>  <!-- 970_90_20170421 -->  <ins class="adsbygoogle"       style="display:inline-block;width:970px;height:90px"       data-ad-client="ca-pub-7200850114163593"       data-ad-slot="5287223468"></ins>  <script>  (adsbygoogle = window.adsbygoogle || []).push({});  </script>  </div>  <div class="footer w960 center mt1 clear">  <div class="footer_body">    <div class="copyright">Copyright © 2016 sentencedict.com All Rights Reserved Contact:492108537@qq.com  </div>    </div><!-- footer_body -->  </div><!--footer w960 -->  <script>    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');    ga('create', 'UA-97689481-1', 'auto');    ga('send', 'pageview');  </script>  <!-- Go to www.addthis.com/dashboard to customize your tools -->  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-578e31c97244699a"></script></div><!-- pageDiv -->  </body>  </html>