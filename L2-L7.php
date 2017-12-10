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
	<title>Level 2 - 7</title>
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
	<div class="jumbotron lessonHeaderLeft">Dì qī kè<br/>第七课<br/>Lesson 7</div>
	<div class="lessonHeaderRight">
	  <h2>Nǐ jiā lí gōngsī yuǎn ma?<br/>你 家 离 公司 远 吗？<br/><b>Do you live far from your company?</b></h2>
	</div>
</div>
<div class="container-fluid">
	<h4 class="sublesson">1. <button class="cd" onclick="play('02-07-1');">&#128191; 7-1</button>
	<audio controls="" preload="metadata" id="02-07-1"><source src="../mandarin/audio/02-07-1.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén yī. Zài jiālǐ.<br/>漯文一。在 家里。<br/>Text 1. At home.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Dàwèi huíláile ma?<br/>
		A: 大卫 回来了 吗？<br/><br/>
		<span class="masked">B: </span>Méiyǒu, tā hái zài jiàoshī xuéxí ne.<br/>
		B: 没有，他 还 在 教师 学习 呢。<br/><br/>
		<span class="masked">A: </span>Yǐjīng jiǔ diǎn duōle, tā zěnme hái zài xuéxí?<br/>
		A: 已经 九 点多了，他 怎么 还 在 学习？<br/><br/>
		<span class="masked">B: </span>Míngtiān yǒu kǎoshì, tā shuō jīntiān yào hǎohǎo zhǔnbèi.<br/>
		B: 明天 有 考试， 他 说 今天 要 好好 准备。<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Is David back?<br/>
		B: No. He is still studying in the classroom.<br/>
		A: It's after 9 o'clock. Why is he still studying?<br/>
		B: There will be a test tomorrow. He said he'll work hard in preparation for it today.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Word</i></th></tr>
			<tr><td>教师</td><td>jiàoshī</td><td>noun</td><td>classroom</td></tr>
		</table>
		</div>
	</div>
	<div class="clearfix"></div>
	<h4 class="sublesson">2. <button class="cd" onclick="play('02-07-2');">&#128191; 7-2</button>
	<audio controls="" preload="metadata" id="02-07-2"><source src="../mandarin/audio/02-07-2.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén èr. Qù jīchǎng de lùshàng.<br/>漯文二。去 机场 的 路上。<br/>Text 2. On the way to the airport.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Nǐ xiànzài zài nàr ne?<br/>
		A: 你 现在 在 那儿 呢？<br/><br/>
		<span class="masked">B: </span>Zài qù jīchǎng de lùshàng. Nǐ yǐjīng dàole ma?<br/>
		B: 在 去 机场 的 路上。你 已经 到了 吗？<br/><br/>
		<span class="masked">A: </span>Wǒ xià fēijīle. Nǐ hái yǒu duō cháng shíjiān néng dào zhè'er?<br/>
		A: 我 下 飞机 了。你 还 有 多 长 时间 能 到 这儿？<br/><br/>
		<span class="masked">B: </span>Èrshí fēnzhōng jiù dào.<br/>
		B: 二十 分钟 就 到。<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Where are you now?<br/>
		B: I'm on the way to the airport. Have you arrived?<br/>
		A: I've got off the plane. How many more minutes do you need to get here?<br/>
		B: In 20 minutes<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>机场</td><td>jīchǎng</td><td>noun</td><td>airport</td></tr>
			<tr><td>路</td><td>lù</td><td>noun</td><td>road, path, way</td></tr>
		</table>
		</div>
	</div>
	<div class="clearfix"></div>
	<h4 class="sublesson">3. <button class="cd" onclick="play('02-07-3');">&#128191; 7-3</button>
	<audio controls="" preload="metadata" id="02-07-3"><source src="../mandarin/audio/02-07-3.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén sān. Zài jiànshēnfáng.<br/>漯文三。在 健身房。<br/>Text 3. In the gym.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Nǐ jiā lí gōngsī yuǎn ma?<br/>
		A: 你 家 离 公司 远 吗？<br/><br/>
		<span class="masked">B: </span>Hěn yuǎn, zuò gōnggòngqìchē yào yīgè duō xiǎoshí ne!<br/>
		B: 很 远，坐 公共汽车 要一个 多 小时 呢！<br/><br/>
		<span class="masked">A: </span>Zuò gōnggòngqìchē tài mànle, nǐ zěnme bù kāichē?<br/>
		A: 坐 公共汽车 太 慢了，你 怎么 不 开车？<br/><br/>
		<span class="masked">B: </span>Kāichē yě bùkuài, lùshàng chē tài duōle!<br/>
		B: 开车 也 不快， 路上 车 太 多了！<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Do you live far from your company?<br/>
		B: Yes, very far. It takes more than one hour by bus.<br/>
		A: Buses are slow. Why don't you drive?<br/>
		B: It's not fast either. There are too many cars on the road.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>离</td><td>lí</td><td>verb</td><td>to be away from</td></tr>
			<tr><td>公司</td><td>gōngsī</td><td>noun</td><td>company, firm</td></tr>
			<tr><td>远</td><td>yuǎn</td><td>adj.</td><td>far, distant</td></tr>
			<tr><td>公共<br/>汽车</td><td>gōnggòng<br/>qìchē</td><td>noun</td><td>bus</td></tr>
			<tr><td>小时</td><td>xiǎoshí</td><td>noun</td><td>hour</td></tr>
			<tr><td>慢</td><td>màn</td><td>adj.</td><td>slow</td></tr>
			<tr><td>快</td><td>kuài</td><td>adj.</td><td>quick, fast</td></tr>
		</table>
		</div>
	</div>
	<div class="clearfix"></div>
	<h4 class="sublesson">4. <button class="cd" onclick="play('02-07-4');">&#128191; 7-4</button>
	<audio controls="" preload="metadata" id="02-07-4"><source src="../mandarin/audio/02-07-4.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén sì. Zài lùshàng.<br/>在 路上。漯文四。<br/>Text 4. On the way.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Jīntiān wǎnshàng wǒmen yīqǐ chīfàn ba, gěi nǐguò shēngrì.<br/>
		A: 今天 晚上 我们 一起 吃饭 吧, 给 你过 生日。<br/><br/>
		<span class="masked">B: </span>Jīntiān? Lí wǒ de shēngrì hái yǒu yīgè duō xīngqí ne!<br/>
		B: 今天？离 我 的 生日 还 有 一个 多 星期 呢！<br/><br/>
		<span class="masked">A: </span>Xià gè xīngqí wǒ yào qù Běijīng, jīntiān guò ba.<br/>
		A: 下 个 星期 我要 去 北京， 今天 过 吧。<br/><br/>
		<span class="masked">B: </span>Hǎo ba, lí zhèr bù yuǎn yǒu yīgè Zhōngguó fànguǎn, zǒu jǐ fēnzhōng jiù dàole.<br/>
		B: 好 吧， 离 这儿 不 远 有 一个 中国 饭馆， 走 几 分钟 就 到了。<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Let's have dinner to gether tonight to celebrate your birthday.<br/>
		B: Tonight? My birthday is more than one week later.<br/>
		A: Next week I'll go to Běijīng. Let's celebrate it today.<br/>
		B: Fine. There's a Chinese restuarant nearby, only a few minutes walk away.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>过</td><td>guò</td><td>verb</td><td>to pass (time),<br/>to spend (time)</td></tr>
			<tr><td>走</td><td>zǒu</td><td>verb</td><td>to walk</td></tr>
			<tr><td>到</td><td>dào</td><td>verb</td><td>to arrive,<br/>to reach</td></tr>
		</table>
		</div>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">汪释 Notes</h3>
	<h4 class="sublesson">1. The Modal Adverb "<b>还</b>" (hái: still)</h4>
	<p>It indicates the continuation of an action or a state. It's negative form is "<b>还没</b>" (hái méi: still not) For example:</p>
	<ol>
		<li>八 点了。他 <b>还</b> 在 睡觉。<br/>Bā diǎnle. Tā <b>hái</b> zài shuìjiào.<br/>Eight o'clock. He is still sleeping.<br/></li>
		<li>你 怎么 <b>还没</b> 吃饭？<br/>Nǐ zěnme <b>hái méi</b> chīfàn?<br/>Did you still not eat?<br/></li>
		<li>他 <b>还</b> 在 教室 习 昵。<br/>Tā <b>hái</b> zài jiàoshì xí nì.<br/>He is still in the classroom.<br/></li>
	</ol>
	<h4 class="sublesson">2. The Adverb of Time "<b>就</b>" (jiù: on)</h4>
	<p>It is used for emphasis, indicating that the speaker thinks something happened early or went fast and well. For example:</p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th><br/>Subject<br/></th><th><b>就</b> 。。。了<br/><b>jiù</b> ... le<br/>on ...</th></tr>
		<tr><td>同学们<br/>Tóngxuémen<br/>Classmates</td><td>七点半 <b>就</b> 来 教室了。<br/>qīdiǎnbàn <b>jiù</b> lái jiàoshìle.<br/>at 7:30 came to the classroom</td></tr>
		<tr><td>我<br/>Wǒ<br/>I</td><td>坐 飞机 一个 半 小 的 <b>就</b> 到 北京了。<br/>zuò fēijī yīgè bàn xiǎo de <b>jiù</b> dào Běijīng le<br/>took a half-hour plane to Beijing</td></tr>
		<tr><td>(我)<br/>(Wǒ)<br/>I</td><td>二十 分钟 <b>就</b> 到。<br/>érshí fēnzhōng <b>jiù</b> dào<br/>arrive in twenty minutes</td></tr>
	</table>
	<h4 class="sublesson">3. The Verb "<b>离</b>" (lí: from)</h4> 
	<p>It indicates the distance from a place, moment or purpose. For example:</p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th>A</th><th><b>离</b></th><th>B</th><th>。。。。。</th></tr>
		<tr><td>我 家<br/>Wǒ jiā<br/>My home</td><td><b>离</b><br/>lí<br/>from</td><td>学校<br/>xuéxiào<br/>school</td><td>很远。<br/>hěn yuǎn<br/>far away</td></tr>
		<tr><td>学校<br/>Xuéxiào<br/>School</td><td><b>离</b><br/>lí<br/>from</td><td>机场<br/>jīchǎng<br/>airport</td><td>有二十多公里。<br/>yǒu èrshí duō gōnglǐ.<br/>more than 20 kilometers.</td></tr>
		<tr><td></td><td><b>离</b><br/>lí<br/>From</td><td>我的生日<br/>wǒ de shēngrì<br/>my birthday</td><td>还 有 一个 多 星期呢!<br/>hái yǒu yīgè duō xīngqí ne!<br/>is more than a week</td></tr>
		<tr><td></td><td colspan="3"><i>It's more than a week from my birthday</i></td></tr>
	</table>
	<h4 class="sublesson">4. The Modal Particle "<b>呢</b>" (ne)</h4>
	<p>It is used at the end of a declarative sentence or after a sentence with an adjectival or verbal predicate to confirm a fact and convince someone in an exaggarative mood. For example:</p>
	<ol>
		<li>八 点 上课，时间 还 早 <b>呢。</b><br/>Bā diǎn shàngkè, shíjiān hái zǎo <b>ne</b>.<br/>8 o'clock class, it's still early.</li>
		<li>医院 离 我们 这儿 还 远 <b>呢。</b><br/>Yīyuàn lí wǒmen zhèr hái yuǎn <b>ne</b>.<br/>We are still far away from the hospital.</li>
		<li>坐 公共汽车 要 一个 多 小时 <b>呢</b>！<br/>Zuò gōnggòngqìchē yào yīgè duō xiǎoshí <b>ne</b>!<br/>The bus takes more than an hour!</li>
	</ol>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">练习 (liàn xí) Exercises</h3>
	<h4 class="sublesson">1. Role-play the dialogues</h4>
	<h4 class="sublesson">2. Answer the questions according to the actual situations</h4>
	<div class="col-xs-12 col-md-6 col">
		大卫 在 哪儿 学习 呢？<br/>
			<button type="button" id="n71" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g71" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn71">Dàwèi zài nǎr xuéxí ne?<br/></span>
		<span class="eng" id="eng71">Where does David study?<br/></span>
		<br/>
		九点 多了，大卫 为什么 还 不 休息？<br/>
			<button type="button" id="n72" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g72" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn72">Jiǔ diǎn duōle, Dàwèi wèishéme hái bù xiūxí?<br/></span>
		<span class="eng" id="eng72">It's after nine, why does David not rest?<br/></span>
		<br/>
		坐 公共汽车 一个 小时 能 到 公司 吗？<br/>
			<button type="button" id="n73" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g73" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn73">Zuò gōnggòngqìchē yīgè xiǎoshí néng dào gōngsī ma?<br/></span>
		<span class="eng" id="eng73">Can you take the bus to work in an hour?<br/></span>
		<br/>
		公司 离 家 很 远，他 为什么 不 开车？<br/>
			<button type="button" id="n74" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g74" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn74">Gōngsī lí jiā hěn yuǎn, tā wèishéme bù kāichē？<br/></span>
		<span class="eng" id="eng74">The company is far from home, why he does not drive？<br/></span>
		<br/>
		今天 不是 她 的 生日，为什么 她 朋友 要 今天 给 她 过 生日？<br/>
			<button type="button" id="n75" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g75" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn75">Jīntiān bùshì tā de shēngrì, wèishéme tā péngyǒu yào jīntiān gěi tā guò shēngrì?<br/></span>
		<span class="eng" id="eng75">Today is not his birthday, why do her friends celebrate her birthday today?<br/></span>
		<br/>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3>语音 (yǔyīn) Pronounciation</h3>
	<h4><button class="cd" onclick="play('02-07-5');">&#128191; 7-5</button>
	<audio controls="" preload="metadata" id="02-07-5"><source src="../mandarin/audio/02-07-5.mp3" type="audio/mpeg">No audio</audio>
	Basic Intonations of Chinese Sentences</h4>
	<p>There are two kinds of basic intonations in Chinese - the rising and the falling. Generally speaking, interrogative sentences have a rising intonation and declarative sentences have a falling intonation. For example:</p>
	<ol>
		<li><span class="pynD">Tā xìng Zhāng</span><br/><span class="xhanD">他 姓 张？</span>⤴<br/><span class="engD">His name is Zhang?</span></li>
		<li><span class="pynD">Tā xìng Zhāng</span><br/><span class="xhanD">他 姓 张。</span>⤵<br/><span class="engD">His name is Zhang.</span></li>
		<li><span class="pynD">Tā bù xǐhuān hē píjiǔ</span><br/><span class="xhanD">他 不 喜欢 喝 啤酒？</span>⤴<br/><span class="engD">He doesn't like to drink beer?</span></li>
		<li><span class="pynD">Tā bù xǐhuān hē píjiǔ</span><br/><span class="xhanD">他 不 喜欢 喝 啤酒。</span>⤵<br/><span class="engD">He doesn't like to drink beer.</span></li>
	</ol>
</div>
<div class="container-fluid">
	<h3>汉字 Characters</h3>
	<h4 class="sublesson">Chinese Radicals "⼻" (chì) and "攵" (pū)</h4>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="active"><th>Radical</th><th>Explanation</th><th>Examples</th></tr>
			<tr>
				<td>⼻<br/>(chì)</td><td>called the "double person" this is related to the <b>act of walking</b></td>
				<td>行&nbsp;xíng&nbsp;to walk<br/>往&nbsp;wǎng&nbsp;to go</td>
			</tr>
			<tr>
				<td>攵<br/>(pū)</td><td>related to the act of <b>whipping or beating</b></td>
				<td>放&nbsp;fàng&nbsp;to let go, to set free<br/>收&nbsp;shōu&nbsp;to receive, to accept</td>
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
