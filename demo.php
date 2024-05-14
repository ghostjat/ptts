<?php

require_once 'vendor/autoload.php';

$text = 'Certainly! In PHP 8, constructor property promotion is a feature that simplifies the process of creating value objects (VOs) and data transfer objects (DTOs). Let me break it down for you:

What Is Constructor Property Promotion?
Constructor property promotion allows you to declare a property’s visibility (public, protected, or private), its name, and optionally its type directly in the constructor’s parameter list.
The compiler then automatically generates the corresponding property and initializes it with the provided argument when creating an object1.
How Does It Work?
To create a promoted property, prefix its name with a class visibility modifier (public, protected, or private).
Once promoted, the property behaves like any other class property.
';
$tts = new Core\Ptts($text);
$tts->run();