<?php

use Twig\Node\Expression\Test\DivisiblebyTest;

class_exists('Twig\Node\Expression\Test\DivisiblebyTest');

@trigger_error(sprintf('Using the "Twig_Node_Expression_Test_Divisibleby" class is deprecated since Twig version 1.38, use "Twig\Node\Expression\Test\DivisiblebyTest" instead.'), E_USER_DEPRECATED);

if (\false) {
    class Twig_Node_Expression_Test_Divisibleby extends DivisiblebyTest
    {
    }
}
