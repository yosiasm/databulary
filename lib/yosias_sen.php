    <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">   <html>  <head>  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">  <title>Sentence dictionary online - Good sentence examples for every word!</title>  <meta name="description" content="Sentencedict.com is a online sentence dictionary, on which you can find good sentence examples for almost every word. We try our best to collect and create good sentences and wish you can make progress day by day!"/>  <link href="/common/dedecms.css" rel="stylesheet" media="screen" type="text/css">  </head>  <body>    <div class="pageDiv" style="border: 0px solid blue;">  <script>  function trim(str){  　return str.replace(/(^\s*)|(\s*$)/g,"");  }  var strDefault="Please input any word...";  function queryCheck(){  	if(formQuery.vagueSearch.checked){  		///formQuery.q.value=encodeURI(formQuery.word.value+" site:sentencedict.com");  		formQuery.q.value=formQuery.word.value+" site:sentencedict.com";  		var temp=formQuery.action;  		formQuery.action="http://www.google.com/search";  		formQuery.method="get";  		formQuery.target="_blank";  		//为了wo参数不提交  		formQuery.word.disabled=true;  		formQuery.submit();  		formQuery.action=temp;  		formQuery.method="post";  		formQuery.target="_self";  		formQuery.word.disabled=false;  	}else{  		formQuery.word.value=trim(formQuery.word.value);  		var word=formQuery.word.value;  		if(word==""||word==strDefault){  			alert("Please input any word!");return;  		}  		formQuery.submit();  	}  	var temp="1";  	if(!formQuery.directGo.checked){  		temp="0";  	}  	setCookie("directGo",temp,12);  	var temp="1";  	if(!formQuery.vagueSearch.checked){  		temp="0";  	}  	setCookie("vagueSearch",temp,12);  }  function getCookie(name)  {  	var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");  	if(arr=document.cookie.match(reg))  		return (arr[2]);  	else  		return null;  }  function setCookie(cookiename,cookievalue,hours){  	var date=new Date();  	date.setTime(date.getTime()+Number(hours)*3600*1000);  	document.cookie=cookiename+"="+cookievalue+";path=/;expires="+date.toGMTString();  }  </script>  <div class="header">  <table width="100%" style="margin-bottom:4px;font-size:14px;" height=65 cellspacing=0 border=0 >  <tr>      <td width=100 valign="bottom" style="padding:0px;">        <a href="/">        <img src="/images/logo.jpg" style="vertical-align:bottom;margin-bottom:1px;border:0px solid #dddddd" alt="Sentencedict.com" height=50 width=150>        </a>      </td>      <td valign="bottom">  <form method="post" style="margin:2px;margin-left:10px;" name="formQuery" action="/wordQueryDo.php">  <input type='text' style='display:none;'/>  <input type="hidden" name="q" value="">  <input type="text" name="word" maxlength=100 style="float:left;margin-bottom:3px;width:360px;height:28px;line-height:26px;padding-left:6px;font-size:16px;border:1px solid #3D7A01;border-top:1px solid #67CD01;border-left:1px solid #67CD01;color:gray;"   size=20 value="Please input any word..." onfocus="if(this.value==strDefault){this.value='';this.style.color='black';}" onblur="if(this.value==''){this.value=strDefault;this.style.color='gray';}" onkeydown="if(event.keyCode==13){queryCheck();}"/>  <input type="button" style="float:left;width:70px;height:30px;margin-left:4px;cursor:pointer;font-size:14px;" onclick="queryCheck()" value="Search"/><div style="margin-top:10px;float:left;">&nbsp;<input type="checkbox" name="directGo" style="margin-right:2px;margin-bottom:2px;margin-left:2px;" value="1" checked>Directly to word page&nbsp;<span title="use vague search provided by google" style=""><input type="checkbox" name="vagueSearch" style="margin-right:2px;margin-bottom:2px;" value="1" onclick="if(this.checked){formQuery.directGo.disabled=true;}else{formQuery.directGo.disabled=false;}"/>Vauge search(google)</span>  </div>  </form>  </td>  </tr>  </table>  <script>  var temp=getCookie("directGo");  //此情况修改directGo的checked状态  if(temp=="0"){    formQuery.directGo.checked=false;  }  var temp=getCookie("vagueSearch");  //此情况修改vagueSearch的checked状态  if(temp=="1"){    formQuery.vagueSearch.checked=true;  }  </script>  <div class="module blue mT10 wrapper w963">  <div id="navMenu" style="background-color:#199507;border:0px solid red;background-image:url('/images/green_skin.png');background-position:0 -72px;background-repeat:repeat-x;">  <ul>  	<li><a href="/"><span>Home</span></a></li>  	<li><a href="/top1000/"><span>Top1000 word</span></a></li>  	<li><a href="/top5000/"><span>Top5000 word</span></a></li>  	<li><a href="/phrase/"><span>Phrases</span></a></li>  	<!--<li><a href="/conjunction/"><span>Conjunction</span></a></li>-->  	<li><a href="/game/"><span>Game</span></a></li>  	<li><a href="/getSImage.php"><span>Sentence into pic</span></a></li>  	<li><a href="/feedback.php"><span>Feedback</span></a></li>  </ul>  </div><!-- //navMenu -->    </div><!-- //module blue... -->  <div>  </div>  </div><div class="place" style="color:#428c5b;margin-top:8px;margin-bottom:0px;height:26px;line-height:26px;">  	<a href="/">Home</a>(all the words)  </div><!--place-->    <div id="div_main_left" style="margin-top:6px;border:0px solid blue;">  <div id="div_content" style="border-bottom:1px solid #aaaaaa;">    <div id="div_left" style="width: 33%; float: left; border: 0px solid blue;">  <div class="commend mt1" style="margin-top: 0px;">  <dl class="tbox light" style="margin-bottom:0px;border-bottom:0px solid #DADADA;">  	<dd class="light" style="border: 0px solid blue;">  	<ul class="c1 ico2" style="padding: 0px;">  			<li class="dotline"><a style="color: #256EB1;" href="/homeotherm.html" target="_blank">homeotherm in a sentence</a>&nbsp;(5)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/investable.html" target="_blank">investable in a sentence</a>&nbsp;(8)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/tissue paper.html" target="_blank">tissue paper in a sentence</a>&nbsp;(61)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/tuck up.html" target="_blank">tuck up in a sentence</a>&nbsp;(31)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/to excess.html" target="_blank">to excess in a sentence</a>&nbsp;(31+3)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/common room.html" target="_blank">common room in a sentence</a>&nbsp;(20)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/the like.html" target="_blank">the like in a sentence</a>&nbsp;(201+1)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/beach ball.html" target="_blank">beach ball in a sentence</a>&nbsp;(28)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/ghostwrite.html" target="_blank">ghostwrite in a sentence</a>&nbsp;(8)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/cross-question.html" target="_blank">cross-question in a sentence</a>&nbsp;(6)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/rebind.html" target="_blank">rebind in a sentence</a>&nbsp;(40)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/axolotl.html" target="_blank">axolotl in a sentence</a>&nbsp;(18)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/arbor day.html" target="_blank">arbor day in a sentence</a>&nbsp;(24)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/bookshop.html" target="_blank">bookshop in a sentence</a>&nbsp;(89+5)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/pool cue.html" target="_blank">pool cue in a sentence</a>&nbsp;(6)  		<span style="color:#428c5b">12-14</span></li>  			</ul>  	</dd>  </dl>  </div>  </div>  <!--div_left  -->    <div id="div_left" style="width: 33%; float: left; border: 0px solid blue;">  <div class="commend mt1" style="margin-top: 0px;">  <dl class="tbox light" style="margin-bottom:0px;border-bottom:0px solid #DADADA;">  	<dd class="light" style="border: 0px solid blue;">  	<ul class="c1 ico2" style="padding: 0px;">  			<li class="dotline"><a style="color: #256EB1;" href="/park bench.html" target="_blank">park bench in a sentence</a>&nbsp;(34+5)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/name-calling.html" target="_blank">name-calling in a sentence</a>&nbsp;(26)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/unopposed.html" target="_blank">unopposed in a sentence</a>&nbsp;(31)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/chessboard.html" target="_blank">chessboard in a sentence</a>&nbsp;(37)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/clitoris.html" target="_blank">clitoris in a sentence</a>&nbsp;(61)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/safe area.html" target="_blank">safe area in a sentence</a>&nbsp;(13+1)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/sangria.html" target="_blank">sangria in a sentence</a>&nbsp;(18)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/conestoga.html" target="_blank">conestoga in a sentence</a>&nbsp;(13)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/bonbon.html" target="_blank">bonbon in a sentence</a>&nbsp;(10)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/hypercube.html" target="_blank">hypercube in a sentence</a>&nbsp;(25)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/john the baptist.html" target="_blank">john the baptist in a sentence</a>&nbsp;(41)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/yuan dynasty.html" target="_blank">yuan dynasty in a sentence</a>&nbsp;(56)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/hang gliding.html" target="_blank">hang gliding in a sentence</a>&nbsp;(11)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/aline.html" target="_blank">aline in a sentence</a>&nbsp;(15)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/mongol.html" target="_blank">mongol in a sentence</a>&nbsp;(67)  		<span style="color:#428c5b">12-14</span></li>  			</ul>  	</dd>  </dl>  </div>  </div>  <!--div_left  -->    <div id="div_left" style="width: 33%; float: left; border: 0px solid blue;">  <div class="commend mt1" style="margin-top: 0px;">  <dl class="tbox light" style="margin-bottom:0px;border-bottom:0px solid #DADADA;">  	<dd class="light" style="border: 0px solid blue;">  	<ul class="c1 ico2" style="padding: 0px;">  			<li class="dotline"><a style="color: #256EB1;" href="/thermometry.html" target="_blank">thermometry in a sentence</a>&nbsp;(11)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/humiliatingly.html" target="_blank">humiliatingly in a sentence</a>&nbsp;(8)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/alligator clip.html" target="_blank">alligator clip in a sentence</a>&nbsp;(6)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/metabolic rate.html" target="_blank">metabolic rate in a sentence</a>&nbsp;(68+2)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/introversive.html" target="_blank">introversive in a sentence</a>&nbsp;(21)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/racialist.html" target="_blank">racialist in a sentence</a>&nbsp;(6)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/lily of the valley.html" target="_blank">lily of the valley in a sentence</a>&nbsp;(25)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/to step forward.html" target="_blank">to step forward in a sentence</a>&nbsp;(15)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/high-density lipoprotein.html" target="_blank">high-density lipoprotein in a sentence</a>&nbsp;(19)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/newborns.html" target="_blank">newborns in a sentence</a>&nbsp;(103)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/swiftlet.html" target="_blank">swiftlet in a sentence</a>&nbsp;(5)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/low-density lipoprotein.html" target="_blank">low-density lipoprotein in a sentence</a>&nbsp;(25)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/soil conditioner.html" target="_blank">soil conditioner in a sentence</a>&nbsp;(16)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/cost-cutting.html" target="_blank">cost-cutting in a sentence</a>&nbsp;(50+1)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/layering.html" target="_blank">layering in a sentence</a>&nbsp;(49)  		<span style="color:#428c5b">12-13</span></li>  			</ul>  	</dd>  </dl>  </div>  </div>  <!--div_left  -->  <div style="clear:both"></div><!--让换行符下来-->    <div style="clear:both;margin-top:5px;margin-bottom:5px;margin-left:15px">  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>  <!-- 970_90_20170421 -->  <ins class="adsbygoogle"       style="display:inline-block;width:970px;height:90px"       data-ad-client="ca-pub-7200850114163593"       data-ad-slot="5287223468"></ins>  <script>  (adsbygoogle = window.adsbygoogle || []).push({});  </script>  </div>    <div id="div_left" style="width: 33%; float: left; border: 0px solid blue;">  <div class="commend mt1" style="margin-top: 0px;">  <dl class="tbox light" style="margin-bottom:0px;border-bottom:0px solid #DADADA;">  	<dd class="light" style="border: 0px solid blue;">  	<ul class="c1 ico2" style="padding: 0px;">  			<li class="dotline"><a style="color: #256EB1;" href="/seles.html" target="_blank">seles in a sentence</a>&nbsp;(36)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/get wind.html" target="_blank">get wind in a sentence</a>&nbsp;(20)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/fragmenting.html" target="_blank">fragmenting in a sentence</a>&nbsp;(19)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/cruise missile.html" target="_blank">cruise missile in a sentence</a>&nbsp;(41)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/reb.html" target="_blank">reb in a sentence</a>&nbsp;(17)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/tenderer.html" target="_blank">tenderer in a sentence</a>&nbsp;(39)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/cade.html" target="_blank">cade in a sentence</a>&nbsp;(17)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/preach down.html" target="_blank">preach down in a sentence</a>&nbsp;(5+1)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/soft-soap.html" target="_blank">soft-soap in a sentence</a>&nbsp;(11)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/clannish.html" target="_blank">clannish in a sentence</a>&nbsp;(20)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/talkativeness.html" target="_blank">talkativeness in a sentence</a>&nbsp;(14)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/embedment.html" target="_blank">embedment in a sentence</a>&nbsp;(11)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/inge.html" target="_blank">inge in a sentence</a>&nbsp;(14+2)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/fluxing.html" target="_blank">fluxing in a sentence</a>&nbsp;(29)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/day rate.html" target="_blank">day rate in a sentence</a>&nbsp;(11)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/catchword.html" target="_blank">catchword in a sentence</a>&nbsp;(17)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/unopened.html" target="_blank">unopened in a sentence</a>&nbsp;(59+1)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/team sport.html" target="_blank">team sport in a sentence</a>&nbsp;(20)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/even-handed.html" target="_blank">even-handed in a sentence</a>&nbsp;(23)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/substituting.html" target="_blank">substituting in a sentence</a>&nbsp;(86+1)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/gouache.html" target="_blank">gouache in a sentence</a>&nbsp;(25)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/have a stake in.html" target="_blank">have a stake in in a sentence</a>&nbsp;(16)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/gunboat diplomacy.html" target="_blank">gunboat diplomacy in a sentence</a>&nbsp;(8)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/negative direction.html" target="_blank">negative direction in a sentence</a>&nbsp;(17)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/ali.html" target="_blank">ali in a sentence</a>&nbsp;(210)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/positive direction.html" target="_blank">positive direction in a sentence</a>&nbsp;(27)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/clothed.html" target="_blank">clothed in a sentence</a>&nbsp;(114+4)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/air-conditioner.html" target="_blank">air-conditioner in a sentence</a>&nbsp;(38)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/sirius.html" target="_blank">sirius in a sentence</a>&nbsp;(59+1)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/build upon.html" target="_blank">build upon in a sentence</a>&nbsp;(29)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/Hanseatic.html" target="_blank">Hanseatic in a sentence</a>&nbsp;(24)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/someway.html" target="_blank">someway in a sentence</a>&nbsp;(14)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/folding chair.html" target="_blank">folding chair in a sentence</a>&nbsp;(21)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/garden chair.html" target="_blank">garden chair in a sentence</a>&nbsp;(9)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/wing chair.html" target="_blank">wing chair in a sentence</a>&nbsp;(10)  		<span style="color:#428c5b">12-14</span></li>  			</ul>  	</dd>  </dl>  </div>  </div>  <!--div_left  -->    <div id="div_left" style="width: 33%; float: left; border: 0px solid blue;">  <div class="commend mt1" style="margin-top: 0px;">  <dl class="tbox light" style="margin-bottom:0px;border-bottom:0px solid #DADADA;">  	<dd class="light" style="border: 0px solid blue;">  	<ul class="c1 ico2" style="padding: 0px;">  			<li class="dotline"><a style="color: #256EB1;" href="/ansatz.html" target="_blank">ansatz in a sentence</a>&nbsp;(5)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/argyle.html" target="_blank">argyle in a sentence</a>&nbsp;(16+1)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/outcropping.html" target="_blank">outcropping in a sentence</a>&nbsp;(26)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/prerecorded.html" target="_blank">prerecorded in a sentence</a>&nbsp;(17)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/george washington carver.html" target="_blank">george washington carver in a sentence</a>&nbsp;(9)  		<span style="color:#428c5b">12-14</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/pulmonary stenosis.html" target="_blank">pulmonary stenosis in a sentence</a>&nbsp;(6)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/disseminator.html" target="_blank">disseminator in a sentence</a>&nbsp;(28)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/invariability.html" target="_blank">invariability in a sentence</a>&nbsp;(26)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/semi-automatic.html" target="_blank">semi-automatic in a sentence</a>&nbsp;(63)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/kathmandu.html" target="_blank">kathmandu in a sentence</a>&nbsp;(34)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/at issue.html" target="_blank">at issue in a sentence</a>&nbsp;(85)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/old world.html" target="_blank">old world in a sentence</a>&nbsp;(126+2)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/nutria.html" target="_blank">nutria in a sentence</a>&nbsp;(15)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/premature infant.html" target="_blank">premature infant in a sentence</a>&nbsp;(24)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/florescent.html" target="_blank">florescent in a sentence</a>&nbsp;(22)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/synthesizer.html" target="_blank">synthesizer in a sentence</a>&nbsp;(106+1)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/echt.html" target="_blank">echt in a sentence</a>&nbsp;(5)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/offsides.html" target="_blank">offsides in a sentence</a>&nbsp;(21)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/Isabel.html" target="_blank">Isabel in a sentence</a>&nbsp;(160+3)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/north carolina.html" target="_blank">north carolina in a sentence</a>&nbsp;(207+1)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/draftee.html" target="_blank">draftee in a sentence</a>&nbsp;(7)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/calisthenic.html" target="_blank">calisthenic in a sentence</a>&nbsp;(5)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/frederick law olmsted.html" target="_blank">frederick law olmsted in a sentence</a>&nbsp;(8)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/darwin.html" target="_blank">darwin in a sentence</a>&nbsp;(172+3)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/by courtesy of.html" target="_blank">by courtesy of in a sentence</a>&nbsp;(19)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/sampler.html" target="_blank">sampler in a sentence</a>&nbsp;(51)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/excelsior.html" target="_blank">excelsior in a sentence</a>&nbsp;(31)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/rostra.html" target="_blank">rostra in a sentence</a>&nbsp;(24)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/crosshatch.html" target="_blank">crosshatch in a sentence</a>&nbsp;(18)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/greenly.html" target="_blank">greenly in a sentence</a>&nbsp;(10)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/hypertrophic.html" target="_blank">hypertrophic in a sentence</a>&nbsp;(101)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/kilimanjaro.html" target="_blank">kilimanjaro in a sentence</a>&nbsp;(24)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/lymph node.html" target="_blank">lymph node in a sentence</a>&nbsp;(127)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/high-performance.html" target="_blank">high-performance in a sentence</a>&nbsp;(189)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/angelus.html" target="_blank">angelus in a sentence</a>&nbsp;(12)  		<span style="color:#428c5b">12-13</span></li>  			</ul>  	</dd>  </dl>  </div>  </div>  <!--div_left  -->    <div id="div_left" style="width: 33%; float: left; border: 0px solid blue;">  <div class="commend mt1" style="margin-top: 0px;">  <dl class="tbox light" style="margin-bottom:0px;border-bottom:0px solid #DADADA;">  	<dd class="light" style="border: 0px solid blue;">  	<ul class="c1 ico2" style="padding: 0px;">  			<li class="dotline"><a style="color: #256EB1;" href="/goodish.html" target="_blank">goodish in a sentence</a>&nbsp;(19)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/gila.html" target="_blank">gila in a sentence</a>&nbsp;(7)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/badness.html" target="_blank">badness in a sentence</a>&nbsp;(30)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/wisher.html" target="_blank">wisher in a sentence</a>&nbsp;(8)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/devourer.html" target="_blank">devourer in a sentence</a>&nbsp;(21)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/mental picture.html" target="_blank">mental picture in a sentence</a>&nbsp;(27+1)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/plateful.html" target="_blank">plateful in a sentence</a>&nbsp;(20+1)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/veronica.html" target="_blank">veronica in a sentence</a>&nbsp;(69+2)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/ldl.html" target="_blank">ldl in a sentence</a>&nbsp;(99)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/tubing.html" target="_blank">tubing in a sentence</a>&nbsp;(145+1)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/commercialise.html" target="_blank">commercialise in a sentence</a>&nbsp;(19)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/IMS.html" target="_blank">IMS in a sentence</a>&nbsp;(69)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/urban planning.html" target="_blank">urban planning in a sentence</a>&nbsp;(46)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/moralizing.html" target="_blank">moralizing in a sentence</a>&nbsp;(24)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/cardiorespiratory.html" target="_blank">cardiorespiratory in a sentence</a>&nbsp;(16)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/media analysis.html" target="_blank">media analysis in a sentence</a>&nbsp;(7)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/expectable.html" target="_blank">expectable in a sentence</a>&nbsp;(21)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/auntie.html" target="_blank">auntie in a sentence</a>&nbsp;(61+2)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/acceptant.html" target="_blank">acceptant in a sentence</a>&nbsp;(17)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/leatherette.html" target="_blank">leatherette in a sentence</a>&nbsp;(18)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/squeeze through.html" target="_blank">squeeze through in a sentence</a>&nbsp;(22+1)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/geiger.html" target="_blank">geiger in a sentence</a>&nbsp;(19)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/londoner.html" target="_blank">londoner in a sentence</a>&nbsp;(28)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/mideast.html" target="_blank">mideast in a sentence</a>&nbsp;(22)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/structural analysis.html" target="_blank">structural analysis in a sentence</a>&nbsp;(46)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/jeddah.html" target="_blank">jeddah in a sentence</a>&nbsp;(20)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/west indies.html" target="_blank">west indies in a sentence</a>&nbsp;(86)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/toss up.html" target="_blank">toss up in a sentence</a>&nbsp;(16+1)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/decontrol.html" target="_blank">decontrol in a sentence</a>&nbsp;(9)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/homonymic.html" target="_blank">homonymic in a sentence</a>&nbsp;(16)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/phrasebook.html" target="_blank">phrasebook in a sentence</a>&nbsp;(19)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/food waste.html" target="_blank">food waste in a sentence</a>&nbsp;(25)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/setting down.html" target="_blank">setting down in a sentence</a>&nbsp;(13)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/mainmast.html" target="_blank">mainmast in a sentence</a>&nbsp;(17)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/epidemicity.html" target="_blank">epidemicity in a sentence</a>&nbsp;(6)  		<span style="color:#428c5b">12-13</span></li>  			</ul>  	</dd>  </dl>  </div>  </div>  <!--div_left  -->    <div style="clear:both"></div><!--让换行符下来-->  <div id="ads4" style="padding-top:0px;">  </div>  </div><!--div_content-->    <script>  	function goPage(pagePre,action){  		var goPageNo=parseInt(document.getElementById("goPageNo").value,10);  		var pageCountNo=parseInt(document.getElementById("pageCountNo").value,10);  		///alert(goPageNo);  		///alert(pageCountNo);  		//这样确实ok啊,把输入为空等情况都剔除了.白名单制度.  		if((goPageNo<=pageCountNo) && (goPageNo>=1)){  		}else{  			alert("Please input the correct page number!");  			return;  		}  		var href1;  		if(goPageNo==1){  			href1=pagePre;  			if(action=="word"){  				href1="/";  			}  		}else{  			href1=pagePre+"list_"+goPageNo+".html";  		}  		window.location.href=href1;  	}  </script>  <div style="text-align:center;margin-top:10px;">  	  Total&nbsp;59298, 150&nbsp;Per page&nbsp;      1/396&nbsp;             <a href="/"><span style="margin-right:2px;">«</span>first</a>&nbsp;             <a href="/word/list_2.html">next<span style="margin-left:2px;">›</span></a>&nbsp;             <a href="/word/list_396.html">last<span style="margin-left:2px;">»</span></a>&nbsp;            <input type="hidden" id="pageCountNo" value="396" />        goto<input style="margin:auto 2px;" type="text" size=3 id="goPageNo" value="1"  onkeydown="if(event.keyCode==13){goPage('/word/','word');}" /><input type="button" style="margin-left:3px;cursor:hand;" value="ok" onclick="goPage('/word/','word');" />      </div>  </div><!-- div_main_left -->   <!--  <div id="ads2" style="margin-top:8px;width:18%;height:1120px;float:left;border:0px solid blue;">  </div>--><!-- div_main_right,ads2-->  <!--外部文件,先显示图片,再广告,再其它-->  <div style="padding-top:2px;clear:both;"></">  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>  <!-- 970_90_20170421 -->  <ins class="adsbygoogle"       style="display:inline-block;width:970px;height:90px"       data-ad-client="ca-pub-7200850114163593"       data-ad-slot="5287223468"></ins>  <script>  (adsbygoogle = window.adsbygoogle || []).push({});  </script>  </div>  <div class="footer w960 center mt1 clear">  <div class="footer_body">    <div class="copyright">Copyright © 2016 sentencedict.com All Rights Reserved Contact:492108537@qq.com  </div>    </div><!-- footer_body -->  </div><!--footer w960 -->  <script>    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');    ga('create', 'UA-97689481-1', 'auto');    ga('send', 'pageview');  </script>  <!-- Go to www.addthis.com/dashboard to customize your tools -->  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-578e31c97244699a"></script></div><!-- pageDiv -->  </body>  </html>