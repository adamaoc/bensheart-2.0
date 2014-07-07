<?php
$root = explode('/', $_SERVER["DOCUMENT_ROOT"]);
$flexroot = $root[0]."/".$root[1]."/".$root[2]."/".$root[3];
$templateRoot = $flexroot."/flexhub/templates/";

$flexurl = "http://localhost:8000/";

$settings = array(
	"sitename" => "Ben's Heart Foundation",
	"slogan" => "Ben’s Heart was founded to help families going through the pains of having a child born with heart abnormalities.",
	"skin" => "basic_responsive",
	"palette" => "sunrise",
	"apislug" => "bens-heart",
	"phonenumber" => ""
);

require_once $templateRoot."index.php";

$app = new App;
