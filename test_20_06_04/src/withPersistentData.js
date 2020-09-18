import React from 'react';
import logo from './logo.svg';
import './App.css';

// function App() {
//   return (
//     <div className="App"><div className="App-header">
//     <img src={logo} className="App-logo" alt="logo" />
//     <h1>Welcome to React</h1>
//     </div>
//     <p className="App-intro">
//     Hello， world!
//     </p>
//     </div>
//   );
// }

function withPersistentData(WrappedComponent, key) {
  const localStorage = { getItem: key => key};
  return class extends React.Component {
    componentWillMount() {
      let data = localStorage.getItem(key);
      this.setState({
        data
      });
    }
    render() {
      console.log(this.props, 'this.props')
      // 通过{...this.props} 把传递给当前组件的属性继续传递给被包装的组件
      return <WrappedComponent data = {
        this.state.data
      } {
        ...this.props
      }
      />
    }
  }
}

export default withPersistentData;