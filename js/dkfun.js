/**
 *
 * Date: 2013-07-26
 * Author: Zach Atkinson
 * Project: dk-fun
 * File:
 * © Zach Atkinson 2013. All Rights Reserved
 *
 */

var canvas = document.getElementById('gameScreen');     //canvas area
var ctx; //2d context

function init(){
    if(canvas.getContext()){
        ctx = canvas.getContext('2d');

        //draw some lines
        drawLine(40, 40, 440, 40, "#0a0");
        drawLine(40, 45, 440, 45, "#a00");
        drawLine(40, 50, 440, 50, "#00a");
    }
}

function drawLine(xs, ys, xe, ye, c){
    ctx.lineWidth = 5;
    ctx.beginPath();
    ctx.strokeStyle = c;
    ctx.moveTo(xs, ys);
    ctx.lineTo(xe, ye);
    ctx.stroke();
}
