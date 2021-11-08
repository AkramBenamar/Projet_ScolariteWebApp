
<br><br>
<?php
$resp=$rest[0];
$resm=$rest[1];
$ress=$rest[2];
?>






<center><h1>Restauration</h1></center>




<center>

									<form method="POST" action="Rest&update" id="contactForm" name="contactForm" class="contactForm" >
										

                                                    





                                    <table class="restau" style="margin-left: 1px; width:max-content;">

                                                    <tr>

                                                    <td>Jour</td>
                                                    <td>Dimanche</td>
                                                    <td>Lundi</td>
                                                    <td>Mardi</td>
                                                    <td>Mercredi</td>
                                                    <td>Jeudi</td>
                                                    </tr>

                                                    <tr>
                                                    <td>Repas Primaire</td>
                                                    <td> <input type="text" name="dp" id="dp" value=<?=$resp->dimanche()?>  ></td>
                                                    <td> <input type="text" name="lp" id="lp"  value=<?=$resp->lundi()?> > </td>
                                                    <td> <input type="text" name="mp" id="mp" value=<?=$resp->mardi()?>></td>

                                                    <td><input type="text" name="mep" id="mep" value=<?=$resp->mercredi()?>></td>
                                                    <td><input type="text" name="jp" id="jp" value=<?=$resp->jeudi()?>></td>


                                                    </tr>

                                                    <tr>
                                                    <td>Repas Moyen</td>
                                                    <td> <input type="text" name="dm" id="dm" value=<?=$resm->dimanche()?>  ></td>
                                                    <td> <input type="text" name="lm" id="lm"  value=<?=$resm->lundi()?> > </td>
                                                    <td> <input type="text" name="mm" id="mm" value=<?=$resm->mardi()?>></td>

                                                    <td><input type="text" name="mem" id="mem" value=<?=$resm->mercredi()?>></td>
                                                    <td><input type="text" name="jm" id="jm" value=<?=$resm->jeudi()?>></td>


                                                    </tr>


                                                    <tr>
                                                    <td>Repas Secondaire</td>
                                                    <td> <input type="text" name="ds" id="ds" value=<?=$ress->dimanche()?>  ></td>
                                                    <td> <input type="text" name="ls" id="ls"  value=<?=$ress->lundi()?> > </td>
                                                    <td> <input type="text" name="ms" id="ms" value=<?=$ress->mardi()?>></td>

                                                    <td><input type="text" name="mes" id="mes" value=<?=$ress->mercredi()?>></td>
                                                    <td><input type="text" name="js" id="js" value=<?=$ress->jeudi()?>></td>


                                                    </tr>
                                                
                                                    </table>

                                                    <div class="col-md-12">
                                                      <div class="form-group">
                                                         <input type="submit" value="Update" class="btn btn-primary">
                                                         <div class="submitting"></div>
                                                      </div>
                                                   </div>


									</form>
							



                           </center>