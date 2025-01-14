<?php

require_once __DIR__ . "/../vendor/autoload.php";

session_start();

const _DATADIR_ = "";
const _APPROOT_ = "";
const _CSVFILE_ = "";
const _TMPDIR_ = "";

const FIXTURE_PATH = __DIR__ . '/fixtures/';

function __(string $string, ?string $category = null, array $args = []): string
{
    $cat = "";
    if( isset( $category ) && !empty( $category ) ) {
        $cat = $category."_";
    }
    return sprintf('%s%s: %s', $cat, $string, implode(',', $args));
}
