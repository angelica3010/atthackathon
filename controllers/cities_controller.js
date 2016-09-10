
var express = require('express');
var router = express.Router();

var fs = require('fs');
var request = require('request');
var cheerio = require('cheerio');
var app     = express();

var mongojs = require('mongojs');
var databaseUrl = "mongodb://angel:trinh@ds043062.mlab.com:43062/heroku_08ktqcc5?authMode=scram-sha1&rm.tcpNoDelay=true";
var collections = ["hostels", "topPlaces", "hotels", "paidtours"];
var db = mongojs(databaseUrl, collections);
db.on('error', function(err) {
  console.log('Database Error:', err);
});



router.get('/', function(req,res) {
  var hbsObject = {logged_in: req.session.logged_in, isUser: req.session.isUser}

  db.hostels.find({city: "Paris"}, function(err, found1) {
    if (err) {
      console.log(err);
    } else {
      hbsObject.hostelData = found1;
      db.hotels.find({City: "Paris"}, function(err, found2) {
        if (err) {
          console.log(err);
        } else {
          hbsObject.hotelData = found2;

        db.topPlaces.find({City: "Paris"}, function(err, found3) {

            if (err) {
              console.log(err);
            } else {
              hbsObject.topPlacesData = found3;
              db.paidtours.find({City: "Paris"}, function(err, found4) {
                if (err) {
                  console.log(err);
                } else {
                  hbsObject.paidToursData = found4;

                  // res.send(found);
                  res.render('cities', hbsObject);
                }

              });

            }
          });
        }
      });
    }
  });
});

router.get('/Barcelona', function(req,res) {
  var hbsObject = {logged_in: req.session.logged_in, isUser: req.session.isUser}

  db.hostels.find({city: "Barcelona"}, function(err, found1) {
    if (err) {
      console.log(err);
    } else {
      hbsObject.hostelData = found1;
      db.hotels.find({City: "Barcelona"}, function(err, found2) {
        if (err) {
          console.log(err);
        } else {
          hbsObject.hotelData = found2;

        db.topPlaces.find({City: "Barcelona"}, function(err, found3) {

            if (err) {
              console.log(err);
            } else {
              hbsObject.topPlacesData = found3;
              db.paidtours.find({City: "Barcelona"}, function(err, found4) {
                if (err) {
                  console.log(err);
                } else {
                  hbsObject.paidToursData = found4;

                  // res.send(found);
                  res.render('barcelona', hbsObject);
                }

              });

            }
          });
        }
      });
    }
  });
});

router.get('/Berlin', function(req,res) {
  var hbsObject = {logged_in: req.session.logged_in, isUser: req.session.isUser}

  db.hostels.find({city: "Berlin"}, function(err, found1) {
    if (err) {
      console.log(err);
    } else {
      hbsObject.hostelData = found1;
      db.hotels.find({City: "Berlin"}, function(err, found2) {
        if (err) {
          console.log(err);
        } else {
          hbsObject.hotelData = found2;

        db.topPlaces.find({City: "Berlin"}, function(err, found3) {


            if (err) {
              console.log(err);
            } else {
              hbsObject.topPlacesData = found3;
              db.paidtours.find({City: "Berlin"}, function(err, found4) {
                if (err) {
                  console.log(err);
                } else {
                  hbsObject.paidToursData = found4;

                  // res.send(found);
                  res.render('berlin', hbsObject);
                }

              });

            }
          });
        }
      });
    }
  });
});


router.get('/Paris', function(req,res) {
  var hbsObject = {logged_in: req.session.logged_in, isUser: req.session.isUser}

  db.hostels.find({city: "Paris"}, function(err, found1) {
    if (err) {
      console.log(err);
    } else {
      hbsObject.hostelData = found1;
      db.hotels.find({City: "Paris"}, function(err, found2) {
        if (err) {
          console.log(err);
        } else {
          hbsObject.hotelData = found2;

        db.topPlaces.find({City: "Paris"}, function(err, found3) {

            if (err) {
              console.log(err);
            } else {
              hbsObject.topPlacesData = found3;
              db.paidtours.find({City: "Paris"}, function(err, found4) {
                if (err) {
                  console.log(err);
                } else {
                  hbsObject.paidToursData = found4;

                  // res.send(found);
                  res.render('paris', hbsObject);
                }

              });

            }
          });
        }
      });
    }
  });
});




router.get('/index', function(req,res) {
    var hbsObject = {logged_in: req.session.logged_in, isUser: req.session.isUser}
  res.render('cities', hbsObject);
});

router.get('/users', checkUserSession, function(req,res) {
  cities.allUsers(function(data){
    var hbsObject = {users : data, logged_in: req.session.logged_in, isUser: req.session.isUser}
    res.render('users', hbsObject);
  });
});

router.put('/cities/update/:citiesId', function(req,res) {
  var condition = 'citiesId = ' + req.params.citiesId;
  // console.log('condition', condition);
 cities.update({'cityname ' : req.body.cityname, ', state ' : req.body.state, ', country' : req.body.country}, condition, function(data){
    res.redirect('/cities');
  });
});


router.get('/cities', checkUserSession, function(req,res) {
  var condition = 'userId = ' + req.session.userId;
  cities.allCities(condition, function(data){
    var hbsObject = {cities : data, logged_in: req.session.logged_in, isUser: req.session.isUser}
    res.render('cities', hbsObject);
  });
});


/// This is if the users decides to change city. For example, if they change from Barcelona to Paris

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
}//checkUserSession()


module.exports = router;