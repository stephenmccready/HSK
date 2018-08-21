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
	<title>Level 3 - 10</title>
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
	<div class="jumbotron lessonHeaderLeft">Dì shí kè<br/>第十课<br/>Lesson 10</div>
	<div class="lessonHeaderRight"><h2>Shùxué bǐ lìshǐ nán duōle<br/>数学比历史难多了<br/><b>Maths is much harder than history</b></h2></div>
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
	<a class="btn btn-info btn-md" href="L3-E10.php" target="_blank">Workbook</a></div>
<div class="container-fluid">
	<h4 class="textSection">热身&nbsp;rèshēn&nbsp;Warm-up</h4>
	<div class="col-xs-12 col" id="warmup">
		<h4 class="textSection"><b>1. </b>给下面的词语选择对应的图片<br/>
			<span class="pynD">Gěi xiàmiàn de cíyǔ xuǎnzé duìyìng de túpiàn</span><br/>
			Match the pictures with the words.</h4>
		<div class="col col-xs-12 col-md-6 col-lg-4"><img src="img/3-10-A.png" alt="bicycle"/></div>
		<div class="col col-xs-12 col-md-6 col-lg-4"><img src="img/3-10-B.png" alt="blackboard"/></div>
		<div class="col col-xs-12 col-md-6 col-lg-4"><img src="img/3-10-C.png" alt="history"/></div>
		<div class="col col-xs-12 col-md-6 col-lg-4"><img src="img/3-10-D.png" alt="height"/></div>
		<div class="col col-xs-12 col-md-6 col-lg-4"><img src="img/3-10-E.png" alt="bus stop"/></div>
		<div class="col col-xs-12 col-md-6 col-lg-4"><img src="img/3-10-F.png" alt="sports balls"/></div>
		<div class="col col-xs-12 col-md-6 col-lg-4">&nbsp;<span class="pynD">lìshǐ</span><br/>1. 历史 ____</div>
		<div class="col col-xs-12 col-md-6 col-lg-4">&nbsp;<span class="pynD">tǐyù</span><br/>2. 体育 ____</div>
		<div class="col col-xs-12 col-md-6 col-lg-4">&nbsp;<span class="pynD">gèzi</span><br/>3. 个子 ____</div>
		<div class="col col-xs-12 col-md-6 col-lg-4">&nbsp;<span class="pynD">chēzhàn</span><br/>4. 车站 ____</div>
		<div class="col col-xs-12 col-md-6 col-lg-4">&nbsp;<span class="pynD">shùxué</span><br/>5. 数学 ____</div>
		<div class="col col-xs-12 col-md-6 col-lg-4">&nbsp;<span class="pynD">zìxíngchē</span><br/>6. 自行车 ____</div>
	</div>
	<div class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<div class="col-xs-12 col">
		<h4 class="textSection"><b>2. </b>写出下列词语的反义词<br/>
			<span class="pynD">Xiě chū xiàliè cíyǔ de fǎnyìcí</span><br/>
			Write down the antonym of each of the following words.<br/>
			例如: 大一小&nbsp;&nbsp;<span class="pynD">Lìrú: dà - xiǎo</span></h4>
		<div class="col col-xs-12 col-md-6 col-lg-4">&nbsp;<span class="pynD">xīn</span><br/>新 ____</div>
		<div class="col col-xs-12 col-md-6 col-lg-4">&nbsp;<span class="pynD">gāo</span><br/>高 ____</div>
		<div class="col col-xs-12 col-md-6 col-lg-4">&nbsp;<span class="pynD">nán</span><br/>难 ____</div>
		<div class="col col-xs-12 col-md-6 col-lg-4">&nbsp;<span class="pynD">yuǎn</span><br/>远 ____</div>
		<div class="col col-xs-12 col-md-6 col-lg-4">&nbsp;<span class="pynD">guì</span><br/>贵 ____</div>
		<div class="col col-xs-12 col-md-6 col-lg-4">&nbsp;<span class="pynD">pàng</span><br/>胖 ____</div>
	</div>
	<div id="1" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">Kè wén yī. Zài jiàoshì.<br/>课文一。在教室。<br/>Text 1. In the classroom.<br/>
	<audio controls="" preload="metadata" id="03-10-1"><source src="../mandarin/audio/03-10-1.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<p><b>朋友: </b>大山， 你和马可谁个子高?&nbsp;<button type="button" id="n1011" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn1011"><b>Péngyǒu: </b>Dàshān, nǐ hé Mǎkě shéi gèzi gāo?</span></p>
		<p><b>大山: </b>马可比我高，我比马可矮一点儿。&nbsp;<button type="button" id="n1012" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn1012"><b>Dàshān: </b>Mǎkě bǐ wǒ gāo, wǒ bǐ Mǎkě ǎi yīdiǎnr.</span></p>
		<p><b>朋友: </b>那你们谁大?&nbsp;<button type="button" id="n1013" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn1013"><b>Péngyǒu: </b>Nà nǐmen shéi dà?</span></p>
		<p><b>大山: </b>我比马可大两岁。&nbsp;<button type="button" id="n1014" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn1014"><b>Dàshān: </b>Wǒ bǐ Mǎkě dà liǎng suì.</span></p>
		<p><b>朋友: </b>你们谁的汉语说得更好?&nbsp;<button type="button" id="n1015" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn1015"><b>Péngyǒu: </b>Nǐmen shéi de Hànyǔ shuō dé gèng hǎo?</span></p>
		<p><b>大山: </b>马可比我说得好一些，我的汉语没有他好。&nbsp;<button type="button" id="n1016" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn1016"><b>Dàshān: </b>Mǎkě bǐ wǒ shuō dé hǎo yīxiē, wǒ de Hànyǔ méiyǒu tā hǎo.</span></p>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<b>Friend: </b>Dashan, are you and Marco tall?<br/>
		<b>Dashan: </b>Marco is taller than me, I am a little shorter than Marco.<br/>
		<b>Friend: </b>So, who's the oldest?<br/>
		<b>Dashan: </b>I'm two years older than Marco.<br/>
		<b>Friend: </b>Who speaks Chinese better?<br/>
		<b>Dashan: </b>Marco can speak better than I do, my Chinese is not as good as his.
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>生词 (Shēngcí) New Words</i></th></tr>
			<tr><td>个子</td><td>gèzi</td><td>noun</td><td>height, stature</td></tr>
			<tr><td>矮</td><td>ǎi</td><td>adjective</td><td>short</td></tr>
		</table>
		</div>
	</div>
	<div id="2" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">Kè wén èr. Zài jiàoshì.<br/>课文二。在教室。<br/>Text 2. In the classroom.<br/>
	<audio controls="" preload="metadata" id="03-10-2"><source src="../mandarin/audio/03-10-2.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<p><b>小明: </b>我喜欢历史课、体育课，不喜欢数学课。&nbsp;<button type="button" id="n1021" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn1021"><b>Xiǎomíng: </b>Wǒ xǐhuān lìshǐ kè, tǐyù kè, bù xǐhuān shùxué kè.</span></p>
		<p><b>同学: </b>为什么? 数学也很有意思啊。&nbsp;<button type="button" id="n1022" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn1022"><b>Tóngxué: </b>Wèi shénme? Shùxué yě hěn yǒu yìsi a.</span></p>
		<p><b>小明: </b>我觉得数学比历史难多了，我听不懂。&nbsp;<button type="button" id="n1023" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn1023"><b>Xiǎomíng: </b>Wǒ juédé shùxué bǐ lìshǐ nánduō le, wǒ tīng bù dǒng.</span></p>
		<p><b>同学: </b>别担心，我可以帮你&nbsp;<button type="button" id="n1024" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn1024"><b>Tóngxué: </b>Bié dān xīn, wǒ kěyǐ bāng nǐ.</span></p>
		<p><b>小明: </b>好啊，我们每天学多长时间?&nbsp;<button type="button" id="n1025" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn1025"><b>Xiǎomíng: </b>Hǎo a, wǒmen měi tiān xué duō cháng shíjiān?</span></p>
		<p><b>同学: </b>一两个小时吧。&nbsp;<button type="button" id="n1026" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn1026"><b>Tóngxué: </b>Yī liǎng gè xiǎoshí ba.</span></p>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<b>A: </b>I like history class and PE class, I don't like mathematics class.<br/>
		<b>B: </b>Why? Mathematics is very interesting.<br/>
		<b>A: </b>I think mathematics is more difficult than history, I can't understand it.<br/>
		<b>B: </b>Don't worry, I can help you.<br/>
		<b>A: </b>Well, how long will we study every day?<br/>
		<b>B: </b>Two hours.
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>生词 (Shēngcí) New Words</i></th></tr>
			<tr><td>历史</td><td>lìshǐ</td><td>noun</td><td>History</td></tr>
			<tr><td>体育</td><td>tǐyù</td><td>noun</td><td>P.E., sports</td></tr>
			<tr><td>数学</td><td>shùxué</td><td>noun</td><td>Maths</td></tr>
		</table>
		</div>
	</div>
	<div id="3" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">Kè wén sān. Zài xiūxí shì.<br/>课文三。在休息室。<br/>Text 3. In the lounge.<br/>
	<audio controls="" preload="metadata" id="03-10-3"><source src="../mandarin/audio/03-10-3.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<p><b>同事: </b>你最近比以前来得早多了，搬家了?&nbsp;<button type="button" id="n1031" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn1031"><b>Tóngshì: </b>Nǐ zuìjìn bǐ yǐqián lái dé zǎoduō le, bān jiā le?</span></p>
		<p><b>小丽: </b>是啊，你不知道? 我上个月就搬家了，走路二十分钟就到。&nbsp;<button type="button" id="n1032" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn1032"><b>Xiǎolì: </b>Shì a, nǐ bù zhīdào? Wǒ shàng gè yuè jiù bān jiā le, zǒu lù èrshí fēnzhōng jiù dào.</span></p>
		<p><b>同事: </b>那很方便啊。&nbsp;<button type="button" id="n1033" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn1033"><b>Tóngshì: </b>Nà hěn fāngbiàn a.</span></p>
		<p><b>小丽: </b>我还打算买辆自行车，骑车七八分钟就能到。&nbsp;<button type="button" id="n1034" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn1034"><b>Xiǎolì: </b>Wǒ hái dǎsuàn mǎi liàng zìxíngchē, qí chē qī-bā fēnzhōng jiù néng dào.</span></p>
		<p><b>同事: </b>你不是有一辆吗?&nbsp;<button type="button" id="n1035" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn1035"><b>Tóngshì: </b>Nǐ bù shì yǒu yī liàng ma?</span></p>
		<p><b>小丽: </b>那辆太旧了，要换一辆，很便宜，两三百块钱。&nbsp;<button type="button" id="n1036" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn1036"><b>Xiǎolì: </b>Nà liàng tài jiù le, yào huàn yī liàng, hěn piányí, liǎng-sān bǎi kuài qián.</span></p> 
	</div>
	<div class="col-xs-12 col-md-6 col">
		<b>Colleague: </b>You come in a lot earlier than before, have you moved?<br/>
		<b>Xiaoli: </b>Yes, you didn't know? I moved last month and it's a 20 minute walk.<br/>
		<b>Colleague: </b>That's very convenient.<br/>
		<b>Xiaoli: </b> I'm also going to buy a bike and I can ride it in seven or eight minutes.<br/>
		<b>Colleague: </b>Don't you have a bike?<br/>
		<b>Xiaoli: </b>The bike is too old, I'll change it, it's cheap, two hundred or three hundred kuai.
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>生词 (Shēngcí) New Words</i></th></tr>
			<tr><td>方便</td><td>fāngbiàn</td><td>adjective</td><td>convenient</td></tr>
			<tr><td>自行车</td><td>zìxíngchē</td><td>noun</td><td>bicycle</td></tr>
			<tr><td>骑</td><td>qí</td><td>verb</td><td>to ride</td></tr>
			<tr><td>旧</td><td>jiù</td><td>adjective</td><td>old, used, worn</td></tr>
			<tr><td>换</td><td>huàn</td><td>verb</td><td>to change, to substitute</td></tr>
		</table>
		</div>
	</div>
	<div id="4" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">Kè wén sì. Zài kàn fángzi.<br/>课文四。在看房子。<br/>Text 4. Seeing an apartment.<br/>
	<audio controls="" preload="metadata" id="03-10-4"><source src="../mandarin/audio/03-10-4.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<p><b>大山: </b>这两个地方的房子一样吗?&nbsp;<button type="button" id="n1041" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn1041"><b>Dàshān: </b>Zhè liǎng gè dìfāng de fángzi yīyàng ma?</span></p>
		<p><b>中介: </b>不一样。您看，学校外边的房子比学校里边的大一些。&nbsp;<button type="button" id="n1042" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn1042"><b>Zhōngjiè: </b>Bù yīyàng. Nín kàn, xuéxiào wàibian de fángzi bǐ xuéxiào lǐbian de dà yīxiē.</span></p>
		<p><b>大山: </b>大小没关系，主要是环境，哪个更安静?&nbsp;<button type="button" id="n1043" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn1043"><b>Dàshān: </b>Dàxiǎo méi guānxì, zhǔyào shi huánjìng, nǎge gèng ānjìng?</span></p>
		<p><b>中介: </b>学校里边的没有学校外边的那么安静。&nbsp;<button type="button" id="n1044" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn1044"><b>ZhōngjièB: </b>Xuéxiào lǐbian de méiyǒu xuéxiào wàibian dì nàme ānjìng.</span></p>
		<p><b>大山: </b>哪个方便一些呢?&nbsp;<button type="button" id="n1045" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn1045"><b>Dàshān: </b>Nǎge fāngbiàn yīxiē ne?</span></p>
		<p><b>中介: </b>学校里边比学校外边方便，附近有三四个车站。&nbsp;<button type="button" id="n1046" onclick="myToggle(this.id);">拼音</button>
		<span class="pyn" id="pyn1046"><b>Zhōngjiè: </b>Xuéxiào lǐbian bǐ xuéxiào wàibian fāngbiàn, fùjìn yǒu sānsì gè chēzhàn.</span></p>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<b>Dashan: </b>Are these two houses the same?<br/>
		<b>Zhongjie: </b>Different. You see, the house outside the school is bigger than the one inside the school.<br/>
		<b>Dashan: </b>Size does not matter, mainly the environment, which one is quieter?<br/>
		<b>Zhongjie: </b>The one outside the school is so quiet.<br/>
		<b>Dashan: </b>Which is more convenient?<br/>
		<b>Zhongjie: </b>The one inside the school is more convenient, there are three or four stations nearby.
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>生词 (Shēngcí) New Words</i></th></tr>
			<tr><td>地方</td><td>dìfang</td><td>noun</td><td>place</td></tr>
			<tr><td>中介</td><td>zhōngjiè</td><td>noun</td><td>intermediary, agent</td></tr>
			<tr><td>主要</td><td>zhǔyào</td><td>adjective</td><td>main</td></tr>
			<tr><td>环境</td><td>huánjìng</td><td>noun</td><td>environment</td></tr>
			<tr><td>附近</td><td>fùjìn</td><td>noun</td><td>nearby, vicinity</td></tr>
		</table>
		</div>
	</div>
</div>
<div id="n1"><a href="#0"> Back to top</a></div>
<div class="container-fluid">
	<h3 class="sublesson">汪释 (wāng shì) Notes</h3>
	<h4 class="textSection">1. Comparative Sentences 2: <b>A 比 B + Adj + 一点儿 / 一些 / 得多 / 多了</b> (A bǐ B + Adj + yīdiǎnr / yīxiē / dé duō / duōle)</h4>
	<p>"<b>一点儿</b>" (<b>yīdiǎnr</b>)， "<b>一些</b>" (<b>yīxiē</b>) ， "<b>得多</b>" (<b>dé duō</b>) or "<b>多了</b>" (<b>duōle</b>) etc. can follow an adjective in a comparative sentence, indicating the degree of difference between things, among which "<b>一点儿</b>" (yīdiǎnr) and "<b>一些</b>" (<b>yīxiē</b>) indicate a slight difference， while "<b>得多</b>" (<b>dé duō</b>) and "<b>多了</b>" (<b>duōle</b>) indicate a big difference. For example:</p>	
	<ol>
		<li>大山<b>比</b>大卫矮<b>一点儿</b>。<br/><span class="pynD">Dàshān <b>bǐ</b> Dàwèi ǎi <b>yīdiǎnr</b>.</span></li>
		<li>我今天起得<b>比</b>昨天晚<b>一些</b>。<br/><span class="pynD">Wǒ jīntiān qǐ dé <b>bǐ</b> zuótiān wǎn <b>yīxiē</b>.</span></li>
		<li>今天的作业<b>比</b>昨天多<b>得多</b>。<br/><span class="pynD">Jīntiān de zuòyè <b>bǐ</b> zuótiān duō <b>dé duō</b>.</span></li>
		<li>数学<b>比</b>历史难<b>多了</b>。<br/><span class="pynD">Shùxué <b>bǐ</b> lìshǐ nán <b>duōle</b>.</span></li>
	</ol>
	<p>The negative form is "<b>A 没有 B ( + 这么 / 那么) + Adj</b>". (<b>A méiyǒu B ( + zhème / nàme) + Adj</b>) For example:</p>
	<ol start="5">
		<li>咖啡<b>没有</b>茶好喝。<br/><span class="pynD">Kāfēi <b>méiyǒu</b> chá hǎo hē.</span></li>
		<li>他<b>没有</b>我<b>这么</b>高。<br/><span class="pynD">Tā <b>méiyǒu</b> wǒ <b>zhème</b> gāo.</span></li>
		<li>这个电影<b>没有</b>那个电影<b>那么</b>有意思。<br/><span class="pynD">Zhège diànyǐng <b>méiyǒu</b> nàgè diànyǐng <b>nàme</b> yǒuyìsi.</span></li>
		<li>学校里边的(房子)<b>没有</b>学校外边的<b>那么</b>安静。<br/><span class="pynD">Xuéxiào lǐbian de (fángzi) <b>méiyǒu</b> xuéxiào wàibian dì <b>nàme</b> ānjìng.</span></li>
	</ol>	
	<p><b>练一练 (liàn yī liàn) Practise</b></p>
	<p>完成句子 (Wánchéng jùzi) Complete the sentences</p>
	<ol>
		<li>今天的天气比 ____ 。<br/><span class="pynD">Jīntiān de tiānqì bǐ ____ .</span></li>
		<li>我做的饭没有 ____ 。<br/><span class="pynD">Wǒ zuò de fàn méiyǒu ____ .</span></li>
		<li>骑自行车 ____ 。<br/><span class="pynD">Qí zìxíngchē ____ .</span></li>
	</ol>
	<div id="n2" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">2. Expression of Approximate Numbers 1</h4>
	<p>1n Chinese, two adjacent numerals can be used together to indicate an approximate number, for example:<br/>
		一二(两) <span class="pynD">yī'èr (liǎng)</span> <span class="engD">(one or two)</span><br/>
		两三 <span class="pynD">liǎngsān</span> <span class="engD">(two or three)</span><br/>
		三四 <span class="pynD">sānsì</span> <span class="engD">(three or four)</span><br/>
		五六 <span class="pynD">wǔliù</span> <span class="engD">(five or six)</span><br/>
		七八 <span class="pynD">qībā</span> <span class="engD">(seven or eight)</span><br/>
		八九 <span class="pynD">bājiǔ</span> (<span class="engD">(eight or nine)</span><br/>
		For example:</p>
	<ol>
		<li>我每天学习<b>一两</b>个小时汉语。<br/><span class="pynD">Wǒ měitiān xuéxí <b>yī liǎng</b> gè xiǎoshí Hànyǔ.</span></li>
		<li>你都喝了<b>三四</b>杯咖啡了，别再喝了!<br/><span class="pynD">Nǐ dōu hēle <b>sānsì</b> bēi kāfēile, bié zài hēle!</span></li>
		<li>从小丽家到公司骑车<b>七八</b>分钟就能到。<br/><span class="pynD">Cóngxiǎo lì jiā dào gōngsī qí chē <b>qībā</b> fēnzhōng jiù néng dào.</span></li>
		<li>学校里边比学校外边方便，附近有<b>三四</b>个车站。<br/><span class="pynD">Xuéxiào lǐbian bǐ xuéxiào wàibian fāngbiàn, fùjìn yǒu <b>sānsì</b> gè chēzhàn.</span></li>
	</ol>
	<p><b>练一练 (liàn yī liàn) Practise</b></p>
	<p>完成句子 (Wánchéng jùzi) Complete the sentences</p>
	<ol>
		<li>这辆自行车 ____ 。<br/><span class="pynD">Zhè liàng zìxíngchē ____ .</span></li>
		<li>今天的作业我 ____ 能做完。<br/><span class="pynD">Jīntiān de zuòyè wǒ ____ néng zuò wán.</span></li>
		<li>我有 ____ 条黑色的裤子。<br/><span class="pynD">Wǒ yǒu ____ tiáo hēisè de kùzi.</span></li>
	</ol>
</div>
<div id="ex1"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<div class="container-fluid">
	<h3 class="sublesson">练习 (liàn xí) Exercises</h3>
	<h4 class="textSection">1. 朗读 下列 短语 和 句子<br/>Lǎngdú xiàliè duǎnyǔ hé jùzi<br/>Read the following phrases and sentences aloud.
	<audio controls="" preload="metadata" id="03-10-5"><source src="../mandarin/audio/03-10-5.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col">
		<p><b>历史</b>: <b>历史</b>课 / 中国<b>历史</b> / <b>历史</b>很长 / 数学比<b>历史</b>难多了。
			<button type="button" id="n1051" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g1051" onclick="myToggle(this.id);">英语</button>
		<span class="pyn" id="pyn1051"><b>lìshǐ</b>: <b>lìshǐ</b> kè / zhōngguó <b>lìshǐ</b> / <b>lìshǐ</b> hěn zhǎng / shùxué bǐ <b>lìshǐ</b> nán duōle.<br/></span>
		<span class="eng" id="eng1051">History: History class / Chinese history / History is long / Mathematics is much more difficult than History.<br/></span></p>
		<p><b>自行车</b>: 一辆<b>自行车</b> / 骑<b>自行车</b> / 这辆<b>自行车</b>太旧了 / 我还打算买辆<b>自行车</b>。
			<button type="button" id="n1052" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g1052" onclick="myToggle(this.id);">英语</button>
		<span class="pyn" id="pyn1052"><b>zìxíngchē</b>: yī liàng <b>zìxíngchē</b> / qí <b>zìxíngchē</b> / zhè liàng <b>zìxíngchē</b> tài jiùle / wǒ hái dǎsuàn mǎi liàng <b>zìxíngchē</b>.<br/></span>
		<span class="eng" id="eng1052">Bike: A bike / bike / This bike is too old / I'm going to buy a bike.<br/></span></p>
		<p><b>换</b>: <b>换</b>钱  / <b>换</b>手机 / <b>换</b>班 / 我要<b>换</b>一辆自行车。
			<button type="button" id="n1053" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g1053" onclick="myToggle(this.id);">英语</button>
		<span class="pyn" id="pyn1053"><b>huàn</b>: <b>huàn</b>qián / <b>huàn</b> shǒujī / <b>huàn</b>bān / wǒ yào <b>huàn</b> yī liàng zìxíngchē.<br/></span>
		<span class="eng" id="eng1053">Change: Money / change mobile phone / change shift / I want to change a bike.<br/></span></p>
		<p><b>环境</b>: <b>环境</b>很好 / 学校<b>环境</b> / <b>环境</b>问题 / 哪个<b>环境</b>史安静?
			<button type="button" id="n1054" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g1054" onclick="myToggle(this.id);">英语</button>
		<span class="pyn" id="pyn1054"><b>huánjìng</b>: <b>huánjìng</b> hěn hǎo / xuéxiào <b>huánjìng</b> / <b>huánjìng</b> wèntí / nǎge <b>huánjìng</b> shǐ ānjìng?<br/></span>
		<span class="eng" id="eng1054">environment: the environment is very good / school environment / environmental problem / which environment historically is quiet?<br/></span></p>
		<p><b>附近</b>: 学校<b>附近</b> / <b>附近</b>的超市 / 我住在<b>附近</b> / 学校<b>附近</b>有三四个车站。
			<button type="button" id="n1055" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g1055" onclick="myToggle(this.id);">英语</button>
		<span class="pyn" id="pyn1055"><b>fùjìn</b>: xuéxiào <b>fùjìn</b> / <b>fùjìn</b> de chāoshì / wǒ zhù zài <b>fùjìn</b> / xuéxiào <b>fùjìn</b> yǒu sānsì gè chēzhàn.<br/></span>
		<span class="eng" id="eng1055">nearby: near the school / near the supermarket / I live near / school there are three or four stations nearby.<br/></span></p>
	</div>
	<div id="ex2" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">2. 选择 恰当 的 词语 填空<br/>Xuǎnzé qiàdàng de cíyǔ tiánkòng<br/>Choose the proper words to fill in the blanks.</h4>
	<div class="col-xs-12 col">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="xhanD"><td>安静</td><td>体育</td><td>个子</td><td>旧</td><td>骑</td></tr>
			<tr class="pynD"><td>ānjìng</td><td>tǐyù</td><td>gèzi</td><td>jiù</td><td>qí</td></tr>
			<tr class="engD"><td></td><td></td><td></td><td></td><td></td></tr>
		</table>
		<ol>
			<li><span class="xhanD">我 _____ 比他高一点儿。</span><br/>
				<span class="pynD">Wǒ _____ bǐ tā gāo yīdiǎn er</span></li>
			<li><span class="xhanD">我每天 _____ 车未学校。</span><br/>
				<span class="pynD">Wǒ měitiān _____ chē wèi xuéxiào.</span></li>
			<li><span class="xhanD">我最喜欢 _____ 课，多有意思啊。</span><br/>
				<span class="pynD">Wǒ zuì xǐhuān _____ kè, duō yǒuyìsi a.</span></li>
			<li><span class="xhanD">我喜欢住在这儿，主要是觉得这儿很 _____。</span><br/>
				<span class="pynD">Wǒ xǐhuān zhù zài zhè'er, zhǔyào shi juédé zhè'er hěn _____.</span></li>
			<li><span class="xhanD">这条裤子太 _____ 了，再买一条吧。</span><br/>
				<span class="pynD">Zhè tiáo kùzi tài _____ le, zài mǎi yītiáo ba.</span></li>
		</ol>
	</div>
	<div class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<div class="col-xs-12 col">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="xhanD"><td>方便</td><td>数学</td><td>换</td><td>附近</td><td>地方</td></tr>
			<tr class="pynD"><td>fāngbiàn</td><td>shùxué</td><td>huàn</td><td>fùjìn</td><td>dìfāng</td></tr>
			<tr class="engD"><td>convenient</td><td>Maths</td><td>to change,<br/>to substitute</td><td>nearby,<br/>vicinity</td><td>place</td></tr>
		</table>
		<ol start="6">
			<li><span class="xhanD"><b>A: </b>我觉得你的比我的好。</span><br/>
				<span class="xhanD"><b>B: </b>你想要这个吗? 没问题，我跟你 _____ 。</span><br/>
				<span class="pynD"><b>A: </b>Wǒ juédé nǐ de bǐ wǒ de hǎo.</span><br/>
				<span class="pynD"><b>B: </b>Nǐ xiǎng yào zhège ma? Méi wèntí, wǒ gēn nǐ _____ .</span></li>
			<li><span class="xhanD"><b>A: </b>你哪天比较 _____ 我们见面聊聊	天儿?</span><br/>
				<span class="xhanD"><b>B: </b>周末吧，未我家吃饭。</span><br/>
				<span class="pynD"><b>A: </b>Nǐ nǎ tiān bǐjiào _____ wǒmen jiànmiàn liáo liáotiānr?</span><br/>
				<span class="pynD"><b>B: </b>Zhōumò ba, wèi wǒjiā chīfàn.</span></li>
			<li><span class="xhanD"><b>A: </b>这个 _____ 的天气怎么样?</span><br/>
				<span class="xhanD"><b>B: </b>非常好，夏天一点儿也不热。</span><br/>
				<span class="pynD"><b>A: </b>Zhège _____ de tiānqì zěnme yàng?</span><br/>
				<span class="pynD"><b>B: </b>Fēicháng hǎo, xiàtiān yīdiǎn er yě bù rè.</span></li>
			<li><span class="xhanD"><b>A: </b>请问，这儿 _____ 有超市吗?</span><br/>
				<span class="xhanD"><b>B: </b>有，一直往前走就是。</span><br/>
				<span class="pynD"><b>A: </b>Qǐngwèn, zhèr _____ yǒu chāoshì ma?</span><br/>
				<span class="pynD"><b>B: </b>Yǒu, yīzhí wǎng qián zǒu jiùshì.</span></li>
			<li><span class="xhanD"><b>A: </b>你怎么不太高兴?</span><br/>
				<span class="xhanD"><b>B: </b>我 _____ 考得不好。</span><br/>
				<span class="pynD"><b>A: </b>Nǐ zěnme bù tài gāoxìng?</span><br/>
				<span class="pynD"><b>B: </b>Wǒ _____ kǎo dé bù hǎo.</span></li>
		</ol>
	</div>
	<div id="ex3" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">3. 用本课新学的语言点和词语描述图片<br/>Yòng běn kè xīn xué de yǔyán diǎn hé cíyǔ miáoshù túpiàn<br/>Describe the pictures using the newly-learned language points and words</h4>
	<div class="col-xs-12 col">
	<ul>
	<li><span class="xhanD"><b>A</b>: 你和妈妈谁起得早?</span><br/>
		<span class="pynD"><b>A</b>: Nǐ hé māmā shéi qǐ dé zǎo?</span><br/>
		<span class="xhanD"><b>B</b>: ____________</span><br/>
		<span class="pynD"><b>B</b>: ____________</span><br/>
		<span class="xhanD"><b>A</b>: 她比你 ____ 起多长时间?</span><br/>
		<span class="pynD"><b>A</b>: Tā bǐ nǐ ____ qǐ duō cháng shíjiān?</span><br/>
		<span class="xhanD"><b>B</b>: ____________</span><br/>
		<span class="pynD"><b>B</b>: ____________</span></li>
	<li><span class="xhanD"><b>A</b>: 今天我们班来了多少学生?</span><br/>
		<span class="pynD"><b>A</b>: Jīntiān wǒmen bān láile duōshǎo xuéshēng?</span><br/>
		<span class="xhanD"><b>B</b>: 今天来了 ____ 个学生。</span><br/>
		<span class="pynD"><b>B</b>: Jīntiān láile ____ gè xuéshēng.</span><br/>
		<span class="xhanD"><b>A</b>: 昨天呢?</span><br/>
		<span class="pynD"><b>A</b>: Zuótiān ne?</span><br/>
		<span class="xhanD"><b>B</b>: 昨天比今天来得 ____ 。</span><br/>
		<span class="pynD"><b>B</b>: Zuótiān shàng bǐ jīntiān láidé ____ .</span></li>
	<li><span class="xhanD"><b>A</b>: 你们今天玩儿了多长时间游戏了?</span><br/>
		<span class="pynD"><b>A</b>: Nǐmen jīntiān wánr le duō cháng shíjiān yóuxìle?</span><br/>
		<span class="xhanD"><b>B</b>: 玩儿了 ____ 了。</span><br/>
		<span class="pynD"><b>B</b>: Wán erle ____ le.</span><br/>
		<span class="xhanD"><b>A</b>: 怎么玩儿了这么长时间?</span><br/>
		<span class="pynD"><b>A</b>: Zěnme wán erle zhème cháng shíjiān?</span><br/>
		<span class="xhanD"><b>B</b>: 天玩儿了三个小时，今天没有 ____ 。</span><br/>
		<span class="pynD"><b>B</b>: Tiān wán erle sān gè xiǎoshí, jīntiān méiyǒu ____ .</span></li>
	<li><span class="xhanD"><b>A</b>: 你看这条裤子怎么样?</span><br/>
		<span class="pynD"><b>A</b>: Nǐ kàn zhè tiáo kùzi zěnmeyàng?</span><br/>
		<span class="xhanD"><b>B</b>: 太贵了，要 ____ 块钱。</span><br/>
		<span class="pynD"><b>B</b>: Tài guìle, yào ____ kuài qián.</span><br/>
		<span class="xhanD"><b>A</b>: 那条呢? 没有 ____ 。</span><br/>
		<span class="pynD"><b>A</b>: Nà tiáo ne? Méiyǒu ____ .</span><br/>
		<span class="xhanD"><b>B</b>: 我觉得还可以。</span><br/>
		<span class="pynD"><b>B</b>: Wǒ juédé hái kěyǐ.</span></li>
	</ul>
	</div>
	<div id="ex4" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">4. 根据 课文 回答 问题<br/>Gēnjù kèwén huídá wèntí<br/>Answer the questions according to the texts.</h4>
	<div class="col-xs-12 col">
		<ol>
			<li>
		<span class="xhanD">大卫和大山谁高? 谁年龄大? 谁的汉语说得好?</span><br/>
			<button type="button" id="n1051x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g1051x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn1051x">Dàwèi hé Dàshān shéi gāo? Shéi niánlíng dà? Shéi de hànyǔ shuō dé hǎo?<br/></span>
		<span class="eng" id="eng1051x">David and Dashan who is high? Who is older? Whose Chinese is good?<br/></span>
			</li>
			<li>
		<span class="xhanD">小明为什么不喜欢数学课?</span><br/>
			<button type="button" id="n1052x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g1052x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn1052x">Xiǎomíng wèishéme bù xǐhuān shùxué kè?<br/></span>
		<span class="eng" id="eng1052x">Why does Xiaoming not like math class?<br/></span>
			</li>
			<li>
		<span class="xhanD">小明和同学打算每天一起做什么? 做多长时间?</span><br/>
			<button type="button" id="n1053x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g1053x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn1053x">Xiǎomíng hé tóngxué dǎsuàn měitiān yīqǐ zuò shénme? Zuò duō cháng shíjiān?<br/></span>
		<span class="eng" id="eng1053x">What is Xiaoming and his classmates planning to do together every day? For how long?<br/></span>
			</li>
			<li>
		<span class="xhanD">小丽为什么比以前来得早了?</span><br/>
			<button type="button" id="n1054x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g1054x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn1054x">Xiǎolì wèishéme bǐ yǐqián láidé zǎole?<br/></span>
		<span class="eng" id="eng1054x">Why is Xiaoli earlier than before?<br/></span>
			</li>
			<li>
		<span class="xhanD">小丽为什么要买自行车?</span><br/>
			<button type="button" id="n1055x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g1055x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn1055x">Xiǎolì wèishéme yāomǎi zìxíngchē?<br/></span>
		<span class="eng" id="eng1055x">Why did Xiaoli buy a bike?<br/></span>
			</li>
			<li>
		<span class="xhanD">住在学校里边和学校外边有什么不一样?</span><br/>
			<button type="button" id="n1056x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g1056x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn1056x">Zhù zài xuéxiào lǐbian hé xuéxiào wàibian yǒu shé me bù yīyàng?<br/></span>
		<span class="eng" id="eng1056x">What's the difference between living in a school and outside the school?<br/></span>
			</li>
		</ol>
	</div>
</div>
<div id="ch"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<div class="container-fluid">
	<div class="col-xs-12">
	<h3>汉字 (Hànzì) Characters</h3>
	<h4 class="textSection">旧字新词&nbsp;(Jiù zì xīn cí)&nbsp;Word Game: Old Words From New Words</h4>
	<div class="gameDiv">
	<table class="table table-centered">
		<tr><td><b>换</b></td><td></td><td><b>季</b>节</td></tr>
		<tr><td><b></b></td><td></td><td><b></b></td></tr>
		<tr><td></td><td><b>换季</b></td><td></td></tr>
		<tr><td></td><td><b></b></td><td></td></tr>
	</table>
	</div>
	<div class="gameDiv">
	<table class="table table-centered">
		<tr><td><b>地</b>方</td><td></td><td>上<b>面</b></td></tr>
		<tr><td><b>Dì</b>fāng</td><td></td><td>Shàng<b>miàn</b></td></tr>
		<tr><td></td><td><b>地面</b></td><td></td></tr>
		<tr><td></td><td><b>Dìmiàn</b></td><td></td></tr>
	</table>
	</div>
	<div class="gameDiv">
	<table class="table table-centered">
		<tr><td><b>主</b>要</td><td></td><td><b>菜</b></td></tr>
		<tr><td><b>Zhǔ</b>yào</td><td></td><td><b>Cài</b></td></tr>
		<tr><td></td><td><b>主菜</b></td><td></td></tr>
		<tr><td></td><td><b>Zhǔcài</b></td><td></td></tr>
	</table>
	</div>
	</div>
</div>
<div id="ap"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<div class="container-fluid">
	<div class="col-xs-12">
	<h3>运用 (yùnyòng) Application</h3>
	<h4 class="textSection">1. Pair Work</h4>
	<p>Work in pairs. Ask your partner whether or not he/she has done the following things this year, and how many times he/she has done them. Answer the questions using approximate numbers.</p>
	<table class="table table-condensed table-responsive table-bordered">
		<tr><th>事情</th><th>对方做过几次</th></tr>
		<tr class="pynD"><th>Shìqíng</th><th>Duìfāng zuòguò jǐ cì</th></tr>
		<tr><td>爬山</td><td></td></tr>
		<tr class="pynD"><td>Páshān</td><td></td></tr>
		<tr><td>参加比赛</td><td></td></tr>
		<tr class="pynD"><td>Cānjiā bǐsài</td><td></td></tr>
		<tr><td>听音乐会</td><td></td></tr>
		<tr class="pynD"><td>Tīng yīnyuèhuì</td><td></td></tr>
		<tr><td>逛公园</td><td></td></tr>
		<tr class="pynD"><td>Guàng gōngyuán</td><td></td></tr>
		<tr><td>旅游</td><td></td></tr>
		<tr class="pynD"><td>Lǚyóu</td><td></td></tr>
		<tr><td>上课迟到</td><td></td></tr>
		<tr class="pynD"><td>Shàngkè chídào</td><td></td></tr>
	</table>
	<h4 class="sublesson">2. Group Work</h4>
	<p>Work in groups of 3-4. Compare and find each person's most distinguishing aspect, using<br/>
		<b>"A比B + Adj + 一点儿 / 一些 / 得多 / 多了"</b>
		<span class="pynD">(A bǐ B + Adj + yīdiǎn er / yīxiē / dé duō / duōle)</span><br/>
		and<br/>
		<b>"A没有B(+ 这么/那么) + Adj"</b>
		<span class="pynD">(A méiyǒu B ( + zhème / nàme ) + Adj).</span></p>
	例如: <span class="pynD">Lìrú</span><br/>
		A: 我每天听歌听半个小时。<br/>
		<span class="pynD">Wǒ měitiān tīng gē tīng bàn gè xiǎoshí.</span><br/>
		B: 我听歌的时间比A 长得多，我听三个小时。<br/>
		<span class="pynD">Wǒ tīng gē de shíjiān bǐ A zhǎng dé duō, wǒ tīng sān gè xiǎoshí.</span><br/>
		C: 我听歌的时间没有B 那么长。<br/>
		<span class="pynD">Wǒ tīng gē de shíjiān méiyǒu B nàme zhǎng.</span><br/>
		D: 我听歌的时间比B 长一点儿，我听三个半小时。<br/>
		<span class="pynD">Wǒ tīng gē de shíjiān bǐ B zhǎng yīdiǎn er, wǒ tīng sān gè bàn xiǎoshí.</span><br/>
		D听歌的时间最长。
		<span class="pynD">D tīng gē de shíjiān zuì zhǎng.</span><br/>
	<table class="table table-condensed table-responsive table-bordered">
		<tr><td>提示:</td><td>学习的时间</td><td>看过的电影</td><td>旅游去过的地方</td></tr>
		<tr class="pynD"><td>Tíshì:</td><td>Xuéxí de shíjiān</td><td>Kànguò de diànyǐng</td><td>Lǚyóu qùguò dì dìfāng</td></tr>
		<tr><td></td><td>游泳游得远</td><td>作业写得快</td><td></td></tr>
		<tr class="pynD"><td></td><td>Yóuyǒng yóu dé yuǎn</td><td>Zuòyè xiě dé kuài</td><td></td></tr>
	</table>
	<table class="table table-condensed table-responsive table-bordered">
		<tr><th>谁</th><th>最。。。</th></tr>
		<tr class="pynD"><th>Shéi</th><th>Zuì...</th></tr>
		<tr><td></td><td></td></tr>
		<tr class="pynD"><td></td><td></td></tr>
		<tr><td></td><td></td></tr>
		<tr class="pynD"><td></td><td></td></tr>
		<tr><td></td><td></td></tr>
		<tr class="pynD"><td></td><td></td></tr>
		<tr><td></td><td></td></tr>
		<tr class="pynD"><td></td><td></td></tr>
		<tr><td></td><td></td></tr>
		<tr class="pynD"><td></td><td></td></tr>
		<tr><td></td><td></td></tr>
		<tr class="pynD"><td></td><td></td></tr>
	</table>
	</div>
</div>
<div id="cs"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<div class="container-fluid">
	<div class="col-xs-12">
	<h3>俗语 (súyǔ) Common Saying</h3>
	<h4 class="textSection">不可同日而语 <span class="pynD">Bù kě tóngrì'éryǔ</span></h4>
	<p>不可同日而语 <span class="pynD">Bù kě tóngrì'éryǔ</span>literally "<i>(two things) cannot be mentioned in the same breath</i>", is used metaphorically to mean that there is no comparison between two people or two things because of the significant difference. For instance, in terms of science and technology , there is no comparison between the past and the present.</p>
	</div>
</div>
<div><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<?php
} else { header( 'Location: https://www.stephenmccready.asia/mi/index.php'); }
?>
</body>
</html>
