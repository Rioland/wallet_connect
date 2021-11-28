
<div id="wal">
<!-- Button trigger modal -->
<br>
<br>
<button type="button" class="btn btn-primary addwa">
 Add wallet
</button>



                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Date</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $q1 = "SELECT * FROM `Wallets`";
                            $stm = $con->query($q1);
                            $cont = 1;
                            if ($stm->rowCount() > 0) {
                                for ($i = 0; $i < $stm->rowCount(); $i++) {
                                    $data = $stm->fetch();
                                    //    $cont++;


                            ?>

                                    <tr>
                                        <td><?php echo $cont ?> </th>
                                        <td><?php echo $data->name ?></td>
                                        <td>  <img src="assets/img/<?php echo $data->image ?>" width="50px" height="50px"> </td>
                                        <td><?php echo $data->date ?></td>
                                        <td>

                                        <button type="button" class="btn btn-outline-danger cli "  id="<?php echo $data->sn ?>"  > del</button>
                                        <button type="button" class="btn btn-outline-info" > edit</button>
                                        </td>
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
                             from:"wa"
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


               $(".addwa").click(function (e) { 
                   e.preventDefault();
                   $.ajax({
                       type: "post",
                       url: "handler",
                       data: {
                           router:"pages/addwallet.php"
                       },
                       dataType: "text",
                       success: function (response) {
                        //    alert(response)
                        window.location.reload();
                        consol.log(response)

                       }
                   });
               });
</script>