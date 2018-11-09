<?php
session_start();

var_dump($_SESSION['filename']);
function getTitle()
{
    return $_POST['title'];
}

function getName()
{
    return $_POST['firstname'] . ' ' . $_POST['lastname'];
}

function getCategory()
{
    return $_POST['category'];
}

function getQuote()
{
    return $_POST['quote'];
}

function getContent()
{
    return $_POST['content'];
}

function getTags()
{
        $tags = explode(",",$_POST['tags']);
        $taglist = "";
        foreach ($tags as $tag)
        {
         $taglist .= "<li><a href='#'>{$tag}</a></li> " ;
        }
        
        return htmlspecialchars_decode($taglist);
}

function getFeaturedImg()
{
  return $_SESSION['prevfilename'];
}




?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title><?php echo getTitle() ?> | blog</title>

    <style>
        body {
            font-size: 1.2em
        }

        .article,
        .feat {
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12) !important;
        }
        ul{list-style-type: none;}
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5 mb-5  p-4 article">
                <div class="">
                    <img class="feat img-fluid" src="../../uploads/<?php echo getFeaturedImg() ?>">
                </div>

                <div class="h1 text-center mt-2"><?php echo getTitle() ?></div>
                <div class="text-center h5 text-muted"><?php echo getName() ?></div>
                <hr>
                <div class="text-center blockquote"> <?php echo getQuote() ?></div>
                <hr>
                <div class="mt-3 content ">
                <?php echo getContent() ?>
                </div>
                
                <div class="category mb-2">
                    <p class="p-0 m-0">Category</p>
                    <?php echo getCategory() ?>
                </div>
                
                <div class="tags">
                  <p class="p-0 m-0">Tags:</p>
                   <ul class="p-0">
                      <?php echo getTags() ?>
                   </ul> 
                </div>

            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>