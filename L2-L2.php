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
	<title>Level 2 - 2</title>
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
	<div class="jumbotron lessonHeaderLeft">Dì èr kè<br/>第二课<br/>Lesson 2</div>
	<div class="lessonHeaderRight">
	  <h2>Wǒ měi tiān liù diǎn qǐ chuáng<br/>我 每 天 六 点 起 床<br/><b>I get up at six every day</b></h2>
	</div>
</div>
<div class="container-fluid">
	<h4 class="sublesson">1. <button class="cd" onclick="play('02-02-1');">&#128191; 2-1</button>
	<audio controls="" preload="metadata" id="02-02-1"><source src="../mandarin/audio/02-02-1.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">2.1. Kè wén yī. Zài Yùndòngchǎng.<br/>漯文一。在 运动场<br/>Text 1. On the playground.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Nǐ hěn shǎo shēngbìng, shì bushì xǐhuan yùndòng?<br/>
		A: 你 很 少 生病， 是 不是 喜欢 运动？<br/><br/>
		<span class="masked">B: </span>Shì a, wǒ měitiān zǎoshang dōu yào chūqù pǎobù.<br/>
		B: 是 啊， 我 每天 早上 都 要 出去 跑步。<br/><br/>
		<span class="masked">A: </span>Nǐ měitiān jǐ diǎn qǐ chuáng？<br/>
		A: 你 每天 几 点 起床？<br/><br/>
		<span class="masked">B: </span>Wǒ měitiān liù diǎn qǐchuáng<br/>
		B: 我 每天 六 点 起 床<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: You seldom get sick. I guess you like doing sports, don't you?<br/>
		B: Yes, I go out for a jog every morning<br/>
		A: What time do you get up?<br/>
		B: I get up at six every day<br/>
		<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>生病</td><td>shēngbìng</td><td>verb</td><td>to fall ill,<br/>to be sick</td></tr>
			<tr><td>每</td><td>měi</td><td>pron.</td><td>every, each</td></tr>
			<tr><td>早上</td><td>zǎoshang</td><td>noun</td><td>morning</td></tr>
			<tr><td>跑步</td><td>pǎobù</td><td>verb</td><td>to run, to jog</td></tr>
			<tr><td>起床</td><td>qǐchuáng</td><td>verb</td><td>to get up,<br/>to get out of bed</td></tr>
		</table>
		</div>
	</div>
	<div class="clearfix"></div>
	<h4 class="sublesson">2. <button class="cd" onclick="play('02-02-2');">&#128191; 2-2</button>
	<audio controls="" preload="metadata" id="02-02-2"><source src="../mandarin/audio/02-02-2.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">2.2. Kè wén èr. Zài yīyuàn.<br/>漯文二。在医院。<br/>Text 2. In the hospital.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Chī yàole ma? Xiànzài shēntǐ zěnmeyàng?<br/>
		A: 吃 药了 吗？ 现在 身体 怎么样？<br/><br/>
		<span class="masked">B: </span>Chīle. Xiànzài hǎoduōle<br/>
		B: 吃了。 现在 好多了。<br/><br/>
		<span class="masked">A: </span>Shénme shíhòu néng chūyuàn?<br/>
		A: 什么 时候 能 出院？<br/><br/>
		<span class="masked">B: </span>Yīshēng shuō xià gè xīngqí.<br/>
		B: 医生 说 下 个 星期。<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Did you take your medicine? How do you feel now?<br/>
		B: Yes, I did. I feel much better now.<br/>
		A: When can you leave the hospital?<br/>
		B: Next week according to the doctor.<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>药</td><td>yào</td><td>noun</td><td>medicine,<br/>drug</td></tr>
			<tr><td>身体</td><td>shēntǐ</td><td>noun</td><td>body</td></tr>
			<tr><td>出院</td><td>chū yuàn</td><td>verb</td><td>to leave hospital<br/>to be discharged<br/>from hospital</td></tr>
			<tr><td>出</td><td>chū</td><td>verb</td><td>to come/<br/>go out</td></tr>
		</table>
		</div>
	</div>
	<div class="clearfix"></div>
	<h4 class="sublesson">3. <button class="cd" onclick="play('02-02-3');">&#128191; 2-3</button>
	<audio controls="" preload="metadata" id="02-02-3"><source src="../mandarin/audio/02-02-3.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">2.3.&nbsp;Kè wén sān. Zài cāochǎng.<br/>漯文三。 在 操场。Text 3. On the playground.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Dà wèi jīnnián duōdà?<br/>
		A: 大卫 今年 多大？<br/><br/>
		<span class="masked">B: </span>Èrshí duō suì.<br/>
		B: 二十 多岁。<br/><br/>
		<span class="masked">A: </span>Tā duō gāo?<br/>
		A: 他 多 高？<br/><br/>
		<span class="masked">B: </span>Yī mǐ bā jǐ.<br/>
		B: 一 米 八 几。<br/><br/>
		<span class="masked">A: </span>Nǐ zěnme zhīdào zhème duō a?<br/>
		A: 你 怎么 知道 这么 多 啊？<br/><br/>
		<span class="masked">B: </span>Tā shì wǒ tóngxué.<br/>
		B: 他 是 我 同学。<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: How old is David?<br/>
		B: More than 20 years old<br/>
		A: How tall is he?<br/>
		B: More than 180 centimeters tall.<br/>
		A: How come you know so much about him?<br/>
		B: He is my classmate.
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>高</td><td>gāo</td><td>adj.</td><td>tall, high</td></tr>
			<tr><td>米</td><td>mǐ</td><td>meas.</td><td>meter</td></tr>
			<tr><td>知道</td><td>zhīdào</td><td>verb</td><td>to know</td></tr>
		</table>
		</div>
	</div>
	<div class="clearfix"></div>
	<h4 class="sublesson">4. <button class="cd" onclick="play('02-02-4');">&#128191; 2-4</button>
	<audio controls="" preload="metadata" id="02-02-4"><source src="../mandarin/audio/02-02-4.mp3" type="audio/mpeg">No audio</audio></h4>
	<h4 class="textSection">2.4. Kè wén sì. Zài fángjiān.<br/>漯文四。 在 房间<br/>Text 4. In the room.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Zhāng lǎoshī xīngqíliù yě bù xiūxí a?<br/>
		A: 张 老师 星期六 也 不 休息 啊？<br/><br/>
		<span class="masked">B: </span>Shì a, tā zhè jǐ tiān hěn máng, méiyǒu shíjiān xiūxí.<br/>
		B: 是 啊，他 这 几 天 很 忙， 没有 时间 休息。<br/><br/>
		<span class="masked">A: </span>Nà huì hěn lèi ba?<br/>
		A: 那 会 很 累 吧？<br/><br/>
		<span class="masked">B: </span>Tā měi tiān huílái dōu hěn lèi.<br/>
		B: 他 每 天 回来 都 很 累。<br/><br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Doesn't Mr. Zhang take Saturday off?<br/>
		B: No. He has been busy lately. He has no time to rest.<br/>
		A: That must be really tiring?<br/>
		B: Every day he comes home exhausted.<br/>
		<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>休息</td><td>xiūxí</td><td>verb</td><td>to have or<br/>to take a rest</td></tr>
			<tr><td>忙</td><td>máng</td><td>adj.</td><td>busy</td></tr>
			<tr><td>时间</td><td>shíjiān</td><td>noun</td><td>time</td></tr>
		</table>
		</div>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">汪释 Notes</h3>
	<h4 class="sublesson">1. Questions using "<b>是 不是</b>" (<b>shì bùshì</b>: literally yes or no)</h4>
	<p>If one raises a question and is some how certain about a fact or situation, they can use this kind of question to confirm their guess. "<b>是 不是</b>" (<b>shì bùshì</b>: literally yes or no) is usually used before the predicate or at the beginning or end of a sentence. For example:</p>
	<ol>
		<li>你 很 少 生病，<b>是 不是</b> 喜欢 运动？<br/>Nǐ hěn shǎo shēngbìng, <b>shì bùshì</b> xǐhuān yùndòng<br/>You seldom get sick. I guess you like doing sports, don't you?<br/></li>
		<li><b>是 不是</b> 明天 爸爸 休息？<br/><b>Shì bùshì</b> míngtiān bàba xiūxí?<br/>Will your father rest tomorrow?<br/></li>
		<li>我们 星期一 去 北京，<b>是 不是？</b><br/>Wǒmen xīngqíyī qù Běijīng, <b>shì bùshì?</b><br/>Are we going to Beijing on Monday?</li>
	</ol>
	<h4 class="sublesson">2. The pronoun "<b>每</b>" (<b>měi</b>: every, each)</h4>
	<p>"<b>每</b>" (<b>měi</b>: every, each) is used before a measure word, indicating each or every individual or group in the whole, for example:
	<br/>"<b>每</b>天" (<b>měi</b> tiān: every day), 
	<br/>"<b>每</b>年" (<b>měi</b> nián: every year),
	<br/>"<b>每</b>个月" (<b>měi</b> gè yuè: every month),
	<br/>"<b>每</b>个星期" (<b>měi</b> gè xīngqí: every week).
	<br/>For example:</p>
	<ol>
		<li>山 姆 <b>每</b>年 去 中国 旅游。<br/>Shānmǔ <b>měi</b>nián qù Zhōngguó lǚyóu.<br/>Sam travels to China every year.<br/></li>
		<li>你 <b>每</b> 个 星期六 者 工作 吗？<br/>Nǐ <b>měi</b> gè xīngqíliù zhě gōngzuò ma?<br/>Do you work every Saturday?<br/></li>
		<li>我 <b>每</b>天 六 点 起床。<br/>Wǒ <b>měi</b>tiān liù diǎn qǐchuáng.<br/>I get up at six o'clock every day.</li>
	</ol>
	<h4 class="sublesson">3. The interrogative pronoun "<b>多</b>" (<b>duō</b>: many)</h4>
	<p>The interrogative pronoun "<b>多</b>" (<b>duō</b>: many) is used before an adjective, asking about the degree of something. A specific quantity should be given to answer the question. For example:</p>
	<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><th><br/>Subject</th><th><b>多</b><br/><b>duō</b></th><th>形容词<br/><i>Xíngróngcí<br/>Adjective</i></th></tr>
		<tr><td>你<br/>Nǐ<br/>You</td><td><b>多</b><br/><b>duō</b><br/></td><td>大？<br/>dà?<br/>old?</td></tr>
		<tr><td colspan="3"><i>How old are you?</i></td></tr>
		<tr><td>大卫<br/>Dàwèi<br/>David</td><td><b>多</b><br/><b>duō</b><br/></td><td>高？<br/>gāo?<br/>tall?</td></tr>
		<tr><td colspan="3"><i>How tall is David?</i></td></tr>
		<tr><td>他<br/>Tā<br/>He</td><td><b>多</b><br/><b>duō</b><br/></td><td>高？<br/>gāo?<br/>tall?</td></tr>
		<tr><td colspan="3"><i>How tall is he?</i></td></tr>
	</table>
	<ol>
		<li>A: 你 <b>多</b>大？<br/>Nǐ <b>duō</b>dà?<br/>How old are you?
			<br/>B：我 16 岁	。<br/>Wǒ shíliù suì.<br/>I am 16 years old.<br/></li>
		<li>A: 王 医生 的 儿子 <b>多</b> 高？ <br/>Wáng yīshēng de érzi <b>duō</b> gāo?<br/>How tall is Dr. Wang's son?
			<br/>B: 他 儿子 一 米 七。<br/>Tā érzi yī mǐ qī.<br/>His son is about one meter seventy tall.<br/></li>
		<li>A: 他 <b>多</b> 高？<br/>Tā <b>duō</b> gāo.<br/>How tall is he?
			<br/>B: 一 米 吧 几。<br/>Yī mǐ ba jǐ.<br/>About 1 meter 80 centimaters.</li>
	</ol>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">练习 (liàn xí) Exercises</h3>
	<h4 class="sublesson">1. Role-play the dialogues</h4>
	<h4 class="sublesson">2. Answer the questions according to the actual situations</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="han hanzi11">他 为什么 很 少 生病？<br/>
			<button type="button" id="n11" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g11" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn11">Tā wèishéme hěn shǎo shēngbìng?<br/></span>
		<span class="eng" id="eng11">Why is he seldom ill?<br/></span>
		<br/>
		<span class="han hanzi12">他 每天 几 点 起床？<br/>
			<button type="button" id="n12" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g12" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn12">Tā měitiān jǐ diǎn qǐchuáng?<br/></span>
		<span class="eng" id="eng12">What time does he get up every day?<br/></span>
		<br/>
		<span class="han hanzi13">他 现在 身体 怎么样？<br/>
			<button type="button" id="n13" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g13" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn13">Tā xiànzài shēntǐ zěnmeyàng?<br/></span>
		<span class="eng" id="eng13">How is he now?<br/></span>
		<br/>
		<span class="han hanzi14">大卫 今年 多高？ 多 大？<br/>
			<button type="button" id="n14" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g14" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn14">Dàwèi jīnnián duō gāo? Duōdà?<br/></span>
		<span class="eng" id="eng14">How tall is David? How old?<br/></span>
		<br/>
		<span class="han hanzi15">张 老师 星期六 休息 吗？<br/>
			<button type="button" id="n15" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g15" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn15">Zhāng lǎoshī xīngqíliù xiūxí ma?<br/></span>
		<span class="eng" id="eng15">Does teacher Zhang rest on Saturday?<br/></span>
		<br/>
	</div>
	<div class="clearfix"><span class="glyphicon glyphicon-chevron-up"></span><a href="#0"> Back to top</a></div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3>语音 (yǔyīn) Pronounciation</h3>
	<h4>Stress in Trisyllabic words</h4>
	<button class="cd" onclick="play('02-02-5');">&#128191; 2-5</button>
	<audio controls="" preload="metadata" id="02-02-5"><source src="../mandarin/audio/02-02-5.mp3" type="audio/mpeg">No audio</audio>
	<h4>(1) Medium-stressed + Light + <b>Stressed</b> Structure</h4>
	<p>Most trisyllabic words fall into this type of structure. For example:</p>
	<table class="table table-condensed table-responsive table-centered table-borderless">
		<tr><td>shōuyīn<b>jī</b><br/>收音<b>机</b><br/>radio</td>
			<td>Xīnjiā<b>pō</b><br/>新加<b>坡</b><br/>Singapore</td>
			<td>Hǎolái<b>wù</b><br/>好莱<b>坞</b><br/>Hollywood</td>
			<td>diànshì<b>jù</b><br/>电视<b>剧</b><br/>soap opera</td></tr>
	</table>
	<h4>(2) Medium Stressed + <b>Stressed</b> + light Structure</h4>
	<p>A small number of trisyllabic words belong to this type, in which the first syllable is stressed and the long and the second is light and short. For example:</p>
	<table class="table table-condensed table-responsive table-centered table-borderless">
		<tr><td>hú<b>luó</b>bo<br/>胡<b>萝</b>卜<br/>carrot</td>
			<td>méi<b>guān</b>xi<br/>没<b>关</b>系<br/>it doesn't matter</td>
			<td>lǎo<b>hú</b>li<br/>老<b>狐</b>狸<br/>old fox</td>
			<td>máo<b>hái</b>zi<br/>毛<b>孩</b>子<br/>kid, infant</td></tr>
	</table>
	<h4>(3) <b>Stressed</b> + light  + light Structure</h4>
	<p>A small number of trisyllabic words belong to this type, in which the first syllable is stressed and the long and the second is light and short. For example:</p>
	<table class="table table-condensed table-responsive table-centered table-borderless">
		<tr><td><b>shén</b>mede<br/><b>什</b>么的<br/>and so on</td>
			<td><b>guài</b>bude<br/><b>怪</b>不得<br/>no wonder!</td>
			<td><b>gū</b>niangjia<br/><b>姑</b>娘家<br/>aunt's home</td>
			<td><b>hǎo</b> zhe ne<br/><b>好</b>着呢<br/>quite good</td></tr>
	</table>
	<div class="clearfix"><span class="glyphicon glyphicon-chevron-up"></span><a href="#0"> Back to top</a></div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3>汉字 Characters</h3>
	<h4 class="sublesson">1. Strokes of Chinese Characters (6)</h4>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="active">
				<th>笔画名称<br/>bǐ huà<br/>míng chēng<br/>Stroke</th>
				<th>运笔方向<br/>yùn bǐ<br/>fāng xiàng<br/>Direction</th>
				<th>例字<br/>lì zì<br/>Example<br/>Characters</th>
			</tr>
			<tr>
				<td>横撇弯钩<br/>héngpiěwāngōu<br/>Horizontal Left Falling Curved Hook</td>
				<td><img style="width: 3em;" src="img/hengpiewangou.png" alt="héngpiěwāngōu"/></td>
				<td>队&nbsp;duì&nbsp;team<br/>阵&nbsp;zhèn&nbsp;battle array</td>
			</tr>
			<tr>
				<td>横折折撇<br/>héngzhézhépiē<br/>Horizontal Double Turning Left Falling<br/><br/></td>
				<td><img style="width: 2em;" src="img/hengzhezhepie.png" alt="héngzhézhépiē"/></td>
				<td>及&nbsp;jí&nbsp;	to reach<br/>极&nbsp;jí&nbsp;level, grade</td></tr>
		</table>
	</div>
	<h4 class="sublesson">2. Single-Component Characters</h4>
	<div class="table">
		<table class="table table-bordered table-condensed table-responsive table-centered">
		<tr><td>生</td><td>shēng</td><td>health</td><td><div><img class="strokeOrder" src="img/生-order.gif" alt="生"/></div></td></tr>
		<tr><td>高</td><td>gāo</td><td>tall</td><td><div><img class="strokeOrder" src="img/高-order.gif" alt="高"/></div></td></tr>
		</table>
	</div>
	<h4 class="sublesson">3 Chinese Radicals "⺮" (zhú) and "欠" (qiàn)</h4>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="active"><th>Radical</th><th>Explanation</th><th>Examples</th></tr>
			<tr>
				<td>⺮<br/>(zhú)</td>
				<td>related to <b>bamboo</b><br/><b></b></td>
				<td>篮&nbsp;lán&nbsp;basket<br/>笔&nbsp;bǐ&nbsp;pen</td>
			</tr>
			<tr>
				<td>欠<br/>(qiàn)</td>
				<td>related to movements of the <b>mouth</b></td>
				<td>歌&nbsp;gē&nbsp;song<br/>吹&nbsp;chuī&nbsp;to blow</td>
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
