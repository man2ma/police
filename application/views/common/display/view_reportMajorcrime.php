 <link href="<?php echo base_url(); ?>packages/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<br/><br/>

    
    <?php if($this->session->userdata('controller')=='hq' || $this->session->userdata('controller')=='igp' || $this->session->userdata('controller')=='dci'){ ?>
         
<table class="table table-bordered">
<caption><b> MAKOSA MAKUBWA YA JINAI KWA KIPINDI CHA  
            
            <?php
            $totalcrime1=0;
            $totalcrime2=0;
            $totalcrime3=0;
            $Total=0;
            $y1=explode('-', $todate);
             $year1=$y1[0];
            
            $y2=explode('-',  $fromdate);
             $year2=$y2[0];
            if($year1==$year2){
             echo $date=strtoupper($month1.'-'.$month2.' '.$year2) ;  
            ?>
            
            <?php }else{
                
                
                echo $date2=strtoupper($month1.'-'.$year2.' '.'MPAKA'.' '.$month2.'-'.$year2) ; 
                
            } ?>
               
               
               
    </b></caption>
    <tr class="success">
        <th>MKOA</th> <th>MAKOSA DHIDI YA BINADAMU</th><th>MAKOSA DHIDI YA MAADILI YA JAMII</th><th>MAKOSA YA KUWANIA MALI </th><th>JUMLA</th>
    </tr>
    
    <?php foreach($region_info->result() as $info){
       $datacrimeid1=0;
       $datacrimeid2=0;
       $datacrimeid3=0;
       $totalData=0;
        
      ?>
    <tr>
   <td><?php echo $info->region_policename; $region_policeid= $info->region_policeid; ?></td>
    <?php   
    $crime_type=$this->common_model->getreportCrimeType();
    foreach($crime_type->result() as $crime){
     if($crime->crimetype_id==4)
     {
         
     }
    else
    {
      
      $information=$this->common_model->getreportMajaorcrimeData($crime->crimetype_id,$region_policeid,$fromdate,$todate,$tukiostatus);
      if($information!=FALSE){ 
       foreach($information->result() as $rows){
        if($crime->crimetype_id==1)
        {
         $datacrimeid1++;
        }
        if($crime->crimetype_id==2)
        {
         $datacrimeid2++;
        }
        if($crime->crimetype_id==3)
        {
         $datacrimeid3++;
        }
    ?>
 
    
    
    
   
    <?php } ?> 
   
      
   
   
   
   
 
    
   
       <?php } ?> 
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
 <?php } ?> 
   
   
   
   
   
   
   
   
   
 
<?php } ?> 
   
   
<?php  
$totalData=$datacrimeid1+$datacrimeid2+$datacrimeid3;
$totalcrime1+=$datacrimeid1;
$totalcrime2+=$datacrimeid2;
$totalcrime3+=$datacrimeid3;
$Total+=$totalData;


?>   
   
 <td><?php echo $datacrimeid1; ?></td> <td><?php echo $datacrimeid2; ?></td> <td><?php echo $datacrimeid3;  ?></td>  <td><?php echo $totalData; ?></td>   
   
    </tr>
   <?php } ?>  
    
    <tr class="success"><th>JUMLA KUU</th><th><?php echo $totalcrime1; ?></th><th><?php echo $totalcrime2; ?></th><th><?php echo $totalcrime3; ?></th><th><?php echo $Total; ?></th></tr>   
</table>
<?php } if($this->session->userdata('controller')=='ocs'){ ?>
    <table class="table table-bordered">
       <caption><b> MAKOSA MAKUBWA YA JINAI KWA KIPINDI CHA  
            
            <?php
            
            $y1=explode('-', $todate);
             $year1=$y1[0];
            
            $y2=explode('-',  $fromdate);
             $year2=$y2[0];
            if($year1==$year2){
             echo $date=strtoupper($month1.'-'.$month2.' '.$year2) ;  
            ?>
            
            <?php }else{
                
                
                echo $date2=strtoupper($month1.'-'.$year2.' '.'MPAKA'.' '.$month2.'-'.$year2) ; 
                
            } ?>     
    </b></caption>
    <tr class="success">
        
        <th>KOSA</th><th>JUMLA</th>
    </tr>
     <?php   
     $crime_type=$this->common_model->getreportCrimeType();
     $totalcount=0;
     foreach($crime_type->result() as $crime){
      $crimecount=0;
     ?>
    <tr>
    <?php if($crime->crimetype_id==4){?>
        
        
        
        
    <?php }else{ ?>  
        <td> <?php echo $crime->crimetype_name; ?></td>
        <?php 
        $levelid = $this->session->userdata('station_id');
        $information=$this->common_model->getreportMajaorcrimeData($crime->crimetype_id,$levelid,$fromdate,$todate,$tukiostatus);
        if($information!=FALSE){ 
          foreach($information->result() as $rows){
            $crimecount++;  
          }
        }
        $totalcount+=$crimecount;
        ?>

        <td>
          <?php echo $crimecount; ?>   
        </td>
        
        
        
    <?php } ?>
    </tr>
    
     <?php } ?>     
    
    <tr><th>JUMLA</th><th><?php echo $totalcount; ?></th></tr>
    </table>
  <?php }if($this->session->userdata('controller')=='ocd' || $this->session->userdata('controller')=='occid'){ ?>
         
<table class="table table-bordered">
<caption><b> MAKOSA MAKUBWA YA JINAI KWA KIPINDI CHA  
            
            <?php
            $total=0;
            $totalcrime1=0;
            $totalcrime2=0;
            $totalcrime3=0;
            $y1=explode('-', $todate);
             $year1=$y1[0];
            
            $y2=explode('-',  $fromdate);
             $year2=$y2[0];
            if($year1==$year2){
             echo $date=strtoupper($month1.'-'.$month2.' '.$year2) ;  
            ?>
            
            <?php }else{
                
                
                echo $date2=strtoupper($month1.'-'.$year2.' '.'MPAKA'.' '.$month2.'-'.$year1) ; 
                
            } ?>
               
               
               
    </b></caption>
    <tr class="success">
        <th>KITUO</th> <th>MAKOSA DHIDI YA BINADAMU</th><th>MAKOSA DHIDI YA MAADILI YA JAMII</th><th>MAKOSA YA KUWANIA MALI </th><th>JUMLA</th>
    </tr> 
        
    <?php foreach($station_info->result() as $info){
       $crimedata1=0;
       $crimedata2=0;
       $crimedata3=0;
       $totalcrimeData1=0;
        
      ?>
    <tr>
   <td><?php echo $info->station_name; $levelid= $info->station_id; ?></td>
    <?php   
    $crime_type=$this->common_model->getreportCrimeType();
    foreach($crime_type->result() as $crime){
     if($crime->crimetype_id==4)
     {
         
     }
    else{ 
        $information=$this->common_model->getreportMajaorcrimeData($crime->crimetype_id,$levelid,$fromdate,$todate,$tukiostatus);
      if($information!=FALSE){ 
       foreach($information->result() as $rows){
        if($crime->crimetype_id==1)
        {
         $crimedata1++;
        }
        if($crime->crimetype_id==2)
        {
          $crimedata2++;
        }
        if($crime->crimetype_id==3)
        {
         $crimedata3++;
        }
    ?>
 
    
    
    
   
    <?php } ?> 
   
      
   
   
   
   
 
    
   
       <?php } ?> 
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
 <?php } ?> 
   
   
   
   
   
   
   
   
   
 
<?php } ?> 
   
   
<?php 
$totalcrimeData1=$crimedata1+$crimedata2+$crimedata3;
$total+=$totalcrimeData1;
$totalcrime1+=$crimedata1;
$totalcrime2+=$crimedata2;
$totalcrime3+=$crimedata3;
?>   
   
 <td><?php echo $crimedata1;  ?></td> <td><?php echo  $crimedata2; ?></td> <td><?php echo $crimedata3;  ?></td>  <td><?php echo $totalcrimeData1; ?></td>   
   
    </tr>
   <?php } ?>
    
    
    
   
    <tr class="success"><th colspan="1">JUMLA KUU</th><th><?php echo $totalcrime1; ?></th><th><?php echo $totalcrime2; ?></th><th><?php echo $totalcrime3; ?></th><th><?php echo $total; ?></th></tr>
    
    

    
</table>
 <?php }if($this->session->userdata('controller')=='rco' || $this->session->userdata('controller')=='rpc'){ ?>
         
<table class="table table-bordered">
<caption><b> MAKOSA MAKUBWA YA JINAI KWA KIPINDI CHA  
            
            <?php
            $total=0;
            $totalcrime1=0;
            $totalcrime2=0;
            $totalcrime3=0;
            $y1=explode('-', $todate);
             $year1=$y1[0];
            
            $y2=explode('-',  $fromdate);
             $year2=$y2[0];
            if($year1==$year2){
             echo $date=strtoupper($month1.'-'.$month2.' '.$year2) ;  
            ?>
            
            <?php }else{
                
                
                echo $date2=strtoupper($month1.'-'.$year2.' '.'MPAKA'.' '.$month2.'-'.$year1) ; 
                
            } ?>
               
               
               
    </b></caption>
    <tr class="success">
        <th>WILAYA</th> <th>MAKOSA DHIDI YA BINADAMU</th><th>MAKOSA DHIDI YA MAADILI YA JAMII</th><th>MAKOSA YA KUWANIA MALI </th><th>JUMLA</th>
    </tr> 
        
    <?php foreach($district_info->result() as $info){
       $crimedata1=0;
       $crimedata2=0;
       $crimedata3=0;
       $totalcrimeData1=0;
        
      ?>
    <tr>
   <td><?php echo $info->district_policename; $levelid=$info->district_policeid; ?></td>
    <?php   
    $crime_type=$this->common_model->getreportCrimeType();
    foreach($crime_type->result() as $crime){
     if($crime->crimetype_id==4)
     {
         
     }
    else{ 
        
      $information=$this->common_model->getreportMajaorcrimeData($crime->crimetype_id,$levelid,$fromdate,$todate,$tukiostatus);
      if($information!=FALSE){ 
       foreach($information->result() as $rows){
        if($crime->crimetype_id==1)
        {
         $crimedata1++;
        }
        if($crime->crimetype_id==2)
        {
          $crimedata2++;
        }
        if($crime->crimetype_id==3)
        {
         $crimedata3++;
        }
    ?>
 
    
    
    
   
    <?php } ?> 
   
      
   
   
   
   
 
    
   
       <?php } ?> 
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
 <?php } ?> 
   
   
   
   
   
   
   
   
   
 
<?php } ?> 
   
   
<?php 
$totalcrimeData1=$crimedata1+$crimedata2+$crimedata3;
$total+=$totalcrimeData1;
$totalcrime1+=$crimedata1;
$totalcrime2+=$crimedata2;
$totalcrime3+=$crimedata3;
?>   
   
 <td><?php echo $crimedata1;  ?></td> <td><?php echo  $crimedata2; ?></td> <td><?php echo $crimedata3;  ?></td>  <td><?php echo $totalcrimeData1; ?></td>   
   
    </tr>
   <?php } ?>
    
    
    
    
    <tr class="success"><th colspan="1">JUMLA KUU</th><th><?php echo $totalcrime1; ?></th><th><?php echo $totalcrime2; ?></th><th><?php echo $totalcrime3; ?></th><th><?php echo $total; ?></th></tr>
    
    

    
</table>
  <?php } ?>