$(document).ready(function() {
  $('#summernote').summernote();
  $('#summernote').summernote({
  height:300,
  minHeight:null,
  maxHeight:null,
  focus: true,
});
});

function fixeds(){
    var a=$("body").scrollTop();
    if(a>103){
    $('.note-toolbar').css({"position":"fixed","top":"50px"});
    }
    else{
    $('.note-toolbar').css({"position":"relative","top":"0px"});
    }
} 

$(document).ready(function(){
  window.onscroll = function () {
        fixeds();
}
});

