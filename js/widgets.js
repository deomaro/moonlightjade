class Loader {
  show(){
    $('#loader').fadeIn();
  }
  hide(){
    $('#loader').fadeOut();
  }
}

function tellUser(msg){
  document.getElementById('toast').innerHTML = msg;
  $('#toast').fadeIn();
}


function putLoader(divId){
  document.getElementById(divId).style.position = 'relative';
  document.getElementById(divId).innerHTML = '<div class="loadingDiv"></div>';
}

function navTo(id){
  $('.mainDiv').css('display', 'none');
  $('.navbar-collapse').collapse('hide');
  $('#'+id).css('display', 'block');
  $('html, body').animate({
        scrollTop: $("#"+id).offset().top
  }, 300);
}
