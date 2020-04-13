<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php
      date_default_timezone_set('PRC'); 
      $hour = date('H');
      if($hour < 6 || $hour >= 18){   
        echo '<link href="/usr/themes/illi/css/darkmode.css" rel="stylesheet"/>';   
      }else{
        echo ' ';   
    }
    ?>

<div style="height:30px;"/>
<footer>
    <div align="center">
        <?php Uptime_Plugin::show();?>
        <?php Typecho_Widget::widget('Widget_Options')->copyright(); ?>
<div style="margin-top:5px;">
        <a rel="nofollow" href="http://www.beian.miit.gov.cn" target="_blank" style="margin-top:5px;font-size: 14px;"> - 苏ICP备 20015498号 | </a><a href="https://icp.gov.moe" target="_blank" style="font-size: 14px;">萌ICP备 </a><a href="https://icp.gov.moe/?keyword=20202320" target="_blank" style="font-size: 14px;"> 20202320号 - </a>
</div>
    </div>
</footer>
<script>
    hm = $('.header-menu');
    let m1 = 0; // 滚动的值
    let m2 = 0; // 对比时间的值
    let timer = null;
        $(document).ready(function(){
            var p=0;t=0;
            $(window).scroll(function(e){
                clearTimeout(timer); // 每次滚动前 清除一次
            timer = setTimeout(function() {
            m1 = document.documentElement.scrollTop || document.body.scrollTop; //滚动的值
            m2 = document.documentElement.scrollTop || document.body.scrollTop; //对比时间的值
            if (m2 == m1) {
                $('.header-menu').css({transform : 'translate(0,0)'})
                $('.bar').css({transform : 'translate(0,0)'})
                $('.header-menu').css({transform : 'translate(0,0)'})
            }
        }, 560);
            p=$(this).scrollTop();
                if(t<=p){
                    $('.header-menu').css({transform : 'translate(0,-65px)'})
                    $('.bar').css({transform : 'translate(-45px,0)'})
                }else{
                    $('.header-menu').css({transform : 'translate(0,0)'})
                    $('.bar').css({transform : 'translate(-45px,0)'})
                }t = p;
            })
        })
</script>
<?php $this->footer(); ?>
</body>
</html>
