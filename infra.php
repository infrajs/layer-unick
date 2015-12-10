<?php
namespace infrajs\controller;
use infrajs\path\Path;
use infrajs\event\Event;

Event::handler('oninit', function () {
	ext\unick::init();
});
Event::handler('layer.oninit:external', function (&$layer) {
	ext\unick::check($layer);
}, 'unick');

