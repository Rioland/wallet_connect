<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add</title>
</head>

<body>
    <div class="container">
        <form id="addpf" enctype="multipart/form-data">

            <br>
            <br>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Wallet Name</label>
                <input type="text" class="form-control" name="name" required id="exampleFormControlInput1" placeholder="Wallet name">
                <input type="hidden" name="action" value="save">
            </div>
            <br>
            <div>
                <label for="formFileLg" class="form-label">Wallet image</label>
                <input class="form-control form-control-lg" required id="formFileLg" name="image" type="file">
            </div>
            <br>
            <button type="submit" class="btn btn-success" id="btn">Success</button>

        </form>
    </div>
    <script>
        $(document).ready(function() {
            $("#addpf").submit(function(e) {
                e.preventDefault();
                var image = $("#formFileLg").val();
                if (image == '') {
                    alert("please choose image");
                    return false;
                } else {
                    var ext = image.split('.').pop().toLowerCase();
                    if (jQuery.inArray(ext, ['png', 'jpeg', 'jpg', 'svg', 'webp']) == -1) {
                        alert("invalid formate");
                        return false;
                    }else{
                        $.ajax({
                            type: "post",
                            url: "handler",
                            data: new FormData(this),
                            dataType: "text",
                            contentType:false,
                            processData:false,
                            success: function (response) {
                                alert(response);
                                return false;
                            }
                        });
                    }

                }

            });
        });
    </script>
</body>

</html>