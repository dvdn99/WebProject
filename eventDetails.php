<header>
    <h1>
        <label id="top" class="center"><br>2019 UEFA Champions League Final</label>
    </h1>
</header>

<br>



<div class="container">
    <div>
        <img class="img-fluid rounded mx-auto d-block slide-img" src="img\carrousel\1.jpg" alt="image" id="car">
    </div>
    <div>
        <a class="carousel-control-next"  role="button" id="nextButton">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>
</div>

<br>
<br>

<div class="container-fluid">
    <?php
    $target_time = mktime(21,0,0,6,1,2020);
    $current_time = time();
    $difference = $target_time - $current_time;

    $days = floor($difference/86400);
    $hours = floor($difference/3600);
    $mins = floor($difference/60);
    $secs = floor($difference);

    echo "<h1><p><label>
                    Countdown: ".$days." days, ".$hours." hours, ".$mins." minutes ".$secs." seconds to the next final <br>
                </label></p></h1>"; ?>
</div>

<article>
    <div class="container-fluid">
        <h1>
            <p>
                <label>
                    2019 UEFA Champions League Final <br>
                </label>
            </p>
        </h1>
        <label class="label-lg" id="description1">
            The 2019 UEFA Champions League Final will be the final match of the 2018–19 UEFA Champions League, the
            64th
            season of Europe's premier club football tournament organised by UEFA, and the 27th season since it was
            renamed from the European Champion Clubs' Cup to the UEFA Champions League. It will be played at the
            Wanda
            Metropolitano in Madrid, Spain on 1 June 2019.[1]

            The winners will earn the right to play against the winners of the 2018–19 UEFA Europa League in the
            2019
            UEFA Super Cup. They will also qualify to enter the group stage of the 2019–20 UEFA Champions League,
            and if
            they have already qualified through their league performance, the berth reserved will be given to the
            champions of the 2018–19 Austrian Bundesliga, the 11th-ranked association according to next season's
            access
            list.[2][3]

            In March 2018, UEFA announced that a fourth substitution will be allowed in extra time and that the
            number
            of substitutes has been increased from 7 to 12. The kick-off time has also been changed from 20:45 CEST
            to
            21:00 CEST.[4] The match will also be the first final to use the video assistant referee (VAR)
            system.[5]
        </label>
    </div>
</article>


<section class="container">
    <div>

        <p>
            <label><h2>
                    Host selection <br></h2></label>
        </p>
        <h6>
            <label class="label-lg" id="description2">
                For the first time ever, an open bidding process was launched on 9 December 2016 by UEFA to select the
                venues of
                the club competition finals (UEFA Champions League, UEFA Europa League, UEFA Women's Champions League,
                and UEFA
                Super Cup).[7][8] Associations had until 27 January 2017 to express interest, and bid dossiers had to be
                submitted by 6 June 2017.

                UEFA announced on 3 February 2017 that two associations expressed interest in hosting,[9] and confirmed
                on 7
                June 2017 that they submitted bids for the 2019 UEFA Champions League Final:[10]
            </label>
        </h6>
    </div>
</section>

<section class="container pos">
    <label>
        <h2><br>Event Location</h2>
    </label>
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3036.765193593699!2d-3.601656085236901
        !3d40.43619796238036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422fea8401b789%3A0x245d0d64dad50e
        c4!2sWanda+Metropolitano!5e0!3m2!1ses!2sil!4v1554990061493!5m2!1ses!2sil"
                width="600" height="450" frameborder="0" allowfullscreen></iframe>
        <a href="https://www.emojilib.com"></a></div>
    </div>
</section>

<?php
$agenda = [
    [
        'time' => "18:00",
        'title' => "Stadium open its doors"
    ],
    [
        'time' => "19:00",
        'title' => "Teams arrives"
    ],
    [
        'time' => "20:00",
        'title' => "Pre-Match concert"
    ],
    [
        'time' => "21:00",
        'title' => "Match Starts"
    ],
]
?>

<section class="container pos">
    <label>
        <h2><br>Event Agenda 1/6/19</h2>
    </label>
    <ul>
        <h3>
            <label  class="label-lg" id="description3">
                <?php
                foreach ($agenda as $e) {
                    echo "<li>".$e['time']." ".$e['title']."</li>";
                }
                ?>
            </label>
        </h3>
    </ul>
</section>

<?php
$shuttle = [
    [
        'row' => 1,
        'name' => "Lucas Obertan",
        'address' => "Hashoftim 17",
        'hour' => "17:00"
    ],
    [
        'row' => 2,
        'name' => "Andres Rodriguez",
        'address' => "Even Gbirol 24",
        'hour' => "17:30"
    ],
    [
        'row' => 3,
        'name' => "Lior Asulin",
        'address' => "LaGuardia 37",
        'hour' => "18:00"
    ]
]
?>

<div class="table-responsive-sm container">
    <table class="table table-hover table-light">
        <label>
            <h2><br>Shuttle Arrival Options</h2>
        </label>
        <br>
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Hour</th>
        </tr>
        </thead>
        <tbody>
        <?php

        foreach ($shuttle as $item) {
            echo "    <tr>
            <th scope='row'>".$item['row']."</th>
            <td>".$item['name']."</td>
            <td>".$item['address']."</td>
            <td>".$item['hour']."</td>
        </tr>";
        }
        ?>
        </tbody>
    </table>
</div>
