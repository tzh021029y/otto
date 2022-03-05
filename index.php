<!DOCTYPE html>
<html>
<head>


  <meta charset="utf-8">
  <title>Layui</title>
  <meta name="renderer" content="webkit">
  <link rel="icon" sizes="any" mask="" href="https://www.baidu.com/img/baidu_85beaf5496f291521eb75ba38eacbd87.svg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="./layui/css/layui.css"  media="all">
  
</head>
<body>

 
<ul class="layui-nav">
  <li class="layui-nav-item layui-this"><a href="./baidu.html" target="_blank">百度热搜</a></li>

  </li>
  <li class="layui-nav-item"><a href="444.HTML">444</a></li>
  <li class="layui-nav-item">
    <a href="javascript:;">结果</a>
    <dl class="layui-nav-child">
      <dd><a href="qwqw.html">URL</a></dd>
      <dd><a href="./tupian.html" target="_blank">B站排行榜爬虫</a></dd>
      <dd><a href="kebiao.html">课表</a></dd>
    </dl>
  </li>

  <li class="layui-nav-item"><a href="HTML5 3D.html" target="_blank">演示</a></li>
  <li class="layui-nav-item"><a href="./test.php" target="_blank">phptest</a></li>
  <li class="layui-nav-item"><a href="./DVWA-master/setup.php" target="_blank">DVWA</a></li>
  <li class="layui-nav-item"><a href="./wordpress/index.php" target="_blank">WordPress</a></li>
</ul>
 
 <div class="layui-container">
  <div class="layui-row"><fieldset class="layui-elem-field layedit-" style="margin-top: 30px;">
  <legend>轮播</legend>
</fieldset>  
	<div class="layui-carousel" id="test10" style="display：inline-block">
  	<div carousel-item="" >
    <div><img src="./img/ (1).jpg" start=""></div>
    <div><img src="./img/ (2).jpg"></div>
    <div><img src="./img/ (3).jpg"></div>
    <div><img src="./img/ (4).jpg"></div>
    <div><img src="./img/ (4).png"></div>
    <div><img src="./img/ (5).png"></div>
    <div><img src="./img/ (2).png"></div>
  </div>
</div>
</div>
</div>
	
<script src="./layui/layui.js" charset="utf-8"></script>

<script>
layui.use(['carousel', 'form'], function(){
  var carousel = layui.carousel
  ,form = layui.form;
  

  //图片轮播
  carousel.render({
    elem: '#test10'
    ,width: '100%'
    ,height: '400px'
    ,interval: 5000
	 ,
  });

  //事件
  carousel.on('change(test10)', function(res){
    console.log(res)
  });
  
  var $ = layui.$, active = {
    set: function(othis){
      var THIS = 'layui-bg-normal'
      ,key = othis.data('key')
      ,options = {};
      
      othis.css('background-color', '#5FB878').siblings().removeAttr('style'); 
      options[key] = othis.data('value');
      ins3.reload(options);
    }
  };
  
  //监听开关
  form.on('switch(autoplay)', function(){
    ins3.reload({
      autoplay: this.checked
    });
  });
  
  $('.demoSet').on('keyup', function(){
    var value = this.value
    ,options = {};
    if(!/^\d+$/.test(value)) return;
    
    options[this.name] = value;
    ins3.reload(options);
  });
  
});
</script>
	
</body>




<style type="text/css" >

 #master {

       position:absolute;

      left:47%;
      

      bottom:10px;

      text-align :center;

        }

 </style>
</html>
