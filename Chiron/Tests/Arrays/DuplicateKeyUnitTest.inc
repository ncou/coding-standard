<?php

$inline = ['a' => 1, 'b' => 2, 'a' => 3];

$multiline = [
    PHP_INT_MAX => 0,
    'ab' => 1,
    'b' => 2,
    "b" => 3,
    'a'.'b' => 4,
    'a'. // comment
    'b' => 5,
    'noindex',
    'a\\b' => 6,
    'a\b' => 7,
    'a\\\\b' => 8,
    'a\\\b' => 9,
    "a\b" => 10,
    "a\\b" => 11,
    'a\'b' => 12,
    "a'b" => 13,
    'b$a' => 14,
    "b$a" => 15,
    'a
    b' => 16,
    "a
    b" => 17,
    'PHP_INT_MAX' => 18,
];

$a = [
    '\a' => 1,
    '\\a' => 2,
    "\a" => 3,
    "\\a" => 4,
];

$b = [
    '\b' => 1,
    '\\b' => 2,
    "\b" => 3,
    "\\b" => 4,
];

$e = [
    '\e' => 1,
    '\\e' => 2,
    "\e" => 3,
    "\\e" => 4,
];

$f = [
    '\f' => 1,
    '\\f' => 2,
    "\f" => 3,
    "\\f" => 4,
];

$n = [
    '\n' => 1,
    '\\n' => 2,
    "\n" => 3,
    "\\n" => 4,
];

$r = [
    '\r' => 1,
    '\\r' => 2,
    "\r" => 3,
    "\\r" => 4,
];

$t = [
    '\t' => 1,
    '\\t' => 2,
    "\t" => 3,
    "\\t" => 4,
];

$v = [
    '\v' => 1,
    '\\v' => 2,
    "\v" => 3,
    "\\v" => 4,
];

$x = [
    '\x' => 1,
    '\\x' => 2,
    "\x" => 3,
    "\\x" => 4,

    '\xa' => 1,
    '\\xa' => 2,
    "\xa" => 3,
    "\\xa" => 4,

    '\xF' => 1,
    '\\xF' => 2,
    "\xF" => 3,
    "\\xF" => 4,

    '\x0' => 1,
    '\\x0' => 2,
    "\x0" => 3,
    "\\x0" => 4,

    '\x9' => 1,
    '\\x9' => 2,
    "\x9" => 3,
    "\\x9" => 4,

    '\xZ' => 1,
    '\\xZ' => 2,
    "\xZ" => 3,
    "\\xZ" => 4,
];

$quote = [
    '"' => 1,
    "\"" => 2,

    "'" => 1,
    '\'' => 2,
];

$slashes1 = [
    'a\\b' => 1,
    'a\b' => 2,
    'a\\\b' => 3,
    'a\\\\b' => 4,
];

$slashes2 = [
    "a\\b" => 1,
    "a\b" => 2,
    "a\\\b" => 3,
    "a\\\\b" => 4,
];
