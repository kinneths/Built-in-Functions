<!-- 
Name: Kenneth Guanlao
Date: 01/15/2026
Section: WD-201
-->

<!DOCTYPE html>
<html>
<head>
    <title>Built in functions</title>
    <style>
    body{
        font-family: Arial, sans-serif;
        background: linear-gradient(to right, #e3f2fd, #bbdefb);
        padding: 30px;
    }

    h2{
        color: #0d47a1;
        margin-top: 35px;
    }

    table{
        width: 100%;
        border-collapse: collapse;
        background: #ffffff;
        margin-bottom: 25px;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    td{
        border-bottom: 1px solid #ddd;
        padding: 10px;
        color: #333;
    }

    tr:first-child td{
        background-color: #e3f2fd;
        font-weight: bold;
    }

    tr:hover{
        background-color: #f1f8ff;
    }

    footer {
        text-align: center;
    }
    </style>
</head>

<body>

<?php

$schoolName = "Holy Angel University";
$myName = "Kenneth Rivera Guanlao";
$textSample = "There will be no explanation. There will just be reputation.";
?>

<h2>Changing the Case of Characters</h2>
<table>
    <tr>
        <td>Lowercase</td>
        <td><?php echo strtolower($schoolName); ?></td>
    </tr>
    <tr>
        <td>Uppercase</td>
        <td><?php echo strtoupper($textSample); ?></td>
    </tr>
    <tr>
        <td>Capitalize</td>
        <td><?php echo ucwords(strtolower($myName)); ?></td>
    </tr>
</table>

<h2>Counting Characters and Words</h2>
<table>
    <tr>
        <td>Number of Characters</td>
        <td><?php echo strlen($textSample); ?></td>
    </tr>
    <tr>
        <td>Number of Words</td>
        <td><?php echo str_word_count($myName); ?></td>
    </tr>
</table>

<h2>Removing and Replacing Characters</h2>
<table>
    <tr>
        <td>Remove whitespaces from left</td>
        <td><?php echo ltrim($myName); ?></td>
    </tr>
    <tr>
        <td>Remove whitespaces from right</td>
        <td><?php echo rtrim($schoolName); ?></td>
    </tr>
    <tr>
        <td>Remove whitespace from left and right</td>
        <td><?php echo trim($textSample); ?></td>
    </tr>
    <tr>
        <td>String replace</td>
        <td><?php echo str_replace("php", "PHP", $myName); ?></td>
    </tr>
    <tr>
        <td>String ireplace</td>
        <td><?php echo str_ireplace("PHP", "Advanced PHP", $textSample); ?></td>
    </tr>
    <tr>
        <td>String repeat</td>
        <td><?php echo str_repeat("HA ", 6); ?></td>
    </tr>
</table>

<h2>Other Built-in Functions</h2>
<table>
    <tr>
        <td>String length</td>
        <td><?php echo strlen($textSample); ?></td>
    </tr>
    <tr>
        <td>Substring</td>
        <td><?php echo substr($myName, 0, 4); ?></td>
    </tr>
    <tr>
        <td>Find position</td>
        <td><?php echo strpos($schoolName, "Angel"); ?></td>
    </tr>
    <tr>
        <td>Reverse string</td>
        <td><?php echo strrev($myName); ?></td>
    </tr>
    <tr>
        <td>Word wrap</td>
        <td><?php echo wordwrap($textSample, 6, "<br>"); ?></td>
    </tr>
    <tr>
        <td>Explode string</td>
        <td><?php print_r(explode(" ", $textSample)); ?></td>
    </tr>
    <tr>
        <td>Implode string</td>
        <td><?php echo implode("_", explode(" ", $schoolName)); ?></td>
    </tr>
    <tr>
        <td>HTML characters</td>
        <td><?php echo htmlspecialchars("<p>HA</p>"); ?></td>
    </tr>
    <tr>
        <td>Trimmed length</td>
        <td><?php echo strlen(trim($textSample)); ?></td>
    </tr>
</table>

<?php include 'includes/footer.php'; ?>

</body>
</html>