<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">   <html>  <head>  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">  <title>Go in a sentence (esp. good sentence like quote, proverb...)</title>  <meta name="description" content="282+76 sentence examples: 1. Never go to bed on an argument. 2. Love makes the world go round. 3. Let not the cobbler go beyond his last. 4. Laws catch flies and let hornets go free. 5. Never let the sun go down on your anger. 6. Go for wool and come"/>  <link href="/common/dedecms.css" rel="stylesheet" media="screen" type="text/css">  <style>  #content div{  	line-height:23px;font-size:14px;margin-bottom:15px;  }  #ad_marginbottom_0 div{  	margin-bottom:0px;  }  .hidden1{display:none;}  </style>  <script>  function q1(word){  	formQ.word.value=word;  	formQ.submit();  }  function upWord(word,action,word){  	var votedNumber=getCookie("votedNumber"+word);  	if(votedNumber!=null){  		alert("Have done up or down!");  		return;  	}  	var xmlhttp;  	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari  		 xmlhttp=new XMLHttpRequest();  	}else{// code for IE6, IE5  		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");  	}  	xmlhttp.onreadystatechange=function(){  	if (xmlhttp.readyState==4 && xmlhttp.status==200){  		////返回后做事情  		var responseText=xmlhttp.responseText;    		//有异常.  		if(responseText!="" && responseText!=null){  		   alert(responseText);  		}else{  			var id_temp="wordUpTimes";  			if(action=="down"){  				id_temp="wordDownTimes";  			}  			var temp=document.getElementById(id_temp).innerText;  			var displayTimes=parseInt(temp);  			displayTimes=displayTimes+1;  			document.getElementById(id_temp).innerText=displayTimes;  			//cookie别设置太长,防止用户电脑中cookie太多哦  			setCookie("votedNumber"+word,"1",12);  		}  	  }  	};  	xmlhttp.open("POST","upDownWordDo.php",true);  	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");  	xmlhttp.send("action="+action+"&word="+encodeURIComponent(word)+"&rnd="+ Math.random());  }  </script>  </head>  <body>  <form method="post" style="display:none;" target="_blank" name="formQ" action="/wordQueryDo.php">  <input type="hidden" name="word"/>  <input type="hidden" name="directGo" value="1"/>  </form>  <div class="pageDiv" style="border: 0px solid blue;">  <script>  function trim(str){  　return str.replace(/(^\s*)|(\s*$)/g,"");  }  var strDefault="Please input any word...";  function queryCheck(){  	if(formQuery.vagueSearch.checked){  		///formQuery.q.value=encodeURI(formQuery.word.value+" site:sentencedict.com");  		formQuery.q.value=formQuery.word.value+" site:sentencedict.com";  		var temp=formQuery.action;  		formQuery.action="http://www.google.com/search";  		formQuery.method="get";  		formQuery.target="_blank";  		//为了wo参数不提交  		formQuery.word.disabled=true;  		formQuery.submit();  		formQuery.action=temp;  		formQuery.method="post";  		formQuery.target="_self";  		formQuery.word.disabled=false;  	}else{  		formQuery.word.value=trim(formQuery.word.value);  		var word=formQuery.word.value;  		if(word==""||word==strDefault){  			alert("Please input any word!");return;  		}  		formQuery.submit();  	}  	var temp="1";  	if(!formQuery.directGo.checked){  		temp="0";  	}  	setCookie("directGo",temp,12);  	var temp="1";  	if(!formQuery.vagueSearch.checked){  		temp="0";  	}  	setCookie("vagueSearch",temp,12);  }  function getCookie(name)  {  	var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");  	if(arr=document.cookie.match(reg))  		return (arr[2]);  	else  		return null;  }  function setCookie(cookiename,cookievalue,hours){  	var date=new Date();  	date.setTime(date.getTime()+Number(hours)*3600*1000);  	document.cookie=cookiename+"="+cookievalue+";path=/;expires="+date.toGMTString();  }  </script>  <div class="header">  <table width="100%" style="margin-bottom:4px;font-size:14px;" height=65 cellspacing=0 border=0 >  <tr>      <td width=100 valign="bottom" style="padding:0px;">        <a href="/">        <img src="/images/logo.jpg" style="vertical-align:bottom;margin-bottom:1px;border:0px solid #dddddd" alt="Sentencedict.com" height=50 width=150>        </a>      </td>      <td valign="bottom">  <form method="post" style="margin:2px;margin-left:10px;" name="formQuery" action="/wordQueryDo.php">  <input type='text' style='display:none;'/>  <input type="hidden" name="q" value="">  <input type="text" name="word" maxlength=100 style="float:left;margin-bottom:3px;width:360px;height:28px;line-height:26px;padding-left:6px;font-size:16px;border:1px solid #3D7A01;border-top:1px solid #67CD01;border-left:1px solid #67CD01;color:gray;"   size=20 value="Please input any word..." onfocus="if(this.value==strDefault){this.value='';this.style.color='black';}" onblur="if(this.value==''){this.value=strDefault;this.style.color='gray';}" onkeydown="if(event.keyCode==13){queryCheck();}"/>  <input type="button" style="float:left;width:70px;height:30px;margin-left:4px;cursor:pointer;font-size:14px;" onclick="queryCheck()" value="Search"/><div style="margin-top:10px;float:left;">&nbsp;<input type="checkbox" name="directGo" style="margin-right:2px;margin-bottom:2px;margin-left:2px;" value="1" checked>Directly to word page&nbsp;<span title="use vague search provided by google" style=""><input type="checkbox" name="vagueSearch" style="margin-right:2px;margin-bottom:2px;" value="1" onclick="if(this.checked){formQuery.directGo.disabled=true;}else{formQuery.directGo.disabled=false;}"/>Vauge search(google)</span>  </div>  </form>  </td>  </tr>  </table>  <script>  var temp=getCookie("directGo");  //此情况修改directGo的checked状态  if(temp=="0"){    formQuery.directGo.checked=false;  }  var temp=getCookie("vagueSearch");  //此情况修改vagueSearch的checked状态  if(temp=="1"){    formQuery.vagueSearch.checked=true;  }  </script>  <div class="module blue mT10 wrapper w963">  <div id="navMenu" style="background-color:#199507;border:0px solid red;background-image:url('/images/green_skin.png');background-position:0 -72px;background-repeat:repeat-x;">  <ul>  	<li><a href="/"><span>Home</span></a></li>  	<li><a href="/top1000/"><span>Top1000 word</span></a></li>  	<li><a href="/top5000/"><span>Top5000 word</span></a></li>  	<li><a href="/phrase/"><span>Phrases</span></a></li>  	<!--<li><a href="/conjunction/"><span>Conjunction</span></a></li>-->  	<li><a href="/game/"><span>Game</span></a></li>  	<li><a href="/getSImage.php"><span>Sentence into pic</span></a></li>  	<li><a href="/feedback.php"><span>Feedback</span></a></li>  </ul>  </div><!-- //navMenu -->    </div><!-- //module blue... -->  <div>  </div>  </div><div class="place" style="margin-top:8px;margin-bottom:0px;height:26px;line-height:26px;"><a href="/">Home</a> &gt; <a href="go.html">Go in a sentence</a>  </div>  <div id="div_main_left" style="width:81%;float:left;margin-top:8px;border:0px solid blue;">    <div class="viewbox" style="width:auto;padding-bottom:0px">  <div class="title" style="padding-top:0px;line-height:56px;height:auto;overflow:visible;">  <h2 style="display:inline;">Go in a sentence</h2><!--(esp. good sentence)--><span>&nbsp;&nbsp;<a href="javascript:;" onclick="upWord('go','up','go')">up(<span id="wordUpTimes">0</span>)</a>&nbsp;&nbsp;<a href="javascript:;" onclick="upWord('go','down','go')">down(<span id="wordDownTimes">0</span>)</a></span>  </div>  <div class="info">Sentence count:282+76 <input type="checkbox" id="onlyStudent" value="1" style="width:17px;height:17px;" onclick="onlyStudent(this);" />Only show simple sentences<small>Posted:</small>2016-07-15<small>Updated:</small>2016-12-13</div>    <script>  function onlyStudent(this1){  	///alert(this1.checked);  	if(this1.checked){  		document.getElementById('all').style.display='none';  		document.getElementById('student').style.display='block';  		setCookie("onlyStudent","1",12);  	}else{  		document.getElementById('student').style.display='none';  		document.getElementById('all').style.display='block';  		setCookie("onlyStudent","0",12);  	}  }  var temp=getCookie("onlyStudent");  //此情况修改vagueSearch的checked状态  if(temp=="1"){    document.getElementById('onlyStudent').checked=true;  }  </script>    <div  id="content" style="border-bottom:1px solid #aaaaaa;">    <!--最大高度为105px,能显示5行多的样子-->  <div style="line-height:20px;float:none;margin-top:5px;margin-bottom:5px;margin-right:5px;padding:4px;background-color:#cccccc;border:1px solid #DCDDDD;max-height:105px;font-size:14px;overflow:auto;">  	<span style='float:left;display:block;'>Synonym:&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("act");'>act</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("advance");'>advance</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("aim");'>aim</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("become");'>become</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("belong");'>belong</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("function");'>function</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("head for");'>head for</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("leave");'>leave</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("move");'>move</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("operate");'>operate</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("pass");'>pass</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("point");'>point</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("proceed");'>proceed</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("travel");'>travel</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("turn");'>turn</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("work");'>work</a>.&nbsp;</span><span style='float:left;display:block;'>Antonym:&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("come");'>come</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("remain");'>remain</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("stay");'>stay</a>.&nbsp;</span><span style='float:left;display:block;'>Similar words:&nbsp;</span><span style='float:left;display:block;'><a href='bo.html' target='_blank'>bo</a>,&nbsp;</span><span style='float:left;display:block;'><a href='Co..html' target='_blank'>Co.</a>,&nbsp;</span><span style='float:left;display:block;'><a href='do..html' target='_blank'>do.</a>,&nbsp;</span><span style='float:left;display:block;'><a href='gob.html' target='_blank'>gob</a>,&nbsp;</span><span style='float:left;display:block;'><a href='ago.html' target='_blank'>ago</a>,&nbsp;</span><span style='float:left;display:block;'><a href='do.html' target='_blank'>do</a>,&nbsp;</span><span style='float:left;display:block;'><a href='no.html' target='_blank'>no</a>,&nbsp;</span><span style='float:left;display:block;'><a href='so.html' target='_blank'>so</a>.&nbsp;</span><span style='float:left;display:block;'>Meaning:&nbsp;[gəʊ]&nbsp;n. 1. a time for working (after which you will be relieved by someone else) 2. street names for methylenedioxymethamphetamine 3. a usually brief attempt 4. a board game for two players who place counters on a grid; the object is to surround and so capture the opponent's counters. v. 1. change location; move, travel, or proceed 2. follow a procedure or take a course 3. move away from a place into another direction 4. enter or assume a certain state or condition 5. be awarded; be allotted 6. have a particular form 7. stretch out over a distance, space, time, or scope; run or extend between two points or beyond a certain point 8. follow a certain course 9. be abolished or discarded 10. be or continue to be in a certain condition 11. make a certain noise or sound 12. perform as expected when applied 13. to be spent or finished 14. progress by being changed 15. continue to live; endure or last 16. pass, fare, or elapse; of a certain state of affairs or action 17. pass from physical life and lose all bodily attributes and functions necessary to sustain life 18. be in the right place or situation 19. be ranked or compare 20. begin or set in motion 21. have a turn; make one's move in a game 22. be contained in 23. be sounded, played, or expressed 24. blend or harmonize 25. lead, extend, or afford access 26. be the right size or shape; fit correctly or as desired 27. go through in search of something; search through someone's belongings in an unauthorized way 28. be spent 29. give support (to) or make a choice (of) one out of a group or number 30. stop operating or functioning. adj. functioning correctly and ready for action.&nbsp;</span></div>  <div id="img1" style="margin:5px;margin-top:8px;float:right;">  	<img src="http://sentencedict.com/wordimage/78.jpg" style="width:300px;height:210px;" />  	<div style="text-align:center;margin-top:4px;font-size:12px;line-height:normal;margin-bottom:0px;width:280px;">Sentencedict.com random good picture</div>  </div>    <!--如果仅显示学生,并且该页有学生句子-->  <div id="all" >  <div>1) Never <em>go</em> to bed on an argument.&nbsp;<a href='/s/48027.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>2) Love makes the world <em>go</em> round.&nbsp;<a href='/s/41435.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>3) Let not the cobbler <em>go</em> beyond his last.&nbsp;<a href='/s/43256.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>4) Laws catch flies and let hornets <em>go</em> free.&nbsp;<a href='/s/41346.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>5) Never let the sun <em>go</em> down on your anger.&nbsp;<a href='/s/48029.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>6) <em>Go</em> for wool and come home shorn.&nbsp;<a href='/s/42868.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>7) Diseases come on horseback,(http://sentencedict.com/<em>go</em>.html) but go away on foot.&nbsp;<a href='/s/40727.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div id="ad_marginbottom_0" style="margin-top:-10px;margin-bottom:5px;"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><!-- 728_90_20170421 --><ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-7200850114163593" data-ad-slot="2392632666"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script></div><div>8) Without respect, love cannot <em>go</em> far.&nbsp;<a href='/s/42337.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>9) The world is a ladder for some to <em>go</em> up and others to go down.&nbsp;<a href='/s/42104.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>10) Home is the place where,when you have to <em>go</em> there, it has to take you in.&nbsp;<a href='/s/47175.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>11) Kindness will creep where it may not <em>go</em>.&nbsp;<a href='/s/43220.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>12) Fair and softly <em>go</em> far in a day.&nbsp;<a href='/s/42811.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>13) Victory won't come to me unless I <em>go</em> to it.&nbsp;<a href='/s/59008.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>14) We must <em>go</em> on to do all in our power to conquer the doubts and the fears, the ignorance and the greed, which made this horror possible.&nbsp;<a href='/s/47244.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>15) He must needs <em>go</em> whom the devil drives.&nbsp;<a href='/s/42937.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>16) Money makes the mare [to] <em>go</em>.&nbsp;<a href='/s/41537.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>17) When you <em>go</em> to Rome, do as Rome does.&nbsp;<a href='/s/42290.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>18) I don' t want to <em>go</em> home in the dark.&nbsp;<a href='/s/193294.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>19) <em>Go</em> where he will, the wise man is at home His harth the earth, his hall the azure dome.&nbsp;<a href='/s/47172.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>20) If anything can <em>go</em> wrong, it will.&nbsp;<a href='/s/47955.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>21) Agues come on horseback but <em>go</em> away on foot.&nbsp;<a href='/s/40368.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>22) He that fears every bush must never <em>go</em> a-birding.&nbsp;<a href='/s/42948.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>23) Laws catch flies but let hornets <em>go</em> free.&nbsp;<a href='/s/43240.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>24) Take time to deliberate; but when the time for action arrives, stop thinking and <em>go</em> in.&nbsp;<a href='/s/43739.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>25) We should so live and labor in our time that what came to us as seed may <em>go</em> to the next generation as blossom, and what came to us as blossom may go to them as fruit. This is what we mean by progress.&nbsp;<a href='/s/46974.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>26) If the mountain won't come to Mohammed, then Mohammed must <em>go</em> to the mountain.&nbsp;<a href='/s/47963.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>27) Truth and love are two of the most powerful things in the world; and when they both <em>go</em> together they cannot easily be withstood.&nbsp;<a href='/s/44058.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>28) To make your life a sound structrure that will serve others and fulfil your own potential, you have to remember that strength, however massive , can't endure unless it has the interlocking supprt of others. <em>Go</em> it alone and you'll inevitably tumble.&nbsp;<a href='/s/193252.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>29) If the mountain will not come to Mahomet, Mahomet must <em>go</em> to the mountain.&nbsp;<a href='/s/41186.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div style="margin-bottom:3px;">30) The ox is never woe, till he to the harrow <em>go</em>.&nbsp;<a href='/s/42008.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div></div><!--all结束-->  <!--如果不是仅显示学生,或该页没有学生句子-->  <div id="student" style='display:none;'>  <div>1) You can <em>go</em> there by yourself.</div><div>2) This skirt and this blouse <em>go</em> together well.</div><div>3) You can <em>go</em> by express train.</div><div>4) I suddenly felt chilled and had to <em>go</em> indoors.</div><div>5) I like to <em>go</em> off on my own - to sit back and bliss out in a darkened move theater.</div><div>6) We convinced Anne to <em>go</em> by plane.</div><div>7) People often simply abandon their pets when they <em>go</em> abroad.</div><div>8) Don't <em>go</em> out in the rain.</div><div>9) We've still got another forty miles to <em>go</em>.</div><div>10) Should we <em>go</em> to the party tonight?</div><div>11) He decided to <em>go</em> of his own accord.</div><div>12) Shall we <em>go</em> to the theatre on Friday?</div><div>13) The newspapers say that the yen will <em>go</em> up soon .</div><div>14) My car won't do/<em>go</em> more than 70 mph.</div><div>15) We can't afford to <em>go</em> abroad this summer.</div><div>16) At that time, it was completely unheard-of for girls to <em>go</em> to university.</div><div>17) I <em>go</em> to a vocational school.</div><div>18) Are you planning to <em>go</em> in for the 100 metres race?</div><div>19) I <em>go</em> to bed early if I'm travelling the next day.</div><div>20) In the normal course of events I wouldn't <em>go</em> to that part of town.</div><div>21) They all expected to <em>go</em> to paradise.</div><div>22) Well, I have to <em>go</em> now.</div><div>23) Don't leave your bag in the office when you <em>go</em> for lunch.</div><div>24) Stan initially wanted to <em>go</em> to medical school.</div><div>25) I allowed him to <em>go</em> home on compassionate grounds .</div><div>26) I'll <em>go</em> give it a look right now.</div><div>27) I remember we used to <em>go</em> and see them most weekends.</div><div>28) She wanted to <em>go</em> but her parents wouldn't let her.</div><div>29) Many people <em>go</em> to church on Sunday, but others don't.</div><div style="margin-bottom:3px;">30) A significant number of indecent assaults on women <em>go</em> unreported.</div></div><!--student结束-->    <div id="ad_marginbottom_0" style="padding-top:0px;margin-bottom:6px;line-height:normal;margin-top:-8px;">  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>  <!-- 728_90_20170421 -->  <ins class="adsbygoogle"       style="display:inline-block;width:728px;height:90px"       data-ad-client="ca-pub-7200850114163593"       data-ad-slot="2392632666"></ins>  <script>  (adsbygoogle = window.adsbygoogle || []).push({});  </script>  </div>  <div style="margin-bottom:3px;font-size:13px;line-height:21px;"><span style="font-weight:bold;float:left;display:block">More similar words:&nbsp;</span><span style='float:left;display:block;'><a href='bo.html' target='_blank'>bo</a>,&nbsp;</span><span style='float:left;display:block;'><a href='Co..html' target='_blank'>Co.</a>,&nbsp;</span><span style='float:left;display:block;'><a href='do..html' target='_blank'>do.</a>,&nbsp;</span><span style='float:left;display:block;'><a href='gob.html' target='_blank'>gob</a>,&nbsp;</span><span style='float:left;display:block;'><a href='ago.html' target='_blank'>ago</a>,&nbsp;</span><span style='float:left;display:block;'><a href='do.html' target='_blank'>do</a>,&nbsp;</span><span style='float:left;display:block;'><a href='no.html' target='_blank'>no</a>,&nbsp;</span><span style='float:left;display:block;'><a href='so.html' target='_blank'>so</a>,&nbsp;</span><span style='float:left;display:block;'><a href='to.html' target='_blank'>to</a>,&nbsp;</span><span style='float:left;display:block;'><a href='e..html' target='_blank'>e.</a>,&nbsp;</span><span style='float:left;display:block;'><a href='ed..html' target='_blank'>ed.</a>,&nbsp;</span><span style='float:left;display:block;'><a href='Et.html' target='_blank'>Et</a>,&nbsp;</span><span style='float:left;display:block;'><a href='F..html' target='_blank'>F.</a>,&nbsp;</span><span style='float:left;display:block;'><a href='go by.html' target='_blank'>go by</a>,&nbsp;</span><span style='float:left;display:block;'><a href='go on.html' target='_blank'>go on</a>,&nbsp;</span><span style='float:left;display:block;'><a href='go up.html' target='_blank'>go up</a>,&nbsp;</span><span style='float:left;display:block;'><a href='Gt.html' target='_blank'>Gt</a>,&nbsp;</span><span style='float:left;display:block;'><a href='pop..html' target='_blank'>pop.</a>,&nbsp;</span><span style='float:left;display:block;'><a href='VC.html' target='_blank'>VC</a>,&nbsp;</span><span style='float:left;display:block;'><a href='VS..html' target='_blank'>VS.</a>,&nbsp;</span><span style='float:left;display:block;'><a href='a.html' target='_blank'>a</a>,&nbsp;</span><span style='float:left;display:block;'><a href='ad.html' target='_blank'>ad</a>,&nbsp;</span><span style='float:left;display:block;'><a href='age.html' target='_blank'>age</a>,&nbsp;</span><span style='float:left;display:block;'><a href='ah.html' target='_blank'>ah</a>,&nbsp;</span><span style='float:left;display:block;'><a href='as.html' target='_blank'>as</a>,&nbsp;</span><span style='float:left;display:block;'><a href='at.html' target='_blank'>at</a>,&nbsp;</span><span style='float:left;display:block;'><a href='be.html' target='_blank'>be</a>,&nbsp;</span><span style='float:left;display:block;'><a href='bow.html' target='_blank'>bow</a>,&nbsp;</span><span style='float:left;display:block;'><a href='boy.html' target='_blank'>boy</a>,&nbsp;</span><span style='float:left;display:block;'><a href='by.html' target='_blank'>by</a>.&nbsp;</span><div style='clear:both;height:1px;margin-top:-1px;overflow:hidden;margin-bottom:0px;'></div></div>  </div><!-- content -->  </div><!-- viewbox -->  <script>  	function goPage(pagePre){  		var goPageNo=parseInt(document.getElementById("goPageNo").value,10);  		var pageCountNo=parseInt(document.getElementById("pageCountNo").value,10);  		///alert(goPageNo);  		///alert(pageCountNo);  		//这样确实ok啊,把输入为空等情况都剔除了.白名单制度.  		if((goPageNo<=pageCountNo) && (goPageNo>=1)){  		}else{  			alert("Please input the correct page number!");  			return;  		}  		var href1;  		if(goPageNo==1){  			href1=pagePre+".html";  		}else{  			href1=pagePre+"_"+goPageNo+".html";  		}  		window.location.href=href1;  	}  </script>  <div style="text-align:center;margin-top:10px;">  	  Total&nbsp;282, 30&nbsp;Per page&nbsp;      1/10&nbsp;             <a href="/go.html"><span style="margin-right:2px;">«</span>first</a>&nbsp;             <a href="/go_2.html">next<span style="margin-left:2px;">›</span></a>&nbsp;             <a href="/go_10.html">last<span style="margin-left:2px;">»</span></a>&nbsp;            <input type="hidden" id="pageCountNo" value="10" />        goto<input style="margin:auto 2px;" type="text" size=3 id="goPageNo" value="1"  onkeydown="if(event.keyCode==13){goPage('/go');}" /><input type="button" style="margin-left:3px;cursor:hand;" value="ok" onclick="goPage('/go');" />      </div>  <script>  function beforeComment(word){     var commentWord=getCookie("commentWord"+word);    if(commentWord!=null){  	alert("fail! The minimum comment interval of one word is 60 seconds");  	return;    }    var username=trim(formComment.username.value);    var comment=trim(formComment.comment.value);    ////如果句子不含word就通不过    if(comment==""){    	 alert("The comment cann't be empty!");    	 return;    }    if(comment.length>1000){    	 alert("The comment cann't be longer then 1000 length!");    	 return;    }  	////ajax    var xmlhttp;  	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari   		 xmlhttp=new XMLHttpRequest();    }else{// code for IE6, IE5    		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");    }    xmlhttp.onreadystatechange=function(){      if (xmlhttp.readyState==4 && xmlhttp.status==200){        ////返回后做事情    		var responseText=xmlhttp.responseText;        		////需改的地方1    		//有异常.    		if(responseText!="" && responseText!=null){    		   alert(responseText);    		   ///window.close();    		}else{    			var showMsg="comment success! thank you! ";  			//cookie别设置太长,防止用户电脑中cookie太多哦  			setCookie("commentWord"+word,"1",1/60);    			alert(showMsg);  			///var createtime=new Date().toDateString();  			var date1 = new Date();  			var createtime = date1.getFullYear()+'-'+(date1.getMonth()+1)+'-'+date1.getDate()+' '+date1.getHours()+':'+date1.getMinutes()+':'+date1.getSeconds();  			var commentDiv='<div><ul style="padding-bottom:10px;margin-top:8px;border-bottom: 1px dashed #ccc;margin-left:8px;"><li><div><span>';  			commentDiv+=username;  			commentDiv+='</span>&nbsp;<span style="color:#aeaeae">';  			///commentDiv+=createtime.substr(0,10);  			commentDiv+=createtime;  			commentDiv+='</span></div><div style="clear:both;margin:5px auto;">';  			commentDiv+=comment;  			commentDiv+='</div></li></ul></div>\r\n';  			///alert(commentDiv);  			document.getElementById("commetcontent").innerHTML=commentDiv+document.getElementById("commetcontent").innerHTML;  			formComment.comment.value="";     		}  	  }    };    xmlhttp.open("POST","commentAjax.php",true);    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");    var ajaxStr="action=submitAjax&word="+encodeURI(word)+"&comment="+encodeURI(comment)+"&username="+encodeURI(username)+"&rnd="+ Math.random();    xmlhttp.send(ajaxStr);  }  function queryComment(word){     var xmlhttp;  	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari   		 xmlhttp=new XMLHttpRequest();    }else{// code for IE6, IE5    		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");    }   	xmlhttp.onreadystatechange=function(){      if (xmlhttp.readyState==4 && xmlhttp.status==200){        ////返回后做事情    		var responseText=xmlhttp.responseText;      		///alert(responseText);    		////需改的地方1    		//有异常.    		if(responseText!=""){  			var comment_arr=responseText.split("||");  			var comment_html="";  			///alert(comment_arr.length);  			for(var i=0;i<parseInt(comment_arr.length/4);i++){  				var word=comment_arr[i*4];  				var comment=comment_arr[i*4+1];  				var createtime=comment_arr[i*4+2];  				var username=comment_arr[i*4+3];  				var commentDiv='<div><ul style="padding-bottom:10px;margin-top:8px;border-bottom: 1px dashed #ccc;margin-left:8px;"><li><div><span>';  				commentDiv+=username;  				commentDiv+='</span>&nbsp;<span style="color:#aeaeae">';  				///commentDiv+=createtime.substr(0,10);  				commentDiv+=createtime;  				commentDiv+='</span></div><div style="clear:both;margin:5px auto;">';  				commentDiv+=comment;  				commentDiv+='</div></li></ul></div>\r\n';  				///alert(commentDiv);  				comment_html+=commentDiv;  			}  			document.getElementById("commetcontent").innerHTML=comment_html;  			    		}  	  }    };      var ajaxStr="commentAjax.php?action=queryAjax&word="+encodeURI(word)+"&rnd="+ Math.random();    ///alert(ajaxStr);    xmlhttp.open("GET",ajaxStr,true);    xmlhttp.send();  }  </script>  <div class="mt1" style="margin-left:0px;">  <dl class="tbox">      <dt> <strong>Leave a comment</strong></dt>      <dd>        <div class="dede_comment_post">          <form action="#" method="post" name="formComment">            <div class="dcmp-title"> <small>Welcome to leave a comment about this page!</small> </div>  		  <div style="margin:5px auto;">  		  <textarea style="width:98%" name="comment" rows="5" ></textarea>  		  </div>            <div>                Your name:                <input type="text" name="username" value="me" size="8" style="font-size:13px;">                <button type="button" onclick='beforeComment("go")'>Submit</button>            </div>          </form>        </div>      </dd>  </dl>  </div>    <div style="margin-top:8px;">    <dl class="tbox">      <dt> <strong>Latest comments</strong><span style="float:right;line-height:25px;padding-right:8px;"><a href="comment.php?word=go" target="_blank">Into the comment page&gt;&gt;</a></span></dt>  	<dd id="commetcontent">  	<!--  	<div>  	  <ul style="padding-bottom:10px;margin-top:8px;border-bottom: 1px dashed #ccc;margin-left:8px;">  		<li>   		  <div><span>某某</span>&nbsp;<span style="color:#aeaeae">2016-01-13</span></div>  		  <div style="clear:both;margin:5px auto;">联网相关的政策</div>  		</li>  	  </ul>  	</div>  	-->  	</dd>    </dl>  </div>        </div><!-- div_main_left -->     <div id="div_main_right" style="width:18%;margin-top:8px;float:right;border:0px solid blue;" >  <div>  <dl class="tbox light" style="margin-bottom:4px;">  	<dt class="light"><strong>More words</strong></dt>  	<dd class="light">  	<ul class="c1 ico2">  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="alacrity.html">alacrity</a>&nbsp;(43)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="kangaroo.html">kangaroo</a>&nbsp;(76)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="silently.html">silently</a>&nbsp;(244+13)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="condense.html">condense</a>&nbsp;(72+1)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="catch-all.html">catch-all</a>&nbsp;(16+1)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="addict.html">addict</a>&nbsp;(120+8)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="taste.html">taste</a>&nbsp;(153+65)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="sweeten.html">sweeten</a>&nbsp;(43+3)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="mug.html">mug</a>&nbsp;(231+13)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="icing.html">icing</a>&nbsp;(152+4)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="creamy.html">creamy</a>&nbsp;(191+7)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="sedition.html">sedition</a>&nbsp;(33)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="points.html">points</a>&nbsp;(179+64)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="pond.html">pond</a>&nbsp;(225+27)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="frigate.html">frigate</a>&nbsp;(51+1)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="permanent.html">permanent</a>&nbsp;(290+27)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="printed.html">printed</a>&nbsp;(296+20)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="pipes.html">pipes</a>&nbsp;(197+20)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="pearl.html">pearl</a>&nbsp;(228+3)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="parts.html">parts</a>&nbsp;(227+71)</span>  		</li>  			</ul>  	</dd>  </dl>  </div>  <div id="ads4">  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>  <!-- 160_600_20170509 -->  <ins class="adsbygoogle"       style="display:inline-block;width:160px;height:600px"       data-ad-client="ca-pub-7200850114163593"       data-ad-slot="1770400263"></ins>  <script>  (adsbygoogle = window.adsbygoogle || []).push({});  </script>  </div>  </div><!-- div_main_right结束 -->    <!--外部文件,先显示图片,再广告,再其它-->  <!--图+-->  <script>queryComment("go");</script>    <div style="padding-top:2px;clear:both;"></">  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>  <!-- 970_90_20170421 -->  <ins class="adsbygoogle"       style="display:inline-block;width:970px;height:90px"       data-ad-client="ca-pub-7200850114163593"       data-ad-slot="5287223468"></ins>  <script>  (adsbygoogle = window.adsbygoogle || []).push({});  </script>  </div>  <div class="footer w960 center mt1 clear">  <div class="footer_body">    <div class="copyright">Copyright © 2016 sentencedict.com All Rights Reserved Contact:492108537@qq.com  </div>    </div><!-- footer_body -->  </div><!--footer w960 -->  <script>    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');    ga('create', 'UA-97689481-1', 'auto');    ga('send', 'pageview');  </script>  <!-- Go to www.addthis.com/dashboard to customize your tools -->  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-578e31c97244699a"></script></div><!-- pageDiv -->  </body>  </html>