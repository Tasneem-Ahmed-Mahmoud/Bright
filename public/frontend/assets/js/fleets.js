


// car slider
let currentIndex=0;
let img_list=document.querySelectorAll(".car_img")
let big_img=document.getElementById("big_img");
let left=document.getElementById("left");
let right=document.getElementById("right");
for(let i=0;i< img_list.length;i++){
    img_list[i].addEventListener("click",function(e){
        let clickedImg=e.target
        let imgsrc= clickedImg.getAttribute("src")
       clickedImg.setAttribute("src",big_img.getAttribute("src"))
       big_img.setAttribute("src",imgsrc) 
    })
}

// 

left.addEventListener("click",prevSlide)
function prevSlide(){
    currentIndex--;
    if(currentIndex==-1){
        currentIndex=img_list.length-1}
        let imgsrc=img_list[currentIndex].getAttribute("src")
      let  big_src=big_img.getAttribute("src")
        big_img.setAttribute("src",imgsrc)
        img_list[currentIndex].setAttribute("src",big_src)       
}
right.addEventListener("click",nextSlide)
function nextSlide(){
    currentIndex++
if(currentIndex==img_list.length){
    currentIndex=0}
    changeImg();
}
function changeImg(){
    let imgsrc=img_list[currentIndex].getAttribute("src")
    let  big_src=big_img.getAttribute("src")
      big_img.setAttribute("src",imgsrc)
      img_list[currentIndex].setAttribute("src",big_src)     
}
