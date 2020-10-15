window.onload = function() {
    const canvas = document.getElementById("canvas");
    if (canvas) {
        const lienzo = canvas.getContext("2d");
        if (lienzo) {
            function limpiar() { //Deja limpio el canvas, con su fondo por defecto
                lienzo.fillStyle = 'white';
                lienzo.fillRect(0, 0, 1000, 500);
                lienzo.fillStyle = 'rgb(87,155,204)';
                lienzo.fillRect(10, 10, 980, 480);
            }

            const margen = canvas.getBoundingClientRect(); //Obtiene la margen que rodea el canvas
            var click;

            function imprimirImagen(ruta, x, y) { //imprime una imagen, especificandole la ruta entre comillas
                var imagen = new Image();
                imagen.src = ruta;
                imagen.onload = function() {
                    lienzo.drawImage(imagen, x, y);
                }
            }

            function imprimirTexto(pixelesFuente, fuente, color, texto, x, y) {
                lienzo.font = String(pixelesFuente) + " px " + String(fuente);
                lienzo.fillStyle = String(color);
                lienzo.fillText(String(texto), x, y);
            }

            function random(min, max) { //Devuelve un valor al azar, dentro de min y max
                return Math.floor(Math.random() * (max - min)) + min;
            }

            /*  COLOCAR ESTO PARA DETECTAR UN CLICK
            
                function FUNCIONEJECUTADAPORUNEVENTO(click){
                    click = {
                        x: click.clientX - margen.left,
                        y: click.clientY - margen.top
                    }
                    
                    if(Math.abs((click.x) - XDELOBJETO) < ANCHODELOBJETO && Math.abs((click.y) - YDELOBJETO) < ALTODELOBJETO) {
                        //Codigo que se ejecuta si hay un click en esa área
                    }
                }
            
                */

            //Aquí empieza el código del programa como tal
            limpiar();
            imprimirImagen("../assets/img/canvasIndex.png", 10, 10);
        }
    }
}