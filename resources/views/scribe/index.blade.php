<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>laravel Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var baseUrl = "http://localhost:8000";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.6.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.6.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-auth" class="tocify-header">
                <li class="tocify-item level-1" data-unique="auth">
                    <a href="#auth">Auth</a>
                </li>
                                    <ul id="tocify-subheader-auth" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="auth-POSTapi-v1-auth-login">
                                <a href="#auth-POSTapi-v1-auth-login">POST api/v1/auth/login</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="auth-POSTapi-v1-auth-otp-send">
                                <a href="#auth-POSTapi-v1-auth-otp-send">Send OTP code to user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="auth-POSTapi-v1-auth-otp-login">
                                <a href="#auth-POSTapi-v1-auth-otp-login">Send OTP code to user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="auth-POSTapi-v1-auth-user">
                                <a href="#auth-POSTapi-v1-auth-user">POST api/v1/auth/user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="auth-POSTapi-v1-auth-logout">
                                <a href="#auth-POSTapi-v1-auth-logout">POST api/v1/auth/logout</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="auth-POSTapi-v1-auth-refresh">
                                <a href="#auth-POSTapi-v1-auth-refresh">POST api/v1/auth/refresh</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-country_division">
                                <a href="#endpoints-POSTapi-v1-country_division">POST api/v1/country_division</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-request-log">
                                <a href="#endpoints-POSTapi-v1-request-log">POST api/v1/request-log</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-exception-log">
                                <a href="#endpoints-POSTapi-v1-exception-log">POST api/v1/exception-log</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-user">
                                <a href="#endpoints-POSTapi-v1-user">POST api/v1/user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-user-show">
                                <a href="#endpoints-POSTapi-v1-user-show">POST api/v1/user/show</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-user-insert">
                                <a href="#endpoints-POSTapi-v1-user-insert">POST api/v1/user/insert</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-user-update">
                                <a href="#endpoints-POSTapi-v1-user-update">POST api/v1/user/update</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-user-delete">
                                <a href="#endpoints-POSTapi-v1-user-delete">POST api/v1/user/delete</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-user-profile">
                                <a href="#endpoints-POSTapi-v1-user-profile">POST api/v1/user/profile</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-user-searchByRole">
                                <a href="#endpoints-POSTapi-v1-user-searchByRole">POST api/v1/user/searchByRole</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-user-check-username">
                                <a href="#endpoints-POSTapi-v1-user-check-username">POST api/v1/user/check-username</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-role">
                                <a href="#endpoints-POSTapi-v1-role">POST api/v1/role</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-auth_token">
                                <a href="#endpoints-POSTapi-v1-auth_token">POST api/v1/auth_token</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-upload-insert">
                                <a href="#endpoints-POSTapi-v1-upload-insert">POST api/v1/upload/insert</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-upload-list">
                                <a href="#endpoints-POSTapi-v1-upload-list">POST api/v1/upload/list</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-country_division-show">
                                <a href="#endpoints-POSTapi-v1-country_division-show">POST api/v1/country_division/show</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-country_division-insert">
                                <a href="#endpoints-POSTapi-v1-country_division-insert">POST api/v1/country_division/insert</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-country_division-update">
                                <a href="#endpoints-POSTapi-v1-country_division-update">POST api/v1/country_division/update</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-country_division-delete">
                                <a href="#endpoints-POSTapi-v1-country_division-delete">POST api/v1/country_division/delete</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-setting">
                                <a href="#endpoints-POSTapi-v1-setting">POST api/v1/setting</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-setting-insert">
                                <a href="#endpoints-POSTapi-v1-setting-insert">POST api/v1/setting/insert</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-setting-update">
                                <a href="#endpoints-POSTapi-v1-setting-update">POST api/v1/setting/update</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-setting-delete">
                                <a href="#endpoints-POSTapi-v1-setting-delete">POST api/v1/setting/delete</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                        <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: November 26, 2022</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost:8000</code>
</aside>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>Authenticate requests to this API's endpoints by sending an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>You can refresh your token at url : <code>auth/refresh</code> or login at url : <code>auth/login</code></p>

        <h1 id="auth">Auth</h1>

    <p>Authentication and Registration</p>
<p>You can Login ny otp or by simple username and password
You can create user or regsiter by otp
You can get user info
Tou can logout</p>

                                <h2 id="auth-POSTapi-v1-auth-login">POST api/v1/auth/login</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-auth-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/auth/login" \
    --header "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/auth/login"
);

const headers = {
    "Authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-auth-login">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 412,
    &quot;error&quot;: &quot;&quot;,
    &quot;message&quot;: &quot;اطلاعات ارسالی ناقص یا اشتباه است&quot;,
    &quot;data&quot;: [],
    &quot;patch&quot;: [],
    &quot;date&quot;: &quot;2022-11-26T09:54:27.401307Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-auth-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-auth-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-auth-login" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-auth-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-auth-login"></code></pre>
</span>
<form id="form-POSTapi-v1-auth-login" data-method="POST"
      data-path="api/v1/auth/login"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-auth-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-auth-login"
                    onclick="tryItOut('POSTapi-v1-auth-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-auth-login"
                    onclick="cancelTryOut('POSTapi-v1-auth-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-auth-login" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/auth/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-auth-login"
               value="Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="POSTapi-v1-auth-login"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="POSTapi-v1-auth-login"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="auth-POSTapi-v1-auth-otp-send">Send OTP code to user</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-auth-otp-send">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/auth/otp/send" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"username\": \"09111111111\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/auth/otp/send"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "username": "09111111111"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-auth-otp-send">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 500,
    &quot;error&quot;: &quot;&quot;,
    &quot;message&quot;: &quot;SQLSTATE[25P02]: In failed sql transaction: 7 ERROR:  current transaction is aborted, commands ignored until end of transaction block (SQL: insert into \&quot;otp_codes\&quot; (\&quot;ip\&quot;, \&quot;code\&quot;, \&quot;username\&quot;, \&quot;id\&quot;, \&quot;updated_at\&quot;, \&quot;created_at\&quot;) values (127.0.0.1, 1377, 09111111111, 82cc3cb0-cf73-47fa-bc74-e24976ca06ab, 2022-11-26 13:24:27, 2022-11-26 13:24:27))&quot;,
    &quot;data&quot;: [
        &quot;SQLSTATE[25P02]: In failed sql transaction: 7 ERROR:  current transaction is aborted, commands ignored until end of transaction block (SQL: insert into \&quot;otp_codes\&quot; (\&quot;ip\&quot;, \&quot;code\&quot;, \&quot;username\&quot;, \&quot;id\&quot;, \&quot;updated_at\&quot;, \&quot;created_at\&quot;) values (127.0.0.1, 1377, 09111111111, 82cc3cb0-cf73-47fa-bc74-e24976ca06ab, 2022-11-26 13:24:27, 2022-11-26 13:24:27))&quot;,
        &quot;/home/sina/workfiles/php/laravel/Test/apm-base-laravel/vendor/laravel/framework/src/Illuminate/Database/Connection.php&quot;,
        759,
        &quot;25P02&quot;
    ],
    &quot;patch&quot;: [],
    &quot;date&quot;: &quot;2022-11-26T09:54:27.426865Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-auth-otp-send" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-auth-otp-send"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-auth-otp-send" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-auth-otp-send" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-auth-otp-send"></code></pre>
</span>
<form id="form-POSTapi-v1-auth-otp-send" data-method="POST"
      data-path="api/v1/auth/otp/send"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-auth-otp-send', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-auth-otp-send"
                    onclick="tryItOut('POSTapi-v1-auth-otp-send');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-auth-otp-send"
                    onclick="cancelTryOut('POSTapi-v1-auth-otp-send');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-auth-otp-send" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/auth/otp/send</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="POSTapi-v1-auth-otp-send"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="POSTapi-v1-auth-otp-send"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>username</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="username"                data-endpoint="POSTapi-v1-auth-otp-send"
               value="09111111111"
               data-component="body" hidden>
    <br>
<p>usally user phone is his/her username. Example: <code>09111111111</code></p>
        </div>
        </form>

                    <h2 id="auth-POSTapi-v1-auth-otp-login">Send OTP code to user</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-auth-otp-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/auth/otp/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"username\": \"09111111111\",
    \"code\": \"1214\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/auth/otp/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "username": "09111111111",
    "code": "1214"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-auth-otp-login">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 57
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 500,
    &quot;error&quot;: &quot;&quot;,
    &quot;message&quot;: &quot;کد تایید منقضی شده یا نامعتبر است&quot;,
    &quot;data&quot;: [
        &quot;کد تایید منقضی شده یا نامعتبر است&quot;,
        &quot;/home/sina/workfiles/php/laravel/Test/apm-base-laravel/app/Models/User/OtpCode.php&quot;,
        39,
        0
    ],
    &quot;patch&quot;: [],
    &quot;date&quot;: &quot;2022-11-26T09:54:27.434678Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-auth-otp-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-auth-otp-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-auth-otp-login" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-auth-otp-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-auth-otp-login"></code></pre>
</span>
<form id="form-POSTapi-v1-auth-otp-login" data-method="POST"
      data-path="api/v1/auth/otp/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-auth-otp-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-auth-otp-login"
                    onclick="tryItOut('POSTapi-v1-auth-otp-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-auth-otp-login"
                    onclick="cancelTryOut('POSTapi-v1-auth-otp-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-auth-otp-login" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/auth/otp/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="POSTapi-v1-auth-otp-login"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="POSTapi-v1-auth-otp-login"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>username</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="username"                data-endpoint="POSTapi-v1-auth-otp-login"
               value="09111111111"
               data-component="body" hidden>
    <br>
<p>usally user phone is his/her username. Example: <code>09111111111</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="code"                data-endpoint="POSTapi-v1-auth-otp-login"
               value="1214"
               data-component="body" hidden>
    <br>
<p>code send by sms/email to user. Example: <code>1214</code></p>
        </div>
        </form>

                    <h2 id="auth-POSTapi-v1-auth-user">POST api/v1/auth/user</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-auth-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/auth/user" \
    --header "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/auth/user"
);

const headers = {
    "Authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-auth-user">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 55
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 200,
    &quot;error&quot;: &quot;&quot;,
    &quot;message&quot;: &quot;&quot;,
    &quot;data&quot;: {
        &quot;user&quot;: {
            &quot;id&quot;: &quot;56194f1c-1398-44f0-87cd-c34d2356eeaf&quot;,
            &quot;username&quot;: &quot;09111111111&quot;,
            &quot;birth_date&quot;: null,
            &quot;description&quot;: null,
            &quot;last_name&quot;: &quot;سامانه&quot;,
            &quot;first_name&quot;: &quot;مدیر&quot;,
            &quot;national_code&quot;: null,
            &quot;country_division_id&quot;: null,
            &quot;avatar&quot;: &quot;upload/baseUpload/default.jpg&quot;,
            &quot;person_type&quot;: &quot;real&quot;,
            &quot;status&quot;: &quot;active&quot;,
            &quot;created_at&quot;: &quot;2022-11-26T08:58:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-11-26T08:58:24.000000Z&quot;,
            &quot;deleted_at&quot;: null,
            &quot;sort&quot;: 9999,
            &quot;created_by&quot;: &quot;56194f1c-1398-44f0-87cd-c34d2356eeaf&quot;,
            &quot;roles&quot;: [
                {
                    &quot;name&quot;: &quot;مدیر سایت&quot;,
                    &quot;id&quot;: &quot;791d1b02-3610-4177-9051-eb7ae6b72def&quot;,
                    &quot;actions&quot;: [
                        {
                            &quot;alias&quot;: &quot;user/index&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;user/insert&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;user/update&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;user/delete&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;user/root&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;role/index&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;role/insert&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;role/update&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;role/delete&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;role/assign&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;role/root&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;upload/index&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;upload/insert&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;upload/update&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;upload/delete&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;upload/root&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;exception_log/index&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;exception_log/insert&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;exception_log/update&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;exception_log/delete&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;exception_log/root&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;request_log/index&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;request_log/insert&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;request_log/update&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;request_log/delete&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;request_log/root&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;settings/index&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;settings/insert&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;settings/update&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;settings/delete&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;settings/root&quot;
                        }
                    ]
                }
            ]
        }
    },
    &quot;patch&quot;: [],
    &quot;date&quot;: &quot;2022-11-26T09:54:27.483050Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-auth-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-auth-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-auth-user" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-auth-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-auth-user"></code></pre>
</span>
<form id="form-POSTapi-v1-auth-user" data-method="POST"
      data-path="api/v1/auth/user"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-auth-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-auth-user"
                    onclick="tryItOut('POSTapi-v1-auth-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-auth-user"
                    onclick="cancelTryOut('POSTapi-v1-auth-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-auth-user" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/auth/user</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-auth-user"
               value="Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="POSTapi-v1-auth-user"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="POSTapi-v1-auth-user"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="auth-POSTapi-v1-auth-logout">POST api/v1/auth/logout</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-auth-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/auth/logout" \
    --header "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/auth/logout"
);

const headers = {
    "Authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-auth-logout">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 200,
    &quot;error&quot;: &quot;&quot;,
    &quot;message&quot;: &quot;&quot;,
    &quot;data&quot;: [],
    &quot;patch&quot;: [],
    &quot;date&quot;: &quot;2022-11-26T09:54:27.510613Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-auth-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-auth-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-auth-logout" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-auth-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-auth-logout"></code></pre>
</span>
<form id="form-POSTapi-v1-auth-logout" data-method="POST"
      data-path="api/v1/auth/logout"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-auth-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-auth-logout"
                    onclick="tryItOut('POSTapi-v1-auth-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-auth-logout"
                    onclick="cancelTryOut('POSTapi-v1-auth-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-auth-logout" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/auth/logout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-auth-logout"
               value="Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="POSTapi-v1-auth-logout"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="POSTapi-v1-auth-logout"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="auth-POSTapi-v1-auth-refresh">POST api/v1/auth/refresh</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-auth-refresh">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/auth/refresh" \
    --header "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/auth/refresh"
);

const headers = {
    "Authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-auth-refresh">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 200,
    &quot;error&quot;: &quot;&quot;,
    &quot;message&quot;: &quot;&quot;,
    &quot;data&quot;: {
        &quot;Authorization&quot;: &quot;eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9fnr0odDr4k.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gR0sxHtBd5rwdvuA6.WoxXJFMdxU5vsrldPwiYUQwU5202211d5xOgY42JifdMRd2601FWyZ0jSAttyvmOTrbjgA7KXe4iiMNuf2rCT11275YviXu5WUJr7RBKvj77SwDefv6sosrPSs4dO9OCu0mfsJeYbr8FeA5z&quot;,
        &quot;user&quot;: {
            &quot;id&quot;: &quot;56194f1c-1398-44f0-87cd-c34d2356eeaf&quot;,
            &quot;username&quot;: &quot;09111111111&quot;,
            &quot;birth_date&quot;: null,
            &quot;description&quot;: null,
            &quot;last_name&quot;: &quot;سامانه&quot;,
            &quot;first_name&quot;: &quot;مدیر&quot;,
            &quot;national_code&quot;: null,
            &quot;country_division_id&quot;: null,
            &quot;avatar&quot;: &quot;upload/baseUpload/default.jpg&quot;,
            &quot;person_type&quot;: &quot;real&quot;,
            &quot;status&quot;: &quot;active&quot;,
            &quot;created_at&quot;: &quot;2022-11-26T08:58:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-11-26T08:58:24.000000Z&quot;,
            &quot;deleted_at&quot;: null,
            &quot;sort&quot;: 9999,
            &quot;created_by&quot;: &quot;56194f1c-1398-44f0-87cd-c34d2356eeaf&quot;,
            &quot;roles&quot;: [
                {
                    &quot;name&quot;: &quot;مدیر سایت&quot;,
                    &quot;id&quot;: &quot;791d1b02-3610-4177-9051-eb7ae6b72def&quot;,
                    &quot;actions&quot;: [
                        {
                            &quot;alias&quot;: &quot;user/index&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;user/insert&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;user/update&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;user/delete&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;user/root&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;role/index&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;role/insert&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;role/update&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;role/delete&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;role/assign&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;role/root&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;upload/index&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;upload/insert&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;upload/update&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;upload/delete&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;upload/root&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;exception_log/index&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;exception_log/insert&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;exception_log/update&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;exception_log/delete&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;exception_log/root&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;request_log/index&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;request_log/insert&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;request_log/update&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;request_log/delete&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;request_log/root&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;settings/index&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;settings/insert&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;settings/update&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;settings/delete&quot;
                        },
                        {
                            &quot;alias&quot;: &quot;settings/root&quot;
                        }
                    ]
                }
            ]
        }
    },
    &quot;patch&quot;: [],
    &quot;date&quot;: &quot;2022-11-26T09:54:27.537002Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-auth-refresh" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-auth-refresh"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-auth-refresh" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-auth-refresh" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-auth-refresh"></code></pre>
</span>
<form id="form-POSTapi-v1-auth-refresh" data-method="POST"
      data-path="api/v1/auth/refresh"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-auth-refresh', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-auth-refresh"
                    onclick="tryItOut('POSTapi-v1-auth-refresh');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-auth-refresh"
                    onclick="cancelTryOut('POSTapi-v1-auth-refresh');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-auth-refresh" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/auth/refresh</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-auth-refresh"
               value="Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="POSTapi-v1-auth-refresh"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="POSTapi-v1-auth-refresh"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-POSTapi-v1-country_division">POST api/v1/country_division</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-country_division">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/country_division" \
    --header "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/country_division"
);

const headers = {
    "Authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-country_division">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 56
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 200,
    &quot;error&quot;: &quot;&quot;,
    &quot;message&quot;: &quot;&quot;,
    &quot;data&quot;: {
        &quot;model&quot;: {
            &quot;current_page&quot;: 1,
            &quot;data&quot;: [],
            &quot;first_page_url&quot;: &quot;http://localhost:8000/api/v1/country_division?page=1&quot;,
            &quot;from&quot;: null,
            &quot;last_page&quot;: 1,
            &quot;last_page_url&quot;: &quot;http://localhost:8000/api/v1/country_division?page=1&quot;,
            &quot;links&quot;: [
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost:8000/api/v1/country_division?page=1&quot;,
                    &quot;label&quot;: &quot;1&quot;,
                    &quot;active&quot;: true
                },
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                    &quot;active&quot;: false
                }
            ],
            &quot;next_page_url&quot;: null,
            &quot;path&quot;: &quot;http://localhost:8000/api/v1/country_division&quot;,
            &quot;per_page&quot;: 20,
            &quot;prev_page_url&quot;: null,
            &quot;to&quot;: null,
            &quot;total&quot;: 0
        }
    },
    &quot;patch&quot;: [],
    &quot;date&quot;: &quot;2022-11-26T09:54:27.453435Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-country_division" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-country_division"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-country_division" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-country_division" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-country_division"></code></pre>
</span>
<form id="form-POSTapi-v1-country_division" data-method="POST"
      data-path="api/v1/country_division"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-country_division', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-country_division"
                    onclick="tryItOut('POSTapi-v1-country_division');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-country_division"
                    onclick="cancelTryOut('POSTapi-v1-country_division');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-country_division" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/country_division</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-country_division"
               value="Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="POSTapi-v1-country_division"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="POSTapi-v1-country_division"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-request-log">POST api/v1/request-log</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-request-log">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/request-log" \
    --header "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/request-log"
);

const headers = {
    "Authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-request-log">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 57
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 200,
    &quot;error&quot;: &quot;&quot;,
    &quot;message&quot;: &quot;&quot;,
    &quot;data&quot;: {
        &quot;model&quot;: {
            &quot;current_page&quot;: 1,
            &quot;data&quot;: [
                {
                    &quot;id&quot;: &quot;9c638d3b-e346-48c7-b2aa-b6fa337080cc&quot;,
                    &quot;ip&quot;: &quot;127.0.0.1&quot;,
                    &quot;ulr&quot;: &quot;/api/v1/request-log&quot;,
                    &quot;status&quot;: &quot;200&quot;,
                    &quot;method&quot;: &quot;POST&quot;,
                    &quot;user_agent&quot;: &quot;Symfony&quot;,
                    &quot;end_status&quot;: null,
                    &quot;user_agent_client&quot;: &quot;Other&quot;,
                    &quot;created_at&quot;: &quot;2022-11-26T09:54:27.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;token&quot;: null,
                    &quot;request&quot;: null,
                    &quot;response&quot;: null,
                    &quot;message&quot;: null,
                    &quot;user_username&quot;: &quot;09111111111&quot;,
                    &quot;user_first_name&quot;: &quot;مدیر&quot;,
                    &quot;user_last_name&quot;: &quot;سامانه&quot;
                },
                {
                    &quot;id&quot;: &quot;b8be5458-6fa6-42f7-bee3-7db91cf38ac9&quot;,
                    &quot;ip&quot;: &quot;127.0.0.1&quot;,
                    &quot;ulr&quot;: &quot;/home&quot;,
                    &quot;status&quot;: &quot;200&quot;,
                    &quot;method&quot;: &quot;GET&quot;,
                    &quot;user_agent&quot;: &quot;Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:107.0) Gecko/20100101 Firefox/107.0&quot;,
                    &quot;end_status&quot;: &quot;500&quot;,
                    &quot;user_agent_client&quot;: &quot;Other&quot;,
                    &quot;created_at&quot;: &quot;2022-11-26T09:34:20.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;token&quot;: null,
                    &quot;request&quot;: &quot;&quot;,
                    &quot;response&quot;: &quot;{\&quot;status\&quot;:500,\&quot;error\&quot;:\&quot;\&quot;,\&quot;message\&quot;:\&quot;\&quot;,\&quot;data\&quot;:[\&quot;\&quot;,\&quot;\\/home\\/sina\\/workfiles\\/php\\/laravel\\/Test\\/apm-base-laravel\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Routing\\/AbstractRouteCollection.php\&quot;,44,0],\&quot;patch\&quot;:[],\&quot;date\&quot;:\&quot;2022-11-26T09:34:20.998807Z\&quot;}&quot;,
                    &quot;message&quot;: &quot;&quot;,
                    &quot;user_username&quot;: null,
                    &quot;user_first_name&quot;: null,
                    &quot;user_last_name&quot;: null
                },
                {
                    &quot;id&quot;: &quot;2f51b384-c195-482e-90b7-3959a585f485&quot;,
                    &quot;ip&quot;: &quot;127.0.0.1&quot;,
                    &quot;ulr&quot;: &quot;/api/v1/user/show&quot;,
                    &quot;status&quot;: &quot;200&quot;,
                    &quot;method&quot;: &quot;POST&quot;,
                    &quot;user_agent&quot;: &quot;Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:107.0) Gecko/20100101 Firefox/107.0&quot;,
                    &quot;end_status&quot;: &quot;412&quot;,
                    &quot;user_agent_client&quot;: &quot;Other&quot;,
                    &quot;created_at&quot;: &quot;2022-11-26T09:27:02.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;token&quot;: &quot;eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi&quot;,
                    &quot;request&quot;: &quot;{}&quot;,
                    &quot;response&quot;: &quot;{\&quot;status\&quot;:412,\&quot;error\&quot;:\&quot;\&quot;,\&quot;message\&quot;:\&quot;\\u0627\\u0637\\u0644\\u0627\\u0639\\u0627\\u062a \\u0627\\u0631\\u0633\\u0627\\u0644\\u06cc \\u0646\\u0627\\u0642\\u0635 \\u06cc\\u0627 \\u0627\\u0634\\u062a\\u0628\\u0627\\u0647 \\u0627\\u0633\\u062a\&quot;,\&quot;data\&quot;:[],\&quot;patch\&quot;:[],\&quot;date\&quot;:\&quot;2022-11-26T09:27:02.515977Z\&quot;}&quot;,
                    &quot;message&quot;: &quot;اطلاعات ارسالی ناقص یا اشتباه است&quot;,
                    &quot;user_username&quot;: &quot;09111111111&quot;,
                    &quot;user_first_name&quot;: &quot;مدیر&quot;,
                    &quot;user_last_name&quot;: &quot;سامانه&quot;
                },
                {
                    &quot;id&quot;: &quot;247de1de-46cb-489f-839c-986a3eec13a5&quot;,
                    &quot;ip&quot;: &quot;127.0.0.1&quot;,
                    &quot;ulr&quot;: &quot;/api/v1/user&quot;,
                    &quot;status&quot;: &quot;200&quot;,
                    &quot;method&quot;: &quot;POST&quot;,
                    &quot;user_agent&quot;: &quot;Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:107.0) Gecko/20100101 Firefox/107.0&quot;,
                    &quot;end_status&quot;: &quot;200&quot;,
                    &quot;user_agent_client&quot;: &quot;Other&quot;,
                    &quot;created_at&quot;: &quot;2022-11-26T09:26:45.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;token&quot;: &quot;eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi&quot;,
                    &quot;request&quot;: null,
                    &quot;response&quot;: null,
                    &quot;message&quot;: &quot;&quot;,
                    &quot;user_username&quot;: &quot;09111111111&quot;,
                    &quot;user_first_name&quot;: &quot;مدیر&quot;,
                    &quot;user_last_name&quot;: &quot;سامانه&quot;
                },
                {
                    &quot;id&quot;: &quot;aca59b95-1363-4fc3-9fe4-38e823fcafdc&quot;,
                    &quot;ip&quot;: &quot;127.0.0.1&quot;,
                    &quot;ulr&quot;: &quot;/api/v1/user&quot;,
                    &quot;status&quot;: &quot;200&quot;,
                    &quot;method&quot;: &quot;POST&quot;,
                    &quot;user_agent&quot;: &quot;Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:107.0) Gecko/20100101 Firefox/107.0&quot;,
                    &quot;end_status&quot;: &quot;401&quot;,
                    &quot;user_agent_client&quot;: &quot;Other&quot;,
                    &quot;created_at&quot;: &quot;2022-11-26T09:18:23.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;token&quot;: &quot;{YOUR_TOKEN}&quot;,
                    &quot;request&quot;: &quot;{}&quot;,
                    &quot;response&quot;: &quot;{\&quot;status\&quot;:401,\&quot;error\&quot;:\&quot;\&quot;,\&quot;message\&quot;:\&quot;\\u0646\\u06cc\\u0627\\u0632 \\u0628\\u0647 \\u0648\\u0631\\u0648\\u062f \\u0645\\u062c\\u062f\\u062f\&quot;,\&quot;data\&quot;:[],\&quot;patch\&quot;:[],\&quot;date\&quot;:\&quot;2022-11-26T09:18:23.832096Z\&quot;}&quot;,
                    &quot;message&quot;: &quot;نیاز به ورود مجدد&quot;,
                    &quot;user_username&quot;: null,
                    &quot;user_first_name&quot;: null,
                    &quot;user_last_name&quot;: null
                },
                {
                    &quot;id&quot;: &quot;b91dd750-3b77-44ce-84c8-a716ef356ff5&quot;,
                    &quot;ip&quot;: &quot;127.0.0.1&quot;,
                    &quot;ulr&quot;: &quot;/api/v1/auth/user&quot;,
                    &quot;status&quot;: &quot;200&quot;,
                    &quot;method&quot;: &quot;POST&quot;,
                    &quot;user_agent&quot;: &quot;PostmanRuntime/7.28.4&quot;,
                    &quot;end_status&quot;: &quot;200&quot;,
                    &quot;user_agent_client&quot;: &quot;Other&quot;,
                    &quot;created_at&quot;: &quot;2022-11-26T09:16:57.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;token&quot;: &quot;eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi&quot;,
                    &quot;request&quot;: null,
                    &quot;response&quot;: null,
                    &quot;message&quot;: &quot;&quot;,
                    &quot;user_username&quot;: &quot;09111111111&quot;,
                    &quot;user_first_name&quot;: &quot;مدیر&quot;,
                    &quot;user_last_name&quot;: &quot;سامانه&quot;
                },
                {
                    &quot;id&quot;: &quot;e3dc5c6a-3916-4104-9e7e-0cc93b085fac&quot;,
                    &quot;ip&quot;: &quot;127.0.0.1&quot;,
                    &quot;ulr&quot;: &quot;/api/v1/auth/user&quot;,
                    &quot;status&quot;: &quot;200&quot;,
                    &quot;method&quot;: &quot;POST&quot;,
                    &quot;user_agent&quot;: &quot;PostmanRuntime/7.28.4&quot;,
                    &quot;end_status&quot;: &quot;401&quot;,
                    &quot;user_agent_client&quot;: &quot;Other&quot;,
                    &quot;created_at&quot;: &quot;2022-11-26T09:15:14.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;token&quot;: &quot;eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi&quot;,
                    &quot;request&quot;: &quot;&quot;,
                    &quot;response&quot;: &quot;{\&quot;status\&quot;:401,\&quot;error\&quot;:\&quot;\&quot;,\&quot;message\&quot;:\&quot;\\u0646\\u06cc\\u0627\\u0632 \\u0628\\u0647 \\u0648\\u0631\\u0648\\u062f \\u0645\\u062c\\u062f\\u062f\&quot;,\&quot;data\&quot;:[],\&quot;patch\&quot;:[],\&quot;date\&quot;:\&quot;2022-11-26T09:15:14.852482Z\&quot;}&quot;,
                    &quot;message&quot;: &quot;نیاز به ورود مجدد&quot;,
                    &quot;user_username&quot;: null,
                    &quot;user_first_name&quot;: null,
                    &quot;user_last_name&quot;: null
                },
                {
                    &quot;id&quot;: &quot;defee43d-daf3-437c-b529-984127ba2e2e&quot;,
                    &quot;ip&quot;: &quot;127.0.0.1&quot;,
                    &quot;ulr&quot;: &quot;/api/v1/auth/user&quot;,
                    &quot;status&quot;: &quot;200&quot;,
                    &quot;method&quot;: &quot;POST&quot;,
                    &quot;user_agent&quot;: &quot;PostmanRuntime/7.28.4&quot;,
                    &quot;end_status&quot;: &quot;401&quot;,
                    &quot;user_agent_client&quot;: &quot;Other&quot;,
                    &quot;created_at&quot;: &quot;2022-11-26T09:13:39.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;token&quot;: &quot;eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi&quot;,
                    &quot;request&quot;: &quot;&quot;,
                    &quot;response&quot;: &quot;{\&quot;status\&quot;:401,\&quot;error\&quot;:\&quot;\&quot;,\&quot;message\&quot;:\&quot;\\u0646\\u06cc\\u0627\\u0632 \\u0628\\u0647 \\u0648\\u0631\\u0648\\u062f \\u0645\\u062c\\u062f\\u062f\&quot;,\&quot;data\&quot;:[],\&quot;patch\&quot;:[],\&quot;date\&quot;:\&quot;2022-11-26T09:13:39.652317Z\&quot;}&quot;,
                    &quot;message&quot;: &quot;نیاز به ورود مجدد&quot;,
                    &quot;user_username&quot;: null,
                    &quot;user_first_name&quot;: null,
                    &quot;user_last_name&quot;: null
                },
                {
                    &quot;id&quot;: &quot;4f59ca35-ddc9-4bed-b510-783fe4eb1a9a&quot;,
                    &quot;ip&quot;: &quot;127.0.0.1&quot;,
                    &quot;ulr&quot;: &quot;/api/v1/auth/user&quot;,
                    &quot;status&quot;: &quot;200&quot;,
                    &quot;method&quot;: &quot;POST&quot;,
                    &quot;user_agent&quot;: &quot;PostmanRuntime/7.28.4&quot;,
                    &quot;end_status&quot;: &quot;401&quot;,
                    &quot;user_agent_client&quot;: &quot;Other&quot;,
                    &quot;created_at&quot;: &quot;2022-11-26T09:13:38.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;token&quot;: &quot;eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi&quot;,
                    &quot;request&quot;: &quot;&quot;,
                    &quot;response&quot;: &quot;{\&quot;status\&quot;:401,\&quot;error\&quot;:\&quot;\&quot;,\&quot;message\&quot;:\&quot;\\u0646\\u06cc\\u0627\\u0632 \\u0628\\u0647 \\u0648\\u0631\\u0648\\u062f \\u0645\\u062c\\u062f\\u062f\&quot;,\&quot;data\&quot;:[],\&quot;patch\&quot;:[],\&quot;date\&quot;:\&quot;2022-11-26T09:13:38.078965Z\&quot;}&quot;,
                    &quot;message&quot;: &quot;نیاز به ورود مجدد&quot;,
                    &quot;user_username&quot;: null,
                    &quot;user_first_name&quot;: null,
                    &quot;user_last_name&quot;: null
                },
                {
                    &quot;id&quot;: &quot;df6d47a0-deca-4fcc-bc71-4e2508a28ca6&quot;,
                    &quot;ip&quot;: &quot;127.0.0.1&quot;,
                    &quot;ulr&quot;: &quot;/api/v1/auth/otp/send&quot;,
                    &quot;status&quot;: &quot;200&quot;,
                    &quot;method&quot;: &quot;POST&quot;,
                    &quot;user_agent&quot;: &quot;Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:107.0) Gecko/20100101 Firefox/107.0&quot;,
                    &quot;end_status&quot;: &quot;200&quot;,
                    &quot;user_agent_client&quot;: &quot;Other&quot;,
                    &quot;created_at&quot;: &quot;2022-11-26T09:04:13.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;token&quot;: null,
                    &quot;request&quot;: null,
                    &quot;response&quot;: null,
                    &quot;message&quot;: &quot;&quot;,
                    &quot;user_username&quot;: null,
                    &quot;user_first_name&quot;: null,
                    &quot;user_last_name&quot;: null
                },
                {
                    &quot;id&quot;: &quot;3fe38801-13d7-4877-b173-a01484196e9a&quot;,
                    &quot;ip&quot;: &quot;127.0.0.1&quot;,
                    &quot;ulr&quot;: &quot;/api/v1/auth/user&quot;,
                    &quot;status&quot;: &quot;200&quot;,
                    &quot;method&quot;: &quot;POST&quot;,
                    &quot;user_agent&quot;: &quot;PostmanRuntime/7.28.4&quot;,
                    &quot;end_status&quot;: &quot;401&quot;,
                    &quot;user_agent_client&quot;: &quot;Other&quot;,
                    &quot;created_at&quot;: &quot;2022-11-26T09:01:34.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;token&quot;: &quot;eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi&quot;,
                    &quot;request&quot;: &quot;&quot;,
                    &quot;response&quot;: &quot;{\&quot;status\&quot;:401,\&quot;error\&quot;:\&quot;\&quot;,\&quot;message\&quot;:\&quot;\\u0646\\u06cc\\u0627\\u0632 \\u0628\\u0647 \\u0648\\u0631\\u0648\\u062f \\u0645\\u062c\\u062f\\u062f\&quot;,\&quot;data\&quot;:[],\&quot;patch\&quot;:[],\&quot;date\&quot;:\&quot;2022-11-26T09:01:34.712501Z\&quot;}&quot;,
                    &quot;message&quot;: &quot;نیاز به ورود مجدد&quot;,
                    &quot;user_username&quot;: null,
                    &quot;user_first_name&quot;: null,
                    &quot;user_last_name&quot;: null
                }
            ],
            &quot;first_page_url&quot;: &quot;http://localhost:8000/api/v1/request-log?page=1&quot;,
            &quot;from&quot;: 1,
            &quot;last_page&quot;: 1,
            &quot;last_page_url&quot;: &quot;http://localhost:8000/api/v1/request-log?page=1&quot;,
            &quot;links&quot;: [
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost:8000/api/v1/request-log?page=1&quot;,
                    &quot;label&quot;: &quot;1&quot;,
                    &quot;active&quot;: true
                },
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                    &quot;active&quot;: false
                }
            ],
            &quot;next_page_url&quot;: null,
            &quot;path&quot;: &quot;http://localhost:8000/api/v1/request-log&quot;,
            &quot;per_page&quot;: 20,
            &quot;prev_page_url&quot;: null,
            &quot;to&quot;: 11,
            &quot;total&quot;: 11
        }
    },
    &quot;patch&quot;: [],
    &quot;date&quot;: &quot;2022-11-26T09:54:27.567360Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-request-log" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-request-log"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-request-log" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-request-log" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-request-log"></code></pre>
</span>
<form id="form-POSTapi-v1-request-log" data-method="POST"
      data-path="api/v1/request-log"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-request-log', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-request-log"
                    onclick="tryItOut('POSTapi-v1-request-log');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-request-log"
                    onclick="cancelTryOut('POSTapi-v1-request-log');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-request-log" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/request-log</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-request-log"
               value="Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="POSTapi-v1-request-log"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="POSTapi-v1-request-log"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-exception-log">POST api/v1/exception-log</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-exception-log">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/exception-log" \
    --header "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/exception-log"
);

const headers = {
    "Authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-exception-log">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 56
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 200,
    &quot;error&quot;: &quot;&quot;,
    &quot;message&quot;: &quot;&quot;,
    &quot;data&quot;: {
        &quot;model&quot;: {
            &quot;current_page&quot;: 1,
            &quot;data&quot;: [
                {
                    &quot;id&quot;: &quot;49fe8373-9ff6-4279-9850-1ac14b8f6d7f&quot;,
                    &quot;line&quot;: &quot;44&quot;,
                    &quot;code&quot;: &quot;0&quot;,
                    &quot;file&quot;: &quot;/home/sina/workfiles/php/laravel/Test/apm-base-laravel/vendor/laravel/framework/src/Illuminate/Routing/AbstractRouteCollection.php&quot;,
                    &quot;message&quot;: &quot;\&quot;\&quot;&quot;,
                    &quot;status&quot;: &quot;404&quot;,
                    &quot;user_agent_client&quot;: null,
                    &quot;created_at&quot;: &quot;2022-11-26T09:34:20.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;user_username&quot;: null,
                    &quot;user_first_name&quot;: null,
                    &quot;user_last_name&quot;: null
                }
            ],
            &quot;first_page_url&quot;: &quot;http://localhost:8000/api/v1/exception-log?page=1&quot;,
            &quot;from&quot;: 1,
            &quot;last_page&quot;: 1,
            &quot;last_page_url&quot;: &quot;http://localhost:8000/api/v1/exception-log?page=1&quot;,
            &quot;links&quot;: [
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost:8000/api/v1/exception-log?page=1&quot;,
                    &quot;label&quot;: &quot;1&quot;,
                    &quot;active&quot;: true
                },
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                    &quot;active&quot;: false
                }
            ],
            &quot;next_page_url&quot;: null,
            &quot;path&quot;: &quot;http://localhost:8000/api/v1/exception-log&quot;,
            &quot;per_page&quot;: 20,
            &quot;prev_page_url&quot;: null,
            &quot;to&quot;: 1,
            &quot;total&quot;: 1
        }
    },
    &quot;patch&quot;: [],
    &quot;date&quot;: &quot;2022-11-26T09:54:27.585837Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-exception-log" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-exception-log"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-exception-log" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-exception-log" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-exception-log"></code></pre>
</span>
<form id="form-POSTapi-v1-exception-log" data-method="POST"
      data-path="api/v1/exception-log"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-exception-log', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-exception-log"
                    onclick="tryItOut('POSTapi-v1-exception-log');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-exception-log"
                    onclick="cancelTryOut('POSTapi-v1-exception-log');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-exception-log" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/exception-log</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-exception-log"
               value="Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="POSTapi-v1-exception-log"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="POSTapi-v1-exception-log"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-user">POST api/v1/user</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/user" \
    --header "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/user"
);

const headers = {
    "Authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-user">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 55
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 200,
    &quot;error&quot;: &quot;&quot;,
    &quot;message&quot;: &quot;&quot;,
    &quot;data&quot;: {
        &quot;model&quot;: {
            &quot;current_page&quot;: 1,
            &quot;data&quot;: [
                {
                    &quot;id&quot;: &quot;56194f1c-1398-44f0-87cd-c34d2356eeaf&quot;,
                    &quot;username&quot;: &quot;09111111111&quot;,
                    &quot;birth_date&quot;: null,
                    &quot;description&quot;: null,
                    &quot;last_name&quot;: &quot;سامانه&quot;,
                    &quot;first_name&quot;: &quot;مدیر&quot;,
                    &quot;national_code&quot;: null,
                    &quot;country_division_id&quot;: null,
                    &quot;avatar&quot;: &quot;upload/baseUpload/default.jpg&quot;,
                    &quot;person_type&quot;: &quot;real&quot;,
                    &quot;status&quot;: &quot;active&quot;,
                    &quot;created_at&quot;: &quot;2022-11-26T08:58:24.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-11-26T08:58:24.000000Z&quot;,
                    &quot;deleted_at&quot;: null,
                    &quot;sort&quot;: 9999,
                    &quot;created_by&quot;: &quot;56194f1c-1398-44f0-87cd-c34d2356eeaf&quot;
                }
            ],
            &quot;first_page_url&quot;: &quot;http://localhost:8000/api/v1/user?page=1&quot;,
            &quot;from&quot;: 1,
            &quot;last_page&quot;: 1,
            &quot;last_page_url&quot;: &quot;http://localhost:8000/api/v1/user?page=1&quot;,
            &quot;links&quot;: [
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost:8000/api/v1/user?page=1&quot;,
                    &quot;label&quot;: &quot;1&quot;,
                    &quot;active&quot;: true
                },
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                    &quot;active&quot;: false
                }
            ],
            &quot;next_page_url&quot;: null,
            &quot;path&quot;: &quot;http://localhost:8000/api/v1/user&quot;,
            &quot;per_page&quot;: 20,
            &quot;prev_page_url&quot;: null,
            &quot;to&quot;: 1,
            &quot;total&quot;: 1
        }
    },
    &quot;patch&quot;: [],
    &quot;date&quot;: &quot;2022-11-26T09:54:27.602179Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-user" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-user"></code></pre>
</span>
<form id="form-POSTapi-v1-user" data-method="POST"
      data-path="api/v1/user"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-user"
                    onclick="tryItOut('POSTapi-v1-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-user"
                    onclick="cancelTryOut('POSTapi-v1-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-user" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/user</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-user"
               value="Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="POSTapi-v1-user"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="POSTapi-v1-user"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-user-show">POST api/v1/user/show</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-user-show">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/user/show" \
    --header "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/user/show"
);

const headers = {
    "Authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-user-show">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 54
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 412,
    &quot;error&quot;: &quot;&quot;,
    &quot;message&quot;: &quot;اطلاعات ارسالی ناقص یا اشتباه است&quot;,
    &quot;data&quot;: [],
    &quot;patch&quot;: [],
    &quot;date&quot;: &quot;2022-11-26T09:54:27.617174Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-user-show" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-user-show"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-user-show" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-user-show" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-user-show"></code></pre>
</span>
<form id="form-POSTapi-v1-user-show" data-method="POST"
      data-path="api/v1/user/show"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-user-show', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-user-show"
                    onclick="tryItOut('POSTapi-v1-user-show');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-user-show"
                    onclick="cancelTryOut('POSTapi-v1-user-show');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-user-show" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/user/show</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-user-show"
               value="Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="POSTapi-v1-user-show"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="POSTapi-v1-user-show"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-user-insert">POST api/v1/user/insert</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-user-insert">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/user/insert" \
    --header "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/user/insert"
);

const headers = {
    "Authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-user-insert">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 53
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 412,
    &quot;error&quot;: &quot;&quot;,
    &quot;message&quot;: &quot;اطلاعات ارسالی ناقص یا اشتباه است&quot;,
    &quot;data&quot;: [],
    &quot;patch&quot;: [],
    &quot;date&quot;: &quot;2022-11-26T09:54:27.632490Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-user-insert" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-user-insert"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-user-insert" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-user-insert" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-user-insert"></code></pre>
</span>
<form id="form-POSTapi-v1-user-insert" data-method="POST"
      data-path="api/v1/user/insert"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-user-insert', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-user-insert"
                    onclick="tryItOut('POSTapi-v1-user-insert');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-user-insert"
                    onclick="cancelTryOut('POSTapi-v1-user-insert');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-user-insert" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/user/insert</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-user-insert"
               value="Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="POSTapi-v1-user-insert"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="POSTapi-v1-user-insert"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-user-update">POST api/v1/user/update</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-user-update">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/user/update" \
    --header "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/user/update"
);

const headers = {
    "Authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-user-update">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 52
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 412,
    &quot;error&quot;: &quot;&quot;,
    &quot;message&quot;: &quot;اطلاعات ارسالی ناقص یا اشتباه است&quot;,
    &quot;data&quot;: [],
    &quot;patch&quot;: [],
    &quot;date&quot;: &quot;2022-11-26T09:54:27.643566Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-user-update" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-user-update"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-user-update" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-user-update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-user-update"></code></pre>
</span>
<form id="form-POSTapi-v1-user-update" data-method="POST"
      data-path="api/v1/user/update"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-user-update', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-user-update"
                    onclick="tryItOut('POSTapi-v1-user-update');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-user-update"
                    onclick="cancelTryOut('POSTapi-v1-user-update');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-user-update" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/user/update</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-user-update"
               value="Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="POSTapi-v1-user-update"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="POSTapi-v1-user-update"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-user-delete">POST api/v1/user/delete</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-user-delete">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/user/delete" \
    --header "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/user/delete"
);

const headers = {
    "Authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-user-delete">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 51
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 412,
    &quot;error&quot;: &quot;&quot;,
    &quot;message&quot;: &quot;اطلاعات ارسالی ناقص یا اشتباه است&quot;,
    &quot;data&quot;: [],
    &quot;patch&quot;: [],
    &quot;date&quot;: &quot;2022-11-26T09:54:27.653168Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-user-delete" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-user-delete"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-user-delete" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-user-delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-user-delete"></code></pre>
</span>
<form id="form-POSTapi-v1-user-delete" data-method="POST"
      data-path="api/v1/user/delete"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-user-delete', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-user-delete"
                    onclick="tryItOut('POSTapi-v1-user-delete');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-user-delete"
                    onclick="cancelTryOut('POSTapi-v1-user-delete');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-user-delete" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/user/delete</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-user-delete"
               value="Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="POSTapi-v1-user-delete"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="POSTapi-v1-user-delete"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-user-profile">POST api/v1/user/profile</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-user-profile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/user/profile" \
    --header "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/user/profile"
);

const headers = {
    "Authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-user-profile">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 50
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 200,
    &quot;error&quot;: &quot;&quot;,
    &quot;message&quot;: &quot;&quot;,
    &quot;data&quot;: {
        &quot;user&quot;: {
            &quot;id&quot;: &quot;56194f1c-1398-44f0-87cd-c34d2356eeaf&quot;,
            &quot;username&quot;: &quot;09111111111&quot;,
            &quot;birth_date&quot;: null,
            &quot;description&quot;: null,
            &quot;last_name&quot;: &quot;سامانه&quot;,
            &quot;first_name&quot;: &quot;مدیر&quot;,
            &quot;national_code&quot;: null,
            &quot;country_division_id&quot;: null,
            &quot;avatar&quot;: &quot;upload/baseUpload/default.jpg&quot;,
            &quot;person_type&quot;: &quot;real&quot;,
            &quot;status&quot;: &quot;active&quot;,
            &quot;created_at&quot;: &quot;2022-11-26T08:58:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-11-26T08:58:24.000000Z&quot;,
            &quot;deleted_at&quot;: null,
            &quot;sort&quot;: 9999,
            &quot;created_by&quot;: &quot;56194f1c-1398-44f0-87cd-c34d2356eeaf&quot;
        }
    },
    &quot;patch&quot;: [],
    &quot;date&quot;: &quot;2022-11-26T09:54:27.664317Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-user-profile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-user-profile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-user-profile" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-user-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-user-profile"></code></pre>
</span>
<form id="form-POSTapi-v1-user-profile" data-method="POST"
      data-path="api/v1/user/profile"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-user-profile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-user-profile"
                    onclick="tryItOut('POSTapi-v1-user-profile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-user-profile"
                    onclick="cancelTryOut('POSTapi-v1-user-profile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-user-profile" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/user/profile</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-user-profile"
               value="Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="POSTapi-v1-user-profile"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="POSTapi-v1-user-profile"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-user-searchByRole">POST api/v1/user/searchByRole</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-user-searchByRole">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/user/searchByRole" \
    --header "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/user/searchByRole"
);

const headers = {
    "Authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-user-searchByRole">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 49
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 412,
    &quot;error&quot;: &quot;&quot;,
    &quot;message&quot;: &quot;اطلاعات ارسالی ناقص یا اشتباه است&quot;,
    &quot;data&quot;: [],
    &quot;patch&quot;: [],
    &quot;date&quot;: &quot;2022-11-26T09:54:27.676254Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-user-searchByRole" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-user-searchByRole"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-user-searchByRole" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-user-searchByRole" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-user-searchByRole"></code></pre>
</span>
<form id="form-POSTapi-v1-user-searchByRole" data-method="POST"
      data-path="api/v1/user/searchByRole"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-user-searchByRole', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-user-searchByRole"
                    onclick="tryItOut('POSTapi-v1-user-searchByRole');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-user-searchByRole"
                    onclick="cancelTryOut('POSTapi-v1-user-searchByRole');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-user-searchByRole" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/user/searchByRole</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-user-searchByRole"
               value="Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="POSTapi-v1-user-searchByRole"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="POSTapi-v1-user-searchByRole"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-user-check-username">POST api/v1/user/check-username</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-user-check-username">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/user/check-username" \
    --header "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/user/check-username"
);

const headers = {
    "Authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-user-check-username">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 48
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 412,
    &quot;error&quot;: &quot;&quot;,
    &quot;message&quot;: &quot;اطلاعات ارسالی ناقص یا اشتباه است&quot;,
    &quot;data&quot;: [],
    &quot;patch&quot;: [],
    &quot;date&quot;: &quot;2022-11-26T09:54:27.688083Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-user-check-username" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-user-check-username"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-user-check-username" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-user-check-username" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-user-check-username"></code></pre>
</span>
<form id="form-POSTapi-v1-user-check-username" data-method="POST"
      data-path="api/v1/user/check-username"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-user-check-username', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-user-check-username"
                    onclick="tryItOut('POSTapi-v1-user-check-username');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-user-check-username"
                    onclick="cancelTryOut('POSTapi-v1-user-check-username');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-user-check-username" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/user/check-username</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-user-check-username"
               value="Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="POSTapi-v1-user-check-username"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="POSTapi-v1-user-check-username"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-role">POST api/v1/role</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-role">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/role" \
    --header "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/role"
);

const headers = {
    "Authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-role">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 47
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 200,
    &quot;error&quot;: &quot;&quot;,
    &quot;message&quot;: &quot;&quot;,
    &quot;data&quot;: {
        &quot;model&quot;: {
            &quot;current_page&quot;: 1,
            &quot;data&quot;: [
                {
                    &quot;id&quot;: &quot;791d1b02-3610-4177-9051-eb7ae6b72def&quot;,
                    &quot;name&quot;: &quot;مدیر سایت&quot;,
                    &quot;is_default&quot;: false,
                    &quot;created_at&quot;: &quot;2022-11-26T07:00:35.000000Z&quot;,
                    &quot;sort&quot;: 9999
                },
                {
                    &quot;id&quot;: &quot;5246f14d-1906-4e34-a412-8fb689d20f23&quot;,
                    &quot;name&quot;: &quot;کاربران&quot;,
                    &quot;is_default&quot;: false,
                    &quot;created_at&quot;: &quot;2022-11-26T07:00:35.000000Z&quot;,
                    &quot;sort&quot;: 9999
                }
            ],
            &quot;first_page_url&quot;: &quot;http://localhost:8000/api/v1/role?page=1&quot;,
            &quot;from&quot;: 1,
            &quot;last_page&quot;: 1,
            &quot;last_page_url&quot;: &quot;http://localhost:8000/api/v1/role?page=1&quot;,
            &quot;links&quot;: [
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost:8000/api/v1/role?page=1&quot;,
                    &quot;label&quot;: &quot;1&quot;,
                    &quot;active&quot;: true
                },
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                    &quot;active&quot;: false
                }
            ],
            &quot;next_page_url&quot;: null,
            &quot;path&quot;: &quot;http://localhost:8000/api/v1/role&quot;,
            &quot;per_page&quot;: 20,
            &quot;prev_page_url&quot;: null,
            &quot;to&quot;: 2,
            &quot;total&quot;: 2
        }
    },
    &quot;patch&quot;: [],
    &quot;date&quot;: &quot;2022-11-26T09:54:27.699041Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-role" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-role"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-role" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-role" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-role"></code></pre>
</span>
<form id="form-POSTapi-v1-role" data-method="POST"
      data-path="api/v1/role"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-role', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-role"
                    onclick="tryItOut('POSTapi-v1-role');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-role"
                    onclick="cancelTryOut('POSTapi-v1-role');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-role" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/role</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-role"
               value="Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="POSTapi-v1-role"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="POSTapi-v1-role"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-auth_token">POST api/v1/auth_token</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-auth_token">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/auth_token" \
    --header "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/auth_token"
);

const headers = {
    "Authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-auth_token">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 46
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 200,
    &quot;error&quot;: &quot;&quot;,
    &quot;message&quot;: &quot;&quot;,
    &quot;data&quot;: {
        &quot;model&quot;: {
            &quot;current_page&quot;: 1,
            &quot;data&quot;: [
                {
                    &quot;ip&quot;: &quot;&quot;,
                    &quot;created_at&quot;: &quot;2022-11-26T08:58:24.000000Z&quot;,
                    &quot;user_agent&quot;: &quot;&quot;,
                    &quot;expired_token_at&quot;: &quot;2100-01-01&quot;,
                    &quot;deleted&quot;: null,
                    &quot;username&quot;: &quot;09111111111&quot;,
                    &quot;last_name&quot;: &quot;سامانه&quot;,
                    &quot;first_name&quot;: &quot;مدیر&quot;,
                    &quot;national_code&quot;: null
                }
            ],
            &quot;first_page_url&quot;: &quot;http://localhost:8000/api/v1/auth_token?page=1&quot;,
            &quot;from&quot;: 1,
            &quot;last_page&quot;: 1,
            &quot;last_page_url&quot;: &quot;http://localhost:8000/api/v1/auth_token?page=1&quot;,
            &quot;links&quot;: [
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost:8000/api/v1/auth_token?page=1&quot;,
                    &quot;label&quot;: &quot;1&quot;,
                    &quot;active&quot;: true
                },
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                    &quot;active&quot;: false
                }
            ],
            &quot;next_page_url&quot;: null,
            &quot;path&quot;: &quot;http://localhost:8000/api/v1/auth_token&quot;,
            &quot;per_page&quot;: 20,
            &quot;prev_page_url&quot;: null,
            &quot;to&quot;: 1,
            &quot;total&quot;: 1
        }
    },
    &quot;patch&quot;: [],
    &quot;date&quot;: &quot;2022-11-26T09:54:27.722526Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-auth_token" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-auth_token"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-auth_token" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-auth_token" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-auth_token"></code></pre>
</span>
<form id="form-POSTapi-v1-auth_token" data-method="POST"
      data-path="api/v1/auth_token"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-auth_token', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-auth_token"
                    onclick="tryItOut('POSTapi-v1-auth_token');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-auth_token"
                    onclick="cancelTryOut('POSTapi-v1-auth_token');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-auth_token" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/auth_token</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-auth_token"
               value="Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="POSTapi-v1-auth_token"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="POSTapi-v1-auth_token"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-upload-insert">POST api/v1/upload/insert</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-upload-insert">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/upload/insert" \
    --header "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/upload/insert"
);

const headers = {
    "Authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-upload-insert">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 45
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 412,
    &quot;error&quot;: &quot;&quot;,
    &quot;message&quot;: &quot;اطلاعات ارسالی ناقص یا اشتباه است&quot;,
    &quot;data&quot;: [],
    &quot;patch&quot;: [],
    &quot;date&quot;: &quot;2022-11-26T09:54:27.741044Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-upload-insert" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-upload-insert"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-upload-insert" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-upload-insert" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-upload-insert"></code></pre>
</span>
<form id="form-POSTapi-v1-upload-insert" data-method="POST"
      data-path="api/v1/upload/insert"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-upload-insert', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-upload-insert"
                    onclick="tryItOut('POSTapi-v1-upload-insert');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-upload-insert"
                    onclick="cancelTryOut('POSTapi-v1-upload-insert');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-upload-insert" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/upload/insert</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-upload-insert"
               value="Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="POSTapi-v1-upload-insert"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="POSTapi-v1-upload-insert"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-upload-list">POST api/v1/upload/list</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-upload-list">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/upload/list" \
    --header "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/upload/list"
);

const headers = {
    "Authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-upload-list">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 44
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 200,
    &quot;error&quot;: &quot;&quot;,
    &quot;message&quot;: &quot;&quot;,
    &quot;data&quot;: {
        &quot;model&quot;: {
            &quot;current_page&quot;: 1,
            &quot;data&quot;: [],
            &quot;first_page_url&quot;: &quot;http://localhost:8000/api/v1/upload/list?page=1&quot;,
            &quot;from&quot;: null,
            &quot;last_page&quot;: 1,
            &quot;last_page_url&quot;: &quot;http://localhost:8000/api/v1/upload/list?page=1&quot;,
            &quot;links&quot;: [
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost:8000/api/v1/upload/list?page=1&quot;,
                    &quot;label&quot;: &quot;1&quot;,
                    &quot;active&quot;: true
                },
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                    &quot;active&quot;: false
                }
            ],
            &quot;next_page_url&quot;: null,
            &quot;path&quot;: &quot;http://localhost:8000/api/v1/upload/list&quot;,
            &quot;per_page&quot;: 20,
            &quot;prev_page_url&quot;: null,
            &quot;to&quot;: null,
            &quot;total&quot;: 0
        }
    },
    &quot;patch&quot;: [],
    &quot;date&quot;: &quot;2022-11-26T09:54:27.755730Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-upload-list" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-upload-list"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-upload-list" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-upload-list" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-upload-list"></code></pre>
</span>
<form id="form-POSTapi-v1-upload-list" data-method="POST"
      data-path="api/v1/upload/list"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-upload-list', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-upload-list"
                    onclick="tryItOut('POSTapi-v1-upload-list');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-upload-list"
                    onclick="cancelTryOut('POSTapi-v1-upload-list');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-upload-list" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/upload/list</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-upload-list"
               value="Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="POSTapi-v1-upload-list"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="POSTapi-v1-upload-list"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-country_division-show">POST api/v1/country_division/show</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-country_division-show">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/country_division/show" \
    --header "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/country_division/show"
);

const headers = {
    "Authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-country_division-show">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 43
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 403,
    &quot;error&quot;: &quot;&quot;,
    &quot;message&quot;: &quot;دسترسی غیر مجاز&quot;,
    &quot;data&quot;: [],
    &quot;patch&quot;: [],
    &quot;date&quot;: &quot;2022-11-26T09:54:27.776987Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-country_division-show" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-country_division-show"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-country_division-show" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-country_division-show" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-country_division-show"></code></pre>
</span>
<form id="form-POSTapi-v1-country_division-show" data-method="POST"
      data-path="api/v1/country_division/show"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-country_division-show', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-country_division-show"
                    onclick="tryItOut('POSTapi-v1-country_division-show');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-country_division-show"
                    onclick="cancelTryOut('POSTapi-v1-country_division-show');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-country_division-show" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/country_division/show</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-country_division-show"
               value="Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="POSTapi-v1-country_division-show"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="POSTapi-v1-country_division-show"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-country_division-insert">POST api/v1/country_division/insert</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-country_division-insert">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/country_division/insert" \
    --header "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/country_division/insert"
);

const headers = {
    "Authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-country_division-insert">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 42
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 403,
    &quot;error&quot;: &quot;&quot;,
    &quot;message&quot;: &quot;دسترسی غیر مجاز&quot;,
    &quot;data&quot;: [],
    &quot;patch&quot;: [],
    &quot;date&quot;: &quot;2022-11-26T09:54:27.793246Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-country_division-insert" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-country_division-insert"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-country_division-insert" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-country_division-insert" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-country_division-insert"></code></pre>
</span>
<form id="form-POSTapi-v1-country_division-insert" data-method="POST"
      data-path="api/v1/country_division/insert"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-country_division-insert', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-country_division-insert"
                    onclick="tryItOut('POSTapi-v1-country_division-insert');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-country_division-insert"
                    onclick="cancelTryOut('POSTapi-v1-country_division-insert');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-country_division-insert" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/country_division/insert</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-country_division-insert"
               value="Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="POSTapi-v1-country_division-insert"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="POSTapi-v1-country_division-insert"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-country_division-update">POST api/v1/country_division/update</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-country_division-update">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/country_division/update" \
    --header "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/country_division/update"
);

const headers = {
    "Authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-country_division-update">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 41
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 403,
    &quot;error&quot;: &quot;&quot;,
    &quot;message&quot;: &quot;دسترسی غیر مجاز&quot;,
    &quot;data&quot;: [],
    &quot;patch&quot;: [],
    &quot;date&quot;: &quot;2022-11-26T09:54:27.806079Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-country_division-update" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-country_division-update"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-country_division-update" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-country_division-update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-country_division-update"></code></pre>
</span>
<form id="form-POSTapi-v1-country_division-update" data-method="POST"
      data-path="api/v1/country_division/update"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-country_division-update', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-country_division-update"
                    onclick="tryItOut('POSTapi-v1-country_division-update');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-country_division-update"
                    onclick="cancelTryOut('POSTapi-v1-country_division-update');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-country_division-update" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/country_division/update</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-country_division-update"
               value="Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="POSTapi-v1-country_division-update"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="POSTapi-v1-country_division-update"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-country_division-delete">POST api/v1/country_division/delete</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-country_division-delete">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/country_division/delete" \
    --header "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/country_division/delete"
);

const headers = {
    "Authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-country_division-delete">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 40
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 403,
    &quot;error&quot;: &quot;&quot;,
    &quot;message&quot;: &quot;دسترسی غیر مجاز&quot;,
    &quot;data&quot;: [],
    &quot;patch&quot;: [],
    &quot;date&quot;: &quot;2022-11-26T09:54:27.817427Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-country_division-delete" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-country_division-delete"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-country_division-delete" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-country_division-delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-country_division-delete"></code></pre>
</span>
<form id="form-POSTapi-v1-country_division-delete" data-method="POST"
      data-path="api/v1/country_division/delete"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-country_division-delete', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-country_division-delete"
                    onclick="tryItOut('POSTapi-v1-country_division-delete');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-country_division-delete"
                    onclick="cancelTryOut('POSTapi-v1-country_division-delete');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-country_division-delete" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/country_division/delete</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-country_division-delete"
               value="Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="POSTapi-v1-country_division-delete"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="POSTapi-v1-country_division-delete"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-setting">POST api/v1/setting</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-setting">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/setting" \
    --header "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/setting"
);

const headers = {
    "Authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-setting">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 39
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 200,
    &quot;error&quot;: &quot;&quot;,
    &quot;message&quot;: &quot;&quot;,
    &quot;data&quot;: {
        &quot;model&quot;: {
            &quot;current_page&quot;: 1,
            &quot;data&quot;: [],
            &quot;first_page_url&quot;: &quot;http://localhost:8000/api/v1/setting?page=1&quot;,
            &quot;from&quot;: null,
            &quot;last_page&quot;: 1,
            &quot;last_page_url&quot;: &quot;http://localhost:8000/api/v1/setting?page=1&quot;,
            &quot;links&quot;: [
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost:8000/api/v1/setting?page=1&quot;,
                    &quot;label&quot;: &quot;1&quot;,
                    &quot;active&quot;: true
                },
                {
                    &quot;url&quot;: null,
                    &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                    &quot;active&quot;: false
                }
            ],
            &quot;next_page_url&quot;: null,
            &quot;path&quot;: &quot;http://localhost:8000/api/v1/setting&quot;,
            &quot;per_page&quot;: 20,
            &quot;prev_page_url&quot;: null,
            &quot;to&quot;: null,
            &quot;total&quot;: 0
        }
    },
    &quot;patch&quot;: [],
    &quot;date&quot;: &quot;2022-11-26T09:54:27.830431Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-setting" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-setting"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-setting" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-setting" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-setting"></code></pre>
</span>
<form id="form-POSTapi-v1-setting" data-method="POST"
      data-path="api/v1/setting"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-setting', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-setting"
                    onclick="tryItOut('POSTapi-v1-setting');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-setting"
                    onclick="cancelTryOut('POSTapi-v1-setting');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-setting" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/setting</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-setting"
               value="Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="POSTapi-v1-setting"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="POSTapi-v1-setting"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-setting-insert">POST api/v1/setting/insert</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-setting-insert">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/setting/insert" \
    --header "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/setting/insert"
);

const headers = {
    "Authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-setting-insert">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 38
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 412,
    &quot;error&quot;: &quot;&quot;,
    &quot;message&quot;: &quot;اطلاعات ارسالی ناقص یا اشتباه است&quot;,
    &quot;data&quot;: [],
    &quot;patch&quot;: [],
    &quot;date&quot;: &quot;2022-11-26T09:54:27.841641Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-setting-insert" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-setting-insert"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-setting-insert" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-setting-insert" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-setting-insert"></code></pre>
</span>
<form id="form-POSTapi-v1-setting-insert" data-method="POST"
      data-path="api/v1/setting/insert"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-setting-insert', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-setting-insert"
                    onclick="tryItOut('POSTapi-v1-setting-insert');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-setting-insert"
                    onclick="cancelTryOut('POSTapi-v1-setting-insert');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-setting-insert" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/setting/insert</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-setting-insert"
               value="Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="POSTapi-v1-setting-insert"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="POSTapi-v1-setting-insert"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-setting-update">POST api/v1/setting/update</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-setting-update">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/setting/update" \
    --header "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/setting/update"
);

const headers = {
    "Authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-setting-update">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 37
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 412,
    &quot;error&quot;: &quot;&quot;,
    &quot;message&quot;: &quot;اطلاعات ارسالی ناقص یا اشتباه است&quot;,
    &quot;data&quot;: [],
    &quot;patch&quot;: [],
    &quot;date&quot;: &quot;2022-11-26T09:54:27.859311Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-setting-update" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-setting-update"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-setting-update" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-setting-update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-setting-update"></code></pre>
</span>
<form id="form-POSTapi-v1-setting-update" data-method="POST"
      data-path="api/v1/setting/update"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-setting-update', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-setting-update"
                    onclick="tryItOut('POSTapi-v1-setting-update');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-setting-update"
                    onclick="cancelTryOut('POSTapi-v1-setting-update');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-setting-update" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/setting/update</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-setting-update"
               value="Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="POSTapi-v1-setting-update"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="POSTapi-v1-setting-update"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-setting-delete">POST api/v1/setting/delete</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-setting-delete">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/v1/setting/delete" \
    --header "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/setting/delete"
);

const headers = {
    "Authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-setting-delete">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 36
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 412,
    &quot;error&quot;: &quot;&quot;,
    &quot;message&quot;: &quot;اطلاعات ارسالی ناقص یا اشتباه است&quot;,
    &quot;data&quot;: [],
    &quot;patch&quot;: [],
    &quot;date&quot;: &quot;2022-11-26T09:54:27.873103Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-setting-delete" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-setting-delete"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-setting-delete" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-setting-delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-setting-delete"></code></pre>
</span>
<form id="form-POSTapi-v1-setting-delete" data-method="POST"
      data-path="api/v1/setting/delete"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-setting-delete', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-setting-delete"
                    onclick="tryItOut('POSTapi-v1-setting-delete');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-setting-delete"
                    onclick="cancelTryOut('POSTapi-v1-setting-delete');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-setting-delete" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/setting/delete</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-setting-delete"
               value="Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi"
               data-component="header" hidden>
    <br>
<p>Example: <code>Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Content-Type"                data-endpoint="POSTapi-v1-setting-delete"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text"
               name="Accept"                data-endpoint="POSTapi-v1-setting-delete"
               value="application/json"
               data-component="header" hidden>
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
