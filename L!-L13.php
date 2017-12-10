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
	<title>Level 1 - 13</title>
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
	<div class="jumbotron lessonHeaderLeft">Dì shísān kè<br/>第 十三 课<br/>Lesson 13</div>
	<div class="lessonHeaderRight"><h2>Tā zài xué zuò Zhōngguó cài ne.<br/> 他 在 学 做 中国 菜 呢。<br/><b>He is learning to cook Chinese food</b></h2></div>
</div>
<div class="container-fluid">
	<h4 class="sublesson">1. <button class="cd" onclick="play('13-1');">&#128191; 13-1</button>
	<audio controls="" preload="metadata" id="13-1"><source src="../mandarin/audio/13-1.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén yī. Dǎ diànhuà.<br/>漯文一。打电话。<br/>Text 1. On the phone.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Wèi, nǐ zài zuò shénme ne?<br/>
		A: 喂 你 在 做 什么 呢？<br/>
		<span class="masked">B: </span>Wǒ zài kàn shū ne.<br/>
		B: 我 在 看 书 呢。<br/>
		<br/>
		<span class="masked">A: </span>Dàwèi yě zài kàn shū ma?<br/>
		A: 大卫 也 在 看 书 吗？<br/>
		<span class="masked">B: </span>Tā méi kàn shū, tā zài xué zuò Zhōngguó cài ne.<br/>
		B: 他 没 看 书， 他 在 学 做 中国 菜 呢。<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Hello, what are you doing?<br/>
		B: I'm reading<br/><br/>
		A: Is David reading too?<br/>
		B: No, he isn't.  He is learning to cook Chinese food.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>喂</td><td>wèi</td><td>int.</td><td>hello, hey</td></tr>
			<tr><td>也</td><td>yě</td><td>adverb</td><td>also, too</td></tr>
			<tr><td>学 习<br/>(学)</td><td>xuéxí<br/>(xué)</td><td>verb</td><td>to study,<br/>to learn</td></tr>
			<tr><th colspan="4"><i>Proper Nouns</i></th></tr>
			<tr><td>大卫</td><td>Dàwèi</td><td colspan="2">David</td></tr>
		</table>
		</div>
	</div>
	<h4 class="sublesson">2. <button class="cd" onclick="play('13-2');">&#128191; 13-2</button>
	<audio controls="" preload="metadata" id="13-2"><source src="../mandarin/audio/13-2.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén èr. Zài Kāfēiguǎnr.<br/>漯文二。在 咖啡馆儿。<br/>Text 2. At the coffee house.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Zuótiān shàngwǔ nǐ zài zuò shénme ne?<br/>
		A: 昨天 上五 你 在 做 什么 呢？<br/>
		<span class="masked">B: </span>Wǒ zài shuì jiào ne. Nǐ ne?<br/>
		B: 我 在 睡 觉 呢。 你 呢？<br/>
		<br/>
		<span class="masked">A: </span>Wǒ zài jiā kàn diànshì ne. Nǐ xǐhuān kàn diànshì ma?<br/>
		A: 我 在 家 看 电视 呢。 你 喜欢 看 电视 吗？<br/>
		<span class="masked">B: </span>Wǒ bù xǐhuān kàn diànshì, wǒ xǐhuān kàn diànyǐng.<br/>
		B: 我 不 喜欢 看 电视， 我 喜欢 看 电影。<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: What were you doing yesterday morning?<br/>
		B: I was sleeping. What about you?<br/><br/>
		A: I was watching TV at home. Do you like watching TV?<br/>
		B: No, I don't. I like seeing movies.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>上午</td><td>shàngwǔ</td><td>noun</td><td>morning,<br/>before noon</td></tr>
			<tr><td>睡 觉</td><td>shuì jiào</td><td>verb</td><td>to sleep</td></tr>
			<tr><td>电视</td><td>diànshì</td><td>noun</td><td>television</td></tr>
			<tr><td>喜欢</td><td>xǐhuān</td><td>verb</td><td>to like,<br/>to be fond of</td></tr>
		</table>
		</div>
	</div>
	<h4 class="sublesson">3. <button class="cd" onclick="play('13-3');">&#128191; 13-3</button>
	<audio controls="" preload="metadata" id="13-3"><source src="../mandarin/audio/13-3.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén sān. Zài Xuéxiào bàngōngshì.<br/>漯文三。在 学校办公室。<br/>Text 3. In the school office.</h4>	
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Bā èr sān líng sì yāo wǔ wǔ, zhè shì Lǐ lǎoshī de diànhuà ma?<br/>
		A: 82304155, 这 是 李 老师 的 电话 吗？<br/>
		<span class="masked">B: </span>Bú shì. Tā de diànhuà shì bā èr sān líng sì yāo wǔ liù<br/>
		B: 不 是。 她 的 电话 是 82304156。<br/>
		<br/>
		<span class="masked">A: </span>Hǎo, wǒ xiànzài gěi tā dǎ diànhuà.<br/>
		A: 好， 我 现在 给 她 打 电话。<br/>
		<span class="masked">B: </span>Tā zài gōngzuò ne, nǐ xiàwǔ dǎ ba.<br/>
		B: 她 在 工作 呢， 你 下午 打 吧。<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: 82304155. Is that Ms. Li's telephone number?<br/>
		B: No. Her number is 82304156<br/><br/>
		A: OK. I'll call her right now.<br/>
		B: She is working. Call her in the afternoon.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>给</td><td>gěi</td><td>prep.</td><td>to</td></tr>
			<tr><td>打<br/>电话</td><td>dǎ<br/>diànhuà</td><td colspan="2">to make a<br/>phone call</td></tr>
			<tr><td>吧</td><td>ba</td><td>part.</td><td><i>a modal particle<br/>used at the end of<br/> a sentence to<br/>indicate consultation,<br/>a suggestion,<br/>request or command</i></td></tr>
		</table>
		</div>
	</div>	
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">汪释 Notes</h3>
	<h4 class="sublesson">1. The Interjection "<b>喂</b>" (<b>wèi</b>: hello, hey)</h4>
	<ol>
		<li>A: <b>喂</b>， 李 老师 在 家 吗？<br/><b>Wèi</b>, Li laoshi zai jai ma?<br/>Hey, is professor Li at home?<br/><br/>
			B: 她 不 在 家， 去 学校 了。<br/>Tā bù zài jiā, qù xuéxiào le<br/>She is not at home, she is at school.<br/><br/></li>
		<li>A: <b>喂</b>， 你 是 张 小姐 吗？<br/><b>Wèi</b>, nǐ shì Zhāng xiǎojiě ma？<br/>Hey, are you Miss Zhang?<br/><br/>
			B: 对， 您是<br/>Duì, nín shì?<br/>Yes, are you?<br/><br/></li>
		<li>A: <b>喂</b>， 你 在 做 什么 呢？<br/><b>Wèi</b>, nǐ zài zuò shénme ne？<br/>Hey, what are you doing?<br/><br/>
			B: 我 在 看 书 呢<br/>Wǒ zài kànshū ne<br/>I am reading</li>
	</ol>
	<h4 class="sublesson">2. "<b>在 。。。 呢</b>" (<b>zài ... ne</b>: in/on/at/be) Used to Indicate an Action in Progress.</h4>
	<p>An action in progress can be expressed by adding the adverb "<b>在</b>" (<b>zài</b>) before a verb or by using the modal particle "<b>呢</b>" (<b>ne</b>) at the end of the sentence. For example:</p>
	<table class="table table-condensed table-responsive table-centered">
		<tr><th></th><th><b>在</b></th><th>Verb + Object</th><th>(<b>呢</b>)</th></tr>
		<tr><td>我<br/>Wǒ<br/>I</td><td><b>在</b><br/><b>zài</b><br/>in/on/at/be</td><td>睡觉<br/>shuìjiào<br/>sleep</td><td><b>呢</b>。<br/><b>ne</b></td></tr>
		<tr><td>你<br/>Nǐ<br/>You</td><td><b>在</b><br/><b>zài</b><br/>in/on/at/be</td><td>做什么<br/>zuò shénme<br/>doing what</td><td><b>呢</b>?<br/><b>ne</b>?</td></tr>
		<tr><td>小王<br/>Xiǎo Wáng<br/>Xiǎo Wáng</td><td><b>在</b><br/><b>zài</b><br/>in/on/at/be</td><td>学习汉语<br/>Xuéxí hànyǔ<br/>learning Chinese</td><td></td></tr>
	</table>
	<p>The negative form is "<b>没</b> (<b>méi</b>) (<b>在</b> (<b>zài</b>) ) + Verb/Verb Phrase", without "<b>呢</b>" (<b>ne</b>) at the end of the sentence. For example:</p>
	<table class="table table-condensed table-responsive table-centered">
		<tr><th rowspan="2">Subject</th><th colspan="2">Predicate</th></tr>
		<tr><th><b>没</b> (<b>méi</b>) [在 (zài)]</th><th>Verb / Verb Phrase</th></tr>
		<tr><td>我<br/>Wǒ<br/>I</td><td><b>没在</b><br/><b>méizài</b><br/>not</td><td>看电视<br/>kàn diànshì<br/>watch TV</td></tr>
		<tr><td>他们<br/>Tāmen<br/>You</td><td><b>没在</b><br/><b>méizài</b><br/>not</td><td>工作。<br/>gōngzuò<br/>work/job</td></tr>
		<tr><td>他<br/>T	ā<br/>You</td><td><b>没</b><br/><b>méi</b><br/>not</td><td>看书。<br/>kànshū<br/>read books</td></tr>
	</table>
	<h4 class="sublesson">3. Expression of Telephone Numbers.</h4>
	<p>Telephone numbers are read in a different way than general numbers. They are read digit by digit. The number "<b>1</b>" in a telephone number is read "<b>yāo</b>".</p>
	<p>
	<ol>
		<li>
			<span class="xhanD">八 零 六 九 四 七 八</span><br/>
			<span class="pynD">bā líng liù jiǔ sì qī bā</span><br/>
			<span class="engD">8069478</span>
		</li>
		<li>
			<span class="xhanD">一 三 八 五 一 八 九 七 六 二 三</span><br/>
			<span class="pynD">yāo sān bā wǔ yāo bā jiǔ qī liù èr sān</span><br/>
			<span class="engD">13851897623</span>
		</li>
		<li>
			<span class="xhanD">八 二 三 零 四 一 五 六</span><br/>
			<span class="pynD">Bā èr sān líng sì yāo wǔ liù</span><br/>
			<span class="engD">82304156</span>
		</li>
	</ol>	
	</p>
	<h4 class="sublesson">4. The Modal Particle "<b>吧</b>" (<b>ba</b>).</h4>
	<p>When used at the end of an imperative sentence, the modal particle "<b>吧</b>" (<b>ba</b>) indicates a suggestion or command with a softened mood. For example:</p>
	<ol>
		<li><b>A:</b> 这儿 没 有 人， 请坐<b>吧</b>。<br/>Zhè'er méiyǒu rén, qǐng zuò <b>ba</b><br/>No one here, please sit down<br/>
		<b>B:</b> 谢谢<br/>Xièxiè<br/>Thank you</li>
		<li><b>A:</b> 今天 我们 在 家 吃 饭 <b>吧</b>。<br/>Jīntiān wǒmen zàijiā chīfàn <b>ba</b><br/>Today we eat at home<br/>
		<b>B:</b> 好<br/>Hǎo<br/>Good</li>
		<li><b>A:</b> 我 现在 给 她 打 电话<br/>Wǒ xiànzài gěi tā dǎ diànhuà<br/>I'll call her now<br/>
		<b>B:</b> 她 在 工作 呢， 你 下午 打 <b>吧</b>。<br/>Tā zài gōngzuò ne, nǐ xiàwǔ dǎ <b>ba</b><br/>She is at work, call her this afternoon<br/><br/></li>
	</ol>
</div>
<div class="container-fluid">
	<h3 class="sublesson">练习 (liàn xí) Exercises</h3>
	<h4 class="sublesson">1. Role-play the dialogues</h4>
	<h4 class="sublesson">2. Answer the questions according to the actual situations.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="han hanzi131">大卫 在 做 什么 呢？<br/>
			<button type="button" id="n131" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g131" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn131">Dàwèi zài zuò shénme ne?<br/></span>
		<span class="eng" id="eng131">What is David doing?<br/></span>
		<br/>
		<span class="han hanzi132">昨天 上午 他 在 看 书 吗？<br/>
			<button type="button" id="n132" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g132" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn132">Zuótiān shàngwǔ tā zài kàn shū ma?<br/></span>
		<span class="eng" id="eng132">Was he reading books yesterday morning?<br/></span>
		<br/>
		<span class="han hanzi133">他们 都 喜欢 看 电视 吗？<br/>
			<button type="button" id="n133" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g133" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn133">Tāmen dōu xǐhuān kàn diànshì ma?<br/></span>
		<span class="eng" id="eng133">Do they all like to watch TV?<br/></span>
		<br/>
		<span class="han hanzi134">李 老师 的 电话 号码 是 多少？<br/>
			<button type="button" id="n134" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g134" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn134">Lǐ lǎoshī de diànhuà hàomǎ shì duōshǎo?<br/></span>
		<span class="eng" id="eng134">What is professor Li's phone number?<br/></span>
		<br/>
		<span class="han hanzi135">李 老师 在 做 什么 呢？<br/>
			<button type="button" id="n135" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g135" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn135">Lǐ lǎoshī zài zuò shénme ne?<br/></span>
		<span class="eng" id="eng135">What is professor Lǐ doing?<br/></span>
		<br/>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3>拼音 Pinyin</h3>
	<h4>Tone Collocation in Trisyllabic Words (2): words starting with a second-tone syllable。
	<button class="cd" onclick="play('13-4');">&#128191; 13-4</button>
	<audio controls="" preload="metadata" id="13-4"><source src="../mandarin/audio/13-04.mp3" type="audio/mpeg">No audio</audio></h4>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th>2+1+1</th><th>2+1+2</th><th>2+1+3</th><th>2+1+4</th></tr>
		<tr><td>研究生<br/>yánjiūshēng<br/>postgraduate</td><td>弹钢琴<br/>tán gāngqín<br/>to play the piano</td><td>图书馆<br/>túshū guǎn<br/>library</td><td>维生素<br/>wéishēngsù<br/>vitamin</td></tr>
		<tr><th>2+2+1</th><th>2+2+2</th><th>2+2+3</th><th>2+2+4</th></tr>
		<tr><td>银行家<br/>yínháng jiā<br/>banker</td><td>韩国人<br/>Hánguó rén<br/>Korean (people)</td><td>韩国语<br/>Hánguó yǔ<br/>Korean (language)</td><td>人民币<br/>Rénmínbì<br/>RMB</td></tr>
		<tr><th>2+3+1</th><th>2+3+2</th><th>2+3+3</th><th>2+3+4</th></tr>
		<tr><td>游泳衣<br/>yóuyǒng yī<br/>swmimming suit</td><td>游泳池<br/>yóuyǒngchí<br/>swimming pool</td><td>游泳馆<br/>Yóuyǒng guǎn<br/>natatorium</td><td>牛仔裤<br/>niúzǎikù<br/>jeans</td></tr>
		<tr><th>2+4+1</th><th>2+4+2</th><th>2+4+3</th><th>2+4+4</th></tr>
		<tr><td>魔术师<br/>móshù shī<br/>magician</td><td>服务员<br/>fúwùyuán<br/>waiter, waitress</td><td>博物馆<br/>bówùguǎn<br/>museum</td><td>明信片<br/>míngxìnpiàn<br/>postcard</td></tr>
	</table>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h4 class="sublesson">1. Single-Component Characters</h4>
	<div class="table">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr><td>日</td><td>rì: the sun</td><td></td><td><div><img class="strokeOrder" src="img/日-order.gif" alt="日"/></div></td></tr>
			<tr><td>目</td><td>mù: eye</td><td></td><td><div><img class="strokeOrder" src="img/目-order.gif" alt="目"/></div></td></tr>
			<tr><td>习</td><td>xí: to study, to learn</td><td></td><td><div><img class="strokeOrder" src="img/习-order.gif" alt="习"/></div></td></tr>
		</table>
	</div>
	<h4 class="sublesson">2 Chinese Radicals "日" (rì) and "目" (mù)</h4>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="active"><th>Radical</th><th>Explanation</th><th>Examples</th></tr>
			<tr>
				<td><br/>日</td><td><br/>The radical "日" (rì) is usually related to time.</td>
				<td>明 &nbsp; míng &nbsp; next <br/><br/>时 &nbsp; shí &nbsp; time</td>
			</tr>
			<tr>
				<td><br/>目</td><td><br/>The radical "目" (mù) is usually related to the eyes.</td>
				<td>眼 &nbsp; yǎn &nbsp; eye<br/><br/>睡 &nbsp; shuì &nbsp; to sleep</td>
			</tr>
		</table>
	</div>
</div>
<?php
} else { header( 'Location: https://www.stephenmccready.asia/mi/index.php'); }
?>
</body>
</html>
