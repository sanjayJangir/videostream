<?php
include "VideoStream.php";
$filePath = "demo.mkv";
$stream = new VideoStream($filePath);
$stream->start();
