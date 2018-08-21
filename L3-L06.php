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
	<title>Level 3 - 6</title>
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
	<div class="jumbotron lessonHeaderLeft">Dì liù kè<br/>第六课<br/>Lesson 6</div>
	<div class="lessonHeaderRight"><h2>Zénme tūrán zhǎo bu dào le?<br/>怎么突然找不到了?<br/><b>Why are they suddenly missing?</b></h2></div>
</div>
<div id="custom-nav" class="clearfix"><p>
	<a class="btn btn-success btn-md" href="#1">1</a>&nbsp;
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
	<a class="btn btn-info btn-md" href="L3-E09.php" target="_blank">Workbook</a></p></div>
<div class="container-fluid">
	<p>Match the verbs with the complements, and then read the phrases aloud.</p>
	<table class="table table-condensed table-centered">
		<tr><td>买</td><td>清楚</td></tr>
		<tr><td><span class="pynD">mǎi</span></td><td><span class="pynD">qīngchǔ</span></td></tr>
		<tr><td><span class="engD">to buy, to purchase</span></td><td><span class="engD">clear, distinct</span></td></tr>
		<tr><td>看</td><td>明白</td></tr>
		<tr><td><span class="pynD">kàn</span></td><td><span class="pynD">míngbái</span></td></tr>
		<tr><td><span class="engD">to look at, to watch, to read</span></td><td><span class="engD">clear</span></td></tr>
		<tr><td>讲</td><td>到</td></tr>
		<tr><td><span class="pynD">jiǎng</span></td><td><span class="pynD">dào</span></td></tr>
		<tr><td><span class="engD">to explain</span></td><td><span class="engD">to arrive, to reach</span></td></tr>
		<tr><td>听</td><td>去</td></tr>
		<tr><td><span class="pynD">tīng</span></td><td><span class="pynD">qù</span></td></tr>
		<tr><td><span class="engD">to listen</span></td><td><span class="engD">to go</span></td></tr>
		<tr><td>上</td><td>完</td></tr>
		<tr><td><span class="pynD">shàng</span></td><td><span class="pynD">wán</span></td></tr>
		<tr><td><span class="engD">up, above</span></td><td><span class="engD">to finish, to end</span></td></tr>
		<tr><td>做</td><td>见</td></tr>
		<tr><td><span class="pynD">zuò</span></td><td><span class="pynD">jiàn</span></td></tr>
		<tr><td><span class="engD">to make, to produce</span></td><td><span class="engD">see</span></td></tr>
	</table>
</div>
<div class="container-fluid">
	<h4 id="1" class="textSection">Kè wén yī. Zài kètīng.<br/>课文一。 在客厅。<br/>Text 1. In the living room.<br/>
	<audio controls="" preload="metadata" id="03-06-1"><source src="../mandarin/audio/03-06-1.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<b>周 明: </b>我的眼镜呢? 怎么突然找不到了?你看见了吗?&nbsp;<button type="button" id="n611" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn611"><b>Zhōu Míng: </b>Wǒ de yǎnjìng ne? Zěnme túrán zhǎo bù dào le? Nǐ kànjiàn le ma?</span><br/>
		<b>周太太: </b>我没看见啊。&nbsp;<button type="button" id="n612" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn612"><b>Zhōu tàitài: </b>Wǒ méi kànjiàn a.</span><br/>
		<b>周 明: </b>我离不开眼镜，没有眼镜，我一个字也看不清楚。&nbsp;<button type="button" id="n613" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn613"><b>Zhōu Míng: </b>Wǒ lì bù kāi yǎnjìng, méiyǒu yǎnjìng, wǒ yīgè zì yě kàn bù qīngchǔ.</span><br/>
		<b>周太太: </b>你去房间找找，是不是刚才放在桌子上了?&nbsp;<button type="button" id="n614" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn614"><b>Zhōu tàitài: </b>Nǐ qù fángjiān zhǎozhao, shì bù shì gāngcái fàng zài zhuōzi shàng le?</span><br/>
		<b>周 明: </b>我怎么看得到啊? 你快过来帮忙啊。&nbsp;<button type="button" id="n615" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn615"><b>Zhōu Míng: </b>Wǒ zěnme kàn de dào a? Nǐ kuài guòlái bāng máng a.</span><br/>
		<b>周太太: </b>好吧，我帮你去找找。&nbsp;<button type="button" id="n616" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn616"><b>Zhōu tàitài: </b>Hǎo ba, wǒ bāng nǐ qù zhǎozhao.</span><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<b>Zhou Ming: </b>Where are my glasses? Why can't I suddenly find them? Have you seen them?<br/>
		<b>Mrs. Zhou: </b>I haven't seen them.<br/>
		<b>Zhou Ming: </b>I can't leave without my glasses. I can't see a word clearly.<br/>
		<b>Mrs. Zhou: </b>Go to the room to look for them, did you just put them on the table?<br/>
		<b>Zhou Ming: </b>How can I see them? Come and help me.<br/>
		<b>Mrs. Zhou: </b>All right. I'll help you find them.<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>生词 (Shēngcí) New Words</i></th></tr>
			<tr><td>眼镜</td><td>yǎnjìng</td><td>n</td><td>glasses, spectacles</td></tr>
			<tr><td>突然</td><td>túrán</td><td>adv</td><td>suddenly</td></tr>
			<tr><td>离开</td><td>lì kāi</td><td>v</td><td>to leave, to part with</td></tr>
			<tr><td>清楚</td><td>qīngchǔ</td><td>adj</td><td>clear, distinct</td></tr>
			<tr><td>刚才</td><td>gāngcái</td><td>n</td><td>just now</td></tr>
			<tr><td>帮忙</td><td>bāng máng</td><td>v</td><td>to help</td></tr>
		</table>
		</div>
	</div>
	<div id="2" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">Kè wén èr. Zài dǎ diànhuà.<br/>课文二。在打电话。<br/>Text 2. On the phone.<br/>
	<audio controls="" preload="metadata" id="03-06-2"><source src="../mandarin/audio/03-06-2.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<b>同学: </b>今天的作业你做完了吗?&nbsp;<button type="button" id="n621" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn621"><b>Tóngxué: </b>Jīntiān de zuòyè nǐ zuòwán le ma?</span><br/>
		<b>儿子: </b>刚做完，你呢?&nbsp;<button type="button" id="n622" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn622"><b>Érzi: </b>Gāng zuòwán, nǐ ne?</span><br/>
		<b>同学: </b>今天这些题特别难，我看不懂，不会做，你能帮我吗?&nbsp;<button type="button" id="n623" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn623"><b>Tóngxué: </b>Jīntiān zhèxiē tí tèbié nán, wǒ kàn bù dǒng, bù huì zuò, nǐ néng bāng wǒ ma?</span><br/>
		<b>儿子: </b>电话里讲不明白，你来我家吧，我给你讲讲。&nbsp;<button type="button" id="n624" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn624"><b>Érzi: </b>Diànhuà li jiǎng bù míngbái, nǐ lái wǒ jiā ba, wǒ gěi nǐ jiǎngjiǎng.</span><br/>
		<b>同学: </b>好啊，我锻炼完了就过去。&nbsp;<button type="button" id="n625" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn625"><b>Tóngxué: </b>Hǎo a, wǒ duànliàn wán le jiù guòqù.</span><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<b>Classmate: </b>Have you finished your homework today?<br/>
		<b>Son: </b>Just finished, what about you?<br/>
		<b>Classmate: </b>Today these questions are particularly difficult, I do not understand, I cannot do them, can you help me?<br/>
		<b>Son: </b>I don't understand over the phone, come to my house, I will tell you.<br/>
		<b>Classmate: </b> Yes, when I finish my workout I'll come over.<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>生词 (Shēngcí) New Words</i></th></tr>
			<tr><td>特别</td><td>tèbié</td><td>adv</td><td>extraordinarily</td></tr>
			<tr><td>讲</td><td>jiǎng</td><td>v</td><td>to explain</td></tr>
			<tr><td>明白</td><td>míngbái</td><td>adj</td><td>clear</td></tr>
			<tr><td>锻炼</td><td>duànliàn</td><td>v</td><td>to do physical exercise</td></tr>
		</table>
		</div>
	</div>
	<div id="3" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">Kè wén sān. Zài xiūxí shì.<br/>课文三。在休息室。<br/>Text 3. In the lounge.<br/>
	<audio controls="" preload="metadata" id="03-06-3"><source src="../mandarin/audio/03-06-3.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<b>同事: </b>你怎么有点儿不高兴?&nbsp;<button type="button" id="n631" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn631"><b>Tóngshì: </b>Nǐ zěnme yǒudiǎnr bù gāoxìng?</span><br/>
		<b>小刚: </b>我想请小丽吃饭，但是找不到好饭馆。&nbsp;<button type="button" id="n632" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn632"><b>Xiǎogāng: </b>Wǒ xiǎng qǐng Xiǎolì chī fàn, dànshì zhǎo bù dào hǎo fànguǎnr.</span><br/>
		<b>同事: </b>那你请她听音乐会吧，她喜欢听音乐。&nbsp;<button type="button" id="n633" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn633"><b>Tóngshì: </b>Nà nǐ qǐng tā tīng yīnyuèhuì ba, tā xǐhuān tīng yīnyuè.</span><br/>
		<b>小刚: </b>音乐会人太多，买不到票。&nbsp;<button type="button" id="n634" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn634"><b>Xiǎogāng: </b>Yīnyuèhuì rén tài duō, mǎi bù dào piào.</span><br/>
		<b>同事: </b>那去公园走走，聊聊天儿吧。&nbsp;<button type="button" id="n635" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn635"><b>Tóngshì: </b>Nà qù gōngyuán zǒuzou, liáoliao tiānr ba.</span><br/>
		<b>小刚: </b>公园太大，多累啊。&nbsp;<button type="button" id="n636" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn636"><b>Xiǎogāng: </b>Gōngyuán tài dà, duō lèi a.</span><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<b>Colleague: </b>Why are you a little upset?<br/>
		<b>Xiaogang: </b>I want to ask Xiaoli to eat, but I can't find a good restaurant.<br/>
		<b>Colleague: </b>Then invite her to a concert, she likes listening to music.<br/>
		<b>Xiaogang: </b>There are too many people going to the concert, it's sold out.<br/>
		<b>Colleague: </b>Lets go to the park and have a chat.<br/>
		<b>Xiaogang: </b>The park is too big, it's tiring.<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>生词 (Shēngcí) New Words</i></th></tr>
			<tr><td>音乐</td><td>yīnyuè</td><td>n</td><td>music</td></tr>
			<tr><td>公园</td><td>gōngyuán</td><td>n</td><td>park</td></tr>
			<tr><td>聊天(儿)</td><td>liáotiān(r)</td><td>v</td><td>to chat</td></tr>
		</table>
		</div>
	</div>
	<div id="4" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">Kè wén sì. Zài kètīng.<br/>课文四。在客厅。<br/>Text 4. In the living room.<br/>
	<audio controls="" preload="metadata" id="03-06-4"><source src="../mandarin/audio/03-06-4.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<b>周太太: </b>你怎么还喝咖啡?&nbsp;<button type="button" id="n641" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn641"><b>Zhōu tàitài: </b>Nǐ zěnme hái hē kāfēi?</span><br/>
		<b>周明: </b>怎么了?&nbsp;<button type="button" id="n642" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn642"><b>Zhōu Míng: </b>Zěnme le?</span><br/>
		<b>周太太: </b>你不是说晚上睡不着觉吗?&nbsp;<button type="button" id="n643" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn643"><b>Zhōu tàitài: </b>Nǐ bù shì shuō wǎnshàng shuì bù zháo jiào ma?</span><br/>
		<b>周明: </b>没事，我只喝一杯。&nbsp;<button type="button" id="n644" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn644"><b>Zhōu Míng: </b>Méi shì, wǒ zhǐ hè yī bēi.</span><br/>
		<b>周太太: </b>你还是喝杯牛奶吧，可以睡得更好些。&nbsp;<button type="button" id="n645" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn645"><b>Zhōu tàitài: </b>Nǐ háishì hē bēi niúnǎi ba, kěyǐ shuì dé gèng hǎo xiē.</span><br/>
		<b>周明: </b>好吧，牛奶呢?&nbsp;<button type="button" id="n646" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn646"><b>Zhōu Míng: </b>Hǎo ba, niúnǎi ne?</span><br/>
		<b>周太太: </b>还没买呢。&nbsp;<button type="button" id="n647" onclick="myToggle(this.id);">拼音</button><br/>
		<span class="pyn" id="pyn647"><b>Zhōu tàitài: </b>Hái méi mǎi ne.</span><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<b>Mrs. Zhou: </b>Why are you still drinking coffee?<br/>
		<b>Zhou Ming: </b>What's wrong?<br/>
		<b>Mrs. Zhou: </b>Didn't you say you couldn't sleep at night?<br/>
		<b>Zhou Ming: </b>All right, I'll just have a drink.<br/>
		<b>Mrs. Zhou: </b>You might as well have a glass of milk, you'll sleep better.<br/>
		<b>Zhou Ming: </b>Okay, where's the milk?<br/>
		<b>Mrs. Zhou: </b>I haven't bought it yet.<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>生词 (Shēngcí) New Words</i></th></tr>
			<tr><td>睡着</td><td>shuì zháo</td><td>v</td><td>to fall asleep</td></tr>
			<tr><td>更</td><td>gèng</td><td>adv</td><td>more, even more</td></tr>
		</table>
		</div>
	</div>
</div>
<div id="n1" class="dash"><a href="#0"> Back to top</a></div>
<div class="container-fluid">
	<h3 class="sublesson">汪释 (wāng shì) Notes</h3>
	<h4 class="textSection">1. Complements of Possibility Introduced by "<b>V 得/不</b>" (V dé/bù)</h4>
	<p>In Chinese, "<b>V 得 + Complements</b>" or "<b>V 不 + Complements</b>" can be used to indicate whether or not a result can be obtained or a goal be reached. "<b>V 得 + Complements</b>" is the positive form, and "<b>V 不 + Complements</b>" is the negative form . The complements used in this structure are usually complements of result or direction, and certain adjectives or verbs. The interrogative form is "<b>V 得 + Complements V 不 + Complements</b>" or "<b>V 得 + Complements 吗</b>". For example:</p>
	<ol>
		<li>我<b>看得</b>清楚那个汉字。<br/><span class="pynD">Wǒ kàn dé qīngchǔ nàgè Hànzì.</span><br/>
			<span class="engD">I can see the Chinese character clearly.</span></li>
		<li>楼太高了，我<b>上不</b>去。<br/><span class="pynD">Lóu tài gāole, wǒ shàng bù qù.</span><br/>
			<span class="engD">The building is too high, I can't go.</span></li>
		<li>老师说的话你<b>听得</b>见听不见?<br/><span class="pynD">Lǎoshī shuō dehuà nǐ tīng dé jiàn tīng bùjiàn?</span><br/>
			<span class="engD">Can you hear what the teacher said?</span></li>
		<li>我<b>找不</b>到好饭馆。<br/><span class="pynD">Wǒ zhǎo bù dào hǎo fànguǎn.</span><br/>
			<span class="engD">I can't find a good restaurant.</span></li>
	</ol>
	<p><b>练一练 (liàn yī liàn) Practise</b></p>
	<p>完成句子 (Wánchéng jùzi) Complete the sentences</p>
	<ol>
		<li>你说话说得太快了，我 ____ 。<br/><span class="pynD">Nǐ shuōhuà shuō dé tài kuàile, wǒ ____ .</span></li>
		<li>那么多饭你 ____ 。<br/><span class="pynD">Nàme duō fàn nǐ ____ .</span></li>
		<li>今天的作业一点儿也不多，7 点以前 ____ 。<br/><span class="pynD">Jīntiān de zuòyè yīdiǎnr yě bù duō, 7 diǎn yǐqián ____ .</span></li>
	</ol>
	<div id="n2" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">2. "<b>N + 呢 (ne)"</b> Used to Ask about Location</h4>
	<p>In Chinese, "Noun + 呢" is used to ask about where somebody or something is. For example:<br/>
		"妈妈<b>呢</b>?" (Māmā <b>ne</b>?) means "where is mom?", and<br/>
		"小狗<b>呢</b>?" (Xiǎo gǒu <b>ne</b>？) means "where is the dog?".<br/>
		For example:</p>
	<ol>
		<li><span class="xhanD">A: 你的书<b>呢</b>? 放在哪儿了?</span><br/>
			<span class="pynD">A: Nǐ de shū <b>ne</b>? Fàng zài nǎrle?</span><br/>
			<span class="xhanD">B: 就在桌子上啊。</span><br/>
			<span class="pynD">B: Jiù zài zhuōzi shàng a.</span><br/></li>
		<li><span class="xhanD">A: 我的眼镜<b>呢</b>? 你看见了吗?</span><br/>
			<span class="pynD">A: Wǒ de yǎnjìng <b>ne</b>? Nǐ kànjiànle ma?</span><br/>
			<span class="xhanD">B: 我没看见啊。</span><br/>
			<span class="pynD">B: Wǒ méi kànjiàn a.</span><br/></li>
	</ol>	
	<p><b>练一练 (liàn yī liàn) Practise</b></p>
	<p>完成句子 (Wánchéng jùzi) Complete the dialogues</p>
	<ol>
		<li>A: 你的手机呢?<br/>B: ____ 。<br/>
			<span class="pynD">A: Nǐ de shǒujī ne?<br/>B: ____ .</span></li>
		<li>A: 你的车呢?<br/>B: ____ 。<br/>
			<span class="pynD">A: Nǐ de chē ne<br/>B: ____ .</span></li>
		<li>A: ____ ？<br/>B: 爸爸拿走了。<br/>
			<span class="pynD">A: ____ ？<br/>B: Bàba ná zǒule.</span></li>
	</ol>
	<div id="n3" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">3. Comparison of "<b>刚</b>" (<b>gāng</b>: just) and "<b>刚才</b>" (<b>gāngcái</b>: just now)</h4>
	<p>The adverb "<b>刚</b>" (<b>gāng</b>) and the noun "<b>刚才</b>" (<b>gāngcái</b>) both indicate that the action has happened not long ago.<br/>
	However，"<b>刚才</b>" (<b>gāngcái</b>) usually means several minutes ago,<br/>
	while "<b>刚</b>" (<b>gāng</b>) means a short time from the speaker's point of view, which can be several minutes, a few days, even
months.<br/>
	For example, "我<b>刚</b>来中国两个月" （Wǒ <b>gāng</b> lái Zhōngguó liǎng gè yuè）(I've been in China for only two months) shows
that the speaker considers two months a short period of time.<br/>
	"<b>刚</b>" (<b>gāng</b>) is only used right before the verb, while "<b>刚才</b>" (<b>gāngcái</b>) can be used before the verb or at the beginning of the sentence.<br/>
Compare the following sentences with "<b>刚</b>" (<b>gāng</b>) and "<b>刚才</b>" (<b>gāngcái</b>).</p>	
	<table class="table table-centered table-bordered table-responsive table-condensed">
		<tr><th>"<b>刚</b>" (<b>gāng</b>)</th><th>"<b>刚才</b>" (<b>gāngcái</b>)</th></tr>
		<tr><td>爸爸<b>刚</b>出去。<br/>Bàba <b>gāng</b> chūqù.<br/>Dad just went out.</td>
			<td>爸爸<b>刚才</b>出去了。<br/>Bàba <b>gāngcái</b> chūqùle.<br/>Dad just went out.</td></tr>
		<tr><td>我<b>刚</b>喝完一杯咖啡。<br/>Wǒ <b>gāng</b> hē wán yībēi kāfēi.<br/>I just finished a cup of coffee.</td>
			<td><b>刚才</b>我喝了一杯咖啡。<br/><b>Gāngcái</b> wǒ hēle yībēi kāfēi.<br/>I drank a cup of coffee just now.</td></tr>
		<tr><td>我<b>刚</b>放在桌子上，现在就没了。<br/>Wǒ <b>gāng</b> fàng zài zhuōzi shàng, xiànzài jiù méile.
					<br/>I just put it on the table and now it's gone.</td>
			<td>眼镜周明<b>刚才</b>放在桌子上了。<br/>Yǎnjìng zhōumíng <b>gāngcái</b> fàng zài zhuōzi shàngle.
					<br/>Zhou Ming just put the glasses on the table.</td></tr>
		<tr><td>儿子<b>刚</b>做完作业。<br/>Érzi <b>gāng</b> zuò wán zuòyè.<br/>My son has just finished his homework.</td>
			<td><b>刚才</b>儿子在做作业。<br/><b>Gāngcái</b> érzi zài zuò zuoyè.<br/>My son was doing his homework just now.</td></tr>
	</table>
	<p><b>练一练 (liàn yī liàn) Practise</b></p>
	<p>完成句子 (Wánchéng jùzi) Complete the sentences</p>
	Fill in the blanks with "<b>刚</b>" (<b>gāng</b>) or "<b>刚才</b>" (<b>gāngcái</b>)<br/>
	<ol>
		<li> ____ 你去哪儿了?<br/><span class="pynD">____ nǐ qù nǎ'erle?</span></li>
		<li>我 ____ 做完作业，真累啊!<br/><span class="pynD">Wǒ ____ zuò wán zuòyè, zhēn lèi a!</span></li>
		<li>白先生 ____ 到北京，还没休，息呢。<br/><span class="pynD">Bái xiānshēng ____ dào Běijīng, hái méi xiū, xī ne.</span></li>
	</ol>
</div>
<div id="ex1" class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<div class="container-fluid">
	<h3 class="sublesson">练习 (liàn xí) Exercises</h3>
	<h4 class="textSection">1. 朗读 下列 短语 和 句子<br/>Lǎngdú xiàliè duǎnyǔ hé jùzi<br/>Read the following phrases and sentences aloud.
	<audio controls="" preload="metadata" id="03-06-5"><source src="../mandarin/audio/03-06-5.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col">
		<p>突然: 很突然 / 突然的事 / 突然下雨了 / (我的眼镜)怎么突然找不到了?
			<button type="button" id="n651" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g651" onclick="myToggle(this.id);">英语</button>
		<span class="pyn" id="pyn651">Túrán: Hěn túrán / túrán de shì / túrán xià yǔle / (wǒ de yǎnjìng) zěn, me túrán zhǎo bù dàole?<br/></span>
		<span class="eng" id="eng651">Suddenly: suddenly / sudden thing / Suddenly it rained / (My glasses). Why can't you find them all of a  sudden?<br/></span></p>
		<p>离开: 离开北京 / 离得开 / 离不开 / 我离不开眼镜。
			<button type="button" id="n652" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g652" onclick="myToggle(this.id);">英语</button>
		<span class="pyn" id="pyn652">Líkāi: Líkāi Běijīng / lí dé kāi / lì bù kāi / wǒ lì bù kāi yǎnjìng<br/></span>
		<span class="eng" id="eng652">Leave: Leave Beijing / without / away / I can't do without glasses.<br/></span></p>
		<p>帮忙: 帮帮忙 / 帮一个忙 / 要帮忙吗 / 你快过来帮忙啊。
			<button type="button" id="n653" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g653" onclick="myToggle(this.id);">英语</button>
		<span class="pyn" id="pyn653">Bāngmáng: Bāng bāngmáng / bāng yīgè máng / yào bāngmáng ma / nǐ kuài guòlái bāngmáng a.<br/></span>
		<span class="eng" id="eng653">Help: Help / Do me a favor / can I help you? / come and help me.<br/></span></p>
		<p>讲: 讲题 / 讲清楚 / 给我讲讲 / 电话里讲不明白。
			<button type="button" id="n654" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g654" onclick="myToggle(this.id);">英语</button>
		<span class="pyn" id="pyn654">Jiǎng: Jiǎng tí / jiǎng qīngchǔ / gěi wǒ jiǎng jiǎng / diànhuà li jiǎng bù míngbái.<br/></span>
		<span class="eng" id="eng654">Speak: A question / speak clearly / Tell me about it / I don't understand over the phone.<br/></span></p>
		<p>更: 更多 / 更好 / 更快 / (喝牛奶) 可以睡得更好些。
			<button type="button" id="n655" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g655" onclick="myToggle(this.id);">英语</button>
		<span class="pyn" id="pyn655">Gèng: Gèng duō / gèng hǎo / gèng kuài / (hē niúnǎi) kěyǐ shuì dé gèng hǎoxiē.<br/></span>
		<span class="eng" id="eng655">More: More / Better / Faster / (Drink milk) Can sleep better.<br/></span></p>
	</div>
	<div id="ex2" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">2. 选择 恰当 的 词语 填空<br/>Xuǎnzé qiàdàng de cíyǔ tiánkòng<br/>Choose the proper words to fill in the blanks.</h4>
	<div class="col-xs-12 col">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="xhanD"><td>清楚</td><td>讲</td><td>突然</td><td>特别</td><td>明白</td></tr>
			<tr class="pynD"><td>qīngchǔ</td><td>jiǎng</td><td>túrán</td><td>tèbié</td><td>míngbái</td></tr>
			<tr class="eng6D"><td>clear</td><td>speak</td><td>suddenly</td><td>special</td><td>understand</td></tr>
		</table>
		<ol>
			<li><span class="xhanD">刚才还是晴天，怎么现在 ____ 就下雨了?</span><br/>
				<span class="pynD">Gāngcái háishì qíngtiān, zěnme xiànzài ____ jiù xià yǔle?</span></li>
			<li><span class="xhanD">你的意思我已经听 ____ 了。</span><br/>
				<span class="pynD">Nǐ de yìsi wǒ yǐjīng tīng ____ le.</span></li>
			<li><span class="xhanD">今天的语法课我没去，你给我 ____ 一下吧。</span><br/>
				<span class="pynD">Jīntiān de yǔfǎ kè wǒ méi qù, nǐ gěi wǒ ____ yīxià ba.</span></li>
			<li><span class="xhanD">今天天气 ____ 好，我们去爬山吧。</span><br/>
				<span class="pynD">Jīntiān tiānqì ____ hǎo, wǒmen qù páshān ba.</span></li>
			<li><span class="xhanD">他说什么?你听 ____ 了吗?</span><br/>
				<span class="pynD">Tā shuō shénme? Nǐ tīng ____ le ma?</span></li>
		</ol>
	</div>
	<div class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<div class="col-xs-12 col">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="xhanD"><td>刚才</td><td>音乐会</td><td>公园</td><td>离开</td><td>聊天儿</td></tr>
			<tr class="pynD"><td>gāngcái</td><td>yīnyuè huì</td><td>gōngyuán</td><td>líkāi</td><td>liáotiānr</td></tr>
			<tr class="eng6D"><td>just</td><td>concert</td><td>park</td><td>leave</td><td>chat</td></tr>
		</table>
		<ol start="6">
			<li><span class="xhanD">A: 今天晚上做什么?<br/>B: 我跟小丽去听 ____ 。</span><br/>
				<span class="pynD">A: Jīntiān wǎnshàng zuò shénme?<br/>B: Wǒ gēn Xiǎolì qù tīng ____ .</span><br/></li>
			<li><span class="xhanD">A: 你什么时候 ____ 北京?<br/>B: 明天的飞机。</span><br/>
				<span class="pynD">A: Nǐ shénme shíhòu ____ Běijīng?<br/>B: Míngtiān de fēijī.</span><br/></li>
			<li><span class="xhanD">A: 请问，去 ____ 怎么走?<br/>B: 一直往前走就是。</span><br/>
				<span class="pynD">A: Qǐngwèn, qù ____ zěnme zǒu?<br/>B: Yīzhí wǎng qián zǒu jiùshì.</span><br/></li>
			<li><span class="xhanD">A: 你最喜欢做什么?<br/>B: 跟朋友 ____ 。</span><br/>
				<span class="pynD">A: Nǐ zuì xǐhuān zuò shénme?<br/>B: Gēn péngyǒu ____ .</span><br/></li>
			<li><span class="xhanD">A: 你 ____ 做什么去了?<br/>B: 我帮小丽买了个面包。</span><br/>
				<span class="pynD">A: Nǐ ____ zuò shénme qùle?<br/>B: Wǒ bāng xiǎo lì mǎile gè miànbāo.</span><br/></li>
		</ol>
	</div>
	<div id="ex3" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">3. 用本课新学的语言点和词语描述图片<br/>Yòng běn kè xīn xué de yǔyán diǎn hé cíyǔ miáoshù túpiàn<br/>Describe the pictures using the newly-learned language points and words</h4>
	<div class="col-xs-12 col">
	<ul>
	<li><span class="xhanD"><b>A</b>: 周经理呢?</span><br/>
		<span class="pynD"><b>A</b>: Zhōu jīnglǐ ne?</span><br/><br/>
		<span class="xhanD"><b>B</b>: 他 ____ 出去。</span><br/>
		<span class="pynD"><b>B</b>: Tā ____ chūqù.</span><br/><br/>
		<span class="xhanD"><b>A</b>: 他下午两点以前 ____ ?</span><br/>
		<span class="pynD"><b>A</b>: Tā xiàwǔ liǎng diǎn yǐqián ____ ?</span><br/><br/>
		<span class="xhanD"><b>B</b>: 回得来。</span><br/>
		<span class="pynD"><b>B</b>: Huí dé lái.</span><br/></li>
	<li><span class="xhanD"><b>A</b>: 我想请你 ____ 个 ____ 。</span><br/>
		<span class="pynD"><b>A</b>: Wǒ xiǎng qǐng nǐ ____ gè ____ .</span><br/><br/>
		<span class="xhanD"><b>B</b>: 好啊，怎么了?</span><br/>
		<span class="pynD"><b>B</b>: Hǎo a, zěnmele?</span><br/><br/>
		<span class="xhanD"><b>A</b>: 今天的工作太多了，我 ____ 。</span><br/>
		<span class="pynD"><b>A</b>: Jīntiān de gōngzuò tài duōle, wǒ ____ .</span><br/><br/>
		<span class="xhanD"><b>B</b>: 没问题，我帮你。</span><br/>
		<span class="pynD"><b>B</b>: Méi wèntí, wǒ bāng nǐ.</span><br/></li>
	<li><span class="xhanD"><b>A</b>: 我们什么时候吃晚饭?</span><br/>
		<span class="pynD"><b>A</b>: Wǒmen shénme shíhòu chī wǎnfàn?</span><br/><br/>
		<span class="xhanD"><b>B</b>: 我 ____ 到家，让我休息一下。</span><br/>
		<span class="pynD"><b>B</b>: Wǒ ____ dàojiā, ràng wǒ xiūxí yīxià.</span><br/><br/>
		<span class="xhanD"><b>A</b>: 一个小时 ____ 吗?</span><br/>
		<span class="pynD"><b>A</b>: Yīgè xiǎoshí ____ ma?</span><br/><br/>
		<span class="xhanD"><b>B</b>: 休息得好。</span><br/>
		<span class="pynD"><b>B</b>: Xiūxí dé hǎo.</span><br/></li>
	<li><span class="xhanD"><b>A</b>: 那个电影 ____ 有意思，我们一起去看吧。</span><br/>
		<span class="pynD"><b>A</b>: Nàgè diànyǐng ____ yǒuyìsi, wǒmen yīqǐ qù kàn ba.</span><br/><br/>
		<span class="xhanD"><b>B</b>: 那么多人看， ____ 票吗?</span><br/>
		<span class="pynD"><b>B</b>: Nàme duō rén kàn, ____ piào ma?</span><br/><br/>
		<span class="xhanD"><b>A</b>:  ____ 开始卖票，人不多，买得到。</span><br/>
		<span class="pynD"><b>A</b>: ____ kāishǐ mài piào, rén bù duō, mǎi dédào.</span><br/><br/>
		<span class="xhanD"><b>B</b>: 那我们现在走吧。</span><br/>
		<span class="pynD"><b>B</b>: Nà wǒmen xiànzài zǒu ba.</span><br/></li>
	</ul>
	</div>
	<div id="ex4" class="clearfix"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
	<h4 class="textSection">4. 根据 课文 回答 问题<br/>Gēnjù kèwén huídá wèntí<br/>Answer the questions according to the texts.</h4>
	<div class="col-xs-12 col-md-6 col">
		<ol>
			<li>
		<span class="xhanD">周明要找什么? 为什么?</span><br/>
			<button type="button" id="n651x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g651x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn651x">Zhōumíng yào zhǎo shénme? Wèishéme?<br/></span>
		<span class="eng" id="eng651x">What's Zhouming looking for? Why?<br/></span>
			</li>
			<li>
		<span class="xhanD">周明的儿子做完作业了吗?</span><br/>
			<button type="button" id="n652x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g652x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn652x">Zhōumíng de érzi zuò wán zuòyèle ma?<br/></span>
		<span class="eng" id="eng652x">Did Zhouming's son finish his homework?<br/></span>
			</li>
			<li>
		<span class="xhanD">周明儿子的同学一会儿要做什么?</span><br/>
			<button type="button" id="n653x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g653x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn653x">Zhōumíng er zi de tóngxué yīhuǐr yào zuò shénme?<br/></span>
		<span class="eng" id="eng653x">What will Zhouming's son‘s classmate do for a while?<br/></span>
			</li>
			<li>
		<span class="xhanD">小刚今天怎么了?为什么?</span><br/>
			<button type="button" id="n654x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g654x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn654x">Xiǎogāng jīntiān zěnmele? Wèishéme?<br/></span>
		<span class="eng" id="eng654x">What's wrong with Xiaogang today?<br/></span>
			</li>
			<li>
		<span class="xhanD">周明在喝什么?</span><br/>
			<button type="button" id="n655x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g655x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn655x">Zhōumíng zài hē shénme?<br/></span>
		<span class="eng" id="eng655x">What's Zhouming drinking?<br/></span>
			</li>
			<li>
		<span class="xhanD">周明喝牛奶了吗? 为什么?</span><br/>
			<button type="button" id="n656x" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g656x" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn656x">Zhōumíng hē niúnǎile ma? Wèishéme?<br/></span>
		<span class="eng" id="eng656x">Did Zhouming drink milk? Why?<br/></span>
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
		<tr><td>学<b>校</b></td><td></td><td>公<b>园</b></td></tr>
		<tr><td>xué<b>xiào</b></td><td></td><td>gōng<b>yuán</b></td></tr>
		<tr><td></td><td><b>校园</b></td><td></td></tr>
		<tr><td></td><td><b>xiàoyuán</b></td><td></td></tr>
	</table>
	</div>
	<div class="gameDiv">
	<table class="table table-centered">
		<tr><td><b>吃</b>饭</td><td></td><td><b>桌</b>子</td></tr>
		<tr><td>chī<b>fàn</b></td><td></td><td>zhuō<b>zi</b></td></tr>
		<tr><td></td><td><b>饭桌</b></td><td></td></tr>
		<tr><td></td><td><b>fànzhuō</b></td><td></td></tr>
	</table>
	</div>
	<div class="gameDiv">
	<table class="table table-centered">
		<tr><td>鲜<b>花</b></td><td></td><td>公<b>园</b></td></tr>
		<tr><td>xiān<b>huā</b></td><td></td><td>gōng<b>yuán</b></td></tr>
		<tr><td></td><td><b>花园</b></td><td></td></tr>
		<tr><td></td><td><b>huāyuán</b></td><td></td></tr>
	</table>
	</div>
	</div>
</div>
<div id="ap" class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<div class="container-fluid">
	<div class="col-xs-12">
	<h3>运用 (yùnyòng) Application</h3>
	<h4 class="textSection">1. Pair Work</h4>
	<p>Work in pairs. Read the following phrases first, and then ask each other about what you did during the break</p>
	<p>买饮料。 &nbsp; 吃面包。 &nbsp; 喝咖啡。 &nbsp; 打电话。 &nbsp; 写作业。 &nbsp; 休息。 &nbsp; 跟朋友聊天儿。</p>
	<p>Mǎi yǐnliào. &nbsp; Chī miànbāo. &nbsp; Hē kāfēi. &nbsp; Dǎ diànhuà. &nbsp; Xiě zuòyè. &nbsp; Xiūxí. &nbsp; Gēn péngyǒu liáotiānr.</p>
	<p>例如: A : 刚才你做-什么了?<br/>
		B : 刚才我出去买饮料了</p>
	<h4 class="sublesson">2. Group Work</h4>
	<p>Work in groups of 3-4. Make a survey of your group and take notes. Choose the one who is most awesome.</p>
	<p>.</p>
	</div>
</div>
<div id="cs" class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<div class="container-fluid">
	<div class="col-xs-12">
	<h3>俗语 (súyǔ) Common Saying</h3>
	<h4 class="textSection">"<b>万事开头难</b>" (<b>Wàn shì kāitóu nán</b>). The first step is always the hardest</h4>
	<p>"<b>万事开头难</b>" (<b>Wàn shì kāitóu nán</b>) means the first step is always the hardest. According to this saying, it is normal to end something difficult at the start, but as long as one doesn't give up and keeps doing it, the situation will get easier and better.</p>
	</div>
</div>
<div class="dash"><a href="#0"><span class="glyphicon glyphicon-chevron-up"><br/></span> Back to top</a></div>
<?php
} else { header( 'Location: https://www.stephenmccready.asia/mi/index.php'); }
?>
</body>
</html>
