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
	<title>Level 2 - 14</title>
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
<div class="container-fluid" id="0">
	<div class="jumbotron lessonHeaderLeft">Dì shísì kè.<br/>第 十四 课。<br/>Lesson 14.</div>
	<div class="lessonHeaderRight"><h2>Nǐ kànguò nàgè diànyǐng ma?<br/>你 看过 那个 电影 吗？<br/><b>Have you seen that movie?</b></h2></div>
</div>
<div id="custom-nav" class="clearfix"><p><a href="#2">2</a>&nbsp;<a href="#3">3</a>&nbsp;<a href="#4">4</a>&nbsp;
<a class="custom-nav3" href="#n1">Note 1</a>&nbsp;<a class="custom-nav3" href="#n2">Note 2</a>&nbsp;<a class="custom-nav3" href="#n3">Note 3</a>&nbsp;
<a class="custom-nav3" href="#ex">Excer</a>&nbsp;<a class="custom-nav4" href="#pr">Pronunce</a>&nbsp;<a class="custom-nav3" href="#ch">Chars</a></p></div>

<div id="custom-nav" class="clearfix"><p>
	<a class="btn btn-success btn-huge" href="#2">2</a>&nbsp;
	<a class="btn btn-success btn-huge" href="#3">3</a>&nbsp;
	<a class="btn btn-success btn-huge" href="#4">4</a>&nbsp;
	<a class="btn btn-success btn-huge" href="#n1">Note 1</a>&nbsp;
	<a class="btn btn-success btn-huge" href="#n2">Note 2</a>&nbsp;
	<a class="btn btn-success btn-huge" href="#n3">Note 3</a>&nbsp;
	<a class="btn btn-success btn-huge" href="#ex1">Ex 1</a>&nbsp;
	<a class="btn btn-success btn-huge" href="#ex2">Ex 2</a>&nbsp;
	<a class="btn btn-success btn-huge" href="#ex3">Ex 3</a>&nbsp;
	<a class="btn btn-success btn-huge" href="#ex4">Ex 4</a>&nbsp;
	<a class="btn btn-success btn-huge" href="#pr">Speech</a>&nbsp;
	<a class="btn btn-success btn-huge" href="#ch">Chars</a>&nbsp;

<div class="container-fluid">
	<h4 class="sublesson">1. <button class="cd" onclick="play('02-14-1');">&#128191; 14-1</button>
	<audio controls="" preload="metadata" id="02-14-1"><source src="../mandarin/audio/02-14-1.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén yī. Zài jiàoshì.<br/>漯文一。在 教室。<br/>Text 1. In the classroom.</h4>
	<div class="col-xs-12 col-md-6 col">
		<b>A: </b>Nǐ kànguò nàgè diànyǐng méiyǒu?<br/>
		你 看过 那个 电影 没有？<br/><br/>
		<b>B: </b>Méi kànguò, tīngshuō hěn yǒu yìsi.<br/>
		没 看过，听说 很 有 意思。<br/><br/>
		<b>A: </b>Nà wǒmen xià gè xīngqí yīqǐ qù kàn ba?<br/>
		那 我们 下 个 星期 一起 去 看 吧？<br/><br/>
		<b>B: </b>Kěyǐ, dànshì wǒ nǚ péngyǒu yě xiǎng qù.<br/>
		可以，但是 我 女朋友 也 想 去。<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		<b>A: </b>Have you seen that movie?<br/>
		<b>B: </b>No. I was told it was fantastic.<br/>
		<b>A: </b>Why don't we see it together next week?<br/>
		<b>B: </b>OK, But my girlfriend also wants to go.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>有 意思</td><td>yǒu yìsi</td><td></td><td>interesting, fun</td></tr>
			<tr><td>但是</td><td>dànshì</td><td>conj.</td><td>but, still, yet</td></tr>
		</table>
		</div>
	</div>
	<div id="2" class="clearfix"><a href="#0"> Back to top</a></div>
	<h4 class="sublesson">2. <button class="cd" onclick="play('02-14-2');">&#128191; 14-2</button>
	<audio controls="" preload="metadata" id="02-14-2"><source src="../mandarin/audio/02-14-2.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén èr. Zài bàngōngshì.<br/>漯文二。在办公室.<br/>Text 2. In the office.</h4>
	<div class="col-xs-12 col-md-6 col">
		<b>A: </b>Tīng shuō nǐ qùguò Zhōngguó, hái xiǎng qù ma?<br/>
		听说 你 去过 中国，还 想 去 吗？<br/><br/>
		<b>B: </b>Wǒ suīrán qùguò hǎojǐ cì, dànshì hái xiǎng zài qù wánrwánr.<br/>
		我 虽然 去过 好几 次，但是 还 想 再 去 玩儿玩儿。<br/><br/>
		<b>A: </b>Nà wǒmen yīqǐ qù ba.<br/>
		那 我们 一起 去 吧。<br/><br/>
		<b>B: </b>Hǎo a, dào shíhòu wǒ gěi nǐ dǎ diànhuà.<br/>
		好 啊，到 时候 我 给 你 打 电话。<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		<b>A: </b>It's said you've been to China. Do you want to go there again?<br/>
		<b>B: </b>Though I've been there several times, I still want to go for pleasure again.<br/>
		<b>A: </b>Let's go together.<br/>
		<b>B: </b>Great. I'll call you then.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>虽然</td><td>suīrán</td><td>conj.</td><td>although, though</td></tr>
			<tr><td>次</td><td>cì</td><td>m.</td><td>time</td></tr>
			<tr><td>玩儿</td><td>wánr</td><td>verb</td><td>to play,<br/>to have fun</td></tr>
		</table>
		</div>
	</div>
	<div id="3" class="clearfix"><a href="#0"> Back to top</a></div>
	<h4 class="sublesson">3. <button class="cd" onclick="play('02-14-3');">&#128191; 14-3</button>
	<audio controls="" preload="metadata" id="02-14-3"><source src="../mandarin/audio/02-14-3.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén sān. Zài fángjiān lǐ.<br/>漯文三。在 房间 里。<br/>Text 3. In the room.</h4>
	<div class="col-xs-12 col-md-6 col">
		<b>A: </b>Míngtiān tiānqì zěnmeyàng?<br/>
		明天 天气 怎么样？<br/><br/>
		<b>B: </b>Suīrán shì qíngtiān, dànshì hěn lěng.<br/>
		虽然 是 晴天，但是 很 冷。<br/><br/>
		<b>A: </b>Nà hái néng qù pǎobù ma?<br/>
		那 还 能 去 跑步 吗？<br/><br/>
		<b>B: </b>Kěyǐ, dànshì nǐ zìjǐ qù ba, wǒ hái yǒu hěnduō shìqíng yào zuò.<br/>
		可以，但是 你 自己 去 吧，我 还 有 很 多 事情 要 做。<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		<b>A: </b>How will the weather be tomorrow?<br/>
		<b>B: </b>It will be fine, but cold.<br/>
		<b>A: </b>In that case, is it okay to go jogging?<br/>
		<b>B: </b>I think so. But I'm afraid you have to go by yourself because I have a lot of work to do<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>晴</td><td>qíng</td><td>adj.</td><td>sunny, clear</td></tr>
		</table>
		</div>
	</div>
	<div class="clearfix"></div>
	<h4 class="sublesson">4. <button class="cd" onclick="play('02-14-4');">&#128191; 14-4</button>
	<audio controls="" preload="metadata" id="02-14-4"><source src="../mandarin/audio/02-14-4.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">Kè wén sì. Zài shāngdiàn.<br/>漯文四。在 商店。<br/>Text 4. In a store.</h4>
	<div class="col-xs-12 col-md-6 col">
		<b>A: </b>Nǐ zài zhège shāngdiàn mǎiguò dōngxī méiyǒu?<br/>
		你 在 这个 商店 买过 东西 没有？<br/><br/>
		<b>B: </b>Mǎiguò yīcì, zhèr de dōngxī hái kěyǐ, jiùshì bù piányí.<br/>
		买过 一次，这儿 的 东西 还 可以，就是 不 便宜。<br/><br/>
		<b>A: </b>Wǒ xǐhuān zhè jiàn yīfú, dànshì juédé yǒudiǎnr guì.<br/>
		我 喜欢 这 件 衣服，但是 觉得 有点儿 贵。<br/><br/>
		<b>B: </b>Liǎngbǎi kuài hái kěyǐ, xǐhuān jiù mǎi ba.<br/>
		两百 块 还 可以， 喜欢 就 买 吧。<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		<b>A: </b>Have you ever bought anything in this store?<br/>
		<b>B: </b>Yes, once. Things here are pretty good, not cheap though.<br/>
		<b>A: </b>I like this garment, but I think it's a little expensive.<br/>
		<b>B: </b>Two hundred <i>yuan</i> is not that expensive. If you like it, just buy it.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>百</td><td>bǎi</td><td>num.</td><td>hundred</td></tr>
		</table>
		</div>
	</div>
</div>
<div id="n1" class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">汪释 Notes</h3>
	<h4 class="sublesson">1. The Structural Particle "<b>过</b>" (<b>guò</b>)</h4>
	<p>A verb followed by the structural particle "<b>过</b>" (<b>guò</b>) usually indicates a past experience action which hasn't lasted to the present. For example:</p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th rowspan="2">Subject</th><th colspan="3">Predicate</th></tr>
		<tr><th>Verb</th><th><b>过</b> (<b>guò</b>)</th><th>Object</th></tr>
		<tr><td>他们<br/>Tāmen<br/>They</td><td>来<br/>lái<br/>came to</td><td><b>过</b><br/><b>guò</b></td><td>我家。<br/>wǒjiā<br/>my home.</td></tr>
		<tr><td>我<br/>Wǒ<br/>I</td><td>看<br/>kàn<br/>saw</td><td><b>过</b><br/><b>guò</b></td><td>	那个电影。<br/>nàgè diànyǐng.<br/>that movie.</td></tr>
		<tr><td>我<br/>Wǒ<br/>I</td><td>去<br/>qù<br/>went to</td><td><b>过</b><br/><b>guò</b></td><td>中国。<br/>Zhōngguó<br/>China</td></tr>
	</table>
	<p>In the negative form "<b>没</b>(<b>有</b>)" <b>méi (yǒu)</b> is added before the verb. For example:</p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th rowspan="2">Subject</th><th colspan="3">Predicate</th></tr>
		<tr><th><b>没</b>(<b>有</b>)+Verb</th><th><b>过</b> (<b>guò</b>)</th><th>Object</th></tr>
		<tr><td>他们<br/>Tāmen<br/>They</td><td><b>没</b>(<b>有</b>) 来<br/><b>méi (yǒu)</b> lái<br/>have never came to</td><td><b>过</b><br/><b>guò</b></td><td>我家。<br/>wǒjiā<br/>my home.</td></tr>
		<tr><td>我<br/>Wǒ<br/>I</td><td><b>没</b>(<b>有</b>) 看<br/><b>méi (yǒu)</b> kàn<br/>have never saw</td><td><b>过</b><br/><b>guò</b></td><td>	那个电影。<br/>nàgè diànyǐng.<br/>that movie.</td></tr>
		<tr><td>我<br/>Wǒ<br/>I</td><td><b>没</b>(<b>有</b>) 去<br/><b>méi (yǒu)</b> qù<br/>have never went to</td><td><b>过</b><br/><b>guò</b></td><td>中国。<br/>Zhōngguó<br/>China</td></tr>
	</table>
	<p>In the interrogative form "<b>没有</b>" (<b>méiyǒu</b>) is added at the end of the sentence. For example:</p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th rowspan="2">Subject</th><th colspan="3">Predicate</th></tr>
		<tr><th>Verb</th><th><b>过</b> (<b>guò</b>)</th><th>Object + <b>没有</b></th></tr>
		<tr><td>他们<br/>Tāmen<br/>They</td><td>来<br/>lái<br/>came to</td><td><b>过</b><br/><b>guò</b></td><td>你家<b>没有</b>。<br/>nǐjiā <b>méiyǒu</b>?<br/>your home.</td></tr>
		<tr><td colspan="4"><i>Have they been to your home?</i></td></tr>
		<tr><td>你<br/>Nǐ<br/>You</td><td>看<br/>kàn<br/>saw</td><td><b>过</b><br/><b>guò</b></td><td>那个电影<b>没有</b>。<br/>nàgè diànyǐng <b>méiyǒu</b>?<br/>that movie.</td></tr>
		<tr><td colspan="4"><i>Have you seen that movie?</i></td></tr>
		<tr><td>你<br/>Nǐ<br/>You</td><td>去<br/>qù<br/>went to</td><td><b>过</b><br/><b>guò</b></td><td>中国<b>没有</b>。<br/>Zhōngguó <b>méiyǒu</b>?<br/>China</td></tr>
		<tr><td colspan="4"><i>Have you been to China?</i></td></tr>
	</table>
	<h4 id="n2" class="sublesson">2. The pair of conjunctions “<b>虽然</b>... , <b>但是</b>..." (<b>Suīrán</b>... , <b>dànshì</b>... : Although... , but...)</h4>
	<p>The conjunctions “<b>虽然</b>... , <b>但是</b>..." (<b>Suīrán</b>... , <b>dànshì</b>... : Although... , but...) connect two clauses, forming a complex sentence indicating an adversative relation. For example:</p>
	<ol>
		<li><b>虽然</b> 外面 很 冷，<b>但是</b> 房间 里 很 热。<br/><b>Suīrán</b> wàimiàn hěn lěng, <b>dànshì</b> fángjiān lǐ hěn rè.<br/>Although it's very cold otside, inside the room it's very hot.</li>
		<li><b>虽然</b> 汉字 很 难，<b>但是</b> 我 很 喜欢 写 汉字。<br/><b>Suīrán</b> Hànzì hěn nán, <b>dànshì</b> wǒ hěn xǐhuān xiě Hànzì.<br/>Chinese characters are hard, but I like to write them.</li>
		<li><b>虽然</b> 是晴天，<b>但是</b>  很 冷。<br/><b>Suīrán</b> shì qíngtiān, <b>dànshì</b> hěn lěng.<br/>It is sunny, but very cold.</li>
	</ol>
	<h4 id="n3" class="sublesson">3.  The Complement of Frequency "<b>次</b>" (<b>cì</b>: times)</h4>
	<p>The complement of frequency "<b>次</b>" (<b>cì</b>: times) is usually used after the predicate verb, indicating the number of times that an action has taken place. For example:</p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th rowspan="2" >Subject</th><th colspan="4">Predicate</th></tr>
		<tr><th>Verb</th><th><b>过</b> (guò)</th><th>Num + <b>次</b> (cì)</th><th>Obj</th></tr>
		<tr><td>我们<br/>Wǒmen<br/>We</td><td>看<br/>kàn<br/>look</td><td><b>过</b><br/>guò</td><td>三<b>次</b><br/>sān<b>cì</b><br/>3 times</td><td>电影<br/>diànyǐng<br/>the movie</td></tr>
		<tr><td colspan="5"><i>We saw the movie 3 times</i></td></tr>
		<tr><td>他们<br/>Tāmen<br/>They</td><td>坐<br/>zuò<br/>travel by</td><td><b>过</b><br/>guò</td><td>一<b>次</b><br/>yī<b>cì</b><br/>once</td><td>飞机<br/>fēijī<br/>airplane</td></tr>
		<tr><td colspan="5"><i>They travelled by airplane once</i></td></tr>
		<tr><td>我<br/>Wǒ<br/>I</td><td>（在这个商店）买<br/>(zài zhège shāngdiàn) mǎi<br/>(in this store) to buy</td><td><b>过</b><br/>guò</td><td>一<b>次</b><br/>yī<b>cì</b><br/>once</td><td>（东西）<br/>dōngxī<br/>things</td></tr>
		<tr><td colspan="5"><i>I bought things in the store once.</i></td></tr>
	</table>
	<p>When the object of a verb is a place, the complement of frequency can be put either before or after the object. For example:</p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th rowspan="2" >Subject</th><th colspan="4">Predicate</th></tr>
		<tr><th>Verb</th><th><b>过</b> (<b>guò</b>)</th><th>Num + <b>次</b> (<b>cì</b>)</th><th>Obj</th></tr>
		<tr><td>我们<br/>Wǒmen<br/>We</td><td>去<br/>qù<br/>go to</td><td><b>过</b><br/><b>guò</b></td><td>三<b>次</b><br/>sān<b>cì</b><br/>3 times</td><td>北京<br/>Běijīng</td></tr>
		<tr><td colspan="5"><i>We went to Beijing 3 times</i></td></tr>
		<tr><td>他们<br/>Tāmen<br/>They</td><td>来<br/>lái<br/>came</td><td><b>过</b><br/><b>guò</b></td><td>一<b>次</b><br/>yī<b>cì</b><br/>once</td><td>中国<br/>Zhōngguó<br/>China</td></tr>
		<tr><td colspan="5"><i>They came to China once</i></td></tr>
		<tr><td>我<br/>Wǒ<br/>I</td><td>（上星期）去<br/>(shàng xīngqí) qù<br/>(last week) went to buy</td><td><b>过</b><br/><b>guò</b></td><td>一<b>次</b><br/>yī<b>cì</b><br/>once</td><td>医院<br/>yīyuàn<br/>hospital</td></tr>
		<tr><td colspan="5"><i>Last week I went to the hospital once.</i></td></tr>
	</table>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th rowspan="2" >Subject</th><th colspan="4">Predicate</th></tr>
		<tr><th>Verb</th><th><b>过</b> (<b>guò</b>)</th><th>Obj</th><th>Num + <b>次</b> (<b>cì</b>)</th></tr>
		<tr><td>我们<br/>Wǒmen<br/>We</td><td>去<br/>qù<br/>go to</td><td><b>过</b><br/><b>guò</b></td><td>北京<br/>Běijīng</td><td>三<b>次</b><br/>sān<b>cì</b><br/>3 times</td></tr>
		<tr><td colspan="5"><i>We went to Beijing 3 times</i></td></tr>
		<tr><td>他们<br/>Tāmen<br/>They</td><td>来<br/>lái<br/>came</td><td><b>过</b><br/><b>guò</b></td><td>中国<br/>Zhōngguó<br/>China</td><td>一<b>次</b><br/>yī<b>cì</b><br/>once</td></tr>
		<tr><td colspan="5"><i>They came to China once</i></td></tr>
		<tr><td>我<br/>Wǒ<br/>I</td><td>（上星期）去<br/>(shàng xīngqí) qù<br/>(last week) went to buy</td><td><b>过</b><br/><b>guò</b></td><td>医院<br/>yīyuàn<br/>hospital</td><td>一<b>次</b><br/>yī<b>cì</b><br/>once</td></tr>
		<tr><td colspan="5"><i>Last week I went to the hospital once.</i></td></tr>
	</table>
	<p>When the object is a personal pronoun, the complement of frequency should be put after the object. For example:</p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th rowspan="2" >Subject</th><th colspan="4">Predicate</th></tr>
		<tr><th>Verb</th><th><b>过</b> (<b>guò</b>)</th><th>Obj</th><th>Num + <b>次</b> (<b>cì</b>)</th></tr>
		<tr><td>我们<br/>Wǒmen<br/>We</td><td>找<br/>zhǎo<br/>looked for</td><td><b>过</b><br/><b>guò</b></td><td>他<br/>tā<br/>him</td><td>三<b>次</b><br/>sān<b>cì</b><br/>3 times</td></tr>
		<tr><td>他们<br/>Tāmen<br/>They</td><td>看<br/>kàn<br/>saw</td><td><b>过</b><br/><b>guò</b></td><td>我<br/>Wǒ<br/>me</td><td>一<b>次</b><br/>yī<b>cì</b><br/>once</td></tr>
		<tr><td>老师<br/>Lǎoshī<br/>Teacher</td><td>叫<br/>jiào<br/>called</td><td><b>过</b><br/><b>guò</b></td><td>我<br/>Wǒ<br/>me</td><td>两<b>次</b><br/>liǎng<b>cì</b><br/>twice</td></tr>
	</table>
	
</div>
<div id="ex1" class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">练习 (liàn xí) Exercises</h3>
	<h4 class="sublesson">1. Role-play the dialogues</h4>
	<h4 class="sublesson">2. Answer the questions according to the actual situations</h4>
		<div class="col-xs-12 col-md-6 col">
		他们 看过 那个 电影 吗？<br/>
			<button type="button" id="n11" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g11" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn11">Tāmen kànguò nàgè diànyǐng ma?<br/></span>
		<span class="eng" id="eng11">Have they seen that movie?<br/></span>
		<br/>
		他们 想 几 个 人 去 看 电影？<br/>
			<button type="button" id="n12" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g12" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn12">Tāmen xiǎng jǐ gè rén qù kàn diànyǐng?<br/></span>
		<span class="eng" id="eng12">How many people want to go to see a movie?<br/></span>
		<br/>
		他们 想 来 中国 做 什么？<br/>
			<button type="button" id="n13" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g13" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn13">Tāmen xiǎng lái Zhōngguó zuò shénme?<br/></span>
		<span class="eng" id="eng13">What do they want to do in China?<br/></span>
		<br/>
		为什么 他 明天 不 能 去 跑步？<br/>
			<button type="button" id="n14" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g14" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn14">Wèishéme tā míngtiān bùnéng qù pǎobù?<br/></span>
		<span class="eng" id="eng14">Why can't he go running tomorrow?<br/></span>
		<br/>
		女的 觉得 这个 商店 的 东西 怎么样？<br/>
			<button type="button" id="n15" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g15" onclick="myToggle(this.id);">英语</button><br/>
		<span class="pyn" id="pyn15">Nǚde juédé zhège shāngdiàn de dōngxī zěnmeyàng?<br/></span>
		<span class="eng" id="eng15">What do women think of the things in this store?<br/></span>
		<br/>
	</div>
</div>

<div id="pr" class="dash"></div>
<div class="container-fluid">
	<h3>语音 (yǔyīn) Pronounciation</h3>
	<h4><button class="cd" onclick="play('02-14-5');">&#128191; 14-5</button>
	<audio controls="" preload="metadata" id="02-14-5"><source src="../mandarin/audio/02-14-5.mp3" type="audio/mpeg">No audio</audio>
	<br/>Intonation of an Exclamatory Sentence</h4>
	<p>A Chinese exclamatory sentence usually has a falling intonation. For example:</p>
	<ol>
		<li>
			<span class="pynD">Jīntiān tiānqì zhēn hǎo a!</span><br/>
			<span class="xhanD">今天 天气 真 好 啊！</span>⤵<br/>
			<span class="engD">Nice weather today!</span>
		</li>
		<li>
			<span class="pynD">Zhège Hànzì zhēn nán xiě a!</span><br/>
			<span class="xhanD">这个 汉字 真 难 写 啊！</span>⤵<br/>
			<span class="engD">This Chinese character is really hard to write!</span>
		</li>
		<li>
			<span class="pynD">Zhè jiàn yīfú tài piàoliangle!</span><br/>
			<span class="xhanD">这 件 衣服 太 漂亮 了！</span>⤵<br/>
			<span class="engD">This dress is so beautiful!</span>
		</li>
	</ol>
</div>
<div id="ch" class="container-fluid">
	<h3>汉字 Characters</h3>
	<h4 class="sublesson">Chinese Radicals "⻗" (yǔ) and "⻉" (bèi)</h4>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="active"><th>Radical</th><th>Explanation</th><th>Examples</th></tr>
			<tr>
				<td>⻗<br/>yǔ</td><td>related to clouds and rain<b></b></td>
				<td>雪&nbsp;xuě&nbsp;snow<br/>雾&nbsp;wù&nbsp;fog</td>
			</tr>
			<tr>
				<td>⻉<br/>bèi</td><td>related to money or utensils<b></b></td>
				<td>财&nbsp;cái&nbsp;wealth, money<br/>货&nbsp;huò&nbsp;goods, commodities</td>
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
