<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $template['title'];?></title>
        <script type="text/javascript" src ="<?php echo base_url().'assets/jquery.js';?>"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'themes/neo/assets/desktop/style.css';?>"></link>
        <script type="text/javascript" src="<?php echo base_url().'themes/neo/assets/desktop/script.js';?>"></script>
    </head>
    <body>
        <div id="layout_header"><?php echo $template['partials']['header'];?></div>
        <div id="layout_center">
            <div id="layout_navigation"><?php echo $template['partials']['navigation'];?></div>
            <div id="layout_widget">WIDGET<hr /><?php echo $template['partials']['widget'] ?></div>
            <div id="layout_content">
                <div id="layout_nav_path">You are here : <?php echo $template['partials']['navigation_path']?></div>
                <br />
                <?php echo $template['body'];?>
            </div>
            <div class="layout_clear"></div>
        </div>
        <div id="layout_footer"><?php echo $template['partials']['footer'];?></div> 
    </body>
</html>