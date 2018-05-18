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
	<title>Level 1 - 6</title>
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
	<div class="jumbotron lessonHeaderLeft">Dì liù kè<br/>第六课<br/>Lesson 6</div>
	<div class="lessonHeaderRight"><h2>Wǒ huì shuō Hànyǔ<br/>我会说汉语<br/><b>I can speak Chinese</b></h2></div>
</div>
<div class="container-fluid">
	<h4 class="sublesson"><button class="cd" onclick="play('06-1');">&#128191; 06-1</button>
	<audio controls="" preload="metadata" id="06-1"><source src="../mandarin/audio/06-01.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">漯文一。Kè wén yī. Text 1.</h4>
	<h4 class="textSection">在学校。Zài xuéxiào. In the school.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Nǐ huì shuō Hànyǔ ma?<br/>
		A: 你 会 说 汉语 吗？<br/>
		<span class="masked">B: </span>Wǒ huì shuō Hànyǔ.<br/>
		B: 我 会 说 汉语。<br/><br/>
		<span class="masked">A: </span>Nǐ māma huì shuō Hànyǔ ma?<br/>
		A: 你 妈妈 会 说 汉语 吗？<br/>
		<span class="masked">B: </span>Tā bú huì shuō.<br/>
		B: 她 不 会 说。
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Can you speak Chinese?<br/>
		B: Yes, I can.<br/><br/>
		A: Can your mother speak Chinese?<br/>
		B: No, she can't<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>会</td><td>huì</td><td>modal<br/>verb</td><td>can,<br/>to be able to</td></tr>
			<tr><td>说</td><td>shuō</td><td>verb</td><td>to speak,<br/>to say</td></tr>
			<tr><td>妈妈</td><td>māma</td><td>noun</td><td>mother</td></tr>
		</table>
		</div>
	</div>
	<h4 class="sublesson"><button class="cd" onclick="play('06-2');">&#128191; 06-2</button>
	<audio controls="" preload="metadata" id="06-2"><source src="../mandarin/audio/06-02.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">漯文二。Kè wén èr. Text 2. </h4>
	<h4 class="textSection">在厨房。Zài chúfáng. In the kitchen.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Zhōngguó cài hǎo chī ma?<br/>
		A: 中国  菜 好 吃 吗？<br/>
		<span class="masked">B: </span>Zhōngguó cài hěn hǎochī<br/>
		B: 中国  菜 很 好吃。<br/><br/>
		<span class="masked">A: </span>Nǐ huì zuò Zhōngguó cài ma?<br/>
		A: 你 会 做 中国   菜 吗？<br/>
		<span class="masked">B: </span>Wǒ bú huì zuò<br/>
		B: 我 不 会 做。
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Is Chinese food delicious?<br/>
		B: Yes, quite delicious.<br/><br/>
		A: Can you cook Chinese food?<br/>
		B: No. I can't.
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>菜</td><td>cài</td><td>noun</td><td>dish,<br/>cuisine</td></tr>
			<tr><td>很</td><td>hěn</td><td>adverb</td><td>very,<br/>quite</td></tr>
			<tr><td>好吃</td><td>hǎochī</td><td>adjective</td><td>delicious,<br/>tasty</td></tr>
			<tr><td>做</td><td>zuò</td><td>verb</td><td>to make,<br/>to produce</td></tr>
		</table>
		</div>
	</div>
	<h4 class="sublesson"><button class="cd" onclick="play('06-3');">&#128191; 06-3</button>
	<audio controls="" preload="metadata" id="06-3"><source src="../mandarin/audio/06-03.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">漯文三。Kè wén sān. Text 3.</h4>
	<h4 class="textSection">在 图书馆。Zài túshūguǎn. In the library.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Nǐ huì xiě Hànzì ma?<br/>
		A: 你 会 写 汉字 吗？<br/>
		<span class="masked">B: </span>Wǒ huì xiě.<br/>
		B: 我 会 写。<br/><br/>
		<span class="masked">A: </span>Zhège zì zěnme xiě?<br/>
		A: 这个 字  怎么 写<br/>
		<span class="masked">B: </span>Duìbuqi,  zhège zi wǒ huì dú,  bú huì xiě.<br/>
		B: 对不起，这个 字 我 会 读，不 会 写。
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Can you write Chinese characters?<br/>
		B: Yes, I can<br/><br/>
		A: How do you write this character?<br/>
		B: Sorry, I can read it, but I don't know how to write it
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>写</td><td>xiě</td><td>verb</td><td>to write</td></tr>
			<tr><td>汉字</td><td>Hànzì</td><td>noun</td><td>Chinese<br/>character</td></tr>
			<tr><td>字</td><td>zi</td><td>noun</td><td>character, word</td></tr>
			<tr><td>怎么</td><td>zěnme</td><td>pronoun</td><td><i>how (indicating nature,<br/>condition or<br/>manner etc.)</i></td></tr>
			<tr><td>读</td><td>dú</td><td>verb</td><td>to read</td></tr>
		</table>
		</div>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">汪释 Notes</h3>
	<h4 class="sublesson">1. The Modal Verb "会" <i>(huì: can, to be able to)</i></h4>
	<p>The modal verb "会" <i>(huì)</i> is used before a verb, indicating acquiring an ability through learning. It's negative form is "不会"<i>(bú huì)</i>. For example:</p>
	<table class="table table-responsive table-condensed">
		<tr><th>Subject</th><th>bú (不) 会 huì</th><th>Verb</th></tr>
		<tr><td>(Wǒ) 我 (I)</td><td>(huì) 会 (can)</td><td>(xiě Hànzì) 写 汉字 (speak Chinese)</td></tr>
		<tr><td>(Wǒ) 我 (I)</td><td>(bú huì) 不会 (can't)</td><td>(zuò Zhōngguó cài) 做 中国 菜 (make Chinese food)</td></tr>
		<tr><td>(Nǐ māma) 你 妈妈 (Your mother)</td><td>(huì) 会 (can)</td><td>(shuō Hànyǔ ma) 说 汉语 吗？(speak Chinese?)</td></tr>
	</table>
</div>
<div class="container-fluid">
	<h4 class="sublesson">2. Sentences with an Adjectival Predicate</h4>
	<p>Used in the structure "subject + adverb of degree + adjective", the adjectival predicate describes the nature or state of somebody or something, usually following the adverb of degree "很" <i>(hěn：very)</i>. The negative form is "subject + (bú) 不 (not) + adverb of degree + adjective". For example:</p>
	<table class="table table-responsive table-condensed">
		<tr><th>Subject</th><th>Adverb of Degree</th><th>Adjective</th></tr>
		<tr><td>(Wǒ) 我 (I)</td><td>(hěn) 很 (very)</td><td>(hǎo) 好。 (good)</td></tr>
		<tr><td>(Wǒ māma de Hànyǔ) 我 妈妈 的 汉语 (My mother's Chinese)</td><td>(bú) 不 (not)</td><td>(hǎo) 好。 (good)</td></tr>
		<tr><td>(Zhōngguó cài) 中国 菜 (Chinese food)</td><td>(hěn) 很 (very)</td><td>(hǎochī) 好吃。 (delicious)</td></tr>
	</table>
</div>
<div class="container-fluid">
	<h4 class="sublesson">3. The Interrogative Pronoun "<b>怎么</b>" (<b>zěnme</b>: how)</h4>
	<p>The interrogative Pronoun "<b>怎么</b>" (<b>zěnme</b>: how) is used before a verb to ask about the manner of an action. For example:</p>
	<table class="table table-responsive table-condensed">
		<tr><td>这个 汉字 <b>怎么</b> 读？<br/>Zhègè Hànzì <b>zěnme</b> du?</td><td>How do you read this Chinese character?</td></tr>
		<tr><td>你 的 汉语 名字 <b>怎么</b> 写?<br/>Nǐ de Hànyǔ míngzi <b>zěnme</b> xiě?</td><td>How is your Chinese name written?</td></tr>
		<tr><td>这个 字 <b>怎么</b> 写?<br/>Zhègè zì <b>zěnme</b> xiě?</td><td>How is this character written?</td></tr>
	</table>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">练习 (liàn xí) Exercises</h3>
	<h4 class="sublesson">1. Role-play the dialogues</h4>
	<h4 class="sublesson">2. Answer the questions according to the actual situations</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="han hanzi61">你 会 说 汉语 吗？<br/>
			<button type="button" id="n61" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g61" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn61">Nǐ huì shuō Hànyǔ ma?<br/></span>
		<span class="eng" id="eng61">Do you speak Chinese?<br/></span>
		<br/>
		<span class="han hanzi62">你 会 写 汉字 吗？<br/>
			<button type="button" id="n62" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g62" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn62">Nǐ huì xiě Hànzì ma?<br/></span>
		<span class="eng" id="eng62">Can you write Chinese characters?<br/></span>
		<br/>
		<span class="han hanzi63">你 会 做 中国 菜 吗？<br/>
			<button type="button" id="n63" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g63" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn63">Nǐ huì zuò Zhōngguó cài ma?<br/></span>
		<span class="eng" id="eng63">Can you cook Chinese food?<br/></span>
		<br/>
		<span class="han hanzi64">你 有 汉语 名字 吗？<br/>
			<button type="button" id="n64" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g64" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn64">Nǐ yǒu Hànyǔ míngzì ma?<br/></span>
		<span class="eng" id="eng64">Do you have a Chinese name?<br/></span>
		<br/>
		<span class="han hanzi65">你 会 写 你 的 汉语 名字 吗？<br/>
			<button type="button" id="n65" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g65" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn65">Nǐ huì xiě nǐ de Hànyǔ míngzì ma?<br/></span>
		<span class="eng" id="eng65">Can you write your Chinese name?<br/></span>
		<br/>
	</div>
	<h4 class="sublesson">3. Describe the pictures using the newly-learned language points and words.</h4>
	<p>Tā shi _________, tā jīnnián _________ le。<br/>
	他 是 _________, 他 今年 _________ 了。</p>
	<p>Tā jiā yǒu _________ rén<br/>
	她 家 有 _________ 人。</p>
	<p>Tā shì wǒmen de Hànyǔ _________ 。<br/>
	他 是 我们 的 汉语 _________ 。<br/>
	tā jīnnián _________ le.<br/>
	他 今年 _________ 了。</p>
	<p>Zhè shì Zhāng lǎoshī de _________, tā jīnnián _________ le。<br/>
	这 是 张 老师 的 _________, 她 今年 _________ 了。</p>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3>拼音 Pinyin</h3>
	<h4>Tone Collocation in Dysyllabic Words (1): 1st tone + 1st/2nd/3rd/4th tone</h4>
<audio class="hidden" controls="" preload="metadata" id="ka1fei1"><source src="../mandarin/audio/ka1fei1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="gong1yuan2"><source src="../mandarin/audio/gong1yuan2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="ji1chang3"><source src="../mandarin/audio/ji1chang3.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="che1zhan4"><source src="../mandarin/audio/che1zhan4.m4a" type="audio/mpeg">No audio</audio>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ka1fei1');">咖啡<br/>kāfēi<br/>coffee</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('gong1yuan2');">公园 (公園)<br/>gōngyuán<br/>park</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ji1chang3');">机场 (機場)<br/>jīchǎng<br/>airport</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('che1zhan4');">车站 (車站)<br/>chēzhàn<br/>rail station</button></div>
	</div>
	<p><b>Note:</b> The third tone in collocation is pronounced differently from the third tone used alone (214).  It's a falling tone with a pitch approximate to 211, which means its latter half won't rise as it normally does when used alone</p>
<audio class="hidden" controls="" preload="metadata" id="jin1tian1"><source src="../mandarin/audio/jin1tian1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="jin1nian2"><source src="../mandarin/audio/jin1nian2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="jing1cai3"><source src="../mandarin/audio/jing1cai3.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="che1piao4"><source src="../mandarin/audio/che1piao4.m4a" type="audio/mpeg">No audio</audio>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('jin1tian1');">今天<br/>jīntiān<br/>today</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('jin1nian2');">今年<br/>jīnnián<br/>this year</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('jing1cai3');">精彩<br/>jīngcǎi<br/>fantastic</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('che1piao4');">车票<br/>chēpiào<br/>ticket</button></div>
	</div>
<audio class="hidden" controls="" preload="metadata" id="gong1si1"><source src="../mandarin/audio/gong1si1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="gang1cai2"><source src="../mandarin/audio/gang1cai2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="cao1chang3"><source src="../mandarin/audio/cao1chang3.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="ji1dan4"><source src="../mandarin/audio/ji1dan4.m4a" type="audio/mpeg">No audio</audio>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('gong1si1');">公司<br/>gōngsī<br/>company</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('gang1cai2');">刚才 (剛才)<br/>gāngcái<br/>just now</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('cao1chang3');">操场 (操場)<br/>cāochǎng<br/>playground</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ji1dan4');">鸡蛋 (雞蛋)<br/>jīdàn<br/>egg</button></div>
	</div>
<audio class="hidden" controls="" preload="metadata" id="gua1feng1"><source src="../mandarin/audio/gua1feng1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="huan1ying2"><source src="../mandarin/audio/huan1ying2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="jing1li3"><source src="../mandarin/audio/jing1li3.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="ji1hui4"><source src="../mandarin/audio/ji1hui4.m4a" type="audio/mpeg">No audio</audio>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('gua1feng1');">刮风 (颳風)<br/>guā fēng<br/>to be windy</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('huan1ying2');">欢迎 (歡迎)<br/>huān yíng<br/>welcome</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('jing1li3');">经理 (經理)<br/>jīng lǐ<br/>playground</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ji1hui4');">机会 (機會)<br/>jī huì<br/>opportunity</button></div>
	</div>
<audio class="hidden" controls="" preload="metadata" id="guan1xin1"><source src="../mandarin/audio/guan1xin1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="guan1yu2"><source src="../mandarin/audio/guan1yu2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="kai1shi3"><source src="../mandarin/audio/kai1shi3.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="gao1xing4"><source src="../mandarin/audio/gao1xing4.m4a" type="audio/mpeg">No audio</audio>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('guan1xin1');">关心 (關心)<br/>guān xīn<br/>to care about</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('guan1yu2');">关于 (關于)<br/>guān yú<br/>about</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('kai1shi3');">开始 (開始)<br/>kāi shǐ<br/>start</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('gao1xing4');">高兴 (高興)<br/>gāo xìng<br/>happy</button></div>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3>汉字 Characters</h3>
	<h4 class="sublesson">1. Strokes of Chinese Characters (6)</h4>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="active">
				<th>笔画名称<br/>bǐ huà<br/>míng chēng<br/>Stroke</th>
				<th>运笔方向<br/>yùn bǐ<br/>fāng xiàng<br/>Direction</th>
				<th>例字<br/>lì zì<br/>Example<br/>Characters</th>
			</tr>
			<tr>
				<td>撇折 piězhé<br/>left-falling<br/>to turning</td>
				<td><img style="width: 3em;" src="../mandarin/img/piezhe.gif" alt="piězhé"/></td>
				<td>么&nbsp;me&nbsp;a suffix<br/>东&nbsp;dōng&nbsp;east</td>
			</tr>
			<tr>
				<td>紏钩 xiégōu<br/>slanting<br/>hook</td>
				<td><img style="width: 2em;" src="../mandarin/img/xiegou.gif" alt="xiégōu"/></td>
				<td>我&nbsp;wǒ&nbsp;I, me<br/>钱&nbsp;qián&nbsp;money</td>
			</tr>
			<tr>
				<td>堤 tí<br/>rising</td>
				<td><img style="width: 2em;" src="../mandarin/img/ti.gif" alt="tí"/></td>
				<td>我&nbsp;wǒ&nbsp;I, me<br/>打&nbsp;dǎ&nbsp;to beat, to hit</td>
			</tr>
		</table>
	</div>
	<h4 class="sublesson">2. Single-Component Characters</h4>
	<table class="table table-bordered table-condensed table-responsive table-centered table-SCC">
		<tr><td>东</td><td>dōng</td><td>east</td><td><div><img class="strokeOrder" src="img/东-order.gif" alt="东"/></div></td></tr>
		<tr><td>我</td><td>wǒ</td><td>I, me</td><td><div><img class="strokeOrder" src="img/我-order.gif" alt="我"/></div></td></tr>
		<tr><td>西</td><td>xī</td><td>west</td><td><div><img class="strokeOrder" src="img/西-order.gif" alt="西"/></div></td></tr>
	</table>
	<h4 class="sublesson">3. Structure of Chinese Characters (1): single-component and compound</h4>
	<p>Basically Chinese characters fall into two types of structures: the single-component structure and the compound structure. The former has only one component, for example "人" (rén, person); while the latter is made up of two or more components, for example, "你" (nǐ, you)</p>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="active">
				<th>Structure</th>
				<th>例字<br/>lì zì<br/>Example<br/>Characters</th>
				<th>Illustrations</th>
			</tr>
			<tr>
				<td><br />single</td>
				<td>人 &nbsp; ren &nbsp; human<br/>我 &nbsp; wo &nbsp; I,me<br/>中 &nbsp; zhong &nbsp; middle</td>
				<td><span class="illustration">人</span> &nbsp; <span class="illustration">我</span> &nbsp; <span class="illustration">中</span></td>
			</tr>
			<tr>
				<td><br />compound</td>
				<td>你 &nbsp; ni &nbsp; (<i>singular</i>) you<br/><br/>做 &nbsp; zuò &nbsp; to do</td>
				<td><span class="illustration">你</span> &nbsp; <span class="illustration">做</span></td>
			</tr>
		</table>
	</div>
</div>
<?php
} else { header( 'Location: https://www.stephenmccready.asia/mi/index.php'); }
?>
</body>
</html>
