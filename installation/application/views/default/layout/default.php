<?php
/**
 * Buddyexpress Framework Core
 *
 * @package   Bframework
 * @author    Buddyexpress Core Team <admin@buddyexpress.net
 * @copyright 2012 BUDDYEXPRESS.
 * @license   Buddyexpress Public License http://www.buddyexpress.net/Licences/bpl/ 
 * @link      http://bserver.buddyexpress.net
 * @Contributors http://www.buddyexpress.net/bframework/contributors.b
 */
/*
* BFramework default page
*/ 
$css = bframework_css_link('all');
if (empty($page['title'])) {
        $title = bframework_get_app('name');
} 
else {
$title = bframework_get_app('name') . " : " . $page['title'];
}
$meta_attr = array(
'BframeworkVersion' => bframework_get_version(),
'BframeworkRelease' => bframework_get_release(),
'ApplicationVersion' => bframework_get_app_version(),
'ApplicationRelease' => bframework_get_app_release(),
);
header("Content-type: text/html; charset=UTF-8");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php echo bframework_meta(array('attr' => array('http-equiv' => "Content-Type", 'content' => "text/html; charset=utf-8"))); 
foreach($meta_attr as $s => $v){
echo bframework_meta(array('attr' => array('name' => $s, 'content' => $v)));
}
?>
<title><?php echo $title; ?></title>
<?php echo bframework_inc_css($css);?>
<?php echo $page['head']; ?>
</head>
<body> 
 <div style="margin:0 auto; width:1000px;">
         <div class="buddyedesk-default">
                         <div class="buddydesk-top">
                                <table border="0">
                                        <tr>
                                                 <td>
                                          <div class="buddyexpresss-logo inline"></div>
                             </td>
                                   <td>&nbsp;</td>
                                     <td>     <div class="buddyexpresss-search-box inline" style="margin-top: -50px;"></div></td>
                                  </tr>
                                </table>

</div>
<div id="buddyexpressdesk-page-menubar">
		<li><a href="#"><?php echo bframework_print("bdesk:installation");?></a></li><li> <a href="#"> > </a></li><li><a href="#"><?php echo $title; ?></a></li></li>
        
        </div>
</div>
<div>
         <?php echo $page['header'];?>
		 <div>
		 <?php echo $page['body'];?>
		 </div>
		 
         <div>
           <hr color="#CCCCCC" style="margin: 10px auto;width: 950px;" />
                    <div style="margin: 5px auto;width: 940px;">
                       Powered <a href="http://labs.buddyexpress.net/bdesk.b">BuddyexpressDesk</a>, <a href="http://labs.buddyexpress.net/">Buddyexpress Network</a> 2009-2014.
            </div>

    		 </div>
</body>

</html>