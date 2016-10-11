<?php
function active($route) {
  /*if(is_array($route)) {
    foreach ($route as $r) {
      if(Request::url() == route($r))
        return " class=\"active\"";
    }
  }else if(Request::url() == route($route))
    return " class=\"active\"";*/
}

function activeGroup($group) {
  /*if(strpos(Request::route()->getPrefix(),$group))
    return " class=\"active\"";*/
}

?>