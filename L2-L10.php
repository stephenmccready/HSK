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
	<title>Level 2 - 10</title>
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
	<div class="jumbotron lessonHeaderLeft">Dì shí kè<br/>第十课<br/>Lesson 10</div>
	<div class="lessonHeaderRight">
	  <h2>Bié zhǎole, shǒujī zài zhuōzi shàng ne.<br/>别找了，手机 在 桌子 上 呢。<br/><b>Stop looking for your cell phone; it's on the desk</b></h2>
	</div>
</div>
<div class="container-fluid">
	<h4 class="sublesson">1. <button class="cd" onclick="play('02-10-1');">&#128191; 10-1</button>
	<audio controls="" preload="metadata" id="02-10-1"><source src="../mandarin/audio/02-10-1.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén yī. Zài jiālǐ.<br/>漯文一。 在 家里。<br/>Text 1. At home.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Bùyào kàn diànshì le, míngtiān shàngwǔ hái yǒu Hànyǔ kè ne.<br/>
		A: 不要 看 电视 了，明天 上午 还 有 汉语 课呢。<br/><br/>
		<span class="masked">B: </span>Kàn diànshì duì xué Hànyǔ yǒu bāngzhù.<br/>
		B: 看 电视 对 学 汉语 有 帮助。<br/><br/>
		<span class="masked">A: </span>Míngtiān de kè nǐ dōu zhǔnbèi hǎo le ma?<br/>
		A: 明天 的 课 你 都 准备 好 了 吗？<br/><br/>
		<span class="masked">B: </span>Dōu zhǔnbèi hǎo le.<br/>
		B: 都 准备 好 了。<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Stop watching TV. You'll have a Chinese class tomorrow morning.<br/>
		B: Watching TV is good for Chinese learning<br/>
		A: Are you well prepared for the lessons tomorrow?<br/>
		B: Yes, I am.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>课</td><td>kè</td><td>noun</td><td>class, lesson</td></tr>
			<tr><td>帮助</td><td>bāngzhù</td><td>verb</td><td>to help, to assist, to aid</td></tr>
		</table>
		</div>
	</div>
	<div class="clearfix"></div>
	<h4 class="sublesson">2. <button class="cd" onclick="play('02-10-2');">&#128191; 10-2</button>
	<audio controls="" preload="metadata" id="02-10-2"><source src="../mandarin/audio/02-10-2.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén èr. Zài yīyuàn.<br/>漯文二。在 医院。<br/>Text 2. In the Hospital.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Bié kàn bàozhǐ le, yīshēng shuō nǐ yào duō xiūxí.<br/>
		A: 别 看 报纸了， 医生 说 你 要 多 休息。<br/><br/>
		<span class="masked">B: </span>Hǎo, bù kàn le. Gěi wǒ yībēi chá ba.<br/>
		B: 好， 不 看 了。 给 我 一杯 茶 吧。<br/><br/>
		<span class="masked">A: </span>Yīshēng shuō chī yào liǎng gè xiǎoshí bùyào hé chá.<br/>
		A: 医生 说 吃 药 后 两 个 小时 不要 喝 茶。<br/><br/>
		<span class="masked">B: </span>Yīshēng hái shuō shénme le?<br/>
		B: 医生 还 说 什么 了？<br/><br/>
		<span class="masked">A: </span>Yīshēng ràng nǐ tīng wǒ de.<br/>
		A: 医生 让 你 听 我 的。<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Stop reading the newspapar. The doctor said you need more rest.<br/>
		B: OK. Give me a cup of tea.<br/>
		A: The doctor said you shouldn't drink tea during the first two hours after you've taken medicine.<br/>
		B: What else did the doctor say?<br/>
		A: The doctor said you should listen to me.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Word</i></th></tr>
			<tr><td>别</td><td>bié</td><td>adv.</td><td>stop</td></tr>
		</table>
		</div>
	</div>
	<div class="clearfix"></div>
	<h4 class="sublesson">3. <button class="cd" onclick="play('02-10-3');">&#128191; 10-3</button>
	<audio controls="" preload="metadata" id="02-10-3"><source src="../mandarin/audio/02-10-3.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén sān. Zài jiālǐ.<br/>漯文三。在 家里。<br/>Text 3. At home.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Nǐ zěnme mǎile zhème duō dōngxī a?<br/>
		A: 你 怎么 买了 这么 多 东西 啊？<br/><br/>
		<span class="masked">B: </span>Gēgē jīntiān zhōngwǔ huílái chīfàn.<br/>
		B: 哥哥 今天 中午 回来 吃饭。<br/><br/>
		<span class="masked">A: </span>Wǒ kàn kàn mǎi shén me le. Yángròu, jīdàn, miàntiáo, xīguā ... zhēn bù shǎo! Māma ne?<br/>
		A: 我 看看 买 什么 了。 羊肉， 鸡蛋， 面条，西瓜 。。。 真 不 少！妈妈 呢？<br/><br/>
		<span class="masked">B: </span>Zhèngzài zhǔnbèi wǔfàn ne!<br/>
		B: 正在 准备 午饭 呢！<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Why did you buy so many things?<br/>
		B: Our elder brother will come back to have lunch.<br/>
		A: Let me see. Mutton, eggs, noodles, watermelon ... That's a lot! Where is Mom?<br/>
		B: She is preparing lunch!<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>哥哥</td><td>gēgē</td><td>noun</td><td>elder brother</td></tr>
			<tr><td>鸡蛋</td><td>jīdàn</td><td>noun</td><td>(hen's) egg</td></tr>
			<tr><td>西瓜</td><td>xīguā</td><td>noun</td><td>watermelon</td></tr>
			<tr><td>正在</td><td>zhèngzài</td><td>adv.</td><td>in the process of</td></tr>
		</table>
		</div>
	</div>
	<div class="clearfix"></div>
	<h4 class="sublesson">4. <button class="cd" onclick="play('02-10-4');">&#128191; 10-4</button>
	<audio controls="" preload="metadata" id="02-10-4"><source src="../mandarin/audio/02-10-4.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén sì. Zài jiālǐ.<br/>漯文四。在 家里。<br/>Text 4. At home.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Nǐ zài zhǎo shénme?<br/>
		A: 你 在 找 什么？<br/><br/>
		<span class="masked">B: </span>Nǐ kànjiàn wǒ de shǒujīle ma? Báisè de.<br/>
		B: 你 看见 我 的 手机了 吗？白色 的。<br/><br/>
		<span class="masked">A: </span>Bié zhǎo le, shǒujī zài zhuōzi shàng ne, diànnǎo pángbiān.<br/>
		A: 别 找 了，手机 在 桌子 上 呢， 电脑 旁边。<br/><br/>
		<span class="masked">B: </span>Nǐ kànjiàn wǒ de yīfú le ma? Hóngsè de nà jiàn.<br/>
		B: 你 看见 我 的 衣服 了 吗？ 红色 的 那 件。<br/><br/>
		<span class="masked">A: </span>Nà jiàn yīfú wǒ bāng nǐ xǐ le, zài wàibian ne.<br/>
		A: 那 件 衣服 我 帮 你 洗 了， 在 外边 呢。<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: What are you looking for?<br/>
		B: Have you seen my cell phone? It's white.<br/>
		A: Stop looking for your cell phone. It's on the desk, beside the computer.<br/>
		B: Have you seen my garment? The red one.<br/>
		A: I have washed it for you. It's hung outside.<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>手机</td><td>shǒujī</td><td>noun</td><td>cell phone</td></tr>
			<tr><td>洗</td><td>xǐ</td><td>verb</td><td>to wash, to bathe</td></tr>
		</table>
		</div>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">汪释 Notes</h3>
	<h4 class="sublesson">1. The Imperative sentence "<b>不要</b> 。。。 <b>了</b>／<b>别</b>。。。<b>了</b> " (<b>Bùyào</b>...<b>le</b> / <b>Bié</b>...<b>le</b> : Did not... / Don't...)</h4>
	<p>This sentence structure is used to dissuade or forbid somebody from doing something. For example:</p>
	
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th><b>不要</b><br/><b>Bùyào</b><br/>Don't</th><th>Verb (+ Object)<br/><br/></th><th><b>了</b><br/>le</th></tr>
		<tr><td><b>不要</b><br/><b>Bùyào</b><br/>Don't</td><td>玩 手机<br/>wán shǒujī<br/>play with the cell phone</td><td><b>了</b><br/>le</td></tr>
		<tr><td><b>不要</b><br/><b>Bùyào</b><br/>Don't</td><td>做饭<br/>zuò fàn<br/>cook</td><td><b>了</b><br/>le</td></tr>
		<tr><td><b>不要</b><br/><b>Bùyào</b><br/>Don't</td><td>看 电视<br/>kàn diànshì<br/>watch TV</td><td><b>了</b><br/>le</td></tr>
	</table>
	<div>&nbsp;</div>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th><b>别</b><br/><b>Bié</b><br/>Don't</th><th>Verb (+ Object)<br/><br/></th><th><b>了</b><br/>le</th></tr>
		<tr><td><b>别</b><br/><b>Bié</b><br/>Don't</td><td>睡觉<br/>shuìjiào<br/>sleep</td><td><b>了</b><br/>le</td></tr>
		<tr><td><b>别</b><br/><b>Bié</b><br/>Don't</td><td>看书<br/>kànshū<br/>read the book</td><td><b>了</b><br/>le</td></tr>
		<tr><td><b>别</b><br/><b>Bié</b><br/>Don't</td><td>看 报纸<br/>kàn bàozhǐ<br/>read the newspaper</td><td><b>了</b><br/>le</td></tr>
	</table>	
	<h4 class="sublesson">2. The Preposition "<b>对</b>" (<b>duì</b>: with regard to; concerning; to)</h4>
	<p>The Preposition "<b>对</b>" (<b>duì</b> : with regard to; concerning; to) can indicate a subject-target relation between people or things. For example:</p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th rowspan="2"><br/><br/></th><th colspan="3">Predicate</th></tr>
		<tr><th><b>对</b><br/><b>duì</b><br/><i>with regard to;<br/>concerning; to</i></th><th>Object</th><th>Verb / Adjective</th></tr>
		<tr><td>跑步<br/>Pǎobù<br/>Running</td><td><b>对</b><br/><b>duì</b></td><td>身体<br/>shēntǐ<br/>body</td><td>很好<br/>hěn hǎo<br/>very good</td></tr>
		<tr><td colspan="4"><i>Running is very good for the body.</i></td></tr>
		<tr><td>老师<br/>Lǎoshī<br/>Teacher</td><td><b>对</b><br/><b>duì</b></td><td>学生<br/>xuéshēng<br/>student</td><td>非常 好<br/>fēicháng hǎo<br/>extremely good</td></tr>
		<tr><td colspan="4"><i>The teacher is extremely good for the students.</i></td></tr>
		<tr><td>看 电视<br/>Kàn diànshì<br/>Watch TV</td><td><b>对</b><br/><b>duì</b><td>学 汉语<br/>xué Hànyǔ<br/>learn Chinese</td><td>有 都助<br/>yǒu dōu zhù<br/>is beneficial</td></tr>
		<tr><td colspan="4"><i>Watching TV is beneficial for learning Chinese.</i></td></tr>
	</table>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">练习 (liàn xí) Exercises</h3>
	<h4 class="sublesson">1. Role-play the dialogues</h4>
	<h4 class="sublesson">2. Answer the questions according to the actual situations</h4>
		<div class="col-xs-12 col-md-6 col">
		孩子们 正在 做 什么？<br/>
			<button type="button" id="n11" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g11" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn11">Háizimen zhèngzài zuò shénme?<br/></span>
		<span class="eng" id="eng11">What are the children doing?<br/></span>
		<br/>
		妈妈 为什么 不 让 他们 看 电视 了？<br/>
			<button type="button" id="n12" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g12" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn12">Māmā wèishénme bù ràng tāmen kàn diànshì le?<br/></span>
		<span class="eng" id="eng12">Why did mother not let them watch TV?<br/></span>
		<br/>
		吃 药 以后 可以 喝 茶 吗？<br/>
			<button type="button" id="n13" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g13" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn13">Chī yào yǐhòu kěyǐ hē chá ma?<br/></span>
		<span class="eng" id="eng13">After taking medication can you drink tea?<br/></span>
		<br/>
		他 今天 都 买了 什么 东西？为什么 要 买 这么 多？<br/>
			<button type="button" id="n14" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g14" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn14">Tā jīntiān dōu mǎile shénme dōngxī? Wèishénme yāo mǎi zhème duō?<br/></span>
		<span class="eng" id="eng14">What did he buy today? Why did he buy so many things?<br/></span>
		<br/>
		你 知道 男 的 正在 找 什么 吗？<br/>
			<button type="button" id="n15" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g15" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn15">Nǐ zhīdào nán de zhèngzài zhǎo shénme ma?<br/></span>
		<span class="eng" id="eng15">Do you know what the man is looking for?<br/></span>
		<br/>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3>语音 (yǔyīn) Pronounciation</h3>
	<h4><button class="cd" onclick="play('02-10-5');">&#128191; 10-5</button>
	<audio controls="" preload="metadata" id="02-10-5"><source src="../mandarin/audio/02-10-5.mp3" type="audio/mpeg">No audio</audio>
	<br/>Intonation of a Specific Question</h4>
	<p>The interrogative pronoun is stressed, and the intonation of the part of the sentence following the stress falls gradually. For example:</p>
	<ol>
		<li>
			<span class="pynD">Zhè shì <b>shéi</b> de bǐ?</span><br/>
			<span class="xhanD">这 是 <b>谁</b> 的 笔？</span>⤵<br/>
			<span class="engD"><b>Whose</b> pen is this?</span>
		</li>
		<li>
			<span class="pynD">Nǐmen xuéxiào yǒu <b>duōshǎo</b> xuéshēng?</span><br/>
			<span class="xhanD">你们 学校 有 <b>多少</b> 学生？</span>⤵<br/>
			<span class="engD"><b>How many</b> students are there in your school?</span>
		</li>
		<li>
			<span class="pynD">Nǐ zài zhǎo <b>shénme</b>?</span><br/>
			<span class="xhanD">你 在 找 <b>什么</b>？</span>⤵<br/>
			<span class="engD"><b>What</b> are you looking for?</span>
		</li>
	</ol>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3>汉字 Characters</h3>
	<h4 class="sublesson">Chinese Radicals "<b>⾛</b>" (<b>zǒu</b>) and "<b>⽳</b>" (<b>xué</b>)</h4>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="active"><th>Radical</th><th>Explanation</th><th>Examples</th></tr>
			<tr>
				<td><b>⾛</b><br/>(<b>zǒu</b>)</td><td>related to <b>running or walking</b></td>
				<td>超&nbsp;chāo&nbsp;to exceed,<br/>to surpass<br/>起&nbsp;qǐ&nbsp;to get up,<br/>to rise</td>
			</tr>
			<tr>
				<td><b>⽳</b><br/>(<b>xué</b>)</td><td>related to <b>holes, caves or houses</b></td>
				<td>空&nbsp;kōng&nbsp;empty<br/>穿&nbsp;chuān&nbsp;to pierce through,</br>to penetrate</td>
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
