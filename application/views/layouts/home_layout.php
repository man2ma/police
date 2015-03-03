<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/main.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>packages/jquery/smoothness/jquery-ui-1.9.2.custom.min.css" type="text/css" />
        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>packages/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script type="text/javascript">    
         var CI = { 
         'base_url': '<?php echo base_url(); ?>', 
         'base_url_ajax':'<?php echo base_url().'index.php/'.$this->uri->segment(1) ?>',
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
        
        <div id="body_login" class="container-non-responsive">
            <div class="row">
                <div class="col-xs-3">
                 
                </div>

                <div class="col-xs-6">
                 <?php $this->load->view($body_one_right); ?>
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
      <script src="<?php echo base_url(); ?>js/main.js"></script>
    </body>
</html>   