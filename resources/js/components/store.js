import { createStore, applyMiddleware ,compose} from 'redux';
import rootReducer from '../reducers'
import thunk from 'redux-thunk'
const initialstate={}
const middleware = [thunk]
const store = createStore(rootReducer,initialstate, compose(
    applyMiddleware(...middleware),
    window.__REDUX_DEVTOOLS_EXTENSION__&& window.__REDUX_DEVTOOLS_EXTENSION__() 
    ))
export default store;