  import {FETCHPOSTS,NEWPOSTS} from '../actions/types'
  const inititalstate = {
      items:[],
      item:{},
  }
  export default function(state=inititalstate, action){
      switch (action.type) {
        case FETCHPOSTS:
            console.log('fetching')
            return { ...state, items: action.payload}
        case NEWPOSTS:
          let items = state.items
          console.log(action.payload)
          return {
            ...state, items:[...state.items,action.payload],
            item:action.payload
          }
      
          default:
              return state;
      }
  }