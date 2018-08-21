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
	<title>Level 3 - 5</title>
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
	<div class="jumbotron lessonHeaderLeft">Dì wǔ kè<br/>第五课<br/>Lesson 5</div>
	<div class="lessonHeaderRight"><h2>Wǒ zuìjìn yuè lái yuè pàng le<br/>我最近越来越胖了<br/><b>I am getting fatter and fatter lately</b></h2></div>
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
	<a class="btn btn-info btn-md" href="L3-E05.php" target="_blank">Workbook</a></p></div>
<div class="container-fluid">
	<h4 class="textSection">Kè wén yī. Zài Xiǎolì jiā.<br/>课文一。 在小丽家。<br/>Text 1. Át Xiaolis home.<br/>
	<audio controls="" preload="metadata" id="03-05-1"><source src="../mandarin/audio/03-05-1.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<b>朋友: </b>我听说你身体不舒服，怎么了?&nbsp;<button type="button" id="n511" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn511"><b>péngyǒu: </b>Wǒ tīngshuō nǐ shēntǐ bú shūfú, zěnme le?</span><br/>
		<b>小丽: </b>前几天有点儿发烧，现在好多了。&nbsp;<button type="button" id="n512" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn512"><b>Xiǎolì: </b>Qián jǐ tiān yǒudiǎnr fāshāo, xiànzài hǎoduō le.</span><br/>
		<b>朋友: </b>喝杯茶吧，这是我为你买的绿茶，很不错。&nbsp;<button type="button" id="n513" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn513"><b>péngyǒu: </b>Hē bēi chá bā, zhè shì wǒ wèi nǐ mǎi de lǜchá, hěn bùcuò.</span><br/>
		<b>小丽: </b>谢谢，我要吃药，不喝茶了。&nbsp;<button type="button" id="n514" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn514"><b>Xiǎolì: </b>Xièxiè, wǒ yào chī yào, bù hē chá le.</span><br/>
		<b>朋友: </b>那喝杯水吧。&nbsp;<button type="button" id="n515" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn515"><b>péngyǒu: </b>Nà hē bēi shuǐ ba.</span><br/>
		<b>小丽: </b>好的。&nbsp;<button type="button" id="n516" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn516"><b>Xiǎolì: </b>Hǎo de.</span><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<b>Friend:</b> I hear you're not feeling well. What's wrong?<br/>
		<b>Xiaoli:</b> A few days ago I had a fever. It's much better now.<br/>
		<b>Friend:</b> Have a cup of tea. This is green tea I bought for you. It's very good.<br/>
		<b>Xiaoli:</b> Thank you. I have to take my medicine. No tea.<br/>
		<b>Friend:</b> Drink a glass of water.<br/>
		<b>Xiaoli:</b> OK.<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>生词 (Shēngcí) New Words</i></th></tr>
			<tr><td>发烧</td><td>fā shāo</td><td>v</td><td>to have a fever</td></tr>
			<tr><td>为</td><td>wèi</td><td>prep</td><td>for</td></tr>
		</table>
		</div>
	</div>
	<div id="2" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">Kè wén èr. Zài dǎ diànhuà.<br/>课文二。 在打电话。<br/>Text 2. On the phone.<br/>
	<audio controls="" preload="metadata" id="03-05-2"><source src="../mandarin/audio/03-05-2.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<b>周太太: </b>对不起，我明天不能和你们出去玩儿了。&nbsp;<button type="button" id="n521" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn521"><b>Zhōu tàitài:</b> Duìbùqǐ, wǒ míngtiān bù néng hé nǐmen chūqù wánr le.</span><br/>
		<b>张太太: </b>为什么?怎么了?&nbsp;<button type="button" id="n522" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn522"><b>Zhāng tàitài:</b> Wèi shénme? Zěnme le?</span><br/>
		<b>周太太: </b>我儿子生病了，我要在家照顾他。&nbsp;<button type="button" id="n523" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn523"><b>Zhōu tàitài:</b> Wǒ érzǐ shēng bìng le, wǒ yào zài jiā zhàogù tā.</span><br/>
		<b>张太太: </b>他吃药了吗?要不要去医院?&nbsp;<button type="button" id="n524" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn524"><b>Zhāng tàitài: </b>Tā chī yào le ma? Yào bù yào qù yīyuàn?</span><br/>
		<b>周太太: </b>不用去医院，昨天吃了感冒药，现在好一些了。&nbsp;<button type="button" id="n525" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn525"><b>Zhōu tàitài: </b>Bùyòng qù yīyuàn, zuótiān chīle gǎnmào yào, xiànzài hǎo yīxiē le</span><br/>
		<b>张太太: </b>那我们下次再一起出去玩儿吧。&nbsp;<button type="button" id="n526" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn526"><b>Zhāng tàitài: </b>Nà wǒmen xià cì zài yīqǐ chūqù wánr ba</span><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<b>Mrs. Zhou:</b> I'm sorry, I can not go out with you tomorrow.<br/>
		<b>Mrs. Zhang:</b> Why? What happened?<br/>
		<b>Mrs. Zhou:</b> My son is sick, I am going to take care of him at home.<br/>
		<b>Mrs. Zhang:</b> Did he take medicine or go to the hospital?<br/>
		<b>Mrs. Zhou:</b> He didn't go to the hospital, he ate cold medicine yesterday, and is now better<br/>
		<b>Mrs. Zhang:</b> Let's go out together again next time<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>生词 (Shēngcí) New Words</i></th></tr>
			<tr><td>照顾</td><td>zhàogù</td><td>v</td><td>to take care of</td></tr>
			<tr><td>用</td><td>yòng</td><td>v</td><td>to need</td></tr>
			<tr><td>感冒</td><td>gǎnmào</td><td>v</td><td>to catch a cold</td></tr>
			<tr><th colspan="4"><i>专有名词 (Zhuān yǒu míngcí) Proper Nouns</i></th></tr>
			<tr><td>张</td><td>Zhāng</td><td colspan="2">Zhang, a surname</td></tr>
		</table>
		</div>
	</div>
	<div id="3" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">Kè wén sān. Zài Xiǎogāng jiā.<br/>课文三。在小刚家。<br/>Text 3. At Xiaogang's home.<br/>
	<audio controls="" preload="metadata" id="03-05-3"><source src="../mandarin/audio/03-05-3.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<b>小丽: </b>你最喜欢哪个季节?&nbsp;<button type="button" id="n531" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn531"><b>Xiǎo Lì:</b> Nǐ zuì xǐhuān nǎge jìjié?</span><br/>
		<b>小刚: </b>当然是春天，天气不那么冷了，草和树都绿了，花也开了。&nbsp;<button type="button" id="n532" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn532"><b>Xiǎo Gāng:</b> Dāngrán shì chūntiān, tiānqì bù nàme lěng le, cǎo hé shù dōu lǜ le, huā yě kāi le.</span><br/>
		<b>小丽: </b>我最喜欢夏天，因为我可以穿漂亮的裙子了。&nbsp;<button type="button" id="n533" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn533"><b>Xiǎo Lì:</b> Wǒ zuì xǐhuān xiàtiān, yīnwèi wǒ kěyǐ chuān piàoliang de qúnzi le.</span><br/>
		<b>小刚: </b>那我也喜欢夏天了。&nbsp;<button type="button" id="n534" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn534"><b>Xiǎo Gāng:</b> Nà wǒ yě xǐhuān xiàtiān le.</span><br/>
		<b>小丽: </b>怎么？你也有漂亮的裙子?&nbsp;<button type="button" id="n535" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn535"><b>Xiǎo Lì:</b> Zěnme? Nǐ yě yǒu piàoliang de qúnzi?</span><br/>
		<b>小刚: </b>不，我喜欢看你穿漂亮的裙子。&nbsp;<button type="button" id="n536" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn536"><b>Xiǎo Gāng:</b> Bù, wǒ xǐhuān kàn nǐ chuān piàoliang de qúnzi.</span><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<b>Xiaoli:</b> Which season do you like best?<br/>
		<b>Xiaogang:</b> Of course it is spring, the weather is not so cold, the grass and the trees are green, and the flowers are out.<br/>
		<b>Xiaoli:</b> I like summer most, because I can wear nice skirts.<br/>
		<b>Xiaogang:</b> Then I like summer too.<br/>
		<b>Xiaoli:</b> How? Do you also have beautiful skirts?<br/>
		<b>Xiaogang:</b> No, I like to see you wearing pretty skirts.<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>生词 (Shēngcí) New Words</i></th></tr>
			<tr><td>季节</td><td>jìjié</td><td>n</td><td>season</td></tr>
			<tr><td>当然</td><td>dāngrán</td><td>adv</td><td>of course</td></tr>
			<tr><td>春(天)</td><td>chūn (tiān)</td><td>n</td><td>spring</td></tr>
			<tr><td>草</td><td>cǎo</td><td>n</td><td>grass</td></tr>
			<tr><td>夏(天)</td><td>xià (tiān)</td><td>n</td><td>summer</td></tr>
			<tr><td>裙子</td><td>qúnzi</td><td>n</td><td>dress, skirt</td></tr>
		</table>
		</div>
	</div>
	<div id="4" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">Kè wén sì. Zài Xiǎogāng jiā.<br/>课文四。 在小刚家。<br/>Text 4. At Xiaogang's home.<br/>
	<audio controls="" preload="metadata" id="03-05-4"><source src="../mandarin/audio/03-05-4.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<b>小丽: </b>我最近越来越胖了。&nbsp;<button type="button" id="n541" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn541"><b>Xiǎolì: </b>Wǒ zuìjìn yuè lái yuè pàng le.</span><br/>
		<b>小刚: </b>谁说的?我觉得你越来越漂亮了。&nbsp;<button type="button" id="n542" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn542"><b>Xiǎogāng: </b>Shéi shuō de? Wǒ juédé nǐ yuè lái yuè piàoliang le.</span><br/>
		<b>小丽: </b>你看，这条裙子是去年买的，今年就不能穿了。&nbsp;<button type="button" id="n543" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn543"><b>Xiǎolì: </b>Nǐ kàn, zhè tiáo qúnzi shì qùnián mǎi de, jīnnián jiù bù néng chuān le.</span><br/>
		<b>小刚: </b>那是因为你吃得太多了，少吃点儿吧。&nbsp;<button type="button" id="n544" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn544"><b>Xiǎogāng: </b>Nà shì yīnwèi nǐ chī dé tài duō le, shǎo chī diǎnr ba.</span><br/>
		<b>小丽: </b>我做的饭越来越好吃，我能少吃吗?&nbsp;<button type="button" id="n545" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn545"><b>Xiǎolì: </b>Wǒ zuò de fàn yuè lái yuè hàochī, wǒ néng shǎo chī ma?</span><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<b>Xiaoli:</b> I'm getting fatter recently.<br/>
		<b>Xiaogang:</b> Who said that? I think you are more and more beautiful.<br/>
		<b>Xiaoli:</b> Look, this skirt was bought last year. I can't wear it this year.<br/>
		<b>Xiaogang:</b> That's because you eat too much. Eat less.<br/>
		<b>Xiaoli:</b> The more I cook the more delicious the food. How can I eat less?<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>生词 (Shēngcí) New Words</i></th></tr>
			<tr><td>最近</td><td>zuìjìn</td><td>adv</td><td>lately, recently</td></tr>
			<tr><td>越</td><td>yuè</td><td>adv</td><td>more, to a greater degree</td></tr>
		</table>
		</div>
	</div>
</div>
<div id="n1" class="dash"><a href="#0"> Back to top</a></div>
<div class="container-fluid">
	<h3 class="sublesson">汪释 (wāng shì) Notes</h3>
	<h4 class="textSection">1. "<b>了</b>" (<b>le</b>) Indicating a Change</h4>
	<p>Used at the end of a declarative sentence, the modal particle "<b>了</b>" (<b>le</b>) indicates a change in the situation or the occurence of a new situation.<br/>For example, "我现在没钱<b>了</b>" (Wǒ xiànzài méi qián <b>le</b>) means "<i>I used to have money, but now I don't</i>", implying a change. For example:</p>	
	<ol>
		<li>上个月很冷，现在天气不那么冷<b>了</b>。<br/>
			<span class="pynD">Shàng gè yuè hěn lěng, xiànzài tiānqì bù nàme lěng <b>le </b></span></li>
		<li>我前几天有点儿发烧，现在好多<b>了</b><br/>
			<span class="pynD">Wǒ qián jǐ tiān yǒudiǎnr fāshāo, xiànzài hǎoduō <b>le </b></span></li>
		<li>我现在喜欢夏天<b>了</b><br/>
			<span class="pynD">Wǒ xiànzài xǐhuān xiàtiān <b>le </b></span></li>
		<li>这条裙子是去年买的，今年就不能穿<b>了</b><br/>
			<span class="pynD">Zhè tiáo qúnzi shì qùnián mǎi de, jīnnián jiù bùnéng chuān <b>le </b></span></li>
	</ol>
	<p><b>练一练 (liàn yī liàn) Practise</b></p>
	<p>完成句子 (Wánchéng jùzi) Complete the sentences</p>
	<ol>
		<li>上个月草和树还没绿，花还没开，____ 。<br/>
			<span class="pynD">Shàng gè yuè cǎo hé shù hái méi lǜ, huā hái méi kāi, ____ .</span></li>
		<li>昨天腿有点儿疼，今天早上 ____ 。<br/>
			<span class="pynD">Zuótiān tuǐ yǒudiǎnr téng, jīntiān zǎoshang ____ .</span></li>
		<li>这些水果是我上个星期买的，现在都 ____ 。<br/>
			<span class="pynD">Zhèxiē shuǐguǒ shì wǒ shàng gè xīngqí mǎi de, xiànzài dōu ____ .</span></li>
	</ol>
	<div id="n2" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">2. The Structure "<b>越来越</b> + Adj/Mental V" （<b>yuè lái yuè</b>: more and more）</h4>
	<p>Followed by an adjective or a mental verb as in "<b>越来越冷</b>" (<b>yuè lái yuè lěng</b>：<i>colder and colder</i>) and "<b>越来越喜欢</b>" (<b>yuè lái yuè xǐhuān</b>：<i>like.. .more and more</i>), "<b>越来越</b>" （<b>yuè lái yuè</b>: <i>more and more</i>） indicates the change in degree occurs as time passes by.<br/><b>Note</b> that no adverb of degree is used before the adjective or mental verb, so phrases like "<b>越来越很热</b>" (<b>yuè lái yuè hěn rè</b>) and "<b>越来越非常想</b>" (<b>yuè lái yuè fēicháng xiǎng</b>) are unacceptable. For example:</p>	
	<ol>
		<li>我认识的汉字<b>越来越</b>多。<br/>
			<span class="pynD">Wǒ rènshì de Hànzì <b>yuè lái yuè</b> duō.</span></li>
		<li>你<b>越来越</b>漂亮。<br/>
			<span class="pynD">Nǐ <b>yuè lái yuè</b> piàoliang.</span></li>
		<li>我<b>越来越</b>喜欢运动。<br/>
			<span class="pynD">Wǒ <b>yuè lái yuè</b> xǐhuān yùndòng.</span></li>
		<li>我做的饭<b>越来越</b>好吃。<br/>
			<span class="pynD">Wǒ zuò de fàn <b>yuè lái yuè</b> hào chī.</span></li>
	</ol>
	<p><b>练一练 (liàn yī liàn) Practise</b></p>
	<p>完成句子 (Wánchéng jùzi) Complete the sentences</p>
	<ol>
		<li>最近天气 ____ 。<br/>
			<span class="pynD">Zuìjìn tiānqì ____ .</span></li>
		<li>她每天都运动，现在 ____ 。<br/>
			<span class="pynD">Tā měitiān dū yùndòng, xiànzài ____ .</span></li>
		<li>快要考试了，我 ____ 。<br/>
			<span class="pynD">Kuàiyào kǎoshìle, wǒ ____ .</span></li>
		<li>孩子还没有回来，妈妈 ____ 。<br/>
			<span class="pynD">Hái zǐ huán méiyǒu huí lái, māmā ____ .</span></li>
	</ol>
</div>
<div id="ex1" class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<div class="container-fluid">
	<h3 class="sublesson">练习 (liàn xí) Exercises</h3>
	<h4 class="textSection">1. 朗读 下列 短语 和 句子<br/>Lǎngdú xiàliè duǎnyǔ hé jùzi<br/>Read the following phrases and sentences aloud.
	<audio controls="" preload="metadata" id="03-05-5"><source src="../mandarin/audio/03-05-5.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col">
		1. 照顾: 照顾孩子 / 照顾小狗 / 照顾得很好 / 我要在家照顾他。<br/>
			<button type="button" id="n551x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g551x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn551x">Zhàogù: Zhàogù háizi / zhàogù xiǎo gǒu / zhàogù dé hěn hǎo / wǒ yào zàijiā zhàogù tā.<br/></span>
		<span class="eng" id="eng551x">Take care of: take care of the children / take care of the puppy / well taken care of / I will take care of him at home.<br/></span>
		<br/>
		2. 裙子: 一条裙子 / 漂亮的裙子 / 穿裙子 / 我喜欢看你穿漂亮的裙子。<br/>
			<button type="button" id="n552x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g552x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn552x">Qúnzi: Yītiáo qúnzi / piàoliang de qúnzi / chuān qúnzi / wǒ xǐhuān kàn nǐ chuān piàoliang de qúnzi.<br/></span>
		<span class="eng" id="eng552x">Skirt: A skirt / a beautiful skirt / wear a skirt / I like to see you wear a beautiful skirt.<br/></span>
		<br/>
		3. 用: 不用 / 不用上课 / 不用吃药 / 不用去医院。<br/>
			<button type="button" id="n553x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g553x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn553x">Yòng: Bùyòng / bùyòng shàngkè / bùyòng chī yào / bùyòng qù yīyuàn.<br/></span>
		<span class="eng" id="eng553x">Use: no / no class / No medicine / No need to go to the hospital.<br/></span>
		<br/>
		4. 最近: 最近几天 / 最近几个月 / 我最近有点儿累 / 我最近越来越胖了。<br/>
			<button type="button" id="n554x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g554x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn554x">Zuìjìn: Zuìjìn jǐ tiān / zuìjìn jǐ gè yuè / wǒ zuìjìn yǒudiǎnr lèi / wǒ zuìjìn yuè lái yuè pàngle.<br/></span>
		<span class="eng" id="eng554x">Recently: In recent days / in recent months / I've been a little tired recently / I've been getting fatter recently.<br/></span>
		<br/>
		5. 为: 为孩子做饭 / 为妈妈买衣服 / 为朋友准备礼物 / 这是我为你买的绿茶。<br/>
			<button type="button" id="n555x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g555x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn555x">Wèi: Wèi háizi zuò fàn / Wèi māmā mǎi yīfú / wèi péngyǒu zhǔnbèi lǐwù / zhè shì wǒ wèi nǐ mǎi de lǜchá.<br/></span>
		<span class="eng" id="eng555x">For: Cooking for children / buying clothes for mom / preparing gifts for friends / This is the green tea I bought for you.<br/></span>
		<br/>
	</div>
	<div id="ex2" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">2. 选择 恰当 的 词语 填空<br/>Xuǎnzé qiàdàng de cíyǔ tiánkòng<br/>Choose the proper words to fill in the blanks.</h4>
	<div class="col-xs-12 col">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="xhanD"><td>草</td><td>最近</td><td>为</td><td>发烧</td><td>裙子</td></tr>
			<tr class="pynD"><td>cǎo</td><td>zuìjìn</td><td>wèi</td><td>fāshāo</td><td>qúnzi</td></tr>
			<tr class="engD"><td>grass</td><td>recently</td><td>for</td><td>fever</td><td>skirt</td></tr>
		</table>
		<ol>
			<li>
				<span class="xhanD">我是不是 ____ 了？怎么总是觉得冷？</span><br/>
				<span class="pynD">Wǒ shì bùshì ____ le? Zěnme zhǒngshì juédé lěng?</span>
			</li>
			<li>
				<span class="xhanD">春天不冷不热， ____ 都是绿的。</span><br/>
				<span class="pynD">Chūntiān bù lěng bù rè, ____ dōu shì lǜ de.</span>
			</li>
			<li>
				<span class="xhanD">快来看一下，这是我 ____ 你买的衣服。</span><br/>
				<span class="pynD">Kuài lái kàn yīxià, zhè shì wǒ ____ nǐ mǎi de yīfú.</span>
			</li>
			<li>
				<span class="xhanD">这条 ____ 真好看，是新买的吗？</span><br/>
				<span class="pynD">Zhè tiáo ____ zhēn hǎokàn, shì xīn mǎi de ma?</span>
			</li>
			<li>
				<span class="xhanD">小王在忙什么呢?你 ____ 见过他吗？</span><br/>
				<span class="pynD">Xiǎo wáng zài máng shénme ne? Nǐ ____ jiànguò tā ma?</span>
			</li>
		</ol>
		<div class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="xhanD"><td>当然</td><td>照顾</td><td>用</td><td>季节</td><td>夏天</td></tr>
			<tr class="pynD"><td>dāngrán</td><td>zhàogù</td><td>yòng</td><td>jìjié</td><td>xiàtiān</td></tr>
			<tr class="engD"><td>of course</td><td>care</td><td>with</td><td>season</td><td>summer</td></tr>
		</table>
		<ol start="6">
			<li>
				<span class="xhanD">
				A: 来一个西瓜。<br/>
				B: 这 ____ 个的西瓜又大又甜， 多来几个吧。</span><br/>
				<span class="pynD">
				A: Lái yīgè xīguā.<br/>
				B: Zhè ____ gè de xīguā yòu dà yòu tián, duō lái jǐ gè ba.</span><br/>
			</li>
			<li>
				<span class="xhanD">
				A: 今年 ____ 一点儿也不热。<br/>
				B: 是吗?我怎么觉得快热死了!</span><br/>
				<span class="pynD">
				A: Jīnnián ____ yīdiǎnr yě bù rè.<br/>
				B: Shì ma? Wǒ, zěnme juédé kuài rè sǐle!</span><br/>
			</li>
			<li>
				<span class="xhanD">
				A: 明天考试，你现在就睡觉了?不再看看书了?
				B: 不 ____ 看了，我已经复习好了。</span><br/>
				<span class="pynD">
				A: Míngtiān kǎoshì, nǐ xiànzài jiù shuìjiàole? Bù zài kàn kànshūle?<br/>
				B: Bù ____ kànle, wǒ yǐjīng fùxí hào le</span><br/>
			</li>
			<li>
				<span class="xhanD">
				A: 明天阴天，你还去看比赛吗?<br/>
				B: 我 ____ 要去，这是我最喜欢的比赛!</span><br/>
				<span class="pynD">
				A: Míngtiān yīn tiān, nǐ hái qù kàn bǐsài ma?<br/>
				B: Wǒ ____ yào qù, zhè shì wǒ zuì xǐhuān de bǐsài!</span>
			</li>
			<li>
				<span class="xhanD">
				A: 这是你家的小狗吗?真漂亮!谁 ____ 它?<br/>
				B: 我妈妈。</span><br/>
				<span class="pynD">
				A: Zhè shì nǐ jiā de xiǎo gǒu ma? Zhēn piàoliang! Shéi ____ tā?<br/>
				B: Wǒ māmā.</span>
			</li>
		</ol>
	</div>
	<div id="ex3" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">3. 用本课新学的语言点和词语描述图片<br/>Yòng běn kè xīn xué de yǔyán diǎn hé cíyǔ miáoshù túpiàn<br/>Describe the pictures using the newly-learned language points and words</h4>
	<div class="col-xs-12 col">
	<div class="well well-sm clearfix">
		<div class="col-xs-3 col clearfix"><img src="img/3.05.Ex3.1.png" alt="Women with fever"/></div>
		<div class="col-xs-9 col">
		<span class="xhanD"><b>A</b>: 儿子怎么没去上学?</span><br/>
		<span class="pynD"><b>A</b>: Érzi zěnme méi qù shàngxué?</span><br/>
		<span class="xhanD"><b>B</b>: 他 ____ 。</span><br/>
		<span class="pynD"><b>B</b>: Tā ____ .</span><br/>
		<span class="xhanD"><b>A</b>: 最近天气不太好。</span><br/>
		<span class="pynD"><b>A</b>: Zuìjìn tiānqì bù tài hǎo.</span><br/>
		<span class="xhanD"><b>B</b>: 对，天气 ____ ，他穿得太少了。</span><br/>
		<span class="pynD"><b>B</b>: Duì, tiānqì ____ , tā chuān dé tài shǎole.</span><br/>
		</div>
	</div>
	<div class="well well-sm clearfix">
		<div class="col-xs-9 col"> 
		<span class="xhanD"><b>A</b>: 天 ____ 。你带伞了吗?</span><br/>
		<span class="pynD"><b>A</b>: Tiān ____ . Nǐ dài sǎnle ma?</span><br/>
		<span class="xhanD"><b>B</b>: 没有。</span><br/>
		<span class="pynD"><b>B</b>: Méiyǒu</span><br/>
		<span class="xhanD"><b>A</b>: 那我们快点儿走吧，就要 ____ 。</span><br/>
		<span class="pynD"><b>A</b>: Nà wǒmen kuài diǎnr zǒu ba, jiù yào ____ .</span><br/>
		<span class="xhanD"><b>B</b>: 好的。</span><br/>
		<span class="pynD"><b>B</b>: Hǎo de.</span><br/>
		</div>
		<div class="col-xs-3 col clearfix"><img src="img/3.05.Ex3.2.png" alt="Dark Cloudy Sky"/></div>
	</div>
	<div class="well well-sm clearfix">
		<div class="col-xs-3 col clearfix"><img src="img/3.05.Ex3.3.png" alt="Boy doing homework"/></div>
		<div class="col-xs-9 col"> 
		<span class="xhanD"><b>A</b>: 你昨天晚上没出去玩儿?</span><br/>
		<span class="pynD"><b>A</b>: Nǐ zuótiān wǎnshàng méi chūqù wánr?</span><br/>
		<span class="xhanD"><b>B</b>: 没有，一直在宿舍写作业呢。</span><br/>
		<span class="pynD"><b>B</b>: Méiyǒu, yīzhí zài sùshè xiě zuòyè ne.</span><br/>
		<span class="xhanD"><b>A</b>: 你最近真是 ____ 努力了。</span><br/>
		<span class="pynD"><b>A</b>: Nǐ zuìjìn zhēnshi ____ nǔlìle.</span><br/>
		<span class="xhanD"><b>B</b>: 你看，我的汉语是不是 ____ ?</span><br/>
		<span class="pynD"><b>B</b>: Nǐ kàn, wǒ de hànyǔ shì bùshì ____ ?</span><br/>
		</div>
	</div>
	<div class="well well-sm clearfix">
		<div class="col-xs-9 col">
		<span class="xhanD"><b>A</b>: 你现在回来得 ____ 。</span><br/>
		<span class="pynD"><b>A</b>: Nǐ xiànzài huílái dé ____ .</span><br/>
		<span class="xhanD"><b>B</b>: 最近 ____ 忙</span><br/>
		<span class="pynD"><b>B</b>: Zuìjìn ____ máng</span><br/>
		<span class="xhanD"><b>A</b>: 办公室有那么多事吗?</span><br/>
		<span class="pynD"><b>A</b>: Bàngōngshì yǒu nàme duō shì ma?</span><br/>
		<span class="xhanD"><b>B</b>: 经理去美国了，我要 ____ 。</span><br/>
		<span class="pynD"><b>B</b>: Jīnglǐ qù měiguóle, wǒ yào ____ .</span><br/>
		</div>
		<div class="col-xs-3 col clearfix"><img src="img/3.05.Ex3.4.png" alt="Man trying on pants"/></div>
	</div>
	</div>
	<div id="ex4" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">4. 根据 课文 回答 问题<br/>Gēnjù kèwén huídá wèntí<br/>Answer the questions according to the texts.</h4>
	<div class="col-xs-12 col-md-6 col">
		<ol>
			<li>
		<span class="xhanD">小丽怎么不舒服了?</span><br/>
			<button type="button" id="n11x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g11x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn11x">Xiǎolì zěnme bú shūfúle?<br/></span>
		<span class="eng" id="eng11x">Why is Xiaoli not feeling well?<br/></span>
			</li>
			<li>
		<span class="xhanD">现在小丽要做什么?</span><br/>
			<button type="button" id="n12x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g12x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn12x">Xiànzài Xiǎolì yào zuò shénme?<br/></span>
		<span class="eng" id="eng12x">What's XiaoLi doing now?<br/></span>
			</li>
			<li>
		<span class="xhanD">周太太能出去玩儿吗? 为什么?</span><br/>
			<button type="button" id="n13x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g13x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn13x">Zhōu tàitài néng chūqù wán er ma? Wèishénme?<br/></span>
		<span class="eng" id="eng13x">Can Mrs. Zhou go out? Why?<br/></span>
			</li>
			<li>
		<span class="xhanD">小丽喜欢哪个季节? 为什么?</span><br/>
			<button type="button" id="n14x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g14x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn14x">Xiǎolì xǐhuān nǎge jìjié? Wèishénme?<br/></span>
		<span class="eng" id="eng14x">What season does Xiaoli like? Why?<br/></span>
			</li>
			<li>
		<span class="xhanD">小刚喜欢哪个季节? 为什么?</span><br/>
			<button type="button" id="n15x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g15x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn15x">Xiǎogāng xǐhuān nǎge jìjié? Wèishénme?<br/></span>
		<span class="eng" id="eng15x">What season does Xiaogang like? Why?<br/></span>
			</li>
			<li>
		<span class="xhanD">小丽最近怎么了? 为什么?</span><br/>
			<button type="button" id="n16x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g16x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn16x">Xiǎolì zuìjìn zěnmele? Wèishénme?<br/></span>
		<span class="eng" id="eng16x">What's the matter with Xiaoli recently? Why?<br/></span>
			</li>
		</ol>
	</div>
</div>
<div id="ch" class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<div class="container-fluid">
	<div class="col-xs-12">
	<h3>汉字 (Hànzì) Characters</h3>
	<h4 class="textSection">1. 会意字 (huìyì zì) Associative compounds</h4>
	<p>When creating Chinese characters, people in ancient times sometimes combined two or more single-component characters into one character. The meaning of the compound one was the meanings of the single-component characters added together. For example:</p>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="active">
				<th>汉字<br/>Hànzì<br/>Character</th>
				<th>汉字的意思<br/>Hànzì de yìsi<br/>Meaning</th>
			</tr>
			<tr><td>明<br/>míng<br/>bright</td>
				<td>太阳和月亮在一起，尤明。<br/>Tàiyáng hé yuèliàng zài yīqǐ, yóu míng<br/>The sun (日）and the moon（月）are combined together to mean "bright."</td></tr>
			<tr><td>休<br/>xiū<br/>rest</td>
				<td>人靠在树上休息。<br/>Rén kào zài shù shàng xiūxí.<br/>A person rests on a tree.</td></tr>
			<tr><td>从<br/>cóng<br/>From</td>
				<td>一个人跟着另一个人。<br/>Yīgè rén gēnzhe lìng yīgè rén.<br/>A person is walking behind another.</td></tr>
			<tr><td>看<br/>kàn<br/>see</td>
				<td>手放在眼睛上，看远方。<br/>Shǒu fàng zài yǎnjīng shàng, kàn yuǎnfāng.<br/>Hold one's hand over one's eye to look into the distance.</td></tr>
		</table>
	</div>
	<h4 class="textSection">2. 旧字新词&nbsp;(Jiù zì xīn cí)&nbsp;Word Game: Old Words From New Words</h4>
	<div class="gameDiv">
	<table class="table table-centered">
		<tr><td><b>听</b></td><td></td><td><b>说</b></td></tr>
		<tr><td><b>tīng</b></td><td></td><td><b>shuō</b></td></tr>
		<tr><td></td><td><b>听说</b></td><td></td></tr>
		<tr><td></td><td><b>tīngshuō</b></td><td></td></tr>
	</table>
	</div>
	<div class="gameDiv">
	<table class="table table-centered">
		<tr><td><b>有</b></td><td></td><td><b>一点儿</b></td></tr>
		<tr><td><b>yǒu</b></td><td></td><td><b>yīdiǎnr</b></td></tr>
		<tr><td></td><td><b>有点儿</b></td><td></td></tr>
		<tr><td></td><td><b>yǒudiǎnr</b></td><td></td></tr>
	</table>
	</div>
	<div class="gameDiv">
	<table class="table table-centered">
		<tr><td><b>草</b></td><td></td><td><b>地</b>方</td></tr>
		<tr><td><b>fāng</b></td><td></td><td><b>de</b>fāng</td></tr>
		<tr><td></td><td><b>草方</b></td><td></td></tr>
		<tr><td></td><td><b>cǎofāng</b></td><td></td></tr>
	</table>
	</div>
	</div>
</div>
<div id="ap" class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<div class="container-fluid">
	<div class="col-xs-12">
	<h3>运用 (yùnyòng) Application</h3>
	<h4 class="textSection">1. Pair Work</h4>
	<p>Work in pairs. Complete the following story based on the hints given and add an ending. Make good use of "越来越" (yuè lái yuè) and "了" (le)</p>
	<p>冬天快到了，天气 ________ 小红起床起得 ________ 以<br/>
	前她六点起床，现在 ________ 。以前她常常运动，现在 ________ 。<br/>
	因为天气冷，所以小红吃得也 ________ 以前她晚上只吃一点<br/>
	儿米饭，现在 ________ 。<br/>
	一个月以后， ____________________ 。</p>
	<p class="pynD">
	Dōngtiān kuài dàole, tiānqì ________ xiǎo hóng qǐchuáng qǐ dé ________ yǐ<br/>
	qián tā liù diǎn qǐchuáng, xiànzài ________ . Yǐqián tā chángcháng yùndòng, xiànzài ________ .<br/>
	Yīn wéi tiānqì lěng, suǒyǐ xiǎo hóng chī dé yě ________ yǐqián tā wǎnshàng zhǐ chī yīdiǎn<br/>
	er mǐfàn, xiànzài ________ .<br/>
	Yīgè yuè yǐhòu, ____________________ .<br/>
	</p>
	<h4 class="sublesson">2. Group Work</h4>
	<p>Work in groups of 3-4. One talks about the changes in his/her habits, and the others take notes</p>
	
	<table class="table table-centered">
		<tr><th>以前<br/>yǐqián<br/>before</th><th>现在<br/>xiànzài<br/>now</th>
		<tr><td>不喜欢喝咖非<br/>Bù xǐhuān hē kāfēi</td><td>喜欢喝咖啡丁<br/>xǐhuān hē kāfēile</td></tr>
		<tr><td>&nbsp;</td><td></td></tr>
		<tr><td>&nbsp;</td><td></td></tr>
		<tr><td>&nbsp;</td><td></td></tr>
	</table>
	</div>
</div>
<div id="cs" class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<div class="container-fluid">
	<div class="col-xs-12">
	<h3>俗语 (súyǔ) Common Saying</h3>
	<h4 class="textSection">药到病除<br/>Yàodào bìngchú</h4>
	<p>The minute the medicine is used, the disease is cured</p>
	<p>"<b>药到病除</b>" (<b>yàodào bìngchú</b>) means a disease is cured as soon as some medicine is used. It is used to describe a skillful doctor who can prescribe just the right medicine. Now it is also a metaphor of one's ability to find the crux of a problem and thus solve it immediately.</p>
	</div>
</div>
<div class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<?php
} else { header( 'Location: https://www.stephenmccready.asia/mi/index.php'); }
?>
</body>
</html>
