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
	<title>Level 1 - 14</title>
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
	<div class="jumbotron lessonHeaderLeft">Dì shísì kè<br/>第 十四 课<br/>Lesson 14</div>
	<div class="lessonHeaderRight"><h2>Tā mǎile bùshǎo yīfu<br/>她 买了 不少 衣服<br/><b>She has bought quite a few clothes</b></h2></div>
</div>
<div class="container-fluid">
	<h4 class="sublesson">1. <button class="cd" onclick="play('14-1');">&#128191; 14-1</button>
	<audio controls="" preload="metadata" id="14-1"><source src="../mandarin/audio/14-1.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén yī. Zài sùshè.<br/>漯文一。在宿舍。<br/>Text 1. In the Dorm.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Zuótiān shàngwǔ nǐ qù nǎr le?<br/>
		A: 昨天 上午 你 去 哪儿 了？<br/>
		<span class="masked">B: </span>Wǒ qù shāngdiàn mǎi dōngxī le<br/>
		B: 我 去 商店 买 东西 了<br/><br/>
		<span class="masked">A: </span>Nǐ mǎi shénme le?<br/>
		A: 你 买 什么 了？<br/>
		<span class="masked">B: </span>Wǒ mǎile yīdiǎnr píngguǒ.<br/>
		B: 我 买了 一点儿 苹果。<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Where did you go yesterday morning?<br/>
		B: I went to the store to buy something<br/>
		A: What did you buy?<br/>
		B: I bought some apples.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>东西</td><td>dōngxī</td><td>noun</td><td>thing, stuff</td></tr>
			<tr><td>一点儿</td><td>yīdiǎnr</td><td>num.-m</td><td>a few,<br/>a little</td></tr>
			<tr><td>苹果</td><td>píngguǒ</td><td>noun</td><td>apple</td></tr>
		</table>
		</div>
	</div>
	<h4 class="sublesson">2. <button class="cd" onclick="play('14-2');">&#128191; 14-2</button>
	<audio controls="" preload="metadata" id="14-2"><source src="../mandarin/audio/14-2.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén èr. Zài gōngsī.<br/>漯文二。在 公司。<br/>Text 2. In the Company.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Nǐ kànjiàn Zhāng xiānshēng le ma?<br/>
		A: 你 看见 张 先生 了 吗？<br/>
		<span class="masked">B: </span>Kànjiàn le, tā qù xué kāi chē le.<br/>
		B: 看见 了， 他 去 学 开 车 了。<br/><br/>
		<span class="masked">A: </span>Tā shénme shíhòu néng huílái?<br/>
		A: 他 什么 时候 能 回来？<br/>
		<span class="masked">B: </span>Sìshí fēnzhōng hòu huílái<br/>
		B: 四十 分钟 后 回来。<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Have you seen Mr. Zhang?<br/>
		B: Yes. He has gone to a driving lesson.<br/>
		A: When can he come back?<br/>
		B: After 40 minutes<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>看见</td><td>kànjiàn</td><td>verb</td><td>to see</td></tr>
			<tr><td>先生</td><td>xiānshēng</td><td>noun</td><td>Mr., sir</td></tr>
			<tr><td>开</td><td>kāi</td><td>verb</td><td>to drive</td></tr>
			<tr><td>车</td><td>chē</td><td>noun</td><td>car,<br/>vehicle</td></tr>
			<tr><td>回来</td><td>huílái</td><td>verb</td><td>to come back</td></tr>
			<tr><td>分钟</td><td>fēnzhōng</td><td>noun</td><td>minute</td></tr>
			<tr><td>后</td><td>hòu</td><td>noun</td><td>after,<br/>afterwards,<br/>later</td></tr>
			<tr><th colspan="4"><i>Proper Noun</i></th></tr>
			<tr><td>张</td><td>Zhāng</td><td colspan="2">Zhāng, a Chinese<br/>family name</td></tr>
		</table>
		</div>
	</div>
	<h4 class="sublesson">3. <button class="cd" onclick="play('14-3');">&#128191; 14-3</button>
	<audio controls="" preload="metadata" id="14-3"><source src="../mandarin/audio/14-3.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén sān. Zài shāngdiàn ménkǒu.<br/>漯文三。在 商店。<br/>Text 3. Outside a store.</h4>	
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Wáng Fāng de yīfú tài piàoliang le。<br/>
		A: 王 方 的 衣服 太 漂亮 了。<br/>
		<span class="masked">B: </span>Shì a, tā mǎi liǎo bùshǎo yīfú.<br/>
		B: 是 啊，她 买了 不少 衣服。<br/><br/>
		<span class="masked">A: </span>Nǐ mǎi shén me le?<br/>
		A: 你 买 什么 了？<br/>
		<span class="masked">B: </span>Wǒ méi mǎi, zhèxiē dōu shì Wáng Fāng de dōngxī.<br/>
		B: 我 没 买，这些 都 是 王 方 的 东西。<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Wáng Fāng's clothes are so pretty.<br/>
		B: Yes. She has bought quite a few clothes.<br/>
		A: What did you buy?<br/>
		B: I bought nothing. All these are Wang Fang's things.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>衣服</td><td>yīfú</td><td>noun</td><td>clothes</td></tr>
			<tr><td>漂亮</td><td>piàoliang</td><td>adj,</td><td>beautiful,<br/>pretty</td></tr>
			<tr><td>啊</td><td>a</td><td>part.</td><td><i>a modal<br/>particle used<br/>at the end of<br/>a sentence<br/>as a sign of <br/>confirmation<br/>or defense</i></td></tr>
			<tr><td>少<br/>不少</td><td>shǎo<br/>bùshǎo</td><td>adj.<br/>adj.</td><td>little, few<br/>quite a few,<br/>many</td></tr>
			<tr><td>这些</td><td>zhèxiē</td><td>pron.</td><td>these</td></tr>
			<tr><td>都</td><td>dōu</td><td>adv.</td><td>both,all</td></tr>
		</table>
		</div>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">汪释 Notes</h3>
	<h4 class="sublesson">1. "<b>了</b>" (<b>le</b>) Indicating Occurence or Completion</h4>
	<p>"<b>了</b>" can be used at the end of a sentence. For example:</p>
	<table class="table table-condensed table-responsive table-centered">
		<tr><th>Subject</th><th>Predicate</th><th><b>了</b></th></tr>
		<tr><td>我<br/>Wǒ<br/>I</td><td>去 商店<br/>qù shāngdiàn<br/>went to the shop</td><td><b>了</b>。<br/><b>le</b></td></tr>
		<tr><td>他<br/>Tā<br/>He</td><td>去 学 开车<br/>qù xué kāichē<br/>learned to drive</td><td><b>了</b>。<br/><b>le</b></td></tr>
		<tr><td>你<br/>Nǐ<br/>You</td><td>买 什么<br/>mǎi shénme<br/>bought what</td><td><b>了</b>？<br/><b>le</b></td></tr>
	</table>
	<p>"<b>了</b>" can also be used between a verb and its object. There is usually a modifier before the object of the verb, such as a numeral classifier, an adjective or a pronoun, etc. For example:</p>
	<table class="table table-condensed table-responsive table-centered">
		<tr><th><br/>Subj.</th><th colspan="4">Predicate</th></tr>
		<tr><th></th><th>Verb</th><th><b>了</b><br/>(<b>le</b>)</th><th>Number-<br/>Measure Word/<br/>Adjective<br/>/Pronoun</th><th>Object</th></tr>
		<tr><td>我<br/>Wǒ<br/>I</td><td>买<br/>mǎi<br/>bought</td><td><b>了</b>。<br/><b>le</b></td><td>一点儿<br/>yīdiǎnr<br/>a little</td><td>苹果。<br/>píngguǒ<br/>apple</td></tr>
		<tr><td>他<br/>Tā<br/>He</td><td>买<br/>mǎi<br/>bought</td><td><b>了</b>。<br/><b>le</b></td><td>不少<br/>bù shǎo<br/>many</td><td>衣服。<br/>yīfú<br/>clothes</td></tr>
		<tr><td>你<br/>Nǐ<br/>You</td><td>看见<br/>kànjiàn<br/>saw</td><td><b>了</b>。<br/><b>le</b></td><td>几个<br/>jǐ gè<br/>several</td><td>人?<br/>rén?<br/>people?</td></tr>
	</table>
	<p>The negative form of "<b>了</b>" in both cases aboves is "<b>没</b> （<b>méi</b>）+ verb + (object)". In the negative form, "<b>了</b>" should be omitted. For example:</p>
	<table class="table table-condensed table-responsive table-centered">
		<tr><th>Subject</th><th>没 méi</th><th>Predicate</th></tr>
		<tr><td>她<br/>Tā<br/>She</td><td><b>没</b><br/><b>méi</b><br/>didn't</td><td>去 商店。<br/>qù shāngdiàn<br/>go to the shop</td></tr>
		<tr><td>我<br/>Wǒ<br/>I</td><td><b>没</b><br/><b>méi</b><br/>didn't</td><td>买。<br/>mǎi<br/>buy</td></tr>
		<tr><td>我<br/>Wǒ<br/>I</td><td><b>没</b><br/><b>méi</b><br/>didn't</td><td>看见。<br/>kànjiàn Zhāng xiānshēng<br/>see Mr. Zhang</td></tr>
	</table>
	<h4 class="sublesson">2. The noun "<b>后</b>" (<b>hòu</b>: after)</h4>
	<p>The noun "<b>后</b>" (<i>hòu: after</i>) indicates a period after the present time or the time being mentioned. For example:</p>
	<table class="table table-condensed table-responsive">
		<tr><td>(1)</td><td>五 点 <b>后</b><br/>40 分钟 <b>后</b><br/>星期三 <b>后</b></td><td>Wǔ diǎn <b>hòu</b><br/>40 fēnzhōng <b>hòu</b><br/>Xīngqísān <b>hòu</b></td><td>After five o'clock<br/>40 minutes later<br/>After Wednesday</td></tr>
		<tr><td>(2)</td><td>A: 你 几 点 去 工作？<br/>B: 八 点 <b>后</b></td><td>Nǐ jǐ diǎn qù gōngzuò?<br/>Bā diǎn <b>hòu</b></td><td>What time do you go to work?<br/>After eight o'clock</td></tr>
		<tr><td>(3)</td><td>A: 你 什么 的 候 回 家?<br/>B: 五 点 <b>后</b>。</td><td>Nǐ shénme de <b>hòu</b> huí jiā?<br/>Wǔ diǎn <b>hòu</b></td><td>What are you waiting for?<br/>After five o'clock</td></tr>
		<tr><td>(4)</td><td>A: 他 什么 的 侯 能 回来？<br/>B: 40 分钟 <b>后</b> 回来。</td><td>Tā shénme de hòu néng huílái?<br/>40 fēnzhōng <b>hòu</b> huílái.</td><td>What can he come back?<br/>40 minutes later come back.</td></tr>
	</table>
	<h4 class="sublesson">3. The Modal Particle "<b>啊</b>" (<b>a</b>)</h4>
	<p>The modal particle "<b>啊</b>" (<b>a</b>) is used at the end of a declarative sentence to set the mood. The pronounciation of "<b>啊</b>" (<b>a</b>) varies with the finals of the syllables before it, and in written Chinese, the variants are represented by different characters sometimes.</p>
	<table class="table table-condensed table-responsive">
		<tr><th>The Final of the Syllable before it</th><th>The pronunciation of "<b>啊</b>"</th></tr>
		<tr><td>a&nbsp;e&nbsp;i&nbsp;o&nbsp;ü</td><td><b>a</b> --> ia</td></tr>
		<tr><td>u&nbsp;ao&nbsp;ou</td><td><b>a</b> --> ua</td></tr>
		<tr><td>-n</td><td><b>a</b> --> na</td></tr>
		<tr><td>-ng</td><td><b>a</b> --> nga</td></tr>
		<tr><td>-i (zi, ci, si 中)</td><td><b>a</b> --> za</td></tr>
		<tr><td>-i (zhi, chi, shi, ri 中)</td><td><b>a</b> --> ra</td></tr>
	</table>
	<table class="table table-condensed table-responsive">
		<tr><td>(1) </td><td>A: 你 是 王 小姐 吗？<br/>B: 是<b>啊</b>。</td><td>Nǐ shì Wáng xiǎojiě ma?<br/>Shì <b>a</b></td><td>Are you Miss Wang?<br/>Yes</td></tr>
		<tr><td>(2) </td><td>A: 你 想 去 吃 中国 菒 吗？<br/>B: 好 <b>啊</b>。</td><td>Nǐ xiǎng qù chī zhōngguó gǎo ma?<br/>Hǎo <b>a</b></td><td>Do you want to eat Chinese?<br/>Okay</td></tr>
		<tr><td>(3) </td><td>A: 王 方 的 衣服 太 漂亮了!<br/>B:  是<b>啊</b>。她 买了不少衣服。</td><td>Wáng fāng de yīfú tài piàoliangle!<br/>Shì <b>a</b>. Tā mǎi liǎo bù shǎo yīfú.</td><td>Wang Fang's clothes are so beautiful!<br/>Yes. She bought a lot of clothes.</td></tr>
	</table>
	<h4 class="sublesson">4. The Adverb "<b>都</b>" (<b>dōu</b>: all)</h4>
	<p>"<b>都</b>" (<b>dōu</b>) means "both/all". The people or objects included are put before "<b>都</b>". For example:</p>
	<table class="table table-condensed table-responsive">
		<tr><td>(1) 我们 <b>都</b> 是 中国 人。</td><td>Wǒmen <b>dōu</b> shì zhōngguó rén.</td><td>All of us are Chinese.</td></tr>
		<tr><td>(2) 他们 <b>都</b> 喜欢 喝 茶。</td><td>Tāmen <b>dōu</b> xǐhuān hē chá</td><td>They all like to drink tea</td></tr>
		<tr><td>(3) 这些 <b>都</b> 王方 的 东西。</td><td>Zhèxiē <b>dōu</b> Wáng Fāng de dōngxī.</td><td>This is all Wáng Fāng's stuff.</td></tr>
	</table>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">练习 (liàn xí) Exercises</h3>
	<h4 class="sublesson">1. Role-play the dialogues</h4>
	<h4 class="sublesson">2. Answer the questions according to the actual situations.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="han hanzi141">昨天 上午 她 去 哪儿 了？<br/>
			<button type="button" id="n141" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g141" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn141">Zuótiān shàngwǔ tā qù nǎr le?<br/></span>
		<span class="eng" id="eng141">Where did she go yesterday morning?<br/></span>
		<br/>
		<span class="han hanzi142">她 买 什么 了？<br/>
			<button type="button" id="n142" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g142" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn142">Tā mǎi shénme le?<br/></span>
		<span class="eng" id="eng142">What did she buy?<br/></span>
		<br/>
		<span class="han hanzi143">张 先生 什么 时候 能 回来？<br/>
			<button type="button" id="n143" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g143" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn143">Zhāng xiānshēng shénme shíhòu néng huílái?<br/></span>
		<span class="eng" id="eng143">When can Mr. Zhang come back?<br/></span>
		<br/>
		<span class="han hanzi144">王 方 买 什么 了？<br/>
			<button type="button" id="n144" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g144" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn144">Wáng Fāng mǎi shénme le?<br/></span>
		<span class="eng" id="eng144">What did Wáng Fāng buy?<br/></span>
		<br/>
		<span class="han hanzi145">王 方 的 朋友 买 什么 了？<br/>
			<button type="button" id="n145" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g145" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn145">Wáng Fāng de péngyǒu mǎi shénme le?<br/></span>
		<span class="eng" id="eng145">What did Wang Fang's friends buy?<br/></span>
		<br/>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3>拼音 Pinyin</h3>
	<h4>Tone Collocation in Trisyllabic Words (3): words starting with a third-tone syllable。
	<button class="cd" onclick="play('14-4');">&#128191; 14-4</button>
	<audio controls="" preload="metadata" id="14-4"><source src="../mandarin/audio/14-4.mp3" type="audio/mpeg">No audio</audio></h4>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th>3+1+1</th><th>3+1+2</th><th>3+1+3</th><th>3+1+4</th></tr>
		<tr><td>洗衣机 ( - - 機)<br/>xǐ yī jī<br/>washing machine</td><td>普通人<br/>pǔ tōng rén<br/>common people</td><td>总经理 (總 經 - )<br/>zǒng jīng lǐ<br/>general manager</td><td>火车票 (- 車 - )<br/>huǒ chē piào<br/>train ticket</td></tr>
		<tr><th>3+2+1</th><th>3+2+2</th><th>3+2+3</th><th>3+2+4</th></tr>
		<tr><td>史学家 ( - 學 -)<br/>shǐ xué jiā<br/>historian</td><td>警察局<br/>jǐng chá jú<br/>police station</td><td>美男子<br/>měi nán zǐ	<br/>handsome man</td><td>美容院<br/>měi róng yuàn<br/>beauty salon</td></tr>
		<tr><th>3+3+1</th><th>3+3+2</th><th>3+3+3</th><th>3+3+4</th></tr>
		<tr><td>表演家<br/>biǎo yǎn jiā<br/>performer</td><td>小演员 ( - - 員)<br/>xiǎo yǎn yuán<br/>little actor</td><td>米老鼠<br/>Mǐ lǎo shǔ<br/>Mickey Mouse</td><td>演唱会 ( - - 會)<br/>yǎn chàng huì<br/>concert</td></tr>
		<tr><th>3+4+1</th><th>3+4+2</th><th>3+4+3</th><th>3+4+4</th></tr>
		<tr><td>打字机 ( -  - 機)<br/>dǎ zì jī<br/>typewriter</td><td>跑鞋步<br/>pǎo bù xié<br/>running shoes</td><td>美术馆 ( - 術館)<br/>měi shù guǎn<br/>art gallery</td><td>打电话 ( - 電話)<br/>dǎ diàn huà<br/>to make a phone call</td></tr>
	</table>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h4 class="sublesson">1. Single-Component Characters</h4>
	<div class="table">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr><td>开</td><td>kāi: open</td><td><div><img class="strokeOrder" src="img/开-order.gif" alt="开"/></div></td></tr>
			<tr><td>车</td><td>chē: car</td><td><div><img class="strokeOrder" src="img/车-order.gif" alt="车"/></div></td></tr>
			<tr><td>回</td><td>huí: back</td><td><div><img class="strokeOrder" src="img/回-order.gif" alt="回"/></div></td></tr>
		</table>
	</div>
	<h4 class="sublesson">2 Chinese Radicals "⺝" (yuè) and "扌" (shǒu)</h4>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="active"><th>Radical</th><th>Explanation</th><th>Examples</th></tr>
			<tr>
				<td><br/>⺝</td>
				<td>"⺝" (yuè) is usually<br/>related to the<br/>human body or flesh.</td>
				<td>服 &nbsp; fú &nbsp;  clothes<br/><br/>胖 &nbsp; pàng &nbsp; fat</td>
			</tr>
			<tr>
				<td><br/>扌</td>
				<td>"扌" (shǒu) usually<br/>indicates an action<br/>related to a hand.</td>
				<td>打 &nbsp; dǎ &nbsp; to beat, to hit<br/><br/>找 &nbsp; zhǎo &nbsp; to look for </td>
			</tr>
		</table>
	</div>
</div>
<?php
} else { header( 'Location: https://www.stephenmccready.asia/mi/index.php'); }
?>
</body>
</html>
