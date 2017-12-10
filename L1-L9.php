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
	<title>Level 1 - 9</title>
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
	<div class="jumbotron lessonHeaderLeft">Dì jiǔ kè<br/>第 九 课<br/>Lesson 9</div>
	<div class="lessonHeaderRight"><h2>你 儿子 在 哪儿 工作?<br/>Nǐ érzi zài nǎr gōngzuò?<br/><b>Where does your son work?</b></h2></div>
</div>
<div class="container-fluid">
	<h4 class="sublesson">1. <button class="cd" onclick="play('09-1');">&#128191; 9-1</button>
	<audio controls="" preload="metadata" id="09-1"><source src="../mandarin/audio/09-1.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén yī. Zài Jiā.<br/>漯文一。在 家。<br/>Text 1. At home.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Xiāo māo zài nǎr?<br/>
		A: 小 猫 在 哪儿？<br/>
		<span class="masked">B: </span>Xiāo māo zài nàr.<br/>
		B: 小 猫 在 那儿。<br/>
		<span class="masked">A: </span>Xiāo gǒu zài nǎr?<br/>
		A: 小 狗 在 哪儿？<br/>
		<span class="masked">B: </span>Xiāo gǒu zài yǐzi xiàmiàn.<br/>
		B: 小 狗 在 椅子 下面。<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Where is the kitten?<br/>
		B: The kitten is over there.<br/>
		A: Where is the puppy?<br/>
		B: The puppy is under the chair.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>小</td><td>xiāo</td><td>adjective</td><td>small. little</td></tr>
			<tr><td>猫</td><td>māo</td><td>noun</td><td>cat</td></tr>
			<tr><td>在</td><td>zài</td><td>verb</td><td>to be in/on/at</td></tr>
			<tr><td>那儿</td><td>nàr</td><td>pronoun</td><td>there</td></tr>
			<tr><td>狗</td><td>gǒu</td><td>noun</td><td>dog</td></tr>
			<tr><td>椅子</td><td>yǐzi</td><td>noun</td><td>chair</td></tr>
			<tr><td>下面</td><td>xiàmiàn</td><td>noun</td><td>under, below</td></tr>
			<tr><td>下</td><td>xià</td><td>noun</td><td>under, below</td></tr>
		</table>
		</div>
	</div>
	<h4 class="sublesson">2. <button class="cd" onclick="play('09-2');">&#128191; 9-2</button>
	<audio controls="" preload="metadata" id="09-2"><source src="../mandarin/audio/09-2.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén èr。 Zài Chēzhàn.<br/>漯文二。在 车站。<br/>Text 2. At the railway station.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Nǐ zài nǎr gōngzuò?<br/>
		A: 你 在 哪儿 工作？<br/>
		<span class="masked">B: </span>Wǒ zài xuéxiào gōngzuò.<br/>
		B: 我 在 学校 工作。<br/>
		<span class="masked">A: </span>Nǐ érzi zài nǎr gōngzuò?<br/>
		A: 你 儿子 在 哪儿 工作？<br/>
		<span class="masked">B: </span>Wǒ érzi zài yīyuàn gōngzuò，tā shì yīshēng.<br/>
		B: 我 儿子 在 工作，他 是 医生。<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Where do you work?<br/>
		B: I work in a school.<br/>
		A: Where does your son work?<br/>
		B: My son works in a hospital, he is a doctor.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>在</td><td>zài</td><td>preposition</td><td>in/on/at</td></tr>
			<tr><td>哪儿</td><td>nǎr</td><td>pronoun</td><td>where</td></tr>
			<tr><td>工作</td><td>gōngzuò</td><td>verb/noun</td><td>to work; job</td></tr>
			<tr><td>儿子</td><td>érzi</td><td>noun</td><td>son</td></tr>
			<tr><td>医院</td><td>yīyuàn</td><td>noun</td><td>hospital</td></tr>
			<tr><td>医生</td><td>yīshēng</td><td>noun</td><td>doctor</td></tr>
		</table>
		</div>
	</div>
	<h4 class="sublesson">3. <button class="cd" onclick="play('09-3');">&#128191; 9-3</button>
	<audio controls="" preload="metadata" id="09-3"><source src="../mandarin/audio/09-3.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén sān。 Dǎ diànhuà.<br/>漯文三。打电话。<br/>Text 3. On the phone.</h4>	
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Nǐ bàba zài jiā ma?<br/>
		A: 你 爸爸 在 家 妈？<br/>
		<span class="masked">B: </span>Bù zài jiā.<br/>
		B: 不 在 家。<br/>
		<span class="masked">A: </span>Tā zài nǎr ne?<br/>
		A: 他 在 哪儿 呢？<br/>
		<span class="masked">B: </span>Tā zài yīyuàn.<br/>
		B: 他 在 医院。<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Is your father at home?<br/>
		B: No, he isn't.<br/>
		A: Where is he?<br/>
		B: He is in the hospital.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>爸爸</td><td>bàba</td><td>noun</td><td>father</td></tr>
		</table>
		</div>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">汪释 Notes</h3>
	<h4 class="sublesson">1. The Verb "<b>在</b>" (<b>zài</b>: in/on/at)</h4>
	<p>"<b>在</b>" <b>zài</b> is a verb. When it is followed by a word of locality and acts as the predicate of a sentence, it indicates the location of somebody or something. For example:</p>
	<table class="table table-responsive table-condensed table-centered">
		<tr><th rowspan="2"><br/>Subject</th><th colspan="2">Predicate</th></tr>
		<tr><th><b>在</b><br/><b>zài</b></th><th>Word of<br/>Locality/Direction</th></tr>
		<tr><td>我 朋友<br/>Wǒ péngyǒu<br/>My friend</td><td><b>在</b><br/><b>zài</b><br/>is at</td><td>学校。<br/>xuéxiào.<br/>school</td></tr>
		<tr><td>我 妈妈<br/>Wǒ māma<br/>My mother</td><td><b>在</b><br/><b>zài</b><br/>is at</td><td>家。<br/>jiā.<br/>home</td></tr>
		<tr><td>小 狗<br/>Xiāo gǒu<br/>The puppy</td><td><b>在</b><br/><b>zài</b><br/>is</td><td>椅子 下面。<br/>yǐzi xiàmiàn.<br/>under the chair</td></tr>
	</table>
</div>
<div class="container-fluid">
	<h4 class="sublesson">2. The Interrogative Pronoun "<b>哪儿</b>" (<b>nǎr</b>: where)</h4>
	<p>The interrogative pronoun "<b>哪儿</b>" <i>(<b>nǎr</b>: where)</i> is used to ask about the location of somebody or something.  For example:</p>
	<ol>
		<li> 我 的 杯子 在 <b>哪儿</b>？<br/>Wǒ de bēizi zài <b>nǎr</b>？<br/>Where is my cup?</li>
		<li> 你 的 中国 朋友 在 <b>哪儿</b>？<br/>Nǐ de Zhōngguó péngyǒu zài <b>nǎr</b>？<br/>Where is your Chinese friend?</li>
		<li> 小 猫 在 <b>哪儿</b>？<br/>Xiǎo māo zài <b>nǎr</b>？<br/>Where is the kitten?</li>
	</ol>
</div>
<div class="container-fluid">
	<h4 class="sublesson">3. The Preposition  "<b>在</b>" (<b>zài</b>: in/on/at)</h4>
	<p> "<b>在</b>" (<b>zài</b>: in/on/at) can also act as a preposition, used before a word of locality to introduce the place where an action or behavior takes place. For example:</p>
	<table class="table table-responsive table-condensed table-centered">
		<tr><th rowspan="2">Subject</th><th colspan="3">Predicate</th></tr>
		<tr><th><b>在</b><br/><b>zài</b></th><th>Word of<br/>Locality/Direction</th><th><br/>Verb</th></tr>
		<tr><td>我<br/>Wǒ<br/>I</td><td><b>在</b><br/><b>zài</b><br/>am at</td><td>朋友 家<br/>péngyǒu jiā<br/>a friends<br/>house</td><td>喝茶。<br/>hē chá.<br/>drinking tea.</td></tr>
		<tr><td>你们<br/>Nǐmen<br/>You</td><td><b>在</b><br/><b>zài</b><br/>are at</td><td>学校<br/>xuéxiào<br/>school</td><td>看书。<br/>kàn shū.<br/>reading books.</td></tr>
		<tr><td>我 儿子<br/>Wǒ érzi<br/>My son</td><td><b>在</b><br/><b>zài</b><br/>is in</td><td>医院<br/>yīyuàn<br/>hospital</td><td>工作。<br/>gōngzuò.<br/>work.</td></tr>
	</table>
</div>
<div class="container-fluid">
	<h4 class="sublesson">4. The Interrogative Particle "<b>呢</b>" (<b>ne</b>)<i></i></h4>
	<p> Used at the end of a sentence, the interrogative particle "<b>呢</b>" (ne) asks about the location of somebody or something.  For example:</p>
	<ol>
		<li> 我 的 小 猫 <b>呢</b>？<br/>Wǒ de xiǎo māo <b>ne</b>？<br/>Where is my kitten?</li>
		<li> 我 的 杯子 <b>呢</b>？<br/>Wǒ de bēizi <b>ne</b>？<br/>Where is my cup?</li>
		<li> 你 在 哪儿 <b>呢</b>？<br/>Nǐ zài nǎr <b>ne</b>？<br/>Where are you?</li>
	</ol>
</div>
<div class="container-fluid">
	<div class="col-xs-12 col-md-6 col">
		<h3 class="sublesson">练习 (liàn xí) Exercises</h3>
		<h4 class="sublesson">1. Role-play the dialogues</h4>
		<h4 class="sublesson">2. Answer the questions according to the actual situations.</h4>
		<span class="han hanzi91">小 狗 在 哪儿？<br/>
			<button type="button" id="n91" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g91" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn91">Xiǎo gǒu zài nǎr?<br/></span>
		<span class="eng" id="eng91">Where is the puppy?<br/></span>
		<br/>
		<span class="han hanzi92">他 在 哪儿 工作？<br/>
			<button type="button" id="n92" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g92" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn92">Tā zài nǎr gōngzuò?<br/></span>
		<span class="eng" id="eng92">Where does he work？<br/></span>
		<br/>
		<span class="han hanzi93">他 儿子 在 哪儿 工作？<br/>
			<button type="button" id="n93" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g93" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn93">Tā érzi zài nǎr gōngzuò?<br/></span>
		<span class="eng" id="eng93">Where does his son work?<br/></span>
		<br/>
		<span class="han hanzi94">她 爸爸 在 家 吗？<br/>
			<button type="button" id="n94" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g94" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn94">Tā bàba zài jiā ma?<br/></span>
		<span class="eng" id="eng94">Is her father at home?<br/></span>
		<br/>
		<span class="han hanzi95">她 爸爸 在 哪儿 呢？<br/>
			<button type="button" id="n95" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g95" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn95">Tā bàba zài nǎr ne?<br/></span>
		<span class="eng" id="eng95">Where is her daddy?<br/></span>
		<br/>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3>拼音 Pinyin</h3>
<audio class="hidden" controls="" preload="metadata" id="mian4bao1"><source src="../mandarin/audio/mian4bao1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="mian4tao2"><source src="../mandarin/audio/mian4tao2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="dian4nao3"><source src="../mandarin/audio/dian4nao3.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="dian4hua4"><source src="../mandarin/audio/dian4hua4.m4a" type="audio/mpeg">No audio</audio>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('mian4bao1');">面包<br/>miànbāo<br/>bread</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('mian4tao2');">面条<br/>miàntiáo<br/>noodles</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('dian4nao3');">电脑<br/>diànnǎo<br/>computer</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('dian4hua4');">电话<br/>diànhuà<br/>telephone</button></div>
	</div>
	<h4>Tone Collocation in Dysyllabic Words (4): 4th tone + 1st/2nd/3rd/4th tone</h4>
<audio class="hidden" controls="" preload="metadata" id="xia4tian1"><source src="../mandarin/audio/xia4tian1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="qu4nian2"><source src="../mandarin/audio/qu4nian2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="tiao4wu3"><source src="../mandarin/audio/tiao4wu3.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="shui4jiao4"><source src="../mandarin/audio/shui4jiao4.m4a" type="audio/mpeg">No audio</audio>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('xia4tian1');">夏天<br/>xiàtiān<br/>summer</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('qu4nian2');">去年<br/>qùnián<br/>last year</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('tiao4wu3');">跳舞<br/>tiàowǔ<br/>dance</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('shui4jiao4');">睡觉<br/>shuìjiào<br/>sleep</button></div>
	</div>
<audio class="hidden" controls="" preload="metadata" id="dian4deng1"><source src="../mandarin/audio/dian4deng1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="dian4chi2"><source src="../mandarin/audio/dian4chi2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="dian4ying3"><source src="../mandarin/audio/dian4ying3.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="dian4shi4"><source src="../mandarin/audio/dian4shi4.m4a" type="audio/mpeg">No audio</audio>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('dian4deng1');">电灯<br/>diàndēng<br/>light</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('dian4chi2');">电池<br/>diànchí<br/>battery</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('dian4ying3');">电影<br/>diànyǐng<br/>movie</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('dian4shi4');">电视<br/>diànshì<br/>TV</button></div>
	</div>
<audio class="hidden" controls="" preload="metadata" id="chang4ge1"><source src="../mandarin/audio/chang4ge1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="fu4xi2"><source src="../mandarin/audio/fu4xi2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="han4yu3"><source src="../mandarin/audio/han4yu3.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="han4zi4"><source src="../mandarin/audio/han4zi4.m4a" type="audio/mpeg">No audio</audio>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('chang4ge1');">唱歌<br/>chànggē<br/> to sing</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('fu4xi2');">复习<br/>fùxí<br/>review</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('han4yu3');">汉语<br/>Hànyǔ<br/>Chinese<br/>(Language)</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('han4zi4');">汉字<br/>Hànzì<br/>Chinese<br/>Character</button></div>
	</div>
<audio class="hidden" controls="" preload="metadata" id="jian4kang1"><source src="../mandarin/audio/jian4kang1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="di4tu2"><source src="../mandarin/audio/di4tu2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="di4tie3"><source src="../mandarin/audio/di4tie3.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="jian4mian4"><source src="../mandarin/audio/jian4mian4.m4a" type="audio/mpeg">No audio</audio>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('jian4kang1');">健康<br/>jiànkāng<br/>health</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('di4tu2');">地图<br/>dìtú<br/>map</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('di4tie3');">地铁
<br/>dìtiě<br/>subway</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('jian4mian4');">见面<br/>jiànmiàn<br/>meet</button></div>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h4 class="sublesson">1. Single-Component Characters</h4>
	<div class="table">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr><td>在</td><td>zài</td><td>to live, to exist</td><td><div><img class="strokeOrder" src="img/在-order.gif" alt="在"/></div></td></tr>
			<tr><td>子</td><td>zǐ</td><td>èrzǐ(儿子) = son<br/>diànzǐ(电子) = electron</td><td><div><img class="strokeOrder" src="img/子-order.gif" alt="子"/></div></td></tr>
			<tr><td>工</td><td>gōng</td><td>gōngrén (工人) = worker<br/>gōngzuò(工作) = to work, job</td><td><div><img class="strokeOrder" src="img/工-order.gif" alt="工"/></div></td></tr>
		</table>
	</div>
	<h4 class="sublesson">2. Structure of Chinese Characters (4): half-enclosure</h4>
	<p></p>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="active">
				<th>Structure</th>
				<th>例字<br/>lì zì<br/>Example<br/>Characters</th>
				<th>Illustrations</th>
			</tr>
			<tr>
				<td>半封闭结构<br/>half<br/>enclosure<br/>bàn<br/>fēngbì<br/>jiégòu</td>
				<td>店 &nbsp; diàn &nbsp; store<br/>习 &nbsp; xí &nbsp; to study<br/>这 &nbsp; zhè &nbsp; this<br/>
				 	同 &nbsp; tóng &nbsp; same<br/>凶 &nbsp; xiōng &nbsp; fierce<br/>医 &nbsp; yī &nbsp; doctor
				</td>
				<td><span class="illustration">店</span><br/><span class="illustration">习</span><br/><span class="illustration">这</span><br/>
					<span class="illustration">同</span><br/><span class="illustration">凶</span><br/><span class="illustration">医</span>
				</td>
			</tr>
		</table>
	</div>
	<h4 class="sublesson">3 Chinese Radicals "辶" (chuò) and "门" (mén)</h4>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="active"><th>Radical</th><th>Explanation</th><th>Examples</th></tr>
			<tr>
				<td><br/>辶</td>
				<td><br/>The radical "辶" is<br/>usually related<br/>to walking</td>
				<td>这 &nbsp; zhè &nbsp; this<br/><br/> 送 &nbsp; sòng &nbsp; to send</td>
			</tr>
			<tr>
				<td><br/>门</td>
				<td><br/>The radical "门" is<br/>usually related<br/>to a room or a door</td>
				<td> 问 &nbsp; wèn &nbsp; to ask<br/><br/> 间 &nbsp; jiān &nbsp; <i>a measure word <br/>for rooms</i></td>
			</tr>
		</table>
	</div>
</div>
<?php
} else { header( 'Location: https://www.stephenmccready.asia/mi/index.php'); }
?>
</body>
</html>
