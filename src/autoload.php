<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'theseer\\autoload\\autoloadbuilder' => '/AutoloadBuilder.php',
                'theseer\\autoload\\autoloadbuilderexception' => '/AutoloadBuilder.php',
                'theseer\\autoload\\classdependencysorter' => '/DependencySorter.php',
                'theseer\\autoload\\classdependencysorterexception' => '/DependencySorter.php',
                'theseer\\autoload\\classfinder' => '/ClassFinder.php',
                'theseer\\autoload\\classfinderexception' => '/ClassFinder.php',
                'theseer\\autoload\\cli' => '/CLI.php',
                'theseer\\autoload\\staticbuilder' => '/StaticBuilder.php',
                'theseer\\autoload\\version' => '/Version.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    }
);
// @codeCoverageIgnoreEnd