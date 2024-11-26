import React from "react";
import '../CSS/Card.css'
import rupple from '../Images/rupple.jpg'
import uncle from '../Images/uncle.webp'

import tata from '../Images/tata.jpg'
import chips from '../Images/chips.webp'
import chips1 from '../Images/shampoo2.jpg'

import dettol from '../Images/dettol.webp'
import dettol1 from '../Images/dettol1.jpg'
import commerce1 from '../Images/commerce1.jpg'
import shampoo from '../Images/shampoo.jpg'
import shampoo1 from '../Images/shampoo1.jpg'
import { useNavigate } from  'react-router-dom'
export default function Card(){
    


    const cardData=[

{
    id:1,
    imagepath:tata,
    text:'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
    rating:3.5,
    price:'₹350',
    delivery:'free delivery'
},
{
    id:2,
    imagepath:chips,
    text:'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
    rating:3.7,
    price:'₹20',
    delivery:'free delivery'
},
{
    id:3,
    imagepath:chips1,
    text:'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
    rating:4.5,
    price:'₹30',
    delivery:'free delivery'
},
{
    id:4,
    imagepath:uncle,
    text:'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
    rating:4.5,
    price:'₹20',
    delivery:'free delivery'
},
{
    id:5,
    imagepath:rupple,
    text:'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
    rating:4.3,
    price:'₹50',
    delivery:'free delivery'
},

{
    id:6,
    imagepath:dettol,
    text:'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
    rating:3.5,
    price:'₹350',
    delivery:'free delivery'
},
{
    id:7,
    imagepath:dettol1,
    text:'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
    rating:3.7,
    price:'₹20',
    delivery:'free delivery'
},
{
    id:8,
    imagepath:shampoo,
    text:'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
    rating:4.5,
    price:'₹30',
    delivery:'free delivery'
},
{
    id:9,
    imagepath:shampoo1,
    text:'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
    rating:4.5,
    price:'₹20',
    delivery:'free delivery'
},
{
    id:10,
    imagepath:commerce1,
    text:'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
    rating:4.3,
    price:'₹50',
    delivery:'free delivery'
},


{
    id:11,
    imagepath:tata,
    text:'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
    rating:3.5,
    price:'₹350',
    delivery:'free delivery'
},
{
    id:12,
    imagepath:chips,
    text:'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
    rating:3.7,
    price:'₹20',
    delivery:'free delivery'
},
{
    id:13,
    imagepath:chips1,
    text:'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
    rating:4.5,
    price:'₹30',
    delivery:'free delivery'
},
{
    id:14,
    imagepath:uncle,
    text:'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
    rating:4.5,
    price:'₹20',
    delivery:'free delivery'
},
{
    id:15,
    imagepath:rupple,
    text:'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
    rating:4.3,
    price:'₹50',
    delivery:'free delivery'
},



{
    id:16,
    imagepath:tata,
    text:'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
    rating:3.5,
    price:'₹350',
    delivery:'free delivery'
},
{
    id:17,
    imagepath:chips,
    text:'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
    rating:3.7,
    price:'₹20',
    delivery:'free delivery'
},
{
    id:18,
    imagepath:chips1,
    text:'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
    rating:4.5,
    price:'₹30',
    delivery:'free delivery'
},
{
    id:19,
    imagepath:uncle,
    text:'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
    rating:4.5,
    price:'₹20',
    delivery:'free delivery'
},
{
    id:20,
    imagepath:rupple,
    text:'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
    rating:4.3,
    price:'₹50',
    delivery:'free delivery'
},


{
    id:21,
    imagepath:tata,
    text:'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
    rating:3.5,
    price:'₹350',
    delivery:'free delivery'
},
{
    id:22,
    imagepath:chips,
    text:'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
    rating:3.7,
    price:'₹20',
    delivery:'free delivery'
},
{
    id:23,
    imagepath:chips1,
    text:'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
    rating:4.5,
    price:'₹30',
    delivery:'free delivery'
},
{
    id:24,
    imagepath:uncle,
    text:'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
    rating:4.5,
    price:'₹20',
    delivery:'free delivery'
},

    ]





const navigation=useNavigate();
let handle=(card)=>{
    navigation('/buynow',{state:{image:card.imagepath,id:card.id,price:card.price,rating:card.rating,delivery:card.delivery,text:card.text}});
    
}

let handleCart=(card)=>{
   
//     // Save updated cart back to localStorage
    // navigation('/addtocart',{state:{image:card.imagepath,id:card.id,price:card.price,rating:card.rating,delivery:card.delivery,text:card.text}})

    const existingCart = JSON.parse(localStorage.getItem('cartItems')) || [];

    // Add the selected card to the cart
    existingCart.push(card);

    // Save the updated cart back to localStorage
    localStorage.setItem('cartItems', JSON.stringify(existingCart));

    // Navigate to the Cart page
    navigation('/addtocart');

}

    

return(
    <>
    <div className="container">
    {cardData.map((card) => (
        <div className="cardview">
       

        <div className="image" style={ {backgroundImage:`url(${card.imagepath})`}}>
            
        </div>
        <div className="text">
           {card.text}
        </div>
        <div className="rating">
        ⭐{card.rating}
        </div>
        <div className="price">
            {card.price}
        </div>
        <div className="delivery">
            {card.delivery}
        </div>
    <div className="button">
    <button type="button" className="btn btn-primary buy"   onClick={()=>handle(card)}>Buy</button>
    <button type="button" className="btn btn-primary add"  onClick={()=>handleCart(card)}>Add</button>

    

    </div>
    </div>


        ))}
    {/* card 1 */}

   

    </div>
    
    </>
)

}