
// SLIDE IN AND FADE IN INTERSECT OBSERVE

const faders=document.querySelectorAll('.fade-in,.fade-in-fast');
const sliders=document.querySelectorAll('.slide-in')



const appearOptions={
    threshold:0.1,
    rootMargin:'0px 0px -100px 0px'
}

const appearOnScroll=new IntersectionObserver(
    function (entries,
        appearOnScroll) 
    {  
        entries.forEach(entry=>{
            if(!entry.isIntersecting){
                return
            }else{
                entry.target.classList.add('appear');
                appearOnScroll.unobserve(entry.target)
            }
        })
    },appearOptions
)

    

faders.forEach(fader=>{
    appearOnScroll.observe(fader)
})



sliders.forEach(slider=>{
    appearOnScroll.observe(slider)

})





const footerInside=document.querySelector('#insideFooter')
const footerTrigg=document.querySelector('#footerTrigg')



let body=document.body
let bodyHeight=parseInt(window.getComputedStyle(body).getPropertyValue('height'))


window.addEventListener('scroll',()=>{
    const scrolled=window.scrollY
    if(scrolled>(bodyHeight-770)){
        footerInside.classList.add('Zindex')
    }
    else if(scrolled<(bodyHeight-770)){
        footerInside.classList.remove('Zindex')
    }
})




// DESIGN PORTFOLIO
// let sectionImgDesign=document.querySelector('#SectImgDesign')



// sectionImgDesign.addEventListener('mouseover',(e)=>{
//     item=e.target
//     // SELECT HIDEN DIV
//     let textImg=item.querySelector('.textImg')
//     console.log(textImg);
//     textImg.classList.add('revealText')

// })

// let gImg=document.querySelectorAll('.gImg')

// for (let i = 0; i < gImg.length; i++) {
//     const e = gImg[i];
//     const textImg=e.querySelector('.textImg')

//     e.addEventListener('mouseover',()=>{
//         textImg.classList.add('revealText')
//     })
//     e.addEventListener('mouseout',()=>{

//         textImg.classList.remove('revealText')
//     })

    
// }


















