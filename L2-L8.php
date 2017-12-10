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
	<title>Level 2 - 8</title>
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
	<div class="jumbotron lessonHeaderLeft">Dì bā kè<br/>第八课<br/>Lesson 8</div>
	<div class="lessonHeaderRight"><h2>Ràng wǒ xiǎngxiang zài gàosù nǐ<br/>让 我 想想 再 告诉 你<br/><b>Let me think about it and I'll tell you later</b></h2></div>
</div>
<div class="container-fluid">
	<h4 class="sublesson">1. <button class="cd" onclick="play('02-08-1');">&#128191; 8-1</button>
	<audio controls="" preload="metadata" id="02-08-1"><source src="../mandarin/audio/02-08-1.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén yī. Zài jiàoshì.<br/>漯文一。 在 教室。<br/>Text 1. In the classroom.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Wǒmen xiàwǔ qù kàn diànyǐng, hǎo ma?<br/>
		A: 我们 下午 去 看 电影， 好 吗？<br/><br/>
		<span class="masked">B: </span>Jīntiān xiàwǔ wǒ méiyǒu shíjiān, míngtiān xiàwǔ zài qù ba.<br/>
		B: 今天 下午 我 没有 时间， 明天 下午 再 去 吧。<br/><br/>
		<span class="masked">A: </span>Nǐ xiǎng kàn shénme diànyǐng?<br/>
		A: 你 想 看 什么 电影？<br/><br/>
		<span class="masked">B: </span>Ràng wǒ xiǎngxiang zài gàosù nǐ.<br/>
		B: 让 我 想想 再 告诉 你。<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Let's go see a movie this afternoon, shall we?<br/>
		B: I'm not free this afternoon. Let's go tomorrow afternoon.<br/>
		A: Which movie would you like to see?<br/>
		B: Let me think about it and I'll tell you later.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>再</td><td>zài</td><td>adv.</td><td>again, once more</td></tr>
			<tr><td>让</td><td>ràng</td><td>verb</td><td>to let, to allow</td></tr>
			<tr><td>告诉</td><td>gàosù</td><td>verb</td><td>to tell</td></tr>
		</table>
		</div>
	</div>
	<div class="clearfix"></div>
	<h4 class="sublesson">2. <button class="cd" onclick="play('02-08-2');">&#128191; 8-2</button>
	<audio controls="" preload="metadata" id="02-08-2"><source src="../mandarin/audio/02-08-2.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén èr. Zài sùshè.<br/>漯文二。在宿舍。<br/>Text 2. In then Dorm.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Wàibian tiānqì hěn hǎo, wǒmen chūqù yùndòng yùndòng ba.<br/>
		A: 外边 天气 很 好， 我们 出去 运动 运动 吧！<br/><br/>
		<span class="masked">B: </span>Nǐ děngděng wǒ, hǎo ma? Wáng lǎoshī ràng wǒ gěi Dàwèi dǎ gè diànhuà.<br/>
		B: 你 等等 我， 好 吗？王 老师 让 我 给 大卫 打 个 电话。<br/><br/>
		<span class="masked">A: </span>Huílái zài dǎ ba. Zhǎo Dàwèi yǒu shénme shìqíng ma?<br/>
		A: 回来 再 打 吧。找 大卫 有 什么 事情 吗？<br/><br/>
		<span class="masked">B: </span>Tīng shuō Dàwèi bìng le, wǒ xiǎng zhǎo shíjiān qù kànkàn tā.<br/>
		B: 听 说 大卫 病 了， 我 想 找 时间 去 看看 他。<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: It's a nice day outside. Let's go out and do some exercise.<br/>
		B: Please wait for me a minute, will you? Professor Wang asked me to give David a call.<br/>
		A: Call him after we come back. What's the matter?<br/>
		B: I heard that David is sick. I want to visit him sometime.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>等</td><td>děng</td><td>verb</td><td>to wait,<br/>to await</td></tr>
			<tr><td>找</td><td>zhǎo</td><td>verb</td><td>to look for</td></tr>
			<tr><td>事情</td><td>shìqíng</td><td>noun</td><td>thing, matter, affair</td></tr>
		</table>
		</div>
	</div>
	<div class="clearfix"></div>
	<h4 class="sublesson">3. <button class="cd" onclick="play('02-08-3');">&#128191; 8-3</button>
	<audio controls="" preload="metadata" id="02-08-3"><source src="../mandarin/audio/02-08-3.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén sān. Zài bīnguǎn de qiántái.<br/>漯文三。在 宾馆 的 前台。<br/>Text 3. At the front desk of a hotel.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Fúwùyuán, wǒ fángjiān de mén dǎ bù kāile.<br/>
		A: 服务员， 我 房间 的 门 打 不 开 了。<br/><br/>
		<span class="masked">B: </span>Nín zhù nǎge fángjiān?<br/>
		B: 您 住 哪个 房间？<br/><br/>
		<span class="masked">A: </span>Sān yāo qī.<br/>
		A: 317<br/><br/>
		<span class="masked">B: </span>Hǎo de, wǒ jiào rén qù kàn kàn.<br/>
		B: 好 的，我 叫 人 去 看看。<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Excuse me, I can't open my door.<br/>
		B: Which room do you stay in?<br/>
		A: Room 317<br/>
		B: Okay, I'll send someone to have a check.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Word</i></th></tr>
			<tr><td>服务员</td><td>fúwùyuán</td><td>noun</td><td>attendant,<br/>waiter/waitress</td></tr>
		</table>
		</div>
	</div>
	<div class="clearfix"></div>
	<h4 class="sublesson">4. <button class="cd" onclick="play('02-08-4');">&#128191; 8-4</button>
	<audio controls="" preload="metadata" id="02-08-4"><source src="../mandarin/audio/02-08-4.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén sì. Zài shāngdiàn.<br/>漯文四。在 商店。<br/>Text 4. In a store.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Nǐ kànkàn zhè jǐ jiàn yīfú zěnmeyàng?<br/>
		A: 你 看看 这 几 件 衣服 怎么样。<br/><br/>
		<span class="masked">B: </span>Zhè jiàn bái de yǒudiǎr chǎng, nà jiàn hēi de yǒudiǎr guì.<br/>
		B: 这 件 白 的 有点儿 长，那件 黑 的 有点儿 贵。<br/><br/>
		<span class="masked">A: </span>Zhè jiàn hóng de ne? Zhè shì jīntiān xīn lái de.<br/>
		A: 这 件 红 的 呢？这 是 今天 新 来 的。<br/><br/>
		<span class="masked">B: </span>Ràng wǒ zài kàn kàn.<br/>
		B: 让 我 再 看看。<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: What do you think of these dresses?<br/>
		B: This white one is a little bit too long. That black one is a bit expensive.<br/>
		A: What about this red one? This one has just got here today.<br/>
		B: Thanks. I'll look around.<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>白</td><td>bái</td><td>adj.</td><td>white</td></tr>
			<tr><td>黑</td><td>hēi</td><td>adj.</td><td>black</td></tr>
			<tr><td>贵</td><td>guì</td><td>adj.</td><td>expensive</td></tr>
		</table>
		</div>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">汪释 Notes</h3>
	<h4 class="sublesson">1. The Interrogative Sentence "..., <b>好吗</b>？" (<b>hǎo ma</b>: okay?)</h4>
	<p>It is used to ask about another persons idea or opinion. For example:</p>
	<ol>
		<li>我们 一起 去 吃饭，<b>好吗</b>？<br/>Wǒmen yīqǐ qù chīfàn, <b>hǎo ma</b>?<br/>Let's go to dinner together， okay?</li>
		<li>你 明天 下午 给 我 打 电话，<b>好吗</b>？<br/>Nǐ míngtiān xiàwǔ gěi wǒ dǎ diànhuà, <b>hǎo ma</b>?<br/>You call me tomorrow afternoon, okay?</li>
		<li>我们 下午 去 看 电影, <b>好吗</b>？<br/>Wǒmen xiàwǔ qù kàn diànyǐng, <b>hǎo ma</b>?<br/>We go to see a film this afternoon, okay?</li>
	</ol>
	<h4 class="sublesson">2. The Adverb "<b>再</b>" (<b>zài</b>: again)</h4>
	<p>It indicates the repetition or continuation of an action or a state. It can also indidcate that an action will happen under a certain circumstance. For example:</p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th rowspan="2"><br/>Subject</th><th colspan="2">Predicate</th></tr>
		<tr><th><b>再</b><br/><b>zài</b></th><th>Verb ( + Object)</th></tr>
		<tr><td>你<br/>Nǐ<br/>You</td><td><b>再</b><br/><b>zài</b><br/>again</td><td>看看 这 本 书 吧。<br/>kàn kàn zhè běn shū ba.<br/>look at this book.</td></tr>
		<tr><td colspan="3"><i>Look at this book again.</i></td></tr>
		<tr><td>你<br/>Nǐ<br/>You</td><td>(明天)<b>再</b><br/>(míngtiān) <b>zài</b><br/>(tomorrow) again</td><td>给 我 打 电话 吧。<br/>gěi wǒ dǎ diànhuà ba.<br/>give me a call.</td></tr>
		<tr><td colspan="3"><i>Call me again tomorrow.</i></td></tr>
		<tr><td>（你）<br/>(Nǐ)<br/>(You)</td><td>(让 我 想想)<b>再</b><br/>(ràng wǒ xiǎng xiǎng) <b>zài</b><br/>(let me think about it) again</td><td>告诉你<br/>gàosù nǐ<br/>tell you</td></tr>
		<tr><td colspan="3"><i>(You) (Let me think about it) I'll tell you later</i></td></tr>
	</table>
	<h4 class="sublesson">3.  Pivotal Sentences</h4>
	<p>The predicate of a pivatol sentence is made up of two verbal phrases, the object of the first verb being the subject of the second. The first verb is often a caustive verb, such as "<b>请</b>" (<b>qǐng</b>: to invite), "<b>让</b>" (<b>ràng</b>: to let) and "<b>叫</b>" (<b>jiào</b>: ask) For example:</p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th>Subject</th><th>Verb</th><th>Object/Subject</th><th>Predicate</th></tr>
		<tr><td>我<br/>Wǒ<br/>I</td><td><b>请</b><br/><b>qǐng</b><br/>invite</td><td>你<br/>Nǐ<br/>you</td><td>吃饭。<br/>chīfàn.<br/>to eat.</td></tr>
		<tr><td>你<br/>Nǐ<br/>You</td><td><b>让</b><br/><b>ràng</b><br/>let</td><td>我<br/>Wǒ<br/>me</td><td>再 想想。<br/>zài xiǎng xiǎng.<br/>think again.</td></tr>
		<tr><td>我<br/>Wǒ<br/>I</td><td><b>叫</b><br/><b>jiào</b><br/>ask</td><td>人<br/>rén<br/>people</td><td>去 看看。<br/>qù kàn kàn.<br/>to go look.</td></tr>
	</table>
	<h4 class="sublesson">4. Reduplication of Verbs</h4>
	<p>The reduplicative form of a verb indicates a short time, a small quantity, a slight degree or an attempt, conveying a relaxed and casual mood. It is often used in spoken Chinese.</p>
	<p>Reduplicative forms of monosyllabic verbs:</p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th>A</th><th>AA</th><th>A-A</th></tr>
		<tr><td>说<br/>Shuō<br/>Say</td><td>说说<br/>Shuōshuō<br/>Talk about it</td><td>说一说<br/>Shuō yī shuō<br/>Talk about it</td></tr>
		<tr><td>听<br/>Tīng<br/>Listen</td><td>听听<br/>Tīng tīng<br/>Listen</td><td>听一听<br/>Tīng yī tīng<br/>Listen</td></tr>
		<tr><td>看<br/>Kàn<br/>Look</td><td>看看<br/>Kàn kàn<br/>Look at it</td><td>看一看<br/>Kàn yī kàn<br/>Take a look</td></tr>
	</table>
	<p>Reduplicative forms of disyllabic verbs:</p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th>AB</th><th>ABAB</th></tr>
		<tr><td>学习<br/>Xuéxí<br/>Learn</td><td>学习学习<br/>Xuéxí xuéxí<br/></td></tr>
		<tr><td>准备<br/>Zhǔnbèi<br/>Prepare</td><td>准备准备<br/>Zhǔnbèi zhǔnbèi<br/></td></tr>
		<tr><td>运动<br/>Yùndòng<br/>Sports</td><td>运动运动<br/>Yùndòng yùndòng<br/></td></tr>
	</table>
</div>

<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">练习 (liàn xí) Exercises</h3>
	<h4 class="sublesson">1. Role-play the dialogues</h4>
	<h4 class="sublesson">2. Answer the questions according to the actual situations</h4>
	<div class="col-xs-12 col-md-6 col">
		他们 为什么 今天 下午 不 去 看 电影？<br/>
			<button type="button" id="n11" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g11" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn11">Tāmen wèishénme jīntiān xiàwǔ bú qù kàn diànyǐng?<br/></span>
		<span class="eng" id="eng11">Why do not they go to the movies this afternoon?<br/></span>
		<br/>
		王 老师 为什么 让 他 给 大卫 打 电话？<br/>
			<button type="button" id="n12" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g12" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn12">Wáng lǎoshī wèishéme ràng tā gěi Dàwèi dǎ diànhuà?<br/></span>
		<span class="eng" id="eng12">Why did Professor Wang let him give David a call?<br/></span>
		<br/>
		大卫 怎么 了？<br/>
			<button type="button" id="n13" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g13" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn13">Dàwéi zěnmele?<br/></span>
		<span class="eng" id="eng13">What happened to David?<br/></span>
		<br/>
		他 为什么 去 找 服务员？<br/>
			<button type="button" id="n14" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g14" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn14">Tā wèishéme qù zhǎo fúwùyuán?<br/></span>
		<span class="eng" id="eng14">Why did he go to look for the waiter?<br/></span>
		<br/>
		他 为什么 不 喜欢 那 件 黑 的？<br/>
			<button type="button" id="n15" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g15" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn15">Tā wèishéme bù xǐhuān nà jiàn hēi de?<br/></span>
		<span class="eng" id="eng15">Why did he not like that one in black?<br/></span>
		<br/>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3>语音 (yǔyīn) Pronounciation</h3>
	<h4><button class="cd" onclick="play('02-08-5');">&#128191; 8-5</button>
	<audio controls="" preload="metadata" id="02-08-5"><source src="../mandarin/audio/02-08-5.mp3" type="audio/mpeg">No audio</audio>
	<br/>Intonation of a Declarative Sentence.</h4>
	<p>Declarative sentences in Chinese usually have a falling intonation. For example:</p>
	<ol>
		<li><span class="pynD">Wǒ xuéxí Hànyǔ.</span><br/><span class="xhanD">我 学习 汉语。</span>⤵<br/><span class="engD">I learn Chinese</span></li>
		<li><span class="pynD">Tā shì wǒ de lǎoshī.</span><br/><span class="xhanD">他 是 我 的 老师。</span>⤵<br/><span class="engD">He is my teacher</span></li>
		<li><span class="pynD">Wàibian tiānqì hěn hǎo.</span><br/><span class="xhanD">外边 天气 很 好。</span>⤵<br/><span class="engD">Outside the weather is fine</span></li>
	</ol>
</div>
<div class="container-fluid">
	<h3>汉字 Characters</h3>
	<h4 class="sublesson">Chinese Radicals "ㄡ" (Ōu) and "⼱" (jīn)</h4>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="active"><th>Radical</th><th>Explanation</th><th>Examples</th></tr>
			<tr>
				<td>"ㄡ"<br/>(Ōu)</td><td>variety of meanings<b></b></td>
				<td>欢&nbsp;huān&nbsp;merry, happy<br/>对&nbsp;duì&nbsp;right, correct</td>
			</tr>
			<tr>
				<td>"⼱"<br/>(jīn)</td><td>related to <b>cotton or silk products or textiles</b><b></b></td>
				<td>帮&nbsp;bāng&nbsp;to help, to aid<br/>帽&nbsp;mào&nbsp;hat, cap</td>
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
