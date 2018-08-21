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
	<title>Level 3 - 1</title>
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
<div id="0" class="container-fluid">
	<div class="jumbotron lessonHeaderLeft">Dì yī kè<br/>第一课<br/>Lesson 1</div>
	<div class="lessonHeaderRight"><h2>Zhōumò nǐ yǒu shénme dǎsuàn?<br/>周末 你 有 什么 打算?<br/><b>What are your plans for the weekend?</b></h2></div>
</div>
<div id="custom-nav" class="clearfix"><p>
	<a class="btn btn-success btn-md" href="#2">2</a>&nbsp;
	<a class="btn btn-success btn-md" href="#3">3</a>&nbsp;
	<a class="btn btn-success btn-md" href="#4">4</a>&nbsp;
	<a class="btn btn-success btn-md" href="#n1">Note 1</a>&nbsp;
	<a class="btn btn-success btn-md" href="#n2">Note 2</a>&nbsp;
	<a class="btn btn-success btn-md" href="#n3">Note 3</a>&nbsp;
	<a class="btn btn-success btn-md" href="#ex1">Ex 1</a>&nbsp;
	<a class="btn btn-success btn-md" href="#ex2">Ex 2</a>&nbsp;
	<a class="btn btn-success btn-md" href="#ex3">Ex 3</a>&nbsp;
	<a class="btn btn-success btn-md" href="#ex4">Ex 4</a>&nbsp;
	<a class="btn btn-success btn-md" href="#ch">Chars</a>&nbsp;
	<a class="btn btn-success btn-md" href="#ap">App</a>&nbsp;
	<a class="btn btn-success btn-md" href="#cs">Proverb</a>&nbsp;
	<a class="btn btn-info btn-md" href="L3-E01.php" target="_blank">Workbook</a></p></div>
<div class="container-fluid">
	<h4 class="textSection">Kè wén yī. Tán zhōumò de dǎsuàn.
		<br/>课文一。 谈 周末 的 打算。
		<br/>Text 1. Talking about the plan for the weekend.
		<br/><audio controls="" preload="metadata" id="03-01-1"><source src="../mandarin/audio/03-01-1.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<b>小丽: </b>周末 你 有 什么 打算?&nbsp;<button type="button" id="n11" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn11"><b>Xiǎolì: </b>Zhōumò nǐ yǒu shénme dǎsuàn?</span><br/>
		<b>小刚: </b>我 早 就 想 好了，请 你 吃饭，看 电影，喝 咖啡。&nbsp;<button type="button" id="n12" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn12"><b>Xiǎogāng: </b>Wǒ zǎo jiù xiǎnghǎo le, qǐng nǐ chī fàn, kàn diànyǐng, hē kāfēi.</span><br/>
		<b>小丽: </b>请 我?&nbsp;<button type="button" id="n13" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn13"><b>Xiǎolì: </b>Qǐng wǒ?</span><br/>
		<b>小刚: </b>是 啊，我 已经 找好 饭馆了，电影票 也 买好了。&nbsp;<button type="button" id="n14" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn14"><b>Xiǎogāng: </b>Shì a, wǒ yǐjīng zhǎohǎo fànguǎn le, diànyǐngpiào yě mǎihǎole.</span><br/>
		<b>小丽: </b>我 还 没 想 好 要 不要 跟 你 去 呢。&nbsp;<button type="button" id="n15" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn15"><b>Xiǎolì: </b>Wǒ hái méi xiǎng hǎo yào bùyào gēn nǐ qù ne<br/></span>
		<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<b>Xiǎolì: </b>What are your plans for the weekend?<br/>
		<b>Xiǎogāng: </b>I've been thinking about inviting you to dinner, to the movies, to go for a coffee.<br/>
		<b>Xiǎolì: </b>With me?<br/>
		<b>Xiǎogāng: </b>Yes, I have already found a good restuarant and bought movie tickets.<br/>
		<b>Xiǎolì: </b>I haven't thought whether I want to go with you or not.
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>生词 (Shēngcí) New Words</i></th></tr>
			<tr><td>周末</td><td>zhōumò</td><td>n</td><td>weekend</td></tr>
			<tr><td>打算</td><td>dǎsuàn</td><td>n/v</td><td>plan, to intend</td></tr>
			<tr><td>啊</td><td>a</td><td>part.</td><td>used at the end of a<br/>sentence to indicate<br/>confirmation or defense</td></tr>
			<tr><td>跟</td><td>gēn</td><td>prep</td><td>with</td></tr>
			<tr><th colspan="4"><i>专有名词 (Zhuān yǒu míngcí) Proper Nouns</i></th></tr>
			<tr><td>小丽</td><td>Xiǎolì</td><td colspan="2">Xiaoli, name of a person</td></tr>
			<tr><td>小刚</td><td>Xiǎogāng</td><td colspan="2">Xiaogang, name of a person</td></tr>
		</table>
		</div>
	</div>
	<div id="2" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">Kè wén èr. Zàijiā.<br/>课文二。在家。<br/>Text 2. At home.<br/>
	<audio controls="" preload="metadata" id="03-01-2"><source src="../mandarin/audio/03-01-2.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<b>妈妈: </b>你 一直 玩儿 电脑 游戏，作业 写完 了 吗?&nbsp;<button type="button" id="n21" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn21"><b>Māmā: </b>Nǐ yīzhí wánr diànnǎo yóuxì, zuòyè xiěwán le ma?</span><br/>
		<b>儿子: </b>都 写完 了。&nbsp;<button type="button" id="n22" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn22"><b>Érzi: </b>Dōu xiěwán le.</span><br/>
		<b>妈妈: </b>明天 不是 有 考试 吗? 你 怎么 一点儿 也 不 着急?&nbsp;<button type="button" id="n23" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn23"><b>Māmā: </b>Míngtiān bùshì yǒu kǎoshì ma? Nǐ zěnme yīdiǎnr yě bù zháojí?</span><br/>
		<b>儿子: </b>我 早 就 复习 好 了。&nbsp;<button type="button" id="n24" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn24"><b>Érzi: </b>Wǒ zǎo jiù fùxí hào le.</span><br/>
		<b>妈妈: </b>那 也 不能 一直 玩儿 啊。&nbsp;<button type="button" id="n25" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn25"><b>Māmā: </b>Nà yě bùnéng yīzhí wánr a.</span><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<b>Māmā: </b>You have been playing computer games, did you finish your homework??<br/>
		<b>Son: </b>It's all done.<br/>
		<b>Māmā: </b>Isn't there an exam tomorrow? Why aren't you worried?<br/>
		<b>Son: </b>I have been reviewing<br/>
		<b>Māmā: </b>So, you cannot keep playing all the time.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>生词 (Shēngcí) New Words</i></th></tr>
			<tr><td>一直</td><td>yìzhí</td><td>adv.</td><td>all the time</td></tr>
			<tr><td>游戏</td><td>yóuxì</td><td>n</td><td>game</td></tr>
			<tr><td>作业</td><td>zuòyè</td><td>n</td><td>homework</td></tr>
			<tr><td>着急</td><td>zháojí</td><td>adj.</td><td>worried, anxious</td></tr>
			<tr><td>复习</td><td>fùxí</td><td>v</td><td>to review</td></tr>
		</table>
		</div>
	</div>
	<div id="3" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">Kè wén sān. Liáo lǚyóu jìhuà.<br/>课文三。聊旅游计划。<br/>Text 3. Talking about the travel plan.<br/>
	<audio controls="" preload="metadata" id="03-01-3"><source src="../mandarin/audio/03-01-3.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<b>小丽: </b>下 个 月 我 去 旅游，你 能 跟 我 一起 去 吗?&nbsp;<button type="button" id="n31" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn31"><b>Xiǎolì: </b>Xià gè yuè wǒ qù lǚyóu, nǐ néng gēn wǒ yīqǐ qù ma?</span><br/>
		<b>小刚: </b>我 还 没 想好 呢。你 觉得 哪儿 最 好玩儿?&nbsp;<button type="button" id="n32" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn32"><b>Xiǎogāng: </b>Wǒ hái méi xiǎnghǎo ne. Nǐ juédé nǎr zuì hǎowánr?</span><br/>
		<b>小丽: </b>南方 啊，我们 去年 就 是 这个 时候 去 的。&nbsp;<button type="button" id="n33" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn33"><b>Xiǎolì: </b>Nánfāng a, wǒmen qùnián jiù shì zhège shíhòu qù de.</span><br/>
		<b>小刚: </b>南方 太 热 了，北方 好 一些，不 冷 也 不 热。&nbsp;<button type="button" id="n34" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn34"><b>Xiǎogāng: </b>Nánfāng tài rè le, Běifāng hǎo yīxiē, bù lěng yě bù rè. </span><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<b>Xiǎolì: </b>Next month I am going on a trip. Can we go together?<br/>
		<b>Xiǎogāng: </b>I have not thought about it yet. Where is the best place to go for fun?<br/>
		<b>Xiǎolì: </b>The south, we went this time last year.<br/>
		<b>Xiǎogāng: </b>The south is too hot, the north is better, not cold nor hot.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>生词 (Shēngcí) New Words</i></th></tr>
			<tr><td>南(方)</td><td>nán (fāng)</td><td>n</td><td>south, southern part</td></tr>
			<tr><td>北方</td><td>běifāng</td><td>n</td><td>north, northern part</td></tr>
		</table>
		</div>
	</div>
	<div id="4" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">Kè wén sì. Zhǔnbèi qù lǚyóu.<br/>课文四。准备去旅游。<br/>Text 4. Preparing for their trip.<br/>
	<audio controls="" preload="metadata" id="03-01-4"><source src="../mandarin/audio/03-01-4.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<b>小刚: </b>水果，面包，茶 都 准备 好 了，我们 还 带 什么?&nbsp;<button type="button" id="n41" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn41"><b>Xiǎogāng: </b>Shuǐguǒ, miànbāo, chá dōu zhǔnbèi hǎo le, wǒmen hái dài shénme?</span><br/>
		<b>小丽: </b>手机，电脑，地图，一个也不能少。&nbsp;<button type="button" id="n42" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn42"><b>Xiǎolì: </b>Shǒujī, diànnǎo, dìtú, yīgè yě bùnéng shǎo.</span><br/>
		<b>小刚: </b>这些 我 昨天 下午 就 准备 好 了。&nbsp;<button type="button" id="n43" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn43"><b>Xiǎogāng: </b>Zhèxiē wǒ zuótiān xiàwǔ jiù zhǔnbèi hǎo le.</span><br/>
		<b>小丽: </b>再 多 带 几 件 衣服 吧。&nbsp;<button type="button" id="n44" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn44"><b>Xiǎolì: </b>Zài duō dài jǐ jiàn yīfú ba.</span><br/>
		<b>小刚: </b>我们 是 去 旅游，不是 搬家，还是 少 带 一些 吧。&nbsp;<button type="button" id="n45" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn45"><b>Xiǎogāng: </b>Wǒmen shì qù lǚyóu, bùshì bānjiā, háishì shǎo dài yīxiē ba.</span><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<b>Xiǎogāng: </b>Fruit, bread, tea are ready, what else should we bring?<br/>
		<b>Xiǎolì: </b>Mobile phone, computer, map, are essential.<br/>
		<b>Xiǎogāng: </b>I was getting ready for this yesterday afternoon.<br/>
		<b>Xiǎolì: </b>Bring a few more clothes.<br/>
		<b>Xiǎogāng: </b>We are going to travel, not move, I'll bring fewer.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>生词 (Shēngcí) New Words</i></th></tr>
			<tr><td>面包</td><td>miànbāo</td><td>n</td><td>bread</td></tr>
			<tr><td>带</td><td>dài</td><td>v</td><td>to take along,<br/>to bring</td></tr>
			<tr><td>地图</td><td>dìtú</td><td>n</td><td>map</td></tr>
			<tr><td>搬</td><td>bān</td><td>v</td><td>to move,<br/>to carry</td></tr>
		</table>
		</div>
	</div>
</div>
<div id="n1" class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<div class="container-fluid">
	<h3 class="sublesson">汪释 (wāng shì) Notes</h3>
	<h4 class="textSection">1. The Complement of Result "<b>好</b>" (<b>hǎo</b>)</h4>
	<p>The complement of result "<b>好</b>" (<b>hǎo</b>) follows a verb as in "吃<b>好</b>" (chī<b>hǎo</b>) and "准备<b>好</b>" (zhǔnbèi<b>hǎo</b>) to indicate that the action is satisfactorily completed. Compared with "我吃完了(Wǒ chī wánle: I've finished eating)", which only indicates the completion of the action, "我吃<b>好</b>了" (Wǒ chī<b>hǎo</b>le) means both "<i>I've fìnished eating</i>" and "<i>I've enjoyed the meal</i>". For example:</p>
	<ol>
		<li><span class="xhanD">今晚 的 电影 小刚 已经 买<b>好</b> 票了</span><br/>
			<span class="pynD">Jīnwǎn de diànyǐng Xiǎogāng yǐjīng mǎi<b>hǎo</b> piàole</span><br/>
			<span class="engD">Xiaogang has bought a ticket for tonight's movie </span></li>
		<li><span class="xhanD">饭 还 没 做<b>好</b>，请 你 等 一会儿。</span><br/>
			<span class="pynD">Fàn hái méi zuò<b>hǎo</b>, qǐng nǐ děng yīhuǐr.</span><br/>
			<span class="engD">The rice is not done yet, please wait for a while.</span></li>
		<li><span class="xhanD">去 旅游 的 东西 准备<b>好</b> 了吗?</span><br/>
			<span class="pynD">Qù lǚyóu de dōngxī zhǔnbèi<b>hǎo</b> le ma?</span><br/>
			<span class="engD">Are you ready for the trip?</span></li>
		<li><span class="xhanD">我 还 没 想<b>好</b> 要 不要 跟 你 去 呢。</span><br/>
			<span class="pynD">Wǒ hái méi xiǎng<b>hǎo</b> yào bùyào gēn nǐ qù ne.</span><br/>
			<span class="engD">I'm not sure if I want to go with you.</span></li>
	</ol>
	<div class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<p><b>练一练&nbsp;(Liàn yī liàn)&nbsp;Practise</b></p>
	<p>完成句子&nbsp;(Wánchéng jùzi)&nbsp;Complete the sentences</p>
	<ol>
		<li><span class="xhanD">我 不能 跟 你 出去 玩儿，明天 的 汉语 课 我 还 没 ____ 。</span><br/>
			<span class="pynD">Wǒ bùnéng gēn nǐ chūqù wánr, míngtiān de Hànyǔ kè wǒ hái méi ____ .</span><br/>
			<span class="engD">I can not go out with you, tomorrow's Chinese class I have not yet ____ .</span></li>
		<li><span class="xhanD">我们 打算 去 旅行， 我 已 经 ____ 火车 票了。</span><br/>
			<span class="pynD">Wǒmen dǎsuàn qù lǚxíng, wǒ yǐ jīng ____ huǒchē piàole.</span><br/>
			<span class="engD">We are going to travel, I have ____ by train ticket.</span></li>
		<li><span class="xhanD">快 ____ 衣服，我们 准备 出门了。</span><br/>
			<span class="pynD">Kuài ____ yīfú, wǒmen zhǔnbèi chūménle.</span><br/>
			<span class="engD">Fast ____ clothes, we are ready to go out.</span></li>
	</ol>
	<div id="n2" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">2.  The Negative Structure "<b>一</b>	。。。<b>也／都</b> + <b>不／没</b>。。。"  (<b>yī</b>。。。<b>yě/dōu</b> + <b>bù/méi</b>)</h4>
	<p>‘<b>一</b> (<b>yī</b>) + Measure Word + Noun + <b>也／都</b> (<b>yě/dōu</b>) + <b>不／没</b> (<b>bù/méi</b>) + V (not.. .at all)" indicates complete negation. For example:</p>
	<ol>
		<li><span class="xhanD">我 <b>一</b>个 苹果 <b>也 不</b>想 吃。</span><br/>
			<span class="pynD">Wǒ <b>yī</b>gè píngguǒ <b>yě bù</b>xiǎng chī.</span><br/>
			<span class="engD">I do not want to eat an apple.</span></li>
		<li><span class="xhanD">昨天 他 <b>一</b> 件 衣服 <b>都 没</b>买。</span><br/>
			<span class="pynD">Zuótiān tā <b>yī</b> jiàn yīfú <b>dōu méi</b> mǎi</span><br/>
			<span class="engD">Yesterday he did not buy clothes</span></li>
		<li><span class="xhanD">小丽 <b>一</b>杯 茶 <b>也 没</b> 喝。</span><br/>
			<span class="pynD">Xiǎolì <b>yī</b>bēi chá <b>yě méi</b> hē</span><br/>
			<span class="engD">Xiaoli did not drink a cup of tea.</span></li>
		<li><span class="xhanD">手机，电脑，地图，<b>一</b>个 <b>也 不</b>能 少 (带)。</span><br/>
			<span class="pynD">Shǒujī, diànnǎo, dìtú, <b>yī</b>gè <b>yě bù</b>néng shǎo (dài).</span><br/>
			<span class="engD">Mobile phones, computers, maps, are essential (to bring).</span></li>
	</ol>
	<div class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>	
	<p>Sometimes the "<b>一</b> (<b>yī</b>) + Measure Word" used in the structure above is "<b>一点儿</b>" (<b>yīdiǎnr</b>). For example:</p>
	<ol>
		<li><span class="xhanD">我 <b>一点儿</b> 东西 <b>也 不</b>想 吃。</span><br/>
			<span class="pynD">Wǒ <b>yīdiǎnr</b> dōngxī <b>yě bù</b>xiǎng chī.</span><br/>
			<span class="engD">I do not want anything to eat.</span></li>
		<li><span class="xhanD">这个 星期 我 很 忙，<b>一点儿</b> 时间 <b>也 没</b>有。</span><br/>
			<span class="pynD">Zhège xīngqí wǒ hěn máng, <b>yīdiǎnr</b> shíjiān <b>yě méi</b>yǒu.</span><br/>
			<span class="engD">I'm very busy this week, I don't have much time.</span></li>
		<li><span class="xhanD">今天 早上 我 <b>一点儿</b> 咖啡 <b>都 没</b> 喝。</span><br/>
			<span class="pynD">Jīntiān zǎoshang wǒ <b>yīdiǎnr</b> kāfēi <b>dōu méi</b> hē.</span><br/>
			<span class="engD">I did not drink any coffee this morning</span></li>
		<li><span class="xhanD">我 <b>一点儿</b> 钱 <b>都 没</b> 带，所以 不能 买 衣服。</span><br/>
			<span class="pynD">Wǒ <b>yīdiǎnr</b> qián <b>dōu méi</b> dài, suǒyǐ bùnéng mǎi yīfú.</span><br/>
			<span class="engD">I have no money at all, so I can not buy clothes.</span></li>
	</ol>
	<div class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<p>When the predicate is an adjective, the structure "<b>一点儿</b> (<b>yīdiǎnr</b>) <b>也／都</b> (<b>yě/dōu</b>) + 不 (<b>bù</b>) + Adj" is used to indicate complete negation. For example:</p>
	<ol>
		<li><span class="xhanD">他 <b>一点儿 也 不</b> 累。</span><br/>
			<span class="pynD">Tā <b>yīdiǎnr yě bù</b> lèi.</span><br/>
			<span class="engD">He is not a tired at all.</span></li>
		<li><span class="xhanD">南方 <b>一点儿 都 不</b> 冷。</span><br/>
			<span class="pynD">Nánfāng <b>yīdiǎnr dōu bù</b> lěng.</span><br/>
			<span class="engD">The south is not cold at all.</span></li>
		<li><span class="xhanD">那个 地方 <b>一点儿 也 不</b> 远。</span><br/>
			<span class="pynD">Nàgè dìfāng <b>yīdiǎnr yě bù</b> yuǎn.</span><br/>
			<span class="engD">That place is not far away.</span></li>
		<li><span class="xhanD">你 怎么 <b>一点儿 也 不</b> 着 急?</span><br/>
			<span class="pynD">Nǐ zěnme <b>yīdiǎnr yě bù</b> zháo jí?</span><br/>
			<span class="engD">Why do you not worry?</span></li>
	</ol>
	<div class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<p><b>练一练&nbsp;(Liàn yī liàn)&nbsp;Practise</b></p>
	<p>完成句子&nbsp;(Wánchéng jùzi)&nbsp;Complete the sentences</p>
	<ol>
		<li><span class="xhanD">这些 汉字 太 难，我 ____ 。(不 认识)</span><br/>
			<span class="pynD">Zhèxiē Hànzì tài nán, wǒ ____ . (bù rènshì)</span><br/>
			<span class="engD">These characters are too hard, I ____ . (do not know)</span></li>
		<li><span class="xhanD">这 件 衣服 真 便宜， ____ 。(不 贵)</span><br/>
			<span class="pynD">Zhè jiàn yīfú zhēn piányí, ____ . (bù guì)</span><br/>
			<span class="engD">This dress is really cheap ____ . (not expensive)</span></li>
		<li><span class="xhanD">我 没 带 钱， ____ 。(没 买)</span><br/>
			<span class="pynD">Wǒ mò dài qián,  ____ . (méi mǎi)</span><br/>
			<span class="engD">I did not bring money,  ____ (Did not buy)</span></li>
	</ol>
	<div id="n3" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">3. The Conjunction "<b>那</b>" (<b>nà</b>: that)</h4>
	<p>Used at the beginning of a sentence, "<b>那</b>" (<b>nà</b>: that) indicates the result obtained from what's said previously. For example:</p>
	<ol>
		<li><span class="xhanD"><b>A:</b> 我 不想 去 看 电影。</span><br/>
			<span class="pynD">Wǒ bùxiǎng qù kàn diànyǐng</span><br/>
			<span class="engD">I do not want to go to the movies</span><br/>
			<span class="xhanD"><b>B:</b> <b>那</b> 我 也 不 去了。</span><br/>
			<span class="pynD"><b>Nà</b> wǒ yě bù qùle</span><br/>
			<span class="engD">I'm not going either.</span></li>
		<li><span class="xhanD"><b>A:</b> (明天 的 考试) 我 早 就 复习 好 了。</span><br/>
			<span class="pynD">(Míngtiān de kǎoshì) Wǒ zǎo jiù fùxí hào le.</span><br/>
			<span class="engD">(Tomorrow's exam) I've been reviewing.</span><br/>
			<span class="xhanD"><b>B:</b> 那 也 不能 一直 玩 儿啊。</span><br/>
			<span class="pynD"><b>Nà</b> yě bùnéng yīzhí wán er a</span><br/>
			<span class="engD">That's not going to be fun.</span></li>
	</ol>
	<p><b>练一练&nbsp;(Liàn yī liàn)&nbsp;Practise</b></p>
	<p>完成句子&nbsp;(Wánchéng jùzi)&nbsp;Complete the dialogues</p>
	<ol>
		<li><span class="xhanD"><b>A:</b> 周末 我 不想 去 商店 买 东西。</span><br/>
			<span class="pynD">Zhōumò wǒ bùxiǎng qù shāngdiàn mǎi dōngxī</span><br/>
			<span class="engD">I do not want to go shopping at the weekend</span><br/>
			<span class="xhanD"><b>B:</b> ____ 。</span><br/>
			<span class="pynD"></span><br/>
			<span class="engD"></span></li>
		<li><span class="xhanD"><b>A:</b> 外边 下 大雨了，不能 去 踢 球了。</span><br/>
			<span class="pynD">Wàibian xià dàyǔle, bùnéng qù tī qiúle.</span><br/>
			<span class="engD">Outside the rain is heavy, we can not go to play.</span><br/>
			<span class="xhanD"><b>B:</b> ____ 。</span><br/>
			<span class="pynD"></span><br/>
			<span class="engD"></span></li>
		<li><span class="xhanD"><b>A:</b> 对不起，红色 的 手机 已经 卖 完了。</span><br/>
			<span class="pynD">Duìbùqǐ, hóngsè de shǒujī yǐjīng mài wánle.</span><br/>
			<span class="engD">Sorry, the red cell phone has already sold out</span><br/>
			<span class="xhanD"><b>B:</b> ____ 。</span><br/>
			<span class="pynD"></span><br/>
			<span class="engD"></span>
		</li>
	</ol>
</div>
<div class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<div class="container-fluid">
	<h3 class="sublesson">练习 (liàn xí) Exercises</h3>
	<h4 id="ex1" class="textSection">1. 朗读 下列 短语 和 句子<br/>Lǎngdú xiàliè duǎnyǔ hé jùzi<br/>Read the following phrases and sentences aloud.<br/>
	<audio controls="" preload="metadata" id="03-01-5"><source src="../mandarin/audio/03-01-5.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col">
	<ol>
		<li>
			<span class="xhanD">打算: 打算 去 唱歌 / 打算 做 什么 / 没有 打算 / 周末 你 有 什么 打算?<br/></span>
			<span class="pynD">Dǎsuàn: Dǎsuàn qù chànggē / Dǎsuàn zuò shénme？ / Méiyǒu dǎsuàn / Zhōumò nǐ yǒu shénme dǎsuàn?<br/></span>
			<span class="engD">Plan: Plan to go sing. / What are you going to do? / There is no plan. / What are your plans for the weekend?<br/></span></li>
		<li><span class="xhanD">一直: 一直写作业 / 一直生病 / 一直不高兴 / 你怎么一直玩儿?<br/></span>
			<span class="pynD">Yīzhí: Yīzhí xiě zuòyè / Yīzhí shēngbìng / Yīzhí bù gāoxìng / Nǐ zěnme yīzhí wánr?<br/></span>
			<span class="engD">Always: Always writing homework / Always sick / Always unhappy / Why are you always playing?<br/></span></li>
		<li><span class="xhanD">着急: 很 着急 / 不 着急 / 别 着急 / 你 怎么 一点儿 也 不 着 急 啊?<br/></span>
			<span class="pynD">Zhāojí: Hěn zhāojí / Bù zháo jí / Bié zhāojí / Nǐ zěnme yīdiǎnr yě bù zháojí a?<br/></span>
			<span class="engD">Worry: Very anxious / No hurry / Don't worry / Why aren't you in a hurry?<br/></span></li>
		<li><span class="xhanD">跟: 跟 小 狗 玩儿 / 跟 朋友 去 买 东西 / 别跟他旅行 / 你能跟我一起去吗?<br/></span>
			<span class="pynD">Gēn: Gēn xiǎo gǒu wánr / Gēn péngyǒu qù mǎi dōngxī / Bié gēn tā lǚxíng / Nǐ néng gēn wǒ yīqǐ qù ma?<br/></span>
			<span class="engD">With: Play with a puppy / Go shopping with a friend / Don't travel with him / Can you come with me?<br/></span></li>
		<li>	<span class="xhanD">带: 带 地图 / 带 饭 / 没 带 作业 / 还是 少 带 一些 吧。<br/></span>
			<span class="pynD">Dài: Dài dìtú / Dài fàn / Méi dài zuòyè / Háishì shǎo dài yīxiē ba<br/></span>
			<span class="engD">Take along: Bring: Bring map / Bring rice / Don't bring homework / take some less<br/></span></li>
	</ol>
	</div>
	<div class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 id="ex2" class="textSection">2. 选择 恰当 的 词语 填空<br/>Xuǎnzé qiàdàng de cíyǔ tiánkòng<br/>Choose the proper words to fill in the blanks.</h4>
	<div class="col-xs-12 col">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="xhanD"><td>周末</td><td>带</td><td>游戏</td><td>跟</td><td>作业</td></tr>
			<tr class="pynD"><td>zhōumò</td><td>dài</td><td>yóuxì</td><td>gēn</td><td>zuòyè</td></tr>
			<tr class="engD"><td>weekend</td><td>to take along,<br/>to bring</td><td>game</td><td>with</td><td>homework</td></tr>
		</table>
		<ol>
			<li><span class="xhanD">你 写 完 _____ 了 吗?</span><br/>
				<span class="pynD">Nǐ xiě wán _____ le ma?</span></li>
			<li><span class="xhanD">上 个 ______ 我们 去 朋友 家 玩儿 了。</span><br/>
				<span class="pynD">Shàng gè ______ wǒmen qù péngyǒu jiā wánr le.</span></li>
			<li><span class="xhanD">别 玩儿 ______ 了，快 去 睡觉。</span><br/>
				<span class="pynD">Bié wánr ______ le, kuài qù shuìjiào.</span></li>
			<li><span class="xhanD">他 说 好 请 我 吃饭，但是 没 ______ 钱。</span><br/>
				<span class="pynD">Tā shuō hǎo qǐng wǒ chīfàn, dànshì méi ______ qián.</span></li>
			<li><span class="xhanD">明天 我 要 上课，不能 ______ 你们 一起 去 玩儿。</span><br/>
				<span class="pynD">Míngtiān wǒ yào shàngkè, bùnéng ______ nǐmen yīqǐ qù wánr.</span></li>
		</ol>
		<div class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="xhanD"><td>南方</td><td>搬</td><td>面包</td><td>地图</td><td>打算</td></tr>
			<tr class="pynD"><td>nánfāng</td><td>bān</td><td>miànbāo</td><td>dìtú</td><td>dǎsuàn</td>
		</table>
		<ol start="6">
			<li><span class="xhanD">A: 你 是 什么 时候 ______ 家 的? 我 怎么 不 知道?</span><br/>
				<span class="pynD">A: Nǐ shì shénme shíhòu  ______ jiā de? Wǒ zěnme bù zhīdào?</span><br/>
				<span class="xhanD">B: 上个月。</span><br/>
				<span class="pynD">B: Shàng gè yuè</span></li>
			<li><span class="xhanD">A: 你 是 北方 人 吗?</span><br/>
				<span class="pynD">A: Nǐ shì běifāng rén ma?</span><br/>
				<span class="xhanD">B: 不是，我是 ______ 人。</span><br/>
				<span class="pynD">B: Bùshì, wǒ shì  ______ rén.</span></li>
			<li><span class="xhanD">A: 考 完 试 你 有 什么 ______ ?</span><br/>
				<span class="pynD">A: Kǎo wán shì nǐ yǒu shénme ______ ?</span><br/>
				<span class="xhanD">B: 我 还 没 想 好。</span><br/>
				<span class="pynD">B: Wǒ hái méi xiǎng hǎo.</span></li>
			<li><span class="xhanD">A: 你 好，我 要买 一 张 ______ 。</span><br/>
				<span class="pynD">A: Nǐ hǎo, wǒ yāomǎi yī zhāng ______ .</span><br/>
				<span class="xhanD">B: 三块钱。</span><br/>
				<span class="pynD">B: Sān kuài qián.</span></li>
			<li><span class="xhanD">A: 累了 吧? 吃 点儿 ______ 吧。</span><br/>
				<span class="pynD">A: Lèile ba? Chī diǎnr ______ ba</span><br/>
				<span class="xhanD">B: 好，你 也 吃 点儿 吧。</span><br/>
				<span class="pynD">B: Hǎo, nǐ yě chī diǎnr ba.</span></li>
		</ol>
	</div>
	<div id="ex3" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">3. 用本课新学的语言点和词语描述图片<br/>Yòng běn kè xīn xué de yǔyán diǎn hé cíyǔ miáoshù túpiàn<br/>Describe the pictures using the newly-learned language points and words</h4>
	<div class="col-xs-12 col">
	<p class="indent"><span class="xhanD"><b>A</b>: 衣服 都 ____ 了 吗?</span><br/>
		<span class="pynD"><b>A</b>: Yīfú dōu ____ le ma?</span><br/>
		<span class="xhanD"><b>B</b>: 我 ____ 也 ____ 。</span><br/>
		<span class="pynD"><b>B</b>: Wǒ ____ yě</span><br/>
		<span class="xhanD"><b>A</b>: 你 什么 时候 洗?</span><br/>
		<span class="pynD"><b>A</b>: Nǐ shénme shíhòu xǐ?</span><br/>
		<span class="xhanD"><b>B</b>: 我 ____ 今天 下午 洗。</span><br/>
		<span class="pynD"><b>B</b>: Wǒ ____ jīntiān xiàwǔ xǐ.</span></p>
	<p class="indent"><span class="xhanD"><b>A</b>: 小 狗 怎么 没 吃饭?</span><br/>
		<span class="pynD"><b>A</b>: Xiǎo gǒu zěnme méi chīfàn?</span><br/>
		<span class="xhanD"><b>B</b>: 我 的 狗 生病了，一 ____ 也 ____。</span><br/>
		<span class="pynD"><b>B</b>: Wǒ de gǒu shēngbìngle, yī ____ yě ____.</span><br/>
		<span class="xhanD"><b>A</b>: 那 ____ 你 的 狗 去 医院 吧。</span><br/>
		<span class="pynD"><b>A</b>: Nà ____ nǐ de gǒu qù yīyuàn ba.</span><br/>
		<span class="xhanD"><b>B</b>: 好吧。</span><br/>
		<span class="pynD"><b>B</b>: Hǎo ba.</span></p>
	<p class="indent"><span class="xhanD"><b>A</b>: 我们 休息一下再 ____ 吧。</span><br/>
		<span class="pynD"><b>A</b>: Wǒmen xiūxí yīxià zài ____ ba.</span><br/>
		<span class="xhanD"><b>B</b>: 没关系，我一 ____。</span><br/>
		<span class="pynD"><b>B</b>: Méiguānxì, wǒ yī ____。</span><br/>
		<span class="xhanD"><b>A</b>: 那 ____。</span><br/>
		<span class="pynD"><b>A</b>: Nà ____.</span><br/>
		<span class="xhanD"><b>B</b>: 好。</span><br/>
		<span class="pynD"><b>B</b>: Hǎo.</span></p>
	<p class="indent"><span class="xhanD"><b>A</b>: 你什么时候回家?</span><br/>
		<span class="pynD"><b>A</b>: Nǐ shénme shíhòu huí jiā?</span><br/>
		<span class="xhanD"><b>B</b>: 我还没 ____ 飞机票呢，你知道在哪儿买票吗?</span><br/>
		<span class="pynD"><b>B</b>: Wǒ hái méi ____ fēijī piào ne, nǐ zhīdào zài nǎ'er mǎi piào ma?</span><br/>
		<span class="xhanD"><b>A</b>: 知道，我 ____ 你一起去吧。</span><br/>
		<span class="pynD"><b>A</b>: Zhīdào, wǒ nǐ yīqǐ qù ba.</span><br/>
		<span class="xhanD"><b>B</b>: 太好了，谢谢。</span><br/>
		<span class="pynD"><b>B</b>: Tài hǎole, xièxiè.</span></p>
	</div>
	<div class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 id="ex4" class="textSection">4. 根据 课文 回答 问题<br/>Gēnjù kèwén huídá wèntí<br/>Answer the questions according to the texts.</h4>
	<div class="col-xs-12 col">
		<ol>
			<li>
		周末 小刚 打算 做 什么?
			<button type="button" id="n11x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g11x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn11x">Zhōumò Xiǎogāng dǎsuàn zuò shénme?<br/></span>
		<span class="eng" id="eng11x">What is Xiǎogāng going to do at the weekend?<br/></span>
			</li>
			<li>
		小丽 要 不要 跟 小刚一起去?
			<button type="button" id="n12x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g12x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn12x">Xiǎolì yào bùyào gēn Xiǎogāng yīqǐ qù<br/></span>
		<span class="eng" id="eng12x">Xiaoli, do you want to go with Xiaogang?<br/></span>
			</li>
			<li>
		儿子 在 做 什么？ 他 准备 好 考试了 吗?
			<button type="button" id="n13x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g13x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn13x">Érzi zài zuò shénme? Tā zhǔnbèi hǎo kǎoshìle ma?<br/></span>
		<span class="eng" id="eng13x">What is the son doing? Is he ready for the exam?<br/></span>
			</li>
			<li>
		小丽 什么 时候 去 旅游?
			<button type="button" id="n14x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g14x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn14x">Xiǎolì shénme shíhòu qù lǚyóu?<br/></span>
		<span class="eng" id="eng14x">When is Xiǎolì's trip?<br/></span>
			</li>
			<li>
		小刚 觉得 哪儿 最 好 玩儿？为什么？
			<button type="button" id="n15x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g15x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn15x">Xiǎogāng juédé nǎr zuì hǎo wánr? Wèishéme?<br/></span>
		<span class="eng" id="eng15x">Xiǎogāng where do you think it's best to have fun? Why?<br/></span>
			</li>
			<li>
		小刚 和 小丽 带了 什么 东西?
			<button type="button" id="n16x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g16x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn16x">Xiǎogāng hé Xiǎolì dàile shénme dōngxī?<br/></span>
		<span class="eng" id="eng16x">What things did Xiǎogāng and Xiǎolì bring?<br/></span>
			</li>
		</ol>
	</div>
</div>
<div id="ch" class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<div class="container-fluid">
	<div class="col-xs-12 col">
	<h3>汉字 (Hànzì) Characters</h3>
	<h4 class="textSection">旧字新词&nbsp;(Jiù zì xīn cí)&nbsp;Old Words New Words</h4>
	<div class="gameDiv">
	<table class="table table-centered">
		<tr><td>旅<b>游</b></td><td></td><td><b>客</b>人</td></tr>
		<tr><td>Lǚ<b>yóu</b></td><td></td><td><b>Kè</b>rén</td></tr>
		<tr><td></td><td><b>游客</b></td><td></td></tr>
		<tr><td></td><td><b>Yóukè</b></td><td></td></tr>
	</table>
	</div>
	<div class="gameDiv">
	<table class="table table-centered">
		<tr><td><b>外</b>边</td><td></td><td><b>地</b>方</td></tr>
		<tr><td><b>Wài</b>bian</td><td></td><td><b>dì</b>fāng</td></tr>
		<tr><td></td><td><b>外地</b></td><td></td></tr>
		<tr><td></td><td><b>Wàidì</b></td><td></td></tr>
	</table>
	</div>
	<div class="gameDiv">
	<table class="table table-centered">
		<tr><td>北<b>方</b></td><td></td><td><b>门</b></td></tr>
		<tr><td>Běi<b>fāng</b></td><td></td><td><b>mén</b></td></tr>
		<tr><td></td><td><b>方门</b></td><td></td></tr>
		<tr><td></td><td><b>Fāng mén</b></td><td></td></tr>
	</table>
	</div>
	</div>
</div>

<div id="ap" class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<div class="container-fluid">
	<div class="col-xs-12 col">
	<h3>运用 (yùnyòng) Application</h3>
	<h4 class="textSection">1. 双人 活动<br/>Shuāngrén huódòng<br/>Pair Work</h4>
	Work in pairs to make dialogues, contradicting each other using "一…..也/都+ 不/没…….<br/>
For example:</br>
	<ul>
		<li><b>A:</b> 我觉得今天很冷</br>
			<b>A:</b> Wǒ juédé jīntiān hěn lěng</li>
		<li><b>B:</b> 我觉得一点儿也不冷。 我想吃一个苹果。</br>
			<b>B:</b> Wǒ juédé yīdiǎnr yě bù lěng. Wǒ xiǎng chī yīgè píngguǒ.</li>
		<li><b>A:</b> 我一个苹果也不想吃。</br>
			<b>A:</b> Wǒ yīgè píngguǒ yě bùxiǎng chī.</li>
	</ul>
	<p>
	提示词: (Tíshì cí:) Hint Words:<br/>
	<table class="table table-responsive table-bordered">
		<tr><td>买衣服</td><td>爬山</td><td>上网</td><td>着急</td><td>远</td><td>忙</td></tr>
		<tr><td>Mǎi yīfú</td><td>Páshān</td><td>Shàngwǎng</td><td>Zhāojí</td><td>Yuǎn</td><td>Máng</td></tr>
		<tr><td>Buy clothes</td><td>Climbing</td><td>Internet</td><td>Worry</td><td>Far</td><td>Busy</td></tr>
	</table>
	</p>
	</div>
	<div class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<div class="col-xs-12 col">
	<h4 class="textSection">2. 小组活动<br/>Xiǎozǔ huódòng<br/>Group Work</h4>
	<p>Work in groups of 3-4. Discuss where you are planning to go traveling, how you will go, and what should be prepared before the trip. Ask one member to take notes and report the results to the whole class.</p>
	<table class="table table-centered table-bordered">
		<tr><th>打算 去 哪儿 旅游<br/>Dǎsuàn qù nǎr lǚyóu</th><th>怎 去 么<br/>Zěn qù me</th><th>旅游 以前 要 准备 什么<br/>Lǚyóu yǐqián yào zhǔnbèi shénme</th></tr>
		<tr><td>打算 去 北京 旅游<br/>Dǎsuàn qù Běijīng lǚyóu</td><td>坐 飞机<br/>Zuò fēijī</td><td>买好 飞机 票，我 好 宾馆<br/>Mǎihǎo fēijī piào, wǒ hǎo bīnguǎn</td></tr>
		<tr><td><br/></td><td><br/></td><td><br/></td></tr>
		<tr><td><br/></td><td><br/></td><td><br/></td></tr>
		<tr><td><br/></td><td><br/></td><td><br/></td></tr>
	<table>
	</div>
</div>
<div id="cs" class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<div class="container-fluid">
	<div class="col-xs-12 col">
	<h3>俗语 (súyǔ) Common Saying</h3>
	<h4 class="textSection">不 到 长城 非 好汉<br/>Bù dào Chángchéng fēi hǎohàn<br/>He who has never been to the Great Wall is not a true man</h4>
	<p>In the saying "不 到 长城 非 好汉"，(Bù dào Chángchéng fēi hǎohàn) "非" (fēi) means "not", and "好汉" (hǎohàn) means "awesome person" or "hero", The saying means that a person who has never been to the Great Wall is not a hero. As a metaphor for positive spirit, it defines a hero as one who tries hard and works out the problems he faces.</p>
	</div>
</div>
<div class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<?php
} else { header( 'Location: https://www.stephenmccready.asia/mi/index.php'); }
?>
<script>
function myToggle(id) {
	var x=document.getElementById('py'+id);
	if(id.substr(0,1)=="g"){
		x=document.getElementById('en'+id);
	}
    if (x.style.display === 'none' || x.style.display === '') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
} 
</script>
</body>
</html>
