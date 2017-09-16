/**
 * Created by 彪哥 on 2017/9/16.
 */
var itcast={
    /*
     * obj:要绑定事件盒子
     * callback：点击事件触发后的回调函数
     * */
    tap:function(obj,callback){
        if(typeof obj=='object'){
            var startTime=0; //记录起始时间
            var isMove=false; //记录是否移动

            obj.addEventListener('touchstart',function(){
                startTime=Date.now();//记录起始时间
            });

            obj.addEventListener('touchmove',function(){
                isMove=true;//记录手指移动
            });

            obj.addEventListener('touchend',function(e){
                //判断是否为click事件
                if(Date.now()-startTime<150&&!isMove){
                    callback&&callback(e); //执行回到函数
                }

                //数据重置
                startTime=0;
                isMove=false;
            });

        }

    }
};
