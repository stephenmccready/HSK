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
	<title>Level 1 - 3</title>
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
	<div class="jumbotron lessonHeaderLeft">Dì èr sān<br/>第三课<br/>Lesson 3</div>
	<div class="lessonHeaderRight"><h3>Nǐ jiào shénme míngzi?<br/><b>你叫什么名字</b><br/><b>What's your name?</b></h3></div>
</div>
<div class="container-fluid">
	<h3 class="sublesson">漯文 Text</h3>
	<h4 class="sublesson">1. In the school &#128191; 03-1
	<audio controls="controls" preload="metadata" id="03-1"><source src="../mandarin/audio/03-1.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Nǐ jiào shénme míngzi?<br/>
		A: 你 叫 什么 名字?<br/>
		<span class="masked">B: </span>Wǒ jiào Lǐ Yuè<br/>
		B: 我 叫 李月
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: What's your name?<br/>
		B: My name is Lǐ Yuè
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><td colspan="4"><i>New Words</i></td></tr>
			<tr><td>叫</td><td>jiào</td><td>verb</td><td>to call, to be called</td></tr>
			<tr><td>什么</td><td>shénme</td><td>pronoun</td><td>what</td></tr>
			<tr><td>名字</td><td>míngzì</td><td>noun</td><td>name</td></tr>
			<tr><td>我</td><td>wǒ</td><td>pronoun.</td><td>I, me</td></tr>
			<tr><td colspan="4"><i>Proper Noun</i></td></tr>
			<tr><td>李月</td><td>Lǐ Yuè</td><td></td><td>Lǐ Yuè, name of a person</tr>
		</table>
		</div>
	</div>
</div>
<div class="dash">&nbsp;</div>
<div class="container-fluid">
	<h4 class="sublesson">2. In the classroom &#128191; 03-2
	<audio controls="controls" preload="metadata" id="03-2"><source src="../mandarin/audio/03-2.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Nǐ shì lǎoshī ma?<br/>
		A: 你 是 老师 吗<br/>
		<span class="masked">B: </span>Wǒ bú shì lǎoshī, wǒ shì xuésheng<br/>
		B: 我 不 是 老师， 我 是 学生
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Are you a teacher?<br/>
		B: No, I'm not, I'm a student
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><td colspan="4"><i>New Words</i></td></tr>
			<tr><td>是</td><td>shì</td><td>verb<td>to be</td></tr>
			<tr><td>老师</td><td>lǎoshī</td><td>noun</td><td>teacher</td></tr>
			<tr><td>吗</td><td>ma</td><td>particle</td><td><i>used at the end of question</i></td></tr>
			<tr><td>学生</td><td>xuésheng</td><td>noun</td><td>student</td></tr>
		</table>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<div class="container-fluid">
	<h4 class="sublesson">3. In the school &#128191; 03-3
	<audio controls="controls" preload="metadata" id="03-3"><source src="../mandarin/audio/03-3.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Nǐ shì Zhōngguó rén ma?<br/>
		A: 你 是 中国 人 吗?<br/>
		<span class="masked">B: </span>Wǒ bú shì Zhōngguó rén, wǒ shì Měiguó rén.<br/>
		B: 我 不 是 中国 人，我 是 美国 人.
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Are you Chinese?<br/>
		B: No, I'm not Chinese, I'm American.
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><td colspan="4"><i>New Words</i></td></tr>
			<tr><td>人</td><td>rén</td><td>noun<td>human, person</td></tr>
			<tr><td colspan="4"><i>Proper Nouns</i></td></tr>
			<tr><td>中国</td><td>Zhōngguó</td><td><td>China</td></tr>
			<tr><td>美国</td><td>Měiguó</td><td><td>the United States of America</td></tr>
		</table>
		</div>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">汪释 Notes</h3>
	<h4 class="sublesson">1. The Interrogative Pronouns "什么" <i>(shénme?: What?)</i></h4>
	<p>The interrogative Pronoun "什么" is used in interrogative sentences, serving as the object itself or together with a nominal element following it. For example:</p>
	<ol>
		<li>你叫<b>什么</b>名宇?<br/>Nǐ jiào shénme míngzì?<br/><i>What is your name?</i></li>
		<li>这 (zhè, this) 是<b>什么</b> ?<br/>Zhè shì shénme?<br/><i>What is this?</i></li>
		<li>这 (zhè, this) 是<b>什么</b>书 (shū, book) ?<br/>Zhè shì shénme shū<br/><i>What is this book?</i></li>
	</ol>
	<h4 class="sublesson">2. The "是" Sentence <i>(shì: Yes, be...)</i></h4>
	<p>A "是" sentence is a determinative sentence with "是" (shì), indicating what somebody or something equals or belongs to. The negative sentence is formed by adding the negative adverb "不" (bù) before "是". For example:</p>
	<div class="table-responsive">
	<table class="table table-bordered table-responsive table-centered">
		<tr><th rowspan="2">Subject</th><th colspan="2">Predicate</th></tr>
		<tr><th>(不) <b>是</b></th><th>Noun/Noun Phrase</th></tr>
		<tr><td>李月 (Lǐ Yuè)</td><td><b>是</b> (shì)</td><td>老师 (lǎoshī)</td></tr>
		<tr><td>我 (wǒ)</td><td><b>是</b> (shì)</td><td>美国人(Měiguó rén)</td></tr>
		<tr><td>我 (wǒ)</td><td>不<b>是</b> (bùshì)</td><td>老师 (lǎoshī)</td></tr>
	</table>
	</div>
	<h4 class="sublesson">3. Interrogative Sentences with "吗" <i>(ma: do you?)</i></h4>
	<p>The particle "吗" indicates an interrogative mood. When "吗" is added at the end of a declarative sentence, the declarative sentence turns into a question. For example:</p>
	<div class="table-responsive">
	<table class="table table-bordered table-responsive table-centered">
		<tr><th rowspan="2">Subject</th><th colspan="3">Predicate</th></tr>
		<tr><th>Verb</th><th>Noun/Noun Phrase</th><th>吗? (ma)</th></tr>
		<tr><td>你 (nǐ)</td><td>是 (shì)</td><td>美国人(Měiguó rén)</td><td><b>吗</b>? (ma)</td></tr>
		<tr><td>你 (nǐ)</td><td>是 (shì)</td><td>中国人(Zhōngguó rén)</td><td><b>吗</b>? (ma)</td></tr>
		<tr><td>你 (nǐ)</td><td>是 (shì)</td><td>老师 (lǎoshī)</td><td><b>吗</b>? (ma)</td></tr>
	</table>
	</div>
</div>
<div class="container-fluid">
	<h3 class="sublesson">练习 Exercises</h3>
	<h4 class="sublesson">1. Role-play the dialogues</h4>
	<h4 class="sublesson">2. Answer the questions according to the actual situations</h4>
	<ol>
		<li>你 叫 什么 名字?<br/>Nǐ jiào shénme míngzi?<br/>What is your name?</li>
		<li>你 是 中国 人 吗?<br/>Nǐ shì Zhōngguó rén ma?<br/>Are you Chinese?</li>
		<li>你 是 美国 人 吗?<br/>Nǐ shì Měiguó rén ma?<br/>Are you American?</li>
		<li>你 是 老师 吗?<br/>Nǐ shì lǎoshī ma?<br/>Are you a teacher?</li>
		<li>你 是 学生 吗?<br/>Nǐ shì xuésheng ma?<br/>Are you a student?</li>
	</ol>
	<h4 class="sublesson">3. Describe the pictures using the newly-learned language points and words.</h4>
	<p>Tā jiào Qiáodān (Michael Jordan), tā shì _________ rén</p>
	<p>Tā jiào Yáo Míng, tā shì _________ rén</p>
	<p>Wǒ bú shì ________ , wǒ shì xuésheng, wǒ shì _________ rén</p>
	<p>Wǒ shì ________ , wǒ bú shì xuésheng, rén, wǒ shì _________ rén</p>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">拼音 Pinyin</h3>
	<h4 class="sublesson">1. Differentiation: pronunciation of the initials j, q, x and z, c, s</h4>
	<p><i>j, q</i> and <i>x</i> are known as coronals. The surface of the tongue touches the hard palate when pronouncing <i>j</i> and <i>q</i>. While <i>q</i> brings out a strong airflow, <i>j</i> doesn't. When <i>x</i> is pronounced, the surface of the tongue approaches the hard palate without reaching it, leaving a gap in between.</p>
	<div class="col-xs-12 col">
		<h4 class="sublesson">&#128191; 03-4</h4>
		<h5>Listen to the recording and read after it. Pay attention to the differences between the initials.</h5>
<audio class="hidden" controls=""  preload="metadata" id="xiu1xi"><source src="../mandarin/audio/xiu1xi.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="ji1ji2"><source src="../mandarin/audio/ji1ji2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="ji1qi4"><source src="../mandarin/audio/ji1qi4.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="xiao3qu1"><source src="../mandarin/audio/xiao3qu1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="xing1qi1"><source src="../mandarin/audio/xing1qi1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="xiang1jiao1"><source src="../mandarin/audio/xiang1jiao1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="xing4qu4"><source src="../mandarin/audio/xing4qu4.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="ji4xu4"><source src="../mandarin/audio/ji4xu4.m4a" type="audio/mpeg">No audio</audio>
		<div class="row">
			<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('xiu1xi');">休息<br/>xiūxi<br/>to rest</button></div>
			<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ji1ji2');">积极<br/>jījí<br/>active</button></div>
			<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ji1qi4');">极其<br/>jīqì<br/>extremely</button></div>
			<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('xiao3qu1');">小区<br/>xiǎoqū<br/>neighborhood</button></div>
		</div>
		<div class="row">
			<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('xing1qi1');">星期<br/>xīngqī<br/>week</button></div>
			<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('xiang1jiao1');">香蕉<br/>xiāngjiāo<br/>banana</button></div>
			<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('xing4qu4');">兴趣<br/>xìngqù<br/>hobby</button></div>
			<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ji4xu4');">继续<br/>jìxù<br/>to continue</button></div>
		</div>
	</div>
	<p><i>z, c</i> and <i>s</i> are dentals. When pronouncing <i>z</i> and <i>c</i>, the front part of the tongue tip touches the inner surface of the upper teeth and then immediately parts with it, forming a gap in between. <i>z</i> is pronounced with no strong airflow, while <i>c</i> comes with a obvious airflow. When pronouncing <i>s</i>, the front part of the tongue tip stays away from the inner surface of the upper teeth all along, leaving a gap for the airflow to get through.</p>
	<div class="col-xs-12 col">
		<h4 class="sublesson">&#128191; 03-5</h4>
		<h5>Listen to the recording and read after it. Pay attention to the differences between the initials.</h5>
<audio class="hidden" controls=""  preload="metadata" id="xi3zao3"><source src="../mandarin/audio/xi3zao3.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="da3sao3"><source src="../mandarin/audio/da3sao3.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="san1ci4"><source src="../mandarin/audio/san1ci4.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="zi4ji3"><source src="../mandarin/audio/zi4ji3.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="zuo2tian1"><source src="../mandarin/audio/zuo2tian1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="zao3shang"><source src="../mandarin/audio/zao3shang.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="cao1chang3"><source src="../mandarin/audio/cao1chang3.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="han4zi4"><source src="../mandarin/audio/han4zi4.m4a" type="audio/mpeg">No audio</audio>
		<div class="row">
			<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('xi3zao3');">洗澡<br/>xǐzǎo<br/>to bathe</button></div>
			<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('da3sao3');">打扫<br/>dǎsǎo<br/>to clean</button></div>
			<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('san1ci4');">三次<br/>sāncì<br/>3rd</button></div>
			<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('zi4ji3');">自己<br/>zìjǐ<br/>oneself</button></div>
		</div>
		<div class="row">
			<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('zuo2tian1');">昨天<br/>zuótiān<br/>yesterday</button></div>
			<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('zao3shang');">早上<br/>zaǒshang<br/>early morning</button></div>
			<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('cao1chang3');">操场<br/>cāochǎng<br/>playground</button></div>
			<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('han4zi4');">汉字<br/>Hànzì<br/>Chinese character</button></div>
		</div>
	</div>
	<h4 class="sublesson">2 Differentiation: pronunciation of the finals i, u, ü</h4>
	<p>The finals <i>i</i> and <i>ü</i> share the same position of articulation, but are pronounced with the lips in different shapes. When pronouncing <i>i</i>, the lips are relaxed; when pronouncing <i>ü</i>, the lips must be rounded. To practice the two sounds, you can say <i>i</i> first, then keep your tongue where it is and round your lips to pronoune <i>ü</i>.</p>
	<p>Both <i>u</i> and <i>ü</i> are pronounced with rounded lips. When saying <i>ü</i>, the tongue is in a front position, with the tip pressing the inner surface of the lower teeth; when saying <i>u</i> the tongue is in a back position, with the tip staying away from the inner surface of the lower teeth, and the tongue should be held backwards to pronounce the sounds right.</p>
	<h4 class="sublesson">3 Tone Sandhi of "不" (bù)&nbsp; &#128191; 03-6</h4>
	<p>（1）When "不" (bù) is followed by a syllable in the 1st, 2nd or 3rd tone, its tone doesn't change.</p>
<audio class="hidden" controls=""  preload="metadata" id="bu4chi1"><source src="../mandarin/audio/bu4chi1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="bu4xing2"><source src="../mandarin/audio/bu4xing2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="bu4hao3"><source src="../mandarin/audio/bu4hao3.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="bu4he1"><source src="../mandarin/audio/bu4he1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="bu4neng2"><source src="../mandarin/audio/bu4neng2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="bu4xiang3"><source src="../mandarin/audio/bu4xiang3.m4a" type="audio/mpeg">No audio</audio>
	<table>
		<tr><td><button type="button" class="btn btn-huge btn-default" onclick="play('bu4chi1');"> bù chī<br/>不吃<br/>to not eat</button></td>
			<td><button type="button" class="btn btn-huge btn-default" onclick="play('bu4xing2');"> bù xíng<br/>不行<br/>not OK</button></td>
			<td><button type="button" class="btn btn-huge btn-default" onclick="play('bu4hao3');"> bù hǎo<br/>不好<br/>not good</button></td></tr>
		<tr><td><button type="button" class="btn btn-huge btn-default" onclick="play('bu4he1');"> bù hē<br/>不喝<br/>to not drink</button></td>
			<td><button type="button" class="btn btn-huge btn-default" onclick="play('bu4neng2');"> bù néng<br/>不能<br/>can't</button></td>
			<td><button type="button" class="btn btn-huge btn-default" onclick="play('bu4xiang3');"> bù xiǎng<br/>不想<br/>don't want</button></td></tr>
	</table>
	<div class="clearfix">&nbsp;</div>
	<p>（2）When "不" (bù) is followed by a syllable in the 4th tone, it changes to the 2nd tone.</p>
<audio class="hidden" controls=""  preload="metadata" id="bu2hui4"><source src="../mandarin/audio/bu2hui4.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="bu2shi4"><source src="../mandarin/audio/bu2shi4.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="bu2kan4"><source src="../mandarin/audio/bu2kan4.m4a" type="audio/mpeg">No audio</audio>
	<table>
		<tr><td><button type="button" class="btn btn-huge btn-default" onclick="play('bu2hui4');">bú huì<br/>不会<br/>to be unable to</button></td>
			<td><button type="button" class="btn btn-huge btn-default" onclick="play('bu2shi4');">bú shì<br/>不是<br/>to be not</button></td>
			<td><button type="button" class="btn btn-huge btn-default" onclick="play('bu2kan4');">bú kàn<br/>不看<br/>to not look</button></td></tr>
	</table>
	<h4 class="sublesson">4 Rules of <i>Pinyin</i> (2): ü or finals led by ü with j, q, x.</h4>
	<p>When <i>ü</i> or a final beginning with <i>ü</i> follows <i>j, q</i> or <i>x</i>, the two dots on the top of <i>ü</i> should be removed. for example, <i>ju, qu, xu</i>. However, if the initial is <i>l</i> or <i>n</i>, the form is <i>lü</i> and <i>ü</i> respectively</p>
	<div class="col-xs-12 col">
		<h4 class="sublesson">&#128191; 03-7</h4>
		<h5>Listen to the recording and read after it. Pay attention to the form and pronunciation of <i>ü</i>.</h5>
<audio class="hidden" controls=""  preload="metadata" id="v"><source src="../mandarin/audio/v.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="ve"><source src="../mandarin/audio/ve.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="van"><source src="../mandarin/audio/van.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="vn"><source src="../mandarin/audio/vn.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="ju"><source src="../mandarin/audio/ju.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="jue"><source src="../mandarin/audio/jue.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="juan"><source src="../mandarin/audio/juan.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="jun"><source src="../mandarin/audio/jun.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="qu"><source src="../mandarin/audio/qu.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="que"><source src="../mandarin/audio/que.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="quan"><source src="../mandarin/audio/quan.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="qun"><source src="../mandarin/audio/qun.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="xu"><source src="../mandarin/audio/xu.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="xue"><source src="../mandarin/audio/xue.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="xuan"><source src="../mandarin/audio/xuan.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="xun"><source src="../mandarin/audio/xun.m4a" type="audio/mpeg">No audio</audio>
		<div class="row">
			<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('v');"> ü</button> </div>
			<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ve');"> üe</button> </div>
			<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('van');"> üan</button> </div>
			<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('vn');"> ün</button> </div>
		</div>
		<div class="row">
			<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ju');"> ju</button> </div>
			<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('jue');"> jue</button> </div>
			<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('juan');"> juan</button> </div>
			<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('jun');"> jun</button> </div>
		</div>
		<div class="row">
			<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('qu');"> qu</button> </div>
			<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('que');"> que</button> </div>
			<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('quan');"> quan</button> </div>
			<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('qun');"> qun</button> </div>
		</div>
		<div class="row">
			<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('xu');"> xu</button> </div>
			<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('xue');"> xue</button> </div>
			<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('xuan');"> xuan</button> </div>
			<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('xun');"> xun</button> </div>
		</div>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3>汉字 Characters</h3>
	<h4 class="sublesson">1. Strokes of Chinese Characters (3)</h4>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="active">
				<th>笔画名称<br/>bǐ huà míng chēng<br/>Stroke</th>
				<th>运笔方向<br/>yùn bǐ fāng xiàng<br/>Direction</th>
				<th>例字<br/>lì zì<br/>Example<br/>Characters</th>
			</tr>
			<tr>
				<td>横折钩 héngzhégōu<br/>horizontal-turning-hook</td>
				<td><img style="width: 2em;" src="../mandarin/img/hengzhegou.gif" alt="héngzhégōu"/></td>
				<td>门 mén &nbsp; door<br/>月 yuè &nbsp; moon</td>
			</tr>
			<tr>
				<td>卧钩 wǒgōu<br/>lying hook</td>
				<td><img style="width: 2em;" src="../mandarin/img/wogou.gif" alt="wǒgōu"/></td>
				<td>心 xīn &nbsp; heart<br/>您 nín &nbsp; (<i>polite</i>) you</td>
			</tr>
		</table>
	</div>
	<div class="clearfix">&nbsp;</div>
	<h4 class="sublesson">2. Single-Component Characters</h4>
	<table class="table table-bordered table-condensed table-responsive table-centered table-SCC">
		<tr><td>月</td><td>yuè</td><td>moon</td><td><div><img class="strokeOrder" src="img/月-order.gif" alt="月"/></div></td></tr>	
		<tr><td>心</td><td>xīn</td><td>heart</td><td><div><img class="strokeOrder" src="img/心-order.gif" alt="心"/></div></td></tr>	
		<tr><td>中</td><td>zhōng</td><td>middle</td><td><div><img class="strokeOrder" src="img/中-order.gif" alt="中"/></div></td></tr>	
		<tr><td>人</td><td>rén</td><td>person</td><td><div><img class="strokeOrder" src="img/人-order.gif" alt="人"/></div></td></tr>
	</table>
	<div class="clearfix">&nbsp;</div>
	<h4 class="sublesson">3. Stroke Order (1): horizontal preceding vertical and left-failing preceding right-falling</h4>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="active">
				<th>Rule</th>
				<th>例字<br/>lì zì<br/>Example<br/>Characters</th>
				<th>Stroke<br/>Order</th>
			</tr>
			<tr>
				<td>先横后竖<br/>Horizontal<br/>preceding<br/>vertical</td>
				<td>十 shí &nbsp; 10<br/>工 gōng &nbsp; work, labor</td>
				<td>一  十<br/></td>
			</tr>
			<tr>
				<td>先撇后捺<br/>Left-falling<br/>preceding<br/>right-falling</td>
				<td>八 bā &nbsp; 8<br/>人 rén &nbsp; human</td>
				<td>丿 八<br/>丿 人</td>
			</tr>
		</table>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3>Application</h3>
	<h4 class="sublesson">1. Pair work</h4>
	<p>Work in pairs and introduce yourself.</p>
	<p><span class="masked">A: </span>Wǒ jiào Lǐ Yuè, wǒ shì Zhōngguó rén, wǒ shì lǎoshī<br/>
	A: 我  叫  李 月， 我  是    中    国   人，  我  是   老   师</p>
	<p><span class="masked">B: </span>Wǒ jiào Dàwèi, wǒ shì Měiguó rén, wǒ shì xuésheng<br/>
	B: 我  叫  </p>
	<h4 class="sublesson">2. Group work</h4>
	<p>Work in groups of 3-4 and ask about each other's names and nationalities. Each group chooses one member to make a report</p>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr><th></th><th>姓名 (xìng míng) Name</th><th>国籍 (guó jí) Nationality</th></tr>
			<tr><td>1</td><td>李月 Lǐ Yuè</td><td>中国 Zhōngguó</td></tr>
			<tr><td>2</td><td></td><td></td></tr>
			<tr><td>3</td><td></td><td></td></tr>
			<tr><td>4</td><td></td><td></td></tr>
			<tr><td>5</td><td></td><td></td></tr>
		</table>
	</div>
</div>
<?php
} else { header( 'Location: https://www.stephenmccready.asia/mi/index.php'); }
?>
</body>
</html>
