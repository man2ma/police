 <link href="<?php echo base_url(); ?>packages/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <br/><br/>
  <table class="table table-bordered">
    <caption>MCHANGANUO WA MAKOSA MAKUBWA NA MADOGO YA JINAI <?php echo strtoupper($month1).' - '.strtoupper($month2).' '.$year2.'/'.$year; ?></caption>
    <tr class="success">
        <?php 
       
        $y=array();
        $y=explode('-',$fromdate);
         $yf=$y[0];
         $mf=$y[1];
         $df=$y[2];
         $yyf=$yf-1;
         $prevfromdate=$yyf.'-'.$mf.'-'.$df;
         
        $yy=array();
        $yy=explode('-',$todate);
         $yt=$yy[0];
         $mt=$yy[1];
         $dt=$yy[2];
         $yyt=$yt-1;
         $currtodate=$yyt.'-'.$mt.'-'.$dt;
        
         ?>
        <th>MAKOSA</th>
        <th><?php  echo strtoupper($month1).' - '.strtoupper($month2).' '.$year2; ?></th>
        <th><?php echo strtoupper($month1).' - '.strtoupper($month2).' '.$year; ?></th>
        <th>TOFAUTI</th>
        <th>%</th>
    </tr>
    <?php foreach ($crime_type->result() as $crime) {?>
    <tr class="success">
        <th colspan="5" style="text-align: center;"><?php $crimetype_id=$crime->crimetype_id; echo $crime->crimetype_name; ?></th>
    </tr>
    <?php $crime_category=$this->common_model->getreportCrimeCategory($crimetype_id);?>
    <?php foreach ($crime_category->result() as $cat) {?>
    <tr>
     <td><?php echo $cat->crimecat_name;  $cat_id=$cat->crimecat_id;?></td>
      <?php 
        $prev_year=$this->common_model->getreportMchanganyikoData($crimetype_id,$cat_id,$prevfromdate,$currtodate);
        $prev_yeardata=0;
        if($prev_year !=FALSE){
        foreach ($prev_year->result() as $rows){
         $prev_yeardata++;   
        }
        
        
        
        }
       $total_prevdata=$prev_yeardata;
      
       $current_year=$this->common_model->getreportMchanganyikoData($crimetype_id,$cat_id,$fromdate,$todate);
        $current_yeardata=0;
        if($current_year !=FALSE){
        foreach ($current_year->result() as $rows){
         $current_yeardata++;   
        }
        
         
        }
       
      ?>
     <td><?php echo $prev_yeardata;?></td>
     <td><?php echo $current_yeardata;?></td>
     <td><?php echo $different=$current_yeardata-$prev_yeardata; ?></td>
     <td>
         <?php if($current_yeardata==0 ){ 
             $per=0;
             echo $percent=round($per,2).'%';
             ?>
              
         
         <?php }else{ ?>
         
         
         <?php 
         $per=round(($different/$current_yeardata)*100);
         echo  $percent=$per.'%';
         
         ?>
         
         <?php } ?>
     </td>
    </tr>
    
    
    
    
      <?php } ?>
    
    
    
    
      <?php } ?>
    <tr><th>JUMLA MAKOSA</th><th><?php echo $total_prevdata;?></th><th><?php //echo $total_currentdata;?></th><th></th><th></th><th></th></tr>
   
  </table>
 