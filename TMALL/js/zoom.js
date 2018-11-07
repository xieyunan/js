function zoom(){
        var oSmall=document.getElementById('small');
        var oDrag=document.getElementById('drag');
        var oBig=document.getElementById('big');
        var oBigImg=oBig.getElementsByTagName('img')[0];
    
        oSmall.onmouseover=function(){
            oBig.style.display="block";
            oDrag.style.display="block";
        }
        oSmall.onmouseout=function(){
            oBig.style.display="none";
            oDrag.style.display="none";
        }
        oSmall.onmousemove=function(ev){
            var e=ev||window.event;
            var left=e.clientX-oDrag.offsetWidth/2;
            var top=e.clientY-oDrag.offsetHeight/2;//鼠标的XY坐标
    
            if(left<0) left=0;//在oDrag中动
            if(top<0) top=0;
           var maxX=oSmall.offsetWidth-oDrag.offsetWidth;
            var maxY=oSmall.offsetHeight-oDrag.offsetHeight;//活动范围
            if(left>maxX) left=maxX;
            if(top>maxY) top=maxY;
            
            oDrag.style.left=left+"px";
            oDrag.style.top=top+"px";//块的位置--鼠标的位置给块的
            
            var scaleX=left/maxX;
            var scaleY=top/maxY;
            oBigImg.style.left=-(oBigImg.offsetWidth-oBig.offsetWidth)*scaleX+"px";
            oBigImg.style.top=-(oBigImg.offsetHeight-oBig.offsetHeight)*scaleY+"px";
    
        }
    }

    function xq(){
        var oDa=document.getElementById('da');//大图
        
        var oImg=document.getElementById('o_ul1').getElementsByTagName("img"); //所有图片
        
        for(var i=0; i<oImg.length; i++){ //闭包
            oImg[i].index = i; //自定义属性
            oImg[i].onmouseover = function(){
                console.log(this);
                oDa.src=oImg[this.index].src;
            }
        }
    }
    