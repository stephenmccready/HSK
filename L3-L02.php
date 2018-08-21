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
	<title>Level 3 - 2</title>
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
<div id="0" class="container-fluid">
	<div class="jumbotron lessonHeaderLeft">Dì èr kè<br/>第二课<br/>Lesson 2</div>
	<div class="lessonHeaderRight"><h2>Tā shénme shíhòu huílái?<br/>他 什么 时候 回来?<br/><b>When will he come back?</b></h2></div>
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
	<a class="btn btn-info btn-md" href="L3-E02.php" target="_blank">Workbook</a></p></div>
<div class="container-fluid">
	<h4 class="textSection">Kè wén yī. Xiàshān de lùshàng.<br/>课文一。 下山 的 路上。<br/>Text 1. On the way going down the mountain.<br/>
		<audio controls="" preload="metadata" id="03-02-1"><source src="../mandarin/audio/03-02-1.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<b>小丽: </b>休息一下吧。&nbsp;<button type="button" id="n11" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn11"><b>Xiǎolì: </b>Xiūxí yīxià ba.</span><br/>
		<b>小刚: </b>怎么了？&nbsp;<button type="button" id="n12" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn12"><b>Xiǎogāng: </b>Zěnmele?</span><br/>
		<b>小丽: </b>我现在腿也疼，脚也疼。&nbsp;<button type="button" id="n13" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn13"><b>Xiǎolì: </b>Wǒ xiànzài tuǐ yě téng, jiǎo yě téng.</span><br/>
		<b>小刚: </b>好，那边树多，我们过去坐一下吧。&nbsp;<button type="button" id="n14" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn14"><b>Xiǎogāng: </b>Hǎo, nà biān shù duō, wǒmen guòqù zuò yīxià ba.</span><br/>
		<b>小丽: </b>上来的时候我怎么没觉得这么累?&nbsp;<button type="button" id="n15" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn15"><b>Xiǎolì: </b>Shànglái de shíhòu wǒ zěnme méi juédé zhème lèi?</span><br/>
		<b>小刚: </b>上山容易下山难，你不知道?&nbsp;<button type="button" id="n16" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn16"><b>B: </b>Shàngshān róngyì xiàshān nán, nǐ bù zhīdào?</span><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<b>Xiǎolì: </b>Take a break.<br/>
		<b>Xiǎogāng: </b>What's wrong?<br/>
		<b>Xiǎolì: </b>I have a pain in my leg and my foot hurts.<br/>
		<b>Xiǎogāng: </b>OK, there are many trees over there, let's go sit down.<br/>
		<b>Xiǎolì: </b>Why didn't I feel so tired when I came up?<br/>
		<b>Xiǎogāng: </b>Up hill is easy, downhill is hard, don't you know?<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>生词 (Shēngcí) New Words</i></th></tr>
			<tr><td>腿</td><td>tuǐ</td><td>n</td><td>leg</td></tr>
			<tr><td>疼</td><td>téng</td><td>adj</td><td>hurt, painful</td></tr>
			<tr><td>脚</td><td>jiǎo</td><td>n</td><td>foot</td></tr>
			<tr><td>树</td><td>shù</td><td>n</td><td>tree</td></tr>
			<tr><td>容易</td><td>róngyì</td><td>adj</td><td>easy</td></tr>
			<tr><td>难</td><td>nán</td><td>adj</td><td>difficult</td></tr>
		</table>
		</div>
	</div>
	<div id="2" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">Kè wén èr. Zài dǎ diànhuà.<br/>课文二。 在打电话。<br/>Text 2. On the phone.<br/>
	<audio controls="" preload="metadata" id="03-02-2"><source src="../mandarin/audio/03-02-2.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<b>周太太: </b>喂，你好，请问周明在吗?&nbsp;<button type="button" id="n21" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn21"><b>Zhōu tàitai: </b>Wèi, nǐ hǎo, qǐngwèn Zhōu Míng zài ma?</span><br/>
		<b>秘书: </b>周经理出去了，不在办公室。&nbsp;<button type="button" id="n22" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn22"><b>Mìshū: </b>Zhōu jīnglǐ chūqù le, bù zài bàngōngshì.</span><br/>
		<b>周太太: </b>他去哪儿了？什么时候回来?&nbsp;<button type="button" id="n23" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn23"><b>Zhōu tàitai: </b>Tā qù nǎr le? Shénme shíhòu huílái?</span><br/>
		<b>秘书: </b>他出去办事了，下午回来。&nbsp;<button type="button" id="n24" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn24"><b>Mìshū: </b>Tā chūqù bàn shì le, xiàwǔ huílái</span><br/>
		<b>周太太: </b>回来了就让他给我打个电话。&nbsp;<button type="button" id="n25" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn25"><b>Zhōu tàitai: </b>Huílái le jiù ràng tā gěi wǒ dǎ gè diànhuà.</span><br/>
		<b>秘书: </b>好的，他到了办公室我就告诉他。&nbsp;<button type="button" id="n26" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn26"><b>Mìshū: </b>Hǎo de, tā dàole bàngōngshì wǒ jiù gàosù tā.</span><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<b>Mrs Zhou: </b>Hi, Hello, Is Zhou Ming there?<br/>
		<b>Secretary: </b>Manager Zhou went out, he's not in the office.<br/>
		<b>Mrs Zhou: </b>Where did he go? When will he get back?<br/>
		<b>Secretary: </b>He went out to work, he'll be back in the afternoon<br/>
		<b>Mrs Zhou: </b>Have him call me back.<br/>
		<b>Secretary: </b>Okay, I will tell him when he gets back to the office.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>生词 (Shēngcí) New Words</i></th></tr>
			<tr><td>太太</td><td>tàitai</td><td>n</td><td>Mrs., madam</td></tr>
			<tr><td>秘书</td><td>mìshū</td><td>n</td><td>secretary</td></tr>
			<tr><td>经理</td><td>jīnglǐ</td><td>n</td><td>manager</td></tr>
			<tr><td>办公室</td><td>bàngōngshì</td><td>n</td><td>office</td></tr>
			<tr><th colspan="4"><i>专有名词 (Zhuān yǒu míngcí) Proper Nouns</i></th></tr>
			<tr><td>周</td><td colspan="3">Zhōu, a surname</td></tr>
			<tr><td>周明</td><td colspan="3">Zhōu Míng, name of a person</td></tr>
		</table>
		</div>
	</div>
	<div id="3" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">Kè wén sān. Zài lóu ménkǒu sòng péngyǒu.<br/>课文三。在 楼 门口 送 朋友。
		<br/>Text 3. Parting at the exit of the building.<br/>
		<audio controls="" preload="metadata" id="03-02-3"><source src="../mandarin/audio/03-02-3.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<b>小刚: </b>雨下得真大。你怎么回去？我送你吧。&nbsp;<button type="button" id="n31" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn31"><b>Xiǎogāng: </b>Yǔ xià dé zhēn dà. Nǐ zěnme huíqù? Wǒ sòng nǐ ba.</span><br/>
		<b>小丽: </b>没事，我出去叫辆出租车就行了。&nbsp;<button type="button" id="n32" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn32"><b>Xiǎolì: </b>Méi shì, wǒ chūqù jiào liàng chūzūchē jiù xíng le.</span><br/>
		<b>小刚: </b>那你等等，我上楼去给你拿把伞。&nbsp;<button type="button" id="n33" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn33"><b>Xiǎogāng: </b>Nà nǐ děngděng, wǒ shàng lóu qù gěi nǐ ná bǎ sǎn</span><br/>
		<b>小丽: </b>好的。我跟你一起上去吧。&nbsp;<button type="button" id="n34" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn34"><b>Xiǎolì: </b>Hǎo de. Wǒ gēn nǐ yīqǐ shàngqù ba.</span><br/>
		<b>小刚: </b>你在这儿等吧，我拿了伞就下来。&nbsp;<button type="button" id="n35" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn35"><b>Xiǎogāng: </b>Nǐ zài zhèr děng ba, wǒ nále sǎn jiù xiàlái.</span><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<b>Xiǎogāng: </b>It's raining hard. How are you going to get back? Let me give you a ride.<br/>
		<b>Xiǎolì: </b>It's okay, I'll go out and get a taxi.<br/>
		<b>Xiǎogāng: </b>I'll go upstairs and get you an umbrella.<br/>
		<b>Xiǎolì: </b>Good. I'll go up with you.<br/>
		<b>Xiǎogāng: </b>Wait here, I'll take my umbrella and come down.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>生词 (Shēngcí) New Words</i></th></tr>
			<tr><td>辆</td><td>liàng</td><td>mw</td><td>used for vehicles</td></tr>
			<tr><td>楼</td><td>lóu</td><td>n</td><td>building</td></tr>
			<tr><td>拿</td><td>ná</td><td>v</td><td>to take, to fetch</td></tr>
			<tr><td>把</td><td>bǎ</td><td>mw</td><td>used for things<br/>with a handle</td></tr>
			<tr><td>伞</td><td>sǎn</td><td>n</td><td>umbrella</td></tr>
		</table>
		</div>
	</div>
	<div id="4" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">Kè wén sì. Zàijiā.<br/>课文四。在家。<br/>Text 4. Át home.<br/>
		<audio controls="" preload="metadata" id="03-02-4"><source src="../mandarin/audio/03-02-4.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<b>周太太: </b>你看，我这么胖，怎么办呢？&nbsp;<button type="button" id="n41" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn41"><b>Zhōu tàitai: </b>Nǐ kàn, wǒ zhème pàng, zěnme bàn ne?</span><br/>
		<b>周明: </b>你每天晚上吃了饭就睡觉，也不出去走走，能不胖吗？&nbsp;<button type="button" id="n42" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn42"><b>Zhōu Míng: </b>Nǐ měi tiān wǎnshàng chīle fàn jiù shuì jiào, yě bù chūqù zǒuzǒu, néng bù pàng ma?</span><br/>
		<b>周太太: </b>其实我每天都运动。&nbsp;<button type="button" id="n43" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn43"><b>Zhōu tàitai: </b>Qíshí wǒ měi tiān dōu yùndòng.</span><br/>
		<b>周明: </b>但是你一点儿也没瘦！你做什么运动了？&nbsp;<button type="button" id="n44" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn44"><b>Zhōu Míng: </b>Dànshì nǐ yīdiǎnr yě méi shòu! Nǐ zuò shénme yùndòngle?</span><br/>
		<b>周太太: </b>做饭啊。&nbsp;<button type="button" id="n45" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn45"><b>Zhōu tàitai: </b>Zuò fàn a</span><br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<b>Mrs Zhōu: </b>Look, I'm so fat. What should I do?<br/>
		<b>Zhōu Míng: </b>You go to bed every night after dinner. You don't go out for a walk. How can you not be fat?<br/>
		<b>Mrs Zhōu: </b>Actually I exercise every day.<br/>
		<b>Zhōu Míng: </b>But you're not skinny! What sports do you do?<br/>
		<b>Mrs Zhōu: </b>Cooking!<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>生词 (Shēngcí) New Words</i></th></tr>
			<tr><td>胖</td><td>pàng</td><td>adj</td><td>fat</td></tr>
			<tr><td>其实</td><td>qíshí</td><td>adv</td><td>actually</td></tr>
			<tr><td>瘦</td><td>shòu</td><td>adj</td><td>thin</td></tr>
		</table>
		</div>
	</div>
</div>
<div id="n1" class="dash"><a href="#0"> Back to top</a></div>
<div class="container-fluid">
	<h3 class="sublesson">汪释 (wāng shì) Notes</h3>
	<h4 class="textSection">1. Simple Complements of Direction</h4>
	<p>In Chinese, "<b>V + 来/去</b> (<b>lái/qù</b>: come/go)" indicates the direction of an action, with "<b>来</b>" (<b>lái</b>) indicating the direction towards the speaker and "<b>去</b> (<b>qù</b>)" the direction away from the speaker. </p>
	<ul><li>The most frequently used verbs include:<br/> 
		<b>上 shàng</b>: up, above<br/>
		<b>下 xià</b>: down<br/>
		<b>进 jìn</b>: enter, come/go in<br/>
		<b>出 chū</b>: come/go out<br/>
		<b>回 huí</b>: come/go back, return<br/>
		<b>过 guò</b>: pass (time), spend (time)<br/>
		<b>起 qǐ</b>: get up, rise, start</li>
	<li>as well as some verbs we've learned, such as<br/> 
		<b>买 mǎi</b>: buy, purchase<br/>
		<b>带 dài</b>: take along, bring<br/>
		<b>搬 bān</b>: move, carry</li>
	</ul>
	<p>For example:</p>
	<ol>
		<li><span class="xhanD">我们在楼上等你呢，你<b>上来</b>吧。(说话的人在楼上)</span>
			<br><span class="pynD">Wǒmen zài lóu shàng děng nǐ ne, nǐ <b>shànglái</b> ba. (<i>Shuōhuà de rén zài lóu shàng</i>)</span>
			<br><span class="engD">We'll wait for you upstairs, come on up.(<i>The speaker is upstairs</i>)</span></li>
		<li><span class="xhanD">谁在外边？你<b>出去</b>看看吧。("你" 在屋里)</span>
			<br><span class="pynD">Shéi zài wàibiān? Nǐ <b>chūqù</b> kàn kàn ba.(<i>"Nǐ" zài wū li</i>)</span>
			<br><span class="engD">Who's outside? You go out and have a look. (<i>"You" is in the house</i>)</span></li>
		<li><span class="xhanD">汉语书你<b>带来</b>了吗？</span>
			<br><span class="pynD">Hànyǔ shū nǐ <b>dàilái</b> le ma?</span>
			<br><span class="engD">Have you brought the Chinese book?</span></li>
		<li><span class="xhanD">那边树多，我们<b>过去</b>坐一下吧。</span>
			<br><span class="pynD">Nà biān shù duō, wǒmen <b>guòqù</b> zuò yīxià ba.</span>
			<br><span class="engD">There are many trees over there, let's go sit down.</span></li>
	</ol>
	<p>If the object is a place, it should precede "<b>来/去</b> (<b>lái/qù</b>)". For example:</p>
	<ol start="5">
		<li><span class="xhanD">小狗<b>下</b>楼<b>来</b>吃东西。</span>
			<br><span class="pynD">Xiǎo gǒu <b>xià</b> lóu <b>lái</b> chī dōngxī.</span>
			<br><span class="engD">The puppy came downstairs to eat.</span></li>
		<li><span class="xhanD">老师进教室来上课。</span>
			<br><span class="pynD">Lǎoshī jìn jiàoshì <b>lái</b> shàngkè.</span>
			<br><span class="engD">The teacher came into the classroom for class.</span></li>
		<li><span class="xhanD">朋友<b>回</b>家<b>去</b>了。</span>
			<br><span class="pynD">Péngyǒu <b>huí</b> jiā <b>qù</b>le</span>
			<br><span class="engD">The friends went home</span></li>
		<li><span class="xhanD">我<b>上</b>楼<b>去</b>。</span>
			<br><span class="pynD">Wǒ <b>shàng</b> lóu <b>qù</b>.</span>
			<br><span class="engD">I'll go upstairs.</span></li>
	</ol>
	<p>If the object is a thing, it can be put before or after "<b>来/去</b> (<b>lái/qù</b>)". For example:</p>
	<ol start="9">
		<li><span class="xhanD">明天要<b>带</b>作业<b>来</b>。</span>
			<br><span class="pynD">Míngtiān yào <b>dài</b> zuòyè <b>lái</b>.</span>
			<br><span class="engD">Bring your homework tomorrow.</span></li>
		<li><span class="xhanD">帮我<b>买来</b>点儿面包。</span>
			<br><span class="pynD">Bāng wǒ <b>mǎi lái</b> diǎnr miànbāo.</span>
			<br><span class="engD">Help me to buy some bread.</span></li>
		<li><span class="xhanD">你搬<b>这</b>把椅子<b>去</b>吧。</span>
			<br><span class="pynD">Nǐ <b>bān</b> zhè bǎ yǐzi <b>qù</b> ba.</span>
			<br><span class="engD">You take this chair.</span></li>
		<li><span class="xhanD">这次旅游，我想<b>带去</b>这本书。</span>
			<br><span class="pynD">Zhè cì lǚyóu, wǒ xiǎng <b>dàiqù</b> zhè běn shū.</span>
			<br><span class="engD">I'd like to take this book with me on this trip.</span></li>
	</ol>
	<p><b>练一练&nbsp;(Liàn yī liàn)&nbsp;Practise</b></p>
	<p>完成句子&nbsp;(Wánchéng jùzi)&nbsp;Complete the sentences</p>
	<ol>
		<li><span class="xhanD">你怎么还没_____？我都在楼下等你半小时了。</span><br/>
			<span class="pynD">Nǐ zěnme hái méi_____? Wǒ dōu zài lóu xià děng nǐ bàn xiǎoshíle.</span><br/>
			<span class="engD">Why haven't you _____? I've been waiting for you for half an hour downstairs.</span></li>
		<li><span class="xhanD">已经10点半了，快点儿_____，别睡了。</span><br/>
			<span class="pynD">Yǐjīng 10 diǎn bànle, kuài diǎnr_____, bié shuìle.</span><br/>
			<span class="engD">It's already 10:30, hurry up _____, don't sleep.</span></li>
		<li><span class="xhanD">明天去朋友家，我想______一些水果。</span><br/>
			<span class="pynD">Míngtiān qù péngyǒu jiā, wǒ xiǎng ______ yīxiē shuǐguǒ.</span><br/>
			<span class="engD">Go to my friend's house tomorrow, I want ______ some fruit.</span></li>
	</ol>

	<div id="n2" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">2. The Successive Occurence of Two Actions.</h4>
	<p>In Chinese, "<b>V ，了。。。就 (jiù) V2。。。</b>" can be used to indicate two actions which occur successively, with the second immediately following the first. For example:</p>
	<ol>
		<li><span class="xhanD">我下<b>了</b>课<b>就</b>吃饭。</span><br/>
			<span class="pynD">Wǒ xià<b>le</b> kè <b>jiù</b> chīfàn.</span><br/>
			<span class="engD">I'll eat after class.</span></li>
		<li><span class="xhanD">妈妈起<b>了</b>床<b>就</b>做早饭。</span><br/>
			<span class="pynD">Māmā qǐ<b>le</b> chuáng <b>jiù</b> zuò zǎofàn.</span><br/>
			<span class="engD">Mother got up and made breakfast.</span></li>
		<li><span class="xhanD">小刚拿<b>了</b>伞<b>就</b>下来。</span><br/>
			<span class="pynD">Xiǎogāng ná<b>le</b> sǎn <b>jiù</b> xià lái.</span><br/>
			<span class="engD">Xiǎogāng took the umbrella and came down.</span></li>
		<li><span class="xhanD">你每天晚上吃<b>了</b>饭<b>就</b>睡觉。</span><br/>
			<span class="pynD">Nǐ měitiān wǎnshàng chī<b>le</b> fàn <b>jiù</b> shuìjiào.</span><br/>
			<span class="engD">You go to bed every night after dinner.</span></li>
	</ol>	
	<p>In a sentence with two subjects, the second subject should be put right before "<b>就</b>" (<b>jiù</b>). For example:</p>
	<ol start="5">
		<li><span class="xhanD">你下<b>了</b>课我们<b>就</b>去书店。</span><br/>
			<span class="pynD">Nǐ xià<b>le</b> kè wǒmen <b>jiù</b> qù shūdiàn.</span><br/>
			<span class="engD">We'll go to the bookstore after your class.</span></li>
		<li><span class="xhanD">老师进<b>了</b>教室我们<b>就</b>对她说"生日快乐"</span><br/>
			<span class="pynD">Lǎoshī jìn<b>le</b> jiàoshì wǒmen <b>jiù</b> duì tā shuō "shēngrì kuàilè"</span><br/>
			<span class="engD">The teacher entered the classroom and we said "Happy Birthday" to her.</span></li>
		<li><span class="xhanD">爸爸回来<b>了</b>我们<b>就</b>吃饭。</span><br/>
			<span class="pynD">Bàba huílái<b>le</b> wǒmen <b>jiù</b> chīfàn.</span><br/>
			<span class="engD">We'll eat when Dad comes back.</span></li>
		<li><span class="xhanD">他到<b>了</b>办公室我<b>就</b>告诉他。</span><br/>
			<span class="pynD">Tā dào<b>le</b> bàngōngshì wǒ <b>jiù</b> gàosù tā.</span><br/>
			<span class="engD">I'll tell him when he's in the office.</span></li>
	</ol>
	<p><b>练一练&nbsp;(Liàn yī liàn)&nbsp;Practise</b></p>
	<p>完成句子&nbsp;(Wánchéng jùzi)&nbsp;Complete the dialogues</p>
	<ol>
		<li><span class="xhanD"><b>A</b>: 你什么时候给妈妈打电话?</span><br/>
			<span class="pynD"><b>A</b>: Nǐ shénme shíhòu gěi māmā dǎ diànhuà?</span><br/>
			<span class="engD"><b>A</b>: When are you going to call mom?</span><br/>
			<span class="xhanD"><b>B</b>: 我打算____。(吃晚饭)</span><br/>
			<span class="pynD"><b>B</b>: Wǒ dǎsuàn ____ .(Chī wǎnfàn)</span><br/>
			<span class="engD"><b>B</b>: I'm plannning to ____. (have dinner)</span></li>
		<li><span class="xhanD"><b>A</b>: 你怎么____？(到家、睡觉)</span><br/>
			<span class="pynD"><b>A</b>: Nǐ zěnme ____ ？(dàojiā, shuìjiào)</span><br/>
			<span class="engD"><b>A</b>: How do you ____? (home, sleep)</span><br/>
			<span class="xhanD"><b>B</b>: 我太累了。</span><br/>
			<span class="pynD"><b>B</b>: Wǒ tài lèile</span><br/>
			<span class="engD"><b>B</b>: I'm so tired.</span></li>
		<li><span class="xhanD"><b>A</b>: 你什么时候走?</span><br/>
			<span class="pynD"><b>A</b>: Nǐ shénme shíhòu zǒu?</span><br/>
			<span class="engD"><b>A</b>: When are you leaving?</span><br/>
			<span class="xhanD"><b>B</b>: 他来了 ____ 。</span><br/>
			<span class="pynD"><b>B</b>: Tā láile ____ .</span><br/>
			<span class="engD"><b>B</b>: He came</span></li>
	</ol>
	<div id="n3" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">3. The Rhetoric Question "<b>能。。。吗?</b> " （<b>Néng... Ma?</b>）</h4>
	<p>"<b>能。。。吗?</b> " （<b>Néng... Ma?</b>） is used in a rhetorical question in Chinese, with its positive form meaning the negative and the negative form meaning the positive. For example:</p>
	<ol>
		<li><span class="xhanD"><span><b>A</b>: 为什么我的汉语学得不好?</span><br/>
			<span class="pynD"><span><b>A</b>: Wèishéme wǒ de Hànyǔ xué dé bù hǎo?<br/>
			<span class="engD"><span><b>A</b>: Why do I not learn Chinese well?<br/>
			<span class="xhanD"><span><b>B</b>: 你不做作业，也不练习，能学好<b>吗</b>?(不能学好)</span><br/>
			<span class="pynD"><span><b>B</b>: Nǐ bù zuò zuòyè, yě bù liànxí, <b>néng</b> xuéhǎo <b>ma</b>? (Bùnéng xuéhǎo)</span><br/>
			<span class="engD"><span><b>B</b>: You do not do homework, also you do not practice, can you learn? (Can't learn)</span></li>
		<li><span class="xhanD"><span><b>A</b>: 你看我这么胖，怎么办呢?</span><br/>
			<span class="pynD"><span><b>A</b>: Nǐ kàn wǒ zhème pàng, zěnme bàn ne?</span><br/>
			<span class="engD"><span><b>A</b>: You see how fat I am? What am I to do?</span><br/>
			<span class="xhanD"><span><b>B</b>: 你每天晚上吃了饭就睡觉，也不出去走走，能不胖<b>吗</b>?(会胖)</span><br/>
			<span class="pynD"><span><b>B</b>: Nǐ měitiān wǎnshàng chīle fàn jiù shuìjiào, yě bù chūqù zǒuzǒu, <b>néng</b> bù pàng <b>ma</b>? (Huì pàng)</span><br/>
			<span class="engD"><span><b>B</b>: You go to bed every night after dinner, also you don't go out to walk. How can you not be fat? (Will be fat)</span></li>
	</ol>
	<p><b>练一练&nbsp;(Liàn yī liàn)&nbsp;Practise</b></p>
	<p>完成句子&nbsp;(Wánchéng jùzi)&nbsp;Complete the dialogues</p>
	<ol>
		<li><span class="xhanD"><b>A</b>: 我怎么这么累啊?</span><br/>
			<span class="pynD"><b>A</b>: Wǒ zěnme zhème lèi a?</span><br/>
			<span class="engD"><b>A</b>: How can I be so tired?</span><br/>
			<span class="xhanD"><b>B</b>: 你今天爬山爬得那么快，____？<span><br/>
			<span class="pynD"><b>B</b>: Nǐ jīntiān páshān pá dé nàme kuài,____ ?</span><br/>
			<span class="engD"><b>B</b>: You climb so fast today, </span></li>
		<li><span class="xhanD"><b>A</b>: 我病了，头疼。____?</span><br/>
			<span class="pynD"><b>A</b>: Wǒ bìngle, tóuténg.</span><br/>
			<span class="engD"><b>A</b>: I am sick and have a headache.</span><br/>
			<span class="xhanD"><b>B</b>: 天气这么冷，你穿得这么少，____？</span><br/>
			<span class="pynD"><b>B</b>: Tiānqì zhème lěng, nǐ chuān dé zhème shǎo, ____ ?</span><br/>
			<span class="engD"><b>B</b>: The weather is so cold, you wear so little, ____?</span></li>
		<li><span class="xhanD"><b>A</b>: 你怎么打篮球打得这么好?</span><br/>
			<span class="pynD"><b>A</b>: Nǐ zěnme dǎ lánqiú dǎ dé zhème hǎo?</span><br/>
			<span class="engD"><b>A</b>: How do you play basketball so well?</span><br/>
			<span class="xhanD"><b>B</b>: 我每天都练习，____ </span><br/>
			<span class="pynD"><b>B</b>: Wǒ měitiān dōu liànxí，____ ？</span><br/>
			<span class="engD"><b>B</b>: I practice every day.</span></li>
	</ol>
</div>
<div id="ex" class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<div class="container-fluid">
	<h3 class="sublesson">练习 (liàn xí) Exercises</h3>
	<h4 id="ex1" class="textSection">1. 朗读下列短语和句子<br/>Lǎngdú xiàliè duǎnyǔ hé jùzi<br/>Read the following phrases and sentences aloud.</h4>
	<audio controls="" preload="metadata" id="03-02-5"><source src="../mandarin/audio/03-02-5.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col">
		<b>容易</b>: 很<b>容易</b>／不<b>容易</b>／<b>容易</b>写／上山<b>容易</b>下山难。
			<button type="button" id="n11x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g11x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn11x"><b>Róngyì</b>: Hěn <b>róngyì</b>／bù <b>róngyì</b>／<b>róngyì</b> xiě／shàngshān <b>róngyì</b> xiàshān nán.<br/></span>
		<span class="eng" id="eng11x">Easy: Very easy／hard／easy to write／uphill easy to get down.<br/></span>
		<br/>
		<b>楼</b>: <b>楼</b>上／下<b>楼</b>／上<b>楼</b>吃饭／我上<b>楼</b>去给你拿把伞。
			<button type="button" id="n12x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g12x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn12x"><b>Lóu</b>: <b>Lóu</b>shàng／xià<b>lóu</b>／shàng<b>lóu</b> chīfàn／wǒ shàng<b>lóu</b> qù gěi nǐ ná bǎ sǎn.<br/></span>
		<span class="eng" id="eng12x">Floor: upstairs / downstairs / upstairs to eat / I go upstairs to get you an umbrella.
<br/></span>
		<br/>
		<b>瘦</b>: 很<b>瘦</b>／不<b>瘦</b>／有点儿<b>瘦</b>／你一点儿也没<b>瘦</b>。
			<button type="button" id="n13x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g13x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn13x"><b>Shòu</b>: Hěn <b>shòu</b>／bù <b>shòu</b>／yǒudiǎnr <b>shòu</b>／nǐ yīdiǎnr yě méi <b>shòu</b>.<br/></span>
		<span class="eng" id="eng13x">Thin: very thin／not thin／a little thin／you are not thin at all.<br/></span>
		<br/>
		<b>疼</b>: 很<b>疼</b>／不<b>疼</b>／腿<b>疼</b>／我现在腿也<b>疼</b>，脚也疼。
			<button type="button" id="n14x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g14x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn14x"><b>Téng</b>: Hěn <b>téng</b>／bù <b>téng</b>／tuǐ <b>téng</b>／wǒ xiànzài tuǐ yě <b>téng</b>, jiǎo yě <b>téng</b>.<br/></span>
		<span class="eng" id="eng14x">Pain: It hurts/does not hurt/my leg aches/my legs ache now, my feet ache too.<br/></span>
		<br/>
		<b>拿</b>: <b>拿</b>钱／<b>拿</b>伞／<b>拿</b>书／我<b>拿</b>了伞就下来。
			<button type="button" id="n15x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g15x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn15x"><b>Ná</b>: <b>Ná</b> qián／<b>ná</b> sǎn／<b>ná</b> shū／wǒ <b>ná</b>le sǎn jiù xiàlái<br/></span>
		<span class="eng" id="eng15x">Take: Take the money／take the umbrella／take the book／I took my umbrella and came down.<br/></span>
		<br/>
	</div>
	<div class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 id="ex2" class="textSection">2. 选择 恰当 的 词语 填空<br/>Xuǎnzé qiàdàng de cíyǔ tiánkòng<br/>Choose the proper words to fill in the blanks.</h4>
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="xhanD"><td>楼</td><td>办公室</td><td>树</td><td>胖</td><td>难</td></tr>
			<tr class="pynD"><td>lóu</td><td>bàngōngshì</td><td>shù</td><td>pàng</td><td>nán</td></tr>
			<tr class="engD"><td>floor</td><td>office</td><td>tree</td><td>fat</td><td>difficult</td></tr>
		</table>
		<ol>
			<li><span class="xhanD">这是你的____吗？真大!</span><br/>
				<span class="pynD">Zhè shì nǐ de ____ ma? Zhēn dà!</span><br/>
				<span class="engD">Is this your ____? How big!</span></li>
			<li><span class="xhanD">今天的考试一点儿也不____。</span><br/>
				<span class="pynD">Jīntiān de kǎoshì yīdiǎnr yě bù ____ .</span><br/>
				<span class="engD">Today's exam is not a bit ____ .</span></li>
			<li><span class="xhanD">我在505教室上课，我现在要上____去。</span><br/>
				<span class="pynD">Wǒ zài 505 jiàoshì shàngkè, wǒ xiànzài yào shàng ____ qù.</span><br/>
				<span class="engD">I am in class 505, I now want to go ____ .</span></li>
			<li><span class="xhanD">你看，小狗在____下做什么呢?</span><br/>
				<span class="pynD">Nǐ kàn, xiǎo gǒu zài ____ xià zuò shénme ne?</span><br/>
				<span class="engD">Look, what do dogs do under the ____?</span></li>
			<li><span class="xhanD">我太____了，不能吃那么多饭。</span><br/>
				<span class="pynD">Wǒ tài ____ le, bùnéng chī nàme duō fàn.</span><br/>
				<span class="engD">I am too ____, I shouldn't eat so much rice.</span></li>
		</ol>
		<div class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="xhanD"><td>辆</td><td>腿</td><td>把</td><td>经理</td><td>其实</td></tr>
			<tr class="pynD"><td>liàng</td><td>tuǐ</td><td>bǎ</td><td>jīnglǐ</td><td>qíshí</td></tr>
			<tr class="engD"><td>car</td><td>legs</td><td>the</td><td>manager</td><td>actually</td></tr>
		</table>
		<ol start="6">
			<li>
				<span class="xhanD"><b>A</b>: 你真爱看书，买了这么多!</span><br/>
				<span class="pynD"><b>A</b>: Nǐ zhēn'ài kànshū, mǎile zhème duō!</span><br/>
				<span class="engD"><b>A</b>: You really love to read and buy so much!</span><br/>
				<span class="xhanD"><b>B</b>: ____ 我一点儿也不喜欢看书，这是给我弟弟买的。</span><br/>
				<span class="pynD">____ wǒ yīdiǎnr yě bù xǐhuān kànshū, zhè shì gěi wǒ dìdì mǎi de.</span><br/>
				<span class="engD">____ I do not like reading at all, this is for my brother.</span>
			</li>
			<li>
				<span class="xhanD"><b>A</b>: 我想买这____车。</span><br/>
				<span class="pynD"><b>A</b>: Wǒ xiǎng mǎi zhè ____ chē.</span><br/>
				<span class="engD"><b>A</b>: I want to buy this ____ car.</span><br/>
				<span class="xhanD"><b>B</b>: 太贵了，你有那么多钱吗?</span><br/>
				<span class="pynD"><b>B</b>: Tài guìle, nǐ yǒu nàme duō qián ma?</span><br/>
				<span class="engD"><b>B</b>: Too expensive, do you have so much money?</span>
			</li>
			<li>
				<span class="xhanD"><b>A</b>: 下雨了!我没带伞，怎么办?</span><br/>
				<span class="pynD"><b>A</b>: Xià yǔle! Wǒ méi dài sǎn, zěnme bàn?</span><br/>
				<span class="engD"><b>A</b>: It's raining! I did not bring an umbrella, what should I do?</span><br/>
				<span class="xhanD"><b>B</b>: 去商店买 ____ 吧。</span><br/>
				<span class="pynD"><b>B</b>: Qù shāngdiàn mǎi ____ ba</span><br/>
				<span class="engD"><b>B</b>: Go to the store and buy ____.</span>
			</li>
			<li>
				<span class="xhanD"><b>A</b>: 昨天走路走得太多了，左边这条____有点儿疼。</span><br/>
				<span class="pynD"><b>A</b>: Zuótiān zǒulù zǒu dé tài duōle, zuǒbiān zhè tiáo ____ yǒudiǎnr téng.</span><br/>
				<span class="engD"><b>A</b>: I walked too much yesterday. This ____ in the left is a little sore.</span><br/>
				<span class="xhanD"><b>B</b>: 那你今天别出去了。</span><br/>
				<span class="pynD"><b>B</b>: Nà nǐ jīntiān bié chūqùle.</span><br/>
				<span class="engD"><b>B</b>: So don't go out today.</span>
			</li>
			<li>
				<span class="xhanD"><b>A</b>: ____，我今天想早一点儿回家，可以吗?</span><br/>
				<span class="pynD"><b>A</b>: ____, wǒ jīntiān xiǎng zǎo yīdiǎn er huí jiā, kěyǐ ma?</span><br/>
				<span class="engD"><b>A</b>: ____, I want to go home earlier today, may I?</span><br/>
				<span class="xhanD"><b>B</b>: 今天不行，今天有很多工作要做。</span><br/>
				<span class="pynD"><b>B</b>: Jīntiān bùxíng, jīntiān yǒu hěnduō gōngzuò yào zuò.</span><br/>
				<span class="engD"><b>B</b>: Not today, there is a lot of work to be done today.</span>
			</li>
		</ol>
	</div>
	</div>
	<div id="ex3" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">3. 用本课新学的语言点和词语描述图片<br/>Yòng běn kè xīn xué de yǔyán diǎn hé cíyǔ miáoshù túpiàn<br/>Describe the pictures using the newly-learned language points and words</h4>
	<div class="col-xs-12 col">
	<p class="indent"><span class="xhanD"><b>A</b>: 周经理真忙!他到了办公室就 ____ 。</span><br/>
		<span class="pynD"><b>A</b>: Zhōu jīnglǐ zhēn máng! Tā dàole bàngōngshì jiù ____ 。</span><br/>
		<span class="xhanD"><b>B</b>: 那么多工作，他能 ____ 吗?</span><br/>
		<span class="pynD"><b>B</b>: Nàme duō gōngzuò, tā néng ____ ma?</span><br/>
		<span class="xhanD"><b>A</b>: 他回家以后也工作吗?</span><br/>
		<span class="pynD"><b>A</b>: Tā huí jiā yǐhòu yě gōngzuò ma?</span><br/>
		<span class="xhanD"><b>B</b>: 不，他 ____ 坑 ____ 。</span><br/>
		<span class="pynD"><b>B</b>: Bù, tā ____ kēng ____ .</span></p>
	<p class="indent"><span class="xhanD"><b>A</b>: 哥哥去哪儿了?</span><br/>
		<span class="pynD"><b>A</b>: Gēgē qù nǎr le?</span><br/>
		<span class="xhanD"><b>B</b>: 他 ____ 买水果了。</span><br/>
		<span class="pynD"><b>B</b>: Tā ____ mǎi shuǐguǒle.</span><br/>
		<span class="xhanD"><b>A</b>: 他什么时候回未?</span><br/>
		<span class="pynD"><b>A</b>: Tā shénme shíhòu huí wèi?</span><br/>
		<span class="xhanD"><b>B</b>: 他 ____ 就回来。</span><br/>
		<span class="pynD"><b>B</b>: Tā ____ jiù huílái.</span></p>
	<p class="indent"><span class="xhanD"><b>A</b>: 电影就要开始了，你怎么还不 ____ ?</span><br/>
		<span class="pynD"><b>A</b>: Diànyǐng jiù yào kāishǐle, nǐ zěnme hái bù ____ ?</span><br/>
		<span class="xhanD"><b>B</b>: 我在外边等朋友呢，他未了 ____ 。</span><br/>
		<span class="pynD"><b>B</b>: Wǒ zài wàibian děng péngyǒu ne, tā wèile ____ .</span><br/>
		<span class="xhanD"><b>A</b>: 我进去等你们。</span><br/>
		<span class="pynD"><b>A</b>: Wǒ jìnqù děng nǐmen.</span><br/>
		<span class="xhanD"><b>B</b>: 行。</span><br/>
		<span class="pynD"><b>B</b>: Xíng.</span></p>
	<p class="indent"><span class="xhanD"><b>A</b>: 你 ____ 做什么?</span><br/>
		<span class="pynD"><b>A</b>: Nǐ ____ zuò shénme?</span><br/>
		<span class="xhanD"><b>B</b>: 我去运动。</span><br/>
		<span class="pynD"><b>B</b>: Wǒ qù yùndòng.</span><br/>
		<span class="xhanD"><b>A</b>: 你现在没以前那么胖了。</span><br/>
		<span class="pynD"><b>A</b>: Nǐ xiànzài méi yǐqián nàme pàngle.</span><br/>
		<span class="xhanD"><b>B</b>: 我现在每天都运动，能 ____ ?</span><br/>
		<span class="pynD"><b>B</b>: Wǒ xiànzài měitiān dū yùndòng, néng ____ ?</span></p>
	</div>
	<div class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 id="ex4" class="textSection">4. 根据 课文 回答 问题<br/>Gēnjù kèwén huídá wèntí<br/>Answer the questions according to the texts.</h4>
	<div class="container-fluid col-xs-12 col-md-6 col">
		<ol>
			<li>
		<span class="xhanD">小丽现在怎么了?</span>
			<button type="button" id="n321" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g321" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn321">XiǎoLì xiànzài zěnmele?<br/></span>
		<span class="eng" id="eng321">What happened to Xiaoli now?<br/></span>
			</li>
			<li>
		<span class="xhanD">周经理去哪儿了？什么时候回未?</span>
			<button type="button" id="n322" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g322" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn322">Zhōu jīnglǐ qù nǎrle? Shénme shíhòu huí wèi?<br/></span>
		<span class="eng" id="eng322">Where's manager Zhou? When did he get back?<br/></span>
			</li>
			<li>
		<span class="xhanD">小丽怎么回去?</span>
			<button type="button" id="n323" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g323" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn323">XiǎoLì zěnme huíqù?<br/></span>
		<span class="eng" id="eng323">How does Xiao Li get back?<br/></span>
			</li>
			<li>
		<span class="xhanD">小刚上楼去做什么?</span>
			<button type="button" id="n324" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g324" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn324">XiǎoGāng shàng lóu qù zuò shénme?<br/></span>
		<span class="eng" id="eng324">What's Xiao Gang doing upstairs?<br/></span>
			</li>
			<li>
		<span class="xhanD">周太太为什么这么胖?</span>
			<button type="button" id="n325" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g325" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn325">Zhōu tàitài wèishéme zhème pàng?<br/></span>
		<span class="eng" id="eng325">Why is Mrs. Zhou so fat?<br/></span>
			</li>
			<li>
		<span class="xhanD">周太太每天做运动吗?</span>
			<button type="button" id="n326" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g326" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn326">Zhōu tàitài měitiān zuò yùndòng ma?<br/></span>
		<span class="eng" id="eng326">Does Mrs. Zhou exercise every day?<br/></span>
			</li>
		</ol>
	</div>
</div>
<div id="ch" class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<div class="container-fluid">
	<div class="col-xs-12">
	<h3>汉字 (Hànzì) Characters</h3>
	<h4 class="textSection">旧字新词&nbsp;(Jiù zì xīn cí)&nbsp;Word Game: Old Words From New Words</h4>
	<div class="gameDiv">
	<table class="table table-centered">
		<tr><td><b>办公</b>室</td><td></td><td>大<b>楼</b></td></tr>
		<tr><td><b>bàngōng</b>shì</td><td></td><td>dà<b>lóu</b></td></tr>
		<tr><td></td><td><b>办公楼</b></td><td></td></tr>
		<tr><td></td><td><b>bàngōnglóu</b></td><td></td></tr>
	</table>
	</div>
	<div class="gameDiv">
	<table class="table table-centered">
		<tr><td><b>外</b>边</td><td></td><td><b>出</b>去</td></tr>
		<tr><td><b>wài</b>bian</td><td></td><td><b>chū</b>qù</td></tr>
		<tr><td></td><td><b>外出</b></td><td></td></tr>
		<tr><td></td><td><b>wàichū</b></td><td></td></tr>
	</table>
	</div>
	<div class="gameDiv">
	<table class="table table-centered">
		<tr><td>中<b>午</b></td><td></td><td>睡<b>觉</b></td></tr>
		<tr><td>zhōng<b>wǔ</b></td><td></td><td>shuì<b>jiào</b></td></tr>
		<tr><td></td><td><b>午觉</b></td><td></td></tr>
		<tr><td></td><td><b>wǔjiào</b></td><td></td></tr>
	</table>
	</div>
	</div>
</div>
<div id="ap" class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<div class="container-fluid">
	<div class="col-xs-12">
	<h3>运用 (yùnyòng) Application</h3>
	<h4 class="sublesson">1. Pair Work</h4>
	<p>Work in pairs. One says a sentence using a simple complement of direction, and the other acts accordingly. Then switch the roles.</p>
	<p>
		<b>例如:</b><br/>
		<b>Lìrú:</b><br/>
	<ul>
		<li>
			出去，进来<br/>
			<span class="pynD">Chūqù, jìnlái</span><br/>
			<span class="engD">Go out, come in.</span>
		</li>
		<li>
			出门去，进教室来<br/>
			<span class="pynD">Chūmén qù, jìn jiàoshì lái</span><br/>
			<span class="engD">Go out, come into the classroom.</span>
		</li>
		<li>
			下楼去，上楼来<br/>
			<span class="pynD">Xià lóu qù, shàng lóu lái</span><br/>
			<span class="engD">Go downstairs，Come upstairs.</span>
		</li>
	</ul>
	</p>
	<h4 class="sublesson">2. Group Work</h4>
	<p>Work in groups of 3-4. Talk about who is the busiest in your family. Ask one member to report the results to the whole class</p>
	<p>
		<b>例如:</b><br/>
		<b>Lìrú:</b><br/>
	<ul>
		<li>
			A: 你们家谁最忙?<br/>
			<span class="pynD">A: Nǐmen jiā shéi zuì máng?</span><br/>
			B: 我们家我最忙。<br/>
			<span class="pynD">B: Wǒmen jiā wǒ zuì máng.</span>
		</li>
		<li>
			A: 你每天做什么事?<br/>
			<span class="pynD">A: Nǐ měitiān zuò shénme shì?</span></br>
			B: 我每天早上起了床就吃吃了饭就去上课...<br/>
			<span class="pynD">B: Wǒ měitiān zǎoshang qǐle chuáng jiù chī chīle fàn jiù qù shàngkè...</span>
		</li>
	</ul>
	</p>
	<p>
		<table class="">
			<tr><th></th><th>谁是忙<br/>shéi shì máng</th><th>做什么<br/>zuò shénme</th></tr>
			<tr><td>1</td><td>我</td><td>起床，吃早仗，去上垛<br/>qǐchuáng, chī zǎofàn, qù shàngkè</td></tr>
			<tr><td>2</td><td></td><td></td></tr>
			<tr><td>3</td><td></td><td></td></tr>
			<tr><td>4</td><td></td><td></td></tr>
		</table>
	</p>
	</div>
</div>
<div id="cs" class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<div class="container-fluid">
	<div class="col-xs-12">
	<h3>俗语 (súyǔ) Common Saying</h3>
	<h4 class="textSection">饭后百步走，活到九十九<br/>Fàn hòu bǎi bù zǒu, huódào jiǔshíjiǔ<br/>Hundred paces after dinner, live to ninety-nine</h4>
	<p>The literal meaning of the saying "<b>饭后百步走，活到九十九</b>" (<b>Fàn hòu bǎi bù zǒu, huódào jiǔshíjiǔ</b>) is that a walk of 100 steps after each meal every day makes one live to 99 years old. Now it means it is good for health to do some exercise after a meal.</p>
	</div>
</div>
<div class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<?php
} else { header( 'Location: https://www.stephenmccready.asia/mi/index.php'); }
?>
</body>
</html>
