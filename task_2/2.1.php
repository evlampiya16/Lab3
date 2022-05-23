<?php

$text = $_POST["text"];
echo "Words: " . str_word_count($text) . "</n>Chars: " . strlen($text); 