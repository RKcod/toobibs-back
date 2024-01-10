define({
  "name": "apiato",
  "version": "1.0.0",
  "description": "apiato (Public API) Documentation",
  "title": "Welcome to apiato",
  "url": "http://api.apiato.dev",
  "template": {
    "withCompare": true,
    "withGenerator": true
  },
  "header": {
    "title": "API Overview",
    "content": "<h2><strong>Usage Overview</strong></h2>\n<p>Here are some information that should help you understand the basic usage of our RESTful API.\nIncluding info about authenticating users, making requests, responses, potential errors, rate limiting, pagination, query parameters and more.</p>\n<h2><strong>Headers</strong></h2>\n<p>Certain API calls require you to send data in a particular format as part of the API call.\nBy default, all API calls expect input in <code>JSON</code> format, however you need to inform the server that you are sending a JSON-formatted payload.\nAnd to do that you must include the <code>Accept =&gt; application/json</code> HTTP header with every call.</p>\n<table>\n<thead>\n<tr>\n<th>Header</th>\n<th>Value Sample</th>\n<th>When to send it</th>\n</tr>\n</thead>\n<tbody>\n<tr>\n<td>Accept</td>\n<td><code>application/json</code></td>\n<td>MUST be sent with every endpoint.</td>\n</tr>\n<tr>\n<td>Content-Type</td>\n<td><code>application/x-www-form-urlencoded</code></td>\n<td>MUST be sent when passing Data.</td>\n</tr>\n<tr>\n<td>Authorization</td>\n<td><code>Bearer {Access-Token-Here}</code></td>\n<td>MUST be sent whenever the endpoint requires (Authenticated User).</td>\n</tr>\n</tbody>\n</table>\n<h2><strong>Rate limiting</strong></h2>\n<p>All REST API requests are throttled to prevent abuse and ensure stability.\nThe exact number of calls that your application can make per day varies based on the type of request you are making.</p>\n<p>The rate limit window is <code>1</code> minutes per endpoint, with most individual calls allowing for <code>30</code> requests in each window.</p>\n<p><em>In other words, each user is allowed to make <code>30</code> calls per endpoint every <code>1</code> minutes. (For each unique access token).</em></p>\n<p>For how many hits you can preform on an endpoint, you can always check the header:</p>\n<pre class=\"prettyprint\">X-RateLimit-Limit → 30\nX-RateLimit-Remaining → 29\n</code></pre>\n<h2><strong>Tokens</strong></h2>\n<p>The Access Token lives for <code>1 days, 0 hours, 0 minutes and 0 seconds</code>. (equivalent to <code>1440</code> minutes).\nWhile the Refresh Token lives for <code>30 days, 0 hours, 0 minutes and 0 seconds</code>. (equivalent to <code>43200</code> minutes).</p>\n<p><em>You will need to re-authenticate the user when the token expires.</em></p>\n<h2><strong>Pagination</strong></h2>\n<p>By default, all fetch requests return the first <code>10</code> items in the list. Check the <strong>Query Parameters</strong> for how to control the pagination.</p>\n<h2><strong>Limit:</strong></h2>\n<p>The <code>?limit=</code> parameter can be applied to define, how many record should be returned by the endpoint (see also <code>Pagination</code>!).</p>\n<p><strong>Usage:</strong></p>\n<pre class=\"prettyprint\">api.toobib.site/endpoint?limit=100\n</code></pre>\n<p>The above example returns 100 resources.</p>\n<p>The <code>limit</code> and <code>page</code> query parameters can be combined in order to get the next 100 resources:</p>\n<pre class=\"prettyprint\">api.toobib.site/endpoint?limit=100&page=2\n</code></pre>\n<p>You can skip the pagination limit to get all the data, by adding <code>?limit=0</code>, this will only work if 'skip pagination' is enabled on the server.</p>\n<h2><strong>Responses</strong></h2>\n<p>Unless otherwise specified, all of API endpoints will return the information that you request in the JSON data format.</p>\n<h4>Standard Response Format</h4>\n<pre class=\"prettyprint lang-shell\">{\n  \"data\": {\n    \"object\": \"Role\",\n    \"id\": \"owpmaymq\",\n    \"name\": \"admin\",\n    \"description\": \"Administrator\",\n    \"display_name\": null,\n    \"permissions\": {\n      \"data\": [\n        {\n          \"object\": \"Permission\",\n          \"id\": \"wkxmdazl\",\n          \"name\": \"update-users\",\n          \"description\": \"Update a User.\",\n          \"display_name\": null\n        },\n        {\n          \"object\": \"Permission\",\n          \"id\": \"qrvzpjzb\",\n          \"name\": \"delete-users\",\n          \"description\": \"Delete a User.\",\n          \"display_name\": null\n        }\n      ]\n    }\n  }\n}\n</pre>\n<h4>Header</h4>\n<p>Header Response:</p>\n<pre class=\"prettyprint\">Content-Type → application/json\nDate → Thu, 14 Feb 2014 22:33:55 GMT\nETag → \"9c83bf4cf0d09c34782572727281b85879dd4ff6\"\nServer → nginx\nTransfer-Encoding → chunked\nX-Powered-By → PHP/7.0.9\nX-RateLimit-Limit → 100\nX-RateLimit-Remaining → 99\n</code></pre>\n<h2><strong>Query Parameters</strong></h2>\n<p>Query parameters are optional, you can apply them to some endpoints whenever you need them.</p>\n<h3>Ordering</h3>\n<p>The <code>?orderBy=</code> parameter can be applied to any <strong><code>GET</code></strong> HTTP request responsible for ordering the listing of the records by a field.</p>\n<p><strong>Usage:</strong></p>\n<pre class=\"prettyprint\">api.toobib.site/endpoint?orderBy=created_at\n</code></pre>\n<h3>Sorting</h3>\n<p>The <code>?sortedBy=</code> parameter is usually used with the <code>orderBy</code> parameter.</p>\n<p>By default the <code>orderBy</code> sorts the data in <strong>ascending</strong> order, if you want the data sorted in <strong>descending</strong> order, you can add <code>&amp;sortedBy=desc</code>.</p>\n<p><strong>Usage:</strong></p>\n<pre class=\"prettyprint\">api.toobib.site/endpoint?orderBy=name&sortedBy=desc\n</code></pre>\n<p>Order By Accepts:</p>\n<ul>\n<li><code>asc</code> for Ascending.</li>\n<li><code>desc</code> for Descending.</li>\n</ul>\n<h3>Searching</h3>\n<p>The <code>?search=</code> parameter can be applied to any <strong><code>GET</code></strong> HTTP request.</p>\n<p><strong>Usage:</strong></p>\n<h4>Search any field:</h4>\n<pre class=\"prettyprint\">api.toobib.site/endpoint?search=keyword here\n</code></pre>\n<blockquote>\n<p>Space should be replaced with <code>%20</code> (search=keyword%20here).</p>\n</blockquote>\n<h4>Search any field for multiple keywords:</h4>\n<pre class=\"prettyprint\">api.toobib.site/endpoint?search=first keyword;second keyword\n</code></pre>\n<h4>Search in specific field:</h4>\n<pre class=\"prettyprint\">api.toobib.site/endpoint?search=field:keyword here\n</code></pre>\n<h4>Search in specific fields for multiple keywords:</h4>\n<pre class=\"prettyprint\">api.toobib.site/endpoint?search=field1:first field keyword;field2:second field keyword\n</code></pre>\n<h4>Define query condition:</h4>\n<pre class=\"prettyprint\">api.toobib.site/endpoint?search=field:keyword&searchFields=name:like\n</code></pre>\n<p>Available Conditions:</p>\n<ul>\n<li><code>like</code>: string like the field. (SQL query <code>%keyword%</code>).</li>\n<li><code>=</code>: string exact match.</li>\n</ul>\n<h4>Define query condition for multiple fields:</h4>\n<pre class=\"prettyprint\">api.toobib.site/endpoint?search=field1:first keyword;field2:second keyword&searchFields=field1:like;field2:=;\n</code></pre>\n<h3>Filtering</h3>\n<p>The <code>?filter=</code> parameter can be applied to any HTTP request. And is used to control the response size, by defining what data you want back in the response.</p>\n<p><strong>Usage:</strong></p>\n<p>Return only ID and Name from that Model, (everything else will be returned as <code>null</code>).</p>\n<pre class=\"prettyprint\">api.toobib.site/endpoint?filter=id;status\n</code></pre>\n<p>Example Response, including only id and status:</p>\n<pre class=\"prettyprint lang-json\">{\n  \"data\": [\n    {\n      \"id\": \"0one37vjk49rp5ym\",\n      \"status\": \"approved\",\n      \"products\": {\n        \"data\": [\n          {\n            \"id\": \"bmo7y84xpgeza06k\",\n            \"status\": \"pending\"\n          },\n          {\n            \"id\": \"o0wzxbg0q4k7jp9d\",\n            \"status\": \"fulfilled\"\n          }\n        ]\n      },\n      \"recipients\": {\n        \"data\": [\n          {\n            \"id\": \"r6lbekg8rv5ozyad\"\n          }\n        ]\n      },\n      \"store\": {\n        \"data\": {\n          \"id\": \"r6lbekg8rv5ozyad\"\n        }\n      }\n    }...\n</pre>\n<h3>Paginating</h3>\n<p>The <code>?page=</code> parameter can be applied to any <strong><code>GET</code></strong> HTTP request responsible for listing records (mainly for Paginated data).</p>\n<p><strong>Usage:</strong></p>\n<pre class=\"prettyprint\">api.toobib.site/endpoint?page=200\n</code></pre>\n<p><em>The pagination object is always returned in the <strong>meta</strong> when pagination is available on the endpoint.</em></p>\n<pre class=\"prettyprint lang-shell\">  \"data\": [...],\n  \"meta\": {\n    \"pagination\": {\n      \"total\": 2000,\n      \"count\": 30,\n      \"per_page\": 30,\n      \"current_page\": 22,\n      \"total_pages\": 1111,\n      \"links\": {\n        \"previous\": \"http://api.toobib.site/endpoint?page=21\"\n      }\n    }\n  }\n</pre>\n<h3>Relationships</h3>\n<p>The <code>?include=</code> parameter can be used with any endpoint, only if it supports it.</p>\n<p>How to use it: let's say there's a Driver object and Car object. And there's an endpoint <code>/cars</code> that returns all the cars objects.\nThe include allows getting the cars with their drivers <code>/cars?include=drivers</code>.</p>\n<p>However, for this parameter to work, the endpoint <code>/cars</code> should clearly define that it\naccepts <code>driver</code> as relationship (in the <strong>Available Relationships</strong> section).</p>\n<p><strong>Usage:</strong></p>\n<pre class=\"prettyprint\">api.toobib.site/endpoint?include=relationship\n</code></pre>\n<p>Every response contain an <code>include</code> in its <code>meta</code>  as follow:</p>\n<pre class=\"prettyprint\">   \"meta\":{\n      \"include\":[\n         \"relationship-1\",\n         \"relationship-2\",\n      ],\n</code></pre>\n<h3>Caching</h3>\n<p>Some endpoints stores their response data in memory (caching) after querying them for the first time, to speed up the response time.\nThe <code>?skipCache=</code> parameter can be used to force skip loading the response data from the server cache and instead get a fresh data from the database upon the request.</p>\n<p><strong>Usage:</strong></p>\n<pre class=\"prettyprint\">api.toobib.site/endpoint?skipCache=true\n</code></pre>\n<h2><strong>Errors</strong> (Outdated)</h2>\n<p>General Errors:</p>\n<table>\n<thead>\n<tr>\n<th>Error Code</th>\n<th>Message</th>\n<th>Reason</th>\n</tr>\n</thead>\n<tbody>\n<tr>\n<td>401</td>\n<td>Wrong number of segments.</td>\n<td>Wrong Token.</td>\n</tr>\n<tr>\n<td>401</td>\n<td>Failed to authenticate because of bad credentials or an invalid authorization header.</td>\n<td>Missing parts of the Token.</td>\n</tr>\n<tr>\n<td>401</td>\n<td>Could not decode token: The token ... is an invalid JWS.</td>\n<td>Missing Token.</td>\n</tr>\n<tr>\n<td>405</td>\n<td>Method Not Allowed.</td>\n<td>Wrong Endpoint URL.</td>\n</tr>\n<tr>\n<td>422</td>\n<td>Invalid Input.</td>\n<td>Validation Error.</td>\n</tr>\n<tr>\n<td>500</td>\n<td>Internal Server Error.</td>\n<td>{Report this error as soon as you get it.}</td>\n</tr>\n<tr>\n<td>500</td>\n<td>This action is unauthorized.</td>\n<td>Using wrong HTTP Verb. OR using unauthorized token.</td>\n</tr>\n</tbody>\n</table>\n<p>TO BE CONTINUE...</p>\n<h2><strong>Requests</strong></h2>\n<p>Calling unprotected endpoint example:</p>\n<pre class=\"prettyprint lang-shell\">curl -X POST -H \"Accept: application/json\" -H \"Content-Type: application/x-www-form-urlencoded; -F \"email=admin@admin.com\" -F \"password=admin\" -F \"=\" \"http://api.toobib.site/v2/register\"\n</pre>\n<p>Calling protected endpoint (passing Bearer Token) example:</p>\n<pre class=\"prettyprint lang-shell\">curl -X GET -H \"Accept: application/json\" -H \"Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9...\" -H \"http://api.toobib.site/v1/users\"\n</pre>\n"
  },
  "order": [],
  "sampleUrl": false,
  "defaultVersion": "0.0.0",
  "apidoc": "0.3.0",
  "generator": {
    "name": "apidoc",
    "time": "2020-07-14T08:34:28.845Z",
    "url": "http://apidocjs.com",
    "version": "0.23.0"
  }
});
