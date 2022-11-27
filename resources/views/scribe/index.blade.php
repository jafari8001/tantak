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
        <li>Last updated: November 27, 2022</li>
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
<p>To authenticate requests, include an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi"</code></strong>.</p>
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
    &quot;date&quot;: &quot;2022-11-27T05:32:23.119187Z&quot;
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
    &quot;message&quot;: &quot;SQLSTATE[25P02]: In failed sql transaction: 7 ERROR:  current transaction is aborted, commands ignored until end of transaction block (SQL: insert into \&quot;otp_codes\&quot; (\&quot;ip\&quot;, \&quot;code\&quot;, \&quot;username\&quot;, \&quot;id\&quot;, \&quot;updated_at\&quot;, \&quot;created_at\&quot;) values (127.0.0.1, 2273, 09111111111, e88cb014-d233-4d70-b26f-643267ef7747, 2022-11-27 09:02:23, 2022-11-27 09:02:23))&quot;,
    &quot;data&quot;: [
        &quot;SQLSTATE[25P02]: In failed sql transaction: 7 ERROR:  current transaction is aborted, commands ignored until end of transaction block (SQL: insert into \&quot;otp_codes\&quot; (\&quot;ip\&quot;, \&quot;code\&quot;, \&quot;username\&quot;, \&quot;id\&quot;, \&quot;updated_at\&quot;, \&quot;created_at\&quot;) values (127.0.0.1, 2273, 09111111111, e88cb014-d233-4d70-b26f-643267ef7747, 2022-11-27 09:02:23, 2022-11-27 09:02:23))&quot;,
        &quot;/home/sina/workfiles/php/laravel/Test/apm-base-laravel/vendor/laravel/framework/src/Illuminate/Database/Connection.php&quot;,
        759,
        &quot;25P02&quot;
    ],
    &quot;patch&quot;: [],
    &quot;date&quot;: &quot;2022-11-27T05:32:23.223786Z&quot;
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
    &quot;date&quot;: &quot;2022-11-27T05:32:23.234420Z&quot;
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
    &quot;date&quot;: &quot;2022-11-27T05:32:23.294572Z&quot;
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
    &quot;date&quot;: &quot;2022-11-27T05:32:23.316067Z&quot;
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
        &quot;Authorization&quot;: &quot;eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ99rP9D7gaOe.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRjRn0GiHDsnx2v6Q.qyIqjgQLA4dE37jP3c6ynBmX72022114bQejUm2eV2Eglr27091bKal2wxqWecqJyqyregzfOWMkxgfRCegDQ1123r2ls2R2VjK0fcS61vhCwxfEu5jdrrnxKgrJfDQvss6v5wriv1FQfgj7&quot;,
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
    &quot;date&quot;: &quot;2022-11-27T05:32:23.329789Z&quot;
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
    &quot;date&quot;: &quot;2022-11-27T05:32:23.254939Z&quot;
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
                    &quot;id&quot;: &quot;3296f06a-4a83-49c5-8c7f-c619776075da&quot;,
                    &quot;ip&quot;: &quot;127.0.0.1&quot;,
                    &quot;ulr&quot;: &quot;/api/v1/request-log&quot;,
                    &quot;status&quot;: &quot;200&quot;,
                    &quot;method&quot;: &quot;POST&quot;,
                    &quot;user_agent&quot;: &quot;Symfony&quot;,
                    &quot;end_status&quot;: null,
                    &quot;user_agent_client&quot;: &quot;Other&quot;,
                    &quot;created_at&quot;: &quot;2022-11-27T05:32:23.000000Z&quot;,
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
                    &quot;id&quot;: &quot;1c23d7c8-302a-4cad-971f-64bf16148c41&quot;,
                    &quot;ip&quot;: &quot;127.0.0.1&quot;,
                    &quot;ulr&quot;: &quot;/docs&quot;,
                    &quot;status&quot;: &quot;200&quot;,
                    &quot;method&quot;: &quot;GET&quot;,
                    &quot;user_agent&quot;: &quot;Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:107.0) Gecko/20100101 Firefox/107.0&quot;,
                    &quot;end_status&quot;: &quot;500&quot;,
                    &quot;user_agent_client&quot;: &quot;Other&quot;,
                    &quot;created_at&quot;: &quot;2022-11-26T10:39:42.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;token&quot;: null,
                    &quot;request&quot;: &quot;&quot;,
                    &quot;response&quot;: &quot;{\&quot;status\&quot;:500,\&quot;error\&quot;:\&quot;\&quot;,\&quot;message\&quot;:\&quot;Attempt to read property \\\&quot;id\\\&quot; on null\&quot;,\&quot;data\&quot;:[\&quot;Attempt to read property \\\&quot;id\\\&quot; on null\&quot;,\&quot;\\/home\\/sina\\/workfiles\\/php\\/laravel\\/Test\\/apm-base-laravel\\/app\\/Http\\/Middleware\\/DocsLogin.php\&quot;,15,0],\&quot;patch\&quot;:[],\&quot;date\&quot;:\&quot;2022-11-26T10:39:42.643836Z\&quot;}&quot;,
                    &quot;message&quot;: &quot;Attempt to read property \&quot;id\&quot; on null&quot;,
                    &quot;user_username&quot;: null,
                    &quot;user_first_name&quot;: null,
                    &quot;user_last_name&quot;: null
                },
                {
                    &quot;id&quot;: &quot;aae52899-d0b0-4987-a425-fff32dcebf8b&quot;,
                    &quot;ip&quot;: &quot;127.0.0.1&quot;,
                    &quot;ulr&quot;: &quot;/docs&quot;,
                    &quot;status&quot;: &quot;200&quot;,
                    &quot;method&quot;: &quot;GET&quot;,
                    &quot;user_agent&quot;: &quot;Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:107.0) Gecko/20100101 Firefox/107.0&quot;,
                    &quot;end_status&quot;: &quot;&quot;,
                    &quot;user_agent_client&quot;: &quot;Other&quot;,
                    &quot;created_at&quot;: &quot;2022-11-26T10:39:28.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;token&quot;: null,
                    &quot;request&quot;: &quot;&quot;,
                    &quot;response&quot;: &quot;&quot;,
                    &quot;message&quot;: &quot;&quot;,
                    &quot;user_username&quot;: null,
                    &quot;user_first_name&quot;: null,
                    &quot;user_last_name&quot;: null
                },
                {
                    &quot;id&quot;: &quot;4c248fdf-2e46-4d35-8732-c5db571fe428&quot;,
                    &quot;ip&quot;: &quot;127.0.0.1&quot;,
                    &quot;ulr&quot;: &quot;/docs/check&quot;,
                    &quot;status&quot;: &quot;200&quot;,
                    &quot;method&quot;: &quot;POST&quot;,
                    &quot;user_agent&quot;: &quot;Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:107.0) Gecko/20100101 Firefox/107.0&quot;,
                    &quot;end_status&quot;: &quot;&quot;,
                    &quot;user_agent_client&quot;: &quot;Other&quot;,
                    &quot;created_at&quot;: &quot;2022-11-26T10:39:28.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;token&quot;: null,
                    &quot;request&quot;: &quot;_token=I126yaDO98LeLPdPlBBFf4EnQQrWt9hkBEbDJQgi&amp;username=09111111111&amp;password=123456&quot;,
                    &quot;response&quot;: &quot;&lt;!DOCTYPE html&gt;\n&lt;html&gt;\n    &lt;head&gt;\n        &lt;meta charset=\&quot;UTF-8\&quot; /&gt;\n        &lt;meta http-equiv=\&quot;refresh\&quot; content=\&quot;0;url=&#039;http://localhost:8000/docs&#039;\&quot; /&gt;\n\n        &lt;title&gt;Redirecting to http://localhost:8000/docs&lt;/title&gt;\n    &lt;/head&gt;\n    &lt;body&gt;\n        Redirecting to &lt;a href=\&quot;http://localhost:8000/docs\&quot;&gt;http://localhost:8000/docs&lt;/a&gt;.\n    &lt;/body&gt;\n&lt;/html&gt;&quot;,
                    &quot;message&quot;: &quot;&quot;,
                    &quot;user_username&quot;: &quot;09111111111&quot;,
                    &quot;user_first_name&quot;: &quot;مدیر&quot;,
                    &quot;user_last_name&quot;: &quot;سامانه&quot;
                },
                {
                    &quot;id&quot;: &quot;d8ad548c-2629-46c7-9169-f1c6cd21bd51&quot;,
                    &quot;ip&quot;: &quot;127.0.0.1&quot;,
                    &quot;ulr&quot;: &quot;/docs&quot;,
                    &quot;status&quot;: &quot;200&quot;,
                    &quot;method&quot;: &quot;GET&quot;,
                    &quot;user_agent&quot;: &quot;Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:107.0) Gecko/20100101 Firefox/107.0&quot;,
                    &quot;end_status&quot;: &quot;&quot;,
                    &quot;user_agent_client&quot;: &quot;Other&quot;,
                    &quot;created_at&quot;: &quot;2022-11-26T10:37:29.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;token&quot;: null,
                    &quot;request&quot;: &quot;&quot;,
                    &quot;response&quot;: &quot;&lt;!DOCTYPE html&gt;\n&lt;html&gt;\n    &lt;head&gt;\n        &lt;meta charset=\&quot;UTF-8\&quot; /&gt;\n        &lt;meta http-equiv=\&quot;refresh\&quot; content=\&quot;0;url=&#039;http://localhost:8000/docs/login&#039;\&quot; /&gt;\n\n        &lt;title&gt;Redirecting to http://localhost:8000/docs/login&lt;/title&gt;\n    &lt;/head&gt;\n    &lt;body&gt;\n        Redirecting to &lt;a href=\&quot;http://localhost:8000/docs/login\&quot;&gt;http://localhost:8000/docs/login&lt;/a&gt;.\n    &lt;/body&gt;\n&lt;/html&gt;&quot;,
                    &quot;message&quot;: &quot;&quot;,
                    &quot;user_username&quot;: null,
                    &quot;user_first_name&quot;: null,
                    &quot;user_last_name&quot;: null
                },
                {
                    &quot;id&quot;: &quot;5a978862-517e-4c2e-ab36-4c005e27dcd0&quot;,
                    &quot;ip&quot;: &quot;127.0.0.1&quot;,
                    &quot;ulr&quot;: &quot;/docs/login&quot;,
                    &quot;status&quot;: &quot;200&quot;,
                    &quot;method&quot;: &quot;GET&quot;,
                    &quot;user_agent&quot;: &quot;Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:107.0) Gecko/20100101 Firefox/107.0&quot;,
                    &quot;end_status&quot;: &quot;&quot;,
                    &quot;user_agent_client&quot;: &quot;Other&quot;,
                    &quot;created_at&quot;: &quot;2022-11-26T10:37:29.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;token&quot;: null,
                    &quot;request&quot;: &quot;&quot;,
                    &quot;response&quot;: &quot;&lt;html&gt;\n    &lt;head&gt;\n        &lt;title&gt;Docs login&lt;/title&gt;\n        &lt;link href=\&quot;http://localhost:8000/vendor/auth/login.css\&quot; rel=\&quot;stylesheet\&quot;&gt;\n    &lt;/head&gt;\n    &lt;body&gt;\n        &lt;div class=\&quot;wrapper fadeInDown\&quot;&gt;\n          &lt;div id=\&quot;formContent\&quot;&gt;\n            &lt;!-- Tabs Titles --&gt;\n            &lt;h2 class=\&quot;active\&quot;&gt; Sign In &lt;/h2&gt;       \n        \n            &lt;!-- Login Form --&gt;\n            &lt;form action=\&quot;/docs/check\&quot; method=\&quot;POST\&quot;&gt;\n                &lt;input type=\&quot;hidden\&quot; name=\&quot;_token\&quot; value=\&quot;I126yaDO98LeLPdPlBBFf4EnQQrWt9hkBEbDJQgi\&quot;&gt;                &lt;input type=\&quot;text\&quot; id=\&quot;login\&quot; class=\&quot;fadeIn second\&quot; name=\&quot;username\&quot; placeholder=\&quot;user name\&quot;&gt;\n                &lt;input type=\&quot;text\&quot; id=\&quot;password\&quot; class=\&quot;fadeIn third\&quot; name=\&quot;password\&quot; placeholder=\&quot;password\&quot;&gt;\n                &lt;input type=\&quot;submit\&quot; class=\&quot;fadeIn fourth\&quot; value=\&quot;Log In\&quot;&gt;\n            &lt;/form&gt;\n        \n            &lt;!-- Message --&gt;\n                    \n          &lt;/div&gt;\n        &lt;/div&gt;\n    &lt;/body&gt;\n&lt;/html&gt;\n\n&quot;,
                    &quot;message&quot;: &quot;&quot;,
                    &quot;user_username&quot;: &quot;09111111111&quot;,
                    &quot;user_first_name&quot;: &quot;مدیر&quot;,
                    &quot;user_last_name&quot;: &quot;سامانه&quot;
                },
                {
                    &quot;id&quot;: &quot;1d7fdca1-7eb6-4b43-a4a5-7e9f393fd046&quot;,
                    &quot;ip&quot;: &quot;127.0.0.1&quot;,
                    &quot;ulr&quot;: &quot;/docs/check&quot;,
                    &quot;status&quot;: &quot;200&quot;,
                    &quot;method&quot;: &quot;POST&quot;,
                    &quot;user_agent&quot;: &quot;Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:107.0) Gecko/20100101 Firefox/107.0&quot;,
                    &quot;end_status&quot;: &quot;&quot;,
                    &quot;user_agent_client&quot;: &quot;Other&quot;,
                    &quot;created_at&quot;: &quot;2022-11-26T10:37:28.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;token&quot;: null,
                    &quot;request&quot;: &quot;_token=I126yaDO98LeLPdPlBBFf4EnQQrWt9hkBEbDJQgi&amp;username=09111111111&amp;password=123456&quot;,
                    &quot;response&quot;: &quot;&lt;!DOCTYPE html&gt;\n&lt;html&gt;\n    &lt;head&gt;\n        &lt;meta charset=\&quot;UTF-8\&quot; /&gt;\n        &lt;meta http-equiv=\&quot;refresh\&quot; content=\&quot;0;url=&#039;http://localhost:8000/docs&#039;\&quot; /&gt;\n\n        &lt;title&gt;Redirecting to http://localhost:8000/docs&lt;/title&gt;\n    &lt;/head&gt;\n    &lt;body&gt;\n        Redirecting to &lt;a href=\&quot;http://localhost:8000/docs\&quot;&gt;http://localhost:8000/docs&lt;/a&gt;.\n    &lt;/body&gt;\n&lt;/html&gt;&quot;,
                    &quot;message&quot;: &quot;&quot;,
                    &quot;user_username&quot;: &quot;09111111111&quot;,
                    &quot;user_first_name&quot;: &quot;مدیر&quot;,
                    &quot;user_last_name&quot;: &quot;سامانه&quot;
                },
                {
                    &quot;id&quot;: &quot;e7f4ce76-63b3-4c79-a906-52cd42cad839&quot;,
                    &quot;ip&quot;: &quot;127.0.0.1&quot;,
                    &quot;ulr&quot;: &quot;/docs/check&quot;,
                    &quot;status&quot;: &quot;200&quot;,
                    &quot;method&quot;: &quot;POST&quot;,
                    &quot;user_agent&quot;: &quot;Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:107.0) Gecko/20100101 Firefox/107.0&quot;,
                    &quot;end_status&quot;: &quot;&quot;,
                    &quot;user_agent_client&quot;: &quot;Other&quot;,
                    &quot;created_at&quot;: &quot;2022-11-26T10:37:02.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;token&quot;: null,
                    &quot;request&quot;: &quot;_token=I126yaDO98LeLPdPlBBFf4EnQQrWt9hkBEbDJQgi&amp;username=09111111111&amp;password=123456&quot;,
                    &quot;response&quot;: &quot;&lt;!DOCTYPE html&gt;\n&lt;html&gt;\n    &lt;head&gt;\n        &lt;meta charset=\&quot;UTF-8\&quot; /&gt;\n        &lt;meta http-equiv=\&quot;refresh\&quot; content=\&quot;0;url=&#039;http://localhost:8000/docs&#039;\&quot; /&gt;\n\n        &lt;title&gt;Redirecting to http://localhost:8000/docs&lt;/title&gt;\n    &lt;/head&gt;\n    &lt;body&gt;\n        Redirecting to &lt;a href=\&quot;http://localhost:8000/docs\&quot;&gt;http://localhost:8000/docs&lt;/a&gt;.\n    &lt;/body&gt;\n&lt;/html&gt;&quot;,
                    &quot;message&quot;: &quot;&quot;,
                    &quot;user_username&quot;: &quot;09111111111&quot;,
                    &quot;user_first_name&quot;: &quot;مدیر&quot;,
                    &quot;user_last_name&quot;: &quot;سامانه&quot;
                },
                {
                    &quot;id&quot;: &quot;86b41b0b-0bed-4b30-af92-a4379d2d2f37&quot;,
                    &quot;ip&quot;: &quot;127.0.0.1&quot;,
                    &quot;ulr&quot;: &quot;/docs/login&quot;,
                    &quot;status&quot;: &quot;200&quot;,
                    &quot;method&quot;: &quot;GET&quot;,
                    &quot;user_agent&quot;: &quot;Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:107.0) Gecko/20100101 Firefox/107.0&quot;,
                    &quot;end_status&quot;: &quot;&quot;,
                    &quot;user_agent_client&quot;: &quot;Other&quot;,
                    &quot;created_at&quot;: &quot;2022-11-26T10:37:02.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;token&quot;: null,
                    &quot;request&quot;: &quot;&quot;,
                    &quot;response&quot;: &quot;&lt;html&gt;\n    &lt;head&gt;\n        &lt;title&gt;Docs login&lt;/title&gt;\n        &lt;link href=\&quot;http://localhost:8000/vendor/auth/login.css\&quot; rel=\&quot;stylesheet\&quot;&gt;\n    &lt;/head&gt;\n    &lt;body&gt;\n        &lt;div class=\&quot;wrapper fadeInDown\&quot;&gt;\n          &lt;div id=\&quot;formContent\&quot;&gt;\n            &lt;!-- Tabs Titles --&gt;\n            &lt;h2 class=\&quot;active\&quot;&gt; Sign In &lt;/h2&gt;       \n        \n            &lt;!-- Login Form --&gt;\n            &lt;form action=\&quot;/docs/check\&quot; method=\&quot;POST\&quot;&gt;\n                &lt;input type=\&quot;hidden\&quot; name=\&quot;_token\&quot; value=\&quot;I126yaDO98LeLPdPlBBFf4EnQQrWt9hkBEbDJQgi\&quot;&gt;                &lt;input type=\&quot;text\&quot; id=\&quot;login\&quot; class=\&quot;fadeIn second\&quot; name=\&quot;username\&quot; placeholder=\&quot;user name\&quot;&gt;\n                &lt;input type=\&quot;text\&quot; id=\&quot;password\&quot; class=\&quot;fadeIn third\&quot; name=\&quot;password\&quot; placeholder=\&quot;password\&quot;&gt;\n                &lt;input type=\&quot;submit\&quot; class=\&quot;fadeIn fourth\&quot; value=\&quot;Log In\&quot;&gt;\n            &lt;/form&gt;\n        \n            &lt;!-- Message --&gt;\n                    \n          &lt;/div&gt;\n        &lt;/div&gt;\n    &lt;/body&gt;\n&lt;/html&gt;\n\n&quot;,
                    &quot;message&quot;: &quot;&quot;,
                    &quot;user_username&quot;: &quot;09111111111&quot;,
                    &quot;user_first_name&quot;: &quot;مدیر&quot;,
                    &quot;user_last_name&quot;: &quot;سامانه&quot;
                },
                {
                    &quot;id&quot;: &quot;0f2c43d2-3446-40dd-b13f-5bb7248264f2&quot;,
                    &quot;ip&quot;: &quot;127.0.0.1&quot;,
                    &quot;ulr&quot;: &quot;/docs&quot;,
                    &quot;status&quot;: &quot;200&quot;,
                    &quot;method&quot;: &quot;GET&quot;,
                    &quot;user_agent&quot;: &quot;Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:107.0) Gecko/20100101 Firefox/107.0&quot;,
                    &quot;end_status&quot;: &quot;&quot;,
                    &quot;user_agent_client&quot;: &quot;Other&quot;,
                    &quot;created_at&quot;: &quot;2022-11-26T10:37:02.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;token&quot;: null,
                    &quot;request&quot;: &quot;&quot;,
                    &quot;response&quot;: &quot;&lt;!DOCTYPE html&gt;\n&lt;html&gt;\n    &lt;head&gt;\n        &lt;meta charset=\&quot;UTF-8\&quot; /&gt;\n        &lt;meta http-equiv=\&quot;refresh\&quot; content=\&quot;0;url=&#039;http://localhost:8000/docs/login&#039;\&quot; /&gt;\n\n        &lt;title&gt;Redirecting to http://localhost:8000/docs/login&lt;/title&gt;\n    &lt;/head&gt;\n    &lt;body&gt;\n        Redirecting to &lt;a href=\&quot;http://localhost:8000/docs/login\&quot;&gt;http://localhost:8000/docs/login&lt;/a&gt;.\n    &lt;/body&gt;\n&lt;/html&gt;&quot;,
                    &quot;message&quot;: &quot;&quot;,
                    &quot;user_username&quot;: null,
                    &quot;user_first_name&quot;: null,
                    &quot;user_last_name&quot;: null
                },
                {
                    &quot;id&quot;: &quot;49d15692-5cee-4773-acfa-99bd7a19d9e7&quot;,
                    &quot;ip&quot;: &quot;127.0.0.1&quot;,
                    &quot;ulr&quot;: &quot;/docs/login&quot;,
                    &quot;status&quot;: &quot;200&quot;,
                    &quot;method&quot;: &quot;GET&quot;,
                    &quot;user_agent&quot;: &quot;Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:107.0) Gecko/20100101 Firefox/107.0&quot;,
                    &quot;end_status&quot;: &quot;&quot;,
                    &quot;user_agent_client&quot;: &quot;Other&quot;,
                    &quot;created_at&quot;: &quot;2022-11-26T10:35:04.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;token&quot;: null,
                    &quot;request&quot;: &quot;&quot;,
                    &quot;response&quot;: &quot;&lt;html&gt;\n    &lt;head&gt;\n        &lt;title&gt;Docs login&lt;/title&gt;\n        &lt;link href=\&quot;http://localhost:8000/vendor/auth/login.css\&quot; rel=\&quot;stylesheet\&quot;&gt;\n    &lt;/head&gt;\n    &lt;body&gt;\n        &lt;div class=\&quot;wrapper fadeInDown\&quot;&gt;\n          &lt;div id=\&quot;formContent\&quot;&gt;\n            &lt;!-- Tabs Titles --&gt;\n            &lt;h2 class=\&quot;active\&quot;&gt; Sign In &lt;/h2&gt;       \n        \n            &lt;!-- Login Form --&gt;\n            &lt;form action=\&quot;/docs/check\&quot; method=\&quot;POST\&quot;&gt;\n                &lt;input type=\&quot;hidden\&quot; name=\&quot;_token\&quot; value=\&quot;I126yaDO98LeLPdPlBBFf4EnQQrWt9hkBEbDJQgi\&quot;&gt;                &lt;input type=\&quot;text\&quot; id=\&quot;login\&quot; class=\&quot;fadeIn second\&quot; name=\&quot;username\&quot; placeholder=\&quot;user name\&quot;&gt;\n                &lt;input type=\&quot;text\&quot; id=\&quot;password\&quot; class=\&quot;fadeIn third\&quot; name=\&quot;password\&quot; placeholder=\&quot;password\&quot;&gt;\n                &lt;input type=\&quot;submit\&quot; class=\&quot;fadeIn fourth\&quot; value=\&quot;Log In\&quot;&gt;\n            &lt;/form&gt;\n        \n            &lt;!-- Message --&gt;\n                    \n          &lt;/div&gt;\n        &lt;/div&gt;\n    &lt;/body&gt;\n&lt;/html&gt;\n\n&quot;,
                    &quot;message&quot;: &quot;&quot;,
                    &quot;user_username&quot;: &quot;09111111111&quot;,
                    &quot;user_first_name&quot;: &quot;مدیر&quot;,
                    &quot;user_last_name&quot;: &quot;سامانه&quot;
                },
                {
                    &quot;id&quot;: &quot;416aae47-fbdf-473d-99c4-fc3b8fd37940&quot;,
                    &quot;ip&quot;: &quot;127.0.0.1&quot;,
                    &quot;ulr&quot;: &quot;/docs&quot;,
                    &quot;status&quot;: &quot;200&quot;,
                    &quot;method&quot;: &quot;GET&quot;,
                    &quot;user_agent&quot;: &quot;Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:107.0) Gecko/20100101 Firefox/107.0&quot;,
                    &quot;end_status&quot;: &quot;&quot;,
                    &quot;user_agent_client&quot;: &quot;Other&quot;,
                    &quot;created_at&quot;: &quot;2022-11-26T10:35:04.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;token&quot;: null,
                    &quot;request&quot;: &quot;&quot;,
                    &quot;response&quot;: &quot;&lt;!DOCTYPE html&gt;\n&lt;html&gt;\n    &lt;head&gt;\n        &lt;meta charset=\&quot;UTF-8\&quot; /&gt;\n        &lt;meta http-equiv=\&quot;refresh\&quot; content=\&quot;0;url=&#039;http://localhost:8000/docs/login&#039;\&quot; /&gt;\n\n        &lt;title&gt;Redirecting to http://localhost:8000/docs/login&lt;/title&gt;\n    &lt;/head&gt;\n    &lt;body&gt;\n        Redirecting to &lt;a href=\&quot;http://localhost:8000/docs/login\&quot;&gt;http://localhost:8000/docs/login&lt;/a&gt;.\n    &lt;/body&gt;\n&lt;/html&gt;&quot;,
                    &quot;message&quot;: &quot;&quot;,
                    &quot;user_username&quot;: null,
                    &quot;user_first_name&quot;: null,
                    &quot;user_last_name&quot;: null
                },
                {
                    &quot;id&quot;: &quot;1ac41774-f9e9-4974-9782-8d1fada71079&quot;,
                    &quot;ip&quot;: &quot;127.0.0.1&quot;,
                    &quot;ulr&quot;: &quot;/docs/check&quot;,
                    &quot;status&quot;: &quot;200&quot;,
                    &quot;method&quot;: &quot;POST&quot;,
                    &quot;user_agent&quot;: &quot;Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:107.0) Gecko/20100101 Firefox/107.0&quot;,
                    &quot;end_status&quot;: &quot;&quot;,
                    &quot;user_agent_client&quot;: &quot;Other&quot;,
                    &quot;created_at&quot;: &quot;2022-11-26T10:35:04.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;token&quot;: null,
                    &quot;request&quot;: &quot;_token=I126yaDO98LeLPdPlBBFf4EnQQrWt9hkBEbDJQgi&amp;username=09111111111&amp;password=123456&quot;,
                    &quot;response&quot;: &quot;&lt;!DOCTYPE html&gt;\n&lt;html&gt;\n    &lt;head&gt;\n        &lt;meta charset=\&quot;UTF-8\&quot; /&gt;\n        &lt;meta http-equiv=\&quot;refresh\&quot; content=\&quot;0;url=&#039;http://localhost:8000/docs&#039;\&quot; /&gt;\n\n        &lt;title&gt;Redirecting to http://localhost:8000/docs&lt;/title&gt;\n    &lt;/head&gt;\n    &lt;body&gt;\n        Redirecting to &lt;a href=\&quot;http://localhost:8000/docs\&quot;&gt;http://localhost:8000/docs&lt;/a&gt;.\n    &lt;/body&gt;\n&lt;/html&gt;&quot;,
                    &quot;message&quot;: &quot;&quot;,
                    &quot;user_username&quot;: &quot;09111111111&quot;,
                    &quot;user_first_name&quot;: &quot;مدیر&quot;,
                    &quot;user_last_name&quot;: &quot;سامانه&quot;
                },
                {
                    &quot;id&quot;: &quot;e0af12f1-b4a3-44a1-a5b2-5a7869b3aae7&quot;,
                    &quot;ip&quot;: &quot;127.0.0.1&quot;,
                    &quot;ulr&quot;: &quot;/docs/login&quot;,
                    &quot;status&quot;: &quot;200&quot;,
                    &quot;method&quot;: &quot;GET&quot;,
                    &quot;user_agent&quot;: &quot;Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:107.0) Gecko/20100101 Firefox/107.0&quot;,
                    &quot;end_status&quot;: &quot;&quot;,
                    &quot;user_agent_client&quot;: &quot;Other&quot;,
                    &quot;created_at&quot;: &quot;2022-11-26T10:34:47.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;token&quot;: null,
                    &quot;request&quot;: &quot;&quot;,
                    &quot;response&quot;: &quot;&lt;html&gt;\n    &lt;head&gt;\n        &lt;title&gt;Docs login&lt;/title&gt;\n        &lt;link href=\&quot;http://localhost:8000/vendor/auth/login.css\&quot; rel=\&quot;stylesheet\&quot;&gt;\n    &lt;/head&gt;\n    &lt;body&gt;\n        &lt;div class=\&quot;wrapper fadeInDown\&quot;&gt;\n          &lt;div id=\&quot;formContent\&quot;&gt;\n            &lt;!-- Tabs Titles --&gt;\n            &lt;h2 class=\&quot;active\&quot;&gt; Sign In &lt;/h2&gt;       \n        \n            &lt;!-- Login Form --&gt;\n            &lt;form action=\&quot;/docs/check\&quot; method=\&quot;POST\&quot;&gt;\n                &lt;input type=\&quot;hidden\&quot; name=\&quot;_token\&quot; value=\&quot;I126yaDO98LeLPdPlBBFf4EnQQrWt9hkBEbDJQgi\&quot;&gt;                &lt;input type=\&quot;text\&quot; id=\&quot;login\&quot; class=\&quot;fadeIn second\&quot; name=\&quot;username\&quot; placeholder=\&quot;user name\&quot;&gt;\n                &lt;input type=\&quot;text\&quot; id=\&quot;password\&quot; class=\&quot;fadeIn third\&quot; name=\&quot;password\&quot; placeholder=\&quot;password\&quot;&gt;\n                &lt;input type=\&quot;submit\&quot; class=\&quot;fadeIn fourth\&quot; value=\&quot;Log In\&quot;&gt;\n            &lt;/form&gt;\n        \n            &lt;!-- Message --&gt;\n                    \n          &lt;/div&gt;\n        &lt;/div&gt;\n    &lt;/body&gt;\n&lt;/html&gt;\n\n&quot;,
                    &quot;message&quot;: &quot;&quot;,
                    &quot;user_username&quot;: null,
                    &quot;user_first_name&quot;: null,
                    &quot;user_last_name&quot;: null
                },
                {
                    &quot;id&quot;: &quot;d26c0330-58bd-4032-9ea5-a18f045ca39d&quot;,
                    &quot;ip&quot;: &quot;127.0.0.1&quot;,
                    &quot;ulr&quot;: &quot;/docs/check&quot;,
                    &quot;status&quot;: &quot;200&quot;,
                    &quot;method&quot;: &quot;POST&quot;,
                    &quot;user_agent&quot;: &quot;Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:107.0) Gecko/20100101 Firefox/107.0&quot;,
                    &quot;end_status&quot;: &quot;500&quot;,
                    &quot;user_agent_client&quot;: &quot;Other&quot;,
                    &quot;created_at&quot;: &quot;2022-11-26T10:34:22.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;token&quot;: null,
                    &quot;request&quot;: &quot;username=09111111111&amp;password=123456&quot;,
                    &quot;response&quot;: &quot;{\&quot;status\&quot;:500,\&quot;error\&quot;:\&quot;\&quot;,\&quot;message\&quot;:\&quot;CSRF token mismatch.\&quot;,\&quot;data\&quot;:[\&quot;CSRF token mismatch.\&quot;,\&quot;\\/home\\/sina\\/workfiles\\/php\\/laravel\\/Test\\/apm-base-laravel\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Http\\/Middleware\\/VerifyCsrfToken.php\&quot;,85,0],\&quot;patch\&quot;:[],\&quot;date\&quot;:\&quot;2022-11-26T10:34:22.377671Z\&quot;}&quot;,
                    &quot;message&quot;: &quot;CSRF token mismatch.&quot;,
                    &quot;user_username&quot;: null,
                    &quot;user_first_name&quot;: null,
                    &quot;user_last_name&quot;: null
                },
                {
                    &quot;id&quot;: &quot;639bae76-dc98-4569-ad48-350bb7636a83&quot;,
                    &quot;ip&quot;: &quot;127.0.0.1&quot;,
                    &quot;ulr&quot;: &quot;/docs/login&quot;,
                    &quot;status&quot;: &quot;200&quot;,
                    &quot;method&quot;: &quot;GET&quot;,
                    &quot;user_agent&quot;: &quot;Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:107.0) Gecko/20100101 Firefox/107.0&quot;,
                    &quot;end_status&quot;: &quot;&quot;,
                    &quot;user_agent_client&quot;: &quot;Other&quot;,
                    &quot;created_at&quot;: &quot;2022-11-26T10:34:19.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;token&quot;: null,
                    &quot;request&quot;: &quot;&quot;,
                    &quot;response&quot;: &quot;&lt;html&gt;\n    &lt;head&gt;\n        &lt;title&gt;Docs login&lt;/title&gt;\n        &lt;link href=\&quot;http://localhost:8000/vendor/auth/login.css\&quot; rel=\&quot;stylesheet\&quot;&gt;\n    &lt;/head&gt;\n    &lt;body&gt;\n        &lt;div class=\&quot;wrapper fadeInDown\&quot;&gt;\n          &lt;div id=\&quot;formContent\&quot;&gt;\n            &lt;!-- Tabs Titles --&gt;\n            &lt;h2 class=\&quot;active\&quot;&gt; Sign In &lt;/h2&gt;       \n        \n            &lt;!-- Login Form --&gt;\n            &lt;form action=\&quot;/docs/check\&quot; method=\&quot;POST\&quot;&gt;\n              &lt;input type=\&quot;text\&quot; id=\&quot;login\&quot; class=\&quot;fadeIn second\&quot; name=\&quot;username\&quot; placeholder=\&quot;user name\&quot;&gt;\n              &lt;input type=\&quot;text\&quot; id=\&quot;password\&quot; class=\&quot;fadeIn third\&quot; name=\&quot;password\&quot; placeholder=\&quot;password\&quot;&gt;\n              &lt;input type=\&quot;submit\&quot; class=\&quot;fadeIn fourth\&quot; value=\&quot;Log In\&quot;&gt;\n            &lt;/form&gt;\n        \n            &lt;!-- Message --&gt;\n                    \n          &lt;/div&gt;\n        &lt;/div&gt;\n    &lt;/body&gt;\n&lt;/html&gt;\n\n&quot;,
                    &quot;message&quot;: &quot;&quot;,
                    &quot;user_username&quot;: null,
                    &quot;user_first_name&quot;: null,
                    &quot;user_last_name&quot;: null
                },
                {
                    &quot;id&quot;: &quot;0a79c004-abe8-4184-9bbf-6dd16305496e&quot;,
                    &quot;ip&quot;: &quot;127.0.0.1&quot;,
                    &quot;ulr&quot;: &quot;/docs/login&quot;,
                    &quot;status&quot;: &quot;200&quot;,
                    &quot;method&quot;: &quot;GET&quot;,
                    &quot;user_agent&quot;: &quot;Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:107.0) Gecko/20100101 Firefox/107.0&quot;,
                    &quot;end_status&quot;: &quot;&quot;,
                    &quot;user_agent_client&quot;: &quot;Other&quot;,
                    &quot;created_at&quot;: &quot;2022-11-26T10:34:18.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;token&quot;: null,
                    &quot;request&quot;: &quot;&quot;,
                    &quot;response&quot;: &quot;&lt;html&gt;\n    &lt;head&gt;\n        &lt;title&gt;Docs login&lt;/title&gt;\n        &lt;link href=\&quot;http://localhost:8000/vendor/auth/login.css\&quot; rel=\&quot;stylesheet\&quot;&gt;\n    &lt;/head&gt;\n    &lt;body&gt;\n        &lt;div class=\&quot;wrapper fadeInDown\&quot;&gt;\n          &lt;div id=\&quot;formContent\&quot;&gt;\n            &lt;!-- Tabs Titles --&gt;\n            &lt;h2 class=\&quot;active\&quot;&gt; Sign In &lt;/h2&gt;       \n        \n            &lt;!-- Login Form --&gt;\n            &lt;form action=\&quot;/docs/check\&quot; method=\&quot;POST\&quot;&gt;\n              &lt;input type=\&quot;text\&quot; id=\&quot;login\&quot; class=\&quot;fadeIn second\&quot; name=\&quot;username\&quot; placeholder=\&quot;user name\&quot;&gt;\n              &lt;input type=\&quot;text\&quot; id=\&quot;password\&quot; class=\&quot;fadeIn third\&quot; name=\&quot;password\&quot; placeholder=\&quot;password\&quot;&gt;\n              &lt;input type=\&quot;submit\&quot; class=\&quot;fadeIn fourth\&quot; value=\&quot;Log In\&quot;&gt;\n            &lt;/form&gt;\n        \n            &lt;!-- Message --&gt;\n                    \n          &lt;/div&gt;\n        &lt;/div&gt;\n    &lt;/body&gt;\n&lt;/html&gt;\n\n&quot;,
                    &quot;message&quot;: &quot;&quot;,
                    &quot;user_username&quot;: null,
                    &quot;user_first_name&quot;: null,
                    &quot;user_last_name&quot;: null
                },
                {
                    &quot;id&quot;: &quot;839f27a1-56bc-4a90-b1f1-01ea20ad3096&quot;,
                    &quot;ip&quot;: &quot;127.0.0.1&quot;,
                    &quot;ulr&quot;: &quot;/docs/login&quot;,
                    &quot;status&quot;: &quot;200&quot;,
                    &quot;method&quot;: &quot;POST&quot;,
                    &quot;user_agent&quot;: &quot;Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:107.0) Gecko/20100101 Firefox/107.0&quot;,
                    &quot;end_status&quot;: &quot;500&quot;,
                    &quot;user_agent_client&quot;: &quot;Other&quot;,
                    &quot;created_at&quot;: &quot;2022-11-26T10:33:46.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;token&quot;: null,
                    &quot;request&quot;: &quot;username=09111111111&amp;password=123456&quot;,
                    &quot;response&quot;: &quot;{\&quot;status\&quot;:500,\&quot;error\&quot;:\&quot;\&quot;,\&quot;message\&quot;:\&quot;The POST method is not supported for this route. Supported methods: GET, HEAD.\&quot;,\&quot;data\&quot;:[\&quot;The POST method is not supported for this route. Supported methods: GET, HEAD.\&quot;,\&quot;\\/home\\/sina\\/workfiles\\/php\\/laravel\\/Test\\/apm-base-laravel\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Routing\\/AbstractRouteCollection.php\&quot;,118,0],\&quot;patch\&quot;:[],\&quot;date\&quot;:\&quot;2022-11-26T10:33:46.289363Z\&quot;}&quot;,
                    &quot;message&quot;: &quot;The POST method is not supported for this route. Supported methods: GET, HEAD.&quot;,
                    &quot;user_username&quot;: null,
                    &quot;user_first_name&quot;: null,
                    &quot;user_last_name&quot;: null
                },
                {
                    &quot;id&quot;: &quot;a9fa9bc8-d419-498a-809a-a54c6ca93c5b&quot;,
                    &quot;ip&quot;: &quot;127.0.0.1&quot;,
                    &quot;ulr&quot;: &quot;/docs/login&quot;,
                    &quot;status&quot;: &quot;200&quot;,
                    &quot;method&quot;: &quot;GET&quot;,
                    &quot;user_agent&quot;: &quot;Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:107.0) Gecko/20100101 Firefox/107.0&quot;,
                    &quot;end_status&quot;: &quot;&quot;,
                    &quot;user_agent_client&quot;: &quot;Other&quot;,
                    &quot;created_at&quot;: &quot;2022-11-26T10:33:43.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;token&quot;: null,
                    &quot;request&quot;: &quot;&quot;,
                    &quot;response&quot;: &quot;&lt;html&gt;\n    &lt;head&gt;\n        &lt;title&gt;Docs login&lt;/title&gt;\n        &lt;link href=\&quot;http://localhost:8000/vendor/auth/login.css\&quot; rel=\&quot;stylesheet\&quot;&gt;\n    &lt;/head&gt;\n    &lt;body&gt;\n        &lt;div class=\&quot;wrapper fadeInDown\&quot;&gt;\n          &lt;div id=\&quot;formContent\&quot;&gt;\n            &lt;!-- Tabs Titles --&gt;\n            &lt;h2 class=\&quot;active\&quot;&gt; Sign In &lt;/h2&gt;       \n        \n            &lt;!-- Login Form --&gt;\n            &lt;form action=\&quot;/docs/login\&quot; method=\&quot;POST\&quot;&gt;\n              &lt;input type=\&quot;text\&quot; id=\&quot;login\&quot; class=\&quot;fadeIn second\&quot; name=\&quot;username\&quot; placeholder=\&quot;user name\&quot;&gt;\n              &lt;input type=\&quot;text\&quot; id=\&quot;password\&quot; class=\&quot;fadeIn third\&quot; name=\&quot;password\&quot; placeholder=\&quot;password\&quot;&gt;\n              &lt;input type=\&quot;submit\&quot; class=\&quot;fadeIn fourth\&quot; value=\&quot;Log In\&quot;&gt;\n            &lt;/form&gt;\n        \n            &lt;!-- Message --&gt;\n                    \n          &lt;/div&gt;\n        &lt;/div&gt;\n    &lt;/body&gt;\n&lt;/html&gt;\n\n&quot;,
                    &quot;message&quot;: &quot;&quot;,
                    &quot;user_username&quot;: null,
                    &quot;user_first_name&quot;: null,
                    &quot;user_last_name&quot;: null
                },
                {
                    &quot;id&quot;: &quot;84321e5e-e1bb-48c6-a470-5c516b61c290&quot;,
                    &quot;ip&quot;: &quot;127.0.0.1&quot;,
                    &quot;ulr&quot;: &quot;/auth/login&quot;,
                    &quot;status&quot;: &quot;200&quot;,
                    &quot;method&quot;: &quot;POST&quot;,
                    &quot;user_agent&quot;: &quot;Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:107.0) Gecko/20100101 Firefox/107.0&quot;,
                    &quot;end_status&quot;: &quot;500&quot;,
                    &quot;user_agent_client&quot;: &quot;Other&quot;,
                    &quot;created_at&quot;: &quot;2022-11-26T10:33:24.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;token&quot;: null,
                    &quot;request&quot;: &quot;username=09111111111&amp;password=123456&quot;,
                    &quot;response&quot;: &quot;{\&quot;status\&quot;:500,\&quot;error\&quot;:\&quot;\&quot;,\&quot;message\&quot;:\&quot;\&quot;,\&quot;data\&quot;:[\&quot;\&quot;,\&quot;\\/home\\/sina\\/workfiles\\/php\\/laravel\\/Test\\/apm-base-laravel\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Routing\\/AbstractRouteCollection.php\&quot;,44,0],\&quot;patch\&quot;:[],\&quot;date\&quot;:\&quot;2022-11-26T10:33:24.114574Z\&quot;}&quot;,
                    &quot;message&quot;: &quot;&quot;,
                    &quot;user_username&quot;: null,
                    &quot;user_first_name&quot;: null,
                    &quot;user_last_name&quot;: null
                }
            ],
            &quot;first_page_url&quot;: &quot;http://localhost:8000/api/v1/request-log?page=1&quot;,
            &quot;from&quot;: 1,
            &quot;last_page&quot;: 3,
            &quot;last_page_url&quot;: &quot;http://localhost:8000/api/v1/request-log?page=3&quot;,
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
                    &quot;url&quot;: &quot;http://localhost:8000/api/v1/request-log?page=2&quot;,
                    &quot;label&quot;: &quot;2&quot;,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost:8000/api/v1/request-log?page=3&quot;,
                    &quot;label&quot;: &quot;3&quot;,
                    &quot;active&quot;: false
                },
                {
                    &quot;url&quot;: &quot;http://localhost:8000/api/v1/request-log?page=2&quot;,
                    &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                    &quot;active&quot;: false
                }
            ],
            &quot;next_page_url&quot;: &quot;http://localhost:8000/api/v1/request-log?page=2&quot;,
            &quot;path&quot;: &quot;http://localhost:8000/api/v1/request-log&quot;,
            &quot;per_page&quot;: 20,
            &quot;prev_page_url&quot;: null,
            &quot;to&quot;: 20,
            &quot;total&quot;: 49
        }
    },
    &quot;patch&quot;: [],
    &quot;date&quot;: &quot;2022-11-27T05:32:23.354634Z&quot;
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
                    &quot;id&quot;: &quot;554d2355-bc3f-40e3-b52c-059b6fcbc73a&quot;,
                    &quot;line&quot;: &quot;15&quot;,
                    &quot;code&quot;: &quot;0&quot;,
                    &quot;file&quot;: &quot;/home/sina/workfiles/php/laravel/Test/apm-base-laravel/app/Http/Middleware/DocsLogin.php&quot;,
                    &quot;message&quot;: &quot;\&quot;Attempt to read property \\\&quot;id\\\&quot; on null\&quot;&quot;,
                    &quot;status&quot;: &quot;No http status error&quot;,
                    &quot;user_agent_client&quot;: null,
                    &quot;created_at&quot;: &quot;2022-11-26T10:39:42.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;user_username&quot;: null,
                    &quot;user_first_name&quot;: null,
                    &quot;user_last_name&quot;: null
                },
                {
                    &quot;id&quot;: &quot;65dd69f8-6b46-43f3-8ec5-a592d13ced5f&quot;,
                    &quot;line&quot;: &quot;85&quot;,
                    &quot;code&quot;: &quot;0&quot;,
                    &quot;file&quot;: &quot;/home/sina/workfiles/php/laravel/Test/apm-base-laravel/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/VerifyCsrfToken.php&quot;,
                    &quot;message&quot;: &quot;\&quot;CSRF token mismatch.\&quot;&quot;,
                    &quot;status&quot;: &quot;No http status error&quot;,
                    &quot;user_agent_client&quot;: null,
                    &quot;created_at&quot;: &quot;2022-11-26T10:34:22.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;user_username&quot;: null,
                    &quot;user_first_name&quot;: null,
                    &quot;user_last_name&quot;: null
                },
                {
                    &quot;id&quot;: &quot;53c236b1-0e3d-4752-9320-3b203fce68cc&quot;,
                    &quot;line&quot;: &quot;118&quot;,
                    &quot;code&quot;: &quot;0&quot;,
                    &quot;file&quot;: &quot;/home/sina/workfiles/php/laravel/Test/apm-base-laravel/vendor/laravel/framework/src/Illuminate/Routing/AbstractRouteCollection.php&quot;,
                    &quot;message&quot;: &quot;\&quot;The POST method is not supported for this route. Supported methods: GET, HEAD.\&quot;&quot;,
                    &quot;status&quot;: &quot;405&quot;,
                    &quot;user_agent_client&quot;: null,
                    &quot;created_at&quot;: &quot;2022-11-26T10:33:46.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;user_username&quot;: null,
                    &quot;user_first_name&quot;: null,
                    &quot;user_last_name&quot;: null
                },
                {
                    &quot;id&quot;: &quot;d0cefb21-75b3-4abb-99ae-7f16ebba4bcd&quot;,
                    &quot;line&quot;: &quot;44&quot;,
                    &quot;code&quot;: &quot;0&quot;,
                    &quot;file&quot;: &quot;/home/sina/workfiles/php/laravel/Test/apm-base-laravel/vendor/laravel/framework/src/Illuminate/Routing/AbstractRouteCollection.php&quot;,
                    &quot;message&quot;: &quot;\&quot;\&quot;&quot;,
                    &quot;status&quot;: &quot;404&quot;,
                    &quot;user_agent_client&quot;: null,
                    &quot;created_at&quot;: &quot;2022-11-26T10:33:24.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;user_username&quot;: null,
                    &quot;user_first_name&quot;: null,
                    &quot;user_last_name&quot;: null
                },
                {
                    &quot;id&quot;: &quot;3cde66e2-21f4-456d-8dfc-2ebc22170f76&quot;,
                    &quot;line&quot;: &quot;44&quot;,
                    &quot;code&quot;: &quot;0&quot;,
                    &quot;file&quot;: &quot;/home/sina/workfiles/php/laravel/Test/apm-base-laravel/vendor/laravel/framework/src/Illuminate/Routing/AbstractRouteCollection.php&quot;,
                    &quot;message&quot;: &quot;\&quot;\&quot;&quot;,
                    &quot;status&quot;: &quot;404&quot;,
                    &quot;user_agent_client&quot;: null,
                    &quot;created_at&quot;: &quot;2022-11-26T10:32:44.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;user_username&quot;: null,
                    &quot;user_first_name&quot;: null,
                    &quot;user_last_name&quot;: null
                },
                {
                    &quot;id&quot;: &quot;3d092fef-6154-4831-8bf9-9069bb128c2f&quot;,
                    &quot;line&quot;: &quot;21&quot;,
                    &quot;code&quot;: &quot;0&quot;,
                    &quot;file&quot;: &quot;/home/sina/workfiles/php/laravel/Test/apm-base-laravel/storage/framework/views/b83142a24bb9763dd32713aa271f11853bfda54e.php&quot;,
                    &quot;message&quot;: &quot;\&quot;Undefined variable $message (View: \\/home\\/sina\\/workfiles\\/php\\/laravel\\/Test\\/apm-base-laravel\\/resources\\/views\\/auth\\/login.blade.php)\&quot;&quot;,
                    &quot;status&quot;: &quot;No http status error&quot;,
                    &quot;user_agent_client&quot;: null,
                    &quot;created_at&quot;: &quot;2022-11-26T10:23:45.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;user_username&quot;: null,
                    &quot;user_first_name&quot;: null,
                    &quot;user_last_name&quot;: null
                },
                {
                    &quot;id&quot;: &quot;91bd3a7a-cbce-4e2b-babf-c9b3b61b8914&quot;,
                    &quot;line&quot;: &quot;21&quot;,
                    &quot;code&quot;: &quot;0&quot;,
                    &quot;file&quot;: &quot;/home/sina/workfiles/php/laravel/Test/apm-base-laravel/storage/framework/views/b83142a24bb9763dd32713aa271f11853bfda54e.php&quot;,
                    &quot;message&quot;: &quot;\&quot;Undefined variable $message (View: \\/home\\/sina\\/workfiles\\/php\\/laravel\\/Test\\/apm-base-laravel\\/resources\\/views\\/auth\\/login.blade.php)\&quot;&quot;,
                    &quot;status&quot;: &quot;No http status error&quot;,
                    &quot;user_agent_client&quot;: null,
                    &quot;created_at&quot;: &quot;2022-11-26T10:23:43.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;user_username&quot;: null,
                    &quot;user_first_name&quot;: null,
                    &quot;user_last_name&quot;: null
                },
                {
                    &quot;id&quot;: &quot;835e5540-6250-41a9-8ae9-69195af7b9b9&quot;,
                    &quot;line&quot;: &quot;44&quot;,
                    &quot;code&quot;: &quot;0&quot;,
                    &quot;file&quot;: &quot;/home/sina/workfiles/php/laravel/Test/apm-base-laravel/vendor/laravel/framework/src/Illuminate/Routing/AbstractRouteCollection.php&quot;,
                    &quot;message&quot;: &quot;\&quot;\&quot;&quot;,
                    &quot;status&quot;: &quot;404&quot;,
                    &quot;user_agent_client&quot;: null,
                    &quot;created_at&quot;: &quot;2022-11-26T10:23:18.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;user_username&quot;: null,
                    &quot;user_first_name&quot;: null,
                    &quot;user_last_name&quot;: null
                },
                {
                    &quot;id&quot;: &quot;3789c9e3-ae4b-4ebf-a193-f831724e2262&quot;,
                    &quot;line&quot;: &quot;877&quot;,
                    &quot;code&quot;: &quot;0&quot;,
                    &quot;file&quot;: &quot;/home/sina/workfiles/php/laravel/Test/apm-base-laravel/vendor/laravel/framework/src/Illuminate/Container/Container.php&quot;,
                    &quot;message&quot;: &quot;\&quot;Target class [App\\\\Http\\\\Controllers\\\\DocsController] does not exist.\&quot;&quot;,
                    &quot;status&quot;: &quot;No http status error&quot;,
                    &quot;user_agent_client&quot;: null,
                    &quot;created_at&quot;: &quot;2022-11-26T10:22:08.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;user_username&quot;: null,
                    &quot;user_first_name&quot;: null,
                    &quot;user_last_name&quot;: null
                },
                {
                    &quot;id&quot;: &quot;09c4cdf2-356d-4767-b53d-c484e982eeea&quot;,
                    &quot;line&quot;: &quot;44&quot;,
                    &quot;code&quot;: &quot;0&quot;,
                    &quot;file&quot;: &quot;/home/sina/workfiles/php/laravel/Test/apm-base-laravel/vendor/laravel/framework/src/Illuminate/Routing/AbstractRouteCollection.php&quot;,
                    &quot;message&quot;: &quot;\&quot;\&quot;&quot;,
                    &quot;status&quot;: &quot;404&quot;,
                    &quot;user_agent_client&quot;: null,
                    &quot;created_at&quot;: &quot;2022-11-26T10:20:09.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;user_username&quot;: null,
                    &quot;user_first_name&quot;: null,
                    &quot;user_last_name&quot;: null
                },
                {
                    &quot;id&quot;: &quot;614163bf-50c2-48ed-9873-dc2e147f44be&quot;,
                    &quot;line&quot;: &quot;44&quot;,
                    &quot;code&quot;: &quot;0&quot;,
                    &quot;file&quot;: &quot;/home/sina/workfiles/php/laravel/Test/apm-base-laravel/vendor/laravel/framework/src/Illuminate/Routing/AbstractRouteCollection.php&quot;,
                    &quot;message&quot;: &quot;\&quot;\&quot;&quot;,
                    &quot;status&quot;: &quot;404&quot;,
                    &quot;user_agent_client&quot;: null,
                    &quot;created_at&quot;: &quot;2022-11-26T10:19:02.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;user_username&quot;: null,
                    &quot;user_first_name&quot;: null,
                    &quot;user_last_name&quot;: null
                },
                {
                    &quot;id&quot;: &quot;74b38fea-c5b0-40b7-b46d-5fb3fa4fa465&quot;,
                    &quot;line&quot;: &quot;118&quot;,
                    &quot;code&quot;: &quot;0&quot;,
                    &quot;file&quot;: &quot;/home/sina/workfiles/php/laravel/Test/apm-base-laravel/vendor/laravel/framework/src/Illuminate/Routing/AbstractRouteCollection.php&quot;,
                    &quot;message&quot;: &quot;\&quot;The GET method is not supported for this route. Supported methods: POST.\&quot;&quot;,
                    &quot;status&quot;: &quot;405&quot;,
                    &quot;user_agent_client&quot;: null,
                    &quot;created_at&quot;: &quot;2022-11-26T10:16:17.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;user_username&quot;: null,
                    &quot;user_first_name&quot;: null,
                    &quot;user_last_name&quot;: null
                },
                {
                    &quot;id&quot;: &quot;c19b22dc-4b27-4763-85ea-098c1d1134df&quot;,
                    &quot;line&quot;: &quot;118&quot;,
                    &quot;code&quot;: &quot;0&quot;,
                    &quot;file&quot;: &quot;/home/sina/workfiles/php/laravel/Test/apm-base-laravel/vendor/laravel/framework/src/Illuminate/Routing/AbstractRouteCollection.php&quot;,
                    &quot;message&quot;: &quot;\&quot;The GET method is not supported for this route. Supported methods: POST.\&quot;&quot;,
                    &quot;status&quot;: &quot;405&quot;,
                    &quot;user_agent_client&quot;: null,
                    &quot;created_at&quot;: &quot;2022-11-26T10:15:18.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;user_username&quot;: null,
                    &quot;user_first_name&quot;: null,
                    &quot;user_last_name&quot;: null
                },
                {
                    &quot;id&quot;: &quot;b48fa7c5-d349-48d9-8ff6-f3d0e6be4cb8&quot;,
                    &quot;line&quot;: &quot;44&quot;,
                    &quot;code&quot;: &quot;0&quot;,
                    &quot;file&quot;: &quot;/home/sina/workfiles/php/laravel/Test/apm-base-laravel/vendor/laravel/framework/src/Illuminate/Routing/AbstractRouteCollection.php&quot;,
                    &quot;message&quot;: &quot;\&quot;\&quot;&quot;,
                    &quot;status&quot;: &quot;404&quot;,
                    &quot;user_agent_client&quot;: null,
                    &quot;created_at&quot;: &quot;2022-11-26T09:59:53.000000Z&quot;,
                    &quot;sort&quot;: 9999,
                    &quot;user_username&quot;: null,
                    &quot;user_first_name&quot;: null,
                    &quot;user_last_name&quot;: null
                },
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
            &quot;to&quot;: 15,
            &quot;total&quot;: 15
        }
    },
    &quot;patch&quot;: [],
    &quot;date&quot;: &quot;2022-11-27T05:32:23.368683Z&quot;
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
    &quot;date&quot;: &quot;2022-11-27T05:32:23.386062Z&quot;
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
    &quot;date&quot;: &quot;2022-11-27T05:32:23.408158Z&quot;
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
    &quot;date&quot;: &quot;2022-11-27T05:32:23.419606Z&quot;
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
    &quot;date&quot;: &quot;2022-11-27T05:32:23.429476Z&quot;
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
    &quot;date&quot;: &quot;2022-11-27T05:32:23.439574Z&quot;
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
    &quot;date&quot;: &quot;2022-11-27T05:32:23.449529Z&quot;
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
    &quot;date&quot;: &quot;2022-11-27T05:32:23.461752Z&quot;
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
    &quot;date&quot;: &quot;2022-11-27T05:32:23.471780Z&quot;
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
    &quot;date&quot;: &quot;2022-11-27T05:32:23.482454Z&quot;
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
    &quot;date&quot;: &quot;2022-11-27T05:32:23.506963Z&quot;
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
    &quot;date&quot;: &quot;2022-11-27T05:32:23.522075Z&quot;
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
    &quot;date&quot;: &quot;2022-11-27T05:32:23.540207Z&quot;
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
    &quot;date&quot;: &quot;2022-11-27T05:32:23.550619Z&quot;
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
    &quot;date&quot;: &quot;2022-11-27T05:32:23.562113Z&quot;
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
    &quot;date&quot;: &quot;2022-11-27T05:32:23.574906Z&quot;
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
    &quot;date&quot;: &quot;2022-11-27T05:32:23.597696Z&quot;
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
    &quot;date&quot;: &quot;2022-11-27T05:32:23.619986Z&quot;
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
    &quot;date&quot;: &quot;2022-11-27T05:32:23.640654Z&quot;
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
    &quot;date&quot;: &quot;2022-11-27T05:32:23.652882Z&quot;
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
    &quot;date&quot;: &quot;2022-11-27T05:32:23.664380Z&quot;
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
