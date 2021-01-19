import {CHANGEAUTH} from '../actions/types'
const initialstate = {
    status:false
}
export default function (state=initialstate,action){
    switch (action.type) {
        case CHANGEAUTH:
            return {
                status: !state.status
            }
    
        default:
           return state;
    }
}