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
	<title>Level 2 - 5</title>
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
	<div class="jumbotron lessonHeaderLeft">Dì wǒ kè<br/>第五课<br/>Lesson 5</div>
	<div class="lessonHeaderRight"><h2>Jiù mǎi zhè jiàn ba<br/>就 买 这 件 吧<br/><b>Take this one</b></h2></div>
</div>
<div class="container-fluid">
	<h4 class="sublesson">1. <button class="cd" onclick="play('02-05-1');">&#128191; 5-1</button>
	<audio controls="" preload="metadata" id="02-05-1"><source src="../mandarin/audio/02-05-1.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén yī. Zài jiālǐ. <br/>漯文一。在 家里。<br/>Text 1. At Home.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Wǎnshàng wǒmen qù fànguǎn chīfàn, zěnmeyàng?<br/>
		A: 晚上 我们 去 饭馆 吃饭，怎么样？<br/><br/>
		<span class="masked">B: </span>Wǒ bùxiǎng qù wàimiàn chī, wǒ xiǎng zàijiā chī.<br/>
		B: 我 不 想 去 外面 吃，我 想 在 家 吃。<br/><br/>
		<span class="masked">A: </span>Nà nǐ zhǔnbèi zuò shénme ne?<br/>
		A: 那 你 准备 做 什么 呢？<br/><br/>
		<span class="masked">B: </span>Jiù zuò nǐ ài chī de yú ba.<br/>
		B: 就 做 你 爱 吃 的 鱼 吧。<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Let's go to a restuarant for dinner. What do you think?<br/>
		B: I don't want to eat out. I want to eat at home.<br/>
		A: What are you planning to cook?<br/>
		B: I'm thinking of fish, your favourite.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>外面</td><td>wàimiàn</td><td>noun</td><td>outside</td></tr>
			<tr><td>准备</td><td>zhǔnbèi</td><td>verb</td><td>to intend<br/>to plan</td></tr>
			<tr><td>就</td><td>jiù</td><td>adv.</td><td><i>used to indicate<br/>a conclusion<br/>or resolution</i></td></tr>
			<tr><td>鱼</td><td>yú</td><td>noun</td><td>fish</td></tr>
			<tr><td>吧</td><td>ba</td><td>part.</td><td><i>used at the end<br/>of a sentence<br/>to indicate consultation,<br/>suggestion,request<br/>or command</i></td></tr>
		</table>
		</div>
	</div>
	<div class="clearfix"></div>
	<h4 class="sublesson">2. <button class="cd" onclick="play('02-05-2');">&#128191; 5-2</button>
	<audio controls="" preload="metadata" id="02-05-2"><source src="../mandarin/audio/02-05-2.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén èr. Zài shāngdiàn<br/>漯文二。 在 商店。<br/>Text 2. In a store.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Bāng wǒ kàn yīxià zhè jiàn yīfú zěnmeyàng?<br/>
		A: 帮 我 看 一下 这 件 衣服 怎么样?<br/><br/>
		<span class="masked">B: </span>Yánsè hái kěyǐ, jiùshì yǒudiǎnr dà.<br/>
		B: 颜色 还 可以，就是 有点儿 大。<br/><br/>
		<span class="masked">A: </span>Zhè jiàn xiǎo de zěnmeyàng?<br/>
		A: 这 件 小 的 怎么样？<br/><br/>
		<span class="masked">B: </span>Zhè jiàn bùcuò, jiù mǎi zhè jiàn ba.<br/>
		B: 这 件 不错， 就 买 这 件 吧。<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: What do you think of this garment?<br/>
		B: The color is okay, but it seems too large<br/>
		A: What about this small one?<br/>
		B: This one is good. Take this one.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>件</td><td>jiàn</td><td>meas.</td><td>piece (<i>used for clothes<br/>among other items</i>)</td></tr>
			<tr><td>还</td><td>hái</td><td>adv.</td><td>passably, fairly, rather</td></tr>
			<tr><td>可以</td><td>kěyǐ</td><td>adj.</td><td>not bad</td></tr>
			<tr><td>不错</td><td>bùcuò</td><td>adj.</td><td>pretty good</td></tr>
		</table>
		</div>
	</div>
	<div class="clearfix"></div>
	<h4 class="sublesson">3. <button class="cd" onclick="play('02-05-3');">&#128191; 5-3</button>
	<audio controls="" preload="metadata" id="02-05-3"><source src="../mandarin/audio/02-05-3.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén sān. Zài jiàoshì.<br/>漯文三。 在 教室。<br/>Text 3. In the classroom.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Jīntiān qù bú qù dǎqiú?<br/>
		A: 今天 去 不 去 打球？<br/><br/>
		<span class="masked">B: </span>Zhè liǎng tiān yǒudiǎnr lèi, bù qù dǎqiúle.<br/>
		B: 这 两 天 有点儿 累，不 去 打 球 了。<br/><br/>
		<span class="masked">A: </span>Nǐ zài zuò shénme ne? Shì zài xiǎng zuótiān de kǎoshì ma?<br/>
		A: 你 在 做 什么 呢？ 是 在 想 昨天 的 考试 吗？<br/><br/>
		<span class="masked">B: </span>Shì a, wǒ juédé tīng hé shuō hái kěyǐ, dú hé xiě bù hǎo,<br/>
		B: 是 啊， 我 觉得 听 和 说 还 可以，读 和 写 不好，<br/>
		<span class="masked">B: </span>hěnduō zì wǒ dōu bù zhīdào shì shénme yìsi.<br/>
		<span class="masked">B: </span>很多 字 我 都 不 知道 是 什么 意思。<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Will you go to play football today?<br/>
		B: No. I won't. I've been feeling tired lately.<br/>
		A: What are you doing? Are you thinking about yesterday's test?<br/>
		B: Yes. I think I did okay in listening and speaking, but not in reading and writing. I didn't know the meanings of many characters.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>考试</td><td>kǎoshì</td><td>noun</td><td>test, exam</td></tr>
			<tr><td>意思</td><td>yìsi</td><td>noun</td><td>meaning</td></tr>
		</table>
		</div>
	</div>
	<div class="clearfix"></div>
	<h4 class="sublesson">4. <button class="cd" onclick="play('02-05-4');">&#128191; 5-4</button>
	<audio controls="" preload="metadata" id="02-05-4"><source src="../mandarin/audio/02-05-4.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén sì. Zài gōngsī.<br/>漯文四。 在 公司<br/>Text 4. In the company.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Xiūxí yīxià ba, hē kāfēi ma?<br/>
		A: 休息 一下 吧，喝 咖啡 吗？<br/><br/>
		<span class="masked">B: </span>Bù hēle, wǒ yǐjīng hē liǎng bēile<br/>
		B: 不 喝了， 我 已经 喝 两 杯了。<br/><br/>
		<span class="masked">A: </span>Shì a, kāfēi hē duōle duì shēntǐ bù hǎo.<br/>
		A: 是 啊，咖啡 喝 多了 对 身体 不 好。<br/><br/>
		<span class="masked">B: </span>Yǐhòu wǒ shǎo hè yīdiǎnr, měitiān hè yībēi.<br/>
		B: 以后 我 少 喝 一点儿， 每天 喝 一杯。<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Let's take a rest. Would you like some coffee.<br/>
		B: No, thanks. I've already had two cups.<br/>
		A: Right. Too much coffee is bad for our health.<br/>
		B: I'll drink less coffee. One cup a day.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>咖啡</td><td>kāfēi</td><td>noun</td><td>coffee</td></tr>
			<tr><td>对</td><td>duì</td><td>prep.</td><td>(<i>used before a noun or pronoun</i>)<br/>to,for</td></tr>
			<tr><td>以后</td><td>yǐhòu</td><td>noun</td><td>after, afterwards,<br/>later</td></tr>
		</table>
		</div>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">汪释 Wāng shì Notes</h3>
	<h4 class="sublesson">1. The adverb "<b>就</b>" (<b>jiù</b>: <i>just</i>)</h4>
	<p>The structure "<b>就</b> + verb" indicates a conclusion or a resolution made on the basis of what's mentioned previously. For example:</p>
	<ol>
		<li>你 不想 去， <b>就</b> 在学 休息 吧。<br/>Nǐ bùxiǎng qù, <b>jiù</b> zàixué xiūxī ba.<br/>You don't want to go, just rest in school.</li>
		<li>这 儿 的 咖啡 不 错，<b>就</b> 喝 咖啡 吧。<br/>Zhèr de kāfēi bùcuò, <b>jiù</b> hē kāfēi ba.<br/>The coffee here is pretty good, let's drink coffee.</li>
		<li><b>就</b> 做 你 爱 吃 的 鱼 吧。<br/><b>Jiù</b> zuò nǐ ài chī de yú ba.<br/>Just make your favorite fish.</li>
	</ol>
	<p>
	<b>* Attention</b>: In the sentence: "颜色 还 可以，<b>就是</b> 有点儿 大"
	<br/>&nbsp;&nbsp;<span class="pynD">Yánsè hái kěyǐ, <b>jiùshì</b> yǒudiǎnr dà</span>
	<br/>&nbsp;&nbsp;<span class="engD"><i>The color is okay, but it seems too large.</i></span>
	<br/>&nbsp;&nbsp;"<b>就是</b>" (<b>jiùshì</b>) indicates concession.
	</p>
	<h4 class="sublesson">2. (1) The Modal Adverb "<b>还</b>" (<b>hái</b>: <i>still, yet</i>) (1)</h4>
	<p>The structure "<b>还</b> + adjective" means that something is passable or acceptable. For example:</p>
	<ol>
		<li>A: 你 身体 怎么样？<br/>Nǐ shēntǐ zěnmeyàng?<br/>How is your health?
		<br/>B: <b>还</b> 好。<br/><b>Hái</b> hǎo.<br/>Okay.
		</li>
		<li>A: 这 件 衣服 大 吗？<br/>Zhè jiàn yīfú dà ma?<br/>Are these clothes big?
		<br/>B: <b>还</b> 行，不 太 大。<br/><b>Hái</b> xíng, bù tài dà.<br/>Okay, not too big.
		</li>
		<li>A: 作天 的 考试 怎么样？<br/>Zuòtiān de kǎoshì zěnmeyàng?<br/>Yesterday's exam how was it?
		<br/>B: 我 觉得 听 和 说 <b>还</b> 可 认，读 和 写 不 好。<br/>Wǒ juédé tīng hé shuō <b>hái</b> kě rèn, dú hé xiě bù hǎo.<br/>I think I did okay in listening and speaking, but not in reading and writing.
		</li>
	</ol>
	<h4 class="sublesson">3. The Adverbial Modifier "<b>有点儿</b>" (<b>yǒudiǎnr</b>：slightly, a little, somewhat)</h4>
	<p>The structure "<b>有点儿</b>" + adjective/verb indicates the speaker's negative mood complaint. For example:</p>
	<ol>
		<li>今天 天气 <b>有点儿</b> 冷。<br/>Jīntiān tiānqì <b>yǒudiǎnr</b> lěng.<br/>Today the weather is slightly cold.</li>
		<li>我 昨天 <b>有点儿</b> 累。<br/>Wǒ zuótiān <b>yǒudiǎnr</b> lèi.<br/>Yesterday I was a little tired.</li>
		<li>(这 件 衣服) <b>有点儿</b> 大。<br/>(Zhè jiàn yīfú) <b>Yǒudiǎnr</b> dà.<br/>(These clothes) Are somewhat large.</li>
	</ol>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">练习 (liàn xí) Exercises</h3>
	<h4 class="sublesson">1. Role-play the dialogues</h4>
	<h4 class="sublesson">2. Answer the questions according to the actual situations</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="han hanzi11">今天 晚上 他们 在 哪儿 吃饭？<br/>
			<button type="button" id="n11" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g11" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn11">Jīntiān wǎnshàng tāmen zài nǎr chīfàn?<br/></span>
		<span class="eng" id="eng11">Where are they going to eat this evening?<br/></span>
		<br/>
		<span class="han hanzi12">她 觉得 那 件 衣服 怎么样？<br/>
			<button type="button" id="n12" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g12" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn12">Tā juédé nà jiàn yīfú zěnmeyàng?<br/></span>
		<span class="eng" id="eng12">What does she think of these clothes<br/></span>
		<br/>
		<span class="han hanzi13">她 今天 为什么 不 去 打 球了？<br/>
			<button type="button" id="n13" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g13" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn13">Tā jīntiān wèishénme bù qù dǎ qiúle?<br/></span>
		<span class="eng" id="eng13">Why did she not go play ball today?<br/></span>
		<br/>
		<span class="han hanzi14">她 觉得 昨天 的 考试 怎么样？<br/>
			<button type="button" id="n14" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g14" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn14">Tā juédé zuótiān de kǎoshì zěnmeyàng?<br/></span>
		<span class="eng" id="eng14">How does she feel about yesterdays exam?<br/></span>
		<br/>
		<span class="han hanzi15">他 为什么 以后 每天 就 喝 一杯 咖啡？<br/>
			<button type="button" id="n15" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g15" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn15">Tā wèishénme yǐhòu měitiān jiù hè yībēi kāfēi?<br/></span>
		<span class="eng" id="eng15">Why does he drink a cup of coffee every day?<br/></span>
		<br/>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3>语音 (yǔyīn) Pronounciation</h3>
	<h4>(2) Syntactic Stress in a Sentence (2)</h4>
	<button class="cd" onclick="play('02-05-5');">&#128191; 5-5</button>
	<audio controls="" preload="metadata" id="02-05-5"><source src="../mandarin/audio/02-05-5.mp3" type="audio/mpeg">No audio</audio>
	<ol>
		<li><h4>Stressing the Attributive Modifier</h4>
		<p>
		Nà shì <b>wǒ māma zuò de</b> Zhōngguó cài.<br/>
		那 是 <b>我 妈妈 做 的</b> 中国 菜。<br/>
		That's my mother's Chinese food.<br/><br/>
		Nǎge xuéxiào shì <b>Lǐ lǎoshī gōngzuòle hěnduō nián de</b> dìfāng<br/>
		哪个 学校 是 <b>李 老师 工作了 很多 年 的</b> 地方。<br/>
		This school is where teacher Lǐ worked for many years<br/><br/>
		Wǒ zuì xǐhuān <b>hóngsè de yīfú</b>.<br/>
		我 最 喜欢 <b>红色 的 衣服</b>。<br/>
		I most like red clothes.<br/>
		</p>
		</li>
		<li><h4>Stressing the Adverbial Modifier</h4>
		<p>
		Nǐ de bēizi <b>jiù</b> zài nàr.<br/>
		你 的 杯子 <b>就</b> 在 那儿。<br/>
		Your cup is there.<br/><br/>
		Dà wèi de gǒu <b>fēi yīyàng de</b> pǎole guòqù.<br/>
		大卫 的 狗 <b>飞 一样 的</b> 跑了 过去。<br/>
		David's dog ran like a fly.<br/><br/>
		Wǒ bàba shì yīshēng, měitiān <b>cóng zǎo dào wǎn</b> máng gōngzuò.<br/>
		我 爸爸 是 医生， 每天 <b>从 早 到 晚</b> 忙 工作。<br/>
		My father is a doctor, every day from morning to night he is busy at work.<br/>
		</p>
		</li>
	</ol>
</div>
<div class="container-fluid">
	<h3>汉字 Hànzì Characters</h3>
	<h4 class="sublesson">1. Single-Component Characters</h4>
	<div class="table">
		<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><td>⻥</td><td>yú</td><td>fish</td><td><div><img class="strokeOrder" src="img/鱼-order.gif" alt="⻥"/></div></td></tr>
		<tr><td>衣</td><td>yī</td><td>clothes</td><td><div><img class="strokeOrder" src="img/衣-order.gif" alt="衣"/></div></td></tr>
		</table>
	</div>
	<h4 class="sublesson">2. Chinese Radicals "⼦" (zi) and "广" (guǎng)</h4>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="active"><th>Radical</th><th>Explanation</th><th>Examples</th></tr>
			<tr>
				<td>⼦<br/>(zi)</td>
				<td>usually<br/>related to children</td>
				<td> 孩&nbsp;hái&nbsp;child<br/><br/> 孙&nbsp;sūn&nbsp;grandson</td>
			</tr>
			<tr>
				<td>广<br/>(guǎng)</td>
				<td>usually<br/>related to buildings.</td>
				<td> 店&nbsp;diàn&nbsp;shop, store<br/><br/> 床&nbsp;chuáng&nbsp;bed</td>
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
