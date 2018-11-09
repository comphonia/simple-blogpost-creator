<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">

    <title>Simple Blog Post Creator</title>

    <style>
        p{font-size: 1.0em;}   
   </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="col-12 mb-5">
                    <div class="jumbotron bg-info">
                        <div class="display-1 text-light text-center">
                            <p> Post Creator</p>
                        </div>
                    </div>

                    <form action="assets/php/sql-publish.php" target="_blank" enctype="multipart/form-data" method="post" id="postform">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Post Title</span>
                            </div>
                            <input type="text" name="title" class="form-control" placeholder="The Start of a New Dawn" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="">Author's First and last name</span>
                            </div>
                            <input type="text" name="firstname" placeholder="John" class="form-control">
                            <input type="text" name="lastname" placeholder="Doe" class="form-control">
                        </div>

                        <label for="basic-url">Upload Featured Image (1920x1281)</label>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" name="picture" class="custom-file-input" id="inputGroupFile02">
                                <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                            </div>

                            <div class="input-group-append">
                                <button class="input-group-text upload" id="uploadbtn" name="upload" type="submit">Upload</button>
                                <span class="uploadResult"></span>
                            </div>

                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Category</label>
                            </div>
                            <select class="custom-select" name="category" id="inputGroupSelect01">
                                <option selected>Choose...</option>
                                <option value="game-development">Game Development</option>
                                <option value="web-development">Web Development</option>
                                <option value="programming">Programming</option>
                                <option value="technology">Technology</option>
                                <option value="databases">Databases</option>
                                <option value="misc">Misc</option>
                                <option value="mis">MIS</option>
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Tags (use csv) </span>
                            </div>
                            <input type="text" name="tags" class="form-control" placeholder="web,update,js" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Excerpt (Max character count : 80)</span>
                            </div>
                            <textarea class="form-control" maxlength="80" name="excerpt" placeholder="<p> Enter all html <span class='redthis'> elements </span> here </p>" aria-label="With textarea"></textarea>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Quote (Max character count : 80)</span>
                            </div>
                            <textarea class="form-control" maxlength="80" name="quote" placeholder="<p> Enter all html <span class='redthis'> elements </span> here </p>" aria-label="With textarea"></textarea>
                        </div>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Content</span>
                            </div>
                            <textarea class="form-control" rows="7" name="content" placeholder="<p> Enter all html <span class='redthis'> elements </span> here </p>" aria-label="With textarea"></textarea>
                        </div>

                        <div class="col p-0 d-flex mt-3 justify-content-between">
                            <button type="button" name="template" id="samplebtn" class="btn btn-dark">Load Sample</button>
                            <button type="submit" name="preview" id="previewbtn" class="btn btn-info">Preview Post</button>
                            <button type="submit" name="publish" id="publishbtn" class="btn btn-success">Publish Post</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="assets/js/functionality.js"></script>
</body>

</html>
