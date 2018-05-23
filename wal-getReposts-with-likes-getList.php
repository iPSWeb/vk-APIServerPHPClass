<?php
/* 
 * Author: pligin.
 * Author email: i@psweb.ru | i@psweb.by
 * Author Site URL: https://psweb.ru | https://psweb.by
 */

require ('vkapi.class.php');
$api_id = '1111111'; //ID приложения | ID APP
$secret_key = 'secret_key'; // секретный ключ | Secret Key
$owner_id = '-11111111'; //идентификатор владельца Like-объекта: id пользователя, id сообщества (со знаком «минус») или id приложения.
$post_id = '11111';//идентификатор поста. в ссылке на пост крайние цифры после знака "_"

$VK = new vkapi($api_id, $secret_key);//создаем экземпляр класса vkapi | create an instance of the vkapi class
$resp = $VK->api('likes.getList',//используем метод likes.getList
        array(
            'type' => 'post',// тип объекта - запись
            'owner_id' => $owner_id,
            'item_id' => $post_id,
            'filter' => 'copies',//copies — возвращать информацию только о пользователях, рассказавших об объекте друзьям
            'extended' => '1',//1 — возвращать расширенную информацию о пользователях и сообществах
            'count' => '1000'//количество возвращаемых идентификаторов пользователей
            )
        );
print_r($resp);