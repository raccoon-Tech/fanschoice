<!DOCTYPE html>
<?php include 'model/config.php' ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/responsive.css">
<script src="css/fontawesome-free-5.13.0-web/js/all.js"></script>
<script src="css/ckeditor/ckeditor.js"></script>
    <title>WESTCORP | HOME </title>
</head>
<body>
    <!-- start header -->
   <div class="header">
       <!-- logo -->
<h3 class="logo">LOGO</h2>
    <!-- container for icons in header -->
    <div class="header_nav">
<a href="#"><i class="fa fa-user-circle "title="Admin profile"></i></a>
<a href="#"><i class="fas fa-question-circle"title="Help"></i></a>
<a href="#"><i class="fas fa-cog fa-pulse"title="settings"></i></a>
<a href="#"><i class="fa fa-sign-out-alt "title="Log-out"></i></a>
<!-- close div for header icons -->
    </div>
<!-- close header -->
   </div> 
   <div class="nav"id="myTopnav">
    <button class="icon"onclick="nav()"><i class="fa fa-bars"></i></button>
<a href="#published_article"class="w3-btn">Published Article</a>
<a href="#unpublished_article"class="w3-btn">Unpublished Article</a>
<a href="#new_article"class="w3-btn">New Article</a>
<a href="#"class="w3-btn">Products</a>
<a href="#"class="w3-btn">Help</a>
<!-- <a href="javascript:void(0);"class="icon"onclick="nav()"><i class="fa fa-bars"></i></a> -->

   </div>
   <div class="management w3-center">
       <h4><strong>MANAGEMENT</strong></h4>
      
       <input type="checkbox" name="filter_select_all" id="filter_select_all"/>
        <a href="#">Delete Selected</a>
        <form action="" method="post">
       <h5 class="w3-grey">Sort By:</h5>
       <label>By Title:</label>
       <input type="text" name="filter_title" id="filter_title" placeholder="Title">
       <label >By Category:</label>
       <input type="text" name="filter_categories" id="filter_categories"placeholder="Categories">
       <label >By Date:</label>
       <input type="date" name="filter_date" id="filter_date"placeholder="Date">
       <input class="w3-btn w3-green w3-ripple" type="submit" >
   </form>
   </div>
   <div class="published_article"id="published_article">
       <table class="w3-table w3-striped">
           
              <caption><h4><strong>PUBLISHED ARTICLE <span class="caption-arrow"><i class="fa fa-arrow-right"></i></span></strong></h4></caption>            
           <tr class="w3-grey  w3-table">
               <th class="th1">
    <input type="checkbox" name="published_article_select" id="published_article_select"/></th>
               <th class="th1">Title</th>
               <th class="th1">Date</th>
               <th class="th1">Author</th>
               <th class="th1 ">Category</th>
               <th class="th1" ></th>
               <th class="th1">
               </th>
           </tr>
           <tr>
               <td class="td"><input type="checkbox" name="published_article_select" id="published_article_select"/></td>
           
           <td class="td">
               this is a demo dispaly pls no now
           </td>
           <td class="td">20/01/2020</td>
           <td class="td">westlove</td>
<td>lifestyle</td>
<td class=" btn w3-text-green td"><a href="javascript:void(0)"onclick="document.getElementById('edit-page').style.display='block'">
    <i class="fas fa-edit"></i></a></td>
<td class=" btn w3-text-red td"><a href=""><i class="fas fa-trash-alt"></i></a></td>
        </tr>
        <tr>
            <td class="td"><input type="checkbox" name="published_article_select" id="published_article_select"/></td>
        
        <td class="td">
            this is a demo dispaly pls no now
        </td>
        <td class="td">20/01/2020</td>
        <td class="td">westlove</td>
<td>lifestyle</td>
<td class=" btn w3-text-green td"><a href=""><i class="fas fa-edit"></i></a></td>
<td class=" btn w3-text-red td"><a href=""><i class="fas fa-trash-alt"></i></a></td>
 
</tr>
     <tr>
        <td class="td"><input type="checkbox" name="published_article_select" id="published_article_select"/></td>
    
    <td class="td">
        this is a demo dispaly pls no now
    </td>
    <td class="td">20/01/2020</td>
    <td class="td">westlove</td>
<td>lifestyle</td>
<td class=" btn w3-text-green td"><a href=""><i class="fas fa-edit"></i></a></td>
<td class=" btn w3-text-red td"><a href=""><i class="fas fa-trash-alt"></i></a></td>
 </tr>
 <tr>
    <td class="td"><input type="checkbox" name="published_article_select" id="published_article_select"/></td>

<td class="td">
    this is a demo dispaly pls no now
</td>
<td class="td">20/01/2020</td>
<td class="td">westlove</td>
<td>lifestyle</td>
<td class=" btn w3-text-green td"><a href=""><i class="fas fa-edit"></i></a></td>
<td class=" btn w3-text-red td"><a href=""><i class="fas fa-trash-alt"></i></a></td>
 
</tr>
<tr>
    <td class="td"><input type="checkbox" name="published_article_select" id="published_article_select"/></td>

<td class="td">
    this is a demo dispaly pls no now
</td>
<td class="td">20/01/2020</td>
<td class="td">westlove</td>
<td>lifestyle</td>
<td class=" btn w3-text-green td"><a href=""><i class="fas fa-edit"></i></a></td>
<td class=" btn w3-text-red td"><a href=""><i class="fas fa-trash-alt"></i></a></td>
</tr>
</table>
<div class="w3-bar w3-border w3-roumd">
    
        <a href="#"class="w3-button w3-black">&#10094; Previous</a>
        <a href="#"class="w3-button w3-right w3-black">Next &#10095;</a>
    </div>
    <div></div>

   </div>
   <div class="unpublished_article"id="unpublished_article">
    <table class="w3-table w3-striped">
        
           <caption><h4><strong>UNPUBLISHED ARTICLE <span class="caption-arrow"><i class="fa fa-arrow-right"></i></span></strong></h4></caption>            
        <tr class="w3-grey  w3-table">
            <th class="th1">
 <input type="checkbox" name="published_article_select" id="unpublished_article_checkbox"/></th>
            <th class="th1">Title</th>
            <th class="th1">Date</th>
            <th class="th1">Author</th>
            <th class="th1 ">Category</th>
            <th class="th1" ></th>
            <th class="th1">
            </th>
            <th class="th1"></th>
        </tr>
        <tr>
            <td class="td"><input type="checkbox" name="unpublished_article_checkbox" id="unpublished_article_checkbox"/></td>
        
        <td class="td">
            this is a demo dispaly pls no now
        </td>
        <td class="td">20/01/2020</td>
        <td class="td">westlove</td>
<td>lifestyle</td>
<td class=" btn w3-text-green td"><a href=""><i class="fas fa-edit"></i></a></td>
<td class=" btn w3-text-red td"><a href=""><i class="fas fa-trash-alt"></i></a></td>
<td class=" btn w3-text-black td"><a href="#"><strong> upload </strong></a></td>

     </tr>
     <tr>
         <td class="td"><input type="checkbox" name="published_article_select" id="published_article_select"/></td>
     
     <td class="td">
         this is a demo dispaly pls no now
     </td>
     <td class="td">20/01/2020</td>
     <td class="td">westlove</td>
<td>lifestyle</td>
<td class=" btn w3-text-green td"><a href=""><i class="fas fa-edit"></i></a></td>
<td class=" btn w3-text-red td"><a href=""><i class="fas fa-trash-alt"></i></a></td>
<td class=" btn w3-text-black td"><a href="#"><strong>upload</strong></a></td>
  </tr>
  <tr>
     <td class="td"><input type="checkbox" name="unpublished_article_" id="unpublished_article_select"/></td>
 
 <td class="td">
     this is a demo dispaly pls no now
 </td>
 <td class="td">20/01/2020</td>
 <td class="td">westlove</td>
<td>lifestyle</td>
<td class=" btn w3-text-green td"><a href=""><i class="fas fa-edit"></i></a></td>
<td class=" btn w3-text-red td"><a href=""><i class="fas fa-trash-alt"></i></a></td>
<td class=" btn w3-text-black  td"><a href="#"><strong>upload</strong></a></td>
</tr>
<tr>
 <td class="td"><input type="checkbox" name="unpublished_article_checkbox" id="unpublished_article_checkbox"/></td>

<td class="td">
 this is a demo dispaly pls no now
</td>
<td class="td">20/01/2020</td>
<td class="td">westlove</td> 
<td>lifestyle</td>
<td class=" btn w3-text-green td"><a href=""><i class="fas fa-edit"></i></a></td>
<td class=" btn w3-text-red td"><a href=""><i class="fas fa-trash-alt"></i></a></td>
<td class=" btn w3-text-black  td"><a href="#"><strong>upload</strong></a></td>
</tr>
<tr>
 <td class="td"><input type="checkbox" name="published_article_checkbox" id="published_article_checkbox"/></td>

<td class="td">
 this is a demo dispaly pls no now
</td>
<td class="td">20/01/2020</td>
<td class="td">westlove</td>
<td>lifestyle</td>
<td class=" btn w3-text-green td"><i class="fas fa-edit"></i></td>
<td class=" btn w3-text-red t v d"><i class="fas fa-trash-alt"></i></td>
<td class="  w3-text-black td "><a href="#"><strong>upload</strong></a></td>
</tr>
</table>
<div class="w3-bar w3-border w3-roumd">
 
     <a href="#"class="w3-button w3-black">&#10094; Previous</a>
     <a href="#"class="w3-button w3-right w3-black">Next &#10095;</a>
 </div>
   </div>
<div class="new_article"id="new_article">
    <h4 class="w3-center"><strong>NEW ARTICLE</strong></h4>
    <form action="upload.php" method="post"enctype="multipart/form-data"class="w3-form">
        <label for="main_image"><strong>MAIN IMAGE:</strong></label>
        <input type="file" name="image" id="image">
        
        <label for="body"><strong>ARTICLE(required):</strong></label>
       
    <textarea name="editorarticle"id="editorarticle"cclass="textarea"placeholder="blog post "required>
        
    </textarea>
    <label for=""><strong>TITLE(required)</strong></label>
     <input type="text" name="title"id="title"required> 
     <label for="body-preview "><strong>BODY PREVIEW:</strong></label>
    <textarea name="preview" id="preview"required>
    </textarea>
    <label for="author">AUTHOR(required)</label>

    <input type="text" name="author" id="author" required/>
    <label for="category">CATEGORY(category): </label>
    <select name="category" id="category"required>

    
<option disabled selected hidden value="0"class="w3-grey w3-text-white"><b>Select Category:</b></option>
<option value="music">Music</option>
<option value="fashion">Fashion</option>
<option value="food">Food</option>
<option value="DIY">DIY</option>
<option value="sports">Sports</option>
<option value="fitness">Fitness</option>
<option value="gamming">Gamming</option>
<option value="education">Education</option>
<option value="technology">Technology</option>
    </select>
    <select name="status" id="status"class="w3-margin-top"required>

<option disabled selected hidden value="0"class="w3-grey w3-text-white"><b>PUBLISH NOW:</b></option>
<option value="1">Publish Now</option>
<option value="0">Publish Later</option>
</select>

<input type="submit" class="w3-btn w3-green w3-padding w3-margin-top" value="submit">

    </form>


</div>
<button onclick="topFunction()"class="scroll-up"id="scrollUp"title="Go to the top"><i class="fa fa-arrow-circle-up"></i></button>
<!-- EDIT PAGE MODAL POP UP -->
<div id="edit-page"class="w3-modal w3-card-2 w3-animate-zoom">
<div class="w3-modal-content">
    <header class="w3-container w3-black w3-center">
        <span onclick="document.getElementById('edit-page').style.display='none'"class="w3-button w3-display-topright w3-xxlarge">&times;

        </span>
        <h2>EDIT ARTICLE</h2>
    </header>
<div class="w3-container">
<!--modal content -->
<div class="edit_article"id="edit_article">
<form action="" method="post"enctype="multipart/form-data"class="w3-form">
    <label for="main_image"><strong>MAIN IMAGE:</strong></label>
    <input type="file" name="main_image" id="main_image">
    <label for="alt_image"><strong>ALTERNATE IMAGE:</strong></label>
    <input type="file" name="alt_image" id="alt_image"/>

    <label for="body"><strong>ARTICLE(required):</strong></label>
    

<textarea name="body" id="body"placeholder=""contentedictable="true"> 
</textarea>
<label for=""><strong>TITLE(required)</strong></label>
 <input type="text" name="title"id="title"required> 
 <label for="body-preview "><strong>BODY PREVIEW:</strong></label>
<textarea name="body-preview" id="body-preview">
</textarea>
<label for="author">AUTHOR(required)</label>
<input type="text" name="author" id="author" required/>
<label for="category">CATEGORY(category): </label>
<select name="category" id="category"required>


<option disabled selected hidden value="0"class="w3-grey w3-text-white"><b>Select Category:</b></option>
<option value="music">Music</option>
<option value="fashion">Fashion</option>
<option value="food">Food</option>
<option value="DIY">DIY</option>
<option value="sports">Sports</option>
<option value="fitness">Fitness</option>
<option value="gamming">Gamming</option>
<option value="education">Education</option>
<option value="technology">Technology</option>
</select>
<select name="published-status" id="published-status"class="w3-margin-top"required>

<option disabled selected hidden value="0"class="w3-grey w3-text-white"><b>PUBLISH NOW:</b></option>
<option value="1">Publish Now</option>
<option value="0">Publish Later</option>
</select>

<input type="submit" class="w3-btn w3-green w3-padding w3-margin-top" value="submit">

</form>
</div>
</div>
<footer class="w3-container w3-black   w3-center">
   <p> WEST CORPERATIONS</p>
</footer>
</div>

</div>

<div class="footer">
    <h3 class="logo">LOGO</h3>
    <div class="footer_nav">
<a href="#"><i class="fab fa-facebook"title="contact on facebook"></i></a>
 <a href="#"><i class="fab fa-twitter"title="contact on twitter"></i></a>
<a href="#"><i class="fab fa-whatsapp"title="message on whatsapp"></i></a>
 <a href="#"><i class="fa fa-envelope"title="Email Us"></i></a>
</div>
</div>


<script src="script/script.js"></script>
</body>
</html>