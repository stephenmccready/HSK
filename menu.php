<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
if(login_check($mysqli) == true) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>MI Menu</title>
	<link type="text/css" rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.2.min.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.6/bootstrap.min.js"></script>
	<!--[if IE]>
	<script src="https://stephenmccready.asia/html5shiv.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="css/main.css" />
<script>
$(function(){
	$(".dropdown-menu > li > a.trigger").on("click",function(e){
		var current=$(this).next();
		var grandparent=$(this).parent().parent();
		if($(this).hasClass('left-caret')||$(this).hasClass('right-caret'))
			$(this).toggleClass('right-caret left-caret');
		grandparent.find('.left-caret').not(this).toggleClass('right-caret left-caret');
		grandparent.find(".sub-menu:visible").not(current).hide();
		current.toggle();
		e.stopPropagation();
	});
	$(".dropdown-menu > li > a:not(.trigger)").on("click",function(){
		var root=$(this).closest('.dropdown');
		root.find('.left-caret').toggleClass('right-caret left-caret');
		root.find('.sub-menu:visible').hide();
	});
});
</script>
</head>
<body onload="$('#leveltitle').text('Level 1-Menu');">
		<?php include 'navbar.php'; ?>
		<p><?php
			getMemberLevel ($_SESSION['user_id'],$mysqli);
			if(htmlentities($_SESSION['memberlevel'])>0 && htmlentities($_SESSION['memberlevel'])<7) {
				switch(htmlentities($_SESSION['memberlevel'])) {
					case '1': case '2': case '3': case '4': case '5': case '6': ?>
						<div class="lessonMenu col-xs-12 col-md-6 col"><h4><span class="glyphicon glyphicon-education"></span> Level 1 Lessons</h4>
							<a href="L1-L1.php">1 Hello</a><br/>
							<a href="L1-L2.php">2 Thank you</a><br/>
							<a href="L1-L3.php">3 What's your name?</a><br/>
							<a href="L1-L4.php">4 She is my Chinese Teacher</a><br/>
							<a href="L1-L5.php">5 Her daughter is 20 years old this year</a><br/>
							<a href="L1-L6.php">6 I can speak Chinese</a><br/>
							<a href="L1-L7.php">7 What's the date today?</a><br/>
							<a href="L1-L8.php">8 I'd like some tea</a><br/>
							<a href="L1-L9.php">9 Where does your son work?</a><br/>
							<a href="L1-L10.php">10 Can I sit here?</a><br/>
							<a href="L1-L11.php">11 What's the time now?</a><br/>
							<a href="L1-L12.php">12 What will the weather be like tomorrow?</a><br/>
							<a href="L1-L13.php">13 He is learning to cook Chinese food</a><br/>
							<a href="L1-L14.php">14 She has bought quite a few clothes</a><br/>
							<a href="L1-L15.php">15 I came here by air</a><br/>
							<a href="L1-NewWords.php">New Words</a><br/>
							<a href="L1-Notes.php">Notes</a><br/>
							<a href="L1-Dialogues.php">Dialogues</a><br/>
							<a href="L1-SCC.php">Single Component Characters</a><br/>
							<a href="L1-Radicals.php">Radicals</a><br/>
							<a href="L1-Verbs.php">Verbs</a><br/>
						</div>
						<div class="lessonMenu col-xs-12 col-md-6 col"><h4><span class="glyphicon glyphicon-wrench"></span> Level 1 Exercises</h4>
							<a href="L1-E1.php">1 Nǐ hǎo. 你 㚥。</a><br/>
							<a href="L1-E2.php">2 Xièxie nǐ. 谢谢 你。</a><br/>
							<a href="L1-E3.php">3 Nǐ jiào shénme míngzi? 你 叫 什么 名字?</a><br/>
							<a href="L1-E4.php">4 Tā shì wǒ de Hànyǔ lǎoshī? 她 是 我 的 汉语 老师？</a><br/>
							<a href="L1-E5.php">5 Tā nǚ'ér jīnnián èrshí suì. 她 女儿 今年 二十 岁。</a><br/>
							<a href="L1-E6.php">6 Wǒ huì shuō Hànyǔ. 我 会 说 汉语。</a><br/>
							<a href="L1-E7.php">7 Jīntiān jǐ hào? 今天 几 号?</a><br/>
							<a href="L1-E8.php">8 Wǒ xiǎng hē chá. 我 想 喝 茶。</a><br/>
							<a href="L1-E9.php">9 Nǐ érzi zài nǎr gōngzuò？ 你 儿子 在 哪儿 工作？</a><br/>
							<a href="L1-E10.php">10 Wǒ néng zuò zhèr ma？ 我 能 坐 这人 吗？</a><br/>
							<a href="L1-E11.php">11 Xiànzài jǐ diǎn？ 现在 几 点？</a><br/>
							<a href="L1-E12.php">12 Míngtiān tiānqì zènmeyàng？ 明天 天气 怎么样？</a><br/>
							<a href="L1-E13.php">13 Tā zài xué zuò Zhōngguó cài ne. 他 在 学 做 中国 菜 呢。</a><br/>
							<a href="L1-E14.php">14 Tā mǎile bùshǎo yīfu. 她 买了 不少 衣服。</a><br/>
							<a href="L1-E15.php">15 Wǒ shì zuò fēijī lái de. 我 是 坐 飞机 来 的。</a><br/>
							<a href="L1-Test.php">16 Model Test</a><br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
						</div>
					<?php 
					case '2': case '3': case '4': case '5': case '6':  ?>
						<div class="lessonMenu col-xs-12 col-md-6 col"><h4><span class="glyphicon glyphicon-education"></span> Level 2 Lessons</h4>
							<a href="L2-L1.php">1 September is the best time to visit Beijing<br/>
							<a href="L2-L2.php">2 I get up at six every day</a><br/>
							<a href="L2-L3.php">3 The red one on the left is mine</a><br/>
							<a href="L2-L4.php">4 He recommended me for this job</a><br/>
							<a href="L2-L5.php">5 Take this one</a><br/>
							<a href="L2-L6.php">6 Why don't you eat more?</a><br/>
							<a href="L2-L7.php">7 Do you live far from your company?</a><br/>
							<a href="L2-L8.php">8 Let me think about it and I'll tell you later</a><br/>
							<a href="L2-L9.php">9 There were too many questions; I didn't finish all of them</a><br/>
							<a href="L2-L10.php">10 Stop looking for your cell phone; it's on the desk</a><br/>
							<a href="L2-L11.php">11 He is three years older than me</a><br/>
							<a href="L2-L12.php">12 You wear too little</a><br/>
							<a href="L2-L13.php">13 The door is open</a><br/>
							<a href="L2-L14.php">14 Have you seen that movie?</a><br/>
							<a href="L2-L15.php">15 The New Year is coming</a><br/>
							<a href="L2-NewWords.php">New Words</a><br/>
							<a href="L2-Notes.php">Notes</a><br/>
							<a href="L2-Dialogues.php">Dialogues</a><br/>
							<a href="L2-SCC.php">Single Component Characters</a><br/>
							<a href="L2-Radicals.php">Radicals</a><br/>
							<a href="L2-Verbs.php">Verbs</a><br/>
						</div>
						<div class="lessonMenu col-xs-12 col-md-6 col"><h4><span class="glyphicon glyphicon-wrench"></span> Level 2 Exercises</h4>
							<a href="L2-E1.php">1 Jiǔ yuè qù Běijīng lǚyóu zuì hǎo. 九 月 去 北京 旅游 最 好。</a><br/>
							<a href="L2-E2.php">2 Wǒ měi tiān liù diǎn qǐ chuáng. 我 每 天 六 点 起 床</a><br/>
							<a href="L2-E3.php">3 Zuǒbiān nǎge hóngsè de shì wǒ de. 左边 哪个 红色 的 是 我 的。</a><br/>
							<a href="L2-E4.php">4 Zhège gōngzuō shì tā bāng wǒ jièshào de. 这个 工作 是 她 帮 我 介绍 的。</a><br/>
							<a href="L2-E5.php">5 Jiù mǎi zhè jiàn ba. 就 买 这 件 吧。</a><br/>
							<a href="L2-E6.php">6 Nǐ zěnme bù chīle? 你 怎么 不 吃了？</a><br/>
							<a href="L2-E7.php">7 </a><br/>
							<a href="L2-E8.php">8 </a><br/>
							<a href="L2-E9.php">9 </a><br/>
							<a href="L2-E10.php">10 </a><br/>
							<a href="L2-E11.php">11 </a><br/>
							<a href="L2-E12.php">12 </a><br/>
							<a href="L2-E13.php">13 </a><br/>
							<a href="L2-E14.php">14 </a><br/>
							<a href="L2-E15.php">15 </a><br/>
							<a href="L2-Test.php">16 Model Test</a><br/>
							<br/>
							<br/>
							<br/>
							<a href="superlatives.php">Superlatives</a><br/>
						</div>
					<?php 
					case '3': case '4': case '5': case '6': ?>
						<div class="lessonMenu col-xs-12 col-md-6 col"><h4><span class="glyphicon glyphicon-education"></span> Level 3 Lessons</h4>
							<a href="L3-L1.php">1 </a><br/>
							<a href="L3-L2.php">2 </a><br/>
							<a href="L3-L3.php">3 </a><br/>
							<a href="L3-L4.php">4 </a><br/>
							<a href="L3-L5.php">5 </a><br/>
							<a href="L3-L6.php">6 </a><br/>
							<a href="L3-L7.php">7 </a><br/>
							<a href="L3-L8.php">8 </a><br/>
							<a href="L3-L9.php">9 </a><br/>
							<a href="L3-L10.php">10 </a><br/>
							<a href="L3-L11.php">11 </a><br/>
							<a href="L3-L12.php">12 </a><br/>
							<a href="L3-L13.php">13 </a><br/>
							<a href="L3-L14.php">14 </a><br/>
							<a href="L3-L15.php">15 </a><br/>
							<a href="L3-NewWords.php">New Words</a><br/>
						</div>
						<div class="lessonMenu col-xs-12 col-md-6 col"><h4><span class="glyphicon glyphicon-wrench"></span> Level 3 Exercises</h4>
							<a href="L3-E1.php">1 </a><br/>
							<a href="L3-E2.php">2 </a><br/>
							<a href="L3-E3.php">3 </a><br/>
							<a href="L3-E4.php">4 </a><br/>
							<a href="L3-E5.php">5 </a><br/>
							<a href="L3-E6.php">6 </a><br/>
							<a href="L3-E7.php">7 </a><br/>
							<a href="L3-E8.php">8 </a><br/>
							<a href="L3-E9.php">9 </a><br/>
							<a href="L3-E10.php">10 </a><br/>
							<a href="L3-E11.php">11 </a><br/>
							<a href="L3-E12.php">12 </a><br/>
							<a href="L3-E13.php">13 </a><br/>
							<a href="L3-E14.php">14 </a><br/>
							<a href="L3-E15.php">15 </a><br/>
							<a href="L3-Test.php">16 Model Test</a><br/>
						</div>
					<?php 
					case '4': case '5': case '6': ?>
						<div class="lessonMenu col-xs-12 col-md-6 col"><h4><span class="glyphicon glyphicon-education"></span> Level 4 Lessons</h4>
							<a href="L4-L1.php">1 </a><br/>
							<a href="L4-L2.php">2 </a><br/>
							<a href="L4-L3.php">3 </a><br/>
							<a href="L4-L4.php">4 </a><br/>
							<a href="L4-L5.php">5 </a><br/>
							<a href="L4-L6.php">6 </a><br/>
							<a href="L4-L7.php">7 </a><br/>
							<a href="L4-L8.php">8 </a><br/>
							<a href="L4-L9.php">9 </a><br/>
							<a href="L4-L10.php">10 </a><br/>
							<a href="L4-L11.php">11 </a><br/>
							<a href="L4-L12.php">12 </a><br/>
							<a href="L4-L13.php">13 </a><br/>
							<a href="L4-L14.php">14 </a><br/>
							<a href="L4-L15.php">15 </a><br/>
							<a href="L4-NewWords.php">New Words</a><br/>
						</div>
						<div class="lessonMenu col-xs-12 col-md-6 col"><h4><span class="glyphicon glyphicon-wrench"></span> Level 4 Exercises</h4>
							<a href="L4-E1.php">1 </a><br/>
							<a href="L4-E2.php">2 </a><br/>
							<a href="L4-E3.php">3 </a><br/>
							<a href="L4-E4.php">4 </a><br/>
							<a href="L4-E5.php">5 </a><br/>
							<a href="L4-E6.php">6 </a><br/>
							<a href="L4-E7.php">7 </a><br/>
							<a href="L4-E8.php">8 </a><br/>
							<a href="L4-E9.php">9 </a><br/>
							<a href="L4-E10.php">10 </a><br/>
							<a href="L4-E11.php">11 </a><br/>
							<a href="L4-E12.php">12 </a><br/>
							<a href="L4-E13.php">13 </a><br/>
							<a href="L4-E14.php">14 </a><br/>
							<a href="L4-E15.php">15 </a><br/>
							<a href="L4-Test.php">16 Model Test</a><br/>
						</div>
					<?php 
					case '5': case '6': ?>
						<div class="lessonMenu col-xs-12 col-md-6 col"><h4><span class="glyphicon glyphicon-education"></span> Level 5 Lessons</h4>
							<a href="L5-L1.php">1 </a><br/>
							<a href="L5-L2.php">2 </a><br/>
							<a href="L5-L3.php">3 </a><br/>
							<a href="L5-L4.php">4 </a><br/>
							<a href="L5-L5.php">5 </a><br/>
							<a href="L5-L6.php">6 </a><br/>
							<a href="L5-L7.php">7 </a><br/>
							<a href="L5-L8.php">8 </a><br/>
							<a href="L5-L9.php">9 </a><br/>
							<a href="L5-L10.php">10 </a><br/>
							<a href="L5-L11.php">11 </a><br/>
							<a href="L5-L12.php">12 </a><br/>
							<a href="L5-L13.php">13 </a><br/>
							<a href="L5-L14.php">14 </a><br/>
							<a href="L5-L15.php">15 </a><br/>
							<a href="L5-NewWords.php">New Words</a><br/>
						</div>
						<div class="lessonMenu col-xs-12 col-md-6 col"><h4><span class="glyphicon glyphicon-wrench"></span> Level 5 Exercises</h4>
							<a href="L5-E1.php">1 </a><br/>
							<a href="L5-E2.php">2 </a><br/>
							<a href="L5-E3.php">3 </a><br/>
							<a href="L5-E4.php">4 </a><br/>
							<a href="L5-E5.php">5 </a><br/>
							<a href="L5-E6.php">6 </a><br/>
							<a href="L5-E7.php">7 </a><br/>
							<a href="L5-E8.php">8 </a><br/>
							<a href="L5-E9.php">9 </a><br/>
							<a href="L5-E10.php">10 </a><br/>
							<a href="L5-E11.php">11 </a><br/>
							<a href="L5-E12.php">12 </a><br/>
							<a href="L5-E13.php">13 </a><br/>
							<a href="L5-E14.php">14 </a><br/>
							<a href="L5-E15.php">15 </a><br/>
							<a href="L5-Test.php">16 Model Test</a><br/>
						</div>
					<?php 
					case '6': ?>
						<div class="lessonMenu col-xs-12 col-md-6 col"><h4><span class="glyphicon glyphicon-education"></span> Level 6 Lessons</h4>
							<a href="L6-L1.php">1 </a><br/>
							<a href="L6-L2.php">2 </a><br/>
							<a href="L6-L3.php">3 </a><br/>
							<a href="L6-L4.php">4 </a><br/>
							<a href="L6-L5.php">5 </a><br/>
							<a href="L6-L6.php">6 </a><br/>
							<a href="L6-L7.php">7 </a><br/>
							<a href="L6-L8.php">8 </a><br/>
							<a href="L6-L9.php">9 </a><br/>
							<a href="L6-L10.php">10 </a><br/>
							<a href="L6-L11.php">11 </a><br/>
							<a href="L6-L12.php">12 </a><br/>
							<a href="L6-L13.php">13 </a><br/>
							<a href="L6-L14.php">14 </a><br/>
							<a href="L6-L15.php">15 </a><br/>
							<a href="L6-NewWords.php">New Words</a><br/>
						</div>
						<div class="lessonMenu col-xs-12 col-md-6 col"><h4><span class="glyphicon glyphicon-wrench"></span> Level 6 Exercises</h4>
							<a href="L6-E1.php">1 </a><br/>
							<a href="L6-E2.php">2 </a><br/>
							<a href="L6-E3.php">3 </a><br/>
							<a href="L6-E4.php">4 </a><br/>
							<a href="L6-E5.php">5 </a><br/>
							<a href="L6-E6.php">6 </a><br/>
							<a href="L6-E7.php">7 </a><br/>
							<a href="L6-E8.php">8 </a><br/>
							<a href="L6-E9.php">9 </a><br/>
							<a href="L6-E10.php">10 </a><br/>
							<a href="L6-E11.php">11 </a><br/>
							<a href="L6-E12.php">12 </a><br/>
							<a href="L6-E13.php">13 </a><br/>
							<a href="L6-E14.php">14 </a><br/>
							<a href="L6-E15.php">15 </a><br/>
							<a href="L6-Test.php">16 Model Test</a><br/>
						</div>
					<?php break;
					default : echo "No access to lessons/exercises at this time";
				};
			} else {
				echo 'No access to lessons/exercises at this time';
			} ?>
		</p>
</body>
<?php
} else { header( 'Location: https://www.stephenmccready.asia/mi/index.php'); }
?>
</html>
