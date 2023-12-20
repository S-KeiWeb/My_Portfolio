document.addEventListener('DOMContentLoaded', function() {
  const container = document.getElementById('main-container');
  const aside = document.getElementById('aside');
  const offsetY = 20;
  const openBtns = document.querySelectorAll('.openbtn');

  openBtns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      this.classList.toggle('active');
      document.getElementById('mask-menu').classList.toggle('show');
    });
  });

  if (container && aside) {
    container.style.minHeight = aside.clientHeight + 'px';

    window.addEventListener('scroll',()=>{
      const containerRect = container.getBoundingClientRect();
      const isReachBottom = (aside,containerRect,offsetY)=>{
        if( aside.clientHeight < window.innerHeight ){
          if(containerRect.bottom <= aside.clientHeight + offsetY){
            return true;
          }else{
            return false;
          }
        }else{
          if(containerRect.bottom < window.innerHeight - offsetY){
            return true;
          }else{
            return false;
          }
        }
      }

      if( isReachBottom(aside,containerRect,offsetY) ){
        aside.classList.add('is-end');
        aside.classList.add('is-fixed');
        aside.style.left = '';
      }else if( containerRect.top < offsetY ){
        aside.classList.add('is-fixed');
        aside.classList.remove('is-end');
        aside.style.left = containerRect.left + 'px';
      }else{
        aside.classList.remove('is-fixed');
        aside.classList.remove('is-end');
        aside.style.left = '';
      }
  });
}
});
