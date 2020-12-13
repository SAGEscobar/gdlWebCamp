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

        let map = L.map('mapa').setView([12.103266, -86.159543], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([12.103266, -86.159543]).addTo(map)
            .bindPopup('gdlWebCamp')
            .openPopup();
        
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