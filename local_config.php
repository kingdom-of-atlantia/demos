<?php

$SITE_TITLE = "DEMO Site, Kingdom of Atlantia";
$SITE_TITLE_MENU = "Demos"; # Example: Menu
$SITE_TITLE_HEADER = "DEMO SITE - ALL FEATURES ARE EXPERIMENTAL, NOT FINAL - <br/> CLICK THE SPIDER TO VIEW DISCLAIMER "; # Example: Welcome to our page!
$SITE_WEBMIN_LABEL = "Melchior";
$SITE_WEBMIN_ADDRESS = "webminister@atlantia.sca.org";
$SITE_OFFICE_IMAGE = "/images/webminister.png"; # if null, no graphic.
$SITE_DEBUG = false;

/*
The navigation array elements are, themselves, just basic arrays each contains 3 elements:
- label, what you want to be in the menu
- link, where you want the menu to take you OR if the value is null it is just a label with no link
- new_window, if you have a link should it open in a new window?
*/

/* Basic menu, what is used for most sites */
$SITE_MENU = array
  (
  array("Redesign (v5)","/Atlantia_Mark5",true),
  array("Member Stats (v1)","population.php",false),
  array("Zip Code Lookup (v2)","zip.php",false),
  array("Calendar (v2)","calendar.php",false),
  array("Google Calendar","gCal.php",false),
  array("Calendar .ics","http://api.atlantia.sca.org/AtlantiaEvents.ics",false),
  array("Search Atlantia","search.php",false),
  array("Send Feedback","mailto:webminister@atlantia.sca.org",true)
  );

?>