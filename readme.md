This is a challenge for a Full Stack Developer at Pluft.

For this challenge the developer has not implemented authentication to API. 

API Manual

Clients

<h1>Get clients information</h1>

------------------------------------------------------------------------------------------

var request = require("request");

var options = { method: 'GET',
  url: 'http:/{your_url}/api/v1/clients',
  headers: 
   { 'Postman-Token': 'c2b748ad-b4f4-4af6-8791-b395c1f04826',
     'cache-control': 'no-cache' } };

request(options, function (error, response, body) {
  if (error) throw new Error(error);

  console.log(body);
});

------------------------------------------------------------------------------------------


<h1>Get companies informations</h1>

------------------------------------------------------------------------------------------

var request = require("request");

var options = { method: 'GET',
  url: 'http://api/v1/companies',
  headers: 
   { 'Postman-Token': '7278478a-d6e2-4ae3-beb2-cfdd83345bb8',
     'cache-control': 'no-cache' } };

request(options, function (error, response, body) {
  if (error) throw new Error(error);

  console.log(body);
});

------------------------------------------------------------------------------------------


------------------------------------------------------------------------------------------

<h1>Get slots/offers informations</h1>

------------------------------------------------------------------------------------------

var request = require("request");

var options = { method: 'GET',
  url: 'http://api/v1/slots',
  headers: 
   { 'Postman-Token': '1c52b3dc-1427-4d56-9ceb-3c5c33787c01',
     'cache-control': 'no-cache' } };

request(options, function (error, response, body) {
  if (error) throw new Error(error);

  console.log(body);
});

