var resTextQR="";
function scaner_qr(selector){
    console.log(selector);
            var html="";
            html+='<div style="position: relative;display: inline-block;">';
            html+='<canvas id="qr-canvas" width="320" height="240"></canvas>';
            html+='<div class="scanner-laser laser-rightBottom" style="opacity: 0.5;"></div>';
            html+='<div class="scanner-laser laser-rightTop" style="opacity: 0.5;"></div>';
            html+='<div class="scanner-laser laser-leftBottom" style="opacity: 0.5;"></div>';
            html+='<div class="scanner-laser laser-leftBottom" style="opacity: 0.5;"></div>';
            html+='<div class="scanner-laser laser-leftTop" style="opacity: 0.5;"></div>';
            html+='</div>';
            $(selector).html(html);
    $('#qr-canvas').WebCodeCam({
                ReadQRCode: true, // false or true
                ReadBarecode: true, // false or true
                width: 300,
                height: 300,
                videoSource: {  
                        id: true,      //default Videosource
                        maxWidth: 200, //max Videosource resolution width
                        maxHeight: 200 //max Videosource resolution height
                },
                flipVertical: false,  // false or true
                flipHorizontal: false,  // false or true
                zoom: -1, // if zoom = -1, auto zoom for optimal resolution else int
                beep: "js/beep.mp3", // string, audio file location
                autoBrightnessValue: false, // functional when value autoBrightnessValue is int
                brightness: 0, // int 
                grayScale: false, // false or true
                contrast: 0, // int 
                threshold: 0, // int 
                sharpness: [], //or matrix, example for sharpness ->  [0, -1, 0, -1, 5, -1, 0, -1, 0]
                resultFunction: function(resText, lastImageSrc) {
                          
                          alert(resText);
                          resTextQR=resText;
                },
                getUserMediaError: function() {
                           
                           alert("el navegador que esta utilizando esta desactualizado o no posee los plugins necesarios para ejecutar esta ");
                },
                cameraError: function(error) {
                           
                            alert("error de camara, no posee una camara instalada o no se reconose el dispocitivo.");
                          
                }
            });
}

        
