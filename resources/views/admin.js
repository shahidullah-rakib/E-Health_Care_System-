'user strict'

const img = document.querySelector('img');
const imgContent = document.querySelector('.img-content');

img.addEventListener('click',function(){
    imgContent.style.display = 'block';
    // document.querySelector('.card').style.opacity= '0.5';
});

window.addEventListener('mouseup',function(e){
    if(e.target != img){
        imgContent.style.display = 'none';
    }
});