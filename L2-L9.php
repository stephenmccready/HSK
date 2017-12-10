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
	<title>Level 2 - 9</title>
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
	<div class="jumbotron lessonHeaderLeft">Dì jiǔ kè<br/>第九课<br/>Lesson 9</div>
	<div class="lessonHeaderRight">
	  <h2>Tí tài duō, wǒ méi zuòwán<br/>题 太 多，我 没 做完。<br/><b>There were too many questions, I didn't finish all of them</b></h2>
	</div>
</div>
<div class="container-fluid">
	<h4 class="sublesson">1. <button class="cd" onclick="play('02-09-1');">&#128191; 9-1</button>
	<audio controls="" preload="metadata" id="02-09-1"><source src="../mandarin/audio/02-09-1.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén yī. Dǎ diànhuà。<br/>漯文一。 打 电话<br/>Text 1. On the Phone.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Nǐ hǎo! Qǐngwèn Zhāng Huān zài ma?<br/>
		A: 你 好！ 请问 张 欢 在 吗？<br/><br/>
		<span class="masked">B: </span>Nǐ dǎcuò le, wǒmen zhè'er méiyǒu jiào Zhāng Huān de.<br/>
		B: 你 打错 了， 我们 这儿 没有 叫 张 欢 的。<br/><br/>
		<span class="masked">A: </span>Duìbùqǐ.<br/>
		A: 对不起。<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Hello! May I speak with Zhāng Huān?<br/>
		B: You've got the wrong number. There isn't a person called Zhāng Huān here.<br/>
		A: I'm sorry.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Word</i></th></tr>
			<tr><td>错</td><td>cuò</td><td>adj.</td><td>wrong, incorrect</td></tr>
		</table>
		</div>
	</div>
	<div class="clearfix"></div>
	<h4 class="sublesson">2. <button class="cd" onclick="play('02-09-2');">&#128191; 9-2</button>
	<audio controls="" preload="metadata" id="02-09-2"><source src="../mandarin/audio/02-09-2.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén èr. Zài xuéxiào.<br/>漯文二。 在 学校。<br/>Text 2. In the School.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Nín cóng jǐ suì kāishǐ xuéxí tiào wǔ?<br/>
		A: 您 从 几 岁 开始 学习 跳 舞？<br/><br/>
		<span class="masked">B: </span>Wǒ dì yī cì tiào wǔ shì zài qī suì de shíhòu.<br/>
		B: 我 第 一 次 跳 舞 是 在 七 岁 的 时候。<br/><br/>
		<span class="masked">A: </span>Wǒ nǚ'ér jīnnián yě qī suì le. Wǒ xīwàng tā néng gēn nín xué tiào wǔ, kěyǐ ma?<br/>
		A: 我 女儿 今年 也 七 岁 了。 我 希望 他 能 跟 您 学 跳 舞， 可以 吗？<br/><br/>
		<span class="masked">B: </span>Méi wèntí, fēicháng huānyíng.<br/>
		B: 没 问题， 非常 欢迎。<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: At what age did you start to learn dancing?<br/>
		B: I was seven when I danced for the first time.<br/>
		A: My daughter is seven now. I hope she can learn to dance from you, can she?<br/>
		B: Sure. It's my pleasure.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>从</td><td>cóng</td><td>prep.</td><td>from</td></tr>
			<tr><td>跳 舞</td><td>tiào wǔ</td><td>verb</td><td>to dance</td></tr>
			<tr><td>第 一</td><td>dì yī</td><td>num.</td><td>first</td></tr>
			<tr><td>希望</td><td>xīwàng</td><td>verb</td><td>to hope, to wish</td></tr>
			<tr><td>非常</td><td>wèntí</td><td>noun</td><td>question, problem</td></tr>
			<tr><td>欢迎</td><td>huānyíng</td><td>verb</td><td>to welcome</td></tr>
		</table>
		</div>
	</div>
	<div class="clearfix"></div>
	<h4 class="sublesson">3. <button class="cd" onclick="play('02-09-3');">&#128191; 9-3</button>
	<audio controls="" preload="metadata" id="02-09-3"><source src="../mandarin/audio/02-09-3.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén sān. Zài jiālǐ<br/>漯文三。在 家里。<br/>Text 3. At Home</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Nǐ zhīdào ma? Dàwèi zhǎodào gōngzuò le.<br/>
		A: 你 知道 吗？大卫 找到 工作 了。<br/><br/>
		<span class="masked">B: </span>Tài hǎo le! Tā cóng shénme shíhòu kāishǐ shàng bān?<br/>
		B: 太 好 了！他 从 什么 时候 开始 上 班？<br/><br/>
		<span class="masked">A: </span>Cóng xià gè xīngqí yī kāishǐ.<br/>
		A: 从 下 个 星期一 开始。<br/><br/>
		<span class="masked">B: </span>Zhè shì tā de dì yī ge gōngzuò, xīwàng tā néng xǐhuān.<br/>
		B: 这 是 他 的 第 一 个 工作，希望 他 能 喜欢。<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: You know what? David has got a job.<br/>
		B: That's great! When will he start to work.<br/>
		A: Next Monday.<br/>
		B: This is his first job. I hope he will like it.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Word</i></th></tr>
			<tr><td>上 班</td><td>shàng bān</td><td>verb</td><td>to work,<br/>to do a job</td></tr>
		</table>
		</div>
	</div>
	<div class="clearfix"></div>
	<h4 class="sublesson">4. <button class="cd" onclick="play('02-09-4');">&#128191; 9-4</button>
	<audio controls="" preload="metadata" id="02-09-4"><source src="../mandarin/audio/02-09-4.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén sì. Zài jiàoshì.<br/>漯文四。在 教室。<br/>Text 4. In the Classroom.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Zuótiān de kǎoshì zěnmeyàng? Nǐ dōu tīngdǒng le ma?<br/>
		A: 昨天 的 考试 怎么样？ 你 都 听懂了 吗？<br/><br/>
		<span class="masked">B: </span>Tīngdǒng le.<br/>
		B: 听懂 了<br/><br/>
		<span class="masked">A: </span>Nǐ dōu zuòwán le méiyǒu?<br/>
		A: 你 都 做完 了 没有？<br/><br/>
		<span class="masked">B: </span>Tí tài duō, wǒ méi zuòwán.<br/>
		B: 题 太 多，我 没 做完。<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: How was the test yesterday? Did you understand everything you heard?<br/>
		B: Yes I did.<br/>
		A: Did you finish the test paper?<br/>
		B: There were too many questions. I didn't finish all of them.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>懂</td><td>dǒng</td><td>verb</td><td>to understand,<br/>to know</td></tr>
			<tr><td>完</td><td>wán</td><td>verb</td><td>to finish<br/>to end</td></tr>
			<tr><td>题</td><td>tí</td><td>noun</td><td>question,<br/>problem</td></tr>
		</table>
		</div>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">汪释 Notes</h3>
	<h4 class="sublesson">1. Complements of result.</h4>
	<p>Some verbs or adjectives can be used after a verb to add remarks about the result of an action. The are called complements of result. For example:</p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th rowspan="2"><br/>Subject</th><th colspan="2">Predicate</th></tr>
		<tr><th>Verb +<br/>Complement of result</th><th>Object</th></tr>
		<tr>
			<td>我<br/>Wǒ<br/>I</td>
			<td>看<b>见</b><br/>kàn<b>jiàn</b><br/>saw</td>
			<td>你 的 女 朋友了。<br/>Nǐ de nǚ péngyǒule<br/>your girlfriend</td>
		</tr>
		<tr>
			<td>我<br/>Wǒ<br/>I</td>
			<td>听<b>懂</b><br/>tīng<b>dǒng</b><br/>understood</td>
			<td>今天 的 汉语 课了。<br/>jīntiān de Hànyǔ kèle<br/>today's Chinese lesson</td>
		</tr>
		<tr>
			<td>我<br/>Wǒ<br/>I</td>
			<td>做<b>好</b><br/>zuò<b>hǎo</b><br/>made good</td>
			<td>饭 了。<br/>fàn le<br/>rice</td>
		</tr>
		<tr>
			<td>大卫<br/>Dàwèi<br/>David</td>
			<td>找<b>到</b><br/>zhǎo<b>dào</b><br/>looked for</td>
			<td>工作了。<br/>gōngzuòle<br/>a job</td>
		</tr>
	</table>
	<p><b>没</b> (<b>有</b>) [<b>Méi</b> (<b>yǒu</b>)] is added before the verb to form the negative form of a complement of result, in which case "了" cannot appear at the end of the sentence. For example:</p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th rowspan="2"><br/>Subject</th><th colspan="2">Predicate</th></tr>
		<tr><th><b>没</b> (<b>有</b>) [<b>Méi</b> (<b>yǒu</b>)] + Verb +<br/>Complement of result</th><th>Object</th></tr>
		<tr>
			<td>我<br/>Wǒ<br/>I</td>
			<td><table class="table table-borderless table-condensed table-responsive table-centered" style="margin-bottom: 0px !important;">
					<tr><td width="50%"><b>没</b><b>有</b><br/><b>méi</b><b>yǒu</b></td><td width="50%">看见<br/>kànjiàn</td></tr>
					<tr><td colspan="2">did not see</td></tr>
				</table>
			</td>
			<td>你 的 女 朋友。<br/>nǐ de nǚ péngyǒu<br/>your girlfriend</td>
		</tr>
		<tr>
			<td>我<br/>Wǒ<br/>I</td>
			<td><table class="table table-borderless table-condensed table-responsive table-centered" style="margin-bottom: 0px !important;">
					<tr><td width="50%"><b>没</b><br/><b>méi</b></td><td width="50%">听懂<br/>tīngdǒng</td></tr>
					<tr><td colspan="2">don't understand</td></tr>
				</table>
			</td>
			<td>他 说 的 话。<br/>tā shuō dehuà<br/>what he said</td>
		</tr>
		<tr>
			<td>我<br/>Wǒ<br/>I</td>
			<td><table class="table table-borderless table-condensed table-responsive table-centered" style="margin-bottom: 0px !important;">
					<tr><td width="50%"><b>没</b><br/><b>méi</b></td><td width="50%">做完<br/>zuòwán</td></tr>
					<tr><td colspan="2">did not finish</td></tr>
				</table>		
			</td>
			<td>(考试题)<br/>(kǎoshì tí)<br/>(the exam questions)</td>
		</tr>
	</table>
	<p>To form a question, "(<b>了</b>) <b>没有</b>". (le) méiyǒu is often added at the end of the sentence. For example:</p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th rowspan="2"><br/>Subject</th><th colspan="2">Predicate</th></tr>
		<tr><th>Verb +<br/>Complement of result</th><th>Object + (<b>了</b>) <b>没有</b>?</th></tr>
		<tr>
			<td>你<br/>Nǐ<br/>You</td>
			<td>看见<br/>kànjiàn<br/>saw</td>
			<td>我 的 女 朋友<b>了 没有</b>?<br/>wǒ de nǚ péngyǒu <b>le méiyǒu</b><br/>my girlfriend?</td>
		</tr>
		<tr><td colspan="3">Did you see my girlfriend?</td></tr>
		<tr>
			<td>你<br/>Nǐ<br/>You</td>
			<td>听懂<br/>tīngdǒng<br/>understood</td>
			<td>他 说 的 话<b>没有</b>?<br/>tā shuō de huó <b>méiyǒu</b>?<br/>what he said?</td>
		</tr>
		<tr><td colspan="3">Did you understand what he said?</td></tr>
		<tr>
			<td>你<br/>Nǐ<br/>You</td>
			<td>(都) 做完<br/>(dōu) zuòwán<br/>finished (all)</td>
			<td>(考试题)<b>了 没有</b>?<br>(kǎoshì tí) <b>le méiyǒu</b>?<br/>(of the exam questions)?</td>
		</tr>
		<tr><td colspan="3">Did you finish all the exam questions?</td></tr>
	</table>
	<h4 class="sublesson">2. The Preposition "<b>从</b>" (<b>cóng</b>: from)</h4>
	<p>The preposition "<b>从</b>" (<b>cóng</b>: from) introduces the starting point of a period of time, a distance, a process or a sequence, often used together with "<b>到</b>" (<b>dào</b>)</p>
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr><th><b>从<br/>Cóng</b><br/>From</th><th>A</th><th><b>到</b><br/><b>dào</b><br/>to</th><th>B</th><th>...</th></tr>
			<tr><td><b>从<br/>Cóng</b><br/>From</td><td>北京<br/>Běijīng</td><td><b>到</b><br/><b>dào</b><br/>to</td><td>上海<br/>Shànghǎi</td><td>要 坐 几 个 小时 的 飞机<br/>yào zuò jǐ gè xiǎoshí de fēijī<br/>takes a few hours by plane</td></tr>
			<tr><td><b>从<br/>Cóng</b><br/>From</td><td>老人<br/>lǎorén<br/>old people</td><td><b>到</b><br/><b>dào</b><br/>to</td><td>孩了<br/>háile<br/>children</td><td>都 喜欢 吃 苹果<br/>dōu xǐhuān chī píngguǒ<br/>all like to eat apples</td></tr>
			<tr><td><b>从<br/>Cóng</b><br/>From</td><td>下个星期一<br/>Xiàgè xīngqíyī<br/>next Monday</td><td></td><td></td><td>开始 (上班)<br/>kāishǐ (shàngbān)<br/>start (to work)</td></tr>
		</table>
	<h4 class="sublesson">3. "<b>第</b>" (<b>dì</b>) Indicating Order</h4>
	<p>"<b>第</b>" (<b>dì</b>)  is often used before a numeral-measure-word phrase to indicate order. For example:</p>
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr><th><b>第</b><br/><b>dì</b></th><th>数词 (Num)<br/>shùcí</th><th>量词 (M)<br/>liàngcí</th><th>名词 (N)<br/>míngcí</th></tr>
			<tr><td><b>第</b><br/><b>dì</b></td><td>一<br/>yī</td><td>本<br/>běn</td><td>书<br/>shū</td></tr>
			<tr><td colspan="4"><i>The first book</i></td></tr>
			<tr><td><b>第</b><br/><b>dì</b></td><td>二<br/>èr</td><td>个<br/>ge<br/></td><td>工作<br/>gōngzuò</td></tr>
			<tr><td colspan="4"><i>The second job</i></td></tr>
			<tr><td><b>第</b><br/><b>dì</b></td><td>一<br/>yī</td><td>次<br/>cì<br/></td><td>跳舞<br/>tiàowǔ</td></tr>
			<tr><td colspan="4"><i>The first dance</i></td></tr>
		</table>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">练习 (liàn xí) Exercises</h3>
	<h4 class="sublesson">1. Role-play the dialogues</h4>
	<h4 class="sublesson">2. Answer the questions based on the dialogs</h4>
		<div class="col-xs-12 col-md-6 col">
		老师 从 几 岁 开始 学 跳舞？<br/>
			<button type="button" id="n11" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g11" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn11">Lǎoshī cóng jǐ suì kāishǐ xué tiàowǔ?<br/></span>
		<span class="eng" id="eng11">How old did the teacher learn to dance?<br/></span>
		<br/>
		老师 想 教 的 女儿 跳舞 吗？<br/>
			<button type="button" id="n12" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g12" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn12">Lǎoshī xiǎng jiào de nǚ'ér tiàowǔ ma?<br/></span>
		<span class="eng" id="eng12">Does the teacher want to teach her daughter to dance?<br/></span>
		<br/>
		大卫 什么 时候 去 工作？<br/>
			<button type="button" id="n13" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g13" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn13">Dàwèi shénme shíhòu qù gōngzuò?<br/></span>
		<span class="eng" id="eng13">When does David go to work?<br/></span>
		<br/>
		这 次 考试 她 都 听懂了 吗？<br/>
			<button type="button" id="n14" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g14" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn14">Zhè cì kǎoshì tā dōu tīngdǒngle ma?<br/></span>
		<span class="eng" id="eng14">Did she understand all of the exam?<br/></span>
		<br/>
		她 考试 为什么 没 做完？<br/>
			<button type="button" id="n15" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g15" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn15">Tā kǎoshì wèishénme méi zuòwán?<br/></span>
		<span class="eng" id="eng15">Why did not she finish the exam?<br/></span>
		<br/>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3>语音 (yǔyīn) Pronounciation</h3>
	<h4><button class="cd" onclick="play('02-09-5');">&#128191; 9-5</button>
	<audio controls="" preload="metadata" id="02-09-5"><source src="../mandarin/audio/02-09-5.mp3" type="audio/mpeg">No audio</audio>
	<br/>Intonation of a Yes-No Question.</h4>
	<p>The predicate is stressed, and the end of the sentence has a rising intonation.</p>
	<ol>
		<li>
			<span class="pynD">Nǐ míngtiān <b>qù</b> xuéxiào ma？</span><br/>
			<span class="xhanD">你 明天 <b>去</b> 学校 吗？</span>⤴<br/>
			<span class="engD">Will you <b>go</b> to school tomorrow?</span>
		</li>
		<li>
			<span class="pynD">Tāmen dōu <b>zhīdào </b> zhè jiàn shì ma?</span><br/>
			<span class="xhanD">他们 都 <b>知道</b> 这 件 事 吗？</span>⤴<br/>
			<span class="engD">Do they all <b>know</b> this?</span>
		</li>
		<li>
			<span class="pynD">Nǐ dōu <b>tīng dǒng </b> le ma?</span><br/>
			<span class="xhanD">你 都 <b>听懂</b> 了 吗？</span>⤴<br/>
			<span class="engD">Do you <b> understand </b>?</span>
		</li>
	</ol>
</div>
<div class="container-fluid">
	<h3>汉字 Characters</h3>
	<h4 class="sublesson">Chinese Radicals "⺩" and "⺣" (biāo)</h4>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="active"><th>Radical</th><th>Explanation</th><th>Examples</th></tr>
			<tr>
				<td>"⺩"<br/>()</td><td>related to <b>soil, land or buildings</b></td>
				<td>块 &nbsp;kuài &nbsp;lump, piece<br/>地 &nbsp;dì &nbsp;earth, land, ground</td>
			</tr>
			<tr>
				<td>"⺣"<br/>(biāo)</td><td>related to <b>fire</b></td>
				<td>热 &nbsp;rè &nbsp;hot<br/>黑 &nbsp;hēi &nbsp;black</td>
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
