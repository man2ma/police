<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><?php echo anchor('admin','<i class="glyphicon glyphicon-tower"></i> Dashboard'); ?></li>
        <li><?php echo anchor('admin/viewUsers','<i class="glyphicon glyphicon-user"></i> Users'); ?></li>
         <li class="dropdown">
          <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-folder-close"></i> Makosa<span class="caret"></span></a>
          <ul id="g-account-menu" class="dropdown-menu" role="menu">
            <li><?php echo anchor('admin/viewOnekosa/1','<i class="glyphicon glyphicon-folder-open"></i> Makosa dhidi ya binadamu'); ?></li>
            <li><?php echo anchor('admin/viewOnekosa/2','<i class="glyphicon glyphicon-folder-open"></i> Makosa dhidi ya maadili ya jamii'); ?></li>
            <li><?php echo anchor('admin/viewOnekosa/3','<i class="glyphicon glyphicon-folder-open"></i> Makosa ya kuwania mali'); ?></li>
            <li><?php echo anchor('admin/viewOnekosa/4','<i class="glyphicon glyphicon-folder-open"></i> Makosa ya usalama barabarani'); ?></li>
          </ul>
        </li>
        <li><?php echo anchor('admin/viewLocations','<i class="glyphicon glyphicon-globe"></i> Maeneo'); ?></li>
         <li><?php echo anchor('admin/viewStations','<i class="glyphicon glyphicon-screenshot"></i> Vituo vya Polisi'); ?></li>
         <li><?php echo anchor('admin/viewLogs','<i class="glyphicon glyphicon-cog"></i> View logs'); ?></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        
        <li class="dropdown">
          <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i> <?php echo $this->session->userdata('firstname').' '.$this->session->userdata('lastname'); ?><span class="caret"></span></a>
          <ul id="g-account-menu" class="dropdown-menu" role="menu">
            <li><a href="#">My Profile</a></li>
          </ul>
        </li>
        <li><?php echo anchor('home/logout','<i class="glyphicon glyphicon-lock"></i> Logout'); ?></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>
