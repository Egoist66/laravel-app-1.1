import './bootstrap';


const uniqueArr = (...arr) => arr.filter((item, index) => arr.indexOf(item) === index)
    
window.uniqueArr = uniqueArr