<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>用户登录</title>
    <link href="/tp/Public/static/admin/css/login.css" type="text/css" rel="stylesheet" />
  </head>
  <body id="userlogin_body">
    <form action="/tp/index.php/Admin/Login/login.html" method="post">
      <div id="user_login">
        <dl>
	  <dd id="user_top">
	    <ul>
	      <li class="user_top_l"></li>
	      <li class="user_top_c"></li>
	      <li class="user_top_r"></li>
	    </ul>
	  </dd>
	  <dd id="user_main">
	    <ul>
	      <li class="user_main_l"></li>
	      <li class="user_main_c">
	        <div class="user_main_box">
		  <ul>
		    <li class="user_main_text">用户名： </li>
		    <li class="user_main_input"><input name="username" maxlength="20" id="TxtUserName" class="txtusernamecssclass"> </li>
		  </ul>
		  <ul>
		    <li class="user_main_text">密 码： </li>
		    <li class="user_main_input"><input type="password" name="password" id="TxtPassword" class="txtpasswordcssclass"> </li>
		  </ul>
		  <ul>
		    <li class="user_main_text">Cookie： </li>
		    <li class="user_main_input"><select name="DropExpiration" id="DropExpiration"> 
		      <option selected="" value="None">不保存</option> <option value="Day">保存一天</option> 
		      <option value="Month">保存一月</option> <option value="Year">保存一年</option></select> </li>
		  </ul>
	        </div>
	      </li>
	      <li class="user_main_r"><input type="image" name="IbtnEnter" src="/tp/Public/static/admin/img/user_botton.gif" class="ibtnentercssclass"></li>
	    </ul>
	  </dd>
	  <dd id="user_bottom">
	    <ul>
	      <li class="user_bottom_l"></li>
	      <li class="user_bottom_c"></li>
	      <li class="user_bottom_r"></li>
	    </ul>
	  </dd>
        </dl>
      </div>
    </form>

  </body>
</html>