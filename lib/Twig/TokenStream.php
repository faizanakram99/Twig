<?php

use Twig\TokenStream;

class_exists('Twig\TokenStream');

@trigger_error(sprintf('Using the "Twig_TokenStream" class is deprecated since Twig version 1.38, use "Twig\TokenStream" instead.'), E_USER_DEPRECATED);

if (\false) {
    class Twig_TokenStream extends TokenStream
    {
    }
}
