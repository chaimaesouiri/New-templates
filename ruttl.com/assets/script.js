var slider = tns({
  container: '.tns-outer',
  items: 1,
  slideBy: 'page',
  autoplay: true,
  controls: true,
  nav: true,
});
const buttons = document.querySelectorAll('#website-feedback button');
const divs = document.querySelectorAll('#myDiv1 .prod-tab-pane');
buttons.forEach((button, index) => {
    button.addEventListener('click', () => {
        buttons.forEach(btn => {
            btn.classList.remove('active');
        });
        divs.forEach(div => {
            div.classList.remove('active');
        });
        button.classList.add('active');
        divs[index].classList.add('active');
    });
});
const buttons1 = document.querySelectorAll('#mobible-app-review button');
const divs1 = document.querySelectorAll('#myDiv2 .prod-tab-pane');
buttons1.forEach((button1, index) => {
    button1.addEventListener('click', () => {
        buttons1.forEach(btn1 => {
            btn1.classList.remove('active');
        });
        divs1.forEach(div1 => {
            div1.classList.remove('active');
        });
        button1.classList.add('active');
        divs1[index].classList.add('active');
    });
});
const buttons2 = document.querySelectorAll('#customer-feedback button');
const divs2 = document.querySelectorAll('#myDiv3 .prod-tab-pane');
buttons2.forEach((button2, index) => {
    button2.addEventListener('click', () => {
        buttons2.forEach(btn2 => {
            btn2.classList.remove('active');
        });
        divs2.forEach(div2 => {
            div2.classList.remove('active');
        });
        button2.classList.add('active');
        divs2[index].classList.add('active');
    });
});