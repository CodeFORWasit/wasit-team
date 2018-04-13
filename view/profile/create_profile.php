<br>
<div class="container" id="from-body">
	<form class="col-8 offset-2" id="teams" method="post" 
	action='teams'
	enctype="multipart/form-data">
	<div class="alert alert-warning text-center alert-dismissible fade show col-12" id="text-suc-err" role="alert">
              
<?php 
    if( isset($_SESSION['token']) ){
?>    		
			<strong>
			<?php echo $_SESSION['email'];  ?>
			</strong>
      		تم ارسال هاش كود لاميلك 
        </div>           
	  	<div class="form-group">
		    <input type="text" id='fullname'  class="form-control rtl-text" value="<?php echo $_SESSION['name'];  ?>" id="fullname" name="fullname" placeholder="اسمك" >
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
		    <input type="numbers" class="form-control rtl-text" name="phone" id="phone" placeholder="رقم الموبايل اذا ممكن ">
		</div>

		<div class="form-group">
		    <textarea class="form-control " style="text-align: right" name="about" id="about" placeholder="احجيلنا عن نفسك شوي" rows="3"></textarea>
		</div>

		<div class="form-group">
			<input name="langProg" id="langProg" placeholder="يا لغه ولغة تعرف بالله اكتب اسمهن" class="form-control rtl-text" type="text" data-toggle="tooltip" data-placement="right" title="استخدام ( , ) للفصل بين اسماء الغات">
		</div>

		<div class="form-group">
			<div class="input-group">
			  <span class="input-group-addon" id="basic-addon3">github.com/</span>
			  <input type="text" class="form-control" name="github" id="github">
			</div>
		</div>

		<div class="form-group">
			<div class="input-group">
			  <span class="input-group-addon" id="basic-addon3">facebook.com/</span>
			  <input type="text" class="form-control " name="facebook" id="facebook" >
			</div>
		</div>
        <?php echo $_SESSION['token']; ?>
        <div class="form-group">
            <label class="btn btn-block btn-outline-primary " id='file'>
                <input type="file" name="file" hidden>صورة
            </label>
        </div>

		<div class="form-group">
			<input type="text" class="form-control " name="hcode" id="hcode" placeholder="اكتب ال هاش كود هنا لاكمال عمليت انشاء الملف الشخصي" >
		</div>

		<button type="button" id="sub_create" class="btn btn-primary btn-lg btn-block"> انشاء </button>

<?php }else{ ?>

        
            Code For Iraq
        </strong>
         ادخل الاميل الخاص  بمبادرة
    </div>
	<div id="from-email">
		<div class="form-group">
			<input type="text" class="form-control text-center" 
			data-loading-text="Processing Order" 
			id="email_c4i" name="email_c4i">
		</div>
		<button type="button" id="sub_mail" class="btn btn-primary btn-lg btn-block" > ارسال </button>
	</div>

<?php  } ?>
	<br>
    </form>
</div>
