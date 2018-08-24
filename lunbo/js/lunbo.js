window.onload=function(){//解决js链接放在前面不好用
    //window.onload事件整个页面或图片加载完成后立即发生
    (function(){//避免变量污染 
        // var oImgs=document.getElementById('imgs');
        // var oImg=oImgs.getElementsByTagName('img');
        //获取imgs的图片数组，等同于下
        var oImg=document.getElementById('imgs').getElementsByTagName('img');
        var oLi=document.getElementById('nav').getElementsByTagName('li');
        var con=document.getElementById('container');
        var oLeft=document.getElementById('left');
        var oRig=document.getElementById('rig');
        var now=0;//到谁谁出现  下标
        var timer;
        for(var i=0;i<oLi.length;i++){//li按钮1234组，图片切换（动画）
            oLi[i].index=i;
            oLi[i].onmouseover = function(){
                now=this.index;//到哪一个li就把哪一个li给now
                play();
            }
        }
        function play(){//动画，有样式(到谁谁有样式)
            show();
            now++;
            if(now==oImg.length) now=0; 
        }

        function show(){
            for(var i=0;i<oImg.length;i++){//先清空在设置样式
                oImg[i].className='';//图片
                oLi[i].className='';//li
            }
            oImg[now].className='on';
            oLi[now].className='on';
        }
        function go(){//主函数，到时见有动画效果
            timer=setInterval(play,1000);
        }
        go();
        con.onmouseover=function(){
            clearInterval(timer);
        }
        con.onmouseout=function(){
            go();
        }
        //左右按钮
        oLeft.onclick=oRig.onclick=function(){
            
            if(this==oLeft){
                now--;
                if(now==-1) now=oLi.length-1;
            }else{
                now++;
                if(now==oLi.length) now=0;
            }
            show();  
        }
    })();
}