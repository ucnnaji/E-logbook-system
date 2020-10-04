 <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>Student LogBook</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">

            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout">Loged in as <?php echo $_SESSION['name']?></a></li>
                    <?php if($_SESSION['user_level']==1){
    echo'<li><a class="logout" href="logout">Logout</a></li>';
}else{
    echo '<li><a class="logout" href="../logout">Logout</a></li>';
}
                  ?>
            	</ul>
            </div>
        </header>

 <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

              	  <p class="centered"><a href="profile.html">
                     <?php

                      if($_SESSION['user_level'] == 3){
                    echo  '<img src="../assets/img/CRAWFORD LOGO.jpg" class="img-circle" width="60">';

}elseif($_SESSION['user_level'] == 0){
    echo '<img src="../assets/img/ui-sam.jpg" class="img-circle" width="60">';

}elseif($_SESSION['user_level'] == 2){
    echo '<img src="../assets/img/ui-sam.jpg" class="img-circle" width="60">';

}elseif($_SESSION['user_level'] == 1){
    if(!empty($_SESSION['image'])){

    echo '<img src="assets/img/student/'.$_SESSION['image'].'" class="img-circle" width="60">';

    }else{
      echo '<img src="assets/img/ny.jpg" class="img-circle" width="60">';
    }
}
                      ?>
                      </a></p>
              	  <h5 class="centered"><?php echo $_SESSION['name']?></h5>

                 <?php
            if($_SESSION['user_level']==1){

                echo'
                 <li class="mt">
                      <a href="index?token=kbsvdksgidgsuhodhsohdh">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="mt">
                      <a href="logbook-history">
                          <i class="fa fa-tree"></i>
                          <span>Logbook History</span>
                      </a>
                  </li>

                   <li class="mt">
                      <a href="chat">
                          <i class="fa fa-users"></i>
                          <span>Chat</span>
                      </a>
                  </li>

                ';
            }


                  ?>
    <?php
            if($_SESSION['user_level']==2){

                echo'
                 <li class="mt">
                      <a href="students">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                ';
            }


                  ?>
                  <?php
            if($_SESSION['user_level']==0){

                echo'
                 <li class="mt">
                      <a href="ind-students">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                ';
            }


                  ?>
       <?php
            if($_SESSION['user_level']==3){
            echo'      <li class="mt">
                      <a href="users">
                          <i class="fa fa-users"></i>
                          <span>Students</span>
                      </a>
                  </li>

                  <li class="mt">
                      <a href="add-student">
                          <i class="fa fa-plus"></i>
                          <span>Add Student</span>
                      </a>
                  </li>

                  <li class="mt">
                      <a href="add-supervisor">
                          <i class="fa fa-plus"></i>
                          <span>Add Supervisor</span>
                      </a>
                  </li>

                  <li class="mt">
                      <a href="add_ind_supervisor">
                          <i class="fa fa-plus"></i>
                          <span>Add Industrial Supervisor</span>
                      </a>
                  </li>';
            } ?>


              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
