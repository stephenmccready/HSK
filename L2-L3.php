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
	<title>Level 2 - 3</title>
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
	<div class="jumbotron lessonHeaderLeft">Dì sān kè<br/>第三课<br/>Lesson 3</div>
	<div class="lessonHeaderRight">
	  <h2>Zuǒbiān nǎge hóngsè de shì wǒ de.<br/>左边 哪个 红色 的 是 我 的。<br/><b>The red one on the left is mine</b></h2>
	</div>
</div>
<div class="container-fluid">
	<h4 class="sublesson">1. <button class="cd" onclick="play('02-03-1');">&#128191; 03-1</button>
	<audio controls="" preload="metadata" id="02-03-1"><source src="../mandarin/audio/02-03-1.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén yī. Zài fángjiān.<br/>漯文一。在 房间。<br/>Text 1. In the room.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Zhè kuài shǒubiǎo shì nǐ de ma?<br/>
		A: 这 块 手表 是 你 的 吗？<br/>
		<span class="masked">B: </span>Bùshì wǒ de. Shì wǒ bàba de.<br/>
		B: 不是 我 的。是 我 爸爸 的。<br/><br/>
		<span class="masked">A: </span>Duōshǎo qián mǎi de?<br/>
		A: 多少 钱 买 的？<br/>
		<span class="masked">B: </span>Sān qiān duō kuài.<br/>
		B: 三千 多 块。<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Is this watch yours?<br/>
		B: No it isn't. It's my father's.<br/>
		A: How much is it? <br/>
		B: More than 3,000 yuan.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>手表</td><td>shǒubiǎo</td><td>noun</td><td>watch</td></tr>
			<tr><td>千</td><td>qiān</td><td>number</td><td>thousand</td></tr>
		</table>
		</div>
	</div>
	<div class="clearfix"></div>
	<h4 class="sublesson">2. <button class="cd" onclick="play('02-03-2');">&#128191; 3-2</button>
	<audio controls="" preload="metadata" id="02-03-2"><source src="../mandarin/audio/02-03-2.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén èr. Zài jiālǐ.<br/>漯文二。在 家里。<br/>Text 2. At home.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Zhè shì jīntiān zǎoshang de bàozhǐ ma?<br/>
		A: 这 是 今天 早上 的 报纸 吗？<br/>
		<span class="masked">B: </span>Bùshì, shì zuótiān de.<br/>
		B: 不是， 是 昨天 的。<br/><br/>
		<span class="masked">A: </span>Nǐ tīng, shì bùshì sòng bàozhǐ de láile?<br/>
		A: 你 听， 是 不是 送 报纸 的 来 了？<br/>
		<span class="masked">B: </span>Wǒ kàn yīxià. Bùshì, shì sòng niúnǎi de<br/>
		B: 我 看 一下。 不是， 是 送 牛奶 的。<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Is that this morning's newspaper?<br/>
		B: No, it isn't. It's yesterday's.<br/>
		A: Listen, is that the man who delivers the newspaper?<br/>
		B: Let me see. No, it's the milkman.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>报纸</td><td>bàozhǐ</td><td>noun</td><td>newspaper</td></tr>
			<tr><td>送</td><td>sòng</td><td>verb</td><td>to send,<br/>to deliver</td></tr>
			<tr><td>一下</td><td>yīxià</td><td>num.-m</td><td><i>used after a verb,<br/>indicating an<br/>act or an attempt</i></td></tr>
			<tr><td>牛奶</td><td>niúnǎi</td><td>noun</td><td>milk</td></tr>
		</table>
		</div>
	</div>
	<div class="clearfix"></div>
	<h4 class="sublesson">3. <button class="cd" onclick="play('02-03-3');">&#128191; 3-3</button>
	<audio controls="" preload="metadata" id="02-03-3"><source src="../mandarin/audio/02-03-3.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén sān. Zài jiālǐ.<br/>漯文三。在 家里。<br/>Text 3. At home.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Zhè shì shéi de fángjiān?<br/>
		A: 这 是 谁 的 房间？<br/>
		<span class="masked">B: </span>Zhè shì wǒ hé wǒ zhàngfū de, pángbiān nǎge xiǎo de fángjiān shì wǒ nǚ'ér de.<br/>
		B: 这 是 我 和 我 丈夫 的， 旁边 哪个 小 的 房间 是 我 女儿 的。<br/><br/>
		<span class="masked">A: </span>Nǐ nǚ'ér de fángjiān zhēn piàoliang! Dōu shì fěnsè de.<br/>
		A: 你 女儿 的 房间 真 漂亮！ 都 是 粉色 的。<br/>
		<span class="masked">B: </span>Shì a, fěnsè shì wǒ nǚ'ér zuì xǐhuān de yánsè.<br/>
		B: 是 啊， 粉色 是 我 女儿 最 喜欢 的 颜色。<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Whose room is this?<br/>
		B: It's my husband's and mine. The small room beside it is my daughter's.<br/>
		A: Your daughter's room is so pretty! It's all pink.<br/>
		B: Yes. Pink is her favorite color.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>房间</td><td>fángjiān</td><td>noun</td><td>room</td></tr>
			<tr><td>丈夫</td><td>zhàngfū</td><td>noun</td><td>husband</td></tr>
			<tr><td>旁边</td><td>pángbiān</td><td>noun</td><td>beside</td></tr>
			<tr><td>真</td><td>zhēn</td><td>adverb</td><td>really,<br/>indeed</td></tr>
			<tr><td>粉色</td><td>fěnsè</td><td>noun</td><td>pink</td></tr>
			<tr><td>粉</td><td>fěn</td><td>adj.</td><td>pink</td></tr>
			<tr><td>颜色</td><td>yánsè</td><td>noun</td><td>colour</td></tr>
		</table>
		</div>
	</div>
	<div class="clearfix"></div>
	<h4 class="sublesson">4. <button class="cd" onclick="play('00-4');">&#128191; 3-4</button>
	<audio controls="" preload="metadata" id="02-03-4"><source src="../mandarin/audio/02-03-4.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén sì. Zài bàngōngshì<br/>漯文四。在办公室.<br/>Text 4. In the office.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Nǐ kànjiàn wǒ de bēizile ma?<br/>
		A: 你 看见 我 的 杯子 了 吗？<br/>
		<span class="masked">B: </span>Zhèli yǒu jǐ gè bēizi, nǎge shì nǐ de?<br/>
		B: 这里 有 几 个 杯子， 哪个 是 你 的？<br/><br/>
		<span class="masked">A: </span>Zuǒbiān nǎge hóngsè de shì wǒ de.<br/>
		A: 左边 哪个 红色 的 是 我 的。<br/>
		<span class="masked">B: </span>Gěi nǐ.<br/>
		B: 给 你<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Have you seen my cup?<br/>
		B: Here are a few cups. Which one is yours?<br/>
		A: The red one on the left is mine.<br/>
		B: Here you are.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>左边</td><td>zuǒbiān</td><td>noun</td><td>left side</td></tr>
			<tr><td>红色</td><td>hóngsè</td><td>noun</td><td>red</td></tr>
			<tr><td>红</td><td>hóng</td><td>adj.</td><td>red</td></tr>
		</table>
		</div>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">汪释 Notes</h3>
	<h4 class="sublesson">1. The "<b>的</b>" (<b>de</b>: of) Phrase.</h4>
	<p>"<b>的</b>" (<b>de</b>: of) can be used after a pronoun, an adjective or a verb to form a phrase which is equivalent to a nominal phrase with its headword omitted. For example:</p>
	<ol>
		<li>这 本 书 不是 我 <b>的</b>。（= 不是 我 <b>的</b> 书）<br/>Zhè běn shū bùshì wǒ <b>de</b>（<i>= Bùshì wǒ <b>de</b> shū</i>）<br/>This book is not mine (<i>= Not my book</i>)</li>
		<li>这个 杯子 是 昨天 买 <b>的</b>。（= 昨天 买 <b>的</b> 杯子）<br/>Zhège bēizi shì zuótiān mǎi <b>de</b>. (<i>= Zuótiān mǎi <b>de</b> bēizi</i>)<br/>The cup was bought yesterday (= <i>Bought the cup yesterday</i>)</li>
		<li>这 块 手表 是 你 <b>的</b> 吗？（= 你 <b>的</b> 块 表?）<br/>Zhè kuài shǒubiǎo shì nǐ <b>de</b> ma? (<i>= Nǐ <b>de</b> kuài biǎo</i>)<br/>Is this watch yours? (<i>= Your watch?</i>)</li>
	</ol>
	<h4 class="sublesson">2. The Numeral Classifier "<b>一下</b>" (<b>yīxià</b>: one time, once)</h4>
	<p>"<b>一下</b>" (<b>yīxià</b>: one time, once) is used after a verb to indicate a short action, similar to the reduplicative form (AA) of a verb. (<a href="L2-L8.php">See Lesson 8, Notes (4)</a>). The object of the verb can be omitted. For example:</p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th><br/>Subject</th><th>动词<br/>Dòngcí<br/>(Verb)</th><th><b>一下</b><br/><b>yīxià</b></th><th>宾语<br/>Bīnyǔ<br/>(Object)</th></tr>
		<tr><td>我<br/>Wǒ<br/>I</td><td>看<br/>kàn<br/>look</td><td><b>一下</b>。<br/><b>yīxià</b></td><td></td></tr>
		<tr><td colspan="4"><i>Let me see.</i></td></tr>
		<tr><td>你<br/>Nǐ<br/>You</td><td>休息<br/>xiūxí<br/>rest</td><td><b>一下</b>吧。<br/><b>yīxià</b>ba</td><td></td></tr>
		<tr><td colspan="4"><i>You take a break.</i></td></tr>
		<tr><td>我<br/>Wǒ<br/>I</td><td>问<br/>wèn<br/>ask</td><td><b>一下</b><br/><b>yīxià</b></td><td>老师。<br/>lǎoshī<br/>teacher</td></tr>
		<tr><td colspan="4"><i>Let me ask the teacher.</i></td></tr>
	</table>
	<h4 class="sublesson">3. The Modal Adverb "<b>真</b>" (<b>zhēn</b>: true)</h4>
	<p>The structure "<b>真</b>" (<b>zhēn</b>: true) + adjective expresses an exclamatory mood, meaning "really, indeed". For example:</p>
	<ol>
		<li>你 <b>真</b> 好！<br/>Nǐ <b>zhēn</b> hǎo!<br/>You are so nice!<br/></li>
		<li>今天 天气 <b>真</b> 好！<br/>Jīntiān tiānqì <b>zhēn</b> hǎo!<br/>It's nice today!<br/></li>
		<li>你 女儿 的 房间 <b>真</b> 漂亮！<br/>Nǐ nǚ'ér de fángjiān <b>zhēn</b> qí piàoliang!<br/>Your daughter's room is beautiful!</li>
	</ol>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">练习 (liàn xí) Exercises</h3>
	<h4 class="sublesson">1. Role-play the dialogues</h4>
	<h4 class="sublesson">2. Answer the questions according to the actual situations</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="han hanzi11">爸爸 的 手表 多少 钱？<br/>
			<button type="button" id="n11" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g11" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn11">Bàba de shǒubiǎo duōshǎo qián?<br/></span>
		<span class="eng" id="eng11">How much is father's watch?<br/></span>
		<br/>
		<span class="han hanzi12">送 报纸 的 来了 吗？<br/>
			<button type="button" id="n12" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g12" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn12">Sòng bàozhǐ de láile ma?<br/></span>
		<span class="eng" id="eng12">Has the newspaper been delivered?<br/></span>
		<br/>
		<span class="han hanzi13">旁边 哪个 小 的 房间 是 谁 的？<br/>
			<button type="button" id="n13" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g13" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn13">Pángbiān nǎge xiǎo de fángjiān shì shéi de?<br/></span>
		<span class="eng" id="eng13">Whose room is next to the small room?<br/></span>
		<br/>
		<span class="han hanzi14">她 女儿 的 房间 怎么样？<br/>
			<button type="button" id="n14" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g14" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn14">Tā nǚ'ér de fángjiān zěnmeyàng?<br/></span>
		<span class="eng" id="eng14">How is her daughter's room?<br/></span>
		<br/>
		<span class="han hanzi15">哪个 杯子 是 她 的？<br/>
			<button type="button" id="n15" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g15" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn15">Nǎge bēizi shì tā de?<br/></span>
		<span class="eng" id="eng15">Which cup is hers?<br/></span>
		<br/>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3>语音 (yǔyīn) Pronounciation</h3>
	<button class="cd" onclick="play('02-03-5');">&#128191; 3-5</button>
	<audio controls="" preload="metadata" id="02-03-5"><source src="../mandarin/audio/02-03-5.mp3" type="audio/mpeg">No audio</audio>
	<h4>Stress in Quadrisyllabic Words</h4>
	<ol>
		<li>Quadrisyllabic Words without a Neutral Tone
		<p>In a quadrisyllabic word, the stress generally falls on the fourth syllable. For example:</p>
		<table class="table table-condensed table-responsive table-centered table-borderless"><tr>
			<td>gōnggòng qì<b>chē</b><br/>公共 汽<b>车</b><br/>bus</td>
			<td>gāosù gōng<b>lù</b><br/>高速 公<b>路</b><br/>highway</td>
			<td>míngshèng gǔ<b>jī</b><br/>名胜 古<b>迹</b><br/>monuments</td>
			<td>ài bù shì <b>shǒu</b><br/>爱 不 释 <b>手</b><br/>Put it down</td>
		</tr></table>
		</li>
		<li>Quadrisyllabic Words with a Neutral Tone
		<p>A quadrisyllabic word that has neutral-tone syllable is usually an adjective, in which the second syllable is in the neutral tone and the fourth syllable is stressed. For example:</p>
		<table class="table table-condensed table-responsive table-centered table-borderless"><tr>
			<td>Duō duōsuō <b>suo</b><br/>哆哆嗦<b>嗦</b><br/>trembling</td>
			<td>Huàng huàng yōu<b>yōu</b><br/>晃晃悠<b>悠</b><br/>throbbing</td>
			<td>Mó mó jī<b>jī</b><br/>磨磨唧<b>唧</b><br/>grinding chirp</td>
			<td>Pīlipā<b>lā</b><br/>噼里啪<b>啦</b><br/>crackling</td>
		</tr></table>
		</li>
	</ol>
</div>
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
				<td>héngzhéxiégōu<br/>Horizontal-Turning-<br/>Slanting Hook</td>
				<td><img style="width: 3em;" src="img/hengzhexiegou.png" alt="héngzhéxiégōu"/></td>
				<td>飞&nbsp;fēi&nbsp;to fly<br/>风&nbsp;fēng&nbsp;wind</td>
			</tr>
			<tr>
				<td>wāngōu<br/>Crooked<br/>Hook<br/><br/></td>
				<td><img style="width: 2em;" src="img/wangou.png" alt="wāngōu"/></td>
				<td>狗&nbsp;gǒu&nbsp;dog<br/>猫&nbsp;māo&nbsp;cat</td></tr>
		</table>
	</div>
	<h4 class="sublesson">2. Single-Component Characters</h4>
	<div class="table">
		<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><td>手</td><td>shǒu</td><td>hand</td><td><div><img class="strokeOrder" src="img/手-order.gif" alt="手"/></div></td></tr>
		<tr><td>丈</td><td>zhàng</td><td>a unit of length</td><td><div><img class="strokeOrder" src="img/丈-order.gif" alt="丈"/></div></td></tr>
		<tr><td>夫</td><td>fū</td><td>husband</td><td><div><img class="strokeOrder" src="img/夫-order.gif" alt="夫"/></div></td></tr>
		</table>
	</div>
	<h4 class="sublesson">3. Chinese Radicals "木" (mù) and "⺉" (dāo)</h4>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="active"><th>Radical</th><th>Explanation</th><th>Examples</th></tr>
			<tr>
				<td>木<br/>(mù)</td>
				<td>related to <b>plants</b></td>
				<td>杯&nbsp;bēi&nbsp;cup<br/>椅&nbsp;yǐ&nbsp;chair</td>
			</tr>
			<tr>
				<td>⺉<br/>(dāo)</td>
				<td>related to <b>cutters or knives</b></td>
				<td>别&nbsp;bié&nbsp;to leave, to part<br/>到&nbsp;dào&nbsp;to arrive</td>
			</tr>
		</table>
	</div>
</div>
<div class="dash"></div>
<?php
} else { header( 'Location: https://www.stephenmccready.asia/mi/index.php'); }
?>
</body>
</html>
