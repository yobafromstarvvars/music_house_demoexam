<?php 
 require "./config/loadConfig.php";

 

 
?>
    <body>
        <?php

            // Fixed position settings are in _searchbar.scss
            echo '<div class="fixed-at-top">';
                require SEARCHBAR;       
                require FILTERSROW;
            echo '</div>';

            require SIDEPANEL;

           // require CAROUSEL;
            echo '<div id="main">';
            require CAROUSEL;
            require HOMECONTENT;    
            require FOOTER;         
            echo '</div>';

            // load all js scripts. Order is set in links.php
            loadLinks($linkstoJS);
            
        ?>
    </body>
</html>

