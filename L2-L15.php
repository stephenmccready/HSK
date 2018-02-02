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
	<title>Level 2 - 15</title>
	<link type="text/css" rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.2.min.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.6/bootstrap.min.js"></script>
	<!--[if IE]>
	<script src="https://stephenmccready.asia/html5shiv.min.js"></script>
	<![endif]-->
	<script src="js/mi.js"></script>
	<link rel="stylesheet" href="css/main.css" />
</head>
<body onload="setTitle(); $('.navBtnNext').hide();">
<?php include 'navbar.php'; ?>
<div class="container-fluid">
	<div class="jumbotron lessonHeaderLeft">Dì shíwǔ kè.<br/>第十五课。<br/>Lesson 15.</div>
	<div class="lessonHeaderRight"><h2>Xīnnián jiù yào dàole.<br/>新年 就 要到了。<br/><b>The New Year is coming.</b></h2></div>
</div>
<div id="custom-nav" class="clearfix">
	<a class="btn btn-success btn-huge" href="#2">2</a>&nbsp;
	<a class="btn btn-success btn-huge" href="#3">3</a>&nbsp;
	<a class="btn btn-success btn-huge" href="#4">4</a>&nbsp;
	<a class="btn btn-success btn-huge" href="#n1">Note 1</a>&nbsp;
	<a class="btn btn-success btn-huge" href="#n2">Note 2</a>&nbsp;
	<a class="btn btn-success btn-huge" href="#n3">Note 3</a>&nbsp;
	<a class="btn btn-success btn-huge" href="#ex">Excer</a>&nbsp;
	<a class="btn btn-success btn-huge" href="#pr">Pronunce</a>&nbsp;
	<a class="btn btn-success btn-huge" href="#ch">Chars</a></p></div>
<div class="container-fluid">
	<h4 class="sublesson">1. <button class="cd" onclick="play('02-15-1');">&#128191; 15-1</button>
	<audio controls="" preload="metadata" id="02-15-1"><source src="../mandarin/audio/02-15-1.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén yī. Zài péngyǒu jiā.<br/>漯文一。在 朋友家。<br/>Text 1. At a friend's home.</h4>
	<div class="col-xs-12 col-md-6 col">
		<b>A: </b>Jīntiān shì shí'èr yuè èrshí rì, xīnnián jiù yào dàole.<br/>
		今天 是 十二 月 二十 日，新年 就 要 到了。<br/>
		<b>B: </b>Xīnnián nǐ zhǔnbèi zuò shénme?<br/>
		新年 你 准备 做 什么？<br/>
		<b>A: </b>Wǒ xiǎng qù Běijīng lùyóu, Běijīng hěn bùcuò, wǒ qùguò yīcì.<br/>
		我 想 去 北京 路游， 北京 很 不错， 我 去过 一次。<br/>
		<b>B: </b>Nǐ mǎi piàole ma?<br/>
		你 买 票了 吗？<br/>
		<b>A: </b>Hái méiyǒu ne, míngtiān jiù qù huǒchēzhàn mǎi piào.<br/>
		还 没有 呢， 明天 就 去 火车站 买 漂。
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		<b>A: </b>Today is December 20, the New Year is coming.<br/>
		<b>B: </b>What plans do you have?<br/>
		<b>A: </b>I want to take a trip to Beijing, Beijing is a nice place, I've been their once.<br/>
		<b>B: </b>Have you bought a ticket?<br/>
		<b>A: </b>Not yet. I'll go to the railway station tomorrow to buy it tomorrow.
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>日</td><td>rì</td><td>n</td><td>day, date</td></tr>
			<tr><td>新年</td><td>xīnnián</td><td>n</td><td>New Year</td></tr>
			<tr><td>票</td><td>piào</td><td>n</td><td>ticket</td></tr>
			<tr><td>火车站</td><td>huǒchēzhàn</td><td>n</td><td>railway station</td></tr>
		</table>
		</div>
	</div>
	<div id="2" class="clearfix"></div>
	<h4 class="sublesson">2. <button class="cd" onclick="play('02-15-2');">&#128191; 15-2</button>
	<audio controls="" preload="metadata" id="02-15-2"><source src="../mandarin/audio/02-15-2.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén èr. Zài gōngsī.<br/>漯文二。在 公司。<br/>Text 2. In the company.</h4>
	<div class="col-xs-12 col-md-6 col">
		<b>A: </b>Shíjiān guò dé zhēn kuài, xīn de yī nián kuàiyào dàole!<br/>
		时间 过 得 真 快，新 的 一 年 快要 到 了!<br/>
		<b>B: </b>Shì a, xièxiè dàjiā zhè yī nián duì wǒ de bāngzhù!<br/>
		是 啊，谢谢 大家 这 一 年 对 我 的 帮助!<br/>
		<b>C: </b>Xīwàng wǒmen de gōngsī míngnián gèng hǎo!<br/>
		希望 我们 的 公司 明年 更 好!
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		<b>A: </b>How time flies! The New Year is approaching!<br/>
		<b>B: </b>Yes. Thank you all for your help during the past year. <br/>
		<b>C: </b>I hope our company will become even better in the next year.
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>大家</td><td>dàjiā</td><td>pron.</td><td>all, everybody</td></tr>
			<tr><td>更</td><td>gèng</td><td>adv.</td><td>more, to a greater extent</td></tr>
		</table>
		</div>
	</div>
	<div id="3" class="clearfix"></div>
	<h4 class="sublesson">3. <button class="cd" onclick="play('02-15-3');">&#128191; 15-3</button>
	<audio controls="" preload="metadata" id="02-15-3"><source src="../mandarin/audio/02-15-3.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén sān. Zài chēzhàn.<br/>漯文三。在 车站。<br/>Text 3. At the Station.</h4>
	<div class="col-xs-12 col-md-6 col">
		<b>A: </b>Nǐ mèimei zěnme hái méi lái? Dōu bā diǎn sìshíle!<br/>
		你 妹妹 怎么 还 没 来? 都 八 点 四十了!<br/>
		<b>B: </b>Wǒmen zài děng tā jǐ fēnzhōng ba.<br/>
		我们 再 等 她 几 分钟 吧。<br/>
		<b>A: </b>Dōu děng tā bàn gè xiǎoshí le!<br/>
		都 等 她 半 个 小时了!<br/>
		<b>B: </b>Tā lái le, wǒ tīngjiàn tā shuō huà le.<br/>
		她 来 了，我 听见 她 说 话 了。
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		<b>A: </b>Why hasn't your younger sister arrived yet? It's already eight forty.<br/>
		<b>B: </b>Let's wait for a few more minutes.<br/>
		<b>A: </b>We've already waited for half an hour.<br/>
		<b>B: </b>She is here. I heard her voice.
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>妹妹</td><td>mèimei</td><td>n.</td><td>younger sister</td></tr>
		</table>
		</div>
	</div>
	<div id="4" class="clearfix"></div>
	<h4 class="sublesson">4. <button class="cd" onclick="play('02-15-4');">&#128191; 15-4</button>
	<audio controls="" preload="metadata" id="02-15-4"><source src="../mandarin/audio/02-15-4.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén sì. Zài kāfēiguǎn ménkǒu.<br/>漯文四。在 咖啡馆 门口。<br/>Text 4. Outside a coffee house.</h4>
		<div class="col-xs-12 col-md-6 col">
		<b>A: </b>Tiān yīn le, wǒ yào huíqù le.<br/>
		天 阴 了，我 要 回去 了。<br/>
		<b>B: </b>Hǎo de. Kuàiyào xià yǔ le, nǐ lùshàng màndiǎnr<br/>
		好 的。快要 下 雨 了，你 路上 慢点儿。<br/>
		<b>A: </b>Méi guānxì, wǒ zuò gōnggòngqìchē.<br/>
		没 关系，我 坐 公共汽车。<br/>
		<b>B: </b>Hǎo de. Zàijiàn.<br/>
		好的。再见。<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		<b>A: </b>It's overcast. I have to go home. <br/>
		<b>B: </b>OK. It's going to rain. Be careful on your way.<br/>
		<b>A: </b>Don't worry I'll take a bus.<br/>
		<b>B: </b>Good Bye.
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>阴</td><td>yīn</td><td>adj.</td><td>overcast, cloudy</td></tr>
		</table>
		</div>
	</div>
</div>
<div id="n1" class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">汪释 Notes</h3>
	<h4 class="sublesson">1. "<b>要 。。。了</b>" (<b>yào</b>...<b>le</b>) Indicating the State of an Action.</h4>
	<p>The structure "快<b>要</b>／快／就<b>要</b>／<b>要 。。。</b>	" (kuài<b>yào</b> / kuài / jiù <b>yào</b> / <b>yào</b>...<b>le</b>) . For example:</p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th rowspan="2">Subject</th><th colspan="3">Predicate</th></tr>
		<tr><th>快<b>要</b>／快／就<b>要</b>／<b>要</b><br/>Kuài<b>yào</b> / kuài / jiù <b>yào</b> / <b>yào</b></th><th>Verb<br/>(+Object)</th><th><b>了</b><br/>(<b>le</b>)</th></tr>
		<tr><td>火车<br/>Huǒchē<br/>Train</td><td>快<b>要</b><br/>kuài<b>yào</b><br/>soon</td><td>来<br/>lái<br/>come</td><td><b>了</b><br/>(<b>le</b>)</td></tr>
		<tr><td colspan="4"><i>The train is coming soon.</i></td></tr>
		<tr><td></td><td><b>要</b><br/><b>yào</b><br/>must</td><td>下雨<br/>xià yǔ<br/>rain</td><td><b>了</b><br/>(<b>le</b>)</td></tr>
		<tr><td colspan="4"><i>It is going to rain.</i></td></tr>
		<tr><td>新的一年<br/>Xīn de yī nián<br/>A new year</td><td>快<b>要</b><br/>kuài<b>yào</b><br/>soon</td><td>到<br/>dào<br/>arrive</td><td><b>了</b><br/>(<b>le</b>)</td></tr>
		<tr><td colspan="4"><i>The new year is coming.</i></td></tr>
	</table>
	<p>If there is an adverbial of time in the sentence, then only "<b>就要 。。。了</b>" (<b>jiùyào...le</b>) can be used. For example:</p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th rowspan="2">时间 状语<br/>Shíjiān zhuàngyǔ<br/>Adverbial of Time</th><th rowspan="2"><br/>Subject</th><th colspan="3">Predicate</th></tr>
		<tr><th><b>就要</b><br/><b>jiùyào</b></th><th>Verb<br/>(+Object)</th><th><b>了</b><br/><b>le</b></th></tr>
		<tr><td>下 个 月<br/>Xià gè yuè<br/>Next month</td><td>我们<br/>wǒmen<br/>we</td><td><b>就要</b><br/><b>jiùyào</b><br/>will</td><td>回国<br/>huíguó<br/>return home</td><td><b>了</b><br/><b>le</b></td></tr>
		<tr><td colspan="5"><i>We will return home next month</i></td></tr>
		<tr><td>明天<br/>Míngtiān<br/>Tomorrow</td><td>姐姐<br/>jiějiě<br/>elder sister</td><td><b>就要</b>	<br/><b>jiùyào</b><br/>will</td><td>走<br/>zǒu<br/>go</td><td><b>了</b><br/><b>le</b></td></tr>
		<tr><td colspan="5"><i>Tomorrow my elder sister will go</i></td></tr>
		<tr><td>下 个 星期<br/>Xià gè xīngqí<br/>Next week</td><td>我们<br/>wǒmen<br/>we</td><td><b>就要</b><br/><b>jiùyào</b><br/>will</td><td>考试<br/>kǎoshì<br/>test</td><td><b>了</b><br/><b>le</b></td></tr>
		<tr><td colspan="5"><i>We'll take the exam next week</i></td></tr>
	</table>
	<div id="n2" class="clearfix"></div>
	<h4 class="sublesson">2.  "<b>都</b>。。。<b>了</b>" (<b>dōu</b>...<b>le</b>)</h4>
	<p>The structure "<b>都</b>。。。<b>了</b>" (<b>dōu</b>...<b>le</b>) means "already", usually conveying an emphatic or a complaining tone. For example:</p>
	<ol>
		<li><b>都</b>八 点<b>了</b>，快 点 儿 起床 吧。<br/><b>Dōu</b> bā diǎn<b>le</b>, kuài diǎn er qǐchuáng ba.<br/>It's already 8 o'clock, hurry up, get up.</li>
		<li>你<b>都</b>十岁 <b>了</b>，可以 自己 洗 衣服了。<br/>Nǐ <b>dōu</b> shí suì<b>le</b>, kěyǐ zìjǐ xǐ yīfúle.<br/>You are ten years old, you can wash your own clothes.</li>
		<li><b>都</b>等 她 半 个 小时 <b>了</b>。<br/>Dōu děng tā bàn gè xiǎoshí le.<br/>Waiting for her for half an hour.</li>
	</ol>
</div>
<div id="ex" class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">练习 (liàn xí) Exercises</h3>
	<h4 class="sublesson">1. 分角色朗读课文. Role-play the dialogues</h4>
	<h4 class="sublesson">2. 根据课文内容回答问题. Answer the questions according to the actual situations</h4>
		<div class="col-xs-12 col-md-6 col">
		新年 的 时候 他 准备 做 什么?<br/>
			<button type="button" id="n11" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g11" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn11">Xīnnián de shíhou tā zhǔnbèi zuò shénme? <br/></span>
		<span class="eng" id="eng11">What is he planning to do for New Year?<br/></span>
		<br/>
		明天 他 有 什么 事 要 做?<br/>
			<button type="button" id="n12" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g12" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn12">Míngtiān tā yǒu shénme shì yào zuò? <br/></span>
		<span class="eng" id="eng12">What is he going to do tomorrow?<br/></span>
		<br/>
		他们 两 个 人 在 等 谁 呢?<br/>
			<button type="button" id="n13" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g13" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn13">Tāmen liǎng ge rén zài děng shéi ne?<br/></span>
		<span class="eng" id="eng13">Who are those two people waiting for?<br/></span>
		<br/>
		他们 等 的 人 来了 没有?<br/>
			<button type="button" id="n14" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g14" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn14">Tāmen děng de rén láile méiyǒu?<br/></span>
		<span class="eng" id="eng14">Are they waiting for someone?<br/></span>
		<br/>
		外面 的 天气 怎么样?<br/>
			<button type="button" id="n15" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g15" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn15">Wàimiàn de tiānqì zěnmeyàng?<br/></span>
		<span class="eng" id="eng15">What's the weather outside?<br/></span>
		<br/>
	</div>
</div>
<div id="pr" class="dash"></div>
<div class="container-fluid">
	<h3>语音 (yǔyīn) Pronounciation</h3>
	<h4><button class="cd" onclick="play('02-15-5');">&#128191; 15-5</button>
	<audio controls="" preload="metadata" id="02-15-5"><source src="../mandarin/audio/02-15-5.mp3" type="audio/mpeg">No audio</audio>
	<br/>Intonation of a Question Ending with "<b>吧</b>" or "<b>吗</b>"
	<br/>用"吧"构成的疑问句的句调为降调，用"吗"构成的疑问句的句调为升调 例如:</h4>
	<p>A question ending with "<b>吧</b>" (ba) has a falling intonation, and one that ends with "<b>吗</b>" (ma) has a rising intonation. For example:</p>
	<table class="table table-bordered table-condensed table-responsive">
		<tr><td>(1)</td><td><span class="pynD">Zhè běn shū shì nǐ de ba?</span></td><td><span class="pynD">Zhè běn shū shì nǐ de ma?</span></td><tr/>
		<tr><td></td><td><span class="xhanD">这本书是你的<b>吧</b>?⤵</span></td><td><span class="xhanD">这本书是你的吗?⤴</span></td><tr/>
		<tr><td></td><td><span class="engD">Is this book yours?</span></td><td><span class="engD">Is this book yours?</span></td><tr/>
		<tr><td>(2)</td><td><span class="pynD">Míngtiān shì xīngqī èr ba?</span></td><td><span class="pynD">Míngtiān shì xīngqī èr ma?</span></td><tr/>
		<tr><td></td><td><span class="xhanD">明天 是 星期 二 吧?⤵</span></td><td><span class="xhanD">明天 是 星期 二 吗?⤴</span></td><tr/>
		<tr><td></td><td><span class="engD">Tomorrow is Tuesday?</span></td><td><span class="engD">Is tomorrow Tuesday?</span></td><tr/>
		<tr><td>(3)</td><td><span class="pynD">Nǐ mǎi piào le ba?</td><td><span class="pynD">Nǐ mǎi piào le ma?</span></td><tr/>
		<tr><td></td><td><span class="xhanD">你 买 票 了 吧?⤵</span></td><td><span class="xhanD">你 买 票 了 吗?⤴</span></td><tr/>
		<tr><td></td><td><span class="engD">Have you bought a ticket?</span></td><td><span class="engD">Did you buy a ticket?</span></td><tr/>
	</table>
</div>
<div id="ch" class="dash"></div>
<div class="container-fluid">
	<h3>汉字 Characters</h3>
	<h4 class="sublesson">Chinese Radicals "<b>山</b>" (shān) and "大" (dà)</h4>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="active"><th>Radical</th><th>Explanation</th><th>Examples</th></tr>
			<tr>
				<td>山<br/>shān</td><td>related to names, types &amp; forms<br/>of mountains and islands<b></b></td>
				<td>岭&nbsp;lǐng&nbsp;ridge of a mountain<br/>岖&nbsp;qū&nbsp;rugged, rough</td>
			</tr>
			<tr>
				<td>大<br/>dà</td><td>related to people<b></b></td>
				<td>天&nbsp;tiān&nbsp;sky<br/>夫&nbsp;fū&nbsp;husband</td>
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
