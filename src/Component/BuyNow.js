import React, { useState } from "react";
import { useLocation } from "react-router-dom";
import { useEffect } from "react";

import '../CSS/BuyNow.css'


export default function BuyNow(){
  
const location=useLocation();
const {image,id,price,rating,delivery,text}=location.state || {}
const [quantity,setQuantity]=useState(1);
const [discount,setDiscount]=useState(10);
const [itemPrice,setItemprice]=useState(price)
const [discount_price,setDiscountPrice]=useState(price)
const [deliverycharge,setDelivery]=useState(0)


let convertTONumber=(price)=>{
  const cleanPrice=price.replace(/[^0-9.-]+/g,"")
  const numericPrice=parseFloat(cleanPrice)
  return isNaN(numericPrice)? 0:numericPrice
}

const numericPrice=price ? convertTONumber(price):0


useEffect(()=>{
  console.log("Price:", numericPrice);  // Check price value
    console.log("Quantity:", quantity);  // Check quantity value
    console.log("Discount:", discount);

const priceBeforeDiscount=numericPrice*quantity
const priceAfterDiscount=priceBeforeDiscount-(priceBeforeDiscount*discount)/100;
setItemprice(priceBeforeDiscount)
setDiscountPrice(priceAfterDiscount)

},[numericPrice,quantity,discount])


if(!image ||!text || !id){
 return  <div>No data found</div>
}

    return (
        <>
        
      <div className="buynow_container">
        <div className="buynow_card">

        <h1 className="detail">Product detail</h1>
        <div className="buynow_image" style={ {backgroundImage:`url(${image})`}}>

        </div>
        <div className="buynow_text">{text}</div>
        <div className="buynow_rating">⭐{rating}</div>
        <div className="buynow_price">{price}</div>
        <div className="buynow_delivery">{delivery}</div>
        </div>

        <div className="payment">

          <div className="finalprice yourOrder">Your Order</div>
          <div className="productLeft">Product</div>
          <div className="totalRight">Total</div>
          <div className="finalprice">Price is : </div>
          <div className="price1 totalRight">₹ {itemPrice}</div>
          <div className="delivery1 finalprice" >Delivery charges  is : </div>
          <div className="price1 totalRight">₹ {deliverycharge}</div>
          <div className="finalprice" >Discount is : </div>
          <div className="price1 totalRight" >₹ { discount}%</div>
          
          
          <div className="borderbottom"></div>

          <div className="afterdiscount finalprice">Total :</div>
          <div className="price1 totalRight"> ₹ {discount_price}</div>


         
          <div class="d-grid gap-2 col-6 mx-auto ">
  <button className="btn btn-primary paynow_button" type="button">Pay Now</button>
</div>
        </div>

      </div>
        </>
    )
}