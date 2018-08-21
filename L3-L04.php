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
	<title>Level 3 - 4</title>
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
	<div class="jumbotron lessonHeaderLeft">Dì sì kè<br/>第四课<br/>Lesson 4</div>
	<div class="lessonHeaderRight"><h2>Tā zǒng shì xiàozhe gēn kèrén shuōhuà<br/>她总是笑着跟客人说话<br/><b>She always smiles when talking to customers</b></h2></div>
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
	<a class="btn btn-info btn-md" href="L3-E04.php" target="_blank">Workbook</a></p></div>
<div class="container-fluid">
	<h4 class="sublesson"></h4>
	<h4 class="textSection">Kè wén yī. Zài jiàoshì.<br/>课文一。在教室。<br/>Text 1. In the classroom.<br/>
	<audio controls="" preload="metadata" id="03-04-1"><source src="../mandarin/audio/03-04-1.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<b>小明: </b>这是你们比赛的照片吗?&nbsp;<button type="button" id="n11" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn11"><b>Xiǎomíng: </b>Zhè shì nǐmen bǐsài de zhàopiàn ma?</span><br/>
		<b>马可: </b>是，这是我们比赛后照的。&nbsp;<button type="button" id="n12" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn12"><b>Mǎkě: </b>Shì, zhè shì wǒmen bǐsài hòu zhào de.</span><br/>
		<b>小明: </b>照得不错，你们都是一个年级的吗?&nbsp;<button type="button" id="n13" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn13"><b>Xiǎomíng: </b>Zhào de búcuò, nǐmen dōu shì yí ge niánjí de ma?</span><br/>
		<b>马可: </b>不是。那个又高又漂亮的女孩儿是二年级的。&nbsp;<button type="button" id="n14" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn14"><b>Mǎkě: </b>Bú shì. Nàge yòu gāo yòu piàoliang de nǚháir shì èr niánjí de.</span><br/>
		<b>小明: </b>旁边那个拿着书笑的人是谁?&nbsp;<button type="button" id="n15" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn15"><b>Xiǎomíng: </b>Pángbiān nàge názhe shū xiào de rén shì shéi?</span><br/>
		<b>马可: </b>那是我!&nbsp;<button type="button" id="n16" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn16"><b>Mǎkě: </b>Nà shì wǒ!</span><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<b>Xiaoming: </b>Is this a photo of your game?<br/>
		<b>Marco: </b>Yes, we took it after the game.<br/>
		<b>Xiaoming: </b>Well done, are you all in one grade?<br/>
		<b>Marco: </b>No. The tall and pretty girl is in the second grade.<br/>
		<b>Xiaoming: </b>Who is the man with the book laughing next to her?<br/>
		<b>Marco: </b>That's me!<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>生词 (Shēngcí) New Words</i></th></tr>
			<tr><td>比赛</td><td>bǐsài</td><td>n</td><td>match, competition</td></tr>
			<tr><td>照片</td><td>zhàopiàn</td><td>n</td><td>photo</td></tr>
			<tr><td>年级</td><td>niánjí</td><td>n</td><td>grade</td></tr>
			<tr><td>又</td><td>yòu</td><td>adv</td><td>and</td></tr>
			<tr><th colspan="4"><i>专有名词 (Zhuān yǒu míngcí) Proper Nouns</i></th></tr>
			<tr><td>小明</td><td colspan="3">Xiǎomíng</td></tr>
			<tr><td>马可</td><td>Mǎkě</td><td colspan="2">Marco</td></tr>
		</table>
		</div>
	</div>
	<div id="2" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="sublesson"></h4>
	<h4 class="textSection">Kè wén èr. Zài jiàoshì.<br/>课文二。 在教室。<br/>Text 2. In the classroom.<br/>
	<audio controls="" preload="metadata" id="03-04-2"><source src="../mandarin/audio/03-04-2.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<b>小丽: </b>你觉得小红怎么样?&nbsp;<button type="button" id="n21" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn21"><b>Xiǎolì: </b>Nǐ juédé Xiǎohóng zěnmeyàng?</span><br/>
		<b>同学: </b>她又聪明又热情，也很努力。&nbsp;<button type="button" id="n22" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn22"><b>tóngxué: </b>Tā yòu cōngmíng yòu rèqíng, yě hěn nǔlì.</span><br/>
		<b>小丽: </b>我看她总是笑着回答老师的问题。&nbsp;<button type="button" id="n23" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn23"><b>Xiǎolì: </b>Wǒ kàn tā zǒngshì xiàozhe huídá lǎoshī de wèntí.</span><br/>
		<b>同学: </b>她对每个人都笑，也常常对我笑。&nbsp;<button type="button" id="n24" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn24"><b>tóngxué: </b>Tā duì měi gè rén dōu xiào, yě chángcháng duì wǒ xiào.</span><br/>
		<b>小丽: </b>你是不是喜欢她啊?&nbsp;<button type="button" id="n25" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn25"><b>Xiǎolì: </b>Nǐ shì bù shì xǐhuān tā a?</span><br/>
		<b>同学: </b>喜欢她的人太多了，你看那些拿着鲜花站在门口的，都是等她的。&nbsp;<button type="button" id="n26" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn26"><b>tóngxué: </b>Xǐhuān tā de rén tài duō le, nǐ kàn nàxiē názhe xiānhuā zhàn zài ménkǒu de, dōu shì děng tā de.</span><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<b>Xiǎolì: </b>What do you think of Xiao Hong?<br/>
		<b>student: </b>She's smart, enthusiastic and hard-working.<br/>
		<b>Xiǎolì: </b>I think she always smiles and answers the teacher's questions.<br/>
		<b>student: </b>She smiles at everyone, and often smiles at me.<br/>
		<b>Xiǎolì: </b>Do you like her?<br/>
		<b>student: </b>Too many people like her, you see those standing in the doorway with flowers, they are waiting for her.<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>生词 (Shēngcí) New Words</i></th></tr>
			<tr><td>聪明</td><td>cōngming</td><td>adj.</td><td>clever, smart</td></tr>
			<tr><td>热情</td><td>rèqíng</td><td>adj.</td><td>warm, enthusiastic</td></tr>
			<tr><td>努力</td><td>nǔlì</td><td>adj.</td><td>hard-working</td></tr>
			<tr><td>总是</td><td>zhǒngshì</td><td>adv.</td><td>always</td></tr>
			<tr><td>回答</td><td>huídá</td><td>v.</td><td>to answer</td></tr>
			<tr><td>站</td><td>zhàn</td><td>v.</td><td>to stand</td></tr>
		</table>
		</div>
	</div>
	<div id="3" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">Kè wén sān. Zài chāoshì ménkǒu.<br/>课文三。在超市门口。<br/>Text 3. Át the entrance of a supermarket.<br/>
	<audio controls="" preload="metadata" id="03-04-3"><source src="../mandarin/audio/03-04-3.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<b>小刚: </b>我有点儿<b>饿</b>了，我们进<b>超市</b>买点儿东西吧。&nbsp;<button type="button" id="n31" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn31"><b>Xiǎogāng: </b>Wǒ yǒudiǎnr <b>è</b> le, wǒmen jìn <b>chāoshì</b> mǎi diǎnr dōngxī ba.</span><br/>
		<b>小丽: </b>好啊，这家<b>超市</b>的<b>蛋糕</b>、又便宜又好吃，一块只要2.99元 ① 。&nbsp;<button type="button" id="n32" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn32"><b>Xiǎolì: </b>Hǎo a, zhè jiā <b>chāoshì</b> de <b>dàngāo</b>, yòu piányí yòu hàochī, yí kuàir zhǐ yào èr diǎn jiǔ jiǔ yuan.</span><br/>
		<b>小刚: </b>我们买两块，回家吃着<b>蛋糕</b>看电视，怎么样?&nbsp;<button type="button" id="n33" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn33"><b>Xiǎogāng: </b>Wǒmen mǎi liǎng kuàir, huí jiā chīzhe <b>dàngāo</b> kàn diànshì, zěnmeyàng?</span><br/>
		<b>小丽: </b>好啊，我再去买一些喝的。&nbsp;<button type="button" id="n34" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn34"><b>Xiǎolì: </b>Hǎo a, wǒ zài qù mǎi yīxiē hē de.</span><br/>
		<b>小刚: </b>喝着咖啡吃<b>课蛋糕</b>，太好了!&nbsp;<button type="button" id="n35" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn35"><b>Xiǎogāng: </b>Hēzhe kāfēi chī <b>dàngāo</b>, tài hǎo le!</span><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<b>Xiǎogāng: </b>I'm a little hungry, let's go into the supermarket and buy something.<br/>
		<b>Xiǎolì: </b>OK, the cake in this supermarket is cheap and tasty. It's only 2.99 yuan.<br/>
		<b>Xiǎogāng: </b>Let's buy two, then go home and have a cake and watch TV.<br/>
		<b>Xiǎolì: </b>OK, I'll go buy some drinks.<br/>
		<b>Xiǎogāng: </b>It's good to drink coffee and eat cake!<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>生词 (Shēngcí) New Words</i></th></tr>
			<tr><td>饿</td><td>è</td><td>adj.</td><td>hungry</td></tr>
			<tr><td>超市</td><td>chāoshì</td><td>n.</td><td>supermarket</td></tr>
			<tr><td>蛋糕</td><td>dàngāo</td><td>n.</td><td>cake</td></tr>
			<tr><td colspan="4">① 2.99元 可以写成 (kěyǐ xiěchéng)<br/><b>"2元(yuán）9角(jiǎo) 9分(fēn)"</b>,<br/>1角(jiǎo) = 0.1元，<br/>1分(fēn)= 0.01元。</td></tr>
		</table>
		</div>
	</div>
	<div id="4" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">Kè wén sì. Zài fànguǎnr.<br/>课文四。 在饭馆。<br/>Text 4. In a restuarant.<br/>
	<audio controls="" preload="metadata" id="03-04-4"><source src="../mandarin/audio/03-04-4.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<b>经理: </b>您好!您找谁?&nbsp;<button type="button" id="n41" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn41"><b>Jīnglǐ: </b>Nín hǎo! Nín zhǎo shéi?</span><br/>
		<b>客人: </b>你们这儿是不是有一个又年轻又漂亮的服务员?&nbsp;<button type="button" id="n42" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn42"><b>Kèrén: </b>Nǐmen zhèr shì bù shì yǒu yī gè yòu niánqīng, piàoliang yòu de fúwùyuán ?</span><br/>
		<b>经理: </b>我们这儿年轻、漂亮的服务员有很多。&nbsp;<button type="button" id="n43" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn43"><b>Jīnglǐ: </b>Wǒmen zhèr niánqīng, piàoliang de fúwùyuán yǒu hěn duō</span><br/>
		<b>客人: </b>她工作又认真又热情。&nbsp;<button type="button" id="n44" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn44"><b>Kèrén: </b>Tā gōngzuò yòu rènzhēn yòu rèqíng.</span><br/>
		<b>经理: </b>您能再说说吗?&nbsp;<button type="button" id="n45" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn45"><b>Jīnglǐ: </b>Nín néng zài shuōshuō ma?</span><br/>
		<b>客人: </b>她总是笑着跟客人说话。&nbsp;<button type="button" id="n46" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn46"><b>Kèrén: </b>Tā zǒngshì xiàozhe gēn kèrén shuō huà.</span><br/>
		<b>经理: </b>啊，我知道了，你说的是李小美吧?&nbsp;<button type="button" id="n47" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn47"><b>Jīnglǐ: </b>A, wǒ zhīdào le, nǐ shuō de shì Lǐ Xiǎoměi ba?.</span><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<b>manager: </b>Hello, who are you looking for?<br/>
		<b>guest: </b>Do you have a young and beautiful waiter here?<br/>
		<b>manager: </b>We are young here, there are many beautiful waiters<br/>
		<b>guest: </b>She works hard and passionately.<br/>
		<b>manager: </b>Can you say that again?<br/>
		<b>guest: </b>She always smiles and talks to her guests.<br/>
		<b>manager: </b>Ah, I know, you mean Li Xiaomei?<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>生词 (Shēngcí) New Words</i></th></tr>
			<tr><td>年轻</td><td>niánqīng</td><td>adj.</td><td>young</td></tr>
			<tr><td>认真</td><td>rènzhēn</td><td>adj.</td><td>serious, earnest</td></tr>
			<tr><td>客人</td><td>kèrén</td><td>n.</td><td>customer, guest</td></tr>
			<tr><th colspan="4"><i>专有名词 (Zhuān yǒu míngcí) Proper Nouns</i></th></tr>
			<tr><td>李小美</td><td colspan="3">Lǐ Xiǎoměi</td></tr>
		</table>
		</div>
	</div>
</div>
<div id="n1" class="dash"><a href="#0"> Back to top</a></div>
<div class="container-fluid">
	<h3 class="sublesson">汪释 (wāng shì) Notes</h3>
	<h4 class="textSection">1. The Structure "<b>又。。。又。。。</b>" （<b>yòu...yòu...</b> : also...also...）</h4>
	<p>In Chinese, "<b>又</b>Adj1 +<b>又</b>Adj2" is used to describe two qualities existing in the same person or thing, such as "<b>又</b>高<b>又</b>漂亮" (<i><b>Yòu</b> gāo <b>yòu</b> piàoliang: both tall and pretty</i>). For example:</p>
	<ol>
		<li>这个西瓜<b>又</b>大<b>又</b>甜。<br/><span class="pynD">Zhège xīguā <b>yòu</b> dà <b>yòu</b> tián.</span></li>
		<li>外边<b>又</b>黑<b>又</b>冷。<br/><span class="pynD">Wàibian <b>yòu</b> hēi <b>yòu</b> lěng.</span></li>
		<li>服务员<b>又</b>年轻<b>又</b>漂亮。<br/><span class="pynD">Fúwùyuán <b>yòu</b> niánqīng <b>yòu</b> piàoliang.</span></li>
		<li>她工作<b>又</b>认真<b>又</b>热情。<br/><span class="pynD">Tā gōngzuò <b>yòu</b> rènzhēn <b>yòu</b> rèqíng.</span></li>
	</ol>
	<p><b>练一练 (liàn yī liàn) Practise</b></p>
	<p>完成句子 (Wánchéng jùzi) Complete the sentences</p>
	<ol>
		<li>这家超市的东西 ____ 。<br/><span class="pynD">Zhè jiā chāoshì de dōngxī ____ .</span></li>
		<li>他做饭做得 ____ 。<br/><span class="pynD">Tā zuò fàn zuò dé ____ .</span></li>
		<li>我喜欢 ____ 的衣服。<br/><span class="pynD">Wǒ xǐhuān ____ de yīfú.</span></li>
	</ol>
	<div id="n2" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">2. The Accompanying Action: V<sub>1</sub><b>着</b> [zhe] (O<sub>1</sub>)+V<sub>2</sub> (O<sub>2</sub>)</h4>
	<p>In Chinese, "V<sub>1</sub><b>着</b> [zhe] (O<sub>1</sub>)+V<sub>2</sub> (O<sub>2</sub>)" indicates two actions taking place at the same
time, V<sub>1</sub>, being the accompanying state or manner of V<sub>2</sub>. For example:<br/> "他们站<b>着</b>聊天儿" (tāmen zhàn <b>zhe</b> liáotiānr)<br/>
means "they are talking" while "standing" rather than "sitting".<br/>For example:</p>
	<ol>
		<li>弟弟吃<b>着</b>苹果写作业。<br/><span class="pynD">Dìdì chī<b>zhe</b> píngguǒ xiě zuòyè.</span></li>
		<li>周先生和周太太坐<b>着</b>看电视。<br/><span class="pynD">Zhōu xiānshēng hé zhōu tàitài zuò<b>zhe</b> kàn diànshì.</span></li>
		<li>很多人拿<b>着</b>鲜花站在门口。<br/><span class="pynD">Hěnduō rén ná<b>zhe</b> xiānhuā zhàn zài ménkǒu.</span></li>
		<li>她总是笑<b>着</b>跟客人说话。<br/><span class="pynD">Tā zǒng shì xiào<b>zhe</b> gēn kèrén shuōhuà.</span></li>
	</ol>
	
		<p><b>练一练 (liàn yī liàn) Practise</b></p>
	<p>完成句子 (Wánchéng jùzi) Complete the sentences</p>
	<ol>
		<li>我喜欢听着歌 ____ 。<br/><span class="pynD">Wǒ xǐhuān tīngzhe gē ____ .</span></li>
		<li>我们不能 ____ 开车。<br/>	<span class="pynD">Wǒmen bùnéng ____ kāichē.</span></li>
		<li>我们的老师 ____ 上课。<br/><span class="pynD">Wǒmen de lǎoshī ____ shàngkè.</span></li>
	</ol>
</div>
<div id="ex1" class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<div class="container-fluid">
	<h3 class="sublesson">练习 (liàn xí) Exercises</h3>
	<h4 class="textSection">1. 朗读 下列 短语 和 句子<br/>Lǎngdú xiàliè duǎnyǔ hé jùzi<br/>Read the following phrases and sentences aloud.<br/>
	<audio controls="" preload="metadata" id="03-04-5"><source src="../mandarin/audio/03-04-5.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col">
		总是: 总是下雨 / 总是笑 / 总是不高兴 / 她总是笑着跟客人说话。<br/>
			<button type="button" id="n11x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g11x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn11x">zǒngshì: zǒngshì xià yǔ / zǒngshì xiào / zǒngshì bù gāoxìng / tā zǒngshì xiàozhe gēn kèrén shuōhuà.<br/></span>
		<span class="eng" id="eng11x">always: It always rains / always laugh / always unhappy / she always talks to her guests with a smile.<br/></span>
		<br/>
		回答: 回答问题 / 笑着回答 / 没回答对 / 她总是笑着回答老师的问题。<br/>
			<button type="button" id="n12x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g12x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn12x">huídá: huídá wèntí / xiàozhe huídá / méi huídá duì / tā zǒng shì xiàozhe huídá lǎoshī de wèntí.<br/></span>
		<span class="eng" id="eng12x">answer. answer the question / smiled and answered / no answer / she always smiles and answers the teacher's questions.<br/></span>
		<br/>
		饿: 很饿 / 饿了 / 不饿 / 我有点儿饿了。<br/>
			<button type="button" id="n13x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g13x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn13x">è: hěn è / èle / bù è / wǒ yǒudiǎnr èle<br/></span>
		<span class="eng" id="eng13x">hungry: very hungry / hungry / not hungry / I'm a little hungry<br/></span>
		<br/>
		年轻: 很年轻 / 不年轻 / 年轻人 / 我们这儿年轻, 漂亮的服务员有很多。<br/>
			<button type="button" id="n14x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g14x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn14x">niánqīng: hěn niánqīng / bù niánqīng / niánqīng rén / wǒmen zhèr niánqīng, piàoliang de fúwùyuán yǒu hěnduō.<br/></span>
		<span class="eng" id="eng14x">young: very young / not young / young person / We are young here, there are a lot of beautiful waiters.<br/></span>
		<br/>
		照片: 一张照片 / 谁的照片 / 照片很漂亮 / 这是你们比赛的照片吗?<br/>
			<button type="button" id="n15x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g15x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn15x">zhàopiàn: yī zhāng zhàopiàn / shéi de zhàopiàn? / zhàopiàn hěn piàoliang / zhè shì nǐmen bǐsài de zhàopiàn ma?<br/></span>
		<span class="eng" id="eng15x">photo: a picture / who's in the picture? / the picture is very beautiful / is this a photo of your game?<br/></span>
		<br/>
	</div>
	<div id="ex2" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">2. 选择 恰当 的 词语 填空<br/>Xuǎnzé qiàdàng de cíyǔ tiánkòng<br/>Choose the proper words to fill in the blanks.</h4>
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="xhanD"><td>比赛</td><td>超市</td><td>客人</td><td>饿</td><td>认真</td></tr>
			<tr class="pynD"><td>bǐsài </td><td>chāoshì </td><td>kèrén </td><td>è </td><td>rènzhēn</td></tr>
			<tr class="engD"><td>Contest</td><td>Supermarket</td><td>Guest</td><td>Hungry</td><td>Seriously</td></tr>
		</table>
		<ol>
			<li>
				<span class="xhanD"> ____ 快到了, 快去洗水果。</span><br/>
				<span class="pynD">____ kuài dàole, kuài qù xǐ shuǐguǒ.</span>
			</li>
			<li>
				<span class="xhanD">工作到下午三点的时候，我常常很 ____ 。</span><br/>
				<span class="pynD">Gōngzuò dào xiàwǔ sān diǎn de shíhòu, wǒ chángcháng hěn ____ .</span>
			</li>
			<li>
				<span class="xhanD">这个孩子工作的时候很 ____ 大家都喜欢他。</span><br/>
				<span class="pynD">Zhège háizi gōngzuò de shíhòu hěn ____ dàjiā dōu xǐhuān tā.</span>
			</li>
			<li>
				<span class="xhanD">这是什么 ____ ? 你能给我介绍一下吗?</span><br/>
				<span class="pynD">Zhè shì shénme ____ ? Nǐ néng gěi wǒ jièshào yīxià ma?</span>
			</li>
			<li>
				<span class="xhanD">我下楼去 ____ 买点儿东西。</span><br/>
				<span class="pynD">Wǒ xià lóu qù ____ mǎidiǎnr dōngxī.</span>
			</li>
		</ol>
		<div class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="xhanD"><td>年级</td><td>照片</td><td>蛋糕</td><td>总是</td><td>努力</td></tr>
			<tr class="pynD"><td>niánjí</td><td>zhàopiàn</td><td>dàngāo</td><td>zǒng shì</td><td>nǔlì</td></tr>
			<tr class="engD"><td>grade</td><td>photo</td><td>cake</td><td>always</td><td>work hard</td></tr>
		</table>
		<ol start="6">
			<li>
				<span class="xhanD">A: 你怎么还看电视?不 ____ 学习，怎么能找到好工作呢?</span><br/>
				<span class="pynD">A: Nǐ zěnme hái kàn diànshì? Bù ____ xuéxí, zěnme néng zhǎodào hǎo gōngzuò ne?</span><br/>
				<span class="xhanD">B: 我只看了半个小时。</span><br/>
				<span class="pynD">B: Wǒ zhǐ kànle bàn gè xiǎoshí.</span><br/>
			</li>
			<li>
				<span class="xhanD">A: 这张 ____ 是什么时候的?</span><br/>
				<span class="pynD">A: Zhè zhāng ____ shì shénme shíhòu de?</span><br/>
				<span class="xhanD">B: 是我妈妈小时候的。</span><br/>
				<span class="pynD">B: Shì wǒ māmā xiǎoshíhòu de.</span><br/>
			</li>
			<li>
				<span class="xhanD">A: 你怎么 ____ 想睡觉?</span><br/>
				<span class="pynD">A: Nǐ zěnme ____ xiǎng shuìjiào?</span><br/>
				<span class="xhanD">B: 我工作太累了，起得早，睡得晚。</span><br/>
				<span class="pynD">B: Wǒ gōngzuò tài lèile, qǐ dé zǎo, shuì dé wǎn.</span><br/>
			</li>
			<li>
				<span class="xhanD">A: 这位老人是谁?</span><br/>
				<span class="pynD">A: Zhè wèi lǎorén shì shéi?</span><br/>
				<span class="xhanD">B: 她是我一 ____ 时候的老师，现在已经70 岁了。</span><br/>
				<span class="pynD">B: Tā shì wǒ yī ____ shíhòu de lǎoshī, xiànzài yǐjīng qīshí suìle.</span><br/>
			</li>
			<li>
				<span class="xhanD">A: 您未几块 ____ ?</span><br/>
				<span class="pynD">A: Nín wèi jǐ kuài ____ ?</span><br/>
				<span class="xhanD">B: 两块。</span><br/>
				<span class="pynD">B: Liǎng kuài.</span><br/>
			</li>
		</ol>
	</div>
	<div id="ex3" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">3. 用本课新学的语言点和词语描述图片<br/>Yòng běn kè xīn xué de yǔyán diǎn hé cíyǔ miáoshù túpiàn<br/>Describe the pictures using the newly-learned language points and words</h4>
	<div class="col-xs-12 col">
	<ol>
	<li><span class="xhanD"><b>A</b>: 哪个女孩儿是马丽?</span><br/>
		<span class="pynD"><b>A</b>: Nǎge nǚhái ér shì Mǎlì?</span><br/>
		<span class="xhanD"><b>B</b>: 你看，那个拿着 ____ 就是。</span><br/>
		<span class="pynD"><b>B</b>: Nǐ kàn, nàgè názhe ____ jiùshì</span><br/>
		<span class="xhanD"><b>A</b>: 是不是那个又 ____ 的?</span><br/>
		<span class="pynD"><b>A</b>: Shì bùshì nàgè yòu ____ de?</span><br/>
		<span class="xhanD"><b>B</b>: 对，就是那个。</span><br/>
		<span class="pynD"><b>B</b>: Duì, jiùshì nàgè.</span><br/><br/></li>
	<li><span class="xhanD"><b>A</b>: 我现在又 ____ ，不想爬了。</span><br/>
		<span class="pynD"><b>A</b>: Wǒ xiànzài yòu ____ , bùxiǎng pále.</span><br/>
		<span class="xhanD"><b>B</b>: 休息一下再爬吧。</span><br/>
		<span class="pynD"><b>B</b>: Xiūxí yīxià zài pá ba.</span><br/>
		<span class="xhanD"><b>A</b>: 山太高了，多累啊。</span><br/>
		<span class="pynD"><b>A</b>: Shān tài gāole, duō lèi a.</span><br/>
		<span class="xhanD"><b>B</b>: 我们聊着 ____ ，一点儿也不会累。</span><br/>
		<span class="pynD"><b>B</b>: Wǒmen liáozhe ____ , yīdiǎn er yě bù huì lèi.</span><br/><br/></li>
	<li><span class="xhanD"><b>A</b>: 今天天气真不好!</span><br/>
		<span class="pynD"><b>A</b>: Jīntiān tiānqì zhēn bù hǎo!</span><br/>
		<span class="xhanD"><b>B</b>: 是啊，我现在 ____ 。</span><br/>
		<span class="pynD"><b>B</b>: Shì a, wǒ xiànzài ____ .</span><br/>
		<span class="xhanD"><b>A</b>: 我们去旁边的咖啡店坐 ____ 再走吧。</span><br/>
		<span class="pynD"><b>A</b>: Wǒmen qù pángbiān de kāfēi diàn zuò ____ zài zǒu ba.</span><br/>
		<span class="xhanD"><b>B</b>: 虫子啊。</span><br/>
		<span class="pynD"><b>B</b>: Chóngzi a.</span><br/><br/></li>
	<li><span class="xhanD"><b>A</b>: 为什么你的作业写得又快 ____ ?</span><br/>
		<span class="pynD"><b>A</b>: Wèishéme nǐ de zuòyè xiě dé yòu kuài ____ ?</span><br/>
		<span class="xhanD"><b>B</b>: 因为我写作业的时候很认真。</span><br/>
		<span class="pynD"><b>B</b>: Yīnwèi wǒ xiě zuòyè de shíhòu hěn rènzhēn.</span><br/>
		<span class="xhanD"><b>A</b>: 我不认真吗?</span><br/>
		<span class="pynD"><b>A</b>: Wǒ bù rènzhēn ma?</span><br/>
		<span class="xhanD"><b>B</b>: 你 ____ ，认真吗?</span><br/>
		<span class="pynD"><b>B</b>: Nǐ ____ , rènzhēn ma?</span><br/><br/></li>
	</ol>
	</div>
	<div id="ex4" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">4. 根据 课文 回答 问题<br/>Gēnjù kèwén huídá wèntí<br/>Answer the questions according to the texts.</h4>
	<div class="col-xs-12 col-md-6 col">
		<ol>
			<li>
		<span class="xhanD">那张照片是什么时候照的?</span><br/>
			<button type="button" id="n341" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g341" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn341">Nà zhāng zhàopiàn shì shénme shíhòu zhào de?<br/></span>
		<span class="eng" id="eng341">When did you take that picture?<br/></span>
			</li>
			<li>
		<span class="xhanD">照片里马可在做什么?</span><br/>
			<button type="button" id="n342" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g342" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn342">Zhàopiàn lǐ Mǎkě zài zuò shénme?<br/></span>
		<span class="eng" id="eng342">In the photo, what is Mark doing?<br/></span>
			</li>
			<li>
		<span class="xhanD">喜欢小红的人多不多? 她怎么样?</span><br/>
			<button type="button" id="n343" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g343" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn343">Xǐhuān Xiǎohóng de rén duō bù duō? Tā zěnmeyàng?<br/></span>
		<span class="eng" id="eng343">How many people like the Xiǎohóng? How is she?<br/></span>
			</li>
			<li>
		<span class="xhanD">小刚和小丽打算买什么?</span><br/>
			<button type="button" id="n344" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g344" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn344">Xiǎogāng hé Xiǎolì dǎsuàn mǎi shénme?<br/></span>
		<span class="eng" id="eng344">What are Xiaogang and Xiaoli going to buy?<br/></span>
			</li>
			<li>
		<span class="xhanD">小刚和小丽回家后打算做什么?</span><br/>
			<button type="button" id="n345" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g345" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn345">Xiǎogāng hé Xiǎolì huí jiā hòu dǎsuàn zuò shénme?<br/></span>
		<span class="eng" id="eng345">What are you going to do when Xiaogang and Xiaoli go home?<br/></span>
			</li>
			<li>
		<span class="xhanD">客人要找谁? 她怎么样?</span><br/>
			<button type="button" id="n346" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g346" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn346">Kèrén yào zhǎo shéi? Tā zěnmeyàng?<br/></span>
		<span class="eng" id="eng346">Who is the guest looking for? How is she?<br/></span>
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
		<tr><td><b>女</b></td><td></td><td><b>孩</b>子</td></tr>
		<tr><td><b>nǚ</b></td><td></td><td><b>hái</b>zi</td></tr>
		<tr><td></td><td><b>女孩</b></td><td></td></tr>
		<tr><td></td><td><b>nǚhái</b></td><td></td></tr>
	</table>
	</div>
	<div class="gameDiv">
	<table class="table table-centered">
		<tr><td><b>做</b></td><td></td><td><b>客</b>人</td></tr>
		<tr><td><b>zuò</b></td><td></td><td><b>kè</b>rén</td></tr>
		<tr><td></td><td><b>做客</b></td><td></td></tr>
		<tr><td></td><td><b>zuòkè</b></td><td></td></tr>
	</table>
	</div>
	<div class="gameDiv">
	<table class="table table-centered">
		<tr><td>新<b>鲜</b></td><td></td><td><b>花</b></td></tr>
		<tr><td>xīn<b>xiān</b></td><td></td><td><b>huā</b></td></tr>
		<tr><td></td><td><b>鲜花</b></td><td></td></tr>
		<tr><td></td><td><b>xiānhuā</b></td><td></td></tr>
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
		<tr><th></th><th>问&nbsp;Wèn</th><th>答&nbsp;Dá</th></tr>
		<tr><td>1</td><td>你喜欢你的老师吗? 为什么?<br/>Nǐ xǐhuān nǐ de lǎoshī ma? Wèishéme?</td><td></td></tr>
		<tr><td>2</td><td>你喜欢你住的地方吗? 为什么?<br/>Nǐ xǐhuān nǐ zhù dì dìfāng ma? Wèishéme?</td><td></td></tr>
		<tr><td>3</td><td>休息的时候，你喜欢去哪儿? 为什么?<br/>Xiūxí de shíhòu, nǐ xǐhuān qù nǎr? Wèishéme?</td><td></td></tr>
		<tr><td>4</td><td>你常去哪个饮馆吃饮，为什么?<br/>Nǐ cháng qù nǎge yǐn guǎn chī yǐn， Wèishéme?</td><td></td></tr>
		<tr><td>5</td><td>你的好朋友是谁? 他/她是什么样的人?<br/>Nǐ de hǎo péngyǒu shì shéi? Tā/tā shì shénme yàng de rén?</td><td></td></tr>
		<tr><td>6</td><td>你喜欢去商店买衣服还是喜欢上网买衣服? 为什么?<br/>Nǐ xǐhuān qù shāngdiàn mǎi yīfú háishì xǐhuān shàngwǎng mǎi yīfú? Wèishéme?</td><td></td></tr>
	</table>
	<h4 class="sublesson">2. Group Work</h4>
	<p>Work in groups of 3-4. </p>
	<p>
	Bring a photo and describe each person in it using "V着"<br/>
	例如: 那个笑着站在桌子旁边的人是小丽。<br/>
	<span class="pynD">Lìrú: Nàgè xiàozhe zhàn zài zhuōzi pángbiān de rén shì xiǎo lì.</span>
	</p>
	</div>
</div>
<div id="cs" class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<div class="container-fluid">
	<div class="col-xs-12">
	<h3>俗语 (súyǔ) Common Saying</h3>
	<h4 class="textSection">五十步笑百步。<br/>Wushí bù xiào bói bù.<br/>The one who retreated 50 steps laughs at the one who retreated 100.</h4>
	<p>"<b>五十步笑百步</b>" (<b>Wushí bù xiào bói bù.</b>) originates from a story of ancient China. There were two soldiers who fled from a lost battle. One had run 50 steps backward, and the other 100 steps. The one who had retreated 50 steps laughed at the one who had retreated 100 steps, saying he was a coward. The truth is both of them were running away, the only difference lying in how far they'd run. "<b>五十步笑百步</b>" (<b>Wushí bù xiào bói bù.</b>) is now used metaphorically to criticize people who have the same problems as those they laugh at, only to a lesser degree.</p>
	</div>
</div>
<div class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<?php
} else { header( 'Location: https://www.stephenmccready.asia/mi/index.php'); }
?>
</body>
</html>
