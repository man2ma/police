<?php
foreach($oneoffence->result() as $tukio)
{?>
<?php if(($tukio->crimecat_name)==('Mauaji')){ ?>
         <table class='table table-striped'>
              <?php if(isset($tukio->mbinu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mbinu zilizotumika :</td><td></td>
                     <td><?php echo $tukio->mbinu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->silaha)){ ?>
                 <tr>
                     <td style="font-weight:bold">Silaha zilizotumika :</td><td></td>
                     <td><?php echo $tukio->silaha;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->sababu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Sababu za Mauaji :</td><td></td>
                     <td><?php echo $tukio->sababu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->idadi)){ ?>
                 <tr>
                     <td style="font-weight:bold">Idadi ya Waliouawa :</td><td></td>
                     <td><?php echo $tukio->idadi;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
          </table>

              
<?php }elseif(($tukio->crimecat_name)==('Taarifa ya Kifo')){ ?>
        <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Sababu ya Kifo :</td><td></td>
                     <td><?php echo $tukio->sababu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != '' ){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
          </table>


<?php }elseif(($tukio->crimecat_name)==('Kubaka')){ ?>
           <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mbinu zilizotumika :</td><td></td>
                     <td><?php echo $tukio->mbinu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->sababu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Sababu za kubaka:</td><td></td>
                     <td><?php echo $tukio->sababu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
             
          </table>




<?php }elseif(($tukio->crimecat_name)==('Kulawiti')){ ?>
           <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mbinu zilizotumika :</td><td></td>
                     <td><?php echo $tukio->mbinu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->sababu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Sababu za kulawiti:</td><td></td>
                     <td><?php echo $tukio->sababu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table>




<?php }elseif(($tukio->crimecat_name)==('Kunajisi')){ ?>
            <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mbinu zilizotumika :</td><td></td>
                     <td><?php echo $tukio->mbinu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->sababu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Sababu za kunajisi:</td><td></td>
                     <td><?php echo $tukio->sababu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table>



<?php }elseif(($tukio->crimecat_name)==('Usafirishaji haramu wa binadamu')){ ?>
            <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Vyombo vilivyotumika :</td><td></td>
                     <td><?php echo $tukio->aina;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->source)){ ?>
                 <tr>
                     <td style="font-weight:bold">Njia ya usafirishaji:</td><td></td>
                     <td><?php echo $tukio->source;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mbinu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mbinu zilizotumika:</td><td></td>
                     <td><?php echo $tukio->mbinu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table>


<?php }elseif(($tukio->crimecat_name)==('Kufanya mapenzi na maharimu')){ ?>
            <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Sababu :</td><td></td>
                     <td><?php echo $tukio->sababu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table>


<?php }elseif(($tukio->crimecat_name)==('Kutupa watoto')){ ?>
           <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Sababu :</td><td></td>
                     <td><?php echo $tukio->sababu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table> 



<?php }elseif(($tukio->crimecat_name)==('Wizi wa watoto')){ ?>
            <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Sababu :</td><td></td>
                     <td><?php echo $tukio->sababu;?></td>
                 </tr>
              <?php } ?>
               <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table> 



<?php }elseif(($tukio->crimecat_name)==('Kupatikana na silaha')){ ?>
            <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya Silaha :</td><td></td>
                     <td><?php echo $tukio->crimesubcat_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->idadi)){ ?>
                 <tr>
                     <td style="font-weight:bold">Idadi ya Silaha :</td><td></td>
                     <td><?php echo $tukio->idadi;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->description)){ ?>
                 <tr>
                     <td style="font-weight:bold">Idadi ya Risasi :</td><td></td>
                     <td><?php echo $tukio->description;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->number)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Silaha :</td><td></td>
                     <td><?php echo $tukio->number;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mmiliki)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mmiliki wa Silaha :</td><td></td>
                     <td><?php echo $tukio->mmiliki;?></td>
                 </tr>
              <?php } ?>
               <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table> 



<?php }elseif(($tukio->crimecat_name)==('Kupatikana na nyara')){ ?>
             <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya Nyara :</td><td></td>
                     <td><?php echo $tukio->aina;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->item_affected)){ ?>
                 <tr>
                     <td style="font-weight:bold">Alichokutwa nacho :</td><td></td>
                     <td><?php echo $tukio->item_affected;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->idadi)){ ?>
                 <tr>
                     <td style="font-weight:bold">Idadi :</td><td></td>
                     <td><?php echo $tukio->idadi;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->amount)){ ?>
                 <tr>
                     <td style="font-weight:bold">Uzito :</td><td></td>
                     <td><?php echo $tukio->amount;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->thamani_haribika)){ ?>
                 <tr>
                     <td style="font-weight:bold">Thamani ya Nyara :</td><td></td>
                     <td><?php echo $tukio->thamani_haribika;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
               
          </table> 



<?php }elseif(($tukio->crimecat_name)==('Rushwa')){ ?>
            <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya Rushwa :</td><td></td>
                     <td><?php echo $tukio->crimesubcat_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->sababu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Sababu :</td><td></td>
                     <td><?php echo $tukio->sababu;?></td>
                 </tr>
              <?php } ?>
               <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table> 


<?php }elseif(($tukio->crimecat_name)==('Kupatikana na pombe ya moshi')){ ?>
            <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Sababu :</td><td></td>
                     <td><?php echo $tukio->sababu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->idadi)){ ?>
                 <tr>
                     <td style="font-weight:bold">Idadi ya Mitambo :</td><td></td>
                     <td><?php echo $tukio->idadi;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->amount)){ ?>
                 <tr>
                     <td style="font-weight:bold">Ujazo :</td><td></td>
                     <td><?php echo $tukio->amount;?></td>
                 </tr>
              <?php } ?>
               <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
                 
          </table> 



<?php }elseif(($tukio->crimecat_name)==('Magendo')){ ?>
             <table class='table table-striped'>
              <?php if(isset($tukio->aina)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya Bidhaa :</td><td></td>
                     <td><?php echo $tukio->aina;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->amount)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kiasi :</td><td></td>
                     <td><?php echo $tukio->amount;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->thamani_haribika)){ ?>
                 <tr>
                     <td style="font-weight:bold">Thamani :</td><td></td>
                     <td><?php echo $tukio->thamani_haribika;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
                 
          </table> 



<?php }elseif(($tukio->crimecat_name)==('Kupatikana na risasi')){ ?>
           <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya risasi :</td><td></td>
                     <td><?php echo $tukio->crimesubcat_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->idadi)){ ?>
                 <tr>
                     <td style="font-weight:bold">Idadi ya risasi :</td><td></td>
                     <td><?php echo $tukio->idadi;?></td>
                 </tr>
              <?php } ?>
               <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table> 


<?php }elseif(($tukio->crimecat_name)==('Kupatikana na bomu')){ ?>
             <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya bomu :</td><td></td>
                     <td><?php echo $tukio->crimesubcat_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->idadi)){ ?>
                 <tr>
                     <td style="font-weight:bold">Idadi ya mabomu :</td><td></td>
                     <td><?php echo $tukio->idadi;?></td>
                 </tr>
              <?php } ?>
               <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table> 



<?php }elseif(($tukio->crimecat_name)==('Uhamiaji haramu')){ ?>
            <table class='table table-striped'>
              <?php if(isset($tukio->sababu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Sababu :</td><td></td>
                     <td><?php echo $tukio->sababu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table> 



<?php }elseif(($tukio->crimecat_name)==('Kupatikana na nyaraka za serikali')){ ?>
           <table class='table table-striped'>
              <?php if(isset($tukio->sababu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Sababu :</td><td></td>
                     <td><?php echo $tukio->sababu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
                 
          </table> 



<?php }elseif(($tukio->crimecat_name)==('Kupatikana na dawa')){ ?>
          <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya dawa :</td><td></td>
                     <td><?php echo $tukio->crimesubcat_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->aina)){ ?>
                 <tr>
                     <td style="font-weight:bold">Jina la dawa :</td><td></td>
                     <td><?php echo $tukio->aina;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mbinu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mbinu zilizotumika :</td><td></td>
                     <td><?php echo $tukio->mbinu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->amount)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kiasi cha dawa :</td><td></td>
                     <td><?php echo $tukio->amount;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->sababu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Sababu :</td><td></td>
                     <td><?php echo $tukio->sababu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
         
          </table> 



<?php }elseif(($tukio->crimecat_name)==('Ukahaba')){ ?>
           <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya ukahaba :</td><td></td>
                     <td><?php echo $tukio->aina;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mbinu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Njia zilizotumika :</td><td></td>
                     <td><?php echo $tukio->mbinu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->description)){ ?>
                 <tr>
                     <td style="font-weight:bold">Nia ya ukahaba :</td><td></td>
                     <td><?php echo $tukio->description;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->sababu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Sababu :</td><td></td>
                     <td><?php echo $tukio->sababu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table> 



<?php }elseif(($tukio->crimecat_name)==('Kukataa amri halali')){ ?>
           <table class='table table-striped'>
              <?php if(isset($tukio->aina)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya amri :</td><td></td>
                     <td><?php echo $tukio->aina;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mtendwa)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aliyetoa amri :</td><td></td>
                     <td><?php echo $tukio->mtendwa;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->sababu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Sababu :</td><td></td>
                     <td><?php echo $tukio->sababu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->reactions)){ ?>
                 <tr>
                     <td style="font-weight:bold">Hatua zilizochukuliwa :</td><td></td>
                     <td><?php echo $tukio->reactions;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table> 



<?php }elseif(($tukio->crimecat_name)==('Kumpa mimba mwanafunzi')){ ?>
            <table class='table table-striped'>
              <?php if(isset($tukio->idadi)){ ?>
                 <tr>
                     <td style="font-weight:bold">Umri wa mimba :</td><td></td>
                     <td><?php echo $tukio->idadi;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->shule)){ ?>
                 <tr>
                     <td style="font-weight:bold">Shule Asomayo :</td><td></td>
                     <td><?php echo $tukio->shule;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->kidato)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kidato :</td><td></td>
                     <td><?php echo $tukio->kidato;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mtendwa)){ ?>
                 <tr>
                     <td style="font-weight:bold">Jina la mlalamikaji :</td><td></td>
                     <td><?php echo $tukio->mtendwa;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->description)){ ?>
                 <tr>
                     <td style="font-weight:bold">Uhusiano na mwanafunzi :</td><td></td>
                     <td><?php echo $tukio->description;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table> 



<?php }elseif(($tukio->crimecat_name)==('Kupatikana na sare za jeshi')){ ?>
          <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya Sare:</td><td></td>
                     <td><?php echo $tukio->crimesubcat_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->sababu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Sababu :</td><td></td>
                     <td><?php echo $tukio->sababu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table> 



<?php }elseif(($tukio->crimecat_name)==('Kupigana hadharani')){ ?>
           <table class='table table-striped'>
              <?php if(isset($tukio->sababu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Sababu za kupigana:</td><td></td>
                     <td><?php echo $tukio->sababu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mbinu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Njia iliyotumika :</td><td></td>
                     <td><?php echo $tukio->mbinu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->source)){ ?>
                 <tr>
                     <td style="font-weight:bold">Silaha iliyotumika :</td><td></td>
                     <td><?php echo $tukio->source;?></td>
                 </tr>
              <?php } ?>
               <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table> 



<?php }elseif(($tukio->crimecat_name)==('Kuingia kwenye hifadhi bila kibali')){ ?>
             <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya hifadhi:</td><td></td>
                     <td><?php echo $tukio->crimesubcat;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->aina)){ ?>
                 <tr>
                     <td style="font-weight:bold">Jina la hifadhi :</td><td></td>
                     <td><?php echo $tukio->aina;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->sababu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Sababu za kuingia :</td><td></td>
                     <td><?php echo $tukio->sababu;?></td>
                 </tr>
              <?php } ?>
               <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table> 



<?php }elseif(($tukio->crimecat_name)==('Kutelekeza familia')){ ?>
             <table class='table table-striped'>
              <?php if(isset($tukio->sababu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Sababu za kutelekezwa:</td><td></td>
                     <td><?php echo $tukio->sababu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->idadi)){ ?>
                 <tr>
                     <td style="font-weight:bold">Idadi ya waliotelekezwa :</td><td></td>
                     <td><?php echo $tukio->idadi;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->offence_location)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mahali alipotelekezwa :</td><td></td>
                     <td><?php echo $tukio->offence_location;?></td>
                 </tr>
              <?php } ?>
               <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table> 



<?php }elseif(($tukio->crimecat_name)==('Kutoa taarifa za uongo')){ ?>
            <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya uongo:</td><td></td>
                     <td><?php echo $tukio->aina;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->source)){ ?>
                 <tr>
                     <td style="font-weight:bold">Nia ya uongo :</td><td></td>
                     <td><?php echo $tukio->source;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mbinu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Njia iliyotumika :</td><td></td>
                     <td><?php echo $tukio->mbinu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->sababu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Sababu za uongo :</td><td></td>
                     <td><?php echo $tukio->sababu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table>


<?php }elseif(($tukio->crimecat_name)==('Kutoroka kambini')){ ?>
            <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya kambi:</td><td></td>
                     <td><?php echo $tukio->crimesubcat;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->offence_location)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mahali ilipo :</td><td></td>
                     <td><?php echo $tukio->offence_location;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->sababu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Sababu za kutoroka :</td><td></td>
                     <td><?php echo $tukio->sababu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mbinu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Njia tumika kutoroka :</td><td></td>
                     <td><?php echo $tukio->mbinu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->item_affected)){ ?>
                 <tr>
                     <td style="font-weight:bold">Alichotoroka nacho :</td><td></td>
                     <td><?php echo $tukio->item_affected;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table>



<?php }elseif(($tukio->crimecat_name)==('Kutorosha mtoto shule')){ ?>
           <table class='table table-striped'>
              <?php if(isset($tukio->shule)){ ?>
                 <tr>
                     <td style="font-weight:bold">Shule asomayo:</td><td></td>
                     <td><?php echo $tukio->shule;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->kidato)){ ?>
                 <tr>
                     <td style="font-weight:bold">Daraja la elimu :</td><td></td>
                     <td><?php echo $tukio->kidato;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->sababu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Sababu za kutoroshwa :</td><td></td>
                     <td><?php echo $tukio->sababu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mtendwa)){ ?>
                 <tr>
                     <td style="font-weight:bold">Jina la mlalamikaji :</td><td></td>
                     <td><?php echo $tukio->mtendwa;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->description)){ ?>
                 <tr>
                     <td style="font-weight:bold">Uhusiano na aliyetoshwa :</td><td></td>
                     <td><?php echo $tukio->description;?></td>
                 </tr>
              <?php } ?>
               <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table>





<?php }elseif(($tukio->crimecat_name)==('Kutishia kuua')){ ?>
         <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya uuaji:</td><td></td>
                     <td><?php echo $tukio->aina;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mbinu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Njia iliyotumika :</td><td></td>
                     <td><?php echo $tukio->mbinu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->source)){ ?>
                 <tr>
                     <td style="font-weight:bold">Silaha iliyotumika :</td><td></td>
                     <td><?php echo $tukio->source;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->number)){ ?>
                 <tr>
                     <td style="font-weight:bold">namba ya silaha :</td><td></td>
                     <td><?php echo $tukio->number;?></td>
                 </tr>
              <?php } ?>
               <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table>



<?php }elseif(($tukio->crimecat_name)==('Kutumia lugha za matusi')){ ?>
         <table class='table table-striped'>
              <?php if(isset($tukio->source)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya lugha:</td><td></td>
                     <td><?php echo $tukio->source;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->aina)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya tusi :</td><td></td>
                     <td><?php echo $tukio->aina;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->sababu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Sababu za kutukana :</td><td></td>
                     <td><?php echo $tukio->sababu;?></td>
                 </tr>
              <?php } ?>
               <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table>




<?php }elseif(($tukio->crimecat_name)==('Kumzuia mtumishi wa serikali kufanya kazi yake')){ ?>
        <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya kazi:</td><td></td>
                     <td><?php echo $tukio->aina;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->sababu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Sababu za kutukana :</td><td></td>
                     <td><?php echo $tukio->sababu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mtenda)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aliyemzuia :</td><td></td>
                     <td><?php echo $tukio->mtenda;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mtendwa)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aliyezuiliwa :</td><td></td>
                     <td><?php echo $tukio->mtendwa;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->aina)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya mtumishi :</td><td></td>
                     <td><?php echo $tukio->aina;?></td>
                 </tr>
              <?php } ?>
               <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table>



<?php }elseif(($tukio->crimecat_name)==('Kucheza kamari')){ ?>
         <table class='table table-striped'>
              <?php if(isset($tukio->aina)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya kamari:</td><td></td>
                     <td><?php echo $tukio->aina;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mbinu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Njia tumika :</td><td></td>
                     <td><?php echo $tukio->mbinu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->sababu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Sababu :</td><td></td>
                     <td><?php echo $tukio->sababu;?></td>
                 </tr>
              <?php } ?>
               <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table>



<?php }elseif(($tukio->crimecat_name)==('Uwindaji haramu')){ ?>
          <table>
              <?php if(isset($tukio->crimesubcat)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kilichowindwa:</td><td></td>
                     <td><?php echo $tukio->item_affected;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->sababu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Sababu :</td><td></td>
                     <td><?php echo $tukio->sababu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->thamani_haribika)){ ?>
                 <tr>
                     <td style="font-weight:bold">Thamani yake :</td><td></td>
                     <td><?php echo $tukio->thamani_haribika;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mbinu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Uwindaji tumika :</td><td></td>
                     <td><?php echo $tukio->mbinu;?></td>
                 </tr>
              <?php } ?>
               <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table>



<?php }elseif(($tukio->crimecat_name)==('Kufanya fujo')){ ?>
           <table class='table table-striped'>
              <?php if(isset($tukio->sababu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Sababu za kufanya fujo:</td><td></td>
                     <td><?php echo $tukio->sababu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->item_affected)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mali iliyoharibiwa :</td><td></td>
                     <td><?php echo $tukio->item_affected;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mtendwa)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aliyeumia :</td><td></td>
                     <td><?php echo $tukio->mtendwa;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mtenda)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aliyefanya fujo :</td><td></td>
                     <td><?php echo $tukio->mtenda;?></td>
                 </tr>
              <?php } ?>
               <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table>


<?php }elseif(($tukio->crimecat_name)==('Kuharibu mali')){ ?>
           <table class='table table-striped'>
              <?php if(isset($tukio->aina)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya mali:</td><td></td>
                     <td><?php echo $tukio->aina;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->item_affected)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kitu kilichoharibiwa :</td><td></td>
                     <td><?php echo $tukio->item_affected;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->thamani_haribika)){ ?>
                 <tr>
                     <td style="font-weight:bold">Thamani ya mali :</td><td></td>
                     <td><?php echo $tukio->thamani_haribika;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->sababu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Sababu :</td><td></td>
                     <td><?php echo $tukio->sababu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table>



<?php }elseif(($tukio->crimecat_name)==('Kufyatua risasi')){ ?>
          <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya risasi:</td><td></td>
                     <td><?php echo $tukio->crimesubcat;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->number)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya silaha :</td><td></td>
                     <td><?php echo $tukio->number;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->sababu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Sababu ya kufyatua risasi:</td><td></td>
                     <td><?php echo $tukio->sababu;?></td>
                 </tr>
              <?php } ?>
             <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table>




<?php }elseif(($tukio->crimecat_name)==('Wizi wa mifugo')){ ?>
            <table class='table table-striped'>
              <?php if(isset($tukio->sababu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Sababu:</td><td></td>
                     <td><?php echo $tukio->sababu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mbinu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mbinu za wizi :</td><td></td>
                     <td><?php echo $tukio->mbinu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->aina)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya mifugo:</td><td></td>
                     <td><?php echo $tukio->aina;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->item_affected)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mifugo iliyoibwa:</td><td></td>
                     <td><?php echo $tukio->item_affected;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->item_okolewa)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mifugo iliyopatikana:</td><td></td>
                     <td><?php echo $tukio->item_okolewa;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->thamani_haribika)){ ?>
                 <tr>
                     <td style="font-weight:bold">Thamani ya mifugo iliyoibwa:</td><td></td>
                     <td><?php echo $tukio->thamani_haribika;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->thamani_okolewa)){ ?>
                 <tr>
                     <td style="font-weight:bold">Thamani ya mifugo iliyopatikana:</td><td></td>
                     <td><?php echo $tukio->thamani_okolewa;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table>



<?php }elseif(($tukio->crimecat_name)==('Wizi wa silaha')){ ?>
          <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya silaha:</td><td></td>
                     <td><?php echo $tukio->crimesubcat;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->number)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya silaha :</td><td></td>
                     <td><?php echo $tukio->number;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mmiliki)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mmiliki wa silaha:</td><td></td>
                     <td><?php echo $tukio->mmiliki;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table>


<?php }elseif(($tukio->crimecat_name)==('Wizi wa vyombo vya moto')){ ?>
          <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya chombo:</td><td></td>
                     <td><?php echo $tukio->crimesubcat;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->aina)){ ?>
                 <tr>
                     <td style="font-weight:bold">Rangi ya chombo :</td><td></td>
                     <td><?php echo $tukio->aina;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->number)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya usajili:</td><td></td>
                     <td><?php echo $tukio->number;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->source)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya injini :</td><td></td>
                     <td><?php echo $tukio->source;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->item_affected)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya chesesi :</td><td></td>
                     <td><?php echo $tukio->item_affected;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->idadi)){ ?>
                 <tr>
                     <td style="font-weight:bold">Idadi ya vyombo :</td><td></td>
                     <td><?php echo $tukio->idadi;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->thamani_haribika)){ ?>
                 <tr>
                     <td style="font-weight:bold">Thamani ya vyombo :</td><td></td>
                     <td><?php echo $tukio->thamani_haribika;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table>


<?php }elseif(($tukio->crimecat_name)==('Wizi katika mabenki')){ ?>
          <table class='table table-striped'>
              <?php if(isset($tukio->description)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya benki:</td><td></td>
                     <td><?php echo $tukio->description;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mtendwa)){ ?>
                 <tr>
                     <td style="font-weight:bold">Jina la benki:</td><td></td>
                     <td><?php echo $tukio->mtendwa;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->aina)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya fedha:</td><td></td>
                     <td><?php echo $tukio->aina;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->amount)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kiasi cha fedha :</td><td></td>
                     <td><?php echo $tukio->amount;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mbinu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mbinu zilizotumika :</td><td></td>
                     <td><?php echo $tukio->mbinu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table>


<?php }elseif(($tukio->crimecat_name)==('Wizi serikalini')){ ?>
         <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya serikali:</td><td></td>
                     <td><?php echo $tukio->crimesubcat;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mtendwa)){ ?>
                 <tr>
                     <td style="font-weight:bold">Jina la benki:</td><td></td>
                     <td><?php echo $tukio->mtendwa;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mtendwa)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wizara:</td><td></td>
                     <td><?php echo $tukio->mtendwa;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->item_affected)){ ?>
                 <tr>
                     <td style="font-weight:bold">Idara :</td><td></td>
                     <td><?php echo $tukio->item_affected;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->aina)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya fedha :</td><td></td>
                     <td><?php echo $tukio->aina;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->amount)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kiasi :</td><td></td>
                     <td><?php echo $tukio->amount;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mbinu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mbinu zilizotumika :</td><td></td>
                     <td><?php echo $tukio->mbinu;?></td>
                 </tr>
              <?php } ?>
                <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table>


<?php }elseif(($tukio->crimecat_name)==('Wizi wa mali')){ ?>
           <table class='table table-striped'>
              <?php if(isset($tukio->aina)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya mali:</td><td></td>
                     <td><?php echo $tukio->aina;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->amount)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kiasi:</td><td></td>
                     <td><?php echo $tukio->thamani_haribika;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mbinu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mbinu zilizotumika :</td><td></td>
                     <td><?php echo $tukio->mbinu;?></td>
                 </tr>
              <?php } ?>
               <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table>


<?php }elseif(($tukio->crimecat_name)==('Wizi wa risasi')){ ?>
           <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya mali:</td><td></td>
                     <td><?php echo $tukio->crimesubcat;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->idadi)){ ?>
                 <tr>
                     <td style="font-weight:bold">Idadi ya risasi:</td><td></td>
                     <td><?php echo $tukio->idadi;?></td>
                 </tr>
              <?php } ?>
               <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table>


<?php }elseif(($tukio->crimecat_name)==("Unyang'anyi")){ ?>
           <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya unyang'anyi:</td><td></td>
                     <td><?php echo $tukio->crimesubcat;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->aina)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya fedha:</td><td></td>
                     <td><?php echo $tukio->aina;?></td>
                 </tr>
              <?php } ?>
                  <?php if(isset($tukio->amount)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kiasi :</td><td></td>
                     <td><?php echo $tukio->amount;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->item_affected)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mali iliyoporwa :</td><td></td>
                     <td><?php echo $tukio->item_affected;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->item_okolewa)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mali iliyookolewa :</td><td></td>
                     <td><?php echo $tukio->item_okolewa;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mbinu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mbinu zilizotumika :</td><td></td>
                     <td><?php echo $tukio->mbinu;?></td>
                 </tr>
               <?php } ?>
               <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table>


<?php }elseif(($tukio->crimecat_name)==("Unyang'anyi katika barabara kuu")){ ?>
         <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya unyang'anyi:</td><td></td>
                     <td><?php echo $tukio->crimesubcat;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->offence_location)){ ?>
                 <tr>
                     <td style="font-weight:bold">Barabara:</td><td></td>
                     <td><?php echo $tukio->offence_location;?></td>
                 </tr>
              <?php } ?>
                <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table>



<?php }elseif(($tukio->crimecat_name)==('Kuchoma moto')){ ?>
           <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kilichochomwa moto:</td><td></td>
                     <td><?php echo $tukio->item_affected;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->sababu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Sababu:</td><td></td>
                     <td><?php echo $tukio->sababu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->thamani_okolewa)){ ?>
                 <tr>
                     <td style="font-weight:bold">Thamani iliyookolewa :</td><td></td>
                     <td><?php echo $tukio->thamani_okolewa;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->thamani_haribika)){ ?>
                 <tr>
                     <td style="font-weight:bold">Thamani iliyoharibika :</td><td></td>
                     <td><?php echo $tukio->thamani_haribika;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table>





<?php }elseif(($tukio->crimecat_name)==('Ajali ya moto')){ ?>
           <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kilichochomwa moto:</td><td></td>
                     <td><?php echo $tukio->item_affected;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->item_affected)){ ?>
                 <tr>
                     <td style="font-weight:bold">Vyombo:</td><td></td>
                     <td><?php echo $tukio->description;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table>




<?php }elseif(($tukio->crimecat_name)==('Uvunjaji')){ ?>
          <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya jengo:</td><td></td>
                     <td><?php echo $tukio->crimesubcat;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mbinu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mbinu zilizotumika:</td><td></td>
                     <td><?php echo $tukio->mbinu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->thamani_okolewa)){ ?>
                 <tr>
                     <td style="font-weight:bold">Thamani iliyookolewa :</td><td></td>
                     <td><?php echo $tukio->thamani_okolewa;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->thamani_haribika)){ ?>
                 <tr>
                     <td style="font-weight:bold">Thamani iliyoharibika :</td><td></td>
                     <td><?php echo $tukio->thamani_haribika;?></td>
                 </tr>
              <?php } ?>
               <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table>




<?php }elseif(($tukio->crimecat_name)==('Kupatikana na fedha bandia')){ ?>
         <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya fedha:</td><td></td>
                     <td><?php echo $tukio->crimesubcat;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->amount)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kiasi cha fedha:</td><td></td>
                     <td><?php echo $tukio->amount;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->thamani_haribika)){ ?>
                 <tr>
                     <td style="font-weight:bold">Thamani ya fedha :</td><td></td>
                     <td><?php echo $tukio->thamani_haribika;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mbinu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mbinu tumika :</td><td></td>
                     <td><?php echo $tukio->mbinu;?></td>
                 </tr>
              <?php } ?>
               <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table>


<?php }elseif(($tukio->crimecat_name)==('Wizi toka maungoni')){ ?>
           <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya wizi:</td><td></td>
                     <td><?php echo $tukio->crimesubcat;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->sababu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Sababu ya wizi:</td><td></td>
                     <td><?php echo $tukio->sababu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->thamani_haribika)){ ?>
                 <tr>
                     <td style="font-weight:bold">Thamani ya fedha :</td><td></td>
                     <td><?php echo $tukio->thamani_haribika;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mbinu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Njia tumika :</td><td></td>
                     <td><?php echo $tukio->mbinu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table>


<?php }elseif(($tukio->crimecat_name)==("Kujaribu kunyang'anya")){ ?>
           <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya wizi:</td><td></td>
                     <td><?php echo $tukio->crimesubcat;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mbinu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Njia tumika :</td><td></td>
                     <td><?php echo $tukio->mbinu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->item_affected)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kilichotaka kunyang'anywa :</td><td></td>
                     <td><?php echo $tukio->item_affected;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->idadi)){ ?>
                 <tr>
                     <td style="font-weight:bold">Idadi ya Vitu:</td><td></td>
                     <td><?php echo $tukio->idadi;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->sababu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Sababu ya wizi:</td><td></td>
                     <td><?php echo $tukio->sababu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table>



<?php }elseif(($tukio->crimecat_name)==('Kujipatia deni kwa njia ya udanganyifu')){ ?>
           <table class='table table-striped'>
              <?php if(isset($tukio->mtenda)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aliyedanganya:</td><td></td>
                     <td><?php echo $tukio->mtenda;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mtendwa)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aliyedanganywa :</td><td></td>
                     <td><?php echo $tukio->mtendwa;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->sababu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Sababu za kudanganya :</td><td></td>
                     <td><?php echo $tukio->sababu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mbinu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Njia zilizotumika :</td><td></td>
                     <td><?php echo $tukio->mbinu;?></td>
                 </tr>
              <?php } ?>
               <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table>



<?php }elseif(($tukio->crimecat_name)==('Kujipatia fedha kwa njia ya udanganyifu')){ ?>
           <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya udanganyifu:</td><td></td>
                     <td><?php echo $tukio->crimesubcat;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->sababu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Sababu za udanganyifu :</td><td></td>
                     <td><?php echo $tukio->sababu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mbinu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Njia zilizotumika :</td><td></td>
                     <td><?php echo $tukio->mbinu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->aina)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya mali :</td><td></td>
                     <td><?php echo $tukio->aina;?></td>
                 </tr>
              <?php } ?>
               <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table>



<?php }elseif(($tukio->crimecat_name)==('Kujipatia mali kwa njia ya udanganyifu')){ ?>
          <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya udanganyifu:</td><td></td>
                     <td><?php echo $tukio->crimesubcat;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->sababu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Sababu za udanganyifu :</td><td></td>
                     <td><?php echo $tukio->sababu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mbinu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Njia zilizotumika :</td><td></td>
                     <td><?php echo $tukio->mbinu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->aina)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya mali :</td><td></td>
                     <td><?php echo $tukio->aina;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table>



<?php }elseif(($tukio->crimecat_name)==('Wizi wa kuaminiana')){ ?>
           <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya kitu:</td><td></td>
                     <td><?php echo $tukio->crimesubcat;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mtenda)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aliyeaminiwa :</td><td></td>
                     <td><?php echo $tukio->mtenda;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->thamani_haribika)){ ?>
                 <tr>
                     <td style="font-weight:bold">Thamani yake:</td><td></td>
                     <td><?php echo $tukio->thamani_haribika;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->sababu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Sababu :</td><td></td>
                     <td><?php echo $tukio->sababu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->description)){ ?>
                 <tr>
                     <td style="font-weight:bold">Uhusiano na aliyeaminiwa :</td><td></td>
                     <td><?php echo $tukio->description;?></td>
                 </tr>
              <?php } ?>
               <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table>



<?php }elseif(($tukio->crimecat_name)==('Kufanya biashara bila leseni')){ ?>
          <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya biashara:</td><td></td>
                     <td><?php echo $tukio->crimesubcat;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->offence_location)){ ?>
                 <tr>
                     <td style="font-weight:bold">Eneo inapofanyika :</td><td></td>
                     <td><?php echo $tukio->offence_location;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table>



<?php }elseif(($tukio->crimecat_name)==('Ajali barabarani')){ ?>
           <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya ajali:</td><td></td>
                     <td><?php echo $tukio->crimesubcat;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->sababu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Sababu ya ajali :</td><td></td>
                     <td><?php echo $tukio->sababu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->offence_location)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mahali ilipotokea :</td><td></td>
                     <td><?php echo $tukio->offence_location;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->idadi)){ ?>
                 <tr>
                     <td style="font-weight:bold">Idadi ya vyombo vilivyohusika :</td><td></td>
                     <td><?php echo $tukio->idadi;?></td>
                 </tr>
              <?php } ?>
               <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine : </td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($idadi_waliojeruhiwa)){ ?>
                 <tr>
                     <td style="font-weight:bold">Idadi ya Waliojeruhiwa :</td><td></td>
                     <td><?php echo $idadi_waliojeruhiwa;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($idadi_waliokufa)){ ?>
                 <tr>
                     <td style="font-weight:bold">Idadi ya Waliokufa :</td><td></td>
                     <td><?php echo $idadi_waliokufa;?></td>
                 </tr>
              <?php } ?>
          </table>



<?php }elseif(($tukio->crimecat_name)==('Shambulio')){ ?>
          <table class='table table-striped'>
              <?php if(isset($tukio->mbinu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mbinu:</td><td></td>
                     <td><?php echo $tukio->mbinu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->offence_location)){ ?>
                 <tr>
                     <td style="font-weight:bold">Eneo inapofanyika :</td><td></td>
                     <td><?php echo $tukio->offence_location;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table>



<?php }elseif(($tukio->crimecat_name)==('Ajali barabarani')){ ?>
           <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya ajali:</td><td></td>
                     <td><?php echo $tukio->crimesubcat;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->sababu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Sababu ya ajali :</td><td></td>
                     <td><?php echo $tukio->sababu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->offence_location)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mahali ilipotokea :</td><td></td>
                     <td><?php echo $tukio->offence_location;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->idadi)){ ?>
                 <tr>
                     <td style="font-weight:bold">Idadi ya vyombo vilivyohusika :</td><td></td>
                     <td><?php echo $tukio->idadi;?></td>
                 </tr>
              <?php } ?>
               <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine : </td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($idadi_waliojeruhiwa)){ ?>
                 <tr>
                     <td style="font-weight:bold">Idadi ya Waliojeruhiwa :</td><td></td>
                     <td><?php echo $idadi_waliojeruhiwa;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($idadi_waliokufa)){ ?>
                 <tr>
                     <td style="font-weight:bold">Idadi ya Waliokufa :</td><td></td>
                     <td><?php echo $idadi_waliokufa;?></td>
                 </tr>
              <?php } ?>
          </table>



<?php }elseif(($tukio->crimecat_name)==('Wizi wa vifaa vya magari')){ ?>
          <table class='table table-striped'>
              <?php if(isset($tukio->aina)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya Vifaa vilivyoibiwa:</td><td></td>
                     <td><?php echo $tukio->aina;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mbinu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mbinu iliyotumika:</td><td></td>
                     <td><?php echo $tukio->mbinu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->thamani_haribika)){ ?>
                 <tr>
                     <td style="font-weight:bold">Thamani ya vifaa:</td><td></td>
                     <td><?php echo number_format($tukio->thamani_haribika);?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->offence_location)){ ?>
                 <tr>
                     <td style="font-weight:bold">Eneo inapofanyika :</td><td></td>
                     <td><?php echo $tukio->offence_location;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine :</td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              
          </table>



<?php }elseif(($tukio->crimecat_name)==('Ajali barabarani')){ ?>
           <table class='table table-striped'>
              <?php if(isset($tukio->crimesubcat)){ ?>
                 <tr>
                     <td style="font-weight:bold">Aina ya ajali:</td><td></td>
                     <td><?php echo $tukio->crimesubcat;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->sababu)){ ?>
                 <tr>
                     <td style="font-weight:bold">Sababu ya ajali :</td><td></td>
                     <td><?php echo $tukio->sababu;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->offence_location)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mahali ilipotokea :</td><td></td>
                     <td><?php echo $tukio->offence_location;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->idadi)){ ?>
                 <tr>
                     <td style="font-weight:bold">Idadi ya vyombo vilivyohusika :</td><td></td>
                     <td><?php echo $tukio->idadi;?></td>
                 </tr>
              <?php } ?>
               <?php if(isset($tukio->mengineyo) && $tukio->mengineyo != ''){ ?>
                 <tr>
                     <td style="font-weight:bold">Maelezo Mengine : </td><td></td>
                     <td><?php echo $tukio->mengineyo;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->region_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Mkoa :</td><td></td>
                     <td><?php echo $tukio->region_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->district_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Wilaya :</td><td></td>
                     <td><?php echo $tukio->district_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->ward_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kata :</td><td></td>
                     <td><?php echo $tukio->ward_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->village_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kijiji/Mtaa :</td><td></td>
                     <td><?php echo $tukio->village_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->station_name)){ ?>
                 <tr>
                     <td style="font-weight:bold">Kituo :</td><td></td>
                     <td><?php echo $tukio->station_name;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($tukio->force_no)){ ?>
                 <tr>
                     <td style="font-weight:bold">Namba ya Askari :</td><td></td>
                     <td><?php echo $tukio->force_no;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($idadi_waliojeruhiwa)){ ?>
                 <tr>
                     <td style="font-weight:bold">Idadi ya Waliojeruhiwa :</td><td></td>
                     <td><?php echo $idadi_waliojeruhiwa;?></td>
                 </tr>
              <?php } ?>
              <?php if(isset($idadi_waliokufa)){ ?>
                 <tr>
                     <td style="font-weight:bold">Idadi ya Waliokufa :</td><td></td>
                     <td><?php echo $idadi_waliokufa;?></td>
                 </tr>
              <?php } ?>
          </table>

<?php } ?>
<?php } ?>