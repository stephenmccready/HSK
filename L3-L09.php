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
	<title>Level 3 - 9</title>
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
	<div class="jumbotron lessonHeaderLeft">Dì jiǔ kè<br/>第九课<br/>Lesson 9</div>
	<div class="lessonHeaderRight"><h2>Tā de Hànyǔ shuō dé gēn Zhōngguórén yīyàng hǎo<br/>她的汉语说得跟中国人一样好<br/><b>She speaks Chinese like a native</b></h2></div>
</div>
<div id="custom-nav" class="clearfix">
	<a class="btn btn-success btn-md" href="#1">1</a>&nbsp;
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
	<a class="btn btn-info btn-md" href="L3-E09.php" target="_blank">Workbook</a></div>
<div class="container-fluid">
	<h4 class="textSection">热身&nbsp;rèshēn&nbsp;Warm-up</h4>
	<div class="col-xs-12 col" id="warmup">
		<p>看图片，根据提示词说说图片中的情况是不是一样<br/>
			<span class="pynD">Kàn túpiàn, gēnjù tíshì cí shuō shuō túpiàn zhōng de qíngkuàng shì bùshì yīyàng</span><br/>
			Look at the pictures and talk about if the things given are the same in each picture.</p>
		<div class="col col-xs-12 col-md-4"><br/><img src="img/3-9-1.png" alt="衣服"/>1&nbsp;衣服&nbsp;yǐfu<br/></div>
		<div class="col col-xs-12 col-md-4"><br/><img src="img/3-9-2.png" alt="颜色"/>2&nbsp;颜色&nbsp;yánsè<br/></div>
		<div class="col col-xs-12 col-md-4"><br/><img src="img/3-9-3.png" alt="房子"/>3&nbsp;房子&nbsp;fángzi<br/></div>
		<div class="col col-xs-12 col-md-4"><br/><img src="img/3-9-4.png" alt="天气"/>4&nbsp;天气&nbsp;tiǎnqì<br/></div>
		<div class="col col-xs-12 col-md-4"><br/><img src="img/3-9-5.png" alt="杯子"/>5&nbsp;杯子&nbsp;běizi<br/></div>
		<div class="col col-xs-12 col-md-4"><br/><img src="img/3-9-6.png" alt="胖瘦"/>6&nbsp;胖瘦&nbsp;pàngshòu<br/></div>
	</div>
	<div class="col-xs-12 col"><br/>
		<p>根据实际情况回答问题<br/>
			<span class="pynD">Gēnjù shíjì qíngkuàng huídá wèntí</span><br/>
			Answer the questions according to the actual situations.</p>
		<div class="table">
			<table class="table table-condensed table-responsive table-bordered">
				<tr><th>情况 <span class="pynD">Qíngkuàng</span></th><th>怎么样 <span class="pynD">Zěnmeyàng</span></th></tr>
				<tr><td>我现在吃得 <span class="pynD">Wǒ xiànzài chī de</span></td>
					<td>越来越多 <span class="pynD">Yuè lái yuè duō</span></td></tr>
				<tr><td>我汉语说得 <span class="pynD">Wǒ Hànyǔ shuō de</span></td><td></td></tr>
				<tr><td>我觉得语法 <span class="pynD">Wǒ juédé yǔfǎ</span></td><td></td></tr>
				<tr><td>我做的饭 <span class="pynD">Wǒ zuò de fàn</span></td><td></td></tr>
				<tr><td>我跑步跑得 <span class="pynD">Wǒ pǎo bù pǎo dé</span></td><td></td></tr>
				<tr><td>我打篮球打得 <span class="pynD">Wǒ dǎ lánqiú dǎ dé</span></td><td></td></tr>
			</table>
		</div>
	</div>
	<div id="1" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">Kè wén yī. Zài jiàoshì.<br/>课文一。在教室。<br/>Text 1. In the classroom.<br/>
	<audio controls="" preload="metadata" id="03-09-1"><source src="../mandarin/audio/03-09-1.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<p><b>大山: </b>马可，你的中文越说越好了!&nbsp;<button type="button" id="n11" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn11"><b>Dàshān: </b>Mǎkě, nǐ de Zhōngwén yuè shuō yuè hǎo le!</span></p>
		<p><b>马可: </b>哪里哪里，我们班王静说得更好。&nbsp;<button type="button" id="n12" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn12"><b>Mǎkě: </b>Nǎlǐ nǎlǐ, wǒmen bān Wáng Jìng shuō dé gèng hǎo.</span></p>
		<p><b>大山: </b>怎么好?&nbsp;<button type="button" id="n13" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn13"><b>Dàshān: </b>Zěnme hǎo?</span></p>
		<p><b>马可: </b>她的汉语说得跟中国人一样好。&nbsp;<button type="button" id="n14" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn14"><b>Mǎkě: </b>Tā de Hànyǔ shuō dé gēn Zhōngguórén yīyàng hǎo.</span></p>
		<p><b>大山: </b>王静？我怎么没听说过这个名字?&nbsp;<button type="button" id="n15" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn15"><b>Dàshān: </b>Wáng Jìng? Wǒ zěnme méi tīngshuōguò zhège míngzì?</span></p>
		<p><b>马可: </b>她是我们的汉语老师。&nbsp;<button type="button" id="n16" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn16"><b>Mǎkě: </b>Tā shì wǒmen de Hànyǔ lǎoshī.</span></p>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<b>Dashan: </b>Marco, your Chinese is better!<br/>
		<b>Marco: </b>You're too kind, Wáng Jing speaks better in our class.<br/>
		<b>Dashan: </b>How good?<br/>
		<b>Marco: </b>She speaks Chinese like a native.<br/>
		<b>Dashan: </b>Wáng Jing? Why have not I heard of this name?<br/>
		<b>Marco: </b>She is our Chinese teacher.
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>生词 (Shēngcí) New Words</i></th></tr>
			<tr><td>中文</td><td>Zhōngwén</td><td>n</td><td>Chinese Language</td></tr>
			<tr><td>班</td><td>bān</td><td>n</td><td>class</td></tr>
			<tr><td>一样</td><td>yīyàng</td><td>adj</td><td>same, as...as...</td></tr>
			<tr><th colspan="4"><i>专有名词 (Zhuān yǒu míngcí) Proper Nouns</i></th></tr>
			<tr><td>大山</td><td colspan="3">Dàshān</td></tr>
			<tr><td>丽静</td><td colspan="3">Wáng Jìng</td></tr>
		</table>
		</div>
	</div>
	<div id="2" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">Kè wén èr. Zài dàngāo diàn.<br/>课文二。在蛋糕店。<br/>Text 2. In a bakery.<br/>
	<audio controls="" preload="metadata" id="03-09-2"><source src="../mandarin/audio/03-09-2.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<p><b>小丽: </b>别吃了，你已经吃了三块蛋糕了。&nbsp;<button type="button" id="n21" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn21"><b>Xiǎolì: </b>Bié chī le, nǐ yǐjīng chīle sān kuài dàngāo le.</span></p>
		<p><b>小刚: </b>这是最后一块儿。&nbsp;<button type="button" id="n22" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn22"><b>Xiǎogāng: </b>Zhè shì zuìhòu yīkuàir.</span></p>
		<p><b>小丽: </b>你总是吃甜的东西，会越吃越胖。&nbsp;<button type="button" id="n23" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn23"><b>Xiǎolì: </b>Nǐ zǒngshì chī tián de dōngxī, huì yuè chī yuè pàng.</span></p>
		<p><b>小刚: </b>你放心，我一定不会变胖。&nbsp;<button type="button" id="n24" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn24"><b>Xiǎogāng: </b>Nǐ fàng xīn, wǒ yīdìng bù huì biàn pàng.</span></p>
		<p><b>小丽: </b>为什么?&nbsp;<button type="button" id="n25" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn25"><b>Xiǎolì: </b>Wèi shénme?</span></p>
		<p><b>小刚: </b>我们家的人都很瘦，吃不胖。&nbsp;<button type="button" id="n26" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn26"><b>Xiǎogāng: </b>Wǒmen jiā de rén dōu hěn shòu, chī bù pàng.</span></p>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<b>Xiaoli: </b>Stop eating, you have already eaten three pieces of cake.<br/>
		<b>Xiaogang: </b>This is the last piece.<br/>
		<b>Xiaoli: </b>You always eat sweet things, the more you eat, the fatter you will be.<br/>
		<b>Xiaogang: </b>Don't worry, I'm sure I won't get fat.<br/>
		<b>Xiaoli: </b>Why?<br/>
		<b>Xiaogang: </b>The people in our family are very thin, we don't eat fat.
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>生词 (Shēngcí) New Words</i></th></tr>
			<tr><td>最后</td><td>zuìhòu</td><td>n</td><td>the last one</td></tr>
			<tr><td>放心</td><td>fàng xīn</td><td>v</td><td>to ease one's mind,to rest assured</td></tr>
			<tr><td>一定</td><td>yídìng</td><td>adv</td><td>definitely,certainly</td></tr>
		</table>
		</div>
	</div>
	<div id="3" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">Kè wén sān. Zài shānshàng .<br/>课文三。在山上。<br/>Text 3. On the mountain.<br/>
	<audio controls="" preload="metadata" id="03-09-3"><source src="../mandarin/audio/03-09-3.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<p><b>小丽: </b>我有点儿害怕。&nbsp;<button type="button" id="n31" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn31"><b>Xiǎolì: </b>Wǒ yǒudiǎnr hàipà.</span></p>
		<p><b>小刚: </b>怎么了?&nbsp;<button type="button" id="n32" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn32"><b>Xiǎogāng: </b>Zěnmele?</span></p>
		<p><b>小丽: </b>山越高，路越难走。我也越爬越冷。&nbsp;<button type="button" id="n33" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn33"><b>Xiǎolì: </b>Shān yuè gāo, lù yuè nán zǒu. Wǒ yě yuè pá yuè lěng.</span></p>
		<p><b>小刚: </b>不用担心，有我呢，我对这儿比较了解。&nbsp;<button type="button" id="n34" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn34"><b>Xiǎogāng: </b>Bù yòng dān xīn, yǒu wǒ ne, wǒ duì zhèr bǐjiào liǎojiě.</span></p>
		<p><b>小丽: </b>那我们先休息一下，一会儿再爬。&nbsp;<button type="button" id="n35" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn35"><b>Xiǎolì: </b>Nà wǒmen xiān xiūxí yīxià, yīhuǐr zài pá.</span></p>
		<p><b>小刚: </b>好，一会儿我们可以从中间这条路上去。&nbsp;<button type="button" id="n36" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn36"><b>Xiǎogāng: </b>Hǎo, yīhuǐr wǒmen kěyǐ cóng zhōngjiān zhè tiáo lù shàngqù.</span></p>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<b>Xiaoli: </b>I'm a little scared.<br/>
		<b>Xiaogang: </b>What's wrong?<br/>
		<b>Xiaoli: </b>The higher the mountain, the harder it is to walk. I'm getting colder, too.<br/>
		<b>Xiaogang: </b>No need to worry, you have me, I am fairly knowledgeable about this place.<br/>
		<b>Xiaoli: </b>Let's take a break first, climb later.<br/>
		<b>Xiaogang: </b>Good, in a moment we can go up the middle of the road.
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>生词 (Shēngcí) New Words</i></th></tr>
			<tr><td>担心</td><td>dān xīn</td><td>v</td><td>to worry</td></tr>
			<tr><td>比较</td><td>bǐjiào</td><td>adv</td><td>fairly, rather</td></tr>
			<tr><td>了解</td><td>liǎojiě</td><td>v</td><td>to know</td></tr>
			<tr><td>先</td><td>xiān</td><td>adv</td><td>first, in advance</td></tr>
			<tr><td>中间</td><td>zhōngjiān</td><td>n</td><td>middle</td></tr>
		</table>
		</div>
	</div>
	<div id="4" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">Kè wén sì. Zài Xiǎomíng jiā.<br/>课文四。在小明家。<br/>Text 4. At Xiaoming's home.<br/>
	<audio controls="" preload="metadata" id="03-09-4"><source src="../mandarin/audio/03-09-4.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<p><b>同学: </b>小明，你的眼睛怎么跟大熊猫一样了?&nbsp;<button type="button" id="n41" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn41"><b>Tóngxué: </b>Xiǎomíng, nǐ de yǎnjīng zěnme gēn dà xióngmāo yīyàng le?</span></p>
		<p><b>小明: </b>我这几天脚疼，没休息好。&nbsp;<button type="button" id="n42" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn42"><b>Xiǎomíng: </b>Wǒ zhè jǐ tiān jiǎo téng, méi xiūxí, hǎo.</span></p>
		<p><b>同学: </b>去医院了吗?医生说什么?&nbsp;<button type="button" id="n43" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn43"><b>Tóngxué: </b>Qù yīyuàn le ma? Yīshēng shuō shénme?</span></p>
		<p><b>小明: </b>他让我多休息。休息得越多，好得越快。&nbsp;<button type="button" id="n44" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn44"><b>Xiǎomíng: </b>Tā ràng wǒ duō xiūxí. Xiūxí dé yuè duō, hǎo dé yuè kuài.</span></p>
		<p><b>同学: </b>下个月的篮球比赛，你能参加吗?&nbsp;<button type="button" id="n45" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn45"><b>Tóngxué: </b>Xià gè yuè de lánqiú bǐsài, nǐ néng cānjiā ma?</span></p>
		<p><b>小明: </b>一定能参加，一点儿影响也没有。&nbsp;<button type="button" id="n46" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn46"><b>Xiǎomíng: </b>Yīdìng néng cānjiā, yīdiǎnr yǐngxiǎng yě méiyǒu.</span></p>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<b>Classmate: </b>Xiaoming, why is your eye like the giant panda?<br/>
		<b>Xiaoming: </b>I have a sore foot these days, not had a rest<br/>
		<b>Classmate: </b>Did you go to the hospital? What did the doctor say?<br/>
		<b>Xiaoming: </b>He told me to rest more. The more I rest, the quicker I will get better.<br/>
		<b>Classmate: </b>Can you join in the basketball game next month?<br/>
		<b>Xiaoming: </b>I will definitely be able to participate, I won't be affected one bit.<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>生词 (Shēngcí) New Words</i></th></tr>
			<tr><td>参加</td><td>cānjiā</td><td>v</td><td>to participate</td></tr>
			<tr><td>影响</td><td>yǐngxiǎng</td><td>n</td><td>influence</td></tr>
		</table>
		</div>
	</div>
</div>
<div id="n1" class="dash"><a href="#0"> Back to top</a></div>
<div class="container-fluid">
	<h3 class="sublesson">汪释 (wāng shì) Notes</h3>
	<h4 class="textSection">1. The Structure "<b>越 A 越 B </b>" (<b>yuè A yuè B</b>: the more A the more the B)</h4>
	<p>"<b>越 A 越 B </b>" (<b>yuè A yuè B</b>: the more A, the more B) means B changes with A. For example:</p>	
	<ol>
		<li>雨<b>越</b>下<b>越</b>大。<br/><span class="pynD">Yǔ <b>yuè</b> xià<b>yuè</b> dà.</span></li>
		<li>你的中文<b>越</b>说<b>越</b>好。<br/><span class="pynD">Nǐ de zhōngwén <b>yuè</b> shuō <b>yuè</b> hǎo.</span></li>
		<li><b>越</b>往南，天气<b>越</b>热。<br/><span class="pynD"><b>Yuè</b> wǎng nán, tiānqì <b>yuè</b> rè.</span></li>
		<li>山<b>越</b>高，路<b>越</b>难走。<br/><span class="pynD">Shān<b>yuè</b> gāo, lù <b>yuè</b> nán zǒu.</span></li>
	</ol>
	<p><b>练一练 (liàn yī liàn) Practise</b></p>
	<p>完成句子 (Wánchéng jùzi) Complete the sentences</p>
	<ol>
		<li>这个电影越看 _____ 。<br/><span class="pynD">Zhège diànyǐng yuè kàn _____ .</span></li>
		<li>我们越聊 _____ 。<br/><span class="pynD">Wǒmen yuè liáo _____ .</span></li>
		<li>她 _____ ，我越担心。<br/><span class="pynD">Tā _____ , wǒ yuè dānxīn.</span></li>
	</ol>
	<div id="n2" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">2.  Comparative Sentences 1: <b>A 跟 B 一样 (+ Adj) [A gēn B yīyàng (+ Adj)]</b></h4>
	<p> <b>A 跟 B 一样 [A gēn B yīyàng]</b> means A and B are the same after comparison. The structure can take an adjective to indicate the aspect being compared, for example, <b>一样大</b> means "the same in size".<br/>
	In the negative form ，<b>不 (bú)</b> is added before <b>一样 (yīyàng)</b>. For example:</p>
	<ol>
		<li>这本书<b>跟</b>那本书<b>一样</b>。<br/><span class="pynD">Zhè běn shū <b>gēn</b> nà běn shū <b>yīyàng</b>.</span></li>
		<li>儿子<b>跟</b>爸爸<b>一样</b>高。<br/><span class="pynD">Érzǐ <b>gēn</b> bàba <b>yīyàng</b> gāo.</span></li>
		<li>这辆车的颜色<b>跟</b>那辆车不<b>一样</b>。<br/><span class="pynD">Zhè liàng chē de yánsè <b>gēn</b> nà liàng chē bù <b>yīyàng</b>.</span></li>
		<li>她的汉语说得<b>跟</b>中国人<b>一样</b>好。<br/><span class="pynD">Tā de Hànyǔ shuō dé <b>gēn</b> Zhōngguó rén <b>yīyàng</b> hǎo.</span></li>		
	</ol>
	<p><b>练一练 (liàn yī liàn) Practise</b></p>
	<p>完成句子 (Wánchéng jùzi) Complete the sentences</p>
	<ol>
		<li>我的杯子 ____ 。<br/><span class="pynD">Wǒ de bēizi ____ .</span></li>
		<li>今天的生坷 ____ 。<br/><span class="pynD">Jīntiān de shēng kě ____ .</span></li>
		<li> ____ <b>一样</b>聪明。<br/><span class="pynD"> ____ <b>yīyàng </b>cōngmíng.</span></li>
	</ol>
</div>
<div id="ex1" class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<div class="container-fluid">
	<h3 class="sublesson">练习 (liàn xí) Exercises</h3>
	<h4 class="textSection">1. 朗读下列短语和句子<br/>Lǎngdú xiàliè duǎnyǔ hé jùzi<br/>Read the following phrases and sentences aloud.
	<audio controls="" preload="metadata" id="03-09-5"><source src="../mandarin/audio/03-09-5.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col">
		<p>一样: 不一样 / 一样好 / 这两件衣服一样 / 她的汉语说得跟中国人一样好。
			<button type="button" id="n951x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g951x" onclick="myToggle(this.id);">英语</button>
		<span class="pyn" id="pyn951x">yīyàng: bù yīyàng / yīyàng hǎo / zhè liǎng jiàn yīfú yīyàng / tā de Hànyǔ shuō dé gēn Zhōngguórén yīyàng hǎo.<br/></span>
		<span class="eng" id="eng951x">same, as...as...: different / same good / same for both pieces / her Chinese is as good as natives.<br/></span></p>
		<p>一定: 一定来 / 不一定 / 这次我不一定能考好 / 我一定不会变胖。
			<button type="button" id="n952x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g952x" onclick="myToggle(this.id);">英语</button>
		<span class="pyn" id="pyn952x">yīdìng: yīdìng lái / bù yīdìng / zhè cì wǒ bù yīdìng néng kǎo hǎo / wǒ yīdìng bù huì biàn pàng.<br/></span>
		<span class="eng" id="eng952x">definitely, certainly: must come / not necessarily / this time I definitely wont do as well on the test / I will definitely not become fat<br/></span></p>
		<p>了解: 比较了解 / 不了解 / 我很了解他 / 我对这儿比较了解。
			<button type="button" id="n953x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g953x" onclick="myToggle(this.id);">英语</button>
		<span class="pyn" id="pyn953x">liǎojiě: bǐjiào liǎojiě / bù liǎojiě / wǒ hěn liǎojiě tā / wǒ duì zhèr bǐjiào liǎojiě.<br/></span>
		<span class="eng" id="eng953x">to know: compare / Don't know / I know him / I know better<br/></span></p>
		<p>参加: 参加比赛 / 参加考试 / 不想参加 / 你能参加吗?
			<button type="button" id="n954x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g954x" onclick="myToggle(this.id);">英语</button>
		<span class="pyn" id="pyn954x">cānjiā: cānjiā bǐsài / cānjiā kǎoshì / bùxiǎng cānjiā / nǐ néng cānjiā ma?<br/></span>
		<span class="eng" id="eng954x">to participate: Take part in the competition / participate in the exam /do not want to participate / Can you attend?<br/></span></p>
		<p>影响: 没有影响 / 影响很大 / 他影响了我 / 一点儿影响也没有。
			<button type="button" id="n955x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g955x" onclick="myToggle(this.id);">英语</button>
		<span class="pyn" id="pyn955x">yǐngxiǎng: méiyǒu yǐngxiǎng / yǐngxiǎng hěn dà / tā yǐngxiǎngle wǒ / yīdiǎnr yǐngxiǎng yě méiyǒu.<br/></span>
		<span class="eng" id="eng955x">influence: no influence / big influence / he influenced me / not even a little influence<br/></span></p>
		<br/>
	</div>
	<div id="ex2" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">2. 选择 恰当 的 词语 填空<br/>Xuǎnzé qiàdàng de cíyǔ tiánkòng<br/>Choose the proper words to fill in the blanks.</h4>
	<div class="col-xs-12 col">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="xhanD"><td>参加</td><td>班</td><td>担心</td><td>影响</td><td>比较</td></tr>
			<tr class="pynD"><td>cānjiā</td><td>bān</td><td>dān xīn</td><td>yǐngxiǎng</td><td>bǐjiào</td></tr>
			<tr class="engD"><td>to participate</td><td>class</td><td>to worry</td><td>influence</td><td>fairly, rather</td></tr>
		</table>
		<ol>
			<li><span class="xhanD">你在哪个 _____ 学习汉语?</span><br/>
				<span class="pynD">Nǐ zài nǎge _____ xuéxí Hànyǔ?</span></li>
			<li><span class="xhanD">别 _____ 他马上就到家了。</span><br/>
				<span class="pynD">Bié _____ tā mǎshàng jiù dàojiāle.</span></li>
			<li><span class="xhanD">这件事 _____ 难，你再给我几天时间。</span><br/>
				<span class="pynD">Zhè jiàn shì _____ nán, nǐ zài gěi wǒ jǐ tiān shíjiān.</span></li>
			<li><span class="xhanD">你想不想去 _____ 爬山比赛?</span><br/>
				<span class="pynD">Nǐ xiǎng bùxiǎng qù _____ páshān bǐsài?</span></li>
			<li><span class="xhanD">少玩儿一会儿电子游戏吧，别 _____ 了学习。</span><br/>
				<span class="pynD">Shǎo wánr yīhuǐr diànzǐ yóuxì ba, bié _____ le xuéxí</span></li>
		</ol>
	</div>
	<div class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<div class="col-xs-12 col">
		<div class="table">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="xhanD"><td>放心</td><td>最后</td><td>先</td><td>中间</td><td>了解</td></tr>
			<tr class="pynD"><td>fàngxīn</td><td>zuìhòu</td><td>xiān</td><td>zhōngjiān</td><td>liǎojiě</td></tr>
			<tr class="engD"><td>to ease one's mind,<br/>to rest assured</td><td>the last one</td><td>first, in advance</td><td>middle</td><td>to know</td></tr>
		</table>
		</div>
		<ol start="6">
			<li><span class="xhanD"><b>A: </b>你怎么又迟到了?</span><br/>
				<span class="pynD"><b>A: </b>Nǐ zěnme yòu chídàole?</span><br/>
				<span class="xhanD"><b>B: </b>对不起，这是 _____ 次，以后一定不迟到了。</span><br/>
				<span class="pynD"><b>B: </b>Duìbùqǐ, zhè shì _____ cì, yǐhòu yīdìng bù chídàole.</span></li>
			<li><span class="xhanD"><b>A: </b>你吃这么多，会越来越胖。</span><br/>
				<span class="pynD"><b>A: </b>Nǐ chī zhème duō, huì yuè lái yuè pàng.</span><br/>
				<span class="xhanD"><b>B: </b> _____ ，我每天都运动。</span><br/>
				<span class="pynD"><b>B: </b>_____ , wǒ měitiān dū yùndòng.</span></li>
			<li><span class="xhanD"><b>A: </b>你怎么知道她会来?</span><br/>
				<span class="pynD"><b>A: </b>Nǐ zěnme zhīdào tā huì lái?</span><br/>
				<span class="xhanD"><b>B: </b>我很 _____ 她，她每天都在这儿吃饭。</span><br/>
				<span class="pynD"><b>B: </b>Wǒ hěn _____ tā, tā měitiān dōu zài zhè'er chīfàn.</span></li>
			<li><span class="xhanD"><b>A: </b>你想要哪本书?</span><br/>
				<span class="pynD"><b>A: </b>Nǐ xiǎng yào nǎ běn shū?</span><br/>
				<span class="xhanD"><b>B: </b> _____ 的那本。</span><br/>
				<span class="pynD"><b>B: </b>_____ de nà běn.</span></li>
			<li><span class="xhanD"><b>A: </b>下午你打算做什么?</span><br/>
				<span class="pynD"><b>A: </b>Xiàwǔ nǐ dǎsuàn zuò shénme?</span><br/>
				<span class="xhanD"><b>B: </b>我想 _____ 去超市买点儿东西。</span><br/>
				<span class="pynD"><b>B: </b>Wǒ xiǎng _____ qù chāoshì mǎidiǎnr dōngxī.</span></li>
		</ol>
	</div>
	<div id="ex3" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">3. 用本课新学的语言点和词语描述图片<br/>Yòng běn kè xīn xué de yǔyán diǎn hé cíyǔ miáoshù túpiàn<br/>Describe the pictures using the newly-learned language points and words</h4>
	<div class="well well-sm clearfix">
		<div class="col-xs-2 col clearfix"><img src="img/3.9.Ex3.1.png" alt="Classmates looking at a book"/></div>
		<div class="col-xs-10 col">
		<span class="xhanD"><b>A</b>: 你给我的那本书我看完了。</span><br/>
		<span class="pynD"><b>A</b>: Nǐ gěi wǒ dì nà běn shū wǒ kàn wánle.</span><br/>
		<span class="xhanD"><b>B</b>: 你学得怎么样？</span><br/>
		<span class="pynD"><b>B</b>: Nǐ xué dé zěnmeyàng?</span><br/>
		<span class="xhanD"><b>A</b>: 很有意思，我越 _____ 。</span><br/>
		<span class="pynD"><b>A</b>: Hěn yǒuyìsi, wǒ yuè _____ .</span><br/>
		<span class="xhanD"><b>B</b>: 我跟你 _____ ，也非常喜欢。</span><br/>
		<span class="pynD"><b>B</b>: Wǒ gēn nǐ _____ , yě fēicháng xǐhuān.</span>
	</div>
	</div>
	<div class="well well-sm clearfix">
		<div class="col-xs-9 col">
		<span class="xhanD"><b>A</b>: 你 _____ 什么比赛?</span><br/>
		<span class="pynD"><b>A</b>: Nǐ _____ shénme bǐsài?</span><br/>
		<span class="xhanD"><b>B</b>: 篮球比赛。你呢?</span><br/>
		<span class="pynD"><b>B</b>: Lánqiú bǐsài. Nǐ ne?</span><br/>
		<span class="xhanD"><b>A</b>: 我跟 _____ ，也对打篮球感兴趣。</span><br/>
		<span class="pynD"><b>A</b>: Wǒ gēn _____ , yě duì dǎ lánqiú gǎn xìngqù.</span><br/>
		<span class="xhanD"><b>B</b>: 对，我觉得打篮球越打越 _____ 。</span><br/>
		<span class="pynD"><b>B</b>: Duì, wǒ juédé dǎ lánqiú yuè dǎyuè _____ .</span>
		</div>
		<div class="col-xs-3 col clearfix"><img src="img/3.9.Ex3.2.png" alt="Two guys playing basketball"/></div>
	</div>
	<div class="well well-sm clearfix">
	<div class="col-xs-3 col clearfix"><img src="img/3.9.Ex3.3.png" alt="Students taking an examination"/></div>
		<div class="col-xs-9 col"><span class="xhanD"><b>A</b>: 我很 _____ 这次的汉字考试。</span><br/>
		<span class="pynD"><b>A</b>: Wǒ hěn _____ zhè cì de hànzì kǎoshì.</span><br/>
		<span class="xhanD"><b>B</b>: 你多练习写，越 _____ 。</span><br/>
		<span class="pynD"><b>B</b>: Nǐ duō liànxí xiě, yuè _____ .</span><br/>
		<span class="xhanD"><b>A</b>: 你的汉字一直很好，这次考试一定没问题。</span><br/>
		<span class="pynD"><b>A</b>: Nǐ de hànzì yīzhí hěn hǎo, zhè cì kǎoshì yīdìng méi wèntí.</span><br/>
		<span class="xhanD"><b>B</b>: 我跟 _____ ，我史担心语法。</span><br/>
		<span class="pynD"><b>B</b>: Wǒ gēn _____ , wǒ shǐ dānxīn yǔfǎ.</span>
	</div>
	</div>
	<div class="well well-sm clearfix">
		<div class="col-xs-9 col"><span class="xhanD"><b>A</b>: 我最近变胖了，你几乎没变化，跟以前 _____ 。</span><br/>
		<span class="pynD"><b>A</b>: Wǒ zuìjìn biàn pàngle, nǐ jīhū méi biànhuà, gēn yǐqián _____ .</span><br/>
		<span class="xhanD"><b>B</b>: 是哥哥影响了我，每天跟他一起跑步，越跑 _____ 。</span><br/>
		<span class="pynD"><b>B</b>: Shì gēgē yǐngxiǎngle wǒ, měitiān gēn tā yīqǐ pǎobù, yuè pǎo _____ .</span><br/>
		<span class="xhanD"><b>A</b>: 那我也开始跑步吧。</span><br/>
		<span class="pynD"><b>A</b>: Nà wǒ yě kāishǐ pǎobù ba.</span><br/>
		<span class="xhanD"><b>B</b>: 好，一定能变痰。</span><br/>
		<span class="pynD"><b>B</b>: Hǎo, yīdìng néng biàn tán.</span>
		</div>
		<div class="col-xs-3 col clearfix"><img src="img/3.9.Ex3.4.png" alt="Women and man runnning"/></div>
	</div>
	<div id="ex4" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">4. 根据课文回答问题<br/>Gēnjù kèwén huídá wèntí<br/>Answer the questions according to the texts.</h4>
	<div class="col-xs-12 col-md-6 col">
		<ol>
			<li>
		<span class="xhanD">王静的汉语说得怎么样? 为什么?</span><br/>
			<button type="button" id="n51x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g51x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn51x">Wáng Jìng de Hànyǔ shuō dé zěnme yàng? Wèishénme?<br/></span>
		<span class="eng" id="eng51x">How is Wang Jing's spoken Chinese? Why?<br/></span>
			</li>
			<li>
		<span class="xhanD">小刚一共吃了几块蛋糕?</span><br/>
			<button type="button" id="n52x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g52x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn52x">Xiǎogāng yīgòng chī le jǐ kuài dàngāo?<br/></span>
		<span class="eng" id="eng52x">How many cakes have you had?<br/></span>
			</li>
			<li>
		<span class="xhanD">小丽觉得小刚会越来越胖吗? 为什么?</span><br/>
			<button type="button" id="n53x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g53x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn53x">Xiǎo lì juédé xiǎo gāng huì yuè lái yuè pàng ma? Wèishéme?<br/></span>
		<span class="eng" id="eng53x">Xiaoli thinks Xiaogang will get fatter and fatter? Why?<br/></span>
			</li>
			<li>
		<span class="xhanD">小丽为什么害怕了? 小刚害怕吗?</span><br/>
			<button type="button" id="n54x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g54x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn54x">Xiǎolì wèishénme hàipà le? Xiǎogāng hàipà ma?<br/></span>
		<span class="eng" id="eng54x">Why is Xiaoli afraid? Is Xiaogang scared?<br/></span>
			</li>
			<li>
		<span class="xhanD">小明怎么了?</span><br/>
			<button type="button" id="n55x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g55x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn55x">Xiǎomíng zěnme le?<br/></span>
		<span class="eng" id="eng55x">What's wrong with Xiaoming?<br/></span>
			</li>
			<li>
		<span class="xhanD">小明能参加篮球比赛吗? 为什么?</span><br/>
			<button type="button" id="n56x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g56x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn56x">Xiǎomíng néng cānjiā lánqiú bǐsài ma? Wèishénme?<br/></span>
		<span class="eng" id="eng56x">Can Xiaoming take part in the basketball match? Why?<br/></span>
			</li>
		</ol>
	</div>
</div>
<div id="pr" class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<div class="container-fluid">
	<div class="col-xs-12">
	<h3>汉字知识 (Hànzì zhīshì) Character Note</h3>
	<h4 class="textSection">Pictophonetic Characters 1</h4>
	<p>Around 70% of Chinese characters are pictophonetic ones, which are composed of two components, one indicating meaning and the other sound.</p>
	<p>The pictophonetic characters of a left-right structure fall into two types. One has the semantic component on the left and the phonetic component on the right. For example:</p>
	<table class="table table-condensed table-responsive table-centered">
		<tr><th>汉字<br/>Character</th><th>语音<br/>Pronounciation</th><th>声旁<br/>Phonetic<br/>Component</th><th>形旁<br/>Semantic<br/>Component</th></tr>
		<tr><td>妈</td><td>mā</td><td>马(mǎ)</td><td>女</td></tr>
		<tr><td>住</td><td>zhù</td><td>主(zhǔ)</td><td>亻</td></tr>
	</table>
	<p>The other has the semantic component on the right and the phonetic component on the left. For example:</p>
	<table class="table table-condensed table-responsive table-centered">
		<tr><th>汉字<br/>Character</th><th>语音<br/>Pronounciation</th><th>声旁<br/>Phonetic<br/>Component</th><th>形旁<br/>Semantic<br/>Component</th></tr>
		<tr><td>放</td><td>fàng</td><td>方 (fāng)</td><td>女</td></tr>
		<tr><td>邻</td><td>lín</td><td>令 (lìng)</td><td>阝</td></tr>
	</table>
	</div>
</div>
<div id="ch" class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<div class="container-fluid">
	<div class="col-xs-12">
	<h3>汉字 (Hànzì) Characters</h3>
	<h4 class="textSection">旧字&nbsp;(Jiù zì)&nbsp;Word Game</h4>
	<p>Read the following words and guess the meanings ofthe newly-formed ones.</p>
	<div class="gameDiv">
	<table class="table table-centered">
		<tr><td><b>上课</b></td><td></td><td><b>中间</b></td></tr>
		<tr><td>shàng<b>kè</b></td><td></td><td>zhōng<b>jiān</b></td></tr>
		<tr><td></td><td><b>课间</b></td><td></td></tr>
		<tr><td></td><td><b>kèjiān</b></td><td></td></tr>
	</table>
	</div>
	<div class="gameDiv">
	<table class="table table-centered">
		<tr><td>爬<b>山</b></td><td></td><td><b>路</b>上</td></tr>
		<tr class="pynD"><td>pá<b>shān</b></td><td></td><td><b>lù</b>shàng</td></tr>
		<tr><td></td><td><b>山路</b></td><td></td></tr>
		<tr class="pynD"><td></td><td><b>shānlù</b></td><td></td></tr>
	</table>
	</div>
	<div class="gameDiv">
	<table class="table table-centered">
		<tr><td><b>参</b>加</td><td></td><td><b>比</b>赛</td></tr>
		<tr class="pynD"><td><b>cān</b>jiā</td><td></td><td><b>bǐ</b>sài</td></tr>
		<tr><td></td><td><b>参赛</b></td><td></td></tr>
		<tr class="pynD"><td></td><td><b>cānbǐ</b></td><td></td></tr>
	</table>
	</div>
	</div>
</div>
<div id="ap" class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<div class="container-fluid">
	<div class="col-xs-12">
	<h3>运用 (yùnyòng) Application</h3>
	<h4 class="textSection">1. Pair Work</h4>
	<p>Work in pairs. Discuss whether the following behaviours are good or not, and explain the reasons using "<b>越A越B</b>" (<b>yuè A yuè B</b>: the more A the more the B)</p>
	<table class="table table-condensed table-responsive table-bordered">
		<tr><th>做法<br/><span class="pynD">zuòfǎ</span></th>
			<th>好不好<br/><span class="pynD">hǎobù hǎo</span></th>
			<th>为什么<br/><span class="pynD">wèishéme</span></th></tr>
		<tr><td>很晚睡觉。<br/><span class="pynD">hěn wǎn shuìjiào.</span></td>
			<td>不好。<br/><span class="pynD">bù hǎo.</span></td>
			<td>越晚睡觉，身体越不好。<br/><span class="pynD">yuè wǎn shuìjiào, shēntǐ yuè bù hǎo.</span></td></tr>
		<tr><td>很晚回来。<br/><span class="pynD">hěn wǎn huílái.</span></td><td></td><td></td></tr>
		<tr><td>每天锻炼身体。<br/><span class="pynD">měitiān duànliàn shēntǐ.</span></td><td></td><td></td></tr>
		<tr><td>总是帮助同学。<br/><span class="pynD">zǒng shì bāngzhù tóngxué.</span></td><td></td><td></td></tr>
		<tr><td>吃很多水果。<br/><span class="pynD">chī hěnduō shuǐguǒ.</span></td><td></td><td></td></tr>
		<tr><td>用中文跟朋友聊天儿。<br/><span class="pynD">yòng Zhōngwén gēn péngyǒu liáotiānr.</span></td><td></td><td></td></tr>
	</table>
	<h4 class="textSection">2. Group Work</h4>
	<p>Work in groups of 3-4. Ask about others situations and talk about whether you are the same as them or not</p>
	<table class="table table-condensed table-responsive table-bordered">
		<tr><th>问题<br/><span class="pynD">wèntí</span></th>
			<th>他的情况<br/><span class="pynD">tā de qíngkuàng</span></th>
			<th>我跟他(不)一样<br/><span class="pynD">wǒ gēn tā (bù) yīyàng</span></th>
			<th>我的情况<br/><span class="pynD">wǒ de qíngkuàng</span></th></tr>
		<tr><td>几点是床?<br/><span class="pynD">jǐ diǎn shì chuáng?</span></td>
			<td>他7:00起床<br/><span class="pynD">tā 7:00 qǐchuáng</span></td>
			<td>我跟也不一样<br/><span class="pynD">wǒ gēn yě bù yīyàng</span></td>
			<td>我8:00起床<br/><span class="pynD">wǒ 8:00 qǐchuáng</span></td></tr>
		<tr><td>早上心协?<br/><span class="pynD">zǎoshang xīn xié?</span></td><td></td><td></td><td></td></tr>
		<tr><td>中午去哪儿吃饭?<br/><span class="pynD">zhōngwǔ qù nǎr chīfàn?</span></td><td></td><td></td><td></td></tr>
		<tr><td>怎么锻炼身体?<br/><span class="pynD">zěnme duànliàn shēntǐ?</span></td><td></td><td></td><td></td></tr>
		<tr><td>对什么感兴趣?<br/><span class="pynD">dub shénme gǎn xìngqù?</span></td><td></td><td></td><td></td></tr>
		<tr><td>每人复习多长时间?<br/><span class="pynD">měi rén fùxí duō cháng shíjiān?</span></td><td></td><td></td><td></td></tr>
	</table>
	</div>
</div>
<div id="cs" class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<div class="container-fluid">
	<div class="col-xs-12">
	<h3>俗语 (súyǔ) Common Saying</h3>
	<h4 class="textSection">三人行，必有我师<br/><span class="pynD">Sān rénxíng, bì yǒu wǒ shī</span><br/>When I walk with two others, there must be one whom I can learn from.</h4>
	<p><b>三人行必有我师</b> (<b><span class="pynD">sān rénxíng, bì yǒu wǒ shī</span></b>) means "<i>When I walk with two others, there must be one whom I can learn from</i>". In the metaphorical sense, it means everybody may have some merits that we lack, so we should learn from others.</p>
	</div>
</div>
<div class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<?php
} else { header( 'Location: https://www.stephenmccready.asia/mi/index.php'); }
?>
</body>
</html>
