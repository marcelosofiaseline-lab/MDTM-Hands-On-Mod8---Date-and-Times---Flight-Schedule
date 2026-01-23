<?php
    include 'includes/header.php';

    $flights = [
        // DOMESTIC
        [
            "flightNo" => "PR 101",
            "airline" => "Philippine Airlines",
            "from" => "MNL",
            "to" => "CEB",
            "originTZ" => "Asia/Manila",
            "destTZ" => "Asia/Manila",
            "dep" => "2026-01-23 08:30",
            "duration" => 75,
            "img" => "img/Cebu.jpg",
            "type" => "Domestic"
        ],
        [
            "flightNo" => "5J 214",
            "airline" => "Cebu Pacific",
            "from" => "MNL",
            "to" => "DVO",
            "originTZ" => "Asia/Manila",
            "destTZ" => "Asia/Manila",
            "dep" => "2026-01-23 10:00",
            "duration" => 110,
            "img" => "img/Manila.jpeg",
            "type" => "Domestic"
        ],
        [
            "flightNo" => "Z2 452",
            "airline" => "Philippines AirAsia",
            "from" => "CRK",
            "to" => "PPS",
            "originTZ" => "Asia/Manila",
            "destTZ" => "Asia/Manila",
            "dep" => "2026-01-23 16:20",
            "duration" => 95,
            "img" => "img/Palawan.jpg",
            "type" => "Domestic"
        ],

        // INTERNATIONAL
        [
            "flightNo" => "JL 78",
            "airline" => "Japan Airlines",
            "from" => "MNL",
            "to" => "NRT",
            "originTZ" => "Asia/Manila",
            "destTZ" => "Asia/Tokyo",
            "dep" => "2026-01-23 13:15",
            "duration" => 260,
            "img" => "img/Japan.jpg",
            "type" => "International"
        ],
        [
            "flightNo" => "SQ 921",
            "airline" => "Singapore Airlines",
            "from" => "MNL",
            "to" => "SIN",
            "originTZ" => "Asia/Manila",
            "destTZ" => "Asia/Singapore",
            "dep" => "2026-01-23 15:40",
            "duration" => 220,
            "img" => "img/Singapore.webp",
            "type" => "International"
        ],
        [
            "flightNo" => "AF 209",
            "airline" => "Air France",
            "from" => "MNL",
            "to" => "CDG",
            "originTZ" => "Asia/Manila",
            "destTZ" => "Europe/Paris",
            "dep" => "2026-01-23 23:00",
            "duration" => 820,
            "img" => "img/France.webp",
            "type" => "International"
        ]
    ];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="css/styles.css" >
    <title>Flight Schedules</title>
</head>

<body>
    <!-- DOMESTIC -->
    <section class="flight-section">
        <div class="section-title">Domestic Flights</div>
            <div class="grid">
                <?php foreach ($flights as $f): ?>
                <?php if ($f["type"] === "Domestic"): ?>

                <?php
                    $departure = new DateTime($f["dep"], new DateTimeZone($f["originTZ"]));
                    $arrival = clone $departure;
                    $arrival->add(new DateInterval("PT{$f['duration']}M"));
                    $duration = $departure->diff($arrival);
                ?>

                <div class="box">
                    <img src="<?= $f['img']; ?>">
                    <div class="location"><?= $f['from']; ?> → <?= $f['to']; ?></div>
                    <div><?= $f['airline']; ?> (<?= $f['flightNo']; ?>)</div>

                    <div class="time">
                        Dep: <?= $departure->format("M d, h:i A"); ?><br>
                        Arr: <?= $arrival->format("h:i A"); ?><br>
                        Duration: <?= $duration->h; ?>h <?= $duration->i; ?>m<br>
                        TZ: <?= $f['originTZ']; ?>
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; ?>
            </div>
    </section>

    <section class="flight-section">
        <!-- INTERNATIONAL -->
        <div class="section-title">International Flights</div>
            <div class="grid">

            <?php foreach ($flights as $f): ?>
            <?php if ($f["type"] === "International"): ?>

            <?php
                $departure = new DateTime($f["dep"], new DateTimeZone($f["originTZ"]));
                $arrival = clone $departure;
                $arrival->add(new DateInterval("PT{$f['duration']}M"));
                $arrival->setTimezone(new DateTimeZone($f["destTZ"]));
                $duration = $departure->diff($arrival);
            ?>

            <div class="box">
                <img src="<?= $f['img']; ?>">
                <div class="location"><?= $f['from']; ?> → <?= $f['to']; ?></div>
                <div><?= $f['airline']; ?> (<?= $f['flightNo']; ?>)</div>

                <div class="time">
                    Dep: <?= $departure->format("M d, h:i A"); ?><br>
                    Arr: <?= $arrival->format("M d, h:i A"); ?><br>
                    Duration: <?= $duration->h; ?>h <?= $duration->i; ?>m<br>
                    TZ: <?= $f['destTZ']; ?>
                </div>
            </div>

            <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </section>

    <div class="section-title">World Time Zones</div>
    <div class="world-grid">
        <div class="box">
            <div class="location">Tokyo, Japan</div>
            <div class="time"><?php $tokyo = new DateTime("now", new DateTimeZone("Asia/Tokyo")); echo $tokyo->format("h:i A") ?></div>
        </div>

        <div class="box">
            <div class="location">Dubai, UAE</div>
            <div class="time"><?php $dubai = new DateTime("now", new DateTimeZone("Asia/Dubai")); echo $dubai->format("h:i A") ?></div>
        </div>

        <div class="box">
            <div class="location">Paris, France</div>
            <div class="time"><?php $paris = new DateTime("now", new DateTimeZone("Europe/Paris")); echo $paris->format("h:i A") ?></div>
        </div>

        <div class="box">
            <div class="location">New York, USA</div>
            <div class="time"><?php $newyork = new DateTime("now", new DateTimeZone("America/New_York")); echo $newyork->format("h:i A") ?></div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
</body>
</html>