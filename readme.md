This is a challenge for a Full Stack Developer at Pluft.

For this challenge the developer has not implemented authentication to API. 

Important:

1. To execute this API please run composer install and create a schema "api_pluft" on MySql.
2. Run the migrations and seeds.
3. Enjoy!



<h1>API Manual<h1>

<h3>On first GET you will see each fields of the tables</h3>

<h2>Clients</h2>

GET: {your_url}/api/v1/clients 

HEAD: {your_url}/api/v1/clients 

PUT: {your_url}/api/v1/clients/{id}

DELETE: {your_url}/api/v1/clients/{id}


<h2>Companies</h2>

GET: {your_url}/api/v1/companies

HEAD: {your_url}/api/v1/companies

PUT: {your_url}/api/v1/companies/{id}

DELETE: {your_url}/api/v1/companies/{id}


<h2>Slots/Offers</h2>

GET: {your_url}/api/v1/slots

HEAD: {your_url}/api/v1/slots

PUT: {your_url}/api/v1/slots/{id}

DELETE: {your_url}/api/v1/slots/{id}
