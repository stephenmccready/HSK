<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
//if(login_check($mysqli) == true) {
if(true == true) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Level 1 - 8</title>
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
	<div class="jumbotron lessonHeaderLeft">Dì bā kè<br/>第 八 课<br/>Lesson 8</div>
	<div class="lessonHeaderRight"><h2>Wǒ xiǎng hē chá<br/>我 想 喝 茶<br/><b>I'd like some tea</b></h2></div>
</div>
<div class="container-fluid">
	<h4 class="sublesson"><button class="cd" onclick="play('08-1');">&#128191; 08-1</button>
	<audio controls="" preload="metadata" id="08-1"><source src="../mandarin/audio/08-01.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">漯文一。Kè wén yī. Text 1.</h4>
	<h4 class="textSection">在 饭馆二。Zài Fànguǎnr. In a restuarant.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Nǐ xiǎng hē shénme?<br/>
		A: 你 想 喝 什么？<br/>
		<span class="masked">B: </span>Wǒ xiǎng hē chá.<br/>
		B: 我 想 喝 茶。<br/><br/>
		<span class="masked">A: </span>Nǐ xiǎng chī shénme?<br/>
		A: 你 想 吃 什么？<br/>
		<span class="masked">B: </span>Wǒ xiǎng chī mǐfàn.<br/>
		B: 我 想 吃 米饭。<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: What would you like to drink?<br/>
		B: I'd like some tea.<br/><br/>
		A: What would you like to eat?<br/>
		B: I'd like rice.
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>想</td><td>xiǎng</td><td>modal</td><td>to want,<br/>would like</td></tr>
			<tr><td>喝</td><td>hē</td><td>verb</td><td>to drink</td></tr>
			<tr><td>茶</td><td>chá</td><td>noun</td><td>tea</td></tr>
			<tr><td>吃</td><td>chī</td><td>verb</td><td>to eat</td></tr>
			<tr><td>米饭</td><td>mǐfàn</td><td>noun</td><td>cooked rice</td></tr>
		</table>
		</div>
	</div>
	<h4 class="sublesson"><button class="cd" onclick="play('08-2');">&#128191; 08-2</button>
	<audio controls="" preload="metadata" id="08-2"><source src="../mandarin/audio/08-02.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">漯文二。Kè wén èr. Text 2. </h4>
	<h4 class="textSection">在 客厅。Zài kètīng. In the living room.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Xiàwǔ nǐ xiǎng zuò shénme?<br/>
		A: 下午 你 想 做 什么？<br/>
		<span class="masked">B: </span>Xiàwǔ wǒ xiǎng qù shāngdiàn<br/>
		B: 下午 我 想 去 商店。<br/><br/>
		<span class="masked">A: </span>Nǐ xiǎng mǎi shénme?<br/>
		A: 你 想 买 什么？<br/>
		<span class="masked">B: </span>Wǒ xiǎng mǎi yí gè bēizi<br/>
		B: 我 想 买 一 个 杯子。<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: What would you like to do this afternoon?<br/>
		B: I'd like to go shopping.<br/>
		A: What do you want to buy?<br/>
		B:I want to buy a cup
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>下午</td><td>xiàwǔ</td><td>noun</td><td>afternoon</td></tr>
			<tr><td>商店</td><td>shāngdiàn</td><td>noun</td><td>shop, store</td></tr>
			<tr><td>买</td><td>mǎi</td><td>verb</td><td>to buy,<br/>to purchase</td></tr>
			<tr><td>个</td><td>gè</td><td>measure<br/></td><td><i>a general measure word</i></td></tr>
			<tr><td>杯子</td><td>bēizi</td><td>noun</td><td>cup, glass</td></tr>
		</table>
		</div>
	</div>
	<h4 class="sublesson"><button class="cd" onclick="play('08-3');">&#128191; 08-3</button>
	<audio controls="" preload="metadata" id="08-3"><source src="../mandarin/audio/08-03.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">漯文三。Kè wén sān. Text 3.</h4>
	<h4 class="textSection">在 商店。Zài shāngdiàn. In a store.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Nǐ hǎo! Zhège bēizi duōshǎo qián?<br/>
		A: 你 好！ 这个 杯子 多少 钱？<br/>
		<span class="masked">B: </span>Èrshíbā kuài<br/>
		B: 二十八 块。<br/><br/>
		<span class="masked">A: </span>Nàge bēizi duōshǎo qián?<br/>
		A: 那个 杯子 多少 钱？<br/>
		<span class="masked">B: </span>Nàge bēizi shíbā kuài qián。<br/>
		B: 那个 杯子 十八 块 钱。<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Hello. How much is this cup?<br/>
		B: 28 <i>yuan</i><br/><br/>
		A: What about that one?<br/>
		B: That one is 18 <i>yuan</i>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>这</td><td>zhè</td><td>pronoun</td><td>this</td></tr>
			<tr><td>多少</td><td>duōshǎo</td><td>pronoun</td><td>how many,<br/>how much</td></tr>
			<tr><td>钱</td><td>qián</td><td>noun</td><td>money</td></tr>
			<tr><td>块</td><td>kuài</td><td>measure</td><td><i>a unit of money, same as "yuan"</i></td></tr>
			<tr><td>那</td><td>nà</td><td>pronoun</td><td>that</td></tr>
		</table>
		</div>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">汪释 Notes</h3>
	<h4 class="sublesson">1. The Modal Verb "<b>想</b>" (<b>xiǎng</b>: to want, would like)</h4>
	<p>The modal verb "<b>想</b>" (<b>xiǎng</b>) is usually used before a verb to express a hope or plan. For example:</p>
	<ol>
		<li> 我 <b>想</b> 学 汉语。<br/>Wǒ <b>xiǎng</b> xué Hànyǔ.<br/>I want to learn Chinese.</li>
		<li> 明天 我 <b>想</b> 去 学校 看 书。<br/>Míngtiān wǒ <b>xiǎng</b> qù xuéxiào kàn shū.<br/>Tomorrow I want to go to school to read books.</li>
		<li> 我 <b>想</b> 买 一 个 杯子。<br/>Wǒ <b>xiǎng</b> mǎi yī gè bēizi.<br/>I want to buy a cup. </li>
	</ol>
</div>
<div class="container-fluid">
	<h4 class="sublesson">2. The Interrogative Pronoun "<b>多少</b>" (<b>duōshǎo</b>: how many, how much)</h4>
	<p>The interrogative pronoun "<b>多少</b>" (<b>duōshao</b>) is used to ask about numbers larger than 10. The measure word following it can be omitted. "<b>多少</b>" (<b>duōshǎo</b>) can also be used to inquire about prices usually in the sentence pattern "..........<b>多少</b>钱" (..........duōshao qián?).  For example:</p>
	<ol>
		<li> 你们 学校 有 <b>多少</b> （个） 学生?<br/>Nǐmen xuéxiào yǒu <b>duōshǎo</b> (gè) xuésheng?<br/>How many students do you have at your school?</li>
		<li> 你 有 <b>多少</b> （个）汉语 老师?<br/>Nǐ yǒu <b>duōshǎo</b> (gè) Hànyǔ lǎoshī?<br/>How many Chinese teachers do you have?</li>
		<li> 这 个 杯子 <b>多少</b> 钱?<br/>Zhè gè bēizi <b>duōshǎo</b> qián<br/>This cup is how much?</li>
	</ol>
</div>
<div class="container-fluid">
	<h4 class="sublesson">3. Measure words  "<b>个</b>" (<b>gè</b>) and "<b>口</b>" (<b>kǒu</b>)</h4>
	<p>"<b>个</b>" is the most common measure word in Chinese, usually before a noun without a specific measure word of it's own. For example:</p>
	<ol>
		<li> 三 <b>个</b> 老师。<br/>Sān <b>gè</b> Hànyǔ lǎoshī<br/>3 teachers</li>
		<li> 五 <b>个</b> 学生。<br/>Wǔ <b>gè</b> xuésheng<br/>5 students</li>
		<li> 一 <b>个</b> 杯子。<br/>Yī <b>gè</b> bēizi<br/>1 cup</li>
	</ol>
	<p>"<b>口</b>" is usually used for members of a family. For example:</p>
	<ol>
		<li> 李 老师 家 有 六 <b>口</b> 人。<br/>Lǐ lǎoshī jiā yǒu liù <b>kǒu</b> rén.<br/>Professor Li has 6 family members.</li>
		<li> 你 家 有 几 <b>口</b> 人？<br/>Nǐ jiā yǒu jǐ <b>kǒu</b> rén?<br/>How many people are there in your family?</li>
		<li> 我 家 有 三 <b>口</b> 人。<br/>Wǒ jiā yǒu sān <b>kǒu</b> rén.<br/>I have 3 family members.</li>
	</ol>
</div>
<div class="container-fluid">
	<h4 class="sublesson">4. Expression of the Amount of Money</h4>
	<p>The base unit of <i>Renminbi</i> (Chinese currency) is "<b>元</b> (<b>yuán</b>)", usually replaced by "<b>块</b> (<b>kuài</b>)" .For example:</p>
	<table class="table table-responsive table-condensed">
		<tr><td>一 <b>元</b> （<b>块</b>）<br/> <i>one <b>yuán</b>/<b>kuài</b></i></td><td>五 <b>元</b> （<b>块</b>）<br/> <i>five <b>yuán</b>/<b>kuài</b></i></td><td>十 元 （<b>块</b>）<br/> <i>ten <b>yuán</b>/<b>kuài</b></i></td></tr>
	</table>
	<table class="table table-responsive table-condensed">		
		<tr><td>五 十 <b>元</b>（<b>块</b>）<br/> <i>fifty <b>yuán</b>/<b>kuài</b></i></td><td>一 百 <b>元</b> （<b>块</b>）<br/> <i>one hundred <b>yuán</b>/<b>kuài</b></i></td></tr>
	</table>
	<table class="table table-responsive table-condensed">
		<tr><td></td><td></td></tr>
	</table>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">练习 (liàn xí) Exercises</h3>
	<h4 class="sublesson">1. Role-play the dialogues</h4>
	<h4 class="sublesson">2. Answer the questions according to the actual situations.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="han hanzi81">你 想 吃 什么？<br/>
			<button type="button" id="n81" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g81" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn81">Nǐ xiǎng chī shénme?<br/></span>
		<span class="eng" id="eng81">What do you want to eat?<br/></span>
		<br/>
		<span class="han hanzi82">你 想 喝 什么？<br/>
			<button type="button" id="n82" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g82" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn82">Nǐ xiǎng hē shénme?<br/></span>
		<span class="eng" id="eng82">What do you want to drink?<br/></span>
		<br/>
		<span class="han hanzi83">明天 下午 你 想 做 什么？<br/>
			<button type="button" id="n83" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g83" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn83">Míngtiān xiàwǔ nǐ xiǎng zuò shénme?<br/></span>
		<span class="eng" id="eng83">What do you want to do tomorrow afternoon?<br/></span>
		<br/>
		<span class="han hanzi84">你 去 哪个 商店 买 杯子？<br/>
			<button type="button" id="n84" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g84" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn84">Nǐ qù nǎge shāngdiàn mǎi bēizi?<br/></span>
		<span class="eng" id="eng84">Which store do you go to buy a cup?<br/></span>
		<br/>
		<span class="han hanzi85">一个 杯子 多少 钱？<br/>
			<button type="button" id="n85" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g85" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn85">Yīgè bēizi duōshǎo qián?<br/></span>
		<span class="eng" id="eng85">How much is a cup?<br/></span>
		<br/>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3>拼音 Pinyin</h3>
	<h4>Tone Collocation in Dysyllabic Words (3): 3rd tone + 1st/2nd/3rd/4th tone</h4>
<audio class="hidden" controls="" preload="metadata" id="shou3ji1"><source src="../mandarin/audio/shou3ji1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="shou3zhuo2"><source src="../mandarin/audio/shou3zhuo2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="shou3biao3"><source src="../mandarin/audio/shou3biao3.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="shou3tao4"><source src="../mandarin/audio/shou3tao4.m4a" type="audio/mpeg">No audio</audio>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('shou3ji1');">手机<br/>shǒujī<br/>mobile phone</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('shou3zhuo2');">手镯<br/>shǒuzhuó<br/>bracelet</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('shou3biao3');">手表<br/>shǒubiaǒ<br/>wristwatch</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('shou3tao4');">手套<br/>shǒutaò<br/>gloves</button></div>
	</div>
<h4 class="sublesson">Listen to the recordings and read after.  Pay attention to the collocation of tones.<span>&#128191; 08-3</span></h4>
<audio class="hidden" controls="" preload="metadata" id="lao3shi1"><source src="../mandarin/audio/lao3shi1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="lao3ren2"><source src="../mandarin/audio/lao3ren2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="yu3san3"><source src="../mandarin/audio/yu3san3.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="you3yong4"><source src="../mandarin/audio/you3yong4.m4a" type="audio/mpeg">No audio</audio>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('lao3shi1');">老师 (老師)<br/>lǎo shī<br/>teacher</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('lao3ren2');">老人<br/>lǎo rén<br/>elderly</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('yu3san3');">雨伞 (雨傘)<br/>yǔ sǎn<br/>umbrella</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('you3yong4');">有用<br/>yǒu yòng<br/>useful</button></div>
	</div>
<audio class="hidden" controls="" preload="metadata" id="mei3tian1"><source src="../mandarin/audio/mei3tian1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="mei3nian2"><source src="../mandarin/audio/mei3nian2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="mei3hao3"><source src="../mandarin/audio/mei3hao3.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="mei3li4"><source src="../mandarin/audio/mei3li4.m4a" type="audio/mpeg">No audio</audio>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('mei3tian1');">每天<br/>měi tiān<br/>everyday</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('mei3nian2');">每年<br/>měi nián<br/>every year</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('mei3hao3');">美好<br/>měi hǎo<br/>beautiful</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('mei3li4');">美丽<br/>měi lì<br/>beautiful</button></div>
	</div>
<audio class="hidden" controls="" preload="metadata" id="hai3bian1"><source src="../mandarin/audio/hai3bian1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="hai3mian2"><source src="../mandarin/audio/hai3mian2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="xi3zao3"><source src="../mandarin/audio/xi3zao3.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="gan3xie4"><source src="../mandarin/audio/gan3xie4.m4a" type="audio/mpeg">No audio</audio>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('hai3bian1');">海边 (海邊)<br/>hǎi biān<br/>seaside</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('hai3mian2');">海绵 (海綿)<br/>hǎi mián<br/>sponge</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('xi3zao3');">洗澡 (洗澡)<br/>xǐ zǎo<br/>shower</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('gan3xie4');">感谢 (感謝)<br/>gǎn xiè<br/>thank you (formal)</button></div>
	</div>
<audio class="hidden" controls="" preload="metadata" id="yi3ying1"><source src="../mandarin/audio/yi3ying1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="yi1qian2"><source src="../mandarin/audio/yi1qian2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="biao3yan3"><source src="../mandarin/audio/biao3yan3.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="biao3xian4"><source src="../mandarin/audio/biao3xian4.m4a" type="audio/mpeg">No audio</audio>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('yi3ying1');">已经 (已經)<br/>yǐ jīng<br/>already</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('yi1qian2');">以前<br/>yǐ qián<br/>before</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('biao3yan3');">表演<br/>biǎo yǎn<br/>perform</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('biao3xian4');">表现 (表現)<br/>biǎo xiàn<br/>behave</button></div>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h4 class="sublesson">2. Single-Component Characters</h4>
	<div class="table">
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><td>少</td><td>shǎo</td><td>few<br/>little</td><td><div><img class="strokeOrder" src="img/少-order.gif" alt="少"/></div></td></tr>
		<tr><td>个</td><td>gè</td><td><i>measure<br/>word</i></td><td><div><img class="strokeOrder" src="img/个-order.gif" alt="个"/></div></td></tr>
	</table>
	</div>
	<h4 class="sublesson">2. Structure of Chinese Characters (3): top-bottom and top-middle-bottom</h4>
	<p></p>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="active">
				<th>Structure</th>
				<th>例字<br/>lì zì<br/>Example<br/>Characters</th>
				<th>Illustrations</th>
			</tr>
			<tr>
				<td><br/>top-bottom</td>
				<td>是 &nbsp; shì &nbsp; to be<br/><br/>	爸 &nbsp; bà &nbsp; father</td>
				<td><span class="illustration">是</span> &nbsp; <span class="illustration">爸</span></td>
			</tr>
			<tr>
				<td><br/>top-midddle-bottom</td>
				<td>茶 &nbsp; chá &nbsp; tea<br/><br/> 高 &nbsp; gāo &nbsp; high, tall</td>
				<td><span class="illustration">茶</span> &nbsp; <span class="illustration">高</span></td>
			</tr>
		</table>
	</div>
	<h4 class="sublesson">3 Chinese Radicals "钅" and "口"</h4>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="active"><th>Radical</th><th>Explanation</th><th>Examples</th></tr>
			<tr>
				<td><br/>钅</td>
				<td><br/>The radical "钅" is usually related to metal</td>
				<td>钟 &nbsp; zhōng &nbsp;clock<br/><br/>钱 &nbsp; qián &nbsp;money</td>
			</tr>
			<tr>
				<td><br/>口</td>
				<td><br/>The radical "口" is usually related to the mouth</td>
				<td>吃 &nbsp; chī &nbsp; to eat <br/><br/>喝 &nbsp; hē &nbsp; to drink</td>
			</tr>
		</table>
	</div>
</div>
<?php
} else { header( 'Location: https://www.stephenmccready.asia/mi/index.php'); }
?>
</body>
</html>
