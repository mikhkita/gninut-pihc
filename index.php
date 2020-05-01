<?
	$cars = file_get_contents('storage/cars.json');
	$carImages = array(
		"Acura" => array(0 => "i/Acura_rdx.png"),
	    "Acura|RDX" => array(0 => "i/Acura_rdx.png"),

	    "Alfa Romeo" => array(0 => "i/alfa_romeo_spider_8c.png"),
	    "Alfa Romeo|Spider" => array(0 => "i/alfa_romeo_spider_8c.png"),

	    "Audi" => array(0 => "i/Audi_A4.png"),
	    "Audi|A4" => array(0 => "i/Audi_A4.png"),
	    "Audi|A 4" => array(0 => "i/Audi_A4.png"),
	    "Audi|A6" => array(0 => "i/Audi_a6.png"),
	    "Audi|A 6" => array(0 => "i/Audi_a6.png"),

	    "Bentley" => array(0 => "i/bentley_continental_gt.png"),
	    "Bentley|Continental" => array(0 => "i/bentley_continental_gt.png"),

	    "BMW" => array(0 => "i/bmw_5_series.png"),
	    "BMW|5-series" => array(0 => "i/bmw_5_series.png"),
	    "BMW|5" => array(0 => "i/bmw_5_series.png"),
	    "BMW|5 series" => array(0 => "i/bmw_5_series.png"),
	    "BMW|3-series" => array(0 => "i/bmw_3.png"),
	    "BMW|3" => array(0 => "i/bmw_3.png"),
	    "BMW|3 series" => array(0 => "i/bmw_3.png"),
	    "BMW|X5" => array(0 => "i/bmw_x5.png"),
	    "BMW|X 5" => array(0 => "i/bmw_x5.png"),

	    "Cadillac" => array(0 => "i/cadillac_escalade.png"),
	    "Cadillac|Escalade" => array(0 => "i/cadillac_escalade.png"),

	    "Citroen" => array(0 => "i/citroen.png"),

	    "Chery" => array(0 => "i/chery_tiggo.png"),
	    "Chery|Tiggo" => array(0 => "i/chery_tiggo.png"),

	    "Chevrolet" => array(0 => "i/chevrolet_cruze.png"),
	    "Chevrolet|Cruze" => array(0 => "i/chevrolet_cruze.png"),

	    "Chrysler" => array(0 => "i/chrysler_300c.png"),
	    "Chrysler|300c" => array(0 => "i/chrysler_300c.png"),
	    "Chrysler|300 c" => array(0 => "i/chrysler_300c.png"),

	    "Dodge" => array(0 => "i/dodge_caliber.png"),
	    "Dodge|Caliber" => array(0 => "i/dodge_caliber.png"),

	    "Fiat" => array(0 => "i/fiat_500.png"),
	    "Fiat|500" => array(0 => "i/fiat_500.png"),

	    "Ford" => array(0 => "i/ford_kuga.png"),
	    "Ford|Kuga" => array(0 => "i/ford_kuga.png"),
	    "Ford|Mondeo" => array(0 => "i/ford_mondeo.png"),

	    "Ferrari" => array(0 => "i/Ferrari_430.png"),
	    "Ferrari|F430" => array(0 => "i/Ferrari_430.png"),
	    "Ferrari|430" => array(0 => "i/Ferrari_430.png"),

	    "Geely" => array(0 => "i/geely.png"),

	    "GMC" => array(0 => "i/gmc_yukon.png"),
	    "GMC|Yukon" => array(0 => "i/gmc_yukon.png"),

	    "Honda" => array(0 => "i/Civic_FD.png"),
	    "Honda|Civic" => array(0 => "i/Civic_FD.png"),
	    "Honda|Accord" => array(0 => "i/honda_accord.png"),
	    "Honda|CR-V" => array(0 => "i/honda_crv.png"),
	    "Honda|CRV" => array(0 => "i/honda_crv.png"),
	    "Honda|CR V" => array(0 => "i/honda_crv.png"),

	    "Hummer" => array(0 => "i/hummer_h2.png"),
	    "Hummer|h2" => array(0 => "i/hummer_h2.png"),

	    "Huyndai" => array(0 => "i/huyndai_avante.png"),
	    "Huyndai|Avante" => array(0 => "i/huyndai_avante.png"),
	    "Huyndai|Sonata" => array(0 => "i/huyndai_sonata.png"),

	    "Infiniti" => array(0 => "i/infiniti_qx_60.png"),
	    "Infiniti|QX 60" => array(0 => "i/infiniti_qx_60.png"),
		"Infiniti|QX60" => array(0 => "i/infiniti_qx_60.png"),
		"Infiniti|QX" => array(0 => "i/infiniti_qx_60.png"),

	    "Isuzu" => array(0 => "i/isuzu_d_max.png"),
	    "Isuzu|d-max" => array(0 => "i/isuzu_d_max.png"),
	    "Isuzu|d max" => array(0 => "i/isuzu_d_max.png"),
	    "Isuzu|dmax" => array(0 => "i/isuzu_d_max.png"),

	    "Jaguar" => array(0 => "i/jaguar_xf.png"),
	    "Jaguar|XF" => array(0 => "i/jaguar_xf.png"),

	    "Jeep" => array(0 => "i/jeep_grand_cherokee.png"),
	    "Jeep|Grand Cherokee" => array(0 => "i/jeep_grand_cherokee.png"),

	    "Kia" => array(0 => "i/kia_sportage.png"),
	    "Kia|Sportage" => array(0 => "i/kia_sportage.png"),
	    "Kia|Ceed" => array(0 => "i/kia_ceed.png"),
	    "Kia|Cee'd" => array(0 => "i/kia_ceed.png"),
	    "Kia|Rio" => array(0 => "i/kia_rio.png"),
	    "Kia|Soul" => array(0 => "i/kia_soul.png"),

	    "Lancia" => array(0 => "i/lancia_y.png"),
	    "Lancia|Y" => array(0 => "i/lancia_y.png"),

	    "Land Rover" => array(0 => "i/land_rover_range_rover.png"),
	    "Land Rover|Range Rover" => array(0 => "i/land_rover_range_rover.png"),
	    "Land Rover|Range" => array(0 => "i/land_rover_range_rover.png"),

	    "Lexus" => array(0 => "i/lexus_nx.png"),
	    "Lexus|NX" => array(0 => "i/lexus_nx.png"),

	    "Lotus" => array(0 => "i/lotus_elise.png"),
	    "Lotus|Elise" => array(0 => "i/lotus_elise.png"),

	    "Mazda" => array(0 => "i/Mazda3.png"),
	    "Mazda|3" => array(0 => "i/Mazda3.png"),
	    "Mazda|6" => array(0 => "i/Mazda_6.png"),

	    "Mercedes" => array(0 => "i/mercedes_e_class.png"),
	    "Mercedes|E-class" => array(0 => "i/mercedes_e_class.png"),
	    "Mercedes|E-classe" => array(0 => "i/mercedes_e_class.png"),
	    "Mercedes|E" => array(0 => "i/mercedes_e_class.png"),


	    "Mini" => array(0 => "i/mini_cooper.png"),
	    "Mini|Cooper" => array(0 => "i/mini_cooper.png"),


	    "Mitsubishi" => array(0 => "i/mitsubishi_lancer_x.png"),
	    "Mitsubishi|Lancer" => array(0 => "i/mitsubishi_lancer_x.png"),
	    "Mitsubishi|Lancer X" => array(0 => "i/mitsubishi_lancer_x.png"),


	    "Nissan" => array(0 => "i/nissan_qashqai.png"),
	    "Nissan|Qashqai" => array(0 => "i/nissan_qashqai.png"),
	    "Nissan|Juke" => array(0 => "i/nissan_juke.png"),


	    "Opel" => array(0 => "i/opel_astra.png"),
	    "Opel|Astra" => array(0 => "i/opel_astra.png"),
	    "Opel|Corsa" => array(0 => "i/opel_corsa.png"),


	    "Peugeot" => array(0 => "i/peugeot_3008.png"),
	    "Peugeot|3008" => array(0 => "i/peugeot_3008.png"),


	    "Porsche" => array(0 => "i/porsche_cayenne.png"),
	    "Porsche|Cayenne" => array(0 => "i/porsche_cayenne.png"),


	    "Renault" => array(0 => "i/renault_megane.png"),
	    "Renault|Megane" => array(0 => "i/renault_megane.png"),
	    "Renault|Logan" => array(0 => "i/renault_logan.png"),


	    "Saab" => array(0 => "i/saab_9_3.png"),
	    "Saab|9-3" => array(0 => "i/saab_9_3.png"),
	    "Saab|9 3" => array(0 => "i/saab_9_3.png"),
	    "Saab|93" => array(0 => "i/saab_9_3.png"),
	    "Saab|9" => array(0 => "i/saab_9_3.png"),

	    "Seat" => array(0 => "i/seat_ibiza.png"),
	    "Seat|Ibiza" => array(0 => "i/seat_ibiza.png"),

	    "Skoda" => array(0 => "i/skoda_octavia.png"),
	    "Skoda|Octavia" => array(0 => "i/skoda_octavia.png"),
	    "Skoda|Fabia" => array(0 => "i/skoda_fabia.png"),

	    "Smart" => array(0 => "i/smart_fortwo.png"),
	    "Smart|Fortwo" => array(0 => "i/smart_fortwo.png"),
	    "Smart|For two" => array(0 => "i/smart_fortwo.png"),
	    "Smart|For-two" => array(0 => "i/smart_fortwo.png"),

	    "Ssang Yong" => array(0 => "i/ssang_yong_action.png"),
	    "Ssang Yong|Actyon" => array(0 => "i/ssang_yong_action.png"),
	    "Ssang Yong|Actyon Sport" => array(0 => "i/ssang_yong_action.png"),
	    "Ssang Yong|Action" => array(0 => "i/ssang_yong_action.png"),
	    "Ssang Yong|Action Sport" => array(0 => "i/ssang_yong_action.png"),
	    "SsangYong" => array(0 => "i/ssang_yong_action.png"),
	    "SsangYong|Actyon" => array(0 => "i/ssang_yong_action.png"),
	    "SsangYong|Actyon Sport" => array(0 => "i/ssang_yong_action.png"),
	    "SsangYong|Action" => array(0 => "i/ssang_yong_action.png"),
	    "SsangYong|Action Sport" => array(0 => "i/ssang_yong_action.png"),

	    "Subaru" => array(0 => "i/subaru_impreza.png"),
	    "Subaru|Impreza" => array(0 => "i/subaru_impreza.png"),

	    "Suzuki" => array(0 => "i/suzuki_grand_vitara.png"),
	    "Suzuki|Grand Vitara" => array(0 => "i/suzuki_grand_vitara.png"),

	    "Toyota" => array(0 => "i/Camry_XV40.png"),
	    "Toyota|Camry" => array(0 => "i/Camry_XV40.png"),
	    "Toyota|Corolla" => array(0 => "i/toyota_corolla.png"),
	    "Toyota|Land Cruiser" => array(0 => "i/toyota_land_druiser_200.png"),
	    "Toyota|LandCruiser" => array(0 => "i/toyota_land_druiser_200.png"),
	    "Toyota|Land Cruiser 200" => array(0 => "i/toyota_land_druiser_200.png"),
	    "Toyota|LandCruiser 200" => array(0 => "i/toyota_land_druiser_200.png"),

	    "Volvo" => array(0 => "i/volvo_xc_70.png"),
	    "Volvo|XC70" => array(0 => "i/volvo_xc_70.png"),
	    "Volvo|XC 70" => array(0 => "i/volvo_xc_70.png"),

	    "Volkswagen" => array(0 => "i/vw golf.png"),
	    "Volkswagen|Golf" => array(0 => "i/vw golf.png"),
	    "Volkswagen|Passat" => array(0 => "i/vw_passat.png"),
	    "Volkswagen|Polo" => array(0 => "i/vw_polo.png"),
	    "Volkswagen|Polo Sedan" => array(0 => "i/vw_polo.png"),
	    "Volkswagen|Touareg" => array(0 => "i/vw_touareg.png"),
	    "Volkswagen|Tuareg" => array(0 => "i/vw_touareg.png"),
	);

	$mark = "";
	$model = "";
	if(isset($_GET["keywords"]) && !empty($_GET["keywords"])){
		$arCars = json_decode($cars, true);
		foreach ($arCars as $_mark => $_models) {
			if(preg_match("/".$_mark."/iu", $_GET["keywords"])){
				$mark = $_mark;
				foreach ($_models as $_model => $value) {
					if(preg_match("/".$_model."/iu", $_GET["keywords"])){
						$model = $_model;
					}
				}
				break;
			}
		}
	}

	function findCarImage($mark, $model = false){
		global $carImages;
		$carImagesLower = array_change_key_case($carImages);
		$img = array(0 => "i/car.png");
		if($mark && $model){
			$res = $carImagesLower[mb_strtolower($mark."|".$model)];
			if($res){
				$img = $res;
			}else{
				$res = $carImagesLower[mb_strtolower($mark)];
				if($res){
					$img = $res;
				}
			}
		}else{
			$res = $carImagesLower[mb_strtolower($mark)];
			if($res){
				$img = $res;
			}
		}
		return $img;
	}

	$carName1 = "";
	$carName2 = "";
	$carName3 = "";
	$img = array();
	if($mark && $model){
		$img = findCarImage($mark, $model);
		if (!isset($img[1])) {
			$img[1] = $img[0];
		}
		$carName = $mark." ".$model;
		$carName1 = $carName;
		$carName2 = $carName;
		$carName3 = $carName;
	}elseif($mark){
		$img = findCarImage($mark);
		if (!isset($img[1])) {
			$img[1] = $img[0];
		}
		$carName = $mark;
		$carName1 = $carName;
		$carName2 = $carName;
		$carName3 = $carName;
	}else{
		$img[0] = $img[1] = "i/car.png";
		$carName1 = "автомобиль";
		$carName2 = "автомобиля";
		$carName3 = "автомобиле";
	}
?>

<!DOCTYPE html>
<html lang="ru">
<head>

	<script type="text/javascript">
		var carImages = <?=json_encode($carImages)?>;
		var arCars = <?=$cars?>;
	</script>

	<title>Автобезопасность | Чип-тюнинг</title>
	<meta name="keywords" content=''>
	<meta name="description" content=''>

	<meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1">
	<meta name="format-detection" content="telephone=no">

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/reset.css" type="text/css">
	<link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css">
	<link rel="stylesheet" href="css/slick.css" type="text/css">
	<link rel="stylesheet" href="css/KitAnimate.css" type="text/css">
	<link rel="stylesheet" href="css/layout.css" type="text/css">

	<!-- <link rel="stylesheet" media="screen and (min-width: 768px) and (max-width: 1024px)" href="css/layout-tablet.css"> -->
	<!-- <link rel="stylesheet" media="screen and (min-width: 240px) and (max-width: 767px)" href="css/layout-mobile.css"> -->

	<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

</head>
<body>
	<div class="b b-1">
		<div class="b-block">
			<div class="b-info clearfix">
				<div class="b-info-left">
					<a href="/" class="b-logo"></a>
					<div class="b-addr">
						<span>г. Томск, ул. Смирнова, д. 7/4 </span>
						<a href="#" class="dashed yellow b-go" data-block=".b-9">посмотреть на карте</a>
					</div>
				</div>
				<div class="b-info-right">
					<div class="b-phone clearfix">
						<a href="tel:+73822337133" class="b-phone-link">+7 (3822) 33-71-33</a>
						<a href="#b-phone-popup" class="dashed yellow fancy">перезвоните мне</a>
					</div>
				</div>
			</div>
			<div class="b-1-main">
				<div class="b-1-main-inner">
					<h1>Сделайте ваш <span class="current-car"><?=$carName1?></span> <br>мощнее на 10-30% <br>за 1 день!</h1>
					<div class="b-1-main-text">Программный чип-тюнинг автомобиля раскроет заложенные производителем мощности автомобиля</div>
					<div class="b-btn-cont">
						<a href="#b-main-popup" class="b-btn fancy">
							<span><b>Рассчитать точный прирост</b><br>мощности вашего авто</span>
						</a>
						<div class="b-btn-info">это не займет много времени</div>
					</div>
				</div>
				<div class="b-car" style="background-image: url('<?=$img[0];?>');"></div>
			</div>
			<a href="#" class="b-1-arrow b-go" data-block=".b-2">
				<div class="b-1-arrow-text">Подробнее о чип-тюнинге</div>
				<div class="b-1-arrow-icon"></div>
			</a>
		</div>
	</div>
	<div class="b b-2">
		<div class="b-block">
			<h2>Ощутите <b>новые впечатления</b> от вождения вашего <span class="current-car"><?=$carName2?></span></h2>
			<div class="b-2-list">
				<div class="b-2-item">
					<div class="b-2-item-img" style="background-image: url('i/b-2-1.svg');"></div>
					<div class="b-2-item-text">До +30% к лошадиным силам и крутящему моменту</div>
				</div>
				<div class="b-2-item">
					<div class="b-2-item-img" style="background-image: url('i/b-2-2.svg');"></div>
					<div class="b-2-item-text">Уменьшение «врожденной» задержки при нажатии педали газа</div>
				</div>
				<div class="b-2-item">
					<div class="b-2-item-img" style="background-image: url('i/b-2-3.svg');"></div>
					<div class="b-2-item-text">Увеличение скорости и плавности переключения передач АКПП</div>
				</div>
				<div class="b-2-item">
					<div class="b-2-item-img" style="background-image: url('i/b-2-4.svg');"></div>
					<div class="b-2-item-text">Снижение расхода топлива до 2&nbsp;л. на 100&nbsp;км.</div>
				</div>
			</div>
		</div>
	</div>
	<div class="b b-3">
		<div class="b-3-car-cont">
			<div class="b-block">
				<div class="b-3-car" style="background-image: url('<?=$img[1];?>');"></div>
				<div class="b-3-car-text"><b>Представьте</b>, что ваш автомобиль срывается с места, как только вы&nbsp;нажали на педаль газа…</div>
			</div>
		</div>
		<div class="b-3-inner">
			<div class="b-block">
				<h2>Думаете, что это не про ваш автомобиль? <b>Вы заблуждаетесь.</b></h2>
				<h3>Чип-тюнинг подходит для всех авто:</h3>
			</div>
			<div class="b-3-list">
				<div class="b-3-item" style="background-image: url('i/b-3-1.png');"></div>
				<div class="b-3-item" style="background-image: url('i/b-3-2.png');"></div>
				<div class="b-3-item" style="background-image: url('i/b-3-3.png');"></div>
				<div class="b-3-item" style="background-image: url('i/b-3-4.png');"></div>
				<div class="b-3-item" style="background-image: url('i/b-3-5.png');"></div>
				<div class="b-3-item" style="background-image: url('i/b-3-6.png');"></div>
				<div class="b-3-item" style="background-image: url('i/logos/chevrolet.png');"></div>
				<div class="b-3-item" style="background-image: url('i/logos/porsche.png');"></div>
				<div class="b-3-item" style="background-image: url('i/logos/mazda.png');"></div>
				<div class="b-3-item" style="background-image: url('i/logos/kia.png');"></div>
				<div class="b-3-item" style="background-image: url('i/logos/subaru.png');"></div>
				<div class="b-3-item" style="background-image: url('i/logos/ford.png');"></div>
				<div class="b-3-item" style="background-image: url('i/logos/volkswagen.png');"></div>
				<div class="b-3-item" style="background-image: url('i/logos/alfa.png');"></div>
				<div class="b-3-item" style="background-image: url('i/logos/chery.png');"></div>
				<div class="b-3-item" style="background-image: url('i/logos/citroen.png');"></div>
				<div class="b-3-item" style="background-image: url('i/logos/ferrari.png');"></div>
				<div class="b-3-item" style="background-image: url('i/logos/fiat.png');"></div>
				<div class="b-3-item" style="background-image: url('i/logos/hyundai.png');"></div>
				<div class="b-3-item" style="background-image: url('i/logos/infiniti.png');"></div>
				<div class="b-3-item" style="background-image: url('i/logos/lexus.png');"></div>
				<div class="b-3-item" style="background-image: url('i/logos/mini.png');"></div>
				<div class="b-3-item" style="background-image: url('i/logos/nissan.png');"></div>
				<div class="b-3-item" style="background-image: url('i/logos/opel.png');"></div>
				<div class="b-3-item" style="background-image: url('i/logos/peugeot.png');"></div>
				<div class="b-3-item" style="background-image: url('i/logos/renault.png');"></div>
				<div class="b-3-item" style="background-image: url('i/logos/skoda.png');"></div>
				<div class="b-3-item" style="background-image: url('i/logos/suzuki.png');"></div>
				<div class="b-3-item" style="background-image: url('i/logos/volvo.png');"></div>
			</div>
		</div>
	</div>
	<div class="b b-4">
		<div class="b-block">
			<h3>Заводская программа на вашем <span class="current-car"><?=$carName3?></span> <b>мешает&nbsp;использовать двигатель на полную мощность</b></h3>
			<div class="b-tab-block">
				<h2><b>4 причины</b>, почему производители авто намеренно занижают мощность </h2>
				<div class="b-tab-list">
					<div class="b-tab-item active" id="1">
						<div class="b-tab-item-small">Причина №1</div>
						<div class="b-tab-item-big"><span>Маркетинговая политика</span></div>
					</div>
					<div class="b-tab-item" id="2">
						<div class="b-tab-item-small">Причина №2</div>
						<div class="b-tab-item-big"><span>Налоговые ограничения</span></div>
					</div>
					<div class="b-tab-item" id="3">
						<div class="b-tab-item-small">Причина №3</div>
						<div class="b-tab-item-big"><span>Экология <br>и евро-нормы</span></div>
					</div>
					<div class="b-tab-item" id="4">
						<div class="b-tab-item-small">Причина №4</div>
						<div class="b-tab-item-big"><span>Увеличение ассортимента</span></div>
					</div>
				</div>
				<div class="b-tab-slider-cont">
					<div class="b-tab-slider-list">
						<div class="b-tab-slider" data-id="1">
							<div class="b-tab-slider-inner">
								<div class="b-tab-slider-left">
									<div class="b-tab-slider-left-top">
										<div class="b-tab-slider-left-top-num" style="background-image: url('i/1.svg');"></div>
										<div class="b-tab-slider-left-top-text">Маркетинговая политика</div>
									</div>
									<div class="b-tab-slider-left-text">Автопроизводитель намеренно занижает характеристики машины чтобы сократить необходимость выпуска большого количества различных двигателей.</div>
								</div>
								<div class="b-tab-slider-right" style="background-image: url('i/slider-1.jpg');"></div>
							</div>
						</div>
						<div class="b-tab-slider" data-id="2">
							<div class="b-tab-slider-inner">
								<div class="b-tab-slider-left">
									<div class="b-tab-slider-left-top">
										<div class="b-tab-slider-left-top-num" style="background-image: url('i/2.svg');"></div>
										<div class="b-tab-slider-left-top-text">Налоговые ограничения</div>
									</div>
									<div class="b-tab-slider-left-text">Нередко мощность автомобиля напрямую влияет на налоги, таможенные пошлины и страховые премии. Это одна из причин, почему автопроизводитель искусственно занижает мощность.</div>
								</div>
								<div class="b-tab-slider-right" style="background-image: url('i/slider-2.jpg');"></div>
							</div>
						</div>
						<div class="b-tab-slider" data-id="3">
							<div class="b-tab-slider-inner">
								<div class="b-tab-slider-left">
									<div class="b-tab-slider-left-top">
										<div class="b-tab-slider-left-top-num" style="background-image: url('i/3.svg');"></div>
										<div class="b-tab-slider-left-top-text">Экология  и евро-нормы</div>
									</div>
									<div class="b-tab-slider-left-text">Строгие экологические нормы по выхлопу отработанных газов, действующие в большинстве развитых стран, также заставляют производителей прибегать к подобным ухищрениям.</div>
								</div>
								<div class="b-tab-slider-right" style="background-image: url('i/slider-3.jpg');"></div>
							</div>
						</div>
						<div class="b-tab-slider" data-id="4">
							<div class="b-tab-slider-inner">
								<div class="b-tab-slider-left">
									<div class="b-tab-slider-left-top">
										<div class="b-tab-slider-left-top-num" style="background-image: url('i/4.svg');"></div>
										<div class="b-tab-slider-left-top-text">Увеличение ассортимента</div>
									</div>
									<div class="b-tab-slider-left-text">Разные программы управления на одном и том же двигателе – не редкость для новых автомобилей. Таким образом производитель увеличивает ассортимент своей продукции.</div>
								</div>
								<div class="b-tab-slider-right" style="background-image: url('i/slider-4.jpg');"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="b b-5" data-mark="<?if($mark) echo $mark;?>" data-model="<?if($model) echo $model;?>">
		<div class="b-block">
			<div class="b-5-top">
				<div class="b-5-top-left">
					<h2><b>Посмотрите</b>, на что способен ваш <span class="desktop">автомобиль</span><span class="mobile">авто</span> на самом деле</h2>
					<h3>Просто выберите свой автомобиль и узнайте результат прямо на сайте</h3>
				</div>
				<div class="b-5-top-right b-5-top-right-desktop">
					<div class="b-5-top-right-content">
						<div class="b-5-motor-back show b-5-motor-default"></div>
						<div class="b-5-motor-back b-5-motor-fill">
							<div class="b-power-after">
								<div class="power-top"><span class="power-value"></span>л. с.</div>
								<div class="power-note"><b>Настоящая заводская мощность</b>, доступная после чип-тюнинга</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="b-5-bottom">
				<form class="b-form-calc-power" action="" method="">
					<div class="b-input">
						<select class="b-select-mark" id="mark" name="mark" required>
							<option value="" class="default-option">Выберите марку</option>
						</select>
						<label for="mark">Пожалуйста, укажите марку автомобиля</label>
					</div>
					<div class="b-input">
						<select class="b-select-model" id="model" name="model" required>
							<option value="" class="default-option">Выберите модель</option>
						</select>
						<label for="mark">Пожалуйста, укажите модель автомобиля</label>
					</div>
					<div class="b-input">
						<select class="b-select-engine" id="engine" name="engine" required>
							<option value="" class="default-option">Выберите двигатель</option>
						</select>
						<label for="engine">Пожалуйста, укажите двигатель</label>
					</div>
					<div class="b-input">
						<div class="b-btn-cont">
							<a href="#" class="b-btn b-btn-calc-power">
								<span>Узнать реальную мощность</span>
							</a>
						</div>
					</div>
				</form>
			</div>
			<div class="b-5-top-right b-5-top-right-mobile">
				
			</div>
		</div>
	</div>
	<div class="b b-6">
		<div class="b-block">
			<div class="b-tab-block">
				<h2>Для того, чтобы достичь таких результатов, <b>мы предлагаем следующие услуги</b></h2>
				<div class="b-tab-list">
					<div class="b-tab-item active" id="10">
						<div class="b-tab-item-small">Услуга №1</div>
						<div class="b-tab-item-big"><span>Чип-тюнинг <br>двигателя&nbsp;и&nbsp;АКПП</span></div>
					</div>
					<div class="b-tab-item" id="20">
						<div class="b-tab-item-small">Услуга №2</div>
						<div class="b-tab-item-big"><span>Удаление катализатора</span></div>
					</div>
					<div class="b-tab-item" id="30">
						<div class="b-tab-item-small">Услуга №3</div>
						<div class="b-tab-item-big"><span>Отключение <br>клапана&nbsp;ЕГР</span></div>
					</div>
					<div class="b-tab-item" id="40">
						<div class="b-tab-item-small">Услуга №4</div>
						<div class="b-tab-item-big"><span>Отключение <br>сажевого&nbsp;фильтра</span></div>
					</div>
				</div>
				<div class="b-tab-slider-cont">
					<div class="b-tab-slider-list">
						<div class="b-tab-slider" data-id="10">
							<div class="b-tab-slider-inner">
								<div class="b-tab-slider-left">
									<div class="b-tab-slider-left-top">
										<div class="b-tab-slider-left-top-num" style="background-image: url('i/1.svg');"></div>
										<div class="b-tab-slider-left-top-text">Чип-тюнинг<br>двигателя и&nbsp;АКПП</div>
									</div>
									<div class="b-tab-slider-left-text">С помощью чип-тюнинга вы можете увеличить мощность вашего автомобиля, снизив расход при той же манере вождения. Время отклика на педаль газа сократится, а быстродействие вашей АКПП повысится.</div>
								</div>
								<div class="b-tab-slider-right" style="background-image: url('i/slider-5.jpg');"></div>
							</div>
						</div>
						<div class="b-tab-slider" data-id="20">
							<div class="b-tab-slider-inner">
								<div class="b-tab-slider-left">
									<div class="b-tab-slider-left-top">
										<div class="b-tab-slider-left-top-num" style="background-image: url('i/2.svg');"></div>
										<div class="b-tab-slider-left-top-text">Удаление катализатора</div>
									</div>
									<div class="b-tab-slider-left-text">Катализатор предназначен для обезвреживания опасных веществ, входящих в состав отработанных газов. При его неисправности снижается эффективность выхлопной системы, возникает противодавление и поздний угол зажигания. Удаление катализатора позволяет двигателю "дышать", повышает мощность, а так же снижает расход топлива.</div>
								</div>
								<div class="b-tab-slider-right" style="background-image: url('i/slider-6.jpg');"></div>
							</div>
						</div>
						<div class="b-tab-slider" data-id="30">
							<div class="b-tab-slider-inner">
								<div class="b-tab-slider-left">
									<div class="b-tab-slider-left-top">
										<div class="b-tab-slider-left-top-num" style="background-image: url('i/3.svg');"></div>
										<div class="b-tab-slider-left-top-text">Отключение<br>клапана ЕГР</div>
									</div>
									<div class="b-tab-slider-left-text">Клапан ЕГР устанавливаются на двигатель, чтобы снизить выбросы оксидов азота (NOx).  Отработанные выхлопные газы отправляются повторно догорать в ДВС. Отключение клапана ЕГР приводит к экономии топлива и увеличению ресурса двигателя.</div>
								</div>
								<div class="b-tab-slider-right" style="background-image: url('i/slider-7.jpg');"></div>
							</div>
						</div>
						<div class="b-tab-slider" data-id="40">
							<div class="b-tab-slider-inner">
								<div class="b-tab-slider-left">
									<div class="b-tab-slider-left-top">
										<div class="b-tab-slider-left-top-num" style="background-image: url('i/4.svg');"></div>
										<div class="b-tab-slider-left-top-text">Отключение<br>сажевого фильтра</div>
									</div>
									<div class="b-tab-slider-left-text">Сажевый фильтр устанавливается для снижения твердых частиц в выхлопных газах. Со временем он забивается, что приводит к снижению мощности, неровной работе на холостом ходу, увеличению расхода топлива и другим неприятностям.</div>
								</div>
								<div class="b-tab-slider-right" style="background-image: url('i/slider-8.jpg');"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="b b-7">
		<div class="b-block">
			<div class="b-7-left">
				<h2>Попробуйте чип-тюнинг на&nbsp;ваш&nbsp;<span class="current-car"><?=$carName1?></span><br><b>10 дней бесплатно!</b></h2>
				<h3>Переживаете что не понравится или передумаете? Вернём деньги и заводскую прошивку в тот же день без всяких заявлений!</h3>
				<div class="b-7-car" style="background-image: url('<?=$img[1];?>');"></div>
			</div>
			<div class="b-7-right">
				<form class="b-form-request" action="kitsend.php" method="POST">
					<p><b>Оставьте ваши контактные данные</b> и наш менеджер свяжется с Вами в ближайшее время</p>
					<div class="b-input-string">
						<select id="mark-bottom" class="b-select-mark" name="mark-bottom" required="">
							<option value="" class="default-option">Выберите марку</option>
						</select>
						<label for="mark-bottom">Пожалуйста, выберите марку автомобиля</label>
					</div>
					<div class="b-input-string">
						<select id="model-bottom" class="b-select-model" name="model-bottom" required="">
							<option value="" class="default-option">Выберите модель</option>
						</select>
						<label for="model-bottom">Пожалуйста, выберите модель автомобиля</label>
					</div>
					<div class="b-input-string">
						<select id="engine-bottom" class="b-select-engine" name="engine-bottom" required="">
							<option value="" class="default-option">Выберите двигатель</option>
						</select>
						<label for="engine-bottom">Пожалуйста, укажите двигатель</label>
					</div>
					<div class="b-input-string b-input-phone">
						<input type="text" id="phone" name="phone" placeholder="Ваш телефон">
						<span class="icon-phone"></span>
						<label for="phone">Пожалуйста, укажите ваш телефон</label>
					</div>
					<div class="b-input-string b-btn-string">
						<div class="b-btn-cont">
							<a href="#" class="b-btn ajax">
								<span>Оставить заявку<br>на чип-тюнинг</span>
							</a>
						</div>
					</div>
					<div class="b-input-string-checkbox">
						<div class="b-checkbox">
							<input id="politics-1" name="politics" type="checkbox" value="politics" required checked>
							<label for="politics-1" class="checkbox">
								<span class="icon-checkbox"></span>
								Я принимаю <a href="#" class="dashed">условия передачи информации</a>
							</label>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="b b-8">
		<div class="b-block">
			<h2>Остались вопросы? Мы подготовили для вас <b>5&nbsp;популярных вопросов</b> и&nbsp;ответили на них</h2>
			<div class="b-faq-block">
				<div class="b-faq-left">
					<a href="#faq-popup" class="b-faq active fancy" data-id="faq-1"><span class="mobile-num">1.</span><span>Безопасен ли чип-тюнинг?</span></a>
					<a href="#faq-popup" class="b-faq fancy" data-id="faq-2"><span class="mobile-num">2.</span><span>Почему так не делают с завода?</span></a>
					<a href="#faq-popup" class="b-faq fancy" data-id="faq-3"><span class="mobile-num">3.</span><span>Слетает ли авто с гарантии после чип-тюнинга?</span></a>
					<a href="#faq-popup" class="b-faq fancy" data-id="faq-4"><span class="mobile-num">4.</span><span>Можно ли вернуть всё обратно?</span></a>
					<a href="#faq-popup" class="b-faq fancy" data-id="faq-5"><span class="mobile-num">5.</span><span>Как вернуть деньги, если не понравится?</span></a>
				</div>
				<div class="b-faq-right">
					<div class="b-faq-item active" id="faq-1">
						<h3>Безопасен ли чип-тюнинг?</h3>
						<p>Если Чип Тюнинг выполнен профессионально, то ни о каком сокращении ресурсов не может быть и речи. Кроме того, возросший крутящий момент в области низких и средних оборотов позволяет быстрее переключать передачи, что не даёт возможности работать двигателю на высоких оборотах без надобности. </p>
					</div>
					<div class="b-faq-item" id="faq-2">
						<h3>Почему так не делают с завода?</h3>
						<p>Не секрет, что производители заводской прошивкой душат двигатель из-за экологических норм, налоговых требований, а так же в маркетинговых целях. Поэтому у каждого двигателя остается нераскрытый потенциал - дополнительный запас мощности без вреда двигателю.</p>
					</div>
					<div class="b-faq-item" id="faq-3">
						<h3>Слетает ли авто с гарантии после чип-тюнинга?</h3>
						<p>При прошивке автомобиля будут сохранены все заводские функции и дилерские данные. Автомобиль будет диагностироваться как на заводской прошивке, будут работать все дилерские тесты и коды ошибок. Специалисты на дилерской станции не смогут узнать о программном вмешательстве.</p>
					</div>
					<div class="b-faq-item" id="faq-4">
						<h3>Можно ли вернуть всё обратно?</h3>
						<p>Конечно можно. Перед чип-тюнингом всегда считывается и сохраняется заводская прошивка. Если вы остались недовольны или передумали, то возврат заводской прошивки будет для вас абсолютно бесплатным с полным возвратом стоимости работ.</p>
					</div>
					<div class="b-faq-item" id="faq-5">
						<h3>Как вернуть деньги, если не понравится?</h3>
						<p>Если что-то не понравилось в прошивке или просто передумали - без вопросов вернем заводскую прошивку с полным возвратом стоимости работ в течение 30 дней с момента прошивки автомобиля.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="b b-9">
		<div class="b-map-bubble show">
			<div class="b-map-bubble-inner">
				<div class="b-map-bubble-text">Свяжитесь с нами<br>или приезжайте по адресу:<br> <b>г.&nbsp;Томск, ул.&nbsp;Смирнова, д.&nbsp;7/4</b></div>
				<div class="b-map-bubble-bottom">
					<a href="tel:+73822337133" class="b-map-phone-1">+7 (3822) 33-71-33</a>
					<a href="tel:+73822984298" class="b-map-phone-2">98-42-98</a>
				</div>
			</div>
		</div>
		<div id="map_canvas"></div>
		<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2200.5386621723055!2d84.98323851592838!3d56.52737103945314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x432693b7e676540f%3A0xbca2ae217fb13b92!2z0YPQuy4g0KHQvNC40YDQvdC-0LLQsCwgNy80LCDQotC-0LzRgdC6LCDQotC-0LzRgdC60LDRjyDQvtCx0LsuLCA2MzQwMjc!5e0!3m2!1sru!2sru!4v1586498485038!5m2!1sru!2sru" width="2560" height="750" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
	</div>
	<div class="b b-10">
		<div class="b-block">
			<div class="b-info clearfix">
				<div class="b-info-left">
					<a href="/" class="b-logo"></a>
					<div class="b-addr">
						<span>г. Томск, ул. Смирнова, д. 7/4 </span>
						<a href="#" class="dashed yellow">посмотреть на карте</a>
					</div>
				</div>
				<div class="b-info-right">
					<div class="b-phone clearfix">
						<a href="tel:+73822337133" class="b-phone-link">+7 (3822) 33-71-33</a>
						<a href="#b-phone-popup" class="dashed yellow fancy">перезвоните мне</a>
					</div>
				</div>
			</div>
			<div class="b-politics clearfix">
				<div class="b-politics-left">
					<div class="b-politics-copyright">© 2020 ООО «Автобезопасность». <br>Все права защищены.</div>
					<div class="b-politics-link"><a href="#">Политика конфиденциальности</a></div>
				</div>
				<a href="https://redder.pro/" target="_blank" class="b-redder-logo"></a>
			</div>
		</div>
	</div>
	<div style="display:none;">
		<a href="#b-popup-error" class="b-error-link fancy" style="display:none;"></a>
		<a href="#b-popup-success" class="b-thanks-link fancy" style="display:none;"></a>
		<div class="b-popup" id="b-main-popup">
			<form class="b-form-request" action="kitsend.php" method="POST">
				<p><b>Оставьте ваши контактные данные,</b> наш&nbsp;менеджер свяжется с Вами и рассчитает точный прирост мощности</p>
				<div class="b-input-string">
					<select id="mark-bottom" class="b-select-mark" name="mark-bottom" required="">
						<option value="" class="default-option">Выберите марку</option>
					</select>
					<label for="mark-bottom">Пожалуйста, выберите марку автомобиля</label>
				</div>
				<div class="b-input-string">
					<select id="model-bottom" class="b-select-model" name="model-bottom" required="">
						<option value="" class="default-option">Выберите модель</option>
					</select>
					<label for="model-bottom">Пожалуйста, выберите модель автомобиля</label>
				</div>
				<div class="b-input-string">
					<select id="engine-bottom" class="b-select-engine" name="engine-bottom" required="">
						<option value="" class="default-option">Выберите двигатель</option>
					</select>
					<label for="engine-bottom">Пожалуйста, укажите двигатель</label>
				</div>
				<div class="b-input-string b-input-phone">
					<input type="text" id="phone" name="phone" placeholder="Ваш телефон">
					<span class="icon-phone"></span>
					<label for="phone">Пожалуйста, укажите ваш телефон</label>
				</div>
				<div class="b-input-string b-btn-string">
					<div class="b-btn-cont">
						<a href="#" class="b-btn ajax">
							<span>Оставить заявку на расчет прироста&nbsp;мощности</span>
						</a>
					</div>
				</div>
				<div class="b-input-string-checkbox">
					<div class="b-checkbox">
						<input id="politics-2" name="politics" type="checkbox" value="politics" required checked>
						<label for="politics-2" class="checkbox">
							<span class="icon-checkbox"></span>
							Я принимаю <a href="#" class="dashed">условия передачи информации</a>
						</label>
					</div>
				</div>
			</form>
		</div>
		<div class="b-popup" id="b-phone-popup">
			<form action="kitsend.php" method="POST">
				<p><b>Оставьте ваши контактные данные,</b> наш&nbsp;менеджер перезвонит Вам  в&nbsp;ближайшее время</p>
				<div class="b-input-string b-input-user">
					<input type="text" id="name" name="name" placeholder="Ваше имя" required="">
					<span class="icon-user"></span>
					<label for="name">Пожалуйста, укажите ваш телефон</label>
				</div>
				<div class="b-input-string b-input-phone">
					<input type="text" id="phone" name="phone" placeholder="Ваш телефон" required="">
					<span class="icon-phone"></span>
					<label for="phone">Пожалуйста, укажите ваш телефон</label>
				</div>
				<div class="b-input-string b-btn-string">
					<div class="b-btn-cont">
						<a href="#" class="b-btn ajax">
							<span>Оставить заявку на расчет прироста&nbsp;мощности</span>
						</a>
					</div>
				</div>
				<div class="b-input-string-checkbox">
					<div class="b-checkbox">
						<input id="politics-3" name="politics" type="checkbox" value="politics" required checked>
						<label for="politics-3" class="checkbox">
							<span class="icon-checkbox"></span>
							Я принимаю <a href="#" class="dashed">условия передачи информации</a>
						</label>
					</div>
				</div>
			</form>
		</div>
		<div class="b-popup" id="faq-popup">
			<h3>Автобезопасность</h3>
			<p></p>
		</div>
		<div class="b-thanks b-popup" id="b-popup-success">
			<div class="b-popup-head">Спасибо!</div>
			<h4>Ваша заявка успешно отправлена, наш менеджер уже работает над ней и в скором времени свяжется с Вами</h4>
			<a href="#" class="b-btn" onclick="$.fancybox.close(); return false;"><span>Закрыть</span></a>
		</div>
		<div class="b-thanks b-popup" id="b-popup-error">
			<div class="b-popup-head">Ошибка отправки!</div>
			<h4>Приносим свои извинения. Пожалуйста, попробуйте отправить Вашу заявку позже.</h4>
			<a href="#" class="b-btn" onclick="$.fancybox.close(); return false;"><span>Закрыть</span></a>
		</div>
	</div>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/jquery.fancybox.min.js"></script>
	<script src="//maps.google.com/maps/api/js?sensor=false&key=AIzaSyD6Sy5r7sWQAelSn-4mu2JtVptFkEQ03YI"></script>
	<script src="js/jquery.touch.min.js"></script>
	<script src="js/jquery.maskedinput.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/jquery.formstyler.min.js"></script>
	<script src="js/KitAnimate.js"></script>
	<script src="js/slick.js"></script>
	<script src="js/mask.js"></script>
	<script src="js/KitSend.js"></script>
	<script src="js/main.js"></script>
</body>
</html>