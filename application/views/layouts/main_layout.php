<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/main.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>packages/jquery/smoothness/jquery-ui-1.9.2.custom.min.css" type="text/css" />
        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>packages/bootstrap/css/bootstrap.min.css" rel="stylesheet">
         <link href="<?php echo base_url(); ?>packages/others/css/alertify.core.css" rel="stylesheet" media="screen">
       <link href="<?php echo base_url(); ?>packages/others/css/alertify.default.css" rel="stylesheet" media="screen">
       <link rel="stylesheet" href="<?php echo base_url(); ?>tree/themes/default/style.min.css" />
       
        <script type="text/javascript">    
         var CI = { 
         'base_url': '<?php echo base_url(); ?>', 
         'base_url_ajax':'<?php echo base_url().'index.php/'?>',
         'another': '<?php echo '' ?>', 
         'another2': '<?php echo '' ?>' 
                };
        </script> 

     
       
    </head>
    
    <body> 
        <div id="header" class="container-non-responsive">
            <div class="row">
                <div class="col-xs-4">
                   
                </div>

                <div class="col-xs-4">
                 
                </div>
                
                <div class="col-xs-4">
                  
                </div>
            </div>
         </div>
        
        <div id="menu_one" class="container-non-responsive">
            <div class="row">
                <div class="<?php echo $menu_one_left_grid ?>">
                  <?php $this->load->view($menu_one_left); ?>
                </div>
                <div class="<?php echo $menu_one_middle_grid ?>">
                <?php $this->load->view($menu_one_middle); ?>  
                </div>
                <div class="<?php echo $menu_one_right_grid ?>">
                <?php $this->load->view($menu_one_right); ?>
                </div>
              
            </div>
         </div>
        
        
        
        <div id="menu_two" class="container-non-responsive">
            <div class="row">
                <div class="<?php echo $menu_two_left_grid ?>">
                  <?php $this->load->view($menu_two_left); ?>
                </div>
                <div class="<?php echo $menu_two_middle_grid ?>">
                <?php $this->load->view($menu_two_middle); ?>  
                </div>
                <div class="<?php echo $menu_two_right_grid ?>">
                <?php $this->load->view($menu_two_right); ?>
                </div>
              
            </div>
         </div>
        
        <div id="body_one" class="container-non-responsive">
            <div class="row">
                <div class="<?php echo $body_one_left_grid ?>">
                  <?php $this->load->view($body_one_left); ?>
                </div>
                <div class="<?php echo $body_one_middle_grid ?>">
                <?php $this->load->view($body_one_middle); ?>  
                </div>
                <div class="<?php echo $body_one_right_grid ?>">
                <?php $this->load->view($body_one_right); ?>
                </div>
              
            </div>
         </div>
        
        <div id="body_two" class="container-non-responsive">
            <div class="row">
                <div class="<?php echo $body_two_left_grid; ?>">
                  <?php $this->load->view($body_two_left); ?>
                </div>
                <div class="<?php echo $body_two_middle_grid; ?>">
                <?php $this->load->view($body_two_middle); ?>  
                </div>
                <div class="<?php //echo $body_two_right_grid; ?>">
                <?php $this->load->view($body_two_right); ?>
                </div>
              
            </div>
         </div>
      <footer class="application-footer">
            <div class="container">
                <p>Tanzania Police Force</p>
                <div class="disclaimer">
                    <p>Copyright &copy; <?php echo date('Y'); ?> TPF</p>
                </div>
            </div>
        </footer>
            
      <script src="<?php echo base_url(); ?>packages/jquery/jquery.min.js"></script>
      <script src="<?php echo base_url(); ?>packages/bootstrap/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url(); ?>packages/jquery/jquery-ui-1.9.2.custom.min.js"></script>
      <script src="<?php echo base_url(); ?>packages/jquery/timepicker.js"></script>
      <script src="<?php echo base_url(); ?>packages/others/js/alertify.min.js"></script>
      <script src="<?php echo base_url(); ?>packages/ckeditor/ckeditor.js"></script>
      <script src="<?php echo base_url(); ?>js/jasny-bootstrap.min.js"></script>
      <script src="<?php echo base_url(); ?>js/bootstrap-multiselect.js"></script>
      <script src="<?php echo base_url(); ?>js/main.js"></script>
      <script src="<?php echo base_url(); ?>tree/jstree.min.js"></script>
    </body>
</html>   
