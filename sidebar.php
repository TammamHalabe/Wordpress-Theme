<!-- ab hier: sidebar.php -->
<div class="sidebar_container ">
  <div class="sidebar">     
  <div class="sidebar_item">             
      <?php
          if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
          <ul>   
              <li>Sidebar</li>
          </ul>	  
      <?php endif ?>
  </div>    
  </div>
</div> <!-- ENDE Sidebar --> 
<!-- bis hier: sidebar.php -->