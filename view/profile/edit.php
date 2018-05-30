<br>
<div class="container" id="from-body">
    <form 
        class="col-md-6 offset-md-3" 
        id="teams" method="post" 
        action='edit' enctype="multipart/form-data"
        dir='rtl'
    >
          
        <div class="form-group">
            <input type="text" id='fullname'  class="form-control  " value="<?php echo $this->db['fullName'];  ?>" name="fullname" placeholder="اسمك" >
        </div>
        
        
        <div class="form-group">
            <input type="borth" id='borth' value="<?php echo $this->db['borth_day'];  ?>"  class="form-control input-lg" name="borth_day" placeholder="المواليد" >
        </div>
        
        
    
        <div class="form-group">
            <select id="inputState" class="form-control" name="gander" >
                
                <option selected>الجنس</option>
                <option>ذكر</option>
                <option>انثى</option>
                
            </select>
        </div>



        <div class="form-group">
            <select id="inputState" class="form-control" name="city">
                <option selected>المدينة</option>
                <option>الكوت</option>
                <option>الحي</option>
                <option>الصويره</option>
                <option>بدرة</option>
                <option>النعمانية</option>
                <option>العزيزية</option>
            </select>
        </div>

        <div class="form-group">
            <input type="telephone" value="<?php echo $this->db['telephone'];  ?>" id='telephone'  class="form-control input-lg" name="telephone" placeholder="رقم الموبايل " >
        </div>

        <div class="form-group">
            <textarea class="form-control "  style="text-align: right" name="about"  placeholder="تكلم عن نفسك" rows="3">
                <?php echo $this->db['about'];  ?>
            </textarea>
        </div>

        <div class="form-group">
            <input name="languageProgam" value="<?php echo $this->db['languageProgam'];  ?>"  placeholder="لغات البرمجه python,ruby,php" class="form-control  " type="text" data-toggle="tooltip" data-placement="right" title="استخدام ( , ) للفصل بين اسماء الغات">
        </div>
        
        <div class="form-group">
            <input type="skile"  value="<?php echo $this->db['skile'];  ?>" class="form-control input-lg" name="skile" placeholder="اطارةو تقنيات مثل Bootstarp , datasceins " >
        </div>

        <div class="form-group" dir="ltr">     
            <input type="text" value="<?php echo $this->db['url_github'];  ?>" class="form-control" name="url_github" id="github" placeholder="Github URL">
        </div>

        <div class="form-group" dir="ltr">   
            <input type="text" value="<?php echo $this->db['url_feacbook'];  ?>" class="form-control "  name="url_facebook" id="facebook" placeholder="Facebook URL" >
        </div>
            
        <div class="form-group" dir="ltr">
            <div class="input-group">
                 
                <input type="text" class="form-control col-10" value="<?php echo $this->db['image_profile'];  ?>" name="images" id='img' />
                
                <label class="form-control btn btn-outline-primary col-2" id='file'>
                    <input type="file" name="file" hidden>صورة
                </label>
            </div>
        </div>
        
        <button type="submit" name="create" class="btn btn-primary btn-lg btn-block">
           حفظ التعديلات
        </button>
    </form>
</div>

<br>
