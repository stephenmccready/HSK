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
	<title>Level 2 - 13</title>
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
	<div class="jumbotron lessonHeaderLeft">Dì shísān kè. <br/>第十三课。<br/>Lesson 13.</div>
	<div class="lessonHeaderRight"><h2>Mén kāi zhě ne.<br/>门 开 者 呢。<br/><b>The door is open.</b></h2></div>
</div>
<div class="container-fluid">
	<h4 class="sublesson">1. <button class="cd" onclick="play('02-13-1');">&#128191; 13-1</button>
	<audio controls="" preload="metadata" id="02-13-1"><source src="../mandarin/audio/02-13-1.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén yī. Zài bàngōngshì.<br/>漯文一。在办公室.<br/>Text 1. In the office.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Mén kāi zhe ne, qǐng jìn<br/>
		A: 门 开 着 呢，请 进。<br/><br/>
		<span class="masked">B: </span>Qǐngwèn, Zhāng xiānshēng zài ma?<br/>
		B: 请问，张 先生 在 吗？<br/><br/>
		<span class="masked">A: </span>Tā chūqùle. Nǐ xiàwǔ zàilái ba.<br/>
		A: 他 出去 了。你 下午 再 来 吧。<br/><br/>
		<span class="masked">B: </span>Hǎo de. Xièxiè!<br/>
		B: 好 的。 谢谢！<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: The door is open. Come on in.<br/>
		B: Excuse me, is Mr. Zhang in?<br/>
		A: He's gone out. Please come in the afternoon.<br/>
		B: OK. Thank you!<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Word</i></th></tr>
			<tr><td>着</td><td>zhe</td><td>part.</td><td><i>used to<br/>indicate a state</i></td></tr>
		</table>
		</div>
	</div>
	<div class="clearfix"></div>
	<h4 class="sublesson">2. <button class="cd" onclick="play('02-13-2');">&#128191; 13-2</button>
	<audio controls="" preload="metadata" id="02-13-2"><source src="../mandarin/audio/02-13-2.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén èr. Zài bàngōngshì.<br/>漯文二。在办公室.<br/>Text 2. In the office.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Nǎge zhèngzài shǒuhuà de nǚháir shì shéi?<br/>
		A: 哪个 正在 手话 的 女孩儿 是 谁？<br/><br/>
		<span class="masked">B: </span>Wǒ zhīdào tā de míngzì, tā xìng Yáng, jiào Yáng Xiàoxiào, tā jiějiě shì wǒ tóngxué.<br/>
		B: 我 知道 她 的 名字，她 姓 杨， 叫 杨 笑笑，她 姐姐 是 我 同学。<br/><br/>
		<span class="masked">A: </span>Nǎge shǒu lǐ názhě qiānbǐ de ne?<br/>
		A: 哪个 手 里 拿者 铅笔 的 呢？<br/><br/>
		<span class="masked">B: </span>Wǒ bú rènshì.<br/>
		B: 我 不 认识。<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Who is the girl speaking?<br/>
		B: I know her name. Her name is Yang Xiaoxiao. Yang is her family name. Her elder sister is my classmate.<br/>
		A: What about the girl with the pencil in her hand?<br/>
		B: That one I don't know.<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>手</td><td>shǒu</td><td>noun</td><td>hand</td></tr>
			<tr><td>拿</td><td>ná</td><td>verb</td><td>to hold,<br/>to take,<br/>to bring</td></tr>
			<tr><td>铅笔</td><td>qiānbǐ</td><td>noun</td><td>pencil</td></tr>
			<tr><th colspan="4"><i>Proper Noun</i></th></tr>
			<tr><td>杨 笑笑</td><td>Yang Xiaoxiao</td><td colspan="2"><i>name of a person</i></td></tr>
		</table>
		</div>
	</div>
	<div class="clearfix"></div>
	<h4 class="sublesson">3. <button class="cd" onclick="play('02-13-3');">&#128191; 13-3</button>
	<audio controls="" preload="metadata" id="02-13-3"><source src="../mandarin/audio/02-13-3.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén sān. Zài Yùndòngchǎng.<br/>漯文三。在运动场。<br/>Text 3. On the playground.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Tīngshuō nǐ yǒu nǚpéngyǒu le? Wǒ rènshì tā ma?<br/>
		A: 听说 你 有 女朋友 了？我 认识 她 吗？<br/><br/>
		<span class="masked">B: </span>Jiù shì wǒmen bān nàgè zhǎngzhe liǎng gè dà yǎnjīng, fēicháng ài xiào de nǚháir.<br/>
		B: 就 是 我们 班 那个 长着 两 个 大 眼睛，非常 爱 笑 的 女孩儿。<br/><br/>
		<span class="masked">A: </span>Tā bú shì yǒu nánpéngyǒu ma?<br/>
		A: 她 不 是 有 男朋友 吗？<br/><br/>
		<span class="masked">B: </span>Nàgè yǐjīng shì tā de qián nányǒu le.<br/>
		B: 那个 已经 是 她 的 前 男友 了。<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: I heard you have a girlfriend now? Do I know her?<br/>
		B: She is the girl in our class with big eyes and a smiling face.<br/>
		A: She already got a boyfriend, hasn't she?<br/>
		B: That's her ex now.<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>班</td><td>bān</td><td>noun</td><td>class,grade,<br/>team</td></tr>
			<tr><td>长</td><td>zhǎng</td><td>verb</td><td>to grow,<br/>to develop</td></tr>
			<tr><td>笑</td><td>xiào</td><td>verb</td><td>to smile,<br/>to laugh</td></tr>
		</table>
		</div>
	</div>
	<div class="clearfix"></div>
	<h4 class="sublesson">4. <button class="cd" onclick="play('02-13-4');">&#128191; 13-4</button>
	<audio controls="" preload="metadata" id="02-13-4"><source src="../mandarin/audio/02-13-4.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén sì. Zài lùshàng.<br/>漯文四。在路上。<br/>Text 4. On the road.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Qǐngwèn, zhèr lí Xīnjīng Bīnguǎn yuǎn ma?<br/>
		A: 请问，这儿 离 薪京 宾馆 远 吗？<br/><br/>
		<span class="masked">B: </span>Bù yuǎn, zǒulù èrshí fēnzhōng jiù dào.<br/>
		B: 不 远，走 路 二十 分钟 就 到。<br/><br/>
		<span class="masked">A: </span>Nǐ néng gàosù wǒ zěnme zǒu ma?<br/>
		A: 你 能 告诉 我怎么 走 吗？<br/><br/>
		<span class="masked">B: </span>Cóng zhèr yīzhí wǎng qián zǒu, dàole qiánmiàn de lùkǒu zài wǎng yòu zǒu.<br/>
		B: 从 这儿 一直 往 前 走，到了 前面 的 路口 再 往 右 走。<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Excuse me, is Xinjing Hotel far away from here?<br/>
		B: No, it's about a 20 minutes walk.<br/>
		A: Could you tell me how to get there?<br/>
		B: Walk straight ahead from here and turn right at the first crossing.<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>宾馆</td><td>bīnguǎn</td><td>noun</td><td>hotel</td></tr>
			<tr><td>一直</td><td>yīzhí</td><td>adv.</td><td>straight,<br/>all along</td></tr>
			<tr><td>往</td><td>wǎng</td><td>prep.</td><td>to, towards</td></tr>
			<tr><td>路口</td><td>lùkǒu</td><td>noun</td><td>crossing,<br/>crossroads</td></tr>
		</table>
		</div>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">汪释 Notes</h3>
	<h4 class="sublesson">1. The Structural Particle "<b>着</b>" (zhe: with)</h4>
	<p>A verb followed by the structural particle "<b>着</b>" (zhe: with) can indicate the continuation of a certain state. For example:</p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th rowspan="2">Subject</th><th colspan="3">Predicate</th></tr>
		<tr><th>Verb</th><th><b>着</b><br/>zhe<br/>with</th><th>Object</th></tr>
		<tr><td>门<br/>Mén<br/>Door</td><td>开<br/>kāi<br/>open</td><td><b>着</b><br/>zhe<br/>(with)</td><td></td></tr>
		<tr><td colspan="4"><i>The door is open</i></td></tr>
		<tr><td>你们<br/>Nǐmen<br/>They</td><td>穿<br/>chuān<br/>wear</td><td><b>着</b><br/>zhe<br/>(with)</td><td>红色 的 衣服。<br/>hóngsè de yīfú<br/>red clothes.</td></tr>
		<tr><td colspan="4"><i>They are wearing red clothes</i></td></tr>
		<tr><td>（她）<br/>Tā<br/>She</td><td>拿<br/>ná<br/>holds</td><td><b>着</b><br/>zhe<br/>(with)</td><td>铅笔<br/>qiānbǐ<br/>a pencil</td></tr>
		<tr><td colspan="4"><i>She is holding a pencil</i></td></tr>
	</table>
	<p>In the negative form "<b>没</b>" (<b>méi</b>: not) is added before the verb. For example:</p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th rowspan="2">Subject</th><th colspan="3">Predicate</th></tr>
		<tr><th><b>没</b>+Verb</th><th><b>着</b><br/>zhe<br/>with</th><th>Object</th></tr>
		<tr><td>门<br/>Mén<br/>Door</td><td><b>没</b>开<br/><b>méi</b> kāi<br/>is not open</td><td><b>着</b><br/>zhe<br/>(with)</td><td><br/><br/></td></tr>
		<tr><td>你们<br/>Nǐmen<br/>They</td><td><b>没</b>穿<br/><b>méi</b> chuān<br/>do not wear</td><td><b>着</b><br/>zhe<br/>(with)</td><td>红色 的 衣服。<br/>hóngsè de yīfú<br/>red clothes.</td></tr>
		<tr><td>（她）<br/>Tā<br/>She</td><td><b>没</b>拿<br/><b>méi</b> ná<br/>does not hold</td><td><b>着</b><br/>zhe<br/>(with)</td><td>铅笔<br/>qiānbǐ<br/>a pencil</td></tr>
	</table>
	<p>In the interrogative form, "<b>没有</b>" (<b>méiyǒu</b>: have not) is added at the end of the sentence. For example:</p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th rowspan="2">Subject</th><th colspan="4">Predicate</th></tr>
		<tr><th>Verb</th><th><b>着</b><br/>zhe<br/>with</th><th>Object</th><th><b>没有</b><br/>méiyǒu<br/>have not</th></tr>
		<tr><td>门<br/>Mén<br/>Door</td><td>开<br/>kāi<br/>open</td><td><b>着</b><br/>zhe<br/>with</td><td></td><td><b>没有</b>?<br/><b>méiyǒu</b>?<br/>have not?</td></tr>
		<tr><td colspan=5">Is the door open?</td></tr>
		<tr><td>你们<br/>Nǐmen<br/>They</td><td>穿<br/>chuān<br/>wear</td><td><b>着</b><br/>zhe<br/>with</td><td>红色 的 衣服。<br/>hóngsè de yīfú<br/>red clothes.</td><td><b>没有</b>?<br/><b>méiyǒu</b>?<br/>have not?</td></tr>
		<tr><td colspan=5">Are they wearing red clothes?</td></tr>
		<tr><td>（她）<br/>Tā<br/>She</td><td>拿<br/>ná<br/>holds</td><td><b>着</b><br/>zhe<br/>with</td><td>铅笔<br/>qiānbǐ<br/>a pencil</td><td><b>没有</b>?<br/><b>méiyǒu</b>?<br/>have not?</td></tr>
		<tr><td colspan=5">Is she holding a pencil?</td></tr>
	</table>
	<h4 class="sublesson">2. The Rhetorical Question "<b>不是...吗</b>" (<b>búshì...ma</b>： Is not it?)</h4>
	<p>"<b>不是...吗</b>" (<b>búshì...ma</b>: Is not it?) is often used to remind someone of something or to show confusion or dissatisfaction. For example:</p>
	<ol>
		<li><b>不是</b> 说 今天 有 雨 <b>吗</b>？怎么 没 下？
			<br/><b>Bùshì</b> shuō jīntiān yǒu yǔ <b>ma</b>? Zěnme méi xià?
			<br/>Wasn't it meant to rain today? Why didn't it?</li>
		<li>你 <b>不是</b> 北京人 <b>吗</b>？怎么 不 会 说 北京话？
			<br/>Nǐ <b>bùshì</b> Běijīng rén <b>ma</b>? Zěnme bù huì shuō Běijīng huà?
			<br/>Aren't you a Beijinger? Don't you speak with a Beijing dialect?</li>
		<li>（她 是 你 的 女朋友？）她 <b>不是</b> 有 男朋友 了 <b>吗</b>？
			<br/>(Tā shì nǐ de nǚ péngyǒu?) Tā <b>bùshì</b> yǒu nán péngyǒule <b>ma</b>?
			<br/>(She is your girlfriend?) Hasn't she got a boyfriend?</li>
	</ol>
	<h4 class="sublesson">3. The Preposition "<b>往</b>" (<b>wǎng</b>: in the direction of; towards; to)</h4>
	<p>The Preposition "<b>往</b>" (<b>wǎng</b>: towards; to) is often used to indicate direction. For example:</p>
	<ol>
		<li>从 这儿 <b>往</b> 前 走，就是 我们 学校。
			<br/>Cóng zhèr <b>wǎng</b> qián zǒu, jiùshì wǒmen xuéxiào.
			<br/>From here, go forward to get to our school.</li>
		<li>你 看，<b>往</b> 左 走 是 医院，<b>往</b> 右 是 银行。
			<br/>Nǐ kàn, <b>wǎng</b> zuǒ zǒu shì yīyuàn, <b>wǎng</b> yòu shì yínháng.
			<br/>Look, go left to the hospital, to the right is the bank.</li>
		<li>从 这儿 一直 <b>往</b> 前 走，到了 前面 的 路口 再 <b>往</b> 右 走。
			<br/>Cóng zhèr yīzhí <b>wǎng</b> qián zǒu, dàole qiánmiàn de lùkǒu zài <b>wǎng</b> yòu zǒu.
			<br/>From here to go forward, to the intersection and then go right.</li>
	</ol>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">练习 (liàn xí) Exercises</h3>
	<h4 class="sublesson">1. Role-play the dialogues</h4>
	<h4 class="sublesson">2. Answer the questions according to the actual situations</h4>
		<div class="col-xs-12 col-md-6 col">
		张 先生 去 那儿 了？<br/>
			<button type="button" id="n11" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g11" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn11">Zhāng xiānshēng qù nàr le?<br/></span>
		<span class="eng" id="eng11">Where's Mr. Zhang??<br/></span>
		<br/>
		杨 笑笑 是 谁？<br/>
			<button type="button" id="n12" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g12" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn12">Yáng Xiàoxiào shì shéi?<br/></span>
		<span class="eng" id="eng12">Who is Yang Xiaoxiao?<br/></span>
		<br/>
		他 的 女朋友 是 谁？<br/>
			<button type="button" id="n13" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g13" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn13">Tā de nǚ péngyǒu shì shéi?<br/></span>
		<span class="eng" id="eng13">Who is his girlfriend?<br/></span>
		<br/>
		“前 男友” 是 什么 意思？<br/>
			<button type="button" id="n14" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g14" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn14">“Qián nányǒu” shì shénme yìsi?<br/></span>
		<span class="eng" id="eng14">What does "ex-boyfriend" mean?<br/></span>
		<br/>
		去 新京 宾馆 怎么 走？<br/>
			<button type="button" id="n15" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g15" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn15">Qù Xīnjīng Bīnguǎn zěnme zǒu?<br/></span>
		<span class="eng" id="eng15">How to get to Xīnjīng Hotel?<br/></span>
		<br/>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3>语音 (yǔyīn) Pronounciation</h3>
	<h4><button class="cd" onclick="play('02-13-5');">&#128191; 13-5</button>
	<audio controls="" preload="metadata" id="02-13-5"><source src="../mandarin/audio/02-13-5.mp3" type="audio/mpeg">No audio</audio>
	<br/>Intonation of an Imperative Sentence</h4>
	<p>When the tone is polite, the whole sentence is said in a low pitch, the first clause ending in a slightly rising intonation and the sentence ending in a smoothly falling intonation. For example:</p>
	<ol>
		<li>
			<span class="pynD">Ràng wǒmen xiūxí xiūxí ba.</span><br/>
			<span class="xhanD">让 我们 休息 休息 吧。</span>⤵<br/>
			<span class="engD">Let's take a break.</span>
		</li>
		<li>
			<span class="pynD">Kuàidiǎr xià kè ba.</span><br/>
			<span class="xhanD">快点儿 下 课 吧。</span>⤵<br/>
			<span class="engD">End this class soon.</span>
		</li>
		<li>
			<span class="pynD">Qǐng zuò ba.</span><br/>
			<span class="xhanD">请 坐 吧。</span>⤵<br/>
			<span class="engD">Please sit down.</span>
		</li>
	</ol>
</div>
<div class="container-fluid">
	<h3>汉字 Characters</h3>
	<h4 class="sublesson">Chinese Radicals "⽄" (Jīn) and "⻚" (Yè)</h4>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="active"><th>Radical</th><th>Explanation</th><th>Examples</th></tr>
			<tr>
				<td>⽄<br/>Jīn</td><td>related to axes or cutting/whittling<b></b></td>
				<td>新&nbsp;xīn&nbsp;new<br/>所&nbsp;suǒ&nbsp;place</td>
			</tr>
			<tr>
				<td>⻚<br/>Yè</td><td>related to human head or face<b></b></td>
				<td>颜&nbsp;yán&nbsp;face, look<br/>须&nbsp;xū&nbsp;beard, moustache</td>
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
