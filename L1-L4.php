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
	<title>Level 1 - 4</title>
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
	<div class="jumbotron lessonHeaderLeft">Dì sī kè<br/>第四课<br/>Lesson 4</div>
	<div class="lessonHeaderRight"><h2>Tā shì wǒ de Hànyǔ lǎoshī?<br /><b>她 是 我 的 汉语 老师</b><br /><b>She is my Chinese teacher</b></h2></div>
</div>
<div class="container-fluid">
	<h3 class="sublesson">漯文 Text</h3>
	<h4 class="sublesson">1. 在教室里 In the classroom (Zài jiàoshì lǐ)<button class="cd" onclick="play('04-1');">&#128191; 04-1</button>
	<audio controls="controls" preload="metadata" id="04-1"><source src="../mandarin/audio/04-1.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Tā shì shéi?<br />
		A: 她 是 谁?<br />
		<span class="masked">B: </span>Tā shì wǒ de Hànyǔ lǎoshī, tā jiào Lǐ Yuè.<br />
		B: 她 是 我 的 汉语 老师, 她 叫 李月。
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br />
		A: Who is she?<br/>
		B: She is my Chinese teacher. Her name is Lǐ Yuè
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><td colspan="4"><i>New Words</i></td></tr>
			<tr><td>她</td><td>tā</td><td>pron.</td><td>she, her</td></tr>
			<tr><td>谁</td><td>shéi</td><td>pron.</td><td>who, whom</td></tr>
			<tr><td>的</td><td>de</td><td>part.</td><td><i>used after an attribute</i></td></tr>
			<tr><td>汉语</td><td>Hànyǔ</td><td>n.</td><td>Chinese (language)</td></tr>
		</table>
		</div>
	</div>
</div>
<div class="dash">&nbsp;</div>
<div class="container-fluid">
	<h4 class="sublesson">2. 在图书馆 In the library (Zài túshū guǎn) <button class="cd" onclick="play('04-2');">&#128191; 04-2</button>
	<audio controls="controls" preload="metadata" id="04-2"><source src="../mandarin/audio/04-2.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Nǐ shì nǎ guó rén?<br />
		A: 你 是 哪 国 人<br />
		<span class="masked">B: </span>Wǒ shì Měiguó ren. Nǐ ne?<br />
		B: 我 是 美国 人。你 呢？<br />
		<br/>
		<span class="masked">A: </span>Wǒ shì Zhōngguó rén.<br />
		A: 我 是 中国 人<br />
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br />
		A: Which country are you from?<br/>
		B: The United States. What about you?<br/>
		A: I'm Chinese.
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><td colspan="4"><i>New Words</i></td></tr>
			<tr><td>哪</td><td>nǎ</td><td>pron.</td><td>which</td></tr>
			<tr><td>国</td><td>guó</td><td>n.</td><td>country, nation</td></tr>
			<tr><td>呢</td><td>ne</td><td>part.</td><td><i>used at the end of question</i></td></tr>
		</table>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<div class="container-fluid">
	<h4 class="sublesson">3. Looking at the photo <button class="cd" onclick="play('04-3');">&#128191; 04-3</button>
	<audio controls="controls" preload="metadata" id="04-3"><source src="../mandarin/audio/04-3.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Tā shì shéi ?<br />
		A: 他  是  谁 ?<br />
		<span class="masked">A: </span>Tā shì wǒ tóngxué<br />
		B: 他  是  我 同学。<br />
		<br/>
		<span class="masked">B: </span>Tā ne? Tā shì nǐ tóngxué ma?<br />
		A: 她 呢？ 她  是  你  同学 吗?<br />
		<span class="masked">B: </span>Tā bú shì wǒ tóngxué, tā shì wǒ péngyou.<br />
		B: 她  不 是  我   同学，  朋友。她  是 我  朋友。
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br />
		A: Who is he?<br/>
		B: He is my classmate.<br/>
		A: What about her? Is she your classmate?<br/>
		B: No, she isn't. She is my friend.<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><td colspan="4"><i>New Words</i></td></tr>
			<tr><td>他</td><td>tā</td><td>pron.</td><td>he, him</td></tr>
			<tr><td>同学</td><td>tóngxué</td><td>noun</td><td>classmate</td></tr>
			<tr><td>朋友</td><td>péngyou</td><td>noun</td><td>friend</td></tr>
		</table>
		</div>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">汪释 Notes</h3>
	<h4 class="sublesson">1. The Interrogative Pronouns "谁" <i>(shéi or shuí: who)</i> and "哪" <i>(nǎ: what or which)</i></h4>
	<p>The interrogative Pronoun "谁" <i>(shéi or shuí: who)</i> is used to ask about the name or identity of a person. For example:</p>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr><th>Subject</th><th>Verb</th><th>Object</th><th>English</th></tr>
			<tr><td>谁<br />shuí</td><td>是<br />shì</td><td>李月?<br />Lǐ Yuè?</td><td>Who is Lǐ Yuè?</td></tr>
			<tr><td>她<br />tā</td><td>是<br />shì</td><td>谁?<br />shuí?</td><td>Who is she?</td></tr>
			<tr><td>他<br />tā</td><td>是<br />shì</td><td>谁?<br />shuí?</td><td>Who is he?</td></tr>
		</table>
	</div>
	<p>The Interrogative Pronoun "哪" <i>(nǎ: which or what)</i> is used in a question, the structure is "哪 + measure word/noun + noun". For example:</p>
	<ol>
		<li><b>哪</b>本 (běn, <i>a measure word for books</i>) 书 (shū, book) ?<br/>Nǎ běn shū<br/><i>which book?</i></li>
		<li><b>哪</b>个 (gè, <i>a general measure word</i>) 人?<br/>Nǎ gè rén<br/><i>which person?</i></li>
		<li>你是<b>哪</b>国人？<br/>Nǐ shì nǎ guó ren?<br/><i>what country are your from?</i></li>
	</ol>
	<h4 class="sublesson">2. The Structural Particle "的" <i>(de: of)</i></h4>
	<p>The structure "noun/pronoun + 的 + noun" indicates possession. When the noun following "的" <i>(de: of)</i> is a term of kinship or indicates a person, "的" can be omitted.  For example:</p>
	<ol>
		<li>李 月 是 我 的 老师。<br/>Lǐ Yuè shì wǒ de lǎoshī<br/><i>Lǐ Yuè is my teacher</i></li>
		<li>这 (zhè, this) 是 我 的 书 (shū, book)。<br/>Zhè shì wǒ de shū<br/><i>This is my book.</i></li>
		<li>她 不 是 我 同学，她 是 我 朋友。<br/>Tā bú shì wǒ tóngxué, tā shì wǒ péngyou<br/><i>She is not my classmate, she is my friend.</i><br/><i>Note: "的" is omitted</i></li>
	</ol>
	<h4 class="sublesson">3. The Interrogative Particle "呢" <i>(ne)</i></h4>
	<p>The interrogative particle "呢" <i>(ne)</i> is used after a noun or pronoun, forming a question about a situation mentioned previously. The commonly used sentence pattern is "A----. B呢?" (A---- What about B?),  For example:</p>
	<ol>
		<li>我 不 是 老师, 我 是 学生。 你 呢? <br/>Wǒ bú shì lǎoshī, wǒ shì xuésheng. Nǐ ne?<br/><i>I am not a teacher, I am a student. What about you?</i></li>
		<li>她 叫 李月。 你 呢?<br/>Tā jiào Lǐ Yuè. Nǐ ne?<br/><i>Her name is Lǐ Yuè. What about you?</i></li>
		<li>我是美国人。 你 呢?<br/>Wǒ shì Měiguó ren. Nǐ ne?<br/><i>I am American. What about you?</i></li>
	</ol>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">练习 (liàn xí) Exercises</h3>
	<h4 class="sublesson">1. Role-play the dialogues</h4>
	<h4 class="sublesson">2. Answer the questions according to the actual situations</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="han hanzi41">你 是 哪 国 人？<br/>
			<button type="button" id="n41" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g41" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn41">Nǐ shì nǎ guó rén?<br/></span>
		<span class="eng" id="eng41">What country are you from?<br/></span>
		<br/>
		<span class="han hanzi42">你 叫 什么 名字？<br/>
			<button type="button" id="n42" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g42" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn42">Nǐ jiào shénme míngzi?<br/></span>
		<span class="eng" id="eng42">What is your name?<br/></span>
		<br/>
		<span class="han hanzi43">你 的 汉语 老师 是 哪 国 人？<br/>
			<button type="button" id="n43" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g43" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn43">Nǐ de Hànyǔ lǎoshī shì nǎ guó rén?<br/></span>
		<span class="eng" id="eng43">What country is your Chinese teacher from?<br/></span>
		<br/>
		<span class="han hanzi44">你 的 汉语 老师 叫 什么 名字？<br/>
			<button type="button" id="n44" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g44" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn44">Nǐ de Hànyǔ lǎoshī jiào shénme míngzi?<br/></span>
		<span class="eng" id="eng44">What is your Chinese teacher's name?<br/></span>
		<br/>
		<span class="han hanzi45">你 的 中国 朋友 是 谁？<br/>
			<button type="button" id="n45" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g45" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn45">Nǐ de Zhōngguó péngyou shì shéi?<br/></span>
		<span class="eng" id="eng45">Who are your Chinese friends?<br/></span>
		<br/>
	</div>
	<h4 class="sublesson">3. Describe the pictures using the newly-learned language points and words.</h4>
	<p>Tā shì Qiáobùsī, tā shì _________ rén。<br />
	他 是 乔布斯 (Steve Jobs)，他是 _______ 人。</p>
	<p>Tā shì Lǐ Nà, tā shì _________ rén<br />
	她 是 李娜 (Lǐ Nà)，她是 _________ 人。</p>
	<p>Tā jiào Mǎlì, tā bú shì wǒ _________ ,tā shì wǒ _________ 。<br />
	她 叫 玛 丽，她 不 是 我 _________ ,她 是 我 _________ 。</p>
	<p>Tā jiào Dàwèi, tā shì wǒmen de _________ ,<br />
	他 叫 大卫，他 是 我们 的 _________ ,<br /></p>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3>拼音 Pinyin</h3>
	<h4 class="sublesson">1.Differentiation: pronunciation of the initials zh, ch sh, r</h4>
	<p><i>zh, ch sh</i> and <i>r</i> are a series of cacuminals, which are pronounced with the tongue top turned-up and coordinating with the front part of the hard palate,  When saying <i>zh</i> and <i>ch</i>, the tongue tip first touches the hard palate and then opens a gap to let the air flow. <i>ch</i> comes with a much stronger airflow, but <i>zh</i> doesn't. When saying <i>sh</i>, the tongue top doesn't touch the hard palate, leaving a gap all along. Different from <i>sh, r</i> is pronounced with the vocal chords vibrating.</p>
	<h4 class="sublesson">&#128191; 04-4</h4>
	<h5>Listen to the sounds below and read after. Pay attention to the differences between the initials.</h5>
<audio class="hidden" controls=""  preload="metadata" id="zhi1shi"><source src="../mandarin/audio/zhi1shi.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="chu2shi1"><source src="../mandarin/audio/chu2shi1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="sheng1ri4"><source src="../mandarin/audio/sheng1ri4.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="shang4che1"><source src="../mandarin/audio/shang4che1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="ren4shi"><source src="../mandarin/audio/ren4shi.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="chang2shi2"><source src="../mandarin/audio/chang2shi2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="shi4shi2"><source src="../mandarin/audio/shi4shi2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="chao1ren2"><source src="../mandarin/audio/chao1ren2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="ran4shi"><source src="../mandarin/audio/ran4shi.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="ren4ao"><source src="../mandarin/audio/ren4ao.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="chu1chai1"><source src="../mandarin/audio/chu1chai1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="Chang2cheng2"><source src="../mandarin/audio/Chang2cheng2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="shou3shu4"><source src="../mandarin/audio/shou3shu4.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="shang1chang3"><source src="../mandarin/audio/shang1chang3.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="chao1shi4"><source src="../mandarin/audio/chao1shi4.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="chong1zhi2"><source src="../mandarin/audio/chong1zhi2.m4a" type="audio/mpeg">No audio</audio>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('zhi1shi');">知 识 (知識)<br/>zhī shi<br />knowledge</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('chu2shi1');">厨 师 (處世)<br />chú shī<br />chef</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('sheng1ri4');">生 日<br />shēng rì<br />birthday</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('shang4che1');">上 车 (上車)<br />shàng chē<br />get on</button></div>
	</div>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ren4shi');">认 识 (認識)<br />rèn shi<br />to know</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('chang2shi2');">常 识 (常識)<br />cháng shí<br />common sense</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('shi4shi2');">事 实 (事實)<br />shì shí<br />fact</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('chao1ren2');">超 人<br />Chāo rén<br />Superman</button></div>
	</div>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ran4shi');">燃 烧 (燃燒)<br />rán shāo<br />to burn</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ren4ao');">热 闹 (熱鬧)<br />rè nao<br />lively</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('chu1chai1');">出 差<br />chū chāi<br />business trip</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('Chang2cheng2');">长 城 (長城)<br />Cháng chéng<br />the Great Wall</button></div>
	</div>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('shou3shu4');">手 术 (手術)<br />shǒu shù<br />(surgical) operation</button> </div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('shang1chang3');">商 场 (商場)<br />shāng chǎng<br />shopping mall</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('chao1shi4');">超 市<br />chāo shì<br />supermarket</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('chong1zhi2');">充 值<br />chōng zhí<br />to recharge<br />(money on a card)
</button></div>
	</div>
	<h4 class="sublesson">2. Differentiation: pronunciation of the alveolar nasal n and the velar nasal ng</h4>
	<p>When saying the alveolar nasal <i>n</i> [n], the tongue top should press the upper alveolar ridge; when saying the velar nasal <i>ng</i> [ng], the back part of the tongue forms an arch and the root of the tongue moves back and presses the soft palate. Compared with <i>n</i> [n] , which is pronounced with the upper and lower teeth close to each other, <i>ng</i> [ng]  is pronounced with the mouth more wide-open.</p>
	<h4 class="sublesson">&#128191; 04-5</h4>
	<p>Listen to the recording and read after it.  Pay attention to the differences between the alveolar and velar nasals.</p>
	<audio controls="controls" preload="metadata" id="04-5"><source src="../mandarin/audio/04-5.mp3" type="audio/mpeg">No audio</audio>
	<div class="table">
		<table class="table table-responsive table-condensed L1-L4">
			<tr><td>an</td><td>-----</td><td>ang</td></tr>
			<tr><td>ian</td><td>-----</td><td>iang</td></tr>
			<tr><td>uan</td><td>-----</td><td>uang</td></tr>
			<tr><td>en</td><td>-----</td><td>eng</td></tr>
			<tr><td>in</td><td>-----</td><td>ing</td></tr>
			<tr><td>uen</td><td>-----</td><td>ueng</td></tr>
		</table>
	</div>
	<h4 class="sublesson">3. Tone Sandhi of "一 (yī)" &#128191; 04-6</h4>
	<p>( 1 ) When "一" is followed by a syllable in the first, second or third tone, it changes into the fourth tone.</p>
<audio class="hidden" controls=""  preload="metadata" id="yi4zhang1"><source src="../mandarin/audio/yi4zhang1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="yi4tiao2"><source src="../mandarin/audio/yi4tiao2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="yi4zhong3"><source src="../mandarin/audio/yi4zhong3.m4a" type="audio/mpeg">No audio</audio>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('yi4zhang1');">一张 (一張)<br />yì zhāng<br />one sheet/piece</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('yi4tiao2');">一条 (一條)<br />yì tiáo<br />one (long) piece</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('yi4zhong3');">一种 (一種)<br />yì zhǒng<br />one type</button></div>
	</div>
	<p>( 2 ) When "一" is followed by a syllable in the fourth tone, it changes into the second tone.</p>
<audio class="hidden" controls=""  preload="metadata" id="yi2ding4"><source src="../mandarin/audio/yi2ding4.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="yi2kuai4"><source src="../mandarin/audio/yi2kuai4.m4a" type="audio/mpeg">No audio</audio>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('yi2ding4');">一定<br />yí dìng<br />sure, certainly</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('yi2kuai4');">一块 (塊)<br />yí kuài<br />one piece</button></div>
	</div>
	<p>( 3 ) When "一" is used alone or in a number, it's tone doesn't change.</p>
<audio class="hidden" controls=""  preload="metadata" id="di4yi1"><source src="../mandarin/audio/di4yi1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="yi1er2san3"><source src="../mandarin/audio/yi1er2san3.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="xing1qi1yi1"><source src="../mandarin/audio/xing1qi1yi1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="shi1yi1"><source src="../mandarin/audio/shi1yi1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="bai3fen1zhi1yi1"><source src="../mandarin/audio/bai3fen1zhi1yi1.m4a" type="audio/mpeg">No audio</audio>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('di4yi1');">第一<br />dì yī<br />first</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('yi1er2san3');">一二三<br />yī, èr, sān<br />one, two, three</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('xing1qi1yi1');">星期一<br />xīng qī yī<br />Monday</button></div>
	</div>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('shi1yi1');">十一<br />shí yī<br />eleven</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('bai3fen1zhi1yi1');">百分之一<br />bǎi fēn zhī yī<br />one percent</button></div>
	</div>
	<h4 class="sublesson">4. Rules of <i>Pinyin</i> (3): use of y and w</h4>
	<p>If a final beginning with <i>i, u</i> or <i>ü</i> has not initial before it,<i>w</i> or <i>y</i> is used in the written form. See the following table for detail:</p>
	<table class="table table-responsive table-condensed">
		<tr><th colspan="2"> Final</th><th>Written Form</th></tr>
		<tr><td></td><td>i, in, ing</td><td>yi, yin, ying</td></tr>
		<tr><td>Beginning with <i>i</i></td><td>ia, ie, iao, ian, iang, iong</td><td>ya, ye, yao, yan, yang, yong</td></tr>
		<tr><td></td><td>iu</td><td>u</td></tr>
		<tr><td></td><td>u</td><td>wu</td></tr>
		<tr><td>Beginning with <i>u</i></td><td>ua, uo, uai, uan, uang, ueng</td><td>wa, wo, wai, wan, wang, weng</td></tr>
		<tr><td></td><td>ui, un</td><td>wei, wen</td></tr>
		<tr><td>Beginning with <i>ü</i></td><td>ü, üe, üan, ün</td><td>yu, yue, yuan, yun</td></tr>
	</table>
	<h4 class="sublesson">&#128191; 04-7</h4>
	<h5>Listen to the recording and read after it. Pay attention to the use of <i>y</i> and <i>w</i>.</h5>
<audio class="hidden" controls=""  preload="metadata" id="you2yong2"><source src="../mandarin/audio/you2yong2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="you3yi4"><source src="../mandarin/audio/you3yi4.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="yin1yue4"><source src="../mandarin/audio/yin1yue4.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="yuan2yin1"><source src="../mandarin/audio/yuan2yin1.m4a" type="audio/mpeg">No audio</audio>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('you2yong2');">游泳<br/>yóu yǒng<br />swim</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('you3yi4');">友谊 (友誼)<br/>yǒu yì<br />friendship</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('yin1yue4');">音乐 (音樂)<br/>yīn yuè<br />music</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('yuan2yin1');">原因<br/>yuán yīn<br />reason</button></div>
	</div>
<audio class="hidden" controls=""  preload="metadata" id="qing1wa1"><source src="../mandarin/audio/qing1wa1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="ying3xing1"><source src="../mandarin/audio/ying3xing1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="ying1xiong2"><source src="../mandarin/audio/ying1xiong2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="wei1xian3"><source src="../mandarin/audio/wei1xian3.m4a" type="audio/mpeg">No audio</audio>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('qing1wa1');">青蛙<br/>qīng wā<br />frog</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ying3xing1');">影星<br/>yǐng xīng<br />film star</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ying1xiong2');">英雄<br/>yīng xióng<br />hero</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('wei1xian3');">危险 (危險)<br/>wēi xiǎn<br />dangerous</button></div>
	</div>
<audio class="hidden" controls=""  preload="metadata" id="guo2wai4"><source src="../mandarin/audio/guo2wai4.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="yin1tian1"><source src="../mandarin/audio/yin1tian1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="yu3yan2"><source src="../mandarin/audio/yu3yan2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="wang3wang3"><source src="../mandarin/audio/wang3wang3.m4a" type="audio/mpeg">No audio</audio>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('guo2wai4');">国外 (國外)<br/>guó wài<br />abroad</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('yin1tian1');">阴天 (陰天)<br/>yīn tiān<br />cloudy day</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('yu3yan2');">语言 (語言)<br/>yǔ yán<br />language</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('wang3wang3');">往往<br/>wǎng wǎng<br />often</button></div>
	</div>
<audio class="hidden" controls=""  preload="metadata" id="wan3yan4"><source src="../mandarin/audio/wan3yan4.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="ye2ye"><source src="../mandarin/audio/ye2ye.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="ying2yang3"><source src="../mandarin/audio/ying2yang3.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="wo3men"><source src="../mandarin/audio/wo3men.m4a" type="audio/mpeg">No audio</audio>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('wan3yan4');">晚宴<br/>wǎn yàn<br />dinner party</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ye2ye');">爷爷 (爺爺)<br/>yé ye<br />grandfather</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ying2yang3');">营养 (營養)<br/>yíng yǎng<br />nutrition</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('wo3men');">我们 (我們)<br/>wǒ men<br />we, us</button></div>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3>汉字 Characters</h3>
	<h4 class="sublesson">1. Strokes of Chinese Characters (4)</h4>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="active">
				<th>笔画名称<br/>bǐ huà míng chēng<br/>Stroke</th>
				<th>运笔方向<br/>yùn bǐ<br/>fāng xiàng<br/>Direction</th>
				<th>例字<br/>lì zì<br/>Example<br/>Characters</th>
			</tr>
			<tr>
				<td>横折钩 shùwāngōu<br />vertical curved hook</td>
				<td><img style="width: 2em;" src="../mandarin/img/shuwangou.gif" alt="shùwāngōu"/></td>
				<td>七 qī &nbsp; 7<br />儿 ér &nbsp; son</td>
			</tr>
			<tr>
				<td>卧钩 héngzhéwāngōu<br />horizontal-turning<br/>curved hook</td>
				<td><img style="width: 3em;" src="../mandarin/img/hengzhewangou.gif" alt="héngzhéwāngōu"/></td>
				<td>九 jiǔ &nbsp; 9<br/>几 jǐ &nbsp; how many</td>
			</tr>
		</table>
	</div>
	<div class="clearfix">&nbsp;</div>
	<h4 class="sublesson">2. Single-Component Characters</h4>
	<table class="table table-bordered table-condensed table-responsive table-centered table-SCC">
		<tr><td>七</td><td>qī</td><td>7</td><td><div><img class="strokeOrder" src="img/七-order.gif" alt="七"/></div></td></tr>
		<tr><td>儿</td><td>er</td><td>child</td><td><div><img class="strokeOrder" src="img/儿-order.gif" alt="儿"/></div></td></tr>
		<tr><td>几</td><td>jǐ</td><td>a few</td><td><div><img class="strokeOrder" src="img/几-order.gif" alt="几"/></div></td></tr>
		<tr><td>九</td><td>jiǔ</td><td>9</td><td><div><img class="strokeOrder" src="img/九-order.gif" alt="九"/></div></td></tr>
	</table>
	<div class="clearfix">&nbsp;</div>
	<h4 class="sublesson">3. Stroke Order (2): top preceding bottom and left preceding right</h4>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="active">
				<th>Rule</th>
				<th>例字<br/>lì zì<br/>Example<br/>Characters</th>
				<th>Stroke Order</th>
			</tr>
			<tr>
				<td><br />Top preceding<br/>bottom</td>
				<td><br/>二 èr &nbsp; 2<br/><br/>三 sān &nbsp; 3</td>
				<td><img class="strokeOrder" src="img/二-order.gif" alt="二 Stroke Order"/>
					<br/><img class="strokeOrder" src="img/三-order.gif" alt="三 Stroke Order"/></td>
			</tr>
			<tr>
				<td><br />Left preceding<br/>right</td>
				<td><br/>几 jǐ &nbsp; how many<br/><br />八 bā &nbsp; 8</td>
				<td><img class="strokeOrder" src="img/几-order.gif" alt="几 Stroke Order"/>
					<br/><img class="strokeOrder" src="img/八-order.gif" alt="八 Stroke Order"/></td>
			</tr>
		</table>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3>Application</h3>
	<h4 class="sublesson">1. Pair work</h4>
	<p>Work in pairs and ask and answer questions based on the pictures</p>
	<h4 class="sublesson">2. Group work</h4>
	<p>Work in groups of 3-4. Prepare a photo of you and your classmates or friends and introduce the people in the photo to your group.</p>
</div>
<?php
} else { header( 'Location: https://www.stephenmccready.asia/mi/index.php'); }
?>
</body>
</html>
