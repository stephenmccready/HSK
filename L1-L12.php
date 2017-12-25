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
	<title>Level 1 - 12</title>
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
	<div class="jumbotron lessonHeaderLeft">Dì shíèr kè<br/>第 十二 课<br/>Lesson 12</div>
	<div class="lessonHeaderRight"><h2>Míngtiān tiānqì zènmeyàng<br/>明天 天气 怎么样<br/><b>What will the weather be like tomorrow?</b></h2></div>
</div>
<div class="container-fluid">
	<h4 class="textSection">Kè wén yī. Zài lùshàng.<br/>漯文一。在 路上。<br/>Text 1. On the road.<br/>
	<button class="cd" onclick="play('12-1');">&#128191; 12-1</button>
	<audio controls="" preload="metadata" id="12-1"><source src="../mandarin/audio/12-1.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Zuótiān Běijīng de tiānqì zènmeyàng?<br/>
		A: 昨天 北京 天气 怎么样?<br/>
		<span class="masked">B: </span>Tài rè le.<br/>
		B: 太 热 了。<br/>
		<span class="masked">A: </span>Míngtiān ne?  Míngtiān tiānqì zènmeyàng?<br/>
		A: 明天 呢？ 明天 天气 怎么样？<br/>
		<span class="masked">B: </span>Míngtiān tiānqì hěn hǎo, bù lěng bú rè<br/>
		B: 明天 天气 很 好， 不 冷 不 热<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: How was the weather in Běijīng yesterday?<br/>
		B: It was too hot.<br/>
		A: What about tomorrow? What will the weather be like tomorrow?<br/>
		B: It will be fine, neither cold nor hot.<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>天气</td><td>tiānqì</td><td>noun</td><td>weather</td></tr>
			<tr><td>怎么样</td><td>zènme<br/>yàng</td><td>pron.</td><td>(<i>indicating<br/>nature,<br/>condition<br/>or manner</i>) how</td></tr>
			<tr><td>太 <br/>太 ... 了</td><td>tài<br/>tài ... le</td><td>adverb</td><td>too, excessively<br/>too, extremely</td></tr>
			<tr><td>热</td><td>rè</td><td>adj.</td><td>hot</td></tr>
			<tr><td>冷</td><td>lěng</td><td>adj.</td><td>cold</td></tr>
		</table>
		</div>
	</div>
	<h4 class="textSection">Kè wén èr. Zài Jiànshēnfáng.<br/>漯文二。在健身房。<br/>Text 2. In the Gym.<br/>
	<button class="cd" onclick="play('12-2');">&#128191; 12-2</button>
	<audio controls="" preload="metadata" id="12-2"><source src="../mandarin/audio/12-2.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Jīntiān huì xià yǔ ma?<br/>
		A: 今天 会 下 雨 吗？<br/>
		<span class="masked">A: </span>Jīntiān bú huì xià yǔ <br/>
		B: 今天 不 会 下 雨。<br/>
		<span class="masked">A: </span>Wáng xiǎojiě jīntiān huì lái ma?<br/>
		A: 王 小姐 今天 会 来 吗？<br/>
		<span class="masked">A: </span>Bú huì lái, tiānqì tài lěng le<br/>
		B: 不 会 来, 天气 太 冷 了<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Will it rain today?<br/>
		B: No, it won't rain<br/>
		A: Will Miss Wang come today?<br/>
		B: No, she won't. It's too cold.<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>下 雨</td><td>xià yǔ</td><td></td><td>to rain</td></tr>
			<tr><td>下</td><td>xià</td><td>verb</td><td>(of rain, snow etc.)<br/>to fall</td></tr>
			<tr><td>雨</td><td>yǔ</td><td>noun</td><td>rain</td></tr>
			<tr><td>小姐</td><td>xiǎojiě</td><td>noun</td><td>miss,<br/>young lady</td></tr>
			<tr><td>来</td><td>lái</td><td>verb</td><td>to come</td></tr>
		</table>
		</div>
	</div>
	<h4 class="textSection">Kè wén sān. Zài Bìngfáng.<br/>漯文三。在病房。<br/>Text 3. In the sickroom.<br/>
	<button class="cd" onclick="play('12-3');">&#128191; 12-3</button>
	<audio controls="" preload="metadata" id="12-3"><source src="../mandarin/audio/12-3.mp3" type="audio/mpeg">No audio</audio></h4>	
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Nǐ shēntǐ zènmeyàng?<br/>
		A: 你 身体 怎么样？<br/>
		<span class="masked">B: </span>Wǒ shēntǐ bú tài hǎo. Tiānqì tài rè le，bú ài chī fàn.<br/>
		B: 我 身体 不 太 好. 天气 太 热 了, 不 爱 吃 饭。 <br/>
		<span class="masked">A: </span>Nǐ duō chī xiē shuǐguǒ, duō hē shuǐ.<br/>
		A: 你 多 吃 些 水果， 多 喝 水。<br/>
		<span class="masked">B: </span>Xièxie nǐ, yīshēng.<br/>
		B: 谢谢 你 医生。<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: How are you?<br/>
		B: Not very well. It's too hot, I have no appetite.<br/>
		A: Eat more fruit and drink more water.<br/>
		B: Thank you, doctor.<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>身体</td><td>shēntǐ</td><td>noun</td><td>body</td></tr>
			<tr><td>爱</td><td>ài</td><td>verb</td><td>to like,<br/>to love</td></tr>
			<tr><td>些</td><td>xiē</td><td>measure</td><td>some, a few</td></tr>
			<tr><td>水果</td><td>shuǐguǒ</td><td>noun</td><td>fruit</td></tr>
			<tr><td>水</td><td>shuǐ</td><td>noun</td><td>water</td></tr>
		</table>
		</div>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">汪释 Notes</h3>
	<h4 class="sublesson">1. The Interrogative Pronoun "<b>怎么样</b>" (<b>zěnmeyàng</b>: how is it)</h4>
	<p>"<b>怎么样</b>" (<b>zěnmeyàng</b>) is used to ask about the condition of something or someone. For example:</p>
	<ol>
		<li> 你 的 汉语 <b>怎么样</b>?<br/>Nǐ de Hànyǔ <b>zěnmeyàng</b>?<br/>How is your Chinese?</li>
		<li> 你 妈妈 身体 <b>怎么样</b>?<br/>Nǐ māmā shēntǐ <b>zěnmeyàng</b>?<br/>How is your mother's health?</li>
		<li> 明天 天气 <b>怎么样</b>?<br/>Míngtiān tiānqì <b>zěnmeyàng</b>?<br/>How is the weather tomorrow?</li>
	</ol>
	<h4 class="sublesson">2. Sentences with a Subject-Predicate Phrase as the Predicate.</h4>
	<p>In Chinese, there is such a kind of sentence in which the predicate is a subject-predicate phrase. The structure is:</p>
	<br/>
	全句主语 + 全句谓语 （主语 + 谓语）<br/>
	Subject of the Sentence + Predicate of the Sentence (Subject + Predicate)<br/>
	<table class="table table-condensed table-responsive table-centered">
		<tr><th rowspan="2">Subject</th><th colspan="2">Predicate</th></tr>
		<tr><th>Subject</th><th>Predicate</th></tr>
		<tr><td>我<br/>Wǒ<br/>My</td><td>身体<br/>shēntǐ<br/>health</td><td>不太好。<br/>bú tài hǎo<br/>not too good</td></tr>
		<tr><td>明天<br/>Míngtiān<br/>Tomorrow</td><td>天气<br/>tiānqì<br/>the weather</td><td>很好。<br/>hěn hǎo<br/>very good</td></tr>
		<tr><td>你<br/>Nǐ<br/>Your</td><td>身体<br/>shēntǐ<br/>health</td><td>怎么样？<br/>zěnme yàng?<br/>how is it?</td></tr>
	</table><br/>
	Note: The subject in the subject-predicate phrase is usually part of the subject of the sentence or related to it.
	<h4 class="sublesson">3. The Adverb "<b>太</b>" (<b>tài</b>: too)</h4>
	<p>The adverb "<b>太</b>" (<b>tài</b>: too) indicates a high degree."<b>了</b>" (<b>le</b>) is often used at the end of the sentences with "<b>太</b>" (<b>tài</b>: too), but not in negative sentences. For example:</p>
	<ol>
		<li> <b>太</b> 热<b>了</b>。<br/>Tài rè<b>le</b><br/>Too hot<br/></li>
		<li> 天气 <b>太</b> 冷<b>了</b>。<br/>Tiānqì tài lěng<b>le</b><br/>The weather is too cold<br/></li>
		<li> 我 身体 不 <b>太</b>好。<br/>Wǒ shēntǐ bù tài hǎo<br/>My health is not very good<br/></li>
	</ol>
	<h4 class="sublesson">4. The Modal Verb "<b>会</b>" (<b>huì</b>: can)</h4>
	<p> "<b>会</b>" (<b>huì</b>: can) indicates the possibility of the situation mentioned. For example:</p>
	<ol>
		<li>A: 爸爸 八 点 前 <b>会</b> 回 家 吗<br/>Bàba bā diǎn qián <b>huì</b> huí jiā ma?<br/>Will dad go home before 8 o'clock?<br/>
			B: <b>会</b>。<br/><b>Huì</b><br/>Can.<br/></li>
		<li>A: 明天 她 <b>会</b> 来 吗？<br/>Míngtiān tā <b>huì</b> lái ma？<br/>Will she come tomorrow?<br/>
			B: 她 <b>会</b> 来。<br/>Tā <b>huì</b> láie<br/>She will come<br/></li>
		<li>A: 今天 <b>会</b> 下 雨 吗？<br/>Jīntiān <b>huì</b> xià yǔ ma?<br/>Will it rain today?<br/>
			B: 今天 不 <b>会</b> 下 雨。<br/>Jīntiān bù <b>huì</b> xià yǔ<br/>It will not rain today<br/></li>
	</ol>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">练习 (liàn xí) Exercises</h3>
	<h4 class="sublesson">1. Role-play the dialogues</h4>
	<h4 class="sublesson">2. Answer the questions according to the actual situations.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="han hanzi121">昨天 北京 的 天气 怎么样？<br/>
			<button type="button" id="n121" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g121" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn121">Zuótiān Běijīng de tiānqì zěnmeyàng?<br/></span>
		<span class="eng" id="eng121">How was the weather in Běijīng yesterday?<br/></span>
		<br/>
		<span class="han hanzi122">明天 天气 怎么样？<br/>
			<button type="button" id="n122" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g122" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn122">Míngtiān tiānqì zěnmeyàng?<br/></span>
		<span class="eng" id="eng122">How will the weather be tomorrow?<br/></span>
		<br/>
		<span class="han hanzi123">今天 会 下 雨 吗？<br/>
			<button type="button" id="n123" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g123" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn123">Jīntiān huì xià yǔ ma?<br/></span>
		<span class="eng" id="eng123">Will it rain today?<br/></span>
		<br/>
		<span class="han hanzi124">王 小姐 会 来 吗？<br/>
			<button type="button" id="n124" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g124" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn124">Wáng Xiǎojiě huì lái ma?<br/></span>
		<span class="eng" id="eng124">Will Miss Wang come?<br/></span>
		<br/>
		<span class="han hanzi125">他 的 身体 怎么样？<br/>
			<button type="button" id="n125" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g125" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn125">Tā de shēntǐ zěnmeyàng?<br/></span>
		<span class="eng" id="eng125">How is his health?<br/></span>
		<br/>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3>拼音 Pinyin</h3>
	<h4>Tone Collocation in Trisyllabic Words (1): words starting with a first-tone syllable.<br/>
	<button class="cd" onclick="play('12-4');">&#128191; 12-4</button>
	<audio controls="" preload="metadata" id="12-4"><source src="../mandarin/audio/12-04.mp3" type="audio/mpeg">No audio</audio></h4>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th>1+1+1</th><th>1+1+2</th><th>1+1+3</th><th>1+1+14</th></tr>
		<tr><td>星期一<br/>xīngqī yī<br/>Monday</td><td>冰淇淋
<br/>bīngjīlíng<br/>ice cream</td><td>星期五<br/>xīngqī wǔ<br/>Friday</td><td>星期六<br/>xīngqī liù<br/>Saturday</td></tr>
		<tr><th>1+2+1</th><th>1+2+2</th><th>1+2+3</th><th>1+2+4</th></tr>
		<tr><td>清洁工<br/>qīngjiégōng<br/>cleaner</td><td>捉迷藏<br/>zhuōmícáng<br/>to hide and seek</td><td>吃苹果<br/>chī píngguǒ<br/>to eat an apple</td><td>加拿大<br/>Jiānádà<br/>Canada</td></tr>
		<tr><th>1+3+1</th><th>1+3+2</th><th>1+3+3</th><th>1+3+4</th></tr>
		<tr><td>高脚杯<br/>gāojiǎobēi<br/>goblet</td><td>堆雪人<br/>duī xuěrén<br/>to make a snowman</td><td>华雨伞
<br/>huā yǔsǎn<br/>colorful umbrella</td><td>吃米饭<br/>chī mǐfàn<br/>to eat rice</td></tr>
		<tr><th>1+4+1</th><th>1+4+2</th><th>1+4+3</th><th>1+4+4</th></tr>
		<tr><td>哈密瓜<br/>hāmìguā<br/>Hami melon</td><td>机器人<br/>jīqìrén<br/>robot</td><td>拨浪鼓<br/>bōlànggǔ<br/>rattle-drum</td><td>医午室<br/>yīwùshì<br/>medical room</td></tr>
	</table>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h4 class="sublesson">1. Single-Component Characters</h4>
	<div class="table">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr><td>天</td><td>tiān: sky</td><td></td><td><div><img class="strokeOrder" src="img/天-order.gif" alt="天"/></div></td></tr>
			<tr><td>气</td><td>qì: air</td><td></td><td><div><img class="strokeOrder" src="img/气-order.gif" alt="气"/></div></td></tr>
			<tr><td>雨</td><td>yǔ: rain</td><td></td><td><div><img class="strokeOrder" src="img/雨-order.gif" alt="雨"/></div></td></tr>
		</table>
	</div>
	<h4 class="sublesson">2 Chinese Radicals "女" (nǚ) and "饣" (shí)</h4>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="active"><th>Radical</th><th>Explanation</th><th>Examples</th></tr>
			<tr>
				<td><br/>女</td>
				<td><br/>The radical "女" is usually related to women.</td>
				<td> 姐 &nbsp; jiě &nbsp; elder sister<br/> 妈 &nbsp; mā &nbsp; mother</td>
			</tr>
			<tr>
				<td><br/>饣</td>
				<td><br/>The radical "饣" is usually related to food.</td>
				<td> 饭 &nbsp; fàn &nbsp; meal<br/> 饮 &nbsp; yǐn &nbsp; to drink</td>
			</tr>
		</table>
	</div>
</div>
<?php
} else { header( 'Location: https://www.stephenmccready.asia/mi/index.php'); }
?>
</body>
</html>
