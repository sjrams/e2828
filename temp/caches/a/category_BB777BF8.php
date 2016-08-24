<?php exit;?>a:3:{s:8:"template";a:6:{i:0;s:48:"D:/xampp/htdocs/e2828/themes/xiaomi/category.dwt";i:1;s:59:"D:/xampp/htdocs/e2828/themes/xiaomi/library/page_header.lbi";i:2;s:55:"D:/xampp/htdocs/e2828/themes/xiaomi/library/ur_here.lbi";i:3;s:58:"D:/xampp/htdocs/e2828/themes/xiaomi/library/goods_list.lbi";i:4;s:58:"D:/xampp/htdocs/e2828/themes/xiaomi/library/shop_alert.lbi";i:5;s:59:"D:/xampp/htdocs/e2828/themes/xiaomi/library/page_footer.lbi";}s:7:"expires";i:1472013338;s:8:"maketime";i:1472009738;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="三星 samsung sanxing" />
<meta name="Description" content="" />
<title>三星_手机分类_汕头E家数码-汕头手机报价网|汕头手机网|汕头手机门户网站</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<script src="themes/xiaomi/js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="themes/xiaomi/css/goods-category.min.css?ver=2013120301" />
<script type="text/javascript" src="js/common.js"></script><script type="text/javascript" src="js/user.js"></script><script type="text/javascript" src="js/utils.js"></script></head>
<body>
<link rel="stylesheet" href="themes/xiaomi/css/base.min.css?2014050501" />
<script src="themes/xiaomi/js/jquery.js"></script>
<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<script type="text/javascript">
var isWidescreen=screen.width<1200;
if (isWidescreen){
document.getElementsByTagName("body")[0].className="w950";
document.write("<link rel='stylesheet' type='text/css' href='themes/xiaomi/css/980base.css'>");
}
</script>
<div class="site-topbar">
  <div class="container">
    <div class="topbar-nav">
            <a href="mobile" 
            >移动版</a>
            <span class="sep">|</span>
                  <a href="index.php" 
            >欢迎光临汕头E家数码-最新手机报价网</a>
                </div>
    <div class="topbar-info J_userInfo"> 554fcae493e564ee0dc75bdf2ebf94camember_info|a:1:{s:4:"name";s:11:"member_info";}554fcae493e564ee0dc75bdf2ebf94ca </div>
  </div>
</div>
<div class="site-header container" id="site_header">
  <div class="site-logo"> <a class="logo" href="index.php"><img src="themes/xiaomi/images/logo.gif" /> </a><span>|</span>
    <li>
       <p>智能手机</p>
       <p>品质如一</p>
    </li>
   </div>
  <div class="header-info">
    <div class="search-section">
      <script type="text/javascript">
    
    <!--
    function checkSearchForm()
    {
        if(document.getElementById('keyword').value)
        {
            return true;
        }
        else
        {
            alert("请输入搜索关键词！");
            return false;
        }
    }
    -->
    
    </script>
	<script language="javascript">
	function drop_cart_goods(id)
	{
		$.ajax({
						type:"POST",
						url:"flow.php?step=drop_cart_goods&id=" + id,
						cache:false,
						dataType:'json',     //接受数据格式
						data:'',
						success:function(result){
							$('#J_miniCartList').html(result.message);
							$('.J_cartNum').html('(' + result.goods_num + ')');
						}
					});
	}
	
	</script>
      <form id="J_searchForm" class="search-form clearfix" action="search.php" method="get" onSubmit="return checkSearchForm()" >
        <input class="search-text" type="search" name="keywords" id="keyword" autocomplete="off" value="" placeholder="搜索您需要的商品" />
        <input type="submit" class="search-btn iconfont" value="&#xe630;" />
        <!--[if IE 6]><div class="ie6-fix"></div><![endif]-->
        <div class="hot-words">  <a href="search.php?keywords=oppo">oppo</a>  <a href="search.php?keywords=vivo">vivo</a>  <a href="search.php?keywords=iphone">iphone</a>  </div>
      </form>
    </div>
    <div class="cart-section"> <a id="J_miniCart" class="mini-cart" href="flow.php"><i class="iconfont">&#xe609;</i>购物车<span class="mini-cart-num J_cartNum">(554fcae493e564ee0dc75bdf2ebf94cacart_count|a:1:{s:4:"name";s:10:"cart_count";}554fcae493e564ee0dc75bdf2ebf94ca)</span></a>
      <div id="J_miniCartList" class="mini-cart-list">
        		554fcae493e564ee0dc75bdf2ebf94cacart_data|a:1:{s:4:"name";s:9:"cart_data";}554fcae493e564ee0dc75bdf2ebf94ca      </div>
    </div>
  </div>
  <div class="header-nav clearfix">
    <div id="J_categoryContainer" class="nav-category"> <a class="btn-category-list" href="catalog.php">商品总汇</a>
      <div class="nav-category-section" style="display: none;">
        <ul class="nav-category-list">
          		  <li class="nav-category-item ">
            <div class="nav-category-content"><a id="uu"  class="title_43" href="category.php?id=43">手机分类</a>
           
		    <!--  <div class="links">
			  			<!--  			  <a href="category.php?id=30">苹果</a>
			  			  			<!--  			  <a href="category.php?id=31">三星</a>
			  			  			<!--  			  			<!--  			  			<!--  			  			<!--  			  			<!--  			  			<!--  			  			<!--  			  			<!--  			  			<!--  			  			<!--  			  			<!--  			  			<!--  			  			<!--  			  			<!--  			  			<!--  			  			<!--  			  			<!--  			  			<!--  			  			<!--  			  			<!--  			  			<!--  			  			<!--  			  			<!--  			  			<!--  </div>
			  -->
			                <div class="nav-category-children">
                <ul class="children-list">
				                                                  <li><a href="category.php?id=30"><img src="themes/xiaomi/images/index/cat_30.jpg" alt=""><span class="text">苹果</span></a></li>
								                                                    <li><a href="category.php?id=31"><img src="themes/xiaomi/images/index/cat_31.jpg" alt=""><span class="text">三星</span></a></li>
								                                                    <li><a href="category.php?id=32"><img src="themes/xiaomi/images/index/cat_32.jpg" alt=""><span class="text">oppo</span></a></li>
								                                                    <li><a href="category.php?id=33"><img src="themes/xiaomi/images/index/cat_33.jpg" alt=""><span class="text">vivo</span></a></li>
								                                                    <li><a href="category.php?id=34"><img src="themes/xiaomi/images/index/cat_34.jpg" alt=""><span class="text">小米</span></a></li>
								                                                    <li><a href="category.php?id=35"><img src="themes/xiaomi/images/index/cat_35.jpg" alt=""><span class="text">华为</span></a></li>
								                                  				                                  				                                  				                                  				                                  				                                  				                                  				                                  				                                  				                                  				                                  				                                  				                                  				                                  				                                  				                                  				                                  				                                  				                                  				                  </ul>
                  
                 
				
				<ul class="children-list">
												  								  								  								  								  								  				                  <li><a href="category.php?id=36"><img src="themes/xiaomi/images/index/cat_36.jpg" alt=""><span class="text">魅族</span></a></li>   
				    				  				                  <li><a href="category.php?id=37"><img src="themes/xiaomi/images/index/cat_37.jpg" alt=""><span class="text">乐视</span></a></li>   
				    				  				                  <li><a href="category.php?id=38"><img src="themes/xiaomi/images/index/cat_38.jpg" alt=""><span class="text">华硕</span></a></li>   
				    				  				                  <li><a href="category.php?id=39"><img src="themes/xiaomi/images/index/cat_39.jpg" alt=""><span class="text">360奇酷</span></a></li>   
				    				  				                  <li><a href="category.php?id=40"><img src="themes/xiaomi/images/index/cat_40.jpg" alt=""><span class="text">海信</span></a></li>   
				    				  				                  <li><a href="category.php?id=41"><img src="themes/xiaomi/images/index/cat_41.jpg" alt=""><span class="text">金立</span></a></li>   
				    				  								  								  								  								  								  								  								  								  								  								  								  								  								                  </ul>
					
            
				
				<ul class="children-list">
												  								  								  								  								  								  								  								  								  								  								  								  				                  <li><a href="category.php?id=44"><img src="themes/xiaomi/images/index/cat_44.jpg" alt=""><span class="text">诺基亚</span></a></li>   
				    				  				                  <li><a href="category.php?id=45"><img src="themes/xiaomi/images/index/cat_45.jpg" alt=""><span class="text">HTC</span></a></li>   
				    				  				                  <li><a href="category.php?id=46"><img src="themes/xiaomi/images/index/cat_46.jpg" alt=""><span class="text">联想</span></a></li>   
				    				  				                  <li><a href="category.php?id=47"><img src="themes/xiaomi/images/index/cat_47.jpg" alt=""><span class="text">天语</span></a></li>   
				    				  				                  <li><a href="category.php?id=49"><img src="themes/xiaomi/images/index/cat_49.jpg" alt=""><span class="text">LG</span></a></li>   
				    				  				                  <li><a href="category.php?id=50"><img src="themes/xiaomi/images/index/cat_50.jpg" alt=""><span class="text">TCL</span></a></li>   
				    				  								  								  								  								  								  								  								                  </ul>
					
                       
				
				<ul class="children-list">
												  								  								  								  								  								  								  								  								  								  								  								  								  								  								  								  								  								  				                  <li><a href="category.php?id=52"><img src="themes/xiaomi/images/index/cat_52.jpg" alt=""><span class="text">中兴</span></a></li>   
				    				  				                  <li><a href="category.php?id=53"><img src="themes/xiaomi/images/index/cat_53.jpg" alt=""><span class="text">语信</span></a></li>   
				    				  				                  <li><a href="category.php?id=54"><img src="themes/xiaomi/images/index/cat_54.jpg" alt=""><span class="text">美图</span></a></li>   
				    				  				                  <li><a href="category.php?id=55"><img src="themes/xiaomi/images/index/cat_55.jpg" alt=""><span class="text">锤子</span></a></li>   
				    				  				                  <li><a href="category.php?id=56"><img src="themes/xiaomi/images/index/cat_56.jpg" alt=""><span class="text">微软</span></a></li>   
				    				  				                  <li><a href="category.php?id=57"><img src="themes/xiaomi/images/index/cat_57.jpg" alt=""><span class="text">一加</span></a></li>   
				    				  								                                   </ul>
					
				
				<ul class="children-list">
												  								  								  								  								  								  								  								  								  								  								  								  								  								  								  								  								  								  								  								  								  								  								  								  				                  <li><a href="category.php?id=58"><img src="themes/xiaomi/images/index/cat_58.jpg" alt=""><span class="text">酷派</span></a></li>   
				    				                                   </ul>
					
                
              </div>
			              </div>
          </li>
		  		  <li class="nav-category-item ">
            <div class="nav-category-content"><a id="uu"  class="title_60" href="category.php?id=60">平板专区</a>
           
		    <!--  <div class="links">
			  			<!--  			  <a href="category.php?id=62">苹果</a>
			  			  			<!--  </div>
			  -->
			                <div class="nav-category-children">
                <ul class="children-list">
				                                                  <li><a href="category.php?id=62"><img src="themes/xiaomi/images/index/cat_62.jpg" alt=""><span class="text">苹果</span></a></li>
								                  </ul>
                  
                 
				
				<ul class="children-list">
												                  </ul>
					
            
				
				<ul class="children-list">
												                  </ul>
					
                       
				
				<ul class="children-list">
												                                   </ul>
					
				
				<ul class="children-list">
												                                   </ul>
					
                
              </div>
			              </div>
          </li>
		  		  <li class="nav-category-item ">
            <div class="nav-category-content"><a id="uu"  class="title_59" href="category.php?id=59">智能腕表</a>
           
		    <!--  <div class="links">
			  			<!--  			  <a href="category.php?id=70">小天才</a>
			  			  			<!--  			  <a href="category.php?id=71">三星</a>
			  			  			<!--  			  			<!--  			  			<!--  			  			<!--  			  			<!--  </div>
			  -->
			                <div class="nav-category-children">
                <ul class="children-list">
				                                                  <li><a href="category.php?id=70"><img src="themes/xiaomi/images/index/cat_70.jpg" alt=""><span class="text">小天才</span></a></li>
								                                                    <li><a href="category.php?id=71"><img src="themes/xiaomi/images/index/cat_71.jpg" alt=""><span class="text">三星</span></a></li>
								                                                    <li><a href="category.php?id=72"><img src="themes/xiaomi/images/index/cat_72.jpg" alt=""><span class="text">其他</span></a></li>
								                                                    <li><a href="category.php?id=73"><img src="themes/xiaomi/images/index/cat_73.jpg" alt=""><span class="text">苹果</span></a></li>
								                                                    <li><a href="category.php?id=74"><img src="themes/xiaomi/images/index/cat_74.jpg" alt=""><span class="text">华为</span></a></li>
								                                                    <li><a href="category.php?id=75"><img src="themes/xiaomi/images/index/cat_75.jpg" alt=""><span class="text">360</span></a></li>
								                  </ul>
                  
                 
				
				<ul class="children-list">
												  								  								  								  								  								                  </ul>
					
            
				
				<ul class="children-list">
												  								  								  								  								  								                  </ul>
					
                       
				
				<ul class="children-list">
												  								  								  								  								  								                                   </ul>
					
				
				<ul class="children-list">
												  								  								  								  								  								                                   </ul>
					
                
              </div>
			              </div>
          </li>
		  		  <li class="nav-category-item ">
            <div class="nav-category-content"><a id="uu"  class="title_63" href="category.php?id=63">手机储存卡</a>
           
		    <!--  <div class="links">
			  			<!--  			  <a href="category.php?id=80">万能读卡</a>
			  			  			<!--  			  <a href="category.php?id=81">闪迪</a>
			  			  			<!--  			  			<!--  			  			<!--  </div>
			  -->
			                <div class="nav-category-children">
                <ul class="children-list">
				                                                  <li><a href="category.php?id=80"><img src="themes/xiaomi/images/index/cat_80.jpg" alt=""><span class="text">万能读卡</span></a></li>
								                                                    <li><a href="category.php?id=81"><img src="themes/xiaomi/images/index/cat_81.jpg" alt=""><span class="text">闪迪</span></a></li>
								                                                    <li><a href="category.php?id=82"><img src="themes/xiaomi/images/index/cat_82.jpg" alt=""><span class="text">金士顿</span></a></li>
								                                                    <li><a href="category.php?id=83"><img src="themes/xiaomi/images/index/cat_83.jpg" alt=""><span class="text">东芝</span></a></li>
								                  </ul>
                  
                 
				
				<ul class="children-list">
												  								  								  								                  </ul>
					
            
				
				<ul class="children-list">
												  								  								  								                  </ul>
					
                       
				
				<ul class="children-list">
												  								  								  								                                   </ul>
					
				
				<ul class="children-list">
												  								  								  								                                   </ul>
					
                
              </div>
			              </div>
          </li>
		  		  <li class="nav-category-item ">
            <div class="nav-category-content"><a id="uu"  class="title_64" href="category.php?id=64">移动电源</a>
           
		    <!--  <div class="links">
			  			<!--  			  <a href="category.php?id=76">羽博</a>
			  			  			<!--  			  <a href="category.php?id=77">米格</a>
			  			  			<!--  			  			<!--  			  			<!--  </div>
			  -->
			                <div class="nav-category-children">
                <ul class="children-list">
				                                                  <li><a href="category.php?id=76"><img src="themes/xiaomi/images/index/cat_76.jpg" alt=""><span class="text">羽博</span></a></li>
								                                                    <li><a href="category.php?id=77"><img src="themes/xiaomi/images/index/cat_77.jpg" alt=""><span class="text">米格</span></a></li>
								                                                    <li><a href="category.php?id=78"><img src="themes/xiaomi/images/index/cat_78.jpg" alt=""><span class="text">乐友</span></a></li>
								                                                    <li><a href="category.php?id=79"><img src="themes/xiaomi/images/index/cat_79.jpg" alt=""><span class="text">酷派</span></a></li>
								                  </ul>
                  
                 
				
				<ul class="children-list">
												  								  								  								                  </ul>
					
            
				
				<ul class="children-list">
												  								  								  								                  </ul>
					
                       
				
				<ul class="children-list">
												  								  								  								                                   </ul>
					
				
				<ul class="children-list">
												  								  								  								                                   </ul>
					
                
              </div>
			              </div>
          </li>
		  		  <li class="nav-category-item ">
            <div class="nav-category-content"><a id="uu"  class="title_65" href="category.php?id=65">耳机 音响</a>
           
		    <!--  <div class="links">
			  			<!--  			  <a href="category.php?id=88">小米</a>
			  			  			<!--  			  <a href="category.php?id=89">其他</a>
			  			  			<!--  			  			<!--  			  			<!--  </div>
			  -->
			                <div class="nav-category-children">
                <ul class="children-list">
				                                                  <li><a href="category.php?id=88"><img src="themes/xiaomi/images/index/cat_88.jpg" alt=""><span class="text">小米</span></a></li>
								                                                    <li><a href="category.php?id=89"><img src="themes/xiaomi/images/index/cat_89.jpg" alt=""><span class="text">其他</span></a></li>
								                                                    <li><a href="category.php?id=90"><img src="themes/xiaomi/images/index/cat_90.jpg" alt=""><span class="text">苹果</span></a></li>
								                                                    <li><a href="category.php?id=91"><img src="themes/xiaomi/images/index/cat_91.jpg" alt=""><span class="text">捷波朗</span></a></li>
								                  </ul>
                  
                 
				
				<ul class="children-list">
												  								  								  								                  </ul>
					
            
				
				<ul class="children-list">
												  								  								  								                  </ul>
					
                       
				
				<ul class="children-list">
												  								  								  								                                   </ul>
					
				
				<ul class="children-list">
												  								  								  								                                   </ul>
					
                
              </div>
			              </div>
          </li>
		  		  <li class="nav-category-item ">
            <div class="nav-category-content"><a id="uu"  class="title_66" href="category.php?id=66">数据线 充电器</a>
           
		    <!--  <div class="links">
			  			<!--  </div>
			  -->
			              </div>
          </li>
		  		  <li class="nav-category-item ">
            <div class="nav-category-content"><a id="uu"  class="title_67" href="category.php?id=67">保护壳</a>
           
		    <!--  <div class="links">
			  			<!--  			  <a href="category.php?id=92">三星</a>
			  			  			<!--  			  <a href="category.php?id=93">苹果</a>
			  			  			<!--  			  			<!--  </div>
			  -->
			                <div class="nav-category-children">
                <ul class="children-list">
				                                                  <li><a href="category.php?id=92"><img src="themes/xiaomi/images/index/cat_92.jpg" alt=""><span class="text">三星</span></a></li>
								                                                    <li><a href="category.php?id=93"><img src="themes/xiaomi/images/index/cat_93.jpg" alt=""><span class="text">苹果</span></a></li>
								                                                    <li><a href="category.php?id=94"><img src="themes/xiaomi/images/index/cat_94.jpg" alt=""><span class="text">定制</span></a></li>
								                  </ul>
                  
                 
				
				<ul class="children-list">
												  								  								                  </ul>
					
            
				
				<ul class="children-list">
												  								  								                  </ul>
					
                       
				
				<ul class="children-list">
												  								  								                                   </ul>
					
				
				<ul class="children-list">
												  								  								                                   </ul>
					
                
              </div>
			              </div>
          </li>
		  		  <li class="nav-category-item ">
            <div class="nav-category-content"><a id="uu"  class="title_69" href="category.php?id=69">其他</a>
           
		    <!--  <div class="links">
			  			<!--  			  <a href="category.php?id=68">车载配件</a>
			  			  			<!--  			  <a href="category.php?id=84">u盘</a>
			  			  			<!--  			  			<!--  			  			<!--  			  			<!--  </div>
			  -->
			                <div class="nav-category-children">
                <ul class="children-list">
				                                                  <li><a href="category.php?id=68"><img src="themes/xiaomi/images/index/cat_68.jpg" alt=""><span class="text">车载配件</span></a></li>
								                                                    <li><a href="category.php?id=84"><img src="themes/xiaomi/images/index/cat_84.jpg" alt=""><span class="text">u盘</span></a></li>
								                                                    <li><a href="category.php?id=85"><img src="themes/xiaomi/images/index/cat_85.jpg" alt=""><span class="text">电视机顶盒</span></a></li>
								                                                    <li><a href="category.php?id=86"><img src="themes/xiaomi/images/index/cat_86.jpg" alt=""><span class="text">电池</span></a></li>
								                                                    <li><a href="category.php?id=87"><img src="themes/xiaomi/images/index/cat_87.jpg" alt=""><span class="text">保护膜</span></a></li>
								                  </ul>
                  
                 
				
				<ul class="children-list">
												  								  								  								  								                  </ul>
					
            
				
				<ul class="children-list">
												  								  								  								  								                  </ul>
					
                       
				
				<ul class="children-list">
												  								  								  								  								                                   </ul>
					
				
				<ul class="children-list">
												  								  								  								  								                                   </ul>
					
                
              </div>
			              </div>
          </li>
		            
        </ul>
      </div>
    </div>
    <div class="nav-main">
      <ul class="nav-main-list J_menuNavMain clearfix">
        <li class="nav-main-item1 current"> <a  href="category.php?id=43"><span class="text">手机</span></a> </li>
                <li class="nav-main-item "> <a  href="category.php?id=43" ><span class="text">配件</span><!--<span class="arrow"></span>--></a> 554fcae493e564ee0dc75bdf2ebf94camenu_goods|a:2:{s:4:"name";s:10:"menu_goods";s:3:"url";s:18:"category.php?id=43";}554fcae493e564ee0dc75bdf2ebf94ca </li> 
                <li class="nav-main-item "> <a  href="topic.php?topic_id=1" ><span class="text">厂家优惠</span><!--<span class="arrow"></span>--></a> 554fcae493e564ee0dc75bdf2ebf94camenu_goods|a:2:{s:4:"name";s:10:"menu_goods";s:3:"url";s:20:"topic.php?topic_id=1";}554fcae493e564ee0dc75bdf2ebf94ca </li> 
                <li class="nav-main-item "> <a  href="article_cat.php?id=8" ><span class="text">资讯中心</span><!--<span class="arrow"></span>--></a> 554fcae493e564ee0dc75bdf2ebf94camenu_goods|a:2:{s:4:"name";s:10:"menu_goods";s:3:"url";s:20:"article_cat.php?id=8";}554fcae493e564ee0dc75bdf2ebf94ca </li> 
                <li class="nav-main-item "> <a  href="topic.php?topic_id=1" ><span class="text">智能远程</span><!--<span class="arrow"></span>--></a> 554fcae493e564ee0dc75bdf2ebf94camenu_goods|a:2:{s:4:"name";s:10:"menu_goods";s:3:"url";s:20:"topic.php?topic_id=1";}554fcae493e564ee0dc75bdf2ebf94ca </li> 
                <li class="nav-main-item "> <a  href="topic.php?topic_id=1" ><span class="text">我的会员</span><!--<span class="arrow"></span>--></a> 554fcae493e564ee0dc75bdf2ebf94camenu_goods|a:2:{s:4:"name";s:10:"menu_goods";s:3:"url";s:20:"topic.php?topic_id=1";}554fcae493e564ee0dc75bdf2ebf94ca </li> 
                <li class="nav-main-item "> <a  href="topic.php?topic_id=1" ><span class="text">售后与客服</span><!--<span class="arrow"></span>--></a> 554fcae493e564ee0dc75bdf2ebf94camenu_goods|a:2:{s:4:"name";s:10:"menu_goods";s:3:"url";s:20:"topic.php?topic_id=1";}554fcae493e564ee0dc75bdf2ebf94ca </li> 
              </ul>
    </div>
	<div class="button"></div>
  </div>
   
  <div class="open-buy-info"></div>
 
</div>
<script>
/*css*/
if (window.screen.width < 1280)
{	
	document.write("<link rel='stylesheet' type='text/css' href='themes/xiaomi/css/980base.css'>");
	document.write("<link rel='stylesheet' type='text/css' href='themes/xiaomi/css/980category.css'>");
}
</script>
<div class="container breadcrumbs"> 当前位置: <a href=".">首页</a> <code>&gt;</code> <a href="category.php?id=43">手机分类</a> <code>&gt;</code> <a href="category.php?id=31">三星</a></div>
<div class="container">
  <div class="xm-line-box filter-box">
    <div class="box-hd">
      <h3 class="title">554fcae493e564ee0dc75bdf2ebf94cacat_name|a:2:{s:4:"name";s:8:"cat_name";s:2:"id";i:31;}554fcae493e564ee0dc75bdf2ebf94ca</h3>
    </div>
        <div class="box-bd">
      <div class="filter-lists">
                <dl class="xm-filter-list xm-filter-list-first category-filter-list clearfix">
          <dt>品牌：</dt>
          <dd>
            <ul id="typeCat" class="clearfix">
                            <li class="first current"> <a href="category.php?id=31&amp;price_min=0&amp;price_max=0">全部</a> </li>
                            <li class=" "> <a href="category.php?id=31&amp;brand=8&amp;price_min=0&amp;price_max=0">三星</a> </li>
                          </ul>
          </dd>
        </dl>
                        <dl class="xm-filter-list  category-filter-list clearfix">
          <dt>价格：</dt>
          <dd>
            <ul id="typeAdapt" class="clearfix">
                            <li class="first current"> <a href="category.php?id=31&amp;price_min=0&amp;price_max=0">全部</a> </li>
                            <li class=" "> <a href="category.php?id=31&amp;price_min=0&amp;price_max=2000">0&nbsp;-&nbsp;2000</a> </li>
                            <li class=" "> <a href="category.php?id=31&amp;price_min=2000&amp;price_max=4000">2000&nbsp;-&nbsp;4000</a> </li>
                            <li class=" "> <a href="category.php?id=31&amp;price_min=4000&amp;price_max=6000">4000&nbsp;-&nbsp;6000</a> </li>
                            <li class=" "> <a href="category.php?id=31&amp;price_min=6000&amp;price_max=8000">6000&nbsp;-&nbsp;8000</a> </li>
                            <li class=" "> <a href="category.php?id=31&amp;price_min=12000&amp;price_max=14000">12000&nbsp;-&nbsp;14000</a> </li>
                          </ul>
          </dd>
        </dl>
                      </div>
    </div>
      </div>
  <div class="xm-line-box goods-list-box">
    <div class="box-hd">
      <div class="filter-lists">
        <dl class="xm-filter-list xm-filter-list-first category-filter-list clearfix">
          <dd>
            <ul id="typeOrder" class="clearfix">
              <li class=" first"><a href="category.php?category=31&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=sell_number&order=DESC#goods_list" rel="nofollow">销量</a></li>
              <li class=""><a href="category.php?category=31&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=goods_id&order=DESC#goods_list" rel="nofollow">最新</a></li>
              <li class=""><a href="category.php?category=31&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=shop_price&order=DESC#goods_list" rel="nofollow">价格从高到低</a></li>
              <li class=""><a href="category.php?category=31&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=shop_price&order=ASC#goods_list" rel="nofollow">价格从低到高</a></li>
              <li class=""><a href="category.php?category=31&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=click_count&order=DESC#goods_list" rel="nofollow">关注度</a></li>
            </ul>
          </dd>
        </dl>
      </div>
      <div class="more">
        
      </div>
    </div>
	
	    <div class="box-bd">
      <div class="goods-list-section">
        <div class="xm-goods-list-wrap xm-goods-list-wrap-col20">
          <ul class="xm-goods-list clearfix">
		                  <li>
              <div class="xm-goods-item">
                <div class="item-thumb"> <a href="goods.php?id=363"> <img src="images/201606/thumb_img/363_thumb_G_1466533046373.jpg" alt="三星 GALAXY Tab S T705C(4G版) " /> </a> </div>
                <div class="item-info">
                  <span class="item-title"> <a href="goods.php?id=363">三星 GALAXY Tab S T705C(4G版)</a> </span>
                  <div class="item-price"> ￥1930.00<span class="sep">|</span><del>￥2123.00</del> </div>
                  <div class="item-star"> <span class="icon-stat icon-stat-5"></span> <span class="item-comments">554fcae493e564ee0dc75bdf2ebf94cagoods_comment|a:2:{s:4:"name";s:13:"goods_comment";s:2:"id";s:3:"363";}554fcae493e564ee0dc75bdf2ebf94ca人评价</span> </div>
                  <div class="item-actions"> <a onclick="getmousepos(event)" class="btn btn-small btn-primary J_addCart" href="goods.php?id=363"><i class="iconfont">&#xe624;</i>购物车</a> <a class="btn btn-dake btn-small J_addFav" href="javascript:collect(363);"><i class="iconfont">&#xe60a;</i>收藏</a> </div>
                 <div class="item-flag"> 554fcae493e564ee0dc75bdf2ebf94cagoods_save_rate|a:2:{s:4:"name";s:15:"goods_save_rate";s:2:"id";s:3:"363";}554fcae493e564ee0dc75bdf2ebf94ca </div> 
		 
                </div>
              </div>
            </li>
		                    <li>
              <div class="xm-goods-item">
                <div class="item-thumb"> <a href="goods.php?id=364"> <img src="images/201606/thumb_img/364_thumb_G_1466534006130.jpg" alt="三星 GALAXY Tab 4 T231 " /> </a> </div>
                <div class="item-info">
                  <span class="item-title"> <a href="goods.php?id=364">三星 GALAXY Tab 4 T231</a> </span>
                  <div class="item-price"> ￥1030.00<span class="sep">|</span><del>￥1133.00</del> </div>
                  <div class="item-star"> <span class="icon-stat icon-stat-5"></span> <span class="item-comments">554fcae493e564ee0dc75bdf2ebf94cagoods_comment|a:2:{s:4:"name";s:13:"goods_comment";s:2:"id";s:3:"364";}554fcae493e564ee0dc75bdf2ebf94ca人评价</span> </div>
                  <div class="item-actions"> <a onclick="getmousepos(event)" class="btn btn-small btn-primary J_addCart" href="goods.php?id=364"><i class="iconfont">&#xe624;</i>购物车</a> <a class="btn btn-dake btn-small J_addFav" href="javascript:collect(364);"><i class="iconfont">&#xe60a;</i>收藏</a> </div>
                 <div class="item-flag"> 554fcae493e564ee0dc75bdf2ebf94cagoods_save_rate|a:2:{s:4:"name";s:15:"goods_save_rate";s:2:"id";s:3:"364";}554fcae493e564ee0dc75bdf2ebf94ca </div> 
		 
                </div>
              </div>
            </li>
		                    <li>
              <div class="xm-goods-item">
                <div class="item-thumb"> <a href="goods.php?id=366"> <img src="images/201606/thumb_img/366_thumb_G_1466535451071.jpg" alt="三星 GALAXY Tab A 8.0 T355C(4G版) " /> </a> </div>
                <div class="item-info">
                  <span class="item-title"> <a href="goods.php?id=366">三星 GALAXY Tab A 8.0 T355C(4G版)</a> </span>
                  <div class="item-price"> ￥1670.00<span class="sep">|</span><del>￥1837.00</del> </div>
                  <div class="item-star"> <span class="icon-stat icon-stat-5"></span> <span class="item-comments">554fcae493e564ee0dc75bdf2ebf94cagoods_comment|a:2:{s:4:"name";s:13:"goods_comment";s:2:"id";s:3:"366";}554fcae493e564ee0dc75bdf2ebf94ca人评价</span> </div>
                  <div class="item-actions"> <a onclick="getmousepos(event)" class="btn btn-small btn-primary J_addCart" href="goods.php?id=366"><i class="iconfont">&#xe624;</i>购物车</a> <a class="btn btn-dake btn-small J_addFav" href="javascript:collect(366);"><i class="iconfont">&#xe60a;</i>收藏</a> </div>
                 <div class="item-flag"> 554fcae493e564ee0dc75bdf2ebf94cagoods_save_rate|a:2:{s:4:"name";s:15:"goods_save_rate";s:2:"id";s:3:"366";}554fcae493e564ee0dc75bdf2ebf94ca </div> 
		 
                </div>
              </div>
            </li>
		                    <li>
              <div class="xm-goods-item">
                <div class="item-thumb"> <a href="goods.php?id=367"> <img src="images/201606/thumb_img/367_thumb_G_1466536506346.jpg" alt="三星GALAXY Tab A 8.0 T350(WIFI版) " /> </a> </div>
                <div class="item-info">
                  <span class="item-title"> <a href="goods.php?id=367">三星GALAXY Tab A 8.0 T350(WIFI版)</a> </span>
                  <div class="item-price"> ￥1220.00<span class="sep">|</span><del>￥1342.00</del> </div>
                  <div class="item-star"> <span class="icon-stat icon-stat-5"></span> <span class="item-comments">554fcae493e564ee0dc75bdf2ebf94cagoods_comment|a:2:{s:4:"name";s:13:"goods_comment";s:2:"id";s:3:"367";}554fcae493e564ee0dc75bdf2ebf94ca人评价</span> </div>
                  <div class="item-actions"> <a onclick="getmousepos(event)" class="btn btn-small btn-primary J_addCart" href="goods.php?id=367"><i class="iconfont">&#xe624;</i>购物车</a> <a class="btn btn-dake btn-small J_addFav" href="javascript:collect(367);"><i class="iconfont">&#xe60a;</i>收藏</a> </div>
                 <div class="item-flag"> 554fcae493e564ee0dc75bdf2ebf94cagoods_save_rate|a:2:{s:4:"name";s:15:"goods_save_rate";s:2:"id";s:3:"367";}554fcae493e564ee0dc75bdf2ebf94ca </div> 
		 
                </div>
              </div>
            </li>
		                    <li>
              <div class="xm-goods-item">
                <div class="item-thumb"> <a href="goods.php?id=369"> <img src="images/201606/thumb_img/369_thumb_G_1466537886023.jpg" alt="三星 GALAXY Tab A T550(Wifi版) " /> </a> </div>
                <div class="item-info">
                  <span class="item-title"> <a href="goods.php?id=369">三星 GALAXY Tab A T550(Wifi版)</a> </span>
                  <div class="item-price"> ￥1380.00<span class="sep">|</span><del>￥1518.00</del> </div>
                  <div class="item-star"> <span class="icon-stat icon-stat-5"></span> <span class="item-comments">554fcae493e564ee0dc75bdf2ebf94cagoods_comment|a:2:{s:4:"name";s:13:"goods_comment";s:2:"id";s:3:"369";}554fcae493e564ee0dc75bdf2ebf94ca人评价</span> </div>
                  <div class="item-actions"> <a onclick="getmousepos(event)" class="btn btn-small btn-primary J_addCart" href="goods.php?id=369"><i class="iconfont">&#xe624;</i>购物车</a> <a class="btn btn-dake btn-small J_addFav" href="javascript:collect(369);"><i class="iconfont">&#xe60a;</i>收藏</a> </div>
                 <div class="item-flag"> 554fcae493e564ee0dc75bdf2ebf94cagoods_save_rate|a:2:{s:4:"name";s:15:"goods_save_rate";s:2:"id";s:3:"369";}554fcae493e564ee0dc75bdf2ebf94ca </div> 
		 
                </div>
              </div>
            </li>
		                    <li>
              <div class="xm-goods-item">
                <div class="item-thumb"> <a href="goods.php?id=34"> <img src="images/201606/thumb_img/34_thumb_G_1464821704771.jpg" alt="三星 GALAXY A9 A9000(全网通) " /> </a> </div>
                <div class="item-info">
                  <span class="item-title"> <a href="goods.php?id=34">三星 GALAXY A9 A9000(全网通)</a> </span>
                  <div class="item-price"> ￥2480.00<span class="sep">|</span><del>￥2976.00</del> </div>
                  <div class="item-star"> <span class="icon-stat icon-stat-5"></span> <span class="item-comments">554fcae493e564ee0dc75bdf2ebf94cagoods_comment|a:2:{s:4:"name";s:13:"goods_comment";s:2:"id";s:2:"34";}554fcae493e564ee0dc75bdf2ebf94ca人评价</span> </div>
                  <div class="item-actions"> <a onclick="getmousepos(event)" class="btn btn-small btn-primary J_addCart" href="goods.php?id=34"><i class="iconfont">&#xe624;</i>购物车</a> <a class="btn btn-dake btn-small J_addFav" href="javascript:collect(34);"><i class="iconfont">&#xe60a;</i>收藏</a> </div>
                 <div class="item-flag"> 554fcae493e564ee0dc75bdf2ebf94cagoods_save_rate|a:2:{s:4:"name";s:15:"goods_save_rate";s:2:"id";s:2:"34";}554fcae493e564ee0dc75bdf2ebf94ca </div> 
		 
                </div>
              </div>
            </li>
		                    <li>
              <div class="xm-goods-item">
                <div class="item-thumb"> <a href="goods.php?id=33"> <img src="images/201606/thumb_img/33_thumb_G_1464821671880.jpg" alt="三星 GALAXY A5 A5009(电信4G) " /> </a> </div>
                <div class="item-info">
                  <span class="item-title"> <a href="goods.php?id=33">三星 GALAXY A5 A5009(电信4G)</a> </span>
                  <div class="item-price"> ￥1180.00<span class="sep">|</span><del>￥1221.00</del> </div>
                  <div class="item-star"> <span class="icon-stat icon-stat-5"></span> <span class="item-comments">554fcae493e564ee0dc75bdf2ebf94cagoods_comment|a:2:{s:4:"name";s:13:"goods_comment";s:2:"id";s:2:"33";}554fcae493e564ee0dc75bdf2ebf94ca人评价</span> </div>
                  <div class="item-actions"> <a onclick="getmousepos(event)" class="btn btn-small btn-primary J_addCart" href="goods.php?id=33"><i class="iconfont">&#xe624;</i>购物车</a> <a class="btn btn-dake btn-small J_addFav" href="javascript:collect(33);"><i class="iconfont">&#xe60a;</i>收藏</a> </div>
                 <div class="item-flag"> 554fcae493e564ee0dc75bdf2ebf94cagoods_save_rate|a:2:{s:4:"name";s:15:"goods_save_rate";s:2:"id";s:2:"33";}554fcae493e564ee0dc75bdf2ebf94ca </div> 
		 
                </div>
              </div>
            </li>
		                    <li>
              <div class="xm-goods-item">
                <div class="item-thumb"> <a href="goods.php?id=32"> <img src="images/201606/thumb_img/32_thumb_G_1464821640345.jpg" alt="三星 GALAXY S6 Edge G9250(全网通) " /> </a> </div>
                <div class="item-info">
                  <span class="item-title"> <a href="goods.php?id=32">三星 GALAXY S6 Edge G9250(全网通)</a> </span>
                  <div class="item-price"> ￥3600.00<span class="sep">|</span><del>￥4320.00</del> </div>
                  <div class="item-star"> <span class="icon-stat icon-stat-5"></span> <span class="item-comments">554fcae493e564ee0dc75bdf2ebf94cagoods_comment|a:2:{s:4:"name";s:13:"goods_comment";s:2:"id";s:2:"32";}554fcae493e564ee0dc75bdf2ebf94ca人评价</span> </div>
                  <div class="item-actions"> <a onclick="getmousepos(event)" class="btn btn-small btn-primary J_addCart" href="goods.php?id=32"><i class="iconfont">&#xe624;</i>购物车</a> <a class="btn btn-dake btn-small J_addFav" href="javascript:collect(32);"><i class="iconfont">&#xe60a;</i>收藏</a> </div>
                 <div class="item-flag"> 554fcae493e564ee0dc75bdf2ebf94cagoods_save_rate|a:2:{s:4:"name";s:15:"goods_save_rate";s:2:"id";s:2:"32";}554fcae493e564ee0dc75bdf2ebf94ca </div> 
		 
                </div>
              </div>
            </li>
		                    <li>
              <div class="xm-goods-item">
                <div class="item-thumb"> <a href="goods.php?id=31"> <img src="images/201606/thumb_img/31_thumb_G_1464821590084.jpg" alt="三星 GALAXY S6 G9200 " /> </a> </div>
                <div class="item-info">
                  <span class="item-title"> <a href="goods.php?id=31">三星 GALAXY S6 G9200</a> </span>
                  <div class="item-price"> ￥2810.00<span class="sep">|</span><del>￥3091.00</del> </div>
                  <div class="item-star"> <span class="icon-stat icon-stat-5"></span> <span class="item-comments">554fcae493e564ee0dc75bdf2ebf94cagoods_comment|a:2:{s:4:"name";s:13:"goods_comment";s:2:"id";s:2:"31";}554fcae493e564ee0dc75bdf2ebf94ca人评价</span> </div>
                  <div class="item-actions"> <a onclick="getmousepos(event)" class="btn btn-small btn-primary J_addCart" href="goods.php?id=31"><i class="iconfont">&#xe624;</i>购物车</a> <a class="btn btn-dake btn-small J_addFav" href="javascript:collect(31);"><i class="iconfont">&#xe60a;</i>收藏</a> </div>
                 <div class="item-flag"> 554fcae493e564ee0dc75bdf2ebf94cagoods_save_rate|a:2:{s:4:"name";s:15:"goods_save_rate";s:2:"id";s:2:"31";}554fcae493e564ee0dc75bdf2ebf94ca </div> 
		 
                </div>
              </div>
            </li>
		                    <li>
              <div class="xm-goods-item">
                <div class="item-thumb"> <a href="goods.php?id=29"> <img src="images/201606/thumb_img/29_thumb_G_1464821528820.jpg" alt="三星 GALAXY S6 Edge+ G9280(全网通) " /> </a> </div>
                <div class="item-info">
                  <span class="item-title"> <a href="goods.php?id=29">三星 GALAXY S6 Edge+ G9280(全网通)</a> </span>
                  <div class="item-price"> ￥4120.00<span class="sep">|</span><del>￥4944.00</del> </div>
                  <div class="item-star"> <span class="icon-stat icon-stat-5"></span> <span class="item-comments">554fcae493e564ee0dc75bdf2ebf94cagoods_comment|a:2:{s:4:"name";s:13:"goods_comment";s:2:"id";s:2:"29";}554fcae493e564ee0dc75bdf2ebf94ca人评价</span> </div>
                  <div class="item-actions"> <a onclick="getmousepos(event)" class="btn btn-small btn-primary J_addCart" href="goods.php?id=29"><i class="iconfont">&#xe624;</i>购物车</a> <a class="btn btn-dake btn-small J_addFav" href="javascript:collect(29);"><i class="iconfont">&#xe60a;</i>收藏</a> </div>
                 <div class="item-flag"> 554fcae493e564ee0dc75bdf2ebf94cagoods_save_rate|a:2:{s:4:"name";s:15:"goods_save_rate";s:2:"id";s:2:"29";}554fcae493e564ee0dc75bdf2ebf94ca </div> 
		 
                </div>
              </div>
            </li>
		                    <li>
              <div class="xm-goods-item">
                <div class="item-thumb"> <a href="goods.php?id=28"> <img src="images/201606/thumb_img/28_thumb_G_1464821489384.jpg" alt="三星GALAXY S7 Edge G9350(全网通) " /> </a> </div>
                <div class="item-info">
                  <span class="item-title"> <a href="goods.php?id=28">三星GALAXY S7 Edge G9350(全网通)</a> </span>
                  <div class="item-price"> ￥4340.00<span class="sep">|</span><del>￥4774.00</del> </div>
                  <div class="item-star"> <span class="icon-stat icon-stat-5"></span> <span class="item-comments">554fcae493e564ee0dc75bdf2ebf94cagoods_comment|a:2:{s:4:"name";s:13:"goods_comment";s:2:"id";s:2:"28";}554fcae493e564ee0dc75bdf2ebf94ca人评价</span> </div>
                  <div class="item-actions"> <a onclick="getmousepos(event)" class="btn btn-small btn-primary J_addCart" href="goods.php?id=28"><i class="iconfont">&#xe624;</i>购物车</a> <a class="btn btn-dake btn-small J_addFav" href="javascript:collect(28);"><i class="iconfont">&#xe60a;</i>收藏</a> </div>
                 <div class="item-flag"> 554fcae493e564ee0dc75bdf2ebf94cagoods_save_rate|a:2:{s:4:"name";s:15:"goods_save_rate";s:2:"id";s:2:"28";}554fcae493e564ee0dc75bdf2ebf94ca </div> 
		 
                </div>
              </div>
            </li>
		                    <li>
              <div class="xm-goods-item">
                <div class="item-thumb"> <a href="goods.php?id=35"> <img src="images/201606/thumb_img/35_thumb_G_1464821746666.jpg" alt="三星 G3608(移动4G) " /> </a> </div>
                <div class="item-info">
                  <span class="item-title"> <a href="goods.php?id=35">三星 G3608(移动4G)</a> </span>
                  <div class="item-price"> ￥480.00<span class="sep">|</span><del>￥576.00</del> </div>
                  <div class="item-star"> <span class="icon-stat icon-stat-5"></span> <span class="item-comments">554fcae493e564ee0dc75bdf2ebf94cagoods_comment|a:2:{s:4:"name";s:13:"goods_comment";s:2:"id";s:2:"35";}554fcae493e564ee0dc75bdf2ebf94ca人评价</span> </div>
                  <div class="item-actions"> <a onclick="getmousepos(event)" class="btn btn-small btn-primary J_addCart" href="goods.php?id=35"><i class="iconfont">&#xe624;</i>购物车</a> <a class="btn btn-dake btn-small J_addFav" href="javascript:collect(35);"><i class="iconfont">&#xe60a;</i>收藏</a> </div>
                 <div class="item-flag"> 554fcae493e564ee0dc75bdf2ebf94cagoods_save_rate|a:2:{s:4:"name";s:15:"goods_save_rate";s:2:"id";s:2:"35";}554fcae493e564ee0dc75bdf2ebf94ca </div> 
		 
                </div>
              </div>
            </li>
		                    <li>
              <div class="xm-goods-item">
                <div class="item-thumb"> <a href="goods.php?id=36"> <img src="images/201606/thumb_img/36_thumb_G_1464821778539.jpg" alt="三星 GALAXY A3009(电信4G) " /> </a> </div>
                <div class="item-info">
                  <span class="item-title"> <a href="goods.php?id=36">三星 GALAXY A3009(电信4G)</a> </span>
                  <div class="item-price"> ￥730.00<span class="sep">|</span><del>￥803.00</del> </div>
                  <div class="item-star"> <span class="icon-stat icon-stat-5"></span> <span class="item-comments">554fcae493e564ee0dc75bdf2ebf94cagoods_comment|a:2:{s:4:"name";s:13:"goods_comment";s:2:"id";s:2:"36";}554fcae493e564ee0dc75bdf2ebf94ca人评价</span> </div>
                  <div class="item-actions"> <a onclick="getmousepos(event)" class="btn btn-small btn-primary J_addCart" href="goods.php?id=36"><i class="iconfont">&#xe624;</i>购物车</a> <a class="btn btn-dake btn-small J_addFav" href="javascript:collect(36);"><i class="iconfont">&#xe60a;</i>收藏</a> </div>
                 <div class="item-flag"> 554fcae493e564ee0dc75bdf2ebf94cagoods_save_rate|a:2:{s:4:"name";s:15:"goods_save_rate";s:2:"id";s:2:"36";}554fcae493e564ee0dc75bdf2ebf94ca </div> 
		 
                </div>
              </div>
            </li>
		                    <li>
              <div class="xm-goods-item">
                <div class="item-thumb"> <a href="goods.php?id=37"> <img src="images/201606/thumb_img/37_thumb_G_1464821828137.jpg" alt="三星 GALAXY GRAND 3 G7200(移动4G/联通4G) " /> </a> </div>
                <div class="item-info">
                  <span class="item-title"> <a href="goods.php?id=37">三星 GALAXY GRAND 3 G7200(移动4G/联通4G)</a> </span>
                  <div class="item-price"> ￥980.00<span class="sep">|</span><del>￥1176.00</del> </div>
                  <div class="item-star"> <span class="icon-stat icon-stat-5"></span> <span class="item-comments">554fcae493e564ee0dc75bdf2ebf94cagoods_comment|a:2:{s:4:"name";s:13:"goods_comment";s:2:"id";s:2:"37";}554fcae493e564ee0dc75bdf2ebf94ca人评价</span> </div>
                  <div class="item-actions"> <a onclick="getmousepos(event)" class="btn btn-small btn-primary J_addCart" href="goods.php?id=37"><i class="iconfont">&#xe624;</i>购物车</a> <a class="btn btn-dake btn-small J_addFav" href="javascript:collect(37);"><i class="iconfont">&#xe60a;</i>收藏</a> </div>
                 <div class="item-flag"> 554fcae493e564ee0dc75bdf2ebf94cagoods_save_rate|a:2:{s:4:"name";s:15:"goods_save_rate";s:2:"id";s:2:"37";}554fcae493e564ee0dc75bdf2ebf94ca </div> 
		 
                </div>
              </div>
            </li>
		                    <li>
              <div class="xm-goods-item">
                <div class="item-thumb"> <a href="goods.php?id=38"> <img src="images/201606/thumb_img/38_thumb_G_1464821870060.jpg" alt="三星 GALAXY Core Max G5109(电信4G) " /> </a> </div>
                <div class="item-info">
                  <span class="item-title"> <a href="goods.php?id=38">三星 GALAXY Core Max G5109(电信4G)</a> </span>
                  <div class="item-price"> ￥40.00<span class="sep">|</span><del>￥948.00</del> </div>
                  <div class="item-star"> <span class="icon-stat icon-stat-5"></span> <span class="item-comments">554fcae493e564ee0dc75bdf2ebf94cagoods_comment|a:2:{s:4:"name";s:13:"goods_comment";s:2:"id";s:2:"38";}554fcae493e564ee0dc75bdf2ebf94ca人评价</span> </div>
                  <div class="item-actions"> <a onclick="getmousepos(event)" class="btn btn-small btn-primary J_addCart" href="goods.php?id=38"><i class="iconfont">&#xe624;</i>购物车</a> <a class="btn btn-dake btn-small J_addFav" href="javascript:collect(38);"><i class="iconfont">&#xe60a;</i>收藏</a> </div>
                 <div class="item-flag"> 554fcae493e564ee0dc75bdf2ebf94cagoods_save_rate|a:2:{s:4:"name";s:15:"goods_save_rate";s:2:"id";s:2:"38";}554fcae493e564ee0dc75bdf2ebf94ca </div> 
		 
                </div>
              </div>
            </li>
		                    <li>
              <div class="xm-goods-item">
                <div class="item-thumb"> <a href="goods.php?id=39"> <img src="images/201606/thumb_img/39_thumb_G_1464821897903.jpg" alt="三星 Galaxy Mega 2 G7509(电信4G) " /> </a> </div>
                <div class="item-info">
                  <span class="item-title"> <a href="goods.php?id=39">三星 Galaxy Mega 2 G7509(电信4G)</a> </span>
                  <div class="item-price"> ￥1120.00<span class="sep">|</span><del>￥1344.00</del> </div>
                  <div class="item-star"> <span class="icon-stat icon-stat-5"></span> <span class="item-comments">554fcae493e564ee0dc75bdf2ebf94cagoods_comment|a:2:{s:4:"name";s:13:"goods_comment";s:2:"id";s:2:"39";}554fcae493e564ee0dc75bdf2ebf94ca人评价</span> </div>
                  <div class="item-actions"> <a onclick="getmousepos(event)" class="btn btn-small btn-primary J_addCart" href="goods.php?id=39"><i class="iconfont">&#xe624;</i>购物车</a> <a class="btn btn-dake btn-small J_addFav" href="javascript:collect(39);"><i class="iconfont">&#xe60a;</i>收藏</a> </div>
                 <div class="item-flag"> 554fcae493e564ee0dc75bdf2ebf94cagoods_save_rate|a:2:{s:4:"name";s:15:"goods_save_rate";s:2:"id";s:2:"39";}554fcae493e564ee0dc75bdf2ebf94ca </div> 
		 
                </div>
              </div>
            </li>
		                    <li>
              <div class="xm-goods-item">
                <div class="item-thumb"> <a href="goods.php?id=40"> <img src="images/201606/thumb_img/40_thumb_G_1464821922423.jpg" alt="三星 GALAXY E7 E7000(移动4G/联通4G) " /> </a> </div>
                <div class="item-info">
                  <span class="item-title"> <a href="goods.php?id=40">三星 GALAXY E7 E7000(移动4G/联通4G)</a> </span>
                  <div class="item-price"> ￥1430.00<span class="sep">|</span><del>￥1716.00</del> </div>
                  <div class="item-star"> <span class="icon-stat icon-stat-5"></span> <span class="item-comments">554fcae493e564ee0dc75bdf2ebf94cagoods_comment|a:2:{s:4:"name";s:13:"goods_comment";s:2:"id";s:2:"40";}554fcae493e564ee0dc75bdf2ebf94ca人评价</span> </div>
                  <div class="item-actions"> <a onclick="getmousepos(event)" class="btn btn-small btn-primary J_addCart" href="goods.php?id=40"><i class="iconfont">&#xe624;</i>购物车</a> <a class="btn btn-dake btn-small J_addFav" href="javascript:collect(40);"><i class="iconfont">&#xe60a;</i>收藏</a> </div>
                 <div class="item-flag"> 554fcae493e564ee0dc75bdf2ebf94cagoods_save_rate|a:2:{s:4:"name";s:15:"goods_save_rate";s:2:"id";s:2:"40";}554fcae493e564ee0dc75bdf2ebf94ca </div> 
		 
                </div>
              </div>
            </li>
		                    <li>
              <div class="xm-goods-item">
                <div class="item-thumb"> <a href="goods.php?id=42"> <img src="images/201606/thumb_img/42_thumb_G_1464822022209.jpg" alt="三星 GALAXY A7 A7009(电信4G) " /> </a> </div>
                <div class="item-info">
                  <span class="item-title"> <a href="goods.php?id=42">三星 GALAXY A7 A7009(电信4G)</a> </span>
                  <div class="item-price"> ￥1400.00<span class="sep">|</span><del>￥1540.00</del> </div>
                  <div class="item-star"> <span class="icon-stat icon-stat-5"></span> <span class="item-comments">554fcae493e564ee0dc75bdf2ebf94cagoods_comment|a:2:{s:4:"name";s:13:"goods_comment";s:2:"id";s:2:"42";}554fcae493e564ee0dc75bdf2ebf94ca人评价</span> </div>
                  <div class="item-actions"> <a onclick="getmousepos(event)" class="btn btn-small btn-primary J_addCart" href="goods.php?id=42"><i class="iconfont">&#xe624;</i>购物车</a> <a class="btn btn-dake btn-small J_addFav" href="javascript:collect(42);"><i class="iconfont">&#xe60a;</i>收藏</a> </div>
                 <div class="item-flag"> 554fcae493e564ee0dc75bdf2ebf94cagoods_save_rate|a:2:{s:4:"name";s:15:"goods_save_rate";s:2:"id";s:2:"42";}554fcae493e564ee0dc75bdf2ebf94ca </div> 
		 
                </div>
              </div>
            </li>
		                    <li>
              <div class="xm-goods-item">
                <div class="item-thumb"> <a href="goods.php?id=49"> <img src="images/201606/thumb_img/49_thumb_G_1464823275648.jpg" alt="三星 GALAXY On5 G5500(移动/联通双4G) " /> </a> </div>
                <div class="item-info">
                  <span class="item-title"> <a href="goods.php?id=49">三星 GALAXY On5 G5500(移动/联通双4G)</a> </span>
                  <div class="item-price"> ￥690.00<span class="sep">|</span><del>￥828.00</del> </div>
                  <div class="item-star"> <span class="icon-stat icon-stat-5"></span> <span class="item-comments">554fcae493e564ee0dc75bdf2ebf94cagoods_comment|a:2:{s:4:"name";s:13:"goods_comment";s:2:"id";s:2:"49";}554fcae493e564ee0dc75bdf2ebf94ca人评价</span> </div>
                  <div class="item-actions"> <a onclick="getmousepos(event)" class="btn btn-small btn-primary J_addCart" href="goods.php?id=49"><i class="iconfont">&#xe624;</i>购物车</a> <a class="btn btn-dake btn-small J_addFav" href="javascript:collect(49);"><i class="iconfont">&#xe60a;</i>收藏</a> </div>
                 <div class="item-flag"> 554fcae493e564ee0dc75bdf2ebf94cagoods_save_rate|a:2:{s:4:"name";s:15:"goods_save_rate";s:2:"id";s:2:"49";}554fcae493e564ee0dc75bdf2ebf94ca </div> 
		 
                </div>
              </div>
            </li>
		                    <li>
              <div class="xm-goods-item">
                <div class="item-thumb"> <a href="goods.php?id=48"> <img src="images/201606/thumb_img/48_thumb_G_1464823134040.jpg" alt="三星 GALAXY J5 J5008(移动4G) " /> </a> </div>
                <div class="item-info">
                  <span class="item-title"> <a href="goods.php?id=48">三星 GALAXY J5 J5008(移动4G)</a> </span>
                  <div class="item-price"> ￥780.00<span class="sep">|</span><del>￥936.00</del> </div>
                  <div class="item-star"> <span class="icon-stat icon-stat-5"></span> <span class="item-comments">554fcae493e564ee0dc75bdf2ebf94cagoods_comment|a:2:{s:4:"name";s:13:"goods_comment";s:2:"id";s:2:"48";}554fcae493e564ee0dc75bdf2ebf94ca人评价</span> </div>
                  <div class="item-actions"> <a onclick="getmousepos(event)" class="btn btn-small btn-primary J_addCart" href="goods.php?id=48"><i class="iconfont">&#xe624;</i>购物车</a> <a class="btn btn-dake btn-small J_addFav" href="javascript:collect(48);"><i class="iconfont">&#xe60a;</i>收藏</a> </div>
                 <div class="item-flag"> 554fcae493e564ee0dc75bdf2ebf94cagoods_save_rate|a:2:{s:4:"name";s:15:"goods_save_rate";s:2:"id";s:2:"48";}554fcae493e564ee0dc75bdf2ebf94ca </div> 
		 
                </div>
              </div>
            </li>
		    	
           
           
          </ul>
        </div>
        <div class="xm-pagenavi"> 
				<span class="numbers first iconfont">&#xe604;</span>
				        		<span class="numbers current">1</span>
		                		<a class="numbers" href="category.php?id=31&amp;price_min=0&amp;price_max=0&amp;page=2&amp;sort=last_update&amp;order=DESC">2</a>
		                		<a class="numbers" href="category.php?id=31&amp;price_min=0&amp;price_max=0&amp;page=3&amp;sort=last_update&amp;order=DESC">3</a>
		                		<a class="numbers" href="category.php?id=31&amp;price_min=0&amp;price_max=0&amp;page=4&amp;sort=last_update&amp;order=DESC">4</a>
		        				<a class="numbers last iconfont" href="category.php?id=31&amp;price_min=0&amp;price_max=0&amp;page=2&amp;sort=last_update&amp;order=DESC">&#xe605;</a> 
				</div>
      </div>
    </div>
	  </div>
 
<script type="Text/Javascript" language="JavaScript">
<!--
function selectPage(sel)
{
  sel.form.submit();
}
//-->
</script>
<script type="text/javascript">
window.onload = function()
{
  
}
var button_compare = '';
var exist = "您已经选择了%s";
var count_limit = "最多只能选择4个商品进行对比";
var goods_type_different = "\"%s\"和已选择商品类型不同无法进行对比";
var compare_no_goods = "您没有选定任何需要比较的商品或者比较的商品数少于 2 个。";
var btn_buy = "购买";
var is_cancel = "取消";
var select_spe = "请选择商品属性";
</script>
<script type="text/javascript">
    jQuery(function($) {
        var $goodsList = $('.xm-goods-list');
        $goodsList.on({
            'mouseenter': function() {
                $(this).addClass('active');
            },
            'mouseleave': function() {
                $(this).removeClass('active');
            }
        }, 'li');
        
    });
</script> </div>
<style type="text/css">
  /*迷你购物车*/
  .shopbox {display: none; position: absolute; width: 300px;  overflow: hidden; padding-bottom: 10px; border: 1px solid #9eb219; background: #fff; font-size: 12px; z-index: 9999;}
  .shopbox a {font-size: 12px; text-decoration: none;}
  .shopbox h2 {height: 25px; margin: 0; padding: 0;}
  .shopbox h2 a {float: right; padding: 5px 10px 0 0;}
  .shopbox h2 a img {float: left; padding: 4px 4px 0 0;}
  .shopbox h2 a span {float: left; color: #FF0000; cursor: pointer;}
  .shopbox .spboxcontent {}
  .shopbox .spboxcontent .shopboxdetail {overflow: hidden;}
  .shopbox .spboxcontent .shopboxdetail .spboxleft {float: left; padding: 0 20px;}
  .shopbox .spboxcontent .shopboxdetail .spboxleft img {}
  .shopbox .spboxcontent .shopboxdetail .spboxright {float: left;}
  .shopbox .spboxcontent .shopboxdetail .spboxright span.spboxtitle {font-size: 14px; font-weight: bold;}
  .shopbox .spboxcontent .shopboxdetail .spboxright span.blank5 {}
  .shopbox .spboxcontent .shopboxdetail .spboxright span.numstyle {font-weight: bold; color:  #FF0000;}
  .shopbox .spboxcontent .shopboxdetail .spboxright span.numstyle2 {font-weight: bold; color:  #FF0000; font-size: 14px;}
  .shopbox .spboxcontent .shopboxdetail .spboxright p {margin: 0; padding: 0;}
  .shopbox .spboxcontent .shopboxdetail .spboxright p.num {padding: 10px 0;}
  .shopbox .spboxcontent .shopboxdetail .spboxright p.spbbtndiv {}
  .shopbox .spboxcontent .shopboxdetail .spboxright p.spbbtndiv a.jxgwbtn {float: left; margin: 0 10px 0 0; color:  #FF0000; font-size: 14px; line-height: 27px;}
  .shopbox .spboxcontent .shopboxdetail .spboxright p.spbbtndiv a.track {}
  .shopbox .spboxcontent .shopboxdetail .spboxright p.spbbtndiv a.track img {float: left;}
  .shopbox .spboxcontent .shopboxdetail span.blank15 {display: block; line-height: 0; font-size: 0; height: 0; clear: both;}
  
  .shopbox .spboxcontent .gmlist {padding: 15px 0 0; _padding-top: 10px; clear: both;}
  .shopbox .spboxcontent .gmlist h6 {margin: 0 10px; padding: 10px 0 10px 8px; color:  #FF0000; font-size: 12px; border-top: 1px dotted #C9C9C9;}
  .shopbox .spboxcontent .gmlist h6 a {}
  .shopbox .spboxcontent .gmlist ul {margin: 0; padding: 0 0 0 7px; list-style: none; overflow: hidden; zoom: 1;}
  .shopbox .spboxcontent .gmlist ul li {display: inline; float: left; margin: 0 5px 0 6px; width: 76px;}
  .shopbox .spboxcontent .gmlist ul li .ygmPic {}
  .shopbox .spboxcontent .gmlist ul li .ygmPic a {}
  .shopbox .spboxcontent .gmlist ul li .ygmPic a img {border: 1px solid #B4B4B4;}
  .shopbox .spboxcontent .gmlist ul li .ygmName {display: block; padding: 3px 0 0; line-height: 16px; height: 51px; color: #333; overflow: hidden;}
  .shopbox .spboxcontent .gmlist ul li p {margin: 0; padding: 0;}
  .shopbox .spboxcontent .gmlist ul li p.ygmPrice span {color:  #FF0000;}
	#shoploading {position: absolute; top: 25px; width: 442px; height: 337px; line-height: 337px; text-align: center; background: #fff;}
	#shoploading img {padding: 140px 0 0;}
</style>
<div id="shopbox" class="shopbox">
    <div class="shopboxcon">
        <div id="shoploading" style="display: block;"><img alt="loading" src="themes/xiaomi/images/alert/loading.gif"></div>
        <div style="">
          <h2><a class="track close" name="item-close-cart" href="javascript:;" onclick="document.getElementById('shopbox').style.display='none'"><span>关闭</span></a></h2>
          <div class="spboxcontent">
              <div class="shopboxdetail">
                <div class="spboxleft"><img src="themes/xiaomi/images/alert/DPshopcarIco.gif"></div>
                <div class="spboxright">
                  <span class="spboxtitle">该商品已成功放入购物车</span> <span class="blank5"></span>
                  <p class="num">购物车共 <span id="shopboxcount" class="numstyle"></span> 件商品 合计：<span id="shopboxprice" class="numstyle2"></span> 元</p>
                  <span class="blank5"></span>
                  <p class="spbbtndiv">
                    <a href="javascript:void(0)" name="item-continueshop" class="jxgwbtn track" onclick="document.getElementById('shopbox').style.display='none'" style="color:#666666">&lt;&lt;继续购物</a>
                    
					<input type="button" onclick='location.href="flow.php"' value="去结算>>" style="border:1px solid #fff; background-color:#9eb219; padding:5px 25px; color:#FFFFFF; font-size:14px" />
                  </p>
                </div>
              </div>
            <!--  <div class="gmlist">
                <h6 style="color:#333333">购买过该商品的人还购买过</h6>
                <ul>
               
                                                              <li><div class="ygmPic"><a rel="r_item_cat_1_0137636" target="_blank" href="goods.php?id=58" name="item-shopping-pap" class="track"><img src="images/201606/thumb_img/58_thumb_G_1464825362901.jpg" width=70 height=70 style="width:70px"></a></div><a rel="r_item_cat_1_0137636" target="_blank" href="goods.php?id=58" name="item-shopping-pap" class="ygmName track">OPPO R9(全网通)</a><p class="ygmPrice"><span>                      ￥2499.00                      <!--</span></p></li>
                                                                              <li><div class="ygmPic"><a rel="r_item_cat_1_0137636" target="_blank" href="goods.php?id=59" name="item-shopping-pap" class="track"><img src="images/201606/thumb_img/59_thumb_G_1464827830093.jpg" width=70 height=70 style="width:70px"></a></div><a rel="r_item_cat_1_0137636" target="_blank" href="goods.php?id=59" name="item-shopping-pap" class="ygmName track">OPPO R9 Plus(全网...</a><p class="ygmPrice"><span>                      ￥0.10                      <!--</span></p></li>
                                                                              <li><div class="ygmPic"><a rel="r_item_cat_1_0137636" target="_blank" href="goods.php?id=22" name="item-shopping-pap" class="track"><img src="images/201606/thumb_img/22_thumb_G_1464821276818.jpg" width=70 height=70 style="width:70px"></a></div><a rel="r_item_cat_1_0137636" target="_blank" href="goods.php?id=22" name="item-shopping-pap" class="ygmName track">苹果 iPhone6 Plus</a><p class="ygmPrice"><span>                      ￥3890.00                      <!--</span></p></li>
                                                                              <li><div class="ygmPic"><a rel="r_item_cat_1_0137636" target="_blank" href="goods.php?id=21" name="item-shopping-pap" class="track"><img src="images/201606/thumb_img/21_thumb_G_1464821204621.jpg" width=70 height=70 style="width:70px"></a></div><a rel="r_item_cat_1_0137636" target="_blank" href="goods.php?id=21" name="item-shopping-pap" class="ygmName track">苹果 iPhone 6S Pl...</a><p class="ygmPrice"><span>                      ￥4780.00                      <!--</span></p></li>
                                                                              <li><div class="ygmPic"><a rel="r_item_cat_1_0137636" target="_blank" href="goods.php?id=19" name="item-shopping-pap" class="track"><img src="images/201606/thumb_img/19_thumb_G_1464820029548.jpg" width=70 height=70 style="width:70px"></a></div><a rel="r_item_cat_1_0137636" target="_blank" href="goods.php?id=19" name="item-shopping-pap" class="ygmName track">苹果 IPhone 5S(公开...</a><p class="ygmPrice"><span>                      ￥2010.00                      <!--</span></p></li>
                                                </ul>
              </div>
	      -->
          </div>
        </div>
    </div>
</div>  
<script src="themes/xiaomi/js/jquery.json.min.js"></script>	
<script src="themes/xiaomi/js/common.js"></script> <div class="site-footer">
  <div class="container">
  
   <!-- <div class="footer-service">
      <ul class="list-service clearfix">
        <li> <a target="_blank"> <i class="iconfont">&#xe63a;</i> <strong>1小时快修服务</strong> <span>小米之家承诺1小时内完成维修</span> </a> </li>
        <li> <a target="_blank"> <i class="iconfont">&#xe638;</i> <strong>7天无理由退货</strong> <span>收到商品7天内无理由退货服务</span> </a> </li>
        <li> <a target="_blank"> <i class="iconfont">&#xe651;</i> <strong>15天免费换货</strong> <span>故障、质量问题免费换新货承诺</span> </a> </li>
        <li> <a target="_blank"> <i class="iconfont">&#xe64d;</i> <strong>满100元包邮</strong> <span>在线支付满百元免邮费（除电视）</span> </a> </li>
        <li> <a target="_blank"> <i class="iconfont">&#xe63b;</i> <strong>451家售后网点</strong> <span>遍布全国31个省市的售后服务点</span> </a> </li>
      </ul>
    </div>
    -->
    <div class="footer-links clearfix">
	      
      <div class="col-contact">
        <p class="phone">400-00-28289</p>
        <p>周一至周日 8:00-18:00<br />
          （仅收市话费）</p>
		  
		 		 		<!-- <a class="btn btn-primary btn-small" href="http://wpa.qq.com/msgrd?V=1&amp;uin=400-00-28289&amp;Site=E家数码&amp;Menu=yes" target="_blank" >24小时在线客服</a> -->
        <a class="btn btn-primary btn-small" href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&amp;key=XzkzODA3NjY4M18zMzc3OTdfNDAwMDAyODI4OV8yXw" target="_blank" >24小时在线客服</a>
						 		</div>
    </div>
    <div class="footer-info clearfix" style="width:100%">
      <div class="info-text" style="position:relative; text-align:center;width:100%">
        <p>
				<a href="article.php?id=26" >免责条款</a><span class="sep">|</span>				<a href="article.php?id=26" >隐私保护</a><span class="sep">|</span>				<a href="article.php?id=26" >咨询热点 </a><span class="sep">|</span>				<a href="article.php?id=26" >联系我们</a><span class="sep">|</span>				<a href="article.php?id=26" >公司简介</a><span class="sep">|</span>				<a href="article.php?id=26" >批发方案</a><span class="sep">|</span>				<a href="article.php?id=26" >配送方式</a>				</p>
        <p>
		&copy; 2005-2016 E家数码 版权所有，并保留所有权利。<br />
		长平路46号        Tel: 400-00-28289               <a  href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&amp;key=XzkzODA3NjY4M18zMzc3OTdfNDAwMDAyODI4OV8yXw" target="_blank"><img src="themes/xiaomi/images/qq_logo_16.png" height="16" border="0" alt="QQ" /> 400-00-28289</a>
                                                                                <br />
  		</p>
      </div>
      
      <div class="info-links" style="text-align:center"> <a target="_blank"><img src="http://p.www.xiaomi.com/zt/12052601/cnnicVerifyseal.png" alt="可信网站" /></a> <a target="_blank"><img alt="诚信网站" src="http://p.www.xiaomi.com/zt/12052601/szfwVerifyseal.gif" /></a> <a target="_blank"><img alt="诚信网站" src="http://p.www.xiaomi.com/zt/12052601/save.jpg" /></a> </div>
    </div>
  </div>
</div>
<script>
        function createurlcdn(url, t) {
            t = t || 5;
            var date = new Date();
            var hour = date.getHours();
            hour = (hour < 10 ? "0" : "") + hour;
            var min = date.getMinutes();
            min = ( parseInt(min / t) < 10 ? "0" : "") + parseInt(min / 5);
            var day = date.getDate();
            day = (day < 10 ? "0" : "") + day;
            var version = day + hour + min;
            document.write('<script src="' + url + '?ver=' + version + 'xiaomi"><\/script>');
        }
        createurlcdn("themes/xiaomi/js/categoryTree.js",5);
    </script>
<script src="themes/xiaomi/js/base.min.js?2014042901"></script>
<script>
        XIAOMI.namespace("GLOBAL_CONFIG,GLOBAL_VAR");
        XIAOMI.GLOBAL_CONFIG = {
            orderSite:"",
            wwwSite:"",
            damiaoSite:"",
            logoutUrl:"",
            quickLoginUrl:"",
            //图片上传路径地址
            uploadUrl:"",
            //图片远程存储地址
            imgSaveUrl:"",
            //评论查询地址
            commentUrl:"",
            //评论Api地址
            commentApiUrl:"",
            //侧边栏数据接口
            sideBarApiUrl:""
        }
        XIAOMI.app.setLoginInfo.orderUrl = XIAOMI.GLOBAL_CONFIG.orderSite + '/user/order';
        XIAOMI.app.setLoginInfo.logoutUrl = XIAOMI.GLOBAL_CONFIG.logoutUrl;
        XIAOMI.app.setLoginInfo.init(XIAOMI.GLOBAL_CONFIG);
        //全站需要直接执行的函数
        jQuery(function ($) {
            var oLogin = new XIAOMI.app.miniLogin();
            oLogin.init();
            // 搜索
            XIAOMI.app.search.init();
            // miniCart
            XIAOMI.app.miniCart.init();
            // 更新miniCart数量
            XIAOMI.app.updateMiniCart();
            // 商品分类导航
            XIAOMI.app.navMenus.init($('.J_menuNavMain'), {
                menuSelector: '.nav-main-item',
                submenuSelector: '.nav-main-children',
                effect: 'toggle',
                triggerEvent: 'hover'
            });
            XIAOMI.app.navCategory.init();
            // 绑定尾部公共事件
            XIAOMI.app.footer.init();
        });
    </script>
</body>
</html>
