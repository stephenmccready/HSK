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
	<title>Level 2 - 4</title>
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
	<div class="jumbotron lessonHeaderLeft">Dì sī kè<br/>第四课<br/>Lesson 4</div>
	<div class="lessonHeaderRight">
	  <h2>Zhège gōngzuō shì tā bāng wǒ jièshào de<br/>这个 工作 是 他 帮 我 介绍 的<br/><b>He recommended me for this job</b></h2>
	</div>
</div>
<div class="container-fluid">
	<h4 class="sublesson">1. <button class="cd" onclick="play('02-04-1');">&#128191; 4-1</button>
	<audio controls="" preload="metadata" id="02-04-1"><source src="../mandarin/audio/02-04-1.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén yī. Zài jiàoshì.<br/>漯文一 在。教室。<br/>Text 1. In the classroom.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Shēngrì kuàilè! Zhè shì sòng gěi nǐ de.<br/>
		A: 生日 快乐！ 这 是 送 给 你 的.<br/><br/>
		<span class="masked">B: </span>Shì shénme? Shì yī běn shū ma?<br/>
		B: 是 什么？ 是 一 本 书 吗？<br/><br/>
		<span class="masked">A: </span>Duì, zhè běn shū shì wǒ xiě de<br/>
		A: 对，这 本 书 是 我 写 的。<br/><br/>
		<span class="masked">B: </span>Tài xièxiè nǐle!<br/>
		B: 太 谢谢 你 了！<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Happy Birthday! This is for you.<br/>
		B: What is it? Is it a book?<br/>
		A: Yes. A book written by me.<br/>
		B: Thank you so much!<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>生日</td><td>shēngrì</td><td>noun</td><td>birthday</td></tr>
			<tr><td>快乐</td><td>kuàilè</td><td>adj.</td><td>happy, glad</td></tr>
			<tr><td>给</td><td>gěi</td><td>prep.</td><td>(<i>use after a verb</i>)<br/>to, for</td></tr>
		</table>
		</div>
	</div>
	<div class="clearfix"></div>
	<h4 class="sublesson">2. <button class="cd" onclick="play('02-04-2');">&#128191; 4-2</button>
	<audio controls="" preload="metadata" id="02-04-2"><source src="../mandarin/audio/02-04-2.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén èr. Zài jiālǐ.<br/> 漯文二。在 家里。<br/>Text 2.  At home.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Zǎoshang yǒu nǐ yīgè diànhuà.<br/>
		A: 早上 有 你 一 个 电话。<br/><br/>
		<span class="masked">B: </span>Diànhuà shì shéi dǎ de?<br/>
		B: 电话 是  谁 打 的？<br/><br/>
		<span class="masked">A: </span>Bù zhīdào, shì érzi jiē de.<br/>
		A: 不 知道，是 儿子 接 的。<br/><br/>
		<span class="masked">B: </span>Hǎo, wǎnshàng wǒ wèn yīxià érzi.<br/>
		B: 好， 晚上 我 问 一下 儿子。<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Someone called you this morning.<br/>
		B: Who?<br/>
		A: I don't know. Our son answered it.<br/>
		B: Okay, I'll ask him about it this evening.<br/><br/> 
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>接</td><td>jiē</td><td>verb</td><td>to receive,<br/>to take,<br/>to accept</td></tr>
			<tr><td>晚上</td><td>wǎnshàng</td><td>noun</td><td>evening,<br/>night</td></tr>
			<tr><td>问</td><td>wèn</td><td>verb</td><td>to ask</td></tr>
		</table>
		</div>
	</div>
	<div class="clearfix"></div>
	<h4 class="sublesson">3. <button class="cd" onclick="play('02-04-3');">&#128191; 4-3</button>
	<audio controls="" preload="metadata" id="02-04-3"><source src="../mandarin/audio/02-04-3.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén sān. Zài Yùndòngchǎng.<br/>漯文三。在 运动场。<br/>Text 3. On the playground.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Nǐ xǐhuān tī zúqiú ma?<br/>
		A: 你 喜欢 踢 足球 吗？<br/><br/>
		<span class="masked">B: </span>Fēicháng xǐhuān<br/>
		B: 非常 喜欢。<br/><br/>
		<span class="masked">A: </span>Nǐ shì shénme shíhòu kāishǐ tī zúqiú de?<br/>
		A: 你 是 什么 时候 开始 踢 足球 的？<br/><br/>
		<span class="masked">B: </span>Wǒ shíyī suì de shíhòu kāishǐ tī zúqiú, yǐjīng tīle shí niánle.<br/>
		B: 我 十一 岁 的 时候 开始 踢 足球，已经 踢了 十 年了。<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Do you like playing football?<br/>
		B: Yes, very much.<br/>
		A: When did you begin to play football?<br/>
		B: I was 11 when I played football for the first time. It has been 10 years.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>非常</td><td>fēicháng</td><td>adv.</td><td>very,<br/>extremely</td></tr>
			<tr><td>开始</td><td>kāishǐ</td><td>verb</td><td>to begin,<br/>to start</td></tr>
			<tr><td>已经</td><td>yǐjīng</td><td>adv.</td><td>already</td></tr>
		</table>
		</div>
	</div>
	<div class="clearfix"></div>
	<h4 class="sublesson">4. <button class="cd" onclick="play('02-04-4');">&#128191; 4-4</button>
	<audio controls="" preload="metadata" id="02-04-4"><source src="../mandarin/audio/02-04-4.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén sì。Zài gōngsī.<br/>漯文四。在公司。<br/>Text 4. In the company.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Nǐ zài zhèr gōngzuò duō cháng shíjiānle?<br/>
		A: 你 在 这儿 工作 多 长 时间了？<br/><br/>
		<span class="masked">B: </span>Yǐjīng liǎng nián duōle, wǒ shì èr líng yī yī niánlái de.<br/>
		B: 已经 两 年 多了， 我 是 二零一一 年来 的。<br/><br/>
		<span class="masked">A: </span>Nǐ rènshì Xiè xiānshēng ma?<br/>
		A: 你 认识 谢 先生 吗？<br/><br/>
		<span class="masked">B: </span>Rènshì, wǒmen shì dàxué tóngxué, zhège gōngzuò shì tā bāng wǒ jièshào de.<br/>
		B: 认识， 我们 是 大学 同学， 这个 工作 是 他 帮 我 介绍 的。<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: How long have you been working here?<br/>
		B: More than two years, since 2011.<br/>
		A: Do you know Mr. Xie?<br/>
		B: Yes. He is my college classmate. He recommended me for this job.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>长</td><td>cháng</td><td>adj.</td><td>long</td></tr>
			<tr><td>两</td><td>liǎng</td><td>num.</td><td>two</td></tr>
			<tr><td>帮</td><td>bāng</td><td>verb</td><td>to help,<br/>to assist</td></tr>
			<tr><td>介绍</td><td>jièshào</td><td>verb</td><td>to introduce,<br/>to recommend</td></tr>
		</table>
		</div>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">汪释 Wāng shì Notes</h3>
	<h4 class="sublesson">1. The Structure "<b>是 。。。的</b>" (<b>shì...de</b>: be...of)</h4>
	<p>When the occurence of an action is known "<b>是 。。。的</b>" (<b>shì...de</b>: be...of) can be used to emphazize the agent of the action. For example:</p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th><br/>Object<br/></th>
			<th><b>是</b><br/><b>Shì</b><br/>(verb)</th>
			<th>谁<br/>Shéi<br/>(Who)</th>
			<th>动词<br/>dòngcí<br/>(verb)</th>
			<th><b>的</b><br/><b>de</b>.<br/></th></tr>
		<tr><td>这本书<br/>Zhè běn shū<br/>This book</td>
			<td><b>是</b><br/><b>shì</b><br/>is</td>
			<td>我<br/>wǒ<br/>I</td>
			<td>买<br/>mǎi<br/>buy</td>
			<td><b>的</b>。<br/><b>de</b>.<br/></td></tr>
		<tr><td colspan="5"><i>I bought this book.</i></td></tr>
		<tr><td>晚饭<br/>Wǎnfàn<br/>Dinner</td>
			<td><b>是</b><br/><b>shì</b><br/>is</td>
			<td>妈妈<br/>māma<br/>mother</td>
			<td>做<br/>zuò<br/>make</td>
			<td><b>的</b>。<br/><b>de</b><br/></td></tr>
		<tr><td colspan="5"><i>The dinner was made by my mother.</i></td></tr>
		<tr><td>电话<br/>Diànhuà<br/>Phone</td>
			<td><b>是</b><br/><b>shì</b><br/>is</td>
			<td>谁<br/>shéi<br/>who</td>
			<td>打<br/>dǎ<br/>call</td>
			<td><b>的</b>？<br/><b>de</b>?<br/></td></tr>
		<tr><td colspan="5"><i>Who called?</i></td></tr>
	</table>
	<p>In the negative form, "<b>不</b>" (<b>bú</b>) is added before "<b>是</b>" (<b>shì</b>) can be used to emphazize the agent of the action. For example:</p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th><br/>Object<br/></th>
			<th><b>不</b><br/><b>bú</b></th>
			<th><b>是</b><br/><b>Shì</b><br/>(verb)</th>
			<th>谁<br/>Shéi<br/>(Who)</th>
			<th>动词<br/>dòngcí<br/>(verb)</th>
			<th>的<br/>de.<br/></th></tr>
		<tr><td>这个汉宇<br/>Zhège Hànyǔ<br/>This Chinese</td>
			<td><b>不</b><br/><b>bú</b><br/>not</td>
			<td><b>是</b><br/><b>shì</b><br/>is</td>
			<td>大卫<br/>Dàwèi<br/>David</td>
			<td>写<br/>xiě<br/>write</td>
			<td>的。<br/>de.<br/></td></tr>
		<tr><td colspan="6"><i>This Chinese was not written by David.</i></td></tr>
		<tr><td>苹果<br/>Píngguǒ<br/>Apple</td>
			<td><b>不</b><br/><b>bú</b><br/>not</td>
			<td><b>是</b><br/><b>shì</b><br/>is</td>
			<td>王方<br/>Wáng Fāng<br/>Wáng Fāng</td>
			<td>买<br/>mǎi<br/>buy</td>
			<td>的。<br/>de<br/></td></tr>
		<tr><td colspan="6"><i>Wang Fang didn't buy this apple.</i></td></tr>
		<tr><td>电话<br/>Diànhuà<br/>Phone</td>
			<td><b>不</b><br/><b>bú</b><br/>not</td>
			<td><b>是</b><br/><b>shì</b><br/>is</td>
			<td>我<br/>wǒ<br/>I</td>
			<td>接<br/>jiē<br/>recieve</td>
			<td>的？<br/>de?<br/></td></tr>
		<tr><td colspan="6"><i>I didn't answer the phone.</i></td></tr>
	</table>
	<h4 class="sublesson">2.  "。。。<b>的 时候</b>" (...de shíhòu: ...when)</h4>
	<p>"Num-M + <b>的 时候</b>" (<b>de shíhòu</b>: when) indicates time. For example:</p>
	<ol>
		<li>今天 早上 八 点 <b>的 时候</b> 我 没 在家。
			<br/>Jīntiān zǎoshang bā diǎn <b>de shíhòu</b> wǒ méi zàijiā.
			<br/>I was not at home at eight o'clock this morning.<br/></li>
		<li>我 十八 岁 <b>的 时候</b> 一个 人 来到 北京。
			<br/>Wǒ shíbā suì <b>de shíhòu</b> yīgè rén lái dào Běijīng.
			<br/>I came to Beijing when I was eighteen<br/></li>
		<li>我 十一 岁 <b>的 时候</b> 开始 踢 足球。<br/>
			Wǒ shíyī suì <b>de shíhòu</b> kāishǐ tī zúqiú.<br/>
			I started playing football when I was eleven years old.<br/></li>
	</ol>
	<p>"Verb + <b>的 时候</b>" (de shíhòu: when) indicates time. For example:</p>
	<ol>
		<li>我 睡觉 <b>的 时候</b>，我 妈妈 在 做 饭。
			<br/>Wǒ shuìjiào <b>de shíhòu</b>, wǒ māmā zài zuò fàn.
			<br/>When I was sleeping, my mom was cooking.<br/></li>
		<li>麦克 到 学 校 <b>的 时候</b> 下 雨 了。
			<br/>Màikè dào xuéxiào <b>de shíhòu</b> xià yǔle.
			<br/>It was raining when Mike went to school.<br/></li>
		<li>王 老师 工作 <b>的 时候</b>， 她 丈夫 车 去 医 阬 了。<br/>
			Wáng lǎoshī gōngzuò <b>de shíhòu</b>, tā zhàngfū chē qù yī kēngle.<br/>
			When Wang was working, her husband went to the doctor.<br/></li>
	</ol>
	<h4 class="sublesson">3. The adverb of time "<b>已经</b>" (<b>yǐjīng</b>: already)</h4>
	<p>"<b>已经</b>" (<b>yǐjīng</b>: already) indicates that an action has been completed or having reached a certain degree. For example:</p>
	<ol>
		<li>王 老师 <b>已经</b> 回 家了。<br/>Wáng lǎoshī <b>yǐjīng</b> huí jiāle.<br/>Teacher Wang has gone home.<br/></li>
		<li>我 的 身体 <b>已经</b> 好了。<br/>Wǒ de shēntǐ <b>yǐjīng</b> hǎole.<br/>My body is already okay.<br/></li>
		<li>(足球 我) <b>已经</b> 踢了 十 年了。<br/>(Zúqiú wǒ) <b>Yǐjīng</b> tīle shí niánle.<br/>(Football, I) Have been playing for ten years.<br/></li>
	</ol>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">练习 (liàn xí) Exercises</h3>
	<h4 class="sublesson">1. Role-play the dialogues</h4>
	<h4 class="sublesson">2. Answer the questions according to the actual situations</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="han hanzi11">这 本 书 是 谁 写 的？<br/>
			<button type="button" id="n11" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g11" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn11">Zhè běn shū shì shéi xiě de?<br/></span>
		<span class="eng" id="eng11">Who wrote this book?<br/></span>
		<br/>
		<span class="han hanzi12">早上 的 电话 是 谁 接 的？<br/>
			<button type="button" id="n12" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g12" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn12">Zǎoshang de diànhuà shì shéi jiē de?<br/></span>
		<span class="eng" id="eng12">Who called this morning?<br/></span>
		<br/>
		<span class="han hanzi13">他 是 什么 时候 开始 踢 足球 的？<br/>
			<button type="button" id="n13" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g13" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn13">Tā shì shénme shíhòu kāishǐ tī zúqiú de?<br/></span>
		<span class="eng" id="eng13">When did he start playing football?<br/></span>
		<br/>
		<span class="han hanzi14">他 在 那儿 工作  多 长 时间 了？<br/>
			<button type="button" id="n14" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g14" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn14">Tā zài nàr gōngzuò duō cháng shíjiānle?<br/></span>
		<span class="eng" id="eng14">How long has he been working there?<br/></span>
		<br/>
		<span class="han hanzi15">工作 是 谁 帮 他 介绍 的?<br/>
			<button type="button" id="n15" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g15" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn15">Gōngzuò shì shéi bāng tā jièshào de?<br/></span>
		<span class="eng" id="eng15">Who can help him get a job?<br/></span>
		<br/>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3>语音 (yǔyīn) Pronounciation</h3>
	<h4>(1) Syntactic Stress in a Sentence (1)</h4>
	<button class="cd" onclick="play('02-04-5');">&#128191; 4-5</button>
	<audio controls="" preload="metadata" id="02-04-5"><source src="../mandarin/audio/02-04-5.mp3" type="audio/mpeg">No audio</audio>
	<p>Some parts of a sentence may be stressed just because of their syntactic features without conveying any special idea or mood. This kind of stress is called syntactic stress that often appears at fixed positions in a sentence, following common rules such as stressing the predicate, complement and attributive and adverbial modifiers.</p>
	<ol>
		<li><h4>Stressing the Predicate</h4>
		Wǒ <b>xuéxí</b> Hànyǔ.
		<br/>我 <b>学习</b> 汉语。
		<br/>I learn Chinese
		<br/>
		<br/>Tā gēge <b>shì</b> yì míng yīshēng.
		<br/>他 哥哥 <b>是</b> 一 名 医生。
		<br/>His brother is a doctor.
		<br/>
		<br/>Wáng xiǎojiě <b>mǎi</b>le jǐ jiàn yīfú.
		<br/>王 小姐 <b>买</b>了 几 件 衣服。
		<br/>Miss Wang bought a few clothes.
		<br/>
		</li>
		<li><h4>Stressing the Complement</h4>
		Tāmen gāoxìng de <b>tiàole qǐlái</b>.
		<br/>他们 高兴 的 <b>跳了 起来</b>。
		<br/>The happily jumped up.
		<br/>
		<br/>Dàwèi dǎ lánqiú dǎ dé <b>fēicháng hǎo</b>.
		<br/>大卫 打 篮球 打 得 <b>非常 好</b>。
		<br/>David played basketball very well.
		<br/>
		<br/>Jīntiān de yángròu zuò <b>de hěn hào chī</b>.
		<br/>今天 的 羊肉 做 <b>的 很 好吃</b>。
		<br/>Today 's lamb is very good to eat.
		</li>
	</ol>
</div>
<div class="container-fluid">
	<h3>汉字 (Hànzì) Characters</h3>
	<h4 class="sublesson">1. Strokes of Chinese Characters (6)</h4>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="active">
				<th>笔画名称<br/>bǐ huà<br/>míng chēng<br/>Stroke</th>
				<th>运笔方向<br/>yùn bǐ<br/>fāng xiàng<br/>Direction</th>
				<th>例字<br/>lì zì<br/>Example<br/>Characters</th>
			</tr>
			<tr>
				<td>shùtí<br/>Vertical-Rising<br/></td>
				<td><img style="width: 3em;" src="img/shuti.png" alt="shùtí"/></td>
				<td>长&nbsp;cháng&nbsp;long<br/>民&nbsp;mín&nbsp;people</td>
			</tr>
			<tr>
				<td>shùzhézhégōu<br/>Vertical double<br/>turning hook<br/><br/></td>
				<td><img style="width: 2em;" src="img/shuzhezhegou.png" alt="shùzhézhégōu"/></td>
				<td>吗&nbsp;mǎ&nbsp;horse<br/>写&nbsp;xiě&nbsp;to write</td></tr>
		</table>
	</div>
	<h4 class="sublesson">2. Single-Component Characters</h4>
	<div class="table">
		<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><td>两</td><td>liǎng</td><td>two or double</td><td><div><img class="strokeOrder" src="img/兩-order.gif" alt="两"/></div></td></tr>
		<tr><td>乐</td><td>lè</td><td>joyous or happy (+lè)</td><td><div><img class="strokeOrder" src="img/乐-order.gif" alt="乐"/></div></td></tr>
		<tr><td>长</td><td>zhǎng<br/>cháng</td><td>old<br/>long distance between 2 sections</td><td><div><img class="strokeOrder" src="img/长-order.gif" alt="长"/></div></td></tr>
		</table>
	</div>
	<h4 class="sublesson">3. Chinese Radicals "纟" (yāo) and "⺖" (xin)</h4>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="active"><th>Radical</th><th>Explanation</th><th>Examples</th></tr>
			<tr>
				<td>纟<br/>(yāo)</td>
				<td> is usually<br/>related to silk</td>
				<td>给&nbsp;gěi&nbsp;to give<br/>结&nbsp;jié&nbsp;to tie, to knot</td>
			</tr>
			<tr>
				<td>⺖<br/>(xīn)</td>
				<td>is usually<br/>related to ones mentality.</td>
				<td>忙&nbsp;máng&nbsp;busy<br/>快&nbsp;kuài&nbsp;quick, fast</td>
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
