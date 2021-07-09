import React, { useEffect } from 'react';
import Form from './form'
import {Provider }from 'react-redux'
import ReactDOM from 'react-dom';
import store from './store'
import Post from './post';


function Example() {
    // let ren=0
    // useEffect(()=>{
    //     ren++
    //     console.log(ren)
    // })
    return (
        <Provider store={store}>
        <div className="container  ">
            <Post />
            <Form />    
        </div>
        </Provider>
    );
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
