<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="css/styles.css" >
    <title>Flight Schedules</title>
</head>
<body>
<div class="container">
    <div class="section-title">Domestic Flights</div>
    <div class="grid">
        <div class="box">
            <img src="img/Manila.jpeg">
            <div class="location">Manila to Davao</div>
            <div class="time"><?= date("h:i A"); ?></div>
        </div>

        <div class="box">
            <img src="img/Dipolog.jpg">
            <div class="location">Dipolog to IloIlo</div>
            <div class="time"><?= date("h:i A"); ?></div>
        </div>

        <div class="box">
            <img src="img/Zamboanga.jpg">
            <div class="location">Zampoanga to Tacloban</div>
            <div class="time"><?= date("h:i A"); ?></div>
        </div>

        <div class="box">
            <img src="img/Cagayan.jpg">
            <div class="location">Cagayan to Catarman</div>
            <div class="time"><?= date("h:i A"); ?></div>
        </div>
        
        <div class="box">
            <img src="img/Cebu.jpg">
            <div class="location">Cebu to Clark</div>
            <div class="time"><?= date("h:i A"); ?></div>
        </div>

        <div class="box">
            <img src="img/Tagbilaran.jpg">
            <div class="location">Tagbilaran to Cotabato</div>
            <div class="time"><?= date("h:i A"); ?></div>
        </div>

        <div class="box">
            <img src="img/Antique.jpg">
            <div class="location">Antique to Kalibo</div>
            <div class="time"><?= date("h:i A"); ?></div>
        </div>

        <div class="box">
            <img src="img/Busuanga.webp">
            <div class="location">Busuanga to Legazpi</div>
            <div class="time"><?= date("h:i A"); ?></div>
        </div>
    </div>

    <div class="section-title">International Flights</div>
    <div class="grid">
        <div class="box">
            <img src="img/Japan.jpg">
            <div class="location">Japan</div>
            <div class="time"><?= gmdate("h:i A", time()+9*3600); ?></div>
        </div>

        <div class="box">
            <img src="IMG/Greenland.avif">
            <div class="location">Greenland</div>
            <div class="time"><?= gmdate("h:i A", time()+10*3600); ?></div>
        </div>

        <div class="box">
            <img src="img/Canada.webp">
            <div class="location">Canada</div>
            <div class="time"><?= gmdate("h:i A", time()-5*3600); ?></div>
        </div>

        <div class="box">
            <img src="img/England.jpg">
            <div class="location">England</div>
            <div class="time"><?php echo gmdate("h:i A", time()-8*3600); ?></div>
        </div>
        
        <div class="box">
            <img src="img/England.jpg">
            <div class="location">China</div>
            <div class="time"><?php echo gmdate("h:i A", time()-8*3600); ?></div>
        </div>

        <div class="box">
            <img src="img/England.jpg">
            <div class="location">Iceland]</div>
            <div class="time"><?php echo gmdate("h:i A", time()-8*3600); ?></div>
        </div>

        <div class="box">
            <img src="img/England.jpg">
            <div class="location">Korea</div>
            <div class="time"><?php echo gmdate("h:i A", time()-8*3600); ?></div>
        </div>

        <div class="box">
            <img src="img/England.jpg">
            <div class="location">England</div>
            <div class="time"><?php echo gmdate("h:i A", time()-8*3600); ?></div>
        </div>
    </div>
    
    <div class="section-title">World Time Zones</div>
    <div class="grid">
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