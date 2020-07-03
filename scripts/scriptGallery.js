var sliderRes = function(){
  var width = $('#slider').width();
  var height = width* 0.5625;
  $('#slider').height(height);
  var containerWidth=0;
  $('#main_images li').each(function(){
    var parentWidth = $('#slider').width();
    $(this).width(parentWidth) 
    $(this).height(parentWidth*0.5625-100)
    return containerWidth+= $(this).width();
  });
  $('#main_images').width(containerWidth)
  var thumbWidth = 0;
  $('#thumbnails li').each(function(){
    var slideWidth = $(this).width() + parseInt($(this).css('margin-right'));
    return thumbWidth+= slideWidth;
  });
  $('#thumbnails').width(thumbWidth)
};
$(function(){
  sliderRes();
  $('#thumbnails').find('li').first().addClass('active'); $('#main_images').find('li').first().addClass('active');
  $('.main_controls').click(function(){
    var active = $('#main_images').find('.active');
    var parent = $('#main_images');
    if($(this).hasClass('next')){
      if(active.index()===parent.find('li').last().index()-1){
          $(this).hide();
         }
      $('.main_controls.prev').show();
      parent.find('.active').removeClass('active');        
      active.next().addClass('active');
    }else{   
     if(active.index()===parent.find('li').first().index()+1){
          $(this).hide();
      }
     $('.main_controls.next').show();
     parent.find('.active').removeClass('active');
     active.prev().addClass('active');
    }
    var index = parent.find('.active').index();
    $('#thumbnails').find('.active').removeClass('active');
    $('#thumbnails').find('li:eq('+index+')').addClass('active');
    var thumb = $('#thumbnails').find('.active');
    var thumbPosition = thumb.offset().left;
    var thumbRight = thumbPosition+thumb.width();
    var containerPosition = $('#thumb_container').offset().left;
    var containerRight = containerPosition + $('#thumb_container').width();
    var stepSize = thumb.width()+parseInt(thumb.css('margin-right'));
     if(thumbRight > containerRight){
      $('#thumbnails').animate({marginLeft: '-='+stepSize},400);
     }else if(thumbPosition<containerPosition){
       $('#thumbnails').animate({marginLeft: '+='+stepSize},400);
     }
  });
  $('#thumbnails').on('click','li', function(){
    $('#thumbnails .active').removeClass('active');
    $(this).addClass('active');
    var cur =  $('#thumbnails').find('.active').index();
    var bigSlideActive = $('#main_images').find('.active').index();
    if(cur != bigSlideActive){
      $('#main_images').find('.active').removeClass('active');
      $('#main_images').find('li').eq(cur).addClass('active');
    }
    var flagEnd = $('#main_images').find('li').last().index();
    var flagStart = $('#main_images').find('li').first().index();
    var activeImage = $('#main_images').find('.active').index();
    if(activeImage===flagEnd){
      $('.main_controls.next').hide();
    }else if(activeImage===flagStart){
         $('.main_controls.prev').hide();    
    }else{
      $('.main_controls.next, .main_controls.prev').show();
    }
    var rightEdge = $(this).next().offset().left + $(this).next().width();
    var mr= parseInt($(this).css('margin-right'));
    var leftEdge = $(this).prev().offset().left;
    var thisEdge = $(this).offset().left + $(this).width()
    var startEdge = $(this).offset().left
    var containerRight = $('#thumb_container').offset().left+$('#thumb_container').width();
    var containerLeft = $('#thumb_container').offset().left
    if(rightEdge>containerRight || thisEdge>containerRight){
        $('#thumbnails').animate({marginLeft: '-='+($(this).width()+mr)},400)
       }else if(leftEdge< containerLeft|| startEdge< containerLeft){
          $('#thumbnails').animate({marginLeft: '+='+($(this).width()+mr)},400)
       }
  });
});
$(window).resize(function(){
  sliderRes();
});