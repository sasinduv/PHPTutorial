<?php
$products = array(
'paper' =>array(
'copier' => "Copier & Multipurpose",
'inkjet' => "Inkjet Printer",
'laser' => "Laser Printer",
'photo' => "Photographic Paper"),
'pens' => array(
'ball'=> "Ball Point",
'hilite' => "Highlighters",
'marker' => "Markers"),
'misc' => array(
'tape'=> "StickyTape",
'glue'=> "Adhesives",
'clips' => "Paperclips")
);

echo $products["pens"]["marker"];
?>