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
	<title>Level 1 - L5</title>
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
	<div class="jumbotron lessonHeaderLeft">Dì wǒ kè<br/>第五课<br/>Lesson 5</div>
	<div class="lessonHeaderRight"><h2>Tā nǚ'ér jīnnián èrshí suì<br/>她女儿今年二十岁<br/><b>Her daughter is 20 years old this year</b></h2></div>
</div>
<div class="container-fluid">
	<h4><audio controls="" preload="metadata" id="05-1"><button class="cd" onclick="play('05-1');">&#128191; 05-1</button>
	<source src="../mandarin/audio/05-1.mp3" type="audio/mpeg">No audio</audio>
	</h4>
	<h4 class="textSection">漯文一。Kè wén yī. Text 1.</h4>
	<h4 class="textSection">在学校。Zài xuéxiào. In the school.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Nǐ jiā yǒu jǐ kǒu rén?<br/>
		A: 你 家 有 口 人？<br/>
		<span class="masked">B: </span>Wǒ jiā yǒu sān kǒu rén.<br/>
		B: 我 家 有 三 口 人。
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: How many family members do you have?<br/>
		B: I have 3 family members<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4">New Words</th></tr>
			<tr><td>家</td><td>jiā</td><td>noun<td>family</td></tr>
			<tr><td>有</td><td>yǒu</td><td>verb</td><td>to have, there be</td></tr>
			<tr><td>口</td><td>kǒu</td><td>measure</td><td><i>a measure word for<br/>members of families, etc.</i></td></tr>
		</table>
		</div>
	</div>
	<h4><audio controls="" preload="metadata" id="05-2"><button class="cd" onclick="play('05-2');">&#128191; 05-2</button>
	<source src="../mandarin/audio/05-2.mp3" type="audio/mpeg">No audio</audio>
	</h4>
	<h4 class="textSection">漯文二。Kè wén èr. Text 2.</h4>
	<h4 class="textSection">在 办公室。Zài bàngōngshì. In the office.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Nǐ nǚ'ér jǐ suì le?<br/>
		A: 你 女儿 几 岁 了？<br/>
		<span class="masked">B: </span>Tā jīnnián sì suì le.<br/>
		B: 她 今年 四 岁 了。
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: How old is your daughter?<br/>
		B: She is four years old<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4">New Words</th></tr>
			<tr><td>女儿</td><td>nǚ'ér</td><td>noun</td><td>daughter</td></tr>
			<tr><td>几</td><td>jǐ</td><td>pronoun</td><td>how many</td></tr>
			<tr><td>岁</td><td>suì</td><td>measure</td><td>year (of age)</td></tr>
			<tr><td>了</td><td>le</td><td>particle</td><td><i>used at the end of or in<br/>the middle of a sentence<br/>to indicate a change or<br/>a new circumstance</i></td></tr>
			<tr><td>今年</td><td>jīnnián</td><td>noun</td><td>this year</td></tr>
		</table>
		</div>
	</div>
	<h4><button class="cd" onclick="play('05-3');">&#128191; 05-3</button>
	<audio controls="" preload="metadata" id="05-3"><source src="../mandarin/audio/05-3.mp3" type="audio/mpeg">No audio</audio>
	</h4>
	<h4 class="textSection">漯文三。Kè wén sān. Text 3.</h4>
	<h4 class="textSection">在 办公室。Zài bàngōngshì. In the office.</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Lǐ lǎoshī duō dà le?<br/>
		A: 李 老师 多 大 了？<br/>
		<span class="masked">B: </span>Tā jīnnián wǔshí suì le.<br/>
		B: 她 今年 五十 岁 了。<br/>
		<br/>
		<span class="masked">A: </span>Tā nǚ'ér ne?<br/>
		A: 她 女儿 呢？<br/>
		<span class="masked">B: </span>Tā nǚ'ér jīnnián érshí suì.<br/>
		B: 她 女儿 今年 二十 岁。
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: How old is Professor Li?<br/>
		B: She is 50 years old<br/><br/>
		A: What about her daughter<br/>
		B: Her daughter is 20.<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4">New Words</th></tr>
			<tr><td>多</td><td>duō</td><td>adverb</td><td><i>indicating degree<br/>or extent</i></td></tr>
			<tr><td>大</td><td>dà</td><td>adjective</td><td>(of age) old</td></tr>
		</table>
		</div>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">汪释 Notes</h3>
	<h4 class="sublesson">1. The Interrogative Pronoun "<b>几</b>" <i>(jǐ)</i></h4>
	<p>The interrogative Pronoun "<b>几</b>" <i>(jǐ)</i> is used to ask about a number, usually less than 10. For example:</p>
	<table class="table table-responsive table-condensed">
		<tr><td>你有<b>几</b>个汉语老师<br/>Nǐ yǒu <b>jǐ</b> ge Hànyǔ lǎoshī?</td><td>How many Chinese teachers do you have?</td></tr>
		<tr><td>李老师家有<b>几</b>口人？<br/>Lǐ lǎoshī jiā yǒu <b>jǐ</b> kǒu rén?</td><td>Professor Lǐ's family has how many members?</td></tr>
		<tr><td>你女儿<b>几</b>岁了？<br/>Nǐ nǚ'ér <b>jǐ</b> suì le?</td><td>Your daughter is how old?</td></tr>
	</table>
	<h4 class="sublesson">2. Numbers below 100</h4>
	<div class="table-responsive">
	<table class="numbers table table-condensed table-centered">
		<tr><th>0<br/>零<br/>líng</th><th>1<br/>一<br/>yī</th><th>2<br/>二<br/>èr</th><th>3<br/>三<br/>sān</th><th>4<br/>四<br/>sì</th>
			<th>5<br/>五<br/>wǔ</th><th>6<br/>六<br/>liù</th><th>7<br/>七<br/>qī</th><th>8<br/>八<br/>bā</th><th>9<br/>九<br/>jiǔ</th></tr>
<tr><td>10<br/>十<br/>shí</td><td>11<br/>十一<br/>shíyī</td><td>12<br/>十二<br/>shíèr</td><td>13<br/>十三<br/>shísān</td><td>14<br/>十四<br/>shísì</td>
<td>15<br/>十五<br/>shíwǔ</td><td>16<br/>十六<br/>shíliù</td><td>17<br/>十七<br/>shíqī</td><td>18<br/>十八<br/>shíbā</td><td>19<br/>十九<br/>shíjiǔ</td></tr>
<tr><td>20<br/>二十<br/>èrshí</td><td>21<br/>二十一<br/>èrshíyī</td><td>22<br/>二十二<br/>èrshíèr</td><td>23<br/>二十三<br/>èrshísān</td><td>24<br/>二十四<br/>èrshísì</td>
<td>25<br/>二十五<br/>èrshíwǔ</td><td>26<br/>二十六<br/>èrshíliù</td><td>27<br/>二十七<br/>èrshíqī</td><td>28<br/>二十八<br/>èrshíbā</td><td>>29<br/>二十九<br/>èrshíjiǔ</td></tr>
<tr><td>30<br/>三十<br/>sānshí</td><td>31<br/>三十一<br/>sānshíyī</td><td>32<br/>三十二<br/>sānshíèr</td><td>33<br/>三十三<br/>sānshísān</td><td>34<br/>三十四<br/>sānshísì</td>
<td>35<br/>三十五<br/>sānshíwǔ</td><td>36<br/>三十六<br/>sānshíliù</td><td>37<br/>三十七<br/>sānshíqī</td><td>38<br/>三十八<br/>sānshíbā</td><td>39<br/>三十九<br/>sānshíjiǔ</td></tr>
<tr><td>40<br/>四十<br/>sìshí</td><td>41<br/>四十一<br/>sìshíyī</td><td>42<br/>四十二<br/>sìshíèr</td><td>43<br/>四十三<br/>sìshísān</td><td>44<br/>四十四<br/>sìshísì</td>
<td>45<br/>四十五<br/>sìshíwǔ</td><td>46<br/>四十六<br/>sìshíliù</td><td>47<br/>四十七<br/>sìshíqī</td><td>48<br/>四十八<br/>sìshíbā</td><td>49<br/>四十九<br/>sìshíjiǔ</td></tr>
<tr><td>50<br/>五十<br/>wǔshí</td><td>51<br/>五十一<br/>wǔshíyī</td><td>52<br/>五十二<br/>wǔshíèr</td><td>53<br/>五十三<br/>wǔshísān</td><td>54<br/>五十四<br/>wǔshísì</td>
<td>55<br/>五十五<br/>wǔshíwǔ</td><td>56<br/>五十六<br/>wǔshíliù</td><td>57<br/>五十七<br/>wǔshíqī</td><td>58<br/>五十八<br/>wǔshíbā</td><td>59<br/>五十九<br/>wǔshíjiǔ</td></tr>
<tr><td>60<br/>六十<br/>liùshí</td><td>61<br/>六十一<br/>liùshíyī</td><td>62<br/>六十二<br/>liùshíèr</td><td>63<br/>六十三<br/>liùshísān</td><td>64<br/>六十四<br/>liùshísì</td>
<td>65<br/>六十五<br/>liùshíwǔ</td><td>66<br/>六十六<br/>liùshíliù</td><td>67<br/>六十七<br/>liùshíqī</td><td>68<br/>六十八<br/>liùshíbā</td><td>69<br/>六十九<br/>liùshíjiǔ</td></tr>
<tr><td>70<br/>七十<br/>qishí</td><td>71<br/>七十一<br/>qishíyī</td><td>72<br/>七十二<br/>qishíèr</td><td>73<br/>七十三<br/>qishísān</td><td>74<br/>七十四<br/>qishísì</td>
<td>75<br/>七十五<br/>qishíwǔ</td><td>76<br/>七十六<br/>qishíliù</td><td>77<br/>七十七<br/>qishíqī</td><td>78<br/>七十八<br/>qishíbā</td><td>>79<br/>七十九<br/>qishíjiǔ</td></tr>
<tr><td>80<br/>八十<br/>bāshí</td><td>81<br/>八十一<br/>bāshíyī</td><td>82<br/>八十二<br/>bāshíèr</td><td>83<br/>八十三<br/>bāshísān</td><td>84<br/>八十四<br/>bāshísì</td>
<td>85<br/>八十五<br/>bāshíwǔ</td><td>86<br/>八十六<br/>bāshíliù</td><td>87<br/>八十七<br/>bāshíqī</td><td>88<br/>八十八<br/>bāshíbā</td><td>89<br/>八十九<br/>bāshíjiǔ</td></tr>
<tr><td>90<br/>九十<br/>jiǔshí</td><td>91<br/>九十一<br/>jiǔshíyī</td><td>92<br/>九十二<br/>jiǔshíèr</td><td>93<br/>九十三<br/>jiǔshísān</td><td>94<br/>九十四<br/>jiǔshísì</td>
<td>95<br/>九十五<br/>jiǔshíwǔ</td><td>96<br/>九十六<br/>jiǔshíliù</td><td>97<br/>九十七<br/>jiǔshíqī</td><td>98<br/>九十八<br/>jiǔshíbā</td><td>99<br/>九十九<br/>jiǔshíjiǔ</td>
		</tr>
	</table>
	</div>
	<h4 class="sublesson">3. "了" <i>(le)</i> Indicating a change.</h4>
	<p>"了" is used at the end of a sentence to indicate a change or the occurrence of a new situation. For example:</p>
	<div class="table-responsive">
		<table class="table table-responsive table-condensed">
			<tr><td>李老师今年五十岁<b>了</b><br/>Lǐ lǎoshī jīnnián wǔshí suì <b>le</b></td><td>Professor Lǐ is 50 years old this year.</td></tr>
			<tr><td>我朋友的女儿今年四岁<b>了</b><br/>Wǒ péngyou de nǚ'ér jīnnián sì suì <b>le</b></td><td>My friends daughter is four years old this year.</td></tr>
			<tr><td>你女儿几岁<b>了</b><br/>Nǐ nǚ'ér jǐ suì <b>le</b>?</td><td>Your daughter is how old?</td></tr>
		</table>
	</div>
	<h4 class="sublesson">4. The Interrogative phrase "多 + 大" <i>(duō + dà)</i></h4>
	<p>"多 + 大" <i>(duō + dà)</i> is used to ask about ones age. For example:</p>
	<div class="table-responsive">
		<table class="table table-responsive table-condensed">
			<tr><td>你<b>多大</b>了<br/>Nǐ <b>duō dà</b> le?</td><td>You are how old?</td></tr>
			<tr><td>你女儿今年<b>多大</b>了<br/>Nǐ nǚ'ér jīnnián <b>duō dà</b> le?</td><td>Your daughter is how old this year?</td></tr>
			<tr><td>李老师<b>多大</b>了<br/>Lǐ lǎoshī <b>duō dà</b> le?</td><td>Professor Lǐ is how old?</td></tr>
		</table>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3 class="sublesson">练习 (liàn xí) Exercises</h3>
	<h4 class="sublesson">1. Role-play the dialogues</h4>
	<h4 class="sublesson">2. Answer the questions according to the actual situations</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="han hanzi51">你 家 有 几 口 人？<br/>
			<button type="button" id="n51" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g51" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn51">Nǐ jiā yǒu jī kǒu rén?<br/></span>
		<span class="eng" id="eng51">How many people are there in your family?<br/></span>
		<br/>
		<span class="han hanzi52">你 今年 多 大 了？<br/>
			<button type="button" id="n52" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g52" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn52">Nǐ jīnnián duō dà le?<br/></span>
		<span class="eng" id="eng52">How old are you?<br/></span>
		<br/>
		<span class="han hanzi53">你 的 汉语 老师 今年 多 大 了？<br/>
			<button type="button" id="n53" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g53" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn53">Nǐ de Hànyǔ lǎoshī jīnnián duō dà le?<br/></span>
		<span class="eng" id="eng53">Your Chinese teacher is how old?<br/></span>
		<br/>
		<span class="han hanzi54">你 的 中国 朋友 家 有 几 口 人？<br/>
			<button type="button" id="n54" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g54" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn54">Nǐ de Zhōngguó péngyou jiā yǒu jī kǒu rén?<br/></span>
		<span class="eng" id="eng54">Your Chinese friend has how many family members?<br/></span>
		<br/>
		<span class="han hanzi55">你 的 中国 朋友 今年 多 大 了？<br/>
			<button type="button" id="n55" onclick="myToggle(this.id);">拼音</button>
			<button type="button" id="g55" onclick="myToggle(this.id);">英语</button><br/></span>
		<span class="pyn" id="pyn55">Nǐ de Zhōngguó péngyou jīnnián duō dà le?<br/></span>
		<span class="eng" id="eng55">Your Chinese friend is how old?<br/></span>
		<br/>
	</div>
	<h4 class="sublesson">3. Describe the pictures using the newly-learned language points and words.</h4>
	<div class="col-xs-12 col">
	<p>Tā shi [ <button type="button" id="nX1" onclick="myToggle(this.id);">1</button> <span class="pyn" id="pynX1">xuésheng</span> ], 
	tā jīnnián [ <button type="button" id="nX2" onclick="myToggle(this.id);">2</button> <span class="pyn" id="pynX2">shí suì</span> ] le。</p>
	<p>他 是 [ <button type="button" id="ziX1" onclick="myToggle(this.id);">一</button> <span class="xhan" id="hanziX1">学生</span> ],
	 他 今年 [ <button type="button" id="ziX2" onclick="myToggle(this.id);">二</button> <span class="xhan" id="hanziX2">十岁</span> ] 了。<br/><br/>	
	</p>
	<p>Tā jiā yǒu [ <button type="button" id="nX3" onclick="myToggle(this.id);">3</button> <span class="pyn" id="pynX3">lǎoshī</span> ] rén<br/>
	她 家 有 [ <button type="button" id="ziX3" onclick="myToggle(this.id);">三</button> <span class="xhan" id="hanziX3">老师</span> ] 人。<br/><br/>
	</p>
	<p>Tā shì wǒmen de Hànyǔ [ <button type="button" id="nX4" onclick="myToggle(this.id);">4</button> <span class="pyn" id="pynX4">lǎoshī</span> ] ,
	 tā jīnnián [ <button type="button" id="nX5" onclick="myToggle(this.id);">5</button> <span class="pyn" id="pynX5">sān shí suì</span> ] le.<br/>
	他 是 我们 的 汉语 [ <button type="button" id="ziX4" onclick="myToggle(this.id);">四</button> <span class="xhan" id="hanziX4">老师</span>  ] ,
	他 今年 [ <button type="button" id="ziX5" onclick="myToggle(this.id);">五</button> <span class="xhan" id="hanziX5">三十岁</span>  ] 了<br/><br/>
	</p>
	<p>Zhè shì Zhāng lǎoshī de [ <button type="button" id="nX6" onclick="myToggle(this.id);">6</button> <span class="pyn" id="pynX6">nǚ'èr</span>  ],
	 tā jīnnián [ <button type="button" id="nX7" onclick="myToggle(this.id);">7</button> <span class="pyn" id="pynX7">ér shí suì</span> ] le。<br/>
	这 是 张 老师 的 [ <button type="button" id="ziX6" onclick="myToggle(this.id);">六</button> <span class="xhan" id="hanziX6">女儿</span> ], 
	她 今年 [ <button type="button" id="ziX7" onclick="myToggle(this.id);">七</button> <span class="xhan" id="hanziX7">二十岁</span> ] 了。</p>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3>拼音 Pinyin</h3>
	<h4 class="sublesson">1.The Retroflex Final "儿" (ér)</h4>
	<p>"儿" (ér) can be combined with a syllable before it, forming a retroflex syllable, which is written as "character + 儿" and spelt "syllable + r" in <i>pinyin</i>. For Example</p>
<audio class="hidden" controls=""  preload="metadata" id="xiao3hai2r"><source src="../mandarin/audio/xiao3hair2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="xiao3niao3r"><source src="../mandarin/audio/xiao3niao3r.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="fan4guan3r"><source src="../mandarin/audio/fan4guan3r.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="xiang1shui3r"><source src="../mandarin/audio/xiang1shui3r.m4a" type="audio/mpeg">No audio</audio>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('xiao3hai2r');">小孩儿<br/>xiǎo háir<br/>children</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('xiao3niao3r');">小鸟儿<br/>xiǎo niǎor<br/>small bird</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('fan4guan3r');">饭馆儿<br/>fànguǎnr<br/>restaurant</button></div>
		<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('xiang1shui3r');">香水儿<br/>xiāngshuǐr<br/>perfume</button></div>
	</div>
</div>
<div class="container-fluid">
	<h4 class="sublesson">2. Differentiation: pronunciation of finals with i, u, ü</h4>
	<h4 class="sublesson">&#128191; 05-5</h4>
	<p>Listen to the recording and read after it.  Pay attention to the differences between the pronunciations of the finals with and without <i>i.</i></p>
	<audio controls="controls" preload="metadata" id="05-5"><source src="../mandarin/audio/05-5.mp3" type="audio/mpeg">No audio</audio>
	<div class="table">
		<table class="table table-responsive table-condensed L1-L4">
			<tr><td>a</td><td>-----</td><td>ia</td></tr>
			<tr><td>e</td><td>-----</td><td>ie</td></tr>
			<tr><td>ao</td><td>-----</td><td>iao</td></tr>
			<tr><td>ou</td><td>-----</td><td>iou (iu)</td></tr>
			<tr><td>an</td><td>-----</td><td>ian</td></tr>
			<tr><td>ang</td><td>-----</td><td>iang</td></tr>
			<tr><td>ong</td><td>-----</td><td>iong</td></tr>
		</table>
	</div>
	<h4 class="sublesson">&#128191; 05-6</h4>
	<p>Listen to the recording and read after it.  Pay attention to the differences between the pronunciations of the finals with and without <i>u.</i></p>
	<audio controls="controls" preload="metadata" id="05-6"><source src="../mandarin/audio/05-6.mp3" type="audio/mpeg">No audio</audio>
	<div class="table">
		<table class="table table-responsive table-condensed L1-L4">
			<tr><td>a</td><td>-----</td><td>ua</td></tr>
			<tr><td>ai</td><td>-----</td><td>uai</td></tr>
			<tr><td>ei</td><td>-----</td><td>uei (ui)</td></tr>
			<tr><td>an</td><td>-----</td><td>uan</td></tr>
			<tr><td>en</td><td>-----</td><td>uen (un)</td></tr>
			<tr><td>ang</td><td>-----</td><td>uang</td></tr>
			<tr><td>eng</td><td>-----</td><td>ueng</td></tr>
		</table>
	</div>
	<h4 class="sublesson">&#128191; 05-7</h4>
	<p>Listen to the recording and read after it.  Pay attention to the differences between the pronunciations of the finals with and without <i>ü.</i></p>
	<audio controls="controls" preload="metadata" id="05-7"><source src="../mandarin/audio/05-7.mp3" type="audio/mpeg">No audio</audio>
	<div class="table">
		<table class="table table-responsive table-condensed L1-L4">
			<tr><td>e</td><td>-----</td><td>üe</td></tr>
			<tr><td>an</td><td>-----</td><td>üan</td></tr>
			<tr><td>en</td><td>-----</td><td>ün</td></tr>
		</table>
	</div>
</div>
<div class="container-fluid">
	<h4 class="sublesson">3. Difference between Aspirated and Unaspirated Initials</h4>
	<h4 class="sublesson">&#128191; 05-8</h4>
	<p>There are aspirated and unaspirated initials in Chinese, such as <i>b-p, d-t, i-q, z-c</i> and <i>zh-ch</i>, among which the first one in each pair is unaspirated and the second one is aspirated</p>
	<p>Listen to the recording and read after it.  Pay attention to the differences between the aspirated and unaspirated initials</p>
	<audio controls="controls" preload="metadata" id="05-8"><source src="../mandarin/audio/05-8.mp3" type="audio/mpeg">No audio</audio>
	<div class="table">
		<table class="table table-responsive table-condensed table-centered">
			<tr><td>b</td><td>-----</td><td>p</td><td>d</td><td>-----</td><td>t</td><td>g</td><td>-----</td><td>k</td></tr>
			<tr><td>j</td><td>-----</td><td>q</td><td>z</td><td>-----</td><td>c</td><td>zh</td><td>-----</td><td>ch</td></tr>
		</table>
	</div>
	<h4 class="sublesson">&#128191; 05-9</h4>
	<p>Listen to the recording and read after it.  Pay attention to the differences between the initials</p>
	<audio controls="controls" preload="metadata" id="05-9"><source src="../mandarin/audio/05-9.mp3" type="audio/mpeg">No audio</audio>
	<div class="table">
		<table class="table table-responsive table-condensed table-centered">
			<tr><td>棒<br/>bàng<br/>great</td><td><br/>-----</td><td>胖<br/>pàng<br/>fat</td>
				<td>度<br/>dù<br/>degree of</td><td><br/>-----</td><td>吐<br/>tù<br/>vomit</td>
				<td>狗<br/>gǒu<br/>dog</td><td><br/>-----</td><td>口<br/>kǒu<br/>mouth</td></tr>
			<tr><td>几<br/>jī<br/>almost</td><td><br/>-----</td><td>七<br/>qī<br/>7</td>
				<td>字<br/>zì<br/>word</td><td><br/>-----</td><td>次<br/>cì<br/>times</td>
				<td>桌<br/>zhuō<br/>table</td><td><br/>-----</td><td>车<br/>chē<br/>car</td></tr>
		</table>
	</div>
</div>
<div class="container-fluid">
	<h4 class="sublesson">4. Rules of <i>Pinyin (4)</i>: syllable dividing mark</h4>
	<p>When a syllable beginning with <i> a, o </i>or <i>e</i>follows another syllable, th esyllable-dividing mark ( &rsquo; ) is used to separate the two syllables, for example, <i>pí&rsquo;ǎo</i> (皮袄, fur-lined jacket)。</p>
	<p>Listen to the recording and read after it.  Pay attention to the differences between the words with and without the syllable-dividing mark</p>
	<audio controls="controls" preload="metadata" id="05-10"><source src="../mandarin/audio/05-10.mp3" type="audio/mpeg">No audio</audio>
	<div class="table">
		<table class="table table-responsive table-condensed table-centered">
			<tr><td>飘<br/>piāo<br/>to float</td><td><br/>-----</td><td>皮袄<br/>pí&rsquo;ǎo<br/>fur-lined jacket</td>
				<td>先<br/>xiān<br/>earlier, before</td><td><br/>-----</td><td>西安<br/>Xi&rsquo;ān<br/>City of X&rsquo;n</td></tr>
			<tr><td>接<br/>jiē<br/>to receive</td><td><br/>-----</td><td>饥饿<br/>jī&rsquo;è<br/>hungry</td>
				<td>将 (將)<br/>jiāng<br/>will, shall</td><td><br/>-----</td><td>激昂<br/>jī&rsquo;áng<br/>excited and impassioned</td></tr>
			<tr><td>发难 (發難)<br/>fānàn<br/>to launch<br/>an attack</td><td><br/>-----</td><td>翻案<br/>fān&rsquo;àn<br/>to reverse a verdict</td>
				<td>反感<br/>fǎngǎn<br/>to loathe</td><td><br/>-----</td><td>方案<br/>fāng&rsquo;àn<br/>work plan</td></tr>
		</table>
	</div>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3>汉字 Characters</h3>
	<h4 class="sublesson">1. Strokes of Chinese Characters (5)</h4>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="active">
				<th>笔画名称<br/>bǐ huà míng chēng<br/>Stroke</th>
				<th>运笔方向<br/>yùn bǐ<br/>fāng xiàng<br/>Direction</th>
				<th>例字<br/>lì zì<br/>Example<br/>Characters</th>
			</tr>
			<tr>
				<td>横撇 héngpiě<br/>horizontal<br/>to left-falling</td>
				<td><img style="width: 2em;" src="../mandarin/img/hengpie.gif" alt="héngpiě"/></td>
				<td>水&nbsp;shuǐ&nbsp;water<br/>又&nbsp;yòu&nbsp;again</td>
			</tr>
			<tr>
				<td>撇点 piědiǎn<br/>horizontal-turning<br/>curved hook</td>
				<td><img style="width: 2em;" src="../mandarin/img/piedian.gif" alt="piědiǎn"/></td>
				<td>女&nbsp;nü&nbsp;female. woman<br/>好&nbsp;hǎo&nbsp;good, fine</td>
			</tr>
		</table>
	</div>
	<h4 class="sublesson">2. Single-Component Characters</h4>
	<p><table class="table table-bordered table-condensed table-responsive table-centered table-SCC">
		<tr><td>水</td><td>shuǐ</td><td>water</td><td><div><img class="strokeOrder" src="img\水-order.gif" alt="水"/></div></td></tr>
		<tr><td>女</td><td>nǚ</td><td>woman</td><td><div><img class="strokeOrder" src="img\女-order.gif" alt="女"/></div></td></tr>
		<tr><td>了</td><td>le</td><td><i>indicates<br/>change</i></td><td><div><img class="strokeOrder" src="img\了-order.gif" alt="了"/></div></td></tr>
		<tr><td>大</td><td>dà</td><td>big</td><td><div><img class="strokeOrder" src="img\大-order.gif" alt="大"/></div></td></tr></table></p>
	<h4 class="sublesson">3. Stroke Order (3): outside preceding inside and middle preceding sides</h4>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="active">
				<th>Rule</th>
				<th>例字<br/>lì zì<br/>Example<br/>Characters</th>
				<th>Stroke Order</th>
			</tr>
			<tr>
				<td><br />Outside preceding<br/>inside</td>
				<td><br/>四 &nbsp; si &nbsp; four<br/><br/>国 &nbsp; guó &nbsp; country</td>
				<td><img class="strokeOrder" src="img\四-order.gif" alt="四 Stroke Order"/>
					<br/><img class="strokeOrder" src="img\国-order.gif" alt="国 Stroke Order"/></td>
			</tr>
			<tr>
				<td><br />Left preceding<br/>right</td>
				<td><br/>小 &nbsp; xiǎo &nbsp; small<br/><br/>水 &nbsp; shuǐ &nbsp; water</td>
				<td><img class="strokeOrder" src="img\小-order.gif" alt="小 Stroke Order"/>
					<br/><img class="strokeOrder" src="img\水-order.gif" alt="水 Stroke Order"/></td>
			</tr>
		</table>
	</div>
</div>
<?php
} else { header( 'Location: https://www.stephenmccready.asia/mi/index.php'); }
?>
</body>
</html>
