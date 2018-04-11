# haov55
商城5.5 多用户商城系统


###  商城.2017.06.15

更新内容：
新增物流快递100和快递鸟接口
新增运费按件数-重量-体积方式
新增后台编辑店铺公司名和所在地
新增虚拟物品二维码

集成三级分销返利插件
集成多城市商品所在地插件
集成手机积分兑换插件
集成手机商家版插件
集成微信公众号平台插件

优化防止多次点击提交订单
优化搜索支持空格模糊搜索
优化生成广告路经，以前带有ad的文件夹名会被屏蔽

美化更换商品列表排版方式，把原来左右框架更换为占满一行
美化更换手机版导底菜单图标
修复已知BUG问题
... ...

安装之前准备工作：把你的PHP环境配置好，程序只支持php5.3或更高版本，php.ini要支持以下：
```
	extension=php_curl.dll
	extension=php_openssl.dll
	date.timezone = Asia/Shanghai
	session.auto_start = 1
	asp_tags = Off
	short_open_tag = On
```

以下目录及子目录有写入、修改权限：

    /data/cache
    /data/config
    /data/log
    /data/session
    /data/resource/phpqrcode/temp
    /data/upload
    /sql_back
    /install
	
----------------------------------------------

安装教程：

把v5.5主程序解压出来放到你的站点中，在地址栏输入您的站点，

就会进入安装界面，填写相关信息，建议数据库前缀不要修改，默认为33hao_

安装完成后，进入后台-平台-网站缓存 一下即可。

如果安装后，打开界面上比较乱，说明安装不成功，请把 根目录/install目录下的lock 文件删除，

请检查以上目录及子目录有写入、修改权限，再重新安装。

安装完后，为了安全考虑，本程序做了目录调整，请把根目录/install目录下的lock除了lock文件，其它的请删除。

不要用记事本编辑程序中的每个文件，会产生bom，导致网站产生一些问题，比如验证码不显示等问题，推荐Notepad++文本编辑器。

----------------------------------------------

-----

### 伪静态规则

 将 \data\config\config.ini.php
 $config['url_model'] = false; //如果要启用伪静态，把false修改为true

# 将 RewriteEngine 模式打开
```
	RewriteEngine On
```


# 如果商城程序存放于/33hao下，需将下行更改为 RewriteBase /33hao
```
	RewriteBase /
```

#apache ,iis 伪静态规则

```
	RewriteRule ^index.php$ shop/index.php
	RewriteRule ^category.html$ shop/index.php?act=category&op=index
	RewriteRule ^([0-9]+).html$ shop/index.php?act=goods&goods_id=$1
	RewriteRule ^category.html$ shop/index.php?act=category&act=index
	RewriteRule ^shop_view-(\d+)-(\d+)-([0-5])-([0-2])-(\d+).html$ shop/index.php?act=show_store&op=goods_all&store_id=$1&stc_id=$2&key=3&order=$4&curpage=$5
	RewriteRule ^article-([0-9]+).html$ shop/index.php?act=article&article_id=$1
	RewriteRule ^article_cate-([0-9]+).html$ shop/index.php?act=article&op=article&ac_id=$1
	RewriteRule ^document-([a-zA-Z_]+).html$ shop/index.php?act=document&code=$1
	RewriteRule ^cate-(\d+)-([0-9_]+)-([0-9_]+)-([0-3])-([0-2])-([0-1])-([0-1])-(\d+)-(\d+).html$ shop/index.php?act=search&op=index&cate_id=$1&b_id=$2&a_id=$3&key=$4&order=$5&type=$6&gift=$7&area_id=$8&currpage=$9
	RewriteRule ^brand-(\d+)-([0-3])-([0-2])-([0-1])-([0-1])-(\d+)-(\d+).html$ shop/index.php?act=brand&op=list&brand=$1&key=$2&order=$3&type=$4&gift=$5&area_id=$6&currpage=$7
	RewriteRule ^brand.html$ shop/index.php?act=brand&op=index
	RewriteRule ^night.html$ shop/index.php?act=night&op=index
	RewriteRule ^groupbuy.html$ shop/index.php?act=show_groupbuy&op=index
	RewriteRule ^groupbuy_detail-(\d+).html$ shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=$1
	RewriteRule ^groupbuy_list-(\d+)-(\d+)-(\d+)-(\d+)-(\d+)-(\d+).html$ shop/index.php?act=show_groupbuy&op=groupbuy_list&class=$1&s_class=$2&groupbuy_price=$3&groupbuy_order_key=$4&groupbuy_order=$5&curpage=$6
	RewriteRule ^groupbuy_soon-(\d+)-(\d+)-(\d+)-(\d+)-(\d+)-(\d+).html$ shop/index.php?act=show_groupbuy&op=groupbuy_soon&class=$1&s_class=$2&groupbuy_price=$3&groupbuy_order_key=$4&groupbuy_order=$5&curpage=$6
	RewriteRule ^groupbuy_history-(\d+)-(\d+)-(\d+)-(\d+)-(\d+)-(\d+).html$ shop/index.php?act=show_groupbuy&op=groupbuy_history&class=$1&s_class=$2&groupbuy_price=$3&groupbuy_order_key=$4&groupbuy_order=$5&curpage=$6
	RewriteRule ^vr_groupbuy_list-(\d+)-(\d+)-(\d+)-(\d+)-(\d+)-(\d+)-(\d+)-(\d+).html$ shop/index.php?act=show_groupbuy&op=vr_groupbuy_list&vr_class=$1&vr_s_class=$2&vr_area=$3&vr_mall=$4&groupbuy_price=$5&groupbuy_order_key=$6&groupbuy_order=$7&curpage=$8
	RewriteRule ^vr_groupbuy_soon-(\d+)-(\d+)-(\d+)-(\d+)-(\d+)-(\d+)-(\d+)-(\d+).html$ shop/index.php?act=show_groupbuy&op=vr_groupbuy_soon&vr_class=$1&vr_s_class=$2&vr_area=$3&vr_mall=$4&groupbuy_price=$5&groupbuy_order_key=$6&groupbuy_order=$7&curpage=$8
	RewriteRule ^vr_groupbuy_history-(\d+)-(\d+)-(\d+)-(\d+)-(\d+)-(\d+)-(\d+)-(\d+).html$ shop/index.php?act=show_groupbuy&op=vr_groupbuy_history&vr_class=$1&vr_s_class=$2&vr_area=$3&vr_mall=$4&groupbuy_price=$5&groupbuy_order_key=$6&groupbuy_order=$7&curpage=$8
	RewriteRule ^integral.html$ shop/index.php?act=pointshop&op=index
	RewriteRule ^integral_list.html$ shop/index.php?act=pointshop&op=plist 
	RewriteRule ^integral_item-(\d+).html$ shop/index.php?act=pointshop&op=pinfo&id=$1
	RewriteRule ^voucher.html$ shop/index.php?act=pointvoucher&op=index 
	RewriteRule ^grade.html$ shop/index.php?act=pointgrade&op=index 
	RewriteRule ^explog-(\d+).html$ shop/index.php?act=pointgrade&op=exppointlog&currpage=$1 
	RewriteRule ^comments-(\d+)-([0-3])-(\d+).html$ shop/index.php?act=goods&op=comments_list&goods_id=$1&type=$2&currpage=$3
	RewriteRule ^goods-([0-9]+)(-?)([0-9]*).html$ shop/index.php?act=goods&goods_id=$1
	RewriteRule ^groupbuy-([0-9]+)-([0-9]+).html$ shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=$1&id=$2
	RewriteRule ^store-([0-9]+).html$ shop/index.php?act=show_store&store_id=$1
	RewriteRule ^activity-([0-9]+)-([0-9]*).html$ shop/index.php?act=activity&activity_id=$1&nav_id=$2
	RewriteRule ^store_nav-([0-9]+)-([0-9]+).html$ shop/index.php?act=show_store&store_id=$1&article=$2
	RewriteRule ^coupon_info-([0-9]+)-([0-9]+).html$ shop/index.php?act=coupon_store&op=detail&coupon_id=$1&id=$2
	RewriteRule ^-([0-9]+)-([0-9]+).html$ shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=$1&id=$2
	RewriteRule ^night-([a-zA-Z_]+).html$ shop/index.php?act=night&op=night&code=$1
	RewriteRule ^shop-(\d+).html$ shop/index.php?act=show_store&op=index&store_id=$1
	RewriteRule ^special.html$ shop/index.php?act=special&op=special_list
	RewriteRule ^store.html$ shop/index.php?act=store_list&op=index
```

# nginx 伪静态规则

```
	rewrite ^/shop/index.php$ /shop/index.php last;
	rewrite ^/shop/category.html$ /shop/index.php?act=category&op=index last;
	rewrite ^/shop/([0-9]+).html$ /shop/index.php?act=goods&goods_id=$1 last;
	rewrite ^/shop/category.html$ /shop/index.php?act=category&act=index last;
	rewrite ^/shop/shop_view-(\d+)-(\d+)-([0-5])-([0-2])-(\d+).html$ /shop/index.php?act=show_store&op=goods_all&store_id=$1&stc_id=$2&key=3&order=$4&curpage=$5 last;
	rewrite ^/shop/article-([0-9]+).html$ /shop/index.php?act=article&article_id=$1 last;
	rewrite ^/shop/article_cate-([0-9]+).html$ /shop/index.php?act=article&op=article&ac_id=$1 last;
	rewrite ^/shop/document-([a-zA-Z_]+).html$ /shop/index.php?act=document&code=$1 last;
	rewrite ^/shop/cate-(\d+)-([0-9_]+)-([0-9_]+)-([0-3])-([0-2])-([0-1])-([0-1])-(\d+)-(\d+).html$ /shop/index.php?act=search&op=index&cate_id=$1&b_id=$2&a_id=$3&key=$4&order=$5&type=$6&gift=$7&area_id=$8&currpage=$9 last;
	rewrite ^/shop/brand-(\d+)-([0-3])-([0-2])-([0-1])-([0-1])-(\d+)-(\d+).html$ /shop/index.php?act=brand&op=list&brand=$1&key=$2&order=$3&type=$4&gift=$5&area_id=$6&currpage=$7 last;
	rewrite ^/shop/brand.html$ /shop/index.php?act=brand&op=index last;
	rewrite ^/shop/night.html$ /shop/index.php?act=night&op=index last;
	rewrite ^/shop/groupbuy.html$ /shop/index.php?act=show_groupbuy&op=index last;
	rewrite ^/shop/groupbuy_detail-(\d+).html$ /shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=$1 last;
	rewrite ^/shop/groupbuy_list-(\d+)-(\d+)-(\d+)-(\d+)-(\d+)-(\d+).html$ /shop/index.php?act=show_groupbuy&op=groupbuy_list&class=$1&s_class=$2&groupbuy_price=$3&groupbuy_order_key=$4&groupbuy_order=$5&curpage=$6 last;
	rewrite ^/shop/groupbuy_soon-(\d+)-(\d+)-(\d+)-(\d+)-(\d+)-(\d+).html$ /shop/index.php?act=show_groupbuy&op=groupbuy_soon&class=$1&s_class=$2&groupbuy_price=$3&groupbuy_order_key=$4&groupbuy_order=$5&curpage=$6 last;
	rewrite ^/shop/groupbuy_history-(\d+)-(\d+)-(\d+)-(\d+)-(\d+)-(\d+).html$ /shop/index.php?act=show_groupbuy&op=groupbuy_history&class=$1&s_class=$2&groupbuy_price=$3&groupbuy_order_key=$4&groupbuy_order=$5&curpage=$6 last;
	rewrite ^/shop/vr_groupbuy_list-(\d+)-(\d+)-(\d+)-(\d+)-(\d+)-(\d+)-(\d+)-(\d+).html$ /shop/index.php?act=show_groupbuy&op=vr_groupbuy_list&vr_class=$1&vr_s_class=$2&vr_area=$3&vr_mall=$4&groupbuy_price=$5&groupbuy_order_key=$6&groupbuy_order=$7&curpage=$8 last;
	rewrite ^/shop/vr_groupbuy_soon-(\d+)-(\d+)-(\d+)-(\d+)-(\d+)-(\d+)-(\d+)-(\d+).html$ /shop/index.php?act=show_groupbuy&op=vr_groupbuy_soon&vr_class=$1&vr_s_class=$2&vr_area=$3&vr_mall=$4&groupbuy_price=$5&groupbuy_order_key=$6&groupbuy_order=$7&curpage=$8 last;
	rewrite ^/shop/vr_groupbuy_history-(\d+)-(\d+)-(\d+)-(\d+)-(\d+)-(\d+)-(\d+)-(\d+).html$ /shop/index.php?act=show_groupbuy&op=vr_groupbuy_history&vr_class=$1&vr_s_class=$2&vr_area=$3&vr_mall=$4&groupbuy_price=$5&groupbuy_order_key=$6&groupbuy_order=$7&curpage=$8 last;
	rewrite ^/shop/integral.html$ /shop/index.php?act=pointshop&op=index last;
	rewrite ^/shop/integral_list.html$ /shop/index.php?act=pointshop&op=plist last;
	rewrite ^/shop/integral_item-(\d+).html$ /shop/index.php?act=pointshop&op=pinfo&id=$1 last;
	rewrite ^/shop/voucher.html$ /shop/index.php?act=pointvoucher&op=index last;
	rewrite ^/shop/grade.html$ /shop/index.php?act=pointgrade&op=index last;
	rewrite ^/shop/explog-(\d+).html$ /shop/index.php?act=pointgrade&op=exppointlog&currpage=$1 last; 
	rewrite ^/shop/comments-(\d+)-([0-3])-(\d+).html$ /shop/index.php?act=goods&op=comments_list&goods_id=$1&type=$2&currpage=$3 last;
	rewrite ^/shop/goods-([0-9]+)(-?)([0-9]*).html$ /shop/index.php?act=goods&goods_id=$1 last;
	rewrite ^/shop/groupbuy-([0-9]+)-([0-9]+).html$ /shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=$1&id=$2 last;
	rewrite ^/shop/store-([0-9]+).html$ /shop/index.php?act=show_store&store_id=$1 last;
	rewrite ^/shop/activity-([0-9]+)-([0-9]*).html$ /shop/index.php?act=activity&activity_id=$1&nav_id=$2 last;
	rewrite ^/shop/store_nav-([0-9]+)-([0-9]+).html$ /shop/index.php?act=show_store&store_id=$1&article=$2 last;
	rewrite ^/shop/coupon_info-([0-9]+)-([0-9]+).html$ /shop/index.php?act=coupon_store&op=detail&coupon_id=$1&id=$2 last;
	rewrite ^/shop/-([0-9]+)-([0-9]+).html$ /shop/index.php?act=show_groupbuy&op=groupbuy_detail&group_id=$1&id=$2 last;
	rewrite ^/shop/night-([a-zA-Z_]+).html$ /shop/index.php?act=night&op=night&code=$1 last;
	rewrite ^/shop/shop-(\d+).html$ /shop/index.php?act=show_store&op=index&store_id=$1 last;
	rewrite ^/shop/item-([0-9]+)(-?)([0-9]*).html$ /shop/index.php?act=goods&goods_id=$1&id=$2 last;
	rewrite ^/shop/special.html$ /shop/index.php?act=special&op=special_list last;
	rewrite ^/shop/store.html$ /shop/index.php?act=store_list&op=index last;
```
