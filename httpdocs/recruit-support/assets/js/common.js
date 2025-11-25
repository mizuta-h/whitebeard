jQuery(document).ready(function($) {

  var $offset = jQuery( '#gHeader' ).offset();
    jQuery( window ).scroll( function () {
        if( jQuery( window ).scrollTop() > $offset.top  ) {
            jQuery( '#gHeader').addClass( 'fixed' );
        } else {
            jQuery('#gHeader').removeClass( 'fixed' );
		}
});

});



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
    this.observers = new ScrollObserver('.is-fadeIn', this._inviewAnimation, {once:true,rootMargin:"10px",threshold: 0.2,})
  }
}
