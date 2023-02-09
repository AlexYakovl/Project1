const form = document.querySelector('.forma');
const pcontrol = document.querySelector('.js');
const pbg = document.createElement("div");
const pp = document.createElement("p");
const pbtn = document.createElement("button");
const bot = document.querySelector('.knop')
const fon = document.querySelector('.img1')

const Fname = document.querySelector('.FNameInput')
const Sname = document.querySelector('.SNameInput')
const Ename = document.querySelector('.ENameInput')
const Dname = document.querySelector('.DNameInput')

pbtn.innerHTML = "Закрыть";

pbg.appendChild(pp);
pbg.appendChild(pbtn);

pbg.classList.add("jsbg");
pp.classList.add("jsp");
pbtn.classList.add('jsbtn');

form.addEventListener('submit', (e)=>{
    e.preventDefault();
    pp.innerHTML = `Уважаемый ${Fname.value} ${Sname.value}<br>Ваш билет отправлен на ${Ename.value}<br>Не забудетьте вылет: ${Dname.value}`;
    pcontrol.appendChild(pbg);

});



pbtn.addEventListener('click',()=>{
    pcontrol.removeChild(pbg);
});


bot.addEventListener('click', () => {
    if (fon.getAttribute('src') == 'img/regfon.jpg')
        fon.setAttribute('src',"img/regfon2.jpg");
    else fon.setAttribute('src','img/regfon.jpg');
        
});