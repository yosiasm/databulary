    <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">   <html>  <head>  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">  <title>Sentence dictionary online - Good sentence examples for every word!</title>  <meta name="description" content="Sentencedict.com is a online sentence dictionary, on which you can find good sentence examples for almost every word. We try our best to collect and create good sentences and wish you can make progress day by day!"/>  <link href="/common/dedecms.css" rel="stylesheet" media="screen" type="text/css">  </head>  <body>    <div class="pageDiv" style="border: 0px solid blue;">  <script>  function trim(str){  　return str.replace(/(^\s*)|(\s*$)/g,"");  }  var strDefault="Please input any word...";  function queryCheck(){  	if(formQuery.vagueSearch.checked){  		///formQuery.q.value=encodeURI(formQuery.word.value+" site:sentencedict.com");  		formQuery.q.value=formQuery.word.value+" site:sentencedict.com";  		var temp=formQuery.action;  		formQuery.action="http://www.google.com/search";  		formQuery.method="get";  		formQuery.target="_blank";  		//为了wo参数不提交  		formQuery.word.disabled=true;  		formQuery.submit();  		formQuery.action=temp;  		formQuery.method="post";  		formQuery.target="_self";  		formQuery.word.disabled=false;  	}else{  		formQuery.word.value=trim(formQuery.word.value);  		var word=formQuery.word.value;  		if(word==""||word==strDefault){  			alert("Please input any word!");return;  		}  		formQuery.submit();  	}  	var temp="1";  	if(!formQuery.directGo.checked){  		temp="0";  	}  	setCookie("directGo",temp,12);  	var temp="1";  	if(!formQuery.vagueSearch.checked){  		temp="0";  	}  	setCookie("vagueSearch",temp,12);  }  function getCookie(name)  {  	var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");  	if(arr=document.cookie.match(reg))  		return (arr[2]);  	else  		return null;  }  function setCookie(cookiename,cookievalue,hours){  	var date=new Date();  	date.setTime(date.getTime()+Number(hours)*3600*1000);  	document.cookie=cookiename+"="+cookievalue+";path=/;expires="+date.toGMTString();  }  </script>  <div class="header">  <table width="100%" style="margin-bottom:4px;font-size:14px;" height=65 cellspacing=0 border=0 >  <tr>      <td width=100 valign="bottom" style="padding:0px;">        <a href="/">        <img src="/images/logo.jpg" style="vertical-align:bottom;margin-bottom:1px;border:0px solid #dddddd" alt="Sentencedict.com" height=50 width=150>        </a>      </td>      <td valign="bottom">  <form method="post" style="margin:2px;margin-left:10px;" name="formQuery" action="/wordQueryDo.php">  <input type='text' style='display:none;'/>  <input type="hidden" name="q" value="">  <input type="text" name="word" maxlength=100 style="float:left;margin-bottom:3px;width:360px;height:28px;line-height:26px;padding-left:6px;font-size:16px;border:1px solid #3D7A01;border-top:1px solid #67CD01;border-left:1px solid #67CD01;color:gray;"   size=20 value="Please input any word..." onfocus="if(this.value==strDefault){this.value='';this.style.color='black';}" onblur="if(this.value==''){this.value=strDefault;this.style.color='gray';}" onkeydown="if(event.keyCode==13){queryCheck();}"/>  <input type="button" style="float:left;width:70px;height:30px;margin-left:4px;cursor:pointer;font-size:14px;" onclick="queryCheck()" value="Search"/><div style="margin-top:10px;float:left;">&nbsp;<input type="checkbox" name="directGo" style="margin-right:2px;margin-bottom:2px;margin-left:2px;" value="1" checked>Directly to word page&nbsp;<span title="use vague search provided by google" style=""><input type="checkbox" name="vagueSearch" style="margin-right:2px;margin-bottom:2px;" value="1" onclick="if(this.checked){formQuery.directGo.disabled=true;}else{formQuery.directGo.disabled=false;}"/>Vauge search(google)</span>  </div>  </form>  </td>  </tr>  </table>  <script>  var temp=getCookie("directGo");  //此情况修改directGo的checked状态  if(temp=="0"){    formQuery.directGo.checked=false;  }  var temp=getCookie("vagueSearch");  //此情况修改vagueSearch的checked状态  if(temp=="1"){    formQuery.vagueSearch.checked=true;  }  </script>  <div class="module blue mT10 wrapper w963">  <div id="navMenu" style="background-color:#199507;border:0px solid red;background-image:url('/images/green_skin.png');background-position:0 -72px;background-repeat:repeat-x;">  <ul>  	<li><a href="/"><span>Home</span></a></li>  	<li><a href="/top1000/"><span>Top1000 word</span></a></li>  	<li><a href="/top5000/"><span>Top5000 word</span></a></li>  	<li><a href="/phrase/"><span>Phrases</span></a></li>  	<!--<li><a href="/conjunction/"><span>Conjunction</span></a></li>-->  	<li><a href="/game/"><span>Game</span></a></li>  	<li><a href="/getSImage.php"><span>Sentence into pic</span></a></li>  	<li><a href="/feedback.php"><span>Feedback</span></a></li>  </ul>  </div><!-- //navMenu -->    </div><!-- //module blue... -->  <div>  </div>  </div><div class="place" style="color:#428c5b;margin-top:8px;margin-bottom:0px;height:26px;line-height:26px;">  	<a href="/">Home</a>(all the words)  </div><!--place-->    <div id="div_main_left" style="margin-top:6px;border:0px solid blue;">  <div id="div_content" style="border-bottom:1px solid #aaaaaa;">    <div id="div_left" style="width: 33%; float: left; border: 0px solid blue;">  <div class="commend mt1" style="margin-top: 0px;">  <dl class="tbox light" style="margin-bottom:0px;border-bottom:0px solid #DADADA;">  	<dd class="light" style="border: 0px solid blue;">  	<ul class="c1 ico2" style="padding: 0px;">  			<li class="dotline"><a style="color: #256EB1;" href="/trinomial.html" target="_blank">trinomial in a sentence</a>&nbsp;(11)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/smart aleck.html" target="_blank">smart aleck in a sentence</a>&nbsp;(10)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/sniffer.html" target="_blank">sniffer in a sentence</a>&nbsp;(33)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/msh.html" target="_blank">msh in a sentence</a>&nbsp;(6)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/fenestration.html" target="_blank">fenestration in a sentence</a>&nbsp;(15)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/code switch.html" target="_blank">code switch in a sentence</a>&nbsp;(13)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/bub.html" target="_blank">bub in a sentence</a>&nbsp;(20)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/measled.html" target="_blank">measled in a sentence</a>&nbsp;(20)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/video adapter.html" target="_blank">video adapter in a sentence</a>&nbsp;(5)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/delusions of grandeur.html" target="_blank">delusions of grandeur in a sentence</a>&nbsp;(17)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/make great strides.html" target="_blank">make great strides in a sentence</a>&nbsp;(23)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/end point.html" target="_blank">end point in a sentence</a>&nbsp;(65)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/respiratory illness.html" target="_blank">respiratory illness in a sentence</a>&nbsp;(27)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/sciential.html" target="_blank">sciential in a sentence</a>&nbsp;(12)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/primary industry.html" target="_blank">primary industry in a sentence</a>&nbsp;(25)  		<span style="color:#428c5b">01-12</span></li>  			</ul>  	</dd>  </dl>  </div>  </div>  <!--div_left  -->    <div id="div_left" style="width: 33%; float: left; border: 0px solid blue;">  <div class="commend mt1" style="margin-top: 0px;">  <dl class="tbox light" style="margin-bottom:0px;border-bottom:0px solid #DADADA;">  	<dd class="light" style="border: 0px solid blue;">  	<ul class="c1 ico2" style="padding: 0px;">  			<li class="dotline"><a style="color: #256EB1;" href="/duple.html" target="_blank">duple in a sentence</a>&nbsp;(9)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/chelonia.html" target="_blank">chelonia in a sentence</a>&nbsp;(5)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/reversible reaction.html" target="_blank">reversible reaction in a sentence</a>&nbsp;(10)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/customs agent.html" target="_blank">customs agent in a sentence</a>&nbsp;(20)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/financial center.html" target="_blank">financial center in a sentence</a>&nbsp;(39)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/investment income.html" target="_blank">investment income in a sentence</a>&nbsp;(49+1)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/imperialistic.html" target="_blank">imperialistic in a sentence</a>&nbsp;(11)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/unreactive.html" target="_blank">unreactive in a sentence</a>&nbsp;(9)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/balance transfer.html" target="_blank">balance transfer in a sentence</a>&nbsp;(22)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/primary care physician.html" target="_blank">primary care physician in a sentence</a>&nbsp;(22)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/psychometric.html" target="_blank">psychometric in a sentence</a>&nbsp;(25)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/manama.html" target="_blank">manama in a sentence</a>&nbsp;(22)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/bahrain.html" target="_blank">bahrain in a sentence</a>&nbsp;(61+1)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/convertor.html" target="_blank">convertor in a sentence</a>&nbsp;(34)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/demoralization.html" target="_blank">demoralization in a sentence</a>&nbsp;(16)  		<span style="color:#428c5b">01-11</span></li>  			</ul>  	</dd>  </dl>  </div>  </div>  <!--div_left  -->    <div id="div_left" style="width: 33%; float: left; border: 0px solid blue;">  <div class="commend mt1" style="margin-top: 0px;">  <dl class="tbox light" style="margin-bottom:0px;border-bottom:0px solid #DADADA;">  	<dd class="light" style="border: 0px solid blue;">  	<ul class="c1 ico2" style="padding: 0px;">  			<li class="dotline"><a style="color: #256EB1;" href="/lead poisoning.html" target="_blank">lead poisoning in a sentence</a>&nbsp;(41)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/secure environment.html" target="_blank">secure environment in a sentence</a>&nbsp;(13+1)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/idealization.html" target="_blank">idealization in a sentence</a>&nbsp;(18)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/in on.html" target="_blank">in on in a sentence</a>&nbsp;(202+51)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/in the spotlight.html" target="_blank">in the spotlight in a sentence</a>&nbsp;(23+2)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/Lycra.html" target="_blank">Lycra in a sentence</a>&nbsp;(37)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/conferee.html" target="_blank">conferee in a sentence</a>&nbsp;(9)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/promisor.html" target="_blank">promisor in a sentence</a>&nbsp;(9)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/tarquin.html" target="_blank">tarquin in a sentence</a>&nbsp;(7)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/tritium.html" target="_blank">tritium in a sentence</a>&nbsp;(53+1)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/real mccoy.html" target="_blank">real mccoy in a sentence</a>&nbsp;(18)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/xhosa.html" target="_blank">xhosa in a sentence</a>&nbsp;(11)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/ukranian.html" target="_blank">ukranian in a sentence</a>&nbsp;(16)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/SP.html" target="_blank">SP in a sentence</a>&nbsp;(202)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/forbidden zone.html" target="_blank">forbidden zone in a sentence</a>&nbsp;(19)  		<span style="color:#428c5b">01-11</span></li>  			</ul>  	</dd>  </dl>  </div>  </div>  <!--div_left  -->  <div style="clear:both"></div><!--让换行符下来-->    <div style="clear:both;margin-top:5px;margin-bottom:5px;margin-left:15px">  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>  <!-- 970_90_20170421 -->  <ins class="adsbygoogle"       style="display:inline-block;width:970px;height:90px"       data-ad-client="ca-pub-7200850114163593"       data-ad-slot="5287223468"></ins>  <script>  (adsbygoogle = window.adsbygoogle || []).push({});  </script>  </div>    <div id="div_left" style="width: 33%; float: left; border: 0px solid blue;">  <div class="commend mt1" style="margin-top: 0px;">  <dl class="tbox light" style="margin-bottom:0px;border-bottom:0px solid #DADADA;">  	<dd class="light" style="border: 0px solid blue;">  	<ul class="c1 ico2" style="padding: 0px;">  			<li class="dotline"><a style="color: #256EB1;" href="/table service.html" target="_blank">table service in a sentence</a>&nbsp;(13)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/bring into line.html" target="_blank">bring into line in a sentence</a>&nbsp;(16)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/shovelful.html" target="_blank">shovelful in a sentence</a>&nbsp;(11+1)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/clade.html" target="_blank">clade in a sentence</a>&nbsp;(21)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/blackish.html" target="_blank">blackish in a sentence</a>&nbsp;(32+1)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/jurassic period.html" target="_blank">jurassic period in a sentence</a>&nbsp;(18)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/cussedness.html" target="_blank">cussedness in a sentence</a>&nbsp;(7)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/melanomas.html" target="_blank">melanomas in a sentence</a>&nbsp;(43)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/hade.html" target="_blank">hade in a sentence</a>&nbsp;(22)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/care-free.html" target="_blank">care-free in a sentence</a>&nbsp;(40)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/uncrowned.html" target="_blank">uncrowned in a sentence</a>&nbsp;(18+1)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/terrine.html" target="_blank">terrine in a sentence</a>&nbsp;(21)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/jury-rigged.html" target="_blank">jury-rigged in a sentence</a>&nbsp;(12)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/tasmanian.html" target="_blank">tasmanian in a sentence</a>&nbsp;(28)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/set over.html" target="_blank">set over in a sentence</a>&nbsp;(24)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/pes.html" target="_blank">pes in a sentence</a>&nbsp;(37)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/valency.html" target="_blank">valency in a sentence</a>&nbsp;(26)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/radicchio.html" target="_blank">radicchio in a sentence</a>&nbsp;(10)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/dirty work.html" target="_blank">dirty work in a sentence</a>&nbsp;(26+1)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/FYI.html" target="_blank">FYI in a sentence</a>&nbsp;(16)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/geochemistry.html" target="_blank">geochemistry in a sentence</a>&nbsp;(66)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/tax concession.html" target="_blank">tax concession in a sentence</a>&nbsp;(26)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/normal state.html" target="_blank">normal state in a sentence</a>&nbsp;(28)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/machiavellianism.html" target="_blank">machiavellianism in a sentence</a>&nbsp;(8)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/nikola tesla.html" target="_blank">nikola tesla in a sentence</a>&nbsp;(18)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/subunit.html" target="_blank">subunit in a sentence</a>&nbsp;(58)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/pathologic.html" target="_blank">pathologic in a sentence</a>&nbsp;(166)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/merman.html" target="_blank">merman in a sentence</a>&nbsp;(17)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/submicroscopic.html" target="_blank">submicroscopic in a sentence</a>&nbsp;(8)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/steel production.html" target="_blank">steel production in a sentence</a>&nbsp;(37)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/gas up.html" target="_blank">gas up in a sentence</a>&nbsp;(10+2)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/leave it to chance.html" target="_blank">leave it to chance in a sentence</a>&nbsp;(7)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/slave state.html" target="_blank">slave state in a sentence</a>&nbsp;(17)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/buckaroo.html" target="_blank">buckaroo in a sentence</a>&nbsp;(10)  		<span style="color:#428c5b">01-12</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/lecithin.html" target="_blank">lecithin in a sentence</a>&nbsp;(73)  		<span style="color:#428c5b">01-12</span></li>  			</ul>  	</dd>  </dl>  </div>  </div>  <!--div_left  -->    <div id="div_left" style="width: 33%; float: left; border: 0px solid blue;">  <div class="commend mt1" style="margin-top: 0px;">  <dl class="tbox light" style="margin-bottom:0px;border-bottom:0px solid #DADADA;">  	<dd class="light" style="border: 0px solid blue;">  	<ul class="c1 ico2" style="padding: 0px;">  			<li class="dotline"><a style="color: #256EB1;" href="/objectivism.html" target="_blank">objectivism in a sentence</a>&nbsp;(19)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/social action.html" target="_blank">social action in a sentence</a>&nbsp;(39)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/merrimack.html" target="_blank">merrimack in a sentence</a>&nbsp;(15)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/rip current.html" target="_blank">rip current in a sentence</a>&nbsp;(5)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/unwounded.html" target="_blank">unwounded in a sentence</a>&nbsp;(26)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/geostationary orbit.html" target="_blank">geostationary orbit in a sentence</a>&nbsp;(21)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/cost cutting.html" target="_blank">cost cutting in a sentence</a>&nbsp;(23)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/quite a bit.html" target="_blank">quite a bit in a sentence</a>&nbsp;(108+3)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/stuff up.html" target="_blank">stuff up in a sentence</a>&nbsp;(17)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/elected official.html" target="_blank">elected official in a sentence</a>&nbsp;(42)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/canted.html" target="_blank">canted in a sentence</a>&nbsp;(22+1)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/economic factors.html" target="_blank">economic factors in a sentence</a>&nbsp;(44+2)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/a tower of strength.html" target="_blank">a tower of strength in a sentence</a>&nbsp;(16+1)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/mother figure.html" target="_blank">mother figure in a sentence</a>&nbsp;(10)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/unachievable.html" target="_blank">unachievable in a sentence</a>&nbsp;(23)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/noctua.html" target="_blank">noctua in a sentence</a>&nbsp;(8)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/noctuid.html" target="_blank">noctuid in a sentence</a>&nbsp;(8)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/flexible rate.html" target="_blank">flexible rate in a sentence</a>&nbsp;(6)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/vocalise.html" target="_blank">vocalise in a sentence</a>&nbsp;(8)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/rub against.html" target="_blank">rub against in a sentence</a>&nbsp;(12+1)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/nitrous.html" target="_blank">nitrous in a sentence</a>&nbsp;(71)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/financial planning.html" target="_blank">financial planning in a sentence</a>&nbsp;(52)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/undershirt.html" target="_blank">undershirt in a sentence</a>&nbsp;(17)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/complex system.html" target="_blank">complex system in a sentence</a>&nbsp;(71)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/significant digit.html" target="_blank">significant digit in a sentence</a>&nbsp;(10)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/eldercare.html" target="_blank">eldercare in a sentence</a>&nbsp;(12)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/service class.html" target="_blank">service class in a sentence</a>&nbsp;(29)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/nomological.html" target="_blank">nomological in a sentence</a>&nbsp;(7)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/light pen.html" target="_blank">light pen in a sentence</a>&nbsp;(16)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/collaborationist.html" target="_blank">collaborationist in a sentence</a>&nbsp;(6)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/trackball.html" target="_blank">trackball in a sentence</a>&nbsp;(15)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/interferon.html" target="_blank">interferon in a sentence</a>&nbsp;(82)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/sickle-cell anemia.html" target="_blank">sickle-cell anemia in a sentence</a>&nbsp;(17)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/well-disposed.html" target="_blank">well-disposed in a sentence</a>&nbsp;(20)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/microbiotic.html" target="_blank">microbiotic in a sentence</a>&nbsp;(14)  		<span style="color:#428c5b">01-11</span></li>  			</ul>  	</dd>  </dl>  </div>  </div>  <!--div_left  -->    <div id="div_left" style="width: 33%; float: left; border: 0px solid blue;">  <div class="commend mt1" style="margin-top: 0px;">  <dl class="tbox light" style="margin-bottom:0px;border-bottom:0px solid #DADADA;">  	<dd class="light" style="border: 0px solid blue;">  	<ul class="c1 ico2" style="padding: 0px;">  			<li class="dotline"><a style="color: #256EB1;" href="/small-minded.html" target="_blank">small-minded in a sentence</a>&nbsp;(25+1)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/social organization.html" target="_blank">social organization in a sentence</a>&nbsp;(45)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/ferromagnetism.html" target="_blank">ferromagnetism in a sentence</a>&nbsp;(14)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/public house.html" target="_blank">public house in a sentence</a>&nbsp;(23)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/independent contractor.html" target="_blank">independent contractor in a sentence</a>&nbsp;(16)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/round-robin.html" target="_blank">round-robin in a sentence</a>&nbsp;(34)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/new to.html" target="_blank">new to in a sentence</a>&nbsp;(159+3)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/have an effect on.html" target="_blank">have an effect on in a sentence</a>&nbsp;(40)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/wide-open.html" target="_blank">wide-open in a sentence</a>&nbsp;(34)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/minim.html" target="_blank">minim in a sentence</a>&nbsp;(25)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/in one piece.html" target="_blank">in one piece in a sentence</a>&nbsp;(42+1)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/netball.html" target="_blank">netball in a sentence</a>&nbsp;(31)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/tinfoil.html" target="_blank">tinfoil in a sentence</a>&nbsp;(15)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/methylated spirit.html" target="_blank">methylated spirit in a sentence</a>&nbsp;(5)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/domestic market.html" target="_blank">domestic market in a sentence</a>&nbsp;(94+1)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/medical examiner.html" target="_blank">medical examiner in a sentence</a>&nbsp;(20)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/nu.html" target="_blank">nu in a sentence</a>&nbsp;(63)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/parallel line.html" target="_blank">parallel line in a sentence</a>&nbsp;(41)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/extruder.html" target="_blank">extruder in a sentence</a>&nbsp;(77)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/ruskin.html" target="_blank">ruskin in a sentence</a>&nbsp;(42)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/feature-length.html" target="_blank">feature-length in a sentence</a>&nbsp;(11)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/snow blower.html" target="_blank">snow blower in a sentence</a>&nbsp;(14)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/gunnery.html" target="_blank">gunnery in a sentence</a>&nbsp;(26)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/proration.html" target="_blank">proration in a sentence</a>&nbsp;(9)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/whalebone.html" target="_blank">whalebone in a sentence</a>&nbsp;(13)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/of import.html" target="_blank">of import in a sentence</a>&nbsp;(100)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/pinkeye.html" target="_blank">pinkeye in a sentence</a>&nbsp;(12)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/drawing room.html" target="_blank">drawing room in a sentence</a>&nbsp;(53+1)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/playgoer.html" target="_blank">playgoer in a sentence</a>&nbsp;(5)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/sunflower oil.html" target="_blank">sunflower oil in a sentence</a>&nbsp;(23)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/black spot.html" target="_blank">black spot in a sentence</a>&nbsp;(32)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/unremarked.html" target="_blank">unremarked in a sentence</a>&nbsp;(10+1)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/windsurf.html" target="_blank">windsurf in a sentence</a>&nbsp;(13+1)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/mindlessness.html" target="_blank">mindlessness in a sentence</a>&nbsp;(16)  		<span style="color:#428c5b">01-11</span></li>  				<li class="dotline"><a style="color: #256EB1;" href="/bother about.html" target="_blank">bother about in a sentence</a>&nbsp;(36+2)  		<span style="color:#428c5b">01-11</span></li>  			</ul>  	</dd>  </dl>  </div>  </div>  <!--div_left  -->    <div style="clear:both"></div><!--让换行符下来-->  <div id="ads4" style="padding-top:0px;">  </div>  </div><!--div_content-->    <script>  	function goPage(pagePre,action){  		var goPageNo=parseInt(document.getElementById("goPageNo").value,10);  		var pageCountNo=parseInt(document.getElementById("pageCountNo").value,10);  		///alert(goPageNo);  		///alert(pageCountNo);  		//这样确实ok啊,把输入为空等情况都剔除了.白名单制度.  		if((goPageNo<=pageCountNo) && (goPageNo>=1)){  		}else{  			alert("Please input the correct page number!");  			return;  		}  		var href1;  		if(goPageNo==1){  			href1=pagePre;  			if(action=="word"){  				href1="/";  			}  		}else{  			href1=pagePre+"list_"+goPageNo+".html";  		}  		window.location.href=href1;  	}  </script>  <div style="text-align:center;margin-top:10px;">  	  Total&nbsp;62007, 150&nbsp;Per page&nbsp;      1/414&nbsp;             <a href="/"><span style="margin-right:2px;">«</span>first</a>&nbsp;             <a href="/word/list_2.html">next<span style="margin-left:2px;">›</span></a>&nbsp;             <a href="/word/list_414.html">last<span style="margin-left:2px;">»</span></a>&nbsp;            <input type="hidden" id="pageCountNo" value="414" />        goto<input style="margin:auto 2px;" type="text" size=3 id="goPageNo" value="1"  onkeydown="if(event.keyCode==13){goPage('/word/','word');}" /><input type="button" style="margin-left:3px;cursor:hand;" value="ok" onclick="goPage('/word/','word');" />      </div>  </div><!-- div_main_left -->   <!--  <div id="ads2" style="margin-top:8px;width:18%;height:1120px;float:left;border:0px solid blue;">  </div>--><!-- div_main_right,ads2-->  <!--外部文件,先显示图片,再广告,再其它-->  <div style="padding-top:2px;clear:both;"></">  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>  <!-- 970_90_20170421 -->  <ins class="adsbygoogle"       style="display:inline-block;width:970px;height:90px"       data-ad-client="ca-pub-7200850114163593"       data-ad-slot="5287223468"></ins>  <script>  (adsbygoogle = window.adsbygoogle || []).push({});  </script>  </div>  <div class="footer w960 center mt1 clear">  <div class="footer_body">    <div class="copyright">Copyright © 2016 sentencedict.com All Rights Reserved Contact:492108537@qq.com  </div>    </div><!-- footer_body -->  </div><!--footer w960 -->  <script>    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');    ga('create', 'UA-97689481-1', 'auto');    ga('send', 'pageview');  </script>  <!-- Go to www.addthis.com/dashboard to customize your tools -->  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-578e31c97244699a"></script></div><!-- pageDiv -->  </body>  </html>