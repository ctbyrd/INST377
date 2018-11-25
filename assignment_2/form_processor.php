<!DOCTYPE html>
<html>
<head>
	<title>Team Peer Evaluation - Processor</title>

	<style>
		div {
			margin-top: 20px;
			margin-bottom: 20px;
		}
	</style>
</head>
<body>

Welcome <?php
// The code to process recieved data from the form goes to here.
echo $_POST["INST377"]; ?><br>
Your start time is: <?php echo $_POST["Time_start"]; ?><br>
Your end time is: <?php echo $_POST["Time_end"]; ?><br>
Presentation time was: <?php
$date1 = strtotime($_POST['Time_start']);
$date2 = strtotime($_POST['Time_end']);
$interval = $date2 - $date1;
$playedtime = $interval / 60;
echo $playedtime; ?> minutes total <br>
Overall Team Grade: <?php echo $_POST["overall_grade"]; ?><br>
<?php echo $_POST["First_last"]; ?> individual performance was:
<?php
if ($_POST["overall_grade"]=="A" && $_POST["participation"]==1){
	echo "A";
} else if ($_POST["overall_grade"]=="B" && $_POST["participation"]==1) {
	echo "B+";
} else if ($_POST["overall_grade"]=="C" && $_POST["participation"]==1) {
	echo "B-";
} else if ($_POST["overall_grade"]=="D" && $_POST["participation"]==1) {
	echo "B-";
} else if ($_POST["overall_grade"]=="E" && $_POST["participation"]==1) {
	echo "C-";
} else {
	echo "C";
}
 ?><br>
<?php echo $_POST["First_last1"]; ?> individual performance was:
<?php
if ($_POST["overall_grade"]=="A" && $_POST["participation1"]==1){
	echo "A";
} else if ($_POST["overall_grade"]=="B" && $_POST["participation1"]==1) {
	echo "B+";
} else if ($_POST["overall_grade"]=="C" && $_POST["participation1"]==1) {
	echo "B-";
} else if ($_POST["overall_grade"]=="D" && $_POST["participation1"]==1) {
	echo "B-";
} else if ($_POST["overall_grade"]=="E" && $_POST["participation1"]==1) {
	echo "C-";
} else {
	echo "C";
}
 ?><br>
<?php echo $_POST["First_last2"]; ?> individual performance was:
<?php
if ($_POST["overall_grade"]=="A" && $_POST["participation2"]==1){
	echo "A";
} else if ($_POST["overall_grade"]=="B" && $_POST["participation2"]==1) {
	echo "B+";
} else if ($_POST["overall_grade"]=="C" && $_POST["participation2"]==1) {
	echo "B-";
} else if ($_POST["overall_grade"]=="D" && $_POST["participation2"]==1) {
	echo "B-";
} else if ($_POST["overall_grade"]=="E" && $_POST["participation2"]==1) {
	echo "C-";
} else {
	echo "C";
}
 ?><br>
<?php echo $_POST["First_last3"]; ?> individual performance was:
<?php
if ($_POST["overall_grade"]=="A" && $_POST["participation3"]==1){
	echo "A";
} else if ($_POST["overall_grade"]=="B" && $_POST["participation3"]==1) {
	echo "B+";
} else if ($_POST["overall_grade"]=="C" && $_POST["participation3"]==1) {
	echo "B-";
} else if ($_POST["overall_grade"]=="D" && $_POST["participation3"]==1) {
	echo "B-";
} else if ($_POST["overall_grade"]=="E" && $_POST["participation3"]==1) {
	echo "C-";
} else {
	echo "C";
}
 ?><br>
<?php echo $_POST["First_last4"]; ?> individual performance was:
<?php
if ($_POST["overall_grade"]=="A" && $_POST["participation4"]==1){
	echo "A";
} else if ($_POST["overall_grade"]=="B" && $_POST["participation4"]==1) {
	echo "B+";
} else if ($_POST["overall_grade"]=="C" && $_POST["participation4"]==1) {
	echo "B-";
} else if ($_POST["overall_grade"]=="D" && $_POST["participation4"]==1) {
	echo "B-";
} else if ($_POST["overall_grade"]=="E" && $_POST["participation4"]==1) {
	echo "C-";
} else {
	echo "C";
}
 ?><br>
Notes on the presentation: <?php echo $_POST["notes"]; ?><br>


</body>
</html>
