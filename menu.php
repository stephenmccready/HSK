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
							<a class="btn btn-success btn-huge" href="L1-L1.php">1</a>
							<a class="btn btn-success btn-huge" href="L1-L2.php">2</a>
							<a class="btn btn-success btn-huge" href="L1-L3.php">3</a>
							<a class="btn btn-success btn-huge" href="L1-L4.php">4</a>
							<a class="btn btn-success btn-huge" href="L1-L5.php">5</a>
							<a class="btn btn-success btn-huge" href="L1-L6.php">6</a>
							<a class="btn btn-success btn-huge" href="L1-L7.php">7</a>
							<a class="btn btn-success btn-huge" href="L1-L8.php">8</a>
							<a class="btn btn-success btn-huge" href="L1-L9.php">9</a>
							<a class="btn btn-success btn-huge" href="L1-L10.php">10</a>
							<a class="btn btn-success btn-huge" href="L1-L11.php">11</a>
							<a class="btn btn-success btn-huge" href="L1-L12.php">12</a>
							<a class="btn btn-success btn-huge" href="L1-L13.php">13</a>
							<a class="btn btn-success btn-huge" href="L1-L14.php">14</a>
							<a class="btn btn-success btn-huge" href="L1-L15.php">15</a>
							<a class="btn btn-success btn-huge" href="L1-text.php">Text</a>
							<a class="btn btn-success btn-huge" href="L1-nw.php">New Words</a>
							<a class="btn btn-success btn-huge" href="L1-Notes.php">Notes</a>
							<a class="btn btn-success btn-huge" href="L1-Dialogues.php">Dialogues</a>
							<a class="btn btn-success btn-huge" href="L1-SCC.php">Single cmp chrs</a>
							<a class="btn btn-success btn-huge" href="L1-Radicals.php">Radicals</a>
							<a class="btn btn-success btn-huge" href="L1-Verbs.php">Verbs</a>
						</div>
						<div class="lessonMenu col-xs-12 col-md-6 col"><h4><span class="glyphicon glyphicon-wrench"></span> Level 1 Exercises</h4>
							<a class="btn btn-success btn-huge" href="L1-E1.php">1</a>
							<a class="btn btn-success btn-huge" href="L1-E2.php">2</a>
							<a class="btn btn-success btn-huge" href="L1-E3.php">3</a>
							<a class="btn btn-success btn-huge" href="L1-E4.php">4</a>
							<a class="btn btn-success btn-huge" href="L1-E5.php">5</a>
							<a class="btn btn-success btn-huge" href="L1-E6.php">6</a>
							<a class="btn btn-success btn-huge" href="L1-E7.php">7</a>
							<a class="btn btn-success btn-huge" href="L1-E8.php">8</a>
							<a class="btn btn-success btn-huge" href="L1-E9.php">9</a>
							<a class="btn btn-success btn-huge" href="L1-E10.php">10</a>
							<a class="btn btn-success btn-huge" href="L1-E11.php">11</a>
							<a class="btn btn-success btn-huge" href="L1-E12.php">12</a>
							<a class="btn btn-success btn-huge" href="L1-E13.php">13</a>
							<a class="btn btn-success btn-huge" href="L1-E14.php">14</a>
							<a class="btn btn-success btn-huge" href="L1-E15.php">15</a>
							<a class="btn btn-success btn-huge" href="L1-Test.php">16 (Test)</a>
							<a class="btn btn-success btn-huge" href="Radicals.php">Radicals</a>
							<a class="btn btn-success btn-huge" href="superlatives.php">Superlatives</a>
						</div>
					<?php 
					case '2': case '3': case '4': case '5': case '6':  ?>
						<div class="clearfix"></div>
						<div class="lessonMenu col-xs-12 col-md-6 col"><h4><span class="glyphicon glyphicon-education"></span> Level 2 Lessons</h4>
							<a class="btn btn-success btn-huge" href="L2-L1.php">1</a>
							<a class="btn btn-success btn-huge" href="L2-L2.php">2</a>
							<a class="btn btn-success btn-huge" href="L2-L3.php">3</a>
							<a class="btn btn-success btn-huge" href="L2-L4.php">4</a>
							<a class="btn btn-success btn-huge" href="L2-L5.php">5</a>
							<a class="btn btn-success btn-huge" href="L2-L6.php">6</a>
							<a class="btn btn-success btn-huge" href="L2-L7.php">7</a>
							<a class="btn btn-success btn-huge" href="L2-L8.php">8</a>
							<a class="btn btn-success btn-huge" href="L2-L9.php">9</a>
							<a class="btn btn-success btn-huge" href="L2-L10.php">10</a>
							<a class="btn btn-success btn-huge" href="L2-L11.php">11</a>
							<a class="btn btn-success btn-huge" href="L2-L12.php">12</a>
							<a class="btn btn-success btn-huge" href="L2-L13.php">13</a>
							<a class="btn btn-success btn-huge" href="L2-L14.php">14</a>
							<a class="btn btn-success btn-huge" href="L2-L15.php">15</a>
							<a class="btn btn-success btn-huge" href="L2-text.php">Text</a>
							<a class="btn btn-success btn-huge" href="L2-nw.php">New Words</a>
							<a class="btn btn-success btn-huge" href="L2-Notes.php">Notes</a>
							<a class="btn btn-success btn-huge" href="L2-Dialogues.php">Dialogues</a>
							<a class="btn btn-success btn-huge" href="L2-SCC.php">Single cmp chrs</a>
							<a class="btn btn-success btn-huge" href="L2-Radicals.php">Radicals</a>
							<a class="btn btn-success btn-huge" href="L2-Verbs.php">Verbs</a>
						</div>
						<div class="lessonMenu col-xs-12 col-md-6 col"><h4><span class="glyphicon glyphicon-wrench"></span> Level 2 Exercises</h4>
							<a class="btn btn-success btn-huge" href="L2-E1.php">1</a>
							<a class="btn btn-success btn-huge" href="L2-E2.php">2</a>
							<a class="btn btn-success btn-huge" href="L2-E3.php">3</a>
							<a class="btn btn-success btn-huge" href="L2-E4.php">4</a>
							<a class="btn btn-success btn-huge" href="L2-E5.php">5</a>
							<a class="btn btn-success btn-huge" href="L2-E6.php">6</a>
							<a class="btn btn-success btn-huge" href="L2-E7.php">7</a>
							<a class="btn btn-success btn-huge" href="L2-E8.php">8</a>
							<a class="btn btn-success btn-huge" href="L2-E9.php">9</a>
							<a class="btn btn-success btn-huge" href="L2-E10.php">10</a>
							<a class="btn btn-success btn-huge" href="L2-E11.php">11</a>
							<a class="btn btn-success btn-huge" href="L2-E12.php">12</a>
							<a class="btn btn-success btn-huge" href="L2-E13.php">13</a>
							<a class="btn btn-success btn-huge" href="L2-E14.php">14</a>
							<a class="btn btn-success btn-huge" href="L2-E15.php">15</a>
							<a class="btn btn-success btn-huge" href="L2-Test.php">16 Test</a>
							<a class="btn btn-success btn-huge" href="Radicals.php">Radicals</a>
							<a class="btn btn-success btn-huge" href="superlatives.php">Superlatives</a>
						</div>
					<?php 
					case '3': case '4': case '5': case '6': ?>
						<div class="clearfix"></div>
						<div class="lessonMenu col-xs-12 col-md-6 col"><h4><span class="glyphicon glyphicon-education"></span> Level 3 Lessons</h4>
							<a class="btn btn-success btn-huge" href="L3-L1.php">1</a>
							<a class="btn btn-success btn-huge" href="L3-L2.php">2</a>
							<a class="btn btn-success btn-huge" href="L3-L3.php">3</a>
							<a class="btn btn-success btn-huge" href="L3-L4.php">4</a>
							<a class="btn btn-success btn-huge" href="L3-L5.php">5</a>
							<a class="btn btn-success btn-huge" href="L3-L6.php">6</a>
							<a class="btn btn-success btn-huge" href="L3-L7.php">7</a>
							<a class="btn btn-success btn-huge" href="L3-L8.php">8</a>
							<a class="btn btn-success btn-huge" href="L3-L9.php">9</a>
							<a class="btn btn-success btn-huge" href="L3-L10.php">10</a>
							<a class="btn btn-success btn-huge" href="L3-L11.php">11</a>
							<a class="btn btn-success btn-huge" href="L3-L12.php">12</a>
							<a class="btn btn-success btn-huge" href="L3-L13.php">13</a>
							<a class="btn btn-success btn-huge" href="L3-L14.php">14</a>
							<a class="btn btn-success btn-huge" href="L3-L15.php">15</a>
							<a class="btn btn-success btn-huge" href="L3-L16.php">16</a>
							<a class="btn btn-success btn-huge" href="L3-L17.php">17</a>
							<a class="btn btn-success btn-huge" href="L3-L18.php">18</a>
							<a class="btn btn-success btn-huge" href="L3-L19.php">19</a>
							<a class="btn btn-success btn-huge" href="L3-L20.php">20</a>
							<a class="btn btn-success btn-huge" href="L3-L20.php">21 Test</a>
							<a class="btn btn-success btn-huge" href="L3-text.php">New Words</a>
							<a class="btn btn-success btn-huge" href="L3-Notes.php">Notes</a>
							<a class="btn btn-success btn-huge" href="L3-Dialogues.php">Dialogues</a>
						</div>
						<div class="lessonMenu col-xs-12 col-md-6 col"><h4><span class="glyphicon glyphicon-wrench"></span> Level 3 Exercises</h4>
							<a class="btn btn-success btn-huge" href="L3-E1.php">1</a>
							<a class="btn btn-success btn-huge" href="L3-E2.php">2</a>
							<a class="btn btn-success btn-huge" href="L3-E3.php">3</a>
							<a class="btn btn-success btn-huge" href="L3-E4.php">4</a>
							<a class="btn btn-success btn-huge" href="L3-E5.php">5</a>
							<a class="btn btn-success btn-huge" href="L3-E6.php">6</a>
							<a class="btn btn-success btn-huge" href="L3-E7.php">7</a>
							<a class="btn btn-success btn-huge" href="L3-E8.php">8</a>
							<a class="btn btn-success btn-huge" href="L3-E9.php">9</a>
							<a class="btn btn-success btn-huge" href="L3-E10.php">10</a>
							<a class="btn btn-success btn-huge" href="L3-E11.php">11</a>
							<a class="btn btn-success btn-huge" href="L3-E12.php">12</a>
							<a class="btn btn-success btn-huge" href="L3-E13.php">13</a>
							<a class="btn btn-success btn-huge" href="L3-E14.php">14</a>
							<a class="btn btn-success btn-huge" href="L3-E15.php">15</a>
							<a class="btn btn-success btn-huge" href="L3-E15.php">15</a>
							<a class="btn btn-success btn-huge" href="L3-E16.php">16</a>
							<a class="btn btn-success btn-huge" href="L3-E17.php">17</a>
							<a class="btn btn-success btn-huge" href="L3-E18.php">18</a>
							<a class="btn btn-success btn-huge" href="L3-E19.php">19</a>
							<a class="btn btn-success btn-huge" href="L3-E20.php">20</a>
							<a class="btn btn-success btn-huge" href="L3-Test.php">21 Test</a>
						</div>
					<?php 
					case '4': case '5': case '6': ?>
						<div class="clearfix"></div>
						<div class="lessonMenu col-xs-12 col-md-6 col"><h4><span class="glyphicon glyphicon-education"></span> Level 4 Lessons</h4>
							<a class="btn btn-success btn-huge" href="L4-L1.php">1</a>
							<a class="btn btn-success btn-huge" href="L4-L2.php">2</a>
							<a class="btn btn-success btn-huge" href="L4-L3.php">3</a>
							<a class="btn btn-success btn-huge" href="L4-L4.php">4</a>
							<a class="btn btn-success btn-huge" href="L4-L5.php">5</a>
							<a class="btn btn-success btn-huge" href="L4-L6.php">6</a>
							<a class="btn btn-success btn-huge" href="L4-L7.php">7</a>
							<a class="btn btn-success btn-huge" href="L4-L8.php">8</a>
							<a class="btn btn-success btn-huge" href="L4-L9.php">9</a>
							<a class="btn btn-success btn-huge" href="L4-L10.php">10</a>
							<a class="btn btn-success btn-huge" href="L4-L11.php">11</a>
							<a class="btn btn-success btn-huge" href="L4-L12.php">12</a>
							<a class="btn btn-success btn-huge" href="L4-L13.php">13</a>
							<a class="btn btn-success btn-huge" href="L4-L14.php">14</a>
							<a class="btn btn-success btn-huge" href="L4-L15.php">15</a>
							<a class="btn btn-success btn-huge" href="L4-text.php">New Words</a>
						</div>
						<div class="lessonMenu col-xs-12 col-md-6 col"><h4><span class="glyphicon glyphicon-wrench"></span> Level 4 Exercises</h4>
							<a class="btn btn-success btn-huge" href="L4-E1.php">1</a>
							<a class="btn btn-success btn-huge" href="L4-E2.php">2</a>
							<a class="btn btn-success btn-huge" href="L4-E3.php">3</a>
							<a class="btn btn-success btn-huge" href="L4-E4.php">4</a>
							<a class="btn btn-success btn-huge" href="L4-E5.php">5</a>
							<a class="btn btn-success btn-huge" href="L4-E6.php">6</a>
							<a class="btn btn-success btn-huge" href="L4-E7.php">7</a>
							<a class="btn btn-success btn-huge" href="L4-E8.php">8</a>
							<a class="btn btn-success btn-huge" href="L4-E9.php">9</a>
							<a class="btn btn-success btn-huge" href="L4-E10.php">10</a>
							<a class="btn btn-success btn-huge" href="L4-E11.php">11</a>
							<a class="btn btn-success btn-huge" href="L4-E12.php">12</a>
							<a class="btn btn-success btn-huge" href="L4-E13.php">13</a>
							<a class="btn btn-success btn-huge" href="L4-E14.php">14</a>
							<a class="btn btn-success btn-huge" href="L4-E15.php">15</a>
							<a class="btn btn-success btn-huge" href="L4-Test.php">16 Test</a>
						</div>
					<?php 
					case '5': case '6': ?>
						<div class="clearfix"></div>
						<div class="lessonMenu col-xs-12 col-md-6 col"><h4><span class="glyphicon glyphicon-education"></span> Level 5 Lessons</h4>
							<a class="btn btn-success btn-huge" href="L5-L1.php">1</a>
							<a class="btn btn-success btn-huge" href="L5-L2.php">2</a>
							<a class="btn btn-success btn-huge" href="L5-L3.php">3</a>
							<a class="btn btn-success btn-huge" href="L5-L4.php">4</a>
							<a class="btn btn-success btn-huge" href="L5-L5.php">5</a>
							<a class="btn btn-success btn-huge" href="L5-L6.php">6</a>
							<a class="btn btn-success btn-huge" href="L5-L7.php">7</a>
							<a class="btn btn-success btn-huge" href="L5-L8.php">8</a>
							<a class="btn btn-success btn-huge" href="L5-L9.php">9</a>
							<a class="btn btn-success btn-huge" href="L5-L10.php">10</a>
							<a class="btn btn-success btn-huge" href="L5-L11.php">11</a>
							<a class="btn btn-success btn-huge" href="L5-L12.php">12</a>
							<a class="btn btn-success btn-huge" href="L5-L13.php">13</a>
							<a class="btn btn-success btn-huge" href="L5-L14.php">14</a>
							<a class="btn btn-success btn-huge" href="L5-L15.php">15</a>
							<a class="btn btn-success btn-huge" href="L5-text.php">New Words</a>
						</div>
						<div class="lessonMenu col-xs-12 col-md-6 col"><h4><span class="glyphicon glyphicon-wrench"></span> Level 5 Exercises</h4>
							<a class="btn btn-success btn-huge" href="L5-E1.php">1</a>
							<a class="btn btn-success btn-huge" href="L5-E2.php">2</a>
							<a class="btn btn-success btn-huge" href="L5-E3.php">3</a>
							<a class="btn btn-success btn-huge" href="L5-E4.php">4</a>
							<a class="btn btn-success btn-huge" href="L5-E5.php">5</a>
							<a class="btn btn-success btn-huge" href="L5-E6.php">6</a>
							<a class="btn btn-success btn-huge" href="L5-E7.php">7</a>
							<a class="btn btn-success btn-huge" href="L5-E8.php">8</a>
							<a class="btn btn-success btn-huge" href="L5-E9.php">9</a>
							<a class="btn btn-success btn-huge" href="L5-E10.php">10</a>
							<a class="btn btn-success btn-huge" href="L5-E11.php">11</a>
							<a class="btn btn-success btn-huge" href="L5-E12.php">12</a>
							<a class="btn btn-success btn-huge" href="L5-E13.php">13</a>
							<a class="btn btn-success btn-huge" href="L5-E14.php">14</a>
							<a class="btn btn-success btn-huge" href="L5-E15.php">15</a>
							<a class="btn btn-success btn-huge" href="L5-Test.php">16 Test</a>
						</div>
					<?php 
					case '6': ?>
						<div class="clearfix"></div>
						<div class="lessonMenu col-xs-12 col-md-6 col"><h4><span class="glyphicon glyphicon-education"></span> Level 6 Lessons</h4>
							<a class="btn btn-success btn-huge" href="L6-L1.php">1</a>
							<a class="btn btn-success btn-huge" href="L6-L2.php">2</a>
							<a class="btn btn-success btn-huge" href="L6-L3.php">3</a>
							<a class="btn btn-success btn-huge" href="L6-L4.php">4</a>
							<a class="btn btn-success btn-huge" href="L6-L5.php">5</a>
							<a class="btn btn-success btn-huge" href="L6-L6.php">6</a>
							<a class="btn btn-success btn-huge" href="L6-L7.php">7</a>
							<a class="btn btn-success btn-huge" href="L6-L8.php">8</a>
							<a class="btn btn-success btn-huge" href="L6-L9.php">9</a>
							<a class="btn btn-success btn-huge" href="L6-L10.php">10</a>
							<a class="btn btn-success btn-huge" href="L6-L11.php">11</a>
							<a class="btn btn-success btn-huge" href="L6-L12.php">12</a>
							<a class="btn btn-success btn-huge" href="L6-L13.php">13</a>
							<a class="btn btn-success btn-huge" href="L6-L14.php">14</a>
							<a class="btn btn-success btn-huge" href="L6-L15.php">15</a>
							<a class="btn btn-success btn-huge" href="L6-text.php">New Words</a>
						</div>
						<div class="lessonMenu col-xs-12 col-md-6 col"><h4><span class="glyphicon glyphicon-wrench"></span> Level 6 Exercises</h4>
							<a class="btn btn-success btn-huge" href="L6-E1.php">1</a>
							<a class="btn btn-success btn-huge" href="L6-E2.php">2</a>
							<a class="btn btn-success btn-huge" href="L6-E3.php">3</a>
							<a class="btn btn-success btn-huge" href="L6-E4.php">4</a>
							<a class="btn btn-success btn-huge" href="L6-E5.php">5</a>
							<a class="btn btn-success btn-huge" href="L6-E6.php">6</a>
							<a class="btn btn-success btn-huge" href="L6-E7.php">7</a>
							<a class="btn btn-success btn-huge" href="L6-E8.php">8</a>
							<a class="btn btn-success btn-huge" href="L6-E9.php">9</a>
							<a class="btn btn-success btn-huge" href="L6-E10.php">10</a>
							<a class="btn btn-success btn-huge" href="L6-E11.php">11</a>
							<a class="btn btn-success btn-huge" href="L6-E12.php">12</a>
							<a class="btn btn-success btn-huge" href="L6-E13.php">13</a>
							<a class="btn btn-success btn-huge" href="L6-E14.php">14</a>
							<a class="btn btn-success btn-huge" href="L6-E15.php">15</a>
							<a class="btn btn-success btn-huge" href="L6-Test.php">16 Test</a>
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
