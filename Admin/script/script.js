function nav(){
    var x= document.getElementById("myTopnav");
    if(x.className==="nav"){
        x.className += "responsive";
    }else{
        x.className ="nav"
    }
}
var scroll = document.getElementById("srollUp");
window.onscroll = function(){scrollFunction()};
function scrollFunction(){
    if(document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20){
        scroll.style.display = "block";
    }else{
        scroll.style.display = "none";
    }

}
function topFunction(){
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
var modal = document.getElementById('edit-page');
// window.onclick
CKEDITOR.replace('editorarticle');
