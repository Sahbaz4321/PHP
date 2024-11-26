import logo from './logo.svg';
import './App.css';
import { BrowserRouter, Route, Routes } from 'react-router-dom';
import BuyNow from '../src/Component/BuyNow'

// import Redux1 from './Component/Redux1';
import Navbar from '../src/Component/Navbar'
import Slider from '../src/Component/Slider'
import dettol from '../src/Images/dettol.webp'
import dettol1 from '../src/Images/dettol1.jpg'
import commerce1 from '../src/Images/commerce1.jpg'
import chips from '../src/Images/chips.jpg'
import shampoo from '../src/Images/shampoo.jpg'
import shampoo1 from '../src/Images/shampoo1.jpg'
import Card from '../src/Component/Card'

function App() {
  const images=[dettol,chips,dettol1,commerce1,shampoo,shampoo1]
  return (
    <div className="App">
      {/* <header className="App-header">
        <img src={logo} className="App-logo" alt="logo" />
        <p>
          Edit <code>src/App.js</code> and save to reload.
        </p>
        <a className="App-link"   href="https://reactjs.org"   target="_blank"   rel="noopener noreferrer"
        >
          Learn React
        </a>
      </header> */}
      {/* <Redux1 /> */}
      <Navbar />
      <Slider images={images} />

      <Routes>
    <Route path="/" element={<Card />} />
    <Route path="/buynow" element={<BuyNow />} />
    {/* <Route path="/addtocart" element={<AddToCart />} /> */}
  </Routes>

     
    </div>
  );
}

export default App;
