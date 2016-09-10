

var bcrypt = require('bcryptjs');
var express = require('express');
var router = express.Router();
var connection = require('../config/connection.js');



router.get('/', function(req,res) {
	res.render('home');
});


module.exports = router;