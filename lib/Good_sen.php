<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">   <html>  <head>  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">  <title>Good in a sentence (esp. good sentence like quote, proverb...)</title>  <meta name="description" content="151+62 sentence examples: 1. An nod is as good as a wink to a blind horse. 2. To make good use of life. 3. He that spares the bad injures the good. 4. Hope is a good breakfast, but a bad supper. 5. A good wife makes a good husband. 6. A good beginnin"/>  <link href="/common/dedecms.css" rel="stylesheet" media="screen" type="text/css">  <style>  #content div{  	line-height:23px;font-size:14px;margin-bottom:15px;  }  #ad_marginbottom_0 div{  	margin-bottom:0px;  }  .hidden1{display:none;}  </style>  <script>  function q1(word){  	formQ.word.value=word;  	formQ.submit();  }  function upWord(word,action,word){  	var votedNumber=getCookie("votedNumber"+word);  	if(votedNumber!=null){  		alert("Have done up or down!");  		return;  	}  	var xmlhttp;  	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari  		 xmlhttp=new XMLHttpRequest();  	}else{// code for IE6, IE5  		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");  	}  	xmlhttp.onreadystatechange=function(){  	if (xmlhttp.readyState==4 && xmlhttp.status==200){  		////返回后做事情  		var responseText=xmlhttp.responseText;    		//有异常.  		if(responseText!="" && responseText!=null){  		   alert(responseText);  		}else{  			var id_temp="wordUpTimes";  			if(action=="down"){  				id_temp="wordDownTimes";  			}  			var temp=document.getElementById(id_temp).innerText;  			var displayTimes=parseInt(temp);  			displayTimes=displayTimes+1;  			document.getElementById(id_temp).innerText=displayTimes;  			//cookie别设置太长,防止用户电脑中cookie太多哦  			setCookie("votedNumber"+word,"1",12);  		}  	  }  	};  	xmlhttp.open("POST","upDownWordDo.php",true);  	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");  	xmlhttp.send("action="+action+"&word="+encodeURIComponent(word)+"&rnd="+ Math.random());  }  </script>  </head>  <body>  <form method="post" style="display:none;" target="_blank" name="formQ" action="/wordQueryDo.php">  <input type="hidden" name="word"/>  <input type="hidden" name="directGo" value="1"/>  </form>  <div class="pageDiv" style="border: 0px solid blue;">  <script>  function trim(str){  　return str.replace(/(^\s*)|(\s*$)/g,"");  }  var strDefault="Please input any word...";  function queryCheck(){  	if(formQuery.vagueSearch.checked){  		///formQuery.q.value=encodeURI(formQuery.word.value+" site:sentencedict.com");  		formQuery.q.value=formQuery.word.value+" site:sentencedict.com";  		var temp=formQuery.action;  		formQuery.action="http://www.google.com/search";  		formQuery.method="get";  		formQuery.target="_blank";  		//为了wo参数不提交  		formQuery.word.disabled=true;  		formQuery.submit();  		formQuery.action=temp;  		formQuery.method="post";  		formQuery.target="_self";  		formQuery.word.disabled=false;  	}else{  		formQuery.word.value=trim(formQuery.word.value);  		var word=formQuery.word.value;  		if(word==""||word==strDefault){  			alert("Please input any word!");return;  		}  		formQuery.submit();  	}  	var temp="1";  	if(!formQuery.directGo.checked){  		temp="0";  	}  	setCookie("directGo",temp,12);  	var temp="1";  	if(!formQuery.vagueSearch.checked){  		temp="0";  	}  	setCookie("vagueSearch",temp,12);  }  function getCookie(name)  {  	var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");  	if(arr=document.cookie.match(reg))  		return (arr[2]);  	else  		return null;  }  function setCookie(cookiename,cookievalue,hours){  	var date=new Date();  	date.setTime(date.getTime()+Number(hours)*3600*1000);  	document.cookie=cookiename+"="+cookievalue+";path=/;expires="+date.toGMTString();  }  </script>  <div class="header">  <table width="100%" style="margin-bottom:4px;font-size:14px;" height=65 cellspacing=0 border=0 >  <tr>      <td width=100 valign="bottom" style="padding:0px;">        <a href="/">        <img src="/images/logo.jpg" style="vertical-align:bottom;margin-bottom:1px;border:0px solid #dddddd" alt="Sentencedict.com" height=50 width=150>        </a>      </td>      <td valign="bottom">  <form method="post" style="margin:2px;margin-left:10px;" name="formQuery" action="/wordQueryDo.php">  <input type='text' style='display:none;'/>  <input type="hidden" name="q" value="">  <input type="text" name="word" maxlength=100 style="float:left;margin-bottom:3px;width:360px;height:28px;line-height:26px;padding-left:6px;font-size:16px;border:1px solid #3D7A01;border-top:1px solid #67CD01;border-left:1px solid #67CD01;color:gray;"   size=20 value="Please input any word..." onfocus="if(this.value==strDefault){this.value='';this.style.color='black';}" onblur="if(this.value==''){this.value=strDefault;this.style.color='gray';}" onkeydown="if(event.keyCode==13){queryCheck();}"/>  <input type="button" style="float:left;width:70px;height:30px;margin-left:4px;cursor:pointer;font-size:14px;" onclick="queryCheck()" value="Search"/><div style="margin-top:10px;float:left;">&nbsp;<input type="checkbox" name="directGo" style="margin-right:2px;margin-bottom:2px;margin-left:2px;" value="1" checked>Directly to word page&nbsp;<span title="use vague search provided by google" style=""><input type="checkbox" name="vagueSearch" style="margin-right:2px;margin-bottom:2px;" value="1" onclick="if(this.checked){formQuery.directGo.disabled=true;}else{formQuery.directGo.disabled=false;}"/>Vauge search(google)</span>  </div>  </form>  </td>  </tr>  </table>  <script>  var temp=getCookie("directGo");  //此情况修改directGo的checked状态  if(temp=="0"){    formQuery.directGo.checked=false;  }  var temp=getCookie("vagueSearch");  //此情况修改vagueSearch的checked状态  if(temp=="1"){    formQuery.vagueSearch.checked=true;  }  </script>  <div class="module blue mT10 wrapper w963">  <div id="navMenu" style="background-color:#199507;border:0px solid red;background-image:url('/images/green_skin.png');background-position:0 -72px;background-repeat:repeat-x;">  <ul>  	<li><a href="/"><span>Home</span></a></li>  	<li><a href="/top1000/"><span>Top1000 word</span></a></li>  	<li><a href="/top5000/"><span>Top5000 word</span></a></li>  	<li><a href="/phrase/"><span>Phrases</span></a></li>  	<!--<li><a href="/conjunction/"><span>Conjunction</span></a></li>-->  	<li><a href="/game/"><span>Game</span></a></li>  	<li><a href="/getSImage.php"><span>Sentence into pic</span></a></li>  	<li><a href="/feedback.php"><span>Feedback</span></a></li>  </ul>  </div><!-- //navMenu -->    </div><!-- //module blue... -->  <div>  </div>  </div><div class="place" style="margin-top:8px;margin-bottom:0px;height:26px;line-height:26px;"><a href="/">Home</a> &gt; <a href="Good.html">Good in a sentence</a>  </div>  <div id="div_main_left" style="width:81%;float:left;margin-top:8px;border:0px solid blue;">    <div class="viewbox" style="width:auto;padding-bottom:0px">  <div class="title" style="padding-top:0px;line-height:56px;height:auto;overflow:visible;">  <h2 style="display:inline;">Good in a sentence</h2><!--(esp. good sentence)--><span>&nbsp;&nbsp;<a href="javascript:;" onclick="upWord('Good','up','Good')">up(<span id="wordUpTimes">0</span>)</a>&nbsp;&nbsp;<a href="javascript:;" onclick="upWord('Good','down','Good')">down(<span id="wordDownTimes">0</span>)</a></span>  </div>  <div class="info">Sentence count:151+62 <input type="checkbox" id="onlyStudent" value="1" style="width:17px;height:17px;" onclick="onlyStudent(this);" />Only show simple sentences<small>Posted:</small>2016-07-17<small>Updated:</small>2016-12-13</div>    <script>  function onlyStudent(this1){  	///alert(this1.checked);  	if(this1.checked){  		document.getElementById('all').style.display='none';  		document.getElementById('student').style.display='block';  		setCookie("onlyStudent","1",12);  	}else{  		document.getElementById('student').style.display='none';  		document.getElementById('all').style.display='block';  		setCookie("onlyStudent","0",12);  	}  }  var temp=getCookie("onlyStudent");  //此情况修改vagueSearch的checked状态  if(temp=="1"){    document.getElementById('onlyStudent').checked=true;  }  </script>    <div  id="content" style="border-bottom:1px solid #aaaaaa;">    <!--最大高度为105px,能显示5行多的样子-->  <div style="line-height:20px;float:none;margin-top:5px;margin-bottom:5px;margin-right:5px;padding:4px;background-color:#cccccc;border:1px solid #DCDDDD;max-height:105px;font-size:14px;overflow:auto;">  	<span style='float:left;display:block;'>Synonym:&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("advantage");'>advantage</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("excellent");'>excellent</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("fine");'>fine</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("fitting");'>fitting</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("friendly");'>friendly</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("kind");'>kind</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("nice");'>nice</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("proper");'>proper</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("real");'>real</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("right");'>right</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("satisfying");'>satisfying</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("suitable");'>suitable</a>.&nbsp;</span><span style='float:left;display:block;'>Antonym:&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("awkward");'>awkward</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("bad");'>bad</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("badness");'>badness</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("clumsy");'>clumsy</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("evil");'>evil</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("harmful");'>harmful</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("illness");'>illness</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("poor");'>poor</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("unskillful");'>unskillful</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("wrong");'>wrong</a>.&nbsp;</span><span style='float:left;display:block;'>Similar words:&nbsp;</span><span style='float:left;display:block;'><a href='good for.html' target='_blank'>good for</a>,&nbsp;</span><span style='float:left;display:block;'><a href='for good.html' target='_blank'>for good</a>,&nbsp;</span><span style='float:left;display:block;'><a href='good name.html' target='_blank'>good name</a>,&nbsp;</span><span style='float:left;display:block;'><a href='be good at.html' target='_blank'>be good at</a>,&nbsp;</span><span style='float:left;display:block;'><a href='as good as.html' target='_blank'>as good as</a>,&nbsp;</span><span style='float:left;display:block;'><a href='a good many.html' target='_blank'>a good many</a>,&nbsp;</span><span style='float:left;display:block;'><a href='a good job.html' target='_blank'>a good job</a>,&nbsp;</span><span style='float:left;display:block;'><a href='a good deal.html' target='_blank'>a good deal</a>.&nbsp;</span><span style='float:left;display:block;'>Meaning:&nbsp;[gʊd]&nbsp;n. 1. benefit 2. moral excellence or admirableness 3. that which is pleasing or valuable or useful 4. articles of commerce. adj. 1. having desirable or positive qualities especially those suitable for a thing specified 2. having the normally expected amount 3. morally admirable 4. deserving of esteem and respect 5. promoting or enhancing well-being 6. agreeable or pleasing 7. of moral excellence 8. having or showing knowledge and skill and aptitude 9. thorough 10. with or in a close or intimate relationship 11. financially sound 12. most suitable or right for a particular purpose 13. resulting favorably 14. exerting force or influence 15. capable of pleasing 16. appealing to the mind 17. in excellent physical condition 18. tending to promote physical well-being; beneficial to health 19. not forged 20. not left to spoil 21. generally admired. adv. 1. (often used as a combining form) in a good or proper or satisfactory manner or to a high standard (`good' is a nonstandard dialectal variant for `well') 2. in a complete and thorough manner (`good' is sometimes used informally for `thoroughly').&nbsp;</span></div>  <div id="img1" style="margin:5px;margin-top:8px;float:right;">  	<img src="http://sentencedict.com/wordimage/108.jpg" style="width:300px;height:210px;" />  	<div style="text-align:center;margin-top:4px;font-size:12px;line-height:normal;margin-bottom:0px;width:280px;">Sentencedict.com random good picture</div>  </div>    <!--如果仅显示学生,并且该页有学生句子-->  <div id="all" >  <div>1 An nod is as <em>good</em> as a wink to a blind horse.&nbsp;<a href='/s/42551.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>2 To make <em>good</em> use of life.one should have in youth the experience of advanced years,and in old age the vigor of youth.&nbsp;<a href='/s/47262.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>3 He that spares the bad injures the <em>good</em>.&nbsp;<a href='/s/41088.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>4 Hope is a <em>good</em> breakfast, but a bad supper.&nbsp;<a href='/s/43028.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>5 A <em>good</em> wife makes a good husband.&nbsp;<a href='/s/40363.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>6 A <em>good</em> beginning is half the battle.&nbsp;<a href='/s/42420.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>7 The devil is <em>good</em> when he is pleased.&nbsp;<a href='/s/43791.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div id="ad_marginbottom_0" style="margin-top:-10px;margin-bottom:5px;"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><!-- 728_90_20170421 --><ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-7200850114163593" data-ad-slot="2392632666"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script></div><div>8 Wisdom is a <em>good</em> purchase though we pay dear for it.&nbsp;<a href='/s/42321.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>9 A <em>good</em> lawyer, an devil neighbour.&nbsp;<a href='/s/40349.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>10 A <em>good</em> name is easier lost than won.&nbsp;<a href='/s/46842.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>11 Behind bad luck comes <em>good</em> luck.&nbsp;<a href='/s/42600.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>12 Who marrieth for love without money, hath <em>good</em> nights and sorry days.&nbsp;<a href='/s/42307.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>13 Better <em>good</em> neighbours near than relations far away.&nbsp;<a href='/s/42615.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>14 It is a <em>good</em> workman that never blunders. (918).&nbsp;<a href='/s/41245.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>15 There's as <em>good</em> fish in the sea as ever came out of it.&nbsp;<a href='/s/43966.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>16 It is a <em>good</em> divine that follows his own instructions.&nbsp;<a title='show the description of wikipedia' href='https://en.wikipedia.org/wiki/William Shakespeare' target='_blank'>William Shakespeare</a>&nbsp;<a href='/s/40117.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>17 A kite will never be a <em>good</em> hawk.&nbsp;<a href='/s/40382.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>18 If they say you are <em>good</em>,(www.Sentencedict.com) ask yourself if it be true.&nbsp;<a href='/s/41190.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>19 He that returns <em>good</em> for evil obtains the victory.&nbsp;<a href='/s/41085.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>20 A bad custom is like a <em>good</em> cake, better broken than kept.&nbsp;<a href='/s/40240.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>21 A <em>good</em> name is earlier lost than won.&nbsp;<a href='/s/42432.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>22 A <em>good</em> name keeps its luster in the dark.&nbsp;<a href='/s/40357.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>23 A <em>good</em> book is a light to the soul.&nbsp;<a href='/s/42422.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>24 A <em>good</em> horse cannot be of a bad colour.&nbsp;<a href='/s/42429.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>25 Many a <em>good</em> cow hath a bad calf.&nbsp;<a href='/s/41458.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>26 It is <em>good</em> to have friends in trouble.&nbsp;<a href='/s/41273.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>27 We know not what is <em>good</em> until we have lost it.&nbsp;<a href='/s/44105.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>28 As a modern parent, I know that it's not how much you give children those counts, it's the love and attention you shower on them.A caring attitude can not only save you a small fortune, but also even make you feel <em>good</em> about being tight-fisted and offering more care than presents.&nbsp;<a href='/s/193269.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>29 No man can be brave who considers pain the greatest evil of life; or temperate, who regards pleasure as the highest <em>good</em>.&nbsp;<a href='/s/47320.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div style="margin-bottom:3px;">30 The money the miser hoards will do him no <em>good</em>.&nbsp;<a href='/s/41997.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div></div><!--all结束-->  <!--如果不是仅显示学生,或该页没有学生句子-->  <div id="student" style='display:none;'>  <div>1 John is <em>good</em> at French but weak at history.</div><div>2 I've never been very <em>good</em> at arithmetic.</div><div>3 You look <em>good</em> in that shirt.</div><div>4 He still has a <em>good</em> head of hair .</div><div>5 The exercises can be fun and a <em>good</em> warm-up for the latter part of the programme.</div><div>6 Thanks for being such a <em>good</em> mom.</div><div>7 Nothing this <em>good</em> ever happens, it must be a mistake.</div><div>8 It's too <em>good</em> to be true.</div><div>9 It is imperative that politicians should be <em>good</em> communicators.</div><div>10 Shoes are no <em>good</em> if they let in water.</div><div>11 Sounds like a <em>good</em> idea to me.</div><div>12 Ha, ha, that's a <em>good</em> one.</div><div>13 This is as <em>good</em> a place as any to spend the night.</div><div>14 I can't dance to music without a <em>good</em> rhythm.</div><div>15 We should work hard to acquire a <em>good</em> knowledge of French.</div><div>16 November is a <em>good</em> time to hunt deer.</div><div>17 TV has its <em>good</em> and bad points.</div><div>18 Fifth Avenue is a <em>good</em> place for window-shopping.</div><div>19 That shirt looks <em>good</em> on you.</div><div>20 It's <em>good</em> to meet people from different parts of the country.</div><div>21 Surely anyone with marketing gumption should be able to sell <em>good</em> books at any time of year.</div><div>22 Dad and I had a <em>good</em> laugh over it.</div><div>23 She is <em>good</em> at telling anecdotes.</div><div>24 You must be <em>good</em> at a foreign language.</div><div>25 He put me in the way of a <em>good</em> bargain.</div><div>26 A <em>good</em> historian must have an academic mind.</div><div>27 The house is in a <em>good</em> condition.</div><div>28 The school awarded Merry for her <em>good</em> work.</div><div>29 What is a <em>good</em> gift for Tracy?</div><div style="margin-bottom:3px;">30 He had <em>good</em> luck in his.</div></div><!--student结束-->    <div id="ad_marginbottom_0" style="padding-top:0px;margin-bottom:6px;line-height:normal;margin-top:-8px;">  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>  <!-- 728_90_20170421 -->  <ins class="adsbygoogle"       style="display:inline-block;width:728px;height:90px"       data-ad-client="ca-pub-7200850114163593"       data-ad-slot="2392632666"></ins>  <script>  (adsbygoogle = window.adsbygoogle || []).push({});  </script>  </div>  <div style="margin-bottom:3px;font-size:13px;line-height:21px;"><span style="font-weight:bold;float:left;display:block">More similar words:&nbsp;</span><span style='float:left;display:block;'><a href='good for.html' target='_blank'>good for</a>,&nbsp;</span><span style='float:left;display:block;'><a href='for good.html' target='_blank'>for good</a>,&nbsp;</span><span style='float:left;display:block;'><a href='good name.html' target='_blank'>good name</a>,&nbsp;</span><span style='float:left;display:block;'><a href='be good at.html' target='_blank'>be good at</a>,&nbsp;</span><span style='float:left;display:block;'><a href='as good as.html' target='_blank'>as good as</a>,&nbsp;</span><span style='float:left;display:block;'><a href='a good many.html' target='_blank'>a good many</a>,&nbsp;</span><span style='float:left;display:block;'><a href='a good job.html' target='_blank'>a good job</a>,&nbsp;</span><span style='float:left;display:block;'><a href='a good deal.html' target='_blank'>a good deal</a>,&nbsp;</span><span style='float:left;display:block;'><a href='do a good job.html' target='_blank'>do a good job</a>,&nbsp;</span><span style='float:left;display:block;'><a href='a good deal of.html' target='_blank'>a good deal of</a>,&nbsp;</span><span style='float:left;display:block;'><a href='have a good time.html' target='_blank'>have a good time</a>,&nbsp;</span><span style='float:left;display:block;'><a href='go out.html' target='_blank'>go out</a>,&nbsp;</span><span style='float:left;display:block;'><a href='go on.html' target='_blank'>go on</a>,&nbsp;</span><span style='float:left;display:block;'><a href='go off.html' target='_blank'>go off</a>,&nbsp;</span><span style='float:left;display:block;'><a href='food.html' target='_blank'>food</a>,&nbsp;</span><span style='float:left;display:block;'><a href='go over.html' target='_blank'>go over</a>,&nbsp;</span><span style='float:left;display:block;'><a href='flood.html' target='_blank'>flood</a>,&nbsp;</span><span style='float:left;display:block;'><a href='bloody.html' target='_blank'>bloody</a>,&nbsp;</span><span style='float:left;display:block;'><a href='wooden.html' target='_blank'>wooden</a>,&nbsp;</span><span style='float:left;display:block;'><a href='likelihood.html' target='_blank'>likelihood</a>,&nbsp;</span><span style='float:left;display:block;'><a href='neighborhood.html' target='_blank'>neighborhood</a>.&nbsp;</span><div style='clear:both;height:1px;margin-top:-1px;overflow:hidden;margin-bottom:0px;'></div></div>  </div><!-- content -->  </div><!-- viewbox -->  <script>  	function goPage(pagePre){  		var goPageNo=parseInt(document.getElementById("goPageNo").value,10);  		var pageCountNo=parseInt(document.getElementById("pageCountNo").value,10);  		///alert(goPageNo);  		///alert(pageCountNo);  		//这样确实ok啊,把输入为空等情况都剔除了.白名单制度.  		if((goPageNo<=pageCountNo) && (goPageNo>=1)){  		}else{  			alert("Please input the correct page number!");  			return;  		}  		var href1;  		if(goPageNo==1){  			href1=pagePre+".html";  		}else{  			href1=pagePre+"_"+goPageNo+".html";  		}  		window.location.href=href1;  	}  </script>  <div style="text-align:center;margin-top:10px;">  	  Total&nbsp;151, 30&nbsp;Per page&nbsp;      1/6&nbsp;             <a href="/Good.html"><span style="margin-right:2px;">«</span>first</a>&nbsp;             <a href="/Good_2.html">next<span style="margin-left:2px;">›</span></a>&nbsp;             <a href="/Good_6.html">last<span style="margin-left:2px;">»</span></a>&nbsp;            <input type="hidden" id="pageCountNo" value="6" />        goto<input style="margin:auto 2px;" type="text" size=3 id="goPageNo" value="1"  onkeydown="if(event.keyCode==13){goPage('/Good');}" /><input type="button" style="margin-left:3px;cursor:hand;" value="ok" onclick="goPage('/Good');" />      </div>  <script>  function beforeComment(word){     var commentWord=getCookie("commentWord"+word);    if(commentWord!=null){  	alert("fail! The minimum comment interval of one word is 60 seconds");  	return;    }    var username=trim(formComment.username.value);    var comment=trim(formComment.comment.value);    ////如果句子不含word就通不过    if(comment==""){    	 alert("The comment cann't be empty!");    	 return;    }    if(comment.length>1000){    	 alert("The comment cann't be longer then 1000 length!");    	 return;    }  	////ajax    var xmlhttp;  	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari   		 xmlhttp=new XMLHttpRequest();    }else{// code for IE6, IE5    		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");    }    xmlhttp.onreadystatechange=function(){      if (xmlhttp.readyState==4 && xmlhttp.status==200){        ////返回后做事情    		var responseText=xmlhttp.responseText;        		////需改的地方1    		//有异常.    		if(responseText!="" && responseText!=null){    		   alert(responseText);    		   ///window.close();    		}else{    			var showMsg="comment success! thank you! ";  			//cookie别设置太长,防止用户电脑中cookie太多哦  			setCookie("commentWord"+word,"1",1/60);    			alert(showMsg);  			///var createtime=new Date().toDateString();  			var date1 = new Date();  			var createtime = date1.getFullYear()+'-'+(date1.getMonth()+1)+'-'+date1.getDate()+' '+date1.getHours()+':'+date1.getMinutes()+':'+date1.getSeconds();  			var commentDiv='<div><ul style="padding-bottom:10px;margin-top:8px;border-bottom: 1px dashed #ccc;margin-left:8px;"><li><div><span>';  			commentDiv+=username;  			commentDiv+='</span>&nbsp;<span style="color:#aeaeae">';  			///commentDiv+=createtime.substr(0,10);  			commentDiv+=createtime;  			commentDiv+='</span></div><div style="clear:both;margin:5px auto;">';  			commentDiv+=comment;  			commentDiv+='</div></li></ul></div>\r\n';  			///alert(commentDiv);  			document.getElementById("commetcontent").innerHTML=commentDiv+document.getElementById("commetcontent").innerHTML;  			formComment.comment.value="";     		}  	  }    };    xmlhttp.open("POST","commentAjax.php",true);    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");    var ajaxStr="action=submitAjax&word="+encodeURI(word)+"&comment="+encodeURI(comment)+"&username="+encodeURI(username)+"&rnd="+ Math.random();    xmlhttp.send(ajaxStr);  }  function queryComment(word){     var xmlhttp;  	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari   		 xmlhttp=new XMLHttpRequest();    }else{// code for IE6, IE5    		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");    }   	xmlhttp.onreadystatechange=function(){      if (xmlhttp.readyState==4 && xmlhttp.status==200){        ////返回后做事情    		var responseText=xmlhttp.responseText;      		///alert(responseText);    		////需改的地方1    		//有异常.    		if(responseText!=""){  			var comment_arr=responseText.split("||");  			var comment_html="";  			///alert(comment_arr.length);  			for(var i=0;i<parseInt(comment_arr.length/4);i++){  				var word=comment_arr[i*4];  				var comment=comment_arr[i*4+1];  				var createtime=comment_arr[i*4+2];  				var username=comment_arr[i*4+3];  				var commentDiv='<div><ul style="padding-bottom:10px;margin-top:8px;border-bottom: 1px dashed #ccc;margin-left:8px;"><li><div><span>';  				commentDiv+=username;  				commentDiv+='</span>&nbsp;<span style="color:#aeaeae">';  				///commentDiv+=createtime.substr(0,10);  				commentDiv+=createtime;  				commentDiv+='</span></div><div style="clear:both;margin:5px auto;">';  				commentDiv+=comment;  				commentDiv+='</div></li></ul></div>\r\n';  				///alert(commentDiv);  				comment_html+=commentDiv;  			}  			document.getElementById("commetcontent").innerHTML=comment_html;  			    		}  	  }    };      var ajaxStr="commentAjax.php?action=queryAjax&word="+encodeURI(word)+"&rnd="+ Math.random();    ///alert(ajaxStr);    xmlhttp.open("GET",ajaxStr,true);    xmlhttp.send();  }  </script>  <div class="mt1" style="margin-left:0px;">  <dl class="tbox">      <dt> <strong>Leave a comment</strong></dt>      <dd>        <div class="dede_comment_post">          <form action="#" method="post" name="formComment">            <div class="dcmp-title"> <small>Welcome to leave a comment about this page!</small> </div>  		  <div style="margin:5px auto;">  		  <textarea style="width:98%" name="comment" rows="5" ></textarea>  		  </div>            <div>                Your name:                <input type="text" name="username" value="me" size="8" style="font-size:13px;">                <button type="button" onclick='beforeComment("Good")'>Submit</button>            </div>          </form>        </div>      </dd>  </dl>  </div>    <div style="margin-top:8px;">    <dl class="tbox">      <dt> <strong>Latest comments</strong><span style="float:right;line-height:25px;padding-right:8px;"><a href="comment.php?word=Good" target="_blank">Into the comment page&gt;&gt;</a></span></dt>  	<dd id="commetcontent">  	<!--  	<div>  	  <ul style="padding-bottom:10px;margin-top:8px;border-bottom: 1px dashed #ccc;margin-left:8px;">  		<li>   		  <div><span>某某</span>&nbsp;<span style="color:#aeaeae">2016-01-13</span></div>  		  <div style="clear:both;margin:5px auto;">联网相关的政策</div>  		</li>  	  </ul>  	</div>  	-->  	</dd>    </dl>  </div>        </div><!-- div_main_left -->     <div id="div_main_right" style="width:18%;margin-top:8px;float:right;border:0px solid blue;" >  <div>  <dl class="tbox light" style="margin-bottom:4px;">  	<dt class="light"><strong>More words</strong></dt>  	<dd class="light">  	<ul class="c1 ico2">  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="brahma.html">brahma</a>&nbsp;(17)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="bur.html">bur</a>&nbsp;(31)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="cadaver.html">cadaver</a>&nbsp;(57)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="avid.html">avid</a>&nbsp;(124+3)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="greedy.html">greedy</a>&nbsp;(221+11)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="murderer.html">murderer</a>&nbsp;(252+22)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="affirm.html">affirm</a>&nbsp;(82)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="coconut.html">coconut</a>&nbsp;(222+7)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="coconut tree.html">coconut tree</a>&nbsp;(16)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="hog.html">hog</a>&nbsp;(127+5)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="trinket.html">trinket</a>&nbsp;(35)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="banyan tree.html">banyan tree</a>&nbsp;(19)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="palm tree.html">palm tree</a>&nbsp;(34)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="ebony.html">ebony</a>&nbsp;(55)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="neem.html">neem</a>&nbsp;(31)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="interpreter.html">interpreter</a>&nbsp;(249+9)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="asthma.html">asthma</a>&nbsp;(235+8)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="cot.html">cot</a>&nbsp;(131+5)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="banyan.html">banyan</a>&nbsp;(44)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="frighten away.html">frighten away</a>&nbsp;(17)</span>  		</li>  			</ul>  	</dd>  </dl>  </div>  <div id="ads4">  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>  <!-- 160_600_20170509 -->  <ins class="adsbygoogle"       style="display:inline-block;width:160px;height:600px"       data-ad-client="ca-pub-7200850114163593"       data-ad-slot="1770400263"></ins>  <script>  (adsbygoogle = window.adsbygoogle || []).push({});  </script>  </div>  </div><!-- div_main_right结束 -->    <!--外部文件,先显示图片,再广告,再其它-->  <!--图+-->  <script>queryComment("Good");</script>    <div style="padding-top:2px;clear:both;"></">  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>  <!-- 970_90_20170421 -->  <ins class="adsbygoogle"       style="display:inline-block;width:970px;height:90px"       data-ad-client="ca-pub-7200850114163593"       data-ad-slot="5287223468"></ins>  <script>  (adsbygoogle = window.adsbygoogle || []).push({});  </script>  </div>  <div class="footer w960 center mt1 clear">  <div class="footer_body">    <div class="copyright">Copyright © 2016 sentencedict.com All Rights Reserved Contact:492108537@qq.com  </div>    </div><!-- footer_body -->  </div><!--footer w960 -->  <script>    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');    ga('create', 'UA-97689481-1', 'auto');    ga('send', 'pageview');  </script>  <!-- Go to www.addthis.com/dashboard to customize your tools -->  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-578e31c97244699a"></script></div><!-- pageDiv -->  </body>  </html>