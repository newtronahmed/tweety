import React,{useEffect} from 'react'
import {connect} from 'react-redux'
import {fetchPosts} from '../actions/postActions'
import {toggleAuth} from '../actions/authActions'
function Post (props){
     
    useEffect(()=>{
        props.fetchPosts()
    },[])
    
    return (
        <>
        <div>
        <div>posts</div>
        {props.posts.length > 0 ? props.posts.map((each,i)=><div key={i} className='p-2 m-1 '>{each.body}</div>) : 'no posts here' } 
        </div>
        <div>
            {props.auth ? 'You are onlin' : 'You are offline'}
        </div>
        <div>
            <button onClick={()=>props.toggleAuth()}>toggleAuth</button>
        </div>
        </>
    )
   
}
const mapStateToProps = (state)=>(
    {
        posts: state.posts.items,
        auth: state.auth.status
    }
)
export default connect(mapStateToProps,{fetchPosts,toggleAuth})(Post);