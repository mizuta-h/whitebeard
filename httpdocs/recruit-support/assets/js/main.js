document.addEventListener('DOMContentLoaded', function () {
    const main = new Main();
});

class Main{
  constructor() {
    this.header = document.querySelector('header');
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
    new MobileMenu();
    const hero = new HeroSlider('.swiper');
    Pace.on('done',this._paceDone.bind(this));
  }

  _paceDone() {
    this._scrollInit();
  }

  _navAnimation (el, inview){
    if(inview) {
      this.header.classList.remove('triggered');
    } else {
      this.header.classList.add('triggered');
    }
  }

  _inviewAnimation (el, inview){
    if(inview) {
      el.classList.add('inview');
    } else {
      el.classList.remove('inview');
    }
  }

  _textAnimation (el, inview) {
    if(inview){
      const ta = new TweenTextAnimation(el);
      ta.animation();
    }
  }

  _toggleSlideAnimation() {
    if(inview) {
      this.hero.start();
    } else {
      this.hero.stop();
    }
  }

  _scrollInit() { //プライベートメソッド
    this.observers = new ScrollObserver('.nav-trigger', this._navAnimation.bind(this), {once:false})
    this.observers = new ScrollObserver('.cover-slide', this._inviewAnimation)
    this.observers = new ScrollObserver('.tween-animate-title',this._textAnimation)
    this.observers = new ScrollObserver('.swiper-container',this._toggleSlideAnimation.bind(this), {once:false})
  }
}
