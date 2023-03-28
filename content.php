<?php
    $id_object_active = get_queried_object();
    $id_object_active_url="";
    if(isset($id_object_active->term_id) && is_category()){
        $id_object_active_id=$id_object_active->term_id;
        $id_object_active_url = get_term_link($id_object_active_id);
    }else{
        $id_object_active_url = home_url() . '/';
    }
    $total_page = $GLOBALS['wp_query']->max_num_pages;
    $current_page = max( 1, get_query_var('paged') );
    $number_display = 8;
    $val = reset($_GET);
    $key = key($_GET);
    parse_str($_SERVER['QUERY_STRING'], $array);
    $val = reset($array);
    $key = key($array);
    $result="$key=$val";
    ?>
    <?php azonow_category_list($posts)?>
    <?php  if($total_page  <2){
        return '';
    }?>
    <div class="wp-pagenavi">
        <?php if($current_page <= 4):?>
        
            <?php for($i=1;$i<=$total_page;$i++):?>
                <?php if($i <= $number_display):?>
                    <?php if($i<=6):?>
                        <?php if($current_page == $i):?>
                            <span class="current"><?php echo $i?></span>
                        <?php else:?>
                            <?php if($current_page < $i):?>
                                <a class="page larger" href="<?php echo $id_object_active_url ?>page/<?php echo $i ?>/?<?php echo $result ?>"><?php echo $i?></a>
                            <?php else:?>
                                <a class="page smaller" href="<?php echo $id_object_active_url ?>page/<?php echo $i ?>/?<?php echo $result ?>"><?php echo $i?></a>
                            <?php endif;?>
                        <?php endif;?>
                    <?php elseif($total_page-$i > 2):?>
                        <?php if($i==$number_display-1):?>
                            <span class="extend">...</span>
                        <?php elseif($i==$number_display):?>
                            <a class="last" href="<?php echo $id_object_active_url ?>page/<?php echo ($total_page ) ?>/?<?php echo $result ?>">&gt;</a>
                        <?php endif?>
                    <?php else:?>
                        <?php if($i==$number_display):?>
                            <a class="last" href="<?php echo $id_object_active_url ?>page/<?php echo ($total_page ) ?>/?<?php echo $result ?>">&gt;</a>
                        <?php endif?>
                    <?php endif;?>
                <?php endif;?>
            <?php endfor;?>
        <?php elseif($total_page - $current_page > 3):?>
            
        <?php for($i=1;$i<=$total_page;$i++):?>
            <?php if($i<=2):?>
                <?php if($i==1):?>
                    <a class="first" href="<?php echo $id_object_active_url ?>page/<?php echo $i ?>/?<?php echo $result ?>">&lt;</a>
                <?php else:?>
                    <span class="extend">...</span>
                <?php endif?>
            <?php elseif($i==3):?>
                <a class="page smaller" href="<?php echo $id_object_active_url ?>page/<?php echo $current_page-1 ?>/?<?php echo $result ?>"><?php echo $current_page-1?></a>
            
            <?php elseif($i==4):?>
                <span class="current"><?php echo $current_page?></span>
            
            <?php elseif($i== 5):?>
                <a class="page larger" href="<?php echo $id_object_active_url ?>page/<?php echo $current_page+1 ?>/?<?php echo $result ?>"><?php echo $current_page+1?></a>
            
            <?php elseif($i== 6):?>
                <a class="page larger" href="<?php echo $id_object_active_url ?>page/<?php echo $current_page+2 ?>/?<?php echo $result ?>"><?php echo $current_page+2?></a>
            
            <?php elseif($i==7):?>
                <span class="extend">...</span>
            <?php elseif($i==8):?>
                <a class="last" href="<?php echo $id_object_active_url ?>page/<?php echo $total_page ?>/?<?php echo $result ?>">&gt;</a>
            <?php endif?>
        <?php endfor;?>
        <?php else:?>
            
            <?php for($i=1;$i<=$total_page;$i++):?>
                <?php if($i<=2):?>
                    <?php if($i==1):?>
                        <a class="first" href="<?php echo $id_object_active_url ?>page/<?php echo $i ?>/?<?php echo $result ?>">&lt;</a>
                    <?php else:?>
                        <span class="extend">...</span>
                    <?php endif?>
                <?php elseif($number_display- $i >=0):?>
                    <?php if(($total_page - ($number_display - $i)) == $current_page):?>
                        <span class="current"><?php echo $current_page?></span>
                    <?php elseif(($total_page - ($number_display - $i))>$current_page):?>
                        <a class="page larger" href="<?php echo $id_object_active_url ?>page/<?php echo ($total_page - ($number_display - $i)) ?>/?<?php echo $result ?>"><?php echo ($total_page - ($number_display - $i))?></a>
                    <?php else:?>
                        <a class="page smaller" href="<?php echo $id_object_active_url ?>page/<?php echo ($total_page - ($number_display - $i)) ?>/?<?php echo $result ?>"><?php echo ($total_page - ($number_display - $i))?></a>
                    <?php endif?>
                <?php endif;?>
            <?php endfor;?>
        <?php endif;?>
    </div>

