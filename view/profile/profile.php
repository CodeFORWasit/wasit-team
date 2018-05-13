
    <div class="container1 " dir="rtl">
        <div class="side0">
            <div class="image0">
                <img src="<?php echo $this->_static("img/team/".$this->db['img'] );?>" >
            </div>
            <div class="social">
                <a href="#"><i class="fab fa-github fa-3x"></i></a>
                <a href="#"><i class="fab fa-facebook fa-3x"></i></a>
                <a href="#"><i class="fab fa-linkedin fa-3x"></i></a>
                
            </div>
            <div class="name0">
                <h2> <?php echo $this->db['fullName'];?></h2>
                <hr>
                <h3> مطور
                    <br> مصمم كرافك</h3>
            </div>

        </div>


        <div class="info0 ">
            <div class="rig" dir="ltr">
                <img src="user.png" alt="">
                <p>الملف الشخصي</p> 

            </div>
            <div class="about">



                <h2> مرحبا انا <span> <?php echo $this->db['fullName'];?> </span></h2>
                <p><?php echo $this->db['about'];?> </p>
            </div>

            <div class="personal">
                <h2> معلومات شخصية </h2>
                <p>
                    <ul>
                        <li> <div>الاسم الكامل:</div>
                            <span><?php echo $this->db['fullName'];?></span>
                        </li>
                        <li><div>تاريخ الميلاد:</div>
                            <span>1985</span>
                        </li>
                        <li><div>الجنس:</div>
                            <span>ذكر</span>
                        </li>
                        <li> <div>البريد الالكتروني:</div>
                            <span>info@codeforiraq.org</span>
                        </li>

                        <li><div>رقم الهاتف:</div>
                            <span>07807070752</span>
                        </li>
                        <li><div> العنوان:</div>
                            <span>واسط- الحي - دور الشؤون</span>
                        </li>
                        <li><div>الموقع الالكتروني:</div>
                            <span>www.homewearcon.com</span>
                        </li>

                        
                    </ul>
                </p>
            </div>

        </div>
        <div class="side2">
            <div class="name">
                <h2> المهارات والخبرات</h2>
                <hr>

            </div>
            <p>
                <ul><?php foreach (explode(",",$this->db['langProg']) as $key => $value) { ?>
                    <li>
                        <span> <?php echo $value;?></span>
                    </li>
                     <?php } ?>

                </ul>
            </p>
            <h3> الشهادات والدورات</h3>
            <hr>
            <p>
                <ul>
                    <li>
                        <span>البرمجة بكافة اللغات</span>
                    </li>
                    <li>
                        <span>التعامل مع الحوارزميات</span>
                    </li>

                    <li>
                        <span>خبرة لمدة ثلاث سنوات مع قواعد البيانات</span>
                    </li>
                    <li>
                        <span>و صيانة الهاتف المحمول </span>
                    </li>
                    

                    
                </ul>
            </p>
        </div>
    </div>
