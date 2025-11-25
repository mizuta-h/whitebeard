window.onload = function () {
  var nav = document.getElementById('nav-wrapper');
  var hamburger = document.getElementById('js-hamburger');
  var blackBg = document.getElementById('js-black-bg');

  hamburger.addEventListener('click', function () {
      nav.classList.toggle('open');
  });
  blackBg.addEventListener('click', function () {
      nav.classList.remove('open');
  });
};






jQuery(document).ready(function($) {

  var $offset = jQuery( '#gHeader' ).offset();
jQuery( window ).scroll( function () {
    if( jQuery( window ).scrollTop() > $offset.top  ) {
        jQuery( '#gHeader').addClass( 'fixed' );
        jQuery('#nav-wrapper').removeClass( 'open' );
    } else {
        jQuery('#gHeader').removeClass( 'fixed' );
}
});

  $(".video").modaal({type:'video'});
	
  $('#contactForm').validate({
   rules: {
  'お名前': {
      required: true,
    },  
    'メールアドレス': {
      required: true,
      email: true,
    }, 
    '内容': {
      required: true,
    },
   }, 
   messages: {
     'お名前': {
      required: '必須入力です',
     }, 
     'メールアドレス': {
      required: '必須入力です',
      email: 'メールアドレスの形式ではありません',
     }, 
     '内容': {
      required: '必須入力です',
     },
   }, 
   
   errorPlacement: function (err, element) {
    element.before(err);
}
  
  });


});
  

document.addEventListener('DOMContentLoaded', function () {
    const main = new Main();
});

class Main{
  constructor() {
    this._observers = [];
    this._init();
  }

  set observers(val){
    this._observers.push(val);
  }

  get observers(){
    return this._observers;
  }

  _init(){
    this._scrollInit();
  }

  _inviewAnimation (el, inview){
    if(inview) {
      el.classList.add('is-visible');
    } else {
      el.classList.remove('is-visible');
    }
  }



  _scrollInit() { //プライベートメソッド
    this.observers = new ScrollObserver('.is-right-slide', this._inviewAnimation, {once:true,rootMargin:"50px",threshold: 0.2,})
	  this.observers = new ScrollObserver('.is-left-slide', this._inviewAnimation, {once:true,rootMargin:"50px",threshold: 0.2,})
	  this.observers = new ScrollObserver('.is-down-slide', this._inviewAnimation, {once:true,rootMargin:"50px",threshold: 0.2,})
	  this.observers = new ScrollObserver('.is-up-slide', this._inviewAnimation, {once:true,rootMargin:"50px",threshold: 0.2,})
    this.observers = new ScrollObserver('.is-down-bounce', this._inviewAnimation, {once:true,rootMargin:"50px",threshold: 0.2,})
    this.observers = new ScrollObserver('.is-fadeIn', this._inviewAnimation, {once:true,rootMargin:"50px",threshold: 0.2,})
  }
}

