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
	<title>Level 2 - 12</title>
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
	<div class="jumbotron lessonHeaderLeft">Dì shí'èr kè<br/>第十二课<br/>Lesson 12.</div>
	<div class="lessonHeaderRight"><h2>Nǐ chuān dé tài shǎole<br/>你 穿 得 太 少 了<br/><b>You wear too little</b></h2></div>
</div>
<div class="container-fluid">
	<h4 class="sublesson">1. <button class="cd" onclick="play('02-12-1');">&#128191; 12-1</button>
	<audio controls="" preload="metadata" id="02-12-1"><source src="../mandarin/audio/02-12-1.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén yī. Zài jiàoshì.<br/>漯文一。在 教室。<br/>Text 1. In the classroom.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Nǐ měitiān zǎoshang jǐ diǎn qǐchuáng?<br/>
		A: 你 每天 早上 几 点 起 床？<br/><br/>
		<span class="masked">B: </span>Liù diǎn duō.<br/>
		B: 六 点 多。<br/><br/>
		<span class="masked">A: </span>Nǐ bǐ wǒ zǎoqǐ yīgè xiǎoshí.<br/>
		A: 你 比 我 早 起 一个 小时。<br/><br/>
		<span class="masked">B: </span>Wǒ shuì dé yě zǎo, wǒ měitiān wǎnshàng shí diǎn jiù shuì jué. Zǎo shuì zǎoqǐ shēntǐ hǎo.<br/>
		B: 我 睡 得 也 早，我 每天 晚上 十 点 就睡 觉。 早 睡 早 起 身体 好。<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: When do you get up every morning?<br/>
		B: A few minutes past six.<br/>
		A: You get up one hour earlier than I do.<br/>
		B: I go to bed early also, at 10 o'clock every night. It's healthy to keep early hours.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Word</i></th></tr>
			<tr><td>得</td><td>de</td><td>part.</td><td><i>used after a verb or an adjective to introduce a complement of result or degree</i></td></tr>
		</table>
		</div>
	</div>
	<div class="clearfix"></div>
	<h4 class="sublesson">2. <button class="cd" onclick="play('02-12-2');">&#128191; 12-2</button>
	<audio controls="" preload="metadata" id="02-12-2"><source src="../mandarin/audio/02-12-2.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén èr. Zài péngyǒu jiā.<br/>漯文二。在 朋友家。<br/>Text 2. At a friend's home.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Zài lái diǎnr mǐfàn ba, nǐ chī dé tài shǎole.<br/>
		A: 在 来 点儿 米饭 吧， 你 吃 得 太 少了。<br/><br/>
		<span class="masked">B: </span>Bù shǎole. Jīntiān chī dé hěn hǎo, tài xièxiè nǐle.<br/>
		B: 不 少了。今天 吃 得 很 好，太 谢谢 你了。<br/><br/>
		<span class="masked">A: </span>Nǐ zuò fàn zuò dé zěnmeyàng?<br/>
		A: 你 做 饭 做 得 怎么样？<br/><br/>
		<span class="masked">B: </span>Bù zěnmeyàng, wǒ qīzi bǐ wǒ zuò dé hǎo.<br/>
		B: 不 怎么样，我 妻子 比 我 做 得 好。<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Have more rice, please. You ate too little.<br/>
		B: Not a little actually. I've enjoyed the meal a lot. Thank you so much.<br/>
		A: How well can you cook?<br/>
		B: Not very well. My wife is a better cook than I am.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Word</i></th></tr>
			<tr><td>妻子</td><td>qīzi</td><td>noun</td><td>wife</td></tr>
		</table>
		</div>
	</div>
	<div class="clearfix"></div>
	<h4 class="sublesson">3. <button class="cd" onclick="play('02-12-3');">&#128191; 12-3</button>
	<audio controls="" preload="metadata" id="02-12-3"><source src="../mandarin/audio/02-12-3.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén sān. Zàijiā ménkǒu.<br/>漯文三。在 家 门 口。<br/>Text 3. At the door of the house.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Xià xuěle, jīntiān zhēn lěng.<br/>
		A: 下 雪了，今天 真 冷。<br/><br/>
		<span class="masked">B: </span>Yǒu língxià shí dù ba?<br/>
		B: 有 零下 十 度 吧？<br/><br/>
		<span class="masked">A: </span>Shì a, nǐ chuān dé tài shǎole, wǒmen jìn fángjiān ba.<br/>
		A: 是 啊，你 穿 得 太 少了，我们 进 房间 吧。<br/><br/>
		<span class="masked">B: </span>Hǎo ba.<br/>
		B: 好 吧。<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: It's snowing. It's really cold today.<br/>
		B: The temperature may be 10 degrees below zero, am I right?<br/>
		A: Yes. you wear too little. Let's go inside the house, OK?<br/>
		B: OK.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>雪</td><td>xuě</td><td>noun</td><td>snow</td></tr>
			<tr><td>零</td><td>líng</td><td>num.</td><td>zero</td></tr>
			<tr><td>度</td><td>dù</td><td>noun</td><td>degree</td></tr>
			<tr><td>穿</td><td>chuān</td><td>verb</td><td>to wear,<br/>to put on</td></tr>
			<tr><td>进</td><td>jìn</td><td>verb</td><td>to enter,<br/>to come/go in</td></tr>
		</table>
		</div>
	</div>
	<div class="clearfix"></div>
	<h4 class="sublesson">4. <button class="cd" onclick="play('02-12-4');">&#128191; 12-4</button>
	<audio controls="" preload="metadata" id="02-12-4"><source src="../mandarin/audio/02-12-4.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén sì. Zài jiālǐ.<br/>漯文四。在 家里。<br/>Text 4. At home.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Nǐ zài máng shénme ne?<br/>
		A: 你 在 忙 什么 呢？<br/><br/>
		<span class="masked">B: </span>Wǒ dìdì ràng wǒ bāng tā zhǎo gè fángzi, xiànzài tā jiā lí gōngsī yǒudiǎnr yuǎn.<br/>
		B: 我 弟弟 让 我 帮 他 找 个 房子， 现在 他 家 离 公司 有点儿 远。<br/><br/>
		<span class="masked">A: </span>Zhù dé yuǎn zhēn de hěn lèi!<br/>
		A: 住 得 远 真 的 很 累！<br/><br/>
		<span class="masked">B: </span>Shì a, tā yě xīwàng néng zhù dé jìn yīdiǎnr.<br/>
		B: 是 啊， 他 也 希望 能 住 得 近 一点儿。<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: What are you busy with?<br/>
		B: My younger brother asked me to find an apartment for him. He now lives far from the company.<br/>
		A: It's really exhausting to live far.<br/>
		B: It's true. He also wants to live nearer.<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>弟弟</td><td>dìdì</td><td>noun</td><td>younger brother</td></tr>
			<tr><td>近</td><td>jìn</td><td>adj.</td><td>near, close</td></tr>
		</table>
		</div>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">汪释 Notes</h3>
	<h4 class="sublesson">1. Complements of Degree</h4>
	<p>A complement of degree describes the degree of something. The structured particle "<b>得</b>" (dé) is often used to introduce a complement of degree which makes remarks on the extent or degree an action or the quality or state of something has reached. Sometimes "<b>得</b>" (dé) is not used. For example:</p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th rowspan="2"><br/>Subject</th><th colspan="3">Predicate</th></tr>
		<tr><th>Verb</th><th><b>得</b><br/>dé</th><th>Adj.</th></tr>
		<tr><td>他<br/>Tā<br/>He</td><td>说<br/>shuō<br/>speaks</td><td><b>得</b><br/>dé</td><td>很好<br/>hěn hǎo<br/>very well</td></tr>
		<tr><td>我<br/>Wǒ<br/>I</td><td>起<br/>qǐ<br/>get up</td><td><b>得</b><br/>dé</td><td>很早<br/>hěn zǎo<br/>very early</td></tr>
		<tr><td>我<br/>Wǒ<br/>I</td><td>睡<br/>shuì<br/>sleep</td><td><b>得</b><br/>dé</td><td>也早<br/>yě zǎo<br/>too early</td></tr>
	</table>
	<p>If the verb takes an object, the object should be put before the verb, or the verb be duplicated. For example:</p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th rowspan="2"><br/>Subject</th><th colspan="4">Predicate</th></tr>
		<tr><th>(Verb +) Object</th><th>Verb</th><th><b>得</b><br/>dé</th><th>Adj.</th></tr>
		<tr><td>他<br/>Tā<br/>He</td><td>（说）汉语<br/>(shuō) Hànyǔ<br/>(speaks) Chinese</td><td>说<br/>shuō<br/>speaks</td><td><b>得</b><br/>dé</td><td>很好<br/>hěn hǎo<br/>very well</td></tr>
		<tr><td>我<br/>Wǒ<br/>I</td><td>（写）汉字<br/>(xiě) Hànzì<br/>(writes) Chinese</td><td>写<br/>xiě<br/>writes</td><td><b>得</b><br/>dé</td><td>很好<br/>hěn hǎo<br/>very well</td></tr>
		<tr><td>姐姐<br/>Jiějiě<br/>Elder sister</td><td>（唱）歌<br/>(chàng) gē<br/>(sings) a song</td><td>唱<br/>chàng<br/>sings</td><td><b>得</b><br/>dé</td><td>不错<br/>bùcuò<br/>pretty good</td></tr>
	</table>
	<p>In the negative form, the negative word should be put after the structural particle "<b>得</b>" (dé). For example:</p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th rowspan="2"><br/>Subject</th><th colspan="3">Predicate</th></tr>
		<tr><th>Verb</th><th><b>得</b><br/>dé</th><th>不 + Adj.</th></tr>
		<tr><td>他<br/>Tā<br/>He</td><td>说<br/>shuō<br/>speaks</td><td><b>得</b><br/>dé</td><td>不好<br/>bù hǎo<br/>not good</td></tr>
		<tr><td>我<br/>Wǒ<br/>I</td><td>起<br/>qǐ<br/>get up</td><td><b>得</b><br/>dé</td><td>不早<br/>bù zǎo<br/>not early</td></tr>
		<tr><td>我<br/>Wǒ<br/>I</td><td>住<br/>zhù<br/>live</td><td><b>得</b><br/>dé</td><td>不远<br/>bù yuǎn<br/>not far away</td></tr>
	</table>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th rowspan="2"><br/>Subject</th><th colspan="4">Predicate</th></tr>
		<tr><th>(Verb +) Object</th><th>Verb</th><th><b>得</b><br/>dé</th><th>不 + Adj.</th></tr>
		<tr><td>他<br/>Tā<br/>He</td><td>（说）汉语<br/>(shuō) Hànyǔ<br/>(speaks) Chinese</td><td>说<br/>shuō<br/>speaks</td><td><b>得</b><br/>dé</td><td>不好<br/>bù hǎo<br/>not good</td></tr>
		<tr><td>我<br/>Wǒ<br/>I</td><td>（写）汉字<br/>(xiě) Hànzì<br/>(write) Chinese</td><td>写<br/>xiě<br/>write</td><td><b>得</b><br/>dé</td><td>不好<br/>bù hǎo<br/>not good</td></tr>
		<tr><td>姐姐<br/>Jiějiě<br/>Elder sister</td><td>（唱）歌<br/>(chàng) gē<br/>(sings) a song</td><td>唱<br/>gē<br/>sings</td><td><b>得</b><br/>dé</td><td>不太好<br/>bù tài hǎo<br/>not too good</td></tr>
	</table>
	<p>In the interrogative form, "<b>得</b>" (dé) is followed by the structure "<b>Adj. + 不 + Adj.</b>" forming an affirmative-negative sentence. For example:</p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th rowspan="2"><br/>Subject</th><th colspan="3">Predicate</th></tr>
		<tr><th>Verb</th><th><b>得</b><br/>dé</th><th>Adj. + 不 + Adj.</tr>
		<tr><td>他<br/>Tā<br/>He</td><td>说<br/>shuō<br/>speaks</td><td><b>得</b><br/>dé</td><td>好不好？<br/>hǎo bù hǎo?<br/>good or not?</td></tr>
		<tr><td>姐姐<br/>Jiějiě<br/>Elder sister</td><td>起<br/>qǐ<br/>gets up</td><td><b>得</b><br/>dé</td><td>早不早？<br/>zǎo bù zǎo?<br/>early?</td></tr>
		<tr><td>你<br/>Nǐ<br/>You</td><td>住<br/>zhù<br/>live</td><td><b>得</b><br/>dé</td><td>远不远？<br/>yuǎn bù yuǎn?<br/>far?</td></tr>
	</table>
	<h4 class="sublesson">2.  The "<b>比</b>" (bǐ: prep. than, [superior or inferior] to)</h4>
	<p>If a verb takes a complement of degree "<b>比</b>" (bǐ: prep. than, [superior or inferior] to) can be put before the verb or the complement. For example:</p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th>A</th><th><b>比</b><br/>bǐ<br/>than, [superior<br/>or inferior] to</th><th>B</th><th>Verb + <b>得</b>（dé） + Adj.</th></tr>
		<tr><td>他<br/>Tā<br/>He</td><td><b>比</b><br/>bǐ<br/>than, [superior<br/>or inferior] to</td><td>我<br/>wǒ<br/>me</td><td>学<b>得</b>好<br/>xué dé hǎo<br/>learns well</td></tr>
		<tr><td colspan="4"><i>He learns better than me.</i></td></tr>
		<tr><td>姐姐<br/>Jiějiě<br/>Elder sister</td><td><b>比</b><br/>bǐ<br/>than, [superior<br/>or inferior] to</td><td>我<br/>wǒ<br/>me</td><td>跑<b>得</b>快<br/>pǎo dé kuài<br/>runs fast</td></tr>
		<tr><td colspan="4"><i>Elder sister runs faster than me</i></td></tr>
		<tr><td>我妻了<br/>Wǒ qīle<br/>My wife</td><td><b>比</b><br/>bǐ<br/>than, [superior<br/>or inferior] to</td><td>我<br/>wǒ<br/>me</td><td>做<b>得</b>好<br/>zuò dé hǎo<br/>cooks better</td></tr>
		<tr><td colspan="4"><i>My wife cooks better than me</i></td></tr>
	</table>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th>A</th><th>Verb + <b>得</b> （dé）</th><th><b>比</b><br/>bǐ<br/>than, [superior<br/>or inferior] to</th><th>B</th><th>Adj.</th></tr>
		<tr><td>他<br/>Tā<br/>He</td><td>学<b>得</b><br/>xué dé<br/></td><td><b>比</b><br/>bǐ<br/>than, [superior<br/>or inferior] to</td><td>我<br/>wǒ<br/>me</td><td>好<br/>hǎo<br/>good</td></tr>
		<tr><td colspan="5"><i>He learns better than me.</i></td></tr>
		<tr><td>姐姐<br/>Jiějiě<br/>Elder sister</td><td>跑<b>得</b><br/>pǎo dé<br/></td><td><b>比</b><br/>bǐ<br/>than, [superior<br/>or inferior] to</td><td>我<br/>wǒ<br/>me</td><td>快<br/>kuài<br/>fast</td></tr>
		<tr><td colspan="5"><i>Elder sister runs faster than me</i></td></tr>
		<tr><td>我妻了<br/>Wǒ qīle<br/>My wife</td><td>做<b>得</b><br/>dé<br/>cooks</td><td><b>比</b><br/>bǐ<br/>than, [superior<br/>or inferior] to</td><td>我<br/>wǒ<br/>me</td><td>好<br/>hǎo<br/>good</td></tr>
		<tr><td colspan="5"><i>My wife cooks better than me</i></td></tr>
	</table>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">练习 (liàn xí) Exercises</h3>
	<h4 class="sublesson">1. Role-play the dialogues</h4>
	<h4 class="sublesson">2. Answer the questions according to the actual situations</h4>
	<div>
		她 为什么 每天 晚上 十 点 就 睡觉？<br/>
			<button type="button" id="n11" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g11" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn11">Tā wèishéme měitiān wǎnshàng shí diǎn jiù shuìjiào?<br/></span>
		<span class="eng" id="eng11">Why does she go to bed 10 o'clock every night?<br/></span>
		<br/>
		他们 家 谁 做 饭 做 得 好？<br/>
			<button type="button" id="n12" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g12" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn12">Tāmen jiā shéi zuò fàn zuò dé hǎo?<br/></span>
		<span class="eng" id="eng12">Who cooks well in their family?<br/></span>
		<br/>
		今天 天气 怎么样？<br/>
			<button type="button" id="n13" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g13" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn13">Jīntiān tiānqì zěnmeyàng?<br/></span>
		<span class="eng" id="eng13">How is the weather today?<br/></span>
		<br/>
		她 这 两 天 在 忙 什么 呢？<br/>
			<button type="button" id="n14" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g14" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn14">Tā zhè liǎng tiān zài máng shénme ne?<br/></span>
		<span class="eng" id="eng14">What is she busy with these days?<br/></span>
		<br/>
		她 弟弟 为什么 要 找 新 的 房子？<br/>
			<button type="button" id="n15" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g15" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn15">Tā dìdì wèishéme yào zhǎo xīn de fángzi?<br/></span>
		<span class="eng" id="eng15">Why is her brother looking for a new house?<br/></span>
		<br/>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3>语音 (yǔyīn) Pronounciation</h3>
	<h4><button class="cd" onclick="play('02-12-5');">&#128191; 12-5</button>
	<audio controls="" preload="metadata" id="02-12-5"><source src="../mandarin/audio/02-12-5.mp3" type="audio/mpeg">No audio</audio>
	<h4>Intonation of an Alternative Question</h4>
	<p>These alternatives are stressed, the former is a bit slow in a rising intonation and the latter in a falling intonation. For example:</p>
	<ol>
		<li>
			<span class="pynD">Nǐ xǐhuān chī <b>mǐfàn</b> háishì chī <b>miàntiáo</b>?</span><br/>
			<span class="xhanD">你 喜欢 吃 <b>米饭</b> 还是 吃 <b>面条</b>？</span>⤵<br/>
			<span class="engD">Do you like eating <b>rice</b> or eating <b>noodles</b>?</span>
		</li>
		<li>
			<span class="pynD">Nǐ xiǎng <b>jīntiān</b> qù háishì <b>míngtiān</b> qù?</span><br/>
			<span class="xhanD">你 想 <b>今天</b> 去 还是 <b>明天</b> 去？</span>⤵<br/>
			<span class="engD">Do you want to go <b>today</b> or <b>tomorrow</b>?</span>
		</li>
		<li>
			<span class="pynD">Nǐ qù xuéxiào shì <b>kāichē</b> háishì <b>zuòchē</b>?</span><br/>
			<span class="xhanD">你 去 学校 是 <b>开车</b> 还是 <b>坐车</b>？</span>⤵<br/>
			<span class="engD">Did you <b>drive</b> or <b>ride</b> to school?</span>
		</li>
	</ol>
</div>
<div class="container-fluid">
	<h3>汉字 Characters</h3>
	<h4 class="sublesson">Chinese Radicals "止" (zhǐ: only) and "冂" (jiōng)</h4>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="active"><th>Radical</th><th>Explanation</th><th>Examples</th></tr>
			<tr>
				<td>止<br/>zhǐ</td><td>related to toes<b></b></td>
				<td>趾&nbsp;zhǐ&nbsp;toe<br/>步&nbsp;bù&nbsp;step</td>
			</tr>
			<tr>
				<td>冂<br/>jiōng</td><td>related to relations<br/>among or images<br/>of things<b></b></td>
				<td>同&nbsp;tóng&nbsp;same<br/>网&nbsp;wǎng&nbsp;net</td>
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
