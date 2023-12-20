

// testimonials

let carousel=document.querySelector('.carousel');
let arrows=document.querySelectorAll('.arrow');
let firstCardWidth=carousel.querySelector('.card').offsetWidth;
let carouselChildren=[...carousel.children];

let isDragging=false,startX,startScrollLeft;
let cardPerView=Math.round(carousel.offsetWidth / firstCardWidth);

carouselChildren.slice(-cardPerView).reverse().forEach(card=>{
    carousel.insertAdjacentHTML('afterBegin',card.outerHTML)
});

carouselChildren.slice(0,cardPerView).forEach(card=>{
    carousel.insertAdjacentHTML('beforeEnd',card.outerHTML)
});
arrows.forEach(arrow=>{
arrow.addEventListener('click',()=>{
    carousel.scrollLeft+=arrow. id === "left-icon"? -firstCardWidth:firstCardWidth;
});
});

const autoPlay=()=>{
    
}
const dragStart=(e)=>{
    isDragging=true;
    carousel.classList.add('dragging');
    startX=e.pageX;
    startScrollLeft=carousel.scrollLeft;
    }


const dragging=(e)=>{
 
 if(!isDragging) return;
 carousel.scrollLeft=startScrollLeft -  (e.pageX-startX);


}


const dragStop=(e)=>{
    isDragging=false;
    carousel.classList.remove('dragging');

    }


const infiniteScroll=()=>{
    if(carousel.scrollLeft ===0){
        carousel.classList.add('no-transition');
carousel.scrollLeft=carousel.scrollWidth - (2*carousel.offsetWidth);
carousel.classList.remove('no-transition');

    }else if(Math.ceil(carousel.scrollLeft === carousel.scrollWidth - carousel.offsetWidth)){
        carousel.classList.add('no-transition');
        carousel.scrollLeft=carousel.offsetWidth;
        carousel.classList.remove('no-transition');
    }
}
carousel.addEventListener('mousedown',dragStart);
carousel.addEventListener('mousemove',dragging);
document.addEventListener('mouseup',dragStop);
carousel.addEventListener('scroll',infiniteScroll);




