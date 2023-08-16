<?php

require __DIR__ . "/vendor/autoload.php";

use Dompdf\Dompdf;
use Dompdf\Options;

$event = $_POST["event"];
$date = $_POST["date"];

$organizer= $_POST["organizer"];
$writer= $_POST["writer"];

$department= $_POST["department"];
$summary = $_POST["summary"];
$conclusion=$_POST["conclusion"];

$options = new Options;
$options->setChroot(__DIR__);
$options->setIsRemoteEnabled(true);

$dompdf = new Dompdf($options);

$dompdf->setPaper("A4", "portrait");


$html = file_get_contents("template.html");

$html= str_replace(["{{event}}", "{{date}}","{{organizer}}","{{writer}}","{{department}}","{{summary}}","{{conclusion}}"],[$event,$date,$organizer,$writer,$department,$summary,$conclusion], $html);

$dompdf->loadHtml($html);

//convert

$dompdf->render();

$dompdf->addInfo("Title", "report"); // "add_info" in earlier versions of Dompdf


 // open to the browser

$dompdf->stream("report.pdf", ["Attachment" => 0]);
