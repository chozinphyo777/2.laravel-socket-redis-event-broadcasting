var app = require('express')();
var server = require('http').Server(app);
var io = require('socket.io')(server);
require('dotenv').config();
var ioRedis = require('ioredis');
redis = new ioRedis();
var redis = new ioRedis();
redis.subscribe('action-channel-one');

redis.on('message', function (channel, message) {
  message  = JSON.parse(message);
  console.log("message retrieving")
  io.emit(channel + ':' + message.event, message.data);
  console.log(message);
});

server.listen(3000);
io.on('connection', function(socket){   
  console.log('A connection is made'); 
});


