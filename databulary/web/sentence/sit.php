
<!DOCTYPE html>
<html>
<head>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-7200850114163593",
    enable_page_level_ads: true
  });
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width"/>
<title>Sit in a sentence (esp. good sentence like quote, proverb...)</title>
<meta name="description" content="235+57 sentence examples: 1. After dinner sit awhile, after supper walk a mile. 2. It is hard to sit in Rome and strive against the Pope. 3. Let us cross over the river and sit in the hade of the trees. 4. After dinner sit a while, after supper walk "/>
<link href="common/dedecms_m.css" rel="stylesheet" media="screen" type="text/css">
<style>
#content div{
	line-height:23px;font-size:14px;margin-bottom:10px;
}
#ad_marginbottom_0 div{
	margin-bottom:0px;
}
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
	//cookie?????,???????cookie???
	setCookie("votedNumber"+word,"1",12);
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
<form method="post" style="display:none;" name="formQ" action="/wordQueryDo.php">
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
<div class="header" style="margin-top:2px;">
<table width="100%" style="margin-bottom:2px;font-size:14px;" cellspacing=0 border=0 >
<tr>
    <td width=120>
      <a href="/" style="display:block;height:40px;margin-bottom:2px;margin-top:4px;">
      <img src="/images/logo_m.jpg" style="width:120px;height:40px;border:0px solid #dddddd" alt="Sentencedict.com">
      </a>
    </td>
    <td valign="bottom" style="padding-bottom:2px;padding-left:8px;">
		<!-- Go to www.addthis.com/dashboard to customize your tools -->
		<div class="addthis_sharing_toolbox" style="margin-bottom:-1px;"></div>
   </td>
</tr>

<tr>
<td colspan=2>
<form method="post" style="margin:2px;" name="formQuery" action="/wordQueryDo.php">
<div style="display:-webkit-box;-webkit-box-orient:horizontal;">
<input type='text' style='display:none'/>
<input type="hidden" name="q" value="">
<input type="text" name="word" maxLength=80 style="display:block;-webkit-box-flex:1;height:30px;line-height:28px;padding-left:6px;font-size:17px;border:1px solid #cccccc;color:gray;" 
value="Please input any word..." onfocus="if(this.value==strDefault){this.value='';this.style.color='black';}" onblur="if(this.value==''){this.value=strDefault;this.style.color='gray';}" onkeydown="if(event.keyCode==13){queryCheck();}"/>
<input type="button" style="width:60px;height:32px;margin-right:0px;font-size:14px;" onclick="queryCheck()" value="Search"/>
<div style="padding-top:5px;" onclick="var xx=document.getElementById('searchChecks');if(xx.style.display=='none'){xx.style.display='block';}else{xx.style.display='none';}"><img src="/images/down.jpg" style="margin-right:5px;margin-left:5px;" width="10" height="20"></div>
</div>
<div id="searchChecks" style="display:none;padding:5px 4px;margin:3px auto;border-bottom:1px solid #aaaaaa;font-size:13px;"><input type="checkbox" name="directGo" value="1" checked/>Directly to word page&nbsp;<span style=""><input type="checkbox" name="vagueSearch" value="1" onclick="if(this.checked){formQuery.directGo.disabled=true;}else{formQuery.directGo.disabled=false;}"/>Vague search(google)</span></div>
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
document.body.addEventListener('touchstart', function(event) {
	///alert(event.target.tagName);
	///if(event.target.tagName=="LI"){
		///alert(document.getElementById('ul1').style.visibility);
		///var xxx=document.getElementById('ul1');
		///if(xxx.style.visibility!='hidden'){
			///xxx.style.visibility='hidden';
		///}
	///}
}, true);
</script>
<div class="module blue mT10 wrapper w963">
<div id="navMenu" style="background-color:#199507;padding-left:0px;border:0px solid red;background-image:url('/images/green_skin.png');background-position:0 -72px;background-repeat:repeat-x;">
<ul>
	<li style="width:16%;"><a class="ellipsis" style="padding-left:7px;" href="/">Home</a></li>
	<li style="width:32%;"><a class="ellipsis" href="/top1000/">Top 1000 words</a></li>
	<li style="width:32%;"><a class="ellipsis" href="/top5000/">Top 5000 words</a></li>
   <li class="box" style="width:16%;">
   	 <a class="ellipsis" style="padding-right:7px;" href="javascript:;">More</a>
     <ul id="ul1" style="margin:0px;padding:0px;height:auto;width:72px">
       <li style="width:100%;text-align:left;"><a style="margin-top:10px;padding-top:1px;padding-bottom:1px;" href="/phrase/">Phrases</a></li>
       <li style="width:100%;text-align:left;"><a style="padding-top:1px;padding-bottom:1px;" href="/game/">Game</a></li>
       <li style="width:100%;text-align:left;"><a style="padding-top:1px;padding-bottom:1px;" href="/getSImage.php">Into pic</a></li>
	   <li style="width:100%;text-align:left;"><a style="padding-top:1px;padding-bottom:1px;" href="/feedback.php">Feedback</a></li>
     </ul>
   </li>
</ul>
</div><!-- //navMenu -->

</div><!-- //module blue... -->

</div><div id="div_main_left" style="margin-right:8px;margin-top:6px;border:0px solid blue;">

<div class="place"><span style="color:#428c5b"> <a href="/">Home</a> &gt; <a href="sit.html">Sit in a sentence</a>
</div>
<div class="viewbox" style="width:auto;padding-bottom:0px;">
<div class="title" style="padding-top:0px;line-height:22px;height:auto;overflow:visible;margin:8px 5px;">
<h3 style="font-size:18px;display:inline">Sit in a sentence</h3><span>&nbsp;&nbsp;<a href="javascript:;" onclick="upWord('sit','up','sit')">up(<span id="wordUpTimes">0</span>)</a>&nbsp;&nbsp;<a href="javascript:;" onclick="upWord('sit','down','sit')">down(<span id="wordDownTimes">0</span>)</a></span>
</div>
<div class="info" style="overflow:visible;height:auto;margin-bottom:4px;">Count:235+57 <input type="checkbox" id="onlyStudent" value="1" style="width:17px;height:17px;" onclick="onlyStudent(this);" />Only simple sentences 2016-07-23</div>
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

<div id="content" style="border-bottom:1px solid #aaaaaa;margin-left:8px;">
<!--?????125px,???6?????-->
<div id="meaningDiv" style="line-height:20px;margin-left:-2px;margin-bottom:0px;padding:2px;background-color:#cccccc;border:1px solid #DCDDDD;max-height:125px;overflow-y:scroll;font-size:14px;">
	<span style='float:left;display:block;'>Synonym:&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("be seated");'>be seated</a>,&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("perch");'>perch</a>.&nbsp;</span><span style='float:left;display:block;'>Antonym:&nbsp;</span><span style='float:left;display:block;'><a href='javascript:;' onclick='q1("stand");'>stand</a>.&nbsp;</span><span style='float:left;display:block;'>Similar words:&nbsp;</span><span style='float:left;display:block;'><a href='site.html'>site</a>,&nbsp;</span><span style='float:left;display:block;'><a href='sit up.html'>sit up</a>,&nbsp;</span><span style='float:left;display:block;'><a href='sit on.html'>sit on</a>,&nbsp;</span><span style='float:left;display:block;'><a href='as it is.html'>as it is</a>,&nbsp;</span><span style='float:left;display:block;'><a href='visitor.html'>visitor</a>,&nbsp;</span><span style='float:left;display:block;'><a href='transit.html'>transit</a>,&nbsp;</span><span style='float:left;display:block;'><a href='deposit.html'>deposit</a>,&nbsp;</span><span style='float:left;display:block;'><a href='density.html'>density</a>.&nbsp;</span><span style='float:left;display:block;'>Meaning:&nbsp;[s?t]&nbsp;v. 1. be seated 2. sit around, often unused 3. take a seat 4. be in session 5. assume a posture as for artistic purposes 6. sit and travel on the back of animal, usually while controlling its motions 7. work or act as a baby-sitter 8. show to a seat; assign a seat for.&nbsp;</span></div> 
<script> 
function expandCollapse(){ 
        var temp=document.getElementById('meaningDiv'); 
        if(temp.style.maxHeight=='none'){ 
                temp.style.maxHeight="125px"; 
                document.getElementById('viewAllSpan').innerText="Show all"; 
        }else{ 
                temp.style.maxHeight="none"; 
                document.getElementById('viewAllSpan').innerText="Collapse"; 
        } 
} 
</script> 
<div id="expandDiv" style="font-size:13px;line-height:22px;border:1px solid #DCDDDD;border-top:0px solid #DCDDDD;cursor:pointer;background-color:#eeeeee;color:#555;text-align:center;display:none;margin-top:0px;margin-bottom:0px;margin-left:-2px;" onclick="expandCollapse();"> 
<span id="viewAllSpan">Show all</span> 
</div> 
<script> 
var temp=document.getElementById("meaningDiv"); 
if(temp.scrollHeight>temp.offsetHeight){ 
        document.getElementById("expandDiv").style.display="block"; 
} 
</script>
<div style="height:3px;margin-bottom:0px;"></div>
<!--???????,?????????-->
<div id="all" >
<div>1. After dinner <em>sit</em> awhile, after supper walk a mile.&nbsp;<a href='/s/40332.html' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>2. It is hard to <em>sit</em> in Rome and strive against the Pope.&nbsp;<a href='/s/41278.html' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>3. Let us cross over the river and <em>sit</em> in the hade of the trees.&nbsp;<a href='/s/47350.html' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>4. After dinner <em>sit</em> a while, after supper walk a while.&nbsp;<a href='/s/42517.html' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>5. We can't all be heroes. Somebody has to <em>sit</em> on the curb and clap as they go by.&nbsp;<a href='/s/193245.html' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div id="imageId" style="text-align:center;margin-top:-1px;margin-bottom:5px;"><img src="http://sentencedict.com/wordimage/62.jpg" style="max-width:100%;min-width:200px;" /><div style="text-align:center;margin-top:-2px;font-size:12px;line-height:normal;margin-bottom:0px;">Random good picture&nbsp;<input type="checkbox" name="notShowImg" value="1" onclick="notShow();" />Not show</div></div><div id="ad_marginbottom_0" style="text-align:center;margin-top:12px;margin-bottom:2px;"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><!-- 320_100_20170509 --><ins class="adsbygoogle" style="display:inline-block;width:320px;height:100px" data-ad-client="ca-pub-7200850114163593" data-ad-slot="8514937863"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script></div><div>6. When two ride on one horse, one must <em>sit</em> behind.&nbsp;<a href='/s/44169.html' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>7. <em>Sit</em> not sad because that time a fitful aspect weareth; Patience is most bitter, yet most sweet the fruit it bearth.&nbsp;<a href='/s/47316.html' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>8. A discontented man knows not where to <em>sit</em> easy.&nbsp;<a href='/s/42403.html' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>9. They had to <em>sit</em> in the waiting room for an hour.</div><div>10. The students <em>sit</em> in a circle on the floor.</div><div>11. He would <em>sit</em> quietly and watch what was happening.</div><div>12. There's only one seat so you'll have to <em>sit</em> on my lap .</div><div>13. I just want to <em>sit</em> down and relax.</div><div>14. She started to <em>sit</em> up, grimaced,[http://sentencedict.com/sit.html] and sank back weakly against the pillow.</div><div>15. Please <em>sit</em> down for a while.</div><div id="ad_marginbottom_0" style="text-align:center;margin-bottom:5px;"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><!-- 300_250_20170419 --><ins class="adsbygoogle" style="display:inline-block;width:300px;height:250px" data-ad-client="ca-pub-7200850114163593" data-ad-slot="6700237869"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script></div><div>16. Are you having a <em>sit</em> - down meal or a buffet at the wedding?</div><div>17. Don't just <em>sit</em> watching television-make yourself useful!</div><div>18. Get yourself some grub and come and <em>sit</em> down.</div><div>19. Come and <em>sit</em> on Grandpa's lap!</div><div>20. Come and <em>sit</em> here beside me.</div><div>21. Please <em>sit</em> still while I cut your hair.</div><div>22. Can I <em>sit</em> next to you?</div><div>23. <em>Sit</em> on the floor, stretching your legs out in front of you.</div><div>24. They were asked to <em>sit</em> down together and hash out their differences by their father.</div><div>25. A man may build himself a throne of bayonets, but he cannot <em>sit</em> on it.&nbsp;<a href='/s/47185.html' title='into the page of the sentence'><img src='/images/enter.jpg' style='vertical-align:bottom'/></a></div><div>26. I like to go off on my own - to <em>sit</em> back and bliss out in a darkened move theater.</div><div>27. With a nod of his head he indicated to me where I should <em>sit</em>.</div><div>28. Ask the children on the end to ease up ; some more people want to <em>sit</em> down.</div><div>29. I think I'm going to flake out; I'd better <em>sit</em> down.</div><div style="margin-bottom:3px;">30. He smiled at me and then asked me if he could <em>sit</em> near me.</div></div><!--all??-->
<!--?????????,?????????-->
<div id="student" style='display:none;'>
<div>1. I like to go off on my own - to <em>sit</em> back and bliss out in a darkened move theater.</div><div>2. They had to <em>sit</em> in the waiting room for an hour.</div><div>3. The students <em>sit</em> in a circle on the floor.</div><div>4. There's only one seat so you'll have to <em>sit</em> on my lap .</div><div>5. I just want to <em>sit</em> down and relax.</div><div id="imageId2" style="text-align:center;margin-top:-1px;margin-bottom:5px;"><img src="http://sentencedict.com/wordimage/62.jpg" style="max-width:100%;min-width:200px;" /><div style="text-align:center;margin-top:-2px;font-size:12px;line-height:normal;margin-bottom:0px;">Random good picture&nbsp;<input type="checkbox" name="notShowImg" value="1" onclick="notShow();" />Not show</div></div><div>6. She started to <em>sit</em> up, grimaced, and sank back weakly against the pillow.</div><div>7. Please <em>sit</em> down for a while.</div><div>8. Are you having a <em>sit</em> - down meal or a buffet at the wedding?</div><div>9. Don't just <em>sit</em> watching television-make yourself useful!</div><div>10. Get yourself some grub and come and <em>sit</em> down.</div><div>11. Come and <em>sit</em> here beside me.</div><div>12. Please <em>sit</em> still while I cut your hair.</div><div>13. Can I <em>sit</em> next to you?</div><div>14. <em>Sit</em> on the floor, stretching your legs out in front of you.</div><div>15. These protests have really made the government <em>sit</em> up and take notice .</div><div>16. I wouldn't have the patience to <em>sit</em> sewing all day.</div><div>17. Don't <em>sit</em> at home brooding all day.</div><div>18. My mum came over all giddy and had to <em>sit</em> down.</div><div>19. The only thing I can do is keep quiet and <em>sit</em> this one out.</div><div>20. You just <em>sit</em> there and shut up - I don't want to hear any more of your sass.</div><div>21. Come and <em>sit</em> on my lap and I'll read you a story.</div><div>22. When riding a horse you <em>sit</em> on the saddle.</div><div>23. Children can't <em>sit</em> still for long without fidgeting.</div><div>24. The nursery teacher made the children <em>sit</em> bolt upright.</div><div>25. The office was full of computers, and we had to <em>sit</em> back-to-back in long rows.</div><div>26. Don't <em>sit</em> on that bag - you'll squish the sandwiches.</div><div>27. Let's <em>sit</em> in the shade and keep cool.</div><div>28. Move up, John, and let the lady <em>sit</em> down.</div><div>29. Do you mind if I <em>sit</em> here?</div><div style="margin-bottom:3px;">30. She would <em>sit</em> at the piano and sing, electrifying us all.</div></div><!--student??-->
<script>
function notShow(){
	setCookie("notShowImg","1",12);
	//??????????????,??????.
	document.getElementById("imageId").style.display="none";
	var imageTemp=document.getElementById("imageId2");if(imageTemp){imageTemp.style.display="none";}
}
</script>
<div style="margin-bottom:3px;font-size:13px;line-height:21px;"><span style="font-weight:bold;float:left;display:block">More similar words:&nbsp;</span><span style='float:left;display:block;'><a href='site.html'>site</a>,&nbsp;</span><span style='float:left;display:block;'><a href='sit up.html'>sit up</a>,&nbsp;</span><span style='float:left;display:block;'><a href='sit on.html'>sit on</a>,&nbsp;</span><span style='float:left;display:block;'><a href='as it is.html'>as it is</a>,&nbsp;</span><span style='float:left;display:block;'><a href='visitor.html'>visitor</a>,&nbsp;</span><span style='float:left;display:block;'><a href='transit.html'>transit</a>,&nbsp;</span><span style='float:left;display:block;'><a href='deposit.html'>deposit</a>,&nbsp;</span><span style='float:left;display:block;'><a href='density.html'>density</a>,&nbsp;</span><span style='float:left;display:block;'><a href='position.html'>position</a>,&nbsp;</span><span style='float:left;display:block;'><a href='hesitate.html'>hesitate</a>,&nbsp;</span><span style='float:left;display:block;'><a href='as it were.html'>as it were</a>,&nbsp;</span><span style='float:left;display:block;'><a href='intensity.html'>intensity</a>,&nbsp;</span><span style='float:left;display:block;'><a href='diversity.html'>diversity</a>,&nbsp;</span><span style='float:left;display:block;'><a href='sensitive.html'>sensitive</a>,&nbsp;</span><span style='float:left;display:block;'><a href='situation.html'>situation</a>,&nbsp;</span><span style='float:left;display:block;'><a href='composition.html'>composition</a>,&nbsp;</span><span style='float:left;display:block;'><a href='transition.html'>transition</a>,&nbsp;</span><span style='float:left;display:block;'><a href='opposition.html'>opposition</a>,&nbsp;</span><span style='float:left;display:block;'><a href='inquisitive.html'>inquisitive</a>,&nbsp;</span><span style='float:left;display:block;'><a href='sensitivity.html'>sensitivity</a>.&nbsp;</span><div style='clear:both;height:1px;margin-top:-1px;overflow:hidden;margin-bottom:0px;'></div></div></div><!-- content -->
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
<div style="text-align:center;margin-top:5px;">
<a href="#">To top</a>
    1/8&nbsp;
           <a href="/sit_2.html">next<span style="margin-left:2px;">›</span></a>&nbsp;
          <input type="hidden" id="pageCountNo" value="8" />
      goto<input style="margin:auto 2px;" type="text" size=3 id="goPageNo" value="1"  onkeydown="if(event.keyCode==13){goPage('/sit');}" /><input type="button" style="margin-left:3px;cursor:hand;" value="ok" onclick="goPage('/sit');" />
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
<div class="mt1" style="margin-left:8px;">
<dl class="tbox">
    <dt> <strong>Leave a comment</strong> <span class="more"></span> </dt>
    <dd>
      <div>
        <form action="#" method="post" name="formComment">
          <div style="margin-top:5px;margin-left:5px;color:#999999;"><small>Welcome to leave a comment about this page!</small></div>
		  <div style="margin:5px 5px;">
		  <textarea style="width:99%" name="comment" rows="5" ></textarea>
		  </div>
          <div style="margin-left:5px;">
              Your name:
              <input type="text" name="username" value="me" size="8" style="font-size:13px;">
              <button type="button" onclick='beforeComment("sit")'>Submit</button>
          </div>
        </form>
      </div>
    </dd>
</dl>
</div>

<div style="margin-top:8px;margin-left:8px;">
  <dl class="tbox">
    <dt><strong>Latest comments</strong><span style="float:right;line-height:25px;padding-right:8px;"><a href="comment.php?word=sit">comment page&gt;&gt;</a></span></dt>
	<dd id="commetcontent">
	</dd>
  </dl>
</div>


</div><!-- div_main_left --> 

<script>queryComment("sit");</script>

<div style="clear:both"></div><!--??????-->
<div style="height:8px;font-size:0px;">&nbsp;</div>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- zishiying_20170419 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7200850114163593"
     data-ad-slot="5980384269"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<div style="text-align:center;margin-top:10px;font-size:17px;"><a href="#">To top</a></div>
<div class="footer w960 center mt1 clear" style="margin-top:15px;">
<div class="footer_body" style="margin-left:6px;">
<div class="copyright" style="margin-top:5px;">Copyright © 2016
492108537@qq.com</div>
<p></p><!-- /powered -->
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
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-578e4666bc3396f1"></script>
<script>
window.onscroll=function(){ 
	var ins = document.documentElement.scrollTop || window.pageYOffset || document.body.scrollTop;
	if(ins > 30) 
		document.getElementById("returnTop1").style.display="block";
	else  
		document.getElementById("returnTop1").style.display="none";  
};  
</script>
<a href="#" class="returnTop" id="returnTop1" title="????">
  <span class="returnTop_s"></span>
  <span class="returnTop_b"></span>
</a></div><!-- pageDiv -->
</body>
</html>