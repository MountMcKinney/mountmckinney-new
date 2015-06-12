<?php
  function display_portfolio_html($websiteSKU,$website){
    //build HTML output here
    $output = "";
    $output .= "<li>";
    $output .= '<a href="example.php?name='.$websiteSKU.'">';
    $output .= "<figure>";
    $output .= '<img src="'.$website["thumbnail"] .'" alt="'.$website["name"].'">';
    $output .= '<figcaption>'.$website["name"].'</figcaption>';
    $output .= "</figure>";
    $output .= "</a>";
    $output .= "</li>";

    return $output;
  }

    $websites = array();
    $websites["tent"] = array(
      "img" => "/img/port-tents4sale.png",
      "thumbnail" => "/img/port-thumb-tents4sale.png",
      "name" => "tents4sale.com"
    );
    $websites["icecream"] = array(
      "img" => "/img/port-threeflavors.jpeg",
      "thumbnail" => "/img/port-thumb-threeflavors.jpeg",
      "name" => "3flavorsshop.com"
    );
    $websites["boats"] = array(
      "img" => "/img/port-boats.png",
      "thumbnail" => "/img/port-thumb-boats.png",
      "name" => "boatsboatsboats.com"
    );
    $websites["marriageabbey"] = array(
      "img" => "/img/port-marriage.jpeg",
      "thumbnail" => "/img/port-thumb-marriage.jpg",
      "name" => "marriageabbey.com"
    );
    $websites["rental"] = array(
      "img" => "/img/port-rental.jpeg",
      "thumbnail" => "/img/port-thumb-rental.jpeg",
      "name" => "usedrentalequipment.com"
    );
  ?>
