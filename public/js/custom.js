var current_language = $('.current_language').val();
setButtonLanguage();


function setButtonLanguage(){
    console.log(current_language);
    if(current_language == 'vi'){
        $('.btn-vi').addClass('btn btn-primary');
        $('.btn-en').addClass('btn btn-default');
    }else{
        $('.btn-en').addClass('btn btn-primary');
        $('.btn-vi').addClass('btn btn-default');
    }
}