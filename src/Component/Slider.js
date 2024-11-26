import React ,{useEffect, useState} from 'react'
import '../CSS/Slider.css'

const  Slider=({images})=>{
    const [currentIndex,setCurrentIndex]=useState(0);

    const nextSlide=()=>{
        setCurrentIndex((prevIndex)=>prevIndex=== images.length -1? 0: prevIndex+1);
    }

    const prevSlide=()=>{
        setCurrentIndex((prevIndex)=>prevIndex=== images.length -1? 0: prevIndex-1);
    }

    useEffect(()=>{
        const interval=setInterval(()=>{
            nextSlide();
        },6000);

        return ()=>clearInterval();
    },currentIndex)


    return (


<>
<div className='slider'>
    <button className='prev common_btn' onClick={prevSlide}> prev</button>
    {/* <img src={images[currentIndex]} alt="slide" className='image-slider' />  */}
    <div className='image-slider' style={{ backgroundImage:`url(${images[currentIndex]})`}} />
    <button className='next common_btn' onClick={nextSlide}>next</button>
</div>


</>

    )
}
export default Slider;