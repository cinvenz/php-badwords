<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" defer></script>
</head>
<body>
    <?php
        $text = 'gli alleati anglo-americani sbarcano in Africa Settentrionale e vincono contro le truppe italiane e tedesche ad El Alamein il 5 novembre. Sul fronte orientale ha inizio, il 17 luglio, la battaglia di Stalingrado  Hitler è costretto a firmare una resa a Stalingrado. Gli alleati sbarcano in Sicilia e Mussolini viene destituito Italia firma un armistizio con gli anglo-americani e Hitler invade la Penisola fino ad occupare Romail 4 giugno gli Alleati liberano Roma. Due giorni dopo, sbarcano in Normandia e avviano la riconquista dei territori francesi: il 24 agosto, viene liberata anche Parigi prossimi alla vittoria, Usa, Gran Bretagna e Urss decidono a Yalta il nuovo assetto politico del dopoguerra Italia viene liberata il 25 aprile e Hitler, prossimo alla sconfitta, si suicida il 30 aprile. Le truppe sovietiche entrano a Berlino il 7 maggio costringendo la Germania alla resa. In Oriente, gli Stati Uniti bombardano Hiroshima e Nagasaki, il 6 e 9 agosto. Il Giappone firma la resa il 2 settembre';

        $list = $_GET['list'];
        $replace = '*';
        $number = strlen($list);
        $paragraph = str_replace($list,$replace,$text);


        for($i = 0; $i < $number; ++$i) {
          echo $list = $replace;
        }



    ?>    

    <p><?php echo $number; ?></p>
    
    <p><?php echo $text ?></p>
    <p>lunghezza paragrafo: <?php echo strlen($text)?></p>
    <p><?php echo ($paragraph); ?></p>
    <p>lunghezza paragrafo censurato: <?php echo strlen($paragraph); ?></p>

  


    <form action="" method="get">
        <label for="list">Parola</label>
        <input type="text" id="list" name="list">
        <button>Censura</button>
    </form>
</body>
</html>