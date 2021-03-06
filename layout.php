<?php

	//include the RainTPL class
	include "inc/rain.tpl.class.php";

	raintpl::configure("base_url", null );
	raintpl::configure("tpl_dir", "tpl/" );
	raintpl::configure("cache_dir", "tmp/" );

	//initialize a Rain TPL object
	$tpl = new RainTPL;

	$tpl->assign('title','可视化布局');
    //$tpl->assign( 'current', 'ui' );

        // you can draw the output
        // $tpl->draw( 'index' );
        // or the template output string by setting $return_string = true:
		$html = $tpl->draw( 'layout', $return_string = true );

        // and then draw the output
        echo $html;
      
        class str{
            function cut($t){
                return substr($t, 1, 2 );
            }
        }
        
?>