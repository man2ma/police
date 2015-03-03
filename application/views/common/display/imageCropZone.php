<html lang="en">
    <head>
        <title>Image Crop Zone</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/pccb.css">
        <link href="<?php echo base_url(); ?>css/jcrop/jquery.Jcrop.min.css" rel="stylesheet" media="screen">
    </head>
    
    <body>
<table>
    <tr>
        <td>
            <img src="<?php echo base_url().'/'.$folder.$wahusika_id; ?>" id="cropbox" alt="cropbox"/>
        </td>
        <td>
            Thumb Preview:
            <div id="preview">
                <img src="<?php echo base_url().'/'.$folder.$wahusika_id; ?>" alt="thumb" />
            </div>
        </td>
        
    </tr>
</table>
<form action="<?php echo current_url(); ?>" method="post">
    <input type="hidden" id="x" name="x" />
    <input type="hidden" id="y" name="y" />
    <input type="hidden" id="w" name="w" />
    <input type="hidden" id="h" name="h" />
    <input type="hidden"  name="width" value='<?php echo $width ?>'>
    <input type="hidden"  name="height" value='<?php echo $height ?>' />
    <input type="hidden" name="filename" value='<?php echo $filename ?>' />
    <input type="hidden" name="folder" value= '<?php echo $folder ?>' />
    <input type="hidden" name="wahusika_id" value= '<?php echo $wahusika_id ?>' />
    <input type="hidden" name="mydirection" value= '<?php echo $mydirection ?>' />
    <input type="submit" id="submit" name="crop" value="Crop Image" />
    
</form>
        
        
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>         
<script src="<?php echo base_url(); ?>js/jcrop/jquery.Jcrop.js"></script>
<script src="<?php echo base_url(); ?>js/jcrop/jquery.color.js"></script>

<script type="text/javascript">
   //Crop Image
         $(function() {
             $("#cropbox").Jcrop({
                 aspectRatio: <?php echo $ratio ?>,
                 setSelect: [0,0,<?php echo $orig_w.','.$orig_h; ?>],
                 onSelect: updateCoords,
                 onChange: updateCoords
             });
       
          });
//          
          function updateCoords(c){
           showPreview(c);
           $("#x").val(c.x);
           $("#y").val(c.y);
           $("#w").val(c.w);
           $("#h").val(c.h);  
          }
//          
          function showPreview(coords){
              var rx = <?php echo $width; ?> / coords.w;
              var ry = <?php echo $height; ?> / coords.h;
              
              
              $('#preview img').css({
              width: Math.round(rx*<?php echo $orig_w; ?>)+'px',
              height: Math.round(ry*<?php echo $orig_h; ?>)+'px',
              marginLeft:'-'+ Math.round(rx*coords.x)+'px',
              marginTop:'-'+ Math.round(ry*coords.y)+'px',
              });
          }
  </script>   
  
    </body>
</html>