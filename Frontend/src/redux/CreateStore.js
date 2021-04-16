import {createStore, applyMiddleware, compose} from 'redux';
import thunk from 'redux-thunk';
import RootReducer from "./reducers/RootReducer"


export const store = createStore(
    RootReducer,
    compose(
      applyMiddleware(thunk),
      window.__REDUX_DEVTOOLS_EXTENSION__ &&
        window.__REDUX_DEVTOOLS_EXTENSION__(),
    ),
);

