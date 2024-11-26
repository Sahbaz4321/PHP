import React from 'react'
import '../CSS/Navbar.css'

export default function Navbar(){


    return (

<>

<nav className='headerMain'>
  
    <ul className="ul_main">
<li>  <a href="#" className="logo">E-Commerce Website</a></li>
<li><a href="#">Home</a></li>
<li><a href="#">Category</a></li>
<li><a href="#">About</a></li>
<li><a href="#">Contact </a></li>
<li className="cart"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>

    </ul>
    <button type="button" className=' common_login signUp '><a href="http://localhost/file_php/formproject.php">SignUp</a></button>
    <button type="button" className="common_login login "><a href="http://localhost/file_php/formproject.php">Login</a></button>


</nav>
</>

    )
}