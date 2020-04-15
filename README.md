**名称**：Process-v2.3

**下载**：[点击此处下载最新版本][1]

**介绍**：这是一款适用于typecho任何主题的加载页面进度条，可以让你的博客加载时显得更加顺滑而不会显得过于突兀,使用本插件可以很好得起到视觉缓冲的作用。本插件有十种颜色可以进行更改，分别是黑、蓝、绿、橙、粉红、紫、银、白、黄。并有十五种主题进行更改，理发店型、萌萌哒跳跃型、大字号数字型、居中常规型等。

**更新**：将Process轻盈化；仅需下载2Kb大小便可拥有数十种Process主题。自带CDN全程加速，Fork本项目后在设置中填入您的Github用户名将使用属于您自己的仓库！如果不想使用CDN请选择[下载1.1版本](https://www.clost.net/index.php/jishujiaocheng/124.html)!

**部署**

 - 通过上面的github链接，下载最新版本，将会得到一个Process的压缩包，将其解压在typecho根目录`/usr/plugins`下。
 - 将以下的代码复制到你想要呈现加载进度的页面。
   <details>
   <summary> 所有界面使用Process？</summary>
   如果想要所有界面都有加载进度条，可以放在`usr/themes/你主题名字如defaut/header.php`的头部，如图所示。
   
   ![将代码置于header.php中][3]
   
   </details>
```
<!--加载进度条插件-->
<?php Typecho_Plugin::factory('Process')->render(); ?>
```
   
 - 在typecho后台>控制台>插件，找到Process开启，Fork本项目后在设置中填写您的github用户名并进行更换进度条动画效果、颜色的更改。
   <details>
   <summary> 如何Fork本项目？</summary>
   登陆您的github账号，访问<https://github.com/Closty/Process>进入github的Process页面中，点击右上角的Fork按钮，如图所示。
   
   ![Fork本项目][7]
   
   </details>

 - 至此，访问你的网站，你就可以在你的网站上面看到效果啦！默认动画效果：右上角转蓝色圈

**相关截图**（如果有些图片不显示请挂代理或者去我的博客观看<https://www.clost.net/index.php/jishujiaocheng/470.html>）




![设置界面][4]

以下是相关演示；均已设置为黑色，可以自行选择颜色

![Process黑色翻转圆圈型][5]

![flash控件型.gif](https://cdn.jsdelivr.net/gh/closty/tuchuang/usr/uploads/2020/04/940786729.gif)

![大号数字型.gif](https://cdn.jsdelivr.net/gh/closty/tuchuang/usr/uploads/2020/04/2668313096.gif)

![翻转圆圈型.gif](https://cdn.jsdelivr.net/gh/closty/tuchuang/usr/uploads/2020/04/2582744789.gif)

![缓存加载型.gif](https://cdn.jsdelivr.net/gh/closty/tuchuang/usr/uploads/2020/04/1988166656.gif)

![角示器型.gif](https://cdn.jsdelivr.net/gh/closty/tuchuang/usr/uploads/2020/04/2302104356.gif)

![居中常规型.gif](https://cdn.jsdelivr.net/gh/closty/tuchuang/usr/uploads/2020/04/3044598873.gif)

![雷达扫描型.gif](https://cdn.jsdelivr.net/gh/closty/tuchuang/usr/uploads/2020/04/3369267188.gif)

![萌萌哒跳跃型.gif](https://cdn.jsdelivr.net/gh/closty/tuchuang/usr/uploads/2020/04/3767308857.gif)

![左侧填充型.gif](https://cdn.jsdelivr.net/gh/closty/tuchuang/usr/uploads/2020/04/4085822504.gif)

更多主题请自行探索。



  [1]: https://github.com/Closty/Process/releases
  [3]: https://cdn.jsdelivr.net/gh/closty/tuchuang/usr/uploads/2020/04/3416466155.jpg
  [4]: https://cdn.jsdelivr.net/gh/closty/tuchuang/usr/uploads/2020/04/3396169989.png
  [5]: https://cdn.jsdelivr.net/gh/614286240/tuchuang/usr/uploads/2020/04/1475598232.gif
  [6]: https://github.com/Closty/Process
  [7]: https://cdn.jsdelivr.net/gh/closty/tuchuang/usr/uploads/2020/04/3749713206.png
