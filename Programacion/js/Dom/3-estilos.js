document.addEventListener('DOMContentLoaded', Cookies);

function Cookies(){
  var capaCookies = document.createElement('div');
    capaCookies.innerHTML='<H1><p>Hello Wolrd</p></h1>';
      capaCookies.classList.add('Diseño');
        var h1 = capaCookies.getElementsByTagName('h1');
         h1.item(0).addEventListener('click', function Borrar(){
         	capaCookies.parentElement.removeChild(capaCookies);
         })


          document.body.appendChild(capaCookies);
}
  