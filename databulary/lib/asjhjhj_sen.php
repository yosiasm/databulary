    <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">   <html>  <head>  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">  <title>Sentence dictionary online - Good sentence examples for every word!</title>  <meta name="description" content="Sentencedict.com is a online sentence dictionary, on which you can find good sentence examples for almost every word. We try our best to collect and create good sentences and wish you can make progress day by day!"/>  <link href="/common/dedecms.css" rel="stylesheet" media="screen" type="text/css">  </head>  <body>    <div class="pageDiv" style="border: 0px solid blue;">  <script>  function trim(str){  　return str.replace(/(^\s*)|(\s*$)/g,"");  }  var strDefault="Please input any word...";  function queryCheck(){  	if(formQuery.vagueSearch.checked){  		///formQuery.q.value=encodeURI(formQuery.word.value+" site:sentencedict.com");  		formQuery.q.value=formQuery.word.value+" site:sentencedict.com";  		var temp=formQuery.action;  		formQuery.action="http://www.google.com/search";  		formQuery.method="get";  		formQuery.target="_blank";  		//为了wo参数不提交  		formQuery.word.disabled=true;  		formQuery.submit();  		formQuery.action=temp;  		formQuery.method="post";  		formQuery.target="_self";  		formQuery.word.disabled=false;  	}else{  		formQuery.word.value=trim(formQuery.word.value);  		var word=formQuery.word.value;  		if(word==""||word==strDefault){  			alert("Please input any word!");return;  		}  		formQuery.submit();  	}  	var temp="1";  	if(!formQuery.directGo.checked){  		temp="0";  	}  	setCookie("directGo",temp,12);  	var temp="1";  	if(!formQuery.vagueSearch.checked){  		temp="0";  	}  	setCookie("vagueSearch",temp,12);  }  function getCookie(name)  {  	var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");  	if(arr=document.cookie.match(reg))  		return (arr[2]);  	else  		return null;  }  function setCookie(cookiename,cookievalue,hours){  	var date=new Date();  	date.setTime(date.getTime()+Number(hours)*3600*1000);  	document.cookie=cookiename+"="+cookievalue+";path=/;expires="+date.toGMTString();  }  </script>  <div class="header">  <table width="100%" style="margin-bottom:4px;font-size:14px;" height=65 cellspacing=0 border=0 >  <tr>      <td width=100 valign="bottom" style="padding:0px;">        <a href="/">        <img src="/images/logo.jpg" style="vertical-align:bottom;margin-bottom:1px;border:0px solid #dddddd" alt="Sentencedict.com" height=50 width=150>        </a>      </td>      <td valign="bottom">  <form method="post" style="margin:2px;margin-left:10px;" name="formQuery" action="/wordQueryDo.php">  <input type='text' style='display:none;'/>  <input type="hidden" name="q" value="">  <input type="text" name="word" maxlength=100 style="float:left;margin-bottom:3px;width:360px;height:28px;line-height:26px;padding-left:6px;font-size:16px;border:1px solid #3D7A01;border-top:1px solid #67CD01;border-left:1px solid #67CD01;color:gray;"   size=20 value="Please input any word..." onfocus="if(this.value==strDefault){this.value='';this.style.color='black';}" onblur="if(this.value==''){this.value=strDefault;this.style.color='gray';}" onkeydown="if(event.keyCode==13){queryCheck();}"/>  <input type="button" style="float:left;width:70px;height:30px;margin-left:4px;cursor:pointer;font-size:14px;" onclick="queryCheck()" value="Search"/><div style="margin-top:10px;float:left;">&nbsp;<input type="checkbox" name="directGo" style="margin-right:2px;margin-bottom:2px;margin-left:2px;" value="1" checked>Directly to word page&nbsp;<span title="use vague search provided by google" style=""><input type="checkbox" name="vagueSearch" style="margin-right:2px;margin-bottom:2px;" value="1" onclick="if(this.checked){formQuery.directGo.disabled=true;}else{formQuery.directGo.disabled=false;}"/>Vauge search(google)</span>  </div>  </form>  </td>  </tr>  </table>  <script>  var temp=getCookie("directGo");  //此情况修改directGo的checked状态  if(temp=="0"){    formQuery.directGo.checked=false;  }  var temp=getCookie("vagueSearch");  //此情况修改vagueSearch的checked状态  if(temp=="1"){    formQuery.vagueSearch.checked=true;  }  </script>  <div class="module blue mT10 wrapper w963">  <div id="navMenu" style="background-color:#199507;border:0px solid red;background-image:url('/images/green_skin.png');background-position:0 -72px;background-repeat:repeat-x;">  <ul>  	<li><a href="/"><span>Home</span></a></li>  	<li><a href="/top1000/"><span>Top1000 word</span></a></li>  	<li><a href="/top5000/"><span>Top5000 word</span></a></li>  	<li><a href="/phrase/"><span>Phrases</span></a></li>  	<!--<li><a href="/conjunction/"><span>Conjunction</span></a></li>-->  	<li><a href="/game/"><span>Game</span></a></li>  	<li><a href="/getSImage.php"><span>Sentence into pic</span></a></li>  	<li><a href="/feedback.php"><span>Feedback</span></a></li>  </ul>  </div><!-- //navMenu -->    </div><!-- //module blue... -->  <div>  </div>  </div><div class="place" style="color:#428c5b;margin-top:8px;margin-bottom:0px;height:26px;line-height:26px;">  	<a href="/">Home</a>(all the words)  </div><!--place-->    <div id="div_main_left" style="margin-top:6px;border:0px solid blue;">  <div id="div_content" style="border-bottom:1px solid #aaaaaa;">    <div id="div_left" style="width: 33%; float: left; border: 0px solid blue;">  <div class="commend mt1" style="margin-top: 0px;">  <dl class="tbox light" style="margin-bottom:0px;border-bottom:0px solid #DADADA;">  	<dd class="light" style="border: 0px solid blue;">  	<ul class="c1 ico2" style="padding: 0px;">  			<li class="dotline"><a style="color: #256EB1;" href="/black ice.html" target="_blank">black ice in a sentence</a>&nbsp;(20)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/forlornness.html" target="_blank">forlornness in a sentence</a>&nbsp;(10)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/oncological.html" target="_blank">oncological in a sentence</a>&nbsp;(20)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/nurse practitioner.html" target="_blank">nurse practitioner in a sentence</a>&nbsp;(23)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/thiamine.html" target="_blank">thiamine in a sentence</a>&nbsp;(18)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/paleontological.html" target="_blank">paleontological in a sentence</a>&nbsp;(21)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/implicitness.html" target="_blank">implicitness in a sentence</a>&nbsp;(22)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/in collaboration.html" target="_blank">in collaboration in a sentence</a>&nbsp;(58+1)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/stand-in.html" target="_blank">stand-in in a sentence</a>&nbsp;(44)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/institute to.html" target="_blank">institute to in a sentence</a>&nbsp;(30)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/short break.html" target="_blank">short break in a sentence</a>&nbsp;(20+2)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/holiday resort.html" target="_blank">holiday resort in a sentence</a>&nbsp;(25+1)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/eclectically.html" target="_blank">eclectically in a sentence</a>&nbsp;(6)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/retrusion.html" target="_blank">retrusion in a sentence</a>&nbsp;(7)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/demandingly.html" target="_blank">demandingly in a sentence</a>&nbsp;(5)  		<span style="color:#428c5b">12-13</span></li>  			</ul>  	</dd>  </dl>  </div>  </div>  <!--div_left  -->    <div id="div_left" style="width: 33%; float: left; border: 0px solid blue;">  <div class="commend mt1" style="margin-top: 0px;">  <dl class="tbox light" style="margin-bottom:0px;border-bottom:0px solid #DADADA;">  	<dd class="light" style="border: 0px solid blue;">  	<ul class="c1 ico2" style="padding: 0px;">  			<li class="dotline"><a style="color: #256EB1;" href="/heavy load.html" target="_blank">heavy load in a sentence</a>&nbsp;(66+3)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/accouchement.html" target="_blank">accouchement in a sentence</a>&nbsp;(8)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/galloway.html" target="_blank">galloway in a sentence</a>&nbsp;(17)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/rugae.html" target="_blank">rugae in a sentence</a>&nbsp;(6)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/mb.html" target="_blank">mb in a sentence</a>&nbsp;(83)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/general counsel.html" target="_blank">general counsel in a sentence</a>&nbsp;(27)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/be up to the standard.html" target="_blank">be up to the standard in a sentence</a>&nbsp;(9)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/serums.html" target="_blank">serums in a sentence</a>&nbsp;(35)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/showmanship.html" target="_blank">showmanship in a sentence</a>&nbsp;(22)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/theia.html" target="_blank">theia in a sentence</a>&nbsp;(6)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/blissfulness.html" target="_blank">blissfulness in a sentence</a>&nbsp;(7)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/latticed.html" target="_blank">latticed in a sentence</a>&nbsp;(26)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/physical exertion.html" target="_blank">physical exertion in a sentence</a>&nbsp;(15+1)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/calder.html" target="_blank">calder in a sentence</a>&nbsp;(42)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/west africa.html" target="_blank">west africa in a sentence</a>&nbsp;(62+3)  		<span style="color:#428c5b">12-13</span></li>  			</ul>  	</dd>  </dl>  </div>  </div>  <!--div_left  -->    <div id="div_left" style="width: 33%; float: left; border: 0px solid blue;">  <div class="commend mt1" style="margin-top: 0px;">  <dl class="tbox light" style="margin-bottom:0px;border-bottom:0px solid #DADADA;">  	<dd class="light" style="border: 0px solid blue;">  	<ul class="c1 ico2" style="padding: 0px;">  			<li class="dotline"><a style="color: #256EB1;" href="/shoeless.html" target="_blank">shoeless in a sentence</a>&nbsp;(12)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/friendly fire.html" target="_blank">friendly fire in a sentence</a>&nbsp;(19)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/xx.html" target="_blank">xx in a sentence</a>&nbsp;(71+1)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/geostrategic.html" target="_blank">geostrategic in a sentence</a>&nbsp;(14)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/dispar.html" target="_blank">dispar in a sentence</a>&nbsp;(6)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/poor law.html" target="_blank">poor law in a sentence</a>&nbsp;(44)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/sirrah.html" target="_blank">sirrah in a sentence</a>&nbsp;(11)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/copyright law.html" target="_blank">copyright law in a sentence</a>&nbsp;(23)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/genetic endowment.html" target="_blank">genetic endowment in a sentence</a>&nbsp;(6)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/tooth enamel.html" target="_blank">tooth enamel in a sentence</a>&nbsp;(9)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/east coast.html" target="_blank">east coast in a sentence</a>&nbsp;(167+6)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/cosmogenic.html" target="_blank">cosmogenic in a sentence</a>&nbsp;(5)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/bangladeshi.html" target="_blank">bangladeshi in a sentence</a>&nbsp;(18)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/product development.html" target="_blank">product development in a sentence</a>&nbsp;(145)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/interest-free.html" target="_blank">interest-free in a sentence</a>&nbsp;(42+1)  		<span style="color:#428c5b">12-12</span></li>  			</ul>  	</dd>  </dl>  </div>  </div>  <!--div_left  -->  <div style="clear:both"></div><!--让换行符下来-->    <div style="clear:both;margin-top:5px;margin-bottom:5px;margin-left:15px">  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>  <!-- 970_90_20170421 -->  <ins class="adsbygoogle"       style="display:inline-block;width:970px;height:90px"       data-ad-client="ca-pub-7200850114163593"       data-ad-slot="5287223468"></ins>  <script>  (adsbygoogle = window.adsbygoogle || []).push({});  </script>  </div>    <div id="div_left" style="width: 33%; float: left; border: 0px solid blue;">  <div class="commend mt1" style="margin-top: 0px;">  <dl class="tbox light" style="margin-bottom:0px;border-bottom:0px solid #DADADA;">  	<dd class="light" style="border: 0px solid blue;">  	<ul class="c1 ico2" style="padding: 0px;">  			<li class="dotline"><a style="color: #256EB1;" href="/principalship.html" target="_blank">principalship in a sentence</a>&nbsp;(10)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/projectionist.html" target="_blank">projectionist in a sentence</a>&nbsp;(23)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/kinfolk.html" target="_blank">kinfolk in a sentence</a>&nbsp;(9)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/appealable.html" target="_blank">appealable in a sentence</a>&nbsp;(9)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/platte.html" target="_blank">platte in a sentence</a>&nbsp;(33)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/inclinable.html" target="_blank">inclinable in a sentence</a>&nbsp;(7)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/bronze medal.html" target="_blank">bronze medal in a sentence</a>&nbsp;(43+1)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/quiesce.html" target="_blank">quiesce in a sentence</a>&nbsp;(20)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/root up.html" target="_blank">root up in a sentence</a>&nbsp;(11+1)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/palingenesis.html" target="_blank">palingenesis in a sentence</a>&nbsp;(8)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/advertising budget.html" target="_blank">advertising budget in a sentence</a>&nbsp;(24)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/gb.html" target="_blank">gb in a sentence</a>&nbsp;(102)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/ezekiel.html" target="_blank">ezekiel in a sentence</a>&nbsp;(22)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/master card.html" target="_blank">master card in a sentence</a>&nbsp;(17)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/business relationship.html" target="_blank">business relationship in a sentence</a>&nbsp;(44)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/roll in the hay.html" target="_blank">roll in the hay in a sentence</a>&nbsp;(6)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/boldfaced.html" target="_blank">boldfaced in a sentence</a>&nbsp;(14)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/coconut milk.html" target="_blank">coconut milk in a sentence</a>&nbsp;(36)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/counterespionage.html" target="_blank">counterespionage in a sentence</a>&nbsp;(7)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/algebraically.html" target="_blank">algebraically in a sentence</a>&nbsp;(14)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/tomato juice.html" target="_blank">tomato juice in a sentence</a>&nbsp;(46+1)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/persuader.html" target="_blank">persuader in a sentence</a>&nbsp;(16)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/chocolate milk.html" target="_blank">chocolate milk in a sentence</a>&nbsp;(24)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/return on assets.html" target="_blank">return on assets in a sentence</a>&nbsp;(17)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/saved up.html" target="_blank">saved up in a sentence</a>&nbsp;(28)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/leave without pay.html" target="_blank">leave without pay in a sentence</a>&nbsp;(8)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/bugged.html" target="_blank">bugged in a sentence</a>&nbsp;(41+2)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/co-.html" target="_blank">co- in a sentence</a>&nbsp;(41)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/banding.html" target="_blank">banding in a sentence</a>&nbsp;(72)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/dribs and drabs.html" target="_blank">dribs and drabs in a sentence</a>&nbsp;(24)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/limes.html" target="_blank">limes in a sentence</a>&nbsp;(20+1)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/soon enough.html" target="_blank">soon enough in a sentence</a>&nbsp;(51+1)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/face mask.html" target="_blank">face mask in a sentence</a>&nbsp;(30)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/dol.html" target="_blank">dol in a sentence</a>&nbsp;(8)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/carambola.html" target="_blank">carambola in a sentence</a>&nbsp;(15)  		<span style="color:#428c5b">12-13</span></li>  			</ul>  	</dd>  </dl>  </div>  </div>  <!--div_left  -->    <div id="div_left" style="width: 33%; float: left; border: 0px solid blue;">  <div class="commend mt1" style="margin-top: 0px;">  <dl class="tbox light" style="margin-bottom:0px;border-bottom:0px solid #DADADA;">  	<dd class="light" style="border: 0px solid blue;">  	<ul class="c1 ico2" style="padding: 0px;">  			<li class="dotline"><a style="color: #256EB1;" href="/tetter.html" target="_blank">tetter in a sentence</a>&nbsp;(8)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/brussels sprout.html" target="_blank">brussels sprout in a sentence</a>&nbsp;(10)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/swede.html" target="_blank">swede in a sentence</a>&nbsp;(31)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/tyson.html" target="_blank">tyson in a sentence</a>&nbsp;(94+2)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/nonlinear equation.html" target="_blank">nonlinear equation in a sentence</a>&nbsp;(16)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/saint peter.html" target="_blank">saint peter in a sentence</a>&nbsp;(12)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/saint paul.html" target="_blank">saint paul in a sentence</a>&nbsp;(9)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/discrete data.html" target="_blank">discrete data in a sentence</a>&nbsp;(13)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/quadratic function.html" target="_blank">quadratic function in a sentence</a>&nbsp;(23)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/ninety-four.html" target="_blank">ninety-four in a sentence</a>&nbsp;(22)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/verona.html" target="_blank">verona in a sentence</a>&nbsp;(39)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/stenograph.html" target="_blank">stenograph in a sentence</a>&nbsp;(6)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/tenpin bowling.html" target="_blank">tenpin bowling in a sentence</a>&nbsp;(11)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/forebody.html" target="_blank">forebody in a sentence</a>&nbsp;(20)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/directed verdict.html" target="_blank">directed verdict in a sentence</a>&nbsp;(7)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/dispiritedly.html" target="_blank">dispiritedly in a sentence</a>&nbsp;(13)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/refit.html" target="_blank">refit in a sentence</a>&nbsp;(40)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/luminol.html" target="_blank">luminol in a sentence</a>&nbsp;(23)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/kickoff.html" target="_blank">kickoff in a sentence</a>&nbsp;(29)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/ironman.html" target="_blank">ironman in a sentence</a>&nbsp;(12)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/judea.html" target="_blank">judea in a sentence</a>&nbsp;(28)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/master of fine arts.html" target="_blank">master of fine arts in a sentence</a>&nbsp;(8)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/internal ear.html" target="_blank">internal ear in a sentence</a>&nbsp;(10)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/regretably.html" target="_blank">regretably in a sentence</a>&nbsp;(6)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/JES.html" target="_blank">JES in a sentence</a>&nbsp;(18)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/incised.html" target="_blank">incised in a sentence</a>&nbsp;(48+1)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/yasser arafat.html" target="_blank">yasser arafat in a sentence</a>&nbsp;(15)  		<span style="color:#428c5b">12-13</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/golda meir.html" target="_blank">golda meir in a sentence</a>&nbsp;(9)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/photosynthetic.html" target="_blank">photosynthetic in a sentence</a>&nbsp;(101)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/weather-proof.html" target="_blank">weather-proof in a sentence</a>&nbsp;(17)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/wig out.html" target="_blank">wig out in a sentence</a>&nbsp;(10)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/smallness.html" target="_blank">smallness in a sentence</a>&nbsp;(30)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/complementary color.html" target="_blank">complementary color in a sentence</a>&nbsp;(21)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/sulfuric acid.html" target="_blank">sulfuric acid in a sentence</a>&nbsp;(162)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/phonography.html" target="_blank">phonography in a sentence</a>&nbsp;(6)  		<span style="color:#428c5b">12-12</span></li>  			</ul>  	</dd>  </dl>  </div>  </div>  <!--div_left  -->    <div id="div_left" style="width: 33%; float: left; border: 0px solid blue;">  <div class="commend mt1" style="margin-top: 0px;">  <dl class="tbox light" style="margin-bottom:0px;border-bottom:0px solid #DADADA;">  	<dd class="light" style="border: 0px solid blue;">  	<ul class="c1 ico2" style="padding: 0px;">  			<li class="dotline"><a style="color: #256EB1;" href="/OLE.html" target="_blank">OLE in a sentence</a>&nbsp;(52+1)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/trade magazine.html" target="_blank">trade magazine in a sentence</a>&nbsp;(12)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/bus line.html" target="_blank">bus line in a sentence</a>&nbsp;(24)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/dihedral.html" target="_blank">dihedral in a sentence</a>&nbsp;(27)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/parataxis.html" target="_blank">parataxis in a sentence</a>&nbsp;(6)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/incorruptibility.html" target="_blank">incorruptibility in a sentence</a>&nbsp;(20)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/unknowable.html" target="_blank">unknowable in a sentence</a>&nbsp;(39+1)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/textured.html" target="_blank">textured in a sentence</a>&nbsp;(85)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/mormons.html" target="_blank">mormons in a sentence</a>&nbsp;(52)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/factorial.html" target="_blank">factorial in a sentence</a>&nbsp;(48)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/time clock.html" target="_blank">time clock in a sentence</a>&nbsp;(33)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/magnum.html" target="_blank">magnum in a sentence</a>&nbsp;(60)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/system administrator.html" target="_blank">system administrator in a sentence</a>&nbsp;(42)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/saint nicholas.html" target="_blank">saint nicholas in a sentence</a>&nbsp;(26)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/magneton.html" target="_blank">magneton in a sentence</a>&nbsp;(6)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/semite.html" target="_blank">semite in a sentence</a>&nbsp;(5)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/geosyncline.html" target="_blank">geosyncline in a sentence</a>&nbsp;(21)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/penny stocks.html" target="_blank">penny stocks in a sentence</a>&nbsp;(7)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/AIA.html" target="_blank">AIA in a sentence</a>&nbsp;(26)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/the wrong end of the stick.html" target="_blank">the wrong end of the stick in a sentence</a>&nbsp;(16)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/discount bond.html" target="_blank">discount bond in a sentence</a>&nbsp;(9)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/gluteus.html" target="_blank">gluteus in a sentence</a>&nbsp;(44)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/great seal.html" target="_blank">great seal in a sentence</a>&nbsp;(15)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/anglo-american.html" target="_blank">anglo-american in a sentence</a>&nbsp;(49)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/sense organ.html" target="_blank">sense organ in a sentence</a>&nbsp;(26)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/george eastman.html" target="_blank">george eastman in a sentence</a>&nbsp;(11)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/managerial accounting.html" target="_blank">managerial accounting in a sentence</a>&nbsp;(21)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/counterterrorism.html" target="_blank">counterterrorism in a sentence</a>&nbsp;(14)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/falling out.html" target="_blank">falling out in a sentence</a>&nbsp;(47+2)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/vitamine.html" target="_blank">vitamine in a sentence</a>&nbsp;(21)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/chicano.html" target="_blank">chicano in a sentence</a>&nbsp;(20)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/new year's.html" target="_blank">new year's in a sentence</a>&nbsp;(188+11)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/rocket scientist.html" target="_blank">rocket scientist in a sentence</a>&nbsp;(25+1)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/franco-prussian war.html" target="_blank">franco-prussian war in a sentence</a>&nbsp;(23)  		<span style="color:#428c5b">12-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/contradistinction.html" target="_blank">contradistinction in a sentence</a>&nbsp;(19)  		<span style="color:#428c5b">12-12</span></li>  			</ul>  	</dd>  </dl>  </div>  </div>  <!--div_left  -->    <div style="clear:both"></div><!--让换行符下来-->  <div id="ads4" style="padding-top:0px;">  </div>  </div><!--div_content-->    <script>  	function goPage(pagePre,action){  		var goPageNo=parseInt(document.getElementById("goPageNo").value,10);  		var pageCountNo=parseInt(document.getElementById("pageCountNo").value,10);  		///alert(goPageNo);  		///alert(pageCountNo);  		//这样确实ok啊,把输入为空等情况都剔除了.白名单制度.  		if((goPageNo<=pageCountNo) && (goPageNo>=1)){  		}else{  			alert("Please input the correct page number!");  			return;  		}  		var href1;  		if(goPageNo==1){  			href1=pagePre;  			if(action=="word"){  				href1="/";  			}  		}else{  			href1=pagePre+"list_"+goPageNo+".html";  		}  		window.location.href=href1;  	}  </script>  <div style="text-align:center;margin-top:10px;">  	  Total&nbsp;59134, 150&nbsp;Per page&nbsp;      1/395&nbsp;             <a href="/"><span style="margin-right:2px;">«</span>first</a>&nbsp;             <a href="/word/list_2.html">next<span style="margin-left:2px;">›</span></a>&nbsp;             <a href="/word/list_395.html">last<span style="margin-left:2px;">»</span></a>&nbsp;            <input type="hidden" id="pageCountNo" value="395" />        goto<input style="margin:auto 2px;" type="text" size=3 id="goPageNo" value="1"  onkeydown="if(event.keyCode==13){goPage('/word/','word');}" /><input type="button" style="margin-left:3px;cursor:hand;" value="ok" onclick="goPage('/word/','word');" />      </div>  </div><!-- div_main_left -->   <!--  <div id="ads2" style="margin-top:8px;width:18%;height:1120px;float:left;border:0px solid blue;">  </div>--><!-- div_main_right,ads2-->  <!--外部文件,先显示图片,再广告,再其它-->  <div style="padding-top:2px;clear:both;"></">  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>  <!-- 970_90_20170421 -->  <ins class="adsbygoogle"       style="display:inline-block;width:970px;height:90px"       data-ad-client="ca-pub-7200850114163593"       data-ad-slot="5287223468"></ins>  <script>  (adsbygoogle = window.adsbygoogle || []).push({});  </script>  </div>  <div class="footer w960 center mt1 clear">  <div class="footer_body">    <div class="copyright">Copyright © 2016 sentencedict.com All Rights Reserved Contact:492108537@qq.com  </div>    </div><!-- footer_body -->  </div><!--footer w960 -->  <script>    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');    ga('create', 'UA-97689481-1', 'auto');    ga('send', 'pageview');  </script>  <!-- Go to www.addthis.com/dashboard to customize your tools -->  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-578e31c97244699a"></script></div><!-- pageDiv -->  </body>  </html>