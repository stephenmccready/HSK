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
	<title>Level 2 - 1</title>
	<link type="text/css" rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.2.min.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.6/bootstrap.min.js"></script>
	<!--[if IE]>
	<script src="https://stephenmccready.asia/html5shiv.min.js"></script>
	<![endif]-->
	<script src="js/mi.js"></script>
	<link rel="stylesheet" href="css/main.css" />
</head>
<body onload="setTitle(); $('.navBtnPrev').hide();">
<?php include 'navbar.php'; ?>
<div id="0"></div>
<div class="container-fluid">
	<div class="jumbotron lessonHeaderLeft">Dì yī kè<br/>第一课<br/>Lesson 1</div>
	<div class="lessonHeaderRight">
	  <h2>Jiǔ yuè qù Běijīng lǚyóu zuì hǎo<br/>九 月 去 北京 旅游 最 好<br/><b>September is the best time to visit Beijing</b></h2>
	</div>
</div>
<div class="container-fluid">
	<h4 class="sublesson"><button class="cd" onclick="play('02-01-1');">&#128191; 1-1</button>
	<audio controls="" preload="metadata" id="02-01-1"><source src="../mandarin/audio/02-01-1.mp3" type="audio/mpeg" />No audio</audio></h4>
	<h4 class="textSection">Kè wén yī. Zài xuéxiào.<br/>漯文一。在 学校。<br/>Text 1. In the school.</h4>
	<div class="col-xs-12 col-md-6 col">
		<b>A</b>: Wǒ yào qù Běijīng lǚyóu，nǐ juédé shénme shíhòu qù zuì hǎo？<br/>
		我 要 去 北京 旅游，你 觉得 什么 时候 去 最 好？<br/><br/>
		<b>B</b>: Jiǔ yuè qù Běijīng lǚyóu zuì hǎo.<br/>
		九 月 去 北京 旅游 最 好。<br/><br/>
		<b>A</b>: Wèi shénme？<br/>
		为 什么？<br/><br/>
		<b>B</b>: Jiǔ yuè de Běijīng tiānqì bù lěng yě bù rè.<br/>
		九 月 的 北京 天气 不 冷 也 不 热。<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		<b>A</b>: I want to travel to Beijing, when do you think is the best time?<br/>
		<b>B</b>: September is the best time to visit Beijing.<br/>
		<b>A</b>: Why?<br/>
		<b>B</b>: Because it is neither cold nor hot there in September.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>旅游</td><td>lǚyóu</td><td>verb</td><td>to travel,<br/>to take a trip</td></tr>
			<tr><td>觉得</td><td>juédé</td><td>verb</td><td>to think,<br/>to feel</td></tr>
			<tr><td>最</td><td>zuì</td><td>adverb</td><td>most, to the<br/>greatest extent</td></tr>
			<tr><td>为 什么</td><td>wèi<br/>shénme</td><td></td><td>why</td></tr>
			<tr><td>也</td><td>yě</td><td>adverb</td><td>also, too</td></tr>
		</table>
	</div>
	<div class="clearfix"></div>
	<h4 class="sublesson"><button class="cd" onclick="play('02-01-2');">&#128191; 1-2</button>
	<audio controls="" preload="metadata" id="02-01-2"><source src="../mandarin/audio/02-01-2.mp3" type="audio/mpeg" />No audio</audio></h4>
	<h4 class="textSection">Kè wén èr. Kán zhàopiān.<br/>漯文二。看 照片。<br/>Text 2. Looking at a picture.</h4>
	<div class="col-xs-12 col-md-6 col">
		<b>A</b>: Nǐ xǐhuan shénme yùndòng?<br/>
		你 喜欢 什么 运动？<br/><br/>
		<b>B</b>: Wǒ zuì xǐhuan tī zúquí.<br/>
		我 最 喜欢 踢 足球。<br/><br/>
		<b>A</b>: Xiàwǔ wǒmen yìqǐ qù tī zúquí ba.<br/>
		下午 我们 一起 去 踢 足球 吧。<br/><br/>
		<b>B</b>: Hǎo a!<br/>
		好 啊<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		<b>A</b>: What sport do you like?<br/>
		<b>B</b>: I like playing football.<br/>
		<b>A</b>: Let's go play football this afternoon.<br/>
		<b>B</b>: Great!<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>运动</td><td>yùndòng</td><td>noun<br/>/<br/>verb</td><td>sport; to take<br/>physical<br/>exercise,<br/>to work out</td></tr>
			<tr><td>踢 足球</td><td>tī zúquí</td><td>verb</td><td>to play<br/>football</td></tr>
			<tr><td>一起</td><td>yìqǐ</td><td>adv.</td><td>together</td></tr>
		</table>
	</div>
	<div class="clearfix"></div>
	<h4 class="sublesson"><button class="cd" onclick="play('02-01-3');">&#128191; 1-3</button>
	<audio controls="" preload="metadata" id="02-01-3"><source src="../mandarin/audio/02-01-3.mp3" type="audio/mpeg" />No audio</audio></h4>
	<h4 class="textSection">Kè wén sān. Zài jiālǐ.<br/>漯文三。在 家里。<br/>Text 3. At home.</h4>
	<div class="col-xs-12 col-md-6 col">
		<b>A</b>: Wǒmen yào bu yào mǎi jǐ ge xīn de yǐzi?<br/>
		我们 要 不 要 买 几 个 新 的 椅子？<br/><br/>
		<b>B</b>: Hǎo a. Shénme shíhou qù mǎi?<br/>
		好 啊. 什么 时候 去 买？<br/><br/>
		<b>A</b>: Míngtiān xiàwǔ zěnmeyàng? Nǐ míngtiān jǐ diǎn néng huílái?<br/>
		明天 下午 怎么样？ 你 明天 几 点 能 回来？<br/><br/>
		<b>B</b>: Sān diǎn duō.<br/>
		三 点 多。<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		<b>A</b>: Don't you think we should buy some new chairs?<br/>
		<b>B</b>: Yes. When should we go to buy them?<br/>
		<b>A</b>: What about tomorrow afternoon? When will you be back tomorrow?<br/>
		<b>B</b>: A little bit later after three o'clock, maybe later.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>要</td><td>yào</td><td>aux.</td><td>to want to,<br/>would like to</td></tr>
			<tr><td>新</td><td>xīn</td><td>adj.</td><td>new</td></tr>
		</table>
	</div>
	<div class="clearfix"></div>
	<h4 class="sublesson"><button class="cd" onclick="play('02-01-4');">&#128191; 1-4</button>
	<audio controls="" preload="metadata" id="02-01-4"><source src="../mandarin/audio/02-01-4.mp3" type="audio/mpeg" />No audio</audio></h4>
	<h4 class="textSection">Kè wén sì. Zài jiālǐ.<br/>漯文三。在 家里。<br/>Text 4. At home</h4>
	<div class="col-xs-12 col-md-6 col">
		<b>A</b>: Zhuōzi xiàmiàn yǒu ge māo.<br/>
		桌子 下面 有 个 猫。<br/><br/>
		<b>B</b>: Nà shì wǒ de māo, tā jiào Huāhua.<br/>
		那 是 我 的 猫， 它 叫 花花。<br/><br/>
		<b>A</b>: Tā hěn piàoliang.<br/>
		它 很 漂亮。<br/><br/>
		<b>B</b>: Shì a, wǒ juéde tā de yǎnjīng zuì piàoliang.<br/>
		是 啊， 我 觉得 它 的 眼睛 最 漂亮。<br/><br/>
		<b>A</b>: Tā duō dà le?<br/>
		它 多 大 了？<br/><br/>
		<b>B</b>: Liù ge duō yuè.<br/>
		六 个 多 月。<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		<b>A</b>: There is a cat under the table.<br/>
		<b>B</b>: It's my cat Huahua.<br/>
		<b>A</b>: It's beautiful.<br/>
		<b>B</b>: Yes, I think it has the most beautiful eyes.<br/>
		<b>A</b>: How old is it?<br/>
		<b>B</b>: More than six months.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>它</td><td>tā</td><td>pron.</td><td>it</td></tr>
			<tr><td>眼睛</td><td>yǎnjīng</td><td>noun</td><td>eye</td>
			<tr><th colspan="4"><i>Proper Noun</i></th></tr>
			<tr><td>花花</td><td>Huāhua</td><td colspan="2"><i>name of a cat</i></td></tr>
		</table>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">汪释 (wāng shì) Notes</h3>
	<h4 class="sublesson">1. The Auxiliary Verb "<b>要</b>" (<b>yào</b> :  to want to, would like to)</h4>
	<p>When used before a verb, it indicates the desire to do something. For example: </p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th>Subject</th><th><b>要</b><br/>(Aux)</th><th>Predicate</th></tr>
		<tr><td>王方<br/>Wáng Fāng</td><td><b>要</b><br/><b>yào</b><br/>wants</td><td>学习。<br/>xuéxí<br/>to learn</td></tr>
		<tr><td>我<br/>Wǒ<br/>I</td><td><b>要</b><br/><b>yào</b><br/>want</td><td>吃米饭。<br/>chī mǐfàn<br/>to eat rice</td></tr>
		<tr><td>我们<br/>Wǒmen<br/>We</td><td><b>要 </b>不<b>要</b><br/><b>yào</b> bù<b>yào</b><br/>want</td><td>买 几 个 新 的 椅 子？<br/>mǎi jǐ gè xīn de yǐzi?<br/>to buy a few new chairs?</td></tr>
		<tr><td colspan="3"><i>Do we want to buy a few chairs?</i></td></tr>
	</table>
	<div>
	<h4 class="sublesson">It's negative form is usually "<b>不想</b>" (<b>bùxiǎng</b>). For example.</h4>
	<ol>
		<li>小 王 要 去，我 <b>不想</b> 去。<br/>Xiǎo wáng yào qù, wǒ <b>bùxiǎng</b> qù<br/>Xiao Wang wants to go, I do not want to go<br/></li>
		<li><b>A</b>: 你 要 吃 米饭 吗？<br/>
		Nǐ yào chī mǐfàn ma？<br/>
		Do you want to eat rice?<br/>
		<b>B</b>:  我 <b>不想</b> 吃 米饭。<br/>
		Wǒ <b>bùxiǎng</b> chī mǐfàn<br/>
		I do not want to eat rice<br/></li>
		<li><b>A</b>: 我 要 去 商店 买 椅子， 你 去 吗？<br/>
		Wǒ yào qù shāngdiàn mǎi yǐzi, nǐ qù ma?<br/>
		I am going to the store to buy a chair, do you want to go?<br/>
		<b>B</b>:  我 不 去， 我 <b>不想</b> 买 椅子。<br/>
		Wǒ bù qù, wǒ <b>bùxiǎng</b> mǎi yǐzi<br/>
		I wont go, I do not want to buy a chair</li>
	</ol>
	</div>
	<div class="clearfix"><span class="glyphicon glyphicon-chevron-up"></span><a href="#0"> Back to top</a></div>
</div>
<div class="container-fluid">
	<h4 class="sublesson" id="zui">2. The Adverb of Degree "<b>最</b>" <i>(<b>zuì</b>: most, to the greatest extent)</i></h4>
	<p>It means the first among things of the same kind or in a certain aspect. For example:</p>
	<ol>
		<li>大卫 的 汉语 <b>最</b> 好。<br/>Dàwèi de Hànyǔ <b>zuì</b> hǎo.<br/>David's best at Chinese.</li>
		<li>我 <b>最</b> 喜欢 吃 米饭。<br/>Wǒ <b>zuì</b> xǐhuān chī mǐfàn<br/>I like most to eat rice.</li>
		<li>它 的 眼睛 <b>最</b> 漂亮。<br/>Tā de yǎnjīng <b>zuì</b> piàoliang<br/>It's eyes are the most beautiful.</li>
	</ol>
	<div class="clearfix"><span class="glyphicon glyphicon-chevron-up"></span><a href="#0"> Back to top</a></div>
</div>
<div class="container-fluid">
	<h4 class="sublesson" id="jiduo">3. "<b>几</b>" (<b>jǐ</b>: a few) and "<b>多</b>" (<b>duō</b>: many): expressions of approximate numbers</h4>
	<p>"几" (<b>jǐ</b>: a few) can indicate an indefinite numbers less than 10. followed by a measure word. For example:</p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th><b>几</b><br/><b>jǐ</b></th><th>量词 (<i>Liàngcí</i>)<br/>(M)</th><th>名词 (<i>Míngcí</i>)<br/>(N)</th></tr>
		<tr><td><b>几</b><br/><b>jǐ</b><br/>A few</td><td>个<br/>gè</td><td>人<br/>rén<br/>people</td></tr>
		<tr><td><b>几</b><br/><b>jǐ</b><br/>A few</td><td>本<br/>běn</td><td>书<br/>shū<br/>books</td></tr>
		<tr><td><b>几</b><br/><b>jǐ</b><br/>A few</td><td>个<br/>gè</td><td>新 的 椅子<br/>xīn de yǐzi<br/>new chairs</td></tr>
	</table>
	<ol>
		<li>车 上 有 <b>几</b> 个人。<br/>Chē shàng yǒu <b>jǐ</b> gèrén.<br/>There are a few people in the car.</li>
		<li>我 想 买 <b>几</b> 本 书。<br/>Wǒ xiǎng mǎi <b>jǐ</b> běn shū.<br/>I want to buy a few books.</li>
		<li>我们 要 不要 买 <b>几</b> 个 新 的 椅子？<br/>Wǒmen yào bùyāo mǎi <b>jǐ</b> gè xīn de yǐzi?<br/>Do we want to buy a few new chairs?</li>
	</ol>
	<p>When "<b>几</b>" (<b>jǐ</b>: a few) is used after "十" (shí: ten), it indicates a number greater than 10 but less than 20, for example:
	<br/>"十<b>几</b>个人" (shí <b>jǐ </b>gèrén: <i>a dozen people or so</i>);
	<br/><br/>When used before "十" (shí: ten), it indicates a number greater than 20 while less than 100, for example:
	<br/>"<b>几</b>十个人" (<b>jǐ </b>shí gèrén: <i>dozens of people</i>)
	</p>
	<br/>
	<p id="duo">"<b>多</b>" (<b>duō</b>: many) can be used together with numeral-measure word phrases.<br/>When the numeral is less than 10, "多" (<b>duō</b>: many) should be put behind the measure word. For example:</p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th>数词 (<i>shù cí</i>)<br/>Numeral</th><th>量词 (<i>Liàngcí</i>)<br/>(M)</th><th><b>多</b> (<b>duō</b>: many)</th><th>名词 (<i>Míngcí</i>)<br/>(N)</th></tr>
		<tr><td>三<br/>Sān</td><td>个<br/>gè</td><td><b>多</b><br/><b>duō</b></td><td>星期<br/>xīngqí</td></tr>
		<tr><td colspan="4"><i>More than three weeks</i></td></tr>
		<tr><td>五<br/>Wǔ</td><td>年<br/>nián</td><td><b>多</b><br/><b>duō</b></td><td></td></tr>
		<tr><td colspan="4"><i>More than five years</i></td></tr>
		<tr><td>六<br/>Liù</td><td>个<br/>gè</td><td><b>多</b><br/><b>duō</b></td><td>月<br/>yuè</td></tr>
		<tr><td colspan="4"><i>More than six months</i></td></tr>
	</table>
	<p>When the numeral is an integer greater than 10, "<b>多</b>" (<b>duō</b>: many) is put before the measure word. In this case "<b>多</b>" (<b>duō</b>: many) and "<b>几</b>" (<b>jǐ</b>: a few) are interchangeable. For example:</p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th>数词 (<i>shù cí</i>)<br/>Numeral</th><th><b>多</b> (<b>duō</b>: many)</th><th>量词 (<i>Liàngcí</i>)<br/>(M)</th><th>名词 (<i>Míngcí</i>)<br/>(N)</th></tr>
		<tr><td>十<br/>Shí</td><td><b>多</b><br/><b>duō</b></td><td>个<br/>gè</td><td>月<br/>yuè</td></tr>
		<tr><td colspan="4"><i>More than ten months</i></td></tr>
		<tr><td>二十<br/>Èrshí</td><td><b>多</b><br/><b>duō</b></td><td>块<br/>kuài<br/>pieces</td><td>钱<br/>qián<br/>money</td></tr>
		<tr><td colspan="4"><i>More than twenty kuài (yuán)</td></tr>
		<tr><td>八十<br/>Bāshí</td><td><b>多</b><br/><b>duō</b></td><td>个<br/>gè</td><td>人<br/>rén<br/>people</td></tr>
		<tr><td colspan="4"><i>More than eighty people</i></td></tr>
	</table>
	<div class="clearfix"><span class="glyphicon glyphicon-chevron-up"></span><a href="#0"> Back to top</a></div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">练习 (liàn xí) Exercises</h3>
	<h4 class="sublesson">1. Role-play the dialogues</h4>
	<h4 class="sublesson">2. Answer the questions according to the actual situations</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="han hanzi11">什么 时候 去 北京 旅游 最 好？为什么？<br/>
			<button type="button" id="n11" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g11" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn11">Shénme shíhòu qù Běijīng lǚyóu zuì hǎo? Wèi shénme?<br/></span>
		<span class="eng" id="eng11">When is the best time to travel to Beijing? Why?<br/></span>
		<br/>
		<span class="han hanzi12">他们 下午 要 做 什么？<br/>
			<button type="button" id="n12" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g12" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn12">Tāmen xiàwǔ yào zuò shénme?<br/></span>
		<span class="eng" id="eng12">What do they want to do in the afternoon?<br/></span>
		<br/>
		<span class="han hanzi13">他们 想 什么 时候 去 买 椅子？<br/>
			<button type="button" id="n13" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g13" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn13">Tāmen xiǎng shénme shíhòu qù mǎi yǐzi?<br/></span>
		<span class="eng" id="eng13">When do they want to go buy a chair?<br/></span>
		<br/>
		<span class="han hanzi14">花花 在 哪儿？<br/>
			<button type="button" id="n14" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g14" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn14">Huāhuā zài nǎr?<br/></span>
		<span class="eng" id="eng14">Where is Huāhuā?<br/></span>
		<br/>
		<span class="han hanzi15">花花 多大 了？<br/>
			<button type="button" id="n15" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g15" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn15">Huāhuā duōdà le?<br/></span>
		<span class="eng" id="eng15">How old is Huāhuā?<br/></span>
		<br/>
	</div>
	<div class="clearfix"><span class="glyphicon glyphicon-chevron-up"></span><a href="#0"> Back to top</a></div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3>语音 (yǔyīn) Pronounciation</h3>
	<button class="cd" onclick="play('02-01-5');">&#128191; 1-5</button>
	<audio controls="" preload="metadata" id="02-01-5"><source src="../mandarin/audio/02-01-5.mp3" type="audio/mpeg">No audio</audio>
	<h4>Stress in Disyllabic words</h4>
	<h4>(1) Medium-stressed + <b>Stressed</b> Structure</h4>
	<p>Most disyllabic words fall into this type of structure, with the second syllable stressed and lasting longer. For example:</p>
	<table class="table table-condensed table-responsive table-centered table-borderless">
	<tr><td>bīng <b>xiāng</b><br/>冰<b>箱</b><br/>refrigerator</td>
		<td>bāng <b>máng</b><br/>帮<b>忙</b><br/>help</td>
		<td>dǎ<b>rǎo</b><br/>打<b>扰</b><br/>disturb</td>
		<td>gāo<b>xìng</b><br/>高<b>兴</b><br/>happy</td></tr>
	<tr><td>lǚ<b>yóu</b><br/>旅<b>游</b><br/>to travel</td>
		<td>kě<b>néng</b><br/>可<b>能</b><br/>may</td>
		<td>kāi<b>shǐ</b><br/>开<b>始</b><br/>begin</td>
		<td>kǎo<b>shì</b><br/>考<b>试</b><br/>examination</tr>
	</table>
	<h4>(2) <b>Stressed</b> + light Structure</h4>
	<p>A small number of disyllabic words belong to this type, in which the first syllable is stressed and the long and the second is light and short. For example:</p>
	<table class="table table-condensed table-responsive table-centered table-borderless">
	<tr><td><b>dōng</b>xī<br/><b>东</b>西<br/>thing</td>
		<td><b>chuāng</b>hù<br/><b>窗</b>户<br/>window</td>
		<td><b>luó</b>bo<br/><b>萝</b>卜<br/>radish</td>
		<td><b>shí</b>hòu<br/><b>时</b>候<br/>time</td></tr>
	<tr><td><b>zhěn</b>tou<br/><b>枕</b>头<br/>pillow</td>
		<td><b>nǐ</b>men<br/><b>你</b>们<br/>you (pl)</td>
		<td><b>gào</b>sù<br/><b>告</b>诉<br/>tell</td>
		<td><b>gù</b>shì<br/><b>故</b>事<br/>story</td></tr>
	</table>
	<div class="clearfix"><span class="glyphicon glyphicon-chevron-up"></span><a href="#0"> Back to top</a></div>
</div>
<div class="dash"></div>
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
				<td>横折提<br/>héngzhétí<br/>Horizontal-<br/>Turning-<br/>Rising</td>
				<td><img style="width: 3em;" src="img/hengzheti.png" alt="héngzhétí"/></td>
				<td>话&nbsp;huà&nbsp;word, talk<br/>说&nbsp;shuō&nbsp;to say, to speak</td>
			</tr>
			<tr>
				<td>横折折折勾<br/>héngzhézhézhégōu<br/>Horizontal-<br/>Triple-Turning-<br/>Hook</td>
				<td><img style="width: 2em;" src="img/hengzhezhezhegou.png" alt="héngzhézhézhégōu"/></td>
				<td>奶&nbsp;nǎi&nbsp;milk<br/>场&nbsp;chǎng&nbsp;field, venue</td></tr>
		</table>
	</div>
	<h4 class="sublesson">2. Single-Component Characters</h4>
	<div class="table">
		<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><td>为</td><td>wéi</td><td>for</td><td><div><img class="strokeOrder" src="img/为-order.gif" alt="为"/></div></td></tr>
		<tr><td>也</td><td>yě</td><td>also</td><td><div><img class="strokeOrder" src="img/也-order.gif" alt="也"/></div></td></tr>
		</table>
	</div>
	<h4 class="sublesson">3 Chinese Radicals "⺩" (yù) and "⻊" (zú)</h4>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="active"><th>Radical</th><th>Explanation</th><th>Examples</th></tr>
			<tr>
				<td>⺩<br/>(yù)</td><td>sometimes called "slanting-jade".<br/>It is usually related to <b>jade</b></td>
				<td>现&nbsp;xiàn&nbsp;now, present<br/>球&nbsp;qiú&nbsp;ball</td>
			</tr>
			<tr>
				<td>⻊<br/>(zú)</td><td>usually related to one's <b>feet</b></td>
				<td>跑&nbsp;pǎo&nbsp;to run<br/>踢&nbsp;tī&nbsp;to kick</td>
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
