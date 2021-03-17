function formInit(){
    "use strict";

    var MensajeOk=document.getElementById('mensajeOk').value;
    var MensajeKo=document.getElementById('mensajeKo').value;

    if(MensajeOk.length>0){
        $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: MensajeOk,
            // (string | mandatory) the text inside the notification
            //text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" style="color:#ccc">magnis dis parturient</a> montes, nascetur ridiculus mus.',
            // (string | optional) the image to display on the left
            //image: 'bundle/prestamo/images/vistobueno.png',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: false,
            // (int | optional) the time you want it to be alive for before fading out
            time: ''
        });
        return false;
    }
    else if(MensajeKo.length>0){
        $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: MensajeKo,
            // (string | mandatory) the text inside the notification
            //text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" style="color:#ccc">magnis dis parturient</a> montes, nascetur ridiculus mus.',
            // (string | optional) the image to display on the left
            //image: 'bundle/prestamo/images/error.png',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: false,
            // (int | optional) the time you want it to be alive for before fading out
            time: ''
        });
        return false;
    }

}