# illi SS 魔改版
这是 SS 在使用中对 illi 主题的魔改版（（（（

### 主项目
> [illi Github 库](https://github.com/touchitvoid/illi)
### 演示站
> [林槐的杂货铺](https://stapx.chuhelan.com/)
### 主要修改（倒序）
- 加了个页面图标，文件在img/LZHP.png，代码在Header.php里
- 右栏默认展开（增大右栏的存在感）
- 去除了左栏，将回到主页和标签云移到了右栏（没有去除去除部分的代码）
- 自动切换暗黑模式（dackmode.css 里面还包含适配其他插件暗黑模式的 CSS）
- 增加看板娘
- 重写的友链的 CSS 样式
- 将移到底部改为了回到顶部（其实这个按钮在原主题里是有的，而且也没刻意隐藏，但是不知道为什么，由于布局的原因被遮盖掉了，稍微改了下让它能看见了）
- 去掉了文章浏览量的显示（注释掉了相关代码）
- 修改文章目录区的高度为 35% （解决了我电脑分辨率低导致显示不全）
- 给文章目录区加了个 “\<h5\>文章索引\</h5\>” 标题
- 修复了文章目录区 \<a\> 标签自动换行导致的文字重叠的BUG
- 将主页底图上固定的网站副标题改为获取显示一言（[API](https://hitokoto.cn/)）

具体的修改细节可以查看 `归档` 分类中的 `维护日志` 文章。