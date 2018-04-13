<div id="team"></div>
<div class="container-fluid2">
    <div class="title-arch ">
        <h1>اعضائنا الرائعين</h1>
        <p>شباب واعٍ محب للخير قرروا ان يساهموا في رقي مجتمعهم </p>
    </div>
    <?php foreach ($this->db as $array) {
    ?>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 project member-1 wow animated animated3 fadeInLeft text-right" dir="rtl" style="background-image: url('<?php echo $this->_static("img/team/".$array['img']); ?>');">
            <div class="project-hover">
                <h2><?php echo $array["fullName"]?></h2>
                <hr />
                <p><?php echo $array["about"]?></p>
                <a href="teams/<?php echo $array["user"] ?>">الملف الشخصي</a>
            </div>
        </div>

    <?php }?>

    <div class="clearfix"></div>
</div>