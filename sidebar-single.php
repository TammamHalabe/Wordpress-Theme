<div class="sidebar_container">
    <div class="sidebar">
        <div class="sidebar_item">
        <h2>Beiträge</h2>
        nach Monaten:
        <ul>
            <?php wp_get_archives('type=monthly'); ?>
        </ul>
        nach Wochen:
        <ul>
            <?php wp_get_archives('type=weekly'); ?>
        </ul>
        nach Tagen:	   
        <ul>
            <?php wp_get_archives('type=daily'); ?>
        </ul>                      
   </div>
</div>
</div>