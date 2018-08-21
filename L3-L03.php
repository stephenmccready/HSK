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
	<title>Level 3 - 3</title>
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
	<div class="jumbotron lessonHeaderLeft">Dì sān kè<br/>第三课<br/>Lesson 3</div>
	<div class="lessonHeaderRight"><h2>Zhuōzi shàng fàngzhe hěnduō yǐnliào<br/>桌子上放着很多饮料<br/><b>There are plenty of drinks on the table</b></h2></div>
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
	<a class="btn btn-info btn-md" href="L3-E03.php" target="_blank">Workbook</a></p></div>
<div class="container-fluid">
	<h4 class="textSection">Kè wén yī. Zài Xiǎolì jiā.<br/>课文一。 在小丽家。<br/>Text 1. At Xiaoli‘s home.<br/>
	<audio controls="" preload="metadata" id="03-03-1"><source src="../mandarin/audio/03-03-1.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<b>小刚: </b>明天是晴天还是阴天？&nbsp;<button type="button" id="n11" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn11"><b>Xiǎogāng: </b>Míngtiān shì qíngtiān háishì yīn tiān.</span><br/>
		<b>小丽: </b>阴天，电视上说多云。怎么了？有事？&nbsp;<button type="button" id="n12" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn12"><b>Xiǎolì: </b>Yīntiān, diànshì shàng shuō duōyún. Zěnmele? Yǒu shì?</span><br/>
		<b>小刚: </b>没事， 我们明天要去爬山。&nbsp;<button type="button" id="n13" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn13"><b>Xiǎogāng: </b>Méi shì, wǒmen míngtiān yào qù pá shān.</span><br/>
		<b>小丽: </b>爬山的时候要小心，点儿。&nbsp;<button type="button" id="n14" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn14"><b>Xiǎolì: </b>Pá shān de shíhòu yào xiǎoxīn, diǎnr.</span><br/>
		<b>小刚: </b>好，你也去吗？&nbsp;<button type="button" id="n15" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn15"><b>Xiǎogāng: </b>Hǎo, nǐ yě qù ma?</span><br/>
		<b>小丽: </b>我不去，我有事。&nbsp;<button type="button" id="n16" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn16"><b>Xiǎolì: </b>Wǒ bù qù, wǒ yǒushì.</span><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<b>Xiǎogāng: </b>Will it be sunny or cloudy tomorrow?<br/>
		<b>Xiǎolì: </b>Cloudy, the TV says it's cloudy. What's wrong? Anything?<br/>
		<b>Xiǎogāng: </b>Nothing, we're going to climb the mountain tomorrow.<br/>
		<b>Xiǎolì: </b>Be careful when you climb the mountain.<br/>
		<b>Xiǎogāng: </b>Well, are you going too?<br/>
		<b>Xiǎolì: </b>I'm not going. I have something else to do.
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>生词 (Shēngcí) New Words</i></th></tr>
			<tr><td>还是</td><td>háishì</td><td>cnj.</td><td>or</td></tr>
			<tr><td>爬山</td><td>páshān</td><td>v.</td><td>to climb a<br/>mountain</td></tr>
			<tr><td>小心</td><td>xiǎoxīn</td><td>adj.</td><td>careful</td></tr>
		</table>
		</div>
	</div>
	<div id="2" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">Kè wén èr.  Zài shāngchǎng.<br/>课文二。 在商场。<br/>Text 2. In a mall.<br/>
	<audio controls="" preload="metadata" id="03-03-2"><source src="../mandarin/audio/03-03-2.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<b>周太太: </b>你觉得这条裤子怎么样？&nbsp;<button type="button" id="n21" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn21"><b>Zhōu tàitài: </b>Nǐ juédé zhè tiáo kùzi zěnmeyàng?</span><br/>
		<b>周明: </b>我记得你已经有两条这样的裤子了。&nbsp;<button type="button" id="n22" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn22"><b>Zhōu Míng: </b>Wǒ jìdé nǐ yǐjīng yǒu liǎng tiáo zhèyàng de kùzi le.</span><br/>
		<b>周太太: </b>那我们再看看别的。&nbsp;<button type="button" id="n23" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn23"><b>Zhōu tàitài: </b>Nà wǒmen zài kànkàn biéde.</span><br/>
		<b>周明: </b>这件衬衫怎么样？&nbsp;<button type="button" id="n24" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn24"><b>Zhōu Míng: </b>Zhè jiàn chènshān zěnmeyàng?.</span><br/>
		<b>周太太: </b>还不错，多少钱？&nbsp;<button type="button" id="n25" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn25"><b>Zhōu tàitài: </b>Hái bùcuò, duōshǎo qián?</span><br/>
		<b>周明: </b>这上面写着320元。&nbsp;<button type="button" id="n26" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn26"><b>Zhōu Míng: </b>Zhè shàngmiàn xiězhe sān bái èrshí yuán.</span><br/>
		<b>周太太: </b>买一件。&nbsp;<button type="button" id="n27" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn27"><b>Zhōu tàitài: </b>Mǎi yī jiàn.</span><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<b>Mrs. Zhou: </b>How do you like this pair of pants?<br/>
		<b>Zhou Ming: </b>I remember you already have two pairs of these pants.<br/>
		<b>Mrs. Zhou: </b>Let's look at something else.<br/>
		<b>Zhou Ming: </b>How about this shirt?<br/>
		<b>Mrs. Zhou: </b>It says 320 yuan.<br/>
		<b>Zhou Ming: </b>Buy one.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>生词 (Shēngcí) New Words</i></th></tr>
			<tr><td>条</td><td>tiáo</td><td>mw</td><td><i>used for pants,<br/>dresses, etc.</i></td></tr>
			<tr><td>裤子</td><td>kùzi</td><td>n</td><td>pants</td></tr>
			<tr><td>记得</td><td>jìdé</td><td>v</td><td>to remember</td></tr>
			<tr><td>衬衫</td><td>chènshān</td><td>n</td><td>shirt</td></tr>
			<tr><td>元</td><td>yuán</td><td>mw</td><td><i>unit of money</i></td></tr>
		</table>
		</div>
	</div>
	<div id="3" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">Kè wén sān. Zài shuǐguǒ diàn.<br/>课文三。在水果店。<br/>Text 3. In a fruit store.<br/>
		<audio controls="" preload="metadata" id="03-03-3"><source src="../mandarin/audio/03-03-3.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<b>周太太: </b>这些水果真新鲜，我们买西瓜还是苹果？&nbsp;<button type="button" id="n31" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn31"><b>Zhōu tàitài: </b>Zhèxiē shuǐguǒ zhēn xīnxiān, wǒmen mǎi xīguā háishì píngguǒ?</span><br/>
		<b>周明: </b>西瓜吧。你看，这上面写着 "西瓜不甜不要钱"。&nbsp;<button type="button" id="n32" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn32"><b>Zhōu Míng: </b>Xīguā ba. Nǐ kàn, zhè shàngmiàn xiězhe "xīguā bù tián bù yào qián".</span><br/>
		<b>周太太: </b>那我们买一个大点儿的吧。&nbsp;<button type="button" id="n33" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn33"><b>Zhōu tàitài: </b>Nà wǒmen mǎi yīgè dà diǎn er de ba.</span><br/>
		<b>周明: </b>再买几个苹果。&nbsp;<button type="button" id="n34" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn34"><b>Zhōu Míng: </b>Zài mǎi jǐ gè píngguǒ.</span><br/>
		<b>周太太: </b>好啊，今天晚上只吃水果不吃饭!&nbsp;<button type="button" id="n35" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn35"><b>Zhōu tàitài: </b>Hǎo a, jīntiān wǎnshàng zhǐ chī shuǐguǒ bù chī fàn!</span><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<b>Mrs. Zhou: </b>These fruits are really fresh. Shall we buy watermelon or apple?<br/>
		<b>Zhou Ming: </b>Watermelon. Look, it says, "If watermelon is not sweet, you don't pay."<br/>
		<b>Mrs. Zhou: </b>Let's buy a bigger one.<br/>
		<b>Zhou Ming: </b>Buy a few more apples.<br/>
		<b>Mrs. Zhou: </b>OK, Just eat fruit and not eat tonight!<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>生词 (Shēngcí) New Words</i></th></tr>
			<tr><td>新鲜</td><td>xīnxiān</td><td>adj.</td><td>fresh</td></tr>
			<tr><td>甜</td><td>tián</td><td>adj.</td><td>sweet</td></tr>
			<tr><td>只</td><td>zhǐ</td><td>adv.</td><td>only, solely</td></tr>
		</table>
		</div>
	</div>
	<div id="4" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">Kè wén sì. Zài xiūxí shì.<br/>课文四。在休息室。<br/>Text 4. In the lounge.<br/>
	<audio controls="" preload="metadata" id="03-03-4"><source src="../mandarin/audio/03-03-4.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<b>小丽: </b>桌子上放着很多饮料，你喝什么？&nbsp;<button type="button" id="n41" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn41"><b>Xiǎolì: </b>Zhuōzi shàng fàngzhe hěn duō yǐnliào, nǐ hē shénme?</span><br/>
		<b>小刚: </b>茶或者咖啡都可以。你呢? 你喝什么？&nbsp;<button type="button" id="n42" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn42"><b>Xiǎogāng: </b>Chá huòzhě kāfēi dōu kěyǐ. Nǐ ne? Nǐ hē shénme?</span><br/>
		<b>小丽: </b>我喝茶，茶是我的最爱。天冷了或者工作累了的时候，喝杯热茶会很舒服。&nbsp;<button type="button" id="n43" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn43"><b>Xiǎolì: </b>Wǒ hē chá, chá shì wǒ de zuì ài. Tiān lěngle huòzhě gōngzuò lèile de shíhòu, hē bēi rè chá huì hěn shūfú.</span><br/>
		<b>小刚: </b>你喜欢喝什么茶？&nbsp;<button type="button" id="n44" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn44"><b>Xiǎogāng: </b>Nǐ xǐhuān hē shénme chá?</span><br/>
		<b>小丽: </b>花茶，绿茶，红茶，我都喜欢。&nbsp;<button type="button" id="n45" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn45"><b>Xiǎolì: </b>Huāchá, lǜchá, hóngchá, wǒ dōu xǐhuān.</span><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<b>Xiǎolì: </b>There is a lot of drink on the table.<br/>
		<b>Xiǎogāng: </b>Tea or coffee is OK. What about you? What are you drinking?<br/>
		<b>Xiǎolì: </b>Tea is my favorite. It will be nice to have a cup of hot tea when it is cold or working tired.<br/>
		<b>Xiǎogāng: </b>What kind of tea do you like to drink?<br/>
		<b>Xiǎolì: </b>Scented tea, green tea and black tea, I like them all.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>生词 (Shēngcí) New Words</i></th></tr>
			<tr><td>放</td><td>fàng</td><td>v</td><td>to put, to place</td></tr>
			<tr><td>饮料</td><td>yǐnliào</td><td>n</td><td>drink, beverage</td></tr>
			<tr><td>或者</td><td>huòzhě</td><td>cnj.</td><td>or</td></tr>
			<tr><td>舒服</td><td>shūfú</td><td>adj.</td><td>comfortable</td></tr>
			<tr><td>花</td><td>huā</td><td>n</td><td>flower</td></tr>
			<tr><td>绿</td><td>lǜ</td><td>adj.</td><td>green</td></tr>
		</table>
		</div>
	</div>
</div>
<div id="n1" class="dash"><a href="#0"> Back to top</a></div>
<div class="container-fluid">
	<h3 class="sublesson">汪释 (wāng shì) Notes</h3>
	<h4 class="textSection">1. Comparison of "<b>还是</b>" (<b>háishì</b>: or) and "<b>或者</b>" （<b>huòzhě</b>: or)</h4>
	<p>Both "<b>还是</b>" (<b>háishì</b>) and "<b>或者</b>"（<b>huòzhě</b>: or) are used to connect choices.<br/>
	&nbsp;&nbsp;"<b>还是</b>" (<b>háishì</b>) is used in interrogative sentences, and<br/>
	&nbsp;&nbsp;"<b>或者</b>"（<b>huòzhě</b>) is used in declarative sentences. For example:</p>
	<ol>
		<li>你要喝咖啡<b>还是</b>喝茶?&nbsp;<button type="button" id="n50" onclick="myToggle(this.id);">拼音</button><br/>
			<span class="pyn" id="pyn50">Nǐ yào hē kāfēi <b>háishì</b> hē chá?</span><br/>
			<span class="engD"></span></li>
		<li>明天是晴天<b>还是</b>阴天?&nbsp;<button type="button" id="n51" onclick="myToggle(this.id);">拼音</button><br/>
			<span class="pyn" id="pyn51">Míngtiān shì qíngtiān <b>háishì</b> yīn tiān?</span><br/>
			<span class="engD"></span></li>
		<li>今天晚上吃米饭<b>或者</b>面条都可以。&nbsp;<button type="button" id="n52" onclick="myToggle(this.id);">拼音</button><br/>
			<span class="pyn" id="pyn52">Jīntiān wǎnshàng chī mǐfàn <b>huòzhě</b> miàntiáo dōu kěyǐ.</span><br/>
			<span class="engD"></span></li>
		<li>天冷了<b>或者</b>工作累了的时候，喝杯热茶很舒服。&nbsp;<button type="button" id="n53" onclick="myToggle(this.id);">拼音</button><br/>
			<span class="pyn" id="pyn53">Tiān lěngle <b>huòzhě</b> gōngzuò lèile de shíhòu, hē bēi rè chá hěn shūfú.</span><br/>
			<span class="engD"></span></li>
	</ol>
	<p>For sentences with an interrogative clause, only "<b>还是</b>" (<b>háishì</b>) can be used in the clause. For example:</p>
	<ol start="5">
		<li>周太太40岁<b>还是</b>50岁，我们不知道。&nbsp;<button type="button" id="n54" onclick="myToggle(this.id);">拼音</button><br/>
			<span class="pyn" id="pyn54">Zhōu tàitài sìshí suì"<b>háishì </b>wǔshí suì, wǒmen bù zhīdào.</span><br/>
			<span class="engD"></span></li>
		<li>小丽还没想好周末去爬山<b>还是</b>去看电影。&nbsp;<button type="button" id="n55" onclick="myToggle(this.id);">拼音</button><br/>
			<span class="pyn" id="pyn55">Xiǎo lì hái méi xiǎng hǎo zhōumò qù páshān <b>háishì </b>qù kàn diànyǐng.</span><br/>
			<span class="engD"></span></li>
		<li>他的生日是10月<b>还是</b>11月，我不记得了。&nbsp;<button type="button" id="n56" onclick="myToggle(this.id);">拼音</button><br/>
			<span class="pyn" id="pyn56">Tā de shēngrì shì 10 yuè <b>háishì </b>11 yuè, wǒ bù jìdéle.</span><br/>
			<span class="engD"></span></li>
		<li>我不知道这个人是男的<b>还是</b>女的。&nbsp;<button type="button" id="n57" onclick="myToggle(this.id);">拼音</button><br/>
			<span class="pyn" id="pyn57">Wǒ bù zhīdào zhège rén shì nán de <b>háishì </b>nǚ de.</span><br/>
			<span class="engD"></span></li>
	</ol>
	<p><b>练一练 (liàn yī liàn) Practise</b></p>
	<p>完成句子 (Wánchéng jùzi) Complete the sentences</p>
	<ol>
		<li>你喜欢看书 ____ 玩，儿电子游戏?&nbsp;<button type="button" id="n58" onclick="myToggle(this.id);">拼音</button><br/>
			<span class="pyn" id="pyn58">Nǐ xǐhuān kànshū ____ wán, er diànzǐ yóuxì?</span><br/>
			<span class="engD"></span></li>
		<li>我们出去吧，买东西 ____ 看电影。&nbsp;<button type="button" id="n59" onclick="myToggle(this.id);">拼音</button><br/>
			<span class="pyn" id="pyn59">Wǒmen chūqù ba, mǎi dōngxī ____ kàn diànyǐng.</span><br/>
			<span class="engD"></span></li>
		<li>我还没想好穿红色的裤子 ____ 咖啡色的裤子。&nbsp;<button type="button" id="n60" onclick="myToggle(this.id);">拼音</button><br/>
			<span class="pyn" id="pyn60">Wǒ hái méi xiǎng hǎo chuān hóngsè de kùzi ____ kāfēisè de kùzi.</span><br/>
			<span class="engD"></span></li>
	</ol>
	<div id="n2" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">2. The Expression of Existence: Location Word + V<b>着</b> (<b>zhe</b>) + Numeral + Measure Word + N</h4>
	<p>In Chinese, the structure "Location Word + V<b>着</b> (<b>zhe</b>) + NP" means there is something somewhere. In this structure, the verb<br/>
	"放" (fàng: put)，<br/>
	"写" (xiě: write)，<br/>
	"坐" (zuò: sit)，<br/> 
	or "住" (shù: live) etc.<br/>is often used, and the noun phrase is usually an indefìnite object, for example:<br/>
	 "一本书" (yī běn shū: a book) and <br/>
	 "几个人" (jǐ gèrén: several people)<br/>
	rather than<br/>
	"这本书" (zhè běn shū: this book)<br/>
	and<br/>
	"周经理" (Zhōu jīnglǐ: Manager Zhou)<br/>
	For example:</p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th>Location Word</th><th>V<b>着</b></th><th>NP</th></tr>
		<tr><td>桌子上<br/>Zhuōzi shàng<br/>On the table</td><td>放着<br/>fàngzhe<br/>put the</td><td>一杯咖啡。<br/>yībēi kāfēi<br/>a cup of coffee</td></tr>
		<tr><td colspan="3"><i>There is a cup of coffee on the table.</i></td></tr>
		<tr><td>我家楼上<br/>Wǒ jiā lóu shàng<br/>My house upstairs</td><td>住着<br/>zhùzhe<br/>live</td><td>一个老师。<br/>yīgè lǎoshī.<br/>a teacher</td></tr>
		<tr><td colspan="3"><i>A teacher lives in the apartment upstairs.</i></td></tr>
		<tr><td>上面<br/>Shàngmiàn<br/>Above</td><td>写着<br/>xiězhe<br/>wrote</td><td>320 元。<br/>320 yuan<br/></td></tr>
		<tr><td colspan="3"><i>It says 320 yuan.</i></td></tr>
		<tr><td>桌子上<br/>Zhuōzi shàng<br/>On the table</td><td>放着<br/>fàngzhe<br/>put the</td><td>很多饮料。<br/>hěnduō yǐnliào.<br/>a lot of drinks</td></tr>
		<tr><td colspan="3"><i>There are a lot of drinks on the table.</i></td></tr>
	</table>
	<p>The negative form of the structure is "Location Word + <b>没</b>V<b>着</b> + NP", without a measure word before the noun phrase. For example:</p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th>Location Word</th><th><b>没</b>V<b>着</b></th><th>NP</th></tr>
		<tr><td>桌子上<br/>Zhuōzi shàng<br/>On the table</td><td><b>没</b>放<b>着</b><br/>méi fàngzhe<br/>it's not on.</td><td>咖啡。<br/>kāfēi<br/>coffee</td></tr>
		<tr><td colspan="3"><i>There is no coffee on the table.</i></td></tr>
		<tr><td>我家楼上<br/>Wǒ jiā lóu shàng<br/>My house upstairs</td><td><b>没</b>住<b>着</b><br/>méi zhùzhe<br/>live</td><td>老师。<br/>yīgè lǎoshī.<br/>a teacher</td></tr>
		<tr><td colspan="3"><i>A teacher doesn't live in the apartment upstairs.</i></td></tr>
		<tr><td>上面<br/>Shàngmiàn<br/>Above</td><td><b>没</b>写<b>着</b><br/>méi xiězhe<br/>doesn't say</td><td>多少钱<br/>how much<br/></td></tr>
		<tr><td colspan="3"><i>It doesn't say how much it is.</i></td></tr>
		<tr><td>桌子上<br/>Zhuōzi shàng<br/>On the table</td><td><b>没</b>放<b>着</b><br/>méi fàngzhe<br/>put the</td><td>饮料。<br/>yǐnliào<br/>drink</td></tr>
		<tr><td colspan="3"><i>There are no drinks on the table.</i></td></tr>
	</table>	
	<p><b>练一练 (liàn yī liàn) Practise</b></p>
	<p>完成句子 (Wánchéng jùzi) Complete the sentences</p>
	<ol>
		<li>我家的桌子上放着 ____ 。<br/><span class="pynD">Wǒjiā de zhuōzi shàng fàngzhe ____ 。</span><br/></li>
		<li>我的电脑旁边没放着 ____ 。<br/><span class="pynD">Wǒ de diànnǎo pángbiān méi fàngzhe ____ 。</span><br/></li>
		<li>公共汽车上坐着 ____ 。<br/><span class="pynD">Gōnggòng qìchē shàng zuòzhe ____ 。</span><br/></li>
	</ol>
	<div id="n3" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">3. "<b>会</b>" (<b>huì</b>: will) Indicating the Possibility</h4>
	<p>The auxiliary verb "<b>会</b>" (<b>huì</b>) is used in a sentence to indicate the possibility, usually referring to something that hasn't happened. For example:</p>
	<ol>
		<li><span class="xhanD">你穿得那么少，<b>会</b>感冒的。</span><br/>
			<span class="pynD">Nǐ chuān dé nàme shǎo, <b>huì</b> gǎnmào de.</span><br/>
			<span class="engD">You wear so little that you will catch a cold.</span></li>
		<li><span class="xhanD">别担心，我<b>会</b>照顾好自己。</span><br/>
			<span class="pynD">Bié dānxīn, wǒ <b>huì</b> zhàogù hǎo zìjǐ.</span><br/>
			<span class="engD">Don't worry, I will take good care of myself.</span></li>
		<li><span class="xhanD">你不给他打电话吗，他<b>会</b>不高兴的。</span><br/>
			<span class="pynD">Nǐ bù gěi tā dǎ diànhuà ma, tā <b>huì</b> bù gāoxìng de.</span><br/>
			<span class="engD">If you don't call him, he will be unhappy.</span></li>
		<li><span class="xhanD">喝杯热茶<b>会</b>很舒服。</span><br/>
			<span class="pynD">Hē bēi rè chá<b>huì</b> hěn shūfú.</span><br/>
			<span class="engD">A cup of hot tea will be very comforting.</span></li>
	</ol>
	<p><b>练一练 (liàn yī liàn) Practise</b></p>
	<p>完成句子 (Wánchéng jùzi) Complete the sentences</p>
	<ol>
		<li>快起床吧，你 ____ 。<br/><span class="pynD">Kuài qǐchuáng ba, nǐ ____ .</span></li>
		<li>你怎么又没吃早饭 ____ 。<br/><span class="pynD">Nǐ zěnme yòu méi chī zǎofàn ____ .</span></li>
		<li>医生告诉我，不运动，____ 。<br/><span class="pynD">Yīshēng gàosù wǒ, bù yùndòng,____ .</span></li>
	</ol>
</div>
<div id="ex1" class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<div class="container-fluid">
	<h3 class="sublesson">练习 (liàn xí) Exercises</h3>
	<h4 class="textSection">1. 朗读 下列 短语 和 句子<br/>Lǎngdú xiàliè duǎnyǔ hé jùzi<br/>Read the following phrases and sentences aloud.
	<audio controls="" preload="metadata" id="03-03-5"><source src="../mandarin/audio/03-03-5.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col">
		记得: 不记得 / 记得带钱 / 你还记得我吗 / 我记得你已经有两条这样的裤子了。<br/>
			<button type="button" id="n11x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g11x" onclick="myToggle(this.id);">英语</button>&nbsp;
		<span class="pyn" id="pyn11x">jìdé: bù jìdé / jìdé dài qián / nǐ hái jìdé wǒ ma / wǒ jìdé nǐ yǐjīng yǒu liǎng tiáo zhèyàng de kùzile.<br/></span>
		<span class="eng" id="eng11x">remember: don't remember / remember to bring the money / Do you remember me? / I remember you had two pairs of these pants.</span><br/>
		<br/>
		新鲜: 很新鲜 / 不新鲜 / 新鲜的鱼 / 这些水果真新鲜。<br/>
			<button type="button" id="n12x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g12x" onclick="myToggle(this.id);">英语</button>&nbsp;
		<span class="pyn" id="pyn12x">xīnxiān: hěn xīnxiān / bù xīnxiān / xīnxiān de yú / zhèxiē shuǐguǒ zhēn xīnxiān.<br/></span>
		<span class="eng" id="eng12x">fresh: it's fresh / not fresh / fresh fish / these fruits are really fresh.</span><br/>
		<br/>
		放: 放在桌子上 / 放在外边 / 放在哪儿 / 桌子上放着很多饮朴。<br/>
			<button type="button" id="n13x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g13x" onclick="myToggle(this.id);">英语</button>&nbsp;
		<span class="pyn" id="pyn13x">fàng: fàng zài zhuōzi shàng / fàng zài wàibian / fàng zài nǎ'er / zhuōzi shàng fàngzhe hěnduō yǐn pǔ.<br/></span>
		<span class="eng" id="eng13x"><br/>put: put it on the table / put it on the outside / put it there / there is a lot of drink on the table.</span>
		<br/>
		只: 只学汉语/只会说，不会写 / 这儿只卖书，不卖水 / 今天晚上只吃水果不吃饭。<br/>
			<button type="button" id="n14x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g14x" onclick="myToggle(this.id);">英语</button>&nbsp;
		<span class="pyn" id="pyn14x">zhǐ: zhǐ xué hànyǔ / zhǐ huì shuō, bù huì xiě / zhèr zhǐ mài shū, bù mài shuǐ / jīntiān wǎnshàng zhǐ chī shuǐguǒ bù chīfàn.<br/></span>
		<span class="eng" id="eng14x">only: only learn Chinese / only say, can't write / sell books here, do not sell water / eat only fruit tonight.</span><br/>
		<br/>
		条一: 一条鱼 / 一条裤子 / 一条路 / 你觉得这条裤子怎么样?<br/>
			<button type="button" id="n15x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g15x" onclick="myToggle(this.id);">英语</button>&nbsp;
		<span class="pyn" id="pyn15x">tiáo yī: yītiáo yú / yītiáo kùzi / yītiáo lù / nǐ juédé zhè tiáo kùzi zěnme yàng?<br/></span>
		<span class="eng" id="eng15x">article one: a fish / a pair of pants / a road / What do you think of this pair of pants?</span><br/>
		<br/>
	</div>
	<div id="ex2" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">2. 选择 恰当 的 词语 填空<br/>Xuǎnzé qiàdàng de cíyǔ tiánkòng<br/>Choose the proper words to fill in the blanks.</h4>
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="xhanD"><td>舒服</td><td>裤子</td><td>衬衫</td><td>或者</td><td>还是</td></tr>
			<tr class="pynD"><td>shūfú</td><td>kùzi</td><td>chènshān</td><td>huòzhě</td><td>háishì</td></tr>
			<tr class="engD"><td>comfortable</td><td>pants</td><td>shirt</td><td>or</td><td>or</td></tr>
		</table>
		<ol>
			<li><span class="xhanD">你想喝点儿什么?茶 ____ 咖啡?</span><br/>
				<span class="pynD">Nǐ xiǎng hē diǎnr shénme? Chá ____ kāfēi?</span></li>
			<li><span class="xhanD">这条 ____ 点儿也不贵，买吧。</span><br/>
				<span class="pynD">Zhè tiáo ____ diǎn er yě bù guì, mǎi ba.</span></li>
			<li><span class="xhanD">我每个周末都在家看电视 ____ 听音乐，不工作。</span><br/>
				<span class="pynD">Wǒ měi gè zhōumò dōu zàijiā kàn diànshì ____ tīng yīnyuè, bù gōngzuò.</span></li>
			<li><span class="xhanD">你穿昨天新买的那件 ____ 吧。</span><br/>
				<span class="pynD">Nǐ chuān zuótiān xīn mǎi dì nà jiàn ____ ba.</span></li>
			<li><span class="xhanD">我不喜欢南方，太热了，不 ____ 。</span><br/>
				<span class="pynD">Wǒ bù xǐhuān nánfāng, tài rèle, bù ____ .</span></li>
		</ol>
		<div class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="xhanD"><td>小心</td><td>爬山</td><td>只</td><td>放</td><td>记得</td></tr>
			<tr class="pynD"><td>xiǎoxīn</td><td>páshān</td><td>zhǐ</td><td>fàng</td><td>jìdé</td></tr>
			<tr class="engD"><td>careful</td><td>mountain<br/>climbing</td><td>only</td><td>put</td><td>remember</td></tr>  
		</table>
		<ol start="6">
			<li>
				<span class="xhanD"><b>A</b>: 我们看过这个电影，你 ____ 是什么时候吗?</span><br/>
				<span class="xhanD"><b>B</b>: 去年8月。</span><br/>
				<span class="pynD">Wǒmen kànguò zhège diànyǐng, nǐ____shì shénme shíhòu ma?</span><br/>
				<span class="pynD">Qùnián bā yuè.</span>
			</li>
			<li>
				<span class="xhanD"><b>A</b>: 你跟我一起出去走走吧。</span><br/>
				<span class="xhanD"><b>B</b>: 我现在 ____ 想睡觉。</span><br/>
				<span class="pynD">Nǐ gēn wǒ yīqǐ chūqù zǒu zǒu ba.</span><br/>
				<span class="pynD">Wǒ xiànzài ____ xiǎng shuìjiào.</span>
			</li>
			<li>
				<span class="xhanD"><b>A</b>: 饭菜做好了吗?</span><br/>
				<span class="xhanD"><b>B</b>: 做好了，已经 ____ 饭桌上了。</span><br/>
				<span class="pynD">Fàncài zuò hǎole ma?</span><br/>
				<span class="pynD">Zuò hǎole, yǐjīng ____ fànzhuō shàngle.</span>
			</li>
			<li>
				<span class="xhanD"><b>A</b>: 您慢走，路上 ____ 点儿。</span><br/>
				<span class="xhanD"><b>B</b>: 谢谢你，再见。</span><br/>
				<span class="pynD">Nín màn zǒu, lùshàng ____ diǎn er.</span><br/>
				<span class="pynD">Xièxiè nǐ, zàijiàn.</span>
			</li>
			<li>
				<span class="xhanD"><b>A</b>: 上个周末你去哪儿了?</span><br/>
				<span class="xhanD"><b>B</b>: 我跟朋友去 ____ 了。</span><br/>
				<span class="pynD">Shàng gè zhōumò nǐ qù nǎ'erle?</span><br/>
				<span class="pynD">Wǒ gēn péngyǒu qù ____ le.</span>
			</li>
		</ol>
	</div>
	<div id="ex3" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">3. 用本课新学的语言点和词语描述图片<br/>Yòng běn kè xīn xué de yǔyán diǎn hé cíyǔ miáoshù túpiàn<br/>Describe the pictures using the newly-learned language points and words</h4>
	<div class="col-xs-12 col">
	<ol>
	<li><span class="xhanD"><b>A</b>: 你想什么呢?</span><br/>
		<span class="pynD"><b>A</b>: Nǐ xiǎng shénme ne?</span><br/>
		<span class="xhanD"><b>B</b>: 桌子上 ____ 这么多好吃的，你说我吃什么好?</span><br/>
		<span class="pynD"><b>B</b>: Zhuōzi shàng ____ zhème duō hào chī de, nǐ shuō wǒ chī shénme hǎo?</span><br/>
		<span class="xhanD"><b>A</b>: 水果 ____ 面包都会对你的身体好。</span><br/>
		<span class="pynD"><b>A</b>: Shuǐguǒ ____ miànbāo dōuhuì duì nǐ de shēntǐ hǎo.</span><br/>
		<span class="xhanD"><b>B</b>: 那我吃水果吧。</span><br/>
		<span class="pynD"><b>B</b>: Nà wǒ chī shuǐguǒ ba.</span><br/><br/></li>
	<li><span class="xhanD"><b>A</b>: 我们什么时候去上海?</span><br/>
		<span class="pynD"><b>A</b>: Wǒmen shénme shíhòu qù Shànghǎi?</span><br/>
		<span class="xhanD"><b>B</b>: 我不 ____ 了。你看看机票。</span><br/>
		<span class="pynD"><b>B</b>: Wǒ bù ____ le. Nǐ kàn kàn jīpiào.</span><br/>
		<span class="xhanD"><b>A</b>: 机票上 ____ 12 月4 号。</span><br/>
		<span class="pynD"><b>A</b>: Jīpiào shàng ____ shíèr yuè sì hào.</span><br/>
		<span class="xhanD"><b>B</b>: 那就是后夭。</span><br/>
		<span class="pynD"><b>B</b>: Nà jiùshì hòu yāo.</span><br/><br/></li>
	<li><span class="xhanD"><b>A</b>: 我的笔呢?你看见了吗?</span><br/>
		<span class="pynD"><b>A</b>: Wǒ de bǐ ne? Nǐ kànjiànle ma?</span><br/>
		<span class="xhanD"><b>B</b>: 红的 ____ 黑的？</span><br/>
		<span class="pynD"><b>B</b>: Hóng de ____ hēi de?</span><br/>
		<span class="xhanD"><b>A</b>: 红的那个</span><br/>
		<span class="pynD"><b>A</b>: Hóng dì nàgè</span><br/>
		<span class="xhanD"><b>B</b>: 电脑旁边 ____ ，是你的吗？</span><br/>
		<span class="pynD"><b>B</b>: Diànnǎo pángbiān ____ , shì nǐ de ma?</span><br/><br/></li>
	<li><span class="xhanD"><b>A</b>: 你家楼上 ____ 很多人吗?</span><br/>
		<span class="pynD"><b>A</b>: Nǐ jiā lóu shàng ____ hěnduō rén ma?</span><br/>
		<span class="xhanD"><b>B</b>: 不，只有两个学生。</span><br/>
		<span class="pynD"><b>B</b>: Bù, zhǐyǒu liǎng gè xuéshēng.</span><br/>
		<span class="xhanD"><b>A</b>: 他们是大学生 ____ 中学生?</span><br/>
		<span class="pynD"><b>A</b>: Tāmen shì dàxuéshēng ____ zhōngxuéshēng?</span><br/>
		<span class="xhanD"><b>B</b>: 大学生。</span><br/>
		<span class="pynD"><b>B</b>: Dàxuéshēng.</span><br/><br/></li>	
	</ol>
	</div>
	<div id="ex4" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">4. 根据 课文 回答 问题<br/>Gēnjù kèwén huídá wèntí<br/>Answer the questions according to the texts.</h4>
	<div class="col-xs-12 col-md-6 col">
		<ol>
			<li>
		<span class="xhanD">明天小刚去做什么？小丽也去吗?</span><br/>
			<button type="button" id="n331" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g331" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn331">Míngtiān Xiǎogāng qù zuò shénme? Xiǎolì yě qù ma?<br/></span>
		<span class="eng" id="eng331">What are you doing to do tomorrow? Is Xiaoli going?<br/></span>
			</li>
			<li>
		<span class="xhanD">周太太买裤子了吗？为什么?</span><br/>
			<button type="button" id="n332" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g332" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn332">Zhōu tàitài mǎi kùzile ma? Wèishéme?<br/></span>
		<span class="eng" id="eng332">Did Mrs. Zhou buy pants? Why?<br/></span>
			</li>
			<li>
		<span class="xhanD">周太太买什么了？多少钱?</span><br/>
			<button type="button" id="n333" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g333" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn333">Zhōu tàitài mǎi shénmele? Duōshǎo qián?<br/></span>
		<span class="eng" id="eng333">What did Mrs. Zhou buy? How much?<br/></span>
			</li>
			<li>
		<span class="xhanD">周明和太太买了什么水果?</span><br/>
			<button type="button" id="n334" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g334" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn334">Zhōu Míng hé tàitài mǎile shénme shuǐguǒ?<br/></span>
		<span class="eng" id="eng334">What fruit did Zhou Ming and his wife buy?<br/></span>
			</li>
			<li>
		<span class="xhanD">小刚喜欢喝什么?</span><br/>
			<button type="button" id="n335" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g335" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn335">Xiǎogāng xǐhuān hē shénme?<br/></span>
		<span class="eng" id="eng335">What does Xiaogang like to drink?<br/></span>
			</li>
			<li>
		<span class="xhanD">小丽喜欢喝什么？为什么?</span><br/>
			<button type="button" id="n336" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g336" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn336">Xiǎolì xǐhuān hē shénme? Wèishéme?<br/></span>
		<span class="eng" id="eng336">What does Xiaoli like to drink? Why?<br/></span>
			</li>
		</ol>
	</div>
<div id="ch" class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<div class="container-fluid">
	<div class="col-xs-12">
	<h3>汉字 (Hànzì) Characters</h3>
	<h4 class="textSection">旧字新词&nbsp;(Jiù zì xīn cí)&nbsp;Word Game: Old Words From New Words</h4>
	<div class="gameDiv">
	<table class="table table-centered">
		<tr><td>新<b>鲜</b></td><td></td><td>牛奶<b></b></td></tr>
		<tr><td>xīn<b>xiān</b></td><td></td><td>niú<b>nǎi</b></td></tr>
		<tr><td></td><td><b>鲜奶</b></td><td></td></tr>
		<tr><td></td><td><b>xiānnǎi</b></td><td></td></tr>
	</table>
	</div>
	<div class="gameDiv">
	<table class="table table-centered">
		<tr><td><b>冷</b></td><td></td><td><b>饮</b>料</td></tr>
		<tr><td><b>lěng</b></td><td></td><td><b>yǐn</b>liào</td></tr>
		<tr><td></td><td><b>冷饮</b></td><td></td></tr>
		<tr><td></td><td><b>lěngyǐn</b></td><td></td></tr>
	</table>
	</div>
	<div class="gameDiv">
	<table class="table table-centered">
		<tr><td><b>上</b>边</td><td></td><td>前<b>面</b></td></tr>
		<tr><td><b>shàng</b>biān</td><td></td><td>qián<b>miàn</b></td></tr>
		<tr><td></td><td><b>上面</b></td><td></td></tr>
		<tr><td></td><td><b>shàngmiàn</b></td><td></td></tr>
	</table>
	</div>
	</div>
</div>
<div id="ap" class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<div class="container-fluid">
	<div class="col-xs-12">
	<h3>运用 (yùnyòng) Application</h3>
	<h4 class="textSection">1. Pair Work</h4>
	<p>Make a survey of your partner and fill in the questionnaire.</p>
	<table class="table table-bordered table-condensed table-responsive">
		<tr><th></th><th>问</th><th>答</th></tr>
		<tr><td>1</td><td>你喜欢早睡早起还是晚睡晚是?<br/><span class="pynD">Nǐ xǐhuān zǎo shuì zǎoqǐ háishì wǎn shuì wǎn shì?</span></td><td></td></tr>
		<tr><td>2</td><td>早饭你常喝咖啡还是牛奶?<br/><span class="pynD">Zǎofàn nǐ cháng hē kāfēi háishì niúnǎi?</span></td><td></td></tr>
		<tr><td>3</td><td>你喜欢走路还是坐车?<br/><span class="pynD">Nǐ xǐhuān zǒulù háishì zuòchē?</span></td><td></td></tr>
		<tr><td>4</td><td>你喜欢晴天还是雨天?<br/><span class="pynD">Nǐ xǐhuān qíngtiān háishì yǔtiān?</span></td><td></td></tr>
		<tr><td>5</td><td>你喜欢看电视运是看电影?<br/><span class="pynD">Nǐ xǐhuān kàn diànshì yùn shì kàn diànyǐng?</span></td><td></td></tr>
		<tr><td>6</td><td>你喜欢饭前吃水果还是饮后吃水果?<br/><span class="pynD">Nǐ xǐhuān fàn qián chī shuǐguǒ háishì yǐn hòu chī shuǐguǒ?</span></td><td></td></tr>
	</table>
	<h4 class="sublesson">2. Group Work</h4>
	<p>Work in groups of 3-4. Follow the example. One describes his/her home, and the others draw pictures based on the description. Then choose the one whose drawing is most accurate.</p>
	例如: 我的房间里放着一张桌子。<br/>
	<span class="pynD">Lìrú: Wǒ de fángjiān lǐ fàngzhe yī zhāng zhuōzi.</span>
	</div>
</div>
<div id="cs" class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<div class="container-fluid">
	<div class="col-xs-12">
	<h3>俗语 (súyǔ) Common Saying</h3>
	<h4 class="textSection">茶好客常来<br/>Chá hao kè cháng lái<br/>Good tea attracts frequenters</h4>
	<p>"<b>茶好客常来</b>" (<b>chá hao kè cháng lái</b>) means "if the tea is good, guests will often come", used metaphorically to indicate that good stuff will surely be liked by customers.</p>
	</div>
</div>
<div class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<?php
} else { header( 'Location: https://www.stephenmccready.asia/mi/index.php'); }
?>
</body>
</html>
