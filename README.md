# simple-openvpn-server

## 简介

通过openvpn进行异地组网。客户端能够通过open vpn连接到同一个服务器，而且客户端之间可以相互ping通，组成局域网。

对于openvpn的操作由openvpn-install进行，并在原项目代码上进行了野蛮的修改。

openvpn-install的仓库地址：https://github.com/angristan/openvpn-install

通过php，apache实现了简陋的`.ovpn`配置文件分发平台。

## 部署

环境：
* ubuntu 18.04
* php
* apache2

在`\var\www\html`文件夹下`git clone git@github.com:DiffidentAres/simple-openvpn-server.git`或`git clone https://github.com/DiffidentAres/simple-openvpn-server.git`

安装并初始化openvpn。在`openvpn-install`文件夹下，以`root`用户身份执行`./openvpn-install.sh`。根据命令行提示进行安装以及初始化操作。

修改`/etc/sudoers`文件。添加：`www-data ALL=(ALL:ALL) NOPASSWD: /var/www/html/openvpn-install/add-client.sh`由此，`www-data`能够无需密码对`add-client.sh`执行`sudo`操作。

## 客户端使用

首先下载openvpn并安装。地址：https://openvpn.net/download-open-vpn/

获取`.ovpn`配置文件。

将`.ovpn`配置文件导入open vpn并连接即可。

## TODO

- [ ] 搞个像点样子的前端界面
- [ ] 修改`openvpn-install`项目的脚本代码，分离安装、添加用户、删除用户操作
- [ ] 修改脚本，避免`sudo`的使用
- [ ] 实现用户登录功能，一个用户分配一个配置文件