<?php

/*
* PHP code generated with wxFormBuilder (version Aug 23 2015)
* http://www.wxformbuilder.org/
*
* PLEASE DO "NOT" EDIT THIS FILE!
*/

/*
 * Class MyFrame3
 */

//require_once "frame_01.php";

//require_once "event_actions.php";

require_once "home_events.php";


class MyApp extends wxApp 
{
  function OnInit()
  {
    //$this->mf = new event_frame01(10);
    $this->mf = new homeExtend();
    $this->mf->Show();


    var_dump(class_exists('wxSQLite3'));

    return 0;
  }

  function OnExit()
  {
    return 0;
  }
}



$app = new MyApp();
wxApp::SetInstance($app);
wxEntry();  

?>
