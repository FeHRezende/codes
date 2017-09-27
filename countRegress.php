<?php echo '<div id="my-timer" style = "text-align:right;">
                  <span style="color: #990002; font-size: 16px; width:100px; ">A página irá atualizar em <b id="show-time">4:00</b>
                  <b> minutos</b>.</span>        
            </div> '; ?>

<script type="text/javascript">

        $(function(){
                window.setInterval(function() {

                    var frase = $("b[id=show-time]").html();
                    frase = frase.split(':');
                    var timeCounterMin = frase[0];
                    var timeCounterSeg = frase[1];

                    if(timeCounterSeg == 00){
                        timeCounterSeg = 60;
                    }

                    var updateTimeSeg = eval(timeCounterSeg) - eval(1);

                    if((timeCounterSeg == 60)&&(timeCounterMin >= 0)){
                        var updateTimeMin = eval(timeCounterMin) - eval(1);
                    }
                    else{
                        updateTimeMin = timeCounterMin;
                    }

                    if(updateTimeSeg == 60){
                        updateTimeSeg = '00';
                    }
                    else if((updateTimeSeg >= 0)&&(updateTimeSeg <= 9)){
                        updateTimeSeg = '0'+updateTimeSeg;
                    }

                    updateTime = updateTimeMin+':'+updateTimeSeg;

                    $("b[id=show-time]").html(updateTime);
    
                    if((updateTimeMin == 0)&&(updateTimeSeg == 00)){
                        location.reload();
                     }

                }, 1000);

        });

</script>
