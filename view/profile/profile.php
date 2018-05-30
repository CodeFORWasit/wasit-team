<style type="text/css">
    body{
        background-color: rgba(175, 223, 255);
    }
</style>
    <div class="container1" style="padding: 10px" dir="rtl">
        <div class="side0">
            <div class="image0">
                <img src="<?php echo $this->_static("img/team/".$this->data['image_profile']); ?>" >
            </div>
            <div class="social">
                
                <a href="<?php echo $this->data['url_github']; ?>"><i class="fab fa-github fa-3x"></i></a>
                <a href="<?php echo $this->data['url_feacbook'];  ?>"><i class="fab fa-facebook fa-3x"></i></a>
<!--                <a href="#"><i class="fab fa-linkedin fa-3x"></i></a>-->
                
            </div>
            <div class="name0">
                <h2> <?php echo $this->data['fullName'];  ?> </h2>
                <hr>
                <h3> Code For Iraq </h3>
            </div>

        </div>


        <div class="info0 ">
            <div class="rig" dir="ltr">
                <img src="<?php echo $this->_static("img/team/".$this->data['image_profile']); ?>" alt="">
                <p>الملف الشخصي</p> 

            </div>
            <div class="about">
                <h2> مرحبا انا <span> <?php echo $this->data['fullName'];  ?>  </span></h2>
                <p> <?php echo $this->data['about'];  ?>  </p>
            </div>

            <div class="personal">
                <h2> معلومات شخصية </h2>
                <p>
                    <ul>
                        <li> <div>الاسم الكامل:</div>
                            <span>  <?php echo $this->data['fullName'];  ?> </span>
                        </li>
                        <li><div>تاريخ الميلاد:</div>
                            <span><?php echo $this->data['borth_day'];  ?> </span>
                        </li>
                        <li><div>الجنس:</div>
                            <span><?php echo $this->data['gander'];  ?> </span>
                        </li>
                        <li> <div>البريد الالكتروني:</div>
                            <span><?php echo $this->data['username'];  ?>@codeforiraq.org</span>
                        </li>

                        <li><div>رقم الهاتف:</div>
                            <span><?php echo $this->data['telephone'];  ?> </span>
                        </li>
                        <li><div> العنوان:</div>
                            <span>واسط- <?php echo $this->data['city'];  ?> </span>
                        </li>
                        
                    </ul>
                </p>
            </div>

        </div>
        <div class="side2">
            <div class="name">
                <h2> لغات البرمجه </h2>
                <hr>
            </div>
                <ul>
                    <?php foreach(explode(",", $this->data['languageProgam']) as $lang){  ?> 
                        <li>
                            <span> <?php echo $lang;  ?>  </span>
                        </li>
                    <?php }  ?> 
                </ul>

            <h3> فريمورك و مكتبه تجيدها</h3>
            <hr>
            <p>
                <ul>
                    <?php foreach(explode(",", $this->data['skile']) as $skil){  ?> 
                        <li>
                            <span> <?php echo $skil;  ?>  </span>
                        </li>
                    <?php }  ?>  
                </ul>
            </p>
        </div>
    </div>
