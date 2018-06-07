
<?php if ( $this->error == 1 ){ ?> 

<div class="container lead text-center" dir="rtl" 
     style="margin-top: 20px;box-shadow: 0 10px 10px 0 black;
     font-size:30px;padding: 15px;background-color: #333;color:white;
     border-radius: 1%;text-shadow:0 0 10px white;
     " > 
        مرحبا بك معنا 
        <!-- <?php echo "alaa.21.iraq@gmail.com"//$_POST['regEmail']; ?>  -->
         <br>
        سيتم التواصل معك في اقرب وقت 
        
    </div>

<?php }else{ ?> 
<div class="container">

    <form style="margin-top: 10px;"
        class="col-md-6 offset-md-3" 
        id="reg" method="post" 
        action='regester' enctype="multipart/form-data"
        dir='rtl' class="form-inline"
    >
        <?php if(isset($this->msg)){ ?>
            <div class="alert alert-danger text-right" dir="rtl">
                <?php echo $this->msg; ?> 
            </div>
        <?php } ?>
        
        <div class="form-group ">
            <input type="email" name="regEmail" required="" autocomplete="off" placeholder="الاميل " class="form-control" id="mail" value="">
        </div>
        <div class="form-group" dir="ltr">
            <div class="input-group">
                <input type="text" class="form-control " id="img" autocomplete="off" dir="rtl" placeholder="السيره الذاتيه  .doc او .pdf" name="cvfile" id='cv' />
                <label class="form-control btn btn-primary col-2" id='file'>
                    <input type="file" name="file" hidden> اختر السيرة الذاتية 
                </label>
            </div>
        </div>
        <button type="submit" value="registry" class="btn btn-primary"> تسجيل </button>
    </form>
</div>
<?php } ?>
