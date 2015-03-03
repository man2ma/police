<link href="<?php echo base_url(); ?>css/main.css" rel="stylesheet"> 
<link href="<?php echo base_url(); ?>packages/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<br/>
<br/>
<table class="table-report">
    <caption><b align="center">REPORT BOOK</b></caption>
    <tr>
        <td align="center"><b>(1)<b/></td>
        <td align="center"><b>(2)<b/></td>
        <td align="center"><b>(3)<b/></td>
        <td align="center"><b>(4)<b/></td>
        <td align="center"><b>(5)<b/></td>
        <td align="center"><b>(6)<b/></td>
        <td align="center"><b>(7)<b/></td>
        <td align="center"><b>(8)<b/></td>
        <td align="center"><b>(9)<b/></td>
        <td align="center"><b>(10)<b/></td>
        <td align="center"><b>(11)<b/></td>
    </tr>
    <tr>
        <td align="center"><b>Monthly Serial Number<b/></td>
        <td align="center"><b>Date<b/></td>
        <td align="center"><b>Time<b/></td>
        <td align="center"><b>Report<br>Name, Sex, Age, Nationality/Tribe, Occupation, Postal and Residential addresses of reporter <b/></td>
        <td align="center"><b>DETAILS OF REPORT<br>
         (To be signed by Person(s) making the report and the Officer receiving the report)
        <b/></td>
        <td align="center"><b>Investigation register number<b/></td>
        <td align="left"><b>(a)Immediate Police Action taken with date and time<br>
            (b)Name of Police Officer taking initial Action<br>
            (c)Final Disposal of Report eg N.F.A, Refused etc<br>
        <b/></td>
        <td align="center"><b>PERSON PROCEEDED AGAINST<br>
            Name, Sex, Age, Nationality/Tribe, Occupation, Postal and Residential addresses of Person(s) accused
        <b/></td>
        <td align="center"><b>Whether arrested if so by whom P.P.R Number<b/></td>
        <td align="center"><b>Found Property and Exhibit Register Serial Number and other references<b/></td>
        <td align="center"><b>REMARKS<b/></td>
        
    </tr>
    <?php foreach ($fulloffence->result() as $value) { ?>
    <tr>
        <td><?php echo $value->rb_no; ?></td>
        <td><?php echo date("F j, Y", strtotime($value->date_reported)); ?></td>
        <td><?php echo date("g:i a", strtotime($value->date_reported)); ?></td>
        <td><?php
          if($value->wahusika_typeid == 1){ ?>
            <b style='color:blue;'>Jina kamili : &nbsp;</b><?php echo $value->fname.' '.$value->midname.' '.$value->lname; ?><br/>
             <b style='color:blue;'>Jinsi:&nbsp;</b><?php echo $value->sex_name; ?><br/>
            <b style='color:blue;'>Umri:&nbsp;</b><?php echo $value->age; ?><br/>
             <b style='color:blue;'>Utaifa:&nbsp;</b><?php echo $value->nationality_name; ?><br/>
            <b style='color:blue;'>Kabila:&nbsp;</b><?php echo $value->tribe_name; ?><br/>
            <b style='color:blue;'>Dini:&nbsp;</b><?php echo $value->religion_name; ?><br/>
            <b style='color:blue;'>Anuani:&nbsp;</b><?php echo $value->address; ?><br/>
             <b style='color:blue;'>Kazi:&nbsp;</b><?php echo $value->occupation_name; ?>;<br/>
             <b style='color:blue;'>Kiwango cha elimu:&nbsp;</b><?php echo $value->education_level; ?>
            
            <?php  }?>
                  
        </td>
        <td>
            <?php  //THe end of form if no statement
             if($value->minute_file != ''){
             $urlnor = base_url()."uploads/".$value->minute_file;
             echo anchor($urlnor,'Statement/Minute', array('target' => '_blank', 'class' => 'new_window'));
             }
            ?>
        </td>
        <td><?php 
          if($value->ir_no =='Haijawekwa'){
              echo '';
          }else{
             echo $value->ir_no; 
          }?>
        </td>
        <td><?php echo '' ?></td>
                <td><?php
          if($value->wahusika_typeid == 2){ ?>
            <b style='color:blue;'>Jina kamili: &nbsp;</b><?php echo $value->fname.' '.$value->midname.' '.$value->lname; ?><br/>
             <b style='color:blue;'>Jinsi: &nbsp;</b><?php echo $value->sex_name; ?><br/>
            <b style='color:blue;'>Umri: &nbsp;</b><?php echo $value->age; ?><br/>
             <b style='color:blue;'>Utaifa: &nbsp;</b><?php echo $value->nationality_name; ?><br/>
            <b style='color:blue;'>Kabila: &nbsp;</b><?php echo $value->tribe_name; ?><br/>
             <b style='color:blue;'>Dini: &nbsp;</b><?php echo $value->religion_name; ?><br/>
             <b style='color:blue;'>Anuani: &nbsp;</b><?php echo $value->address; ?><br/>
            <b style='color:blue;'>Kazi: &nbsp;</b><?php echo $value->occupation_name; ?>;<br/>
             <b style='color:blue;'>Kiwango cha elimu: &nbsp;</b><?php echo $value->education_level; ?>
            
            <?php  }  else {
                 echo 'Mtuhumiwa hajakamatwa';
               }?>
                  
        </td>
        <td><?php echo ''; ?></td>
        <td><?php echo ''; ?></td>
        <td><?php echo ''; ?></td>
        
    </tr>
    <?php } ?>
</table>

