Cloning
1. Put the files on your server
If you have SSH access, simply clone the repository with git:
`git clone https://github.com/usernein/silentc`
If you don't have SSH access, you can [download the repository as zip](https://github.com/usernein/silentc/archive/master.zip) and upload it to your server. Then unzip it.

2. Edit config.php
The file `config.php` is where you will define the sudoers ids (sudoers can use special but dangerous commands, like /sql that execute SQL queries).
Simply replace 276145711 (my Telegram id) to your Telegram id.
Also replace YOUR:TOKEN_HERE to your bot token.

3. Run the bot
If you are in cli, run `php poll.php`. If you will use webhooks, set the webhook url to `webhook.php`.

Also if you are in cli and will run in polling, i highly recommend you to use tmux or screen to keep it running 24/7. Also run `bash poll.sh` instead of `php poll.php`. It will restart the bot if any fatal error occurs.

# Contact
[I](https://t.me/usernein) have a [channel](https://t.me/hpxlist) and a [group](https://t.me/silentcchat).

Ah, and i'll not maintain this code. Keep tuned hehe
