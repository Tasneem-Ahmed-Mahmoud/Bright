
let navBar=document.querySelectorAll('.nav-link');
let navCollapse=document.querySelector('.navbar-collapse.collapse');

navBar.forEach((ele )=> {
   
    ele.addEventListener('click',function(){
        if(!ele.classList.contains('dropdown-toggle')){
            navCollapse.classList.remove('show');
        }
        
    });
});
