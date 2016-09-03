<?php
include('devspot_youtube_fixer.inc');

$post = new stdClass;
$post->post_content = '
one two three four
five six
seven eight [youtube:https://www.youtube.com/watch?v=_AQ4Rw4CEVs.A 680 383] nine ten
elevel
twelve thirteen fourteen
fifteen [youtube:https://www.youtube.com/watch?v=_AQ4Rw4CEVs.B 680 383] [youtube:https://www.youtube.com/watch?v=_AQ4Rw4CEVs.C 789 1011]
[youtube:https://www.youtube.com/watch?v=_AQ4Rw4CEVs.D 700 800] sixteen
seventeen
';

print_r($post);
print "=========================\n\n";

$post->post_content = _devspot_youtube_fixer($post->post_content);

print_r($post);
print "=========================\n\n";
