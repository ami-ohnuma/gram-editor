# 手順
 
ローカル環境構築手順を列挙する

* git clone https://github.com/ami-ohnuma/gram-editor.git
* sudo vi /private/etc/hostsに追記 127.0.0.1    local_gram_editor
* docker-compose up -d --build 
* webapp-ami_gram_web-1コンテナにdocker exec -it webapp-ami_gram_web-1 bashで入りcomposer install実行
* ami_gram_mysqlコンテナに入り(docker exec -it ami_gram_mysql bash) mysql -prootでDB確認可能
* ローカルグラマエディタページ　https://local_gram_editor/
