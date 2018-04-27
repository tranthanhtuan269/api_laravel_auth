install

- php artisan migrate
- php artisan passport:install
- http://chosachso.local/api/register
	{
		"username" : "tuantt2",
		"email" : "test2@gmail.com",
		"password" : "iloveyou"
	}
- http://chosachso.local/oauth/token
	{
		"client_id" : {{ client_id }}
		"client_secret" : {{ client_secret }},
		"grant_type" : password,
		"username" : "test2@gmail.com",
		"password" : "iloveyou",
		"scope" : "*"
	}