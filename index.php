<?php
$quotes = [
    "Only when we have become nonviolent towards all life will we have learned to live well with others. - Cesar Chavez",
    "Better than a thousand hollow words is one word that brings peace. - Buddha, from the Dhammapada",
    "One of the greatest opportunities to live our values - or betray them - lies in the food we put on our plates. - Jonathan Safran Foer, Eating Animals",
    "Think occasionally of the suffering of which you spare yourself the sight. - Albert Schweitzer"
];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Stephen Benjamin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="p1.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <div style="text-align: center;">
                    <img src="me.jpg" class="img-circle" alt="Picture of myself"/>
                </div>

                <hr />

                <blockquote>
                    <p><?php
                            echo $quotes[array_rand($quotes)];
                       ?>
                    </p>
                </blockquote>

                <hr />

                <h1>Stephen Benjamin</h1>

                <p>I'm an ALM candidate at the Extension school. I'm currently
                taking CSCI E-15, CSCI E-55, and CSCI E-48. I’m also a TA for
                CSCI E-93.</p>

                <p>I grew up in the Boston area but moved away after high
                school. I spent some time in the Navy (former CTI2), and then
                lived in various places like California, Atlanta, and Germany.
                I moved back here a couple of years ago. I'm into hiking,
                cycling, and I also play ice hockey in the winter (quite
                poorly).</p>

                <p>I've been a software developer and a systems administrator
                for a number of years. I'm currently employed by Red Hat, but
                on a leave of absence while I finish the last few requirements for my
                Master's degree.</p>
            </div>
        </div>
    </body>
</html>
