<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:51:"./application/admin/view2/distribut\ajax_lower.html";i:1495107356;}*/ ?>
<ul>
<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $k=>$v): ?>    
        <li>
            <span class="tree_span" data-id="<?php echo $v[user_id]; ?>">
                 <i class="icon-folder-open"></i>
                 <?php echo $v['user_id']; ?>:
                 <?php if($v['nickname'] != null): ?>
                         <?php echo $v['nickname']; elseif($v['mobile'] != null): ?>
                     <?php echo $v['mobile']; elseif($v['email'] != null): ?>
                     <?php echo $v['email']; endif; ?>
             </span>                                                
        </li>
<?php endforeach; endif; else: echo "" ;endif; ?>
</ul>