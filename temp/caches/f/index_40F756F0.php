<?php exit;?>a:3:{s:8:"template";a:5:{i:0;s:45:"D:/xampp/htdocs/e2828/themes/xiaomi/index.dwt";i:1;s:59:"D:/xampp/htdocs/e2828/themes/xiaomi/library/page_header.lbi";i:2;s:60:"D:/xampp/htdocs/e2828/themes/xiaomi/library/cat_articles.lbi";i:3;s:57:"D:/xampp/htdocs/e2828/themes/xiaomi/library/cat_goods.lbi";i:4;s:59:"D:/xampp/htdocs/e2828/themes/xiaomi/library/page_footer.lbi";}s:7:"expires";i:1472097071;s:8:"maketime";i:1472093471;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="汕头E家数码,汕头手机报价,汕头手机网,汕头数码通,汕头八方,汕头数码,汕头手机店,汕头手机商城,汕头潮南手机,汕头天气,汕头招聘网,陈厝合手机,汕头手机维修,汕头蓝色河畔,汕头E京网" />
<meta name="Description" content="汕头E家数码是粤东地区仓储式手机连锁店，厂家直接供货，集实体店、网络商城为一体，主营手机销售、维修、充值、配件等业务，提供软件升级、游戏图铃、资讯等最佳的购机服务" />
<title>汕头E家数码-汕头手机报价网|汕头手机网|汕头手机门户网站</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<script src="themes/xiaomi/js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="themes/xiaomi/css/index.min.css?2014050501" />
<script type="text/javascript">
/*<![CDATA[*/
var isCategoryToggled = "toggled";
var isSekillOpen = 1;
var isCommentOpen = 1;
/*]]>*/
</script>
<link rel="alternate" type="application/rss+xml" title="RSS|汕头E家数码-汕头手机报价网|汕头手机网|汕头手机门户网站" href="feed.php" />
</head>
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
  <div class="site-logo"> <a class="logo" href="index.php"><img src="themes/xiaomi/images/logo.gif" /> </a> </div>
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
    <div id="J_categoryContainer" class="nav-category"> <a class="btn-category-list" href="catalog.php">全部商品分类</a>
      <div class="nav-category-section" style="display: none;">
        <ul class="nav-category-list">
          		  <li class="nav-category-item ">
            <div class="nav-category-content"><a class="title" href="category.php?id=43">手机分类</a>
              <div class="links">
			  			  			  <a href="category.php?id=30">苹果</a>
			  			  			  			  <a href="category.php?id=31">三星</a>
			  			  			  			  			  			  			  			  			  			  			  			  			  			  			  			  			  			  			  			  			  			  			  			  			  			  			  			  			  			  			  			  			  			  			  			  			  			  			  			  			  			  			  			  			  			  			  			  			  </div>
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
            <div class="nav-category-content"><a class="title" href="category.php?id=60">平板专区</a>
              <div class="links">
			  			  			  <a href="category.php?id=62">苹果</a>
			  			  			  </div>
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
            <div class="nav-category-content"><a class="title" href="category.php?id=59">智能腕表</a>
              <div class="links">
			  			  			  <a href="category.php?id=70">小天才</a>
			  			  			  			  <a href="category.php?id=71">三星</a>
			  			  			  			  			  			  			  			  			  			  			  </div>
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
            <div class="nav-category-content"><a class="title" href="category.php?id=63">手机储存卡</a>
              <div class="links">
			  			  			  <a href="category.php?id=80">万能读卡</a>
			  			  			  			  <a href="category.php?id=81">闪迪</a>
			  			  			  			  			  			  			  </div>
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
            <div class="nav-category-content"><a class="title" href="category.php?id=64">移动电源</a>
              <div class="links">
			  			  			  <a href="category.php?id=76">羽博</a>
			  			  			  			  <a href="category.php?id=77">米格</a>
			  			  			  			  			  			  			  </div>
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
            <div class="nav-category-content"><a class="title" href="category.php?id=65">耳机 音响</a>
              <div class="links">
			  			  			  <a href="category.php?id=88">小米</a>
			  			  			  			  <a href="category.php?id=89">其他</a>
			  			  			  			  			  			  			  </div>
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
            <div class="nav-category-content"><a class="title" href="category.php?id=66">数据线 充电器</a>
              <div class="links">
			  			  </div>
			              </div>
          </li>
		  		  <li class="nav-category-item ">
            <div class="nav-category-content"><a class="title" href="category.php?id=67">保护壳</a>
              <div class="links">
			  			  			  <a href="category.php?id=92">三星</a>
			  			  			  			  <a href="category.php?id=93">苹果</a>
			  			  			  			  			  </div>
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
            <div class="nav-category-content"><a class="title" href="category.php?id=69">其他</a>
              <div class="links">
			  			  			  <a href="category.php?id=68">车载配件</a>
			  			  			  			  <a href="category.php?id=84">u盘</a>
			  			  			  			  			  			  			  			  			  </div>
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
        <li class="nav-main-item current"> <a  href="index.php"><span class="text">首页</span></a> </li>
                <li class="nav-main-item "> <a  href="index.php" ><span class="text">配件</span><span class="arrow"></span></a> 554fcae493e564ee0dc75bdf2ebf94camenu_goods|a:2:{s:4:"name";s:10:"menu_goods";s:3:"url";s:9:"index.php";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                <li class="nav-main-item "> <a  href="topic.php?topic_id=1" ><span class="text">厂家优惠</span><span class="arrow"></span></a> 554fcae493e564ee0dc75bdf2ebf94camenu_goods|a:2:{s:4:"name";s:10:"menu_goods";s:3:"url";s:20:"topic.php?topic_id=1";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                <li class="nav-main-item "> <a  href="article_cat.php?id=8" ><span class="text">资讯中心</span><span class="arrow"></span></a> 554fcae493e564ee0dc75bdf2ebf94camenu_goods|a:2:{s:4:"name";s:10:"menu_goods";s:3:"url";s:20:"article_cat.php?id=8";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                <li class="nav-main-item "> <a  href="topic.php?topic_id=1" ><span class="text">智能远程</span><span class="arrow"></span></a> 554fcae493e564ee0dc75bdf2ebf94camenu_goods|a:2:{s:4:"name";s:10:"menu_goods";s:3:"url";s:20:"topic.php?topic_id=1";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                <li class="nav-main-item "> <a  href="topic.php?topic_id=1" ><span class="text">我的会员</span><span class="arrow"></span></a> 554fcae493e564ee0dc75bdf2ebf94camenu_goods|a:2:{s:4:"name";s:10:"menu_goods";s:3:"url";s:20:"topic.php?topic_id=1";}554fcae493e564ee0dc75bdf2ebf94ca </li>
                <li class="nav-main-item "> <a  href="topic.php?topic_id=1" ><span class="text">售后与客服</span><span class="arrow"></span></a> 554fcae493e564ee0dc75bdf2ebf94camenu_goods|a:2:{s:4:"name";s:10:"menu_goods";s:3:"url";s:20:"topic.php?topic_id=1";}554fcae493e564ee0dc75bdf2ebf94ca </li>
              </ul>
    </div>
  </div>
  <div class="open-buy-info"></div>
</div><script>
/*css*/
if (window.screen.width < 1280)
{	
	document.write("<link rel='stylesheet' type='text/css' href='themes/xiaomi/css/980base.css'>");
	document.write("<link rel='stylesheet' type='text/css' href='themes/xiaomi/css/980index.css'>");
}
</script>
<div class="container">
  <div class="row">
    <div class="col col-16 offset4">
      <div class="home-slider">
        <div id="J_homeSlider" class="xm-slider">
		          <div class="slide"> <a href="http://www.e2828.cn/e2828/goods.php?id=27" target="_blank"><img src="data/afficheimg/20140921cqgiip.jpg" /></a> </div>
		           <div class="slide"> <a href="http://www.e2828.cn/e2828/search.php?encode=YToyOntzOjg6ImtleXdvcmRzIjtzOjg6ImlwaG9uZXNlIjtzOjE4OiJzZWFyY2hfZW5jb2RlX3RpbWUiO2k6MTQ2NjA0MTE4Njt9" target="_blank"><img src="data/afficheimg/20160616ocapnv.jpg" /></a> </div>
		           <div class="slide"> <a href="http://www.e2828.cn/e2828/search.php?encode=YToyOntzOjg6ImtleXdvcmRzIjtzOjU6Im1ldGFsIjtzOjE4OiJzZWFyY2hfZW5jb2RlX3RpbWUiO2k6MTQ2NjA0MTQxNDt9" target="_blank"><img src="data/afficheimg/20160616hcsteb.jpg" /></a> </div>
		           <div class="slide"> <a href="http://www.e2828.cn/e2828/goods.php?id=28" target="_blank"><img src="data/afficheimg/20160616kofzwe.jpg" /></a> </div>
		           <div class="slide"> <a href="http://www.e2828.cn/e2828/goods.php?id=53" target="_blank"><img src="data/afficheimg/20160616uytevn.jpg" /></a> </div>
		  
         
        </div>
      </div>
      <div class="home-hd-show clearfix">
	          <div class="hd-show-item hd-show-item-first"> <a href="affiche.php?ad_id=1&uri=http://www.e2828.cn/e2828/goods.php?id=25" target="_blank"><img alt="3" src="data/afficheimg/1465952555747683389.jpg" /></a> </div>
	          <div class="hd-show-item "> <a href="affiche.php?ad_id=2&uri=http://www.e2828.cn/e2828/search.php?encode=YToyOntzOjg6ImtleXdvcmRzIjtzOjU6Im1ldGFsIjtzOjE4OiJzZWFyY2hfZW5jb2RlX3RpbWUiO2k6MTQ2NTk4MjYwMjt9" target="_blank"><img alt="3" src="data/afficheimg/1465952568898035130.jpg" /></a> </div>
	          <div class="hd-show-item "> <a href="affiche.php?ad_id=3&uri=" target="_blank"><img alt="3" src="data/afficheimg/1465952578712604830.jpg" /></a> </div>
	  	
     
      </div>
    </div>
  </div>
  <div class="home-star-goods">
    <div class="xm-plain-box J_starGoodsCarousel">
      <div class="box-hd">
        <h3 class="title">连锁经营店</h3>
         <li class="a"><a href="article.php?id=33" target="_blank">长平旗舰店</a><li>
	<li class="b"><a href="article.php?id=27" target="_blank">陈厝合店</a><li>
	<li class="c"><a href="article.php?id=28" target="_blank">嵩山店</a><li>
	<li class="d"><a href="article.php?id=29" target="_blank" >鮀浦店</a><li>
	<li class="e"><a href="article.php?id=30" target="_blank">濠江店</a><li>
	<li class="f"><a href="article.php?id=31" target="_blank">潮阳店</a><li>
	<li class="g"><a href="article.php?id=32" target="_blank">手机维修中心</a><li>
	
     <!--   <div class="more">
          <div class="xm-recommend-page clearfix"> <a class="page-btn-prev page-btn-prev-disabled iconfont J_carouselPrev" href="javascript: void(0);">&#xe604;</a><a class="page-btn-next iconfont J_carouselNext" href="javascript: void(0);">&#xe605;</a> </div>
        </div>
      </div>
      <div class="box-bd">
        <div class="xm-star-goods-list-wrap J_carouselWrap">
          <div class="xm-star-goods-list clearfix J_carouselList">
		  			
         <!-- </div>
        </div>
	-->
      </div>
    </div>
  </div>
  
  <div class="home-new-goods">
    <div class="xm-plain-box">
      <div class="box-hd">
        <h3 class="title">新品上架</h3>
        <div class="more"> <a class="more-link" href="search.php?intro=new" target="_blank">更多<i class="iconfont">&#xe605;</i></a> </div>
      </div>
      <div class="box-bd">
        <div class="row">
          <div class="col col-15">
            <div class="brick-list">
              <div class="brick-item brick-item-l">
                <div class="item">
					                    <div class="item-content"> <a href="affiche.php?ad_id=4&uri=" target="_blank"> <span class="item-thumb"> <img src="data/afficheimg/1465953016095686024.jpg" alt="首页-新品上架广告" /> </span> </a> </div>
				  	
	                  </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="item">
								                  <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=58" target="_blank">OPPO R9(全网通)</a></span> <span class="item-price">￥2499.00</span> </span> <span class="item-thumb"> <a href="goods.php?id=58" target="_blank" ><img src="images/201606/thumb_img/58_thumb_G_1464825362901.jpg" alt="OPPO R9(全网通)" style="width:220px" /></a> </span> </div>
					
		   							
		   							
		   							
		   							
		   							
		   							
		   							
		   				        </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="brick-item brick-item-s">
                  <div class="item">
				  					
		   				                    <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=59" target="_blank">OPPO R9 Plus(全网...</a></span> <span class="item-price">￥0.10</span> </span> <span class="item-thumb"> <a href="goods.php?id=59" target="_blank"><img src="images/201606/thumb_img/59_thumb_G_1464827830093.jpg" alt="OPPO R9 Plus(全网通)" style="width:135px" /></a> </span> </div>
						
		   					
		   					
		   					
		   					
		   					
		   					
		                     </div>
                </div>
                <div class="brick-item brick-item-s">
                  <div class="item">
				  					
		   					
		   				                    <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=17" target="_blank">苹果iPhone SE(移动/...</a></span> <span class="item-price">￥2820.00</span> </span> <span class="item-thumb"> <a href="goods.php?id=17" target="_blank"><img src="images/201606/thumb_img/17_thumb_G_1464820071298.jpg" alt="苹果iPhone SE(移动/联通双4G)" style="width:135px" /></a> </span> </div>
						
		   					
		   					
		   					
		   					
		   					
		                     </div>
                </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="item">
									
		   							
		   							
		   						                  <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=18" target="_blank">苹果iPhone SE(全网通...</a></span> <span class="item-price">￥3000.00</span> </span> <span class="item-thumb"> <a href="goods.php?id=18" target="_blank"><img src="images/201606/thumb_img/18_thumb_G_1464820060673.jpg" alt="苹果iPhone SE(全网通)" style="width:220px" /></a> </span> </div>
					
		   							
		   							
		   							
		   							
		   				        </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="item">
									
		   							
		   							
		   							
		   						                  <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=131" target="_blank">360 手机f4(移动4G)</a></span> <span class="item-price">￥270.00</span> </span> <span class="item-thumb"> <a href="goods.php?id=131" target="_blank"><img src="images/201606/thumb_img/131_thumb_G_1464909312303.jpg" alt="360 手机f4(移动4G)" style="width:220px" /></a> </span> </div>
					
		   							
		   							
		   							
		   				        </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="item">
									
		   							
		   							
		   							
		   							
		   						                  <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=133" target="_blank">360 手机N4（移动4G）</a></span> <span class="item-price">￥960.00</span> </span> <span class="item-thumb"> <a href="goods.php?id=133" target="_blank"><img src="images/201606/thumb_img/133_thumb_G_1464909578664.jpg" alt="360 手机N4（移动4G）" style="width:220px" /></a> </span> </div>
					
		   							
		   							
		   				        </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="item">
									
		   							
		   							
		   							
		   							
		   							
		   						                  <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=36" target="_blank">三星 GALAXY A3009...</a></span> <span class="item-price">￥730.00</span> </span> <span class="item-thumb"> <a href="goods.php?id=36" target="_blank"><img src="images/201606/thumb_img/36_thumb_G_1464821778539.jpg" alt="三星 GALAXY A3009(电信4G)" style="width:220px" /></a> </span> </div>
					
		   							
		   				        </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="item">
									
		   							
		   							
		   							
		   							
		   							
		   							
		   						                  <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=37" target="_blank">三星 GALAXY GRAND...</a></span> <span class="item-price">￥980.00</span> </span> <span class="item-thumb"> <a href="goods.php?id=37" target="_blank"><img src="images/201606/thumb_img/37_thumb_G_1464821828137.jpg" alt="三星 GALAXY GRAND 3 G7200(移动4G/联通4G)" style="width:220px" /></a> </span> </div>
					
		   				        </div>
              </div>
            </div>
          </div>
          <div class="col col-5">
            <div class="channel-section">
              <ul class="channel-list">
              
				  
				  
               
              </ul>
            </div>
            
            <div class="news-section">
             
              <ul>
                  
<div class="left-1">
<h3 ></h3>
<ul class="left-top">
</ul>
</div><div class="left-1">
<h3 ></h3>
<ul class="left-top">
</ul>
</div><div class="left-1">
<h3 ></h3>
<ul class="left-top">
</ul>
</div>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="home-hot-goods">
    <div class="xm-plain-box">
      <div class="box-hd">
        <h3 class="title">大家都喜欢</h3>
      </div>
      <div class="box-bd">
        <div class="row">
          <div class="col col-15">
            <div class="brick-list">
              <div class="brick-item brick-item-l">
                <div class="item">
					                    <div class="item-content"> <a href="affiche.php?ad_id=5&uri="> <span class="item-thumb"> <img src="data/afficheimg/1465953027688778886.jpg" alt="首页-推荐产品广告" /> </span> </a> </div>
				  	
	                  </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="item">
								                  <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=58">OPPO R9(全网通)</a></span> <span class="item-price">￥2499.00</span> </span> <span class="item-thumb"> <a href="goods.php?id=58" target="_blank"><img src="images/201606/thumb_img/58_thumb_G_1464825362901.jpg" alt="OPPO R9(全网通)" style="width:220px" /></a> </span> </div>
					
		   							
		   							
		   							
		   				        </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="item">
									
		   						                  <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=59">OPPO R9 Plus(全网...</a></span> <span class="item-price">￥0.10</span> </span> <span class="item-thumb"> <a href="goods.php?id=59" target="_blank"><img src="images/201606/thumb_img/59_thumb_G_1464827830093.jpg" alt="OPPO R9 Plus(全网通)" style="width:220px" /></a> </span> </div>
				  	
		   							
		   							
		   		                </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="item">
									
		   							
		   						                  <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=22">苹果 iPhone6 Plus</a></span> <span class="item-price">￥3890.00</span> </span> <span class="item-thumb"> <a href="goods.php?id=22" target="_blank"><img src="images/201606/thumb_img/22_thumb_G_1464821276818.jpg" alt="苹果 iPhone6 Plus" style="width:220px" /></a> </span> </div>
				  	
		   							
		   		                </div>
              </div>
              <div class="brick-item brick-item-m">
                <div class="item">
									
		   							
		   							
		   						                  <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=21">苹果 iPhone 6S Pl...</a></span> <span class="item-price">￥4780.00</span> </span> <span class="item-thumb"> <a href="goods.php?id=21" target="_blank"><img src="images/201606/thumb_img/21_thumb_G_1464821204621.jpg" alt="苹果 iPhone 6S Plus(双4G)" style="width:220px" /></a> </span> </div>
				  	
		   		                </div>
              </div>
            </div>
          </div>
          <div class="col col-5">
            <div class="board-section">
              <h3><span>HOT</span>热销商品排行</h3>
              <ul class="board-list">
			                  <li class="top"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=58">OPPO R9(全网通)</a></span> <span class="item-price">￥2499.00</span> </span> <span class="item-thumb"> <a href="goods.php?id=58" target="_blank"><img src="images/201606/thumb_img/58_thumb_G_1464825362901.jpg" alt="OPPO R9(全网通)" style="width:70px" /></a> </span> <span class="item-num">1</span> </li>
			                  <li class="top"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=59">OPPO R9 Plus(全网...</a></span> <span class="item-price">￥0.10</span> </span> <span class="item-thumb"> <a href="goods.php?id=59" target="_blank"><img src="images/201606/thumb_img/59_thumb_G_1464827830093.jpg" alt="OPPO R9 Plus(全网通)" style="width:70px" /></a> </span> <span class="item-num">2</span> </li>
			                  <li class="top"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=19">苹果 IPhone 5S(公开...</a></span> <span class="item-price">￥2010.00</span> </span> <span class="item-thumb"> <a href="goods.php?id=19" target="_blank"><img src="images/201606/thumb_img/19_thumb_G_1464820029548.jpg" alt="苹果 IPhone 5S(公开版)" style="width:70px" /></a> </span> <span class="item-num">3</span> </li>
			                  <li > <span class="item-info"> <span class="item-title"><a href="goods.php?id=24">苹果 iPhone6 Plus...</a></span> <span class="item-price">￥4200.00</span> </span> <span class="item-thumb"> <a href="goods.php?id=24" target="_blank"><img src="images/201606/thumb_img/24_thumb_G_1464821348124.jpg" alt="苹果 iPhone6 Plus(公开版)" style="width:70px" /></a> </span> <span class="item-num">4</span> </li>
			                  <li > <span class="item-info"> <span class="item-title"><a href="goods.php?id=130">奇酷 青春版8681-A01(...</a></span> <span class="item-price">￥850.00</span> </span> <span class="item-thumb"> <a href="goods.php?id=130" target="_blank"><img src="images/201606/thumb_img/130_thumb_G_1464909172244.jpg" alt="奇酷 青春版8681-A01(全网通)" style="width:70px" /></a> </span> <span class="item-num">5</span> </li>
			  	
             
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="home-commented-goods">
    <div class="xm-plain-box">
      <div class="box-hd">
        <h3 class="title">热评产品</h3>
      </div>
      <div class="box-bd">
        <div class="xm-commented-goods-list-wrap">
          <div class="xm-commented-goods-list clearfix">
		  		 
            <div class="xm-commented-goods-item J_commentedGoods">
              <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=58">OPPO R9(全网通)</a></span> <span class="item-meta"><span class="icon-stat icon-stat-5"></span></span> <span class="item-price">￥2499.00</span> </span> <span class="item-thumb"> <a href="goods.php?id=58" target="_blank"><img src="images/201606/thumb_img/58_thumb_G_1464825362901.jpg" style="width:220px; height:220px" alt="OPPO R9(全网通)" /></a> </span> <span class="item-comment">23654789</span> </div>
            </div>
				  		 
            <div class="xm-commented-goods-item J_commentedGoods">
              <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=100">步步高 vivo Y17w(联通3G)</a></span> <span class="item-meta"><span class="icon-stat icon-stat-5"></span></span> <span class="item-price">￥1598.00</span> </span> <span class="item-thumb"> <a href="goods.php?id=100" target="_blank"><img src="images/201606/thumb_img/100_thumb_G_1464889599485.jpg" style="width:220px; height:220px" alt="步步高 vivo Y17w(联通3G)" /></a> </span> <span class="item-comment">还行～～</span> </div>
            </div>
				  		 
            <div class="xm-commented-goods-item J_commentedGoods">
              <div class="item-content"> <span class="item-info"> <span class="item-title"><a href="goods.php?id=127">华硕 华硕飞马5000 X005(全网通)</a></span> <span class="item-meta"><span class="icon-stat icon-stat-5"></span></span> <span class="item-price">￥1798.00</span> </span> <span class="item-thumb"> <a href="goods.php?id=127" target="_blank"><img src="images/201606/thumb_img/127_thumb_G_1464908496048.jpg" style="width:220px; height:220px" alt="华硕 华硕飞马5000 X005(全网通)" /></a> </span> <span class="item-comment">不错～～</span> </div>
            </div>
				   	
            
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  
<div class="home-commented-goods home-miui-goods">
    <div class="xm-plain-box">
      <div class="box-hd">
        <h3 class="title"></h3>
        <div class="more"> <a class="more-link" href="" target="_blank">更多<i class="iconfont">&#xe605;</i></a> </div>
      </div>
      <div class="box-bd">
        <div class="xm-commented-goods-list-wrap">
          <div class="xm-commented-goods-list clearfix">
		  	
            
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="home-commented-goods home-miui-goods">
    <div class="xm-plain-box">
      <div class="box-hd">
        <h3 class="title"></h3>
        <div class="more"> <a class="more-link" href="" target="_blank">更多<i class="iconfont">&#xe605;</i></a> </div>
      </div>
      <div class="box-bd">
        <div class="xm-commented-goods-list-wrap">
          <div class="xm-commented-goods-list clearfix">
		  	
            
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
</div>
<div class="site-footer">
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
<script type="text/javascript" src="themes/xiaomi/js/index.min.js?2014042901"></script>
</body>
</html>