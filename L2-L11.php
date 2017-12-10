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
	<title>Level 2 - 11</title>
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
	<div class="jumbotron lessonHeaderLeft">Dì Shíyī kè<br/>第十一课<br/>Lesson 11</div>
	<div class="lessonHeaderRight"><h2>Tā bǐ wǒ dà sān suì<br/>他 比 我 大 三 岁<br/><b>He is three years older than me</b></h2></div>
</div>
<div class="container-fluid">
	<h4 class="sublesson">1. <button class="cd" onclick="play('02-11-1');">&#128191; 11-1</button>
	<audio controls="" preload="metadata" id="02-11-1"><source src="../mandarin/audio/02-11-1.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén yī. Zài gētīng。<br/>课文一。在 歌厅。<br/>Text 1. In a karaoke bar.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Wáng Fāng, zuótiān hé nǐ yīqǐ chàng gē de rén shì shéi?<br/>
		A: 王方， 昨天 和 你 一起 唱 歌 的 人 是 谁？<br/><br/>
		<span class="masked">B: </span>Yī gè péngyǒu.<br/>
		B: 一 个 朋友。<br/><br/>
		<span class="masked">A: </span>Shénme péngyǒu? Shì bù shì nánpéngyǒu?<br/>
		A: 什么 朋友？ 是 不 是 男朋友？<br/><br/>
		<span class="masked">B: </span>Bù shì bù shì, wǒ tóngxué jièshào de, zuótiān dì yī cì jiàn<br/>
		B: 不 是 不 是， 我 同学 介绍 的， 昨天 第 一 次 见。<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Wang Fang, who was the guy with you in the karaoke yesterday?<br/>
		B: A friend.<br/>
		A: What friend? Boyfriend?<br/>
		B: No. My classmate set me up with him. We met only yesterday.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>唱 歌</td><td>chàng gē</td><td>verb</td><td>to sing</td></tr>
			<tr><td>男</td><td>nán</td><td>adj.</td><td>man, male</td></tr>
		</table>
		</div>
	</div>
	<div class="clearfix"></div>
	<h4 class="sublesson">2. <button class="cd" onclick="play('02-11-2');">&#128191; 11-2</button>
	<audio controls="" preload="metadata" id="02-11-2"><source src="../mandarin/audio/02-11-2.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén èr. Zài sùshè.<br/>课文二。 在宿舍。<br/>Text 2. In the dorm.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Zuǒbiān zhège kàn bàozhǐ de nǚ háizi shì nǐ jiějiě ma?<br/>
		A: 左边 这个 看 报纸 的 女 孩子 是 你 姐姐 吗？<br/><br/>
		<span class="masked">B: </span>Shì. Yòubiān xiě zì de nǎge rén shì wǒ gēgē.<br/>
		B: 是. 右边 写 字 的 哪个 人 是 我 哥哥。<br/><br/>
		<span class="masked">A: </span>Nǐ gēgē duō dà?<br/>
		A: 你 哥哥 多 大？<br/><br/>
		<span class="masked">B: </span>Èrshíwǔ suì, tā bǐ wǒ dà sān suì.<br/>
		B: 二十五 岁，他 比 我 大 三 岁。<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Is the girl on the left reading a newspaper your elder sister?<br/>
		B: Yes. And the guy on the the right is my elder brother.<br/>
		A: How old is he?<br/>
		B: 25. He is three years older than me.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>女</td><td>nǚ</td><td>adj.</td><td>woman, female</td></tr>
			<tr><td>孩子</td><td>háizi</td><td>noun</td><td>child, kid</td></tr>
			<tr><td>右边</td><td>yòubiān</td><td>noun</td><td>right, right side</td></tr>
			<tr><td>比</td><td>bǐ</td><td>prep.</td><td>than, (superior<br/> or inferior) to</td></tr>
		</table>
		</div>
	</div>
	<div class="clearfix"></div>
	<h4 class="sublesson">3. <button class="cd" onclick="play('02-11-3');">&#128191; 11-3</button>
	<audio controls="" preload="metadata" id="02-11-3"><source src="../mandarin/audio/02-11-3.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén sān. Zài shāngdiàn.<br/>课文三。在 商店。<br/>Text 3. At a store.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Jīntiān de xīguā zěnme mài?<br/>
		A: 今天 的西瓜 怎么 卖？<br/><br/>
		<span class="masked">B: </span>Sān kuài wǔ yī jīn.<br/>
		B: 三 快 五一斤。<br/><br/>
		<span class="masked">A: </span>Bǐ zuótiān piányí.<br/>
		A: 比 昨天 便宜。<br/><br/>
		<span class="masked">B: </span>Shì, píngguǒ yě bǐ zuótiān piányí yīxiē. Nín lái diǎnr ba.<br/>
		B: 是， 苹果 也 比 昨天 便宜 一些。 您 来 点儿 吧。<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: What's the price of watermelons today?<br/>
		B: Three <i>yuan</i> and a half per 500 grams.<br/>
		A: It's cheaper than the price yesterday.<br/>
		B: Yes. The apples are also cheaper. Why not take some?<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>便宜</td><td>piányí</td><td>adj.</td><td>cheaper,<br/>inexpensive</td></tr>
		</table>
		</div>
	</div>
	<div class="clearfix"></div>
	<h4 class="sublesson">4. <button class="cd" onclick="play('02-11-4');">&#128191; 11-4</button>
	<audio controls="" preload="metadata" id="02-11-4"><source src="../mandarin/audio/02-11-4.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén sì. Zài xuéxiào.<br/>课文四。在 学校。<br/>Text 4. In the school.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Qiánmiàn shuō huà de nǎge rén jiù shì wǒ de Hànyǔ lǎoshī. Nǐ kěnéng bù rènshì tā<br/>
		A: 前边 说 话 的 哪个 人 就 是 我 的 汉语 老师。你 可能 不 认识 她。<br/><br/>
		<span class="masked">B: </span>Shì xīn lái de Hànyǔ lǎoshī ma？<br/>
		B: 是 新 来 的 汉语 老师 吗？<br/><br/>
		<span class="masked">A: </span>Shì qùnián lái de, tā xìng Wáng, èrshíbā suì<br/>
		A: 是 去年 来 的，她 姓 王， 二十八 岁。<br/><br/>
		<span class="masked">B: </span>Tā bǐ wǒmen lǎoshī xiǎo liǎng suì.<br/>
		B: 她 比 我们 老师 小 两 岁。<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: The women speaking in front of us is my Chinese teacher. You may not know her.<br/>
		B: Is she a new-comer?<br/>
		A: She came here last year. Her family name is Wang, 28 years old.<br/>
		B: She is two years younger than our teacher.<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>说 话</td><td>shuō huà</td><td>verb</td><td>to speak,<br/>to say,<br/>to talk</td></tr>
			<tr><td>可能</td><td>kěnéng</td><td>aux.</td><td>maybe,<br/>perhaps,<br/>probably</td></tr>
			<tr><td>去年</td><td>qùnián</td><td>noun</td><td>last year</td></tr>
			<tr><td>姓</td><td>xìng</td><td>verb</td><td>family name,<br/>surname</td></tr>
		</table>
		</div>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">汪释 Notes</h3>
	<h4 class="sublesson">1. A Verb (Phrase) Used as an Attributive Modifier.</h4>
	<p>When a verb or verb phrase is used as an attributive modifier. "<b>的</b>" (<i>de</i>) should be put between the modifier and the word modified. For example:</p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th>定语<br/>Dìngyǔ<br/>Attribute Modifier</th><th><b>的</b><br/><i>de</i><br/></th><th>中心语<br/>Zhōngxīn yǔ<br/>Word Modifier</th></tr>
		<tr><td>新 买<br/>Xīn mǎi<br/>Buy new</td><td><b>的</b><br/><i>de</i><br/></td><td>自行车<br/>zìxíngchē<br/>bicycle</td></tr>
		<tr><td>我 妈妈 做<br/>Wǒ māmā zuò<br/>My mom makes</td><td><b>的</b><br/><i>de</i><br/></td><td>饭<br/>fàn<br/>rice</td></tr>
		<tr><td>和 你 一起 唱歌<br/>Hé nǐ yīqǐ chànggē<br/>Sing together with you</td><td><b>的</b><br/><i>de</i><br/></td><td>人<br/>rén<br/>people</td></tr>
	</table>
	<h4 class="sublesson">2. The "<b>比</b>" (bǐ: prep. than, [superior or inferior] to) Sentence.</h4>
	<p> A "<b>比</b>" (<i>bǐ: compare; contrast</i>) sentence is a sentence using "<b>比</b>" (<i>bǐ: compare; contrast</i>) to make a comparison. The predicate of the sentence can be an adjective. For example:</p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th>A</th><th><b>比</b><br/>bǐ<br/>compare; contrast</th><th>B</th><th>Adj.</th></tr>
		<tr><td>哥哥<br/>Gēgē<br/>Elder brother</td><td><b>比</b><br/><i>bǐ</i></td><td>姐姐<br/>jiějiě<br/>elder sister</td><td>高<br/>gāo<br/>tall</td></tr>
		<tr><td colspan="4"><i>Elder brother is taller than elder sister</i></td></tr>
		<tr><td>今天<br/>Jīntiān<br/>Today</td><td><b>比</b><br/><i>bǐ</i></td><td>昨天<br/>zuótiān<br/>yesterday</td><td>热<br/>rè<br/>hot</td></tr>
		<tr><td colspan="4"><i>Today is hotter than yesterday</i></td></tr>
		<tr><td>（今天 的 西 瓜）<br/>Jīntiān de xīguā<br/>Today's watermelon</td><td><b>比</b><br/><i>bǐ</i></td><td>昨天<br/>zuótiān<br/>yesterday</td><td>便宜<br/>piányí<br/>cheap</td></tr>
		<tr><td colspan="4"><i>Today's watermelon is cheaper than yesterdays</i></td></tr>
	</table>
	<p>"<b>A没有B</b>..." (<i>A méiyǒu B...</i>) is the negative form the "<b>比</b>" (bǐ: prep. than, [superior or inferior] to) sentence. For example: </p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th>A</th><th>A没有B...<br/><i>A méiyǒu B...</i></th><th>B</th><th>Adj.</th></tr>
		<tr><td>哥哥<br/>Gēgē<br/>Elder brother</td><td>没有<br/>méiyǒu<br/>not</td><td>姐姐<br/>jiějiě<br/>elder sister</td><td>高<br/>gāo<br/>tall</td></tr>
		<tr><td colspan="4"><i>Elder brother is not taller than elder sister</i></td></tr>
		<tr><td>今天<br/>Jīntiān<br/>Today</td><td>没有<br/>méiyǒu<br/>not</td><td>昨天<br/>zuótiān<br/>yesterday</td><td>热<br/>rè<br/>hot</td></tr>
		<tr><td colspan="4"><i>Today is not hotter than yesterday</i></td></tr>
		<tr><td>西瓜<br/>Xīguā<br/>Watermelon</td><td>没有<br/>méiyǒu<br/>not</td><td>苹果<br/>píngguǒ<br/>apples</td><td>便宜<br/>piányí<br/>cheap</td></tr>
		<tr><td colspan="4"><i>Watermelons are not cheaper than apples</i></td></tr>
	</table>
	<p>When describing the difference between things, a specific number is used to specify the difference.
	<br/>"<b>一点儿</b>" (<i>yīdiǎnr: a little</i>) or<br/>"<b>一些</b>" (<i>yīxiē: some</i>)<br/>indicates the difference is slight,
	<br/>"<b>多</b>" (<i>duō: many</i>) or<br/>"<b>得多</b>" (<i>dé duō: much more</i>)<br/>indicates the difference is significant. For example:</p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th>A</th><th><b>比</b><br/><i>bǐ<br/>compare; contrast</i></th><th>B</th><th>Adj.</th><th>数量短语<br/>Shùliàng duǎnyǔ<br/>(Num-M)</th></tr>
	<tr><td>西瓜<br/>Xīguā<br/>Watermelon</td><td><b>比</b><br/><i>bǐ</i></td><td>苹果<br/>píngguǒ<br/>apples</td><td>贵<br/>guì<br/>expensive</td><td>两块钱<br/>liǎng kuài qián<br/>two dollars</td></tr>
		<tr><td colspan="5"><i>Watermelons are 2 dollars more expensive than apples</i></td></tr>
		<tr><td>我的学习<br/>Wǒ de xuéxí<br/>My studies</td><td><b>比</b><br/><i>bǐ</i></td><td>他<br/>tā<br/>him</td><td>好<br/>hǎo<br/>good</td><td><b>一点儿</b><br/>yīdiǎnr<br/>a little</td></tr>
		<tr><td colspan="5"><i>I study a little more than him</i></td></tr>
	<tr><td>今天<br/>Jīntiān<br/>Today</td><td><b>比</b><br/><i>bǐ</i></td><td>昨天<br/>zuótiān<br/>yesterday</td><td>热<br/>rè<br/>hot</td><td><b>得多</b><br/>dé duō<br/>much more</td></tr>
		<tr><td colspan="5"><i>Today is much hotter than yesterday</i></td></tr>
		<tr><td>她<br/>tā<br/>She</td><td><b>比</b><br/><i>bǐ</i></td><td>我们老师<br/>wǒmen lǎoshī<br/>our teacher</td><td>小<br/>xiǎo<br/>small</td><td>两岁<br/>liǎng suì<br/>two years old</td></tr>
		<tr><td colspan="5"><i>She is 2 years younger than our teacher</i></td></tr>
	</table>
	<h4 class="sublesson">3. The Auxiliary verb "<b>可能</b>" (<i>kěnéng: maybe, perhaps, probably</i>)</h4>
	<p>It means "maybe" indicating an estimation. It can be used before the verb or subject of a sentence. For example:</p>
	<ol>
		<li>他 <b>可能</b> 早 就 知道 这 件 事情了。<br/>Tā <b>kěnéng</b> zǎo jiù zhīdào zhè jiàn shìqíngle.<br/>He may have known about it already.</li>
		<li><b>可能</b> 我 明天 不 来 上课了。<br/><b>Kěnéng</b> wǒ míngtiān bù lái shàngkèle.<br/>Maybe I will not come to class tomorrow.</li>
		<li>你 <b>可能</b> 不 认识 她。<br/>Nǐ <b>kěnéng</b> bù rènshì tā.<br/>You may not know her.</li>
	</ol>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">练习 (liàn xí) Exercises</h3>
	<h4 class="sublesson">1. Role-play the dialogues</h4>
	<h4 class="sublesson">2. Answer the questions according to the actual situations</h4>
	<div>
		昨天 和 王方 一起 唱歌 的 人 是 谁？<br/>
			<button type="button" id="n11" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g11" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn11">Zuótiān hé Wáng Fāng yīqǐ chànggē de rén shì shéi?<br/></span>
		<span class="eng" id="eng11">Who was singing with Wáng Fāng yesterday?<br/></span><br/>
		左边 看 报纸 的 女 孩子 是 谁？<br/>
			<button type="button" id="n12" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g12" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn12">Zuǒbiān kàn bàozhǐ de nǚ háizi shì shéi?<br/></span>
		<span class="eng" id="eng12">Who is the women on the left reading the newspaper?<br/></span><br/>
		她 的 哥哥 二十五 岁了， 她 多大了？<br/>
			<button type="button" id="n13" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g13" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn13">Tā dí gēgē èrshíwǔ suìle, tā duōdàle?<br/></span>
		<span class="eng" id="eng13">Her brother is twenty years old, how old is she?<br/></span><br/>
		昨天 的 西瓜 可能 卖 多 少 钱？<br/>
			<button type="button" id="n14" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g14" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn14">Zuótiān de xīguā kěnéng mài duōshǎo qián?<br/></span>
		<span class="eng" id="eng14">Yesterday's watermelon will perhaps be sold for how much?<br/></span><br/>
		王 老师 是 新 老师 吗？<br/>
			<button type="button" id="n15" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g15" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn15">Wáng lǎoshī shì xīn lǎoshī ma?<br/></span>
		<span class="eng" id="eng15">Is professor Wáng a new teacher?<br/></span><br/>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3>语音 (yǔyīn) Pronounciation</h3>
	<h4><button class="cd" onclick="play('02-11-5');">&#128191; 11-5</button>
	<audio controls="" preload="metadata" id="02-11-5"><source src="../mandarin/audio/02-11-5.mp3" type="audio/mpeg">No audio</audio>
	<br/>Intonation of an Affirmative-Negative Question</h4>
	<p>The affirmative part is stressed and the negative part is unstressed. The affirmative-negative phrase is read fast and the intonation falls gradually after the stress.</p>
	<ol>
		<li><span class="pynD">Míngtiān nǐ <b>qù</b> bù qù yínháng?</span><br/>
			<span class="xhanD">明天 你 <b>去</b> 不 去 银行？</span>⤵<br/>
			<span class="engD">Will you go to the bank tomorrow?</span></li>
		<li><span class="pynD">Zhè jiàn yīfú nǐ <b>xǐhuān</b> bù xǐhuān?</span><br/>
			<span class="xhanD">这 件 衣服 你 <b>喜欢</b> 不 喜欢？</span>⤵<br/>
			<span class="engD">Do you like this dress?</span></li>
		<li><span class="pynD">Shíyī diǎn duō le, nǐ <b>shuì</b> bù shuìjiào?</span><br/>
			<span class="xhanD">十一点 多 了，你 <b>睡</b> 不 睡觉？</span>⤵<br/>
			<span class="engD">It's after 11 o'clock, are you going to sleep?</span></li>
	</ol>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3>汉字 Characters</h3>
	<h4 class="sublesson">Chinese Radicals "疒" (nè or chuáng) and "冫" (bīng)</h4>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="active"><th>Radical</th><th>Explanation</th><th>Examples</th></tr>
			<tr><td>疒<br/>nè or chuáng</td><td>related to <b>diseases</b></td>
				<td>病&nbsp;bìng&nbsp;disease, to be ill<br/>疯&nbsp;fēng&nbsp;mad, crazy</td></tr>
			<tr><td>冫<br/>bīng</td><td>related to <b>ice or coldness</b></td>
				<td>冷&nbsp;lěng&nbsp;cold<br/>冰&nbsp;bīng&nbsp;ice</td></tr>
		</table>
	</div>
</div>
<div class="dash"></div>
<?php
} else { header( 'Location: https://www.stephenmccready.asia/mi/index.php'); }
?>
</body>
</html>
