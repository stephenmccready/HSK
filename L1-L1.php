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
	<title>Level 1 - 1</title>
	<link type="text/css" rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.2.min.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.6/bootstrap.min.js"></script>
	<!--[if IE]>
	<script src="https://stephenmccready.asia/html5shiv.min.js"></script>
	<![endif]-->
	<script src="js/mi.js"></script>
	<link rel="stylesheet" href="css/main.css" />
</head>
<body onload="setTitle(); jLoadTones();">
<?php include 'navbar.php'; ?>
<div class="container-fluid">
	<div class="jumbotron lessonHeaderLeft">Dì yì kè<br/>第一课<br/>Lesson 1</div>
	<div class="lessonHeaderRight"><h2>Nǐ hǎo<br/>你㚥<br/><b>Hello</b></h2></div>
</div>
<div class="container-fluid">
	<h4 class="sublesson">漯文 Text 1. <button onclick="play('01-1');">&#128191; 01-1</button>
	<audio controls="" preload="metadata" id="01-1"><source src="../mandarin/audio/01-01.mp3" type="audio/mpeg">No audio</audio>
	</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Nǐ hǎo !<br/>
		A: 你好 !<br/>
		<span class="masked">B: </span>Nǐ hǎo !<br/>
		B: 你好 !<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: Hello!<br/>
		B: Hello!<br/>
		<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>你</td><td>nǐ</td><td>pron.</td><td>(<i>singular</i>) you</td></tr>
			<tr><td>好</td><td>hǎo</td><td>adj.</td><td>good, fine</td></tr>
		</table>
		</div>
	</div>
	<h4 class="sublesson">漯文 Text 2. (kè wén èr)<button onclick="play('01-2');">&#128191; 01-2</button>
	<audio controls="" preload="metadata" id="01-2"><source src="../mandarin/audio/01-02.mp3" type="audio/mpeg">No audio</audio>
	</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Nǐn hǎo !<br/>
		A: 您 好 !<br/>
		<span class="masked">B: </span>Nǐmen hǎo !<br/>
		B: 你们 好 !<br/>
	</div>
	<div class="col-xs-12 col-md-4 col">
		<div class="col-xs-12 col">
			<i>English Version</i><br/>
			A: Hello!<br/>
			B: Hello!<br/>
			<br/>
		</div>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>您</td><td>nǐn</td><td>pron.</td><td>(<i>polite</i>) you</td></tr>
			<tr><td>你们</td><td>nǐmen</td><td>pron.</td><td>(<i>plural</i>) you</td></tr>
		</table>
		</div>
	</div>
	<h4 class="sublesson">漯文 Text 3. <button onclick="play('01-3');">&#128191; 01-3</button>
	<audio controls="" preload="metadata" id="01-3"><source src="../mandarin/audio/01-03.mp3" type="audio/mpeg">No audio</audio>
	</h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Duìbuqǐ !<br/>
		A: 对不起 !<br/>
		<span class="masked">B: </span>Méi guānxi !<br/>
		B: 没 关系 !<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br/>
		A: I'm sorry!<br/>
		B: That's OK!<br/>
		<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>对不起</td><td>duìbuqǐ</td><td>verb</td><td>to be sorry</td></tr>
			<tr><td>没 关系</td><td>méi guānxi</td><td></td><td>that's OK<br/>it doesn't matter</tr>
		</table>
		</div>
	</div>
</div>
<div class="clearfix"><hr /></div>
<div class="container-fluid">
<audio class="hidden" controls="" preload="metadata" id="b"><source src="../mandarin/audio/i_b.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="p"><source src="../mandarin/audio/i_p.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="m"><source src="../mandarin/audio/i_m.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="f"><source src="../mandarin/audio/i_f.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="d"><source src="../mandarin/audio/i_d.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="t"><source src="../mandarin/audio/i_t.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="n"><source src="../mandarin/audio/i_n.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="l"><source src="../mandarin/audio/i_l.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="g"><source src="../mandarin/audio/i_g.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="k"><source src="../mandarin/audio/i_k.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="h"><source src="../mandarin/audio/i_h.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="j"><source src="../mandarin/audio/i_j.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="q"><source src="../mandarin/audio/i_q.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="x"><source src="../mandarin/audio/i_x.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="i"><source src="../mandarin/audio/f_i.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="u"><source src="../mandarin/audio/f_u.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="v"><source src="../mandarin/audio/f_v.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="er"><source src="../mandarin/audio/f_er.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="a"><source src="../mandarin/audio/f_a.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="ia"><source src="../mandarin/audio/f_ia.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="ua"><source src="../mandarin/audio/f_ua.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="o"><source src="../mandarin/audio/f_o.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="uo"><source src="../mandarin/audio/f_uo.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="e"><source src="../mandarin/audio/f_e.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="ie"><source src="../mandarin/audio/f_ie.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="ve"><source src="../mandarin/audio/f_ve.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="ai"><source src="../mandarin/audio/f_ai.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="uai"><source src="../mandarin/audio/f_uai.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="ei"><source src="../mandarin/audio/f_ei.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="uei"><source src="../mandarin/audio/f_uei.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="ao"><source src="../mandarin/audio/f_ao.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="iao"><source src="../mandarin/audio/f_iao.m4a" type="audio/mpeg">No audio</audio>
	<h3>拼音 Pinyin</h3>
	<h4 class="sublesson">1. Initials and Finals of Chinese <i>Pinyin (1)</i> &#128191; 01-4</h4>
	<div class="col-xs-12 col-md-6 col">
		<div class="row">
			<div class="col-xs-12 col">
				<h5>声母 (shēng mǔ) Initials (1)</h5>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('b');">b</button></div>
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('p');">p</button></div>
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('m');">m</button></div>
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('f');">f</button></div>
		</div>
		<div class="row">
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('d');">d</button></div>
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('t');">t</button></div>
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('n');">n</button></div>
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('l');">l</button></div>
		</div>
		<div class="row">
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('g');">g</button></div>
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('k');">k</button></div>
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('h');">h</button></div>
			<div class="col-xs-3 col"></div>
		</div>
		<div class="row">
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('j');">j</button></div>
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('q');">q</button></div>
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('x');">x</button></div>
			<div class="col-xs-3 col"></div>
		</div>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="row">
			<div class="col-xs-12 col">
				<h5>韵母 (yùn mǔ) Finals (1)</h5>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('i');">i</button></div>
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('u');">u</button></div>
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('v');">ü</button></div>
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('er');">er</button></div>
		</div>
		<div class="row">
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('a');">a</button></div>
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ia');">ia</button></div>
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ua');">ua</button></div>
			<div class="col-xs-3 col"></div>
		</div>
		<div class="row">
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('o');">o</button></div>
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('uo');">uo</button></div>
			<div class="col-xs-6 col"></div>
		</div>
		<div class="row">
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('e');">e</button></div>
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ie');">ie</button></div>
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ve');">üe</button></div>
			<div class="col-xs-3 col"></div>
		</div>
		<div class="row">
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ai');">ai</button></div>
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('uai');">uai</button></div>
			<div class="col-xs-6 col"></div>
		</div>
		<div class="row">
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ei');">ei</button></div>
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('uei');">uei (ui)</button></div>
			<div class="col-xs-6 col"></div>
		</div>
		<div class="row">
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ao');">ao</button></div>
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('iao');">iao</button></div>
			<div class="col-xs-6 col"></div>
		</div>
	</div>
	<h4 class="sublesson">2. Tones (Four Tones)</h4>
	<p>There are four basic tones in Chinese, respectively called the 1st tone (55), the 2nd tone (35), the 3rd tone (214) and the 4th tone (51). They make a difference in meaning.</p>
	<div class="row">
		<div class="col-xs-12 col-sm-3 col"><canvas id="tone1"></canvas><br/>mā<br/>吗<br/>mother</div>
		<div class="col-xs-12 col-sm-3 col"><canvas id="tone2"></canvas><br/>má<br/>麻<br/>fibrous crops</div>
		<div class="col-xs-12 col-sm-3 col"><canvas id="tone3"></canvas><br/>mǎ<br/>马<br/>horse</div>
		<div class="col-xs-12 col-sm-3 col"><canvas id="tone4"></canvas><br/>mà<br/>骂<br/>to scold</div>
	</div>
	<h5>Read the syllables aloud and pay attention to the tones. &#128191; 01-5</h5>
	<audio class="hidden" controls="" id="a1" preload="metadata"><source src="../mandarin/audio/a1.m4a" type="audio/mpeg">No audio</audio>
	<audio class="hidden" controls="" id="a2" preload="metadata"><source src="../mandarin/audio/a2.m4a" type="audio/mpeg">No audio</audio>
	<audio class="hidden" controls="" id="a3" preload="metadata"><source src="../mandarin/audio/a3.m4a" type="audio/mpeg">No audio</audio>
	<audio class="hidden" controls="" id="a4" preload="metadata"><source src="../mandarin/audio/a4.m4a" type="audio/mpeg">No audio</audio>
	<audio class="hidden" controls="" id="o1" preload="metadata"><source src="../mandarin/audio/o1.m4a" type="audio/mpeg">No audio</audio>
	<audio class="hidden" controls="" id="o2" preload="metadata"><source src="../mandarin/audio/o2.m4a" type="audio/mpeg">No audio</audio>
	<audio class="hidden" controls="" id="o3" preload="metadata"><source src="../mandarin/audio/o3.m4a" type="audio/mpeg">No audio</audio>
	<audio class="hidden" controls="" id="o4" preload="metadata"><source src="../mandarin/audio/o4.m4a" type="audio/mpeg">No audio</audio>
	<audio class="hidden" controls="" id="e1" preload="metadata"><source src="../mandarin/audio/e1.m4a" type="audio/mpeg">No audio</audio>
	<audio class="hidden" controls="" id="e2" preload="metadata"><source src="../mandarin/audio/e2.m4a" type="audio/mpeg">No audio</audio>
	<audio class="hidden" controls="" id="e3" preload="metadata"><source src="../mandarin/audio/e3.m4a" type="audio/mpeg">No audio</audio>
	<audio class="hidden" controls="" id="e4" preload="metadata"><source src="../mandarin/audio/e4.m4a" type="audio/mpeg">No audio</audio>
	<audio class="hidden" controls="" id="i1" preload="metadata"><source src="../mandarin/audio/i1.m4a" type="audio/mpeg">No audio</audio>
	<audio class="hidden" controls="" id="i2" preload="metadata"><source src="../mandarin/audio/i2.m4a" type="audio/mpeg">No audio</audio>
	<audio class="hidden" controls="" id="i3" preload="metadata"><source src="../mandarin/audio/i3.m4a" type="audio/mpeg">No audio</audio>
	<audio class="hidden" controls="" id="i4" preload="metadata"><source src="../mandarin/audio/i4.m4a" type="audio/mpeg">No audio</audio>
	<audio class="hidden" controls="" id="u1" preload="metadata"><source src="../mandarin/audio/u1.m4a" type="audio/mpeg">No audio</audio>
	<audio class="hidden" controls="" id="u2" preload="metadata"><source src="../mandarin/audio/u2.m4a" type="audio/mpeg">No audio</audio>
	<audio class="hidden" controls="" id="u3" preload="metadata"><source src="../mandarin/audio/u3.m4a" type="audio/mpeg">No audio</audio>
	<audio class="hidden" controls="" id="u4" preload="metadata"><source src="../mandarin/audio/u4.m4a" type="audio/mpeg">No audio</audio>
	<audio class="hidden" controls="" id="v1" preload="metadata"><source src="../mandarin/audio/v1.m4a" type="audio/mpeg">No audio</audio>
	<audio class="hidden" controls="" id="v2" preload="metadata"><source src="../mandarin/audio/v2.m4a" type="audio/mpeg">No audio</audio>
	<audio class="hidden" controls="" id="v3" preload="metadata"><source src="../mandarin/audio/v3.m4a" type="audio/mpeg">No audio</audio>
	<audio class="hidden" controls="" id="v4" preload="metadata"><source src="../mandarin/audio/v4.m4a" type="audio/mpeg">No audio</audio>
	<div class="tones">
		<div class="box">
			<button type="button" class="btn btn-huge btn-danger" onclick="play('a1');">ā</button>
			<button type="button" class="btn btn-huge btn-warning" onclick="play('a2');">á</button>
			<button type="button" class="btn btn-huge btn-success" onclick="play('a3');">ǎ</button>
			<button type="button" class="btn btn-huge btn-primary" onclick="play('a4');">à</button>
		</div>
		<div class="clearfix"></div>
		<div class="box">
			<button type="button" class="btn btn-huge btn-danger" onclick="play('o1');">ō</button>
			<button type="button" class="btn btn-huge btn-warning" onclick="play('o2');">ó</button>
			<button type="button" class="btn btn-huge btn-success" onclick="play('o3');">ǒ</button>
			<button type="button" class="btn btn-huge btn-primary" onclick="play('o4');">ò</button>
		</div>
		<div class="clearfix"></div>
		<div class="box">
			<button type="button" class="btn btn-huge btn-danger" onclick="play('e1');">ē</button>
			<button type="button" class="btn btn-huge btn-warning" onclick="play('e2');">é</button>
			<button type="button" class="btn btn-huge btn-success" onclick="play('e3');">ě</button>
			<button type="button" class="btn btn-huge btn-primary" onclick="play('e4');">è</button>
		</div>
		<div class="clearfix"></div>
		<div class="box">
			<button type="button" class="btn btn-huge btn-danger" onclick="play('i1');">ī</button>
			<button type="button" class="btn btn-huge btn-warning" onclick="play('i2');">í</button>
			<button type="button" class="btn btn-huge btn-success" onclick="play('i3');">ǐ</button>
			<button type="button" class="btn btn-huge btn-primary" onclick="play('i4');">ì</button>
		</div>
		<div class="clearfix"></div>
		<div class="box">
			<button type="button" class="btn btn-huge btn-danger" onclick="play('u1');">ū</button>
			<button type="button" class="btn btn-huge btn-warning" onclick="play('u2');">ú</button>
			<button type="button" class="btn btn-huge btn-success" onclick="play('u3');">ǔ</button>
			<button type="button" class="btn btn-huge btn-primary" onclick="play('u4');">ù</button>
		</div>
		<div class="clearfix"></div>
		<div class="box">
			<button type="button" class="btn btn-huge btn-danger" onclick="play('v1');">ǖ</button>
			<button type="button" class="btn btn-huge btn-warning" onclick="play('v2');">ǘ</button>
			<button type="button" class="btn btn-huge btn-success" onclick="play('v3');">ǚ</button>
			<button type="button" class="btn btn-huge btn-primary" onclick="play('v4');">ǜ</button>
		</div>
	</div>
	<div class="clearfix"></div>
	<h4>3. Chinese Syllables</h4>
	<p>A Chinese syllable is usually made up of an initial, a final and a tone. Generally speaking, one Chinese character corresponds to one syllable. A Chinese syllable can have no initial, but must have a final and a tone.</p>
	<div class="table-responsive table-centered">
		<table class="table table-striped table-bordered table-hover table-condensed table-responsive">
			<tr><th>Syllable</th><th>声母 Initial</th><th>韵母 Final</th><th>	Tone</th></tr>
			<tr><td>māo (猫, cat)</td><td>m</td><td>ao</td><td>ˉ</td></tr>
			<tr><td>yú (鱼, fish)</td><td></td><td>ü</td><td>´</td></tr>
			<tr><td>jiě (姐, elder sister)</td><td>j</td><td>ie</td><td>ˇ</td></tr>
			<tr><td>èr (二, two)</td><td></td><td>er</td><td>`</td></tr>
		</table>
	</div>
	<p><b>Note:</b> When <i>i</i> or <i>ü</i> acts as a syllable by itself, y is added before it, with the two dots on the top of <i>ü</i> being removed; when <i>u</i> acts as a syllable itself, w is added before it.</p>
	<div class="clearfix"></div>
	<div class="col-xs-12 col">
			<h4 class="sublesson">&#128191; 01-6</h4>
			<h5>Look at the pictures and read the monosyllabic words aloud.</h5>
<audio class="hidden" controls=""  preload="metadata" id="yi1"><source src="../mandarin/audio/yi1.mp3" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="wu3"><source src="../mandarin/audio/wu3.mp3" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="yu2"><source src="../mandarin/audio/yu2.mp3" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="er3"><source src="../mandarin/audio/er3.mp3" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="bi3"><source src="../mandarin/audio/bi3.mp3" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="mao1"><source src="../mandarin/audio/mao1.mp3" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="dao3"><source src="../mandarin/audio/dao3.mp3" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="hua1"><source src="../mandarin/audio/hua1.mp3" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="ji1"><source src="../mandarin/audio/ji1.mp3" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="qi1"><source src="../mandarin/audio/qi1.mp3" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="xie2"><source src="../mandarin/audio/xie2.mp3" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="xue3"><source src="../mandarin/audio/xue3.mp3" type="audio/mpeg">No audio</audio>
			<div class="row">
				<div class="col-xs-6 col-sm-3 col"><!-- <img class="lessonImg" src="img/yi1.png" alt="衣 yī"> -->
				<button type="button" class="btn btn-huge btn-default" onclick="play('yi1');">衣<br/>yī<br/>clothes</button></div>
				<div class="col-xs-6 col-sm-3 col"><!-- <img class="lessonImg" src="img/wu3.png" alt="五 wǔ"> -->
				<button type="button" class="btn btn-huge btn-default" onclick="play('wu3');">五<br/>wǔ<br/>5</button></div>
				<div class="col-xs-6 col-sm-3 col"><!-- <img class="lessonImg" src="img/yu2.png" alt="鱼 (魚) yú"> -->
				<button type="button" class="btn btn-huge btn-default" onclick="play('yu2');">鱼 (魚)<br/>yú<br/>fish</button></div>
				<div class="col-xs-6 col-sm-3 col"><!-- <img class="lessonImg" src="img/er3.png" alt="耳 ěr"> -->
				<button type="button" class="btn btn-huge btn-default" onclick="play('er3');">耳<br/>ěr<br/>ear</button></div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-3 col"><!-- <img class="lessonImg" src="img/bi3.png" alt="笔 (筆) bǐ"> -->
				<button type="button" class="btn btn-huge btn-default" onclick="play('bi3');">笔 (筆)<br/>bǐ<br/>pen</button></div>
				<div class="col-xs-6 col-sm-3 col"><!-- <img class="lessonImg" src="img/mao1.png" alt="猫 (貓) māo"> -->
				<button type="button" class="btn btn-huge btn-default" onclick="play('mao1');">猫 (貓)<br/>māo<br/>cat</button></div>
				<div class="col-xs-6 col-sm-3 col"><!-- <img class="lessonImg" src="img/dao3.png" alt="岛 (島) dǎo"> -->
				<button type="button" class="btn btn-huge btn-default" onclick="play('dao3');">岛 (島)<br/>dǎo<br/>island</button></div>
				<div class="col-xs-6 col-sm-3 col"><!-- <img class="lessonImg" src="img/hua1.png" alt="花 huā"> -->
				<button type="button" class="btn btn-huge btn-default" onclick="play('hua1');">花<br/>huā<br/>flower</button></div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-3 col"><!-- <img class="lessonImg" src="img/ji1.png" alt="鸡 (雞) jī"> -->
				<button type="button" class="btn btn-huge btn-default" onclick="play('ji1');">鸡 (雞)<br/>jī<br/>chicken</button></div>
				<div class="col-xs-6 col-sm-3 col"><!-- <img class="lessonImg" src="img/qi1.png" alt="七 qī"> -->
				<button type="button" class="btn btn-huge btn-default" onclick="play('qi1');">七<br/>qī<br/>7</button></div>
				<div class="col-xs-6 col-sm-3 col"><!-- <img class="lessonImg" src="img/xie2.png" alt="鞋 xié"> -->
				<button type="button" class="btn btn-huge btn-default" onclick="play('xie2');">鞋<br/>xié<br/>shoes</button></div>
				<div class="col-xs-6 col-sm-3 col"><!-- <img class="lessonImg" src="img/xue3.png" alt="雪 xuě"> -->
				<button type="button" class="btn btn-huge btn-default" onclick="play('xue3');">雪<br/>xuě<br/>snow</button></div>
			</div>
	</div>
	<div class="clearfix"></div>
	<div class="col-xs-12 col">
			<h4 class="sublesson">&#128191; 01-7</h4>
			<h5>Look at the pictures and read the disyllabic words aloud.</h5>
<audio class="hidden" controls=""  preload="metadata" id="ka1fei1"><source src="../mandarin/audio/ka1fei1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="ke3le4"><source src="../mandarin/audio/ke3le4.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="kao3ya1"><source src="../mandarin/audio/kao3ya1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="huo3guo1"><source src="../mandarin/audio/huo3guo1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="di4tu2"><source src="../mandarin/audio/di4tu2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="fei1ji1"><source src="../mandarin/audio/fei1ji1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="mao2bi3"><source src="../mandarin/audio/mao2bi3.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="er2ji1"><source src="../mandarin/audio/er2ji1.m4a" type="audio/mpeg">No audio</audio>
			<div class="row">
				<div class="col-xs-6 col-sm-3 col"><!-- <img style="display:block;" src="img/testimage.png" alt="咖啡 kā fēi"> -->
				<button type="button" class="btn btn-huge btn-default" onclick="play('ka1fei1');">咖啡<br/>kāfēi<br/>coffee</button></div>
				<div class="col-xs-6 col-sm-3 col"><!-- <img style="display:block;" src="img/testimage.png" alt="可乐 kě lè"> -->
				<button type="button" class="btn btn-huge btn-default" onclick="play('ke3le4');">可乐<br/>kělè<br/>cola</button></div>
				<div class="col-xs-6 col-sm-3 col"><!-- <img style="display:block;" src="img/testimage.png" alt="烤鸭 kǎoyā"> -->
				<button type="button" class="btn btn-huge btn-default" onclick="play('kao3ya1');">烤鸭<br/>kǎoyā<br/>roast duck</button></div>
				<div class="col-xs-6 col-sm-3 col"><!-- <img style="display:block;" src="img/testimage.png" alt="火锅 huǒ guō"> -->
				<button type="button" class="btn btn-huge btn-default" onclick="play('huo3guo1');">火锅<br/>huǒguō<br/>hotpot</button></div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-3 col"><!-- <img style="display:block;" src="img/testimage.png" alt="地图 dì tú"> -->
				<button type="button" class="btn btn-huge btn-default" onclick="play('di4tu2');">地图<br/>dìtú<br/>map</button></div>
				<div class="col-xs-6 col-sm-3 col"><!-- <img style="display:block;" src="img/testimage.png" alt="飞机 fēijī"> -->
				<button type="button" class="btn btn-huge btn-default" onclick="play('fei1ji1');">飞机<br/>fēijī<br/>airplane</button></div>
				<div class="col-xs-6 col-sm-3 col"><!-- <img style="display:block;" src="img/testimage.png" alt="毛笔 máobǐ"> -->
				<button type="button" class="btn btn-huge btn-default" onclick="play('mao2bi3');">毛笔<br/>máobǐ<br/>writing brush</button></div>
				<div class="col-xs-6 col-sm-3 col"><!-- <img style="display:block;" src="img/testimage.png" alt=""> -->
				<button type="button" class="btn btn-huge btn-default" onclick="play('er2ji1');">耳机<br/>ěrjī<br/>headphones</button></div>
			</div>
	</div>
	<div class="clearfix"></div>
	<h4>4. Tone Sandhi: 3<sup>rd</sup> tone + 3<sup>rd</sup> tone</h4>
	<p>When two third-tone syllables are read in sequence, the first syllable turns into the second tone, i.e., the 3+3 sequence becomes 2+3 one. For example, "nǐ (你)" + "hǎo (㚥)" is read "nǐ hǎo". However, when put in the written form, the original tone is kept.</p>
	<div class="table">
		<table class="table-responsive table-condensed">
			<tr><th></th><th></th><th></th><th></th></tr>
			<tr><td></td><td></td><td></td><td></td></tr>
			<tr><td></td><td></td><td></td><td></td></tr>
			<tr><td></td><td></td><td></td><td></td></tr>
		</table>
	</div>
	<div class="clearfix"></div>
	<div class="col-xs-12 col">
			<h5>Read the following words aloud and pay attention to the change in the tone of the 3<sup>rd</sup> tone syllables.<br/>
			<button class="cd" onclick="play('08-1');">&#128191; 01-8</button>
			<audio class="hidden" controls="" preload="metadata" id="01-08">
			<source src="../mandarin/audio/01-08.mp3" type="audio/mpeg">No audio</audio></h5>
			<div class="row">
				<div class="col-xs-6 col-sm-3 col">
				你好<br/>nǐ hǎo<br/>hello</div>
				<div class="col-xs-6 col-sm-3 col">
				可以<br/>kě yǐ<br/>can</div>
				<div class="col-xs-6 col-sm-3 col">
				辅导<br/>fǔdǎo<br/>to tutor</div>
				<div class="col-xs-6 col-sm-3 col">
				小解<br/>xiǎojiě<br/>to urinate</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-3 col">
				口语<br/>kǒuyǔ<br/>gossip</div>
				<div class="col-xs-6 col-sm-3 col">
				语法<br/>yǔfǎ<br/>grammar</div>
				<div class="col-xs-6 col-sm-3 col">
				法语<br/>Fǎyǔ<br/>French</div>
				<div class="col-xs-6 col-sm-3 col">
				讨好<br/>tǎohǎo<br/>to get the<br/>desired outcome </div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-3 col">
				了解<br/>liǎojiě<br/>to understand</div>
				<div class="col-xs-6 col-sm-3 col">
				友好<br/>yǒuhǎo<br/>friendly</div>
				<div class="col-xs-6 col-sm-3 col">
				雨伞<br/>yǔsǎn<br/>umbrella</div>
				<div class="col-xs-6 col-sm-3 col">
				手表<br/>shǒubiǎo<br/>wrist watch</div>
			</div>
	</div>
</div>
<div class="clearfix"><hr /></div>
<audio class="hidden" controls="" preload="metadata" id="shang4ke4"><source src="../mandarin/audio/shang4ke4.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="xia4ke4"><source src="../mandarin/audio/xia4ke4.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="xian4zai4xiu1xi"><source src="../mandarin/audio/xian4zai4xiu1xi.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="kan4hei1ban3"><source src="../mandarin/audio/kan4hei1ban3.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="gen1wo3du2"><source src="../mandarin/audio/gen1wo3du2.m4a" type="audio/mpeg">No audio</audio>
<div class="container-fluid">
	<h3>课堂月语 Classroom Expressions</h3>
	<hr />
	<table class="table table-condensed table-responsive">
		<tr>
			<td>上课</td>
			<td><button type="button" class="btn btn-huge btn-default" onclick="play('shang4ke4');">Shàng kè</button></td>
			<td>Class begins</td>
		</tr>
		<tr>
			<td>下课</td>
			<td><button type="button" class="btn btn-huge btn-default" onclick="play('xia4ke4');">Xià kè</button></td>
			<td>Class is over</td>
		</tr>
		<tr>
			<td>现在休息</td>
			<td><button type="button" class="btn btn-huge btn-default" onclick="play('xian4zai4xiu1xi');">Xiànzài xiūxi</button></td>
			<td>Take a break now</td>
		</tr>
		<tr>
			<td>看黑板</td>
			<td><button type="button" class="btn btn-huge btn-default" onclick="play('kan4hei1ban3');">Kàn hēibǎn</button></td>
			<td>Look at the blackboard</td>
		</tr>
		<tr>
			<td>跟我读</td>
			<td><button type="button" class="btn btn-huge btn-default" onclick="play('gen1wo3du2');">Gēn wǒ dú</button></td>
			<td>Read after me</td>
		</tr>
	</table>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3>汉字 Characters</h3>
	<h4 class="sublesson">1. Strokes of Chinese Characters (1)</h4>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="active">
				<th>笔画名称<br/>bǐ huà míng chēng<br/>Stroke</th>
				<th>运笔方向<br/>yùn bǐ fāng xiàng<br/>Direction</th>
				<th>例字<br/>lì zì<br/>Example<br/>Characters</th>
			</tr>
			<tr>
				<td>heng<br/>horizontal</td>
				<td><img style="width: 2em;" src="../mandarin/img/heng.gif" alt="heng"/></td>
				<td>一 yī &nbsp; 1<br/>二 èr &nbsp; 2</td>
			</tr>
			<tr>
				<td>竖 shù<br/>vertical</td>
				<td><img style="height: 2em; width: 1em;" src="../mandarin/img/shu.gif" alt="shu"/></td>
				<td>十 shí &nbsp; 10<br/>工 gōng &nbsp; work, labor</td>
			</tr>
			<tr>
				<td>撇 piě<br/>left-falling</td>
				<td><img style="width: 2em;" src="../mandarin/img/pie.gif" alt="pie"/></td>
				<td>人 rén &nbsp; human<br/>八 bā &nbsp; 8</td>
			</tr>
			<tr>
				<td>点 diǎn<br/>dot</td>
				<td><img style="width: 1em; height: 1em;" src="../mandarin/img/dian.gif" alt="dian"/></td>
				<td>不 bù &nbsp; no, not<br/>六 liǜ &nbsp; 6</td>
			</tr>
			<tr>
				<td>捺 nà<br/>right-falling</td>
				<td><img style="width: 2em;" src="../mandarin/img/na.gif" alt="na"/></td>
				<td>大 dà &nbsp; big<br/>天 tiān &nbsp; sky</td>
			</tr>
		</table>
	</div>
	<h4 class="sublesson">1. Single Component Characters</h4>
	<table class="table table-bordered table-condensed table-responsive table-centered table-SCC">
		<tr><td>一</td><td>yī</td><td>1</td><td><div><img class="strokeOrder" src="img/一-order.gif" alt="一"/></div></td></tr>
		<tr><td>二</td><td>èr</td><td>2</td><td><div><img class="strokeOrder" src="img/二-order.gif" alt="二"/></div></td></tr>
		<tr><td>三</td><td>sān</td><td>3</td><td><div><img class="strokeOrder" src="img/三-order.gif" alt="三"/></div></td></tr>
		<tr><td>四</td><td>sì</td><td>4</td><td><div><img class="strokeOrder" src="img/四-order.gif" alt="四"/></div></td></tr>
		<tr><td>五</td><td>wǔ</td><td>5</td><td><div><img class="strokeOrder" src="img/五-order.gif" alt="五"/></div></td></tr>
		<tr><td>六</td><td>liù</td><td>6</td><td><div><img class="strokeOrder" src="img/六-order.gif" alt="六"/></div></td></tr>
		<tr><td>七</td><td>qī</td><td>7</td><td><div><img class="strokeOrder" src="img/七-order.gif" alt="七"/></div></td></tr>
		<tr><td>八</td><td>bā</td><td>8</td><td><div><img class="strokeOrder" src="img/八-order.gif" alt="八"/></div></td></tr>	
		<tr><td>九</td><td>shuǐ</td><td>9</td><td><div><img class="strokeOrder" src="img/九-order.gif" alt="九"/></div></td></tr>
		<tr><td>十</td><td>shí</td><td>10</td><td><div><img class="strokeOrder" src="img/十-order.gif" alt="十"/></div></td></tr>
	</table>
</div>
<div class="dash"></div>
<?php
} else { header( 'Location: https://www.stephenmccready.asia/mi/index.php'); }
?>
</body>
</html>
