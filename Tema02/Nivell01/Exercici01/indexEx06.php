<?php
function isBitten() {
  $randomNum = rand(0, 1);
  if ($randomNum <= 0.5) {
    return true;
  } else {
    return false;
  }
}

if (isBitten()) {
  echo "Charlie t'ha mossegat el dit!";
} else {
  echo "Charlie no t'ha mossegat el dit.";
}
?>
