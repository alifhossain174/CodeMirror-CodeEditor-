<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Hello, world!</title>
    <link href="css/codemirror.css" rel="stylesheet">
    <link href="css/themes/monokai.css" rel="stylesheet">
    <link href="css/themes/darcula.css" rel="stylesheet">
    <link href="css/themes/material.css" rel="stylesheet">
    <link href="css/themes/ayu-dark.css" rel="stylesheet">
</head>

<body>

        <?php
            //initially
            $comment = null;

            //if the form is submitted
            if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['preview-form-comment'])) {
                $comment = $_POST['preview-form-comment'];
            }
        ?>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 bg-info mt-5">
                        <form id="preview-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <textarea id="editor" name="preview-form-comment" class="w-100 bg-success"></textarea>
                            <textarea id="editor" name="preview-form-comment" class="w-100 bg-success"></textarea>
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <div id="preview-comment"><?php echo $comment; ?></div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script src="js/codemirror.js"></script>
        <script src="js/xml.js"></script>
        <script src="js/php.js"></script>
        <script src="js/javascript.js"></script>
        <script src="js/python.js"></script>
        <script src="js/addons/closetag.js"></script>
        <script src="js/addons/closebrackets.js"></script>
        <script>
            var editor = CodeMirror.fromTextArea(document.getElementById('editor'), {
                mode: "javascript",
                theme: "material",
                lineNumbers: true,
                autoCloseTags: true,
                autoCloseBrackets: true
            });
            editor.setSize("100%", "400");

            // $(document).ready(function(){
            //     //code here...
            //     var code = $(".codemirror-textarea")[0];
            //     var editor = CodeMirror.fromTextArea(code, {
            //         lineNumbers : true
            //     });

            //     //when form submitted
            //     $("#preview-form").submit(function(e){
            //         var value = editor.getValue();
            //         if(value.length == 0) {
            //             alert("Missing comment!");
            //         }
            //     });
            // });
        </script>
</body>

</html>