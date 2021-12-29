<?php
require_once('modeles/Photos.php');
$photos = new Photos();
$photos = $photos->listerPhotos();
require_once('vues/liste-photos.php');