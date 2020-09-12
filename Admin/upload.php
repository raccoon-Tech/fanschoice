<?php
 include_once 'config.php';?>
 <!-- fetch form data -->
 <?php

$target_dir = "../view/upload/";

?>
<?php
$file_name = $target_dir . basename($_FILES ["image"] ["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
if(isset($_POST["submit"])){
    
    $check = getimagesize($_FILES["image"] ["tmp_name"]);
    if($check !== false){
        echo "file is an image - ". $check["mime"].".";
        $uploadOk = 1;
    }
    else{
        echo "file is not an image.";
        $uploadOk = 0;
    }
    }
// limit file size
if (file_exists($file_name)){
     echo "sorry file aleady exist.";
 $uploadOk = 0;
 }
 if($_FILES['image'] ['size'] > 500000){
     echo "sorry, your file is too large.";
     $uploadOk = 0;
 }
// limy file type
if($imageFileType != "jpg"
 && $imageFileType != "jpeg" 
 && $imageFileType != "png" 
 && $imageFileType != "gif" ){
    echo "image type not supported  sorry! only jpg,jpeg,png and gif is surported";
    $uploadOk = 0;
} 
if($uploadOk ==0){
    echo "sorry! file was not uploaded";
}
else{
    if(move_uploaded_file($_FILES["image"]["tmp_name"],$file_name)){
        // $ff = mysqli_query($conn, "INSERT INTO post (images,title,body,slug,categories,date,author_name,tags)VALUES
        // ('$file_name','$title','$body','$slug','$category',NOW(),'$author_name','$tags')");
        // if($ff){
            $stmt = $conn->prepare("INSERT INTO post(images,category,title,author,body,publishStatus,date) VALUES (?,?,?,?,?,?,now())");
            $stmt->bind_param('sssssi',$file_name,$category,$title,$author,$body,$status);
        $title =($_POST['title']);
        $body =($_POST['editorarticle']);
        $category =($_POST['category']);
        $author = ($_POST['author']);
        $status = ($_POST['status']);

            $stmt->execute();
       
            echo ("<script> window.alert('upload successfull');</script>");

     header("location:index.php");
     

    
        }

        else{
        echo "sorry there was  an error uploading your file. ";
    header("location:index.php");
    }
    $stmt->close();
}

$conn->close();
?>