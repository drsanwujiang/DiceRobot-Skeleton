# DiceRobot

[![License](https://poser.pugx.org/drsanwujiang/dicerobot-skeleton/license)](https://packagist.org/packages/drsanwujiang/dicerobot-skeleton)

使用本项目可以快速部署 [DiceRobot](https://github.com/drsanwujiang/DiceRobot) ，但是由于 DiceRobot 的正常运行需要 [Swoole](https://www.swoole.com/) 扩展和 [Mirai API HTTP](https://github.com/project-mirai/mirai-api-http) 插件，所以还是建议查阅 [说明文档](https://docs.dicerobot.tech/) 来进行完整的部署。

本项目使用 Composer 构建。


## 部署

在你想部署 DiceRobot 的目录下执行命令：

```bash
composer create-project drsanwujiang/dicerobot-skeleton dicerobot
```

如果需要验证或者进行测试，可以运行以下命令启动 DiceRobot： 

```bash
cd dicerobot
composer start
```

正常情况下建议通过 `systemctl start dicerobot` 命令启动。

就这些了，玩得愉快~
