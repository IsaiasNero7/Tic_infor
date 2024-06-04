const menu = document.getElementById('dropdown')
const btn = document.getElementById('btn')

menu.addEventListener('click', animar)

function animar() {

  menu.classList.toggle('abrir')


}




const menu_mobile = document.getElementById('menu')
const btn_menu = document.getElementById('btn-menu') 
menu_mobile.addEventListener('click', animar)

function anima() {
  
  menu_mobile.classList.toggle('abrir')
  btn_menu.classList.toggle('ativar')
  
}

const menu_t = document.getElementById('dropdane-m')
const btn_t = document.getElementById('btn-treino') 
menu_t.addEventListener('click', animar)

function anim() {
  
  btn_t.classList.toggle('abri')
  
}

