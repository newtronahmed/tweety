import React,{useState} from 'react'
import {connect} from 'react-redux'
import {addNewPost} from '../actions/postActions'
const Form = ({post,addNewPost})=>{
    const [body,setBody] = useState('')
    const submitHandler = async (e)=>{
    
        e.preventDefault()
       await addNewPost(body) 
        setBody('')  
        
    }
    console.log(post)
    return(
        <form onSubmit={submitHandler}>
            <label htmlFor='tweet'>tweet</label>
            <input type='text' value={body} name='body' required  onChange={(e)=>setBody(e.target.value)}/>
            <button type='submit'  >submit</button>
        </form>
    )
}
const mapStateToProps = (state)=>{
    return {
        post:state.posts.item,
    }
}
export default connect(mapStateToProps,{addNewPost})(Form);