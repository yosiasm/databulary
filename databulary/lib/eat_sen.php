<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">   <html>  <head>  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">  <title>Eat in a sentence (esp. good sentence like quote, proverb...)</title>  <meta name="description" content="233+82 sentence examples: 1. Eat to live, but not live to eat. 2. Live not to eat, but eat to live. 3. One cannot eat one's cake and have it. 4. Scornful dogs will eat dirty puddings. 5. Fools make feasts and wise men eat them. 6. You can't have your"/>  <link href="/common/dedecms.css" rel="stylesheet" media="screen" type="text/css">  <style>  #content div{  	line-height:23px;font-size:14px;margin-bottom:15px;  }  #ad_marginbottom_0 div{  	margin-bottom:0px;  }  .hidden1{display:none;}  </style>  <script>  function q1(word){  	formQ.word.value=word;  	formQ.submit();  }  function upWord(word,action,word){  	var votedNumber=getCookie("votedNumber"+word);  	if(votedNumber!=null){  		alert("Have done up or down!");  		return;  	}  	var xmlhttp;  	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari  		 xmlhttp=new XMLHttpRequest();  	}else{// code for IE6, IE5  		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");  	}  	xmlhttp.onreadystatechange=function(){  	if (xmlhttp.readyState==4 && xmlhttp.status==200){  		////返回后做事情  		var responseText=xmlhttp.responseText;    		//有异常.  		if(responseText!="" && responseText!=null){  		   alert(responseText);  		}else{  			var id_temp="wordUpTimes";  			if(action=="down"){  				id_temp="wordDownTimes";  			}  			var temp=document.getElementById(id_temp).innerText;  			var displayTimes=parseInt(temp);  			displayTimes=displayTimes+1;  			document.getElementById(id_temp).innerText=displayTimes;  			//cookie别设置太长,防止用户电脑中cookie太多哦  			setCookie("votedNumber"+word,"1",12);  		}  	  }  	};  	xmlhttp.open("POST","upDownWordDo.php",true);  	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");  	xmlhttp.send("action="+action+"&word="+encodeURIComponent(word)+"&rnd="+ Math.random());  }  </script>  </head>  <body>  <form method="post" style="display:none;" target="_blank" name="formQ" action="/wordQueryDo.php">  <input type="hidden" name="word"/>  <input type="hidden" name="directGo" value="1"/>  </form>  <div class="pageDiv" style="border: 0px solid blue;">  <script>  function trim(str){  　return str.replace(/(^\s*)|(\s*$)/g,"");  }  var strDefault="Please input any word...";  function queryCheck(){  	if(formQuery.vagueSearch.checked){  		///formQuery.q.value=encodeURI(formQuery.word.value+" site:sentencedict.com");  		formQuery.q.value=formQuery.word.value+" site:sentencedict.com";  		var temp=formQuery.action;  		formQuery.action="http://www.google.com/search";  		formQuery.method="get";  		formQuery.target="_blank";  		//为了wo参数不提交  		formQuery.word.disabled=true;  		formQuery.submit();  		formQuery.action=temp;  		formQuery.method="post";  		formQuery.target="_self";  		formQuery.word.disabled=false;  	}else{  		formQuery.word.value=trim(formQuery.word.value);  		var word=formQuery.word.value;  		if(word==""||word==strDefault){  			alert("Please input any word!");return;  		}  		formQuery.submit();  	}  	var temp="1";  	if(!formQuery.directGo.checked){  		temp="0";  	}  	setCookie("directGo",temp,12);  	var temp="1";  	if(!formQuery.vagueSearch.checked){  		temp="0";  	}  	setCookie("vagueSearch",temp,12);  }  function getCookie(name)  {  	var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");  	if(arr=document.cookie.match(reg))  		return (arr[2]);  	else  		return null;  }  function setCookie(cookiename,cookievalue,hours){  	var date=new Date();  	date.setTime(date.getTime()+Number(hours)*3600*1000);  	document.cookie=cookiename+"="+cookievalue+";path=/;expires="+date.toGMTString();  }  </script>  <div class="header">  <table width="100%" style="margin-bottom:4px;font-size:14px;" height=65 cellspacing=0 border=0 >  <tr>      <td width=100 valign="bottom" style="padding:0px;">        <a href="/">        <img src="/images/logo.jpg" style="vertical-align:bottom;margin-bottom:1px;border:0px solid #dddddd" alt="Sentencedict.com" height=50 width=150>        </a>      </td>      <td valign="bottom">  <form method="post" style="margin:2px;margin-left:10px;" name="formQuery" action="/wordQueryDo.php">  <input type='text' style='display:none;'/>  <input type="hidden" name="q" value="">  <input type="text" name="word" maxlength=100 style="float:left;margin-bottom:3px;width:360px;height:28px;line-height:26px;padding-left:6px;font-size:16px;border:1px solid #3D7A01;border-top:1px solid #67CD01;border-left:1px solid #67CD01;color:gray;"   size=20 value="Please input any word..." onfocus="if(this.value==strDefault){this.value='';this.style.color='black';}" onblur="if(this.value==''){this.value=strDefault;this.style.color='gray';}" onkeydown="if(event.keyCode==13){queryCheck();}"/>  <input type="button" style="float:left;width:70px;height:30px;margin-left:4px;cursor:pointer;font-size:14px;" onclick="queryCheck()" value="Search"/><div style="margin-top:10px;float:left;">&nbsp;<input type="checkbox" name="directGo" style="margin-right:2px;margin-bottom:2px;margin-left:2px;" value="1" checked>Directly to word page&nbsp;<span title="use vague search provided by google" style=""><input type="checkbox" name="vagueSearch" style="margin-right:2px;margin-bottom:2px;" value="1" onclick="if(this.checked){formQuery.directGo.disabled=true;}else{formQuery.directGo.disabled=false;}"/>Vauge search(google)</span>  </div>  </form>  </td>  </tr>  </table>  <script>  var temp=getCookie("directGo");  //此情况修改directGo的checked状态  if(temp=="0"){    formQuery.directGo.checked=false;  }  var temp=getCookie("vagueSearch");  //此情况修改vagueSearch的checked状态  if(temp=="1"){    formQuery.vagueSearch.checked=true;  }  </script>  <div class="module blue mT10 wrapper w963">  <div id="navMenu" style="background-color:#199507;border:0px solid red;background-image:url('/images/green_skin.png');background-position:0 -72px;background-repeat:repeat-x;">  <ul>  	<li><a href="/"><span>Home</span></a></li>  	<li><a href="/top1000/"><span>Top1000 word</span></a></li>  	<li><a href="/top5000/"><span>Top5000 word</span></a></li>  	<li><a href="/phrase/"><span>Phrases</span></a></li>  	<!--<li><a href="/conjunction/"><span>Conjunction</span></a></li>-->  	<li><a href="/game/"><span>Game</span></a></li>  	<li><a href="/getSImage.php"><span>Sentence into pic</span></a></li>  	<li><a href="/feedback.php"><span>Feedback</span></a></li>  </ul>  </div><!-- //navMenu -->    </div><!-- //module blue... -->  <div>  </div>  </div><div class="place" style="margin-top:8px;margin-bottom:0px;height:26px;line-height:26px;"><a href="/">Home</a> &gt; <a href="eat.html">Eat in a sentence</a>  </div>  <div id="div_main_left" style="width:81%;float:left;margin-top:8px;border:0px solid blue;">    <div class="viewbox" style="width:auto;padding-bottom:0px">  <div class="title" style="padding-top:0px;line-height:56px;height:auto;overflow:visible;">  <h2 style="display:inline;">Eat in a sentence</h2><!--(esp. good sentence)--><span>&nbsp;&nbsp;<a href="javascript:;" onclick="upWord('eat','up','eat')">up(<span id="wordUpTimes">0</span>)</a>&nbsp;&nbsp;<a href="javascript:;" onclick="upWord('eat','down','eat')">down(<span id="wordDownTimes">0</span>)</a></span>  </div>  <div class="info">Sentence count:233+82 <input type="checkbox" id="onlyStudent" value="1" style="width:17px;height:17px;" onclick="onlyStudent(this);" />Only show simple sentences<small>Posted:</small>2016-07-25<small>Updated:</small>2016-12-13</div>    <script>  function onlyStudent(this1){  	///alert(this1.checked);  	if(this1.checked){  		document.getElementById('all').style.display='none';  		document.getElementById('student').style.display='block';  		setCookie("onlyStudent","1",12);  	}else{  		document.getElementById('student').style.display='none';  		document.getElementById('all').style.display='block';  		setCookie("onlyStudent","0",12);  	}  }  var temp=getCookie("onlyStudent");  //此情况修改vagueSearch的checked状态  if(temp=="1"){    document.getElementById('onlyStudent').checked=true;  }  </script>    <div  id="content" style="border-bottom:1px solid #aaaaaa;">    <!--最大高度为105px,能显示5行多的样子-->  <div style="line-height:20px;float:none;margin-top:5px;margin-bottom:5px;margin-right:5px;padding:4px;background-color:#cccccc;border:1px solid #DCDDDD;max-height:105px;font-size:14px;overflow:auto;">  	<span style='float:left;display:block;'>Synonym:&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("chew");'>chew</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("consume");'>consume</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("corrode");'>corrode</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("dine");'>dine</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("erode");'>erode</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("swallow");'>swallow</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("waste away");'>waste away</a>.&nbsp;</span><span style='float:left;display:block;'>Antonym:&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("vomit");'>vomit</a>.&nbsp;</span><span style='float:left;display:block;'>Similar words:&nbsp;</span><span style='float:left;display:block;'><a href='neat.html' target='_blank'>neat</a>,&nbsp;</span><span style='float:left;display:block;'><a href='great.html' target='_blank'>great</a>,&nbsp;</span><span style='float:left;display:block;'><a href='come at.html' target='_blank'>come at</a>,&nbsp;</span><span style='float:left;display:block;'><a href='eat up.html' target='_blank'>eat up</a>,&nbsp;</span><span style='float:left;display:block;'><a href='feather.html' target='_blank'>feather</a>,&nbsp;</span><span style='float:left;display:block;'><a href='wheat.html' target='_blank'>wheat</a>,&nbsp;</span><span style='float:left;display:block;'><a href='cheat.html' target='_blank'>cheat</a>,&nbsp;</span><span style='float:left;display:block;'><a href='leather.html' target='_blank'>leather</a>.&nbsp;</span><span style='float:left;display:block;'>Meaning:&nbsp;[iːt]&nbsp;v. 1. take in solid food 2. eat a meal; take a meal 3. take in food; used of animals only 4. use up (resources or materials) 5. worry or cause anxiety in a persistent way 6. cause to deteriorate due to the action of water, air, or an acid.&nbsp;</span></div>  <div id="img1" style="margin:5px;margin-top:8px;float:right;">  	<img src="http://mpic.spriteapp.cn/ugc/2014/08/01/53daf4474cf9a.gif" style="width:300px;height:210px;" />  	<div style="text-align:center;margin-top:4px;font-size:12px;line-height:normal;margin-bottom:0px;width:280px;">Sentencedict.com random good picture</div>  </div>    <!--如果仅显示学生,并且该页有学生句子-->  <div id="all" >  <div>1. <em>Eat</em> to live, but not live to eat.&nbsp;<a href='/s/40775.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>2. Live not to <em>eat</em>, but eat to live.&nbsp;<a href='/s/41392.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>3. One cannot <em>eat</em> one's cake and have it.&nbsp;<a href='/s/43528.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>4. Scornful dogs will <em>eat</em> dirty puddings.&nbsp;<a href='/s/43662.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>5. Fools make feasts and wise men <em>eat</em> them.&nbsp;<a href='/s/42833.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>6. You can't have your cake and <em>eat</em> it.&nbsp;<a href='/s/48166.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>7. He that would <em>eat</em> the fruit must climb the tree.&nbsp;<a href='/s/42975.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div id="ad_marginbottom_0" style="margin-top:-10px;margin-bottom:5px;"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><!-- 728_90_20170421 --><ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-7200850114163593" data-ad-slot="2392632666"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script></div><div>8. Other men live to <em>eat</em>, while I eat to live.&nbsp;<a href='/s/43567.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>9. He that would <em>eat</em> the kernel must crack the nut.&nbsp;<a href='/s/41102.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>10. You can't <em>eat</em> your cake and have it.&nbsp;<a href='/s/44234.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>11. Carrion crows bewail the dead sheep and then <em>eat</em> them.&nbsp;<a href='/s/40657.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>12. He that would <em>eat</em> [have] the fruit must climb the tree.&nbsp;<a href='/s/41101.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>13. <em>Eat</em> a peck of salt with a man before you trust him.&nbsp;<a href='/s/40774.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>14. He who does not work neither shall he <em>eat</em>.&nbsp;<a href='/s/41110.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>15. Thos who <em>eat</em> most are not always fattest; those who read most, not always wisest.&nbsp;<a href='/s/43990.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>16. A man must <em>eat</em> a peck of salt with his friend before he knows him.&nbsp;<a href='/s/40443.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>17. Hungry dogs will <em>eat</em> dirty puddings.&nbsp;<a href='/s/41165.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>18. One should <em>eat</em> to live, not live to eat.&nbsp;<a href='/s/43555.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>19. <em>Eat</em> one's cake and have it.&nbsp;<a href='/s/42766.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>20. <em>Eat</em> at pleasure, drink with measure.&nbsp;<a href='/s/42765.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>21. Other man live to <em>eat</em>, while I eat to live.&nbsp;<a href='/s/46951.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>22. <em>Eat</em>, drink and be merry, for tomorrow we die.&nbsp;<a href='/s/47915.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>23. Those who work deserve to <em>eat</em>; those who do not work deserve to starve.&nbsp;<a href='/s/43994.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>24. He that will <em>eat</em> the nut must first crack the shell.&nbsp;<a href='/s/42972.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>25. <em>Eat</em> to please thyself, but dress to please others.&nbsp;<a href='/s/42767.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>26. You cannot <em>eat</em> your cake and have your cake.&nbsp;<a href='/s/42359.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>27. Before you make a friend, <em>eat</em> a bushel of salt with him.sentencedict.com&nbsp;<a href='/s/40589.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>28. Those who <em>eat</em> best and drink best often do worst.&nbsp;<a href='/s/42119.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>29. He that will not work shall not <em>eat</em>.&nbsp;<a href='/s/41097.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div style="margin-bottom:3px;">30. The great fish <em>eat</em> up the small.&nbsp;<a href='/s/41969.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div></div><!--all结束-->  <!--如果不是仅显示学生,或该页没有学生句子-->  <div id="student" style='display:none;'>  <div>1. Try to <em>eat</em> plenty of fresh fruit .</div><div>2. Would you like something to <em>eat</em>?</div><div>3. I was too nervous to <em>eat</em>.</div><div>4. We <em>eat</em> with knife and fork.</div><div>5. He boasted that he could <em>eat</em> a horse.</div><div>6. Don't <em>eat</em> too many nuts-you'll spoil your appetite .</div><div>7. I'm not implying anything about your cooking, but could we <em>eat</em> out tonight?</div><div>8. I don't mind whether we <em>eat</em> now or this evening, it's all the same to me.</div><div>9. Let's get something to <em>eat</em>; I'm starving.</div><div>10. I don't know how you can <em>eat</em> that revolting stuff!</div><div>11. We stopped for something to <em>eat</em>.</div><div>12. People should decrease the amount of fat they <em>eat</em>.</div><div>13. I suggest we go out to <em>eat</em>.</div><div>14. The fish is rotten; you must not <em>eat</em> it.</div><div>15. Don't <em>eat</em> fatty food or chocolates.</div><div>16. He draped his jacket over the back of the chair and sat down to <em>eat</em>.</div><div>17. What do you want to <em>eat</em> for dinner?</div><div>18. People should, ideally, <em>eat</em> much less fat.</div><div>19. They <em>eat</em> whatever they can find.</div><div>20. Try not to <em>eat</em> between meals.</div><div>21. I could just <em>eat</em> a little something.</div><div>22. I can't <em>eat</em> bananas. They make me ill.</div><div>23. Let's go indoors and have something to <em>eat</em>.</div><div>24. First-time visitors to Spain are often surprised by how late people <em>eat</em>.</div><div>25. He was listless and pale and wouldn't <em>eat</em> much.</div><div>26. It's warm enough to <em>eat</em> outdoors tonight.</div><div>27. He is seeking something to <em>eat</em> in the cupboard.</div><div>28. I could <em>eat</em> what I liked without getting fat.</div><div>29. <em>Eat</em> as much as you wish.</div><div style="margin-bottom:3px;">30. The Chinese also <em>eat</em> a type of pasta as part of their staple diet.</div></div><!--student结束-->    <div id="ad_marginbottom_0" style="padding-top:0px;margin-bottom:6px;line-height:normal;margin-top:-8px;">  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>  <!-- 728_90_20170421 -->  <ins class="adsbygoogle"       style="display:inline-block;width:728px;height:90px"       data-ad-client="ca-pub-7200850114163593"       data-ad-slot="2392632666"></ins>  <script>  (adsbygoogle = window.adsbygoogle || []).push({});  </script>  </div>  <div style="margin-bottom:3px;font-size:13px;line-height:21px;"><span style="font-weight:bold;float:left;display:block">More similar words:&nbsp;</span><span style='float:left;display:block;'><a href='neat.html' target='_blank'>neat</a>,&nbsp;</span><span style='float:left;display:block;'><a href='great.html' target='_blank'>great</a>,&nbsp;</span><span style='float:left;display:block;'><a href='come at.html' target='_blank'>come at</a>,&nbsp;</span><span style='float:left;display:block;'><a href='eat up.html' target='_blank'>eat up</a>,&nbsp;</span><span style='float:left;display:block;'><a href='feather.html' target='_blank'>feather</a>,&nbsp;</span><span style='float:left;display:block;'><a href='wheat.html' target='_blank'>wheat</a>,&nbsp;</span><span style='float:left;display:block;'><a href='cheat.html' target='_blank'>cheat</a>,&nbsp;</span><span style='float:left;display:block;'><a href='leather.html' target='_blank'>leather</a>,&nbsp;</span><span style='float:left;display:block;'><a href='death.html' target='_blank'>death</a>,&nbsp;</span><span style='float:left;display:block;'><a href='threat.html' target='_blank'>threat</a>,&nbsp;</span><span style='float:left;display:block;'><a href='theater.html' target='_blank'>theater</a>,&nbsp;</span><span style='float:left;display:block;'><a href='treaty.html' target='_blank'>treaty</a>,&nbsp;</span><span style='float:left;display:block;'><a href='create.html' target='_blank'>create</a>,&nbsp;</span><span style='float:left;display:block;'><a href='entreat.html' target='_blank'>entreat</a>,&nbsp;</span><span style='float:left;display:block;'><a href='beat down.html' target='_blank'>beat down</a>,&nbsp;</span><span style='float:left;display:block;'><a href='retreat.html' target='_blank'>retreat</a>,&nbsp;</span><span style='float:left;display:block;'><a href='sweater.html' target='_blank'>sweater</a>,&nbsp;</span><span style='float:left;display:block;'><a href='beneath.html' target='_blank'>beneath</a>,&nbsp;</span><span style='float:left;display:block;'><a href='feature.html' target='_blank'>feature</a>,&nbsp;</span><span style='float:left;display:block;'><a href='greatly.html' target='_blank'>greatly</a>,&nbsp;</span><span style='float:left;display:block;'><a href='creating.html' target='_blank'>creating</a>,&nbsp;</span><span style='float:left;display:block;'><a href='creature.html' target='_blank'>creature</a>,&nbsp;</span><span style='float:left;display:block;'><a href='arrive at.html' target='_blank'>arrive at</a>,&nbsp;</span><span style='float:left;display:block;'><a href='threaten.html' target='_blank'>threaten</a>,&nbsp;</span><span style='float:left;display:block;'><a href='treatment.html' target='_blank'>treatment</a>,&nbsp;</span><span style='float:left;display:block;'><a href='breathing.html' target='_blank'>breathing</a>,&nbsp;</span><span style='float:left;display:block;'><a href='out of breath.html' target='_blank'>out of breath</a>,&nbsp;</span><span style='float:left;display:block;'><a href='in the heat of.html' target='_blank'>in the heat of</a>,&nbsp;</span><span style='float:left;display:block;'><a href='repeatedly.html' target='_blank'>repeatedly</a>,&nbsp;</span><span style='float:left;display:block;'><a href='the death penalty.html' target='_blank'>the death penalty</a>.&nbsp;</span><div style='clear:both;height:1px;margin-top:-1px;overflow:hidden;margin-bottom:0px;'></div></div>  </div><!-- content -->  </div><!-- viewbox -->  <script>  	function goPage(pagePre){  		var goPageNo=parseInt(document.getElementById("goPageNo").value,10);  		var pageCountNo=parseInt(document.getElementById("pageCountNo").value,10);  		///alert(goPageNo);  		///alert(pageCountNo);  		//这样确实ok啊,把输入为空等情况都剔除了.白名单制度.  		if((goPageNo<=pageCountNo) && (goPageNo>=1)){  		}else{  			alert("Please input the correct page number!");  			return;  		}  		var href1;  		if(goPageNo==1){  			href1=pagePre+".html";  		}else{  			href1=pagePre+"_"+goPageNo+".html";  		}  		window.location.href=href1;  	}  </script>  <div style="text-align:center;margin-top:10px;">  	  Total&nbsp;233, 30&nbsp;Per page&nbsp;      1/8&nbsp;             <a href="/eat.html"><span style="margin-right:2px;">«</span>first</a>&nbsp;             <a href="/eat_2.html">next<span style="margin-left:2px;">›</span></a>&nbsp;             <a href="/eat_8.html">last<span style="margin-left:2px;">»</span></a>&nbsp;            <input type="hidden" id="pageCountNo" value="8" />        goto<input style="margin:auto 2px;" type="text" size=3 id="goPageNo" value="1"  onkeydown="if(event.keyCode==13){goPage('/eat');}" /><input type="button" style="margin-left:3px;cursor:hand;" value="ok" onclick="goPage('/eat');" />      </div>  <script>  function beforeComment(word){     var commentWord=getCookie("commentWord"+word);    if(commentWord!=null){  	alert("fail! The minimum comment interval of one word is 60 seconds");  	return;    }    var username=trim(formComment.username.value);    var comment=trim(formComment.comment.value);    ////如果句子不含word就通不过    if(comment==""){    	 alert("The comment cann't be empty!");    	 return;    }    if(comment.length>1000){    	 alert("The comment cann't be longer then 1000 length!");    	 return;    }  	////ajax    var xmlhttp;  	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari   		 xmlhttp=new XMLHttpRequest();    }else{// code for IE6, IE5    		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");    }    xmlhttp.onreadystatechange=function(){      if (xmlhttp.readyState==4 && xmlhttp.status==200){        ////返回后做事情    		var responseText=xmlhttp.responseText;        		////需改的地方1    		//有异常.    		if(responseText!="" && responseText!=null){    		   alert(responseText);    		   ///window.close();    		}else{    			var showMsg="comment success! thank you! ";  			//cookie别设置太长,防止用户电脑中cookie太多哦  			setCookie("commentWord"+word,"1",1/60);    			alert(showMsg);  			///var createtime=new Date().toDateString();  			var date1 = new Date();  			var createtime = date1.getFullYear()+'-'+(date1.getMonth()+1)+'-'+date1.getDate()+' '+date1.getHours()+':'+date1.getMinutes()+':'+date1.getSeconds();  			var commentDiv='<div><ul style="padding-bottom:10px;margin-top:8px;border-bottom: 1px dashed #ccc;margin-left:8px;"><li><div><span>';  			commentDiv+=username;  			commentDiv+='</span>&nbsp;<span style="color:#aeaeae">';  			///commentDiv+=createtime.substr(0,10);  			commentDiv+=createtime;  			commentDiv+='</span></div><div style="clear:both;margin:5px auto;">';  			commentDiv+=comment;  			commentDiv+='</div></li></ul></div>\r\n';  			///alert(commentDiv);  			document.getElementById("commetcontent").innerHTML=commentDiv+document.getElementById("commetcontent").innerHTML;  			formComment.comment.value="";     		}  	  }    };    xmlhttp.open("POST","commentAjax.php",true);    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");    var ajaxStr="action=submitAjax&word="+encodeURI(word)+"&comment="+encodeURI(comment)+"&username="+encodeURI(username)+"&rnd="+ Math.random();    xmlhttp.send(ajaxStr);  }  function queryComment(word){     var xmlhttp;  	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari   		 xmlhttp=new XMLHttpRequest();    }else{// code for IE6, IE5    		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");    }   	xmlhttp.onreadystatechange=function(){      if (xmlhttp.readyState==4 && xmlhttp.status==200){        ////返回后做事情    		var responseText=xmlhttp.responseText;      		///alert(responseText);    		////需改的地方1    		//有异常.    		if(responseText!=""){  			var comment_arr=responseText.split("||");  			var comment_html="";  			///alert(comment_arr.length);  			for(var i=0;i<parseInt(comment_arr.length/4);i++){  				var word=comment_arr[i*4];  				var comment=comment_arr[i*4+1];  				var createtime=comment_arr[i*4+2];  				var username=comment_arr[i*4+3];  				var commentDiv='<div><ul style="padding-bottom:10px;margin-top:8px;border-bottom: 1px dashed #ccc;margin-left:8px;"><li><div><span>';  				commentDiv+=username;  				commentDiv+='</span>&nbsp;<span style="color:#aeaeae">';  				///commentDiv+=createtime.substr(0,10);  				commentDiv+=createtime;  				commentDiv+='</span></div><div style="clear:both;margin:5px auto;">';  				commentDiv+=comment;  				commentDiv+='</div></li></ul></div>\r\n';  				///alert(commentDiv);  				comment_html+=commentDiv;  			}  			document.getElementById("commetcontent").innerHTML=comment_html;  			    		}  	  }    };      var ajaxStr="commentAjax.php?action=queryAjax&word="+encodeURI(word)+"&rnd="+ Math.random();    ///alert(ajaxStr);    xmlhttp.open("GET",ajaxStr,true);    xmlhttp.send();  }  </script>  <div class="mt1" style="margin-left:0px;">  <dl class="tbox">      <dt> <strong>Leave a comment</strong></dt>      <dd>        <div class="dede_comment_post">          <form action="#" method="post" name="formComment">            <div class="dcmp-title"> <small>Welcome to leave a comment about this page!</small> </div>  		  <div style="margin:5px auto;">  		  <textarea style="width:98%" name="comment" rows="5" ></textarea>  		  </div>            <div>                Your name:                <input type="text" name="username" value="me" size="8" style="font-size:13px;">                <button type="button" onclick='beforeComment("eat")'>Submit</button>            </div>          </form>        </div>      </dd>  </dl>  </div>    <div style="margin-top:8px;">    <dl class="tbox">      <dt> <strong>Latest comments</strong><span style="float:right;line-height:25px;padding-right:8px;"><a href="comment.php?word=eat" target="_blank">Into the comment page&gt;&gt;</a></span></dt>  	<dd id="commetcontent">  	<!--  	<div>  	  <ul style="padding-bottom:10px;margin-top:8px;border-bottom: 1px dashed #ccc;margin-left:8px;">  		<li>   		  <div><span>某某</span>&nbsp;<span style="color:#aeaeae">2016-01-13</span></div>  		  <div style="clear:both;margin:5px auto;">联网相关的政策</div>  		</li>  	  </ul>  	</div>  	-->  	</dd>    </dl>  </div>        </div><!-- div_main_left -->     <div id="div_main_right" style="width:18%;margin-top:8px;float:right;border:0px solid blue;" >  <div>  <dl class="tbox light" style="margin-bottom:4px;">  	<dt class="light"><strong>More words</strong></dt>  	<dd class="light">  	<ul class="c1 ico2">  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="adjuvant.html">adjuvant</a>&nbsp;(93)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="transfixed.html">transfixed</a>&nbsp;(61+3)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="diversion.html">diversion</a>&nbsp;(202+7)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="specially.html">specially</a>&nbsp;(194+18)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="solipsism.html">solipsism</a>&nbsp;(26)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="monotone.html">monotone</a>&nbsp;(77+2)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="disrepair.html">disrepair</a>&nbsp;(62+3)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="disallow.html">disallow</a>&nbsp;(42)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="beetle.html">beetle</a>&nbsp;(194+6)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="unpopular.html">unpopular</a>&nbsp;(239+13)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="stirred.html">stirred</a>&nbsp;(244+6)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="inconsistency.html">inconsistency</a>&nbsp;(81+2)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="so long.html">so long</a>&nbsp;(247+24)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="gardener.html">gardener</a>&nbsp;(171+16)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="forgotten.html">forgotten</a>&nbsp;(228+22)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="subcommittee.html">subcommittee</a>&nbsp;(71+2)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="forgot.html">forgot</a>&nbsp;(222+45)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="caseworker.html">caseworker</a>&nbsp;(20)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="bring to a halt.html">bring to a halt</a>&nbsp;(6)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="oliver cromwell.html">oliver cromwell</a>&nbsp;(16)</span>  		</li>  			</ul>  	</dd>  </dl>  </div>  <div id="ads4">  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>  <!-- 160_600_20170509 -->  <ins class="adsbygoogle"       style="display:inline-block;width:160px;height:600px"       data-ad-client="ca-pub-7200850114163593"       data-ad-slot="1770400263"></ins>  <script>  (adsbygoogle = window.adsbygoogle || []).push({});  </script>  </div>  </div><!-- div_main_right结束 -->    <!--外部文件,先显示图片,再广告,再其它-->  <!--图+-->  <script>queryComment("eat");</script>    <div style="padding-top:2px;clear:both;"></">  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>  <!-- 970_90_20170421 -->  <ins class="adsbygoogle"       style="display:inline-block;width:970px;height:90px"       data-ad-client="ca-pub-7200850114163593"       data-ad-slot="5287223468"></ins>  <script>  (adsbygoogle = window.adsbygoogle || []).push({});  </script>  </div>  <div class="footer w960 center mt1 clear">  <div class="footer_body">    <div class="copyright">Copyright © 2016 sentencedict.com All Rights Reserved Contact:492108537@qq.com  </div>    </div><!-- footer_body -->  </div><!--footer w960 -->  <script>    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');    ga('create', 'UA-97689481-1', 'auto');    ga('send', 'pageview');  </script>  <!-- Go to www.addthis.com/dashboard to customize your tools -->  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-578e31c97244699a"></script></div><!-- pageDiv -->  </body>  </html>