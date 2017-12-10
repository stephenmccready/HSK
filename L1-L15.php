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
	<title>Level 1 - 15</title>
	<link type="text/css" rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.2.min.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.6/bootstrap.min.js"></script>
	<!--[if IE]>
	<script src="https://stephenmccready.asia/html5shiv.min.js"></script>
	<![endif]-->
	<script src="js/mi.js"></script>
	<link rel="stylesheet" href="css/main.css" />
</head>
<body onload="setTitle(); $('.navBtnNext').hide();">
<?php include 'navbar.php'; ?>
<div class="container-fluid">
	<div class="jumbotron lessonHeaderLeft">Dì shíwǔ kè<br/>第 十五 课<br/>Lesson 15</div>
	<div class="lessonHeaderRight"><h2>Wǒ shì zuò fēijī lái de<br/>我 是 坐 飞机 来 的<br/><b>I came here by air</b></h2></div>
</div>
<div class="container-fluid">
	<h4 class="textSection">漯文一。在 餐桌 旁。</br>Kè wén yī. Zài cānzhuō páng.</br>Text 1. At the dining table</h4>
	<h4 class="sublesson">1. <button class="cd" onclick="play('15-1');">&#128191; 15-1</button>
	<audio controls="" preload="metadata" id="15-1"><source src="../mandarin/audio/15-1.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Nǐ hé Lǐ xiǎojiě shì shénme shíhòu rènshì de?<br/>
		A: 你 和 李 小姐 是 什么 时候 认识 时？<br/>
		<span class="masked">B: </span>Wǒmen shì èr líng yī yī nián jiǔ yuè rènshì de.<br/>
		B: 我们 是 2011 年 9 月 认识 时。<br/><br/>
		<span class="masked">A: </span>Nǐmen zài nǎr rènshì de?<br/>
		A: 你们 在 哪儿 认识 时？<br/>
		<span class="masked">B: </span>Wǒmen shì zài xuéxiào rènshì de, tā shì wǒ dàxué tóngxué<br/>
		B: 我们 是 在 学校 认识 时, 她 是 我 大学 同学.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: When did you and Miss Li first meet<br/>
		B: We met in September, 2011.<br/>
		A: Where did you meet each other?<br/>
		B: We met in our university. She was my classmate.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>1. 认识</td><td>rènshì</td><td>verb</td><td>to meet,<br/>to know</td></tr>
			<tr><td>2. 年</td><td>nián</td><td>noun</td><td>year</td></tr>
			<tr><td>3. 大学</td><td>dàxué</td><td>noun</td><td>college,<br/>university</td></tr>
		</table>
		</div>
	</div>
	<h4 class="textSection">漯文二。在 饭店 门口。</br>Kè wén èr. Zài fàndiàn ménkǒu.</br>Text 2. Outside a hotel</h4>
	<h4 class="sublesson">2. <button class="cd" onclick="play('15-2');">&#128191; 15-2</button>
	<audio controls="" preload="metadata" id="15-2"><source src="../mandarin/audio/15-2.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">	
		<span class="masked">A: </span>Nǐmen shì zěnme lái fàndiàn de?<br/>
		A: 你们 是 怎么 来 饭店 的？<br/>
		<span class="masked">B: </span>Wǒmen shì zuò chūzūchē lái de.<br/>
		B: 我们 是 坐 出租车 来 的。<br/><br/>
		<span class="masked">A: </span>Lǐ xiānshēng ne?<br/>
		A: 李 先生 呢？<br/>
		<span class="masked">B: </span>Tā shì hé péngyǒu yīqǐ kāi chē lái de<br/>
		B: 他 是 和 朋友 一起 开 车 来 的<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: How did you come here?<br/>
		B: We came by taxi.<br/>
		A: What about Mr. Li?<br/>
		B: He drove here with his friend.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>4. 饭店</td><td>fàndiàn</td><td>noun</td><td>hotel,<br/>restaurant</td></tr>
			<tr><td>5. 出租车</td><td>chūzūchē</td><td>noun</td><td>taxi, cab</td></tr>
			<tr><td>6. 一起</td><td>yīqǐ</td><td>adj.</td><td>together</td></tr>
		</table>
		</div>
	</div>
	<h4 class="textSection">漯文三。在 公司。</br>Kè wén èr. Zài gōngsī.</br>Text 2. In the company.</h4>
	<h4 class="sublesson">3. <button class="cd" onclick="play('15-3');">&#128191; 15-3</button>
	<audio controls="" preload="metadata" id="15-3"><source src="../mandarin/audio/15-3.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Hěn gāoxìng rènshì nín, Lǐ xiǎojiě.<br/>
		A: 很 高兴 认识 您，李 小姐。<br/>
		<span class="masked">B: </span>Rènshì nǐ wǒ yě hěn gāoxìng.<br/>
		B: 认识 你 我 也 很 高兴。<br/><br/>
		<span class="masked">A: </span>Tīng Zhāng xiānshēng shuō, nín shì zuò fēijī lái Běijīng de?<br/>
		A: 听 张 先生 说, 您 是 坐 飞机 来 北京 的？<br/>
		<span class="masked">B: </span>Shì de.<br/>
		B: 是 的。<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Nice to meet you, Miss Li.<br/>
		B: Nice to meet you too.<br/>
		A: Mr. Zhang said you came to Beijing by plane, didn't you?<br/>
		B: Yes, I did.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>7. 高兴</td><td>gāoxìng</td><td>adj.</td><td>glad, happy</td></tr>
			<tr><td>8. 听</td><td>tīng</td><td>verb</td><td>to listen</td></tr>
			<tr><td>9. 飞机</td><td>fēijī</td><td>noun</td><td>airplane</td></tr>
		</table>
		</div>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">汪释 Notes</h3>
	<h4 class="sublesson">1. The Structure "<b>是 。。。 的</b>" (<b>shì ... de</b>) used to emphasize time, place or manner</h4>
	<p>When the occurence of something is known, "<b>是 。。。 的</b>" (<b	>shì ... de</b>) can be used to emphasize when, where and in which manner it occured.  "<b>是</b>" (<b>shì</b>) can be omitted in positive and interrogative sentences, but not in negative sentences. For example:</p>
	<table class="table table-condensed table-responsive table-centered">
		<tr><th>Subject</th><th><b>是</b><br/><b>shì</b></th><th>Time/<br/>Place/<br/>Manner</th><th>Verb</th><th><b>的</b><br/><b>de</b></th></tr>
		<tr><td>我<br/>Wǒ<br/>I</td><td><b>是</b><br/>shì<br/>am</td><td>昨天<br/>zuótiān<br/>yesterday</td><td>来<br/>lái<br/>come</td><td><b>的</b><br/><b>de</b></td></tr>
		<tr><td colspan="5"><i>I came yesterday</i></tr>	
		<tr><td>这<br/>Zhè<br/>This</td><td><b>是</b><br/><b>shì</b><br/>is</td><td>在北京<br/>zài Běijīng<br/>in Běijīng</td><td>买<br/>mǎi<br/>buy</td><td><b>的</b><br/><b>de</b></td></tr>
		<tr><td colspan="5"><i>I bought this in Běijīng</i></tr>	
		<tr><td>你们<br/>Nǐmen<br/>You</td><td><b>是</b><br/><b>shì</b><br/>are</td><td>怎么<br/>zěn me<br/>how</td><td>来 饭店<br/>lái fàndiàn<br/>come to hotel</td><td><b>的</b>？<br/><b>de</b>?</td></tr>
		<tr><td colspan="5"><i>How did you come to the hotel?</i></tr>	
	</table>
	<p>The negative form:</p>
	<table class="table table-condensed table-responsive table-centered">
		<tr><th>Subject</th><th>不<br/>bù<th><b>是</b><br/><b>shì</b></th><th>Time/<br/>Place/<br/>Manner</th><th>Verb</th><th><b>的</b><br/><b>de</b></th></tr>	<tr><td>我<br/>Wǒ<br/>I</td><td>不<br/>bù<br/>not</td><td><b>是</b><br/><b>shì</b><br/>am</td><td>昨天<br/>zuótiān<br/>yesterday</td><td>来<br/>lái<br/>come</td><td><b>的</b><br/><b>de</b></td></tr>
		<tr><td colspan="6"><i>I didn't come yesterday</i></tr>	
		<tr><td>这<br/>Zhè<br/>This</td><td>不<br/>bù<br/>not</td><td><b>是</b><br/><b>shì</b><br/>is</td><td>在北京<br/>zài Běijīng<br/>in Běijīng</td><td>买<br/>mǎi<br/>buy</td><td><b>的</b><br/><b>de</b></td></tr>
		<tr><td colspan="6"><i>I didn't buy this in Běijīng</i></tr>	
		<tr><td>我们<br/>Wǒmen<br/>We</td><td>不<br/>bù<br/>not</td><td><b>是</b><br/><b>shì</b><br/>are</td><td>坐出租车<br/>chūzūchē<br/>taxi</td><td>来<br/>lái<br/>come</td><td><b>的</b><br/><b>de</b></td></tr>
		<tr><td colspan="6"><i>I didn't come by taxi</i></tr>	
	</table>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3>拼音 Pinyin</h3>
	<h4>Tone Collocation in Trisyllabic Words (4): words starting with a fourth-tone syllable。
	<button class="cd" onclick="play('15-4');">&#128191; 15-4</button>
	<audio controls="" preload="metadata" id="15-4"><source src="../mandarin/audio/15-4.mp3" type="audio/mpeg">No audio</audio></h4>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th>4+1+1</th><th>4+1+2</th><th>4+1+3</th><th>4+1+4</th></tr>
		<tr><td>diàn bīng xiāng<br/>点冰箱<br/>refrigerator</td><td>Màidāngláo<br/>麦当劳<br/>McDonald's</td><td>jiànshēn guǎn<br/>健身馆<br/>gym</td><td>bàngōngshì<br/>办公室<br/>office</td></tr>
		<tr><th>4+2+1</th><th>4+2+2</th><th>4+2+3</th><th>4+2+4</th></tr>
		<tr><td>Chàng guógē<br/>唱国歌<br/>to sing the national anthem</td><td>kàn zúqiú<br/>看足球<br/>to watch football</td><td>kuàngquán shuǐ<br/>矿泉水<br/>mineral water</td><td>shuànyángròu<br/>涮羊肉<br/>instant-boiled mutton</td></tr>
		<tr><th>4+3+1</th><th>4+3+2</th><th>4+3+3</th><th>4+3+4</th></tr>
		<tr><td>mìmǎxiāng<br/>密码箱<br/>code box</td><td>qìguǎnyán<br/>气管炎<br/>tracheitis</td><td>dàshǐguǎn<br/>大使馆<br/>embassy</td><td>mièhuǒqì<br/>灭火器<br/>fire extinguisher</td></tr>
		<tr><th>4+4+1</th><th>4+4+2</th><th>4+4+3</th><th>4+4+4</th></tr>
		<tr><td>zhàoxiàngjī<br/>照相机<br/>camera</td><td>zànzhùrén<br/>赞助人<br/>sponsor</td><td>diànhuàkǎ<br/>电话卡<br/>phone card</td><td>Àoyùnhuì<br/>奥运会<br/>Olympic Games</td></tr>
	</table>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h4 class="sublesson">1. Single-Component Characters</h4>
	<div class="table">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr><td>年</td><td>nián: year</td><td><div><img class="strokeOrder" src="img/年-order.gif" alt="年"/></div></td></tr>
			<tr><td>出</td><td>chū: to go out</td><td><div><img class="strokeOrder" src="img/出-order.gif" alt="出"/></div></td></tr>
			<tr><td>飞</td><td>fēi: to fly</td><td><div><img class="strokeOrder" src="img/飞-order.gif" alt="飞"/></div></td></tr>
		</table>
	</div>
	<h4 class="sublesson">2 Chinese Radicals "艹" (cǎo) and "宀" (mián)</h4>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="active"><th>Radical</th><th>Explanation</th><th>Examples</th></tr>
			<tr>
				<td><br/>艹</td>
				<td>"艹" (cǎo) is usually<br/>related to the<br/>grass, trees or plants.</td>
				<td>茶 &nbsp; chá &nbsp; tea<br/><br/>菜 &nbsp; cài &nbsp; vegetable</td>
			</tr>
			<tr>
				<td><br/>宀</td>
				<td>"宀" (mián) is usually<br/>related to houses.</td>
				<td>安 &nbsp; ān &nbsp; to settle<br/><br/>家 &nbsp; jiā &nbsp; home</td>
			</tr>
		</table>
	</div>
</div>
<?php
} else { header( 'Location: https://www.stephenmccready.asia/mi/index.php'); }
?>
</body>
</html>
