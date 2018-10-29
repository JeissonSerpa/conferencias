(function(){
  "use strict";
  document.addEventListener('DOMContentLoaded', function(){

    var mapa = L.map('mapa').setView([4.658042, -74.094372], 16);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(mapa);

L.marker([4.658042, -74.094372]).addTo(mapa)
    .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
    .openPopup();

    //Formulario
    let nombre = document.getElementById('nombre');
    let apellidos = document.getElementById('apellidos');
    let email = document.getElementById('email');
    let errorDiv = document.getElementById('error');

    //Paquetes
    let paseDia = document.querySelector('#pase-dia');
    let paseDosDias = document.querySelector('#pase-2dias');
    let paseCompleto = document.querySelector('#pase-completo');
    
    //Resumen Calculos
    let calcular = document.getElementById('calcular');
    let error = document.getElementById('error');
    let btnRegistro = document.getElementById('btnRegistro');
    let productos = document.getElementById('lista-productos');
    let regalo = document.getElementById('regalo');
    let camisaEvento = document.getElementById('camisa_evento');
    let etiquetas = document.getElementById('etiquetas');
    let listaProductos = document.getElementById('lista-productos');
    let sumaTotal = document.getElementById('suma-total');

    //Evento validacion formulario

    nombre.addEventListener('blur', validarFormulario);
    apellidos.addEventListener('blur', validarFormulario);
    email.addEventListener('blur', validarFormulario);

    function validarFormulario(){
      if(this.value == ''){
        errorDiv.style.display = 'block';
        errorDiv.style.border = '1px solid red';
        errorDiv.innerHTML = "Este campo es obligatorio";
        this.style.border = '1px solid red';
      }else{
        errorDiv.style.display = 'none';
        this.style.border = '1px solid #cccccc';
      }
    }

    //Eventos de usuario
    calcular.addEventListener('click', calcularM);
    paseDia.addEventListener('blur', mostrarDias);
    paseDosDias.addEventListener('blur', mostrarDias);
    paseCompleto.addEventListener('blur', mostrarDias);

    //funcion para mostrar los planes por dia
    function mostrarDias(){
      let boletoDia = parseInt(paseDia.value, 10) || 0,
          boletoDosDias = parseInt(paseDosDias.value, 10) || 0,
          boletoCompleto = parseInt(paseCompleto.value, 10) || 0;
      
      let diasElegidos = [];

      if(boletoDia > 0){
        diasElegidos.push('viernes');
      }
      if(boletoDosDias > 0){
        diasElegidos.push('viernes', 'sabado');
      }
      if(boletoCompleto > 0){
        diasElegidos.push('viernes', 'sabado', 'domingo');
      }

      for (let i = 0; i < diasElegidos.length; i++) {
        document.getElementById(diasElegidos[i]).style.display = "block";
        
      }
    }

    //funcion para de resumen y total de compras
    function calcularM(event){
      event.preventDefault();
      if(regalo.value === ''){
        alert('Debes elegir un regalo');
        regalo.focus();
      }else{
        let boletoDia = parseInt(paseDia.value, 10) || 0,
          boletoDosDias = parseInt(paseDosDias.value, 10) || 0,
          boletoCompleto = parseInt(paseCompleto.value, 10) || 0,
          camisa = parseInt(camisaEvento.value, 10) || 0,
          etiquetasValor = parseInt(etiquetas.value, 10) || 0;

          let totalProductos = (boletoDia * 25000) + (boletoDosDias * 40000) + 
          (boletoCompleto * 50000) + ((camisa * 10000) * .9) + ((etiquetasValor * 5000) * .95);

          let resumen = [];

          if(boletoDia >= 1){
            resumen.push(boletoDia + ' Boleto por un dia $ ' + (boletoDia * 25000));
          }
          if(boletoDosDias >= 1){
            resumen.push(boletoDosDias + ' Boleto por dos dias $ ' + (boletoDosDias * 40000));
          }
          if(boletoCompleto >= 1){
            resumen.push(boletoCompleto + ' Boletos completos $ ' + (boletoCompleto * 50000));
          }
          if(camisa >= 1){
            resumen.push(camisa + ' camisetas $ ' + ((camisa * 10000) * .9));
          }
          if(etiquetasValor >= 1){
            resumen.push(etiquetasValor + ' etiquetas $ ' + ((etiquetasValor * 5000) * .95));
          }

          listaProductos.style.display = 'block'
          
          listaProductos.innerHTML = '';

          for (let i = 0; i < resumen.length; i++) {
            listaProductos.innerHTML += resumen[i] + '<br>' + '<br>';
          }

          sumaTotal.innerHTML = '';
          sumaTotal.innerHTML += '$ ' + totalProductos.toFixed(2);
      }
        
      }


  });//DOM Content

})();
