import {CHANGEAUTH} from './types'
export function toggleAuth(){
    console.log('dispatching')
    return function(dispatch) {
        dispatch({type:CHANGEAUTH})
    }
}