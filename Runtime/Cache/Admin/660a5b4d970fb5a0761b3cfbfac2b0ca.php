<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv=pragma content=no-cache />
        <meta http-equiv=cache-control content=no-cache />
        <meta http-equiv=expires content=-1000 />
        
        <title>管理中心 v1.0</title>
    </head>
    <frameset border=0 framespacing=0 rows="60, *" frameborder=0>
        <frame name=head src="/tp/index.php/Admin/Manage<?php echo "/head";?>" frameborder=0 noresize scrolling=no>
            <frameset cols="170, *">
                <frame name=left src="/tp/index.php/Admin/Manage<?php echo "/left";?>" frameborder=0 noresize />
                <frame name=right src="/tp/index.php/Admin/Manage<?php echo "/right";?>" frameborder=0 noresize scrolling=yes />
            </frameset>
    </frameset>
    <noframes>
    </noframes>
</html>