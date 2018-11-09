<?php
session_start();

//echo $_SESSION['pubfilename'];

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

function getExcerpt()
{
    return $_POST['excerpt'];
}

function getTagRaw()
{
     $tags = explode(",",$_POST['tags']);
    return $tags;
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
  return $_SESSION['pubfilename'];
}

//SQL STuff
    
    insertPost();
    
    function insertPost()
    {
        $servername = "localhost";
        $username = "{your-username}";
        $password = "{your-password}";
        $dbname = "{your-dbname}";
        $conn =  new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);  
            // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $name = 1;
        $title = getTitle();
        $featimg = getFeaturedImg();
        $excerpt = getExcerpt();
        $quote = getQuote();
        $content = getContent();
        $category = getCategory();
        
    try {
        
        // prepare sql and bind parameters
        $stmt = $conn->prepare("
  INSERT INTO c_blogposts (post_id, post_author, post_title, post_featimg, post_excerpt, post_quote, post_content, post_date, post_category,post_status, post_commentcount) 
  VALUES ('', :post_author, :post_title, :post_featimg, :post_excerpt, :post_quote, :post_content, NOW(), :post_category,'publish', '')
        ");
        $stmt->bindParam(':post_author',$name);
        $stmt->bindParam(':post_title', $title);
        $stmt->bindParam(':post_featimg', $featimg);
        $stmt->bindParam(':post_excerpt', $excerpt);
        $stmt->bindParam(':post_quote', $quote);
        $stmt->bindParam(':post_content', $content);
        $stmt->bindParam(':post_category',$category);      
        
       $stmt->execute();
     //Insert to second table
        $lastId = $conn->lastInsertId();
        $tags = getTagRaw();
        
        foreach ($tags as $tag)
        {
           $stmt = $conn->prepare("
            INSERT INTO c_taxonomy (taxonomy_id, taxonomy_tag, post_fk) VALUES ('', :tag, :lastId)");
              $stmt->bindParam(':tag',$tag);
              $stmt->bindParam(':lastId',$lastId);
             $stmt->execute();
        }
        
        

        

        

   // echo "Successful function run";
    }
        catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
        $conn = null;
         
    }
    

?>
