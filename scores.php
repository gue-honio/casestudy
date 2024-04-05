<!DOCTYPE html>
<html>
<head>
    <title>Quiz Result</title>
    <style>
        .container {
            text-align: center;
            margin-top: 50px;
            background-color: pink;
        }

        .result {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        .score {
            font-size: 20px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
$answers = array("b", "b", "b", "a", "c", "b", "a", "c", "c", "b", "a", "a", "d", "c", "c", "d", "a", "d", "c", "a", "b", "c", "d", "c", "c", "a", "a", "c", "d", "c", "a", "c", "c", "c", "b", "d", "c", "d", "a", "a", "a", "c", "a", "c", "c", "b", "b", "d", "c", "a");

$score = 0;

if(isset($_POST['submit'])){
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
    $q5 = $_POST['q5'];
    $q6 = $_POST['q6'];
    $q7 = $_POST['q7'];
    $q8 = $_POST['q8'];
    $q9 = $_POST['q9'];
    $q10 = $_POST['q10'];
    $q11 = $_POST['q11'];
    $q12 = $_POST['q12'];
    $q13 = $_POST['q13'];
    $q14 = $_POST['q14'];
    $q15 = $_POST['q15'];
    $q16 = $_POST['q16'];
    $q17 = $_POST['q17'];
    $q18 = $_POST['q18'];
    $q19 = $_POST['q19'];
    $q20 = $_POST['q20'];
    $q21 = $_POST['q21'];
    $q22 = $_POST['q22'];
    $q23 = $_POST['q23'];
    $q24 = $_POST['q24'];
    $q25 = $_POST['q25'];
    $q26 = $_POST['q26'];
    $q27 = $_POST['q27'];
    $q28 = $_POST['q28'];
    $q29 = $_POST['q29'];
    $q30 = $_POST['q30'];
    $q31 = $_POST['q31'];
    $q32 = $_POST['q32'];
    $q33 = $_POST['q33'];
    $q34 = $_POST['q34'];
    $q35 = $_POST['q35'];
    $q36 = $_POST['q36'];
    $q37 = $_POST['q37'];
    $q38 = $_POST['q38'];
    $q39 = $_POST['q39'];
    $q40 = $_POST['q40'];
    $q41 = $_POST['q41'];
    $q42 = $_POST['q42'];
    $q43 = $_POST['q43'];
    $q44 = $_POST['q44'];
    $q45 = $_POST['q45'];
    $q46 = $_POST['q46'];
    $q47 = $_POST['q47'];
    $q48 = $_POST['q48'];
    $q49 = $_POST['q49'];
    $q50 = $_POST['q50'];

    if($q1 == $answers[0]){
        $score = $score + 1;
    }
    if($q2 == $answers[1]){
        $score = $score + 1;
    }
    if($q3 == $answers[2]){
        $score = $score + 1;
    }
    if($q4 == $answers[3]){
        $score = $score + 1;
    }
    if($q5 == $answers[4]){
        $score = $score + 1;
    }
    if($q6 == $answers[5]){
        $score = $score + 1;
    }
    if($q7 == $answers[6]){
        $score = $score + 1;
    }
    if($q8 == $answers[7]){
        $score = $score + 1;
    }
    if($q9 == $answers[8]){
        $score = $score + 1;
    }
    if($q10 == $answers[9]){
        $score = $score + 1;
    }
    if($q11 == $answers[10]){
        $score = $score + 1;
    }
    if($q12 == $answers[11]){
        $score = $score + 1;
    }
    if($q13 == $answers[12]){
        $score = $score + 1;
    }
    if($q14 == $answers[13]){
        $score = $score + 1;
    }
    if($q15 == $answers[14]){
        $score = $score + 1;
    }
    if($q16 == $answers[15]){
        $score = $score + 1;
    }
    if($q17 == $answers[16]){
        $score = $score + 1;
    }
    if($q18 == $answers[17]){
        $score = $score + 1;
    }
    if($q19 == $answers[18]){
        $score = $score + 1;
    }
    if($q20 == $answers[19]){
        $score = $score + 1;
    }
    if($q21 == $answers[20]){
        $score = $score + 1;
    }
    if($q22 == $answers[21]){
        $score = $score + 1;
    }
    if($q23 == $answers[22]){
        $score = $score + 1;
    }
    if($q24 == $answers[23]){
        $score = $score + 1;
    }
    if($q25 == $answers[24]){
        $score = $score + 1;
    }
    if($q26 == $answers[25]){
        $score = $score + 1;
    }
    if($q27 == $answers[26]){
        $score = $score + 1;
    }
    if($q28 == $answers[27]){
        $score = $score + 1;
    }
    if($q29 == $answers[28]){
        $score = $score + 1;
    }
    if($q30 == $answers[29]){
        $score = $score + 1;
    }
    if($q31 == $answers[30]){
        $score = $score + 1;
    }
    if($q32 == $answers[31]){
        $score = $score + 1;
    }
    if($q33 == $answers[32]){
        $score = $score + 1;
    }
    if($q34 == $answers[33]){
        $score = $score + 1;
    }
    if($q35 == $answers[34]){
        $score = $score + 1;
    }
    if($q36 == $answers[35]){
        $score = $score + 1;
    }
    if($q37 == $answers[36]){
        $score = $score + 1;
    }
    if($q38 == $answers[37]){
        $score = $score + 1;
    }
    if($q39 == $answers[38]){
        $score = $score + 1;
    }
    if($q40 == $answers[39]){
        $score = $score + 1;
    }
    if($q41 == $answers[40]){
        $score = $score + 1;
    }
    if($q42 == $answers[41]){
        $score = $score + 1;
    }
    if($q43 == $answers[42]){
        $score = $score + 1;
    }
    if($q44 == $answers[43]){
        $score = $score + 1;
    }
    if($q45 == $answers[44]){
        $score = $score + 1;
    }
    if($q46 == $answers[45]){
        $score = $score + 1;
    }
    if($q47 == $answers[46]){
        $score = $score + 1;
    }
    if($q48 == $answers[47]){
        $score = $score + 1;
    }
    if($q49 == $answers[48]){
        $score = $score + 1;
    }
    if($q50 == $answers[49]){
        $score = $score + 1;
    }

    if ($score >= 30) {
        echo "Congrats! You passed!";
    } else {
        echo "Better luck next time.";
    }
    echo "<h2>Your score: $score out of " . count($answers) . "</h2>";
}
?>

    </div>
</body>
</html>
