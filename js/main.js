const regalo = document.getElementById('regalo');

const mostrarDias = () => {
    let boletosDia = parseInt(document.getElementById('pase_dia').value, 10) || 0,
        boletos2Dias = parseInt(document.getElementById('pase_dos_dias').value, 10) || 0,
        boletosCompleto = parseInt(document.getElementById('pase_completo').value, 10) || 0;

    var diasElegidos = []
    if(boletosDia > 0){
        diasElegidos.push('viernes');
    }
    if(boletos2Dias > 0){
        diasElegidos.push('viernes', 'sabado');
    }
    if(boletosCompleto > 0){
        diasElegidos.push('viernes', 'sabado', 'domingo');
    }
    diasElegidos.forEach(dia => {
        document.getElementById(dia).style.display = 'block'
    });
}

(function(){
    "use strict"
    document.addEventListener('DOMContentLoaded', () => {
        
        //Campos Datos-Usuaris
        let nombre = document.getElementById('nombre');
        let apellido = document.getElementById('apellido');
        let email = document.getElementById('email');

        //Campos Pases
        let paseDia = document.getElementById('pase_dia');
        let pase2Dias = document.getElementById('pase_dos_dias');
        let paseCompleto = document.getElementById('pase_completo');

        //botones y divs
        let calcular = document.getElementById('calcular');
        let errorDiv = document.getElementById('error');
        let btnRegistro = document.getElementById('btnRegistro');
        let listaProducto = document.getElementById('lista-productos');
        let sumaTotal = document.getElementById('suma-total')

        //Extras
        let etiquetas = document.getElementById('etiquetas')
        let camisas = document.getElementById('camisa_evento')

        paseDia.addEventListener('blur', mostrarDias);
        pase2Dias.addEventListener('blur', mostrarDias);
        paseCompleto.addEventListener('blur', mostrarDias);

        nombre.addEventListener('blur', function(){
            if(this.value == ''){
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = 'Este campo es Obligatorio';
                errorDiv.style.border = '1px solid red';
                this.style.border = '1px solid red';
            }else{
                errorDiv.style.display = 'none';
                this.style.border = '1px solid #e1e1e1';
            }
        })
        apellido.addEventListener('blur', function(){
            if(this.value == ''){
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = 'Este campo es Obligatorio';
                errorDiv.style.border = '1px solid red';
                this.style.border = '1px solid red';
            }else{
                errorDiv.style.display = 'none';
                this.style.border = '1px solid #e1e1e1';
            }
        })
        email.addEventListener('blur', function(){
            if(this.value == ''){
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = 'Este campo es Obligatorio';
                errorDiv.style.border = '1px solid red';
                this.style.border = '1px solid red';
            }else{
                errorDiv.style.display = 'none';
                this.style.border = '1px solid #e1e1e1';
            }
        })
        email.addEventListener('blur', function(){
            if(this.value.indexOf('@')<0){
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = 'El mail debe tener un arroba(@)';
                errorDiv.style.border = '1px solid red';
                this.style.border = '1px solid red';
            }else{
                errorDiv.style.display = 'none';
                this.style.border = '1px solid #e1e1e1';
            }
        });

        calcular.addEventListener('click', (e) => {
            e.preventDefault();
            if(!regalo.value){
                alert('Debes Elegir un regalo');
                regalo.focus();
            }else{
                let boletosDia = parseInt(paseDia.value, 10) || 0,
                    boletos2Dias = parseInt(pase2Dias.value, 10) || 0,
                    boletosCompleto = parseInt(paseCompleto.value, 10) || 0,
                    cantCamisas = parseInt(camisas.value, 10) || 0,
                    cantEtiquetas = parseInt(etiquetas.value, 10) || 0;
                
                let totalPagar = (boletosDia * 30) + (boletos2Dias * 45) + (boletosCompleto * 50) + ((cantCamisas * 10) * .93) + (cantEtiquetas * 2);

                let listadoProductos = [];

                if(boletosDia > 0){
                    listadoProductos.push(boletosDia + ' pases por dia');
                }
                if(boletos2Dias > 0){
                    listadoProductos.push(boletos2Dias + ' pases por dos dias');
                } 
                if(boletosCompleto > 0){
                    listadoProductos.push(boletosCompleto + ' pases completos');
                }
                if(cantCamisas > 0){
                    listadoProductos.push(cantCamisas + ' camisas');
                }
                if(cantEtiquetas > 0){
                    listadoProductos.push(cantEtiquetas + ' etiquetas');
                }

                listaProducto.innerHTML = '';
                listaProducto.style.display = 'block';
                listadoProductos.forEach(producto => {
                    listaProducto.innerHTML += producto + '<br/>';
                });
                sumaTotal.innerHTML = '$' + totalPagar.toFixed(2);
            }
        });
    });
}());

$(function() {

    //Titulo
    // $('.nombre-sitio').lettering();

    //Navegacion
    let windoHeight = $(window).height();
    let barraAltura = $('.barra').innerHeight();
    $(window).scroll(function(){
        let scroll = $(window).scrollTop();
        if(scroll>windoHeight){
            $('.barra').addClass('fixed')
            $('body').css({'margin-top': barraAltura + 'px'})
        }else{
            $('.barra').removeClass('fixed')
            $('body').css({'margin-top':'0px'})
        }
    });

    $('.ocultar').hide();
    $('.programa-evento .info-curso:first').show();
    $('.menu-programa a:first').addClass('activo')

    $('.menu-programa a').on('click', function() {
        $('.menu-programa a').removeClass('activo');
        $(this).addClass('activo');
        $('.ocultar').hide();
        let enlace = $(this).attr('href');
        $(enlace).fadeIn(500);
        return false;
    });

    //Menu-Responcivo

    $('.menu-movil').on('click', function(){
        $('.navegacion-principal').slideToggle();
    });

    //Animacion de numeros
    let resumenLista = jQuery('.resumen-evento');
    if(resumenLista.length>0){
        $('.resumen-evento').waypoint(function(){
            $('.resumen-evento li:nth-child(1) p').animateNumber({ number: 6}, 1300);
            $('.resumen-evento li:nth-child(2) p').animateNumber({ number: 15}, 1300);
            $('.resumen-evento li:nth-child(3) p').animateNumber({ number: 3}, 1300);
            $('.resumen-evento li:nth-child(4) p').animateNumber({ number: 9}, 1300);
        }, {
            offset: '60%'
        });
    }

    //Mapa
    let map = L.map('mapa').setView([12.103266, -86.159543], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([12.103266, -86.159543]).addTo(map)
            .bindPopup('gdlWebCamp')
            .openPopup();

    //Faltan

    $('.cuenta-regresiva').countdown('2021/12/10 09:00:00', function(event){
        $('#dias').html(event.strftime('%D'))
        $('#horas').html(event.strftime('%H'))
        $('#minutos').html(event.strftime('%M'))
        $('#segundos').html(event.strftime('%S'))
    });


});