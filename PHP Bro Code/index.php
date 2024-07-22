<?php

$age = 15;

if ($age >= 18) {
  echo "You may enter this site.";
} elseif ($age == 0) {
  echo "This wasnt a valid age.";
} else {
  echo "You must be 18+ to enter.";
}
