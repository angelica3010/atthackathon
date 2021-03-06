var path = require('path');
// var favicon = require('serve-favicon');
var logger = require('morgan');
var cookieParser = require('cookie-parser');
var bodyParser = require('body-parser');
var express = require('express');
var session = require('express-session');
var methodOverride = require('method-override');

var app = express();






//allow sessions
app.use(session({ secret: 'app', proxy: true, resave: true, saveUninitialized: true, cookie: { maxAge: 600000 }}));
app.use(cookieParser());

//Serve static content for the app from the "public" directory in the application directory.
app.use(express.static(process.cwd() + '/public'));


app.use(bodyParser.urlencoded({
  extended: false
}))
// view engine setup
app.set('views', path.join(__dirname, 'views'));

//set up handlebars
app.use(methodOverride('_method'))
var exphbs = require('express-handlebars');
app.engine('handlebars', exphbs({
    defaultLayout: 'main'
}));
app.set('view engine', 'handlebars');
// app.registerPartials(__dirname + '/views/users');

var application_controller = require('./controllers/application_controller');

var cities_controller = require('./controllers/cities_controller');
var users_controller = require('./controllers/users_controller');
var home_controller = require('./controllers/home_controller');



app.use('/', application_controller);
app.use('/users', users_controller);


app.use('/cities', cities_controller);
app.use('/home', home_controller);



function checkUserSession( req, res, next )
{
    if( req.session.user_id )
    {
        next();
    }
    else
    {
        res.redirect('/');
    }
}


var port = process.env.PORT || 3000;
app.listen(port, function(){
    console.log('listening on PORT',port);
});
