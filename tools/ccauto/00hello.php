<?php

use \Tsugi\Core\LTIX;
use \Tsugi\Util\LTI;
use \Tsugi\Util\PDOX;
use \Tsugi\Util\U;
use \Tsugi\Util\Mersenne_Twister;

global $ASSIGNMENT;

$ASSIGNMENT = true;

function ccauto_instructions($LAUNCH) {
    return 'Please write a program to print "Hello world"';
}

function ccauto_input($LAUNCH) { return false; }

function ccauto_sample($LAUNCH) { return <<< EOF
#include <stdio.h>
main() {
  prinq("Hello world\\n");
}
EOF
;
}

function ccauto_output($LAUNCH) { return "Hello world"; }

