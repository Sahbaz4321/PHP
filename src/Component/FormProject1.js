import React from 'react'
import user_icon from '../src/username.png'
import { useState } from 'react'

import lock from '../src/lock.png'
import email_data from '../src/email.png'
import './FormProjectcss.css'
import { BASE_URL, TOKEN } from './Baseurl'
import Swal from 'sweetalert'



export default function FormProject1(){
    const[action,setAction]=useState('Sign Up');
    const[name,setName]=useState('');
    const[email,setEmail]=useState("");
    const[password,setPassword]=useState('')
const [err,setErr]=useState('');


    let check=()=>{
       
        if(!email.trim()){
            setErr("Email is required")
    
        }
        else if((/\s+@\s+\.+\s+$/).test(email)){
    
            // \s=>Enter one non white space character
            // @=>at the rate is requires
            // \s =>one more white space character
            // \. dot is required
            // \s =>one more white space character
            setErr("Enter a valid email");
        }
        else{
            setErr('')
        }
    }

    let myfun=(e)=>{
        e.preventDefault();
        if(!check()){
            return;
        }

const data={
    'data':{
        name:name,
        email:email,
        password:password
    }
}

fetch(BASE_URL,{
    method:'POST',
    headers:{
        Authorization:'Bearer '+TOKEN,
        'Content-Type':'application/json',

    },
    body:JSON.stringify(data),
    
}).then((response)=>{
    if(response.status==201){
        return response.json()
    }
    else{
        Swal.fire("Data incorrect","not submitted","error");
    }
})
.then( (result)=>{


    Swal.fire("Good job",'your form submitted',"success");
    window.localStorage.setItem('USER_DATA',JSON.stringify(result.data))
    setName('')
    setEmail('')
    setPassword('')
    
})

.then()
.catch().finally()

    }

    return (
        <>
        <form onSubmit={check}>

        <div className="container">
            <div className="header">
                <div className="text1">{action}</div>
                <div className="underline"></div>
            </div>
            <div className='inputs'>
                {action ==="Login"?<div></div>:  <div className='input'>
                    <img src={user_icon} alt="#"></img>
                    <input type='text' placeholder='Name' value={name} onChange={(e)=>setName(e.target.value)}/>

                </div>}
              


                <div className='input'>
                    <img src={email_data} alt="#"></img>
                    <input type='email' placeholder='Email'  value={email} onChange={(e)=>setEmail(e.target.value)} />
                </div>
                {err && <span className="email">{err}</span>}



                <div className='input'>
                    <img src={lock} alt="#"></img>
                    <input type='password' placeholder='Password' value={password} onChange={(e)=>setPassword(e.target.value)} />
                </div>
            </div>

{action==="Sign Up"?<div></div>:<div className="forgot-password">Lost password ?<span>Click here</span></div>}


            <div className="submit-container">
                <div className={action ==="Login"?"submit gray":"submit"} onClick={()=>setAction("Sign Up")}>Sign Up</div>
                <div className={action==="Sign Up"?"submit gray":"submit" } onClick={()=>setAction("Login")}>Login</div>
               <br></br>
               </div>
               <div className="full-width"  onClick={myfun} >Submit</div>
             
           

        </div>
        </form>
        
        
        </>
    )

}