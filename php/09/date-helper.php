<?php

function getDayFromDate($date){
  return date('l', strtotime($date));
}
