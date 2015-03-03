<?php foreach ($mhusikainfo->result() as $mhusika) { ?>
 <br/>
 <br/>
                <table>
                 <tr>
                     <td style="font-weight:bold"> Uhusika:</td><td></td>
                     <td><?php echo $mhusika->wahusika_typename;?></td>
                 </tr>
                 <tr>
                     <td style="font-weight:bold">Jina Kamili:</td><td></td>
                     <td><?php echo $mhusika->fname.' '.$mhusika->midname.' '.$mhusika->lname;?></td>
                 </tr>
                 <tr>
                     <td style="font-weight:bold">Jina Maarufu:</td><td></td>
                     <td><?php echo $mhusika->nickname; ?></td>
                 </tr>
                 <tr>
                     <td style="font-weight:bold">Jinsi:</td><td></td>
                     <td><?php echo $mhusika->sex_name; ?></td>
                 </tr>
                  <tr>
                     <td style="font-weight:bold">Umri:</td><td></td>
                     <td><?php echo $mhusika->age; ?></td>
                 </tr>          
                  <tr>
                     <td style="font-weight:bold">Namba ya Simu:</td><td></td>
                     <td><?php echo $mhusika->mobile_no; ?></td>
                 </tr>
                  <tr>
                     <td style="font-weight:bold">Amuani:</td><td></td>
                     <td><?php echo $mhusika->address; ?></td>
                 </tr>
                  <tr>
                     <td style="font-weight:bold">Mahali Anapoishi:</td><td></td>
                     <td><?php echo $mhusika->phy_address; ?></td>
                 </tr>
                  <tr>
                     <td style="font-weight:bold">Barua Pepe:</td><td></td>
                     <td><?php echo $mhusika->email; ?></td>
                 </tr>
                 <tr>
                     <td style="font-weight:bold">Mahali Alipozaliwa :</td><td></td>
                     <td><?php echo $mhusika->place_of_birth; ?></td>
                 </tr>
                 <tr>
                     <td style="font-weight:bold">Utaifa:</td><td></td>
                     <td><?php echo $mhusika->nationality_name; ?></td>
                 </tr>
                 <tr>
                     <td style="font-weight:bold">Kabila:</td><td></td>
                     <td><?php echo $mhusika->tribe_name; ?></td>
                 </tr>
                 <tr>
                     <td style="font-weight:bold">Dini :</td><td></td>
                     <td><?php echo $mhusika->religion_name; ?></td>
                 </tr>
                 <tr>
                     <td style="font-weight:bold">Hali ya Ndoa:</td><td></td>
                     <td><?php echo $mhusika->marital_statusname; ?></td>
                 </tr>
                 <tr>
                     <td style="font-weight:bold">Kiwango cha Elimu:</td><td></td>
                     <td><?php echo $mhusika->education_level; ?></td>
                 </tr>
                 <tr>
                     <td style="font-weight:bold">Kazi afanyayo :</td><td></td>
                     <td><?php echo $mhusika->occupation_name; ?></td>
                 </tr>
                 <tr>
                     <td style="font-weight:bold">Namba ya Kitambulisho :</td><td></td>
                     <td><?php echo $mhusika->type_name.' - '.$mhusika->id_no; ?></td>
                 </tr>       
             </table>

<?php } ?>
