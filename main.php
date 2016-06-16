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

require_once "frame_01.php";



class MyApp extends wxApp 
{
  function OnInit()
  {
    $this->mf = new MyFrame1();
    $this->mf->Show();

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
