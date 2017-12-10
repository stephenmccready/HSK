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
	<title>Level 2 - 6</title>
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
<div class="container-fluid">
	<div class="jumbotron lessonHeaderLeft">Dì liù kè<br/>第六课<br/>Lesson 6</div>
	<div class="lessonHeaderRight"><h2>Nǐ zěnme bù chīle?<br/>你 怎么 不 吃了？<br/><b>Why don't you eat more?</b></h2></div>
</div>
<div class="container-fluid">
	<h4 class="sublesson">1. <button class="cd" onclick="play('02-06-1');">&#128191; 6-1</button>
	<audio controls="" preload="metadata" id="02-06-1"><source src="../mandarin/audio/02-06-1.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén yī. Zài xuéxiào.<br/>漯文一。在 学校。<br/>Text 1. In the school.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Nǐ zhīdào Xiǎo Wáng jīntiān shénme shíhòu lái xuéxiào ma?<br/>
		A: 你 知道 小 王 今天 什么 时候 来 学校 吗？<br/>
		<br/>
		<span class="masked">B: </span>Tā yǐjīng láile.<br/>
		B: 他 已经 来 了。<br/>
		<br/>
		<span class="masked">A: </span>Nǐ zěnme zhīdào tā láile?<br/>
		A: 你 怎么 知道 他 来 了？<br/>
		<br/>
		<span class="masked">B: </span>Wǒ zài mén wài kànjiàn tā de zìxíngchē le.<br/>
		B: 我 在 们 外 看见 他 的 自行车 了。<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Do you know when Xiǎo Wáng will come to school today?<br/>
		B: He is already here.<br/><br/>
		A: How do you know?<br/>
		B: I saw his bike outside the door.
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>们</td><td>mén</td><td>noun</td><td>door, gate</td></tr>
			<tr><td>外</td><td>wài</td><td>noun</td><td>outer, outside</td></tr>
			<tr><td>自行车</td><td>zìxíngchē</td><td>noun</td><td>bike</td></tr>
		</table>
		</div>
	</div>
	<div class="clearfix"></div>
	<h4 class="sublesson">2. <button class="cd" onclick="play('02-06-2');">&#128191; 6-2</button>
	<audio controls="" preload="metadata" id="02-06-2"><source src="../mandarin/audio/02-06-2.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén èr. Zài fànguǎn.<br/>漯文二。在 饭馆。<br/>Text 2. In a restuarant.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Jīntiān de yángròu hěn hǎochī, nǐ zěnme bù chīle?<br/>
		A: 今天 的 羊肉 很 好吃，你 怎么 不 吃 了？<br/>
		<br/>
		<span class="masked">B: </span>Zhège xīngqí tiāntiān dōu chī yángròu, bùxiǎng chīle.<br/>
		B: 这个 星期 天天 都 吃 羊肉， 不 想 吃 了。<br/>
		<br/>
		<span class="masked">A: </span>Nà nǐ hái xiǎng chī shénme?<br/>
		A: 那 你 还 想 吃 什么？<br/>
		<br/>
		<span class="masked">B: </span>Lái yīdiǎnr miàntiáo ba.<br/>
		B: 来 一点儿 面 条 吧。<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: The mutton today is excellent. Why don't you eat more?<br/>
		B: I eat mutton every day this week. I don't want to eat it any more.<br/><br/>
		A: What would you like then?<br/>
		B: Some noodles please.
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>羊肉</td><td>yángròu</td><td>noun</td><td>mutton</td></tr>
			<tr><td>好吃</td><td>hǎochī</td><td>adj.</td><td>delicious, yummy</td></tr>
			<tr><td>面条</td><td>miàntiáo</td><td>noun</td><td>noodles</td></tr>
		</table>
		</div>
	</div>
	<div class="clearfix"></div>
	<h4 class="sublesson">3. <button class="cd" onclick="play('02-06-3');">&#128191; 6-3</button>
	<audio controls="" preload="metadata" id="02-06-3"><source src="../mandarin/audio/02-06-3.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén sān。Zài jiànshēnfáng.<br/>漯文三。在 健身房<br/>Text 3. In the gym.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Zuótiān nǐmen zěnme dōu méi qù dǎ lánqiú?<br/>
		A: 昨天 你们 怎么 都 没 去 打 篮球。<br/>
		<br/>
		<span class="masked">B: </span>Yīnwèi zuótiān xià yǔ, suǒyǐ wǒmen dōu méi qù.<br/>
		B: 因为 昨天 下 雨， 所以 我们 都 没 去。<br/>
		<span class="masked">B: </span>Wǒ qù yóuyǒngle.<br/>
		<span class="masked">B: </span>我 去 游泳了。<br/>
		<br/>
		<span class="masked">A: </span>Nǐ jīngcháng yóuyǒng ma?<br/>
		A: 你 经常 游泳 吗？<br/>
		<br/>
		<span class="masked">B: </span>Zhège yuè wǒ tiāntiān yóuyǒng, wǒ xiànzài qīshí gōngjīn le.<br/>
		B: 这个 月 我 天天 游泳， 我现在 七十 公斤 了。<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Why didn't you guys go to play basketball yesterday?<br/>
		B: Because it rained yesterday. I went swimming.<br/><br/>
		A: Do you often swim?<br/>
		B: I have swam every day this month. I weigh 70 kilograms now.
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>打 篮球</td><td>dǎ lánqiú</td><td></td><td>to play basketball</td></tr>
			<tr><td>因为</td><td>yīnwèi</td><td>conj.</td><td>because, since</td></tr>
			<tr><td>所以</td><td>suǒyǐ</td><td>conj.</td><td>so, therefore</td></tr>
			<tr><td>游泳</td><td>yóuyǒng</td><td>verb</td><td>to swim</td></tr>
			<tr><td>经常</td><td>jīngcháng</td><td>adv.</td><td>often, frequently</td></tr>
			<tr><td>公斤</td><td>gōngjīn</td><td>meas.</td><td>kilogram</td></tr>
		</table>
		</div>
	</div>
	<div class="clearfix"></div>
	<h4 class="sublesson">4. <button class="cd" onclick="play('02-06-4');">&#128191; 6-4</button>
	<audio controls="" preload="metadata" id="02-06-4"><source src="../mandarin/audio/02-06-4.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén sì. Zài bàngōngshì.<br/>漯文四。在 办公室。<br/>Text 4. In the Office.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Zhè liǎng tiān zěnme méi kànjiàn Xiǎo Zhāng?<br/>
		A: 这 两 天 怎么 没 看见 小 张？<br/>
		<br/>
		<span class="masked">B: </span>Tā qù Běijīng le.<br/>
		B: 他 去 北京 了。<br/>
		<br/>
		<span class="masked">A: </span>Qù Běijīng le? Shì qù lǚyóu ma?<br/>
		A: 去 北京 了？是 去 旅游 吗？<br/>
		<br/>
		<span class="masked">B: </span>Bùshì, tīng shuō shì qù kàn tā jiějiě.<br/>
		B: 不 是，听说 是 去 看 他 姐姐。<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: I haven't seen Xiao Zhang for days. What's going on?<br/>
		B: He has gone to Běijīng.<br/><br/>
		A: Gone to Běijīng? For traveling?<br/>
		B: No. Visiting his elder sister, as far as I've heard.
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Word</i></th></tr>
			<tr><td>姐姐</td><td>jiějiě</td><td>noun</td><td>elder sister</td></tr>
		</table>
		</div>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">汪释 Notes</h3>
	<h4 class="sublesson">1. The Interrogative Pronoun "<b>怎么</b>" (<b>zěnme</b>: <i>how or why</i>)</h4>
	<p>The structure "<b>怎么</b>" (<b>zěnme</b>: <i>how or why</i>) + verb/adjective is used to ask about the reason for something indicating suprise or astonishment. For example:</p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th rowspan="2"><br/>Subject</th><th colspan="2">Predicate</th></tr>
		<tr><th><b>怎么</b><br/><b>zěnme</b><br/><i>how</i></th><th>动词／形容词<br/>dòngcí／xíngróngcí<br/>verb／adjective</th></tr>
		<tr><td>你<br/>Nǐ<br/>You</td><td><b>怎么</b><br/><b>zěnme</b><br/><i>why</i></td><td>不 高 兴？<br/>bù gāo xìng?<br/>are not happy?</td></tr>
		<tr><td colspan="3"><i>Why are you not happy?</i></td></tr>
		<tr><td>今天<br/>Jīntiān<br/>Today</td><td><b>怎么</b><br/><b>zěnme</b><br/><i>why</i></td><td>这 么 热?<br/>zhème rè?<br/>so hot?</td></tr>
		<tr><td colspan="3"><i>Why is it hot today?</i></td></tr>
		<tr><td>昨天 你们<br/>Zuótiān nǐmen<br/>Yesterday you</td><td><b>怎么</b><br/><b>zěnme</b><br/><i>why</i></td><td>都 没 去 打 篮球？<br/>dōu méi qù dǎ lánqiú?<br/>did not play basketball?</td></tr>
		<tr><td colspan="3"><i>Why didn't you play basketball yesterday?</i></td></tr>
	</table>	
	<h4 class="sublesson">2. Duplication of Measure Words</h4>
	<p>When a measure word is duplicated, it means "every/each", emphasizing that specific feature is shared by every member in a certain group, usually followed by "<b>都</b>" (dōu: all). For example:</p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th>Subject</th><th>AA</th><th><b>都</b> 。。。</th></tr>
		<tr><td>同学们<br/>Tóngxuémen<br/>Classmates</td><td>个个<br/>gè gè<br/>every</td><td><b>都</b> 很 高兴<br/>dōu hěn gāoxìng<br/>are all very happy</td></tr>
		<tr><td>这个 商店 的 衣服<br/>Zhège shāngdiàn de yīfú<br/>This store's clothes</td><td>件件<br/>jiàn jiàn<br/>are</td><td><b>都</b> 很 漂亮<br/>dōu hěn piàoliang<br/>all very beautiful</td></tr>
		<tr><td>这个 星期 (我)<br/>Zhège xīngqí (Wǒ)<br/>This week (I)</td><td>天天<br/>tiāntiān<br/>every day</td><td><b>都</b> 吃 羊肉<br/>dōu chī yángròu<br/>eat lamb</td></tr>
	</table>
	<h4 class="sublesson">3.  The pair of conjunctions "<b>因为</b> ... , <b>所以</b> ... " (<b>Yīnwèi</b> ... , <b>suǒyǐ</b> ...  :  because ..., and so)</h4>
	<p>The two conjunctions are used to connect two clauses in a causative relation, the first clause being the cause and the second being the effect. One can use both or either of them in a sentence. For example:</p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th><b>因为</b> ... ,<br/><b>Yīnwèi</b> ... ,<br/>because</th><th><b>所以</b> ...<br/><b>suǒyǐ</b> ...<br/>and so</th></tr>
		<tr><td><b>因为</b> 她 生病 了。<br/><b>Yīnwèi</b> tā shēngbìngle,<br/>Because she was sick,</td><td><b>所以</b> 没 去 学校。<br/><b>suǒyǐ</b> méi qù xuéxiào.<br/>she did not go to school.</td></tr>
		<tr><td><b>因为</b> 他 每 天 跑 步。<br/><b>Yīnwèi</b> tā měitiān pǎobù,<br/>Because he runs every day,</td><td><b>所以</b> 身体 很 好<br/><b>suǒyǐ</b> shēntǐ hěn hǎo<br/>his health is very good</td></tr>
		<tr><td><b>因为</b> 昨天 下 雨，<br/><b>Yīnwèi</b> zuótiān xià yǔ<br/>Because it rained yesterday</td><td><b>所以</b> 我们 都 没 去 （打 篮球）。<br/><b>suǒyǐ</b> wǒmen dōu méi qù (dǎ lánqiú).<br/>we did not go (play basketball).</td></tr>
	</table>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">练习 (liàn xí) Exercises</h3>
	<h4 class="sublesson">1. Role-play the dialogues</h4>
	<h4 class="sublesson">2. Answer the questions according to the actual situations</h4>
	<div class="col-xs-12 col-md-6 col">
		小 王 今天 来 学校 了 吗？<br/>
			<button type="button" id="n61" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g61" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn61">Xiǎo Wáng jīntiān lái xuéxiào le ma?<br/></span>
		<span class="eng" id="eng61">Is Xiǎo Wang coming to school today?<br/></span>
		<br/>
		他 看见 小 王 了 没有？<br/>
			<button type="button" id="n62" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g62" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn62">Tā kànjiàn Xiǎo Wáng le méiyǒu?<br/></span>
		<span class="eng" id="eng62">Has he not seen Xiǎo Wáng?<br/></span>
		<br/>
		为什么 他 今天 不 想 吃 羊肉？<br/>
			<button type="button" id="n63" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g63" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn63">Wèishéme tā jīntiān bùxiǎng chī yángròu?<br/></span>
		<span class="eng" id="eng63">Why did he not eat lamb today?<br/></span>
		<br/>
		为什么 昨天 他们 都 没 去 打 篮球？<br/>
			<button type="button" id="n64" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g64" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn64">Wèishéme zuótiān tāmen dōu méi qù dǎ lánqiú?<br/></span>
		<span class="eng" id="eng64">Why did they not play basketball yesterday?<br/></span>
		<br/>
		小 张 为什么 去 北京？<br/>
			<button type="button" id="n65" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g65" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn65">Xiǎo Zhāng wèishéme qù běijīng?<br/></span>
		<span class="eng" id="eng65">Why did Zhang go to Beijing?<br/></span>
		<br/>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3>语音 (yǔyīn) Pronounciation</h3>
	<h4><button class="cd" onclick="play('02-06-5');">&#128191; 6-5</button>
	<audio controls="" preload="metadata" id="02-06-5"><source src="../mandarin/audio/02-06-5.mp3" type="audio/mpeg">No audio</audio></h4>
	<p>In a sentence, the information or content that the speaker focuses on is usually stressed. This is called the logical stress or the emphatic stress. The logical stress may appear at different positions in different contexts. For example:
	<ul>
		<li>
			<span class="masked">A: </span>Shéi zài fángjiān xuéxí Hànyǔ ne?<br/>
			A: 谁 在 房间 学习 汉语 呢？<br/>
			<span class="masked">A: </span>Who in the room is learning Chinese?<br/>
		</li>
		<li>
			<span class="masked">B: </span><b>Tā</b> zài fángjiān xuéxí Hànyǔ ne.<br/>
			B: <b>他</b> 在 房间 学习 汉语 呢。<br/>
			<span class="masked">B: </span>He learns Chinese in the room.<br/>
		</li>
		<li>
			<span class="masked">A: </span>Tā zài nǎr xuéxí Hànyǔ ne?<br/>
			A: 他 在 哪儿 学习 汉语 呢？<br/>
			<span class="masked">A: </span>Where does he learn Chinese?<br/>
		</li>
		<li>
			<span class="masked">B: </span>Tā zài <b>fángjiān</b> xuéxí Hànyǔ ne.<br/>
			B: 他 在 <b>房间</b> 学习 汉语 呢。<br/>
			<span class="masked">B: </span>He learns Chinese in the room.<br/>
		</li>
	</ul>
	<p>The same sentence may have different semantic focuses when the position of the logical stress differs. For example:</p>
	<ul>
		<li>
			<span class="masked">A: </span><b>Tā</b> zài fángjiān xuéxí Hànyǔ ne.<br/>
			A: <b>他</b> 在 房间 学习 汉语 呢。<br/>
			<span class="masked">A: </span>He learns Chinese in the room.<br/><br/>
			(是 他 在 房间 学习 汉语，不是  别 的 人。<br/>
			&nbsp;<i>Shì tā zài fángjiān xuéxí Hànyǔ, bùshì bié de rén.<br/>
			&nbsp;It is him who is studying Chinese in the room, not other people.</i>)<br/><br/>
		</li>
		<li>
			<span class="masked">B: </span>Tā zài <b>fángjiān</b> xuéxí Hànyǔ ne.<br/>
			B: 他 在 <b>房间</b> 学习 汉语 呢。<br/>
			<span class="masked">B: </span>He learns Chinese in the room.<br/><br/>
			(他 是 在 房间 学习 汉语， 不 是 在 别 的 他 方。<br/>
			&nbsp;<i>Tā shì zài fángjiān xuéxí Hànyǔ, bùshì zài bié de tāfāng<br/>
			&nbsp;He is studying Chinese in the room rather than in other places.</i>)<br/>
		</li>
	</ul>
</div>
<div class="container-fluid">
	<h3>汉字 Characters</h3>
	<h4 class="sublesson">1. Single-Component Characters</h4>
	<div class="table">
		<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><td>⻔</td><td>mén</td><td>door</td><td><div><img class="strokeOrder" src="img/门-order.gif" alt="门"/></div></td></tr>
		<tr><td>羊</td><td>yáng</td><td>sheep</td><td><div><img class="strokeOrder" src="img/羊-order.gif" alt="羊"/></div></td></tr>
		</table>
	</div>
	<h4 class="sublesson">2. Chinese Radicals "⺨" (quǎn) and "⺗" (xin)</h4>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="active"><th>Radical</th><th>Explanation</th><th>Examples</th></tr>
			<tr>
				<td>⺨<br/>(quǎn)</td><td>related to animals</td>
				<td>猫&nbsp;māo&nbsp;cat<br/><br/>狗&nbsp;gǒu&nbsp;dog</td>
			</tr>
			<tr>
				<td>⺗<br/>(xin)</td><td>related to one's mental activities and emotions</td>
				<td>想&nbsp;xiǎng&nbsp;to think<br/><br/> 念&nbsp;niàn&nbsp;to miss</td>
			</tr>
		</table>
	</div>
</div>
<div class="dash"></div>
<?php
} else { header( 'Location: https://www.stephenmccready.asia/mi/index.php'); }
?>
</body>
</html>
