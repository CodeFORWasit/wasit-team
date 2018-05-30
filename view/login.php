<div class="container" style="margin-top: 5%" >
    
    <form class="col-md-6 offset-md-3 form-control" id="from_login" method="post" action='in' style="padding:20px;"  dir="rtl">
            
                <div class="alert alert-danger msg-err text-right" style="display: <?php echo $this->Error; ?>">
                   خطاء ب الاميل او الباسورد 
                </div>

		<div class="form-group">
                    <input type="email" id='email' autocomplete="off" required="" class="form-control input-lg" name="email" placeholder="Email" >
		</div>

		<div class="form-group">
                    <input type="password" id='pwd' required="" autocomplete="new-passwrd"  class="form-control input-lg" name="pwd"  placeholder="Passowrd" >
		</div>
        
                <div class="form-group">
                    <input type="submit" style="width:40%" value="Log IN"  class="form-control btn btn-primary btn-block" name="log_in" >
		</div>
                <hr>
                <div style='padding: 5px;' class="text-center">
                    <a href="<?php echo M_PATH.'signup'?>" > انشاء حساب جديد </a> 
                </div>
                
    </form>

</div>
