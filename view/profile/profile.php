<br>
<br>

<div class="row">
      <div class=" offset-lg-3 col-lg-6 offset-sm-2 col-sm-8 offset-1 col-10 main-section text-center">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-12 profile-header thumbnail" 
                  style="background-image: url('<?php echo $this->_static("img/c4i.jpg");?>')"
                  ></div>
            </div>

            <div class="row user-detail">
                <div class="col-lg-12 col-sm-12 col-12">
                    <img src="<?php echo $this->_static("img/team/".$this->db['img'] );?>" class="rounded-circle">
                    <h5><?php echo $this->db['fullName'];?></h5>
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> العراق / واسط /<?php echo $this->db['city'];?></p>

                    <!-- Link For  -->
                    <div class="row user-social-detail">
                        <div class="col-lg-12 col-sm-12 col-12">

                          <a target="_blank" href="https://www.facebook.com/<?php echo $this->db['fb'];?>" >
                            <i class="fab fa-facebook fa-2x" aria-hidden="true"></i>
                          </a>
                          <a href="https://www.github.com/<?php echo $this->db['github'];?>">
                            <i class="fab fa-github fa-2x" aria-hidden="true"></i>
                          </a> 
                         
                        </div>
                    </div>


                    <hr> <!--- Path leran -->
                      <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <?php foreach (explode(",",$this->db['langProg']) as $key => $value) { ?>
                            <li class="breadcrumb-item"><a href="#"><?php echo $value;?></a></li>
                        <?php } ?>
                        </ol>
                      </nav>

                    <hr><!--- About -->
                      <div class="jumbotron" style='background: none;padding: 20px;'>
                          <div class="container">
                              <p class="lead">
                                <?php echo $this->db['about'];?>
                              </p>
                          </div>
                      </div>
                </div>
            </div>
      </div>
</div>
