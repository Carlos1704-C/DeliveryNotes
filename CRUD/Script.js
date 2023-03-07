function EsconderElemento()
{
    document.getElementById('hiddeninfo').style.display = "none";
}

function MostrarElemento()
{
    document.getElementById('hiddeninfo').style.display = "block";
}

/* Boton crear PDF */
/* Boton prioritario para la pagina*/

document.addEventListener("DOMContentLoaded",()=> {

    const $Boton = document.getElementById('btnGuardar');
    $Boton.addEventListener("click", ()=> {
        
        const $ElementoAConvertir = document.body;
        html2pdf()
        .set({
            margin: 1,
            image: {
            type: 'jpeg',
            quality: 0.98
            },
            html2canvas: {
            scale: 3,
            letterRendering: true,
            },
            jsPDF: {
                unit: "in",
                format: "a3",
                orientation: "portrait"
            }
        })
        .from($ElementoAConvertir)
        .save()
        .catch(err => console.log(err));
    });
});


/* Boton nueva nota */

function Confirmar()
{
    if(confirm("Esta seguro que desea hacer una nueva nota? se borrara TODO lo contenido en la tabla"))
    {
      alert("Operacion realizada con exito");
    }
    else
    {
        alert("Se rechazo la peticion");
    }
}