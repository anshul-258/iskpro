<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

function searchDir($dirpath, &$arrfile) {

    $allowedext = array('png', 'jpg', 'jpeg', 'gif');

    $tree = scandir($dirpath);

    foreach ($tree as $t1) {

        $d1 = $dirpath . $t1;

        if ($t1 != '.' && $t1 != '..') {

            if (is_dir($d1)) {

                searchDir($d1 . '/', $arrfile);
            } else {

                if (in_array(strtolower(pathinfo($d1, PATHINFO_EXTENSION)), $allowedext)) {

                    $iinfo = @getimagesize($d1);

                    $arrfile[] = array('url' => str_replace('/var/www/html/admin/public/uploads/blog/', PREFIX.'uploads/blog/', $d1), 'width' => isset($iinfo[0]) ? $iinfo[0] : '', 'height' => isset($iinfo[1]) ? $iinfo[1] : '');
                }
            }
        }
    }
}

$base_path =  public_path('uploads/blog/');

$funcNum = isset($_GET['CKEditorFuncNum']) ? $_GET['CKEditorFuncNum'] : '';

searchDir($base_path, $a);
?>

<!doctype html>

<html>

    <head>

        <meta charset="utf-8">

        <title>Untitled Document</title>

        <style>

            .zitem {

                width:100px;

                height:100px;

                /* required to hide the image after resized

                overflow:hidden;*/

                /* for child absolute position

                position:relative;*/

                /* display div in line */

                float:left;

            }

            .wallpaperlisitng li {

                -moz-border-bottom-colors: none;

                -moz-border-left-colors: none;

                -moz-border-right-colors: none;

                -moz-border-top-colors: none;

                border-color: #cccccc -moz-use-text-color -moz-use-text-color #cccccc;

                border-image: none;

                border-style: solid;

                border-width: 1px;

                float: left;

                line-height: 0;

                padding: 7px !important;

                text-align: center;

                margin-top: -1px;

                margin-left: -1px;

            }

            ul {

                list-style: none;

            }

            .zimg{

                background: #fff url("transparentbg.png") repeat;

                border: 0;

                -webkit-box-shadow: 0 5px 35px rgba(0,0,0,.65);

                box-shadow: 0 5px 35px rgba(0,0,0,.65);

                cursor: pointer;

            }

        </style>

        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>

        <script>

            function getElements(img)

            {

                window.opener.CKEDITOR.tools.callFunction('<?php echo $funcNum; ?>', img.src);

                window.close();

            }

        </script>



    </head>



    <body>

        <ul class="wallpaperlisitng">

            <?php
            echo '';

            foreach ($a as $img) {

                echo '<li><div class="zitem"><img class="zimg" onclick="getElements(this)" src="' . $img['url'] . '" alt="#" title="" width="100" height="100"/></div></li>';
            }

//$CKEditor = isset($_GET['CKEditor']) ? $_GET['CKEditor'] : '';
//$langCode = isset($_GET['langCode']) ? $_GET['langCode'] : '';
//echo "<script type='text/javascript'>window.opener.CKEDITOR.tools.callFunction('$funcNum', '$url');</script>";
            ?>

        </ul>

    </body>

</html>

