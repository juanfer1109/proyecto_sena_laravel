import './bootstrap';

import * as bootstrap from 'bootstrap';

let linkList = document.getElementById('linkList')

function miMenu() {
  let x = document.getElementById("myTopnav")
  if (x.className === "topnav") {
    x.className += " responsive"
  } else {
    x.className = "topnav"
  }
}

linkList.addEventListener('click', function(){
  miMenu()
})
