<html>
<head>
    <meta charset="utf-8" />
    <title>Valutaomregner</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/3bf612fbd2.js" crossorigin="anonymous"></script>
	<link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div>
        <h1 align="center">Valutaomregner</h1>
    </div>
    <div align="center">
		<form onchange="valutamath()">
        <input id="dkk"/>
		<select id="valselect">
		<?php
            $nb = simplexml_load_file('https://www.nationalbanken.dk/_vti_bin/DN/DataService.svc/CurrencyRatesXML?lang=da');
            foreach($nb->dailyrates->currency as $kurser)
            {
        ?>
            <option value="<?php echo $kurser['rate'] ?>">
				 <?php echo $kurser['code']." | " .$kurser['desc']?>
			</option>
        <?php
            }
        ?>
		</select>
		<br/>
		<br/>
        <input id="valuta" readonly/>
		</form>
		<script src="valmath.js" type="text/javascript"></script>
	</div>
</body>
</html>