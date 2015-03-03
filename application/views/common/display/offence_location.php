<?php
foreach($oneoffence->result() as $tukio){ ?>

         <table class='table table-striped'>

                 <caption class="text-left">
                     <span class="badge pull-center">Mahali tukio lilipotokea</span>
                 </caption>

                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_policename;?></td>
                 </tr>

                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_policename;?></td>
                 </tr>

                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_policename;?></td>
                 </tr>

          </table>

<?php } ?>