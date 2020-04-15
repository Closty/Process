**名称**：Process-v2.3

**下载**：[点击此处转github下载][1]

**介绍**：这是一款适用于typecho任何主题的加载页面进度条，可以让你的博客加载时显得更加顺滑而不会显得过于突兀，就像我的博客一样；因为在国外访问速度较慢，使用本插件可以很好得起到视觉缓冲的作用。本插件有十种颜色可以进行更改，分别是黑、蓝、绿、橙、粉红、紫、银、白、黄。并有十五种主题进行更改，理发店型、萌萌哒跳跃型、大字号数字型、居中常规型等。
**部署**

 - 通过上面的github链接，下载最新版本，将会得到一个Process的压缩包，将其解压在typecho根目录`/usr/plugins`下。
 - 将以下的代码复制到你想要呈现加载进度的页面。
   如果想要所有界面都有加载进度条，可以放在`usr/themes/你主题名字如defaut/header.php`的头部，如图所示。

![将代码置于header.php中][3]

 - 在typecho后台>控制台>插件，找到Process开启，在设置中填写您的github用户名并进行更换进度条动画效果、颜色的更改。

至此，访问你的网站，你就可以在你的网站上面看到效果啦！默认是动画效果：右上角转蓝色圈

**相关截图**



![插件主题列表][4]


![Process黑色翻转圆圈型][5]


  [1]: https://github.com/Closty/Process/releases
  [2]: https://github.com/HubSpot/pace
  [3]: https://www.clost.net/usr/uploads/2020/03/2537890914.jpg
  [4]: https://www.clost.net/usr/uploads/2020/03/570445020.png
  [5]: https://cdn.jsdelivr.net/gh/614286240/tuchuang/usr/uploads/2020/04/1475598232.gif
