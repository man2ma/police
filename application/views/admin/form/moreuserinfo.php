
<div class="row">
    <div class="col-xs-10">
        
    </div>
    <div class="col-xs-2">
        <ul class="list-inline">
        <li><?php echo anchor('admin/viewUsers/','<i class="glyphicon glyphicon-backward"></i> Back',array('class'=>'btn btn-primary')); ?></li>
        </ul>
    </div>
</div>
<div class='row-fluid'>
    <div class="col-xs-11">
        <?php 
        foreach($userinfo->result() as $row){
            $userinfo=array(
                'id'=>$row->id,
                'force_no'=>$row->force_no,
                'fname'=>$row->fname,
                'midname'=>$row->midname,
                'lname'=>$row->lname,
                'mobile_no'=>$row->mobile_no,
                'user_typeid'=>$row->user_typeid,
                'user_statusid'=>$row->user_statusid,
                'user_typename'=>$row->user_typename,
                'station_id'=>$row->station_id,
                'station_name'=>$row->station_name,
                'region_nbsid'=>$row->region_nbsid,
                'region_nbsname'=>$row->region_nbsname,
                'region_policeid'=>$row->region_policeid,
                'region_policename'=>$row->region_policename,
                'district_nbsid '=>$row->district_nbsid,
                'district_nbsname'=>$row->district_nbsname,
                'district_policeid'=>$row->district_policeid,
                'district_policename'=>$row->district_policename,
                'ward_nbsid'=>$row->ward_nbsid,
                'ward_nbsname'=>$row->ward_nbsname,
                'ward_policeid'=>$row->ward_policeid,
                'ward_policename'=>$row->ward_policename,
            );
        
        $name=ucfirst(strtolower($row->fname)).' '.ucfirst(strtolower($row->midname)).' '.ucfirst(strtolower($row->lname));
        } ?>
        <legend id='username'><i class="glyphicon glyphicon-user" ></i>&nbsp;&nbsp;<?php echo $name;?> </legend>
        <table class='table-bordered col-xs-11 table-condensed'>
            
            <tr>
                <td><img src="<?php echo base_url();?>/images/blank-profile-hi.png" height='300px" alt=' class="img-polaroid"></td>
                       <td>
                          <table class="table table-striped table-hover table-responsive">
                          <th align='center'style='background-color: #49afcd;color:#ffffff;'>ADMINISTRATION BY POLICE FORCE</th><th style='background-color: #49afcd;'>&nbsp;</th>
                          <tr><th>Force number </th><td>&nbsp;<?php echo $row->force_no;  ?></td></tr>
                          <tr><th>Position </th><td>&nbsp;<?php echo $row->user_typename;  ?></td></tr>
                          <tr><th>Tel/Mobile </th><td>&nbsp;<?php echo $row->mobile_no;  ?></td></tr>
                          <tr><th>Police Station </th><td>&nbsp;<?php echo $row->station_name;  ?></td></tr>
                          <tr><th>Police Ward </th><td>&nbsp;<?php echo $row->ward_policename;  ?></td></tr>
                          <tr><th>Police District </th><td>&nbsp;<?php echo $row->district_policename;  ?></td></tr>
                          <tr><th>Police Region </th><td>&nbsp;<?php echo $row->region_policename;  ?></td></tr>
                          
                          <th align='center'style='background-color: #49afcd;color:#ffffff;'>ADMINISTRATION BY GOVERNMENT</th><th style='background-color: #49afcd;'>&nbsp;</th>
                          <tr><th>District </th><td>&nbsp;<?php echo $row->district_nbsname;  ?></td></tr>
                          <tr><th>Region </th><td>&nbsp;<?php echo $row->region_nbsname;  ?></td></tr>
                     </table>
                   </td>
            </tr> 
            <tr><th>Action</th><td>&nbsp;&nbsp;
                <div class='btn btn-success' id='changeposition'><a href="" data-position='<?php echo $row->id ; ?>'><i class="glyphicon glyphicon-refresh"></i> Change Position</a></div>&nbsp;
                <div class='btn btn-primary' id='transfer'><a href='' data-transfer='<?php echo $row->id;?>' ><i class="glyphicon glyphicon-transfer"></i>  Transfer </a></div><?php if($row->user_statusid==1){ ?>  <div class='btn btn-danger' id='activateuser'><a href='' data-deactivate='<?php echo $row->id;?>'><i class="glyphicon glyphicon-off"></i> Deactivate User</div><?php }elseif($row->user_statusid==2){ ?> <div class='btn btn-warning' id='reactivateUser'><a href='' data-deactivate='<?php echo $row->id;?>'><i class="glyphicon glyphicon-open"></i> Activate User</div><?php }?>   
                <div class='btn btn-info' id='resetpassword'><a href="" data-resetpass='<?php echo $row->id ; ?>'><i class="glyphicon glyphicon-cog"></i> Reset password</a></div>
                
                </td></tr>
        </table>
         <div id="formsfordeleteupdatedeactivateuser" style="display: none;" >
             
            <div id='close'><a href=""><i class="glyphicon glyphicon-remove"></i></a></div>
            
            
        </div>
        
        <div id="activateuserwindowbefore" style="display: none;" > 
            <div id='close'><a href=""><i class="glyphicon glyphicon-remove"></i></a></div>
            <br></br>
           <img src="<?php echo base_url();?>/images/loadinglound.GIF" height="100" width="100">
        </div>
        
         <div id="activateuserwindow" style="display: none;" > 
            <div id='close'><a href=""><i class="glyphicon glyphicon-remove"></i></a></div> 
            <font color="green">You have successfully deactivated the User </font><font color='blue'></font>
        </div>
        
          <div id="userreactivate" style="display: none;" > 
            <div id='close'><a href=""><i class="glyphicon glyphicon-remove"></i></a></div> 
            <font color="green">You have successfully Reactivated the User </font><font color='blue'></font>
         </div>
       <div id="usertransfer" style="display:none;" >
           <br></br>

        </div>     
        <div id="changepassword" style="display:none;" >

        </div>  
        
        
    </div>

</div>