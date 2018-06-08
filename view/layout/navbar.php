<nav class="navbar navbar-expand-sm navbar-dark bg-dark <?php echo isset($this->_fixed) ? $this->_fixed : ""; ?>" dir="rtl">

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive" dir="rtl">
        <ul class="navbar-nav">

            <?php 
                if (isset($this->_navbar)){
                    foreach ($this->_navbar as $key => $value) {
            ?>
                <li class="">
                    <a class="nav-link js-scroll-trigger " href="<?php echo $key ?>">
                        <?php echo $value ?>
                    </a>
                </li>
            <?php
                    }
                }
            ?>
        </ul>
    </div>
     
   <a class="navbar-brand ml-auto  js-scroll-trigger " href="<?php echo M_PATH; ?>">البرمجة من اجل العراق | فريق واسط</a>
</nav>
