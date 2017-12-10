<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
if(login_check($mysqli) == true) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Level 1 - 11</title>
	<link type="text/css" rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.2.min.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.6/bootstrap.min.js"></script>
	<!--[if IE]>
	<script src="https://stephenmccready.asia/html5shiv.min.js"></script>
	<![endif]-->
	<script src="js/mi.js"></script>
	<link rel="stylesheet" href="css/main.css" />
</head>
<body onload="setTitle();">
<?php include 'navbar.php'; ?>
<div class="container-fluid">
	<div class="jumbotron lessonHeaderLeft">Dì shíyī kè<br/>第 十一 课<br/>Lesson 11</div>
	<div class="lessonHeaderRight"><h2>Xiànzài jǐ diǎn？<br/>现在 几 点？<br/><b>What's the time now?</b></h2></div>
</div>
<div class="container-fluid">
	<h4 class="sublesson">1. <button class="cd" onclick="play('11-1');">&#128191; 11-1</button>
	<audio controls="" preload="metadata" id="11-1"><source src="../mandarin/audio/11-1.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén yī。漯文一。 Zài túshūguǎn. 在 图书馆。</h4>
	<h4 class="textSection">Text 1. In the Library.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Xiànzài jǐ diǎn？<br/>
		A: 现在 几 点？<br/>
		<span class="masked">B: </span>Xiànzài shí diǎn shí fēn.<br/>
		B: 现在 十 点 十 分。<br/><br/>
		<span class="masked">A: </span>Zhōngwǔ jǐ diǎn chī fàn<br/>
		A: 中午 几 点 吃 饭<br/>
		<span class="masked">B: </span>Shí'èr diǎn chī fàn<br/>
		B: 十二 点 吃 饭。<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: What's the time now?<br/>
		B: It's 10 past ten now<br/><br/>
		A: When shall we have our lunch?<br/>
		B: At twelve o'clock<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>现在</td><td>Xiànzài</td><td>noun</td><td>now</td></tr>
			<tr><td>点</td><td>diǎn</td><td>meas.</td><td>o'clock</td></tr>
			<tr><td>分</td><td>fēn</td><td>meas.</td><td>minute</td></tr>
			<tr><td>中午</td><td>zhōngwǔ</td><td>noun</td><td>noon</td></tr>
			<tr><td>吃 饭</td><td>chī fàn</td><td>verb</td><td>to eat a meal</td></tr>
		</table>
		</div>
	</div>
	<h4 class="sublesson">2. <button class="cd" onclick="play('11-2');">&#128191; 11-2</button>
	<audio controls="" preload="metadata" id="11-2"><source src="../mandarin/audio/11-2.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">漯文二。Kè wén èr。 Zài Jiā. 在 家。</h4>
	<h4 class="textSection">Text 2. At home.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Bàba shénme shíhou huí jiā?<br/>
		A: 爸爸 什么 时侯 回 家?<br/>
		<span class="masked">B: </span>Xiàwǔ wǔ diǎn.<br/>
		B: 下午 五 点。<br/><br/>
		<span class="masked">A: </span>Wǒmen shénme shíhou qù kàn diànyǐng?<br/>
		A: 我们 什么 时侯 去 看 电影<br/>
		<span class="masked">B: </span>Liù diǎn sānshí fēn.<br/>
		B: 六 点 三十 分。<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: When is father coming home?<br/>
		B: At five o'clock in the afternoon<br/><br/>
		A: When are we going to see the movie?<br/>
		B: At half past six.<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>时侯</td><td>shíhou</td><td>noun</td><td>time, moment</td></tr>
			<tr><td>回</td><td>huí</td><td>verb</td><td>to come/go back,<br/>to return</td></tr>
			<tr><td>我们</td><td>wǒmen</td><td>pron.</td><td>we, us</td></tr>
			<tr><td>电影</td><td>diànyǐng</td><td>noun</td><td>movie</td></tr>
		</table>
		</div>
	</div>
	<h4 class="sublesson">3. <button class="cd" onclick="play('11-3');">&#128191; 11-3</button>
	<audio controls="" preload="metadata" id="11-3"><source src="../mandarin/audio/11-3.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">漯文三。Kè wén sān。 Zài Jiā. 在 家。</h4>
	<h4 class="textSection">Text 3. At home.</h4>	
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Wǒ xīngqī yī qù Běijīng。<br/>
		A: 我 星期 一 去 北京。<br/>
		<span class="masked">B: </span>Nǐ xiǎng zài Běijīng zhù jī tiān?<br/>
		B: 你 想 在 北京 住 几 天？<br/>
		<span class="masked">A: </span>Zhù sān tiān.<br/>
		A: 住 三 天。<br/>
		<span class="masked">B: </span>Xīngqī wǔ qián néng huí jiā ma?<br/>
		B: 星七 五 前 能 回 家 吗？<br/>
		<span class="masked">A: </span>Néng<br/>
		A: 能<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: I'll go to Běijīng next Monday.<br/>
		B: How long will you stay in Běijīng?<br/>
		A: For three days<br/>
		B: Can you come back Friday?<br/>
		A: Yes, I can<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>住</td><td>zhù</td><td>verb</td><td>to live,<br/>to stay</td></tr>
			<tr><td>前</td><td>qián</td><td>noun</td><td>before,<br/>earlier than</td></tr>
			<tr><th colspan="4"><i>Proper Nouns</i></th></tr>
			<tr><td>北京</td><td colspan="3">Běijīng</td></tr>
		</table>
		</div>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">汪释 Notes</h3>
	<h4 class="sublesson">1. Expression of Time</h4>
	<p><b>点</b> (<b>diǎn</b>: o'clock) and <b>分</b> (<b>fēn</b>: minute) are used to express time in Chinese, observing the principle of "the bigger unit preceding the smaller unit. For Example:</p>
	<div class="well well-sm">
	9:00&nbsp;-->&nbsp;九<b>点</b>&nbsp;(jiǔ <b>diǎn</b>)<br/>
	11:00&nbsp;-->&nbsp;十一<b>点</b>&nbsp;(shíyī <b>diǎn</b>)<br/>
	2:00&nbsp;-->&nbsp;两<b>点</b>&nbsp;(liǎng <b>diǎn</b>)<br/>
	</div>
	<p>If it is not  "whole-hour" time. "<b>分</b>" (<b>fēn</b>: minute) is used. The pattern is "...<b>点</b>...<b>分</b>". For example:</p>
	<div class="well well-sm">
	5:30&nbsp;-->&nbsp;五 <b>点</b> 三十 <b>分</b>&nbsp;(wǔ <b>diǎn</b> sānshí  <b>fēn</b>)<br/>
	3:10&nbsp;-->&nbsp;三 <b>点</b> 十 <b>分</b>&nbsp;(sān <b>diǎn</b> shí <b>fēn</b>)<br/>
	2:05&nbsp;-->&nbsp;两 <b>点</b> 零五 <b>分</b>&nbsp;(liǎng <b>diǎn</b> língwǔ <b>fēn</b>)<br/>
	</div>
	<p>To distinguish a time before noon from one afternoon, the pattern:<br/>
	"<b>上午</b> (<i>shàngwǔ: morning</i>) ... <b>点</b> (... <b>分</b>) "<br/>
	or<br/>
	"<b>下午</b> (<i>xiàwǔ: afternoon</i>) ... <b>点</b> (... <b>分</b>) "<br/> is used. For example:</p>
	<div class="well well-sm">	
	8:00 am&nbsp;-->&nbsp;<b>上午</b> 八 <b>点</b>&nbsp;(shàngwǔ bā diǎn)<br/>
	3:10 pm&nbsp;-->&nbsp;<b>下午</b> 三 <b>点</b> 十 <b>分</b>&nbsp;(xiàwǔ sān diǎn shí <b>fēn</b>)<br/>
	5:25 pm&nbsp;-->&nbsp;<b>下午</b> 五 <b>点</b> 二十五 <b>分</b>&nbsp;(xiàwǔ wǔ diǎn èrshíwǔ <b>fēn</b>)<br/>
	</div>
	<h4 class="sublesson">2. Time Word Used as an Adverbial</h4>
	<p>When a time word serves as an adverbial modifier in a sentence, it often follows the subject. Sometimes it can be used before the subject. For example:</p>
	<table class="table table-condensed table-responsive table-centered">
		<tr><th>Subject</th><th>Time<br/>(adverbial)</th><th>Predicate</th></tr>
		<tr><td>妈妈<br/>Māma<br/>Mother</td><td>六点<br/>lìu diǎn<br/>6 o'clock</td><td>做饭<br/>zuò fàn<br/>makes a meal</td></tr>
		<tr><td>李 老师<br/>Lǐ lǎoshī<br/>Professor Li</td><td>上午 八 点<br/>shángwǔ bā diǎn<br/>8 o'clock in the morning</td><td>去 学校<br/>qù xuéxiào<br/>go to school</td></tr>
		<tr><td>我<br/>Wǒ<br/>I</td><td>星期 一<br/>xīngqī yī<br/>Monday</td><td>去 北京<br/>qù Běijīng<br/>go to Běijīng</td></tr>
	</table>
	<table class="table table-condensed table-responsive table-centered">
		<tr><th>Time<br/>(adverbial)</th><th>Subject</th><th>Predicate</th></tr>
		<tr><td>七 点<br/>qī diǎn<br/>7 o'clock</td><td>我<br/>wǒ<br/>I</td><td>吃饭<br/>chīfàn<br/>eat a meal</td></tr>
		<tr><td>中午 十二 点<br/>zhōngwǔ shíèr diǎn<br/>At noon</td><td>我们<br/>wǒmen<br/>we</td><td>回家<br/>huí jiā<br/>return home</td></tr>
		<tr><td>下午 五 点<br/>xiàwǔ wǔ diǎn<br/>5pm</td><td>他们<br/>tāmen<br/>they</td><td>去看电影<br/>qù kàn diànyǐng<br/>go see a movie</td></tr>
	</table>
	<h4 class="sublesson">3. The Noun "<b>前</b>" (<b>qián</b>: before, earlier than)</h4>
	<p>The Noun "<b>前</b>" (<i>qián</i>) can be used to refer to a period prior to the present time or the time being mentioned. For example:</p>
	<table class="table table-condensed table-responsive table-centered">
			<tr><td>三 天 <b>前</b></td><td>一 个 星期 <b>前</b></td><td>四 点 <b>前</b></td><td>星期 五 <b>前</b></td></tr>
			<tr><td>Sān tiān <b>qián</b></td><td>yī gè xīngqī <b>qián</b></td><td>sì diǎn <b>qián</b></td><td>xīngqī wǔ <b>qián</b></td></tr>
			<tr><td>3 days ago</td><td>1 week ago</td><td>Before 4 o'clock</td><td>Before Friday</td></tr>
	</table>
	<table class="table table-condensed table-responsive">
			<tr><td>A: 你 什么 时侯  去 学校?</td><td>Ni shénme shíhou qù xuéxiào?</td><td>When did you go to school?</td></tr>
			<tr><td>B: 八 点 <b>前</b></td><td>bā diǎn <b>qián</b></td><td>Before 8 o'clock</td></tr>
			<tr><td>A: 你 什么 时侯  回 北京?</td><td>Nǐ shénme shíhóu huí Běijīng</td><td>When do you go back to Beijing?</td></tr>
			<tr><td>B: 星期 六 <b>前</b></td><td>Xīngqī lìu <b>qián</b></td><td>Before Saturday</td></tr>
			<tr><td>A: (你) 星期五 前 能 回 家 吗？</td><td>(Nǐ) xīngqī wǔ qián néng huí jiā ma?</td><td>Can you go home before Friday?</td></tr>
			<tr><td>B: 能</td><td>néng</td><td>Yes, I can</td></tr>
	</table>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">练习 (liàn xí) Exercises</h3>
	<h4 class="sublesson">1. Role-play the dialogues</h4>
	<h4 class="sublesson">2. Answer the questions according to the actual situations.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="han hanzi111">现在 几 点？<br/>
			<button type="button" id="n111" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g111" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn111">Xiànzài jǐ diǎn?<br/></span>
		<span class="eng" id="eng111">What time is it now?<br/></span>
		<br/>
		<span class="han hanzi112">他们 几 点 吃饭？<br/>
			<button type="button" id="n112" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g112" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn112">Tāmen jǐ diǎn chīfàn?<br/></span>
		<span class="eng" id="eng112">What time do they eat?<br/></span>
		<br/>
		<span class="han hanzi113">爸爸 什么 时候 回 家？<br/>
			<button type="button" id="n113" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g113" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn113">Bàba shénme shíhòu huí jiā?<br/></span>
		<span class="eng" id="eng113">When did dad go home?<br/></span>
		<br/>
		<span class="han hanzi114">他们 什么 时候 去 看 电影？<br/>
			<button type="button" id="n114" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g114" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn114">Tāmen shénme shíhòu qù kàn diànyǐng?<br/></span>
		<span class="eng" id="eng114">When did they go to the movies?<br/></span>
		<br/>
		<span class="han hanzi115">他 去 哪儿？什么 时候 能 回 家？<br/>
			<button type="button" id="n115" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g115" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn115">Tā qù nǎr? Shénme shíhòu néng huí jiā?<br/></span>
		<span class="eng" id="eng115">Where is he? When can he return home?<br/></span>
		<br/>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3>拼音 Pinyin</h3>
	<h4>1. Pronunciation of Neutral-Tone Syllables</h4>
	<p>The neutral tone in Chinese is not only a phonological phenomenon, but also a way to distinguish meanings. For example, the word "冻西" refers to the directions east and west when read as "dōngxī", but when read as "dōngxi", it means thing/stuff.</p>
<audio class="hidden" controls="" preload="metadata" id="zhuo1zi"><source src="../mandarin/audio/zhuo1zi.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="pan2zi"><source src="../mandarin/audio/pan2zi.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="yi3zi"><source src="../mandarin/audio/yi3zi.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="ku4zi"><source src="../mandarin/audio/ku4zi.m4a" type="audio/mpeg">No audio</audio>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><td>老子</td><td>lǎozi<br/>(<i>slang</i>) father (noun)</td><td>Lǎozǐ<br/>Lao-tzu, an ancient Chinese<br/>thinker</td></tr>
		<tr><td>买卖</td><td>mǎimai<br/>business (noun)</td><td>mǎimài<br/>to buy and sell (verb)</td></tr>
		<tr><td>大意</td><td>dàyi<br/>careless (adj.)</td><td>dàyì<br />rough idea (noun)</td></tr>
	</table>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h4 class="sublesson">1. Single-Component Characters</h4>
	<div class="table">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr><td>午</td><td>wǔ</td><td>Period of time between 11am and 1pm</td><td><div><img class="strokeOrder" src="img/午-order.gif" alt="午"/></div></td></tr>
			<tr><td>电</td><td>diàn</td><td>electricity</td><td><div><img class="strokeOrder" src="img/电-order.gif" alt="电"/></div></td></tr>
		</table>
	</div>
	<h4 class="sublesson">2 Chinese Radicals "阝" (fù) and "亻" (rén)</h4>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="active"><th>Radical</th><th>Explanation</th><th>Examples</th></tr>
			<tr>
				<td><br/>阝</td>
				<td><br/>The radical "阝" is usually related to a landform or location.</td>
				<td> 院 &nbsp; yuàn &nbsp; courtyard
					<br/><br/> 阳 &nbsp; yáng  &nbsp; sun</td>
			</tr>
			<tr>
				<td><br/>亻</td>
				<td><br/>The radical "亻" is related to a person.</td>
				<td> 你 &nbsp; nǐ &nbsp; (<i>singular</i>)<br/>you
					<br/><br/> 他 &nbsp; tā &nbsp; he, him</td>
			</tr>
		</table>
	</div>
</div>
<?php
} else { header( 'Location: https://www.stephenmccready.asia/mi/index.php'); }
?>
</body>
</html>
