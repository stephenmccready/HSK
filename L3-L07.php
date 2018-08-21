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
	<title>Level 3 - 7</title>
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
	<div class="jumbotron lessonHeaderLeft">Dì qī kè<br/>第七课<br/>Lesson 7</div>
	<div class="lessonHeaderRight"><h2>Wǒ gēn tā dōu rènshì wǔ nián le<br/>我跟她都认识五年了<br/><b>I've known her for five years</b></h2></div>
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
	<a class="btn btn-info btn-md" href="L3-E07.php" target="_blank">Workbook</a></p></div>
<div class="container-fluid">
	<h4 class="textSection">Kè wén yī. Zài bàngōngshì.<br/>课文一。在办公室。<br/>Text 1. In the office.<br/>
	<audio controls="" preload="metadata" id="03-07-1"><source src="../mandarin/audio/03-07-1.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<p><b>同事: </b>那个漂亮的新同事是谁?&nbsp;<button type="button" id="n11" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn11"><b>Tóngshì: </b>Nàgè piàoliang de xīn tóngshì shì shéi?</span></p>
		<p><b>小刚: </b>那是小丽。&nbsp;<button type="button" id="n12" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn12"><b>Xiǎogāng: </b>Nà shì Xiǎolì.</span></p>
		<p><b>同事: </b>她刚来北京吗?&nbsp;<button type="button" id="n13" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn13"><b>Tóngshì: </b>Tā gāng lái Běijīng ma?</span></p>
		<p><b>小刚: </b>不，她在北京工作三年了。&nbsp;<button type="button" id="n14" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn14"><b>Xiǎogāng: </b>Bù, tā zài Běijīng gōngzuò sān nián le.</span></p>
		<p><b>同事: </b>以前她在哪儿工作?&nbsp;<button type="button" id="n15" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn15"><b>Tóngshì: </b>Yǐqián tā zài nǎr gōngzuò?</span></p>
		<p><b>小刚: </b>她在银行工作了两年以后来的我们公司。&nbsp;<button type="button" id="n16" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn16"><b>Xiǎogāng: </b>Tā zài yínháng gōngzuòle liǎng nián yǐhòu lái de wǒmen gōngsī.</span></p>
	</div>
	<div class="col-xs-12 col-md-6 col"> 
		<b>Colleague: </b>Who is that beautiful new colleague?<br/>
		<b>Xiaogang: </b>That's Xiaoli.<br/>
		<b>Colleague: </b>Has she just come to Beijing?<br/>
		<b>Xiaogang: </b>No, she has been working in Beijing for three years.<br/>
		<b>Colleague: </b>Where did she work before?<br/>
		<b>Xiaogang: </b>She came to our company after two years of working in a bank.<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>生词 (Shēngcí) New Words</i></th></tr>
			<tr><td>同事</td><td>tóngshì</td><td>n</td><td>colleague</td></tr>
			<tr><td>以前</td><td>yǐqián</td><td>n</td><td>before, ago</td></tr>
			<tr><td>银行</td><td>yínháng</td><td>n</td><td>bank</td></tr>
		</table>
		</div>
	</div>
	<div id="2" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">Kè wén èr.  Zài xiūxí shì.<br/>课文二。在休息室。<br/>Text 2. In the lounge.<br/>
	<audio controls="" preload="metadata" id="03-07-2"><source src="../mandarin/audio/03-07-2.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<p><b>同事: </b>周末你跟小丽去哪儿玩儿了?&nbsp;<button type="button" id="n21" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn21"><b>Tóngshì: </b>Zhōumò nǐ gēn xiǎo lì qù nǎr wán erle?</span></p>
		<p><b>小刚: </b>我们去唱歌了。&nbsp;<button type="button" id="n22" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn22"><b>Xiǎogāng: </b>Wǒmen qù chànggēle.</span></p>
		<p><b>同事: </b>你们唱了多久?&nbsp;<button type="button" id="n23" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn23"><b>Tóngshì: </b>Nǐmen chàngle duōjiǔ?</span></p>
		<p><b>小刚: </b>我们唱了两个小时歌，晚上还去听音乐会了。&nbsp;<button type="button" id="n24" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn24"><b>Xiǎogāng: </b>Wǒmen chàngle liǎng gè xiǎoshí gē, wǎnshàng hái qù tīng yīnyuèhuì le.</span></p>
		<p><b>同事: </b>你们都对音乐感兴趣吗?&nbsp;<button type="button" id="n25" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn25"><b>Tóngshì: </b>Nǐmen dōu duì yīnyuè gǎn xìngqù ma?</span></p>
		<p><b>小刚: </b>她对音乐感兴趣，我对她更感兴趣。&nbsp;<button type="button" id="n26" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn26"><b>Xiǎogāng: </b>Tā duì yīnyuè gǎn xìngqù, wǒ duì tā gèng gǎn xìngqù.</span></p>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<b>Colleague: </b>Where did you go with XiaoLi this weekend?<br/>
		<b>Xiaogang: </b>We went to sing.<br/>
		<b>Colleague: </b>How long did you sing?<br/>
		<b>Xiaogang: </b>We sang for two hours and went to the concert at night.<br/>
		<b>Colleague: </b>Are you both interested in music?<br/>
		<b>Xiaogang: </b>She is interested in music and I am interested in her.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>生词 (Shēngcí) New Words</i></th></tr>
			<tr><td>久</td><td>jiǔ</td><td>adj</td><td>for a long time, long</td></tr>
			<tr><td>感兴趣</td><td>gǎn xìngqù</td><td colspan="2">to be interested in</td></tr>
		</table>
		</div>
	</div>
	<div id="3" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">Kè wén sān. Zài xiūxí shì.<br/>课文三。在休息室。<br/>Text 3. In the lounge.<br/>
	<audio controls="" preload="metadata" id="03-07-3"><source src="../mandarin/audio/03-07-3.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<p><b>小刚: </b>我跟小丽下个月结婚，到时候欢迎你来。&nbsp;<button type="button" id="n31" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn31"><b>Xiǎogāng: </b>Wǒ gēn xiǎo lì xià gè yuè jiéhūn, dào shíhòu huānyíng nǐ lái.</span></p>
		<p><b>同事: </b>什么? 结昏?&nbsp;<button type="button" id="n32" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn32"><b>Tóngshì: </b>Shénme? Jiéhūn?</span></p>
		<p><b>小刚: </b>对啊，突然吗?&nbsp;<button type="button" id="n33" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn33"><b>Xiǎogāng: </b>Duì a, túrán ma?</span></p>
		<p><b>同事: </b>你们不是刚认识吗?&nbsp;<button type="button" id="n34" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn34"><b>Tóngshì: </b>Nǐmen bùshì gāng rènshì ma?</span></p>
		<p><b>小刚: </b>我跟她都认识五年了。&nbsp;<button type="button" id="n35" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn35"><b>Xiǎogāng: </b>Wǒ gēn tā dōu rènshì wǔ niánle.</span></p>
		<p><b>同事: </b>你跟她结婚，那我怎么办啊?&nbsp;<button type="button" id="n36" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn36"><b>Tóngshì: </b>Nǐ gēn tā jié hūn, nà wǒ zěnme bàn a?</span></p>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<b>Xiaogang: </b>I will marry Xiaoli next month, then you are welcome to come.<br/>
		<b>Colleague: </b>What?<br/>
		<b>Xiaogang: </b>Yes, so sudden?<br/>
		<b>Colleague: </b>Didn't you just meet?<br/>
		<b>Xiaogang: </b>I've known her for five years.<br/>
		<b>Colleague: </b>You marry her, then what should I do?<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>生词 (Shēngcí) New Words</i></th></tr>
			<tr><td>结婚</td><td>jié hūn</td><td>v</td><td>to marry, to get married</td></tr>
			<tr><td>欢迎</td><td>huānyíng</td><td>v</td><td>to welcome</td></tr>
		</table>
		</div>
	</div>
	<div id="4" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">Kè wén sì. Zài gōngsī ménkǒu.<br/>课文四。 在公司门口。<br/>Text 4. At the exit of the office building.<br/>
	<audio controls="" preload="metadata" id="03-07-4"><source src="../mandarin/audio/03-07-4.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<p><b>小丽: </b>你看看手表，怎么迟到了?&nbsp;<button type="button" id="n41" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn41"><b>Xiǎolì: </b>Nǐ kànkàn shǒubiǎo, zěnme chídào le?</span></p>
		<p><b>小刚: </b>没迟到啊。&nbsp;<button type="button" id="n42" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn42"><b>Xiǎogāng: </b>Méi chídào a.</span></p>
		<p><b>小丽: </b>你不是说七点半来接我吗? 你迟到了一刻钟。&nbsp;<button type="button" id="n43" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn43"><b>Xiǎolì: </b>Nǐ bù shì shuō qī diǎn bàn lái jiē wǒ ma? Nǐ chídàole yī kè zhōng.</span></p>
		<p><b>小刚: </b>现在不是七点半吗?&nbsp;<button type="button" id="n44" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn44"><b>Xiǎogāng: </b>Xiànzài bù shì qī diǎn bàn ma?</span></p>
		<p><b>小丽: </b>已经差一刻八点了! 我都在这儿坐了半个小时了。&nbsp;<button type="button" id="n45" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn45"><b>Xiǎolì: </b>Yǐjīng chà yī kè bā diǎn le! Wǒ dū zài zhèr zuòle bàn gè xiǎoshí le.</span></p>
		<p><b>小刚: </b>不是我迟到了， 是你的表快了一刻钟。&nbsp;<button type="button" id="n46" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn46"><b>Xiǎogāng: </b>Bù shì wǒ chídào le, shì nǐ de biǎo kuàile yī kè zhōng.</span></p><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<b>Xiaoli: </b>Look at your watch, why are you late?<br/>
		<b>Xiaogang: </b>I'm not late.<br/>
		<b>Xiaoli: </b>Didn't you say you didn't pick me up 7:30? You are a quarter of an hour late.<br/>
		<b>Xiaogang: </b>Isn't it 7:30?<br/>
		<b>Xiaoli: </b>It's a quarter to eight! I've been sitting here for half an hour.<br/>
		<b>Xiaogang: </b>It's not that I'm late, it's your watch. It's a quarter of an hour fast.<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>生词 (Shēngcí) New Words</i></th></tr>
			<tr><td>迟到</td><td>chídào</td><td>v</td><td>to be late</td></tr>
			<tr><td>半</td><td>bàn</td><td>num</td><td>half</td></tr>
			<tr><td>接</td><td>jiē</td><td>v</td><td>to meet (sb.), to pick up (sb.)</td></tr>
			<tr><td>刻</td><td>kè</td><td>mw</td><td>quarter</td></tr>
			<tr><td>差</td><td>chà</td><td>v</td><td>to fall short of</td></tr>
		</table>
		</div>
	</div>
</div>
<div id="n1" class="dash"><a href="#0"> Back to top</a></div>
<div class="container-fluid">
	<h3 class="sublesson">汪释 (wāng shì) Notes</h3>
	<h4 class="textSection">1. 时段的表达<br/>Shíduàn de biǎodá.<br/>To Express a Period of Time</h4>
	<p>A period of time refers to the length of time that an action or a state lasts, usually indicated by a complement of duration, such as<br/>
	一刻钟 yīkè zhōng  (a quarter)<br/> 
	半个小时 bàn gè xiǎoshí (half an hour) <br/> 
	两天 liǎng tiān (two days)<br/> 
	三个月 sān gè yuè (three months)<br/> 
	"<b>S + V + 了 + Duration + O</b>" indicates the duration of an action. For example:</p>	
	<p><b>练一练 (liàn yī liàn) Practise</b></p>
	<p>完成句子 (Wánchéng jùzi) Complete the sentences</p>
	<ol>
		<li>她工作了三年。<br/><span class="pynD">Tā gōngzuòle sān nián.</span></li>
		<li>我们坐了一个小时公共汽车。<br/><span class="pynD">Wǒmen zuòle yīgè xiǎoshí gōnggòng qìchē.</span></li>
		<li>你怎么晚到了一刻钟?<br/><span class="pynD">Nǐ zěnme wǎn dàole yīkè zhōng?</span></li>
		<li>我们唱了两个小时歌。<br/><span class="pynD">Wǒmen chàngle liǎng gè xiǎoshí gē.</span></li>
	</ol>
	<p>"<b>S + V +了 + Duration + O +了</b>" indicates the duration of an action which is still going on.<br/>
	For example, "<b>看了一个小时书了</b>" (kànle yīgè xiǎoshí shūle) means one has already read for an hour and is still reading. For example:</p>
	<ol start="5">
		<li>我学习了一年汉语了。<br/><span class="pynD">Wǒ xuéxí le yī nián Hànyǔ le.</span></li>
		<li>她看了半个小时电视了。<br/><span class="pynD">Tā kàn le bàn gè xiǎoshí diànshì le.</span></li>
		<li>他们游了二十分钟泳了。<br/><span class="pynD">Tāmen yóu le èrshí fēnzhōng yǒng le.</span></li>
		<li>我都在这儿坐了半个小时了。<br/><span class="pynD">Wǒ dū zài zhèr zuòle bàn gè xiǎoshí le.</span></li>
	</ol>
	<p><b>练一练 (liàn yī liàn) Practise</b></p>
	<p>完成句子 (Wánchéng jùzi) Complete the dialogues</p>
	<ol>
		<li>A: 你学了多长时间汉语了?<br/><span class="pynD">Nǐ xuéle duō cháng shíjiān Hànyǔ le?</span><br/>
			B: ________ .</li>
		<li>A: ________ .<br/>
			B: 我在这个地方住了十年了。&nbsp;<span class="pynD">Wǒ zài zhège dìfāng zhùle shí niánle.</span></li>
		<li>A: 小王还没来，你等了他多长时间? &nbsp;<span class="pynD">Xiǎowáng hái méi lái, nǐ děng le tā duō cháng shíjiān?</span><br/>
			B: ________ .</li>
	</ol>
	<div id="n2" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">2. 表达兴趣<br/>Biǎodá xìngqù<br/>To Express an Interest</h4>
	<p>In Chinese, one can use<br/>"<b>对。。。感兴趣</b> (duì ... gǎn xìngqù)"<br/>or<br/>(<b>对。。。有兴趣</b> duì... yǒu xìngqù）<br/>to express an interest in something. The negative form is <br/>"<b>对。。。不感兴趣</b>" (duì ... bùgǎn xìngqù)<br/>or<br/>"<b>对。。。没(有)兴趣</b>" (duì... méi (yǒu) xìngqù).<br/>The adverb of degree should be put before "<b>感兴趣</b>" or "<b>有兴趣</b>" if there is any, eg:<br/> "<b>很感兴趣</b>" (hěn gǎn xìngqù)<br/>"<b>非常有兴趣</b>" (fēicháng yǒu xìngqù).<br/>For example:</p>
	<ol>
		<li>他们对电影感兴趣。<br/><span class="pynD">Tāmen duì diànyǐng gǎn xìngqù.</span></li>
		<li>我儿子对打篮球不感兴趣。<br/><span class="pynD">Wǒ érzi duì dǎ lánqiú bùgǎn xìngqù.</span></li>
		<li>同学们对汉语有兴趣。你们都对音乐感兴趣吗?<br/><span class="pynD">Tóngxuémen duì hànyǔ yǒu xìngqù. Nǐmen dōu duì yīnyuè gǎn xìngqù ma?</span></li>
		<li>我对她史感兴趣。<br/><span class="pynD">Wǒ duì tā shǐ gǎn xìngqù.</span></li>
	</ol>
	<p><b>练一练 (liàn yī liàn) Practise</b></p>
	<p>完成句子 (Wánchéng jùzi) Complete the dialogues</p>
	<ol>
		<li>A: 你对什么运动感兴趣?。 &nbsp;<span class="pynD">Nǐ duì shénme yùndòng gǎn xìngqù?</span><br/>
			B: ________ .</li>
		<li>A: 你喜欢汉语吗?。 &nbsp;<span class="pynD">Nǐ xǐhuān Hànyǔ ma?</span><br/>
			B: ________ .</li>
		<li>A: ________ .<br/>
			B: 我不喜欢听音乐。 &nbsp;<span class="pynD">Wǒ bù xǐhuān tīng yīnyuè.</span></li>
	</ol>
	<div id="n3" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">3. To Indicate Time Using "<b>半</b>" (bàn), "<b>刻</b>" (kè) or "<b>差</b>" (chà)</h4>
	<div class="clock col col-xs-6 col-md-3"><span class="time">1:30</span><br/>一点半<br/><span class="pynD">yīdiǎn bàn</span></div>
	<div class="clock col col-xs-6 col-md-3"><span class="time">12:15</span><br/>十二点一刻<br/><span class="pynD">shí'èr diǎn yī kè</span></div>
	<div class="clock col col-xs-6 col-md-3"><span class="time">12:45</span><br/>十二点三刻<br/><span class="pynD">shí'èr diǎn sān kè</span><br/>or<br/>差一刻一点<br/><span class="pynD">chà yīkè yīdiǎn</span></div>
	<div class="clock col col-xs-6 col-md-3"><span class="time">11:55</span><br/>差五分十二点<br/><span class="pynD">chà wǔ fēn shí'èr diǎn</span></div>
	<div class="clearfix"></div>
	<p><b>练一练 (liàn yī liàn) Practise</b></p>
	<p>Say the following time using "<b>半</b>" (<b>bàn</b>: half), "<b>刻</b>" (<b>kè</b>: quarter) or "<b>差</b>" (<b>chà</b>: to fall short of)</p>
	<ol>
		<li>10:30<br/>十点半<br/><span class="pynD">shí diǎn bàn</span></li>
		<li>12:45<br/>十二点三刻<br/><span class="pynD">shí'èr diǎn sān kè</span><br/>or<br/>差一刻一点<br/><span class="pynD">chà yīkè yīdiǎn</span></li>
		<li>11:59<br/>差一分十二点<br/><span class="pynD">chà yī fēn shí'èr diǎn</span></li>
	</ol>
</div>
<div id="ex1" class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<div class="container-fluid">
	<h3 class="sublesson">练习 (liàn xí) Exercises</h3>
	<h4 class="textSection">1. 朗读 下列 短语 和 句子<br/>Lǎngdú xiàliè duǎnyǔ hé jùzi<br/>Read the following phrases and sentences aloud.
	<audio controls="" preload="metadata" id="03-07-5"><source src="../mandarin/audio/03-07-5.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col">
		<p><b>以前</b>: 工作<b>以前</b> / 两年<b>以前</b> / <b>以前</b>的事 / <b>以前</b>她在哪儿工作?
			<button type="button" id="n51x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g51x" onclick="myToggle(this.id);">英语</button>
		<span class="pyn" id="pyn51x"><b>yǐqián</b>: gōngzuò <b>yǐqián</b>/ liǎng nián <b>yǐqián</b> / <b>yǐqián</b> de shì / <b>yǐqián</b> tā zài nǎr gōngzuò?<br/></span>
		<span class="eng" id="eng51x">before, ago: before work / two years ago / <b> before </b> / Where did she work before?<br/></span></p>
		<p><b>久</b>: 不<b>久</b> / 很<b>久</b> / 好<b>久</b>不见 / 你们唱了多<b>久</b>?
			<button type="button" id="n52x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g52x" onclick="myToggle(this.id);">英语</button>
		<span class="pyn" id="pyn52x"><b>jiǔ</b>: bù <b>jiǔ</b> / hěn <b>jiǔ</b> / hǎo <b>jiǔ</b> bùjiàn / nǐmen chàngle duō <b>jiǔ</b>?<br/></span>
		<span class="eng" id="eng52x">long: soon / very long /long time no see / How long have you been singing?<br/></span></p>
		<p><b>结婚</b>: <b>结婚</b>了 / 没<b>结婚</b> / 下个月<b>结婚</b> / 我跟小丽下个月<b>结婚</b>。
			<button type="button" id="n53x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g53x" onclick="myToggle(this.id);">英语</button>
		<span class="pyn" id="pyn53x"><b>jiéhūn</b>: <b>jiéhūn</b> le / méi <b>jiéhūn</b> / xià gè yuè <b>jiéhūn</b> / wǒ gēn xiǎo lì xià gè yuè <b>jiéhūn</b>.<br/></span>
		<span class="eng" id="eng53x">Marry: Get married / Not married / get married next month / I'll marry Xiaoli next month.<br/></span></p>
		<p><b>迟到</b>: <b>迟到</b>了 / 别<b>迟到</b> /<b>迟到</b>五分钟 / (你)怎么<b>迟到</b>了?
			<button type="button" id="n54x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g54x" onclick="myToggle(this.id);">英语</button>
		<span class="pyn" id="pyn54x"><b>chídào</b>: <B>chídào</b> le / bié <b>chídào</b> / <b>chídào</b> wǔ fēnzhōng / (nǐ) zěnme <b>chídào </b>le?<br/></span>
		<span class="eng" id="eng54x">Late: Late / Don't be late / late five minutes / (you) how late?<br/></span></p>
		<p><b>刻</b>: 一<b>刻</b>钟 / 七点一<b>刻</b> / 八点三<b>刻</b> / 你迟到了一<b>刻</b>钟。
			<button type="button" id="n55x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g55x" onclick="myToggle(this.id);">英语</button>
		<span class="pyn" id="pyn55x"><b>kè</b>: yī <b>kè</b> zhōng / qī diǎn yī <b>kè</b> / bā diǎn sān <b>kè</b> / nǐ chídàole yī <b>kè</b> zhōng.<br/></span>
		<span class="eng" id="eng55x">quarter: quarter of an hour / 7:15 / 8:45 / you are late by a quarter of an hour.<br/></span></p>
	</div>
	<div id="ex2" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">2. 选择 恰当 的 词语 填空<br/>Xuǎnzé qiàdàng de cíyǔ tiánkòng<br/>Choose the proper words to fill in the blanks.</h4>
	<div class="col-xs-12 col">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="xhanD"><td>以前</td><td>同事</td><td>兴趣</td><td>欢迎</td><td>差</td></tr>
			<tr class="pynD"><td>yǐqián</td><td>tóngshì</td><td>xìngqù</td><td>huānyíng</td><td>chà</td></tr>
			<tr class="engD"><td>before, ago</td><td>colleague</td><td>interest</td><td>to welcome</td><td>to fall short of</td></tr>
		</table>
		<ol>
			<li><span class="xhanD">小明每天都听歌，对音乐有 _____ 。</span><br/>
				<span class="pynD">Xiǎomíng měitiān dū tīng gē, duì yīnyuè yǒu _____ .</span></li>
			<li><span class="xhanD">我给你介绍一下，这是我的 _____ 小王。</span><br/>
				<span class="pynD">Wǒ gěi nǐ jièshào yīxià, zhè shì wǒ de _____ Xiǎo wáng.</span></li>
			<li><span class="xhanD">_____ 你来我家玩儿。</span><br/>
				<span class="pynD">_____ nǐ lái wǒ jiā wán er.</span></li>
			<li><span class="xhanD">我是 _____ 寸分八点到公司的。</span><br/>
				<span class="pynD">Wǒ shì _____ cùnfēn bā diǎn dào gōngsī de.</span></li>
			<li><span class="xhanD">未中国 _____ ，我学了一年汉语。</span><br/>
				<span class="pynD">Wèi zhòng guó _____ , wǒ xuéle yī nián Hànyǔ.</span></li>
		</ol>
	</div>
	<div class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<div class="col-xs-12 col">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="xhanD"><td>银行</td><td>结婚</td><td>迟到</td><td>接</td><td>半</td></tr>
			<tr class="pynD"><td>yínháng</td><td>jiéhūn</td><td>chídào</td><td>jiē</td><td>bàn</td></tr>
			<tr class="engD"><td>bank</td><td>to marry</td><td>to be late</td><td>to meet, to pick up</td><td>half</td></tr>
		</table>
		<ol start="6">
			<li>
				<span class="xhanD">A: 你今天怎么 _____ 了?</span><br/>
				<span class="pynD">A: Nǐ jīntiān zěnme _____ le?</span><br/>
				<span class="xhanD">B: 对不起，我起晚了。</span><br/>
				<span class="pynD">B: Duìbùqǐ, wǒ qǐ wǎnle.</span>
			</li>
			<li>
				<span class="xhanD">A: 你现在要去哪儿?</span><br/>
				<span class="pynD">A: Nǐ xiànzài yào qù nǎr?</span><br/>
				<span class="xhanD">B: 我去机场 _____ 个朋友。</span><br/>
				<span class="pynD">B: Wǒ qù jīchǎng _____ gè péngyǒu.</span>
			</li>
			<li>
				<span class="xhanD">A: 比赛什么时候开始?</span><br/>
				<span class="pynD">A: Bǐsài shénme shíhòu kāishǐ?</span><br/>
				<span class="xhanD">B: 十点 _____ 。</span><br/>
				<span class="pynD">B: Shí diǎn _____ .</span>
			</li>
			<li>
				<span class="xhanD">A: 请问，哪儿有 _____ ?</span><br/>
				<span class="pynD">A: Qǐngwèn, nǎ'er yǒu _____ ?</span><br/>
				<span class="xhanD">B: 一直往前走，超市的旁边。</span><br/>
				<span class="pynD">B: Yīzhí wǎng qián zǒu, chāoshì de pángbiān.</span>
			</li>
			<li>
				<span class="xhanD">A: 下个月我们就要 _____ 了。</span><br/>
				<span class="pynD">A: Xià gè yuè wǒmen jiù yào _____ le.</span><br/>
				<span class="xhanD">B: 什么? 你们不是刚认识吗?</span><br/>
				<span class="pynD">B: Shénme? Nǐmen bùshì gāng rènshì ma?</span>
			</li>
		</ol>
	</div>
	<div id="ex3" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">3. 用本课新学的语言点和词语描述图片<br/>Yòng běn kè xīn xué de yǔyán diǎn hé cíyǔ miáoshù túpiàn<br/>Describe the pictures using the newly-learned language points and words</h4>
	<div class="col-xs-12 col">
	<ul>
		<li><b>A</b>: 都 _____ 了，快去睡觉吧。<br/>
			<span class="pynD"><b>A</b>Dōu _____ le, kuài qù shuìjiào ba.</span><br/>
			<b>B</b>: 我再玩儿十分钟。<br/>
			<span class="pynD"><b>B</b>: Wǒ zài wán er shí fēnzhōng.</span><br/>
			<b>A</b>: 你已经玩儿了好几个小时了，不累吗?<br/>
			<span class="pynD"><b>A</b>Nǐ yǐjīng wán erle hǎojǐ gè xiǎoshí le, bù lèi ma?</span><br/>
			<b>B</b>: 我 _____ 特别感兴趣，一点儿也不累。<br/>
			<span class="pynD"><b>B</b>: Wǒ _____ tèbié gǎn xìngqù, yīdiǎn er yě bù lèi.</span><br/></li>
		<li><b>A</b>: 你一直在这家公司工作吗?<br/>
			<span class="pynD"><b>A</b>Nǐ yīzhí zài zhè jiā gōngsī gōngzuò ma?</span><br/>
			<b>B</b>: 对，我已经 _____ 。<br/>
			<span class="pynD"><b>B</b>: Duì, wǒ yǐjīng _____ .</span><br/>
			<b>A</b>: 你 _____ ？<br/>
			<span class="pynD"><b>A</b>Nǐ _____ ?</span><br/>
			<b>B</b>: 我特别喜欢我的工作。<br/>
			<span class="pynD"><b>B</b>: Wǒ tèbié xǐhuān wǒ de gōngzuò.</span><br/></li>
		<li><b>A</b>: 喂，你在哪儿呢?<br/>
			<span class="pynD"><b>A</b>Wèi, nǐ zài nǎr ne?</span><br/>
			<b>B</b>: 我可能会晚 _____ 。<br/>
			<span class="pynD"><b>B</b>: Wǒ kěnéng huì wǎn _____ .</span><br/>
			<b>A</b>: 快，点儿吧，我已经等了 _____ 。<br/>
			<span class="pynD"><b>A</b>Kuài, diǎn er ba, wǒ yǐjīng děngle _____ .</span><br/>
			<b>B</b>: 好，你别着急，我快到了。<br/>
			<span class="pynD"><b>B</b>: Hǎo, nǐ bié zhāojí, wǒ kuài dàole.</span><br/></li>
		<li><b>A</b>: 你们结婚 _____ ？<br/>
			<span class="pynD"><b>A</b>Nǐmen jiéhūn _____ ?</span><br/>
			<b>B</b>: 快50 年了。<br/>
			<span class="pynD"><b>B</b>: Kuài 50 niánle.</span><br/>
			<b>A</b>: 你们身体怎么这么好?<br/>
			<span class="pynD"><b>A</b>Nǐmen shēntǐ zěnme zhème hǎo?</span><br/>
			<b>B</b>: 我们都对 _____ 。<br/>
			<span class="pynD"><b>B</b>: Wǒmen dōu duì _____ .</span><br/></li>
	</ul>
	</div>
	<div id="ex4" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">4. 根据 课文 回答 问题<br/>Gēnjù kèwén huídá wèntí<br/>Answer the questions according to the texts.</h4>
	<div class="col-xs-12 col">
		<ol>
			<li>
		<span class="xhanD">小丽以前在哪儿工作? 工作了多长时间?</span><br/>
			<button type="button" id="n751x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g751x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn751x">Xiǎolì yǐqián zài nǎr gōngzuò? Gōngzuòle duō cháng shíjiān?<br/></span>
		<span class="eng" id="eng751x">Where did Xiaoli work before? How long has it been working?<br/></span>
			</li>
			<li>
		<span class="xhanD">小刚和小丽周未做什么了? 做了多长时间?</span><br/>
			<button type="button" id="n752x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g752x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn752x">Xiǎogāng hé Xiǎolì zhōu wèi zuò shénmele? Zuòle duō cháng shíjiān?<br/></span>
		<span class="eng" id="eng752x">What did Xiǎogāng and Xiǎolì do this week? How long did it take?<br/></span>
			</li>
			<li>
		<span class="xhanD">小丽对什么很感兴趣? 小刚呢?</span><br/>
			<button type="button" id="n753x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g753x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn753x">Xiǎolì duì shénme hěn gǎn xìngqù? Xiǎogāng ne?<br/></span>
		<span class="eng" id="eng753x">What is Xiaoli interested in? What about Xiaogang?<br/></span>
			</li>
			<li>
		<span class="xhanD">小刚和小丽什么时候结婚?</span><br/>
			<button type="button" id="n754x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g754x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn754x">Xiǎogāng hé Xiǎolì shénme shíhòu jiéhūn?<br/></span>
		<span class="eng" id="eng754x">When will Xiaogang and Xiaoli get married?<br/></span>
			</li>
			<li>
		<span class="xhanD">同事为什么觉得小刚结婚很突然?</span><br/>
			<button type="button" id="n755x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g755x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn755x">Tóngshì wèishéme juédé Xiǎogāng jiéhūn hěn túrán?<br/></span>
		<span class="eng" id="eng755x">Why does his co-worker think they are suddenly getting married?<br/></span>
			</li>
			<li>
		<span class="xhanD">小刚迟到了吗? 为什么?</span><br/>
			<button type="button" id="n756x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g756x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn756x">Xiǎogāng chídàole ma? Wèishéme?<br/></span>
		<span class="eng" id="eng756x">Is Xiaogang late? Why?<br/></span>
			</li>
		</ol>
	</div>
</div>

<div id="ch" class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<div class="container-fluid">
	<div class="col-xs-12">
	<h3>字 (Zì) Characters</h3>
	<h4 class="textSection">旧字新词&nbsp;(Jiù zì xīn cí)&nbsp;Word Game: Old Words From New Words</h4>
	<div class="gameDiv">
	<table class="table table-centered">
		<tr><td><b>以</b>前</td><td></td><td><b>后</b>边</td></tr>
		<tr><td><b>yǐ</b>qián</td><td></td><td><b>hòu</b>biān</td></tr>
		<tr><td></td><td><b>以后</b></td><td></td></tr>
		<tr><td></td><td><b>yǐhòu</b></td><td></td></tr>
	</table>
	</div>
	<div class="gameDiv">
	<table class="table table-centered">
		<tr><td><b>到</b></td><td></td><td><b>时侯</b></td></tr>
		<tr><td><b>dào</b></td><td></td><td><b>shí hóu</b></td></tr>
		<tr><td></td><td><b>到时侯</b></td><td></td></tr>
		<tr><td></td><td><b>dào shí hóu</b></td><td></td></tr>
	</table>
	</div>
	<div class="gameDiv">
	<table class="table table-centered">
		<tr><td><b>欢迎</b></td><td></td><td><b>接</b></td></tr>
		<tr><td><b>huānyíng</b></td><td></td><td><b>jiē</b></td></tr>
		<tr><td></td><td><b>欢迎接</b></td><td></td></tr>
		<tr><td></td><td><b>huānyíng jiē</b></td><td></td></tr>
	</table>
	</div>
	</div>
</div>
<div id="ap" class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<div class="container-fluid">
	<div class="col-xs-12">
	<h3>运用 (yùnyòng) Application</h3>
	<h4 class="textSection">1. Pair Work</h4>
	<p>Work in pairs. Tell your partner what interests and hobbies you have, when you started to have those interests and hobbies and how long you've had them. Your partner is supposed to take notes.
<br/>例如: 我对游泳很感兴趣，我是5 岁学会游泳的，到现在已经游了20年了。<br/>
<span class="pynD">Lìrú: Wǒ duì yóuyǒng hěn gǎn xìngqù, wǒ shì 5 suì xuéhuì yóuyǒng de, dào xiànzài yǐjīng yóule 20 niánle.</span></p>
	<table class="table  table-centered table-condensed table-responsive">
		<tr><th>兴趣爱好<br/><span class="pynD">Xìngqù àihào</span></th>
			<th>从什么时候开始<br/><span class="pynD">Cóng shénme shíhòu kāishǐ</span></th>
			<th>到现在多长时间了<br/><span class="pynD">Dào xiànzài duō cháng shíjiānle</span></th></tr>
		<tr><td>蒋永<br/><span class="pynD"></span></td>
			<td>5 字<br/><span class="pynD"></span></td>
			<td>20年<br/><span class="pynD"></span></td></tr>
		<tr><td><br/><span class="pynD"> &nbsp;</span></td>
			<td><br/><span class="pynD"></span></td>
			<td><br/><span class="pynD"></span></td></tr>
		<tr><td><br/><span class="pynD"> &nbsp;</span></td>
			<td><br/><span class="pynD"></span></td>
			<td><br/><span class="pynD"></span></td></tr>
	</table>
	<h4 class="sublesson">2. Group Work</h4>
	<p>Work in groups of 3-4. Make a weekly plan for learning Chinese, making clear about what to do every day, when to do them, how much time to be spent on them, how to rest, and how long to rest, etc. Ask one member to report the results to the whole class. Then choose the most effective plan for learning Chinese.</p>
	</div>
</div>
<div id="cs" class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<div class="container-fluid">
	<div class="col-xs-12">
	<h3>俗语 (súyǔ) Common Saying</h3>
	<h4 class="textSection"><b>一步走错步步错</b><br/>Yī bù zǒucuò bùbù cuò.<br/>One wrong move makes all moves wrong</h4>
	<p><b>一步走错步步错</b> (yī bù zǒucuò bùbù cuò) means that in a chess game one wrong move will make all the moves after it wrong . In the metaphorical sense it indicates if we've made a wrong decision, then every decision following it would be wrong. This saying tells us to be prudent when doing something so as to avoid mistakes..</p>
	</div>
</div>
<div class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<?php
} else { header( 'Location: https://www.stephenmccready.asia/mi/index.php'); }
?>
</body>
</html>
