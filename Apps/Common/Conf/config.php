<?php
return array(
	//'配置项'=>'配置值'
	'MODULE_ALLOW_LIST'	=>	array('Home','Admin'),
	'DEFAULT_MODULE'	=>	'Home',
	'SHOW_PAGE_TRACE' =>true,  //显示页面的trace
	'TMPL_PARSE_STRING' => array(
        '__PUBLIC__' => __ROOT__ . '/Public',
        '__ADMIN__'	=> __ROOT__ . '/Public/static/admin/',
       
    ),
);
