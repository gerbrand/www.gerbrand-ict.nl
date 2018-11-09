---
layout: "post"
title: "Using Swagger to access your secured api"
date: "2017-04-18 21:01"
---

Swagger, http://swagger.io/ is a great way make your api accessible. Not only documentation is provided, but your users, your co-developers or your self can try out your api. But what if your API is secured using a token based security system like webtokens?

Well, it's quite easy to modify your swagger frontend to allow adding any token to requests.

First somewhere in your swagger template file, add the following:
```
            <form onsubmit="addApiKeyAuthorization()">
                <div class="input">
                    <input placeholder="access_token" id="input_apiKey" name="input_apiKey" type="text">
                    <input type="submit" value="Authenticate"/>
                </div>
            </form>
```

Then in the header add the following Javascript 

```
<script>
    function addApiKeyAuthorization(){
        var apiKey = getUrlVars().input_apiKey;

        if (apiKey && apiKey.trim() != "") {
            console.log("initialzing oauth via api-key")
            var apiKeyAuth = new SwaggerClient.ApiKeyAuthorization("Authorization", "Bearer " + apiKey, "header");
            window.swaggerUi.api.clientAuthorizations.add("bearer", apiKeyAuth );
            //For clarity, also add in the input field
            $('#input_apiKey')[0].value=apiKey
        }
    }

</script>

```
