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
	<title>Level 1 - 2</title>
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
	<div class="lessonHeaderRight"><h2>Xièxie nǐ<br />谢谢<br /><b>Thank you</b></h2></div>
</div>
<div class="container-fluid">
	<h4 class="sublesson">漯文 Text 1. <button onclick="play('02-1');">&#128191; 02-1</button>
	<audio controls="" preload="metadata" id="02-1"><source src="../mandarin/audio/02-1.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Xièxie!<br />
		A: 谢谢！<br />
		<br />
		<span class="masked">B: </span>Bú xiè!<br />
		B: 不谢！
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br />
		A: Thank you!<br/>
		B: Sure!<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>谢谢</td><td>xièxie</td><td>verb</td><td>to thank</td></tr>
			<tr><td>不</td><td>bù</td><td>verb</td><td>no, not</td></tr>
		</table>
		</div>
	</div>
	<h4 class="sublesson">漯文 Text 2. <button onclick="play('02-2');">&#128191; 02-2</button>
	<audio controls="" preload="metadata" id="02-2"><source src="../mandarin/audio/02-2.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Xièxie nǐ!<br />
		A: 谢谢你！<br />
		<span class="masked">B: </span>Bú kèqi!<br />
		B: 不客气!
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br />
		A: Thank you!<br/>
		B: You're welcome!<br/>
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>不客气</td><td>bú kèqi</td><td></td><td>you're welcome<br/>don't mention it</td></tr>
		</table>
		</div>
	</div>
	<h4 class="sublesson">漯文 Text 3. <button onclick="play('02-3');">&#128191; 02-3</button>
	<audio controls="" preload="metadata" id="02-3"><source src="../mandarin/audio/02-3.mp3" type="audio/mpeg">No audio</audio></h4>
	<div class="col-xs-12 col-md-6 col">
		<span class="masked">A: </span>Zàijiàn!<br />
		A: 再见<br />
		<span class="masked">B: </span>Zàijiàn!<br />
		B: 再见
	</div>
	<div class="col-xs-12 col-md-6 col">
		<i>English Version</i><br />
		A: Goodbye!<br/>
		B: Bye!<br/>
		<br />
	</div>
	<div class="col-xs-12 col-md-6 col">
		<div class="table-responsive">
		<table class="table table-condensed table-responsive">
			<tr><th colspan="4"><i>New Words</i></th></tr>
			<tr><td>再见</td><td>zàijiàn</td><td>verb</td><td>to see you around</td></tr>
		</table>
		</div>
	</div>
</div>
<div class="clearfix"><hr /></div>
<audio class="hidden" controls=""  preload="metadata" id="zh"><source src="../mandarin/audio/i_zh.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="ch"><source src="../mandarin/audio/i_ch.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="sh"><source src="../mandarin/audio/i_sh.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="r"><source src="../mandarin/audio/i_r.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="z"><source src="../mandarin/audio/i_z.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="c"><source src="../mandarin/audio/i_c.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="s"><source src="../mandarin/audio/i_s.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="ou"><source src="../mandarin/audio/f_ou.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="iou"><source src="../mandarin/audio/f_iou.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="an"><source src="../mandarin/audio/f_an.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="ian"><source src="../mandarin/audio/f_ian.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="uan"><source src="../mandarin/audio/f_uan.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="van"><source src="../mandarin/audio/f_van.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="en"><source src="../mandarin/audio/f_en.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="in_"><source src="../mandarin/audio/f_in.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="uen"><source src="../mandarin/audio/f_uen.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="vn"><source src="../mandarin/audio/f_vn.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="ang"><source src="../mandarin/audio/f_ang.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="iang"><source src="../mandarin/audio/f_iang.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="uang"><source src="../mandarin/audio/f_uang.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="eng"><source src="../mandarin/audio/f_eng.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="ing"><source src="../mandarin/audio/f_ing.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="ueng"><source src="../mandarin/audio/f_ueng.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="ong"><source src="../mandarin/audio/f_ong.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="iong"><source src="../mandarin/audio/f_iong.m4a" type="audio/mpeg">No audio</audio>
<div class="container-fluid">
	<h3>拼音 Pinyin</h3>
	<h4 class="sublesson">1. Initials and Finals of Chinese <i>Pinyin (2)</i> &#128191; 02-4</h4>
	<div class="col-xs-12 col-md-6 col">
		<div class="row">
			<div class="col-xs-12 col">
				<h5>声母 (shēng mǔ) Initials (2)</h5>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('zh');">zh</button></div>
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ch');">ch</button></div>
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('sh');">sh</button></div>
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('r');">r</button></div>
		</div>
		<div class="row">
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('z');">z</button></div>
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('c');">c</button></div>
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('s');">s</button></div>
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
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ou');">ou</button></div>
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('iou');">iou (iu)</button></div>
			<div class="col-xs-6 col"></div>
		</div>
		<div class="row">
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('an');">an</button></div>
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ian');">ian</button></div>
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('uan');">uan</button></div>
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('van');">üan</button></div>
		</div>
		<div class="row">
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('en');">en</button></div>
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('in_');">in</button></div>
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('uen');">uen (un)</button></div>
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('vn');">ün</button></div>
		</div>
		<div class="row">
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ang');">ang</button></div>
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('iang');">iang</button></div>
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('uang');">uang</button></div>
			<div class="col-xs-3 col"></div>
		</div>
		<div class="row">
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('eng');">eng</button></div>
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ing');">ing</button></div>
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ueng');">ueng</button></div>
			<div class="col-xs-3 col"></div>
		</div>
		<div class="row">
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ong');">ong</button></div>
			<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('iong');">iong</button></div>
			<div class="col-xs-6 col"></div>
		</div>
	</div>
	<div class="col-xs-12 col">
		<h4 class="sublesson">&#128191; 02-5</h4>
		<h5>Look at the pictures and read the monosyllabic words aloud.</h5>
<audio class="hidden" controls=""  preload="metadata" id="san1"><source src="../mandarin/audio/san3.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="shan1"><source src="../mandarin/audio/shan1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="zhong1"><source src="../mandarin/audio/zhong1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="yang2"><source src="../mandarin/audio/yang2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="ling2"><source src="../mandarin/audio/ling2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="cai4"><source src="../mandarin/audio/cai4.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="shou3"><source src="../mandarin/audio/shou3.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="xiong2"><source src="../mandarin/audio/xiong2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="yun2"><source src="../mandarin/audio/yun2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="xing1"><source src="../mandarin/audio/xing1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="yuan2"><source src="../mandarin/audio/yuan2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="ren2"><source src="../mandarin/audio/ren2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="chuan2"><source src="../mandarin/audio/chuan2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="chuang2"><source src="../mandarin/audio/chuang2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="chi1"><source src="../mandarin/audio/chi1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="re4"><source src="../mandarin/audio/re4.mp3" type="audio/mpeg">No audio</audio>
			<div class="row">
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('san1');">三<br/>sān<br/>3</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('shan1');">山<br/>shān<br/>mountain</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('zhong1');">钟<br/>zhōng<br/>clock</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('yang2');">羊<br/>yáng<br/>sheep</button></div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ling2');">零<br/>líng<br/>0</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('cai4');">菜<br/>cài<br/>vegetable</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('shou3');">手<br/>shǒu<br/>hand</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('xiong2');">熊<br/>xióng<br/>bear</button></div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('yun2');">云<br/>yún<br/>cloud</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('xing1');">星<br/>xing<br/>star</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('yuan2');">元<br/>yuán<br/>currency</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ren2');">人<br/>rén<br/>people</button></div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('chuan2');">船<br/>chuán<br/>boat</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('chuang2');">床<br/>chuáng<br/>bed</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('chi1');">吃<br/>chī<br/>to eat</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('re4');">热<br/>rè<br/>hot</button></div>
			</div>
	</div>
<audio class="hidden" controls=""  preload="metadata" id="bing1xiang1"><source src="../mandarin/audio/bing1xiang1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="ji1dan4"><source src="../mandarin/audio/ji1dan4.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="si1ji1"><source src="../mandarin/audio/si1ji1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="zu2qiu2"><source src="../mandarin/audio/zu2qiu2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="ji1chang3"><source src="../mandarin/audio/ji1chang3.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="pa2shan1"><source src="../mandarin/audio/pa2shan1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="shou3biao3"><source src="../mandarin/audio/shou3biao3.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="xiong2mao1"><source src="../mandarin/audio/xiong2mao1.m4a" type="audio/mpeg">No audio</audio>
	<div class="col-xs-12 col">
		<h4 class="sublesson">&#128191; 02-6</h4>
		<h5>Look at the pictures and read the disyllabic words aloud </h5>
			<div class="row">
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('bing1xiang1');">冰箱<br/>bīngxiāng<br/>refrigerator</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ji1dan4');">鸡蛋<br/>jīdàn<br/>egg</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('si1ji1');">司机<br/>sījī<br/>driver</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('zu2qiu2');">足球<br/>zúqiú<br/>soccer</button></div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ji1chang3');">机场<br/>jīchǎng<br/>airport</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('pa2shan1');">爬山<br/>pá shān<br/>to climb a<br />mountain</button> </div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('shou3biao3');">手表<br/>shǒubiǎo<br/>wristwatch</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('xiong2mao1');">熊猫<br/>xióngmāo<br/>panda</button></div>
			</div>
	</div>
	<h4 class="sublesson">2. The Neutral Tone</h4>
	<div class="col-xs-12 col">
		<p>Apart from the four tones mentioned previously, there is another tone in Chinese, which is short and light, known as "the neutral tone". For example:</p>
			<div class="row">
				<div class="col-xs-6 col-sm-3 col"><button type="button" disabled="disabled" class="btn btn-huge btn-default" onclick="play('ma1ma');">吗吗<br/>māma<br/>mother</button> </div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" disabled="disabled" class="btn btn-huge btn-default" onclick="play('ye2ye');">爷爷<br/>yéye<br/>grandfather</button> </div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" disabled="disabled" class="btn btn-huge btn-default" onclick="play('nai3nai');">奶奶<br/>nǎinai<br/>grandmother</button> </div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" disabled="disabled" class="btn btn-huge btn-default" onclick="play('ba4ba');">爸爸<br/>bàba<br/>father</button> </div>
			</div>
		<h4 class="sublesson">&#128191; 02-7</h4>
<audio class="hidden" controls=""  preload="metadata" id="zhuo1zi"><source src="../mandarin/audio/zhuo1zi.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="fang2zi"><source src="../mandarin/audio/fang2zi.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="yi3zi"><source src="../mandarin/audio/yi3zi.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="gui4zi"><source src="../mandarin/audio/gui4zi.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="ta1men"><source src="../mandarin/audio/ta1men.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="ren2men"><source src="../mandarin/audio/ren2men.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="wo3men"><source src="../mandarin/audio/wo3men.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="di4di"><source src="../mandarin/audio/di4di.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="yi1fu"><source src="../mandarin/audio/yi1fu.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="er2zi"><source src="../mandarin/audio/er2zi.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="xi3huan"><source src="../mandarin/audio/xi3huan.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="ren4shi"><source src="../mandarin/audio/ren4shi.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="xian1sheng"><source src="../mandarin/audio/xian1sheng.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="peng2you"><source src="../mandarin/audio/peng2you.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="wan3shang"><source src="../mandarin/audio/wan3shang.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="piao4liang"><source src="../mandarin/audio/piao4liang.m4a" type="audio/mpeg">No audio</audio>
		<h5>Read the syllables aloud and pay attention to the neutral tone.</h5>
			<div class="row">
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('zhuo1zi');">桌子<br/>zhuōzi<br/>table</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('fang2zi');">房子<br/>fángzi<br/>house</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('yi3zi');">椅子<br/>yǐzi<br/>chair</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('gui4zi');">柜子<br/>guìzi<br/>cabinet</button></div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ta1men');">他们<br/>tāmen<br/>they</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ren2men');">人们<br/>rénmen<br/>people</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('wo3men');">我们<br/>wǒmen<br/>we</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('di4di');">弟弟<br/>dìdi<br/>younger<br />brother</button></div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('yi1fu');">衣服<br/>yīfu<br/>clothes</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('er2zi');">儿子<br/>érzi<br/>son</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('xi3huan');">喜欢<br/>xǐhuan<br/>like, love</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ren4shi');">认识<br/>rènshi<br/>know, meet</button></div>
			</div>
			<div class="row">
				<div class="col-xs-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('xian1sheng');">先生<br/>xiānsheng<br/>mister</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('peng2you');">朋友<br/>péngyou<br/>friend</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('wan3shang');">晚上<br/>wǎnshang<br/>night</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('piao4liang');">漂亮<br/>piàoliang<br/>beautiful</button></div>
			</div>
	</div>

<audio class="hidden" controls=""  preload="metadata" id="xue2xiao4"><source src="../mandarin/audio/xue2xiao4.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="bang1mang2"><source src="../mandarin/audio/bang1mang2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="lan2qiu2"><source src="../mandarin/audio/lan2qiu2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="nu3er2"><source src="../mandarin/audio/nu3er2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="you2yong3"><source src="../mandarin/audio/you2yong3.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="zhong1yu2"><source src="../mandarin/audio/zhong1yu2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="gong1si1"><source src="../mandarin/audio/gong1si1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="shi2jian1"><source src="../mandarin/audio/shi2jian1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="shen1ti3"><source src="../mandarin/audio/shen1ti3.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="kao3shi4"><source src="../mandarin/audio/kao3shi4.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="guo2jia1"><source src="../mandarin/audio/guo2jia1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="bao4zhi3"><source src="../mandarin/audio/bao4zhi3.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="hao3chi1"><source src="../mandarin/audio/hao3chi1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="xie4xie"><source src="../mandarin/audio/xie4xie.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="ke4qi"><source src="../mandarin/audio/ke4qi.m4a" type="audio/mpeg">No audio</audio>
	<h4 class="sublesson">3. Rules of Pinyin</h4>
	<div class="col-xs-12 col">
		<h4 class="sublesson">(1) Tone Marking &#128191; 02-8</h4>
		<p>Tone marks in Chinese are put above the vowels. When there are two or more vowels in the final of a syllable, the tone should be marked on the one that is pronounced with the mouth more wide-open, the sequences being <i>a,o,e,i,u, ü</i> in the descending order. The compound final <i>iu</i> is an exception to this rule, in which the tone mark is put on <i>u</i> rather than <i>i</i> as <i>iu</i> is the abbreviation of <i>iou</i>. The neutral tone is unmarked.</p>
		<h5>Read the syllables aloud and pay attention to the position of the tone marks.</h5>
			<div class="row">
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('xue2xiao4');">学校<br/>xuéxiào<br/>school</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('bang1mang2');">可以<br/>bāngmáng<br/>help</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('lan2qiu2');">篮球<br/>lánqiú<br/>basketball</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('nu3er2');">女儿<br/>nǚ'ér<br/>daughter</button></div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('you2yong3');">游泳<br/>yóuyǒng<br/>swim</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('shou3biao3');">手表<br/>shǒubiǎo<br/>wristwatch</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('zhong1yu2');">终于<br/>zhōngyú<br/>finally</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('gong1si1');">公司<br/>gōngsī<br/>company</button></div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('shi2jian1');">时间<br/>shíjiān<br/>time</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('shen1ti3');">身体<br/>shēntǐ<br/>body</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('kao3shi4');">考试<br/>kǎoshì<br/>test</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('guo2jia1');">国家<br/>guójiā<br/>country</button></div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('bao4zhi3');">报纸<br/>báozhǐ<br/>newspaper</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('hao3chi1');">好吃<br/>hǎochī<br/>delicious</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('xie4xie');">谢谢<br/>xièxie<br/>thank you</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ke4qi');">客气<br/>kèqi<br/>you're welcome</button></div>
			</div>
	</div>
<audio class="hidden" controls=""  preload="metadata" id="xiu1xi"><source src="../mandarin/audio/xiu1xi.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="shui4jiao4"><source src="../mandarin/audio/shui4jiao4.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="lun2chuan2"><source src="../mandarin/audio/lun2chuan2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="niu2nai3"><source src="../mandarin/audio/niu2nai3.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="pi2jiu3"><source src="../mandarin/audio/pi2jiu3.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="ang2gui4"><source src="../mandarin/audio/ang2gui4.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="liu2yan2"><source src="../mandarin/audio/liu2yan2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="kai1hu4"><source src="../mandarin/audio/kai1hu4.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="tao3lun4"><source src="../mandarin/audio/tao3lun4.m4a" type="audio/mpeg">No audio</audio>		
<audio class="hidden" controls=""  preload="metadata" id="lun2dun1"><source src="../mandarin/audio/lun2dun1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="shi1run4"><source src="../mandarin/audio/shi1run4.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="can2kui4"><source src="../mandarin/audio/can2kui4.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="shui3guo3"><source src="../mandarin/audio/shui3guo3.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="tao2zui4"><source src="../mandarin/audio/tao2zui4.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls=""  preload="metadata" id="shun4li4"><source src="../mandarin/audio/shun4li4.m4a" type="audio/mpeg">No audio</audio>
	<div class="col-xs-12 col">
		<h4 class="sublesson">(2) Abbreviation &#128191; 02-9</h4>
		<p>When <i>iou, uei</i> or <i>uen</i> follows an intial, they are written as <i>iu, ui</i> and <i>un</i> respectively, for example, <i>niu, giu, lun.</i></p>
		<h5>Read the syllables aloud and pay attention to the abbreviated finals.</h5>
			<div class="row">
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('xiu1xi');">休息<br />xiūxi<br />rest</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('shui4jiao4');">睡觉<br />shuìjiào<br />sleep</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('lun2chuan2');">轮船<br />lúnchuán<br />boat</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('niu2nai3');">牛奶<br />niúnǎi<br />milk</button></div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('pi2jiu3');">啤酒<br />píjiǔ<br />beer</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('ang2gui4');">昂贵<br />ángguì<br />expensive</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('liu2yan2');">流言 <br />liúyán<br />leave a<br/>message</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('kai1hu4');">开会<br />kāihuì<br />meeting</button></div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('tao3lun4');">讨论<br />tǎolùn<br />talk a lot</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('zu2qiu2');">足球<br />zúqiú<br />soccer</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('lun2dun1');">伦敦<br />Lúndūn<br />London</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('shi1run4');">湿润<br />shīrùn<br />wet</button></div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('can2kui4');">惭愧<br />cánkuì<br />shy</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('shui3guo3');">水果<br />shǔigǔo<br />fruit</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('tao2zui4');">陶醉<br />táozuì<br />put your<br/>heart into</button></div>
				<div class="col-xs-6 col-sm-3 col"><button type="button" class="btn btn-huge btn-default" onclick="play('shun4li4');">顺利<br />shùnlì<br />smoothly</button></div>
			</div>
	</div>
</div>
<div class="clearfix"><hr /></div>
<audio class="hidden" controls="" preload="metadata" id="da3kai1shu1"><source src="../mandarin/audio/da3kai1shu1.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="qing3da4sheng1du2"><source src="../mandarin/audio/qing3da4sheng1du2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="zai4du2yi2bian4"><source src="../mandarin/audio/zai4du2yi2bian4.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="yi4qi3du2"><source src="../mandarin/audio/yi4qi3du2.m4a" type="audio/mpeg">No audio</audio>
<audio class="hidden" controls="" preload="metadata" id="you3wen4ti2ma"><source src="../mandarin/audio/you3wen4ti2ma.m4a" type="audio/mpeg">No audio</audio>
<div class="container-fluid">
	<h3>课堂月语 Classroom Expressions</h3>
	<hr />
	<table class="table table-condensed table-responsive">
		<tr>
			<td>打开书</td>
			<td><button type="button" class="btn btn-huge btn-default" onclick="play('da3kai1shu1');">Dǎkāi shū</button></td>
			<td>Open your book</td>
		</tr>
		<tr>
			<td>请大声读</td>
			<td><button type="button" class="btn btn-huge btn-default" onclick="play('qing3da4sheng1du2');">Qǐng dà shēng dú</button></td>
			<td>Read aloud</td>
		</tr>
		<tr>
			<td>再读一遍</td>
			<td><button type="button" class="btn btn-huge btn-default" onclick="play('zai4du2yi2bian4');">Zài dú yí biàn</button></td>
			<td>Read once again/Repeat</td>
		</tr>
		<tr>
			<td>一起读</td>
			<td><button type="button" class="btn btn-huge btn-default" onclick="play('yi4qi3du2');">Yìqǐ dú</button></td>
			<td>Read together</td>
		</tr>
		<tr>
			<td>有问题吗</td>
			<td><button type="button" class="btn btn-huge btn-default" onclick="play('you3wen4ti2ma');">Yǒu wèntí ma?</button></td>
			<td>Any questions?</td>
		</tr>
	</table>
</div>
<div class="dash"></div>
<div class="container-fluid">
	<h3>汉字 Characters</h3>
	<h4 class="sublesson">1. Strokes of Chinese Characters (2)</h4>
	<div class="table-responsive">
		<table class="table table-bordered table-condensed table-responsive table-centered">
			<tr class="active">
				<th>笔画名称<br/>bǐ huà míng chēng<br/>Stroke</th>
				<th>运笔方向<br/>yùn bǐ fāng xiàng<br/>Direction</th>
				<th>例字<br/>lì zì<br/>Example Characters</th>
			</tr>
			<tr>
				<td>横折 héngzhé<br/>horizontal-turning</td>
				<td><img style="width: 2em;" src="../mandarin/img/hengzhe.gif" alt="héngzhé"/></td>
				<td>口 kǒu &nbsp; mouth<br />日 rì &nbsp; sun</td>
			</tr>
			<tr>
				<td>竖折 shùzhé<br/>vertical-turning</td>
				<td><img style="width: 2em;" src="../mandarin/img/shuzhe.gif" alt="shùzhé"/></td>
				<td>山 shān &nbsp; mountain<br />出 chū &nbsp; to come/go out</td>
			</tr>
			<tr>
				<td>竖钩 shùgōu<br/>vertical hook</td>
				<td><img style="height: 2.5em; width: 1em;" src="../mandarin/img/shugou.gif" alt="shùgōu"/></td>
				<td>丁 dīng &nbsp; man, member of a family<br />小 xiǎo &nbsp; small</td>
			</tr>
		</table>
	</div>
	<h4 class="sublesson">2. Single Component Characters</h4>
	<table class="table table-bordered table-condensed table-responsive table-centered table-SCC">
		<tr><td>口</td><td>kǒu</td><td>mouth</td><td><div><img class="strokeOrder" src="img\口-order.gif" alt="口"/></div></td></tr>	
		<tr><td>见</td><td>jiàn</td><td>to see</td><td><div><img class="strokeOrder" src="img\见-order.gif" alt="见"/></div></td></tr>	
		<tr><td>山</td><td>shān</td><td>mountain</td><td><div><img class="strokeOrder" src="img\山-order.gif" alt="山"/></div></td></tr>	
		<tr><td>小</td><td>xiǎo</td><td>small</td><td><div><img class="strokeOrder" src="img\小-order.gif" alt="小"/></div></td></tr>		
		<tr><td>不</td><td>bù</td><td>not</td><td><div><img class="strokeOrder" src="img\不-order.gif" alt="不"/></div></td></tr>	
	</table>
</div>
<?php
} else { header( 'Location: https://www.stephenmccready.asia/mi/index.php'); }
?>
</body>
</html>
