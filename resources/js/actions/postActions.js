import { FETCHPOSTS, NEWPOSTS } from "./types"
import Axios from "axios"

export const fetchPosts = () => dispatch=>{
    console.log('dispatchingg')
    fetch('/api/posts')
    .then(response=> response.json())
    .then(data=>dispatch({
        type: FETCHPOSTS,
        payload:data,
    }))
}
export const addNewPost = (body)=>dispatch=>{
    Axios.post('/api/tweet',{body})
    .then(response=> dispatch({type:NEWPOSTS, payload:response.data}))
}