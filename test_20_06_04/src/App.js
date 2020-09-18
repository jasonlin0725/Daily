import React from 'react';
import logo from './logo.svg';
import withPersistentData from './withPersistentData';
import './App.css';

class MyComponent extends React.Component {
    render() {
        return <div > {
            this.props.data
        } </div>
    }
}

const MyComponent1WithPersistentData =
    withPersistentData(MyComponent, 'data');

// const MyComponent2WithPersistentData =
//     withPersistentData(MyComponent, 'name');


export default MyComponent1WithPersistentData;