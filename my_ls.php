#!/usr/bin/php
<?php

/*
**Coded by jeremy.lefranc@epitech.eu
*/

/*
**colors
*/

define("RED", "\e[0;31m");
define("BLUE0", "\e[0;36m");
define("GREEN", "\e[0;32m");
define("BLUE1", "\e[0;34m");
define("BLACK", "\e[0;30m");
define("WHITE", "\e[0;37m");
define("YELLOW", "\e[0;33m");
define("PURPLE", "\e[0;35m");

/*
**listing all directory
*/

function list_dir($name, $argc, $argv) {
  if ($argc > 1 && in_array($argv[1], array('-images', '-i'))) {
    foreach (glob("*.ai") as $filename) {
      echo "\e[0;32mYour pict format[ai] [***$filename***]\n\e[0m";  
    }
    foreach (glob("*.bmp") as $filename) {
      echo "\e[0;32mYour pict format[bmp] [***$filename***]\n\e[0m";
    }
    foreach (glob("*.eps") as $filename) {
      echo "\e[0;32mYour pict format[eps] [***$filename***]\n\e[0m";
    }
    foreach (glob("*.jpg") as $filename) {
      echo "\e[0;32mYour pict format[jpg] [***$filename***]\n\e[0m";
    }
    foreach (glob("*.jpeg") as $filename) {
      echo "\e[0;32mYour pict format[jpeg] [***$filename***]\n\e[0m";
    }
    foreach (glob("*.gif") as $filename) {
      echo "\e[0;32mYour pict format[gif] [***$filename***]\n\e[0m";
    }
    foreach (glob("*.pdf") as $filename) {
      echo "\e[0;32mYour pict format[pdf] [***$filename***]\n\e[0m";
    }
    foreach (glob("*.png") as $filename) {
      echo "\e[0;32mYour pict format[png] [***$filename***]\n\e[0m";
    }
    foreach (glob("*.psd") as $filename) {
      echo "\e[0;32mYour pict format[psd] [***$filename***]\n\e[0m";
    }
    foreach (glob("*.tif") as $filename) {
      echo "\e[0;32mYour pict format[tif] [***$filename***]\n\e[0m";
    }
    foreach (glob("*.tiff") as $filename) {
      echo "\e[0;32mYour pict format[tiff] [***$filename***]\n\e[0m";
    }
  }
  elseif ($argc > 1 && in_array($argv[1], array('-php'))) {
    foreach (glob("*.php") as $filename) {
      echo WHITE . "Your file format[php] [***$filename***]\n\e[0m";
    }
  }
  elseif ($argc > 1 && in_array($argv[1], array('-txt'))) {
    foreach (glob("*.txt") as $filename) {
      echo BLUE1 . "Your file format[txt] [***$filename***]\n\e[0m";
    }
  }
  elseif ($argc > 1 && in_array($argv[1], array('-videos', '-v'))) {
    foreach (glob("*.avi") as $filename) {
      echo YELLOW . "Your file format[avi] [***$filename***]\n\e[0m";
    }
    foreach (glob("*.mkv") as $filename) {
      echo YELLOW . "Your file format[mkv] [***$filename***]\n\e[0m";
    }
  }
  elseif ($argc > 1 && in_array($argv[1], array('-a'))) {
    foreach (glob(".*") as $filename) {
      echo RED . "Your file format[.] [***$filename***]\n\e[0m";
    }
  }
  elseif ($argc > 1 && in_array($argv[1], array('--help', '-h'))) {
    include 'man.txt';
    echo PURPLE . "Your man designed by jeremy.lefranc@epitech.eu!\n\e[0m";
  }
  else {
    $dir = opendir($name);
    while($file = readdir($dir)) {
      if (substr($file, 0, 1) != ".") {
        echo "\e[0;36mlisting of directory [***$file***]\n\e[0m";
      }
    }
    closedir($dir);
  }
}

list_dir(".", $argc, $argv);