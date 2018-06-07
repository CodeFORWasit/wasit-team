<br>

<style>
    <?php echo $this->_style; ?>
</style>

<div class="container" style="margin-top: 20px;" >
    <form class="col-sm-7 offset-sm-3" style="box-shadow: 0 0 2px 0 black;padding: 20px;" id="signup" method="post" action='signup' dir="rtl">
        <!-- GROUP 1 -->
        
        <div class="alert alert-warning msg-err text-right" id="pwd"  >       
           يجب ان تكون كلمة المرور مكونة من الاحرف والرموز فقط 
        </div>
        <div class="alert alert-warning msg-err text-right" id="mail" >       
           البريد الاليكتروني الذي قمت بدخاله غير صحيح  
        </div>
        
        <div class="form-group">
            <input type="fullname" id='fullname' required="" autocomplete="off"  class="form-control input-lg" name="fullname" placeholder="الاسم " >
        </div>

        <div class="form-group">
            <input type="email" id='email' required=""  autocomplete="off"   class="form-control input-lg"  name="email" placeholder="الاميل " >
        </div>


        <div class="form-group">
            <input type="password" id='password' required="" autocomplete="new-password"   class="form-control input-lg" name="pwd" placeholder="الباسورد" >
        </div>


        <button type="submit" id="submit" style="width:40%" class="btn btn-primary  btn-block"> Sign UP </button>
        <hr>
    </form>
</div>
