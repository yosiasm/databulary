<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">   <html>  <head>  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">  <title>Mint in a sentence (esp. good sentence like quote, proverb...)</title>  <meta name="description" content="176+13 sentence examples: 1. Economy is the poor man' s mint; and extravagance the rich man ' s pitfall. 2. Decorate with a sprig of mint . 3. Don't mint at it;do it at once. 4. Add the mint and allow the flavours to mingle. 5. The bills were fresh f"/>  <link href="/common/dedecms.css" rel="stylesheet" media="screen" type="text/css">  <style>  #content div{  	line-height:23px;font-size:14px;margin-bottom:15px;  }  #ad_marginbottom_0 div{  	margin-bottom:0px;  }  .hidden1{display:none;}  </style>  <script>  function q1(word){  	formQ.word.value=word;  	formQ.submit();  }  function upWord(word,action,word){  	var votedNumber=getCookie("votedNumber"+word);  	if(votedNumber!=null){  		alert("Have done up or down!");  		return;  	}  	var xmlhttp;  	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari  		 xmlhttp=new XMLHttpRequest();  	}else{// code for IE6, IE5  		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");  	}  	xmlhttp.onreadystatechange=function(){  	if (xmlhttp.readyState==4 && xmlhttp.status==200){  		////返回后做事情  		var responseText=xmlhttp.responseText;    		//有异常.  		if(responseText!="" && responseText!=null){  		   alert(responseText);  		}else{  			var id_temp="wordUpTimes";  			if(action=="down"){  				id_temp="wordDownTimes";  			}  			var temp=document.getElementById(id_temp).innerText;  			var displayTimes=parseInt(temp);  			displayTimes=displayTimes+1;  			document.getElementById(id_temp).innerText=displayTimes;  			//cookie别设置太长,防止用户电脑中cookie太多哦  			setCookie("votedNumber"+word,"1",12);  		}  	  }  	};  	xmlhttp.open("POST","upDownWordDo.php",true);  	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");  	xmlhttp.send("action="+action+"&word="+encodeURIComponent(word)+"&rnd="+ Math.random());  }  </script>  </head>  <body>  <form method="post" style="display:none;" target="_blank" name="formQ" action="/wordQueryDo.php">  <input type="hidden" name="word"/>  <input type="hidden" name="directGo" value="1"/>  </form>  <div class="pageDiv" style="border: 0px solid blue;">  <script>  function trim(str){  　return str.replace(/(^\s*)|(\s*$)/g,"");  }  var strDefault="Please input any word...";  function queryCheck(){  	if(formQuery.vagueSearch.checked){  		///formQuery.q.value=encodeURI(formQuery.word.value+" site:sentencedict.com");  		formQuery.q.value=formQuery.word.value+" site:sentencedict.com";  		var temp=formQuery.action;  		formQuery.action="http://www.google.com/search";  		formQuery.method="get";  		formQuery.target="_blank";  		//为了wo参数不提交  		formQuery.word.disabled=true;  		formQuery.submit();  		formQuery.action=temp;  		formQuery.method="post";  		formQuery.target="_self";  		formQuery.word.disabled=false;  	}else{  		formQuery.word.value=trim(formQuery.word.value);  		var word=formQuery.word.value;  		if(word==""||word==strDefault){  			alert("Please input any word!");return;  		}  		formQuery.submit();  	}  	var temp="1";  	if(!formQuery.directGo.checked){  		temp="0";  	}  	setCookie("directGo",temp,12);  	var temp="1";  	if(!formQuery.vagueSearch.checked){  		temp="0";  	}  	setCookie("vagueSearch",temp,12);  }  function getCookie(name)  {  	var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");  	if(arr=document.cookie.match(reg))  		return (arr[2]);  	else  		return null;  }  function setCookie(cookiename,cookievalue,hours){  	var date=new Date();  	date.setTime(date.getTime()+Number(hours)*3600*1000);  	document.cookie=cookiename+"="+cookievalue+";path=/;expires="+date.toGMTString();  }  </script>  <div class="header">  <table width="100%" style="margin-bottom:4px;font-size:14px;" height=65 cellspacing=0 border=0 >  <tr>      <td width=100 valign="bottom" style="padding:0px;">        <a href="/">        <img src="/images/logo.jpg" style="vertical-align:bottom;margin-bottom:1px;border:0px solid #dddddd" alt="Sentencedict.com" height=50 width=150>        </a>      </td>      <td valign="bottom">  <form method="post" style="margin:2px;margin-left:10px;" name="formQuery" action="/wordQueryDo.php">  <input type='text' style='display:none;'/>  <input type="hidden" name="q" value="">  <input type="text" name="word" maxlength=100 style="float:left;margin-bottom:3px;width:360px;height:28px;line-height:26px;padding-left:6px;font-size:16px;border:1px solid #3D7A01;border-top:1px solid #67CD01;border-left:1px solid #67CD01;color:gray;"   size=20 value="Please input any word..." onfocus="if(this.value==strDefault){this.value='';this.style.color='black';}" onblur="if(this.value==''){this.value=strDefault;this.style.color='gray';}" onkeydown="if(event.keyCode==13){queryCheck();}"/>  <input type="button" style="float:left;width:70px;height:30px;margin-left:4px;cursor:pointer;font-size:14px;" onclick="queryCheck()" value="Search"/><div style="margin-top:10px;float:left;">&nbsp;<input type="checkbox" name="directGo" style="margin-right:2px;margin-bottom:2px;margin-left:2px;" value="1" checked>Directly to word page&nbsp;<span title="use vague search provided by google" style=""><input type="checkbox" name="vagueSearch" style="margin-right:2px;margin-bottom:2px;" value="1" onclick="if(this.checked){formQuery.directGo.disabled=true;}else{formQuery.directGo.disabled=false;}"/>Vauge search(google)</span>  </div>  </form>  </td>  </tr>  </table>  <script>  var temp=getCookie("directGo");  //此情况修改directGo的checked状态  if(temp=="0"){    formQuery.directGo.checked=false;  }  var temp=getCookie("vagueSearch");  //此情况修改vagueSearch的checked状态  if(temp=="1"){    formQuery.vagueSearch.checked=true;  }  </script>  <div class="module blue mT10 wrapper w963">  <div id="navMenu" style="background-color:#199507;border:0px solid red;background-image:url('/images/green_skin.png');background-position:0 -72px;background-repeat:repeat-x;">  <ul>  	<li><a href="/"><span>Home</span></a></li>  	<li><a href="/top1000/"><span>Top1000 word</span></a></li>  	<li><a href="/top5000/"><span>Top5000 word</span></a></li>  	<li><a href="/phrase/"><span>Phrases</span></a></li>  	<!--<li><a href="/conjunction/"><span>Conjunction</span></a></li>-->  	<li><a href="/game/"><span>Game</span></a></li>  	<li><a href="/getSImage.php"><span>Sentence into pic</span></a></li>  	<li><a href="/feedback.php"><span>Feedback</span></a></li>  </ul>  </div><!-- //navMenu -->    </div><!-- //module blue... -->  <div>  </div>  </div><div class="place" style="margin-top:8px;margin-bottom:0px;height:26px;line-height:26px;"><a href="/">Home</a> &gt; <a href="mint.html">Mint in a sentence</a>  </div>  <div id="div_main_left" style="width:81%;float:left;margin-top:8px;border:0px solid blue;">    <div class="viewbox" style="width:auto;padding-bottom:0px">  <div class="title" style="padding-top:0px;line-height:56px;height:auto;overflow:visible;">  <h2 style="display:inline;">Mint in a sentence</h2><!--(esp. good sentence)--><span>&nbsp;&nbsp;<a href="javascript:;" onclick="upWord('mint','up','mint')">up(<span id="wordUpTimes">0</span>)</a>&nbsp;&nbsp;<a href="javascript:;" onclick="upWord('mint','down','mint')">down(<span id="wordDownTimes">0</span>)</a></span>  </div>  <div class="info">Sentence count:176+13 <input type="checkbox" id="onlyStudent" value="1" style="width:17px;height:17px;" onclick="onlyStudent(this);" />Only show simple sentences<small>Posted:</small>2017-04-07<small>Updated:</small>2017-04-07</div>    <script>  function onlyStudent(this1){  	///alert(this1.checked);  	if(this1.checked){  		document.getElementById('all').style.display='none';  		document.getElementById('student').style.display='block';  		setCookie("onlyStudent","1",12);  	}else{  		document.getElementById('student').style.display='none';  		document.getElementById('all').style.display='block';  		setCookie("onlyStudent","0",12);  	}  }  var temp=getCookie("onlyStudent");  //此情况修改vagueSearch的checked状态  if(temp=="1"){    document.getElementById('onlyStudent').checked=true;  }  </script>    <div  id="content" style="border-bottom:1px solid #aaaaaa;">    <!--最大高度为105px,能显示5行多的样子-->  <div style="line-height:20px;float:none;margin-top:5px;margin-bottom:5px;margin-right:5px;padding:4px;background-color:#cccccc;border:1px solid #DCDDDD;max-height:105px;font-size:14px;overflow:auto;">  	<span style='float:left;display:block;'>Synonym:&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("batch");'>batch</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("coin");'>coin</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("deal");'>deal</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("flock");'>flock</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("good deal");'>good deal</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("great deal");'>great deal</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("hatful");'>hatful</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("heap");'>heap</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("lot");'>lot</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("mass");'>mass</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("mess");'>mess</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("mickle");'>mickle</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("mint candy");'>mint candy</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("mint");'>mint</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("muckle");'>muckle</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("peck");'>peck</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("pile");'>pile</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("plenty");'>plenty</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("pot");'>pot</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("quite a little");'>quite a little</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("raft");'>raft</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("sight");'>sight</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("slew");'>slew</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("spate");'>spate</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("stack");'>stack</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("strike");'>strike</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("tidy sum");'>tidy sum</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("wad");'>wad</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("whole lot");'>whole lot</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("whole slew");'>whole slew</a>.&nbsp;</span><span style='float:left;display:block;'>Similar words:&nbsp;</span><span style='float:left;display:block;'><a href='varmint.html' target='_blank'>varmint</a>,&nbsp;</span><span style='float:left;display:block;'><a href='Comintern.html' target='_blank'>Comintern</a>,&nbsp;</span><span style='float:left;display:block;'><a href='badminton.html' target='_blank'>badminton</a>,&nbsp;</span><span style='float:left;display:block;'><a href='intermingle.html' target='_blank'>intermingle</a>,&nbsp;</span><span style='float:left;display:block;'><a href='interminable.html' target='_blank'>interminable</a>,&nbsp;</span><span style='float:left;display:block;'><a href='interminably.html' target='_blank'>interminably</a>,&nbsp;</span><span style='float:left;display:block;'><a href='nominal interest rate.html' target='_blank'>nominal interest rate</a>,&nbsp;</span><span style='float:left;display:block;'><a href='fly in the ointment.html' target='_blank'>fly in the ointment</a>.&nbsp;</span><span style='float:left;display:block;'>Meaning:&nbsp;[mɪnt]&nbsp;n. 1. (often followed by `of') a large number or amount or extent 2. any north temperate plant of the genus Mentha with aromatic leaves and small mauve flowers 3. the leaves of a mint plant used fresh or candied 4. a candy that is flavored with a mint oil 5. a plant where money is coined by authority of the government. v. form by stamping, punching, or printing. adj. as if new.&nbsp;</span></div>  <div id="img1" style="margin:5px;margin-top:8px;float:right;">  	<img src="http://mpic.spriteapp.cn/ugc/2016/01/05/568b871ce3c1b.gif" style="width:300px;height:210px;" />  	<div style="text-align:center;margin-top:4px;font-size:12px;line-height:normal;margin-bottom:0px;width:280px;">Sentencedict.com random good picture</div>  </div>    <!--如果仅显示学生,并且该页有学生句子-->  <div id="all" >  <div>1. Economy is the poor man' s <em>mint</em>; and extravagance the rich man ' s pitfall.&nbsp;<a href='/s/193258.html' target='blank' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>2. Decorate with a sprig of <em>mint</em> .</div><div>3. Don't <em>mint</em> at it;do it at once.</div><div>4. Add the <em>mint</em> and allow the flavours to mingle.</div><div>5. The bills were fresh from the <em>mint</em>.</div><div>6. A collector would pay $500 for a <em>mint</em> copy.</div><div>7. Garnish with <em>mint</em> sprigs.</div><div id="ad_marginbottom_0" style="margin-top:-10px;margin-bottom:5px;"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><!-- 728_90_20170421 --><ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-7200850114163593" data-ad-slot="2392632666"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script></div><div>8. I tried sucking a <em>mint</em> to stop myself coughing.</div><div>9. They must be worth a <em>mint</em>.</div><div>10. Combine the beans, chopped <em>mint</em> and olive oil in a large bowl.</div><div>11. They learned to <em>mint</em> from the Greeks.</div><div>12. The Romans learned to <em>mint</em> from the Greeks.</div><div>13. The Royal <em>Mint</em> will strike a commemorative gold coin.</div><div>14. Everybody thinks I'm making a <em>mint</em>.</div><div>15. <em>Mint</em> is a mild antiseptic.</div><div>16. She made an absolute <em>mint</em> in the fashion trade.</div><div>17. These pennies were coined at the <em>mint</em> in London.</div><div>18. CD player,[Sentencedict.com ] in <em>mint</em> condition - £50.</div><div>19. The Royal <em>Mint</em> will strike a gold coin of commemorative.</div><div>20. A copy in <em>mint</em> condition would fetch about ￡2000.</div><div>21. Sage, <em>mint</em> and dill are all herbs.</div><div>22. In 1965 the <em>mint</em> stopped putting silver in dimes.</div><div>23. We had lamb with <em>mint</em> sauce.</div><div>24. He has a <em>mint</em> of money.</div><div>25. The <em>mint</em> makes coins.</div><div>26. She made a <em>mint</em> on the stock exchange last year.</div><div>27. If his books sell in the States(sentencedict.com), he'll make a <em>mint</em>.</div><div>28. I decorated the fruit salad with a sprig of <em>mint</em>.</div><div>29. The shop can take goods back if they are still in <em>mint</em> condition.</div><div style="margin-bottom:3px;">30. Top each bowl with a generous sprinkling of fresh <em>mint</em>.</div></div><!--all结束-->  <!--如果不是仅显示学生,或该页没有学生句子-->  <div id="student" style='display:none;'>  <div>1. Decorate with a sprig of <em>mint</em> .</div><div>2. Don't <em>mint</em> at it;do it at once.</div><div>3. If his books sell in the States, he'll make a <em>mint</em>.</div><div>4. I decorated the fruit salad with a sprig of <em>mint</em>.</div><div>5. Add the <em>mint</em> and allow the flavours to mingle.</div><div>6. Garnish with <em>mint</em> sprigs.</div><div>7. The Romans learned to <em>mint</em> from the Greeks.</div><div>8. <em>Mint</em> is a mild antiseptic.</div><div>9. These pennies were coined at the <em>mint</em> in London.</div><div>10. The Royal <em>Mint</em> will strike a gold coin of commemorative.</div><div>11. He has a <em>mint</em> of money.</div><div>12. The <em>mint</em> makes coins.</div><div style="margin-bottom:3px;">13. Sage and <em>mint</em> are herbs.</div></div><!--student结束-->    <div id="ad_marginbottom_0" style="padding-top:0px;margin-bottom:6px;line-height:normal;margin-top:-8px;">  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>  <!-- 728_90_20170421 -->  <ins class="adsbygoogle"       style="display:inline-block;width:728px;height:90px"       data-ad-client="ca-pub-7200850114163593"       data-ad-slot="2392632666"></ins>  <script>  (adsbygoogle = window.adsbygoogle || []).push({});  </script>  </div>  <div style="margin-bottom:3px;font-size:13px;line-height:21px;"><span style="font-weight:bold;float:left;display:block">More similar words:&nbsp;</span><span style='float:left;display:block;'><a href='varmint.html' target='_blank'>varmint</a>,&nbsp;</span><span style='float:left;display:block;'><a href='Comintern.html' target='_blank'>Comintern</a>,&nbsp;</span><span style='float:left;display:block;'><a href='badminton.html' target='_blank'>badminton</a>,&nbsp;</span><span style='float:left;display:block;'><a href='intermingle.html' target='_blank'>intermingle</a>,&nbsp;</span><span style='float:left;display:block;'><a href='interminable.html' target='_blank'>interminable</a>,&nbsp;</span><span style='float:left;display:block;'><a href='interminably.html' target='_blank'>interminably</a>,&nbsp;</span><span style='float:left;display:block;'><a href='nominal interest rate.html' target='_blank'>nominal interest rate</a>,&nbsp;</span><span style='float:left;display:block;'><a href='fly in the ointment.html' target='_blank'>fly in the ointment</a>,&nbsp;</span><span style='float:left;display:block;'><a href='a fly in the ointment.html' target='_blank'>a fly in the ointment</a>,&nbsp;</span><span style='float:left;display:block;'><a href='mine.html' target='_blank'>mine</a>,&nbsp;</span><span style='float:left;display:block;'><a href='mind.html' target='_blank'>mind</a>,&nbsp;</span><span style='float:left;display:block;'><a href='minor.html' target='_blank'>minor</a>,&nbsp;</span><span style='float:left;display:block;'><a href='mince.html' target='_blank'>mince</a>,&nbsp;</span><span style='float:left;display:block;'><a href='coming.html' target='_blank'>coming</a>,&nbsp;</span><span style='float:left;display:block;'><a href='miner.html' target='_blank'>miner</a>,&nbsp;</span><span style='float:left;display:block;'><a href='minus.html' target='_blank'>minus</a>,&nbsp;</span><span style='float:left;display:block;'><a href='admin.html' target='_blank'>admin</a>,&nbsp;</span><span style='float:left;display:block;'><a href='gaming.html' target='_blank'>gaming</a>,&nbsp;</span><span style='float:left;display:block;'><a href='vermin.html' target='_blank'>vermin</a>,&nbsp;</span><span style='float:left;display:block;'><a href='mining.html' target='_blank'>mining</a>,&nbsp;</span><span style='float:left;display:block;'><a href='mingle.html' target='_blank'>mingle</a>,&nbsp;</span><span style='float:left;display:block;'><a href='mind you.html' target='_blank'>mind you</a>,&nbsp;</span><span style='float:left;display:block;'><a href='minion.html' target='_blank'>minion</a>,&nbsp;</span><span style='float:left;display:block;'><a href='minded.html' target='_blank'>minded</a>,&nbsp;</span><span style='float:left;display:block;'><a href='famine.html' target='_blank'>famine</a>,&nbsp;</span><span style='float:left;display:block;'><a href='timing.html' target='_blank'>timing</a>,&nbsp;</span><span style='float:left;display:block;'><a href='remind.html' target='_blank'>remind</a>,&nbsp;</span><span style='float:left;display:block;'><a href='mincing.html' target='_blank'>mincing</a>,&nbsp;</span><span style='float:left;display:block;'><a href='fuming.html' target='_blank'>fuming</a>,&nbsp;</span><span style='float:left;display:block;'><a href='minute.html' target='_blank'>minute</a>.&nbsp;</span><div style='clear:both;height:1px;margin-top:-1px;overflow:hidden;margin-bottom:0px;'></div></div>  </div><!-- content -->  </div><!-- viewbox -->  <script>  	function goPage(pagePre){  		var goPageNo=parseInt(document.getElementById("goPageNo").value,10);  		var pageCountNo=parseInt(document.getElementById("pageCountNo").value,10);  		///alert(goPageNo);  		///alert(pageCountNo);  		//这样确实ok啊,把输入为空等情况都剔除了.白名单制度.  		if((goPageNo<=pageCountNo) && (goPageNo>=1)){  		}else{  			alert("Please input the correct page number!");  			return;  		}  		var href1;  		if(goPageNo==1){  			href1=pagePre+".html";  		}else{  			href1=pagePre+"_"+goPageNo+".html";  		}  		window.location.href=href1;  	}  </script>  <div style="text-align:center;margin-top:10px;">  	  Total&nbsp;176, 30&nbsp;Per page&nbsp;      1/6&nbsp;             <a href="/mint.html"><span style="margin-right:2px;">«</span>first</a>&nbsp;             <a href="/mint_2.html">next<span style="margin-left:2px;">›</span></a>&nbsp;             <a href="/mint_6.html">last<span style="margin-left:2px;">»</span></a>&nbsp;            <input type="hidden" id="pageCountNo" value="6" />        goto<input style="margin:auto 2px;" type="text" size=3 id="goPageNo" value="1"  onkeydown="if(event.keyCode==13){goPage('/mint');}" /><input type="button" style="margin-left:3px;cursor:hand;" value="ok" onclick="goPage('/mint');" />      </div>  <script>  function beforeComment(word){     var commentWord=getCookie("commentWord"+word);    if(commentWord!=null){  	alert("fail! The minimum comment interval of one word is 60 seconds");  	return;    }    var username=trim(formComment.username.value);    var comment=trim(formComment.comment.value);    ////如果句子不含word就通不过    if(comment==""){    	 alert("The comment cann't be empty!");    	 return;    }    if(comment.length>1000){    	 alert("The comment cann't be longer then 1000 length!");    	 return;    }  	////ajax    var xmlhttp;  	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari   		 xmlhttp=new XMLHttpRequest();    }else{// code for IE6, IE5    		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");    }    xmlhttp.onreadystatechange=function(){      if (xmlhttp.readyState==4 && xmlhttp.status==200){        ////返回后做事情    		var responseText=xmlhttp.responseText;        		////需改的地方1    		//有异常.    		if(responseText!="" && responseText!=null){    		   alert(responseText);    		   ///window.close();    		}else{    			var showMsg="comment success! thank you! ";  			//cookie别设置太长,防止用户电脑中cookie太多哦  			setCookie("commentWord"+word,"1",1/60);    			alert(showMsg);  			///var createtime=new Date().toDateString();  			var date1 = new Date();  			var createtime = date1.getFullYear()+'-'+(date1.getMonth()+1)+'-'+date1.getDate()+' '+date1.getHours()+':'+date1.getMinutes()+':'+date1.getSeconds();  			var commentDiv='<div><ul style="padding-bottom:10px;margin-top:8px;border-bottom: 1px dashed #ccc;margin-left:8px;"><li><div><span>';  			commentDiv+=username;  			commentDiv+='</span>&nbsp;<span style="color:#aeaeae">';  			///commentDiv+=createtime.substr(0,10);  			commentDiv+=createtime;  			commentDiv+='</span></div><div style="clear:both;margin:5px auto;">';  			commentDiv+=comment;  			commentDiv+='</div></li></ul></div>\r\n';  			///alert(commentDiv);  			document.getElementById("commetcontent").innerHTML=commentDiv+document.getElementById("commetcontent").innerHTML;  			formComment.comment.value="";     		}  	  }    };    xmlhttp.open("POST","commentAjax.php",true);    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");    var ajaxStr="action=submitAjax&word="+encodeURI(word)+"&comment="+encodeURI(comment)+"&username="+encodeURI(username)+"&rnd="+ Math.random();    xmlhttp.send(ajaxStr);  }  function queryComment(word){     var xmlhttp;  	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari   		 xmlhttp=new XMLHttpRequest();    }else{// code for IE6, IE5    		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");    }   	xmlhttp.onreadystatechange=function(){      if (xmlhttp.readyState==4 && xmlhttp.status==200){        ////返回后做事情    		var responseText=xmlhttp.responseText;      		///alert(responseText);    		////需改的地方1    		//有异常.    		if(responseText!=""){  			var comment_arr=responseText.split("||");  			var comment_html="";  			///alert(comment_arr.length);  			for(var i=0;i<parseInt(comment_arr.length/4);i++){  				var word=comment_arr[i*4];  				var comment=comment_arr[i*4+1];  				var createtime=comment_arr[i*4+2];  				var username=comment_arr[i*4+3];  				var commentDiv='<div><ul style="padding-bottom:10px;margin-top:8px;border-bottom: 1px dashed #ccc;margin-left:8px;"><li><div><span>';  				commentDiv+=username;  				commentDiv+='</span>&nbsp;<span style="color:#aeaeae">';  				///commentDiv+=createtime.substr(0,10);  				commentDiv+=createtime;  				commentDiv+='</span></div><div style="clear:both;margin:5px auto;">';  				commentDiv+=comment;  				commentDiv+='</div></li></ul></div>\r\n';  				///alert(commentDiv);  				comment_html+=commentDiv;  			}  			document.getElementById("commetcontent").innerHTML=comment_html;  			    		}  	  }    };      var ajaxStr="commentAjax.php?action=queryAjax&word="+encodeURI(word)+"&rnd="+ Math.random();    ///alert(ajaxStr);    xmlhttp.open("GET",ajaxStr,true);    xmlhttp.send();  }  </script>  <div class="mt1" style="margin-left:0px;">  <dl class="tbox">      <dt> <strong>Leave a comment</strong></dt>      <dd>        <div class="dede_comment_post">          <form action="#" method="post" name="formComment">            <div class="dcmp-title"> <small>Welcome to leave a comment about this page!</small> </div>  		  <div style="margin:5px auto;">  		  <textarea style="width:98%" name="comment" rows="5" ></textarea>  		  </div>            <div>                Your name:                <input type="text" name="username" value="me" size="8" style="font-size:13px;">                <button type="button" onclick='beforeComment("mint")'>Submit</button>            </div>          </form>        </div>      </dd>  </dl>  </div>    <div style="margin-top:8px;">    <dl class="tbox">      <dt> <strong>Latest comments</strong><span style="float:right;line-height:25px;padding-right:8px;"><a href="comment.php?word=mint" target="_blank">Into the comment page&gt;&gt;</a></span></dt>  	<dd id="commetcontent">  	<!--  	<div>  	  <ul style="padding-bottom:10px;margin-top:8px;border-bottom: 1px dashed #ccc;margin-left:8px;">  		<li>   		  <div><span>某某</span>&nbsp;<span style="color:#aeaeae">2016-01-13</span></div>  		  <div style="clear:both;margin:5px auto;">联网相关的政策</div>  		</li>  	  </ul>  	</div>  	-->  	</dd>    </dl>  </div>        </div><!-- div_main_left -->     <div id="div_main_right" style="width:18%;margin-top:8px;float:right;border:0px solid blue;" >  <div>  <dl class="tbox light" style="margin-bottom:4px;">  	<dt class="light"><strong>More words</strong></dt>  	<dd class="light">  	<ul class="c1 ico2">  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="extensive.html">extensive</a>&nbsp;(168+25)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="tap.html">tap</a>&nbsp;(264+22)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="politically.html">politically</a>&nbsp;(171+17)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="insight.html">insight</a>&nbsp;(190+13)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="terrorist.html">terrorist</a>&nbsp;(290+18)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="treaty.html">treaty</a>&nbsp;(288+34)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="craft.html">craft</a>&nbsp;(185+11)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="crash.html">crash</a>&nbsp;(253+51)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="protest.html">protest</a>&nbsp;(288+33)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="justify.html">justify</a>&nbsp;(204+11)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="potentially.html">potentially</a>&nbsp;(272+7)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="DNA.html">DNA</a>&nbsp;(205+5)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="counter.html">counter</a>&nbsp;(208+18)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="offense.html">offense</a>&nbsp;(155+3)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="partly.html">partly</a>&nbsp;(173+15)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="shooting.html">shooting</a>&nbsp;(176+15)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="evolve.html">evolve</a>&nbsp;(174+2)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="singer.html">singer</a>&nbsp;(241+32)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="regularly.html">regularly</a>&nbsp;(297+32)</span>  		</li>  				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="relevant.html">relevant</a>&nbsp;(171+21)</span>  		</li>  			</ul>  	</dd>  </dl>  </div>  <div id="ads4">  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>  <!-- 160_600_20170509 -->  <ins class="adsbygoogle"       style="display:inline-block;width:160px;height:600px"       data-ad-client="ca-pub-7200850114163593"       data-ad-slot="1770400263"></ins>  <script>  (adsbygoogle = window.adsbygoogle || []).push({});  </script>  </div>  </div><!-- div_main_right结束 -->    <!--外部文件,先显示图片,再广告,再其它-->  <!--图+-->  <script>queryComment("mint");</script>    <div style="padding-top:2px;clear:both;"></">  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>  <!-- 970_90_20170421 -->  <ins class="adsbygoogle"       style="display:inline-block;width:970px;height:90px"       data-ad-client="ca-pub-7200850114163593"       data-ad-slot="5287223468"></ins>  <script>  (adsbygoogle = window.adsbygoogle || []).push({});  </script>  </div>  <div class="footer w960 center mt1 clear">  <div class="footer_body">    <div class="copyright">Copyright © 2016 sentencedict.com All Rights Reserved Contact:492108537@qq.com  </div>    </div><!-- footer_body -->  </div><!--footer w960 -->  <script>    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');    ga('create', 'UA-97689481-1', 'auto');    ga('send', 'pageview');  </script>  <!-- Go to www.addthis.com/dashboard to customize your tools -->  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-578e31c97244699a"></script></div><!-- pageDiv -->  </body>  </html>