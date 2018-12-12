(function(){
  "use strict";
  document.addEventListener('DOMContentLoaded', function(){

  if(document.getElementById('mapa')){

   var map = L.map('mapa').setView([4.658042, -74.094372], 16);

   L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
     attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
     }).addTo(map);

     L.marker([4.658042, -74.094372]).addTo(map)
     .bindPopup('Ubicacion Oficial GDLWebcamp.<br> Encuentranos en Bogota.')
     .openPopup()
     .bindTooltip('Simon Volibar');
   var mapa = L.map('mapa').setView([4.658042, -74.094372], 16);

     L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
     attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
   }).addTo(mapa);

   L.marker([4.658042, -74.094372]).addTo(mapa)
   .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
   .openPopup();
  }

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

    btnRegistro.disabled = true;

    //Evento validacion formulario

    if(nombre){
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
  }

    //Eventos de usuario

    if(calcular){
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
      if(this.value > 0){

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
      }else{

        if(boletoDia == 0){
          diasElegidos.push('viernes');
        }
        if(boletoDosDias == 0){
          diasElegidos.push('viernes', 'sabado');
        }
        if(boletoCompleto == 0){
          diasElegidos.push('viernes', 'sabado', 'domingo');
        }
        for (let i = 0; i < diasElegidos.length; i++) {
            document.getElementById(diasElegidos[i]).style.display = "none";
        }
      }
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

          btnRegistro.disabled = false;

          document.getElementById('total-pagar').value = totalProductos;
      }
        
      }


  });//DOM Content

})();

$(function(){

  //Programa para dejar estatico la barra de menu

  let altura = $('.barra').offset().top;
  let barraAltura = $('.barra').innerHeight();
  
  $(window).scroll(function(){
    let scroll = $(window).scrollTop();

    if(scroll > altura){
      $('.barra').addClass('fixed');
      $('body').css({'margin-top': barraAltura + 'px'})
    }else{
      $('.barra').removeClass('fixed');
      $('body').css({'margin-top': '0px'})
    }

  });

  //Programa menu movil

  $('.menu-movil').on('click', mostrarMenu);

  function mostrarMenu(){
    $('.navegacion-principal').slideToggle();
  }

  //Programa para las conferencias

  $('.programa-evento a:last').addClass('activo');
  $('.ocultar:last').show();

  $('.programa-evento a.nav-categoria').on('click', tabularEvento);

  function tabularEvento(){
    $('.programa-evento a.nav-categoria').removeClass('activo');
    $(this).addClass('activo');
    $('.ocultar').hide();
    let  enlace = $(this).attr('href');
    $(enlace).fadeIn(700);

    return false;
  }

  //Programa para animar numeros

  $('.resumen-evento li:nth-child(1) p').animateNumber({number: 6}, 1000);
  $('.resumen-evento li:nth-child(2) p').animateNumber({number: 15}, 1000);
  $('.resumen-evento li:nth-child(3) p').animateNumber({number: 3}, 1000);
  $('.resumen-evento li:nth-child(4) p').animateNumber({number: 9}, 1000);

  //programa Contador 

  $('.cuenta-regresiva').countdown('2018/12/31 23:59:59', function(event){
    $('#dias').html(event.strftime('%D'));
    $('#horas').html(event.strftime('%H'));
    $('#minutos').html(event.strftime('%M'));
    $('#segundos').html(event.strftime('%S'));
  });

  //colorbox

  $('.invitados-info').colorbox({inline:true, width:"50%"});


});
