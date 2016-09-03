<?php

function _devspot_youtube_fixer($contentIn) {
  $pattern = '|\[youtube:(.*)\s(\d+)\s(\d+)\]|isU';
  $replace  = '[youtube ${1}&w=${2}&h=${3} ]';

  $contentOut = preg_replace($pattern, $replace, $contentIn);

  return $contentOut;
}

if(function_exists('add_filter')) {
  add_filter('the_content', '_devspot_youtube_fixer');
}
