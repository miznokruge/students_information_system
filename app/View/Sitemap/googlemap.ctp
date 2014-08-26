<?php
// include the Google js code
echo $this->Html->script($this->GoogleMapV3->apiUrl());
// OR include it manually without cake (or use your own asset stuff)
echo '<script type="text/javascript" src="' . $this->GoogleMapV3->apiUrl() . '"></script>';
// init map (prints container)
echo $this->GoogleMapV3->map(array('div' => array('height' => '400', 'width' => '100%')));
// add markers
$options = array(
    'lat' => 48.95145,
    'lng' => 11.6981,
    'icon' => $this->webroot . 'img/cake.icon.png', // optional
    'title' => 'Some title', // optional
    'content' => '<b>HTML</b> Content for the Bubble/InfoWindow' // optional
);
// tip: use it inside a for loop for multiple markers
$this->GoogleMapV3->addMarker($options);
// print js
echo $this->GoogleMapV3->script();
