<?php

require("../src/StringUtils.php");

if (StringUtils\capitalize('hello!') !== 'Hello!') {
    throw new \Exception('Function error');
}

if (StringUtils\capitalize('') !== '') {
    throw new \Exception('Function error');
}

echo 'All tests passed';
