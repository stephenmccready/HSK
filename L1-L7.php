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
	<title>Level 1 - 7</title>
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
	<div class="jumbotron lessonHeaderLeft">Dì qī kè<br/>第 七 课<br/>Lesson 7</div>
	<div class="lessonHeaderRight"><h2>Jīntiān jǐ hào?<br/>今天 几 号?<br/><b>What's the date today?</b></h2></div>
</div>
<div class="container-fluid">
	<h4 class="sublesson"><button class="cd" onclick="play('07-1');">&#128191; 07-1</button>
	<audio controls="" preload="metadata" id="07-1"><source src="../mandarin/audio/07-01.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">漯文一。Kè wén yī. Text 1.</h4>
	<h4 class="textSection">在 银行。Zài yínháng. In a bank.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Qǐngwèn, jīntiān jǐ hào?<br/>
		A: 请问， 今天 几 号？<br/><br/>
		<span class="masked">B: </span>Jīntiān jiǔ yuè yī hào.<br/>
		B: 今天 九 月 一 号。<br/><br/>
		<span class="masked">A: </span>Jīntiān xīngqī jǐ?<br/>
		A: 今天 星期 几？<br/><br/>
		<span class="masked">B: </span>Xīngqī sān.<br/>
		B: 星期 三。
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Excuse me, what's the date today?<br/>
		B: It's September 1st.<br/><br/>
		A: What day is today?<br/>
		B: It's Wednesday.<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>请</td><td>qǐng</td><td>verb</td><td>(<i>polite</i>) please</td></tr>
			<tr><td>问</td><td>wèn</td><td>verb</td><td>to ask, to inquire</td></tr>
			<tr><td>今天</td><td>jīntiān</td><td>noun</td><td>today</td></tr>
			<tr><td>号</td><td>hào</td><td>noun</td><td>(<i>for date of month</i>) number</td></tr>
			<tr><td>月</td><td>yuè</td><td>noun</td><td>month</td></tr>
			<tr><td>星期</td><td>xīngqī</td><td>noun</td><td>week</td></tr>
		</table>
		</div>
	</div>
	<h4 class="sublesson"><button class="cd" onclick="play('07-2');">&#128191; 07-2</button>
	<audio controls="" preload="metadata" id="07-2"><source src="../mandarin/audio/07-02.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">漯文二。Kè wén èr. Text 2. </h4>
	<h4 class="textSection">看日历。Kàn rìlì. Look at the calender .</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Zuótiān shì jǐ yuè jǐ hào?<br/>
		A: 昨天 是 几 月 几 号？<br/><br/>
		<span class="masked">B: </span>Zuótiān shì bā yuè sānshíyī hào，xīngqī èr.<br/>
		B: 昨天 是 八 月 三十一 号，星期 二。<br/><br/>
		<span class="masked">A: </span>Míngtiān ne?<br/>
		A: 明天 呢？<br/><br/>
		<span class="masked">B: </span>Míngtiān shì jiǔ yuè èr hào，xīngqī sì.<br/>
		B: 明天 是 九 月 二 号，星期 四。<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: What was the date yesterday?<br/>
		B: It was Tuesday, August 31st.<br/><br/>
		A: What about tomorrow?<br/>
		B: It's Thursday, September 2nd<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>昨天</td><td>zuótiān</td><td>noun</td><td>yesterday</td></tr>
			<tr><td>明天</td><td>míngtiān</td><td>noun</td><td>tomorrow</td></tr>
		</table>
		</div>
	</div>
	<h4 class="sublesson"><button class="cd" onclick="play('07-3');">&#128191; 07-3</button>
	<audio controls="" preload="metadata" id="07-3"><source src="../mandarin/audio/07-03.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">漯文三。Kè wén sān. Text 3.</h4>
	<h4 class="textSection">在 咖啡官儿。Zài kāfēiguǎnr. In a coffee house.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Míngtiān xīngqī liù, nǐ qù xuéxiào ma?<br/>
		A: 明天 星期 六， 你 去 学校 <br/><br/>
		<span class="masked">B: </span>Wǒ qù xuéxiào.<br/>
		B: 我 去 学校。<br/><br/>
		<span class="masked">A: </span>Nǐ qù xuéxiào zuò shénme?<br/>
		A: 你 去 学校 做 什么？<br/><br/>
		<span class="masked">B: </span>Wǒ qù xuéxiào kàn shū<br/>
		B: 我 去 学校 看 书。<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Tomorrow is Saturday. Will you go to school?<br/>
		B: Yes, I will<br/><br/>
		A: What are you going to do there?<br/>
		B: I'm going there to do some reading<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>去</td><td>qù</td><td>verb</td><td>to go</td></tr>
			<tr><td>学校</td><td>xuéxiào</td><td>noun</td><td>school</td></tr>
			<tr><td>看</td><td>kàn</td><td>verb</td><td>to look at, to watch, to read</td></tr>
			<tr><td>书</td><td>shū</td><td>noun</td><td>book</td></tr>
		</table>
		</div>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">汪释 Notes</h3>
	<h4 class="sublesson">1. Expression of a Date(1): month, date, day of week</h4>
	<p>The way to say a date in Chinese observes the principle of the "bigger unit coming before the smaller one". The month is said first, then the date and finally the day of the week. In spoked Chinese "<b>号</b>" (<b>hào</b>) is often used instead of "日" (rì) to express the date. For example:</p>
	<table class="table table-responsive table-condensed table-centered"><tr>
		<td>9<b>月<b/> 1<b>号</b>， <b>星期</b>三。<br/>Jiǔ <b>yuè</b> yī <b>hào</b> <b>xīngqī</b> sān.<br/>September 1st, Wednesday.</td>
		<td>9<b>月<b/> 2<b>号</b>， <b>星期</b>四。<br/>Jiǔ <b>yuè</b> èr <b>hào</b> <b>xīngqī</b> sì.<br/>September 2nd, Thursday.</td>
		<td>8<b>月<b/> 31<b>号</b>， <b>星期</b>二。<br/>Bā <b>yuè</b> sānshíyī <b>hào</b> <b>xīngqī</b> èr.<br/>August 31st, Tuesday.</td>
	</tr></table>
</div>
<div class="container-fluid">
	<h4 class="sublesson">2. Sentences with a Nominal Predicate</h4>
	<p>A sentence with a Nominal Predicate is a sentence whose predicate is a nominal element. It is usually used to indicate age, time, date and so on. For example:</p>
	<table class="table table-responsive table-condensed table-centered">
		<tr><th>Subject</th><th>Predicate</th></tr>
		<tr><td>Wǒ de Hànyǔ lǎoshī<br/>我的汉语老师<br/>My Chinese teacher<br/></td><td>sānshísān suì<br/>三十三岁<br/>33 years old<br/></td></tr>
		<tr><td>Míngtiān<br/>明天<br/>Tomorrow</td><td>xīngqī sān<br/>星期三<br/>Wednesday</td></tr>
		<tr><td>Jīntiān<br/>今天<br/>Today</td><td>jiǔ yuè yī hào<br/>九月一号<br/>September 1st</td></tr>
	</table>
</div>
<div class="container-fluid">
	<h4 class="sublesson">3. Sentences with a Serial Verb Construction (1): "去" (qù: to go) + place + to do sth.</h4>
	<p>The predicate of a sentence with a serial verb construction consists of two or more verbs. The latter verb can be the purpose of the former. The object of the first verb, i.e. the place, can sometimes be omitted. For example:</p>
	<table class="table table-responsive table-condensed table-centered table-bordered">
		<tr><th rowspan="2">Subject</th><th colspan="2">Verb 1</th><th>Verb 2</th></tr>
		<tr><th>去</th><th>(place)</th><th>to do sth.</th></tr>
		<tr><td>Wǒ<br/>我<br/>I</td><td>qù<br/>去<br/>go to</td><td>Zhōngguó<br/>中国<br/>China</td><td>Xuéxí Hànyǔ<br/>学习汉语<br/>to study Chinese</td></tr>
		<tr><td>Wǒmen<br/>我们<br/>We</td><td>qù<br/>去<br/>go to</td><td>Zhōngguó fànguǎnr<br/>中国 饭馆儿<br/>a Chinese restuarant</td><td>chī Zhōngguó cài<br/>吃 中国 菜<br/>to eat Chinese dishes</td></tr>
		<tr><td>Wǒ<br/>我<br/>I</td><td>qù<br/>去<br/>go to</td><td>xuéxiào<br/>学校<br/>school</td><td>kàn shū<br/>看 书<br/>to read books</td></tr>
	</table>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">练习 (liàn xí) Exercises</h3>
	<h4 class="sublesson">1. Role-play the dialogues</h4>
	<h4 class="sublesson">2. Read the following words allowed</h4>
	<div class="table">
	<table class="table table-responsive table-condensed table-centered borderless">
		<tr><td>yī yuè<br/>一月<br/>January</td><td>èr yuè<br/>二月<br/>February</td><td>sān yuè<br/>三月<br/>March</td><td>sì yuè<br/>四月<br/>April</td><td>wǔ yuè<br/>五月<br/>May</td><td>liù yuè<br/>月<br/>June</td></tr>
		<tr><td>qī yuè<br/>七月<br/>July</td><td>bā yuè<br/>八月<br/>August</td><td>jiǔ yuè<br/>九月<br/>September</td><td>shì yuè<br/>十月<br/>October</td><td>shìyī yuè<br/>十一月<br/>November</td><td>shì'èr yuè<br/>十二月<br/>December</td></tr>
	</table>
	</div>
	<div class="table">
	<table class="table table-responsive table-condensed table-centered">
		<tr><td>xīngqī yī<br/>星期 一<br/>Monday</td><td>xīngqī èr<br/>星期 二<br/>Tuesday</td><td>xīngqī sān<br/>星期 三<br/>Wednesday</td><td>xīngqī sì<br/>星期 四<br/>Thursday</td></tr>
		<tr><td>xīngqī wǔ<br/>星期 五<br/>Friday</td><td>xīngqī liù<br/>星期 六<br/>Saturday</td><td colspan="2">xīngqīrì / xīngqītiān<br/>星期 日 / 星期 天<br/>Sunday</td></tr>
	</table>
	</div>
</div>
<div class="container-fluid">
	<p>3. Answer the questions according to the actual situations.
	<div class="col-xs-12 col-md-6 col">
		<span class="han hanzi71">今天 几 月 几 号 星期 几？<br/>
			<button type="button" id="n71" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g71" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn71">Jīntiān jǐ yuè jǐ hào xīngqí jǐ?<br/></span>
		<span class="eng" id="eng71">What date is it today?<br/></span>
		<br/>
		<span class="han hanzi72">明天 几 月 几 号 星期 几？<br/>
			<button type="button" id="n72" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g72" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn72">Míngtiān jǐ yuè jǐ hào xīngqí jǐ?<br/></span>
		<span class="eng" id="eng72">What date will it be tomorrow?<br/></span>
		<br/>
		<span class="han hanzi73">昨天 几 月 几 号 星期 几？<br/>
			<button type="button" id="n73" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g73" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn73">Zuótiān jǐ yuè jǐ hào xīngqí jǐ?<br/></span>
		<span class="eng" id="eng73">What date was it yesterday?<br/></span>
		<br/>
		<span class="han hanzi74">明天 你 去 哪儿 做 什么？<br/>
			<button type="button" id="n74" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g74" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn74">Míngtiān nǐ qù nǎr zuò shénme?<br/></span>
		<span class="eng" id="eng74">What are you going to do tomorrow?<br/></span>
		<br/>
		<span class="han hanzi75">星期日 你 去 哪儿 做 什么？<br/>
			<button type="button" id="n75" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g75" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn75">Xīngqírì nǐ qù nǎr zuò shénme?<br/></span>
		<span class="eng" id="eng75">What are you going to do on Sunday?<br/></span>
		<br/>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3>拼音 Pinyin</h3>
	<h4>Tone Collocation in Dysyllabic Words (2): 2nd tone + 1st/2nd/3rd/4th tone</h4>
<audio class="hidden" controls="" preload="metadata" id="guo2jia1"><source src="../mandarin/audio/guo2jia1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="lou2fang2"><source src="../mandarin/audio/lou2fang2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="ping2guo3"><source src="../mandarin/audio/ping2guo3.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="huan2jing4"><source src="../mandarin/audio/huan2jing4.m4a" type="audio/mpeg">No audio</audio>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('guo2jia1');">国家 (國家)<br/>guó jiā<br/>country</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('lou2fang2');">楼房 (樓房)<br/>lóu fáng<br/>building</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ping2guo3');">苹果 (蘋果)<br/>píng guǒ<br/>apple</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('huan2jing4');">环境 (環境)<br/>huán jìng<br/>environment</button></div>
	</div>
<audio class="hidden" controls="" preload="metadata" id="zuo2tian1"><source src="../mandarin/audio/zuo2tian1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="lan2qiu2"><source src="../mandarin/audio/lan2qiu2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="pi2jiu3"><source src="../mandarin/audio/pi2jiu3.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="han2jia4"><source src="../mandarin/audio/han2jia4.m4a" type="audio/mpeg">No audio</audio>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('zuo2tian1');">昨天<br/>zuó tiān<br/>yesterday</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('lan2qiu2');">篮球 (籃球)<br/>lán qiú<br/>basketball</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('pi2jiu3');">啤酒<br/>pí jiǔ<br/>beer</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('han2jia4');">寒假<br/>hán jià<br/>winter vacation</button></div>
	</div>
<audio class="hidden" controls="" preload="metadata" id="ming2tian1"><source src="../mandarin/audio/ming2tian1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="ming2nian2"><source src="../mandarin/audio/ming2nian2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="niu2nai3"><source src="../mandarin/audio/niu2nai3.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="niu2rou4"><source src="../mandarin/audio/niu2rou4.m4a" type="audio/mpeg">No audio</audio>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ming2tian1');">明天<br/>míng tiān<br/>tomorrow</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ming2nian2');">明年<br/>míng nián<br/>next year</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('niu2nai3');">牛奶<br/>niúnǎi<br/>milk</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('niu2rou4');">牛肉<br/>niú ròu<br/>beef</button></div>
	</div>
<audio class="hidden" controls="" preload="metadata" id="nian2qing1"><source src="../mandarin/audio/nian2qing1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="chang2cheng2"><source src="../mandarin/audio/chang2cheng2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="you2yong3"><source src="../mandarin/audio/you2yong3.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="you2xi4"><source src="../mandarin/audio/you2xi4.m4a" type="audio/mpeg">No audio</audio>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('nian2qing1');">年轻 (年輕)<br/>nián qīng<br/>young</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('chang2cheng2');">长城 (長城)<br/>Cháng chéng<br/>Great Wall</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('you2yong3');">游泳<br/>yóu yǒng<br/>swim</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('you2xi4');">游戏 (遊戲)<br/>yóu xì<br/>game</button></div>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h4 class="sublesson">1. Single-Component Characters</h4>
	<div class="table">
		<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><td>四</td><td>sì</td><td>4</td><td><div><img class="strokeOrder" src="img\四-order.gif" alt="四"/></div></td></tr>
		<tr><td>五</td><td>wǔ</td><td>5</td><td><div><img class="strokeOrder" src="img\五-order.gif" alt="五"/></div></td></tr>
		<tr><td>书</td><td>shū</td><td>writing<br/>book</td><td><div><img class="strokeOrder" src="img\书-order.gif" alt="书"/></div></td></tr>
		</table>
	</div>
	<h4 class="sublesson">2. Structure of Chinese Characters (2): left-right and left-middle-right</h4>
	<p>Basically Chinese characters fall into two types of structures: the single-component structure and the compound structure. The former has only one component, for example "人" (rén, person); while the latter is made up of two or more components, for example, "你" (nǐ, you)</p>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="active">
				<th>结构<br/>Jiégòu<br/>Structure</th>
				<th>例字<br/>Lìzì<br/>Example<br/>Characters</th>
				<th>图解<br/>Tújiě<br/>Illustrations</th>
			</tr>
			<tr>
				<td><br/>left-right</td>
				<td>你 &nbsp; nǐ &nbsp; (<i>singular</i>) you<br/><br/>好 &nbsp; hǎo &nbsp; good, fine</td>
				<td><span class="illustration">你</span> &nbsp; <span class="illustration">好</span></td>
			</tr>
			<tr>
				<td><br/>left-middle-right</td>
				<td>谢 &nbsp; xiè &nbsp; to thank<br/><br/>树 &nbsp; shù &nbsp; tree</td>
				<td><span class="illustration">谢</span> &nbsp; <span class="illustration">树</span></td>
			</tr>
		</table>
	</div>
	<h4 class="sublesson">3 Chinese Radicals "氵" and "讠"</h4>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="active"><th>Radical</th><th>Explanation</th><th>Examples</th></tr>
			<tr>
				<td><br/>氵</td>
				<td><br/>Shaped like 3 drops of water "氵" is usually related to water</td>
				<td>汉&nbsp;hàn&nbsp;Chinese<br/><br/> 没&nbsp;méi&nbsp;to not have</td>
			</tr>
			<tr>
				<td><br/>讠</td>
				<td><br/>The radical "讠" is usually related to language and speech</td>
				<td>语&nbsp;yǔ&nbsp;language<br/><br/>谁&nbsp;shéi&nbsp;who, whom</td>
			</tr>
		</table>
	</div>
</div>
<?php
} else { header( 'Location: https://www.stephenmccready.asia/mi/index.php'); }
?>
</body>
</html>
