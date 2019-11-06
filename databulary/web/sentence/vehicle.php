<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>Vehicle in a sentence (esp. good sentence like quote, proverb...)</title>
<meta name="description" content="276+20 sentence examples: 1. He gave me his personal assurance that the vehicle was safe. 2. The tail exhaust pipe of the motor vehicle emitted poisonous smoke. 3. The vehicle was impounded as part of the police investigation. 4. People would benefit"/>
<link href="/common/dedecms.css" rel="stylesheet" media="screen" type="text/css">
<style>
#content div{
	line-height:23px;font-size:14px;margin-bottom:15px;
}
#ad_marginbottom_0 div{
	margin-bottom:0px;
}
.hidden1{display:none;}
</style>
<script>
function q1(word){
	formQ.word.value=word;
	formQ.submit();
}
function upWord(word,action,word){
	var votedNumber=getCookie("votedNumber"+word);
	if(votedNumber!=null){
		alert("Have done up or down!");
		return;
	}
	var xmlhttp;
	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
		 xmlhttp=new XMLHttpRequest();
	}else{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){
	if (xmlhttp.readyState==4 && xmlhttp.status==200){
		////??????
		var responseText=xmlhttp.responseText;  
		//???.
		if(responseText!="" && responseText!=null){
		   alert(responseText);
		}else{
			var id_temp="wordUpTimes";
			if(action=="down"){
				id_temp="wordDownTimes";
			}
			var temp=document.getElementById(id_temp).innerText;
			var displayTimes=parseInt(temp);
			displayTimes=displayTimes+1;
			document.getElementById(id_temp).innerText=displayTimes;
			//cookie?????,???????cookie???
			setCookie("votedNumber"+word,"1",12);
		}
	  }
	};
	xmlhttp.open("POST","upDownWordDo.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("action="+action+"&word="+encodeURIComponent(word)+"&rnd="+ Math.random());
}
</script>
</head>
<body>
<form method="post" style="display:none;" target="_blank" name="formQ" action="/wordQueryDo.php">
<input type="hidden" name="word"/>
<input type="hidden" name="directGo" value="1"/>
</form>
<div class="pageDiv" style="border: 0px solid blue;">
<script>
function trim(str){
 return str.replace(/(^\s*)|(\s*$)/g,"");
}
var strDefault="Please input any word...";
function queryCheck(){
	if(formQuery.vagueSearch.checked){
		///formQuery.q.value=encodeURI(formQuery.word.value+" site:sentencedict.com");
		formQuery.q.value=formQuery.word.value+" site:sentencedict.com";
		var temp=formQuery.action;
		formQuery.action="http://www.google.com/search";
		formQuery.method="get";
		formQuery.target="_blank";
		//??wo?????
		formQuery.word.disabled=true;
		formQuery.submit();
		formQuery.action=temp;
		formQuery.method="post";
		formQuery.target="_self";
		formQuery.word.disabled=false;
	}else{
		formQuery.word.value=trim(formQuery.word.value);
		var word=formQuery.word.value;
		if(word==""||word==strDefault){
			alert("Please input any word!");return;
		}
		formQuery.submit();
	}
	var temp="1";
	if(!formQuery.directGo.checked){
		temp="0";
	}
	setCookie("directGo",temp,12);
	var temp="1";
	if(!formQuery.vagueSearch.checked){
		temp="0";
	}
	setCookie("vagueSearch",temp,12);
}
function getCookie(name)
{
	var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
	if(arr=document.cookie.match(reg))
		return (arr[2]);
	else
		return null;
}
function setCookie(cookiename,cookievalue,hours){
	var date=new Date();
	date.setTime(date.getTime()+Number(hours)*3600*1000);
	document.cookie=cookiename+"="+cookievalue+";path=/;expires="+date.toGMTString();
}
</script>
<div class="header">
<table width="100%" style="margin-bottom:4px;font-size:14px;" height=65 cellspacing=0 border=0 >
<tr>
    <td width=100 valign="bottom" style="padding:0px;">
      <a href="/">
      <img src="/images/logo.jpg" style="vertical-align:bottom;margin-bottom:1px;border:0px solid #dddddd" alt="Sentencedict.com" height=50 width=150>
      </a>
    </td>
    <td valign="bottom">
<form method="post" style="margin:2px;margin-left:10px;" name="formQuery" action="/wordQueryDo.php">
<input type='text' style='display:none;'/>
<input type="hidden" name="q" value="">
<input type="text" name="word" maxLength=100 style="float:left;margin-bottom:3px;width:360px;height:28px;line-height:26px;padding-left:6px;font-size:16px;border:1px solid #3D7A01;border-top:1px solid #67CD01;border-left:1px solid #67CD01;color:gray;" 
size=20 value="Please input any word..." onfocus="if(this.value==strDefault){this.value='';this.style.color='black';}" onblur="if(this.value==''){this.value=strDefault;this.style.color='gray';}" onkeydown="if(event.keyCode==13){queryCheck();}"/>
<input type="button" style="float:left;width:70px;height:30px;margin-left:4px;cursor:pointer;font-size:14px;" onclick="queryCheck()" value="Search"/><div style="margin-top:10px;float:left;">&nbsp;<input type="checkbox" name="directGo" style="margin-right:2px;margin-bottom:2px;margin-left:2px;" value="1" checked/>Directly to word page&nbsp;<span title="use vague search provided by google" style=""><input type="checkbox" name="vagueSearch" style="margin-right:2px;margin-bottom:2px;" value="1" onclick="if(this.checked){formQuery.directGo.disabled=true;}else{formQuery.directGo.disabled=false;}"/>Vauge search(google)</span>
</div>
</form>
</td>
</tr>
</table>
<script>
var temp=getCookie("directGo");
//?????directGo?checked??
if(temp=="0"){
  formQuery.directGo.checked=false;
}
var temp=getCookie("vagueSearch");
//?????vagueSearch?checked??
if(temp=="1"){
  formQuery.vagueSearch.checked=true;
}
</script>
<div class="module blue mT10 wrapper w963">
<div id="navMenu" style="background-color:#199507;border:0px solid red;background-image:url('/images/green_skin.png');background-position:0 -72px;background-repeat:repeat-x;">
<ul>
	<li><a href="/"><span>Home</span></a></li>
	<li><a href="/top1000/"><span>Top1000 word</span></a></li>
	<li><a href="/top5000/"><span>Top5000 word</span></a></li>
	<li><a href="/phrase/"><span>Phrases</span></a></li>
	<!--<li><a href="/conjunction/"><span>Conjunction</span></a></li>-->
	<li><a href="/game/"><span>Game</span></a></li>
	<li><a href="/getSImage.php"><span>Sentence into pic</span></a></li>
	<li><a href="/feedback.php"><span>Feedback</span></a></li>
</ul>
</div><!-- //navMenu -->

</div><!-- //module blue... -->
<div>
</div>
</div><div class="place" style="margin-top:8px;margin-bottom:0px;height:26px;line-height:26px;"><a href="/">Home</a> &gt; <a href="vehicle.html">Vehicle in a sentence</a>
</div>
<div id="div_main_left" style="width:81%;float:left;margin-top:8px;border:0px solid blue;">

<div class="viewbox" style="width:auto;padding-bottom:0px">
<div class="title" style="padding-top:0px;line-height:56px;height:auto;overflow:visible;">
<h2 style="display:inline;">Vehicle in a sentence</h2><!--(esp. good sentence)--><span>&nbsp;&nbsp;<a href="javascript:;" onclick="upWord('vehicle','up','vehicle')">up(<span id="wordUpTimes">0</span>)</a>&nbsp;&nbsp;<a href="javascript:;" onclick="upWord('vehicle','down','vehicle')">down(<span id="wordDownTimes">0</span>)</a></span>
</div>
<div class="info">Sentence count:276+20 <input type="checkbox" id="onlyStudent" value="1" style="width:17px;height:17px;" onclick="onlyStudent(this);" />Only show simple sentences<small>Posted:</small>2016-07-16<small>Updated:</small>2016-12-13</div>

<script>
function onlyStudent(this1){
	///alert(this1.checked);
	if(this1.checked){
		document.getElementById('all').style.display='none';
		document.getElementById('student').style.display='block';
		setCookie("onlyStudent","1",12);
	}else{
		document.getElementById('student').style.display='none';
		document.getElementById('all').style.display='block';
		setCookie("onlyStudent","0",12);
	}
}
var temp=getCookie("onlyStudent");
//?????vagueSearch?checked??
if(temp=="1"){
  document.getElementById('onlyStudent').checked=true;
}
</script>

<div  id="content" style="border-bottom:1px solid #aaaaaa;">

<!--?????105px,???5?????-->
<div style="line-height:20px;float:none;margin-top:5px;margin-bottom:5px;margin-right:5px;padding:4px;background-color:#cccccc;border:1px solid #DCDDDD;max-height:105px;font-size:14px;overflow:auto;">
	<span style='float:left;display:block;'>Synonym:&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("carriage");'>carriage</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("conveyance");'>conveyance</a>.&nbsp;</span><span style='float:left;display:block;'>Similar words:&nbsp;</span><span style='float:left;display:block;'><a href='article.html' target='_blank'>article</a>,&nbsp;</span><span style='float:left;display:block;'><a href='particle.html' target='_blank'>particle</a>,&nbsp;</span><span style='float:left;display:block;'><a href='drive home.html' target='_blank'>drive home</a>,&nbsp;</span><span style='float:left;display:block;'><a href='behind.html' target='_blank'>behind</a>,&nbsp;</span><span style='float:left;display:block;'><a href='publicly.html' target='_blank'>publicly</a>,&nbsp;</span><span style='float:left;display:block;'><a href='which.html' target='_blank'>which</a>,&nbsp;</span><span style='float:left;display:block;'><a href='ethics.html' target='_blank'>ethics</a>,&nbsp;</span><span style='float:left;display:block;'><a href='ethical.html' target='_blank'>ethical</a>.&nbsp;</span><span style='float:left;display:block;'>Meaning:&nbsp;['v???kl]&nbsp;n. 1. a conveyance that transports people or objects 2. a medium for the expression or achievement of something 3. a substance that facilitates the use of a drug or pigment or other material that is mixed with it 4. any inanimate object (as a towel or money or clothing or dishes or books or toys etc.) that can transmit infectious agents from one person to another.&nbsp;</span></div>
<div id="img1" style="margin:5px;margin-top:8px;float:right;">
	<img src="http://sentencedict.com/wordimage/190.jpg" style="width:300px;height:210px;" />
	<div style="text-align:center;margin-top:4px;font-size:12px;line-height:normal;margin-bottom:0px;width:280px;">Sentencedict.com random good picture</div>
</div>

<!--???????,?????????-->
<div id="all" >
<div>(1) He gave me his personal assurance that the <em>vehicle</em> was safe.</div><div>(2) The tail exhaust pipe of the motor <em>vehicle</em> emitted poisonous smoke.</div><div>(3) The <em>vehicle</em> was impounded as part of the police investigation.</div><div>(4) People would benefit greatly from a pollution-free <em>vehicle</em>.</div><div>(5) He had been using the <em>vehicle</em> to tow his work trailer.</div><div>(6) A truck driver died last night when his <em>vehicle</em> overturned.</div><div>(7) This is a mechanically propelled <em>vehicle</em>.</div><div id="ad_marginbottom_0" style="margin-top:-10px;margin-bottom:5px;"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><!-- 728_90_20170421 --><ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-7200850114163593" data-ad-slot="2392632666"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script></div><div>(8) Art may be used as a <em>vehicle</em> for propaganda.</div><div>(9) The power plant burns used <em>vehicle</em> tyres as fuel.</div><div>(10) The <em>vehicle</em> is sturdy enough to withstand rough terrain.</div><div>(11) Investment in fixed assets is an important <em>vehicle</em> for ensuring that the latest technology is available to business.</div><div>(12) The police pursued the stolen <em>vehicle</em> along the motorway.</div><div>(13) Police can remove a <em>vehicle</em> that is causing an obstruction .</div><div>(14) We saw a <em>vehicle</em> sprinkling water on the street.</div><div>(15) The flimsy structure of the <em>vehicle</em> could not withstand even mild impacts.</div><div>(16) It can be very dangerous if there's a <em>vehicle</em> in your blind spot.</div><div>(17) Are you the driver of this <em>vehicle</em>?</div><div>(18) A cameraman was killed when his <em>vehicle</em> came under mortar fire .</div><div>(19) She did none of the maintenance on the <em>vehicle</em> itself.</div><div>(20) Hire a four-wheel-drive <em>vehicle</em>?there are lots of spots to discover off the beaten track.</div><div>(21) He thought he was covered to drive the <em>vehicle</em>.</div><div>(22) This <em>vehicle</em> is licensed to carry 4 persons.</div><div>(23) The <em>vehicle</em> had been travelling at speeds in excess of 90 miles per hour.</div><div>(24) The policeman waved the <em>vehicle</em> on.</div><div>(25) MGM made the film as a star <em>vehicle</em> for Brando.</div><div>(26) The <em>vehicle</em> was engulfed in flames.</div><div>(27) She was blinded by the lights from an oncoming <em>vehicle</em>.</div><div>(28) Her car went out of control and struck an oncoming <em>vehicle</em>.</div><div>(29) The driver lost control on a curve and the <em>vehicle</em> hit a tree.</div><div style="margin-bottom:3px;">(30) Police said the car fits the description of the stolen <em>vehicle</em>.</div></div><!--all??-->
<!--?????????,?????????-->
<div id="student" style='display:none;'>
<div>(1) He gave me his personal assurance that the <em>vehicle</em> was safe.</div><div>(2) The tail exhaust pipe of the motor <em>vehicle</em> emitted poisonous smoke.</div><div>(3) People would benefit greatly from a pollution-free <em>vehicle</em>.</div><div>(4) She was blinded by the lights from an oncoming <em>vehicle</em>.</div><div>(5) He had been using the <em>vehicle</em> to tow his work trailer.</div><div>(6) A truck driver died last night when his <em>vehicle</em> overturned.</div><div>(7) This is a mechanically propelled <em>vehicle</em>.</div><div>(8) The <em>vehicle</em> is sturdy enough to withstand rough terrain.</div><div>(9) Investment in fixed assets is an important <em>vehicle</em> for ensuring that the latest technology is available to business.</div><div>(10) Her car went out of control and struck an oncoming <em>vehicle</em>.</div><div>(11) Police can remove a <em>vehicle</em> that is causing an obstruction .</div><div>(12) We saw a <em>vehicle</em> sprinkling water on the street.</div><div>(13) The flimsy structure of the <em>vehicle</em> could not withstand even mild impacts.</div><div>(14) It can be very dangerous if there's a <em>vehicle</em> in your blind spot.</div><div>(15) Are you the driver of this <em>vehicle</em>?</div><div>(16) The driver lost control on a curve and the <em>vehicle</em> hit a tree.</div><div>(17) A cameraman was killed when his <em>vehicle</em> came under mortar fire .</div><div>(18) She did none of the maintenance on the <em>vehicle</em> itself.</div><div>(19) Have you locked your <em>vehicle</em>?</div><div style="margin-bottom:3px;">(20) The company expects to resume production of the <em>vehicle</em> again after a two - month hiatus.</div></div><!--student??-->

<div id="ad_marginbottom_0" style="padding-top:0px;margin-bottom:6px;line-height:normal;margin-top:-8px;">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 728_90_20170421 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-7200850114163593"
     data-ad-slot="2392632666"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<div style="margin-bottom:3px;font-size:13px;line-height:21px;"><span style="font-weight:bold;float:left;display:block">More similar words:&nbsp;</span><span style='float:left;display:block;'><a href='article.html' target='_blank'>article</a>,&nbsp;</span><span style='float:left;display:block;'><a href='particle.html' target='_blank'>particle</a>,&nbsp;</span><span style='float:left;display:block;'><a href='drive home.html' target='_blank'>drive home</a>,&nbsp;</span><span style='float:left;display:block;'><a href='behind.html' target='_blank'>behind</a>,&nbsp;</span><span style='float:left;display:block;'><a href='publicly.html' target='_blank'>publicly</a>,&nbsp;</span><span style='float:left;display:block;'><a href='which.html' target='_blank'>which</a>,&nbsp;</span><span style='float:left;display:block;'><a href='ethics.html' target='_blank'>ethics</a>,&nbsp;</span><span style='float:left;display:block;'><a href='ethical.html' target='_blank'>ethical</a>,&nbsp;</span><span style='float:left;display:block;'><a href='fall behind.html' target='_blank'>fall behind</a>,&nbsp;</span><span style='float:left;display:block;'><a href='leave behind.html' target='_blank'>leave behind</a>,&nbsp;</span><span style='float:left;display:block;'><a href='demographic.html' target='_blank'>demographic</a>,&nbsp;</span><span style='float:left;display:block;'><a href='behind schedule.html' target='_blank'>behind schedule</a>,&nbsp;</span><span style='float:left;display:block;'><a href='cycle.html' target='_blank'>cycle</a>,&nbsp;</span><span style='float:left;display:block;'><a href='clear.html' target='_blank'>clear</a>,&nbsp;</span><span style='float:left;display:block;'><a href='clerk.html' target='_blank'>clerk</a>,&nbsp;</span><span style='float:left;display:block;'><a href='uncle.html' target='_blank'>uncle</a>,&nbsp;</span><span style='float:left;display:block;'><a href='muscle.html' target='_blank'>muscle</a>,&nbsp;</span><span style='float:left;display:block;'><a href='circle.html' target='_blank'>circle</a>,&nbsp;</span><span style='float:left;display:block;'><a href='nuclear.html' target='_blank'>nuclear</a>,&nbsp;</span><span style='float:left;display:block;'><a href='unclear.html' target='_blank'>unclear</a>,&nbsp;</span><span style='float:left;display:block;'><a href='manacle.html' target='_blank'>manacle</a>,&nbsp;</span><span style='float:left;display:block;'><a href='miracle.html' target='_blank'>miracle</a>,&nbsp;</span><span style='float:left;display:block;'><a href='clear up.html' target='_blank'>clear up</a>,&nbsp;</span><span style='float:left;display:block;'><a href='clear out.html' target='_blank'>clear out</a>,&nbsp;</span><span style='float:left;display:block;'><a href='clear off.html' target='_blank'>clear off</a>,&nbsp;</span><span style='float:left;display:block;'><a href='philosophical.html' target='_blank'>philosophical</a>,&nbsp;</span><span style='float:left;display:block;'><a href='obstacle.html' target='_blank'>obstacle</a>,&nbsp;</span><span style='float:left;display:block;'><a href='clear away.html' target='_blank'>clear away</a>,&nbsp;</span><span style='float:left;display:block;'><a href='spectacle.html' target='_blank'>spectacle</a>.&nbsp;</span><div style='clear:both;height:1px;margin-top:-1px;overflow:hidden;margin-bottom:0px;'></div></div>
</div><!-- content -->
</div><!-- viewbox -->
<script>
	function goPage(pagePre){
		var goPageNo=parseInt(document.getElementById("goPageNo").value,10);
		var pageCountNo=parseInt(document.getElementById("pageCountNo").value,10);
		///alert(goPageNo);
		///alert(pageCountNo);
		//????ok?,????????????.?????.
		if((goPageNo<=pageCountNo) && (goPageNo>=1)){
		}else{
			alert("Please input the correct page number!");
			return;
		}
		var href1;
		if(goPageNo==1){
			href1=pagePre+".html";
		}else{
			href1=pagePre+"_"+goPageNo+".html";
		}
		window.location.href=href1;
	}
</script>
<div style="text-align:center;margin-top:10px;">
	  Total&nbsp;276, 30&nbsp;Per page&nbsp;
    1/10&nbsp;
           <a href="/vehicle.html"><span style="margin-right:2px;">«</span>first</a>&nbsp;
           <a href="/vehicle_2.html">next<span style="margin-left:2px;">›</span></a>&nbsp;
           <a href="/vehicle_10.html">last<span style="margin-left:2px;">»</span></a>&nbsp;
          <input type="hidden" id="pageCountNo" value="10" />
      goto<input style="margin:auto 2px;" type="text" size=3 id="goPageNo" value="1"  onkeydown="if(event.keyCode==13){goPage('/vehicle');}" /><input type="button" style="margin-left:3px;cursor:hand;" value="ok" onclick="goPage('/vehicle');" />
    </div>
<script>
function beforeComment(word){ 
  var commentWord=getCookie("commentWord"+word);
  if(commentWord!=null){
	alert("fail! The minimum comment interval of one word is 60 seconds");
	return;
  }
  var username=trim(formComment.username.value);
  var comment=trim(formComment.comment.value);
  ////??????word????
  if(comment==""){
  	 alert("The comment cann't be empty!");
  	 return;
  }
  if(comment.length>1000){
  	 alert("The comment cann't be longer then 1000 length!");
  	 return;
  }
	////ajax
  var xmlhttp;
	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
 		 xmlhttp=new XMLHttpRequest();
  }else{// code for IE6, IE5
  		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function(){
    if (xmlhttp.readyState==4 && xmlhttp.status==200){
      ////??????
  		var responseText=xmlhttp.responseText;  

  		////?????1
  		//???.
  		if(responseText!="" && responseText!=null){
  		   alert(responseText);
  		   ///window.close();
  		}else{
  			var showMsg="comment success! thank you! ";
			//cookie?????,???????cookie???
			setCookie("commentWord"+word,"1",1/60);
  			alert(showMsg);
			///var createtime=new Date().toDateString();
			var date1 = new Date();
			var createtime = date1.getFullYear()+'-'+(date1.getMonth()+1)+'-'+date1.getDate()+' '+date1.getHours()+':'+date1.getMinutes()+':'+date1.getSeconds();
			var commentDiv='<div><ul style="padding-bottom:10px;margin-top:8px;border-bottom: 1px dashed #ccc;margin-left:8px;"><li><div><span>';
			commentDiv+=username;
			commentDiv+='</span>&nbsp;<span style="color:#aeaeae">';
			///commentDiv+=createtime.substr(0,10);
			commentDiv+=createtime;
			commentDiv+='</span></div><div style="clear:both;margin:5px auto;">';
			commentDiv+=comment;
			commentDiv+='</div></li></ul></div>\r\n';
			///alert(commentDiv);
			document.getElementById("commetcontent").innerHTML=commentDiv+document.getElementById("commetcontent").innerHTML;
			formComment.comment.value=""; 
  		}
	  }
  };
  xmlhttp.open("POST","commentAjax.php",true);
  xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  var ajaxStr="action=submitAjax&word="+encodeURI(word)+"&comment="+encodeURI(comment)+"&username="+encodeURI(username)+"&rnd="+ Math.random();
  xmlhttp.send(ajaxStr);
}
function queryComment(word){ 
  var xmlhttp;
	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
 		 xmlhttp=new XMLHttpRequest();
  }else{// code for IE6, IE5
  		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
 	xmlhttp.onreadystatechange=function(){
    if (xmlhttp.readyState==4 && xmlhttp.status==200){
      ////??????
  		var responseText=xmlhttp.responseText;  
  		///alert(responseText);
  		////?????1
  		//???.
  		if(responseText!=""){
			var comment_arr=responseText.split("||");
			var comment_html="";
			///alert(comment_arr.length);
			for(var i=0;i<parseInt(comment_arr.length/4);i++){
				var word=comment_arr[i*4];
				var comment=comment_arr[i*4+1];
				var createtime=comment_arr[i*4+2];
				var username=comment_arr[i*4+3];
				var commentDiv='<div><ul style="padding-bottom:10px;margin-top:8px;border-bottom: 1px dashed #ccc;margin-left:8px;"><li><div><span>';
				commentDiv+=username;
				commentDiv+='</span>&nbsp;<span style="color:#aeaeae">';
				///commentDiv+=createtime.substr(0,10);
				commentDiv+=createtime;
				commentDiv+='</span></div><div style="clear:both;margin:5px auto;">';
				commentDiv+=comment;
				commentDiv+='</div></li></ul></div>\r\n';
				///alert(commentDiv);
				comment_html+=commentDiv;
			}
			document.getElementById("commetcontent").innerHTML=comment_html;
			
  		}
	  }
  };

  var ajaxStr="commentAjax.php?action=queryAjax&word="+encodeURI(word)+"&rnd="+ Math.random();
  ///alert(ajaxStr);
  xmlhttp.open("GET",ajaxStr,true);
  xmlhttp.send();
}
</script>
<div class="mt1" style="margin-left:0px;">
<dl class="tbox">
    <dt> <strong>Leave a comment</strong></dt>
    <dd>
      <div class="dede_comment_post">
        <form action="#" method="post" name="formComment">
          <div class="dcmp-title"> <small>Welcome to leave a comment about this page!</small> </div>
		  <div style="margin:5px auto;">
		  <textarea style="width:98%" name="comment" rows="5" ></textarea>
		  </div>
          <div>
              Your name:
              <input type="text" name="username" value="me" size="8" style="font-size:13px;">
              <button type="button" onclick='beforeComment("vehicle")'>Submit</button>
          </div>
        </form>
      </div>
    </dd>
</dl>
</div>

<div style="margin-top:8px;">
  <dl class="tbox">
    <dt> <strong>Latest comments</strong><span style="float:right;line-height:25px;padding-right:8px;"><a href="comment.php?word=vehicle" target="_blank">Into the comment page&gt;&gt;</a></span></dt>
	<dd id="commetcontent">
	<!--
	<div>
	  <ul style="padding-bottom:10px;margin-top:8px;border-bottom: 1px dashed #ccc;margin-left:8px;">
		<li> 
		  <div><span>??</span>&nbsp;<span style="color:#aeaeae">2016-01-13</span></div>
		  <div style="clear:both;margin:5px auto;">???????</div>
		</li>
	  </ul>
	</div>
	-->
	</dd>
  </dl>
</div>



</div><!-- div_main_left --> 

<div id="div_main_right" style="width:18%;margin-top:8px;float:right;border:0px solid blue;" >
<div>
<dl class="tbox light" style="margin-bottom:4px;">
	<dt class="light"><strong>More words</strong></dt>
	<dd class="light">
	<ul class="c1 ico2">
				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="flush.html">flush</a>&nbsp;(289+18)</span>
		</li>
				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="atonement.html">atonement</a>&nbsp;(64)</span>
		</li>
				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="tasty.html">tasty</a>&nbsp;(179+3)</span>
		</li>
				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="tranquility.html">tranquility</a>&nbsp;(57)</span>
		</li>
				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="allotment.html">allotment</a>&nbsp;(66)</span>
		</li>
				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="disgraced.html">disgraced</a>&nbsp;(70+3)</span>
		</li>
				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="irritated.html">irritated</a>&nbsp;(205+10)</span>
		</li>
				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="recognised.html">recognised</a>&nbsp;(162+7)</span>
		</li>
				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="disapprove.html">disapprove</a>&nbsp;(64+5)</span>
		</li>
				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="reasonable.html">reasonable</a>&nbsp;(240+34)</span>
		</li>
				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="identical twin.html">identical twin</a>&nbsp;(26)</span>
		</li>
				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="bosomy.html">bosomy</a>&nbsp;(18)</span>
		</li>
				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="plaster.html">plaster</a>&nbsp;(241+11)</span>
		</li>
				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="ablaze.html">ablaze</a>&nbsp;(109+9)</span>
		</li>
				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="languish.html">languish</a>&nbsp;(44+1)</span>
		</li>
				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="irascibility.html">irascibility</a>&nbsp;(9)</span>
		</li>
				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="utmost.html">utmost</a>&nbsp;(204+14)</span>
		</li>
				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="hallowed.html">hallowed</a>&nbsp;(53+1)</span>
		</li>
				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="oppression.html">oppression</a>&nbsp;(159+2)</span>
		</li>
				<li class="dotline"><span style="float:left;"><a style="color: #256EB1;" href="creed.html">creed</a>&nbsp;(156+3)</span>
		</li>
			</ul>
	</dd>
</dl>
</div>
<div id="ads4">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 160_600_20170509 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:160px;height:600px"
     data-ad-client="ca-pub-7200850114163593"
     data-ad-slot="1770400263"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
</div><!-- div_main_right?? -->

<!--????,?????,???,???-->
<!--?+-->
<script>queryComment("vehicle");</script>

<div style="padding-top:2px;clear:both;"></">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 970_90_20170421 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:970px;height:90px"
     data-ad-client="ca-pub-7200850114163593"
     data-ad-slot="5287223468"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<div class="footer w960 center mt1 clear">
<div class="footer_body">

<div class="copyright">Copyright © 2016 sentencedict.com All Rights Reserved Contact:492108537@qq.com
</div>

</div><!-- footer_body -->
</div><!--footer w960 -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-97689481-1', 'auto');
  ga('send', 'pageview');
</script>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-578e31c97244699a"></script></div><!-- pageDiv -->
</body>
</html>