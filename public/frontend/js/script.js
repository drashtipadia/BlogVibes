window.addEventListener("load", function () {
    const counter = this.document.getElementById("counter");
    const counter1 = this.document.getElementById("counter1");
    let endValue = counter.innerText;
    let endValue1 = counter1.innerText;
    let startValue = 1;
    let startValue1 = 1;
    let mycount1 = setInterval(counterVisiter, 20);
    let mycount = setInterval(counterVisiter, 20);
    function counterVisiter() {
      if (startValue <= endValue) {
        counter.innerHTML = startValue;
        counter1.innerHTML=startValue;
        startValue = startValue + 1;
      } else {
        clearInterval(mycount);
      }
      if (startValue1 <= endValue1) {
        
        counter1.innerHTML=startValue1;
        startValue1 = startValue1 + 1;
      } else {
        clearInterval(mycount1);
      }
    }
    
  });