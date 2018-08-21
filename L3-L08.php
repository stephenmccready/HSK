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
	<title>Level 3 - 8</title>
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
	<div class="jumbotron lessonHeaderLeft">Dì bā kè<br/>第八课<br/>Lesson 8</div>
	<div class="lessonHeaderRight"><h2>Nǐ qù nǎr wǒ jiù qù nǎr.<br/>你去哪儿我就去哪儿。<br/><b>I'll go wherever you go.</b></h2></div>
</div>
<div id="custom-nav" class="clearfix"><p>
	<a class="btn btn-success btn-md" href="#2">2</a>&nbsp;
	<a class="btn btn-success btn-md" href="#3">3</a>&nbsp;
	<a class="btn btn-success btn-md" href="#4">4</a>&nbsp;
	<a class="btn btn-success btn-md" href="#n1">Note 1</a>&nbsp;
	<a class="btn btn-success btn-md" href="#n2">Note 2</a>&nbsp;
	<a class="btn btn-success btn-md" href="#ex1">Ex 1</a>&nbsp;
	<a class="btn btn-success btn-md" href="#ex2">Ex 2</a>&nbsp;
	<a class="btn btn-success btn-md" href="#ex3">Ex 3</a>&nbsp;
	<a class="btn btn-success btn-md" href="#ex4">Ex 4</a>&nbsp;
	<a class="btn btn-success btn-md" href="#ch">Chars</a>&nbsp;
	<a class="btn btn-success btn-md" href="#ap">App</a>&nbsp;
	<a class="btn btn-success btn-md" href="#cs">Proverb</a>&nbsp;
	<a class="btn btn-info btn-md" href="L3-E08.php" target="_blank">Workbook</a></p></div>
<div class="container-fluid">
	<h4 class="textSection">Kè wén yī. Zài xiūxí shì<br/>课文一。在休息室。<br/>Text 1. In the lounge.<br/>
	<audio controls="" preload="metadata" id="03-08-1"><source src="../mandarin/audio/03-08-1.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<p><b>同事: </b>听说，你最近打算买房子?&nbsp;<button type="button" id="n811" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn811"><b>Tóngshì: </b>Tīngshuō, nǐ zuìjìn dǎsuàn mǎi fángzi?</span></p>
		<p><b>小丽: </b>是，昨天去看了看， 今天又去看了看， 明天还要再去看看。&nbsp;<button type="button" id="n812" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn812"><b>Xiǎolì: </b>Shì, zuótiān qù kànle kàn, jīntiān yòu qù kànle kàn, míngtiān hái yào zài qù kànkàn.</span></p>
		<p><b>同事: </b>都不满意吗?&nbsp;<button type="button" id="n813" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn813"><b>Tóngshì: </b>Dōu bù mǎnyì ma?</span></p>
		<p><b>小丽: </b>一个没有电梯，不方便。一个有电梯，但是在二十层。&nbsp;<button type="button" id="n814" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn814"><b>Xiǎolì: </b>Yī gè méiyǒu diàntī, bù fāngbiàn. Yī gè yǒu diàntī, dànshì zài èrshí céng.</span></p>
		<p><b>同事: </b>二十层怎么了?&nbsp;<button type="button" id="n815" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn815"><b>Tóngshì: </b>Èrshí céng zěnme le?</span></p>
		<p><b>小丽: </b>太高了， 往下看多害怕啊!&nbsp;<button type="button" id="n816" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn816"><b>Xiǎolì: </b>Tài gāo le, wǎng xià kàn duō hài pà a!</span></p>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<b>Colleague: </b>I heard recently that you are going to buy a house?<br/>
		<b>Xiaoli: </b>Yes, I went to see one yesterday, I went to see one again today, tomorrow I will go to see one again.<br/>
		<b>Colleague: </b>Are you not satisfied with them?<br/>
		<b>Xiaoli: </b>One has no elevator, that's inconvenient. One has an elevator, but it's on the 20th floor.<br/>
		<b>Colleague: </b>Whats wrong with the 20th floor?<br/>
		<b>Xiaoli: </b>It's too high, I look down and I'm scared.<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>生词 (Shēngcí) New Words</i></th></tr>
			<tr><td>又</td><td>yòu</td><td>adv</td><td>again</td></tr>
			<tr><td>满意</td><td>mǎnyì</td><td>v</td><td>to be satisfied</td></tr>
			<tr><td>电梯</td><td>diàntī</td><td>n</td><td>elevator</td></tr>
			<tr><td>层</td><td>céng</td><td>mw</td><td><i>used for floors</i></td></tr>
			<tr><td>害怕</td><td>hàipà</td><td>v</td><td>to be afraid of, to be scared</td></tr>
		</table>
		</div>
	</div>
	<div id="2" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">Kè wén èr. Zài xuéxiào.<br/>课文二。在学校。<br/>Text 2. At School.<br/>
	<audio controls="" preload="metadata" id="03-08-2"><source src="../mandarin/audio/03-08-2.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<p><b>小明: </b>听说你下个星期就要回国了?&nbsp;<button type="button" id="n821" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn821"><b>Xiǎomíng: </b>Tīngshuō nǐ xià gè xīngqí jiù yào huí guó le?</span></p>
		<p><b>马可: </b>是啊， 真不想离开北京。&nbsp;<button type="button" id="n822" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn822"><b>Mǎkě: </b>Shì a, zhēn bù xiǎng líkāi Běijīng.</span></p>
		<p><b>小明: </b>我下星期不在北京， 不能去机场送你了。&nbsp;<button type="button" id="n823" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn823"><b>Xiǎomíng: </b>Wǒ xià xīngqí bù zài Běijīng, bù néng qù jīchǎng sòng nǐ le.</span></p>
		<p><b>马可: </b>没关系，你忙吧。&nbsp;<button type="button" id="n824" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn824"><b>Mǎkě: </b>Méi guānxì, nǐ máng ba.</span></p>
		<p><b>小明: </b>这个小熊猫送给你，欢迎你以后再到中国来。&nbsp;<button type="button" id="n825" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn825"><b>Xiǎomíng: </b>Zhège xiǎo xióngmāo sòng gěi nǐ, huānyíng nǐ yǐhòu zài dào Zhōngguó lái.</span></p>
		<p><b>马可: </b>谢谢。希望以后能再见面。&nbsp;<button type="button" id="n826" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn826"><b>Mǎkě: </b>Xièxiè. Xīwàng yǐhòu néng zài jiàn miàn.</span></p>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<b>Xiaoming: </b>I hear you're going home next week?<br/>
		<b>Marco: </b>Yes, I really don't want to leave Beijing.<br/>
		<b>Xiaoming: </b>I'm not in Beijing next week, I can't see you off at the airport.<br/>
		<b>Marco: </b>It's okay, you're busy.<br/>
		<b>Xiaoming: </b>This little panda is for you and you are welcome to come to China later.<br/>
		<b>Marco: </b>Thank you. Hope to see you again later.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>生词 (Shēngcí) New Words</i></th></tr>
			<tr><td>熊猫</td><td>xióngmāo</td><td>n</td><td>panda</td></tr>
			<tr><td>见面</td><td>jiànmiàn</td><td>v</td><td>to meet</td></tr>
		</table>
		</div>
	</div>
	<div id="3" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">Kè wén sān. Zài kāfēitīng.<br/>课文三。在咖啡厅。<br/>Text 3. In a coffee house.<br/>
	<audio controls="" preload="metadata" id="03-08-3"><source src="../mandarin/audio/03-08-3.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<p><b>小丽: </b>小刚，我们坐哪儿?&nbsp;<button type="button" id="n831" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn831"><b>Xiǎolì: </b>Xiǎogāng, wǒmen zuò nǎr?</span></p>
		<p><b>小刚: </b>你坐哪儿我就坐哪儿。&nbsp;<button type="button" id="n832" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn832"><b>Xiǎogāng: </b>Nǐ zuò nǎr wǒ jiù zuò nǎr</span></p>
		<p><b>小丽: </b>坐这儿吧，这儿安静。你想喝什么饮料?&nbsp;<button type="button" id="n833" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn833"><b>Xiǎolì: </b>Zuò zhèr ba, zhèr ānjìng. Nǐ xiǎng hē shénme yǐnliào?</span></p>
		<p><b>小刚: </b>你喝什么我就喝什么。&nbsp;<button type="button" id="n834" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn834"><b>Xiǎogāng: </b>Nǐ hē shénme wǒ jiù hē shénme.</span></p>
		<p><b>小丽: </b>喝可乐吧。你等我一会儿，我马上回来。&nbsp;<button type="button" id="n835" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn835"><b>Xiǎolì: </b>Hē kělè ba. Nǐ děng wǒ yīhuǐr, wǒ mǎshàng huílái.</span></p>
		<p><b>小刚: </b>小丽，你去哪儿？你去哪儿我就去哪儿。&nbsp;<button type="button" id="n836" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn836"><b>Xiǎogāng: </b>Xiǎolì, nǐ qù nǎr? Nǐ qù nǎr wǒ jiù qù nǎr.</span></p>
		<p><b>小丽: </b>我去洗手间。&nbsp;<button type="button" id="n837" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn837"><b>Xiǎolì: </b>Wǒ qù xǐshǒujiān</span></p>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<b>Xiaoli: </b>Xiaogang, Where shall we sit?<br/>
		<b>Xiaogang: </b>I'll sit wherever you sit.<br/>
		<b>Xiaoli: </b>Sit here, it's quiet here. What would you like to drink?<br/>
		<b>Xiaogang: </b>I'll drink whatever you drink.<br/>
		<b>Xiaoli: </b>Drink a Coke. Wait for me for a while, I'll be right back.<br/>
		<b>Xiaogang: </b>Xiaoli, where are you going? I'll go wherever you go.<br/>
		<b>Xiaoli: </b>I'm going to the bathroom.<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>生词 (Shēngcí) New Words</i></th></tr>
			<tr><td>安静</td><td>ānjìng</td><td>adj</td><td>quiet</td></tr>
			<tr><td>可乐</td><td>kělè</td><td>n</td><td>cola, Coke</td></tr>
			<tr><td>一会儿</td><td>yīhuǐr</td><td>n</td><td>a moment</td></tr>
			<tr><td>马上</td><td>mǎshàng</td><td>adv</td><td>immediately, at once</td></tr>
			<tr><td>洗手间</td><td>xǐshǒujiān</td><td>n</td><td>bathroom, restroom</td></tr>
		</table>
		</div>
	</div>
	<div id="4" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">Kè wén sì. Zài Zhōu Míng jiã.<br/>课文四。在周明家。<br/>Text 4. At Zhou Ming's home.<br/>
	<audio controls="" preload="metadata" id="03-08-4"><source src="../mandarin/audio/03-08-4.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<p><b>老同学: </b>&nbsp;快五年了， 你几乎没变化。<button type="button" id="n841" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn841"><b>A: </b>Kuài wǔ nián le, nǐ jīhū méi biànhuà</span></p>
		<p><b>周太太: </b>&nbsp;谁说的？我胖了， 以前的衣服都不能穿了。<button type="button" id="n42" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn842"><b>B: </b>Shéi shuō de? Wǒ pàng le, yǐqián de yīfú dōu bù néng chuān le.</span></p>
		<p><b>老同学: </b>&nbsp;健康最重要， 胖瘦没关系。<button type="button" id="n843" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn843"><b>A: </b>Jiànkāng zuì zhòngyào, pàng shòu méi guānxì.</span></p>
		<p><b>周太太: </b>&nbsp;是呀，想吃什么就吃什么。<button type="button" id="n844" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn844"><b>B: </b>Shì ya, xiǎng chī shénme jiù chī shénme.</span></p>
		<p><b>老同学: </b>&nbsp;你做饭还是周明做饭?<button type="button" id="n845" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn845"><b>A: </b>Nǐ zuò fàn háishì Zhōu Míng zuò fàn?</span></p>
		<p><b>周太太: </b>&nbsp;我做， 我想吃什么就做什么，想吃多少就做多少。<button type="button" id="n846" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn846"><b>B: </b>Wǒ zuò, wǒ xiǎng chī shénme jiù zuò shénme, xiǎng chī duōshǎo jiù zuò duōshǎo.</span></p>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<b>A: </b>It's been nearly five years. You have hardly changed.<br/>
		<b>B: </b>Who said that? I'm fat and I can't wear my old clothes.<br/>
		<b>A: </b>Health is the most important, fat and thin does not matter.<br/>
		<b>B: </b>Yes, you can eat whatever you want.<br/>
		<b>A: </b>Do you cook or does Zhou Ming cook?<br/>
		<b>B: </b>I cook, I can cook whatever I want, cook as much as you want.<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>生词 (Shēngcí) New Words</i></th></tr>
			<tr><td>老</td><td>lǎo</td><td>adj</td><td>old</td></tr>
			<tr><td>几乎</td><td>jīhū</td><td>adv</td><td>almost</td></tr>
			<tr><td>变化</td><td>biànhuà</td><td>v</td><td>to change</td></tr>
			<tr><td>健康</td><td>jiànkāng</td><td>adj</td><td>healthy</td></tr>
			<tr><td>重要</td><td>zhòngyào</td><td>adj</td><td>important</td></tr>
		</table>
		</div>
	</div>
</div>
<div id="n1" class="dash"><a href="#0"> Back to top</a></div>
<div class="container-fluid">
	<h3 class="sublesson">汪释 (wāng shì) Notes</h3>
	<h4 class="textSection">1. Comparison of "<b>又</b>" (<b>yòu</b>: and) and "<b>再</b>" (<b>zài</b>: again)</h4>
	<p>The adverbs "<b>又</b>" (<b>yòu</b>) and "<b>再</b>" (<b>zài</b>) can both be put before a verb to indicate the recurrence of an action or a situation.<br/>
	"<b>又+ V</b>" usually means the recurrence has already happened,<br/>while "<b>再+ V</b>" means the recurrence has not happened yet.<br/></p>
	Examples of "<b>又</b>" :
	<ol>
		<li>上个星期我买了一条裤子，昨天<b>又</b>买了一条。<br/><span class="pynD">Shàng gè xīngqí wǒ mǎile yītiáo kùzi, zuótiān <b>yòu</b> mǎile yītiáo.</span></li>
		<li>你上午已经喝了一杯咖啡，下午怎么<b>又</b>喝了一杯?<br/><span class="pynD">Nǐ shàngwǔ yǐjīng hēle yībēi kāfēi, xiàwǔ zěnme <b>yòu</b> hēle yībēi?</span></li>
		<li>小刚，你前天迟到，昨天迟到，今天怎么<b>又</b>迟到了?。<br/><span class="pynD">Xiǎogāng, nǐ qiántiān chídào, zuótiān chídào, jīntiān zěnme <b>yòu</b> chídàole?.</span></li>
		<li>我昨天看了一个电影，今天<b>又</b>看了一个。<br/><span class="pynD">Wǒ zuótiān kànle yīgè diànyǐng, jīntiān <b>yòu</b> kànle yīgè.</span></li>
	</ol>
	Examples of "<b>再</b>" :
	<ol>
		<li>你只吃了一点儿饭，<b>再</b>吃一点儿吧。<br/><span class="pynD">Nǐ zhǐ chīle yīdiǎn er fàn, <b>zài</b> chī yīdiǎn er ba.</span></li>
		<li>家里只有一个面包了，我们<b>再</b>买一些吧。<br/><span class="pynD">Jiālǐ zhǐyǒu yīgè miànbāole, wǒmen <b>zài</b> mǎi yīxiē ba.</span></li>
		<li>那个饭馆我昨天去了一次，明天还想<b>再</b>去一次。<br/><span class="pynD">Nàgè fànguǎn wǒ zuótiān qùle yīcì, míngtiān hái xiǎng <b>zài</b> qù yīcì.</span></li>
		<li>昨天去看了看，今天又去看了看，明天还要<b>再</b>去看看。<br/><span class="pynD">Zuótiān qù kànle kàn, jīntiān yòu qù kànle kàn, míngtiān hái yào <b>zài</b> qù kàn kàn.</span></li>
	</ol>
	<p><b>练一练 (liàn yī liàn) Practise</b></p>
	<p>完成句子 (Wánchéng jùzi) Complete the sentences</p>
	<ol>
		<li>我上个星期去了那个中国饭馆，明天想 ____ 去一次。<br/><span class="pynD">Wǒ shàng gè xīngqí qùle nàgè zhōngguó fànguǎn, míngtiān xiǎng ____ qù yīcì.</span></li>
		<li>你怎么 ____ 买了一条裤子?不是已经有一条了吗?<br/><span class="pynD">Nǐ zěnme ____ mǎile yītiáo kùzi? Bùshì yǐjīng yǒu yītiáole ma?</span></li>
		<li>刚才我去找他，他没在办公室，我一会儿 ____ 去。<br/><span class="pynD">Gāngcái wǒ qù zhǎo tā, tā méi zài bàngōngshì, wǒ yīhuǐ'er ____ qù.</span></li>
	</ol>
	<div id="n2" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">2. Flexible Use of Interrogative Pronouns 1。</h4>
	<p>In Chinese, "<b>就</b>" (<b>jiù</b>) is used to connect two same interrogative pronouns, indicating an uncertain person, thing or manner. The interrogative pronoun appears twice in the sentence, referring to the same thing. When the two clauses of a sentence share one subject, the subject of the second clause can be left out; when the two clauses have different subjects, the second subject is put right before "<b>就</b>" (<b>jiù</b>) For example:</p>
	<p><b>练一练 (liàn yī liàn) Practise</b></p>
	<p>完成句子 (Wánchéng jùzi) Complete the sentences</p>
	<ol>
		<li>什么东西便宜我<b>就</b>买什么。<br/><span class="pynD">Shénme dōngxī piányí wǒ <b>jiù</b> mǎi shénme.</span></li>
		<li>你哪天有时间<b>就</b>哪天来我家吧。<br/><span class="pynD">Nǐ nǎ tiān yǒu shíjiān <b>jiù</b> nǎ tiān lái wǒjiā ba.</span></li>
		<li>谁喜欢他他<b>就</b>喜欢谁。<br/><span class="pynD">Shéi xǐhuān tā tā <b>jiù</b> xǐhuān shéi.</span></li>
		<li>你坐哪儿我<b>就</b>坐哪儿。<br/><span class="pynD">Nǐ zuò nǎr wǒ <b>jiù</b>zuò nǎr.</span></li>
	</ol>
	<p><b>练一练 (liàn yī liàn) Practise</b></p>
	<p>完成句子 (Wánchéng jùzi) Complete the Dialogues</p>
	<ol>
		<li>A: 你想喝点儿什么?<br/>
		A: <span class="pynD">Nǐ xiǎng hē diǎnr shénme?</span><br/>
		B: ________ <br/>
		B: <span class="pynD"> ________ .</span></li>
		<li>A: 我们什么时候去爬山?<br/>
		A: <span class="pynD">Wǒmen shénme shíhòu qù páshān?</span><br/>
		B: ________ <br/>
		B: <span class="pynD"> ________ .</span></li>
		<li>A: 你想跟谁一起去旅游?<br/>
		A: <span class="pynD">Nǐ xiǎng gēn shéi yīqǐ qù lǚyóu?</span><br/>
		B: ________ <br/>
		B: <span class="pynD"> ________ .</span></li>
	</ol>
</div>
<div id="ex1" class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<div class="container-fluid">
	<h3 class="sublesson">练习 (liàn xí) Exercises</h3>
	<h4 class="textSection">1. 朗读 下列 短语 和 句子<br/>Lǎngdú xiàliè duǎnyǔ hé jùzi<br/>Read the following phrases and sentences aloud.
	<audio controls="" preload="metadata" id="03-08-5"><source src="../mandarin/audio/03-08-5.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col">
		<p><b>满意</b>: 很<b>满意</b> / 不<b>满意</b> / 对服务员很<b>满意</b> / (那些房子) 你都不<b>满意</b>吗?
			<button type="button" id="n851x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g851x" onclick="myToggle(this.id);">英语</button>
		<span class="pyn" id="pyn851x"><b>mǎnyì</b>: hěn <b>mǎnyì</b> / bù <b>mǎnyì</b> / duì fúwùyuán hěn <b>mǎnyì</b> / (nàxiē fángzi) nǐ dōu bù <b>mǎnyì </b>ma?<br/></span>
		<span class="eng" id="eng851x">To be satisfied: Very satisfied / dissatisfied / satisfied with the waiter / (those houses) you are not satisfied?<br/></span></p>
		<p><b>害怕</b>: 不<b>害怕</b> / 别<b>害怕</b> / 我<b>害怕</b>他 / 往下看多<b>害怕</b>啊。
			<button type="button" id="n852x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g852x" onclick="myToggle(this.id);">英语</button>
		<span class="pyn" id="pyn852x"><b>hàipà</b>: bù <b>hàipà</b> / bié <b>hàipà</b> / wǒ <b>hàipà</b> tā / wǎng xià kàn duō <b>hàipà</b> a.<br/></span>
		<span class="eng" id="eng852x">To be afraid of, to be scared: Not afraid / Don't be afraid / I'm afraid of him / scared to look down.<br/></span></p>
		<p><b>见面</b>: <b>见</b>个<b>面</b> / 跟朋友<b>见面</b> / 见<b>见面</b> / 希望以后能再<b>见面</b>。
			<button type="button" id="n853x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g853x" onclick="myToggle(this.id);">英语</button>
		<span class="pyn" id="pyn853x"><b>jiànmiàn</b>: <b>jiàn</b> gè <b>miàn</b> / gēn péngyǒu <b>jiànmiàn</b> / jiàn <b>jiànmiàn</b> / xīwàng yǐhòu néng zài <b>jiànmiàn</b>.<br/></span>
		<span class="eng" id="eng853x">Meet: See you / Meet your friends / Meet / Hope to see you again later.<br/></span></p>
		<p><b>一会儿</b>: 玩儿<b>一会儿</b> / 看<b>一会儿</b>电视 / 我<b>一会儿</b>再去 / 你等我<b>一会儿</b>。
			<button type="button" id="n854x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g854x" onclick="myToggle(this.id);">英语</button>
		<span class="pyn" id="pyn854x"><b>yīhuǐr</b>: wánr<b> yīhuǐr</b> / kàn <b>yīhuǐr</b> diànshì / wǒ <b>yīhuǐr </b>zài qù / nǐ děng wǒ <b>yīhuǐr </b>.<br/></span>
		<span class="eng" id="eng854x">A while: Play for a while / Watch TV for a while / I'll be back in a minute / You wait for me for a while.<br/></span></p>
		<p><b>变化</b>: 没<b>变化</b> / <b>变化</b>很大 / <b>变化</b>太快 / 你几乎没<b>变化</b>。
			<button type="button" id="n855x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g855x" onclick="myToggle(this.id);">英语</button>
		<span class="pyn" id="pyn855x"><b>biànhuà</b>: méi <b>biànhuà</b> / <b>biànhuà</b> hěn dà / <b>biànhuà</b> tài kuài / nǐ jīhū méi <b>biànhuà </b>.<br/></span>
		<span class="eng" id="eng855x">Change: No change / Changed a lot / Change too fast / You hardly ever change.<br/></span></p>
		<br/>
	</div>
	<div id="ex2" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">2. 选择 恰当 的 词语 填空<br/>Xuǎnzé qiàdàng de cíyǔ tiánkòng<br/>Choose the proper words to fill in the blanks.</h4>
	<div class="col-xs-12 col">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="xhanD"><td>层</td><td>几乎</td><td>洗手间</td><td>电梯</td><td>害怕</td></tr>
			<tr class="pynD"><td>céng</td><td>jīhū</td><td>xǐshǒujiān</td><td>diàntī</td><td>hàipà</td></tr>
			<tr class="engD"><td>floor</td><td>almost</td><td>toilet</td><td>elevator</td><td>afraid</td></tr>
		</table>
		<ol>
			<li><span class="xhanD">_____ 里人太多了，我们走上去吧。</span><br/>
				<span class="pynD">_____ lǐ rén tài duōle, wǒmen zǒu shàngqù ba.</span></li>
			<li><span class="xhanD">你家住几 _____ ?</span><br/>
				<span class="pynD">Nǐ jiāzhù jǐ _____ ?</span></li>
			<li><span class="xhanD">没事儿，我一点儿也不 _____ 。</span><br/>
				<span class="pynD">Méishì er, wǒ yīdiǎnr yě bù _____ .</span></li>
			<li><span class="xhanD">我去一下 _____ ，马上回未。</span><br/>
				<span class="pynD">Wǒ qù yīxià _____ , mǎshàng huí wèi.</span></li>
			<li><span class="xhanD">我现在 _____ 每天都要用电脑。</span><br/>
				<span class="pynD">Wǒ xiànzài _____ měitiān dū yào yòng diànnǎo.</span></li>
		</ol>
	</div>
	<div class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<div class="col-xs-12 col">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="xhanD"><td>见面</td><td>变化</td><td>重要</td><td>熊猫</td><td>满意</td></tr>
			<tr class="pynD"><td>jiànmiàn</td><td>biànhuà</td><td>zhòngyào</td><td>xióngmāo</td><td>mǎnyì</td></tr>
			<tr class="engD"><td>meet</td><td>change</td><td>important</td><td>panda</td><td>satisfied</td></tr>
		</table>
		<ol start="6">
			<li><span class="xhanD">A: 您对我们的服务 _____ 吗?<br/>
				B: 不错，我玩儿得很高兴。</span><br/>
				<span class="pynD">A: Nín duì wǒmen de fúwù _____ ma?<br/>
				B: Bùcuò, wǒ wán er dé hěn gāoxìng.</span></li>
			<li><span class="xhanD">A: 周末你做什么了?<br/>
				B: 我去看 _____ 了。</span><br/>
				<span class="pynD">A: Zhōumò nǐ zuò shénmele?<br/>
				B: Wǒ qù kàn _____ le.</span></li>
			<li><span class="xhanD">A: 我们几点 _____ ?<br/>
				B: 三点半吧。</span><br/>
				<span class="pynD">A: Wǒmen jǐ diǎn _____ ?<br/>
				B: Sān diǎn bàn ba.</span></li>
			<li><span class="xhanD">A: 你看你，这几年一点儿 _____ 都没有。<br/>
				B: 是啊，我每天都运动。</span><br/>
				<span class="pynD">A: Nǐ kàn nǐ, zhè jǐ nián yīdiǎn er _____ dōu méiyǒu.<br/>
				B: Shì a, wǒ měitiān dū yùndòng.</span></li>
			<li><span class="xhanD">A: 这件衣服太贵了，别买了。<br/>
				B: 贵不贵不 _____ 你喜欢就行。</span><br/>
				<span class="pynD">A: Zhè jiàn yīfú tài guìle, bié mǎile<br/>
				B: Guì bù guì bù _____ nǐ xǐhuān jiùxíng.</span></li>
		</ol>
	</div>
	<div id="ex3" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">3. 用本课新学的语言点和词语描述图片<br/>Yòng běn kè xīn xué de yǔyán diǎn hé cíyǔ miáoshù túpiàn<br/>Describe the pictures using the newly-learned language points and words</h4>
	<div class="col-xs-12 col">
	<ul>
	<li><span class="xhanD"><b>A</b>: 您对这个房子 _____ 吗?</span><br/>
		<span class="pynD"><b>A</b>:  Nín duì zhège fángzi _____ ma?</span><br/><br/>
		<span class="xhanD"><b>B</b>: 有点儿贵，我想 _____ 看看别的房子。</span><br/>
		<span class="pynD"><b>B</b>: Yǒudiǎnr guì, wǒ xiǎng _____ kàn kàn bié de fángzi.</span><br/><br/>
		<span class="xhanD"><b>A</b>: 您打算买什么样的?</span><br/>
		<span class="pynD"><b>A</b>: Nín dǎsuàn mǎi shénme yàng de?</span><br/><br/>
		<span class="xhanD"><b>B</b>:  _____ 就 _____ 。</span><br/>
		<span class="pynD"><b>B</b>: _____ jiù _____ .</span><br/></li>
	<li><span class="xhanD"><b>A</b>: 你怎么生病了?你的感冒不是刚好吗?</span><br/>
		<span class="pynD"><b>A</b>: Nǐ zěnme _____ shēngbìngle? Nǐ de gǎnmào bùshì gānghǎo ma?</span><br/><br/>
		<span class="xhanD"><b>B</b>: 昨天下大雨，我没带伞。</span><br/>
		<span class="pynD"><b>B</b>: Zuótiān xià dàyǔ, wǒ mò dài sǎn.</span><br/><br/>
		<span class="xhanD"><b>A</b>:  _____ 去医院看病吧?</span><br/>
		<span class="pynD"><b>A</b>: _____ qù yīyuàn kànbìng ba?</span><br/><br/>
		<span class="xhanD"><b>B</b>: 不去了，我想睡 _____ 。</span><br/>
		<span class="pynD"><b>B</b>: Bù qùle, wǒ xiǎng shuì _____ .</span><br/></li>
	<li><span class="xhanD"><b>A</b>: 妈妈，吃苹果对 _____ 好，我们买一些吧。</span><br/>
		<span class="pynD"><b>A</b>: Māmā, chī píngguǒ duì _____ hǎo, wǒmen mǎi yīxiē ba.</span><br/><br/>
		<span class="xhanD"><b>B</b>: 好，你想吃几个就 _____ 。</span><br/>
		<span class="pynD"><b>B</b>: Hǎo, nǐ xiǎng chī jǐ gè jiù _____ .</span><br/><br/>
		<span class="xhanD"><b>A</b>: 那我们 _____ 买五个吧。</span><br/>
		<span class="pynD"><b>A</b>: Nà wǒmen _____ mǎi wǔ gè ba.</span><br/><br/>
		<span class="xhanD"><b>B</b>: 可以。</span><br/>
		<span class="pynD"><b>B</b>: Kěyǐ</span><br/></li>
	<li><span class="xhanD"><b>A</b>: 这两件衣服都很好看，你说我买哪件?</span><br/>
		<span class="pynD"><b>A</b>: Zhè liǎng jiàn yīfú dōu hěn hǎokàn, nǐ shuō wǒ mǎi nǎ jiàn?</span><br/><br/>
		<span class="xhanD"><b>B</b>: 就买哪件。</span><br/>
		<span class="pynD"><b>B</b>: Jiù mǎi nǎ jiàn.</span><br/><br/>
		<span class="xhanD"><b>A</b>: 这件蓝色的怎么样?</span><br/>
		<span class="pynD"><b>A</b>: Zhè jiàn lán sè de zěnme yàng?</span><br/><br/>
		<span class="xhanD"><b>B</b>: 怎么买蓝色的?你已经有两件了。</span><br/>
		<span class="pynD"><b>B</b>: Zěnme mǎi lán sè de? Nǐ yǐjīng yǒu liǎng jiànle.</span><br/></li> 
	</ul>
	</div>
	<div id="ex4" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">4. 根据 课文 回答 问题<br/>Gēnjù kèwén huídá wèntí<br/>Answer the questions according to the texts.</h4>
	<div class="col-xs-12 col-md-6 col">
		<ol>
			<li>
		<span class="xhanD">小丽最近在做什么?</span><br/>
			<button type="button" id="n851z" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g851z" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn851z">Xiǎolì zuìjìn zài zuò shénme?<br/></span>
		<span class="eng" id="eng851z">What has Xiaoli been doing recently?<br/></span>
			</li>
			<li>
		<span class="xhanD">小丽为什么不满意?</span><br/>
			<button type="button" id="n852z" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g582z" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn852z">Xiǎolì wèishéme bù mǎnyì?<br/></span>
		<span class="eng" id="eng852z">Why is Xiaoli not satisfied?<br/></span>
			</li>
			<li>
		<span class="xhanD">小明送给了马可什么东西?他为什么送马可东西?</span><br/>
			<button type="button" id="n853z" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g853z" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn853z">Xiǎomíng sòng gěile mǎ kě shénme dōngxī? Tā wèishéme sòng mǎ kě dōngxī?<br/></span>
		<span class="eng" id="eng853z">What did Xiaoming give Marco?<br/></span>
			</li>
			<li>
		<span class="xhanD">小丽和小刚在哪儿?做什么?</span><br/>
			<button type="button" id="n854z" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g854z" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn854z">Xiǎolì hé xiǎo gāng zài nǎ'er? Zuò shénme?<br/></span>
		<span class="eng" id="eng854z">Where are Xiaoli and Xiao just?<br/></span>
			</li>
			<li>
		<span class="xhanD">小丽要去哪儿?小刚也去吗?</span><br/>
			<button type="button" id="n855z" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g855z" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn855z">Xiǎolì yào qù nǎ'er? Xiǎo gāng yě qù ma?<br/></span>
		<span class="eng" id="eng855z">Where's Xiao Li going?<br/></span>
			</li>
			<li>
		<span class="xhanD">周太太为什么说自己胖了?</span><br/>
			<button type="button" id="n856z" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g856z" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn856z">Zhōu tàitài wèishéme shuō zìjǐ pàngle?<br/></span>
		<span class="eng" id="eng856z">Why did Mrs Chow say she was fat?<br/></span>
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
		<tr><td>见<b>面</b></td><td></td><td>考<b>试</b></td></tr>
		<tr><td>jiàn<b>miàn</b></td><td></td><td>kǎo<b>shì</b></td></tr>
		<tr><td></td><td><b>面试</b></td><td></td></tr>
		<tr><td></td><td><b>miànshì</b></td><td></td></tr>
	</table>
	</div>
	<div class="gameDiv">
	<table class="table table-centered">
		<tr><td><b>自</b>己</td><td></td><td><b>学</b>习</td></tr>
		<tr><td><b>zì</b>jǐ</td><td></td><td><b>xué</b>xí</td></tr>
		<tr><td></td><td><b>自学</b></td><td></td></tr>
		<tr><td></td><td><b>zìxué</b></td><td></td></tr>
	</table>
	</div>
	<div class="gameDiv">
	<table class="table table-centered">
		<tr><td><b>离开</b></td><td></td><td><b>结婚</b></td></tr>
		<tr><td><b>líkāi</b></td><td></td><td><b>jiéhūn</b></td></tr>
		<tr><td></td><td><b>离婚</b></td><td></td></tr>
		<tr><td></td><td><b>líhūn</b></td><td></td></tr>
	</table>
	</div>
	</div>
</div>
<div id="ap" class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<div class="container-fluid">
	<div class="col-xs-12">
	<h3>运用 (yùnyòng) Application</h3>
	<h4 class="textSection">1. Pair Work</h4>
	<p>Work in pairs . Make a survey of each other and fill in the questionnaire. Answer the questions using the structure "<b>Interrogative Pronoun + 就 + Interrogative Pronoun</b>".</p>
	<table class="table table-condensed table-reponsive table-bordered">
		<tr><th>问<br/>wèn</th><th>答<br/>dá</th></tr>
		<tr><td>你打算去哪儿旅游？<br/><span class="pynD">Nǐ dǎsuàn qù nǎr lǚyóu?</span></td>
			<td>哪儿好玩儿我就去哪儿。<br/><span class="pynD">Nǎr hǎowán er wǒ jiù qù nǎr.</span></td></tr>
		<tr><td>什么时候去?<br/><span class="pynD">Shénme shíhòu qù?</span></td><td></td></tr>
		<tr><td>怎么去?<br/><span class="pynD">Zěnme qù?</span></td><td></td></tr>
		<tr><td>路谁一起去?<br/><span class="pynD">Lù shéi yīqǐ qù?</span></td><td></td></tr>
		<tr><td>住在哪儿?<br/><span class="pynD">Zhù zài nǎr?</span></td><td></td></tr>
		<tr><td>到了旅游的地方吃什么?<br/><span class="pynD">Dàole lǚyóu dì dìfāng chī shénme?</span></td><td></td></tr>
	</table>
	<h4 class="sublesson">2. Group Work</h4>
	<p>Work in groups of 3-4. Describe one of your travel experiences to your group members, including how many times you've been to that place, when you went there, what you did, and what you'd like to do if you have a chance to be there once again</p>
	<table class="table table-responsive table-condensed table-bordered">
		<tr><th>什么地方<br/><span class="pynD">Shénme dìfāng</span></th>
			<th>去过几次<br/><span class="pynD">Qùguò jǐ cì</span></th>
			<th>是什么时候去的<br/><span class="pynD">Shì shénme shíhòu qù de</span></th>
			<th>做了什么<br/><span class="pynD">Zuòle shénme</span></th>
			<th>再去一次做什么<br/><span class="pynD">Zài qù yīcì zuò shénme</span></th></tr>
		<tr><td>北京<br/><span class="pynD">Běijīng</span></td>
			<td>两次<br/><span class="pynD">Liǎng cì</span></td>
			<td>2000年；前年<br/><span class="pynD">2000 Nián; qiánnián</span></td>
			<td>去长城<br/><span class="pynD">Qù chángchéng</span></td>
			<td>再去一次长城<br/><span class="pynD">Zài qù yīcì chángchéng</span></td></tr>
		<tr><td> &nbsp; </td><td></td><td></td><td></td><td></td></tr>
		<tr><td> &nbsp; </td><td></td><td></td><td></td><td></td></tr>
		<tr><td> &nbsp; </td><td></td><td></td><td></td><td></td></tr>
	</table>
	</div>
</div>
<div id="cs" class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<div class="container-fluid">
	<div class="col-xs-12">
	<h3>俗语 (súyǔ) Common Saying</h3>
	<h4 class="textSection">站得高，看得远<br/>Zhàn de gão, kàn de yuǎn<br/>The higher you stand, the farther you'll see.</h4>
	<p><b>站得高，看得远</b> (<b>zhàn de gão, kàn de yuǎn</b>) means the one who stands higher takes a broader view. 1t is also used metaphorically to indicate that we should view a problem from more than one aspect to obtain a more comprehensive understanding of it.</p>
	</div>
</div>
<div class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<?php
} else { header( 'Location: https://www.stephenmccready.asia/mi/index.php'); }
?>
</body>
</html>
