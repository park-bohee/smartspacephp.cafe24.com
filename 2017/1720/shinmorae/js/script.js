var card=1;
var first=[];
$(function(){
  $('html').animate({scrollTop : $('.card_1').offset().top},100);
  var page_ok=0;
  var menu_ok=1;
  var menu_mode=0;

  var max=$('.card').length;

  //intro
  setTimeout(function(){
    $('.card_1').animate({opacity:1},300,function(){
      $('.head_line_wrap').animate({top:'13%',opacity:1},400,function(){
        page_ok=1;
        first.push(1);
      });
    });
  } ,1000);

  //fullpageing
  $(window).on('wheel',function(event){
    event.preventDefault();
    if(page_ok){
      if(event.originalEvent.wheelDelta<0 && card<max){//아래 드래그
        card+=1;
        page_ok=0;
        $('html').animate({scrollTop : $('.card_'+card).offset().top}, 400,function(){
          if(card==2 && first.indexOf(2)==-1){
            $('.card_2 .collage_img .img_cover:nth-child(1)').animate({opacity:1,top:0},400,function(){
              $('.card_2 .collage_img .img_cover:nth-child(2)').animate({opacity:1,top:0},400,function(){
                $('.card_2 .collage_img .img_cover:nth-child(3)').animate({opacity:1,top:0},400,function(){
                  $('.card_2 .collage_img .img_cover:nth-child(4)').animate({opacity:1,top:0},400,function(){
                    first.push(2);
                    page_ok=1;
                  });
                });
              });
            });
          }else if(card==3 && first.indexOf(3)==-1){

            $('.card_3 .collage_img .img_cover:nth-child(1)').animate({opacity:1,top:0},300,function(){
              $('.card_3 .collage_img .img_cover:nth-child(2)').animate({opacity:1,top:0},300,function(){
                $('.card_3 .collage_img .img_cover:nth-child(3)').animate({opacity:1,top:0},300,function(){
                  $('.card_3 .collage_img .img_cover:nth-child(4)').animate({opacity:1,top:0},300,function(){
                    $('.card_3 .collage_img .img_cover:nth-child(5)').animate({opacity:1,top:0},300,function(){
                      $('.card_3 .collage_img .img_cover:nth-child(6)').animate({opacity:1,top:0},300,function(){
                        first.push(3);
                        page_ok=1;
                      });
                    });
                  });
                });
              });
            });
          }else{
            page_ok=1;
          }
        });
      }else if(event.originalEvent.wheelDelta>0 && card>1){//위 드래그
        card-=1;
        page_ok=0;
        $('html').animate({scrollTop : $('.card_'+card).offset().top}, 400,function(){
          page_ok=1;
        });

      }
    }
  });

  //window size change event
  $(window).resize(function(){
    $('html').animate({scrollTop : $('.card_'+card).offset().top}, 0);
  });
  $(document).on('keydown',function(event){
    var key = event.keyCode;

    var prohibition = [32,38,40];
    if(prohibition.indexOf(key)!=-1){
      event.preventDefault();
    }
  });

  // head_line hover event
  $('.card_1 .head_line').hover(
    function() {
      $( this ).css({color:'rgba(255,255,255,1)'});
      $('.card_1 .back_dark').css({background:'rgba(0,0,0,0.5)'})
    }, function() {
      $( this ).css({color:'rgba(255,255,255,0.5)'});
      $('.card_1 .back_dark').css({background:'rgba(0,0,0,0)'});
    }
  );

  //popdown
  $('.card_2 .back_dark,.card_3 .back_dark').on('click',function(){
    $(this).animate({opacity:'0'},500,function(){
      $(this).css({display:'none'});
    });
  });
  $('.menu').on('click',function(){
    if(menu_ok==1 && menu_mode==0){
      menu_ok=0;
      $('.menu div:nth-child(2)').css({height:0});
      setTimeout(function(){
        $('.menu div:nth-child(1)').css({left:'50%',transform:'translateX(-50%) rotateZ(45deg)'});
        $('.menu div:nth-child(3)').css({left:'50%',transform:'translateX(-50%) rotateZ(-45deg)'});
        $('.card_fix').css({width:'100%'});
        $('.card_fix .menu_card').css({height:'100%'});
        $('.ch_len span,.sns i').css({color:'#333'});
        $('.boundary-top,.boundary-bottom,.menu div').css({background:'#333'});
        $('.ch_len li span').attr('class','in_menu');
        setTimeout(function(){
          $('.card_fix .menu_card .line2').css({width:'20%'});
          setTimeout(function(){
            $('.card_fix .menu_card .line1').css({height:'100%'});
            setTimeout(function(){
              $('.card_fix .menu_card ul li:nth-child(3)').css({opacity:1,left:0});
              setTimeout(function(){
                $('.card_fix .menu_card ul li:nth-child(4)').css({opacity:1,left:0});
                setTimeout(function(){
                  $('.card_fix .menu_card ul li:nth-child(5)').css({opacity:1,left:0});
                  setTimeout(function(){
                    $('.card_fix .menu_card ul li:nth-child(6)').css({opacity:1,left:0});
                    setTimeout(function(){
                      $('.card_fix .menu_card ul li:nth-child(7)').css({opacity:1,left:0});
                      menu_mode=1;
                      menu_ok=1;
                    },200);
                  },200);
                },200);
              },200);
            },500);
          },200);
        },500);
      }, 500);
    }else if(menu_ok==1 && menu_mode==1){
        menu_ok=0;
        $('.card_fix .menu_card ul li:nth-child(7)').css({opacity:0,left:'100px'});
        setTimeout(function(){
          $('.card_fix .menu_card ul li:nth-child(6)').css({opacity:0,left:'100px'});
          setTimeout(function(){
            $('.card_fix .menu_card ul li:nth-child(5)').css({opacity:0,left:'100px'});
            setTimeout(function(){
              $('.card_fix .menu_card ul li:nth-child(4)').css({opacity:0,left:'100px'});
              setTimeout(function(){
                $('.card_fix .menu_card ul li:nth-child(3)').css({opacity:0,left:'100px'});
                setTimeout(function(){
                  $('.card_fix .menu_card .line1').css({height:'0'});
                  setTimeout(function(){
                    $('.card_fix .menu_card .line2').css({width:'0'});
                    setTimeout(function(){
                      $('.ch_len span,.sns i').css({color:'#fff'});
                      $('.boundary-top,.boundary-bottom,.menu div').css({background:'#fff'});
                      $('.ch_len li span').attr('class','default');
                      $('.card_fix .menu_card').css({height:'0%'});
                      $('.menu div:nth-child(1)').css({left:'35%',transform:'translateX(-50%)'});
                      $('.menu div:nth-child(3)').css({left:'65%',transform:'translateX(-50%)'});
                      setTimeout(function(){
                        $('.menu div:nth-child(2)').css({height:'60%'});
                        $('.card_fix').css({width:'60px'});
                        menu_mode=0;
                        menu_ok=1;
                      }, 500);
                    },200);
                  },500);
                },200);
              },200);
            },200);
          },200);
        },200);
      }
  });
});

var popup = function(img_no,page_no,gif){
  if(gif){
    $('.card_'+page_no+' .back_dark').css({display:'block'}).animate({opacity:'1'},400);
    $('.card_'+page_no+' .alert').css({backgroundImage:'url(image/'+img_no+'.gif)'});
  }else{
    $('.card_'+page_no+' .back_dark').css({display:'block'}).animate({opacity:'1'},400);
    $('.card_'+page_no+' .alert').css({backgroundImage:'url(image/'+img_no+'.jpg)'});
  }
};
