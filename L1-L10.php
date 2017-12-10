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
	<title>Level 1 - 10</title>
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
	<div class="jumbotron lessonHeaderLeft">Dì shí kè<br/>第 十 课<br/>Lesson 10</div>
	<div class="lessonHeaderRight"><h2>Wǒ néng zuò zhèr ma？<br/>我 能 坐 这人 吗？<br/><b>Can I sit here？</b></h2></div>
</div>
<div class="container-fluid">
	<h4 class="sublesson">1. <button class="cd" onclick="play('10-1');">&#128191; 10-1</button>
	<audio controls="" preload="metadata" id="10-1"><source src="../mandarin/audio/10-1.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén yī。漯文一。 Zài Bàngōngshì. 在 办公室。</h4>
	<h4 class="textSection">Text 1. In the office.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Zhuōzi shàng yǒu shénme?<br/>
		A: 桌子 上 有 什么？<br/>
		<span class="masked">B: </span>Zhuōzi shàng yǒu yí gé diànnǎo hé yì běn shū.<br/>
		B: 桌子 上 有 一 个 电脑 和 一 本 书。<br/>
		<br/>
		<span class="masked">A: </span>Bēizi zài nǎr?<br/>
		A: 杯子 在 哪儿？<br/>
		<span class="masked">B: </span>Bēizi zài zhuōzi lǐ.<br/>
		B: 杯子 在 桌子 里。<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: What are there on the desk?<br/>
		B: There is a computer and a book.<br/><br/>
		A: Where is the cup?<br/>
		B: It's in the desk.<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>桌子</td><td>zhuōzi</td><td>noun</td><td>desk, table</td></tr>
			<tr><td>上</td><td>shàng</td><td>noun</td><td>up, above</td></tr>
			<tr><td>电脑</td><td>diànnǎo</td><td>noun</td><td>computer</td></tr>
			<tr><td>和</td><td>hé</td><td>conj.</td><td>and</td></tr>
			<tr><td>本</td><td>běn</td><td>meas.</td><td><i>measure word for books</i></td></tr>
			<tr><td>里</td><td>lǐ</td><td>noun</td><td>inner, inside, interior</td></tr>
		</table>
		</div>
	</div>
	<h4 class="sublesson">2. <button class="cd" onclick="play('10-2');">&#128191; 10-2</button>
	<audio controls="" preload="metadata" id="10-2"><source src="../mandarin/audio/10-2.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">漯文二。Kè wén èr。 Zài Jiànshēnfáng. 在 健身房。</h4>
	<h4 class="textSection">Text 2. In the Gym.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Qiánmiàn nàge rén jiào shénme míngzi?<br/>
		A: 前面 那个 人 叫 什么 名字？<br/>
		<span class="masked">B: </span>Tā jiào Wáng Fāng, zài yīyuàn gōngzuò.<br/>
		B: 她 叫 王方。在 医院 工作。<br/>
		<br/>
		<span class="masked">A: </span>Hòumiàn nàge rén ne? Tā jiào shénme míngzi?<br/>
		A: 后面 那个 人 呢？他 叫 什么 名字？<br/>
		<span class="masked">B: </span>Tā jiào Xiè Péng, zài shāngdiàn gōngzuò.<br/>
		B: 他 叫 谢朋， 在 商店 工作。<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Who is the person in the front?<br/>
		B: She is Wáng Fāng. She works in a hospital.<br/><br/>
		A: What about the person in the back? What's his name?<br/>
		B: He is Xiè Péng. He works in a store.<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>前面</td><td>qiánmiàn</td><td>noun</td><td>front</td></tr>
			<tr><td>后面</td><td>hòumiàn</td><td>noun</td><td>back</td></tr>
			<tr><th colspan="4"><i>Proper Nouns</i></th></tr>
			<tr><td>王方</td><td colspan="3">Wáng Fāng</td></tr>
			<tr><td>谢朋</td><td colspan="3">Xiè Péng</td></tr>
		</table>
		</div>
	</div>
	<h4 class="sublesson">3. <button class="cd" onclick="play('10-3');">&#128191; 10-3</button>
	<audio controls="" preload="metadata" id="10-3"><source src="../mandarin/audio/10-3.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">漯文三。Kè wén sān。 Zài túshūguǎn. 在 图书馆。</h4>
	<h4 class="textSection">Text 3. In the library.</h4>	
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span><span class="pinyin">Zhèr yǒu rén ma?</span><br/>
		A: <span class="hanzi">这儿 有 人 吗？</span><br/>
		<span class="masked">B: </span><span class="pinyin">Méi yǒu.</span><br/>
		B: <span class="hanzi">没 有。</span><br/>
		<br/>
		<span class="masked">A: </span><span class="pinyin">Wǒ néng zuò zhèr ma?</span><br/>
		A: <span class="hanzi">我 能 坐 这儿 吗？</span><br/>
		<span class="masked">B: </span><span class="pinyin">Qǐng zuò.</span><br/>
		B: <span class="hanzi">请 坐。</span><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Is this seat taken?<br/>
		B: No, it isn't.<br/><br/>
		A: Can I sit here?<br/>
		B: Yes, please.<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>这儿</td><td>zhèr</td><td>pron.</td><td>here</td></tr>
			<tr><td>没 有 (没)</td><td>méiyǒu (méi)</td><td>adv.</td><td>there is not</td></tr>
			<tr><td>能</td><td>néng</td><td>mod.</td><td>can, may</td></tr>
			<tr><td>坐</td><td>zuò</td><td>verb</td><td>to sit,<br/>to be seated</td></tr>
		</table>
		</div>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">汪释 Notes</h3>
	<h4 class="sublesson">1. The "<b>有</b>"<i>(yǒu：there is)</i> sentence: indicating existence </h4>
	<p>The "<b>有</b>"<i>(yǒu：there is)</i> can be used as an existential sentence to indicate a person or thing exists somewhere . For example:</p>
	<table class="table table-responsive table-condensed table-centered">
		<tr><th>Word of Locality</th><th><b>有</b><br/><b>yǒu</b></th><th>Person/Thing Existing</th></tr>
		<tr><td>椅子 下面<br/>yǐzi xiàmiàn<br/>Below chair</td><td><b>有</b><br/><b>yǒu</b><br/>there is</td><td>一只小狗。<br/>yī zhī xiāo gǒu<br/>a puppy</td></tr>
		<tr><td>学校 里<br/>xuéxiào lǐ<br/>In school</td><td><b>有</b><br/><b>yǒu</b><br/>there is</td><td>一 个 商店<br/>yī gè shāngdiàn<br/>a shop</td></tr>
		<tr><td>桌子 上<br/>zhuōzi shàng<br/><br/>On the table</td><td><b>有</b><br/><b>yǒu</b><br/><br/>there is</td><td>一 个 电脑 和 一 本 书<br/>yī gè diànnǎo<br/>hé yī běn shū<br/>a computer<br/>and a book</td></tr>
	</table>
	<p>In the negative form of a "<b>有</b>" sentence.  "<b>没有</b>" <i>(<b>méi yǒu</b>：there is not)</i> is used without a numeral classifier before the object.  For example:</p>
	<ol>
		<li> 椅子 下面 <b>没有</b> 小 狗。<br/>Yǐzi xiàmiàn <b>méi yǒu</b> xiāo gǒu.<br/>There is no puppy under the chair</li>
		<li> 学校 里 <b>没有</b> 商店。<br/>Xuéxiào lǐ <b>méi yǒu</b> shāngdiàn.<br/>There are no shops in the school</li>
		<li> 桌子 上 <b>没有</b> 电脑 和 书。<br/>Zhuōzi shàng <b>méi yǒu</b> diànnǎo hé shū.<br/>There is no computer and book on the table</li>
	</ol>
</div>
<div class="container-fluid">
	<h4 class="sublesson">2. The Conjunction "<b>和</b>" (<b>hé</b>: and)</h4>
	<p> The Conjunction "<b>和</b>" (<b>hé</b>: and) is used to connect two or more elements,  indicating a parallel relationship.  For example:</p>
	<ol>
		<li> 我 有 一 个 中国 朋友 <b>和</b> 一 个 美国 朋友。 <br/>Wǒ yǒu yí gé Zhōnggoú péngyou <b>hé</b> yí gé Méiguó péngyou。 <br/>I have 1 Chinese friend and 1 American friend.</li>
		<li> 我 家 有 三 口 人, 爸爸， 妈妈 <b>和</b> 我。 <br/>Wǒ jiā yǒu sān kǒu rén, bàba, māma <b>hé</b> wǒ。 <br/>My family has 3 people, father, mother and me.</li>
		<li> 桌子 上 有 一 个 电脑 <b>和</b> 一 本 书。<br/>Zhuōzi shàng yǒu yī gé diànnǎo <b>hé</b> yī běn shū。 <br/>On the table is a computer and a book.</li>
	</ol>
</div>
<div class="container-fluid">
	<h4 class="sublesson">3. The Modal Verb "<b>能</b>" (<b>néng</b>: can [ability])</h4>
	<p> The modal verb "<b>能</b>" (<b>néng</b>: can [ability]) is usually used before a verb to form the predicate indicating an ability or possibility.  The interrogative sentence structure "<b>能 ... 吗</b>" (<b>néng... ma</b>: can ?)is often used to indicate a request or hope for permission. For example:</p>
	<ol>
		<li> 明天 下午 我 <b>能</b> 去 商店。<br/>Míngtiān xiàwǔ wǒ <b>néng</b> qù shāngdiàn.<br/>Tomorrow afternoon, I can go to the shops</li>
		<li> 你 <b>能</b> 在 这儿 写 你 的 名字 <b>吗</b>？<br/>Nǐ <b>néng</b> zài zhè'er xiě nǐ de míngzì <b>ma</b>?  <br/>Can you write your name here?</li>
		<li> 我 <b>能</b> 坐 这儿 吗？<br/>Wo <b>néng</b> zuò zhèr <b>ma</b>?  <br/>Can I sit here?</li>
	</ol>
</div>
<div class="container-fluid">
	<h4 class="sublesson">4. Imperative Sentences with "<b>请</b>" (<b>qǐng</b>: please)</h4>
	<p>When the verb "<b>请</b>" (<b>qǐng</b>: please) is used before another verb, an imperative sentence is formed, indicating a polite suggestion or hope. For example:</p>
	<ol>
		<li> <b>请</b> 写 您 的 名字 <br/><b>Qǐng</b> xiè nín de míngzì. <br/>Please write your name.</li>
		<li> <b>请</b> 喝 茶 <br/><b>Qǐng</b> hē chá. <br/>Please drink tea.</li>
		<li> <b>请</b> 坐 <br/><b>Qǐng</b> zuǒ. <br/>Please sit.</li>
	</ol>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">练习 (liàn xí) Exercises</h3>
	<h4 class="sublesson">1. Role-play the dialogues</h4>
	<h4 class="sublesson">2. Answer the questions according to the actual situations.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="han hanzi101">电脑 在 哪儿？<br/>
			<button type="button" id="n101" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g101" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn101">Diànnǎo zài nǎr?<br/></span>
		<span class="eng" id="eng101">Where is the computer?<br/></span>
		<br/>
		<span class="han hanzi102">书 在 哪儿？<br/>
			<button type="button" id="n102" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g102" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn102">Shū zài nǎr?<br/></span>
		<span class="eng" id="eng102">Where is the book?<br/></span>
		<br/>
		<span class="han hanzi103">桌子 里面 有 什么？<br/>
			<button type="button" id="n103" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g103" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn103">Zhuōzi lǐmián yǒu shénme?<br/></span>
		<span class="eng" id="eng103">What is inside the desk?<br/></span>
		<br/>
		<span class="han hanzi104">哪个 人 是 王 方？<br/>
			<button type="button" id="n104" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g104" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn104">Nǎge rén shì Wáng Fāng?<br/></span>
		<span class="eng" id="eng104">Which person is Wáng Fāng?<br/></span>
		<br/>
		<span class="han hanzi105">哪个 人 是 谢 朋？<br/>
			<button type="button" id="n105" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g105" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn105">Nǎge rén shì Xiè Péng?<br/></span>
		<span class="eng" id="eng105">Which person is Xiè Péng?<br/></span>
		<br/>
	</div>	
</div>
<div class="container-fluid">
	<h3>拼音 Pinyin</h3>
	<h4>1. Pronunciation of Neutral-Tone Syllables</h4>
	<p></p>
<audio class="hidden" controls="" preload="metadata" id="zhuo1zi"><source src="../mandarin/audio/zhuo1zi.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="pan2zi"><source src="../mandarin/audio/pan2zi.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="yi3zi"><source src="../mandarin/audio/yi3zi.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="ku4zi"><source src="../mandarin/audio/ku4zi.m4a" type="audio/mpeg">No audio</audio>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('zhuo1zi');">桌子<br/>zhuōzi<br/>table</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('pan2zi');">盘子<br/>pánzi<br/>plate</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('yi3zi');">椅子<br/>yǐzi<br/>chair</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ku4zi');">裤子<br/>kǔzi<br/>trousers</button></div>
	</div>
	<h4>2. Pronunciation of Reduplicated Syllables</h4>
	<p>In a disyllabic word with reduplicated syllables, the second syllable is usually read in the neutral tone</p>
<audio class="hidden" controls="" preload="metadata" id="ba4ba"><source src="../mandarin/audio/ba4ba.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="ma1ma"><source src="../mandarin/audio/ma1ma.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="ye2ye"><source src="../mandarin/audio/ye2ye.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="nai3nai"><source src="../mandarin/audio/nai3nai.m4a" type="audio/mpeg">No audio</audio>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ba4ba');">爸爸<br/>bàba<br/>father</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ma1ma');">吗吗<br/>māma<br/>mother</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ye2ye');">爷爷<br/>yéye<br/>grandfather</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('nai3nai');">奶奶<br/>naǐnai<br/>grandmother</button></div>
	</div>
<audio class="hidden" controls="" preload="metadata" id="ge1ge"><source src="../mandarin/audio/ge1ge.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="jie3jie"><source src="../mandarin/audio/jie3jie.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="di4di"><source src="../mandarin/audio/di4di.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="mei4mei"><source src="../mandarin/audio/mei4mei.m4a" type="audio/mpeg">No audio</audio>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ge1ge');">哥哥<br/>gēge<br/>elder<br/>brother</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('jie3jie');">姐姐<br/>jiějie<br/>elder<br/>sister</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('di4di');">弟弟<br/>dìdi<br/>younger<br/>brother</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('mei4mei');">妹妹<br/>mèimei<br/>younger<br/>sister</button></div>
	</div>
<audio class="hidden" controls="" preload="metadata" id="gu1gu"><source src="../mandarin/audio/gu1gu.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="shu1shu"><source src="../mandarin/audio/shu1shu.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="tai4tai"><source src="../mandarin/audio/tai4tai.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="xing1xing"><source src="../mandarin/audio/xing1xing.m4a" type="audio/mpeg">No audio</audio>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('gu1gu');">姑姑<br/>gūgu<br/>auntie</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('shu1shu');">叔叔<br/>shūshu<br/>uncle</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('tai4tai');">太太<br/>tàitai<br/>madam</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('xing1xing');">星星<br/>xīngxing<br/>star</button></div>
	</div>
<audio class="hidden" controls="" preload="metadata" id="xie4xie"><source src="../mandarin/audio/xie4xie.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="kan4kan"><source src="../mandarin/audio/kan4kan.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="shuo1shuo"><source src="../mandarin/audio/shuo1shuo.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="chang2chang"><source src="../mandarin/audio/chang2chang.m4a" type="audio/mpeg">No audio</audio>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('xie4xie');">谢谢<br/>xièxie<br/>thanks</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('kan4kan');">看看<br/>kànkan<br/>look</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('shuo1shuo');">说说<br/>shuōshuo<br/>say</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('chang2chang');">尝尝<br/>chángchang<br/>taste</button></div>
	</div>
	<h4>3. Pronunciation of Words with the Suffix: "们 （們）：men", "子 : zi" or "头 : tóu"</h4>
	<p>Being part of a word, the suffixes "们 （們）：men", "子 : zi" and "头 : tou" are usually read in the neutral tone. For example:</p>
<audio class="hidden" controls="" preload="metadata" id="ni3men"><source src="../mandarin/audio/ni3men.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="wo3men"><source src="../mandarin/audio/wo3men.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="ta1men"><source src="../mandarin/audio/ta1men.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="ren2men"><source src="../mandarin/audio/ren2men.m4a" type="audio/mpeg">No audio</audio>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ni3men');">你们<br/>nǐmen<br/></button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('wo3men');">我们<br/>wǒmen<br/></button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ta1men');">他们<br/>tāmen<br/></button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ren2men');">人们<br/>rénmen<br/></button></div>
	</div>
<audio class="hidden" controls="" preload="metadata" id="bei1zi"><source src="../mandarin/audio/bei1zi.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="bei4zi"><source src="../mandarin/audio/bei4zi.m4a" type="audio/mpeg">No audio</audio>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('zhuo1zi');">桌子<br/>zhuōzi<br/>table</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('yi3zi');">椅子<br/>yǐzi<br/>chair</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('bei1zi');">杯子<br/>bēizi<br/>cup</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('bei4zi');">被子<br/>bèizi<br/>quilt</button></div>
	</div>
<audio class="hidden" controls="" preload="metadata" id="she2tou"><source src="../mandarin/audio/she2tou.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="zhen3tou"><source src="../mandarin/audio/zhen3tou.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="shi2tou"><source src="../mandarin/audio/shi2tou.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="mu4tou"><source src="../mandarin/audio/mu4tou.m4a" type="audio/mpeg">No audio</audio>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('she2tou');">舌头<br/>shétou<br/>tongue</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('zhen3tou');">枕头<br/>zhěntou<br/>pillow</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('shi2tou');">石头<br/>shítou<br/>stone</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('mu4tou');">木头<br/>mùtou<br/>wood</button></div>
	</div>
<audio class="hidden" controls="" preload="metadata" id="qian2tou"><source src="../mandarin/audio/qian2tou.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="hou4tou"><source src="../mandarin/audio/hou4tou.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="li3tou"><source src="../mandarin/audio/li3tou.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="wai4tou"><source src="../mandarin/audio/wai4tou.m4a" type="audio/mpeg">No audio</audio>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('qian2tou');">前头<br/>qiántou<br/>front</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('hou4tou');">后头<br/>hòutou<br/>behind</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('li3tou');">里头<br/>lǐtou<br/>inside</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('wai4tou');">外头<br/>wàitou<br/>outside</button></div>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h4 class="sublesson">1. Single-Component Characters</h4>
	<div class="table">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr><td>上</td><td>sháng</td><td>up/above</td><td><div><img class="strokeOrder" src="img/上-order.gif" alt="上"/></div></td></tr>
			<tr><td>下</td><td>xià</td><td>down/below</td><td><div><img class="strokeOrder" src="img/下-order.gif" alt="下"/></div></td></tr>
			<tr><td>本</td><td>běn</td><td>origin</td><td><div><img class="strokeOrder" src="img/本-order.gif" alt="本"/></div></td></tr>
			<tr><td>末</td><td>mò</td><td>secondary</td><td><div><img src="img/末-order.png" alt="末" style="width: 35%;"/></div></td></tr>
		</table>
	</div>
	<h4 class="sublesson">2. Structure of Chinese Characters (5): enclosure</h4>
	<p></p>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="active">
				<th>Structure</th>
				<th>例字<br/>lì zì<br/>Example<br/>Characters</th>
				<th>Illustrations</th>
			</tr>
			<tr>
				<td>complete enclosure</td>
				<td>四 <br/>sì <br/>four<br/>国 <br/>guó <br/>country</td>
				<td><span class="illustration">四</span><br/><span class="illustration">国</span>
				</td>
			</tr>
		</table>
	</div>
	<h4 class="sublesson">3 Chinese Radicals "口" (kǒu) and "礻" (shì)</h4>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="active"><th>Radical</th><th>Explanation</th><th>Examples</th></tr>
			<tr>
				<td><br/>口</td>
				<td><br/>The radical "口" usually means being trapped or besieged.</td>
				<td> 国 <br/>guó <br/>country, nation
					<br/><br/> 困 <br/>kùn  <br/>to be trapped</td>
			</tr>
			<tr>
				<td><br/>礻</td>
				<td><br/>The radical "礻" is a variant of "示" a character usually<br/>related to deity, sacrificial rites and one's fortune.</td>
				<td> 视 <br/>shì <br/>to look, to view
					<br/><br/> 祝 <br/>zhù <br/>to wish</td>
			</tr>
		</table>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3>运用 Application</h3>
	<h4>2 Supplementary words</h4>
<audio class="hidden" controls="" preload="metadata" id="hou4mian4"><source src="../mandarin/audio/hou4mian4.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="zuo3bian"><source src="../mandarin/audio/zuo3bian.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="you4bian"><source src="../mandarin/audio/you4bian.m4a" type="audio/mpeg">No audio</audio>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('hou4mian4');">后面<br/>hou4mian4<br/>behind</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('zuo3bian');">左边<br/>zuo3bian<br/>left</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('you4bian');">右边<br/>you4bian<br/>right</button></div>
	</div>
</div>
<?php
} else { header( 'Location: https://www.stephenmccready.asia/mi/index.php'); }
?>
</body>
</html>
